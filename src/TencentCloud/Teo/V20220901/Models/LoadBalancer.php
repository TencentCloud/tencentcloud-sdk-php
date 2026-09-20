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
 * 负载均衡实例信息。
 *
 * @method string getInstanceId() 获取<p>实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID。</p>
 * @method string getName() 获取<p>实例名称，可输入 1-200 个字符，允许字符为 a-z，A-Z，0-9，_，-。</p>
 * @method void setName(string $Name) 设置<p>实例名称，可输入 1-200 个字符，允许字符为 a-z，A-Z，0-9，_，-。</p>
 * @method string getType() 获取<p>实例类型，取值有：</p><li>HTTP_V2：HTTP 专用型（V2），支持添加 HTTP 专用型和通用型源站组，仅支持被站点加速相关服务引用（如域名服务和规则引擎）。该实例类型支持选择发起探测的区域，可显著降低探测请求量但对源站的健康感知灵敏度更低；</li><li>HTTP：HTTP 专用型（V1），支持添加 HTTP 专用型和通用型源站组，仅支持被站点加速相关服务引用（如域名服务和规则引擎）。该实例类型不支持选择发起探测的区域，探测请求量较大但对源站的健康感知灵敏度更高；</li><li>GENERAL：通用型，仅支持添加通用型源站组，能被站点加速服务（如域名服务和规则引擎）和四层代理引用。该实例类型不支持选择发起探测的区域，探测请求量较大但对源站的健康感知灵敏度更高。</li>
 * @method void setType(string $Type) 设置<p>实例类型，取值有：</p><li>HTTP_V2：HTTP 专用型（V2），支持添加 HTTP 专用型和通用型源站组，仅支持被站点加速相关服务引用（如域名服务和规则引擎）。该实例类型支持选择发起探测的区域，可显著降低探测请求量但对源站的健康感知灵敏度更低；</li><li>HTTP：HTTP 专用型（V1），支持添加 HTTP 专用型和通用型源站组，仅支持被站点加速相关服务引用（如域名服务和规则引擎）。该实例类型不支持选择发起探测的区域，探测请求量较大但对源站的健康感知灵敏度更高；</li><li>GENERAL：通用型，仅支持添加通用型源站组，能被站点加速服务（如域名服务和规则引擎）和四层代理引用。该实例类型不支持选择发起探测的区域，探测请求量较大但对源站的健康感知灵敏度更高。</li>
 * @method HealthChecker getHealthChecker() 获取<p>健康检查策略。详情请参考 <a href="https://cloud.tencent.com/document/product/1552/104228">健康检查策略介绍</a>。</p>
 * @method void setHealthChecker(HealthChecker $HealthChecker) 设置<p>健康检查策略。详情请参考 <a href="https://cloud.tencent.com/document/product/1552/104228">健康检查策略介绍</a>。</p>
 * @method string getSteeringPolicy() 获取<p>源站组间的流量调度策略，取值有：</p><li>Pritory：按优先级顺序进行故障转移 。</li>
 * @method void setSteeringPolicy(string $SteeringPolicy) 设置<p>源站组间的流量调度策略，取值有：</p><li>Pritory：按优先级顺序进行故障转移 。</li>
 * @method string getFailoverPolicy() 获取<p>实际访问某源站失败时的请求重试策略，详情请参考 <a href="https://cloud.tencent.com/document/product/1552/104227">请求重试策略介绍</a>，取值有：</p><li>OtherOriginGroup：单次请求失败后，请求优先重试下一优先级源站组；</li><li>OtherRecordInOriginGroup：单次请求失败后，请求优先重试同源站组内的其他源站。</li>
 * @method void setFailoverPolicy(string $FailoverPolicy) 设置<p>实际访问某源站失败时的请求重试策略，详情请参考 <a href="https://cloud.tencent.com/document/product/1552/104227">请求重试策略介绍</a>，取值有：</p><li>OtherOriginGroup：单次请求失败后，请求优先重试下一优先级源站组；</li><li>OtherRecordInOriginGroup：单次请求失败后，请求优先重试同源站组内的其他源站。</li>
 * @method array getOriginGroupHealthStatus() 获取<p>源站组健康状态。</p>
 * @method void setOriginGroupHealthStatus(array $OriginGroupHealthStatus) 设置<p>源站组健康状态。</p>
 * @method string getStatus() 获取<p>负载均衡状态，取值有：</p><li>Pending：部署中；</li><li>Deleting：删除中；</li><li>Running：已生效。</li>
 * @method void setStatus(string $Status) 设置<p>负载均衡状态，取值有：</p><li>Pending：部署中；</li><li>Deleting：删除中；</li><li>Running：已生效。</li>
 * @method array getL4UsedList() 获取<p>该负载均衡实例绑的四层代理实例的列表。</p>
 * @method void setL4UsedList(array $L4UsedList) 设置<p>该负载均衡实例绑的四层代理实例的列表。</p>
 * @method array getL7UsedList() 获取<p>该负载均衡实例绑定的七层域名列表。</p>
 * @method void setL7UsedList(array $L7UsedList) 设置<p>该负载均衡实例绑定的七层域名列表。</p>
 * @method array getReferences() 获取<p>负载均衡被引用实例的列表。</p>
 * @method void setReferences(array $References) 设置<p>负载均衡被引用实例的列表。</p>
 */
class LoadBalancer extends AbstractModel
{
    /**
     * @var string <p>实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称，可输入 1-200 个字符，允许字符为 a-z，A-Z，0-9，_，-。</p>
     */
    public $Name;

