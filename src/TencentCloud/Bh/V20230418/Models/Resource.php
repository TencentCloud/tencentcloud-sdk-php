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
namespace TencentCloud\Bh\V20230418\Models;
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
 * @method string getLogDeliveryArgs() 获取日志投递规格信息
 * @method void setLogDeliveryArgs(string $LogDeliveryArgs) 设置日志投递规格信息
 * @method array getClbSet() 获取堡垒机资源LB	
 * @method void setClbSet(array $ClbSet) 设置堡垒机资源LB	
 * @method integer getDomainCount() 获取网络域个数
 * @method void setDomainCount(integer $DomainCount) 设置网络域个数
 * @method integer getUsedDomainCount() 获取已经使用的网络域个数
 * @method void setUsedDomainCount(integer $UsedDomainCount) 设置已经使用的网络域个数
 * @method integer getTrial() 获取0 非试用版，1 试用版
 * @method void setTrial(integer $Trial) 设置0 非试用版，1 试用版
 * @method string getLogDelivery() 获取日志投递规格信息
 * @method void setLogDelivery(string $LogDelivery) 设置日志投递规格信息
 * @method string getCdcClusterId() 获取cdc集群id
 * @method void setCdcClusterId(string $CdcClusterId) 设置cdc集群id
 * @method integer getDeployModel() 获取部署模式 默认0 0-cvm 1-tke
 * @method void setDeployModel(integer $DeployModel) 设置部署模式 默认0 0-cvm 1-tke
 * @method integer getIntranetAccess() 获取0 默认值，非内网访问，1 内网访问，2 内网访问开通中，3 内网访问关闭中
 * @method void setIntranetAccess(integer $IntranetAccess) 设置0 默认值，非内网访问，1 内网访问，2 内网访问开通中，3 内网访问关闭中
 * @method array getIntranetPrivateIpSet() 获取内网访问的ip
 * @method void setIntranetPrivateIpSet(array $IntranetPrivateIpSet) 设置内网访问的ip
 * @method string getIntranetVpcId() 获取开通内网访问的vpc
 * @method void setIntranetVpcId(string $IntranetVpcId) 设置开通内网访问的vpc
 * @method string getIntranetVpcCidr() 获取开通内网访问vpc的网段
 * @method void setIntranetVpcCidr(string $IntranetVpcCidr) 设置开通内网访问vpc的网段
 * @method boolean getShareClb() 获取是否共享clb，true-共享clb，false-独享clb
 * @method void setShareClb(boolean $ShareClb) 设置是否共享clb，true-共享clb，false-独享clb
 * @method string getOpenClbId() 获取共享clb id
 * @method void setOpenClbId(string $OpenClbId) 设置共享clb id
 * @method string getLbVipIsp() 获取运营商信息
 * @method void setLbVipIsp(string $LbVipIsp) 设置运营商信息
 * @method integer getTUICmdPort() 获取linux资产命令行运维端口
 * @method void setTUICmdPort(integer $TUICmdPort) 设置linux资产命令行运维端口
 * @method integer getTUIDirectPort() 获取linux资产直连端口
 * @method void setTUIDirectPort(integer $TUIDirectPort) 设置linux资产直连端口
 * @method integer getWebAccess() 获取1 默认值，web访问开启，0 web访问关闭，2 web访问开通中，3 web访问关闭中
 * @method void setWebAccess(integer $WebAccess) 设置1 默认值，web访问开启，0 web访问关闭，2 web访问开通中，3 web访问关闭中
 * @method integer getClientAccess() 获取1 默认值，客户单访问开启，0 客户端访问关闭，2 客户端访问开通中，3 客户端访问关闭中
 * @method void setClientAccess(integer $ClientAccess) 设置1 默认值，客户单访问开启，0 客户端访问关闭，2 客户端访问开通中，3 客户端访问关闭中
 * @method integer getExternalAccess() 获取1 默认值，外网访问开启，0 外网访问关闭，2 外网访问开通中，3 外网访问关闭中
 * @method void setExternalAccess(integer $ExternalAccess) 设置1 默认值，外网访问开启，0 外网访问关闭，2 外网访问开通中，3 外网访问关闭中
 * @method integer getIOAResource() 获取0默认值。0-免费版（试用版）ioa，1-付费版ioa
 * @method void setIOAResource(integer $IOAResource) 设置0默认值。0-免费版（试用版）ioa，1-付费版ioa
 * @method integer getPackageIOAUserCount() 获取零信任堡垒机用户扩展包个数。1个扩展包对应20个用户数
 * @method void setPackageIOAUserCount(integer $PackageIOAUserCount) 设置零信任堡垒机用户扩展包个数。1个扩展包对应20个用户数
 * @method integer getPackageIOABandwidth() 获取 零信任堡垒机带宽扩展包个数。一个扩展包表示4M带宽
 * @method void setPackageIOABandwidth(integer $PackageIOABandwidth) 设置 零信任堡垒机带宽扩展包个数。一个扩展包表示4M带宽
 * @method string getIOAResourceId() 获取堡垒机实例对应的零信任实例id
 * @method void setIOAResourceId(string $IOAResourceId) 设置堡垒机实例对应的零信任实例id
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
     * @var string 日志投递规格信息
     */
    public $LogDeliveryArgs;

    /**
     * @var array 堡垒机资源LB	
     */
    public $ClbSet;

    /**
     * @var integer 网络域个数
     */
    public $DomainCount;

    /**
     * @var integer 已经使用的网络域个数
     */
    public $UsedDomainCount;

    /**
     * @var integer 0 非试用版，1 试用版
     */
    public $Trial;

    /**
     * @var string 日志投递规格信息
     */
    public $LogDelivery;

    /**
     * @var string cdc集群id
     */
    public $CdcClusterId;

    /**
     * @var integer 部署模式 默认0 0-cvm 1-tke
     */
    public $DeployModel;

    /**
     * @var integer 0 默认值，非内网访问，1 内网访问，2 内网访问开通中，3 内网访问关闭中
     */
    public $IntranetAccess;

    /**
     * @var array 内网访问的ip
     */
    public $IntranetPrivateIpSet;

    /**
     * @var string 开通内网访问的vpc
     */
    public $IntranetVpcId;

    /**
     * @var string 开通内网访问vpc的网段
     */
    public $IntranetVpcCidr;

    /**
     * @var boolean 是否共享clb，true-共享clb，false-独享clb
     */
    public $ShareClb;

    /**
     * @var string 共享clb id
     */
    public $OpenClbId;

    /**
     * @var string 运营商信息
     */
    public $LbVipIsp;

    /**
     * @var integer linux资产命令行运维端口
     */
    public $TUICmdPort;

    /**
     * @var integer linux资产直连端口
     */
    public $TUIDirectPort;

    /**
     * @var integer 1 默认值，web访问开启，0 web访问关闭，2 web访问开通中，3 web访问关闭中
     */
    public $WebAccess;

    /**
     * @var integer 1 默认值，客户单访问开启，0 客户端访问关闭，2 客户端访问开通中，3 客户端访问关闭中
     */
    public $ClientAccess;

    /**
     * @var integer 1 默认值，外网访问开启，0 外网访问关闭，2 外网访问开通中，3 外网访问关闭中
     */
    public $ExternalAccess;

    /**
     * @var integer 0默认值。0-免费版（试用版）ioa，1-付费版ioa
     */
    public $IOAResource;

    /**
     * @var integer 零信任堡垒机用户扩展包个数。1个扩展包对应20个用户数
     */
    public $PackageIOAUserCount;

    /**
     * @var integer  零信任堡垒机带宽扩展包个数。一个扩展包表示4M带宽
     */
    public $PackageIOABandwidth;

    /**
     * @var string 堡垒机实例对应的零信任实例id
     */
    public $IOAResourceId;

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
     * @param string $LogDeliveryArgs 日志投递规格信息
     * @param array $ClbSet 堡垒机资源LB	
     * @param integer $DomainCount 网络域个数
     * @param integer $UsedDomainCount 已经使用的网络域个数
     * @param integer $Trial 0 非试用版，1 试用版
     * @param string $LogDelivery 日志投递规格信息
     * @param string $CdcClusterId cdc集群id
     * @param integer $DeployModel 部署模式 默认0 0-cvm 1-tke
     * @param integer $IntranetAccess 0 默认值，非内网访问，1 内网访问，2 内网访问开通中，3 内网访问关闭中
     * @param array $IntranetPrivateIpSet 内网访问的ip
     * @param string $IntranetVpcId 开通内网访问的vpc
     * @param string $IntranetVpcCidr 开通内网访问vpc的网段
     * @param boolean $ShareClb 是否共享clb，true-共享clb，false-独享clb
     * @param string $OpenClbId 共享clb id
     * @param string $LbVipIsp 运营商信息
     * @param integer $TUICmdPort linux资产命令行运维端口
     * @param integer $TUIDirectPort linux资产直连端口
     * @param integer $WebAccess 1 默认值，web访问开启，0 web访问关闭，2 web访问开通中，3 web访问关闭中
     * @param integer $ClientAccess 1 默认值，客户单访问开启，0 客户端访问关闭，2 客户端访问开通中，3 客户端访问关闭中
     * @param integer $ExternalAccess 1 默认值，外网访问开启，0 外网访问关闭，2 外网访问开通中，3 外网访问关闭中
     * @param integer $IOAResource 0默认值。0-免费版（试用版）ioa，1-付费版ioa
     * @param integer $PackageIOAUserCount 零信任堡垒机用户扩展包个数。1个扩展包对应20个用户数
     * @param integer $PackageIOABandwidth  零信任堡垒机带宽扩展包个数。一个扩展包表示4M带宽
     * @param string $IOAResourceId 堡垒机实例对应的零信任实例id
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

        if (array_key_exists("LogDeliveryArgs",$param) and $param["LogDeliveryArgs"] !== null) {
            $this->LogDeliveryArgs = $param["LogDeliveryArgs"];
        }

        if (array_key_exists("ClbSet",$param) and $param["ClbSet"] !== null) {
            $this->ClbSet = [];
            foreach ($param["ClbSet"] as $key => $value){
                $obj = new Clb();
                $obj->deserialize($value);
                array_push($this->ClbSet, $obj);
            }
        }

        if (array_key_exists("DomainCount",$param) and $param["DomainCount"] !== null) {
            $this->DomainCount = $param["DomainCount"];
        }

        if (array_key_exists("UsedDomainCount",$param) and $param["UsedDomainCount"] !== null) {
            $this->UsedDomainCount = $param["UsedDomainCount"];
        }

        if (array_key_exists("Trial",$param) and $param["Trial"] !== null) {
            $this->Trial = $param["Trial"];
        }

        if (array_key_exists("LogDelivery",$param) and $param["LogDelivery"] !== null) {
            $this->LogDelivery = $param["LogDelivery"];
        }

        if (array_key_exists("CdcClusterId",$param) and $param["CdcClusterId"] !== null) {
            $this->CdcClusterId = $param["CdcClusterId"];
        }

        if (array_key_exists("DeployModel",$param) and $param["DeployModel"] !== null) {
            $this->DeployModel = $param["DeployModel"];
        }

        if (array_key_exists("IntranetAccess",$param) and $param["IntranetAccess"] !== null) {
            $this->IntranetAccess = $param["IntranetAccess"];
        }

        if (array_key_exists("IntranetPrivateIpSet",$param) and $param["IntranetPrivateIpSet"] !== null) {
            $this->IntranetPrivateIpSet = $param["IntranetPrivateIpSet"];
        }

        if (array_key_exists("IntranetVpcId",$param) and $param["IntranetVpcId"] !== null) {
            $this->IntranetVpcId = $param["IntranetVpcId"];
        }

        if (array_key_exists("IntranetVpcCidr",$param) and $param["IntranetVpcCidr"] !== null) {
            $this->IntranetVpcCidr = $param["IntranetVpcCidr"];
        }

        if (array_key_exists("ShareClb",$param) and $param["ShareClb"] !== null) {
            $this->ShareClb = $param["ShareClb"];
        }

        if (array_key_exists("OpenClbId",$param) and $param["OpenClbId"] !== null) {
            $this->OpenClbId = $param["OpenClbId"];
        }

        if (array_key_exists("LbVipIsp",$param) and $param["LbVipIsp"] !== null) {
            $this->LbVipIsp = $param["LbVipIsp"];
        }

        if (array_key_exists("TUICmdPort",$param) and $param["TUICmdPort"] !== null) {
            $this->TUICmdPort = $param["TUICmdPort"];
        }

        if (array_key_exists("TUIDirectPort",$param) and $param["TUIDirectPort"] !== null) {
            $this->TUIDirectPort = $param["TUIDirectPort"];
        }

        if (array_key_exists("WebAccess",$param) and $param["WebAccess"] !== null) {
            $this->WebAccess = $param["WebAccess"];
        }

        if (array_key_exists("ClientAccess",$param) and $param["ClientAccess"] !== null) {
            $this->ClientAccess = $param["ClientAccess"];
        }

        if (array_key_exists("ExternalAccess",$param) and $param["ExternalAccess"] !== null) {
            $this->ExternalAccess = $param["ExternalAccess"];
        }

        if (array_key_exists("IOAResource",$param) and $param["IOAResource"] !== null) {
            $this->IOAResource = $param["IOAResource"];
        }

        if (array_key_exists("PackageIOAUserCount",$param) and $param["PackageIOAUserCount"] !== null) {
            $this->PackageIOAUserCount = $param["PackageIOAUserCount"];
        }

        if (array_key_exists("PackageIOABandwidth",$param) and $param["PackageIOABandwidth"] !== null) {
            $this->PackageIOABandwidth = $param["PackageIOABandwidth"];
        }

        if (array_key_exists("IOAResourceId",$param) and $param["IOAResourceId"] !== null) {
            $this->IOAResourceId = $param["IOAResourceId"];
        }
    }
}
