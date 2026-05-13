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
 * Dspm资产安全分析状态
 *
 * @method integer getAppId() 获取资产所属账号app id
 * @method void setAppId(integer $AppId) 设置资产所属账号app id
 * @method string getAssetId() 获取资产实例Id
 * @method void setAssetId(string $AssetId) 设置资产实例Id
 * @method string getAssetType() 获取资产类型
 * @method void setAssetType(string $AssetType) 设置资产类型
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method integer getIdentifyScanSupported() 获取是否支持敏感数据识别。0 不支持；1 支持
 * @method void setIdentifyScanSupported(integer $IdentifyScanSupported) 设置是否支持敏感数据识别。0 不支持；1 支持
 * @method integer getLogDeliverySupported() 获取是否支持日志投递。0-不支持 1-支持
 * @method void setLogDeliverySupported(integer $LogDeliverySupported) 设置是否支持日志投递。0-不支持 1-支持
 * @method integer getSecurityAnalyseStatus() 获取安全分析状态（0-关闭 1-打开 2-开通中 3-关闭中）

 * @method void setSecurityAnalyseStatus(integer $SecurityAnalyseStatus) 设置安全分析状态（0-关闭 1-打开 2-开通中 3-关闭中）

 * @method integer getLogDeliveryStatus() 获取日志投递状态。
0-投递关闭 1-投递打开 2-投递开通中 3-投递关闭中
 * @method void setLogDeliveryStatus(integer $LogDeliveryStatus) 设置日志投递状态。
0-投递关闭 1-投递打开 2-投递开通中 3-投递关闭中
 * @method string getLogDeliveryDisableReason() 获取日志审计禁止开通的原因，可选值：VersionNotSupportLogSubscription, InstanceIsUpgrading,CdbRuleAuditEnabled
 * @method void setLogDeliveryDisableReason(string $LogDeliveryDisableReason) 设置日志审计禁止开通的原因，可选值：VersionNotSupportLogSubscription, InstanceIsUpgrading,CdbRuleAuditEnabled
 * @method integer getTotalAuditLogs() 获取当前实例的总日志数
 * @method void setTotalAuditLogs(integer $TotalAuditLogs) 设置当前实例的总日志数
 * @method integer getDataScanDetailRuleCount() 获取已识别敏感数据项个数
 * @method void setDataScanDetailRuleCount(integer $DataScanDetailRuleCount) 设置已识别敏感数据项个数
 * @method string getOperationErrorMsg() 获取操作错误信息
 * @method void setOperationErrorMsg(string $OperationErrorMsg) 设置操作错误信息
 */
class DspmAssetSecurityAnalyseStatus extends AbstractModel
{
    /**
     * @var integer 资产所属账号app id
     */
    public $AppId;

    /**
     * @var string 资产实例Id
     */
    public $AssetId;

    /**
     * @var string 资产类型
     */
    public $AssetType;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var integer 是否支持敏感数据识别。0 不支持；1 支持
     */
    public $IdentifyScanSupported;

    /**
     * @var integer 是否支持日志投递。0-不支持 1-支持
     */
    public $LogDeliverySupported;

    /**
     * @var integer 安全分析状态（0-关闭 1-打开 2-开通中 3-关闭中）

     */
    public $SecurityAnalyseStatus;

    /**
     * @var integer 日志投递状态。
0-投递关闭 1-投递打开 2-投递开通中 3-投递关闭中
     */
    public $LogDeliveryStatus;

    /**
     * @var string 日志审计禁止开通的原因，可选值：VersionNotSupportLogSubscription, InstanceIsUpgrading,CdbRuleAuditEnabled
     */
    public $LogDeliveryDisableReason;

    /**
     * @var integer 当前实例的总日志数
     */
    public $TotalAuditLogs;

    /**
     * @var integer 已识别敏感数据项个数
     */
    public $DataScanDetailRuleCount;

    /**
     * @var string 操作错误信息
     */
    public $OperationErrorMsg;

    /**
     * @param integer $AppId 资产所属账号app id
     * @param string $AssetId 资产实例Id
     * @param string $AssetType 资产类型
     * @param string $Region 地域
     * @param integer $IdentifyScanSupported 是否支持敏感数据识别。0 不支持；1 支持
     * @param integer $LogDeliverySupported 是否支持日志投递。0-不支持 1-支持
     * @param integer $SecurityAnalyseStatus 安全分析状态（0-关闭 1-打开 2-开通中 3-关闭中）

     * @param integer $LogDeliveryStatus 日志投递状态。
0-投递关闭 1-投递打开 2-投递开通中 3-投递关闭中
     * @param string $LogDeliveryDisableReason 日志审计禁止开通的原因，可选值：VersionNotSupportLogSubscription, InstanceIsUpgrading,CdbRuleAuditEnabled
     * @param integer $TotalAuditLogs 当前实例的总日志数
     * @param integer $DataScanDetailRuleCount 已识别敏感数据项个数
     * @param string $OperationErrorMsg 操作错误信息
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("IdentifyScanSupported",$param) and $param["IdentifyScanSupported"] !== null) {
            $this->IdentifyScanSupported = $param["IdentifyScanSupported"];
        }

        if (array_key_exists("LogDeliverySupported",$param) and $param["LogDeliverySupported"] !== null) {
            $this->LogDeliverySupported = $param["LogDeliverySupported"];
        }

        if (array_key_exists("SecurityAnalyseStatus",$param) and $param["SecurityAnalyseStatus"] !== null) {
            $this->SecurityAnalyseStatus = $param["SecurityAnalyseStatus"];
        }

        if (array_key_exists("LogDeliveryStatus",$param) and $param["LogDeliveryStatus"] !== null) {
            $this->LogDeliveryStatus = $param["LogDeliveryStatus"];
        }

        if (array_key_exists("LogDeliveryDisableReason",$param) and $param["LogDeliveryDisableReason"] !== null) {
            $this->LogDeliveryDisableReason = $param["LogDeliveryDisableReason"];
        }

        if (array_key_exists("TotalAuditLogs",$param) and $param["TotalAuditLogs"] !== null) {
            $this->TotalAuditLogs = $param["TotalAuditLogs"];
        }

        if (array_key_exists("DataScanDetailRuleCount",$param) and $param["DataScanDetailRuleCount"] !== null) {
            $this->DataScanDetailRuleCount = $param["DataScanDetailRuleCount"];
        }

        if (array_key_exists("OperationErrorMsg",$param) and $param["OperationErrorMsg"] !== null) {
            $this->OperationErrorMsg = $param["OperationErrorMsg"];
        }
    }
}
