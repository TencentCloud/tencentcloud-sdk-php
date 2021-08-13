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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * // InstanceInfo 实例详情结果
type InstanceInfo struct {
	AppID        string `json:"AppId" gorm:"column:appid"`
	Region       string `json:"Region" gorm:"column:region"`
	VPCID        string `json:"VpcId" gorm:"column:vpc_id"`
	SubNetID     string `json:"SubnetId" gorm:"column:subnet_id"`
	InstanceID   string `json:"InstanceId" gorm:"column:instance_id"`
	InstanceName string `json:"InstanceName" gorm:"column:instance_name"`
	//InsType common.CVM 3是cvm实例,4是clb实例,5是eni实例,6是mysql,7是redis,8是NAT,9是VPN,10是ES,11是MARIADB,12是KAFKA
	InsType   int    `json:"InsType" gorm:"column:instance_type"`
	PublicIP  string `json:"PublicIp" gorm:"column:public_ip"`
	PrivateIP string `json:"PrivateIp" gorm:"column:ip"`

	//规则下发无需管，前端展示用
	PortNum          string `json:"PortNum" gorm:"column:port_num"`
	LeakNum          string `json:"LeakNum" gorm:"column:leak_num"`
	ResourceGroupNum int    `json:"ResourceGroupNum"`
	VPCName          string `json:"VPCName" gorm:"column:VPCName"`
}

 *
 * @method string getAppId() 获取appid信息
 * @method void setAppId(string $AppId) 设置appid信息
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getVpcId() 获取vpcid信息
 * @method void setVpcId(string $VpcId) 设置vpcid信息
 * @method string getVPCName() 获取vpc名称
 * @method void setVPCName(string $VPCName) 设置vpc名称
 * @method string getSubnetId() 获取子网id
 * @method void setSubnetId(string $SubnetId) 设置子网id
 * @method string getInstanceId() 获取资产id
 * @method void setInstanceId(string $InstanceId) 设置资产id
 * @method string getInstanceName() 获取资产名
 * @method void setInstanceName(string $InstanceName) 设置资产名
 * @method integer getInsType() 获取资产类型
 3是cvm实例,4是clb实例,5是eni实例,6是mysql,7是redis,8是NAT,9是VPN,10是ES,11是MARIADB,12是KAFKA 13 NATFW
 * @method void setInsType(integer $InsType) 设置资产类型
 3是cvm实例,4是clb实例,5是eni实例,6是mysql,7是redis,8是NAT,9是VPN,10是ES,11是MARIADB,12是KAFKA 13 NATFW
 * @method string getPublicIp() 获取公网ip
 * @method void setPublicIp(string $PublicIp) 设置公网ip
 * @method string getPrivateIp() 获取内网ip
 * @method void setPrivateIp(string $PrivateIp) 设置内网ip
 * @method string getPortNum() 获取端口数
 * @method void setPortNum(string $PortNum) 设置端口数
 * @method string getLeakNum() 获取漏洞数
 * @method void setLeakNum(string $LeakNum) 设置漏洞数
 * @method string getInsSource() 获取1，公网 2内网
 * @method void setInsSource(string $InsSource) 设置1，公网 2内网
 * @method array getResourcePath() 获取[a,b]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourcePath(array $ResourcePath) 设置[a,b]
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var string appid信息
     */
    public $AppId;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string vpcid信息
     */
    public $VpcId;

    /**
     * @var string vpc名称
     */
    public $VPCName;

    /**
     * @var string 子网id
     */
    public $SubnetId;

    /**
     * @var string 资产id
     */
    public $InstanceId;

    /**
     * @var string 资产名
     */
    public $InstanceName;

    /**
     * @var integer 资产类型
 3是cvm实例,4是clb实例,5是eni实例,6是mysql,7是redis,8是NAT,9是VPN,10是ES,11是MARIADB,12是KAFKA 13 NATFW
     */
    public $InsType;

    /**
     * @var string 公网ip
     */
    public $PublicIp;

    /**
     * @var string 内网ip
     */
    public $PrivateIp;

    /**
     * @var string 端口数
     */
    public $PortNum;

    /**
     * @var string 漏洞数
     */
    public $LeakNum;

    /**
     * @var string 1，公网 2内网
     */
    public $InsSource;

    /**
     * @var array [a,b]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourcePath;

    /**
     * @param string $AppId appid信息
     * @param string $Region 地域
     * @param string $VpcId vpcid信息
     * @param string $VPCName vpc名称
     * @param string $SubnetId 子网id
     * @param string $InstanceId 资产id
     * @param string $InstanceName 资产名
     * @param integer $InsType 资产类型
 3是cvm实例,4是clb实例,5是eni实例,6是mysql,7是redis,8是NAT,9是VPN,10是ES,11是MARIADB,12是KAFKA 13 NATFW
     * @param string $PublicIp 公网ip
     * @param string $PrivateIp 内网ip
     * @param string $PortNum 端口数
     * @param string $LeakNum 漏洞数
     * @param string $InsSource 1，公网 2内网
     * @param array $ResourcePath [a,b]
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VPCName",$param) and $param["VPCName"] !== null) {
            $this->VPCName = $param["VPCName"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InsType",$param) and $param["InsType"] !== null) {
            $this->InsType = $param["InsType"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("PortNum",$param) and $param["PortNum"] !== null) {
            $this->PortNum = $param["PortNum"];
        }

        if (array_key_exists("LeakNum",$param) and $param["LeakNum"] !== null) {
            $this->LeakNum = $param["LeakNum"];
        }

        if (array_key_exists("InsSource",$param) and $param["InsSource"] !== null) {
            $this->InsSource = $param["InsSource"];
        }

        if (array_key_exists("ResourcePath",$param) and $param["ResourcePath"] !== null) {
            $this->ResourcePath = $param["ResourcePath"];
        }
    }
}
