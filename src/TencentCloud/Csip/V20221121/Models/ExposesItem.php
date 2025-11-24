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
 * 暴露资产
 *
 * @method string getProvider() 获取云厂商
 * @method void setProvider(string $Provider) 设置云厂商
 * @method string getCloudAccountName() 获取云账号名称
 * @method void setCloudAccountName(string $CloudAccountName) 设置云账号名称
 * @method string getCloudAccountId() 获取云账号
 * @method void setCloudAccountId(string $CloudAccountId) 设置云账号
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getIp() 获取IP
 * @method void setIp(string $Ip) 设置IP
 * @method string getPort() 获取端口或者端口范围
 * @method void setPort(string $Port) 设置端口或者端口范围
 * @method string getStatus() 获取开放
 * @method void setStatus(string $Status) 设置开放
 * @method string getRiskType() 获取风险类型
 * @method void setRiskType(string $RiskType) 设置风险类型
 * @method string getAclType() 获取acl类型
 * @method void setAclType(string $AclType) 设置acl类型
 * @method string getAclList() 获取acl列表
 * @method void setAclList(string $AclList) 设置acl列表
 * @method string getAssetId() 获取资产ID
 * @method void setAssetId(string $AssetId) 设置资产ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getAssetType() 获取资产类型
 * @method void setAssetType(string $AssetType) 设置资产类型
 * @method integer getPortServiceCount() 获取端口服务数量
 * @method void setPortServiceCount(integer $PortServiceCount) 设置端口服务数量
 * @method integer getHighRiskPortServiceCount() 获取高危端口数量
 * @method void setHighRiskPortServiceCount(integer $HighRiskPortServiceCount) 设置高危端口数量
 * @method integer getWebAppCount() 获取web应用数量
 * @method void setWebAppCount(integer $WebAppCount) 设置web应用数量
 * @method integer getRiskWebAppCount() 获取有风险web应用数量
 * @method void setRiskWebAppCount(integer $RiskWebAppCount) 设置有风险web应用数量
 * @method integer getWeakPasswordCount() 获取弱口令数量
 * @method void setWeakPasswordCount(integer $WeakPasswordCount) 设置弱口令数量
 * @method integer getVulCount() 获取漏洞数量
 * @method void setVulCount(integer $VulCount) 设置漏洞数量
 * @method string getCreateTime() 获取首次发现时间
 * @method void setCreateTime(string $CreateTime) 设置首次发现时间
 * @method string getUpdateTime() 获取最近更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置最近更新时间
 * @method string getAssetTypeName() 获取实例类型名称
 * @method void setAssetTypeName(string $AssetTypeName) 设置实例类型名称
 * @method string getDisplayStatus() 获取开放状态
 * @method void setDisplayStatus(string $DisplayStatus) 设置开放状态
 * @method string getDisplayRiskType() 获取端口状态
 * @method void setDisplayRiskType(string $DisplayRiskType) 设置端口状态
 * @method string getScanTaskStatus() 获取扫描任务状态
 * @method void setScanTaskStatus(string $ScanTaskStatus) 设置扫描任务状态
 * @method string getUuid() 获取uuid
 * @method void setUuid(string $Uuid) 设置uuid
 * @method string getHasScan() 获取是否进行过安全体检
 * @method void setHasScan(string $HasScan) 设置是否进行过安全体检
 * @method integer getAppId() 获取租户ID
 * @method void setAppId(integer $AppId) 设置租户ID
 * @method string getAppIdStr() 获取租户ID字符串
 * @method void setAppIdStr(string $AppIdStr) 设置租户ID字符串
 * @method integer getExposureID() 获取记录ID
 * @method void setExposureID(integer $ExposureID) 设置记录ID
 * @method integer getPortDetectCount() 获取端口开放数量
 * @method void setPortDetectCount(integer $PortDetectCount) 设置端口开放数量
 * @method string getPortDetectResult() 获取端口开放结果
 * @method void setPortDetectResult(string $PortDetectResult) 设置端口开放结果
 * @method string getTag() 获取标签
 * @method void setTag(string $Tag) 设置标签
 * @method string getComment() 获取备注
 * @method void setComment(string $Comment) 设置备注
 * @method integer getToGovernedRiskCount() 获取待治理风险数量
 * @method void setToGovernedRiskCount(integer $ToGovernedRiskCount) 设置待治理风险数量
 * @method string getToGovernedRiskContent() 获取待治理风险内容
 * @method void setToGovernedRiskContent(string $ToGovernedRiskContent) 设置待治理风险内容
 */
