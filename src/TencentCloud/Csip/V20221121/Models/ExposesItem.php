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
 * @method string getProvider() 获取<p>云厂商</p>
 * @method void setProvider(string $Provider) 设置<p>云厂商</p>
 * @method string getCloudAccountName() 获取<p>云账号名称</p>
 * @method void setCloudAccountName(string $CloudAccountName) 设置<p>云账号名称</p>
 * @method string getCloudAccountId() 获取<p>云账号</p>
 * @method void setCloudAccountId(string $CloudAccountId) 设置<p>云账号</p>
 * @method string getDomain() 获取<p>域名</p>
 * @method void setDomain(string $Domain) 设置<p>域名</p>
 * @method string getIp() 获取<p>IP</p>
 * @method void setIp(string $Ip) 设置<p>IP</p>
 * @method string getPort() 获取<p>端口或者端口范围</p>
 * @method void setPort(string $Port) 设置<p>端口或者端口范围</p>
 * @method string getStatus() 获取<p>开放</p>
 * @method void setStatus(string $Status) 设置<p>开放</p>
 * @method string getRiskType() 获取<p>风险类型</p>
 * @method void setRiskType(string $RiskType) 设置<p>风险类型</p>
 * @method string getAclType() 获取<p>acl类型</p>
 * @method void setAclType(string $AclType) 设置<p>acl类型</p>
 * @method string getAclList() 获取<p>acl列表</p>
 * @method void setAclList(string $AclList) 设置<p>acl列表</p>
 * @method string getAssetId() 获取<p>资产ID</p>
 * @method void setAssetId(string $AssetId) 设置<p>资产ID</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method string getAssetType() 获取<p>资产类型</p>
 * @method void setAssetType(string $AssetType) 设置<p>资产类型</p>
 * @method integer getPortServiceCount() 获取<p>端口服务数量</p>
 * @method void setPortServiceCount(integer $PortServiceCount) 设置<p>端口服务数量</p>
 * @method integer getHighRiskPortServiceCount() 获取<p>高危端口数量</p>
 * @method void setHighRiskPortServiceCount(integer $HighRiskPortServiceCount) 设置<p>高危端口数量</p>
 * @method integer getWebAppCount() 获取<p>web应用数量</p>
 * @method void setWebAppCount(integer $WebAppCount) 设置<p>web应用数量</p>
 * @method integer getRiskWebAppCount() 获取<p>有风险web应用数量</p>
 * @method void setRiskWebAppCount(integer $RiskWebAppCount) 设置<p>有风险web应用数量</p>
 * @method integer getWeakPasswordCount() 获取<p>弱口令数量</p>
 * @method void setWeakPasswordCount(integer $WeakPasswordCount) 设置<p>弱口令数量</p>
 * @method integer getVulCount() 获取<p>漏洞数量</p>
 * @method void setVulCount(integer $VulCount) 设置<p>漏洞数量</p>
 * @method string getCreateTime() 获取<p>首次发现时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>首次发现时间</p>
 * @method string getUpdateTime() 获取<p>最近更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>最近更新时间</p>
 * @method string getAssetTypeName() 获取<p>实例类型名称</p>
 * @method void setAssetTypeName(string $AssetTypeName) 设置<p>实例类型名称</p>
 * @method string getDisplayStatus() 获取<p>开放状态</p>
 * @method void setDisplayStatus(string $DisplayStatus) 设置<p>开放状态</p>
 * @method string getDisplayRiskType() 获取<p>端口状态</p>
 * @method void setDisplayRiskType(string $DisplayRiskType) 设置<p>端口状态</p>
 * @method string getScanTaskStatus() 获取<p>扫描任务状态</p>
 * @method void setScanTaskStatus(string $ScanTaskStatus) 设置<p>扫描任务状态</p>
 * @method string getUuid() 获取<p>uuid</p>
 * @method void setUuid(string $Uuid) 设置<p>uuid</p>
 * @method string getHasScan() 获取<p>是否进行过安全体检</p>
 * @method void setHasScan(string $HasScan) 设置<p>是否进行过安全体检</p>
 * @method integer getAppId() 获取<p>租户ID</p>
 * @method void setAppId(integer $AppId) 设置<p>租户ID</p>
 * @method string getAppIdStr() 获取<p>租户ID字符串</p>
 * @method void setAppIdStr(string $AppIdStr) 设置<p>租户ID字符串</p>
 * @method integer getExposureID() 获取<p>记录ID</p>
 * @method void setExposureID(integer $ExposureID) 设置<p>记录ID</p>
 * @method integer getPortDetectCount() 获取<p>端口开放数量</p>
 * @method void setPortDetectCount(integer $PortDetectCount) 设置<p>端口开放数量</p>
 * @method string getPortDetectResult() 获取<p>端口开放结果</p>
 * @method void setPortDetectResult(string $PortDetectResult) 设置<p>端口开放结果</p>
 * @method string getTag() 获取<p>标签</p>
 * @method void setTag(string $Tag) 设置<p>标签</p>
 * @method string getComment() 获取<p>备注</p>
 * @method void setComment(string $Comment) 设置<p>备注</p>
 * @method integer getToGovernedRiskCount() 获取<p>待治理风险数量</p>
 * @method void setToGovernedRiskCount(integer $ToGovernedRiskCount) 设置<p>待治理风险数量</p>
 * @method string getToGovernedRiskContent() 获取<p>待治理风险内容</p>
 * @method void setToGovernedRiskContent(string $ToGovernedRiskContent) 设置<p>待治理风险内容</p>
 * @method string getAssetTypeIconURL() 获取<p>资产类型图标</p>
 * @method void setAssetTypeIconURL(string $AssetTypeIconURL) 设置<p>资产类型图标</p>
 * @method string getAssetTypeIconSolidURL() 获取<p>资产类型3D图标</p>
 * @method void setAssetTypeIconSolidURL(string $AssetTypeIconSolidURL) 设置<p>资产类型3D图标</p>
 */
