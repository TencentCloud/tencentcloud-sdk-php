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
namespace TencentCloud\Gwlb\V20240906\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网关负载均衡实例的信息
 *
 * @method string getLoadBalancerId() 获取网关负载均衡实例 ID。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置网关负载均衡实例 ID。
 * @method string getLoadBalancerName() 获取网关负载均衡实例的名称。
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置网关负载均衡实例的名称。
 * @method string getVpcId() 获取网关负载均衡所属私有网络。
 * @method void setVpcId(string $VpcId) 设置网关负载均衡所属私有网络。
 * @method string getSubnetId() 获取网关负载均衡所属子网。
 * @method void setSubnetId(string $SubnetId) 设置网关负载均衡所属子网。
 * @method array getVips() 获取网关负载均衡提供服务的虚拟IP。
 * @method void setVips(array $Vips) 设置网关负载均衡提供服务的虚拟IP。
 * @method integer getStatus() 获取网关负载均衡实例状态。
0：创建中，1：正常运行，3：删除中。
 * @method void setStatus(integer $Status) 设置网关负载均衡实例状态。
0：创建中，1：正常运行，3：删除中。
 * @method string getTargetGroupId() 获取关联的目标组唯一ID。
 * @method void setTargetGroupId(string $TargetGroupId) 设置关联的目标组唯一ID。
 * @method boolean getDeleteProtect() 获取是否开启删除保护功能。
 * @method void setDeleteProtect(boolean $DeleteProtect) 设置是否开启删除保护功能。
 * @method array getTags() 获取负载均衡实例的标签信息。
 * @method void setTags(array $Tags) 设置负载均衡实例的标签信息。
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method string getChargeType() 获取网关负载均衡实例的计费类型，POSTPAID_BY_HOUR：按量计费
 * @method void setChargeType(string $ChargeType) 设置网关负载均衡实例的计费类型，POSTPAID_BY_HOUR：按量计费
 * @method integer getIsolation() 获取0：表示未被隔离，1：表示被隔离。
 * @method void setIsolation(integer $Isolation) 设置0：表示未被隔离，1：表示被隔离。
 * @method string getIsolatedTime() 获取负载均衡实例被隔离的时间
 * @method void setIsolatedTime(string $IsolatedTime) 设置负载均衡实例被隔离的时间
 */
class GatewayLoadBalancer extends AbstractModel
{
    /**
     * @var string 网关负载均衡实例 ID。
     */
    public $LoadBalancerId;

    /**
     * @var string 网关负载均衡实例的名称。
     */
    public $LoadBalancerName;

    /**
     * @var string 网关负载均衡所属私有网络。
     */
    public $VpcId;

    /**
     * @var string 网关负载均衡所属子网。
     */
    public $SubnetId;

    /**
     * @var array 网关负载均衡提供服务的虚拟IP。
     */
    public $Vips;

    /**
     * @var integer 网关负载均衡实例状态。
0：创建中，1：正常运行，3：删除中。
     */
    public $Status;

    /**
     * @var string 关联的目标组唯一ID。
     */
    public $TargetGroupId;

    /**
     * @var boolean 是否开启删除保护功能。
     */
    public $DeleteProtect;

    /**
     * @var array 负载均衡实例的标签信息。
     */
    public $Tags;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @var string 网关负载均衡实例的计费类型，POSTPAID_BY_HOUR：按量计费
     */
    public $ChargeType;

    /**
     * @var integer 0：表示未被隔离，1：表示被隔离。
     */
    public $Isolation;

    /**
     * @var string 负载均衡实例被隔离的时间
     */
    public $IsolatedTime;

    /**
     * @param string $LoadBalancerId 网关负载均衡实例 ID。
     * @param string $LoadBalancerName 网关负载均衡实例的名称。
     * @param string $VpcId 网关负载均衡所属私有网络。
     * @param string $SubnetId 网关负载均衡所属子网。
     * @param array $Vips 网关负载均衡提供服务的虚拟IP。
     * @param integer $Status 网关负载均衡实例状态。
0：创建中，1：正常运行，3：删除中。
     * @param string $TargetGroupId 关联的目标组唯一ID。
     * @param boolean $DeleteProtect 是否开启删除保护功能。
     * @param array $Tags 负载均衡实例的标签信息。
     * @param string $CreateTime 创建时间。
     * @param string $ChargeType 网关负载均衡实例的计费类型，POSTPAID_BY_HOUR：按量计费
     * @param integer $Isolation 0：表示未被隔离，1：表示被隔离。
     * @param string $IsolatedTime 负载均衡实例被隔离的时间
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Vips",$param) and $param["Vips"] !== null) {
            $this->Vips = $param["Vips"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TargetGroupId",$param) and $param["TargetGroupId"] !== null) {
            $this->TargetGroupId = $param["TargetGroupId"];
        }

        if (array_key_exists("DeleteProtect",$param) and $param["DeleteProtect"] !== null) {
            $this->DeleteProtect = $param["DeleteProtect"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("Isolation",$param) and $param["Isolation"] !== null) {
            $this->Isolation = $param["Isolation"];
        }

        if (array_key_exists("IsolatedTime",$param) and $param["IsolatedTime"] !== null) {
            $this->IsolatedTime = $param["IsolatedTime"];
        }
    }
}
