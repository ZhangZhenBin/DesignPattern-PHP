# DesignPattern-PHP
# 23种设计模式简单的实现

# 内聚：块内联系
# 耦合：块间联系
# 总结面向对象实际上就两句话:一是松耦合(Coupling),二是高内聚(Cohesion)。
# 面向对象系统追求的目标就是尽可能地提高系统模块内部的内聚(Cohesion)、尽可能降低模 块间的耦合(Coupling)。

spl_autoload_register(function ($class) {
    require dirname(__FILE__).DIRECTORY_SEPARATOR.str_replace('\\',DIRECTORY_SEPARATOR,$class).'.php';
});

# 简单工厂
#$simpleFactory = new \create\SimpleFactory\Factory();
#($simpleFactory->createProduct(0))->send();
#($simpleFactory->createProduct(1))->send();

# 工厂方法
$factoryProduct01 = (new \create\FactoryMethod\FactoryProduct01())->createProduct();
$factoryProduct01->send();
$factoryProduct02 = (new \create\FactoryMethod\FactoryProduct02())->createProduct();
$factoryProduct02->send();

#  抽象工厂
$abstractFactoryX1 = new \create\AbstractFactory\FactoryProductX1();
($abstractFactoryX1->createProduct0X())->send();
($abstractFactoryX1->createProduct1X())->operation();
$abstractFactoryX2 = new \create\AbstractFactory\FactoryProductX2();
($abstractFactoryX2->createProduct0X())->send();
($abstractFactoryX2->createProduct1X())->operation();

#  单例模式
echo \create\Singleton\Singleton::getInstance()->testNum;
echo \create\Singleton\Singleton::getInstance()->testNum=20000;
echo \create\Singleton\Singleton::getInstance()->testNum;

#  建造者模式
echo '<br/>05创建型：建造者模式<br/>';
$client = new \create\Builder\Client();
$client->buy(1);
$client->buy(2);

/**
 * 克隆模式
 */
$clone01 = new \create\Prototype\ConcretePrototype();
$clone02 = $clone01->shallowClone();
$clone03 = $clone01->deepClones();
$clone01->showName();$clone02->showName();$clone03->showName();
$clone01->name = 'namechange';
$clone01->showName();$clone02->showName();$clone03->showName();

#  桥接模式
$speedRoad  = new \structure\Bridge\SpeedRoad();
$bigCar     = new \structure\Bridge\BigCar($speedRoad);
$smallCar   = new \structure\Bridge\SmallCar($speedRoad);
$manPeople  = new \structure\Bridge\ManPeople($bigCar);
$bigCar->run();
$manPeople->run();

#  适配器模式
$adapter = new \structure\AdapterClass\Adapter();
$adapter->HDMI();
$adaptee = new \structure\AdapterObject\Adaptee();
$adapter = new \structure\AdapterObject\Adapter($adaptee);
$adapter->HDMI();

/**
 * 装饰模式
 */
$component = new \structure\Decorator\ConcreteComponent();
$decoratorColor = new \structure\Decorator\ConcreteDecoratorColor($component);
$decoratorColor->myColor = 'blue';
$decoratorColor->operation();
$decoratorFont  = new \structure\Decorator\ConcreteDecoratorFont($decoratorColor);
$decoratorColor->myColor = 'yellow';
$decoratorFont->myFont   = '18px';
$decoratorFont->operation();

#  组合模式
$item1 = new \structure\Composite\Item('BaiDu','www.baidu.com');
$item2 = new \structure\Composite\Item('QQ','www.qq.com');
$menu  = new \structure\Composite\Menu('name');
$menu->add($item1);
$menu->add($item2);
$menu->add($item1);
$menu->add($item2);
$menu->operation();