class ExposesItem extends AbstractModel
{
    /**
     * @var string 云厂商
     */
    public $Provider;

    /**
     * @var string 云账号名称
     */
    public $CloudAccountName;

    /**
     * @var string 云账号
     */
    public $CloudAccountId;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string IP
     */
    public $Ip;

    /**
     * @var string 端口或者端口范围
     */
    public $Port;

    /**
     * @var string 开放
     */
    public $Status;

    /**
     * @var string 风险类型
     */
    public $RiskType;

    /**
     * @var string acl类型
     */
    public $AclType;

    /**
     * @var string acl列表
     */
    public $AclList;

    /**
     * @var string 资产ID
     */
    public $AssetId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 资产类型
     */
    public $AssetType;

    /**
     * @var integer 端口服务数量
     */
    public $PortServiceCount;

    /**
     * @var integer 高危端口数量
     */
    public $HighRiskPortServiceCount;

    /**
     * @var integer web应用数量
     */
    public $WebAppCount;

    /**
     * @var integer 有风险web应用数量
     */
    public $RiskWebAppCount;

    /**
     * @var integer 弱口令数量
     */
    public $WeakPasswordCount;

    /**
     * @var integer 漏洞数量
     */
    public $VulCount;

    /**
     * @var string 首次发现时间
     */
    public $CreateTime;

    /**
     * @var string 最近更新时间
     */
    public $UpdateTime;

    /**
     * @var string 实例类型名称
     */
    public $AssetTypeName;

    /**
     * @var string 开放状态
     */
    public $DisplayStatus;

    /**
     * @var string 端口状态
     */
    public $DisplayRiskType;

    /**
     * @var string 扫描任务状态
     */
    public $ScanTaskStatus;

    /**
     * @var string uuid
     */
    public $Uuid;

    /**
     * @var string 是否进行过安全体检
     */
    public $HasScan;

    /**
     * @var integer 租户ID
     */
    public $AppId;

    /**
     * @var string 租户ID字符串
     */
    public $AppIdStr;

    /**
     * @var integer 记录ID
     */
    public $ExposureID;

    /**
     * @var integer 端口开放数量
     */
    public $PortDetectCount;

    /**
     * @var string 端口开放结果
     */
    public $PortDetectResult;

    /**
     * @var string 标签
     */
    public $Tag;

    /**
     * @var string 备注
     */
    public $Comment;

    /**
     * @var integer 待治理风险数量
     */
    public $ToGovernedRiskCount;

    /**
     * @var string 待治理风险内容
     */
    public $ToGovernedRiskContent;

