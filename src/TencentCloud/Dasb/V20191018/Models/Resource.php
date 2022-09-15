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
namespace TencentCloud\Dasb\V20191018\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 堡垒机服务信息
 *
 * @method string getResourceId() 获取服务实例ID，如bh-saas-s3ed4r5e
 * @method void setResourceId(string $ResourceId) 设置服务实例ID，如bh-saas-s3ed4r5e
 * @method string getApCode() 获取地域编码
 * @method void setApCode(string $ApCode) 设置地域编码
 * @method string getSvArgs() 获取服务实例规格信息
 * @method void setSvArgs(string $SvArgs) 设置服务实例规格信息
 * @method string getVpcId() 获取VPC ID
 * @method void setVpcId(string $VpcId) 设置VPC ID
 * @method integer getNodes() 获取服务规格对应的资产数
 * @method void setNodes(integer $Nodes) 设置服务规格对应的资产数
 * @method integer getRenewFlag() 获取自动续费标记，0 - 表示默认状态，1 - 表示自动续费，2 - 表示明确不自动续费
 * @method void setRenewFlag(integer $RenewFlag) 设置自动续费标记，0 - 表示默认状态，1 - 表示自动续费，2 - 表示明确不自动续费
 * @method string getExpireTime() 获取过期时间
 * @method void setExpireTime(string $ExpireTime) 设置过期时间
 * @method integer getStatus() 获取资源状态，0 - 未初始化，1 - 正常，2 - 隔离，3 - 销毁，4 - 初始化失败，5 - 初始化中
 * @method void setStatus(integer $Status) 设置资源状态，0 - 未初始化，1 - 正常，2 - 隔离，3 - 销毁，4 - 初始化失败，5 - 初始化中
 * @method string getResourceName() 获取服务实例名，如T-Sec-堡垒机（SaaS型）
 * @method void setResourceName(string $ResourceName) 设置服务实例名，如T-Sec-堡垒机（SaaS型）
 * @method integer getPid() 获取定价模型ID
 * @method void setPid(integer $Pid) 设置定价模型ID
 * @method string getCreateTime() 获取资源创建时间
 * @method void setCreateTime(string $CreateTime) 设置资源创建时间
 * @method string getProductCode() 获取商品码, p_cds_dasb
 * @method void setProductCode(string $ProductCode) 设置商品码, p_cds_dasb
 * @method string getSubProductCode() 获取子商品码, sp_cds_dasb_bh_saas
 * @method void setSubProductCode(string $SubProductCode) 设置子商品码, sp_cds_dasb_bh_saas
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method boolean getExpired() 获取是否过期，true-过期，false-未过期
 * @method void setExpired(boolean $Expired) 设置是否过期，true-过期，false-未过期
 * @method boolean getDeployed() 获取是否开通，true-开通，false-未开通
 * @method void setDeployed(boolean $Deployed) 设置是否开通，true-开通，false-未开通
 * @method string getVpcName() 获取开通服务的 VPC 名称
 * @method void setVpcName(string $VpcName) 设置开通服务的 VPC 名称
 * @method string getVpcCidrBlock() 获取开通服务的 VPC 对应的网段
 * @method void setVpcCidrBlock(string $VpcCidrBlock) 设置开通服务的 VPC 对应的网段
 * @method string getSubnetId() 获取开通服务的子网ID
 * @method void setSubnetId(string $SubnetId) 设置开通服务的子网ID
 * @method string getSubnetName() 获取开通服务的子网名称
 * @method void setSubnetName(string $SubnetName) 设置开通服务的子网名称
 * @method string getCidrBlock() 获取开通服务的子网网段
 * @method void setCidrBlock(string $CidrBlock) 设置开通服务的子网网段
 * @method array getPublicIpSet() 获取外部IP
 * @method void setPublicIpSet(array $PublicIpSet) 设置外部IP
 * @method array getPrivateIpSet() 获取内部IP
 * @method void setPrivateIpSet(array $PrivateIpSet) 设置内部IP
 * @method array getModuleSet() 获取服务开通的高级功能列表，如:[DB]
 * @method void setModuleSet(array $ModuleSet) 设置服务开通的高级功能列表，如:[DB]
 * @method integer getUsedNodes() 获取已使用的授权点数
 * @method void setUsedNodes(integer $UsedNodes) 设置已使用的授权点数
 * @method integer getExtendPoints() 获取扩展点数
 * @method void setExtendPoints(integer $ExtendPoints) 设置扩展点数
 * @method integer getPackageBandwidth() 获取带宽扩展包个数(4M)
 * @method void setPackageBandwidth(integer $PackageBandwidth) 设置带宽扩展包个数(4M)
 * @method integer getPackageNode() 获取授权点数扩展包个数(50点)
 * @method void setPackageNode(integer $PackageNode) 设置授权点数扩展包个数(50点)
 */
class Resource extends AbstractModel
{
    /**
     * @var string 服务实例ID，如bh-saas-s3ed4r5e
     */
    public $ResourceId;

    /**
     * @var string 地域编码
     */
    public $ApCode;

    /**
     * @var string 服务实例规格信息
     */
    public $SvArgs;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var integer 服务规格对应的资产数
     */
    public $Nodes;

    /**
     * @var integer 自动续费标记，0 - 表示默认状态，1 - 表示自动续费，2 - 表示明确不自动续费
     */
    public $RenewFlag;

    /**
     * @var string 过期时间
     */
    public $ExpireTime;

    /**
     * @var integer 资源状态，0 - 未初始化，1 - 正常，2 - 隔离，3 - 销毁，4 - 初始化失败，5 - 初始化中
     */
    public $Status;

