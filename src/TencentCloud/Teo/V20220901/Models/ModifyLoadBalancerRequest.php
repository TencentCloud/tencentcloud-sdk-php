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
 * ModifyLoadBalancer请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getInstanceId() 获取负载均衡实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置负载均衡实例 ID。
 * @method string getName() 获取实例名称，可输入 1-200 个字符，允许字符为 a-z，A-Z，0-9，_，-。不填写表示维持原有配置。
 * @method void setName(string $Name) 设置实例名称，可输入 1-200 个字符，允许字符为 a-z，A-Z，0-9，_，-。不填写表示维持原有配置。
 * @method array getOriginGroups() 获取源站组列表及其对应的容灾调度优先级。详情请参考 [快速创建负载均衡实例](https://cloud.tencent.com/document/product/1552/104223) 中的示例场景。不填写表示维持原有配置。
 * @method void setOriginGroups(array $OriginGroups) 设置源站组列表及其对应的容灾调度优先级。详情请参考 [快速创建负载均衡实例](https://cloud.tencent.com/document/product/1552/104223) 中的示例场景。不填写表示维持原有配置。
 * @method HealthChecker getHealthChecker() 获取健康检查策略。详情请参考 [健康检查策略介绍](https://cloud.tencent.com/document/product/1552/104228)。不填写表示维持原有配置。
 * @method void setHealthChecker(HealthChecker $HealthChecker) 设置健康检查策略。详情请参考 [健康检查策略介绍](https://cloud.tencent.com/document/product/1552/104228)。不填写表示维持原有配置。
 * @method string getSteeringPolicy() 获取源站组间的流量调度策略，取值有：
<li>Pritory：按优先级顺序进行故障转移 。</li>不填写表示维持原有配置。
 * @method void setSteeringPolicy(string $SteeringPolicy) 设置源站组间的流量调度策略，取值有：
<li>Pritory：按优先级顺序进行故障转移 。</li>不填写表示维持原有配置。
 * @method string getFailoverPolicy() 获取实际访问某源站失败时的请求重试策略，详情请参考 [请求重试策略介绍](https://cloud.tencent.com/document/product/1552/104227)，取值有：
<li>OtherOriginGroup：单次请求失败后，请求优先重试下一优先级源站组；</li>
<li>OtherRecordInOriginGroup：单次请求失败后，请求优先重试同源站组内的其他源站。</li>不填写表示维持原有配置。
 * @method void setFailoverPolicy(string $FailoverPolicy) 设置实际访问某源站失败时的请求重试策略，详情请参考 [请求重试策略介绍](https://cloud.tencent.com/document/product/1552/104227)，取值有：
<li>OtherOriginGroup：单次请求失败后，请求优先重试下一优先级源站组；</li>
<li>OtherRecordInOriginGroup：单次请求失败后，请求优先重试同源站组内的其他源站。</li>不填写表示维持原有配置。
 */
class ModifyLoadBalancerRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 负载均衡实例 ID。
     */
    public $InstanceId;

    /**
     * @var string 实例名称，可输入 1-200 个字符，允许字符为 a-z，A-Z，0-9，_，-。不填写表示维持原有配置。
     */
    public $Name;

    /**
     * @var array 源站组列表及其对应的容灾调度优先级。详情请参考 [快速创建负载均衡实例](https://cloud.tencent.com/document/product/1552/104223) 中的示例场景。不填写表示维持原有配置。
     */
    public $OriginGroups;

    /**
     * @var HealthChecker 健康检查策略。详情请参考 [健康检查策略介绍](https://cloud.tencent.com/document/product/1552/104228)。不填写表示维持原有配置。
     */
    public $HealthChecker;

    /**
     * @var string 源站组间的流量调度策略，取值有：
<li>Pritory：按优先级顺序进行故障转移 。</li>不填写表示维持原有配置。
     */
    public $SteeringPolicy;

    /**
     * @var string 实际访问某源站失败时的请求重试策略，详情请参考 [请求重试策略介绍](https://cloud.tencent.com/document/product/1552/104227)，取值有：
<li>OtherOriginGroup：单次请求失败后，请求优先重试下一优先级源站组；</li>
<li>OtherRecordInOriginGroup：单次请求失败后，请求优先重试同源站组内的其他源站。</li>不填写表示维持原有配置。
     */
    public $FailoverPolicy;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $InstanceId 负载均衡实例 ID。
     * @param string $Name 实例名称，可输入 1-200 个字符，允许字符为 a-z，A-Z，0-9，_，-。不填写表示维持原有配置。
     * @param array $OriginGroups 源站组列表及其对应的容灾调度优先级。详情请参考 [快速创建负载均衡实例](https://cloud.tencent.com/document/product/1552/104223) 中的示例场景。不填写表示维持原有配置。
     * @param HealthChecker $HealthChecker 健康检查策略。详情请参考 [健康检查策略介绍](https://cloud.tencent.com/document/product/1552/104228)。不填写表示维持原有配置。
     * @param string $SteeringPolicy 源站组间的流量调度策略，取值有：
<li>Pritory：按优先级顺序进行故障转移 。</li>不填写表示维持原有配置。
     * @param string $FailoverPolicy 实际访问某源站失败时的请求重试策略，详情请参考 [请求重试策略介绍](https://cloud.tencent.com/document/product/1552/104227)，取值有：
<li>OtherOriginGroup：单次请求失败后，请求优先重试下一优先级源站组；</li>
<li>OtherRecordInOriginGroup：单次请求失败后，请求优先重试同源站组内的其他源站。</li>不填写表示维持原有配置。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("OriginGroups",$param) and $param["OriginGroups"] !== null) {
            $this->OriginGroups = [];
            foreach ($param["OriginGroups"] as $key => $value){
                $obj = new OriginGroupInLoadBalancer();
                $obj->deserialize($value);
                array_push($this->OriginGroups, $obj);
            }
        }

        if (array_key_exists("HealthChecker",$param) and $param["HealthChecker"] !== null) {
            $this->HealthChecker = new HealthChecker();
            $this->HealthChecker->deserialize($param["HealthChecker"]);
        }

        if (array_key_exists("SteeringPolicy",$param) and $param["SteeringPolicy"] !== null) {
            $this->SteeringPolicy = $param["SteeringPolicy"];
        }

        if (array_key_exists("FailoverPolicy",$param) and $param["FailoverPolicy"] !== null) {
            $this->FailoverPolicy = $param["FailoverPolicy"];
        }
    }
}
