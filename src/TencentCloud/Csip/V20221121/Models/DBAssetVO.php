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
 * db资产输出字段
 *
 * @method string getAssetId() 获取资产id
 * @method void setAssetId(string $AssetId) 设置资产id
 * @method string getAssetName() 获取资产名
 * @method void setAssetName(string $AssetName) 设置资产名
 * @method string getAssetType() 获取资产类型
 * @method void setAssetType(string $AssetType) 设置资产类型
 * @method string getVpcId() 获取vpcid
 * @method void setVpcId(string $VpcId) 设置vpcid
 * @method string getVpcName() 获取vpc标签
 * @method void setVpcName(string $VpcName) 设置vpc标签
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getAssetCreateTime() 获取资产创建时间
 * @method void setAssetCreateTime(string $AssetCreateTime) 设置资产创建时间
 * @method string getLastScanTime() 获取最近扫描时间
 * @method void setLastScanTime(string $LastScanTime) 设置最近扫描时间
 * @method integer getConfigurationRisk() 获取配置风险
 * @method void setConfigurationRisk(integer $ConfigurationRisk) 设置配置风险
 * @method integer getAttack() 获取网络攻击
 * @method void setAttack(integer $Attack) 设置网络攻击
 * @method integer getAccess() 获取网络访问
 * @method void setAccess(integer $Access) 设置网络访问
 * @method integer getScanTask() 获取扫描任务
 * @method void setScanTask(integer $ScanTask) 设置扫描任务
 * @method integer getAppId() 获取用户appid
 * @method void setAppId(integer $AppId) 设置用户appid
 * @method string getUin() 获取用户uin
 * @method void setUin(string $Uin) 设置用户uin
 * @method string getNickName() 获取昵称别名
 * @method void setNickName(string $NickName) 设置昵称别名
 * @method integer getPort() 获取端口
 * @method void setPort(integer $Port) 设置端口
 * @method array getTag() 获取标签
 * @method void setTag(array $Tag) 设置标签
 * @method string getPrivateIp() 获取内网ip
 * @method void setPrivateIp(string $PrivateIp) 设置内网ip
 * @method string getPublicIp() 获取公网ip
 * @method void setPublicIp(string $PublicIp) 设置公网ip
 * @method integer getStatus() 获取状态
 * @method void setStatus(integer $Status) 设置状态
 * @method integer getIsCore() 获取是否核心
 * @method void setIsCore(integer $IsCore) 设置是否核心
 * @method integer getIsNewAsset() 获取是否新资产: 1新
 * @method void setIsNewAsset(integer $IsNewAsset) 设置是否新资产: 1新
 */
class DBAssetVO extends AbstractModel
{
    /**
     * @var string 资产id
     */
    public $AssetId;

    /**
     * @var string 资产名
     */
    public $AssetName;

    /**
     * @var string 资产类型
     */
    public $AssetType;

    /**
     * @var string vpcid
     */
    public $VpcId;

    /**
     * @var string vpc标签
     */
    public $VpcName;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 资产创建时间
     */
    public $AssetCreateTime;

    /**
     * @var string 最近扫描时间
     */
    public $LastScanTime;

    /**
     * @var integer 配置风险
     */
    public $ConfigurationRisk;

    /**
     * @var integer 网络攻击
     */
    public $Attack;

    /**
     * @var integer 网络访问
     */
    public $Access;

    /**
     * @var integer 扫描任务
     */
    public $ScanTask;

    /**
     * @var integer 用户appid
     */
    public $AppId;

    /**
     * @var string 用户uin
     */
    public $Uin;

    /**
     * @var string 昵称别名
     */
    public $NickName;

    /**
     * @var integer 端口
     */
    public $Port;

    /**
     * @var array 标签
     */
    public $Tag;

    /**
     * @var string 内网ip
     */
    public $PrivateIp;

    /**
     * @var string 公网ip
     */
    public $PublicIp;

    /**
     * @var integer 状态
     */
    public $Status;

    /**
     * @var integer 是否核心
     */
    public $IsCore;

    /**
     * @var integer 是否新资产: 1新
     */
    public $IsNewAsset;

    /**
     * @param string $AssetId 资产id
     * @param string $AssetName 资产名
     * @param string $AssetType 资产类型
     * @param string $VpcId vpcid
     * @param string $VpcName vpc标签
     * @param string $Region 地域
     * @param string $Domain 域名
     * @param string $AssetCreateTime 资产创建时间
     * @param string $LastScanTime 最近扫描时间
     * @param integer $ConfigurationRisk 配置风险
     * @param integer $Attack 网络攻击
     * @param integer $Access 网络访问
     * @param integer $ScanTask 扫描任务
     * @param integer $AppId 用户appid
     * @param string $Uin 用户uin
     * @param string $NickName 昵称别名
     * @param integer $Port 端口
     * @param array $Tag 标签
     * @param string $PrivateIp 内网ip
     * @param string $PublicIp 公网ip
     * @param integer $Status 状态
     * @param integer $IsCore 是否核心
     * @param integer $IsNewAsset 是否新资产: 1新
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

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("AssetCreateTime",$param) and $param["AssetCreateTime"] !== null) {
            $this->AssetCreateTime = $param["AssetCreateTime"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("ConfigurationRisk",$param) and $param["ConfigurationRisk"] !== null) {
            $this->ConfigurationRisk = $param["ConfigurationRisk"];
        }

        if (array_key_exists("Attack",$param) and $param["Attack"] !== null) {
            $this->Attack = $param["Attack"];
        }

        if (array_key_exists("Access",$param) and $param["Access"] !== null) {
            $this->Access = $param["Access"];
        }

        if (array_key_exists("ScanTask",$param) and $param["ScanTask"] !== null) {
            $this->ScanTask = $param["ScanTask"];
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

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsCore",$param) and $param["IsCore"] !== null) {
            $this->IsCore = $param["IsCore"];
        }

        if (array_key_exists("IsNewAsset",$param) and $param["IsNewAsset"] !== null) {
            $this->IsNewAsset = $param["IsNewAsset"];
        }
    }
}
