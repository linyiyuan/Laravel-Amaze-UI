# Laravel-Amaze-UI

	该项目基于Laravel 5.5开发
	默认账号：admin@admin.com
	默认密码：admin@admin.com
	
## 业务功能
- 权限认证
- 登录验证
- 系统信息
- 操作日志
	
### 服务器配置拓展

	PHP >= 7.0,支持php7
	OpenSSL PHP Extension
	PDO PHP Extension
	Mbstring PHP Extension
	Tokenizer PHP Extension
	mcrypt PHP Extension
	Redis PHP Extension
	Swoole PHP Extension

### 安装
	1.git clone git@github.com:linyiyuan/Laravel-Amaze-UI.git
	2.composer install 或者 composer install --ignore-platform-reqs
	3.复制.env.example 到 .env 修改根目录下的.env文件 配置数据库
	4.将.env 的APP_ENV设置为production
	4.执行 php artisan key:generate , 生成随机 key
	5.执行 php artisan migrate --seed , 导入表结构和数据内容
	6.配置 nginx , 指向目录 public
	7.设置 storage 和 bootstrap/cache  可写权限
	8.php artisan storage:link 创建一个软连接
	9.完事大吉

### nginx配置
	
    server {
    listen 8888;
    server_name web.blog.com;
    root /Library/WebServer/Documents/Laravel-Amaze-UI/laravel/public;
    index index.php index.html index.htm;
    
		 location / {
		        #add_header 'Access-Control-Allow-Origin' 'http://manager2.web';
		         if (!-e $request_filename){
		            rewrite  ^/(.*)$  /index.php?s=$1  last;
		        }
		   }
		   location /obs/ {
		        index obs.php;
		        rewrite ^/obs/(.*)$ /obs.php?s=/obs/$1 last;
		   }
		   location /guild/ {
		       index guild.php;
		       rewrite ^/guild/(.*)$ /guild.php?s=/guild/$1 last;
		   }


		    # pass the PHP scripts to FastCGI server listening on 127.0.0.1:9000
		    location ~ \.php$ {
		        #include snippets/fastcgi-php.conf;

			root /Library/WebServer/Documents/Laravel-Amaze-UI/laravel/public;
		        # With php7.0-cgi alone:
		        fastcgi_pass 127.0.0.1:9000;
			proxy_read_timeout 300;
		        fastcgi_read_timeout 600;
		        ## With php7.0-fpm:
		        #fastcgi_pass unix:/run/php/php7.0-fpm.sock;
			fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
			include        fastcgi_params;
		    }

		    location ~ /\.ht {
		        deny all;
		    }
		}
