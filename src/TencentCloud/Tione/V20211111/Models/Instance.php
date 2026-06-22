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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源组节点信息
 *
 * @method string getInstanceId() 获取<p>资源组节点id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>资源组节点id</p>
 * @method ResourceInfo getUsedResource() 获取<p>节点已用资源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsedResource(ResourceInfo $UsedResource) 设置<p>节点已用资源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResourceInfo getTotalResource() 获取<p>节点总资源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalResource(ResourceInfo $TotalResource) 设置<p>节点总资源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceStatus() 获取<p>节点状态<br>注意：此字段为枚举值<br>说明:<br>DEPLOYING: 部署中<br>RUNNING: 运行中<br>DEPLOY_FAILED: 部署失败<br>RELEASING 释放中<br>RELEASED：已释放<br>EXCEPTION：异常<br>DEBT_OR_EXPIRED: 欠费过期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceStatus(string $InstanceStatus) 设置<p>节点状态<br>注意：此字段为枚举值<br>说明:<br>DEPLOYING: 部署中<br>RUNNING: 运行中<br>DEPLOY_FAILED: 部署失败<br>RELEASING 释放中<br>RELEASED：已释放<br>EXCEPTION：异常<br>DEBT_OR_EXPIRED: 欠费过期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubUin() 获取<p>创建人</p>
 * @method void setSubUin(string $SubUin) 设置<p>创建人</p>
 * @method string getCreateTime() 获取<p>创建时间:<br>注意：北京时间，比如: 2021-12-01 12:00:00</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间:<br>注意：北京时间，比如: 2021-12-01 12:00:00</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取<p>到期时间<br>注意：北京时间，比如：2021-12-11 12:00:00</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置<p>到期时间<br>注意：北京时间，比如：2021-12-11 12:00:00</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAutoRenewFlag() 获取<p>自动续费标识<br>注意：此字段为枚举值<br>说明：<br>NOTIFY_AND_MANUAL_RENEW：手动续费(取消自动续费)且到期通知<br>NOTIFY_AND_AUTO_RENEW：自动续费且到期通知<br>DISABLE_NOTIFY_AND_MANUAL_RENEW：手动续费(取消自动续费)且到期不通知</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoRenewFlag(string $AutoRenewFlag) 设置<p>自动续费标识<br>注意：此字段为枚举值<br>说明：<br>NOTIFY_AND_MANUAL_RENEW：手动续费(取消自动续费)且到期通知<br>NOTIFY_AND_AUTO_RENEW：自动续费且到期通知<br>DISABLE_NOTIFY_AND_MANUAL_RENEW：手动续费(取消自动续费)且到期不通知</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpecId() 获取<p>计费项ID</p>
 * @method void setSpecId(string $SpecId) 设置<p>计费项ID</p>
 * @method string getSpecAlias() 获取<p>计费项别名</p>
 * @method void setSpecAlias(string $SpecAlias) 设置<p>计费项别名</p>
 * @method array getSpecFeatures() 获取<p>计费项特性列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecFeatures(array $SpecFeatures) 设置<p>计费项特性列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCvmInstanceId() 获取<p>纳管cvmid</p>
 * @method void setCvmInstanceId(string $CvmInstanceId) 设置<p>纳管cvmid</p>
 * @method string getErrCode() 获取<p>部署失败错误码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrCode(string $ErrCode) 设置<p>部署失败错误码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrMsg() 获取<p>部署失败错误信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrMsg(string $ErrMsg) 设置<p>部署失败错误信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResourceInfo getAvailableResource() 获取<p>节点可用资源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvailableResource(ResourceInfo $AvailableResource) 设置<p>节点可用资源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceIP() 获取<p>资源组节点的IP</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceIP(string $InstanceIP) 设置<p>资源组节点的IP</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取<p>资源组节点的名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置<p>资源组节点的名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCvmInstanceType() 获取<p>cvm机型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCvmInstanceType(string $CvmInstanceType) 设置<p>cvm机型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAutoRenew() 获取<p>是否自动续买</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoRenew(boolean $AutoRenew) 设置<p>是否自动续买</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsolated() 获取<p>是否被隔离</p>
 * @method void setIsolated(boolean $Isolated) 设置<p>是否被隔离</p>
 * @method RepairTaskInfo getRepairTaskInfo() 获取<p>维修任务信息</p>
 * @method void setRepairTaskInfo(RepairTaskInfo $RepairTaskInfo) 设置<p>维修任务信息</p>
 * @method string getZoneName() 获取<p>节点可用区名称</p>
 * @method void setZoneName(string $ZoneName) 设置<p>节点可用区名称</p>
 */
class Instance extends AbstractModel
{
    /**
     * @var string <p>资源组节点id</p>
     */
    public $InstanceId;

    /**
     * @var ResourceInfo <p>节点已用资源</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsedResource;

    /**
     * @var ResourceInfo <p>节点总资源</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalResource;

    /**
     * @var string <p>节点状态<br>注意：此字段为枚举值<br>说明:<br>DEPLOYING: 部署中<br>RUNNING: 运行中<br>DEPLOY_FAILED: 部署失败<br>RELEASING 释放中<br>RELEASED：已释放<br>EXCEPTION：异常<br>DEBT_OR_EXPIRED: 欠费过期</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceStatus;

    /**
     * @var string <p>创建人</p>
     */
    public $SubUin;

