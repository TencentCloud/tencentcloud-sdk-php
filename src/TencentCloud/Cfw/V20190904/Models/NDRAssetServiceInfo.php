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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * NDR资产识别信息
 *
 * @method string getAssetId() 获取资产ID
 * @method void setAssetId(string $AssetId) 设置资产ID
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getInstanceType() 获取实例类型
 * @method void setInstanceType(string $InstanceType) 设置实例类型
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getVpcId() 获取私有网络ID
 * @method void setVpcId(string $VpcId) 设置私有网络ID
 * @method string getVpcName() 获取私有网络名称
 * @method void setVpcName(string $VpcName) 设置私有网络名称
 * @method string getIp() 获取服务IP
 * @method void setIp(string $Ip) 设置服务IP
 * @method integer getPort() 获取服务端口
 * @method void setPort(integer $Port) 设置服务端口
 * @method string getIpVersion() 获取IP版本 
"0": IPv4
"1": IPv6
 * @method void setIpVersion(string $IpVersion) 设置IP版本 
"0": IPv4
"1": IPv6
 * @method string getIpType() 获取IP类型
"0": 公网IP
"1": EIP
"-1": 内网IP
 * @method void setIpType(string $IpType) 设置IP类型
"0": 公网IP
"1": EIP
"-1": 内网IP
 * @method string getAssetService() 获取服务名称
 * @method void setAssetService(string $AssetService) 设置服务名称
 * @method string getAssetVersion() 获取服务版本
 * @method void setAssetVersion(string $AssetVersion) 设置服务版本
 * @method string getAssetCategory() 获取服务类型
 * @method void setAssetCategory(string $AssetCategory) 设置服务类型
 * @method string getProtocol() 获取协议
 * @method void setProtocol(string $Protocol) 设置协议
 * @method string getIdentificationSource() 获取识别来源
"0": 流量识别
"1": 云资产实例
 * @method void setIdentificationSource(string $IdentificationSource) 设置识别来源
"0": 流量识别
"1": 云资产实例
 * @method string getFirstIdentificationTime() 获取首次识别时间
 * @method void setFirstIdentificationTime(string $FirstIdentificationTime) 设置首次识别时间
 * @method string getLatestIdentificationTime() 获取最近识别时间
 * @method void setLatestIdentificationTime(string $LatestIdentificationTime) 设置最近识别时间
 * @method string getServerAddr() 获取服务地址
 * @method void setServerAddr(string $ServerAddr) 设置服务地址
 */
class NDRAssetServiceInfo extends AbstractModel
{
    /**
     * @var string 资产ID
     */
    public $AssetId;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 实例类型
     */
    public $InstanceType;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 私有网络ID
     */
    public $VpcId;

    /**
     * @var string 私有网络名称
     */
    public $VpcName;

    /**
     * @var string 服务IP
     */
    public $Ip;

    /**
     * @var integer 服务端口
     */
    public $Port;

    /**
     * @var string IP版本 
"0": IPv4
"1": IPv6
     */
    public $IpVersion;

    /**
     * @var string IP类型
"0": 公网IP
"1": EIP
"-1": 内网IP
     */
    public $IpType;

    /**
     * @var string 服务名称
     */
    public $AssetService;

    /**
     * @var string 服务版本
     */
    public $AssetVersion;

    /**
     * @var string 服务类型
     */
    public $AssetCategory;

    /**
     * @var string 协议
     */
    public $Protocol;

    /**
     * @var string 识别来源
"0": 流量识别
"1": 云资产实例
     */
    public $IdentificationSource;

    /**
     * @var string 首次识别时间
     */
    public $FirstIdentificationTime;

    /**
     * @var string 最近识别时间
     */
    public $LatestIdentificationTime;

    /**
     * @var string 服务地址
     */
    public $ServerAddr;

    /**
     * @param string $AssetId 资产ID
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param string $InstanceType 实例类型
     * @param string $Region 地域
     * @param string $VpcId 私有网络ID
     * @param string $VpcName 私有网络名称
     * @param string $Ip 服务IP
     * @param integer $Port 服务端口
     * @param string $IpVersion IP版本 
"0": IPv4
"1": IPv6
     * @param string $IpType IP类型
"0": 公网IP
"1": EIP
"-1": 内网IP
     * @param string $AssetService 服务名称
     * @param string $AssetVersion 服务版本
     * @param string $AssetCategory 服务类型
     * @param string $Protocol 协议
     * @param string $IdentificationSource 识别来源
"0": 流量识别
"1": 云资产实例
     * @param string $FirstIdentificationTime 首次识别时间
     * @param string $LatestIdentificationTime 最近识别时间
     * @param string $ServerAddr 服务地址
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
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

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            $this->IpVersion = $param["IpVersion"];
        }

        if (array_key_exists("IpType",$param) and $param["IpType"] !== null) {
            $this->IpType = $param["IpType"];
        }

        if (array_key_exists("AssetService",$param) and $param["AssetService"] !== null) {
            $this->AssetService = $param["AssetService"];
        }

        if (array_key_exists("AssetVersion",$param) and $param["AssetVersion"] !== null) {
            $this->AssetVersion = $param["AssetVersion"];
        }

        if (array_key_exists("AssetCategory",$param) and $param["AssetCategory"] !== null) {
            $this->AssetCategory = $param["AssetCategory"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("IdentificationSource",$param) and $param["IdentificationSource"] !== null) {
            $this->IdentificationSource = $param["IdentificationSource"];
        }

        if (array_key_exists("FirstIdentificationTime",$param) and $param["FirstIdentificationTime"] !== null) {
            $this->FirstIdentificationTime = $param["FirstIdentificationTime"];
        }

        if (array_key_exists("LatestIdentificationTime",$param) and $param["LatestIdentificationTime"] !== null) {
            $this->LatestIdentificationTime = $param["LatestIdentificationTime"];
        }

        if (array_key_exists("ServerAddr",$param) and $param["ServerAddr"] !== null) {
            $this->ServerAddr = $param["ServerAddr"];
        }
    }
}
