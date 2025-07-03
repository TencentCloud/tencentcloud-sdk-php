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
 * 主机资产详情
 *
 * @method string getVpcId() 获取vpc-id
 * @method void setVpcId(string $VpcId) 设置vpc-id
 * @method string getVpcName() 获取vpc-name
 * @method void setVpcName(string $VpcName) 设置vpc-name
 * @method string getAssetName() 获取资产名
 * @method void setAssetName(string $AssetName) 设置资产名
 * @method string getOs() 获取操作系统
 * @method void setOs(string $Os) 设置操作系统
 * @method string getPublicIp() 获取公网ip
 * @method void setPublicIp(string $PublicIp) 设置公网ip
 * @method string getPrivateIp() 获取内网ip
 * @method void setPrivateIp(string $PrivateIp) 设置内网ip
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getAssetType() 获取资产类型
 * @method void setAssetType(string $AssetType) 设置资产类型
 * @method string getAssetId() 获取资产id
 * @method void setAssetId(string $AssetId) 设置资产id
 * @method integer getAccountNum() 获取账号数量
 * @method void setAccountNum(integer $AccountNum) 设置账号数量
 * @method integer getPortNum() 获取端口数量
 * @method void setPortNum(integer $PortNum) 设置端口数量
 * @method integer getProcessNum() 获取进程数量
 * @method void setProcessNum(integer $ProcessNum) 设置进程数量
 * @method integer getSoftApplicationNum() 获取软件应用数量
 * @method void setSoftApplicationNum(integer $SoftApplicationNum) 设置软件应用数量
 * @method integer getDatabaseNum() 获取数据库数量
 * @method void setDatabaseNum(integer $DatabaseNum) 设置数据库数量
 * @method integer getWebApplicationNum() 获取Web应用数量
 * @method void setWebApplicationNum(integer $WebApplicationNum) 设置Web应用数量
 * @method integer getServiceNum() 获取服务数量
 * @method void setServiceNum(integer $ServiceNum) 设置服务数量
 * @method integer getWebFrameworkNum() 获取web框架数量
 * @method void setWebFrameworkNum(integer $WebFrameworkNum) 设置web框架数量
 * @method integer getWebSiteNum() 获取Web站点数量
 * @method void setWebSiteNum(integer $WebSiteNum) 设置Web站点数量
 * @method integer getJarPackageNum() 获取Jar包数量
 * @method void setJarPackageNum(integer $JarPackageNum) 设置Jar包数量
 * @method integer getStartServiceNum() 获取启动服务数量
 * @method void setStartServiceNum(integer $StartServiceNum) 设置启动服务数量
 * @method integer getScheduledTaskNum() 获取计划任务数量
 * @method void setScheduledTaskNum(integer $ScheduledTaskNum) 设置计划任务数量
 * @method integer getEnvironmentVariableNum() 获取环境变量数量
 * @method void setEnvironmentVariableNum(integer $EnvironmentVariableNum) 设置环境变量数量
 * @method integer getKernelModuleNum() 获取内核模块数量
 * @method void setKernelModuleNum(integer $KernelModuleNum) 设置内核模块数量
 * @method integer getSystemInstallationPackageNum() 获取系统安装包数量
 * @method void setSystemInstallationPackageNum(integer $SystemInstallationPackageNum) 设置系统安装包数量
 * @method integer getSurplusProtectDay() 获取剩余防护时长
 * @method void setSurplusProtectDay(integer $SurplusProtectDay) 设置剩余防护时长
 * @method integer getCWPStatus() 获取客户端是否安装  1 已安装 0 未安装
 * @method void setCWPStatus(integer $CWPStatus) 设置客户端是否安装  1 已安装 0 未安装
 * @method array getTag() 获取标签
 * @method void setTag(array $Tag) 设置标签
 * @method string getProtectLevel() 获取防护等级
 * @method void setProtectLevel(string $ProtectLevel) 设置防护等级
 * @method integer getProtectedDay() 获取防护时长
 * @method void setProtectedDay(integer $ProtectedDay) 设置防护时长
 */
class AssetBaseInfoResponse extends AbstractModel
{
    /**
     * @var string vpc-id
     */
    public $VpcId;

    /**
     * @var string vpc-name
     */
    public $VpcName;

    /**
     * @var string 资产名
     */
    public $AssetName;

    /**
     * @var string 操作系统
     */
    public $Os;

    /**
     * @var string 公网ip
     */
    public $PublicIp;

    /**
     * @var string 内网ip
     */
    public $PrivateIp;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 资产类型
     */
    public $AssetType;

    /**
     * @var string 资产id
     */
    public $AssetId;

    /**
     * @var integer 账号数量
     */
    public $AccountNum;

    /**
     * @var integer 端口数量
     */
    public $PortNum;

    /**
     * @var integer 进程数量
     */
    public $ProcessNum;

    /**
     * @var integer 软件应用数量
     */
    public $SoftApplicationNum;

    /**
     * @var integer 数据库数量
     */
    public $DatabaseNum;

    /**
     * @var integer Web应用数量
     */
    public $WebApplicationNum;

    /**
     * @var integer 服务数量
     */
    public $ServiceNum;

    /**
     * @var integer web框架数量
     */
    public $WebFrameworkNum;

    /**
     * @var integer Web站点数量
     */
    public $WebSiteNum;

    /**
     * @var integer Jar包数量
     */
    public $JarPackageNum;

    /**
     * @var integer 启动服务数量
     */
    public $StartServiceNum;

    /**
     * @var integer 计划任务数量
     */
    public $ScheduledTaskNum;

