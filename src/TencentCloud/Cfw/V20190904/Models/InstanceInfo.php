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
 * 实例详情结果
 *
 * @method string getAppId() 获取appid信息
 * @method void setAppId(string $AppId) 设置appid信息
 * @method string getInsSource() 获取资产来源
1公网 2内网
 * @method void setInsSource(string $InsSource) 设置资产来源
1公网 2内网
 * @method integer getInsType() 获取资产类型
 3是cvm实例,4是clb实例,5是eni实例,6是mysql,7是redis,8是NAT,9是VPN,10是ES,11是MARIADB,12是KAFKA 13 NATFW
 * @method void setInsType(integer $InsType) 设置资产类型
 3是cvm实例,4是clb实例,5是eni实例,6是mysql,7是redis,8是NAT,9是VPN,10是ES,11是MARIADB,12是KAFKA 13 NATFW
 * @method string getInstanceId() 获取资产id
 * @method void setInstanceId(string $InstanceId) 设置资产id
 * @method string getInstanceName() 获取资产名
 * @method void setInstanceName(string $InstanceName) 设置资产名
 * @method string getLeakNum() 获取漏洞数
 * @method void setLeakNum(string $LeakNum) 设置漏洞数
 * @method string getPortNum() 获取端口数
 * @method void setPortNum(string $PortNum) 设置端口数
 * @method string getPrivateIp() 获取内网ip
 * @method void setPrivateIp(string $PrivateIp) 设置内网ip
 * @method string getPublicIp() 获取公网ip
 * @method void setPublicIp(string $PublicIp) 设置公网ip
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getRegionKey() 获取地域
 * @method void setRegionKey(string $RegionKey) 设置地域
 * @method array getResourcePath() 获取资产路径
 * @method void setResourcePath(array $ResourcePath) 设置资产路径
 * @method array getServer() 获取扫描结果
 * @method void setServer(array $Server) 设置扫描结果
 * @method string getSubnetId() 获取子网id
 * @method void setSubnetId(string $SubnetId) 设置子网id
 * @method string getVPCName() 获取vpc名称
 * @method void setVPCName(string $VPCName) 设置vpc名称
 * @method string getVpcId() 获取vpcid信息
 * @method void setVpcId(string $VpcId) 设置vpcid信息
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var string appid信息
     */
    public $AppId;

    /**
     * @var string 资产来源
1公网 2内网
     */
    public $InsSource;

    /**
     * @var integer 资产类型
 3是cvm实例,4是clb实例,5是eni实例,6是mysql,7是redis,8是NAT,9是VPN,10是ES,11是MARIADB,12是KAFKA 13 NATFW
     */
    public $InsType;

    /**
     * @var string 资产id
     */
    public $InstanceId;

    /**
     * @var string 资产名
     */
    public $InstanceName;

    /**
     * @var string 漏洞数
     */
    public $LeakNum;

    /**
     * @var string 端口数
     */
    public $PortNum;

    /**
     * @var string 内网ip
     */
    public $PrivateIp;

    /**
     * @var string 公网ip
     */
    public $PublicIp;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 地域
     */
    public $RegionKey;

    /**
     * @var array 资产路径
     */
    public $ResourcePath;

    /**
     * @var array 扫描结果
     */
    public $Server;

    /**
     * @var string 子网id
     */
    public $SubnetId;

    /**
     * @var string vpc名称
     */
    public $VPCName;

    /**
     * @var string vpcid信息
     */
    public $VpcId;

    /**
     * @param string $AppId appid信息
     * @param string $InsSource 资产来源
1公网 2内网
     * @param integer $InsType 资产类型
 3是cvm实例,4是clb实例,5是eni实例,6是mysql,7是redis,8是NAT,9是VPN,10是ES,11是MARIADB,12是KAFKA 13 NATFW
     * @param string $InstanceId 资产id
     * @param string $InstanceName 资产名
     * @param string $LeakNum 漏洞数
     * @param string $PortNum 端口数
     * @param string $PrivateIp 内网ip
     * @param string $PublicIp 公网ip
     * @param string $Region 地域
     * @param string $RegionKey 地域
     * @param array $ResourcePath 资产路径
     * @param array $Server 扫描结果
     * @param string $SubnetId 子网id
     * @param string $VPCName vpc名称
     * @param string $VpcId vpcid信息
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

        if (array_key_exists("InsSource",$param) and $param["InsSource"] !== null) {
            $this->InsSource = $param["InsSource"];
        }

        if (array_key_exists("InsType",$param) and $param["InsType"] !== null) {
            $this->InsType = $param["InsType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("LeakNum",$param) and $param["LeakNum"] !== null) {
            $this->LeakNum = $param["LeakNum"];
        }

        if (array_key_exists("PortNum",$param) and $param["PortNum"] !== null) {
            $this->PortNum = $param["PortNum"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RegionKey",$param) and $param["RegionKey"] !== null) {
            $this->RegionKey = $param["RegionKey"];
        }

        if (array_key_exists("ResourcePath",$param) and $param["ResourcePath"] !== null) {
            $this->ResourcePath = $param["ResourcePath"];
        }

        if (array_key_exists("Server",$param) and $param["Server"] !== null) {
            $this->Server = $param["Server"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VPCName",$param) and $param["VPCName"] !== null) {
            $this->VPCName = $param["VPCName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }
    }
}
