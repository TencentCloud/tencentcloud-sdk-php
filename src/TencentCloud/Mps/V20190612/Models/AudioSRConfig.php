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
 * 音频超分配置
 *
 * @method string getSwitch() 获取<p>能力配置开关</p><p>枚举值：</p><ul><li>ON： 开启</li><li>OFF： 关闭</li></ul><p>默认值：OFF</p>
 * @method void setSwitch(string $Switch) 设置<p>能力配置开关</p><p>枚举值：</p><ul><li>ON： 开启</li><li>OFF： 关闭</li></ul><p>默认值：OFF</p>
 * @method string getType() 获取<p>音频超分类型</p><p>枚举值：</p><ul><li>premium_hd： 臻品高清版</li><li>premium_master： 臻品母带版</li></ul><p>默认值：premium_hd</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置<p>音频超分类型</p><p>枚举值：</p><ul><li>premium_hd： 臻品高清版</li><li>premium_master： 臻品母带版</li></ul><p>默认值：premium_hd</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getValue() 获取<p>目标采样率</p><p>枚举值：</p><ul><li>44100： 44.1kHz</li><li>48000： 48kHz</li><li>64000： 64kHz</li><li>88200： 88.2kHz</li><li>96000： 96kHz</li><li>192000： 192kHz</li></ul><p>默认值：48000</p><p>其中 192kHz 仅臻品母带版才可以使用</p>
 * @method void setValue(integer $Value) 设置<p>目标采样率</p><p>枚举值：</p><ul><li>44100： 44.1kHz</li><li>48000： 48kHz</li><li>64000： 64kHz</li><li>88200： 88.2kHz</li><li>96000： 96kHz</li><li>192000： 192kHz</li></ul><p>默认值：48000</p><p>其中 192kHz 仅臻品母带版才可以使用</p>
 */
class AudioSRConfig extends AbstractModel
{
    /**
     * @var string <p>能力配置开关</p><p>枚举值：</p><ul><li>ON： 开启</li><li>OFF： 关闭</li></ul><p>默认值：OFF</p>
     */
    public $Switch;

    /**
     * @var string <p>音频超分类型</p><p>枚举值：</p><ul><li>premium_hd： 臻品高清版</li><li>premium_master： 臻品母带版</li></ul><p>默认值：premium_hd</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var integer <p>目标采样率</p><p>枚举值：</p><ul><li>44100： 44.1kHz</li><li>48000： 48kHz</li><li>64000： 64kHz</li><li>88200： 88.2kHz</li><li>96000： 96kHz</li><li>192000： 192kHz</li></ul><p>默认值：48000</p><p>其中 192kHz 仅臻品母带版才可以使用</p>
     */
    public $Value;

    /**
     * @param string $Switch <p>能力配置开关</p><p>枚举值：</p><ul><li>ON： 开启</li><li>OFF： 关闭</li></ul><p>默认值：OFF</p>
     * @param string $Type <p>音频超分类型</p><p>枚举值：</p><ul><li>premium_hd： 臻品高清版</li><li>premium_master： 臻品母带版</li></ul><p>默认值：premium_hd</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Value <p>目标采样率</p><p>枚举值：</p><ul><li>44100： 44.1kHz</li><li>48000： 48kHz</li><li>64000： 64kHz</li><li>88200： 88.2kHz</li><li>96000： 96kHz</li><li>192000： 192kHz</li></ul><p>默认值：48000</p><p>其中 192kHz 仅臻品母带版才可以使用</p>
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
