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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pulsar标准版或专业版实例信息
 *
 * @method string getInstanceId() 获取<p>实例id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例id</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method string getInstanceVersion() 获取<p>实例版本</p>
 * @method void setInstanceVersion(string $InstanceVersion) 设置<p>实例版本</p>
 * @method integer getStatus() 获取<p>实例状态，0-创建中，1-正常，2-隔离中，3-已销毁，4 - 异常, 5 - 发货失败，6-变配中，7-变配失败</p>
 * @method void setStatus(integer $Status) 设置<p>实例状态，0-创建中，1-正常，2-隔离中，3-已销毁，4 - 异常, 5 - 发货失败，6-变配中，7-变配失败</p>
 * @method string getConfigDisplay() 获取<p>实例配置规格名称</p>
 * @method void setConfigDisplay(string $ConfigDisplay) 设置<p>实例配置规格名称</p>
 * @method integer getMaxTps() 获取<p>峰值TPS</p>
 * @method void setMaxTps(integer $MaxTps) 设置<p>峰值TPS</p>
 * @method integer getMaxStorage() 获取<p>存储容量，GB为单位</p>
 * @method void setMaxStorage(integer $MaxStorage) 设置<p>存储容量，GB为单位</p>
 * @method integer getExpireTime() 获取<p>实例到期时间，毫秒为单位</p>
 * @method void setExpireTime(integer $ExpireTime) 设置<p>实例到期时间，毫秒为单位</p>
 * @method integer getAutoRenewFlag() 获取<p>自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)</p>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置<p>自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)</p>
 * @method integer getPayMode() 获取<p>0-后付费，1-预付费</p>
 * @method void setPayMode(integer $PayMode) 设置<p>0-后付费，1-预付费</p>
 * @method string getRemark() 获取<p>备注信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置<p>备注信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpecName() 获取<p>实例配置ID</p>
 * @method void setSpecName(string $SpecName) 设置<p>实例配置ID</p>
 * @method integer getScalableTps() 获取<p>规格外弹性TPS</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScalableTps(integer $ScalableTps) 设置<p>规格外弹性TPS</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取<p>VPC的id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置<p>VPC的id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取<p>子网id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置<p>子网id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxBandWidth() 获取<p>峰值带宽。单位：mbps</p>
 * @method void setMaxBandWidth(integer $MaxBandWidth) 设置<p>峰值带宽。单位：mbps</p>
 * @method array getTags() 获取<p>集群的标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>集群的标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>集群创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>集群创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBillingLabelVersion() 获取<p>代表是专业版和标准版的不同计费规格<br>PULSAR.P1固定存储<br>PULSAR.P2弹性存储<br>PULSAR.S2标准版</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBillingLabelVersion(string $BillingLabelVersion) 设置<p>代表是专业版和标准版的不同计费规格<br>PULSAR.P1固定存储<br>PULSAR.P2弹性存储<br>PULSAR.S2标准版</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTenant() 获取<p>自定义租户</p>
 * @method void setTenant(string $Tenant) 设置<p>自定义租户</p>
 * @method array getCertificateList() 获取<p>集群的证书列表</p>
 * @method void setCertificateList(array $CertificateList) 设置<p>集群的证书列表</p>
 */
class PulsarProInstance extends AbstractModel
{
    /**
     * @var string <p>实例id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>实例版本</p>
     */
    public $InstanceVersion;

    /**
     * @var integer <p>实例状态，0-创建中，1-正常，2-隔离中，3-已销毁，4 - 异常, 5 - 发货失败，6-变配中，7-变配失败</p>
     */
    public $Status;

    /**
     * @var string <p>实例配置规格名称</p>
     */
    public $ConfigDisplay;

    /**
     * @var integer <p>峰值TPS</p>
     */
    public $MaxTps;

    /**
     * @var integer <p>存储容量，GB为单位</p>
     */
    public $MaxStorage;

