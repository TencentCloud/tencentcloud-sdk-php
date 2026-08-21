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
 * @method string getSwitch() 获取主机自动扩容开关
枚举值：
ON：开启
OFF：关闭
补充说明：不传则不修改；映射底层自动加购开关 auto_repurchase_switch
 * @method void setSwitch(string $Switch) 设置主机自动扩容开关
枚举值：
ON：开启
OFF：关闭
补充说明：不传则不修改；映射底层自动加购开关 auto_repurchase_switch
 * @method string getProtectType() 获取扩容版本
枚举值：
PRO：专业版
ULTIMATE：旗舰版
补充说明：不传则不修改
 * @method void setProtectType(string $ProtectType) 设置扩容版本
枚举值：
PRO：专业版
ULTIMATE：旗舰版
补充说明：不传则不修改
 */
class HostAutoScaleConfig extends AbstractModel
{
    /**
     * @var string 主机自动扩容开关
枚举值：
ON：开启
OFF：关闭
补充说明：不传则不修改；映射底层自动加购开关 auto_repurchase_switch
     */
    public $Switch;

    /**
     * @var string 扩容版本
枚举值：
PRO：专业版
ULTIMATE：旗舰版
补充说明：不传则不修改
     */
    public $ProtectType;

    /**
     * @param string $Switch 主机自动扩容开关
枚举值：
ON：开启
OFF：关闭
补充说明：不传则不修改；映射底层自动加购开关 auto_repurchase_switch
     * @param string $ProtectType 扩容版本
枚举值：
PRO：专业版
ULTIMATE：旗舰版
补充说明：不传则不修改
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
    }
}
