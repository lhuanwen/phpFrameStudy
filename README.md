# phpFrameStudy

xampp 下配置虚拟主机

- 打开 C:\Windows\System32\drivers\etc\hosts

   在该文件底部添加以下代码并保存：

   `127.0.0.1  project.l.com`

- 编辑 E:\xampp\apache\conf\httpd.conf

   在该文件最底部添加：

   <VirtualHost *:80>  
   &nbsp;&nbsp;ServerName project.l.com  
   &nbsp;&nbsp;DocumentRoot "E:/XAMPP/htdocs/phpFrameStudy"  
   <\/VirtualHost>

- 重启 apache 服务
----