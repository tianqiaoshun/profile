<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 2020/5/11
 * Time: 18:01
 */

namespace Charlie;

/**
 *@inheritdoc xhprof扩展性能分析
 *
 * - 适用php7版本
 * - 需要安装[xhprof](https://github.com/longxinH/xhprof)扩展
 */

class Xhprof extends AbstractXhUp
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