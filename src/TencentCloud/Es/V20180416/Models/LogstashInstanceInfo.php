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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Logstash实例详细信息
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method integer getAppId() 获取用户ID
 * @method void setAppId(integer $AppId) 设置用户ID
 * @method string getUin() 获取用户UIN
 * @method void setUin(string $Uin) 设置用户UIN
 * @method string getVpcId() 获取实例所属VPC的ID
 * @method void setVpcId(string $VpcId) 设置实例所属VPC的ID
 * @method string getSubnetId() 获取实例所属子网的ID
 * @method void setSubnetId(string $SubnetId) 设置实例所属子网的ID
 * @method integer getStatus() 获取实例状态，0:处理中,1:正常,-1停止,-2:销毁中,-3:已销毁
 * @method void setStatus(integer $Status) 设置实例状态，0:处理中,1:正常,-1停止,-2:销毁中,-3:已销毁
 * @method string getChargeType() 获取实例计费模式。取值范围：  PREPAID：表示预付费，即包年包月  POSTPAID_BY_HOUR：表示后付费，即按量计费  CDHPAID：CDH付费，即只对CDH计费，不对CDH上的实例计费。
 * @method void setChargeType(string $ChargeType) 设置实例计费模式。取值范围：  PREPAID：表示预付费，即包年包月  POSTPAID_BY_HOUR：表示后付费，即按量计费  CDHPAID：CDH付费，即只对CDH计费，不对CDH上的实例计费。
 * @method integer getChargePeriod() 获取包年包月购买时长,单位:月
 * @method void setChargePeriod(integer $ChargePeriod) 设置包年包月购买时长,单位:月
 * @method string getRenewFlag() 获取自动续费标识。取值范围：  NOTIFY_AND_AUTO_RENEW：通知过期且自动续费  NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费  DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知过期不自动续费  默认取值：NOTIFY_AND_AUTO_RENEW。若该参数指定为NOTIFY_AND_AUTO_RENEW，在账户余额充足的情况下，实例到期后将按月自动续费。
 * @method void setRenewFlag(string $RenewFlag) 设置自动续费标识。取值范围：  NOTIFY_AND_AUTO_RENEW：通知过期且自动续费  NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费  DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知过期不自动续费  默认取值：NOTIFY_AND_AUTO_RENEW。若该参数指定为NOTIFY_AND_AUTO_RENEW，在账户余额充足的情况下，实例到期后将按月自动续费。
 * @method string getNodeType() 获取节点规格<li>LOGSTASH.S1.SMALL2：1核2G</li><li>LOGSTASH.S1.MEDIUM4：2核4G</li><li>LOGSTASH.S1.MEDIUM8：2核8G</li><li>LOGSTASH.S1.LARGE16：4核16G</li><li>LOGSTASH.S1.2XLARGE32：8核32G</li><li>LOGSTASH.S1.4XLARGE32：16核32G</li><li>LOGSTASH.S1.4XLARGE64：16核64G</li>
 * @method void setNodeType(string $NodeType) 设置节点规格<li>LOGSTASH.S1.SMALL2：1核2G</li><li>LOGSTASH.S1.MEDIUM4：2核4G</li><li>LOGSTASH.S1.MEDIUM8：2核8G</li><li>LOGSTASH.S1.LARGE16：4核16G</li><li>LOGSTASH.S1.2XLARGE32：8核32G</li><li>LOGSTASH.S1.4XLARGE32：16核32G</li><li>LOGSTASH.S1.4XLARGE64：16核64G</li>
 * @method integer getNodeNum() 获取节点个数
 * @method void setNodeNum(integer $NodeNum) 设置节点个数
 * @method string getDiskType() 获取节点磁盘类型
 * @method void setDiskType(string $DiskType) 设置节点磁盘类型
 * @method integer getDiskSize() 获取节点磁盘大小，单位GB
 * @method void setDiskSize(integer $DiskSize) 设置节点磁盘大小，单位GB
 * @method string getLogstashVersion() 获取Logstash版本号
 * @method void setLogstashVersion(string $LogstashVersion) 设置Logstash版本号
 * @method string getLicenseType() 获取License类型<li>oss：开源版</li><li>xpack：基础版</li>默认值xpack
 * @method void setLicenseType(string $LicenseType) 设置License类型<li>oss：开源版</li><li>xpack：基础版</li>默认值xpack
 * @method string getCreateTime() 获取实例创建时间
 * @method void setCreateTime(string $CreateTime) 设置实例创建时间
 * @method string getUpdateTime() 获取实例最后修改操作时间
 * @method void setUpdateTime(string $UpdateTime) 设置实例最后修改操作时间
 * @method string getDeadline() 获取实例到期时间
 * @method void setDeadline(string $Deadline) 设置实例到期时间
 * @method array getNodes() 获取实例节点类型
 * @method void setNodes(array $Nodes) 设置实例节点类型
 * @method string getBindedESInstanceId() 获取实例绑定的ES集群ID
 * @method void setBindedESInstanceId(string $BindedESInstanceId) 设置实例绑定的ES集群ID
 * @method string getYMLConfig() 获取实例的YML配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setYMLConfig(string $YMLConfig) 设置实例的YML配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExtendedFiles() 获取扩展文件列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtendedFiles(array $ExtendedFiles) 设置扩展文件列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method OperationDuration getOperationDuration() 获取可维护时间段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperationDuration(OperationDuration $OperationDuration) 设置可维护时间段
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCpuNum() 获取CPU数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuNum(integer $CpuNum) 设置CPU数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagList() 获取实例标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagList(array $TagList) 设置实例标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemSize() 获取内存大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemSize(integer $MemSize) 设置内存大小
注意：此字段可能返回 null，表示取不到有效值。
 */
