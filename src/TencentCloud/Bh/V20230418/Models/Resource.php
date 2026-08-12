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
 * 堡垒机服务信息
 *
 * @method string getResourceId() 获取<p>服务实例ID，如bh-saas-s3ed4r5e</p>
 * @method void setResourceId(string $ResourceId) 设置<p>服务实例ID，如bh-saas-s3ed4r5e</p>
 * @method string getApCode() 获取<p>地域编码</p>
 * @method void setApCode(string $ApCode) 设置<p>地域编码</p>
 * @method string getSvArgs() 获取<p>服务实例规格信息</p>
 * @method void setSvArgs(string $SvArgs) 设置<p>服务实例规格信息</p>
 * @method string getVpcId() 获取<p>VPC ID</p>
 * @method void setVpcId(string $VpcId) 设置<p>VPC ID</p>
 * @method integer getNodes() 获取<p>服务规格对应的资产数</p>
 * @method void setNodes(integer $Nodes) 设置<p>服务规格对应的资产数</p>
 * @method integer getRenewFlag() 获取<p>自动续费标记，0 - 表示默认状态，1 - 表示自动续费，2 - 表示明确不自动续费</p>
 * @method void setRenewFlag(integer $RenewFlag) 设置<p>自动续费标记，0 - 表示默认状态，1 - 表示自动续费，2 - 表示明确不自动续费</p>
 * @method string getExpireTime() 获取<p>过期时间</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>过期时间</p>
 * @method integer getStatus() 获取<p>资源状态，0 - 未初始化，1 - 正常，2 - 隔离，3 - 销毁，4 - 初始化失败，5 - 初始化中</p>
 * @method void setStatus(integer $Status) 设置<p>资源状态，0 - 未初始化，1 - 正常，2 - 隔离，3 - 销毁，4 - 初始化失败，5 - 初始化中</p>
 * @method string getResourceName() 获取<p>服务实例名，如T-Sec-堡垒机（SaaS型）</p>
 * @method void setResourceName(string $ResourceName) 设置<p>服务实例名，如T-Sec-堡垒机（SaaS型）</p>
 * @method integer getPid() 获取<p>定价模型ID</p>
 * @method void setPid(integer $Pid) 设置<p>定价模型ID</p>
 * @method string getCreateTime() 获取<p>资源创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>资源创建时间</p>
 * @method string getProductCode() 获取<p>商品码, p_cds_dasb</p>
 * @method void setProductCode(string $ProductCode) 设置<p>商品码, p_cds_dasb</p>
 * @method string getSubProductCode() 获取<p>子商品码, sp_cds_dasb_bh_saas</p>
 * @method void setSubProductCode(string $SubProductCode) 设置<p>子商品码, sp_cds_dasb_bh_saas</p>
 * @method string getZone() 获取<p>可用区</p>
 * @method void setZone(string $Zone) 设置<p>可用区</p>
 * @method boolean getExpired() 获取<p>是否过期，true-过期，false-未过期</p>
 * @method void setExpired(boolean $Expired) 设置<p>是否过期，true-过期，false-未过期</p>
 * @method boolean getDeployed() 获取<p>是否开通，true-开通，false-未开通</p>
 * @method void setDeployed(boolean $Deployed) 设置<p>是否开通，true-开通，false-未开通</p>
 * @method string getVpcName() 获取<p>开通服务的 VPC 名称</p>
 * @method void setVpcName(string $VpcName) 设置<p>开通服务的 VPC 名称</p>
 * @method string getVpcCidrBlock() 获取<p>开通服务的 VPC 对应的网段</p>
 * @method void setVpcCidrBlock(string $VpcCidrBlock) 设置<p>开通服务的 VPC 对应的网段</p>
 * @method string getSubnetId() 获取<p>开通服务的子网ID</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>开通服务的子网ID</p>
 * @method string getSubnetName() 获取<p>开通服务的子网名称</p>
 * @method void setSubnetName(string $SubnetName) 设置<p>开通服务的子网名称</p>
 * @method string getCidrBlock() 获取<p>开通服务的子网网段</p>
 * @method void setCidrBlock(string $CidrBlock) 设置<p>开通服务的子网网段</p>
 * @method array getPublicIpSet() 获取<p>外部IP</p>
 * @method void setPublicIpSet(array $PublicIpSet) 设置<p>外部IP</p>
 * @method array getPrivateIpSet() 获取<p>内部IP</p>
 * @method void setPrivateIpSet(array $PrivateIpSet) 设置<p>内部IP</p>
 * @method array getModuleSet() 获取<p>服务开通的高级功能列表，如:[DB]</p>
 * @method void setModuleSet(array $ModuleSet) 设置<p>服务开通的高级功能列表，如:[DB]</p>
 * @method integer getUsedNodes() 获取<p>已使用的授权点数</p>
 * @method void setUsedNodes(integer $UsedNodes) 设置<p>已使用的授权点数</p>
 * @method integer getExtendPoints() 获取<p>扩展点数</p>
 * @method void setExtendPoints(integer $ExtendPoints) 设置<p>扩展点数</p>
 * @method integer getPackageBandwidth() 获取<p>带宽扩展包个数(4M)</p>
 * @method void setPackageBandwidth(integer $PackageBandwidth) 设置<p>带宽扩展包个数(4M)</p>
 * @method integer getPackageNode() 获取<p>授权点数扩展包个数(50点)</p>
 * @method void setPackageNode(integer $PackageNode) 设置<p>授权点数扩展包个数(50点)</p>
 * @method string getLogDeliveryArgs() 获取<p>日志投递规格信息</p>
 * @method void setLogDeliveryArgs(string $LogDeliveryArgs) 设置<p>日志投递规格信息</p>
 * @method array getClbSet() 获取<p>堡垒机资源LB</p>
 * @method void setClbSet(array $ClbSet) 设置<p>堡垒机资源LB</p>
 * @method integer getDomainCount() 获取<p>网络域个数</p>
 * @method void setDomainCount(integer $DomainCount) 设置<p>网络域个数</p>
 * @method integer getUsedDomainCount() 获取<p>已经使用的网络域个数</p>
 * @method void setUsedDomainCount(integer $UsedDomainCount) 设置<p>已经使用的网络域个数</p>
 * @method integer getEnabledDomainCount() 获取<p>开启的网络域个数（不包含默认网络域）</p>
 * @method void setEnabledDomainCount(integer $EnabledDomainCount) 设置<p>开启的网络域个数（不包含默认网络域）</p>
 * @method integer getTrial() 获取<p>0 非试用版，1 试用版</p>
 * @method void setTrial(integer $Trial) 设置<p>0 非试用版，1 试用版</p>
 * @method string getLogDelivery() 获取<p>日志投递规格信息</p>
 * @method void setLogDelivery(string $LogDelivery) 设置<p>日志投递规格信息</p>
 * @method string getCdcClusterId() 获取<p>cdc集群id</p>
 * @method void setCdcClusterId(string $CdcClusterId) 设置<p>cdc集群id</p>
 * @method integer getDeployModel() 获取<p>部署模式 默认0 0-cvm 1-tke</p>
 * @method void setDeployModel(integer $DeployModel) 设置<p>部署模式 默认0 0-cvm 1-tke</p>
 * @method integer getIntranetAccess() 获取<p>0 默认值，非内网访问，1 内网访问，2 内网访问开通中，3 内网访问关闭中</p>
 * @method void setIntranetAccess(integer $IntranetAccess) 设置<p>0 默认值，非内网访问，1 内网访问，2 内网访问开通中，3 内网访问关闭中</p>
 * @method array getIntranetPrivateIpSet() 获取<p>内网访问的ip</p>
 * @method void setIntranetPrivateIpSet(array $IntranetPrivateIpSet) 设置<p>内网访问的ip</p>
 * @method string getIntranetVpcId() 获取<p>开通内网访问的vpc</p>
 * @method void setIntranetVpcId(string $IntranetVpcId) 设置<p>开通内网访问的vpc</p>
 * @method string getIntranetSubnetId() 获取<p>开通内网访问的subnetId</p>
 * @method void setIntranetSubnetId(string $IntranetSubnetId) 设置<p>开通内网访问的subnetId</p>
 * @method array getIntranetSubnetIdSet() 获取<p>开通内网访问的子网集合</p>
 * @method void setIntranetSubnetIdSet(array $IntranetSubnetIdSet) 设置<p>开通内网访问的子网集合</p>
 * @method string getIntranetVpcCidr() 获取<p>开通内网访问vpc的网段</p>
 * @method void setIntranetVpcCidr(string $IntranetVpcCidr) 设置<p>开通内网访问vpc的网段</p>
 * @method string getDomainName() 获取<p>堡垒机内网ip自定义域名</p>
 * @method void setDomainName(string $DomainName) 设置<p>堡垒机内网ip自定义域名</p>
 * @method boolean getShareClb() 获取<p>是否共享clb，true-共享clb，false-独享clb</p>
 * @method void setShareClb(boolean $ShareClb) 设置<p>是否共享clb，true-共享clb，false-独享clb</p>
 * @method string getOpenClbId() 获取<p>共享clb id</p>
 * @method void setOpenClbId(string $OpenClbId) 设置<p>共享clb id</p>
 * @method string getLbVipIsp() 获取<p>运营商信息</p>
 * @method void setLbVipIsp(string $LbVipIsp) 设置<p>运营商信息</p>
 * @method integer getTUICmdPort() 获取<p>linux资产命令行运维端口</p>
 * @method void setTUICmdPort(integer $TUICmdPort) 设置<p>linux资产命令行运维端口</p>
 * @method integer getTUIDirectPort() 获取<p>linux资产直连端口</p>
 * @method void setTUIDirectPort(integer $TUIDirectPort) 设置<p>linux资产直连端口</p>
 * @method integer getWebAccess() 获取<p>1 默认值，web访问开启，0 web访问关闭，2 web访问开通中，3 web访问关闭中</p>
 * @method void setWebAccess(integer $WebAccess) 设置<p>1 默认值，web访问开启，0 web访问关闭，2 web访问开通中，3 web访问关闭中</p>
 * @method integer getClientAccess() 获取<p>1 默认值，客户单访问开启，0 客户端访问关闭，2 客户端访问开通中，3 客户端访问关闭中</p>
 * @method void setClientAccess(integer $ClientAccess) 设置<p>1 默认值，客户单访问开启，0 客户端访问关闭，2 客户端访问开通中，3 客户端访问关闭中</p>
 * @method integer getExternalAccess() 获取<p>1 默认值，外网访问开启，0 外网访问关闭，2 外网访问开通中，3 外网访问关闭中</p>
 * @method void setExternalAccess(integer $ExternalAccess) 设置<p>1 默认值，外网访问开启，0 外网访问关闭，2 外网访问开通中，3 外网访问关闭中</p>
 * @method integer getIOAResource() 获取<p>0默认值。0-免费版（试用版）ioa，1-付费版ioa</p>
 * @method void setIOAResource(integer $IOAResource) 设置<p>0默认值。0-免费版（试用版）ioa，1-付费版ioa</p>
 * @method integer getPackageIOAUserCount() 获取<p>零信任堡垒机用户扩展包个数。1个扩展包对应20个用户数</p>
 * @method void setPackageIOAUserCount(integer $PackageIOAUserCount) 设置<p>零信任堡垒机用户扩展包个数。1个扩展包对应20个用户数</p>
 * @method integer getPackageIOABandwidth() 获取<p>零信任堡垒机带宽扩展包个数。一个扩展包表示4M带宽</p>
 * @method void setPackageIOABandwidth(integer $PackageIOABandwidth) 设置<p>零信任堡垒机带宽扩展包个数。一个扩展包表示4M带宽</p>
 * @method string getIOAResourceId() 获取<p>堡垒机实例对应的零信任实例id</p>
 * @method void setIOAResourceId(string $IOAResourceId) 设置<p>堡垒机实例对应的零信任实例id</p>
 * @method string getResourceEdition() 获取<p>资源类型 免费版/标准版/专业版 /国密版 free/standard/pro/gm</p>
 * @method void setResourceEdition(string $ResourceEdition) 设置<p>资源类型 免费版/标准版/专业版 /国密版 free/standard/pro/gm</p>
 * @method string getTimeUnit() 获取<p>计费周期 年：y，月：m，日：d，时：h，分：M，秒：s，一次性购买：p</p>
 * @method void setTimeUnit(string $TimeUnit) 设置<p>计费周期 年：y，月：m，日：d，时：h，分：M，秒：s，一次性购买：p</p>
 * @method integer getTimeSpan() 获取<p>计费时长</p>
 * @method void setTimeSpan(integer $TimeSpan) 设置<p>计费时长</p>
 * @method integer getPayMode() 获取<p>计费模式 0后付费，1预付费</p>
 * @method void setPayMode(integer $PayMode) 设置<p>计费模式 0后付费，1预付费</p>
 * @method string getBillingRegion() 获取<p>计费侧地域</p>
 * @method void setBillingRegion(string $BillingRegion) 设置<p>计费侧地域</p>
 * @method string getBillingZone() 获取<p>计费侧可用区</p>
 * @method void setBillingZone(string $BillingZone) 设置<p>计费侧可用区</p>
 * @method integer getDeployCvmCount() 获取<p>部署的cvm个数</p>
 * @method void setDeployCvmCount(integer $DeployCvmCount) 设置<p>部署的cvm个数</p>
 * @method array getResourceZoneSet() 获取<p>堡垒机实例的可用区信息</p>
 * @method void setResourceZoneSet(array $ResourceZoneSet) 设置<p>堡垒机实例的可用区信息</p>
 */
