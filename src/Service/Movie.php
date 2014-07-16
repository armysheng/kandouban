<?php
namespace Service;

class Movie {
    public function __construct() {
        $this->client = new CustMongoDB();
        $this->db = $this->client->douban();
        $this->allow_cmd_keys = array(
            "name", "subject_id", "year", "directors",
            "actors", "languages", "genres",
            "runtime", "channel", "average", "vote",
            "tags", "watched", "wish", "comment", "question",
            "review", "discussion", "image", "countries",
            '$gte', '$lte', '$lt', '$gt', '$in', '$all',
        );
    }

    public function store() {
        $data = array(
            "title" => "豆瓣影库 - ".SITENAME,
        );

        try{
            if (isset($_GET["p"]) and $page=(int)$_GET["p"]) {
                //do nothing
            }else {
                $page = 1;
            }

            if (isset($_GET["cmd"]) and ($command = $_GET["cmd"])) {
                $cmd = preg_split("/\}\.\{/", $command);
                if (count($cmd) != 2) {
                    throw new \Exceptions\CommandException(CMD_ERR);
                }
                $spec = json_decode( $cmd[0]."}", true );
                $sort = json_decode( "{".$cmd[1], true );

                if ($sort === NULL or $spec === NULL) {
                    throw new \Exceptions\CommandException(CMD_ERR);
                }
            } else {
                $spec = array(
                    "average" => array('$gte' => 9.0),
                );
                $sort = array(
                    "average" => -1,
                    "vote" => -1,
                );
                $command = "";
            }

            if ( array_diff(\Misc\Functions::recursive_keys($spec), $this->allow_cmd_keys)
                    or array_diff(\Misc\Functions::recursive_keys($sort), $this->allow_cmd_keys) ) {
                throw new \Exceptions\CommandException(HAS_ERR_KEYS);
            }

            try{
                $docs = $this->db->movie->find($spec)->sort($sort)
                        ->skip(($page-1)*MV_PLIMIT)
                        ->limit(MV_PLIMIT);
                $total = $this->db->movie->find($spec)->count();
                $pages = ceil($total/MV_PLIMIT);
            }catch(MongoException $e) {
                throw new \Exceptions\CommandException(CMD_ERR);
            }

            $data = array_merge($data, array(
                "docs" => $docs,
                "page" => $page,
                "pages" => $pages,
                "limit" => MV_PLIMIT,
                "command" => $command,
            ));
        }catch(\Exceptions\CommandException $e) {
            $data = array_merge($data, array(
                "error" => $e->getMessage(),
                "command" => $command,
            ));
        }
        \Flight::view()->display("movie-list.html", $data);
    }
}