class LogstashInstanceInfo extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var integer 用户ID
     */
    public $AppId;

    /**
     * @var string 用户UIN
     */
    public $Uin;

    /**
     * @var string 实例所属VPC的ID
     */
    public $VpcId;

    /**
     * @var string 实例所属子网的ID
     */
    public $SubnetId;

    /**
     * @var integer 实例状态，0:处理中,1:正常,-1停止,-2:销毁中,-3:已销毁
     */
    public $Status;

    /**
     * @var string 实例计费模式。取值范围：  PREPAID：表示预付费，即包年包月  POSTPAID_BY_HOUR：表示后付费，即按量计费  CDHPAID：CDH付费，即只对CDH计费，不对CDH上的实例计费。
     */
    public $ChargeType;

    /**
     * @var integer 包年包月购买时长,单位:月
     */
    public $ChargePeriod;

    /**
     * @var string 自动续费标识。取值范围：  NOTIFY_AND_AUTO_RENEW：通知过期且自动续费  NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费  DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知过期不自动续费  默认取值：NOTIFY_AND_AUTO_RENEW。若该参数指定为NOTIFY_AND_AUTO_RENEW，在账户余额充足的情况下，实例到期后将按月自动续费。
     */
    public $RenewFlag;

    /**
     * @var string 节点规格<li>LOGSTASH.S1.SMALL2：1核2G</li><li>LOGSTASH.S1.MEDIUM4：2核4G</li><li>LOGSTASH.S1.MEDIUM8：2核8G</li><li>LOGSTASH.S1.LARGE16：4核16G</li><li>LOGSTASH.S1.2XLARGE32：8核32G</li><li>LOGSTASH.S1.4XLARGE32：16核32G</li><li>LOGSTASH.S1.4XLARGE64：16核64G</li>
     */
    public $NodeType;

    /**
     * @var integer 节点个数
     */
    public $NodeNum;

    /**
     * @var string 节点磁盘类型
     */
    public $DiskType;

    /**
     * @var integer 节点磁盘大小，单位GB
     */
    public $DiskSize;

    /**
     * @var string Logstash版本号
     */
    public $LogstashVersion;

    /**
     * @var string License类型<li>oss：开源版</li><li>xpack：基础版</li>默认值xpack
     */
    public $LicenseType;

    /**
     * @var string 实例创建时间
     */
    public $CreateTime;

    /**
     * @var string 实例最后修改操作时间
     */
    public $UpdateTime;

    /**
     * @var string 实例到期时间
     */
    public $Deadline;

    /**
     * @var array 实例节点类型
     */
    public $Nodes;

    /**
     * @var string 实例绑定的ES集群ID
     */
    public $BindedESInstanceId;

    /**
     * @var string 实例的YML配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $YMLConfig;

    /**
     * @var array 扩展文件列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtendedFiles;

    /**
     * @var OperationDuration 可维护时间段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperationDuration;

    /**
     * @var integer CPU数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuNum;

    /**
     * @var array 实例标签信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagList;

    /**
     * @var integer 内存大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemSize;

    /**
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param string $Region 地域
     * @param string $Zone 可用区
     * @param integer $AppId 用户ID
     * @param string $Uin 用户UIN
     * @param string $VpcId 实例所属VPC的ID
     * @param string $SubnetId 实例所属子网的ID
     * @param integer $Status 实例状态，0:处理中,1:正常,-1停止,-2:销毁中,-3:已销毁
     * @param string $ChargeType 实例计费模式。取值范围：  PREPAID：表示预付费，即包年包月  POSTPAID_BY_HOUR：表示后付费，即按量计费  CDHPAID：CDH付费，即只对CDH计费，不对CDH上的实例计费。
     * @param integer $ChargePeriod 包年包月购买时长,单位:月
     * @param string $RenewFlag 自动续费标识。取值范围：  NOTIFY_AND_AUTO_RENEW：通知过期且自动续费  NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费  DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知过期不自动续费  默认取值：NOTIFY_AND_AUTO_RENEW。若该参数指定为NOTIFY_AND_AUTO_RENEW，在账户余额充足的情况下，实例到期后将按月自动续费。
     * @param string $NodeType 节点规格<li>LOGSTASH.S1.SMALL2：1核2G</li><li>LOGSTASH.S1.MEDIUM4：2核4G</li><li>LOGSTASH.S1.MEDIUM8：2核8G</li><li>LOGSTASH.S1.LARGE16：4核16G</li><li>LOGSTASH.S1.2XLARGE32：8核32G</li><li>LOGSTASH.S1.4XLARGE32：16核32G</li><li>LOGSTASH.S1.4XLARGE64：16核64G</li>
     * @param integer $NodeNum 节点个数
     * @param string $DiskType 节点磁盘类型
     * @param integer $DiskSize 节点磁盘大小，单位GB
     * @param string $LogstashVersion Logstash版本号
     * @param string $LicenseType License类型<li>oss：开源版</li><li>xpack：基础版</li>默认值xpack
     * @param string $CreateTime 实例创建时间
     * @param string $UpdateTime 实例最后修改操作时间
     * @param string $Deadline 实例到期时间
     * @param array $Nodes 实例节点类型
     * @param string $BindedESInstanceId 实例绑定的ES集群ID
     * @param string $YMLConfig 实例的YML配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExtendedFiles 扩展文件列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param OperationDuration $OperationDuration 可维护时间段
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CpuNum CPU数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagList 实例标签信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MemSize 内存大小
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

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
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

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("ChargePeriod",$param) and $param["ChargePeriod"] !== null) {
            $this->ChargePeriod = $param["ChargePeriod"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("LogstashVersion",$param) and $param["LogstashVersion"] !== null) {
            $this->LogstashVersion = $param["LogstashVersion"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("Nodes",$param) and $param["Nodes"] !== null) {
            $this->Nodes = [];
            foreach ($param["Nodes"] as $key => $value){
                $obj = new LogstashNodeInfo();
                $obj->deserialize($value);
                array_push($this->Nodes, $obj);
            }
        }

        if (array_key_exists("BindedESInstanceId",$param) and $param["BindedESInstanceId"] !== null) {
            $this->BindedESInstanceId = $param["BindedESInstanceId"];
        }

        if (array_key_exists("YMLConfig",$param) and $param["YMLConfig"] !== null) {
            $this->YMLConfig = $param["YMLConfig"];
        }

        if (array_key_exists("ExtendedFiles",$param) and $param["ExtendedFiles"] !== null) {
            $this->ExtendedFiles = [];
            foreach ($param["ExtendedFiles"] as $key => $value){
                $obj = new LogstashExtendedFile();
                $obj->deserialize($value);
                array_push($this->ExtendedFiles, $obj);
            }
        }

        if (array_key_exists("OperationDuration",$param) and $param["OperationDuration"] !== null) {
            $this->OperationDuration = new OperationDuration();
            $this->OperationDuration->deserialize($param["OperationDuration"]);
        }

        if (array_key_exists("CpuNum",$param) and $param["CpuNum"] !== null) {
            $this->CpuNum = $param["CpuNum"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }
    }
}
