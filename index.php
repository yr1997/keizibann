<?
echo 'php掲示板のテストです。<br>';
$dbinfo = parse_url(getenv('DATABASE_URL'));
$dsn = 'pgsql:host=ec2-107-20-185-27.compute-1.amazonaws.com . $dbinfo['host'] . ';dbname=d22ck7lhd3f5jh' . substr($dbinfo['path'], 1);
$pdo = new PDO($dsn, $dbinfo['user'], $dbinfo['pass']);
var_dump($pdo->getAttribute(PDO::ATTR_SERVER_VERSION));
phpinfo();
?>