    /**
     * @param string $Provider 云厂商
     * @param string $CloudAccountName 云账号名称
     * @param string $CloudAccountId 云账号
     * @param string $Domain 域名
     * @param string $Ip IP
     * @param string $Port 端口或者端口范围
     * @param string $Status 开放
     * @param string $RiskType 风险类型
     * @param string $AclType acl类型
     * @param string $AclList acl列表
     * @param string $AssetId 资产ID
     * @param string $InstanceName 实例名称
     * @param string $AssetType 资产类型
     * @param integer $PortServiceCount 端口服务数量
     * @param integer $HighRiskPortServiceCount 高危端口数量
     * @param integer $WebAppCount web应用数量
     * @param integer $RiskWebAppCount 有风险web应用数量
     * @param integer $WeakPasswordCount 弱口令数量
     * @param integer $VulCount 漏洞数量
     * @param string $CreateTime 首次发现时间
     * @param string $UpdateTime 最近更新时间
     * @param string $AssetTypeName 实例类型名称
     * @param string $DisplayStatus 开放状态
     * @param string $DisplayRiskType 端口状态
     * @param string $ScanTaskStatus 扫描任务状态
     * @param string $Uuid uuid
     * @param string $HasScan 是否进行过安全体检
     * @param integer $AppId 租户ID
     * @param string $AppIdStr 租户ID字符串
     * @param integer $ExposureID 记录ID
     * @param integer $PortDetectCount 端口开放数量
     * @param string $PortDetectResult 端口开放结果
     * @param string $Tag 标签
     * @param string $Comment 备注
     * @param integer $ToGovernedRiskCount 待治理风险数量
     * @param string $ToGovernedRiskContent 待治理风险内容
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
        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("CloudAccountName",$param) and $param["CloudAccountName"] !== null) {
            $this->CloudAccountName = $param["CloudAccountName"];
        }

        if (array_key_exists("CloudAccountId",$param) and $param["CloudAccountId"] !== null) {
            $this->CloudAccountId = $param["CloudAccountId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("AclType",$param) and $param["AclType"] !== null) {
            $this->AclType = $param["AclType"];
        }

        if (array_key_exists("AclList",$param) and $param["AclList"] !== null) {
            $this->AclList = $param["AclList"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("PortServiceCount",$param) and $param["PortServiceCount"] !== null) {
            $this->PortServiceCount = $param["PortServiceCount"];
        }

        if (array_key_exists("HighRiskPortServiceCount",$param) and $param["HighRiskPortServiceCount"] !== null) {
            $this->HighRiskPortServiceCount = $param["HighRiskPortServiceCount"];
        }

        if (array_key_exists("WebAppCount",$param) and $param["WebAppCount"] !== null) {
            $this->WebAppCount = $param["WebAppCount"];
        }

        if (array_key_exists("RiskWebAppCount",$param) and $param["RiskWebAppCount"] !== null) {
            $this->RiskWebAppCount = $param["RiskWebAppCount"];
        }

        if (array_key_exists("WeakPasswordCount",$param) and $param["WeakPasswordCount"] !== null) {
            $this->WeakPasswordCount = $param["WeakPasswordCount"];
        }

        if (array_key_exists("VulCount",$param) and $param["VulCount"] !== null) {
            $this->VulCount = $param["VulCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("AssetTypeName",$param) and $param["AssetTypeName"] !== null) {
            $this->AssetTypeName = $param["AssetTypeName"];
        }

        if (array_key_exists("DisplayStatus",$param) and $param["DisplayStatus"] !== null) {
            $this->DisplayStatus = $param["DisplayStatus"];
        }

        if (array_key_exists("DisplayRiskType",$param) and $param["DisplayRiskType"] !== null) {
            $this->DisplayRiskType = $param["DisplayRiskType"];
        }

        if (array_key_exists("ScanTaskStatus",$param) and $param["ScanTaskStatus"] !== null) {
            $this->ScanTaskStatus = $param["ScanTaskStatus"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("HasScan",$param) and $param["HasScan"] !== null) {
            $this->HasScan = $param["HasScan"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AppIdStr",$param) and $param["AppIdStr"] !== null) {
            $this->AppIdStr = $param["AppIdStr"];
        }

        if (array_key_exists("ExposureID",$param) and $param["ExposureID"] !== null) {
            $this->ExposureID = $param["ExposureID"];
        }

        if (array_key_exists("PortDetectCount",$param) and $param["PortDetectCount"] !== null) {
            $this->PortDetectCount = $param["PortDetectCount"];
        }

        if (array_key_exists("PortDetectResult",$param) and $param["PortDetectResult"] !== null) {
            $this->PortDetectResult = $param["PortDetectResult"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("ToGovernedRiskCount",$param) and $param["ToGovernedRiskCount"] !== null) {
            $this->ToGovernedRiskCount = $param["ToGovernedRiskCount"];
        }

        if (array_key_exists("ToGovernedRiskContent",$param) and $param["ToGovernedRiskContent"] !== null) {
            $this->ToGovernedRiskContent = $param["ToGovernedRiskContent"];
        }
    }
}
