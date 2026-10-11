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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音频增强编辑
 *
 * @method string getSwitch() 获取<p>能力配置开关</p><p>枚举值：</p><ul><li>ON： 开启</li><li>OFF： 关闭</li></ul><p>默认值：OFF</p>
 * @method void setSwitch(string $Switch) 设置<p>能力配置开关</p><p>枚举值：</p><ul><li>ON： 开启</li><li>OFF： 关闭</li></ul><p>默认值：OFF</p>
 * @method string getType() 获取<p>音频编辑类型</p><p>枚举值：</p><ul><li>restore： 修复</li></ul><p>默认值：restore</p>
 * @method void setType(string $Type) 设置<p>音频编辑类型</p><p>枚举值：</p><ul><li>restore： 修复</li></ul><p>默认值：restore</p>
 */
class AudioEnhanceEditConfig extends AbstractModel
{
    /**
     * @var string <p>能力配置开关</p><p>枚举值：</p><ul><li>ON： 开启</li><li>OFF： 关闭</li></ul><p>默认值：OFF</p>
     */
    public $Switch;

    /**
     * @var string <p>音频编辑类型</p><p>枚举值：</p><ul><li>restore： 修复</li></ul><p>默认值：restore</p>
     */
    public $Type;

    /**
     * @param string $Switch <p>能力配置开关</p><p>枚举值：</p><ul><li>ON： 开启</li><li>OFF： 关闭</li></ul><p>默认值：OFF</p>
     * @param string $Type <p>音频编辑类型</p><p>枚举值：</p><ul><li>restore： 修复</li></ul><p>默认值：restore</p>
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
