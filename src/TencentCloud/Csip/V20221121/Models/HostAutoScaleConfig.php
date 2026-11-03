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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主机安全模块自动扩容配置
 *
 * @method string getSwitch() 获取<p>主机自动扩容开关<br>枚举值：<br>ON：开启<br>OFF：关闭<br>补充说明：不传则不修改；映射底层自动加购开关 auto_repurchase_switch</p>
 * @method void setSwitch(string $Switch) 设置<p>主机自动扩容开关<br>枚举值：<br>ON：开启<br>OFF：关闭<br>补充说明：不传则不修改；映射底层自动加购开关 auto_repurchase_switch</p>
 * @method string getProtectType() 获取<p>扩容版本<br>枚举值：<br>PRO：专业版<br>ULTIMATE：旗舰版<br>补充说明：不传则不修改</p>
 * @method void setProtectType(string $ProtectType) 设置<p>扩容版本<br>枚举值：<br>PRO：专业版<br>ULTIMATE：旗舰版<br>补充说明：不传则不修改</p>
 * @method string getAssetRange() 获取<p>扩容资产范围</p><p>枚举值：</p><ul><li>ALL： 全部资产</li><li>BY_TAG： 按标签扩容</li></ul>
 * @method void setAssetRange(string $AssetRange) 设置<p>扩容资产范围</p><p>枚举值：</p><ul><li>ALL： 全部资产</li><li>BY_TAG： 按标签扩容</li></ul>
 * @method array getTagIds() 获取<p>标签ID列表</p>
 * @method void setTagIds(array $TagIds) 设置<p>标签ID列表</p>
 */
class HostAutoScaleConfig extends AbstractModel
{
    /**
     * @var string <p>主机自动扩容开关<br>枚举值：<br>ON：开启<br>OFF：关闭<br>补充说明：不传则不修改；映射底层自动加购开关 auto_repurchase_switch</p>
     */
    public $Switch;

    /**
     * @var string <p>扩容版本<br>枚举值：<br>PRO：专业版<br>ULTIMATE：旗舰版<br>补充说明：不传则不修改</p>
     */
    public $ProtectType;

    /**
     * @var string <p>扩容资产范围</p><p>枚举值：</p><ul><li>ALL： 全部资产</li><li>BY_TAG： 按标签扩容</li></ul>
     */
    public $AssetRange;

    /**
     * @var array <p>标签ID列表</p>
     */
    public $TagIds;

    /**
     * @param string $Switch <p>主机自动扩容开关<br>枚举值：<br>ON：开启<br>OFF：关闭<br>补充说明：不传则不修改；映射底层自动加购开关 auto_repurchase_switch</p>
     * @param string $ProtectType <p>扩容版本<br>枚举值：<br>PRO：专业版<br>ULTIMATE：旗舰版<br>补充说明：不传则不修改</p>
     * @param string $AssetRange <p>扩容资产范围</p><p>枚举值：</p><ul><li>ALL： 全部资产</li><li>BY_TAG： 按标签扩容</li></ul>
     * @param array $TagIds <p>标签ID列表</p>
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

        if (array_key_exists("ProtectType",$param) and $param["ProtectType"] !== null) {
            $this->ProtectType = $param["ProtectType"];
        }

        if (array_key_exists("AssetRange",$param) and $param["AssetRange"] !== null) {
            $this->AssetRange = $param["AssetRange"];
        }

        if (array_key_exists("TagIds",$param) and $param["TagIds"] !== null) {
            $this->TagIds = $param["TagIds"];
        }
    }
}
