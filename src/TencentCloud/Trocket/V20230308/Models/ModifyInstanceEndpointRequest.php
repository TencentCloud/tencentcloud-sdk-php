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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceEndpoint请求参数结构体
 *
 * @method string getInstanceId() 获取腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
 * @method void setInstanceId(string $InstanceId) 设置腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
 * @method string getType() 获取接入点类型，
PUBLIC 公网
 * @method void setType(string $Type) 设置接入点类型，
PUBLIC 公网
 * @method integer getBandwidth() 获取公网带宽，Mbps为单位
 * @method void setBandwidth(integer $Bandwidth) 设置公网带宽，Mbps为单位
 * @method array getIpRules() 获取公网安全组信息
 * @method void setIpRules(array $IpRules) 设置公网安全组信息
 * @method boolean getBillingFlow() 获取公网是否按流量计费
 * @method void setBillingFlow(boolean $BillingFlow) 设置公网是否按流量计费
 */
class ModifyInstanceEndpointRequest extends AbstractModel
{
    /**
     * @var string 腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
     */
    public $InstanceId;

    /**
     * @var string 接入点类型，
PUBLIC 公网
     */
    public $Type;

    /**
     * @var integer 公网带宽，Mbps为单位
     */
    public $Bandwidth;

    /**
     * @var array 公网安全组信息
     */
    public $IpRules;

    /**
     * @var boolean 公网是否按流量计费
     */
    public $BillingFlow;

    /**
     * @param string $InstanceId 腾讯云 RocketMQ 实例 ID，从 [DescribeFusionInstanceList](https://cloud.tencent.com/document/api/1493/106745) 接口或控制台获得。
     * @param string $Type 接入点类型，
PUBLIC 公网
     * @param integer $Bandwidth 公网带宽，Mbps为单位
     * @param array $IpRules 公网安全组信息
     * @param boolean $BillingFlow 公网是否按流量计费
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("IpRules",$param) and $param["IpRules"] !== null) {
            $this->IpRules = [];
            foreach ($param["IpRules"] as $key => $value){
                $obj = new IpRule();
                $obj->deserialize($value);
                array_push($this->IpRules, $obj);
            }
        }

        if (array_key_exists("BillingFlow",$param) and $param["BillingFlow"] !== null) {
            $this->BillingFlow = $param["BillingFlow"];
        }
    }
}
