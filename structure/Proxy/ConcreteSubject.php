<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/25
 * Time: 下午9:49
 */

namespace structure\Proxy;


class ConcreteSubject extends Subject
{
    public function Request()
    {
        // TODO: Implement Request() method.
        echo '《ConcreteSubject:Request》';
    }
}