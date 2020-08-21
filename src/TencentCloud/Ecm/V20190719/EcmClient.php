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

namespace TencentCloud\Ecm\V20190719;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ecm\V20190719\Models as Models;

/**
 * @method Models\AllocateAddressesResponse AllocateAddresses(Models\AllocateAddressesRequest $req) 申请一个或多个弹性公网IP（简称 EIP）
 * @method Models\AssignPrivateIpAddressesResponse AssignPrivateIpAddresses(Models\AssignPrivateIpAddressesRequest $req) 弹性网卡申请内网 IP
 * @method Models\AssociateAddressResponse AssociateAddress(Models\AssociateAddressRequest $req) 将弹性公网IP（简称 EIP）绑定到实例或弹性网卡的指定内网 IP 上。
将 EIP 绑定到实例（CVM）上，其本质是将 EIP 绑定到实例上主网卡的主内网 IP 上。
将 EIP 绑定到主网卡的主内网IP上，绑定过程会把其上绑定的普通公网 IP 自动解绑并释放。
将 EIP 绑定到指定网卡的内网 IP上（非主网卡的主内网IP），则必须先解绑该 EIP，才能再绑定新的。
将 EIP 绑定到NAT网关，请使用接口EipBindNatGateway
EIP 如果欠费或被封堵，则不能被绑定。
只有状态为 UNBIND 的 EIP 才能够被绑定。
 * @method Models\AssociateSecurityGroupsResponse AssociateSecurityGroups(Models\AssociateSecurityGroupsRequest $req) 绑定安全组
 * @method Models\AttachNetworkInterfaceResponse AttachNetworkInterface(Models\AttachNetworkInterfaceRequest $req) 弹性网卡绑定云主机
 * @method Models\CreateImageResponse CreateImage(Models\CreateImageRequest $req) 本接口(CreateImage)用于将实例的系统盘制作为新镜像，创建后的镜像可以用于创建实例。
 * @method Models\CreateModuleResponse CreateModule(Models\CreateModuleRequest $req) 创建模块
 * @method Models\CreateNetworkInterfaceResponse CreateNetworkInterface(Models\CreateNetworkInterfaceRequest $req) 创建弹性网卡
 * @method Models\CreateSecurityGroupResponse CreateSecurityGroup(Models\CreateSecurityGroupRequest $req) 创建安全组
 * @method Models\CreateSecurityGroupPoliciesResponse CreateSecurityGroupPolicies(Models\CreateSecurityGroupPoliciesRequest $req) 在 SecurityGroupPolicySet 参数中：

Version 安全组规则版本号，用户每次更新安全规则版本会自动加1，防止您更新的路由规则已过期，不填不考虑冲突。
在创建出站和入站规则（Egress 和 Ingress）时：
Protocol 字段支持输入TCP, UDP, ICMP, ICMPV6, GRE, ALL。
CidrBlock 字段允许输入符合cidr格式标准的任意字符串。(展开)在基础网络中，如果 CidrBlock 包含您的账户内的云服务器之外的设备在腾讯云的内网 IP，并不代表此规则允许您访问这些设备，租户之间网络隔离规则优先于安全组中的内网规则。
Ipv6CidrBlock 字段允许输入符合IPv6 cidr格式标准的任意字符串。(展开)在基础网络中，如果Ipv6CidrBlock 包含您的账户内的云服务器之外的设备在腾讯云的内网 IPv6，并不代表此规则允许您访问这些设备，租户之间网络隔离规则优先于安全组中的内网规则。
SecurityGroupId 字段允许输入与待修改的安全组位于相同项目中的安全组 ID，包括这个安全组 ID 本身，代表安全组下所有云服务器的内网 IP。使用这个字段时，这条规则用来匹配网络报文的过程中会随着被使用的这个 ID 所关联的云服务器变化而变化，不需要重新修改。
Port 字段允许输入一个单独端口号，或者用减号分隔的两个端口号代表端口范围，例如80或8000-8010。只有当 Protocol 字段是 TCP 或 UDP 时，Port 字段才被接受，即 Protocol 字段不是 TCP 或 UDP 时，Protocol 和 Port 排他关系，不允许同时输入，否则会接口报错。
Action 字段只允许输入 ACCEPT 或 DROP。
CidrBlock, Ipv6CidrBlock, SecurityGroupId, AddressTemplate 四者是排他关系，不允许同时输入，Protocol + Port 和 ServiceTemplate 二者是排他关系，不允许同时输入。
一次请求中只能创建单个方向的规则, 如果需要指定索引（PolicyIndex）参数, 多条规则的索引必须一致。
 * @method Models\CreateSubnetResponse CreateSubnet(Models\CreateSubnetRequest $req) 创建子网，若创建成功，则此子网会成为此可用区的默认子网。
 * @method Models\CreateVpcResponse CreateVpc(Models\CreateVpcRequest $req) 创建私有网络
 * @method Models\DeleteImageResponse DeleteImage(Models\DeleteImageRequest $req) 删除镜像
 * @method Models\DeleteModuleResponse DeleteModule(Models\DeleteModuleRequest $req) 删除业务模块
 * @method Models\DeleteNetworkInterfaceResponse DeleteNetworkInterface(Models\DeleteNetworkInterfaceRequest $req) 删除弹性网卡
 * @method Models\DeleteSecurityGroupResponse DeleteSecurityGroup(Models\DeleteSecurityGroupRequest $req) 只有当前账号下的安全组允许被删除。
安全组实例ID如果在其他安全组的规则中被引用，则无法直接删除。这种情况下，需要先进行规则修改，再删除安全组。
删除的安全组无法再找回，请谨慎调用。
 * @method Models\DeleteSecurityGroupPoliciesResponse DeleteSecurityGroupPolicies(Models\DeleteSecurityGroupPoliciesRequest $req) SecurityGroupPolicySet.Version 用于指定要操作的安全组的版本。传入 Version 版本号若不等于当前安全组的最新版本，将返回失败；若不传 Version 则直接删除指定PolicyIndex的规则。
 * @method Models\DeleteSubnetResponse DeleteSubnet(Models\DeleteSubnetRequest $req) 删除子网，若子网为可用区下的默认子网，则默认子网会回退到系统自动创建的默认子网，非用户最新创建的子网。若默认子网不满足需求，可调用设置默认子网接口设置。
 * @method Models\DeleteVpcResponse DeleteVpc(Models\DeleteVpcRequest $req) 删除私有网络
 * @method Models\DescribeAddressQuotaResponse DescribeAddressQuota(Models\DescribeAddressQuotaRequest $req) 查询您账户的弹性公网IP（简称 EIP）在当前地域的配额信息
 * @method Models\DescribeAddressesResponse DescribeAddresses(Models\DescribeAddressesRequest $req) 查询弹性公网IP列表
 * @method Models\DescribeBaseOverviewResponse DescribeBaseOverview(Models\DescribeBaseOverviewRequest $req) 获取概览页统计的基本数据
 * @method Models\DescribeConfigResponse DescribeConfig(Models\DescribeConfigRequest $req) 获取带宽硬盘等数据的限制
 * @method Models\DescribeCustomImageTaskResponse DescribeCustomImageTask(Models\DescribeCustomImageTaskRequest $req) 查询导入镜像任务
 * @method Models\DescribeDefaultSubnetResponse DescribeDefaultSubnet(Models\DescribeDefaultSubnetRequest $req) 查询可用区的默认子网
 * @method Models\DescribeImageResponse DescribeImage(Models\DescribeImageRequest $req) 展示镜像列表
 * @method Models\DescribeImportImageOsResponse DescribeImportImageOs(Models\DescribeImportImageOsRequest $req) 查询外部导入镜像支持的OS列表
 * @method Models\DescribeInstanceTypeConfigResponse DescribeInstanceTypeConfig(Models\DescribeInstanceTypeConfigRequest $req) 获取机型配置列表
 * @method Models\DescribeInstanceVncUrlResponse DescribeInstanceVncUrl(Models\DescribeInstanceVncUrlRequest $req) 查询实例管理终端地址
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) 获取实例的相关信息。
 * @method Models\DescribeInstancesDeniedActionsResponse DescribeInstancesDeniedActions(Models\DescribeInstancesDeniedActionsRequest $req) 通过实例id获取当前禁止的操作
 * @method Models\DescribeModuleResponse DescribeModule(Models\DescribeModuleRequest $req) 获取模块列表
 * @method Models\DescribeModuleDetailResponse DescribeModuleDetail(Models\DescribeModuleDetailRequest $req) 展示模块详细信息
 * @method Models\DescribeNetworkInterfacesResponse DescribeNetworkInterfaces(Models\DescribeNetworkInterfacesRequest $req) 查询弹性网卡列表
 * @method Models\DescribeNodeResponse DescribeNode(Models\DescribeNodeRequest $req) 获取节点列表
 * @method Models\DescribePeakBaseOverviewResponse DescribePeakBaseOverview(Models\DescribePeakBaseOverviewRequest $req) CPU 内存 硬盘等基础信息峰值数据
 * @method Models\DescribePeakNetworkOverviewResponse DescribePeakNetworkOverview(Models\DescribePeakNetworkOverviewRequest $req) 获取网络峰值数据
 * @method Models\DescribeSecurityGroupAssociationStatisticsResponse DescribeSecurityGroupAssociationStatistics(Models\DescribeSecurityGroupAssociationStatisticsRequest $req) 查询安全组关联实例统计
 * @method Models\DescribeSecurityGroupLimitsResponse DescribeSecurityGroupLimits(Models\DescribeSecurityGroupLimitsRequest $req) 查询用户安全组配额
 * @method Models\DescribeSecurityGroupPoliciesResponse DescribeSecurityGroupPolicies(Models\DescribeSecurityGroupPoliciesRequest $req) 查询安全组规则
 * @method Models\DescribeSecurityGroupsResponse DescribeSecurityGroups(Models\DescribeSecurityGroupsRequest $req) 查看安全组
 * @method Models\DescribeSubnetsResponse DescribeSubnets(Models\DescribeSubnetsRequest $req) 查询子网列表
 * @method Models\DescribeTaskResultResponse DescribeTaskResult(Models\DescribeTaskResultRequest $req) 查询EIP异步任务执行结果
 * @method Models\DescribeTaskStatusResponse DescribeTaskStatus(Models\DescribeTaskStatusRequest $req) 本接口(DescribeTaskStatus)用于获取异步任务状态
 * @method Models\DescribeVpcsResponse DescribeVpcs(Models\DescribeVpcsRequest $req) 查询私有网络列表
 * @method Models\DetachNetworkInterfaceResponse DetachNetworkInterface(Models\DetachNetworkInterfaceRequest $req) 弹性网卡解绑云主机
 * @method Models\DisassociateAddressResponse DisassociateAddress(Models\DisassociateAddressRequest $req) 解绑弹性公网IP（简称 EIP）
只有状态为 BIND 和 BIND_ENI 的 EIP 才能进行解绑定操作。
EIP 如果被封堵，则不能进行解绑定操作。
 * @method Models\DisassociateSecurityGroupsResponse DisassociateSecurityGroups(Models\DisassociateSecurityGroupsRequest $req) 解绑安全组
 * @method Models\ImportCustomImageResponse ImportCustomImage(Models\ImportCustomImageRequest $req) 导入自定义镜像，支持 RAW、VHD、QCOW2、VMDK 镜像格式
 * @method Models\ImportImageResponse ImportImage(Models\ImportImageRequest $req) 从CVM产品导入镜像到ECM
 * @method Models\MigrateNetworkInterfaceResponse MigrateNetworkInterface(Models\MigrateNetworkInterfaceRequest $req) 弹性网卡迁移
 * @method Models\MigratePrivateIpAddressResponse MigratePrivateIpAddress(Models\MigratePrivateIpAddressRequest $req) 弹性网卡内网IP迁移。
该接口用于将一个内网IP从一个弹性网卡上迁移到另外一个弹性网卡，主IP地址不支持迁移。
迁移前后的弹性网卡必须在同一个子网内。
 * @method Models\ModifyAddressAttributeResponse ModifyAddressAttribute(Models\ModifyAddressAttributeRequest $req) 修改弹性公网IP属性
 * @method Models\ModifyAddressesBandwidthResponse ModifyAddressesBandwidth(Models\ModifyAddressesBandwidthRequest $req) 调整弹性公网IP带宽

 * @method Models\ModifyDefaultSubnetResponse ModifyDefaultSubnet(Models\ModifyDefaultSubnetRequest $req) 修改在一个可用区下创建实例时使用的默认子网（创建实例时，未填写VPC参数时使用的sunbetId）
 * @method Models\ModifyImageAttributeResponse ModifyImageAttribute(Models\ModifyImageAttributeRequest $req) 本接口（ModifyImageAttribute）用于修改镜像属性。
 * @method Models\ModifyInstancesAttributeResponse ModifyInstancesAttribute(Models\ModifyInstancesAttributeRequest $req) 修改实例的属性。
 * @method Models\ModifyModuleConfigResponse ModifyModuleConfig(Models\ModifyModuleConfigRequest $req) 修改模块配置，已关联实例的模块不支持调整配置。
 * @method Models\ModifyModuleImageResponse ModifyModuleImage(Models\ModifyModuleImageRequest $req) 修改模块的默认镜像
 * @method Models\ModifyModuleIpDirectResponse ModifyModuleIpDirect(Models\ModifyModuleIpDirectRequest $req) 修改模块IP直通。
 * @method Models\ModifyModuleNameResponse ModifyModuleName(Models\ModifyModuleNameRequest $req) 修改模块名称
 * @method Models\ModifyModuleNetworkResponse ModifyModuleNetwork(Models\ModifyModuleNetworkRequest $req) 修改模块默认带宽上限
 * @method Models\ModifyModuleSecurityGroupsResponse ModifyModuleSecurityGroups(Models\ModifyModuleSecurityGroupsRequest $req) 修改模块默认安全组
 * @method Models\ModifySecurityGroupAttributeResponse ModifySecurityGroupAttribute(Models\ModifySecurityGroupAttributeRequest $req) 修改安全组属性
 * @method Models\ModifySecurityGroupPoliciesResponse ModifySecurityGroupPolicies(Models\ModifySecurityGroupPoliciesRequest $req) 修改安全组出站和入站规则
 * @method Models\ModifySubnetAttributeResponse ModifySubnetAttribute(Models\ModifySubnetAttributeRequest $req) 修改子网属性
 * @method Models\ModifyVpcAttributeResponse ModifyVpcAttribute(Models\ModifyVpcAttributeRequest $req) 修改私有网络（VPC）的相关属性
 * @method Models\RebootInstancesResponse RebootInstances(Models\RebootInstancesRequest $req) 只有状态为RUNNING的实例才可以进行此操作；接口调用成功时，实例会进入REBOOTING状态；重启实例成功时，实例会进入RUNNING状态；支持强制重启，强制重启的效果等同于关闭物理计算机的电源开关再重新启动。强制重启可能会导致数据丢失或文件系统损坏，请仅在服务器不能正常重启时使用。
 * @method Models\ReleaseAddressesResponse ReleaseAddresses(Models\ReleaseAddressesRequest $req) 释放一个或多个弹性公网IP（简称 EIP）。
该操作不可逆，释放后 EIP 关联的 IP 地址将不再属于您的名下。
只有状态为 UNBIND 的 EIP 才能进行释放操作。
 * @method Models\RemovePrivateIpAddressesResponse RemovePrivateIpAddresses(Models\RemovePrivateIpAddressesRequest $req) 弹性网卡退还内网 IP。
退还弹性网卡上的辅助内网IP，接口自动解关联弹性公网 IP。不能退还弹性网卡的主内网IP。
 * @method Models\ReplaceSecurityGroupPolicyResponse ReplaceSecurityGroupPolicy(Models\ReplaceSecurityGroupPolicyRequest $req) 替换单条安全组路由规则, 单个请求中只能替换单个方向的一条规则, 必须要指定索引（PolicyIndex）。
 * @method Models\ResetInstancesResponse ResetInstances(Models\ResetInstancesRequest $req) 重装实例，若指定了ImageId参数，则使用指定的镜像重装；否则按照当前实例使用的镜像进行重装；若未指定密码，则密码通过站内信形式随后发送。
 * @method Models\ResetInstancesMaxBandwidthResponse ResetInstancesMaxBandwidth(Models\ResetInstancesMaxBandwidthRequest $req) 重置实例的最大带宽上限。
 * @method Models\ResetInstancesPasswordResponse ResetInstancesPassword(Models\ResetInstancesPasswordRequest $req) 重置处于运行中状态的实例的密码，需要显式指定强制关机参数ForceStop。如果没有显式指定强制关机参数，则只有处于关机状态的实例才允许执行重置密码操作。
 * @method Models\RunInstancesResponse RunInstances(Models\RunInstancesRequest $req) 创建ECM实例
 * @method Models\StartInstancesResponse StartInstances(Models\StartInstancesRequest $req) 只有状态为STOPPED的实例才可以进行此操作；接口调用成功时，实例会进入STARTING状态；启动实例成功时，实例会进入RUNNING状态。
 * @method Models\StopInstancesResponse StopInstances(Models\StopInstancesRequest $req) 只有处于"RUNNING"状态的实例才能够进行关机操作；
调用成功时，实例会进入STOPPING状态；关闭实例成功时，实例会进入STOPPED状态；
支持强制关闭，强制关机的效果等同于关闭物理计算机的电源开关，强制关机可能会导致数据丢失或文件系统损坏，请仅在服务器不能正常关机时使用。
 * @method Models\TerminateInstancesResponse TerminateInstances(Models\TerminateInstancesRequest $req) 销毁实例
 */

class EcmClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ecm.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $version = "2019-07-19";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("ecm")."\\"."V20190719\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
