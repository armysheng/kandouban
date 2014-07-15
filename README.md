#kandouban

给你另一双眼睛，看另一面豆瓣

###搭建运行环境
1. 安装MongoDB
2. 安装Nginx
3. 安装php-fpm
4. 安装连接到 MongoDB的PHP扩展库MongoClient
5. 安装composer

###安装相关依赖
1. 进入项目主目录
2. 执行composer install

###加入类似以下配置到Nginx配置文件中
    server {
        set $rootdir /var/www/kandou;
        set $file /app.php;
        listen 192.168.71.2;
        server_name domain.com;
        root $rootdir;

        location /static {
            root $rootdir;
        }   
        location / { 
            try_files $uri $uri/ $file;
            include fastcgi.conf;
            fastcgi_pass 127.0.0.1:9000;
            fastcgi_param SCRIPT_FILENAME $rootdir$file;
        }   

        access_log /var/log/nginx/domain.com.access_log main;
        error_log /var/log/nginx/domain.com.error_log info;
    }   


###豆瓣电影数据来源
1. 编写爬虫并入库到MongoDB，库名douban

###文档格式如下
    {
        "actors" : [
            "邓超",
            "杨幂",
            "古力娜扎",
            "栾元晖",
            "秦越",
            "许可嘉",
            "梁超",
            "赵曼竹",
            "孙俪",
            "柳岩",
            "谢楠"
        ],
        "average" : 5.6,
        "channel" : "mv",
        "comment" : 42167,
        "countries" : [
            "中国大陆"
        ],
        "directors" : [
            "俞白眉",
            "邓超"
        ],
        "discussion" : 19,
        "genres" : [
            "剧情",
            "喜剧",
            "爱情"
        ],
        "image" : 550,
        "languages" : [
            "汉语普通话"
        ],
        "name" : "分手大师",
        "question" : 41,
        "review" : 393,
        "runtime" : 116,
        "stars" : [
            4761,
            11904,
            26732,
            15237,
            9387
        ],
        "subject_id" : 24879858,
        "summary" : "电影简介",
        "tags" : [
            "爱情",
            "2014",
            "中国电影",
            "孙俪",
            "喜剧",
            "中国",
            "国产电影",
            "杨幂"
        ],
        "vote" : 68021,
        "watched" : 74502,
        "wish" : 12732,
        "year" : 2014
    }

###在线演示网站
[看豆瓣](http://kandou.phpor.me)
