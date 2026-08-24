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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeployResource请求参数结构体
 *
 * @method string getResourceId() 获取<p>需要开通服务的资源ID</p>
 * @method void setResourceId(string $ResourceId) 设置<p>需要开通服务的资源ID</p>
 * @method string getApCode() 获取<p>需要开通服务的地域</p>
 * @method void setApCode(string $ApCode) 设置<p>需要开通服务的地域</p>
 * @method string getZone() 获取<p>子网所在可用区</p>
 * @method void setZone(string $Zone) 设置<p>子网所在可用区</p>
 * @method string getVpcId() 获取<p>需要开通服务的VPC</p>
 * @method void setVpcId(string $VpcId) 设置<p>需要开通服务的VPC</p>
 * @method string getSubnetId() 获取<p>需要开通服务的子网ID，此字段即将废除，请填写DeploySubnets包含的子网</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>需要开通服务的子网ID，此字段即将废除，请填写DeploySubnets包含的子网</p>
 * @method string getCidrBlock() 获取<p>需要开通服务的子网网段，此字段即将废除，请填写DeploySubnets包含的子网</p>
 * @method void setCidrBlock(string $CidrBlock) 设置<p>需要开通服务的子网网段，此字段即将废除，请填写DeploySubnets包含的子网</p>
 * @method string getVpcName() 获取<p>需要开通服务的VPC名称</p>
 * @method void setVpcName(string $VpcName) 设置<p>需要开通服务的VPC名称</p>
 * @method string getVpcCidrBlock() 获取<p>需要开通服务的VPC对应的网段</p>
 * @method void setVpcCidrBlock(string $VpcCidrBlock) 设置<p>需要开通服务的VPC对应的网段</p>
 * @method string getSubnetName() 获取<p>需要开通服务的子网名称，此字段即将废除，请填写DeploySubnets包含的子网</p>
 * @method void setSubnetName(string $SubnetName) 设置<p>需要开通服务的子网名称，此字段即将废除，请填写DeploySubnets包含的子网</p>
 * @method string getCdcClusterId() 获取<p>需要开通实例所属的CDC集群ID</p>
 * @method void setCdcClusterId(string $CdcClusterId) 设置<p>需要开通实例所属的CDC集群ID</p>
 * @method string getShareClbId() 获取<p>开通堡垒机指定共享的clbId</p>
 * @method void setShareClbId(string $ShareClbId) 设置<p>开通堡垒机指定共享的clbId</p>
 * @method integer getWebAccess() 获取<p>0-关闭web访问堡垒机，1-开启web访问堡垒机</p>
 * @method void setWebAccess(integer $WebAccess) 设置<p>0-关闭web访问堡垒机，1-开启web访问堡垒机</p>
 * @method integer getClientAccess() 获取<p>0-关闭客户端访问堡垒机，1-开启客户端访问堡垒机</p>
 * @method void setClientAccess(integer $ClientAccess) 设置<p>0-关闭客户端访问堡垒机，1-开启客户端访问堡垒机</p>
 * @method integer getIntranetAccess() 获取<p>0-关闭内网访问堡垒机，1-开启内网访问堡垒机</p>
 * @method void setIntranetAccess(integer $IntranetAccess) 设置<p>0-关闭内网访问堡垒机，1-开启内网访问堡垒机</p>
 * @method integer getExternalAccess() 获取<p>0-关闭公网访问堡垒机，1-开启公网访问堡垒机</p>
 * @method void setExternalAccess(integer $ExternalAccess) 设置<p>0-关闭公网访问堡垒机，1-开启公网访问堡垒机</p>
 * @method array getDeploySubnets() 获取<p>开通堡垒机的子网信息，最多支持2个子网</p>
 * @method void setDeploySubnets(array $DeploySubnets) 设置<p>开通堡垒机的子网信息，最多支持2个子网</p>
 * @method string getIntranetVpcId() 获取<p>开通内网访问的VPC ID</p>
 * @method void setIntranetVpcId(string $IntranetVpcId) 设置<p>开通内网访问的VPC ID</p>
 * @method string getIntranetVpcCidrBlock() 获取<p>开通内网访问的VPC 网段</p>
 * @method void setIntranetVpcCidrBlock(string $IntranetVpcCidrBlock) 设置<p>开通内网访问的VPC 网段</p>
 * @method string getIntranetVpcName() 获取<p>开通内网访问的VPC名称</p>
 * @method void setIntranetVpcName(string $IntranetVpcName) 设置<p>开通内网访问的VPC名称</p>
 * @method array getIntranetSubnets() 获取<p>开通内网访问的子网信息，最多支持2个子网</p>
 * @method void setIntranetSubnets(array $IntranetSubnets) 设置<p>开通内网访问的子网信息，最多支持2个子网</p>
 */
