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
 * 源站组信息
 *
 * @method string getOriginId() 获取源站组ID
 * @method void setOriginId(string $OriginId) 设置源站组ID
 * @method string getOriginName() 获取源站组名称
 * @method void setOriginName(string $OriginName) 设置源站组名称
 * @method string getType() 获取源站组配置类型
area：表示按照Record记录中的Area字段进行按客户端IP所在区域回源。
weight：表示按照Record记录中的Weight字段进行按权重回源。
 * @method void setType(string $Type) 设置源站组配置类型
area：表示按照Record记录中的Area字段进行按客户端IP所在区域回源。
weight：表示按照Record记录中的Weight字段进行按权重回源。
 * @method array getRecord() 获取记录
 * @method void setRecord(array $Record) 设置记录
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getZoneId() 获取站点ID
 * @method void setZoneId(string $ZoneId) 设置站点ID
 * @method string getZoneName() 获取站点名称
 * @method void setZoneName(string $ZoneName) 设置站点名称
 * @method string getOriginType() 获取源站类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginType(string $OriginType) 设置源站类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getApplicationProxyUsed() 获取当前源站组是否被四层代理使用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationProxyUsed(boolean $ApplicationProxyUsed) 设置当前源站组是否被四层代理使用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getLoadBalancingUsed() 获取当前源站组是否被负载均衡使用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancingUsed(boolean $LoadBalancingUsed) 设置当前源站组是否被负载均衡使用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method OriginCheckOriginStatus getStatus() 获取源站状态信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(OriginCheckOriginStatus $Status) 设置源站状态信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLoadBalancingUsedType() 获取使用当前源站组的负载均衡的类型：
none：未被使用
dns_only：被仅DNS类型负载均衡使用
proxied：被代理加速类型负载均衡使用
both：同时被仅DNS和代理加速类型负载均衡使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancingUsedType(string $LoadBalancingUsedType) 设置使用当前源站组的负载均衡的类型：
none：未被使用
dns_only：被仅DNS类型负载均衡使用
proxied：被代理加速类型负载均衡使用
both：同时被仅DNS和代理加速类型负载均衡使用
注意：此字段可能返回 null，表示取不到有效值。
 */
class OriginGroup extends AbstractModel
{
    /**
     * @var string 源站组ID
     */
    public $OriginId;

    /**
     * @var string 源站组名称
     */
    public $OriginName;

    /**
     * @var string 源站组配置类型
area：表示按照Record记录中的Area字段进行按客户端IP所在区域回源。
weight：表示按照Record记录中的Weight字段进行按权重回源。
     */
    public $Type;

    /**
     * @var array 记录
     */
    public $Record;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 站点ID
     */
    public $ZoneId;

    /**
     * @var string 站点名称
     */
    public $ZoneName;

    /**
     * @var string 源站类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginType;

    /**
     * @var boolean 当前源站组是否被四层代理使用。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationProxyUsed;

    /**
     * @var boolean 当前源站组是否被负载均衡使用。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancingUsed;

    /**
     * @var OriginCheckOriginStatus 源站状态信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 使用当前源站组的负载均衡的类型：
none：未被使用
dns_only：被仅DNS类型负载均衡使用
proxied：被代理加速类型负载均衡使用
both：同时被仅DNS和代理加速类型负载均衡使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancingUsedType;

    /**
     * @param string $OriginId 源站组ID
     * @param string $OriginName 源站组名称
     * @param string $Type 源站组配置类型
area：表示按照Record记录中的Area字段进行按客户端IP所在区域回源。
weight：表示按照Record记录中的Weight字段进行按权重回源。
     * @param array $Record 记录
     * @param string $UpdateTime 更新时间
     * @param string $ZoneId 站点ID
     * @param string $ZoneName 站点名称
     * @param string $OriginType 源站类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ApplicationProxyUsed 当前源站组是否被四层代理使用。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $LoadBalancingUsed 当前源站组是否被负载均衡使用。
注意：此字段可能返回 null，表示取不到有效值。
     * @param OriginCheckOriginStatus $Status 源站状态信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LoadBalancingUsedType 使用当前源站组的负载均衡的类型：
none：未被使用
dns_only：被仅DNS类型负载均衡使用
proxied：被代理加速类型负载均衡使用
both：同时被仅DNS和代理加速类型负载均衡使用
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("OriginId",$param) and $param["OriginId"] !== null) {
            $this->OriginId = $param["OriginId"];
        }

        if (array_key_exists("OriginName",$param) and $param["OriginName"] !== null) {
            $this->OriginName = $param["OriginName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Record",$param) and $param["Record"] !== null) {
            $this->Record = [];
            foreach ($param["Record"] as $key => $value){
                $obj = new OriginRecord();
                $obj->deserialize($value);
                array_push($this->Record, $obj);
            }
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            $this->OriginType = $param["OriginType"];
        }

        if (array_key_exists("ApplicationProxyUsed",$param) and $param["ApplicationProxyUsed"] !== null) {
            $this->ApplicationProxyUsed = $param["ApplicationProxyUsed"];
        }

        if (array_key_exists("LoadBalancingUsed",$param) and $param["LoadBalancingUsed"] !== null) {
            $this->LoadBalancingUsed = $param["LoadBalancingUsed"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = new OriginCheckOriginStatus();
            $this->Status->deserialize($param["Status"]);
        }

        if (array_key_exists("LoadBalancingUsedType",$param) and $param["LoadBalancingUsedType"] !== null) {
            $this->LoadBalancingUsedType = $param["LoadBalancingUsedType"];
        }
    }
}