class Resource extends AbstractModel
{
    /**
     * @var string <p>服务实例ID，如bh-saas-s3ed4r5e</p>
     */
    public $ResourceId;

    /**
     * @var string <p>地域编码</p>
     */
    public $ApCode;

    /**
     * @var string <p>服务实例规格信息</p>
     */
    public $SvArgs;

    /**
     * @var string <p>VPC ID</p>
     */
    public $VpcId;

    /**
     * @var integer <p>服务规格对应的资产数</p>
     */
    public $Nodes;

    /**
     * @var integer <p>自动续费标记，0 - 表示默认状态，1 - 表示自动续费，2 - 表示明确不自动续费</p>
     */
    public $RenewFlag;

    /**
     * @var string <p>过期时间</p>
     */
    public $ExpireTime;

    /**
     * @var integer <p>资源状态，0 - 未初始化，1 - 正常，2 - 隔离，3 - 销毁，4 - 初始化失败，5 - 初始化中</p>
     */
    public $Status;

    /**
     * @var string <p>服务实例名，如T-Sec-堡垒机（SaaS型）</p>
     */
    public $ResourceName;

    /**
     * @var integer <p>定价模型ID</p>
     */
    public $Pid;

    /**
     * @var string <p>资源创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>商品码, p_cds_dasb</p>
     */
    public $ProductCode;