class DeployResourceRequest extends AbstractModel
{
    /**
     * @var string <p>需要开通服务的资源ID</p>
     */
    public $ResourceId;

    /**
     * @var string <p>需要开通服务的地域</p>
     */
    public $ApCode;

    /**
     * @var string <p>子网所在可用区</p>
     */
    public $Zone;

    /**
     * @var string <p>需要开通服务的VPC</p>
     */
    public $VpcId;

    /**
     * @var string <p>需要开通服务的子网ID，此字段即将废除，请填写DeploySubnets包含的子网</p>
     */
    public $SubnetId;

    /**
     * @var string <p>需要开通服务的子网网段，此字段即将废除，请填写DeploySubnets包含的子网</p>
     */
    public $CidrBlock;

    /**
     * @var string <p>需要开通服务的VPC名称</p>
     */
    public $VpcName;

    /**
     * @var string <p>需要开通服务的VPC对应的网段</p>
     */
    public $VpcCidrBlock;

    /**
     * @var string <p>需要开通服务的子网名称，此字段即将废除，请填写DeploySubnets包含的子网</p>
     */
    public $SubnetName;

    /**
     * @var string <p>需要开通实例所属的CDC集群ID</p>
     */
    public $CdcClusterId;

    /**
     * @var string <p>开通堡垒机指定共享的clbId</p>
     */
    public $ShareClbId;

    /**
     * @var integer <p>0-关闭web访问堡垒机，1-开启web访问堡垒机</p>
     */
    public $WebAccess;

    /**
     * @var integer <p>0-关闭客户端访问堡垒机，1-开启客户端访问堡垒机</p>
     */
    public $ClientAccess;

    /**
     * @var integer <p>0-关闭内网访问堡垒机，1-开启内网访问堡垒机</p>
     */
    public $IntranetAccess;

    /**
     * @var integer <p>0-关闭公网访问堡垒机，1-开启公网访问堡垒机</p>
     */
    public $ExternalAccess;

    /**
     * @var array <p>开通堡垒机的子网信息，最多支持2个子网</p>
     */
    public $DeploySubnets;

    /**
     * @var string <p>开通内网访问的VPC ID</p>
     */
    public $IntranetVpcId;

    /**
     * @var string <p>开通内网访问的VPC 网段</p>
     */
    public $IntranetVpcCidrBlock;

    /**
     * @var string <p>开通内网访问的VPC名称</p>
     */
    public $IntranetVpcName;

    /**
     * @var array <p>开通内网访问的子网信息，最多支持2个子网</p>
     */
    public $IntranetSubnets;