    /**
     * @var integer <p>实例到期时间，毫秒为单位</p>
     */
    public $ExpireTime;

    /**
     * @var integer <p>自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)</p>
     */
    public $AutoRenewFlag;

    /**
     * @var integer <p>0-后付费，1-预付费</p>
     */
    public $PayMode;

    /**
     * @var string <p>备注信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string <p>实例配置ID</p>
     */
    public $SpecName;

    /**
     * @var integer <p>规格外弹性TPS</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScalableTps;

    /**
     * @var string <p>VPC的id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string <p>子网id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var integer <p>峰值带宽。单位：mbps</p>
     */
    public $MaxBandWidth;

    /**
     * @var array <p>集群的标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string <p>集群创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>代表是专业版和标准版的不同计费规格<br>PULSAR.P1固定存储<br>PULSAR.P2弹性存储<br>PULSAR.S2标准版</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BillingLabelVersion;

    /**
     * @var string <p>自定义租户</p>
     */
    public $Tenant;

    /**
     * @var array <p>集群的证书列表</p>
     */
    public $CertificateList;

    /**
     * @param string $InstanceId <p>实例id</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param string $InstanceVersion <p>实例版本</p>
     * @param integer $Status <p>实例状态，0-创建中，1-正常，2-隔离中，3-已销毁，4 - 异常, 5 - 发货失败，6-变配中，7-变配失败</p>
     * @param string $ConfigDisplay <p>实例配置规格名称</p>
     * @param integer $MaxTps <p>峰值TPS</p>
     * @param integer $MaxStorage <p>存储容量，GB为单位</p>
     * @param integer $ExpireTime <p>实例到期时间，毫秒为单位</p>
     * @param integer $AutoRenewFlag <p>自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)</p>
     * @param integer $PayMode <p>0-后付费，1-预付费</p>
     * @param string $Remark <p>备注信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SpecName <p>实例配置ID</p>
     * @param integer $ScalableTps <p>规格外弹性TPS</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId <p>VPC的id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId <p>子网id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxBandWidth <p>峰值带宽。单位：mbps</p>
     * @param array $Tags <p>集群的标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>集群创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BillingLabelVersion <p>代表是专业版和标准版的不同计费规格<br>PULSAR.P1固定存储<br>PULSAR.P2弹性存储<br>PULSAR.S2标准版</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Tenant <p>自定义租户</p>
     * @param array $CertificateList <p>集群的证书列表</p>
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

        if (array_key_exists("InstanceVersion",$param) and $param["InstanceVersion"] !== null) {
            $this->InstanceVersion = $param["InstanceVersion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ConfigDisplay",$param) and $param["ConfigDisplay"] !== null) {
            $this->ConfigDisplay = $param["ConfigDisplay"];
        }

        if (array_key_exists("MaxTps",$param) and $param["MaxTps"] !== null) {
            $this->MaxTps = $param["MaxTps"];
        }

        if (array_key_exists("MaxStorage",$param) and $param["MaxStorage"] !== null) {
            $this->MaxStorage = $param["MaxStorage"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("ScalableTps",$param) and $param["ScalableTps"] !== null) {
            $this->ScalableTps = $param["ScalableTps"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("MaxBandWidth",$param) and $param["MaxBandWidth"] !== null) {
            $this->MaxBandWidth = $param["MaxBandWidth"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("BillingLabelVersion",$param) and $param["BillingLabelVersion"] !== null) {
            $this->BillingLabelVersion = $param["BillingLabelVersion"];
        }

        if (array_key_exists("Tenant",$param) and $param["Tenant"] !== null) {
            $this->Tenant = $param["Tenant"];
        }

        if (array_key_exists("CertificateList",$param) and $param["CertificateList"] !== null) {
            $this->CertificateList = [];
            foreach ($param["CertificateList"] as $key => $value){
                $obj = new CertificateInfo();
                $obj->deserialize($value);
                array_push($this->CertificateList, $obj);
            }
        }
    }
}
