# mediawiki

## deploy

```
mkdir mysql/db_data
mkdir mediawiki/images
```

```
docker-compose up -d
```


```
download LocalSettings.php
cat mediawiki/LocalSettings.php >> LocalSettings.php
mv LocalSettings.php mediawiki/images/
```

```
docker exec -it {mediawiki_docker} bash
chown -R www-data:www-data /var/www/html/w/images/
mv /var/www/html/w/images/LocalSettings.php /var/www/html/w/LocalSettings.php
```

## edit css style for common

http://10.0.20.29:8080/wiki/MediaWiki:Common.css