    /**
     * @var string <p>子商品码, sp_cds_dasb_bh_saas</p>
     */
    public $SubProductCode;

    /**
     * @var string <p>可用区</p>
     */
    public $Zone;

    /**
     * @var boolean <p>是否过期，true-过期，false-未过期</p>
     */
    public $Expired;

    /**
     * @var boolean <p>是否开通，true-开通，false-未开通</p>
     */
    public $Deployed;

    /**
     * @var string <p>开通服务的 VPC 名称</p>
     */
    public $VpcName;

    /**
     * @var string <p>开通服务的 VPC 对应的网段</p>
     */
    public $VpcCidrBlock;

    /**
     * @var string <p>开通服务的子网ID</p>
     */
    public $SubnetId;

    /**
     * @var string <p>开通服务的子网名称</p>
     */
    public $SubnetName;

    /**
     * @var string <p>开通服务的子网网段</p>
     */
    public $CidrBlock;

    /**
     * @var array <p>外部IP</p>
     */
    public $PublicIpSet;

    /**
     * @var array <p>内部IP</p>
     */
    public $PrivateIpSet;

    /**
     * @var array <p>服务开通的高级功能列表，如:[DB]</p>
     */
    public $ModuleSet;

    /**
     * @var integer <p>已使用的授权点数</p>
     */
    public $UsedNodes;

