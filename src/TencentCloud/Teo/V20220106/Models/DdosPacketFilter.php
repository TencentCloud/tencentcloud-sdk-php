<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ddos特征过滤
 *
 * @method array getPacketFilter() 获取特征过滤规则数组。
 * @method void setPacketFilter(array $PacketFilter) 设置特征过滤规则数组。
 * @method string getSwitch() 获取特征过滤清空标识，取值有：
<li>off ：清空特征过滤规则，无需填写 PacketFilter 参数 ；</li>
<li>on ：配置特征过滤规则，需填写 PacketFilter 参数。</li>默认值为on。
 * @method void setSwitch(string $Switch) 设置特征过滤清空标识，取值有：
<li>off ：清空特征过滤规则，无需填写 PacketFilter 参数 ；</li>
<li>on ：配置特征过滤规则，需填写 PacketFilter 参数。</li>默认值为on。
 */
class DdosPacketFilter extends AbstractModel
{
    /**
     * @var array 特征过滤规则数组。
     */
    public $PacketFilter;

    /**
     * @var string 特征过滤清空标识，取值有：
<li>off ：清空特征过滤规则，无需填写 PacketFilter 参数 ；</li>
<li>on ：配置特征过滤规则，需填写 PacketFilter 参数。</li>默认值为on。
     */
    public $Switch;

    /**
     * @param array $PacketFilter 特征过滤规则数组。
     * @param string $Switch 特征过滤清空标识，取值有：
<li>off ：清空特征过滤规则，无需填写 PacketFilter 参数 ；</li>
<li>on ：配置特征过滤规则，需填写 PacketFilter 参数。</li>默认值为on。
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
        if (array_key_exists("PacketFilter",$param) and $param["PacketFilter"] !== null) {
            $this->PacketFilter = [];
            foreach ($param["PacketFilter"] as $key => $value){
                $obj = new DDoSFeaturesFilter();
                $obj->deserialize($value);
                array_push($this->PacketFilter, $obj);
            }
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }
    }
}
