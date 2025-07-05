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
 * 告警数据攻击者或受害者信息
 *
 * @method string getIP() 获取IP
 * @method void setIP(string $IP) 设置IP
 * @method string getHostIP() 获取HostIP
 * @method void setHostIP(string $HostIP) 设置HostIP
 * @method string getOriginIP() 获取原始IP
 * @method void setOriginIP(string $OriginIP) 设置原始IP
 * @method integer getPort() 获取端口
 * @method void setPort(integer $Port) 设置端口
 * @method string getInstanceID() 获取资产ID
 * @method void setInstanceID(string $InstanceID) 设置资产ID
 * @method string getCity() 获取城市
 * @method void setCity(string $City) 设置城市
 * @method string getProvince() 获取省份
 * @method void setProvince(string $Province) 设置省份
 * @method string getCountry() 获取国家
 * @method void setCountry(string $Country) 设置国家
 * @method string getAddress() 获取地址
 * @method void setAddress(string $Address) 设置地址
 * @method string getLatitude() 获取纬度
 * @method void setLatitude(string $Latitude) 设置纬度
 * @method string getLongitude() 获取经度
 * @method void setLongitude(string $Longitude) 设置经度
 * @method string getInfo() 获取信息
 * @method void setInfo(string $Info) 设置信息
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getName() 获取企业名称
 * @method void setName(string $Name) 设置企业名称
 * @method string getAccount() 获取账号
 * @method void setAccount(string $Account) 设置账号
 * @method string getFamily() 获取家族团伙
 * @method void setFamily(string $Family) 设置家族团伙
 * @method string getVirusName() 获取病毒名
 * @method void setVirusName(string $VirusName) 设置病毒名
 * @method string getMD5() 获取MD5值
 * @method void setMD5(string $MD5) 设置MD5值
 * @method string getFileName() 获取恶意进程文件名
 * @method void setFileName(string $FileName) 设置恶意进程文件名
 * @method integer getAssetType() 获取1:主机资产 2:域名资产 3:网络资产
 * @method void setAssetType(integer $AssetType) 设置1:主机资产 2:域名资产 3:网络资产
 * @method array getFromLogAnalysisData() 获取来源日志分析的信息字段
 * @method void setFromLogAnalysisData(array $FromLogAnalysisData) 设置来源日志分析的信息字段
 * @method string getContainerName() 获取容器名
 * @method void setContainerName(string $ContainerName) 设置容器名
 * @method string getContainerID() 获取容器ID
 * @method void setContainerID(string $ContainerID) 设置容器ID
 */
class RoleInfo extends AbstractModel
{
    /**
     * @var string IP
     */
    public $IP;

    /**
     * @var string HostIP
     */
    public $HostIP;

    /**
     * @var string 原始IP
     */
    public $OriginIP;

    /**
     * @var integer 端口
     */
    public $Port;

    /**
     * @var string 资产ID
     */
    public $InstanceID;

    /**
     * @var string 城市
     */
    public $City;

    /**
     * @var string 省份
     */
    public $Province;

    /**
     * @var string 国家
     */
    public $Country;

    /**
     * @var string 地址
     */
    public $Address;

    /**
     * @var string 纬度
     */
    public $Latitude;

    /**
     * @var string 经度
     */
    public $Longitude;

    /**
     * @var string 信息
     */
    public $Info;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 企业名称
     */
    public $Name;

    /**
     * @var string 账号
     */
    public $Account;

    /**
     * @var string 家族团伙
     */
    public $Family;

    /**
     * @var string 病毒名
     */
    public $VirusName;

    /**
     * @var string MD5值
     */
    public $MD5;

    /**
     * @var string 恶意进程文件名
     */
    public $FileName;

    /**
     * @var integer 1:主机资产 2:域名资产 3:网络资产
     */
    public $AssetType;

    /**
     * @var array 来源日志分析的信息字段
     */
    public $FromLogAnalysisData;

    /**
     * @var string 容器名
     */
    public $ContainerName;

    /**
     * @var string 容器ID
     */
    public $ContainerID;

    /**
     * @param string $IP IP
     * @param string $HostIP HostIP
     * @param string $OriginIP 原始IP
     * @param integer $Port 端口
     * @param string $InstanceID 资产ID
     * @param string $City 城市
     * @param string $Province 省份
     * @param string $Country 国家
     * @param string $Address 地址
     * @param string $Latitude 纬度
     * @param string $Longitude 经度
     * @param string $Info 信息
     * @param string $Domain 域名
     * @param string $Name 企业名称
     * @param string $Account 账号
     * @param string $Family 家族团伙
     * @param string $VirusName 病毒名
     * @param string $MD5 MD5值
     * @param string $FileName 恶意进程文件名
     * @param integer $AssetType 1:主机资产 2:域名资产 3:网络资产
     * @param array $FromLogAnalysisData 来源日志分析的信息字段
     * @param string $ContainerName 容器名
     * @param string $ContainerID 容器ID
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
        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("OriginIP",$param) and $param["OriginIP"] !== null) {
            $this->OriginIP = $param["OriginIP"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Latitude",$param) and $param["Latitude"] !== null) {
            $this->Latitude = $param["Latitude"];
        }

        if (array_key_exists("Longitude",$param) and $param["Longitude"] !== null) {
            $this->Longitude = $param["Longitude"];
        }

        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = $param["Info"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("Family",$param) and $param["Family"] !== null) {
            $this->Family = $param["Family"];
        }

        if (array_key_exists("VirusName",$param) and $param["VirusName"] !== null) {
            $this->VirusName = $param["VirusName"];
        }

        if (array_key_exists("MD5",$param) and $param["MD5"] !== null) {
            $this->MD5 = $param["MD5"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("FromLogAnalysisData",$param) and $param["FromLogAnalysisData"] !== null) {
            $this->FromLogAnalysisData = [];
            foreach ($param["FromLogAnalysisData"] as $key => $value){
                $obj = new KeyValue();
                $obj->deserialize($value);
                array_push($this->FromLogAnalysisData, $obj);
            }
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("ContainerID",$param) and $param["ContainerID"] !== null) {
            $this->ContainerID = $param["ContainerID"];
        }
    }
}
