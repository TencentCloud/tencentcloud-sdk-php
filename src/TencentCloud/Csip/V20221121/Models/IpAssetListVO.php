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
 * ip列表
 *
 * @method string getAssetId() 获取资产id
 * @method void setAssetId(string $AssetId) 设置资产id
 * @method string getAssetName() 获取资产name
 * @method void setAssetName(string $AssetName) 设置资产name
 * @method string getAssetType() 获取资产类型
 * @method void setAssetType(string $AssetType) 设置资产类型
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method integer getCFWStatus() 获取云防状态
 * @method void setCFWStatus(integer $CFWStatus) 设置云防状态
 * @method string getAssetCreateTime() 获取资产创建时间
 * @method void setAssetCreateTime(string $AssetCreateTime) 设置资产创建时间
 * @method string getPublicIp() 获取公网IP
 * @method void setPublicIp(string $PublicIp) 设置公网IP
 * @method integer getPublicIpType() 获取公网ip类型
 * @method void setPublicIpType(integer $PublicIpType) 设置公网ip类型
 * @method string getVpcId() 获取vpc
 * @method void setVpcId(string $VpcId) 设置vpc
 * @method string getVpcName() 获取vpc名
 * @method void setVpcName(string $VpcName) 设置vpc名
 * @method integer getAppId() 获取appid
 * @method void setAppId(integer $AppId) 设置appid
 * @method string getUin() 获取用户uin
 * @method void setUin(string $Uin) 设置用户uin
 * @method string getNickName() 获取名称
 * @method void setNickName(string $NickName) 设置名称
 * @method integer getIsCore() 获取核心
 * @method void setIsCore(integer $IsCore) 设置核心
 * @method integer getIsCloud() 获取云上
 * @method void setIsCloud(integer $IsCloud) 设置云上
 * @method integer getAttack() 获取网络攻击
 * @method void setAttack(integer $Attack) 设置网络攻击
 * @method integer getAccess() 获取网络访问
 * @method void setAccess(integer $Access) 设置网络访问
 * @method integer getIntercept() 获取网络拦截
 * @method void setIntercept(integer $Intercept) 设置网络拦截
 * @method string getInBandwidth() 获取入向带宽
 * @method void setInBandwidth(string $InBandwidth) 设置入向带宽
 * @method string getOutBandwidth() 获取出向带宽
 * @method void setOutBandwidth(string $OutBandwidth) 设置出向带宽
 * @method string getInFlow() 获取入向流量
 * @method void setInFlow(string $InFlow) 设置入向流量
 * @method string getOutFlow() 获取出向流量
 * @method void setOutFlow(string $OutFlow) 设置出向流量
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
 * @method integer getWeakPassword() 获取弱口令
 * @method void setWeakPassword(integer $WeakPassword) 设置弱口令
 * @method integer getWebContentRisk() 获取内容风险
 * @method void setWebContentRisk(integer $WebContentRisk) 设置内容风险
 * @method array getTag() 获取标签
 * @method void setTag(array $Tag) 设置标签
 * @method string getAddressId() 获取eip主键
 * @method void setAddressId(string $AddressId) 设置eip主键
 * @method string getMemberId() 获取MemberId信息
 * @method void setMemberId(string $MemberId) 设置MemberId信息
 * @method integer getRiskExposure() 获取风险服务暴露
 * @method void setRiskExposure(integer $RiskExposure) 设置风险服务暴露
 * @method integer getIsNewAsset() 获取是否新资产 1新
 * @method void setIsNewAsset(integer $IsNewAsset) 设置是否新资产 1新
 * @method integer getVerifyStatus() 获取资产认证状态，0-待认证，1-认证成功，2-认证中，3+-认证失败
 * @method void setVerifyStatus(integer $VerifyStatus) 设置资产认证状态，0-待认证，1-认证成功，2-认证中，3+-认证失败
 */
class IpAssetListVO extends AbstractModel
{
    /**
     * @var string 资产id
     */
    public $AssetId;

    /**
     * @var string 资产name
     */
    public $AssetName;

    /**
     * @var string 资产类型
     */
    public $AssetType;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var integer 云防状态
     */
    public $CFWStatus;

    /**
     * @var string 资产创建时间
     */
    public $AssetCreateTime;