class ExposesItem extends AbstractModel
{
    /**
     * @var string <p>云厂商</p>
     */
    public $Provider;

    /**
     * @var string <p>云账号名称</p>
     */
    public $CloudAccountName;

    /**
     * @var string <p>云账号</p>
     */
    public $CloudAccountId;

    /**
     * @var string <p>域名</p>
     */
    public $Domain;

    /**
     * @var string <p>IP</p>
     */
    public $Ip;

    /**
     * @var string <p>端口或者端口范围</p>
     */
    public $Port;

    /**
     * @var string <p>开放</p>
     */
    public $Status;

    /**
     * @var string <p>风险类型</p>
     */
    public $RiskType;

    /**
     * @var string <p>acl类型</p>
     */
    public $AclType;

    /**
     * @var string <p>acl列表</p>
     */
    public $AclList;

    /**
     * @var string <p>资产ID</p>
     */
    public $AssetId;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>资产类型</p>
     */
    public $AssetType;

    /**
     * @var integer <p>端口服务数量</p>
     */
    public $PortServiceCount;

    /**
     * @var integer <p>高危端口数量</p>
     */
    public $HighRiskPortServiceCount;

    /**
     * @var integer <p>web应用数量</p>
     */
    public $WebAppCount;

    /**
     * @var integer <p>有风险web应用数量</p>
     */
    public $RiskWebAppCount;

    /**
     * @var integer <p>弱口令数量</p>
     */
    public $WeakPasswordCount;

    /**
     * @var integer <p>漏洞数量</p>
     */
    public $VulCount;

    /**
     * @var string <p>首次发现时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>最近更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>实例类型名称</p>
     */
    public $AssetTypeName;

    /**
     * @var string <p>开放状态</p>
     */
    public $DisplayStatus;

    /**
     * @var string <p>端口状态</p>
     */
    public $DisplayRiskType;

