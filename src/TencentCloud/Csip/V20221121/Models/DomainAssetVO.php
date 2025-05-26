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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名资产
 *
 * @method array getAssetId() 获取资产id
 * @method void setAssetId(array $AssetId) 设置资产id
 * @method array getAssetName() 获取资产名
 * @method void setAssetName(array $AssetName) 设置资产名
 * @method array getAssetType() 获取资产类型
 * @method void setAssetType(array $AssetType) 设置资产类型
 * @method array getRegion() 获取地域
 * @method void setRegion(array $Region) 设置地域
 * @method integer getWAFStatus() 获取Waf状态
 * @method void setWAFStatus(integer $WAFStatus) 设置Waf状态
 * @method string getAssetCreateTime() 获取资产创建时间
 * @method void setAssetCreateTime(string $AssetCreateTime) 设置资产创建时间
 * @method integer getAppId() 获取Appid
 * @method void setAppId(integer $AppId) 设置Appid
 * @method string getUin() 获取账号id
 * @method void setUin(string $Uin) 设置账号id
 * @method string getNickName() 获取账号名称
 * @method void setNickName(string $NickName) 设置账号名称
 * @method integer getIsCore() 获取是否核心
 * @method void setIsCore(integer $IsCore) 设置是否核心
 * @method integer getIsCloud() 获取是否云上资产
 * @method void setIsCloud(integer $IsCloud) 设置是否云上资产
 * @method integer getAttack() 获取网络攻击
 * @method void setAttack(integer $Attack) 设置网络攻击
 * @method integer getAccess() 获取网络访问
 * @method void setAccess(integer $Access) 设置网络访问
 * @method integer getIntercept() 获取网络拦截
 * @method void setIntercept(integer $Intercept) 设置网络拦截
 * @method string getInBandwidth() 获取入站峰值带宽
 * @method void setInBandwidth(string $InBandwidth) 设置入站峰值带宽
 * @method string getOutBandwidth() 获取出站峰值带宽
 * @method void setOutBandwidth(string $OutBandwidth) 设置出站峰值带宽
 * @method string getInFlow() 获取入站累计流量
 * @method void setInFlow(string $InFlow) 设置入站累计流量
 * @method string getOutFlow() 获取出站累计流量
 * @method void setOutFlow(string $OutFlow) 设置出站累计流量
 * @method string getLastScanTime() 获取最近扫描时间
 * @method void setLastScanTime(string $LastScanTime) 设置最近扫描时间
 * @method integer getPortRisk() 获取端口风险
 * @method void setPortRisk(integer $PortRisk) 设置端口风险
 * @method integer getVulnerabilityRisk() 获取漏洞风险
 * @method void setVulnerabilityRisk(integer $VulnerabilityRisk) 设置漏洞风险
 * @method integer getConfigurationRisk() 获取配置风险
 * @method void setConfigurationRisk(integer $ConfigurationRisk) 设置配置风险
 * @method integer getScanTask() 获取扫描任务
 * @method void setScanTask(integer $ScanTask) 设置扫描任务
 * @method string getSubDomain() 获取域名
 * @method void setSubDomain(string $SubDomain) 设置域名
 * @method array getSeverIp() 获取解析ip
 * @method void setSeverIp(array $SeverIp) 设置解析ip
 * @method integer getBotCount() 获取bot攻击数量
 * @method void setBotCount(integer $BotCount) 设置bot攻击数量
 * @method integer getWeakPassword() 获取弱口令风险
 * @method void setWeakPassword(integer $WeakPassword) 设置弱口令风险
 * @method integer getWebContentRisk() 获取内容风险
 * @method void setWebContentRisk(integer $WebContentRisk) 设置内容风险
 * @method array getTag() 获取tag标签
 * @method void setTag(array $Tag) 设置tag标签
 * @method string getSourceType() 获取关联实例类型
 * @method void setSourceType(string $SourceType) 设置关联实例类型
 * @method string getMemberId() 获取memberId信息
 * @method void setMemberId(string $MemberId) 设置memberId信息
 * @method integer getCCAttack() 获取cc攻击
 * @method void setCCAttack(integer $CCAttack) 设置cc攻击
 * @method integer getWebAttack() 获取web攻击
 * @method void setWebAttack(integer $WebAttack) 设置web攻击
 * @method integer getServiceRisk() 获取风险服务暴露数量
 * @method void setServiceRisk(integer $ServiceRisk) 设置风险服务暴露数量
 * @method integer getIsNewAsset() 获取是否新资产 1新
 * @method void setIsNewAsset(integer $IsNewAsset) 设置是否新资产 1新
 * @method string getVerifyDomain() 获取待确认资产的随机三级域名
 * @method void setVerifyDomain(string $VerifyDomain) 设置待确认资产的随机三级域名
 * @method string getVerifyTXTRecord() 获取待确认资产的TXT记录内容
 * @method void setVerifyTXTRecord(string $VerifyTXTRecord) 设置待确认资产的TXT记录内容
 * @method integer getVerifyStatus() 获取待确认资产的认证状态，0-待认证，1-认证成功，2-认证中，3-txt认证失败，4-人工认证失败
 * @method void setVerifyStatus(integer $VerifyStatus) 设置待确认资产的认证状态，0-待认证，1-认证成功，2-认证中，3-txt认证失败，4-人工认证失败
 * @method integer getBotAccessCount() 获取bot访问数量
 * @method void setBotAccessCount(integer $BotAccessCount) 设置bot访问数量
 */
