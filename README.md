# PHP设计模式代码实现及测试

代码实现均在`Yjc`目录，测试代码在`App`里。

本库是学习PHP设计模式所写的测试代码。核心代码均在`Yjc`目录里。为了测试方便，其实已经完成了简单的MVC框架的封装。

大家可以按照下面的文档进行测试，然后看代码实现。本人水平有限，欢迎提出修改建议。

## 设计模式
![](http://images2015.cnblogs.com/blog/663847/201706/663847-20170624154459632-345927443.png)


## 开启server
```
php -S 0.0.0.0:8888
```
浏览器输入：http://localhost:8888

## 设计模式测试

### 工厂模式

普通模式：
/FactoryTest/index  

示例：  
URL路径：http://localhost:8888/FactoryTest/index  
对应文件：App/FactoryTest  

工厂模式：
/FactoryTest/factory

### 单例模式
/FactoryTest/factory2

### 注册树模式
/RegisterTest/index

### 适配器模式
/AdapterTest/index  
AdapterTest/index2

### 策略模式
/StrategyTest/index

### 装饰器模式
/DecoratorTest/index