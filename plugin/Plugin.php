<?php

// 替换命名空间 Example 为插件名
namespace TypechoPlugin\Example;

use Typecho\Plugin\PluginInterface;
use Typecho\Widget\Helper\Form;
use Utils\Helper;
// use Widget\Archive;
// use Widget\Base\Contents;

if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}

/**
 * 
 *
 * @package Example
 * @author shingchi
 * @version %version%
 * @link https://github.com/shingchi
 */
class Plugin implements PluginInterface
{
    /**
     * 激活插件方法,如果激活失败,直接抛出异常
     */
    public static function activate()
    {
        // 插件接口
        // \Typecho\Plugin::factory('admin/menu.php')->navBar = __CLASS__ . '::render';
        // \Typecho\Plugin::factory('Widget_Archive')->footer = [__CLASS__, 'footer'];
        // Contents::pluginHandle()->contentEx = __CLASS__ . '::filter';

        // 添加菜单
        // Helper::addMenu('exampleMenu');

        // 添加面板, 1 为菜单索引位置, administrator 为进入面板的权限
        // Helper::addPanel(1, 'Example/panel.php', 'panelTitle', 'panelSubtitle', 'administrator');

        // 添加动作
        // Helper::addAction('exampleAction', ActionClassName::class);
        // Helper::addAction('exampleAction', Action::class);

        // 添加路由
        // 默认先执行 execute 方法，再执行自定义方法
        // Helper::addRoute('exampleRoute', '/example/widget-path', WidgetClassName::class);
        // Helper::addRoute('exampleRoute', '/example/widget-path', Widget::class, 'doSomething');
    }

    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     */
    public static function deactivate()
    {
        // 移除路由
        // Helper::removeRoute('exampleRoute');
        // 移除动作
        // Helper::removeAction('exampleAction');
        // 移除面板
        // Helper::removePanel(1, 'Example/panel.php');
        // 移除菜单
        // Helper::removeMenu('exampleMenu');
    }

    /**
     * 获取插件配置面板
     *
     * @param Form $form 配置面板
     */
    public static function config(Form $form)
    {
        // use Typecho\Widget\Helper\Form\Element\Text 可直接用 Text
        // $name = new Text('word', null, 'Hello World', _t('说点什么'));
        // $form->addInput($name);

        // 文本输入框
        // $text = new Form\Element\Text('text', NULL, '默认值', _t('标题'), _t('提示文字'));

        // 多行文本输入框
        // $textarea = new Form\Element\Textarea('textarea', NULL, '默认值', _t('标题'), _t('提示文字'));

        // 密码输入框
        // $password = new Form\Element\Password('password', NULL, NULL, _t('标题'), _t('提示文字'));

        // 单选框
        // $radio = new Form\Element\Radio('radio', [
        //     '选项值1' => _t('选项1说明'),
        //     '选项值2' => _t('选项2说明')
        // ], '默认值', _t('标题'), _t('提示文字'));

        // 多选框
        // $checkbox = new Form\Element\Checkbox('checkbox', [
        //     '选项值1' => _t('选项1说明'),
        //     '选项值2' => _t('选项2说明')
        // ], '默认值', _t('标题'), _t('提示文字'));

        // 下拉选择框
        // $select = new Form\Element\Select('select', [
        //     '选项值1' => _t('选项1说明'),
        //     '选项值2' => _t('选项2说明')
        // ], '默认值', _t('标题'), _t('提示文字'));

        /* 添加表单验证规则 */
        // $text->addRule('isInteger', _t('text必须是纯数字'));
        // $form->addInput($text->addRule('isInteger', _t('text必须是纯数字')));
        // $element->addRule('xssCheck', _t('请不要使用特殊字符'));
        // $password->addRule('required', _t('密码不可为空'));
        // $password->addRule('minLength', _t('为了保证账户安全, 请输入至少六位的密码'), 6);
        // $confirm->addRule('confirm', _t('两次输入的密码不一致'), 'password');
        // $url->addRule('url', _t('个人主页地址格式错误'));
        // $mail->addRule('required', _t('必须填写电子邮箱'));
        // $mail->addRule(array($this, 'mailExists'), _t('电子邮箱地址已经存在'));
        // $mail->addRule('email', _t('电子邮箱格式错误'));

        // $form->addInput($text);
        // $form->addInput($textarea);
        // $form->addInput($password);
        // $form->addInput($radio);
        // $form->addInput($checkbox);
        // $form->addInput($select);
    }

    /**
     * 个人用户的配置面板
     *
     * @param Form $form
     */
    public static function personalConfig(Form $form)
    {
    }

    /**
     * 插件实现方法
     *
     * @access public
     * @return void
     */
    public static function doSomething()
    {
        // 获取插件配置
        // $options = Helper::options()->plugin('Example');
        // $options->text;
        // $options->textarea;
        // ...

        // 插件目录url地址
        // $pluginUrl = Helper::options()->pluginUrl . '/Example/'
    }
}
