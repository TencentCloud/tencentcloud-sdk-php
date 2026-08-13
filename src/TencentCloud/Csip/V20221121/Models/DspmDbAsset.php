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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库资产
 *
 * @method string getAssetId() 获取<p>资产实例Id</p>
 * @method void setAssetId(string $AssetId) 设置<p>资产实例Id</p>
 * @method string getAssetType() 获取<p>资产类型</p>
 * @method void setAssetType(string $AssetType) 设置<p>资产类型</p>
 * @method string getName() 获取<p>资产名</p>
 * @method void setName(string $Name) 设置<p>资产名</p>
 * @method integer getAccountCount() 获取<p>账号数</p>
 * @method void setAccountCount(integer $AccountCount) 设置<p>账号数</p>
 * @method string getPublicIp() 获取<p>公网访问地址，如果有多个，使用&#39;;&#39;分割</p>
 * @method void setPublicIp(string $PublicIp) 设置<p>公网访问地址，如果有多个，使用&#39;;&#39;分割</p>
 * @method string getPrivateIp() 获取<p>内网访问地址，如果有多个，使用&#39;;&#39;分割</p>
 * @method void setPrivateIp(string $PrivateIp) 设置<p>内网访问地址，如果有多个，使用&#39;;&#39;分割</p>
 * @method string getWanDomain() 获取<p>广域网域名地址，如果有多个，使用&#39;;&#39;分割</p>
 * @method void setWanDomain(string $WanDomain) 设置<p>广域网域名地址，如果有多个，使用&#39;;&#39;分割</p>
 * @method string getRegion() 获取<p>地域</p>
 * @method void setRegion(string $Region) 设置<p>地域</p>
 * @method string getVpcId() 获取<p>资产所在vpc的vpcid</p>
 * @method void setVpcId(string $VpcId) 设置<p>资产所在vpc的vpcid</p>
 * @method string getVpcName() 获取<p>资产所在vpc的vpc名</p>
 * @method void setVpcName(string $VpcName) 设置<p>资产所在vpc的vpc名</p>
 * @method string getSubnetId() 获取<p>资产所在vpc子网的subnetid</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>资产所在vpc子网的subnetid</p>
 * @method string getSubnetName() 获取<p>资产所在vpc子网名</p>
 * @method void setSubnetName(string $SubnetName) 设置<p>资产所在vpc子网名</p>
 * @method integer getStatus() 获取<p>实例状态</p>
 * @method void setStatus(integer $Status) 设置<p>实例状态</p>
 * @method string getCreateTime() 获取<p>创建时间。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间。</p>
 * @method array getManager() 获取<p>管理者信息。</p>
 * @method void setManager(array $Manager) 设置<p>管理者信息。</p>
 * @method integer getBindIdentify() 获取<p>是否绑定身份。0-未绑定 1-已绑定</p>
 * @method void setBindIdentify(integer $BindIdentify) 设置<p>是否绑定身份。0-未绑定 1-已绑定</p>
 * @method integer getIsManager() 获取<p>是否管理员</p>
 * @method void setIsManager(integer $IsManager) 设置<p>是否管理员</p>
 * @method DspmRiskCount getRiskCount() 获取<p>风险统计信息</p>
 * @method void setRiskCount(DspmRiskCount $RiskCount) 设置<p>风险统计信息</p>
 * @method string getSafetyAdvice() 获取<p>安全建议。<br>Resolve 立即解决<br>Reinforcement 加固<br>None 暂无异常</p>
 * @method void setSafetyAdvice(string $SafetyAdvice) 设置<p>安全建议。<br>Resolve 立即解决<br>Reinforcement 加固<br>None 暂无异常</p>
 * @method integer getLogDeliveryStatus() 获取<p>日志投递状态。<br>0-投递关闭 1-投递打开 2-投递开通中 3-投递关闭中</p>
 * @method void setLogDeliveryStatus(integer $LogDeliveryStatus) 设置<p>日志投递状态。<br>0-投递关闭 1-投递打开 2-投递开通中 3-投递关闭中</p>
 * @method integer getLogDeliverySupported() 获取<p>是否支持日志投递。0-不支持 1-支持</p>
 * @method void setLogDeliverySupported(integer $LogDeliverySupported) 设置<p>是否支持日志投递。0-不支持 1-支持</p>
 * @method DspmAssetDataScanDetail getDataScanInfo() 获取<p>数据扫描信息</p>
 * @method void setDataScanInfo(DspmAssetDataScanDetail $DataScanInfo) 设置<p>数据扫描信息</p>
 * @method integer getAppId() 获取<p>资产所属账号app id</p>
 * @method void setAppId(integer $AppId) 设置<p>资产所属账号app id</p>
 * @method string getNickName() 获取<p>账号昵称</p>
 * @method void setNickName(string $NickName) 设置<p>账号昵称</p>
 * @method string getUin() 获取<p>资产所属账号uin</p>
 * @method void setUin(string $Uin) 设置<p>资产所属账号uin</p>
 * @method integer getSecurityAnalyseStatus() 获取<p>安全分析状态（0-关闭 1-打开 2-开通中 3-关闭中）</p>
 * @method void setSecurityAnalyseStatus(integer $SecurityAnalyseStatus) 设置<p>安全分析状态（0-关闭 1-打开 2-开通中 3-关闭中）</p>
 * @method integer getTotalAuditLogs() 获取<p>当前实例的总日志数</p>
 * @method void setTotalAuditLogs(integer $TotalAuditLogs) 设置<p>当前实例的总日志数</p>
 * @method string getLogDeliveryDisableReason() 获取<p>日志审计禁止开通的原因，可选值：VersionNotSupportLogSubscription, InstanceIsUpgrading, CdbRuleAuditEnabled, AssetNotExists</p>
 * @method void setLogDeliveryDisableReason(string $LogDeliveryDisableReason) 设置<p>日志审计禁止开通的原因，可选值：VersionNotSupportLogSubscription, InstanceIsUpgrading, CdbRuleAuditEnabled, AssetNotExists</p>
 * @method integer getOldestOnlineLogTimestamp() 获取<p>在线日志的起始时间戳，精确到秒</p>
 * @method void setOldestOnlineLogTimestamp(integer $OldestOnlineLogTimestamp) 设置<p>在线日志的起始时间戳，精确到秒</p>
 * @method integer getNewestOnlineLogTimestamp() 获取<p>在线日志的最新时间戳，精确到秒</p>
 * @method void setNewestOnlineLogTimestamp(integer $NewestOnlineLogTimestamp) 设置<p>在线日志的最新时间戳，精确到秒</p>
 * @method string getOperationErrorMsg() 获取<p>操作错误信息</p>
 * @method void setOperationErrorMsg(string $OperationErrorMsg) 设置<p>操作错误信息</p>
 * @method integer getAccountOptSupported() 获取<p>是否支持账号操作。0 不支持；1 支持</p>
 * @method void setAccountOptSupported(integer $AccountOptSupported) 设置<p>是否支持账号操作。0 不支持；1 支持</p>
 * @method integer getInstanceType() 获取<p>实例类型</p>
 * @method void setInstanceType(integer $InstanceType) 设置<p>实例类型</p>
 * @method integer getClusterType() 获取<p>集群类型（MongoDB），与云接口 DescribeDBInstances 的 ClusterType 一致：0-副本集 1-分片；非 MongoDB 资产固定 0</p>
 * @method void setClusterType(integer $ClusterType) 设置<p>集群类型（MongoDB），与云接口 DescribeDBInstances 的 ClusterType 一致：0-副本集 1-分片；非 MongoDB 资产固定 0</p>
 * @method integer getIdentifyScanSupported() 获取<p>是否支持敏感数据识别。0 不支持；1 支持</p>
 * @method void setIdentifyScanSupported(integer $IdentifyScanSupported) 设置<p>是否支持敏感数据识别。0 不支持；1 支持</p>
 * @method string getClusterId() 获取<p>集群ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取<p>集群名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterName(string $ClusterName) 设置<p>集群名</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DspmDbAsset extends AbstractModel
{
    /**
     * @var string <p>资产实例Id</p>
     */
    public $AssetId;

    /**
     * @var string <p>资产类型</p>
     */
    public $AssetType;

    /**
     * @var string <p>资产名</p>
     */
    public $Name;

    /**
     * @var integer <p>账号数</p>
     */
    public $AccountCount;

    /**
     * @var string <p>公网访问地址，如果有多个，使用&#39;;&#39;分割</p>
     */
    public $PublicIp;

    /**
     * @var string <p>内网访问地址，如果有多个，使用&#39;;&#39;分割</p>
     */
    public $PrivateIp;

    /**
     * @var string <p>广域网域名地址，如果有多个，使用&#39;;&#39;分割</p>
     */
    public $WanDomain;

    /**
     * @var string <p>地域</p>
     */
    public $Region;

    /**
     * @var string <p>资产所在vpc的vpcid</p>
     */
    public $VpcId;

    /**
     * @var string <p>资产所在vpc的vpc名</p>
     */
    public $VpcName;

    /**
     * @var string <p>资产所在vpc子网的subnetid</p>
     */
    public $SubnetId;

    /**
     * @var string <p>资产所在vpc子网名</p>
     */
    public $SubnetName;

    /**
     * @var integer <p>实例状态</p>
     */
    public $Status;

    /**
     * @var string <p>创建时间。</p>
     */
    public $CreateTime;

    /**
     * @var array <p>管理者信息。</p>
     */
    public $Manager;

    /**
     * @var integer <p>是否绑定身份。0-未绑定 1-已绑定</p>
     */
    public $BindIdentify;

    /**
     * @var integer <p>是否管理员</p>
     */
    public $IsManager;

    /**
     * @var DspmRiskCount <p>风险统计信息</p>
     */
    public $RiskCount;

    /**
     * @var string <p>安全建议。<br>Resolve 立即解决<br>Reinforcement 加固<br>None 暂无异常</p>
     */
    public $SafetyAdvice;

    /**
     * @var integer <p>日志投递状态。<br>0-投递关闭 1-投递打开 2-投递开通中 3-投递关闭中</p>
     */
    public $LogDeliveryStatus;

    /**
     * @var integer <p>是否支持日志投递。0-不支持 1-支持</p>
     */
    public $LogDeliverySupported;

    /**
     * @var DspmAssetDataScanDetail <p>数据扫描信息</p>
     */
    public $DataScanInfo;

    /**
     * @var integer <p>资产所属账号app id</p>
     */
    public $AppId;

    /**
     * @var string <p>账号昵称</p>
     */
    public $NickName;

    /**
     * @var string <p>资产所属账号uin</p>
     */
    public $Uin;

    /**
     * @var integer <p>安全分析状态（0-关闭 1-打开 2-开通中 3-关闭中）</p>
     */
    public $SecurityAnalyseStatus;

    /**
     * @var integer <p>当前实例的总日志数</p>
     */
    public $TotalAuditLogs;

    /**
     * @var string <p>日志审计禁止开通的原因，可选值：VersionNotSupportLogSubscription, InstanceIsUpgrading, CdbRuleAuditEnabled, AssetNotExists</p>
     */
    public $LogDeliveryDisableReason;

    /**
     * @var integer <p>在线日志的起始时间戳，精确到秒</p>
     */
    public $OldestOnlineLogTimestamp;

    /**
     * @var integer <p>在线日志的最新时间戳，精确到秒</p>
     */
    public $NewestOnlineLogTimestamp;

    /**
     * @var string <p>操作错误信息</p>
     */
    public $OperationErrorMsg;

    /**
     * @var integer <p>是否支持账号操作。0 不支持；1 支持</p>
     */
    public $AccountOptSupported;

    /**
     * @var integer <p>实例类型</p>
     */
    public $InstanceType;

    /**
     * @var integer <p>集群类型（MongoDB），与云接口 DescribeDBInstances 的 ClusterType 一致：0-副本集 1-分片；非 MongoDB 资产固定 0</p>
     */
    public $ClusterType;

    /**
     * @var integer <p>是否支持敏感数据识别。0 不支持；1 支持</p>
     */
    public $IdentifyScanSupported;

    /**
     * @var string <p>集群ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string <p>集群名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterName;

    /**
     * @param string $AssetId <p>资产实例Id</p>
     * @param string $AssetType <p>资产类型</p>
     * @param string $Name <p>资产名</p>
     * @param integer $AccountCount <p>账号数</p>
     * @param string $PublicIp <p>公网访问地址，如果有多个，使用&#39;;&#39;分割</p>
     * @param string $PrivateIp <p>内网访问地址，如果有多个，使用&#39;;&#39;分割</p>
     * @param string $WanDomain <p>广域网域名地址，如果有多个，使用&#39;;&#39;分割</p>
     * @param string $Region <p>地域</p>
     * @param string $VpcId <p>资产所在vpc的vpcid</p>
     * @param string $VpcName <p>资产所在vpc的vpc名</p>
     * @param string $SubnetId <p>资产所在vpc子网的subnetid</p>
     * @param string $SubnetName <p>资产所在vpc子网名</p>
     * @param integer $Status <p>实例状态</p>
     * @param string $CreateTime <p>创建时间。</p>
     * @param array $Manager <p>管理者信息。</p>
     * @param integer $BindIdentify <p>是否绑定身份。0-未绑定 1-已绑定</p>
     * @param integer $IsManager <p>是否管理员</p>
     * @param DspmRiskCount $RiskCount <p>风险统计信息</p>
     * @param string $SafetyAdvice <p>安全建议。<br>Resolve 立即解决<br>Reinforcement 加固<br>None 暂无异常</p>
     * @param integer $LogDeliveryStatus <p>日志投递状态。<br>0-投递关闭 1-投递打开 2-投递开通中 3-投递关闭中</p>
     * @param integer $LogDeliverySupported <p>是否支持日志投递。0-不支持 1-支持</p>
     * @param DspmAssetDataScanDetail $DataScanInfo <p>数据扫描信息</p>
     * @param integer $AppId <p>资产所属账号app id</p>
     * @param string $NickName <p>账号昵称</p>
     * @param string $Uin <p>资产所属账号uin</p>
     * @param integer $SecurityAnalyseStatus <p>安全分析状态（0-关闭 1-打开 2-开通中 3-关闭中）</p>
     * @param integer $TotalAuditLogs <p>当前实例的总日志数</p>
     * @param string $LogDeliveryDisableReason <p>日志审计禁止开通的原因，可选值：VersionNotSupportLogSubscription, InstanceIsUpgrading, CdbRuleAuditEnabled, AssetNotExists</p>
     * @param integer $OldestOnlineLogTimestamp <p>在线日志的起始时间戳，精确到秒</p>
     * @param integer $NewestOnlineLogTimestamp <p>在线日志的最新时间戳，精确到秒</p>
     * @param string $OperationErrorMsg <p>操作错误信息</p>
     * @param integer $AccountOptSupported <p>是否支持账号操作。0 不支持；1 支持</p>
     * @param integer $InstanceType <p>实例类型</p>
     * @param integer $ClusterType <p>集群类型（MongoDB），与云接口 DescribeDBInstances 的 ClusterType 一致：0-副本集 1-分片；非 MongoDB 资产固定 0</p>
     * @param integer $IdentifyScanSupported <p>是否支持敏感数据识别。0 不支持；1 支持</p>
     * @param string $ClusterId <p>集群ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName <p>集群名</p>
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
        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AccountCount",$param) and $param["AccountCount"] !== null) {
            $this->AccountCount = $param["AccountCount"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("WanDomain",$param) and $param["WanDomain"] !== null) {
            $this->WanDomain = $param["WanDomain"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Manager",$param) and $param["Manager"] !== null) {
            $this->Manager = [];
            foreach ($param["Manager"] as $key => $value){
                $obj = new DspmUinUser();
                $obj->deserialize($value);
                array_push($this->Manager, $obj);
            }
        }

        if (array_key_exists("BindIdentify",$param) and $param["BindIdentify"] !== null) {
            $this->BindIdentify = $param["BindIdentify"];
        }

        if (array_key_exists("IsManager",$param) and $param["IsManager"] !== null) {
            $this->IsManager = $param["IsManager"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = new DspmRiskCount();
            $this->RiskCount->deserialize($param["RiskCount"]);
        }

        if (array_key_exists("SafetyAdvice",$param) and $param["SafetyAdvice"] !== null) {
            $this->SafetyAdvice = $param["SafetyAdvice"];
        }

        if (array_key_exists("LogDeliveryStatus",$param) and $param["LogDeliveryStatus"] !== null) {
            $this->LogDeliveryStatus = $param["LogDeliveryStatus"];
        }

        if (array_key_exists("LogDeliverySupported",$param) and $param["LogDeliverySupported"] !== null) {
            $this->LogDeliverySupported = $param["LogDeliverySupported"];
        }

        if (array_key_exists("DataScanInfo",$param) and $param["DataScanInfo"] !== null) {
            $this->DataScanInfo = new DspmAssetDataScanDetail();
            $this->DataScanInfo->deserialize($param["DataScanInfo"]);
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SecurityAnalyseStatus",$param) and $param["SecurityAnalyseStatus"] !== null) {
            $this->SecurityAnalyseStatus = $param["SecurityAnalyseStatus"];
        }

        if (array_key_exists("TotalAuditLogs",$param) and $param["TotalAuditLogs"] !== null) {
            $this->TotalAuditLogs = $param["TotalAuditLogs"];
        }

        if (array_key_exists("LogDeliveryDisableReason",$param) and $param["LogDeliveryDisableReason"] !== null) {
            $this->LogDeliveryDisableReason = $param["LogDeliveryDisableReason"];
        }

        if (array_key_exists("OldestOnlineLogTimestamp",$param) and $param["OldestOnlineLogTimestamp"] !== null) {
            $this->OldestOnlineLogTimestamp = $param["OldestOnlineLogTimestamp"];
        }

        if (array_key_exists("NewestOnlineLogTimestamp",$param) and $param["NewestOnlineLogTimestamp"] !== null) {
            $this->NewestOnlineLogTimestamp = $param["NewestOnlineLogTimestamp"];
        }

        if (array_key_exists("OperationErrorMsg",$param) and $param["OperationErrorMsg"] !== null) {
            $this->OperationErrorMsg = $param["OperationErrorMsg"];
        }

        if (array_key_exists("AccountOptSupported",$param) and $param["AccountOptSupported"] !== null) {
            $this->AccountOptSupported = $param["AccountOptSupported"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("IdentifyScanSupported",$param) and $param["IdentifyScanSupported"] !== null) {
            $this->IdentifyScanSupported = $param["IdentifyScanSupported"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }
    }
}
