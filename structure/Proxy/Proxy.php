<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/25
 * Time: 下午9:50
 */

namespace structure\Proxy;

/**
 * Proxy 模式最大的好处就是实现了逻辑和实现的彻底解耦。
 */

/**
 * 1)创建开销大的对象时候,比如显示一幅大的图片,我们将这个创建的过程交给代理 去完成,GoF 称之为虚代理(Virtual Proxy);
 * 2)为网络上的对象创建一个局部的本地代理,比如要操作一个网络上的一个对象(网 络性能不好的时候,问题尤其突出),
 *   我们将这个操纵的过程交给一个代理去完成,GoF 称 之为远程代理(Remote Proxy);
 * 3)对对象进行控制访问的时候,比如在 Jive 论坛中不同权限的用户(如管理员、普通 用户等)将获得不同层次的操作权限,
 * 我们将这个工作交给一个代理去完成,GoF 称之为保 护代理(Protection Proxy)。

 */

/**
 * @explain 代理模式
 * Class Proxy
 * @package structure\Proxy
 */
class Proxy
{
    protected $sub;
    function __construct($sub)
    {
        $this->sub = $sub;
    }
    public function Request(){
       echo "《Proxy:Request》";
       $this->sub->Request();
    }
}