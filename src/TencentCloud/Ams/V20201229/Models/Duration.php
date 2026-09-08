<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ams\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 命中音频时间位置
 *
 * @method float getStart() 获取<p>开始时间</p><p>单位：秒</p>
 * @method void setStart(float $Start) 设置<p>开始时间</p><p>单位：秒</p>
 * @method float getEnd() 获取<p>结束时间</p><p>单位：秒</p>
 * @method void setEnd(float $End) 设置<p>结束时间</p><p>单位：秒</p>
 */
class Duration extends AbstractModel
{
    /**
     * @var float <p>开始时间</p><p>单位：秒</p>
     */
    public $Start;

    /**
     * @var float <p>结束时间</p><p>单位：秒</p>
     */
    public $End;

    /**
     * @param float $Start <p>开始时间</p><p>单位：秒</p>
     * @param float $End <p>结束时间</p><p>单位：秒</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Start",$param) and $param["Start"] !== null) {
            $this->Start = $param["Start"];
        }

        if (array_key_exists("End",$param) and $param["End"] !== null) {
            $this->End = $param["End"];
        }
    }
}