    /**
     * @var integer <p>扩展点数</p>
     */
    public $ExtendPoints;

    /**
     * @var integer <p>带宽扩展包个数(4M)</p>
     */
    public $PackageBandwidth;

    /**
     * @var integer <p>授权点数扩展包个数(50点)</p>
     */
    public $PackageNode;

    /**
     * @var string <p>日志投递规格信息</p>
     */
    public $LogDeliveryArgs;

    /**
     * @var array <p>堡垒机资源LB</p>
     */
    public $ClbSet;

    /**
     * @var integer <p>网络域个数</p>
     */
    public $DomainCount;

    /**
     * @var integer <p>已经使用的网络域个数</p>
     */
    public $UsedDomainCount;

    /**
     * @var integer <p>开启的网络域个数（不包含默认网络域）</p>
     */
    public $EnabledDomainCount;

    /**
     * @var integer <p>0 非试用版，1 试用版</p>
     */
    public $Trial;

    /**
     * @var string <p>日志投递规格信息</p>
     */
    public $LogDelivery;

    /**
     * @var string <p>cdc集群id</p>
     */
    public $CdcClusterId;

    /**
     * @var integer <p>部署模式 默认0 0-cvm 1-tke</p>
     */
    public $DeployModel;

    /**
     * @var integer <p>0 默认值，非内网访问，1 内网访问，2 内网访问开通中，3 内网访问关闭中</p>
     */
    public $IntranetAccess;

