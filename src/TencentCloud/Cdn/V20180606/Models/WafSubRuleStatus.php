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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Waf子规则开关状态
 *
 * @method string getSwitch() 获取Waf子规则开关状态配置开关，取值有：
on：开启
off：关闭
 * @method void setSwitch(string $Switch) 设置Waf子规则开关状态配置开关，取值有：
on：开启
off：关闭
 * @method array getSubIds() 获取规则id列表
 * @method void setSubIds(array $SubIds) 设置规则id列表
 */
class WafSubRuleStatus extends AbstractModel
{
    /**
     * @var string Waf子规则开关状态配置开关，取值有：
on：开启
off：关闭
     */
    public $Switch;

    /**
     * @var array 规则id列表
     */
    public $SubIds;

    /**
     * @param string $Switch Waf子规则开关状态配置开关，取值有：
on：开启
off：关闭
     * @param array $SubIds 规则id列表
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

        if (array_key_exists("SubIds",$param) and $param["SubIds"] !== null) {
            $this->SubIds = $param["SubIds"];
        }
    }
}