    /**
     * @var string 服务实例名，如T-Sec-堡垒机（SaaS型）
     */
    public $ResourceName;

    /**
     * @var integer 定价模型ID
     */
    public $Pid;

    /**
     * @var string 资源创建时间
     */
    public $CreateTime;

    /**
     * @var string 商品码, p_cds_dasb
     */
    public $ProductCode;

    /**
     * @var string 子商品码, sp_cds_dasb_bh_saas
     */
    public $SubProductCode;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var boolean 是否过期，true-过期，false-未过期
     */
    public $Expired;

    /**
     * @var boolean 是否开通，true-开通，false-未开通
     */
    public $Deployed;

    /**
     * @var string 开通服务的 VPC 名称
     */
    public $VpcName;

    /**
     * @var string 开通服务的 VPC 对应的网段
     */
    public $VpcCidrBlock;

    /**
     * @var string 开通服务的子网ID
     */
    public $SubnetId;

    /**
     * @var string 开通服务的子网名称
     */
    public $SubnetName;

    /**
     * @var string 开通服务的子网网段
     */
    public $CidrBlock;

    /**
     * @var array 外部IP
     */
    public $PublicIpSet;

    /**
     * @var array 内部IP
     */
    public $PrivateIpSet;

    /**
     * @var array 服务开通的高级功能列表，如:[DB]
     */
    public $ModuleSet;

    /**
     * @var integer 已使用的授权点数
     */
    public $UsedNodes;

    /**
     * @var integer 扩展点数
     */
    public $ExtendPoints;

    /**
     * @var integer 带宽扩展包个数(4M)
     */
    public $PackageBandwidth;

    /**
     * @var integer 授权点数扩展包个数(50点)
     */
    public $PackageNode;

    /**
     * @param string $ResourceId 服务实例ID，如bh-saas-s3ed4r5e
     * @param string $ApCode 地域编码
     * @param string $SvArgs 服务实例规格信息
     * @param string $VpcId VPC ID
     * @param integer $Nodes 服务规格对应的资产数
     * @param integer $RenewFlag 自动续费标记，0 - 表示默认状态，1 - 表示自动续费，2 - 表示明确不自动续费
     * @param string $ExpireTime 过期时间
     * @param integer $Status 资源状态，0 - 未初始化，1 - 正常，2 - 隔离，3 - 销毁，4 - 初始化失败，5 - 初始化中
     * @param string $ResourceName 服务实例名，如T-Sec-堡垒机（SaaS型）
     * @param integer $Pid 定价模型ID
     * @param string $CreateTime 资源创建时间
     * @param string $ProductCode 商品码, p_cds_dasb
     * @param string $SubProductCode 子商品码, sp_cds_dasb_bh_saas
     * @param string $Zone 可用区
     * @param boolean $Expired 是否过期，true-过期，false-未过期
     * @param boolean $Deployed 是否开通，true-开通，false-未开通
     * @param string $VpcName 开通服务的 VPC 名称
     * @param string $VpcCidrBlock 开通服务的 VPC 对应的网段
     * @param string $SubnetId 开通服务的子网ID
     * @param string $SubnetName 开通服务的子网名称
     * @param string $CidrBlock 开通服务的子网网段
     * @param array $PublicIpSet 外部IP
     * @param array $PrivateIpSet 内部IP
     * @param array $ModuleSet 服务开通的高级功能列表，如:[DB]
     * @param integer $UsedNodes 已使用的授权点数
     * @param integer $ExtendPoints 扩展点数
     * @param integer $PackageBandwidth 带宽扩展包个数(4M)
     * @param integer $PackageNode 授权点数扩展包个数(50点)
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

        if (array_key_exists("SvArgs",$param) and $param["SvArgs"] !== null) {
            $this->SvArgs = $param["SvArgs"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Nodes",$param) and $param["Nodes"] !== null) {
            $this->Nodes = $param["Nodes"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("SubProductCode",$param) and $param["SubProductCode"] !== null) {
            $this->SubProductCode = $param["SubProductCode"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Expired",$param) and $param["Expired"] !== null) {
            $this->Expired = $param["Expired"];
        }

        if (array_key_exists("Deployed",$param) and $param["Deployed"] !== null) {
            $this->Deployed = $param["Deployed"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("VpcCidrBlock",$param) and $param["VpcCidrBlock"] !== null) {
            $this->VpcCidrBlock = $param["VpcCidrBlock"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("PublicIpSet",$param) and $param["PublicIpSet"] !== null) {
            $this->PublicIpSet = $param["PublicIpSet"];
        }

        if (array_key_exists("PrivateIpSet",$param) and $param["PrivateIpSet"] !== null) {
            $this->PrivateIpSet = $param["PrivateIpSet"];
        }

        if (array_key_exists("ModuleSet",$param) and $param["ModuleSet"] !== null) {
            $this->ModuleSet = $param["ModuleSet"];
        }

        if (array_key_exists("UsedNodes",$param) and $param["UsedNodes"] !== null) {
            $this->UsedNodes = $param["UsedNodes"];
        }

        if (array_key_exists("ExtendPoints",$param) and $param["ExtendPoints"] !== null) {
            $this->ExtendPoints = $param["ExtendPoints"];
        }

        if (array_key_exists("PackageBandwidth",$param) and $param["PackageBandwidth"] !== null) {
            $this->PackageBandwidth = $param["PackageBandwidth"];
        }

        if (array_key_exists("PackageNode",$param) and $param["PackageNode"] !== null) {
            $this->PackageNode = $param["PackageNode"];
        }
    }
}