    /**
     * @var string <p>扫描任务状态</p>
     */
    public $ScanTaskStatus;

    /**
     * @var string <p>uuid</p>
     */
    public $Uuid;

    /**
     * @var string <p>是否进行过安全体检</p>
     */
    public $HasScan;

    /**
     * @var integer <p>租户ID</p>
     */
    public $AppId;

    /**
     * @var string <p>租户ID字符串</p>
     */
    public $AppIdStr;

    /**
     * @var integer <p>记录ID</p>
     */
    public $ExposureID;

    /**
     * @var integer <p>端口开放数量</p>
     */
    public $PortDetectCount;

    /**
     * @var string <p>端口开放结果</p>
     */
    public $PortDetectResult;

    /**
     * @var string <p>标签</p>
     */
    public $Tag;

    /**
     * @var string <p>备注</p>
     */
    public $Comment;

    /**
     * @var integer <p>待治理风险数量</p>
     */
    public $ToGovernedRiskCount;

    /**
     * @var string <p>待治理风险内容</p>
     */
    public $ToGovernedRiskContent;

    /**
     * @var string <p>资产类型图标</p>
     */
    public $AssetTypeIconURL;

    /**
     * @var string <p>资产类型3D图标</p>
     */
    public $AssetTypeIconSolidURL;

    /**
     * @param string $Provider <p>云厂商</p>
     * @param string $CloudAccountName <p>云账号名称</p>
     * @param string $CloudAccountId <p>云账号</p>
     * @param string $Domain <p>域名</p>
     * @param string $Ip <p>IP</p>
     * @param string $Port <p>端口或者端口范围</p>
     * @param string $Status <p>开放</p>
     * @param string $RiskType <p>风险类型</p>
     * @param string $AclType <p>acl类型</p>
     * @param string $AclList <p>acl列表</p>
     * @param string $AssetId <p>资产ID</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param string $AssetType <p>资产类型</p>
     * @param integer $PortServiceCount <p>端口服务数量</p>
     * @param integer $HighRiskPortServiceCount <p>高危端口数量</p>
     * @param integer $WebAppCount <p>web应用数量</p>
     * @param integer $RiskWebAppCount <p>有风险web应用数量</p>
     * @param integer $WeakPasswordCount <p>弱口令数量</p>
     * @param integer $VulCount <p>漏洞数量</p>
     * @param string $CreateTime <p>首次发现时间</p>
     * @param string $UpdateTime <p>最近更新时间</p>
     * @param string $AssetTypeName <p>实例类型名称</p>
     * @param string $DisplayStatus <p>开放状态</p>
     * @param string $DisplayRiskType <p>端口状态</p>
     * @param string $ScanTaskStatus <p>扫描任务状态</p>
     * @param string $Uuid <p>uuid</p>
     * @param string $HasScan <p>是否进行过安全体检</p>
     * @param integer $AppId <p>租户ID</p>
     * @param string $AppIdStr <p>租户ID字符串</p>
     * @param integer $ExposureID <p>记录ID</p>
     * @param integer $PortDetectCount <p>端口开放数量</p>
     * @param string $PortDetectResult <p>端口开放结果</p>
     * @param string $Tag <p>标签</p>
     * @param string $Comment <p>备注</p>
     * @param integer $ToGovernedRiskCount <p>待治理风险数量</p>
     * @param string $ToGovernedRiskContent <p>待治理风险内容</p>
     * @param string $AssetTypeIconURL <p>资产类型图标</p>
     * @param string $AssetTypeIconSolidURL <p>资产类型3D图标</p>
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

        if (array_key_exists("AssetTypeIconURL",$param) and $param["AssetTypeIconURL"] !== null) {
            $this->AssetTypeIconURL = $param["AssetTypeIconURL"];
        }

        if (array_key_exists("AssetTypeIconSolidURL",$param) and $param["AssetTypeIconSolidURL"] !== null) {
            $this->AssetTypeIconSolidURL = $param["AssetTypeIconSolidURL"];
        }
    }
}
