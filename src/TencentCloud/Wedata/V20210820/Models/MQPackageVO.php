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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MQPackageVO
 *
 * @method string getType() 获取ckafka消息队列
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置ckafka消息队列
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例Id/集群Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例Id/集群Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取实例名称/集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置实例名称/集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取局域网Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置局域网Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取子网Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置子网Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取资源状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置资源状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusDescription() 获取资源状态描述：保存创建失败，运行异常和更新失败的原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusDescription(string $StatusDescription) 设置资源状态描述：保存创建失败，运行异常和更新失败的原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataProxySpec() 获取DataProxy规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataProxySpec(string $DataProxySpec) 设置DataProxy规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDataProxyNum() 获取DataProxy数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataProxyNum(integer $DataProxyNum) 设置DataProxy数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDataProxyStatus() 获取DataProxy状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataProxyStatus(integer $DataProxyStatus) 设置DataProxy状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataProxyStatusDescription() 获取DataProxy状态描述：保存创建失败，运行异常和更新失败的原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataProxyStatusDescription(string $DataProxyStatusDescription) 设置DataProxy状态描述：保存创建失败，运行异常和更新失败的原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBillingType() 获取计费类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBillingType(string $BillingType) 设置计费类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExpireTime() 获取资源到期时间，时间戳毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(integer $ExpireTime) 设置资源到期时间，时间戳毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLifeTime() 获取资源生命周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLifeTime(integer $LifeTime) 设置资源生命周期
注意：此字段可能返回 null，表示取不到有效值。
 */
class MQPackageVO extends AbstractModel
{
    /**
     * @var string ckafka消息队列
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 实例Id/集群Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 实例名称/集群名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string 局域网Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 子网Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var integer 资源状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 资源状态描述：保存创建失败，运行异常和更新失败的原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusDescription;

    /**
     * @var string DataProxy规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataProxySpec;

    /**
     * @var integer DataProxy数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataProxyNum;

    /**
     * @var integer DataProxy状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataProxyStatus;

    /**
     * @var string DataProxy状态描述：保存创建失败，运行异常和更新失败的原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataProxyStatusDescription;

    /**
     * @var string 计费类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BillingType;

    /**
     * @var integer 资源到期时间，时间戳毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var integer 资源生命周期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LifeTime;

    /**
     * @param string $Type ckafka消息队列
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例Id/集群Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName 实例名称/集群名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId 局域网Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 子网Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 资源状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusDescription 资源状态描述：保存创建失败，运行异常和更新失败的原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataProxySpec DataProxy规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DataProxyNum DataProxy数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DataProxyStatus DataProxy状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataProxyStatusDescription DataProxy状态描述：保存创建失败，运行异常和更新失败的原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BillingType 计费类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExpireTime 资源到期时间，时间戳毫秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LifeTime 资源生命周期
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDescription",$param) and $param["StatusDescription"] !== null) {
            $this->StatusDescription = $param["StatusDescription"];
        }

        if (array_key_exists("DataProxySpec",$param) and $param["DataProxySpec"] !== null) {
            $this->DataProxySpec = $param["DataProxySpec"];
        }

        if (array_key_exists("DataProxyNum",$param) and $param["DataProxyNum"] !== null) {
            $this->DataProxyNum = $param["DataProxyNum"];
        }

        if (array_key_exists("DataProxyStatus",$param) and $param["DataProxyStatus"] !== null) {
            $this->DataProxyStatus = $param["DataProxyStatus"];
        }

        if (array_key_exists("DataProxyStatusDescription",$param) and $param["DataProxyStatusDescription"] !== null) {
            $this->DataProxyStatusDescription = $param["DataProxyStatusDescription"];
        }

        if (array_key_exists("BillingType",$param) and $param["BillingType"] !== null) {
            $this->BillingType = $param["BillingType"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("LifeTime",$param) and $param["LifeTime"] !== null) {
            $this->LifeTime = $param["LifeTime"];
        }
    }
}