    /**
     * @var string <p>实例类型，取值有：</p><li>HTTP_V2：HTTP 专用型（V2），支持添加 HTTP 专用型和通用型源站组，仅支持被站点加速相关服务引用（如域名服务和规则引擎）。该实例类型支持选择发起探测的区域，可显著降低探测请求量但对源站的健康感知灵敏度更低；</li><li>HTTP：HTTP 专用型（V1），支持添加 HTTP 专用型和通用型源站组，仅支持被站点加速相关服务引用（如域名服务和规则引擎）。该实例类型不支持选择发起探测的区域，探测请求量较大但对源站的健康感知灵敏度更高；</li><li>GENERAL：通用型，仅支持添加通用型源站组，能被站点加速服务（如域名服务和规则引擎）和四层代理引用。该实例类型不支持选择发起探测的区域，探测请求量较大但对源站的健康感知灵敏度更高。</li>
     */
    public $Type;

    /**
     * @var HealthChecker <p>健康检查策略。详情请参考 <a href="https://cloud.tencent.com/document/product/1552/104228">健康检查策略介绍</a>。</p>
     */
    public $HealthChecker;

    /**
     * @var string <p>源站组间的流量调度策略，取值有：</p><li>Pritory：按优先级顺序进行故障转移 。</li>
     */
    public $SteeringPolicy;

    /**
     * @var string <p>实际访问某源站失败时的请求重试策略，详情请参考 <a href="https://cloud.tencent.com/document/product/1552/104227">请求重试策略介绍</a>，取值有：</p><li>OtherOriginGroup：单次请求失败后，请求优先重试下一优先级源站组；</li><li>OtherRecordInOriginGroup：单次请求失败后，请求优先重试同源站组内的其他源站。</li>
     */
    public $FailoverPolicy;

    /**
     * @var array <p>源站组健康状态。</p>
     */
    public $OriginGroupHealthStatus;

    /**
     * @var string <p>负载均衡状态，取值有：</p><li>Pending：部署中；</li><li>Deleting：删除中；</li><li>Running：已生效。</li>
     */
    public $Status;

    /**
     * @var array <p>该负载均衡实例绑的四层代理实例的列表。</p>
     */
    public $L4UsedList;

    /**
     * @var array <p>该负载均衡实例绑定的七层域名列表。</p>
     */
    public $L7UsedList;

    /**
     * @var array <p>负载均衡被引用实例的列表。</p>
     */
    public $References;

    /**
     * @param string $InstanceId <p>实例 ID。</p>
     * @param string $Name <p>实例名称，可输入 1-200 个字符，允许字符为 a-z，A-Z，0-9，_，-。</p>
     * @param string $Type <p>实例类型，取值有：</p><li>HTTP_V2：HTTP 专用型（V2），支持添加 HTTP 专用型和通用型源站组，仅支持被站点加速相关服务引用（如域名服务和规则引擎）。该实例类型支持选择发起探测的区域，可显著降低探测请求量但对源站的健康感知灵敏度更低；</li><li>HTTP：HTTP 专用型（V1），支持添加 HTTP 专用型和通用型源站组，仅支持被站点加速相关服务引用（如域名服务和规则引擎）。该实例类型不支持选择发起探测的区域，探测请求量较大但对源站的健康感知灵敏度更高；</li><li>GENERAL：通用型，仅支持添加通用型源站组，能被站点加速服务（如域名服务和规则引擎）和四层代理引用。该实例类型不支持选择发起探测的区域，探测请求量较大但对源站的健康感知灵敏度更高。</li>
     * @param HealthChecker $HealthChecker <p>健康检查策略。详情请参考 <a href="https://cloud.tencent.com/document/product/1552/104228">健康检查策略介绍</a>。</p>
     * @param string $SteeringPolicy <p>源站组间的流量调度策略，取值有：</p><li>Pritory：按优先级顺序进行故障转移 。</li>
     * @param string $FailoverPolicy <p>实际访问某源站失败时的请求重试策略，详情请参考 <a href="https://cloud.tencent.com/document/product/1552/104227">请求重试策略介绍</a>，取值有：</p><li>OtherOriginGroup：单次请求失败后，请求优先重试下一优先级源站组；</li><li>OtherRecordInOriginGroup：单次请求失败后，请求优先重试同源站组内的其他源站。</li>
     * @param array $OriginGroupHealthStatus <p>源站组健康状态。</p>
     * @param string $Status <p>负载均衡状态，取值有：</p><li>Pending：部署中；</li><li>Deleting：删除中；</li><li>Running：已生效。</li>
     * @param array $L4UsedList <p>该负载均衡实例绑的四层代理实例的列表。</p>
     * @param array $L7UsedList <p>该负载均衡实例绑定的七层域名列表。</p>
     * @param array $References <p>负载均衡被引用实例的列表。</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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

        if (array_key_exists("OriginGroupHealthStatus",$param) and $param["OriginGroupHealthStatus"] !== null) {
            $this->OriginGroupHealthStatus = [];
            foreach ($param["OriginGroupHealthStatus"] as $key => $value){
                $obj = new OriginGroupHealthStatus();
                $obj->deserialize($value);
                array_push($this->OriginGroupHealthStatus, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("L4UsedList",$param) and $param["L4UsedList"] !== null) {
            $this->L4UsedList = $param["L4UsedList"];
        }

        if (array_key_exists("L7UsedList",$param) and $param["L7UsedList"] !== null) {
            $this->L7UsedList = $param["L7UsedList"];
        }

        if (array_key_exists("References",$param) and $param["References"] !== null) {
            $this->References = [];
            foreach ($param["References"] as $key => $value){
                $obj = new OriginGroupReference();
                $obj->deserialize($value);
                array_push($this->References, $obj);
            }
        }
    }
}