    /**
     * @var array <p>内网访问的ip</p>
     */
    public $IntranetPrivateIpSet;

    /**
     * @var string <p>开通内网访问的vpc</p>
     */
    public $IntranetVpcId;

    /**
     * @var string <p>开通内网访问的subnetId</p>
     * @deprecated
     */
    public $IntranetSubnetId;

    /**
     * @var array <p>开通内网访问的子网集合</p>
     */
    public $IntranetSubnetIdSet;

    /**
     * @var string <p>开通内网访问vpc的网段</p>
     */
    public $IntranetVpcCidr;

    /**
     * @var string <p>堡垒机内网ip自定义域名</p>
     */
    public $DomainName;

    /**
     * @var boolean <p>是否共享clb，true-共享clb，false-独享clb</p>
     */
    public $ShareClb;

    /**
     * @var string <p>共享clb id</p>
     */
    public $OpenClbId;

    /**
     * @var string <p>运营商信息</p>
     */
    public $LbVipIsp;

    /**
     * @var integer <p>linux资产命令行运维端口</p>
     */
    public $TUICmdPort;

    /**
     * @var integer <p>linux资产直连端口</p>
     */
    public $TUIDirectPort;

    /**
     * @var integer <p>1 默认值，web访问开启，0 web访问关闭，2 web访问开通中，3 web访问关闭中</p>
     */
    public $WebAccess;

    /**
     * @var integer <p>1 默认值，客户单访问开启，0 客户端访问关闭，2 客户端访问开通中，3 客户端访问关闭中</p>
     */
    public $ClientAccess;

    /**
     * @var integer <p>1 默认值，外网访问开启，0 外网访问关闭，2 外网访问开通中，3 外网访问关闭中</p>
     */
    public $ExternalAccess;

    /**
     * @var integer <p>0默认值。0-免费版（试用版）ioa，1-付费版ioa</p>
     */
    public $IOAResource;

    /**
     * @var integer <p>零信任堡垒机用户扩展包个数。1个扩展包对应20个用户数</p>
     */
    public $PackageIOAUserCount;

    /**
     * @var integer <p>零信任堡垒机带宽扩展包个数。一个扩展包表示4M带宽</p>
     */
    public $PackageIOABandwidth;

    /**
     * @var string <p>堡垒机实例对应的零信任实例id</p>
     */
    public $IOAResourceId;

    /**
     * @var string <p>资源类型 免费版/标准版/专业版 /国密版 free/standard/pro/gm</p>
     */
    public $ResourceEdition;

