<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 2020/5/11
 * Time: 17:58
 */

namespace Charlie;

/**
 * @inheritdoc 抽象xhprof
 */

abstract class AbstractXhUp
{
    /**
     * @inheritdoc 开启
     */
    abstract public function enable();

    /**
     *@inheritdoc  结束
     *
     * @return array
     */
    abstract public function disable();

    /**
     * 是否可用?
     *
     * @return bool
     */
    public function isEnable()
    {
        return extension_loaded(substr(
            static::class,
            strrpos(static::class, '\\') + 1
        ));
    }

}