<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 2020/5/11
 * Time: 18:00
 */

namespace Charlie;

/**
 *@inheritdoc uprofiler扩展性能分析
 *
 * - 适用php5.6版本
 * - 需要安装[uprofiler](https://github.com/FriendsOfPHP/uprofiler)扩展
 */

class Uprofiler extends AbstractXhUp
{
    /**
     * @inheritdoc 开启
     */
    public function enable()
    {
        uprofiler_enable(UPROFILER_FLAGS_CPU + UPROFILER_FLAGS_MEMORY);
    }

    /**
     * @inheritdoc 结束
     * @return  array
     */
    public function disable()
    {
        return uprofiler_disable();
    }

}