    /**
     * @param string $ResourceId <p>需要开通服务的资源ID</p>
     * @param string $ApCode <p>需要开通服务的地域</p>
     * @param string $Zone <p>子网所在可用区</p>
     * @param string $VpcId <p>需要开通服务的VPC</p>
     * @param string $SubnetId <p>需要开通服务的子网ID，此字段即将废除，请填写DeploySubnets包含的子网</p>
     * @param string $CidrBlock <p>需要开通服务的子网网段，此字段即将废除，请填写DeploySubnets包含的子网</p>
     * @param string $VpcName <p>需要开通服务的VPC名称</p>
     * @param string $VpcCidrBlock <p>需要开通服务的VPC对应的网段</p>
     * @param string $SubnetName <p>需要开通服务的子网名称，此字段即将废除，请填写DeploySubnets包含的子网</p>
     * @param string $CdcClusterId <p>需要开通实例所属的CDC集群ID</p>
     * @param string $ShareClbId <p>开通堡垒机指定共享的clbId</p>
     * @param integer $WebAccess <p>0-关闭web访问堡垒机，1-开启web访问堡垒机</p>
     * @param integer $ClientAccess <p>0-关闭客户端访问堡垒机，1-开启客户端访问堡垒机</p>
     * @param integer $IntranetAccess <p>0-关闭内网访问堡垒机，1-开启内网访问堡垒机</p>
     * @param integer $ExternalAccess <p>0-关闭公网访问堡垒机，1-开启公网访问堡垒机</p>
     * @param array $DeploySubnets <p>开通堡垒机的子网信息，最多支持2个子网</p>
     * @param string $IntranetVpcId <p>开通内网访问的VPC ID</p>
     * @param string $IntranetVpcCidrBlock <p>开通内网访问的VPC 网段</p>
     * @param string $IntranetVpcName <p>开通内网访问的VPC名称</p>
     * @param array $IntranetSubnets <p>开通内网访问的子网信息，最多支持2个子网</p>
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ApCode",$param) and $param["ApCode"] !== null) {
            $this->ApCode = $param["ApCode"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("VpcCidrBlock",$param) and $param["VpcCidrBlock"] !== null) {
            $this->VpcCidrBlock = $param["VpcCidrBlock"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("CdcClusterId",$param) and $param["CdcClusterId"] !== null) {
            $this->CdcClusterId = $param["CdcClusterId"];
        }

        if (array_key_exists("ShareClbId",$param) and $param["ShareClbId"] !== null) {
            $this->ShareClbId = $param["ShareClbId"];
        }

        if (array_key_exists("WebAccess",$param) and $param["WebAccess"] !== null) {
            $this->WebAccess = $param["WebAccess"];
        }

        if (array_key_exists("ClientAccess",$param) and $param["ClientAccess"] !== null) {
            $this->ClientAccess = $param["ClientAccess"];
        }

        if (array_key_exists("IntranetAccess",$param) and $param["IntranetAccess"] !== null) {
            $this->IntranetAccess = $param["IntranetAccess"];
        }

        if (array_key_exists("ExternalAccess",$param) and $param["ExternalAccess"] !== null) {
            $this->ExternalAccess = $param["ExternalAccess"];
        }

        if (array_key_exists("DeploySubnets",$param) and $param["DeploySubnets"] !== null) {
            $this->DeploySubnets = [];
            foreach ($param["DeploySubnets"] as $key => $value){
                $obj = new ParamInitResourceSubnet();
                $obj->deserialize($value);
                array_push($this->DeploySubnets, $obj);
            }
        }

        if (array_key_exists("IntranetVpcId",$param) and $param["IntranetVpcId"] !== null) {
            $this->IntranetVpcId = $param["IntranetVpcId"];
        }

        if (array_key_exists("IntranetVpcCidrBlock",$param) and $param["IntranetVpcCidrBlock"] !== null) {
            $this->IntranetVpcCidrBlock = $param["IntranetVpcCidrBlock"];
        }

        if (array_key_exists("IntranetVpcName",$param) and $param["IntranetVpcName"] !== null) {
            $this->IntranetVpcName = $param["IntranetVpcName"];
        }

        if (array_key_exists("IntranetSubnets",$param) and $param["IntranetSubnets"] !== null) {
            $this->IntranetSubnets = [];
            foreach ($param["IntranetSubnets"] as $key => $value){
                $obj = new ParamInitResourceSubnet();
                $obj->deserialize($value);
                array_push($this->IntranetSubnets, $obj);
            }
        }
    }
}