#  享元模式
$flyweightFactory = new \structure\Flyweight\FlyweightFactory();
$flyweight = $flyweightFactory->getFlyweigth('state A');
$flyweight->operation('other state A');
$flyweight = $flyweightFactory->getFlyweigth('state B');
$flyweight->operation('other state B');
$flyweightFactory00 = new \structure\Flyweight\FlyweightFactory00();
$flyweight = $flyweightFactory00->getFlyweigth('state A');
$flyweight->operation('other state A');
$flyweight = $flyweightFactory00->getFlyweigth('state B');
$flyweight->operation('other state B');
$uFlyweight = $flyweightFactory00->getFlyweigth(array('state A', 'state B'));
$uFlyweight->operation('other state B');

 #  外观模式
$facade = new \structure\Facade\Facade();
$facade->operationWrapper();

 #  代理模式
$subject = new \structure\Proxy\ConcreteSubject();
$proxy   = new \structure\Proxy\Proxy($subject);
$proxy->Request();

#  模版模式
$template01 = new \behavior\Template\ConcreteClass1();
$template01->templateMethod();
$template02 = new \behavior\Template\ConcreteClass2();
$template02->templateMethod();

#  策略模式
$strategy = new \behavior\Strategy\ConcreteStrategyA();
$context  = new \behavior\Strategy\Context($strategy);
$context->doAction();

#  状态模式
echo '<br/>17行为：状态模式<br/>';
$state        = new \behavior\State\ConcreteStateA();
$contextState = new \behavior\State\Context($state);
$contextState->operationChangState();
$contextState->operationChangState();
$contextState->operationChangState();

/**
 * 观察者模式
 */
$concreteSubject = new \behavior\Observer\ConcreteSubject();
$observerA = new \behavior\Observer\ConcreteObserverA($concreteSubject);
$observerB = new \behavior\Observer\ConcreteObserverB($concreteSubject);
$concreteSubject->setState('old');
$concreteSubject->notify();
$concreteSubject->setState('new');
$concreteSubject->notify();

#  备忘录模式
$originator = new \behavior\Memento\Originator();
$originator->setState('old');
$originator->printState();
$memento = $originator->createMemento();
$originator->setState('new');
$originator->printState();
$originator->restoreToMemento($memento);
$originator->printState();

#  中介模式
$concreteMediator  = new \behavior\Mediator\ConcreteMediator();
$concreteColleageA = new \behavior\Mediator\ConcreteColleageA($concreteMediator);
$concreteColleageB = new \behavior\Mediator\ConcreteColleageB($concreteMediator);
$concreteMediator->setColleageB($concreteColleageB);
$concreteMediator->setColleageA($concreteColleageA);
$concreteColleageA->setState("old");
$concreteColleageB->setState("old");
$concreteColleageA->action();
$concreteColleageB->action();
$concreteColleageA->setState("new");
$concreteColleageA->action();
$concreteColleageB->action();
$concreteColleageB->setState("old");
$concreteColleageB->action();
$concreteColleageA->action();

#  命令模式
echo '<br/>21行为：命令模式<br/>';
$reciever = new \behavior\Command\Reciever();
$command  = new \behavior\Command\ConcreteCommand($reciever);
$invoker  = new \behavior\Command\Invoker($command);
$invoker->Invoker();

#  命令模式
$visitor = new \behavior\Visitor\ConcreteVisitorA();
$element = new \behavior\Visitor\ConcreteElementA();
$element->accept($visitor);

#  责任链模式
$handle1 = new \behavior\ChainOfResponsibility\ConcreteHandleA();
$handle2 = new \behavior\ChainOfResponsibility\ConcreteHandleB();
$handle2->setSuccessor($handle1);
$handle2->HandleRequest();

#  迭代器模式 
$aggregate = new \behavior\Iterator\ConcreteAggregate();
$iterator  = new \behavior\Iterator\ConcreteIterator($aggregate,0);
for (;$iterator->IsDone();$iterator->Next())
{
    echo '《'.$iterator->currentItem().'》';
}

 #  解析器模式 
$interpreterContext  = new \behavior\Interpreter\Context();
$abstractExpression1 = new \behavior\Interpreter\TerminalExpression("hello");
$AbstractExpression2 = new \behavior\Interpreter\NonterminalExpression($abstractExpression1,5);
$AbstractExpression2->Interpret($interpreterContext);
return 0;
