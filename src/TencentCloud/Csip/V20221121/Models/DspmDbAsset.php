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
 * @method string getAssetId() 获取资产实例Id
 * @method void setAssetId(string $AssetId) 设置资产实例Id
 * @method string getAssetType() 获取资产类型
 * @method void setAssetType(string $AssetType) 设置资产类型
 * @method string getName() 获取 资产名
 * @method void setName(string $Name) 设置 资产名
 * @method integer getAccountCount() 获取账号数
 * @method void setAccountCount(integer $AccountCount) 设置账号数
 * @method string getPublicIp() 获取公网访问地址，如果有多个，使用';'分割
 * @method void setPublicIp(string $PublicIp) 设置公网访问地址，如果有多个，使用';'分割
 * @method string getPrivateIp() 获取内网访问地址，如果有多个，使用';'分割
 * @method void setPrivateIp(string $PrivateIp) 设置内网访问地址，如果有多个，使用';'分割
 * @method string getWanDomain() 获取广域网域名地址，如果有多个，使用';'分割
 * @method void setWanDomain(string $WanDomain) 设置广域网域名地址，如果有多个，使用';'分割
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getVpcId() 获取资产所在vpc的vpcid
 * @method void setVpcId(string $VpcId) 设置资产所在vpc的vpcid
 * @method string getVpcName() 获取资产所在vpc的vpc名
 * @method void setVpcName(string $VpcName) 设置资产所在vpc的vpc名
 * @method string getSubnetId() 获取资产所在vpc子网的subnetid
 * @method void setSubnetId(string $SubnetId) 设置资产所在vpc子网的subnetid
 * @method string getSubnetName() 获取资产所在vpc子网名
 * @method void setSubnetName(string $SubnetName) 设置资产所在vpc子网名
 * @method integer getStatus() 获取实例状态
 * @method void setStatus(integer $Status) 设置实例状态
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method array getManager() 获取管理者信息。
 * @method void setManager(array $Manager) 设置管理者信息。
 * @method integer getBindIdentify() 获取是否绑定身份。0-未绑定 1-已绑定
 * @method void setBindIdentify(integer $BindIdentify) 设置是否绑定身份。0-未绑定 1-已绑定
 * @method integer getIsManager() 获取是否管理员
 * @method void setIsManager(integer $IsManager) 设置是否管理员
 * @method DspmRiskCount getRiskCount() 获取风险统计信息
 * @method void setRiskCount(DspmRiskCount $RiskCount) 设置风险统计信息
 * @method string getSafetyAdvice() 获取安全建议。
Resolve 立即解决
Reinforcement 加固
None 暂无异常

 * @method void setSafetyAdvice(string $SafetyAdvice) 设置安全建议。
Resolve 立即解决
Reinforcement 加固
None 暂无异常

 * @method integer getLogDeliveryStatus() 获取日志投递状态。
0-投递关闭 1-投递打开 2-投递开通中 3-投递关闭中
 * @method void setLogDeliveryStatus(integer $LogDeliveryStatus) 设置日志投递状态。
