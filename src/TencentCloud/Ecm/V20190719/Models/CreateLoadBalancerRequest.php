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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLoadBalancer请求参数结构体
 *
 * @method string getEcmRegion() 获取区域。
 * @method void setEcmRegion(string $EcmRegion) 设置区域。
 * @method string getLoadBalancerType() 获取负载均衡实例的网络类型。目前只支持传入OPEN，表示公网属性。
 * @method void setLoadBalancerType(string $LoadBalancerType) 设置负载均衡实例的网络类型。目前只支持传入OPEN，表示公网属性。
 * @method string getVipIsp() 获取CMCC | CTCC | CUCC，分别对应 移动 | 电信 | 联通。
 * @method void setVipIsp(string $VipIsp) 设置CMCC | CTCC | CUCC，分别对应 移动 | 电信 | 联通。
 * @method string getLoadBalancerName() 获取负载均衡实例的名称，只在创建一个实例的时候才会生效。规则：1-50 个英文、汉字、数字、连接线“-”或下划线“_”。
注意：如果名称与系统中已有负载均衡实例的名称相同，则系统将会自动生成此次创建的负载均衡实例的名称。
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置负载均衡实例的名称，只在创建一个实例的时候才会生效。规则：1-50 个英文、汉字、数字、连接线“-”或下划线“_”。
注意：如果名称与系统中已有负载均衡实例的名称相同，则系统将会自动生成此次创建的负载均衡实例的名称。
 * @method string getVpcId() 获取负载均衡后端目标设备所属的网络 ID，如vpc-12345678。
 * @method void setVpcId(string $VpcId) 设置负载均衡后端目标设备所属的网络 ID，如vpc-12345678。
 * @method integer getNumber() 获取创建负载均衡的个数，默认值 1。
 * @method void setNumber(integer $Number) 设置创建负载均衡的个数，默认值 1。
 * @method LoadBalancerInternetAccessible getInternetAccessible() 获取负载均衡的带宽限制等信息。
 * @method void setInternetAccessible(LoadBalancerInternetAccessible $InternetAccessible) 设置负载均衡的带宽限制等信息。
 * @method array getTags() 获取标签。
 * @method void setTags(array $Tags) 设置标签。
 */
class CreateLoadBalancerRequest extends AbstractModel
{
    /**
     * @var string 区域。
     */
    public $EcmRegion;

    /**
     * @var string 负载均衡实例的网络类型。目前只支持传入OPEN，表示公网属性。
     */
    public $LoadBalancerType;

    /**
     * @var string CMCC | CTCC | CUCC，分别对应 移动 | 电信 | 联通。
     */
    public $VipIsp;

    /**
     * @var string 负载均衡实例的名称，只在创建一个实例的时候才会生效。规则：1-50 个英文、汉字、数字、连接线“-”或下划线“_”。
注意：如果名称与系统中已有负载均衡实例的名称相同，则系统将会自动生成此次创建的负载均衡实例的名称。
     */
    public $LoadBalancerName;

    /**
     * @var string 负载均衡后端目标设备所属的网络 ID，如vpc-12345678。
     */
    public $VpcId;

    /**
     * @var integer 创建负载均衡的个数，默认值 1。
     */
    public $Number;

    /**
     * @var LoadBalancerInternetAccessible 负载均衡的带宽限制等信息。
     */
    public $InternetAccessible;

    /**
     * @var array 标签。
     */
    public $Tags;

    /**
     * @param string $EcmRegion 区域。
     * @param string $LoadBalancerType 负载均衡实例的网络类型。目前只支持传入OPEN，表示公网属性。
     * @param string $VipIsp CMCC | CTCC | CUCC，分别对应 移动 | 电信 | 联通。
     * @param string $LoadBalancerName 负载均衡实例的名称，只在创建一个实例的时候才会生效。规则：1-50 个英文、汉字、数字、连接线“-”或下划线“_”。
注意：如果名称与系统中已有负载均衡实例的名称相同，则系统将会自动生成此次创建的负载均衡实例的名称。
     * @param string $VpcId 负载均衡后端目标设备所属的网络 ID，如vpc-12345678。
     * @param integer $Number 创建负载均衡的个数，默认值 1。
     * @param LoadBalancerInternetAccessible $InternetAccessible 负载均衡的带宽限制等信息。
     * @param array $Tags 标签。
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
        if (array_key_exists("EcmRegion",$param) and $param["EcmRegion"] !== null) {
            $this->EcmRegion = $param["EcmRegion"];
        }

        if (array_key_exists("LoadBalancerType",$param) and $param["LoadBalancerType"] !== null) {
            $this->LoadBalancerType = $param["LoadBalancerType"];
        }

        if (array_key_exists("VipIsp",$param) and $param["VipIsp"] !== null) {
            $this->VipIsp = $param["VipIsp"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new LoadBalancerInternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
