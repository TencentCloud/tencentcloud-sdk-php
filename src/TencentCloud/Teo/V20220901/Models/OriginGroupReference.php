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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 源站组引用服务。
 *
 * @method string getInstanceType() 获取引用服务类型，取值有：
<li>AccelerationDomain: 加速域名；</li>
<li>RuleEngine: 规则引擎；</li>
<li>Loadbalance: 负载均衡；</li>
<li>ApplicationProxy: 四层代理。</li>
 * @method void setInstanceType(string $InstanceType) 设置引用服务类型，取值有：
<li>AccelerationDomain: 加速域名；</li>
<li>RuleEngine: 规则引擎；</li>
<li>Loadbalance: 负载均衡；</li>
<li>ApplicationProxy: 四层代理。</li>
 * @method string getInstanceId() 获取引用类型的实例ID。
 * @method void setInstanceId(string $InstanceId) 设置引用类型的实例ID。
 * @method string getInstanceName() 获取应用类型的实例名称。
 * @method void setInstanceName(string $InstanceName) 设置应用类型的实例名称。
 */
class OriginGroupReference extends AbstractModel
{
    /**
     * @var string 引用服务类型，取值有：
<li>AccelerationDomain: 加速域名；</li>
<li>RuleEngine: 规则引擎；</li>
<li>Loadbalance: 负载均衡；</li>
<li>ApplicationProxy: 四层代理。</li>
     */
    public $InstanceType;

    /**
     * @var string 引用类型的实例ID。
     */
    public $InstanceId;

    /**
     * @var string 应用类型的实例名称。
     */
    public $InstanceName;

    /**
     * @param string $InstanceType 引用服务类型，取值有：
<li>AccelerationDomain: 加速域名；</li>
<li>RuleEngine: 规则引擎；</li>
<li>Loadbalance: 负载均衡；</li>
<li>ApplicationProxy: 四层代理。</li>
     * @param string $InstanceId 引用类型的实例ID。
     * @param string $InstanceName 应用类型的实例名称。
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }
    }
}