0-投递关闭 1-投递打开 2-投递开通中 3-投递关闭中
 * @method integer getLogDeliverySupported() 获取是否支持日志投递。0-不支持 1-支持
 * @method void setLogDeliverySupported(integer $LogDeliverySupported) 设置是否支持日志投递。0-不支持 1-支持
 * @method DspmAssetDataScanDetail getDataScanInfo() 获取数据扫描信息
 * @method void setDataScanInfo(DspmAssetDataScanDetail $DataScanInfo) 设置数据扫描信息
 * @method integer getAppId() 获取资产所属账号app id
 * @method void setAppId(integer $AppId) 设置资产所属账号app id
 * @method string getNickName() 获取账号昵称
 * @method void setNickName(string $NickName) 设置账号昵称
 * @method string getUin() 获取资产所属账号uin
 * @method void setUin(string $Uin) 设置资产所属账号uin
 * @method integer getSecurityAnalyseStatus() 获取安全分析状态（0-关闭 1-打开 2-开通中 3-关闭中）

 * @method void setSecurityAnalyseStatus(integer $SecurityAnalyseStatus) 设置安全分析状态（0-关闭 1-打开 2-开通中 3-关闭中）

 * @method integer getTotalAuditLogs() 获取当前实例的总日志数
 * @method void setTotalAuditLogs(integer $TotalAuditLogs) 设置当前实例的总日志数
 * @method string getLogDeliveryDisableReason() 获取日志审计禁止开通的原因，可选值：VersionNotSupportLogSubscription, InstanceIsUpgrading, CdbRuleAuditEnabled, AssetNotExists
 * @method void setLogDeliveryDisableReason(string $LogDeliveryDisableReason) 设置日志审计禁止开通的原因，可选值：VersionNotSupportLogSubscription, InstanceIsUpgrading, CdbRuleAuditEnabled, AssetNotExists
 * @method integer getOldestOnlineLogTimestamp() 获取在线日志的起始时间戳，精确到秒
 * @method void setOldestOnlineLogTimestamp(integer $OldestOnlineLogTimestamp) 设置在线日志的起始时间戳，精确到秒
 * @method integer getNewestOnlineLogTimestamp() 获取在线日志的最新时间戳，精确到秒
 * @method void setNewestOnlineLogTimestamp(integer $NewestOnlineLogTimestamp) 设置在线日志的最新时间戳，精确到秒
 * @method string getOperationErrorMsg() 获取操作错误信息
 * @method void setOperationErrorMsg(string $OperationErrorMsg) 设置操作错误信息
 * @method integer getAccountOptSupported() 获取是否支持账号操作。0 不支持；1 支持
 * @method void setAccountOptSupported(integer $AccountOptSupported) 设置是否支持账号操作。0 不支持；1 支持
 * @method integer getInstanceType() 获取实例类型
 * @method void setInstanceType(integer $InstanceType) 设置实例类型
 * @method integer getClusterType() 获取集群类型（MongoDB），与云接口 DescribeDBInstances 的 ClusterType 一致：0-副本集 1-分片；非 MongoDB 资产固定 0
 * @method void setClusterType(integer $ClusterType) 设置集群类型（MongoDB），与云接口 DescribeDBInstances 的 ClusterType 一致：0-副本集 1-分片；非 MongoDB 资产固定 0
 * @method integer getIdentifyScanSupported() 获取是否支持敏感数据识别。0 不支持；1 支持
 * @method void setIdentifyScanSupported(integer $IdentifyScanSupported) 设置是否支持敏感数据识别。0 不支持；1 支持
 */
class DspmDbAsset extends AbstractModel
{
    /**
     * @var string 资产实例Id
     */
    public $AssetId;

    /**
     * @var string 资产类型
     */
    public $AssetType;

    /**
     * @var string  资产名
     */
    public $Name;

    /**
     * @var integer 账号数
     */
    public $AccountCount;

    /**
     * @var string 公网访问地址，如果有多个，使用';'分割
     */
    public $PublicIp;

    /**
     * @var string 内网访问地址，如果有多个，使用';'分割
     */
    public $PrivateIp;

    /**
     * @var string 广域网域名地址，如果有多个，使用';'分割
     */
    public $WanDomain;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 资产所在vpc的vpcid
     */
    public $VpcId;

    /**
     * @var string 资产所在vpc的vpc名
     */
    public $VpcName;

    /**
     * @var string 资产所在vpc子网的subnetid
     */
    public $SubnetId;

    /**
     * @var string 资产所在vpc子网名
     */
    public $SubnetName;

    /**
     * @var integer 实例状态
     */
    public $Status;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @var array 管理者信息。
     */
    public $Manager;

    /**
     * @var integer 是否绑定身份。0-未绑定 1-已绑定
     */
    public $BindIdentify;

    /**
     * @var integer 是否管理员
     */
    public $IsManager;

    /**
     * @var DspmRiskCount 风险统计信息
     */
    public $RiskCount;

    /**
     * @var string 安全建议。
Resolve 立即解决
Reinforcement 加固
None 暂无异常

     */
    public $SafetyAdvice;

    /**
     * @var integer 日志投递状态。
0-投递关闭 1-投递打开 2-投递开通中 3-投递关闭中
     */
    public $LogDeliveryStatus;

    /**
     * @var integer 是否支持日志投递。0-不支持 1-支持
     */
    public $LogDeliverySupported;

    /**
     * @var DspmAssetDataScanDetail 数据扫描信息
     */
    public $DataScanInfo;