    /**
     * @var integer 环境变量数量
     */
    public $EnvironmentVariableNum;

    /**
     * @var integer 内核模块数量
     */
    public $KernelModuleNum;

    /**
     * @var integer 系统安装包数量
     */
    public $SystemInstallationPackageNum;

    /**
     * @var integer 剩余防护时长
     */
    public $SurplusProtectDay;

    /**
     * @var integer 客户端是否安装  1 已安装 0 未安装
     */
    public $CWPStatus;

    /**
     * @var array 标签
     */
    public $Tag;

    /**
     * @var string 防护等级
     */
    public $ProtectLevel;

    /**
     * @var integer 防护时长
     */
    public $ProtectedDay;

    /**
     * @param string $VpcId vpc-id
     * @param string $VpcName vpc-name
     * @param string $AssetName 资产名
     * @param string $Os 操作系统
     * @param string $PublicIp 公网ip
     * @param string $PrivateIp 内网ip
     * @param string $Region 地域
     * @param string $AssetType 资产类型
     * @param string $AssetId 资产id
     * @param integer $AccountNum 账号数量
     * @param integer $PortNum 端口数量
     * @param integer $ProcessNum 进程数量
     * @param integer $SoftApplicationNum 软件应用数量
     * @param integer $DatabaseNum 数据库数量
     * @param integer $WebApplicationNum Web应用数量
     * @param integer $ServiceNum 服务数量
     * @param integer $WebFrameworkNum web框架数量
     * @param integer $WebSiteNum Web站点数量
     * @param integer $JarPackageNum Jar包数量
     * @param integer $StartServiceNum 启动服务数量
     * @param integer $ScheduledTaskNum 计划任务数量
     * @param integer $EnvironmentVariableNum 环境变量数量
     * @param integer $KernelModuleNum 内核模块数量
     * @param integer $SystemInstallationPackageNum 系统安装包数量
     * @param integer $SurplusProtectDay 剩余防护时长
     * @param integer $CWPStatus 客户端是否安装  1 已安装 0 未安装
     * @param array $Tag 标签
     * @param string $ProtectLevel 防护等级
     * @param integer $ProtectedDay 防护时长
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("Os",$param) and $param["Os"] !== null) {
            $this->Os = $param["Os"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AccountNum",$param) and $param["AccountNum"] !== null) {
            $this->AccountNum = $param["AccountNum"];
        }

        if (array_key_exists("PortNum",$param) and $param["PortNum"] !== null) {
            $this->PortNum = $param["PortNum"];
        }

        if (array_key_exists("ProcessNum",$param) and $param["ProcessNum"] !== null) {
            $this->ProcessNum = $param["ProcessNum"];
        }

        if (array_key_exists("SoftApplicationNum",$param) and $param["SoftApplicationNum"] !== null) {
            $this->SoftApplicationNum = $param["SoftApplicationNum"];
        }

        if (array_key_exists("DatabaseNum",$param) and $param["DatabaseNum"] !== null) {
            $this->DatabaseNum = $param["DatabaseNum"];
        }

        if (array_key_exists("WebApplicationNum",$param) and $param["WebApplicationNum"] !== null) {
            $this->WebApplicationNum = $param["WebApplicationNum"];
        }

        if (array_key_exists("ServiceNum",$param) and $param["ServiceNum"] !== null) {
            $this->ServiceNum = $param["ServiceNum"];
        }

        if (array_key_exists("WebFrameworkNum",$param) and $param["WebFrameworkNum"] !== null) {
            $this->WebFrameworkNum = $param["WebFrameworkNum"];
        }

        if (array_key_exists("WebSiteNum",$param) and $param["WebSiteNum"] !== null) {
            $this->WebSiteNum = $param["WebSiteNum"];
        }

        if (array_key_exists("JarPackageNum",$param) and $param["JarPackageNum"] !== null) {
            $this->JarPackageNum = $param["JarPackageNum"];
        }

        if (array_key_exists("StartServiceNum",$param) and $param["StartServiceNum"] !== null) {
            $this->StartServiceNum = $param["StartServiceNum"];
        }

        if (array_key_exists("ScheduledTaskNum",$param) and $param["ScheduledTaskNum"] !== null) {
            $this->ScheduledTaskNum = $param["ScheduledTaskNum"];
        }

        if (array_key_exists("EnvironmentVariableNum",$param) and $param["EnvironmentVariableNum"] !== null) {
            $this->EnvironmentVariableNum = $param["EnvironmentVariableNum"];
        }

        if (array_key_exists("KernelModuleNum",$param) and $param["KernelModuleNum"] !== null) {
            $this->KernelModuleNum = $param["KernelModuleNum"];
        }

        if (array_key_exists("SystemInstallationPackageNum",$param) and $param["SystemInstallationPackageNum"] !== null) {
            $this->SystemInstallationPackageNum = $param["SystemInstallationPackageNum"];
        }

        if (array_key_exists("SurplusProtectDay",$param) and $param["SurplusProtectDay"] !== null) {
            $this->SurplusProtectDay = $param["SurplusProtectDay"];
        }

        if (array_key_exists("CWPStatus",$param) and $param["CWPStatus"] !== null) {
            $this->CWPStatus = $param["CWPStatus"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("ProtectLevel",$param) and $param["ProtectLevel"] !== null) {
            $this->ProtectLevel = $param["ProtectLevel"];
        }

        if (array_key_exists("ProtectedDay",$param) and $param["ProtectedDay"] !== null) {
            $this->ProtectedDay = $param["ProtectedDay"];
        }
    }
}
