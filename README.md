# PHP设计模式代码实现及测试

代码实现均在`Yjc`目录，测试代码在`App`里。

本库是学习PHP设计模式所写的测试代码。核心代码均在`Yjc`目录里。为了测试方便，其实已经完成了简单的MVC框架的封装。

大家可以按照下面的文档进行测试，然后看代码实现。本人水平有限，欢迎提出修改建议。

## 设计模式

### [简介](docs/intro.md)
### [创建模式](docs/creational_patterns.md)
- [工厂模式](docs/creational_patterns/factory.md)
- [抽象工厂](docs/creational_patterns/factory.md)
- [单例模式](docs/creational_patterns/factory.md)
- [注册树模式](docs/creational_patterns/factory.md)
- [原型模式](docs/creational_patterns/factory.md)
- [构造模式](docs/creational_patterns/factory.md)
### [架构模式](docs/structural_patterns.md)
- [装饰器模式](docs/structural_patterns/decorator.md)
- [适配器模式](docs/structural_patterns/adapter.md)
- [代理模式](docs/structural_patterns/proxy.md)
### [行为模式](docs/behavioral_patterns.md)
- [策略模式](docs/behavioral_patterns/strategy.md)
- [观察者模式](docs/behavioral_patterns/observer.md)
- [迭代器模式](docs/behavioral_patterns/observer.md)
- [责任链模式](docs/behavioral_patterns/observer.md)

## 开始测试

需要有运行环境。使用PHP7的同学可以直接使用下面的方法开启Server，免去安装Nginx+PHP环境烦扰。

### 开启server
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