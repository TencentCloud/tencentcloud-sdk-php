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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名列表
 *
 * @method string getDomain() 获取域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResolveAddr() 获取解析地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResolveAddr(array $ResolveAddr) 设置解析地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRegion() 获取地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(array $Region) 设置地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAssetType() 获取资产类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetType(array $AssetType) 设置资产类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRiskVulCount() 获取漏洞风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskVulCount(integer $RiskVulCount) 设置漏洞风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSensitiveCount() 获取敏感内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSensitiveCount(integer $SensitiveCount) 设置敏感内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHorseLinkCount() 获取挂马暗链
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHorseLinkCount(integer $HorseLinkCount) 设置挂马暗链
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWebModifyCount() 获取网页篡改
 * @method void setWebModifyCount(integer $WebModifyCount) 设置网页篡改
 * @method string getScanTime() 获取上次扫描时间
 * @method void setScanTime(string $ScanTime) 设置上次扫描时间
 * @method string getDiscoverTime() 获取最近发现时间
 * @method void setDiscoverTime(string $DiscoverTime) 设置最近发现时间
 * @method integer getScanTaskCount() 获取扫描次数
 * @method void setScanTaskCount(integer $ScanTaskCount) 设置扫描次数
 * @method integer getPortRisk() 获取端口
 * @method void setPortRisk(integer $PortRisk) 设置端口
 * @method integer getWeekPwdCount() 获取弱口令
 * @method void setWeekPwdCount(integer $WeekPwdCount) 设置弱口令
 * @method string getAssetLocation() 获取资产归属
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetLocation(string $AssetLocation) 设置资产归属
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNetworkRisk() 获取网络风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworkRisk(integer $NetworkRisk) 设置网络风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNetworkAttack() 获取网络攻击
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworkAttack(integer $NetworkAttack) 设置网络攻击
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBotVisit() 获取bot访问
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBotVisit(integer $BotVisit) 设置bot访问
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNetworkAccess() 获取网络访问

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworkAccess(integer $NetworkAccess) 设置网络访问

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取资产创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置资产创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWafStatus() 获取waf状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWafStatus(integer $WafStatus) 设置waf状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastScanTime() 获取最近扫描时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastScanTime(string $LastScanTime) 设置最近扫描时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAssetId() 获取资产id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetId(array $AssetId) 设置资产id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAssetName() 获取资产名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetName(array $AssetName) 设置资产名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceType() 获取类别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceType(string $SourceType) 设置类别
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsNotCore() 获取是否核心资产
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsNotCore(integer $IsNotCore) 设置是否核心资产
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsCloud() 获取是否云外资产
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsCloud(integer $IsCloud) 设置是否云外资产
注意：此字段可能返回 null，表示取不到有效值。
 */
class DomainInfo extends AbstractModel
{
    /**
     * @var string 域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @var array 解析地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResolveAddr;

    /**
     * @var array 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var array 资产类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetType;

    /**
     * @var integer 漏洞风险
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskVulCount;

    /**
     * @var integer 敏感内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SensitiveCount;

    /**
     * @var integer 挂马暗链
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HorseLinkCount;

    /**
     * @var integer 网页篡改
     */
    public $WebModifyCount;

    /**
     * @var string 上次扫描时间
     */
    public $ScanTime;

    /**
     * @var string 最近发现时间
     */
    public $DiscoverTime;

    /**
     * @var integer 扫描次数
     */
    public $ScanTaskCount;

    /**
     * @var integer 端口
     */
    public $PortRisk;

    /**
     * @var integer 弱口令
     */
    public $WeekPwdCount;