    /**
     * @var integer 资产所属账号app id
     */
    public $AppId;

    /**
     * @var string 账号昵称
     */
    public $NickName;

    /**
     * @var string 资产所属账号uin
     */
    public $Uin;

    /**
     * @var integer 安全分析状态（0-关闭 1-打开 2-开通中 3-关闭中）

     */
    public $SecurityAnalyseStatus;

    /**
     * @var integer 当前实例的总日志数
     */
    public $TotalAuditLogs;

    /**
     * @var string 日志审计禁止开通的原因，可选值：VersionNotSupportLogSubscription, InstanceIsUpgrading, CdbRuleAuditEnabled, AssetNotExists
     */
    public $LogDeliveryDisableReason;

    /**
     * @var integer 在线日志的起始时间戳，精确到秒
     */
    public $OldestOnlineLogTimestamp;

    /**
     * @var integer 在线日志的最新时间戳，精确到秒
     */
    public $NewestOnlineLogTimestamp;

    /**
     * @var string 操作错误信息
     */
    public $OperationErrorMsg;

    /**
     * @var integer 是否支持账号操作。0 不支持；1 支持
     */
    public $AccountOptSupported;

    /**
     * @var integer 实例类型
     */
    public $InstanceType;

    /**
     * @var integer 集群类型（MongoDB），与云接口 DescribeDBInstances 的 ClusterType 一致：0-副本集 1-分片；非 MongoDB 资产固定 0
     */
    public $ClusterType;

    /**
     * @var integer 是否支持敏感数据识别。0 不支持；1 支持
     */
    public $IdentifyScanSupported;

    /**
     * @param string $AssetId 资产实例Id
     * @param string $AssetType 资产类型
     * @param string $Name  资产名
     * @param integer $AccountCount 账号数
     * @param string $PublicIp 公网访问地址，如果有多个，使用';'分割
     * @param string $PrivateIp 内网访问地址，如果有多个，使用';'分割
     * @param string $WanDomain 广域网域名地址，如果有多个，使用';'分割
     * @param string $Region 地域
     * @param string $VpcId 资产所在vpc的vpcid
     * @param string $VpcName 资产所在vpc的vpc名
     * @param string $SubnetId 资产所在vpc子网的subnetid
     * @param string $SubnetName 资产所在vpc子网名
     * @param integer $Status 实例状态
     * @param string $CreateTime 创建时间。
     * @param array $Manager 管理者信息。
     * @param integer $BindIdentify 是否绑定身份。0-未绑定 1-已绑定
     * @param integer $IsManager 是否管理员
     * @param DspmRiskCount $RiskCount 风险统计信息
     * @param string $SafetyAdvice 安全建议。
Resolve 立即解决
Reinforcement 加固
None 暂无异常

     * @param integer $LogDeliveryStatus 日志投递状态。
0-投递关闭 1-投递打开 2-投递开通中 3-投递关闭中
     * @param integer $LogDeliverySupported 是否支持日志投递。0-不支持 1-支持
     * @param DspmAssetDataScanDetail $DataScanInfo 数据扫描信息
     * @param integer $AppId 资产所属账号app id
     * @param string $NickName 账号昵称
     * @param string $Uin 资产所属账号uin
     * @param integer $SecurityAnalyseStatus 安全分析状态（0-关闭 1-打开 2-开通中 3-关闭中）

     * @param integer $TotalAuditLogs 当前实例的总日志数
     * @param string $LogDeliveryDisableReason 日志审计禁止开通的原因，可选值：VersionNotSupportLogSubscription, InstanceIsUpgrading, CdbRuleAuditEnabled, AssetNotExists
     * @param integer $OldestOnlineLogTimestamp 在线日志的起始时间戳，精确到秒
     * @param integer $NewestOnlineLogTimestamp 在线日志的最新时间戳，精确到秒
     * @param string $OperationErrorMsg 操作错误信息
     * @param integer $AccountOptSupported 是否支持账号操作。0 不支持；1 支持
     * @param integer $InstanceType 实例类型
     * @param integer $ClusterType 集群类型（MongoDB），与云接口 DescribeDBInstances 的 ClusterType 一致：0-副本集 1-分片；非 MongoDB 资产固定 0
     * @param integer $IdentifyScanSupported 是否支持敏感数据识别。0 不支持；1 支持
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
    }
}
