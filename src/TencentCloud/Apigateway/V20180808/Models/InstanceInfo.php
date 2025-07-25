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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 独享实例信息
 *
 * @method string getInstanceId() 获取独享实例唯一id
 * @method void setInstanceId(string $InstanceId) 设置独享实例唯一id
 * @method string getInstanceName() 获取独享实例name
 * @method void setInstanceName(string $InstanceName) 设置独享实例name
 * @method string getInstanceDescription() 获取独享实例描述
 * @method void setInstanceDescription(string $InstanceDescription) 设置独享实例描述
 * @method string getInstanceChargeType() 获取独享实例计费类型
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置独享实例计费类型
 * @method string getInstanceType() 获取独享实例类型
 * @method void setInstanceType(string $InstanceType) 设置独享实例类型
 * @method string getInstanceState() 获取独享实例状态
 * @method void setInstanceState(string $InstanceState) 设置独享实例状态
 * @method string getCreatedTime() 获取独享实例创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置独享实例创建时间
 * @method string getDealName() 获取订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDealName(string $DealName) 设置订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceId() 获取资源ID同唯一id
 * @method void setResourceId(string $ResourceId) 设置资源ID同唯一id
 * @method array getOuterIpList() 获取公网IP列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOuterIpList(array $OuterIpList) 设置公网IP列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInnerIpList() 获取内网IP列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInnerIpList(array $InnerIpList) 设置内网IP列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method InstanceChargePrepaid getInstanceChargePrepaid() 获取专享实例计费信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) 设置专享实例计费信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUniqVpcId() 获取所属vpc
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUniqVpcId(string $UniqVpcId) 设置所属vpc
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var string 独享实例唯一id
     */
    public $InstanceId;

    /**
     * @var string 独享实例name
     */
    public $InstanceName;

    /**
     * @var string 独享实例描述
     */
    public $InstanceDescription;

    /**
     * @var string 独享实例计费类型
     */
    public $InstanceChargeType;

    /**
     * @var string 独享实例类型
     */
    public $InstanceType;

    /**
     * @var string 独享实例状态
     */
    public $InstanceState;

    /**
     * @var string 独享实例创建时间
     */
    public $CreatedTime;

    /**
     * @var string 订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DealName;

    /**
     * @var string 资源ID同唯一id
     */
    public $ResourceId;

    /**
     * @var array 公网IP列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OuterIpList;

    /**
     * @var array 内网IP列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InnerIpList;

    /**
     * @var InstanceChargePrepaid 专享实例计费信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceChargePrepaid;

    /**
     * @var string 所属vpc
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UniqVpcId;

    /**
     * @param string $InstanceId 独享实例唯一id
     * @param string $InstanceName 独享实例name
     * @param string $InstanceDescription 独享实例描述
     * @param string $InstanceChargeType 独享实例计费类型
     * @param string $InstanceType 独享实例类型
     * @param string $InstanceState 独享实例状态
     * @param string $CreatedTime 独享实例创建时间
     * @param string $DealName 订单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceId 资源ID同唯一id
     * @param array $OuterIpList 公网IP列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InnerIpList 内网IP列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param InstanceChargePrepaid $InstanceChargePrepaid 专享实例计费信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UniqVpcId 所属vpc
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceDescription",$param) and $param["InstanceDescription"] !== null) {
            $this->InstanceDescription = $param["InstanceDescription"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("DealName",$param) and $param["DealName"] !== null) {
            $this->DealName = $param["DealName"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("OuterIpList",$param) and $param["OuterIpList"] !== null) {
            $this->OuterIpList = $param["OuterIpList"];
        }

        if (array_key_exists("InnerIpList",$param) and $param["InnerIpList"] !== null) {
            $this->InnerIpList = $param["InnerIpList"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }
    }
}