    /**
     * @var string 资产归属
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetLocation;

    /**
     * @var integer 网络风险
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetworkRisk;

    /**
     * @var integer 网络攻击
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetworkAttack;

    /**
     * @var integer bot访问
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BotVisit;

    /**
     * @var integer 网络访问

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetworkAccess;

    /**
     * @var string 资产创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer waf状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WafStatus;

    /**
     * @var string 最近扫描时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastScanTime;

    /**
     * @var array 资产id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetId;

    /**
     * @var array 资产名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetName;

    /**
     * @var string 类别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceType;

    /**
     * @var integer 是否核心资产
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsNotCore;

    /**
     * @var integer 是否云外资产
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsCloud;

    /**
     * @param string $Domain 域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResolveAddr 解析地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Region 地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AssetType 资产类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RiskVulCount 漏洞风险
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SensitiveCount 敏感内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HorseLinkCount 挂马暗链
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WebModifyCount 网页篡改
     * @param string $ScanTime 上次扫描时间
     * @param string $DiscoverTime 最近发现时间
     * @param integer $ScanTaskCount 扫描次数
     * @param integer $PortRisk 端口
     * @param integer $WeekPwdCount 弱口令
     * @param string $AssetLocation 资产归属
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NetworkRisk 网络风险
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NetworkAttack 网络攻击
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BotVisit bot访问
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NetworkAccess 网络访问

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 资产创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WafStatus waf状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastScanTime 最近扫描时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AssetId 资产id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AssetName 资产名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceType 类别
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsNotCore 是否核心资产
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsCloud 是否云外资产
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("ResolveAddr",$param) and $param["ResolveAddr"] !== null) {
            $this->ResolveAddr = $param["ResolveAddr"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("RiskVulCount",$param) and $param["RiskVulCount"] !== null) {
            $this->RiskVulCount = $param["RiskVulCount"];
        }

        if (array_key_exists("SensitiveCount",$param) and $param["SensitiveCount"] !== null) {
            $this->SensitiveCount = $param["SensitiveCount"];
        }

        if (array_key_exists("HorseLinkCount",$param) and $param["HorseLinkCount"] !== null) {
            $this->HorseLinkCount = $param["HorseLinkCount"];
        }

        if (array_key_exists("WebModifyCount",$param) and $param["WebModifyCount"] !== null) {
            $this->WebModifyCount = $param["WebModifyCount"];
        }

        if (array_key_exists("ScanTime",$param) and $param["ScanTime"] !== null) {
            $this->ScanTime = $param["ScanTime"];
        }

        if (array_key_exists("DiscoverTime",$param) and $param["DiscoverTime"] !== null) {
            $this->DiscoverTime = $param["DiscoverTime"];
        }

        if (array_key_exists("ScanTaskCount",$param) and $param["ScanTaskCount"] !== null) {
            $this->ScanTaskCount = $param["ScanTaskCount"];
        }

        if (array_key_exists("PortRisk",$param) and $param["PortRisk"] !== null) {
            $this->PortRisk = $param["PortRisk"];
        }

        if (array_key_exists("WeekPwdCount",$param) and $param["WeekPwdCount"] !== null) {
            $this->WeekPwdCount = $param["WeekPwdCount"];
        }

        if (array_key_exists("AssetLocation",$param) and $param["AssetLocation"] !== null) {
            $this->AssetLocation = $param["AssetLocation"];
        }

        if (array_key_exists("NetworkRisk",$param) and $param["NetworkRisk"] !== null) {
            $this->NetworkRisk = $param["NetworkRisk"];
        }

        if (array_key_exists("NetworkAttack",$param) and $param["NetworkAttack"] !== null) {
            $this->NetworkAttack = $param["NetworkAttack"];
        }

        if (array_key_exists("BotVisit",$param) and $param["BotVisit"] !== null) {
            $this->BotVisit = $param["BotVisit"];
        }

        if (array_key_exists("NetworkAccess",$param) and $param["NetworkAccess"] !== null) {
            $this->NetworkAccess = $param["NetworkAccess"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("WafStatus",$param) and $param["WafStatus"] !== null) {
            $this->WafStatus = $param["WafStatus"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("IsNotCore",$param) and $param["IsNotCore"] !== null) {
            $this->IsNotCore = $param["IsNotCore"];
        }

        if (array_key_exists("IsCloud",$param) and $param["IsCloud"] !== null) {
            $this->IsCloud = $param["IsCloud"];
        }
    }
}
