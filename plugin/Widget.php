<?php

// 替换命名空间 Example 为插件名
namespace TypechoPlugin\Example;

use Typecho\Widget as TypechoWidget;
use Widget\Notice;

if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}

/**
 * 扩展组件
 *
 * @package Example
 * @copyright Copyright (c) 2025 shingchi (https://github.com/shingchi)
 * @license GNU General Public License 2.0
 */
class Widget extends TypechoWidget
{
    /**
     * 构造函数
     *
     * @access public
     * @param mixed $request request对象
     * @param mixed $response response对象
     * @param mixed $params 参数列表
     */
    public function __construct($request, $response, $params = null)
    {
        parent::__construct($request, $response, $params);
        // 可做其他初始设置
    }

    /**
     * 组件默认执行方法
     *
     * @access public
     * @return void
     */
    public function execute()
    {
    }

    /**
     * 组件实现方法
     *
     * @access public
     * @return void
     */
    public function doSomething()
    {
        // echo '这是一个插件样板';

        /** 提示信息 */
        // $this->widget(Notice::class)->set(_t('通知提示'), 'notice');
        // $this->widget('Widget_Notice')->set(_t('错误提示'), 'error');
        // $this->widget('Widget_Notice')->set(_t('成功提示'), 'success');
    }
}