    /**
     * @var string 公网IP
     */
    public $PublicIp;

    /**
     * @var integer 公网ip类型
     */
    public $PublicIpType;

    /**
     * @var string vpc
     */
    public $VpcId;

    /**
     * @var string vpc名
     */
    public $VpcName;

    /**
     * @var integer appid
     */
    public $AppId;

    /**
     * @var string 用户uin
     */
    public $Uin;

    /**
     * @var string 名称
     */
    public $NickName;

    /**
     * @var integer 核心
     */
    public $IsCore;

    /**
     * @var integer 云上
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
     * @var string 入向带宽
     */
    public $InBandwidth;

    /**
     * @var string 出向带宽
     */
    public $OutBandwidth;

    /**
     * @var string 入向流量
     */
    public $InFlow;

    /**
     * @var string 出向流量
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
     * @var integer 弱口令
     */
    public $WeakPassword;

    /**
     * @var integer 内容风险
     */
    public $WebContentRisk;

    /**
     * @var array 标签
     */
    public $Tag;

    /**
     * @var string eip主键
     */
    public $AddressId;

    /**
     * @var string MemberId信息
     */
    public $MemberId;

    /**
     * @var integer 风险服务暴露
     */
    public $RiskExposure;

    /**
     * @var integer 是否新资产 1新
     */
    public $IsNewAsset;

    /**
     * @var integer 资产认证状态，0-待认证，1-认证成功，2-认证中，3+-认证失败
     */
    public $VerifyStatus;

    /**
     * @param string $AssetId 资产id
     * @param string $AssetName 资产name
     * @param string $AssetType 资产类型
     * @param string $Region 地域
     * @param integer $CFWStatus 云防状态
     * @param string $AssetCreateTime 资产创建时间
     * @param string $PublicIp 公网IP
     * @param integer $PublicIpType 公网ip类型
     * @param string $VpcId vpc
     * @param string $VpcName vpc名
     * @param integer $AppId appid
     * @param string $Uin 用户uin
     * @param string $NickName 名称
     * @param integer $IsCore 核心
     * @param integer $IsCloud 云上
     * @param integer $Attack 网络攻击
     * @param integer $Access 网络访问
     * @param integer $Intercept 网络拦截
     * @param string $InBandwidth 入向带宽
     * @param string $OutBandwidth 出向带宽
     * @param string $InFlow 入向流量
     * @param string $OutFlow 出向流量
     * @param string $LastScanTime 最近扫描时间
     * @param integer $PortRisk 端口风险
     * @param integer $VulnerabilityRisk 漏洞风险
     * @param integer $ConfigurationRisk 配置风险
     * @param integer $ScanTask 扫描任务
     * @param integer $WeakPassword 弱口令
     * @param integer $WebContentRisk 内容风险
     * @param array $Tag 标签
     * @param string $AddressId eip主键
     * @param string $MemberId MemberId信息
     * @param integer $RiskExposure 风险服务暴露
     * @param integer $IsNewAsset 是否新资产 1新
     * @param integer $VerifyStatus 资产认证状态，0-待认证，1-认证成功，2-认证中，3+-认证失败
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

        if (array_key_exists("CFWStatus",$param) and $param["CFWStatus"] !== null) {
            $this->CFWStatus = $param["CFWStatus"];
        }

        if (array_key_exists("AssetCreateTime",$param) and $param["AssetCreateTime"] !== null) {
            $this->AssetCreateTime = $param["AssetCreateTime"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PublicIpType",$param) and $param["PublicIpType"] !== null) {
            $this->PublicIpType = $param["PublicIpType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
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

        if (array_key_exists("AddressId",$param) and $param["AddressId"] !== null) {
            $this->AddressId = $param["AddressId"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("RiskExposure",$param) and $param["RiskExposure"] !== null) {
            $this->RiskExposure = $param["RiskExposure"];
        }

        if (array_key_exists("IsNewAsset",$param) and $param["IsNewAsset"] !== null) {
            $this->IsNewAsset = $param["IsNewAsset"];
        }

        if (array_key_exists("VerifyStatus",$param) and $param["VerifyStatus"] !== null) {
            $this->VerifyStatus = $param["VerifyStatus"];
        }
    }
}
