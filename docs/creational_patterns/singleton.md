### 单例模式

单例模式(Singleton)相比工厂模式，实现了运行过程中一个类只实例化一次，减少性能开销。

示例：我们新建DbSingleton类：
``` php
<?php
namespace Yjc;

class DbSingleton extends Db
{
    private static $db = null;

    /**
     * 单例工厂模式
     */
    public static function getInstance(){
        if(self::$db === null){
            self::$db = new Db();
        }
        return self::$db;
    }

    /**禁止使用构造函数*/
    private function __construct() {}

    /**禁止克隆*/
    private function __clone() {}
}
```

测试：
``` php
$db = DbSingleton::getInstance();
$db->query();
var_dump($db);

$db2 = DbSingleton::getInstance();
$db->exec();
var_dump($db2);
```
输出：
```
query
object(Yjc\Db)#2 (0) {
}
exec
object(Yjc\Db)#2 (0) {
}
```
从对象ID可以看出，实例化出来的是同一个对象。数据库类、缓存类非常适合使用单例模式，减少不必要的连接。