class DomainAssetVO extends AbstractModel
{
    /**
     * @var array 资产id
     */
    public $AssetId;

    /**
     * @var array 资产名
     */
    public $AssetName;

    /**
     * @var array 资产类型
     */
    public $AssetType;

    /**
     * @var array 地域
     */
    public $Region;

    /**
     * @var integer Waf状态
     */
    public $WAFStatus;

    /**
     * @var string 资产创建时间
     */
    public $AssetCreateTime;

    /**
     * @var integer Appid
     */
    public $AppId;

    /**
     * @var string 账号id
     */
    public $Uin;

    /**
     * @var string 账号名称
     */
    public $NickName;

    /**
     * @var integer 是否核心
     */
    public $IsCore;

    /**
     * @var integer 是否云上资产
     */
    public $IsCloud;

    /**
     * @var integer 网络攻击
     */
    public $Attack;

    /**
     * @var integer 网络访问
     */
    public $Access;

    /**
     * @var integer 网络拦截
     */
    public $Intercept;

    /**
     * @var string 入站峰值带宽
     */
    public $InBandwidth;

    /**
     * @var string 出站峰值带宽
     */
    public $OutBandwidth;

    /**
     * @var string 入站累计流量
     */
    public $InFlow;

    /**
     * @var string 出站累计流量
     */
    public $OutFlow;

    /**
     * @var string 最近扫描时间
     */
    public $LastScanTime;

    /**
     * @var integer 端口风险
     */
    public $PortRisk;

    /**
     * @var integer 漏洞风险
     */
    public $VulnerabilityRisk;

    /**
     * @var integer 配置风险
     */
    public $ConfigurationRisk;

    /**
     * @var integer 扫描任务
     */
    public $ScanTask;

    /**
     * @var string 域名
     */
    public $SubDomain;

    /**
     * @var array 解析ip
     */
    public $SeverIp;

    /**
     * @var integer bot攻击数量
     */
    public $BotCount;

    /**
     * @var integer 弱口令风险
     */
    public $WeakPassword;

    /**
     * @var integer 内容风险
     */
    public $WebContentRisk;

    /**
     * @var array tag标签
     */
    public $Tag;

    /**
     * @var string 关联实例类型
     */
    public $SourceType;

    /**
     * @var string memberId信息
     */
    public $MemberId;

    /**
     * @var integer cc攻击
     */
    public $CCAttack;

    /**
     * @var integer web攻击
     */
    public $WebAttack;

    /**
     * @var integer 风险服务暴露数量
     */
    public $ServiceRisk;

    /**
     * @var integer 是否新资产 1新
     */
    public $IsNewAsset;

    /**
     * @var string 待确认资产的随机三级域名
     */
    public $VerifyDomain;

    /**
     * @var string 待确认资产的TXT记录内容
     */
    public $VerifyTXTRecord;

    /**
     * @var integer 待确认资产的认证状态，0-待认证，1-认证成功，2-认证中，3-txt认证失败，4-人工认证失败
     */
    public $VerifyStatus;

    /**
     * @var integer bot访问数量
     */
    public $BotAccessCount;