    /**
     * @var string <p>计费周期 年：y，月：m，日：d，时：h，分：M，秒：s，一次性购买：p</p>
     */
    public $TimeUnit;

    /**
     * @var integer <p>计费时长</p>
     */
    public $TimeSpan;

    /**
     * @var integer <p>计费模式 0后付费，1预付费</p>
     */
    public $PayMode;

    /**
     * @var string <p>计费侧地域</p>
     */
    public $BillingRegion;

    /**
     * @var string <p>计费侧可用区</p>
     */
    public $BillingZone;

    /**
     * @var integer <p>部署的cvm个数</p>
     */
    public $DeployCvmCount;

    /**
     * @var array <p>堡垒机实例的可用区信息</p>
     */
    public $ResourceZoneSet;

    /**
     * @param string $ResourceId <p>服务实例ID，如bh-saas-s3ed4r5e</p>
     * @param string $ApCode <p>地域编码</p>
     * @param string $SvArgs <p>服务实例规格信息</p>
     * @param string $VpcId <p>VPC ID</p>
     * @param integer $Nodes <p>服务规格对应的资产数</p>
     * @param integer $RenewFlag <p>自动续费标记，0 - 表示默认状态，1 - 表示自动续费，2 - 表示明确不自动续费</p>
     * @param string $ExpireTime <p>过期时间</p>
     * @param integer $Status <p>资源状态，0 - 未初始化，1 - 正常，2 - 隔离，3 - 销毁，4 - 初始化失败，5 - 初始化中</p>
     * @param string $ResourceName <p>服务实例名，如T-Sec-堡垒机（SaaS型）</p>
     * @param integer $Pid <p>定价模型ID</p>
     * @param string $CreateTime <p>资源创建时间</p>
     * @param string $ProductCode <p>商品码, p_cds_dasb</p>
     * @param string $SubProductCode <p>子商品码, sp_cds_dasb_bh_saas</p>
     * @param string $Zone <p>可用区</p>
     * @param boolean $Expired <p>是否过期，true-过期，false-未过期</p>
     * @param boolean $Deployed <p>是否开通，true-开通，false-未开通</p>
     * @param string $VpcName <p>开通服务的 VPC 名称</p>
     * @param string $VpcCidrBlock <p>开通服务的 VPC 对应的网段</p>
     * @param string $SubnetId <p>开通服务的子网ID</p>
     * @param string $SubnetName <p>开通服务的子网名称</p>
     * @param string $CidrBlock <p>开通服务的子网网段</p>
     * @param array $PublicIpSet <p>外部IP</p>
     * @param array $PrivateIpSet <p>内部IP</p>
     * @param array $ModuleSet <p>服务开通的高级功能列表，如:[DB]</p>
     * @param integer $UsedNodes <p>已使用的授权点数</p>
     * @param integer $ExtendPoints <p>扩展点数</p>
     * @param integer $PackageBandwidth <p>带宽扩展包个数(4M)</p>
     * @param integer $PackageNode <p>授权点数扩展包个数(50点)</p>
     * @param string $LogDeliveryArgs <p>日志投递规格信息</p>
     * @param array $ClbSet <p>堡垒机资源LB</p>
     * @param integer $DomainCount <p>网络域个数</p>
     * @param integer $UsedDomainCount <p>已经使用的网络域个数</p>
     * @param integer $EnabledDomainCount <p>开启的网络域个数（不包含默认网络域）</p>
     * @param integer $Trial <p>0 非试用版，1 试用版</p>
     * @param string $LogDelivery <p>日志投递规格信息</p>
     * @param string $CdcClusterId <p>cdc集群id</p>
     * @param integer $DeployModel <p>部署模式 默认0 0-cvm 1-tke</p>
     * @param integer $IntranetAccess <p>0 默认值，非内网访问，1 内网访问，2 内网访问开通中，3 内网访问关闭中</p>
     * @param array $IntranetPrivateIpSet <p>内网访问的ip</p>
     * @param string $IntranetVpcId <p>开通内网访问的vpc</p>
     * @param string $IntranetSubnetId <p>开通内网访问的subnetId</p>
     * @param array $IntranetSubnetIdSet <p>开通内网访问的子网集合</p>
     * @param string $IntranetVpcCidr <p>开通内网访问vpc的网段</p>
     * @param string $DomainName <p>堡垒机内网ip自定义域名</p>
     * @param boolean $ShareClb <p>是否共享clb，true-共享clb，false-独享clb</p>
     * @param string $OpenClbId <p>共享clb id</p>
     * @param string $LbVipIsp <p>运营商信息</p>
     * @param integer $TUICmdPort <p>linux资产命令行运维端口</p>
     * @param integer $TUIDirectPort <p>linux资产直连端口</p>
     * @param integer $WebAccess <p>1 默认值，web访问开启，0 web访问关闭，2 web访问开通中，3 web访问关闭中</p>
     * @param integer $ClientAccess <p>1 默认值，客户单访问开启，0 客户端访问关闭，2 客户端访问开通中，3 客户端访问关闭中</p>
     * @param integer $ExternalAccess <p>1 默认值，外网访问开启，0 外网访问关闭，2 外网访问开通中，3 外网访问关闭中</p>
     * @param integer $IOAResource <p>0默认值。0-免费版（试用版）ioa，1-付费版ioa</p>
     * @param integer $PackageIOAUserCount <p>零信任堡垒机用户扩展包个数。1个扩展包对应20个用户数</p>
     * @param integer $PackageIOABandwidth <p>零信任堡垒机带宽扩展包个数。一个扩展包表示4M带宽</p>
     * @param string $IOAResourceId <p>堡垒机实例对应的零信任实例id</p>
     * @param string $ResourceEdition <p>资源类型 免费版/标准版/专业版 /国密版 free/standard/pro/gm</p>
     * @param string $TimeUnit <p>计费周期 年：y，月：m，日：d，时：h，分：M，秒：s，一次性购买：p</p>
     * @param integer $TimeSpan <p>计费时长</p>
     * @param integer $PayMode <p>计费模式 0后付费，1预付费</p>
     * @param string $BillingRegion <p>计费侧地域</p>
     * @param string $BillingZone <p>计费侧可用区</p>
     * @param integer $DeployCvmCount <p>部署的cvm个数</p>
     * @param array $ResourceZoneSet <p>堡垒机实例的可用区信息</p>
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

        if (array_key_exists("EnabledDomainCount",$param) and $param["EnabledDomainCount"] !== null) {
            $this->EnabledDomainCount = $param["EnabledDomainCount"];
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

        if (array_key_exists("IntranetSubnetId",$param) and $param["IntranetSubnetId"] !== null) {
            $this->IntranetSubnetId = $param["IntranetSubnetId"];
        }

        if (array_key_exists("IntranetSubnetIdSet",$param) and $param["IntranetSubnetIdSet"] !== null) {
            $this->IntranetSubnetIdSet = $param["IntranetSubnetIdSet"];
        }

        if (array_key_exists("IntranetVpcCidr",$param) and $param["IntranetVpcCidr"] !== null) {
            $this->IntranetVpcCidr = $param["IntranetVpcCidr"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
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

        if (array_key_exists("ResourceEdition",$param) and $param["ResourceEdition"] !== null) {
            $this->ResourceEdition = $param["ResourceEdition"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("BillingRegion",$param) and $param["BillingRegion"] !== null) {
            $this->BillingRegion = $param["BillingRegion"];
        }

        if (array_key_exists("BillingZone",$param) and $param["BillingZone"] !== null) {
            $this->BillingZone = $param["BillingZone"];
        }

        if (array_key_exists("DeployCvmCount",$param) and $param["DeployCvmCount"] !== null) {
            $this->DeployCvmCount = $param["DeployCvmCount"];
        }

        if (array_key_exists("ResourceZoneSet",$param) and $param["ResourceZoneSet"] !== null) {
            $this->ResourceZoneSet = [];
            foreach ($param["ResourceZoneSet"] as $key => $value){
                $obj = new ResourceDeployZone();
                $obj->deserialize($value);
                array_push($this->ResourceZoneSet, $obj);
            }
        }
    }
}