    /**
     * @var string <p>创建时间:<br>注意：北京时间，比如: 2021-12-01 12:00:00</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>到期时间<br>注意：北京时间，比如：2021-12-11 12:00:00</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var string <p>自动续费标识<br>注意：此字段为枚举值<br>说明：<br>NOTIFY_AND_MANUAL_RENEW：手动续费(取消自动续费)且到期通知<br>NOTIFY_AND_AUTO_RENEW：自动续费且到期通知<br>DISABLE_NOTIFY_AND_MANUAL_RENEW：手动续费(取消自动续费)且到期不通知</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoRenewFlag;

    /**
     * @var string <p>计费项ID</p>
     */
    public $SpecId;

    /**
     * @var string <p>计费项别名</p>
     */
    public $SpecAlias;

    /**
     * @var array <p>计费项特性列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpecFeatures;

    /**
     * @var string <p>纳管cvmid</p>
     */
    public $CvmInstanceId;

    /**
     * @var string <p>部署失败错误码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrCode;

    /**
     * @var string <p>部署失败错误信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrMsg;

    /**
     * @var ResourceInfo <p>节点可用资源</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvailableResource;

    /**
     * @var string <p>资源组节点的IP</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceIP;

    /**
     * @var string <p>资源组节点的名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string <p>cvm机型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CvmInstanceType;

    /**
     * @var boolean <p>是否自动续买</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoRenew;

    /**
     * @var boolean <p>是否被隔离</p>
     */
    public $Isolated;

    /**
     * @var RepairTaskInfo <p>维修任务信息</p>
     */
    public $RepairTaskInfo;

    /**
     * @var string <p>节点可用区名称</p>
     */
    public $ZoneName;

    /**
     * @param string $InstanceId <p>资源组节点id</p>
     * @param ResourceInfo $UsedResource <p>节点已用资源</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResourceInfo $TotalResource <p>节点总资源</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceStatus <p>节点状态<br>注意：此字段为枚举值<br>说明:<br>DEPLOYING: 部署中<br>RUNNING: 运行中<br>DEPLOY_FAILED: 部署失败<br>RELEASING 释放中<br>RELEASED：已释放<br>EXCEPTION：异常<br>DEBT_OR_EXPIRED: 欠费过期</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubUin <p>创建人</p>
     * @param string $CreateTime <p>创建时间:<br>注意：北京时间，比如: 2021-12-01 12:00:00</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime <p>到期时间<br>注意：北京时间，比如：2021-12-11 12:00:00</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AutoRenewFlag <p>自动续费标识<br>注意：此字段为枚举值<br>说明：<br>NOTIFY_AND_MANUAL_RENEW：手动续费(取消自动续费)且到期通知<br>NOTIFY_AND_AUTO_RENEW：自动续费且到期通知<br>DISABLE_NOTIFY_AND_MANUAL_RENEW：手动续费(取消自动续费)且到期不通知</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SpecId <p>计费项ID</p>
     * @param string $SpecAlias <p>计费项别名</p>
     * @param array $SpecFeatures <p>计费项特性列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CvmInstanceId <p>纳管cvmid</p>
     * @param string $ErrCode <p>部署失败错误码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrMsg <p>部署失败错误信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResourceInfo $AvailableResource <p>节点可用资源</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceIP <p>资源组节点的IP</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName <p>资源组节点的名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CvmInstanceType <p>cvm机型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AutoRenew <p>是否自动续买</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Isolated <p>是否被隔离</p>
     * @param RepairTaskInfo $RepairTaskInfo <p>维修任务信息</p>
     * @param string $ZoneName <p>节点可用区名称</p>
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

        if (array_key_exists("UsedResource",$param) and $param["UsedResource"] !== null) {
            $this->UsedResource = new ResourceInfo();
            $this->UsedResource->deserialize($param["UsedResource"]);
        }

        if (array_key_exists("TotalResource",$param) and $param["TotalResource"] !== null) {
            $this->TotalResource = new ResourceInfo();
            $this->TotalResource->deserialize($param["TotalResource"]);
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("SpecId",$param) and $param["SpecId"] !== null) {
            $this->SpecId = $param["SpecId"];
        }

        if (array_key_exists("SpecAlias",$param) and $param["SpecAlias"] !== null) {
            $this->SpecAlias = $param["SpecAlias"];
        }

        if (array_key_exists("SpecFeatures",$param) and $param["SpecFeatures"] !== null) {
            $this->SpecFeatures = $param["SpecFeatures"];
        }

        if (array_key_exists("CvmInstanceId",$param) and $param["CvmInstanceId"] !== null) {
            $this->CvmInstanceId = $param["CvmInstanceId"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("AvailableResource",$param) and $param["AvailableResource"] !== null) {
            $this->AvailableResource = new ResourceInfo();
            $this->AvailableResource->deserialize($param["AvailableResource"]);
        }

        if (array_key_exists("InstanceIP",$param) and $param["InstanceIP"] !== null) {
            $this->InstanceIP = $param["InstanceIP"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("CvmInstanceType",$param) and $param["CvmInstanceType"] !== null) {
            $this->CvmInstanceType = $param["CvmInstanceType"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("Isolated",$param) and $param["Isolated"] !== null) {
            $this->Isolated = $param["Isolated"];
        }

        if (array_key_exists("RepairTaskInfo",$param) and $param["RepairTaskInfo"] !== null) {
            $this->RepairTaskInfo = new RepairTaskInfo();
            $this->RepairTaskInfo->deserialize($param["RepairTaskInfo"]);
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }
    }
}