    /**
     * @param array $AssetId 资产id
     * @param array $AssetName 资产名
     * @param array $AssetType 资产类型
     * @param array $Region 地域
     * @param integer $WAFStatus Waf状态
     * @param string $AssetCreateTime 资产创建时间
     * @param integer $AppId Appid
     * @param string $Uin 账号id
     * @param string $NickName 账号名称
     * @param integer $IsCore 是否核心
     * @param integer $IsCloud 是否云上资产
     * @param integer $Attack 网络攻击
     * @param integer $Access 网络访问
     * @param integer $Intercept 网络拦截
     * @param string $InBandwidth 入站峰值带宽
     * @param string $OutBandwidth 出站峰值带宽
     * @param string $InFlow 入站累计流量
     * @param string $OutFlow 出站累计流量
     * @param string $LastScanTime 最近扫描时间
     * @param integer $PortRisk 端口风险
     * @param integer $VulnerabilityRisk 漏洞风险
     * @param integer $ConfigurationRisk 配置风险
     * @param integer $ScanTask 扫描任务
     * @param string $SubDomain 域名
     * @param array $SeverIp 解析ip
     * @param integer $BotCount bot攻击数量
     * @param integer $WeakPassword 弱口令风险
     * @param integer $WebContentRisk 内容风险
     * @param array $Tag tag标签
     * @param string $SourceType 关联实例类型
     * @param string $MemberId memberId信息
     * @param integer $CCAttack cc攻击
     * @param integer $WebAttack web攻击
     * @param integer $ServiceRisk 风险服务暴露数量
     * @param integer $IsNewAsset 是否新资产 1新
     * @param string $VerifyDomain 待确认资产的随机三级域名
     * @param string $VerifyTXTRecord 待确认资产的TXT记录内容
     * @param integer $VerifyStatus 待确认资产的认证状态，0-待认证，1-认证成功，2-认证中，3-txt认证失败，4-人工认证失败
     * @param integer $BotAccessCount bot访问数量
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

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("WAFStatus",$param) and $param["WAFStatus"] !== null) {
            $this->WAFStatus = $param["WAFStatus"];
        }

        if (array_key_exists("AssetCreateTime",$param) and $param["AssetCreateTime"] !== null) {
            $this->AssetCreateTime = $param["AssetCreateTime"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("IsCore",$param) and $param["IsCore"] !== null) {
            $this->IsCore = $param["IsCore"];
        }

        if (array_key_exists("IsCloud",$param) and $param["IsCloud"] !== null) {
            $this->IsCloud = $param["IsCloud"];
        }

        if (array_key_exists("Attack",$param) and $param["Attack"] !== null) {
            $this->Attack = $param["Attack"];
        }

        if (array_key_exists("Access",$param) and $param["Access"] !== null) {
            $this->Access = $param["Access"];
        }

        if (array_key_exists("Intercept",$param) and $param["Intercept"] !== null) {
            $this->Intercept = $param["Intercept"];
        }

        if (array_key_exists("InBandwidth",$param) and $param["InBandwidth"] !== null) {
            $this->InBandwidth = $param["InBandwidth"];
        }

        if (array_key_exists("OutBandwidth",$param) and $param["OutBandwidth"] !== null) {
            $this->OutBandwidth = $param["OutBandwidth"];
        }

        if (array_key_exists("InFlow",$param) and $param["InFlow"] !== null) {
            $this->InFlow = $param["InFlow"];
        }

        if (array_key_exists("OutFlow",$param) and $param["OutFlow"] !== null) {
            $this->OutFlow = $param["OutFlow"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("PortRisk",$param) and $param["PortRisk"] !== null) {
            $this->PortRisk = $param["PortRisk"];
        }

        if (array_key_exists("VulnerabilityRisk",$param) and $param["VulnerabilityRisk"] !== null) {
            $this->VulnerabilityRisk = $param["VulnerabilityRisk"];
        }

        if (array_key_exists("ConfigurationRisk",$param) and $param["ConfigurationRisk"] !== null) {
            $this->ConfigurationRisk = $param["ConfigurationRisk"];
        }

        if (array_key_exists("ScanTask",$param) and $param["ScanTask"] !== null) {
            $this->ScanTask = $param["ScanTask"];
        }

        if (array_key_exists("SubDomain",$param) and $param["SubDomain"] !== null) {
            $this->SubDomain = $param["SubDomain"];
        }

        if (array_key_exists("SeverIp",$param) and $param["SeverIp"] !== null) {
            $this->SeverIp = $param["SeverIp"];
        }

        if (array_key_exists("BotCount",$param) and $param["BotCount"] !== null) {
            $this->BotCount = $param["BotCount"];
        }

        if (array_key_exists("WeakPassword",$param) and $param["WeakPassword"] !== null) {
            $this->WeakPassword = $param["WeakPassword"];
        }

        if (array_key_exists("WebContentRisk",$param) and $param["WebContentRisk"] !== null) {
            $this->WebContentRisk = $param["WebContentRisk"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("CCAttack",$param) and $param["CCAttack"] !== null) {
            $this->CCAttack = $param["CCAttack"];
        }

        if (array_key_exists("WebAttack",$param) and $param["WebAttack"] !== null) {
            $this->WebAttack = $param["WebAttack"];
        }

        if (array_key_exists("ServiceRisk",$param) and $param["ServiceRisk"] !== null) {
            $this->ServiceRisk = $param["ServiceRisk"];
        }

        if (array_key_exists("IsNewAsset",$param) and $param["IsNewAsset"] !== null) {
            $this->IsNewAsset = $param["IsNewAsset"];
        }

        if (array_key_exists("VerifyDomain",$param) and $param["VerifyDomain"] !== null) {
            $this->VerifyDomain = $param["VerifyDomain"];
        }

        if (array_key_exists("VerifyTXTRecord",$param) and $param["VerifyTXTRecord"] !== null) {
            $this->VerifyTXTRecord = $param["VerifyTXTRecord"];
        }

        if (array_key_exists("VerifyStatus",$param) and $param["VerifyStatus"] !== null) {
            $this->VerifyStatus = $param["VerifyStatus"];
        }

        if (array_key_exists("BotAccessCount",$param) and $param["BotAccessCount"] !== null) {
            $this->BotAccessCount = $param["BotAccessCount"];
        }
    }
}
