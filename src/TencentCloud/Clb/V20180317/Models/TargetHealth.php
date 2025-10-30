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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述一个Target的健康信息
 *
 * @method string getIP() 获取Target的内网IP
 * @method void setIP(string $IP) 设置Target的内网IP
 * @method integer getPort() 获取Target绑定的端口
 * @method void setPort(integer $Port) 设置Target绑定的端口
 * @method boolean getHealthStatus() 获取当前健康状态，true：健康，false：不健康（包括尚未开始探测、探测中、状态异常等几种状态）。只有处于健康状态（且权重大于0），负载均衡才会向其转发流量。
 * @method void setHealthStatus(boolean $HealthStatus) 设置当前健康状态，true：健康，false：不健康（包括尚未开始探测、探测中、状态异常等几种状态）。只有处于健康状态（且权重大于0），负载均衡才会向其转发流量。
 * @method string getTargetId() 获取Target的实例ID，如 ins-12345678
 * @method void setTargetId(string $TargetId) 设置Target的实例ID，如 ins-12345678
 * @method string getHealthStatusDetail() 获取当前健康状态的详细信息。如：Alive、Dead、Unknown、Close。Alive状态为健康，Dead状态为异常，Unknown状态包括尚未开始探测、探测中、状态未知，Close表示健康检查关闭或监听器状态停止。
 * @method void setHealthStatusDetail(string $HealthStatusDetail) 设置当前健康状态的详细信息。如：Alive、Dead、Unknown、Close。Alive状态为健康，Dead状态为异常，Unknown状态包括尚未开始探测、探测中、状态未知，Close表示健康检查关闭或监听器状态停止。
 * @method string getHealthStatusDetial() 获取(**该参数对象即将下线，不推荐使用，请使用HealthStatusDetail获取健康详情**) 当前健康状态的详细信息。如：Alive、Dead、Unknown。Alive状态为健康，Dead状态为异常，Unknown状态包括尚未开始探测、探测中、状态未知。
 * @method void setHealthStatusDetial(string $HealthStatusDetial) 设置(**该参数对象即将下线，不推荐使用，请使用HealthStatusDetail获取健康详情**) 当前健康状态的详细信息。如：Alive、Dead、Unknown。Alive状态为健康，Dead状态为异常，Unknown状态包括尚未开始探测、探测中、状态未知。
 * @method string getTargetGroupId() 获取目标组唯一ID。
 * @method void setTargetGroupId(string $TargetGroupId) 设置目标组唯一ID。
 * @method integer getWeight() 获取Target的权重。
 * @method void setWeight(integer $Weight) 设置Target的权重。
 */
class TargetHealth extends AbstractModel
{
    /**
     * @var string Target的内网IP
     */
    public $IP;

    /**
     * @var integer Target绑定的端口
     */
    public $Port;

    /**
     * @var boolean 当前健康状态，true：健康，false：不健康（包括尚未开始探测、探测中、状态异常等几种状态）。只有处于健康状态（且权重大于0），负载均衡才会向其转发流量。
     */
    public $HealthStatus;

    /**
     * @var string Target的实例ID，如 ins-12345678
     */
    public $TargetId;

    /**
     * @var string 当前健康状态的详细信息。如：Alive、Dead、Unknown、Close。Alive状态为健康，Dead状态为异常，Unknown状态包括尚未开始探测、探测中、状态未知，Close表示健康检查关闭或监听器状态停止。
     */
    public $HealthStatusDetail;

    /**
     * @var string (**该参数对象即将下线，不推荐使用，请使用HealthStatusDetail获取健康详情**) 当前健康状态的详细信息。如：Alive、Dead、Unknown。Alive状态为健康，Dead状态为异常，Unknown状态包括尚未开始探测、探测中、状态未知。
     * @deprecated
     */
    public $HealthStatusDetial;

    /**
     * @var string 目标组唯一ID。
     */
    public $TargetGroupId;

    /**
     * @var integer Target的权重。
     */
    public $Weight;

    /**
     * @param string $IP Target的内网IP
     * @param integer $Port Target绑定的端口
     * @param boolean $HealthStatus 当前健康状态，true：健康，false：不健康（包括尚未开始探测、探测中、状态异常等几种状态）。只有处于健康状态（且权重大于0），负载均衡才会向其转发流量。
     * @param string $TargetId Target的实例ID，如 ins-12345678
     * @param string $HealthStatusDetail 当前健康状态的详细信息。如：Alive、Dead、Unknown、Close。Alive状态为健康，Dead状态为异常，Unknown状态包括尚未开始探测、探测中、状态未知，Close表示健康检查关闭或监听器状态停止。
     * @param string $HealthStatusDetial (**该参数对象即将下线，不推荐使用，请使用HealthStatusDetail获取健康详情**) 当前健康状态的详细信息。如：Alive、Dead、Unknown。Alive状态为健康，Dead状态为异常，Unknown状态包括尚未开始探测、探测中、状态未知。
     * @param string $TargetGroupId 目标组唯一ID。
     * @param integer $Weight Target的权重。
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
        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("HealthStatus",$param) and $param["HealthStatus"] !== null) {
            $this->HealthStatus = $param["HealthStatus"];
        }

        if (array_key_exists("TargetId",$param) and $param["TargetId"] !== null) {
            $this->TargetId = $param["TargetId"];
        }

        if (array_key_exists("HealthStatusDetail",$param) and $param["HealthStatusDetail"] !== null) {
            $this->HealthStatusDetail = $param["HealthStatusDetail"];
        }

        if (array_key_exists("HealthStatusDetial",$param) and $param["HealthStatusDetial"] !== null) {
            $this->HealthStatusDetial = $param["HealthStatusDetial"];
        }

        if (array_key_exists("TargetGroupId",$param) and $param["TargetGroupId"] !== null) {
            $this->TargetGroupId = $param["TargetGroupId"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
