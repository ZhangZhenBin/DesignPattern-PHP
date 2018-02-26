<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/2/8
 * Time: 下午2:50
 */

namespace behavior\ChainOfResponsibility;

/**
 * @expain 责任链模式
 * Class ChainOfResponsibility
 * @package behavior\ChainOfResponsibility
 */

/**
 * Chain of Responsibility 模式的最大的一个有点就是给系统降低了耦合性,请求的发送者
 * 完全不必知道该请求会被哪个应答对象处理,极大地降低了系统的耦合性。
 */

/**
 * Chain of Responsibility模式中ConcreteHandler将自己的后继对象(向下传递消息的对象)记录在自己的后继表中,
 * 当一个请求到来时,ConcreteHandler 会先检查看自己有没有 匹配的处理程序,如果有就自己处理,否则传递给它的后继。
 * 当然这里示例程序中为了简化, ConcreteHandler 只是简单的检查看自己有没有后继,有的话将请求传递给后继进行处理, 没有的话就自己处理。
 */

/**
 * 熟悉 VC/MFC 的都知道,VC 是“基于消息,事件驱动”,消息在 VC 开发中起着举足 轻重的作用。
 * 在 MFC 中,消息是通过一个向上递交的方式进行处理,例如一个 WM_COMMAND 消息的处理流程可能为:
 * 1) MDI 主窗口(CMDIFrameWnd)收到命令消息 WM_COMMAND,其 ID 位 ID_ ×××;
 * 2) MDI 主窗口将消息传给当前活动的 MDI 子窗口(CMDIChildWnd);
 * 3) MDI 子窗口给自己的子窗口(View)一个处理机会,将消息交给 View;
 * 4) View 检查自己 Message Map;
 * 5) 如果 View 没有发现处理该消息的程序,则将该消息传给其对应的 Document 对象;否则 View 处理,消息流程结束。
 * 6) Document 检查自己 Message Map,如果没有该消息的处理程序,则将该消息传给其对象的 DocumentTemplate 处理;否则自己处理,消息流程结束;
 * 7) 如果在 6)中消息没有得到处理,则将消息返回给 View;
 * 8) View 再传回给 MDI 子窗口;
 * 9) MDI 子窗口将该消息传给 CwinApp 对象,CwinApp 为所有无主的消息提供了处理。
 * 注明:有关 MFC 消息处理更加详细信息,请参考候捷先生的《深入浅出 MFC》。
 * MFC 提供了消息的处理的链式处理策略,处理消息的请求将沿着预先定义好的路径依次进行处理。
 * 消息的发送者并不知道该消息最后是由那个具体对象处理的,当然它也无须也 不想知道,但是结构是该消息被某个对象处理了,
 * 或者一直到一个终极的对象进行处理了。
 * Chain of Responsibility 模式描述其实就是这样一类问题将可能处理一个请求的对象链 接成一个链,并将请求在这个链上传递,
 * 直到有对象处理该请求(可能需要提供一个默认处 理所有请求的类,例如 MFC 中的 CwinApp 类)。
 */