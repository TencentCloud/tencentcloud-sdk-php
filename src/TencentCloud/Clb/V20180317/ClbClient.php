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

namespace TencentCloud\Clb\V20180317;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Clb\V20180317\Models as Models;

/**
 * @method Models\AddCustomizedConfigResponse AddCustomizedConfig(Models\AddCustomizedConfigRequest $req) 新增个性化配置，准备下线，请使用SetCustomizedConfigForLoadBalancer。
 * @method Models\AssociateCustomizedConfigResponse AssociateCustomizedConfig(Models\AssociateCustomizedConfigRequest $req) 关联配置到server或location，根据配置类型关联到server或location。准备下线，请使用SetCustomizedConfigForLoadBalancer。
 * @method Models\AssociateTargetGroupsResponse AssociateTargetGroups(Models\AssociateTargetGroupsRequest $req) 本接口(AssociateTargetGroups)用来将目标组绑定到负载均衡的监听器（四层协议）或转发规则（七层协议）上。
本接口为异步接口，本接口返回成功后需以返回的 RequestID 为入参，调用  [DescribeTaskStatus](https://cloud.tencent.com/document/product/214/30683)  接口查询本次任务是否成功。
限制说明：
- 四层监听器绑定旧版目标组需要监听器开启后端目标组。
- 七层绑定目标组，数据结构 TargetGroupAssociation 中 LocationId 为必填项。
- 负载均衡的 VPC 需要和目标组的 VPC 一致。
 * @method Models\AutoRewriteResponse AutoRewrite(Models\AutoRewriteRequest $req) 用户需要先创建出一个HTTPS:443监听器，并在其下创建转发规则。通过调用本接口，系统会自动创建出一个HTTP:80监听器（如果之前不存在），并在其下创建转发规则，与HTTPS:443监听器下的Domains（在入参中指定）对应。创建成功后可以通过HTTP:80地址自动跳转为HTTPS:443地址进行访问。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用DescribeTaskStatus接口查询本次任务是否成功。
 * @method Models\BatchDeregisterTargetsResponse BatchDeregisterTargets(Models\BatchDeregisterTargetsRequest $req) 批量解绑四七层后端服务。批量解绑的资源数量上限为500。只支持VPC网络负载均衡。
 * @method Models\BatchModifyTargetTagResponse BatchModifyTargetTag(Models\BatchModifyTargetTagRequest $req) BatchModifyTargetTag 接口用于批量修改负载均衡监听器绑定的后端机器的标签。批量修改的资源数量上限为500。本接口为同步接口。<br/>负载均衡的4层和7层监听器支持此接口，传统型负载均衡不支持。
 * @method Models\BatchModifyTargetWeightResponse BatchModifyTargetWeight(Models\BatchModifyTargetWeightRequest $req) BatchModifyTargetWeight 接口用于批量修改负载均衡监听器绑定的后端机器的转发权重。批量修改的资源数量上限为500。本接口为异步接口，本接口返回成功后需以返回的 RequestID 为入参，调用 DescribeTaskStatus 接口查询本次任务是否成功。<br/>负载均衡的4层和7层监听器支持此接口，传统型负载均衡不支持。
 * @method Models\BatchRegisterTargetsResponse BatchRegisterTargets(Models\BatchRegisterTargetsRequest $req) 批量绑定虚拟主机或弹性网卡，支持跨域绑定，支持四层、七层（TCP、UDP、HTTP、HTTPS）协议绑定。批量绑定的资源数量上限为500。只支持VPC网络负载均衡。
 * @method Models\CloneLoadBalancerResponse CloneLoadBalancer(Models\CloneLoadBalancerRequest $req) 克隆负载均衡实例，根据指定的负载均衡实例，复制出相同规则和绑定关系的负载均衡实例。克隆接口为异步操作，克隆的数据以调用CloneLoadBalancer时为准，如果调用CloneLoadBalancer后克隆CLB发生变化，变化规则不会克隆。

注：查询实例创建状态可以根据返回值中的requestId访问[DescribeTaskStatus](https://cloud.tencent.com/document/product/214/30683)接口

限制说明
实例属性维度限制：
- 支持克隆实例计费模式为按量计费与包年包月的实例，包年包月实例克隆后的新实例网络计费模式会转换为按小时带宽计费，其带宽、规格与原实例设置保持一致。
- 不支持克隆未关联实例计费项的 CLB（历史免费活动创建）。
- 不支持克隆传统型负载均衡实例和高防 CLB。
- 不支持克隆基础网络类型的实例。
- 不支持克隆 Anycast 类型的实例。
- 不支持克隆 IPv6 NAT64 版本的实例。
- 不支持克隆被封禁或冻结的实例。
- 执行克隆操作前，请确保实例上没有使用已过期证书，否则会导致克隆失败。
配额维度限制：
- 当实例的监听器个数超过 50 个时，不支持克隆。
- 当共享型实例的公网带宽上限超过 2G 时，不支持克隆。

通过接口调用：
BGP带宽包必须传带宽包id
独占集群克隆必须传对应的参数，否则按共享型创建
 * @method Models\CreateClsLogSetResponse CreateClsLogSet(Models\CreateClsLogSetRequest $req) 创建CLB专有日志集，此日志集用于存储CLB的日志。
 * @method Models\CreateListenerResponse CreateListener(Models\CreateListenerRequest $req) 在一个负载均衡实例下创建监听器。
本接口为异步接口，接口返回成功后，需以返回的 RequestId 为入参，调用 [DescribeTaskStatus](https://cloud.tencent.com/document/product/214/30683) 接口查询本次任务是否成功。
 * @method Models\CreateLoadBalancerResponse CreateLoadBalancer(Models\CreateLoadBalancerRequest $req) 本接口(CreateLoadBalancer)用来创建负载均衡实例。为了使用负载均衡服务，您必须购买一个或多个负载均衡实例。成功调用该接口后，会返回负载均衡实例的唯一 ID。负载均衡实例的类型分为：公网、内网。详情可参考产品说明中的产品类型。
注意：(1)可通过 [DescribeResources](https://cloud.tencent.com/document/api/214/70213) 接口查询一个地域是否支持创建IPv6实例；(2)一个账号在每个地域的默认购买配额为：公网100个，内网100个。
本接口为异步接口，接口成功返回后，可使用 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459) 接口查询负载均衡实例的状态（如创建中、正常），以确定是否创建成功。
 * @method Models\CreateLoadBalancerSnatIpsResponse CreateLoadBalancerSnatIps(Models\CreateLoadBalancerSnatIpsRequest $req) 针对SnatPro负载均衡，这个接口用于添加SnatIp，如果负载均衡没有开启SnatPro，添加SnatIp后会自动开启。
本接口为异步接口，接口返回成功后，需以得到的 RequestID 为入参，调用  [DescribeTaskStatus](https://cloud.tencent.com/document/product/214/30683)  接口查询本次任务是否成功。
 * @method Models\CreateRuleResponse CreateRule(Models\CreateRuleRequest $req) CreateRule 接口用于在一个已存在的负载均衡七层监听器下创建转发规则，七层监听器中，后端服务必须绑定到规则上而非监听器上。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用 [DescribeTaskStatus](https://cloud.tencent.com/document/product/214/30683) 接口查询本次任务是否成功。
 * @method Models\CreateTargetGroupResponse CreateTargetGroup(Models\CreateTargetGroupRequest $req) 创建目标组。该功能正在内测中，如需使用，请通过[工单申请](https://console.cloud.tencent.com/workorder/category?level1_id=6&level2_id=163&source=0&data_title=%E8%B4%9F%E8%BD%BD%E5%9D%87%E8%A1%A1%20LB&step=1)。
 * @method Models\CreateTopicResponse CreateTopic(Models\CreateTopicRequest $req) 创建主题，默认开启全文索引和键值索引。如果不存在CLB专有日志集，则创建失败。
 * @method Models\DeleteCustomizedConfigResponse DeleteCustomizedConfig(Models\DeleteCustomizedConfigRequest $req) 删除个性化配置，准备下线，请使用SetCustomizedConfigForLoadBalancer。
 * @method Models\DeleteListenerResponse DeleteListener(Models\DeleteListenerRequest $req) 本接口用来删除负载均衡实例下的监听器（四层和七层）。
本接口为异步接口，接口返回成功后，需以得到的 RequestID 为入参，调用  [DescribeTaskStatus](https://cloud.tencent.com/document/product/214/30683)  接口查询本次任务是否成功。
 * @method Models\DeleteLoadBalancerResponse DeleteLoadBalancer(Models\DeleteLoadBalancerRequest $req) DeleteLoadBalancer 接口用以删除指定的一个或多个负载均衡实例。成功删除后，会把负载均衡实例下的监听器、转发规则一起删除，并把后端服务解绑。
本接口为异步接口，接口返回成功后，需以返回的 RequestId 为入参，调用 [DescribeTaskStatus](https://cloud.tencent.com/document/product/214/30683) 接口查询本次任务是否成功。
 * @method Models\DeleteLoadBalancerListenersResponse DeleteLoadBalancerListeners(Models\DeleteLoadBalancerListenersRequest $req) 该接口支持删除负载均衡的多个监听器。
本接口为异步接口，本接口返回成功后需以返回的 RequestID 为入参，调用  [DescribeTaskStatus](https://cloud.tencent.com/document/product/214/30683)  接口查询本次任务是否成功。
 * @method Models\DeleteLoadBalancerSnatIpsResponse DeleteLoadBalancerSnatIps(Models\DeleteLoadBalancerSnatIpsRequest $req) 这个接口用于删除SnatPro的负载均衡的SnatIp。
本接口为异步接口，接口返回成功后，需以得到的 RequestID 为入参，调用  [DescribeTaskStatus](https://cloud.tencent.com/document/product/214/30683)  接口查询本次任务是否成功。
 * @method Models\DeleteRewriteResponse DeleteRewrite(Models\DeleteRewriteRequest $req) DeleteRewrite 接口支持删除指定转发规则之间的重定向关系。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用DescribeTaskStatus接口查询本次任务是否成功。
 * @method Models\DeleteRuleResponse DeleteRule(Models\DeleteRuleRequest $req) DeleteRule 接口用来删除负载均衡实例七层监听器下的转发规则。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用  [DescribeTaskStatus](https://cloud.tencent.com/document/product/214/30683)  接口查询本次任务是否成功。
 * @method Models\DeleteTargetGroupsResponse DeleteTargetGroups(Models\DeleteTargetGroupsRequest $req) 删除目标组，支持批量删除目标组，单次最多批量删除 20 个目标组。
 * @method Models\DeregisterFunctionTargetsResponse DeregisterFunctionTargets(Models\DeregisterFunctionTargetsRequest $req) DeregisterFunctionTargets 接口用来将一个云函数从负载均衡的转发规则上解绑，对于七层监听器，还需通过 LocationId 或 Domain+Url 指定转发规则。
本接口为异步接口，本接口返回成功后需以返回的 RequestID 为入参，调用 [DescribeTaskStatus](https://cloud.tencent.com/document/product/214/30683) 接口查询本次任务是否成功。
<br/>限制说明：

- 仅广州、深圳金融、上海、上海金融、北京、成都、中国香港、新加坡、东京、硅谷地域支持绑定 SCF。
- 仅标准账户类型支持绑定 SCF，传统账户类型不支持。建议升级为标准账户类型，详情可参见 [账户类型升级说明](https://cloud.tencent.com/document/product/1199/49090)。
- 传统型负载均衡不支持绑定 SCF。
- 基础网络类型不支持绑定 SCF。
- CLB 默认支持绑定同地域下的所有 SCF，可支持跨 VPC 绑定 SCF，不支持跨地域绑定。
- 目前仅 IPv4、IPv6 NAT64 版本的负载均衡支持绑定 SCF，IPv6 版本的暂不支持。
- 仅七层（HTTP、HTTPS）监听器支持绑定 SCF，四层（TCP、UDP、TCP SSL）监听器和七层 QUIC 监听器不支持。
- CLB 绑定 SCF 仅支持绑定“Event 函数”类型的云函数。
 * @method Models\DeregisterTargetGroupInstancesResponse DeregisterTargetGroupInstances(Models\DeregisterTargetGroupInstancesRequest $req) 从目标组中解绑服务器。
本接口为异步接口，本接口返回成功后需以返回的 RequestID 为入参，调用  [DescribeTaskStatus](https://cloud.tencent.com/document/product/214/30683)  接口查询本次任务是否成功。
 * @method Models\DeregisterTargetsResponse DeregisterTargets(Models\DeregisterTargetsRequest $req) DeregisterTargets 接口用来将一台或多台后端服务从负载均衡的监听器或转发规则上解绑，对于四层监听器，只需指定监听器ID即可，对于七层监听器，还需通过LocationId或Domain+Url指定转发规则。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用DescribeTaskStatus接口查询本次任务是否成功。
 * @method Models\DeregisterTargetsFromClassicalLBResponse DeregisterTargetsFromClassicalLB(Models\DeregisterTargetsFromClassicalLBRequest $req) DeregisterTargetsFromClassicalLB 接口用于解绑负载均衡后端服务。本接口为异步接口，接口返回成功后，需以返回的 RequestId 为入参，调用 DescribeTaskStatus 接口查询本次任务是否成功。
 * @method Models\DescribeBlockIPListResponse DescribeBlockIPList(Models\DescribeBlockIPListRequest $req) 查询一个负载均衡所封禁的IP列表（黑名单）。（接口灰度中，如需使用请提工单）
 * @method Models\DescribeBlockIPTaskResponse DescribeBlockIPTask(Models\DescribeBlockIPTaskRequest $req) 根据 ModifyBlockIPList 接口返回的异步任务的ID，查询封禁IP（黑名单）异步任务的执行状态。（接口灰度中，如需使用请提工单）
 * @method Models\DescribeClassicalLBByInstanceIdResponse DescribeClassicalLBByInstanceId(Models\DescribeClassicalLBByInstanceIdRequest $req) DescribeClassicalLBByInstanceId用于通过后端实例ID获取传统型负载均衡ID列表。
 * @method Models\DescribeClassicalLBHealthStatusResponse DescribeClassicalLBHealthStatus(Models\DescribeClassicalLBHealthStatusRequest $req) DescribeClassicalLBHealthStatus用于获取传统型负载均衡后端的健康状态
 * @method Models\DescribeClassicalLBListenersResponse DescribeClassicalLBListeners(Models\DescribeClassicalLBListenersRequest $req) DescribeClassicalLBListeners 接口用于获取传统型负载均衡的监听器信息。
 * @method Models\DescribeClassicalLBTargetsResponse DescribeClassicalLBTargets(Models\DescribeClassicalLBTargetsRequest $req) DescribeClassicalLBTargets用于获取传统型负载均衡绑定的后端服务。
 * @method Models\DescribeClsLogSetResponse DescribeClsLogSet(Models\DescribeClsLogSetRequest $req) 获取用户的CLB专有日志集。
 * @method Models\DescribeClusterResourcesResponse DescribeClusterResources(Models\DescribeClusterResourcesRequest $req) 查询独占集群中的资源列表，支持按集群ID、VIP、负载均衡ID、是否闲置为过滤条件检索。
 * @method Models\DescribeCrossTargetsResponse DescribeCrossTargets(Models\DescribeCrossTargetsRequest $req) 查询跨域2.0版本云联网后端子机和网卡信息。
 * @method Models\DescribeCustomizedConfigAssociateListResponse DescribeCustomizedConfigAssociateList(Models\DescribeCustomizedConfigAssociateListRequest $req) 拉取配置绑定的 server 或 location，如果 domain 存在，结果将根据 domain 过滤。或拉取配置绑定的 loadbalancer。
 * @method Models\DescribeCustomizedConfigListResponse DescribeCustomizedConfigList(Models\DescribeCustomizedConfigListRequest $req) 拉取个性化配置列表，返回用户 AppId 下指定类型的配置。
 * @method Models\DescribeExclusiveClustersResponse DescribeExclusiveClusters(Models\DescribeExclusiveClustersRequest $req) 查询集群信息列表，支持以集群类型、集群唯一ID、集群名字、集群标签、集群内vip、集群内负载均衡唯一id、集群网络类型、可用区等条件进行检索
 * @method Models\DescribeIdleLoadBalancersResponse DescribeIdleLoadBalancers(Models\DescribeIdleLoadBalancersRequest $req) 闲置实例是指创建超过7天后付费实例，且没有创建规则或创建规则没有绑定子机的负载均衡实例。
 * @method Models\DescribeLBListenersResponse DescribeLBListeners(Models\DescribeLBListenersRequest $req) 查询后端云主机或弹性网卡绑定的负载均衡，支持弹性网卡和cvm查询。
 * @method Models\DescribeLBOperateProtectResponse DescribeLBOperateProtect(Models\DescribeLBOperateProtectRequest $req) 查询负载均衡的操作保护信息。
 * @method Models\DescribeListenersResponse DescribeListeners(Models\DescribeListenersRequest $req) DescribeListeners 接口可根据负载均衡器 ID、监听器的协议或端口作为过滤条件获取监听器列表。如果不指定任何过滤条件，则返回该负载均衡实例下的所有监听器。
 * @method Models\DescribeLoadBalancerListByCertIdResponse DescribeLoadBalancerListByCertId(Models\DescribeLoadBalancerListByCertIdRequest $req) 根据证书ID查询其在一个地域中所关联到负载均衡实例列表
 * @method Models\DescribeLoadBalancerOverviewResponse DescribeLoadBalancerOverview(Models\DescribeLoadBalancerOverviewRequest $req) 查询运行中、隔离中、即将到期和负载均衡总数。
 * @method Models\DescribeLoadBalancerTrafficResponse DescribeLoadBalancerTraffic(Models\DescribeLoadBalancerTrafficRequest $req) 查询账号下的高流量负载均衡，返回前10个负载均衡。如果是子账号登录，只返回子账号有权限的负载均衡。
 * @method Models\DescribeLoadBalancersResponse DescribeLoadBalancers(Models\DescribeLoadBalancersRequest $req) 查询一个地域的负载均衡实例列表。
 * @method Models\DescribeLoadBalancersDetailResponse DescribeLoadBalancersDetail(Models\DescribeLoadBalancersDetailRequest $req) 查询负载均衡的详细信息，包括监听器，规则及后端目标。
 * @method Models\DescribeQuotaResponse DescribeQuota(Models\DescribeQuotaRequest $req) 查询用户当前地域下的各项配额
 * @method Models\DescribeResourcesResponse DescribeResources(Models\DescribeResourcesRequest $req) 查询用户在当前地域支持可用区列表和资源列表。
 * @method Models\DescribeRewriteResponse DescribeRewrite(Models\DescribeRewriteRequest $req) DescribeRewrite 接口可根据负载均衡实例ID，查询一个负载均衡实例下转发规则的重定向关系。如果不指定监听器ID或转发规则ID，则返回该负载均衡实例下的所有重定向关系。
 * @method Models\DescribeTargetGroupInstancesResponse DescribeTargetGroupInstances(Models\DescribeTargetGroupInstancesRequest $req) 获取目标组绑定的服务器信息
 * @method Models\DescribeTargetGroupListResponse DescribeTargetGroupList(Models\DescribeTargetGroupListRequest $req) 获取目标组列表
 * @method Models\DescribeTargetGroupsResponse DescribeTargetGroups(Models\DescribeTargetGroupsRequest $req) 查询目标组信息
 * @method Models\DescribeTargetHealthResponse DescribeTargetHealth(Models\DescribeTargetHealthRequest $req) DescribeTargetHealth 接口用来获取负载均衡后端服务的健康检查结果，不支持传统型负载均衡。
 * @method Models\DescribeTargetsResponse DescribeTargets(Models\DescribeTargetsRequest $req) DescribeTargets 接口用来查询负载均衡实例的某些监听器绑定的后端服务列表。
 * @method Models\DescribeTaskStatusResponse DescribeTaskStatus(Models\DescribeTaskStatusRequest $req) 本接口用于查询异步任务的执行状态，对于非查询类的接口（创建/删除负载均衡实例、监听器、规则以及绑定或解绑后端服务等），在接口调用成功后，都需要使用本接口查询任务最终是否执行成功。
 * @method Models\DisassociateCustomizedConfigResponse DisassociateCustomizedConfig(Models\DisassociateCustomizedConfigRequest $req) 去关联个性化配置，准备下线，请使用SetCustomizedConfigForLoadBalancer。
 * @method Models\DisassociateTargetGroupsResponse DisassociateTargetGroups(Models\DisassociateTargetGroupsRequest $req) 解除规则的目标组关联关系。
本接口为异步接口，本接口返回成功后需以返回的 RequestID 为入参，调用 DescribeTaskStatus 接口查询本次任务是否成功。
当解绑七层转发规则时，LocationId 为必填项。
 * @method Models\InquiryPriceCreateLoadBalancerResponse InquiryPriceCreateLoadBalancer(Models\InquiryPriceCreateLoadBalancerRequest $req) InquiryPriceCreateLoadBalancer接口查询创建负载均衡的价格。
 * @method Models\InquiryPriceModifyLoadBalancerResponse InquiryPriceModifyLoadBalancer(Models\InquiryPriceModifyLoadBalancerRequest $req) InquiryPriceModifyLoadBalancer接口修改负载均衡配置询价。
 * @method Models\InquiryPriceRefundLoadBalancerResponse InquiryPriceRefundLoadBalancer(Models\InquiryPriceRefundLoadBalancerRequest $req) InquiryPriceRefundLoadBalancer接口查询负载均衡退费价格，只支持预付费类型的负载均衡实例。
 * @method Models\InquiryPriceRenewLoadBalancerResponse InquiryPriceRenewLoadBalancer(Models\InquiryPriceRenewLoadBalancerRequest $req) InquiryPriceRenewLoadBalancer接口查询对负载均衡续费的价格，只支持预付费负载均衡续费。
 * @method Models\ManualRewriteResponse ManualRewrite(Models\ManualRewriteRequest $req) 用户手动配置原访问地址和重定向地址，系统自动将原访问地址的请求重定向至对应路径的目的地址。同一域名下可以配置多条路径作为重定向策略，实现http/https之间请求的自动跳转。设置重定向时，需满足如下约束条件：若A已经重定向至B，则A不能再重定向至C（除非先删除老的重定向关系，再建立新的重定向关系），B不能重定向至任何其它地址。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用DescribeTaskStatus接口查询本次任务是否成功。
 * @method Models\MigrateClassicalLoadBalancersResponse MigrateClassicalLoadBalancers(Models\MigrateClassicalLoadBalancersRequest $req) 本接口将传统型负载均衡迁移成(原应用型)负载均衡
本接口为异步接口，接口成功返回后，可使用 DescribeLoadBalancers 接口查询负载均衡实例的状态（如创建中、正常），以确定是否创建成功。
 * @method Models\ModifyBlockIPListResponse ModifyBlockIPList(Models\ModifyBlockIPListRequest $req) 修改负载均衡的IP（client IP）封禁黑名单列表，一个转发规则最多支持封禁 2000000 个IP，及黑名单容量为 2000000。
（接口灰度中，如需使用请提工单）
 * @method Models\ModifyCustomizedConfigResponse ModifyCustomizedConfig(Models\ModifyCustomizedConfigRequest $req) 修改个性化配置。如果配置已经绑定clb、server或location，同时更新。准备下线，请使用SetCustomizedConfigForLoadBalancer。
 * @method Models\ModifyDomainResponse ModifyDomain(Models\ModifyDomainRequest $req) ModifyDomain接口用来修改负载均衡七层监听器下的域名。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用 [DescribeTaskStatus](https://cloud.tencent.com/document/product/214/30683) 接口查询本次任务是否成功。
 * @method Models\ModifyDomainAttributesResponse ModifyDomainAttributes(Models\ModifyDomainAttributesRequest $req) ModifyDomainAttributes接口用于修改负载均衡7层监听器转发规则的域名级别属性，如修改域名、修改DefaultServer、开启/关闭Http2、修改证书
本接口为异步接口，本接口返回成功后，需以返回的RequestId为入参，调用 [DescribeTaskStatus](https://cloud.tencent.com/document/product/214/30683) 接口查询本次任务是否成功。
 * @method Models\ModifyFunctionTargetsResponse ModifyFunctionTargets(Models\ModifyFunctionTargetsRequest $req) 修改负载均衡转发规则上所绑定的云函数。
限制说明：
- 仅支持绑定“Event 函数”类型的云函数。
 * @method Models\ModifyListenerResponse ModifyListener(Models\ModifyListenerRequest $req) ModifyListener接口用来修改负载均衡监听器的属性，包括监听器名称、健康检查参数、证书信息、转发策略等。本接口不支持传统型负载均衡。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用 [DescribeTaskStatus](https://cloud.tencent.com/document/product/214/30683) 接口查询本次任务是否成功。
 * @method Models\ModifyLoadBalancerAttributesResponse ModifyLoadBalancerAttributes(Models\ModifyLoadBalancerAttributesRequest $req) 修改负载均衡实例的属性。支持修改负载均衡实例的名称、设置负载均衡的跨域属性。
注意：非带宽上移用户的 CLB 实例必须加入带宽包才可以设置跨域属性。修改网络计费模式请到控制台操作。
本接口为异步接口，接口返回成功后，需以得到的 RequestID 为入参，调用 [DescribeTaskStatus](https://cloud.tencent.com/document/product/214/30683) 接口查询本次任务是否成功。
 * @method Models\ModifyLoadBalancerMixIpTargetResponse ModifyLoadBalancerMixIpTarget(Models\ModifyLoadBalancerMixIpTargetRequest $req) 修改IPv6FullChain负载均衡7层监听器支持混绑IPv4/IPv6目标特性。
 * @method Models\ModifyLoadBalancerSlaResponse ModifyLoadBalancerSla(Models\ModifyLoadBalancerSlaRequest $req) 本接口（ModifyLoadBalancerSla）用于调整按量计费模式实例的性能容量型规格，如共享型升级性能容量型，性能容量型实例规格调整。<br/>
限制条件：
- 本接口只支持调整按量计费的CLB实例，包年包月的CLB实例升级请通过控制台进行调整。
- 共享型升级为性能容量型实例后，不支持再回退到共享型实例。
- 传统型负载均衡实例不支持升级为性能容量型实例。
 * @method Models\ModifyLoadBalancersProjectResponse ModifyLoadBalancersProject(Models\ModifyLoadBalancersProjectRequest $req) 修改一个或多个负载均衡实例所属项目。
 * @method Models\ModifyRuleResponse ModifyRule(Models\ModifyRuleRequest $req) ModifyRule 接口用来修改负载均衡七层监听器下的转发规则的各项属性，包括转发路径、健康检查属性、转发策略等。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用 [DescribeTaskStatus](https://cloud.tencent.com/document/product/214/30683) 接口查询本次任务是否成功。
 * @method Models\ModifyTargetGroupAttributeResponse ModifyTargetGroupAttribute(Models\ModifyTargetGroupAttributeRequest $req) 修改目标组的名称或者默认端口属性
 * @method Models\ModifyTargetGroupInstancesPortResponse ModifyTargetGroupInstancesPort(Models\ModifyTargetGroupInstancesPortRequest $req) 批量修改目标组服务器端口。
本接口为异步接口，本接口返回成功后需以返回的 RequestID 为入参，调用 DescribeTaskStatus 接口查询本次任务是否成功。
 * @method Models\ModifyTargetGroupInstancesWeightResponse ModifyTargetGroupInstancesWeight(Models\ModifyTargetGroupInstancesWeightRequest $req) 批量修改目标组的服务器权重。
本接口为异步接口，本接口返回成功后需以返回的 RequestID 为入参，调用 DescribeTaskStatus 接口查询本次任务是否成功。
 * @method Models\ModifyTargetPortResponse ModifyTargetPort(Models\ModifyTargetPortRequest $req) ModifyTargetPort接口用于修改监听器绑定的后端服务的端口。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用DescribeTaskStatus接口查询本次任务是否成功。
 * @method Models\ModifyTargetWeightResponse ModifyTargetWeight(Models\ModifyTargetWeightRequest $req) ModifyTargetWeight 接口用于修改负载均衡绑定的后端服务的转发权重。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用 [DescribeTaskStatus](https://cloud.tencent.com/document/product/214/30683) 接口查询本次任务是否成功。
 * @method Models\RegisterFunctionTargetsResponse RegisterFunctionTargets(Models\RegisterFunctionTargetsRequest $req) RegisterFunctionTargets 接口用来将一个云函数绑定到负载均衡的7层转发规则，在此之前您需要先行创建相关的7层监听器（HTTP、HTTPS）和转发规则。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用DescribeTaskStatus接口查询本次任务是否成功。<br/>
限制说明：
- 仅广州、深圳金融、上海、上海金融、北京、成都、中国香港、新加坡、东京、硅谷地域支持绑定 SCF。
- 仅标准账户类型支持绑定 SCF，传统账户类型不支持。建议升级为标准账户类型，详情可参见 [账户类型升级说明](https://cloud.tencent.com/document/product/1199/49090)。 
- 传统型负载均衡不支持绑定 SCF。
- 基础网络类型不支持绑定 SCF。
- CLB 默认支持绑定同地域下的所有 SCF，可支持跨 VPC 绑定 SCF，不支持跨地域绑定。
- 目前仅 IPv4、IPv6 NAT64 版本的负载均衡支持绑定 SCF，IPv6 版本的暂不支持。
- 仅七层（HTTP、HTTPS）监听器支持绑定 SCF，四层（TCP、UDP、TCP SSL）监听器和七层 QUIC 监听器不支持。
- CLB 绑定 SCF 仅支持绑定“Event 函数”类型的云函数。
- 一个转发规则只支持绑定一个云函数。
 * @method Models\RegisterTargetGroupInstancesResponse RegisterTargetGroupInstances(Models\RegisterTargetGroupInstancesRequest $req) 注册服务器到目标组。
本接口为异步接口，本接口返回成功后需以返回的 RequestID 为入参，调用 DescribeTaskStatus 接口查询本次任务是否成功。
 * @method Models\RegisterTargetsResponse RegisterTargets(Models\RegisterTargetsRequest $req) RegisterTargets 接口用来将一台或多台后端服务绑定到负载均衡的监听器（或7层转发规则），在此之前您需要先行创建相关的4层监听器或7层转发规则。对于四层监听器（TCP、UDP），只需指定监听器ID即可，对于七层监听器（HTTP、HTTPS），还需通过LocationId或者Domain+Url指定转发规则。
本接口为异步接口，本接口返回成功后需以返回的RequestID为入参，调用  [DescribeTaskStatus](https://cloud.tencent.com/document/product/214/30683)  接口查询本次任务是否成功。
 * @method Models\RegisterTargetsWithClassicalLBResponse RegisterTargetsWithClassicalLB(Models\RegisterTargetsWithClassicalLBRequest $req) RegisterTargetsWithClassicalLB 接口用于绑定后端服务到传统型负载均衡。本接口为异步接口，接口返回成功后，需以返回的 RequestId 为入参，调用 DescribeTaskStatus 接口查询本次任务是否成功。
 * @method Models\ReplaceCertForLoadBalancersResponse ReplaceCertForLoadBalancers(Models\ReplaceCertForLoadBalancersRequest $req) ReplaceCertForLoadBalancers 接口用以替换负载均衡实例所关联的证书，对于各个地域的负载均衡，如果指定的老的证书ID与其有关联关系，则会先解除关联，再建立新证书与该负载均衡的关联关系。
此接口支持替换服务端证书或客户端证书。
需要使用的新证书，可以通过传入证书ID来指定，如果不指定证书ID，则必须传入证书内容等相关信息，用以新建证书并绑定至负载均衡。
注：本接口仅可从广州地域调用。
 * @method Models\SetCustomizedConfigForLoadBalancerResponse SetCustomizedConfigForLoadBalancer(Models\SetCustomizedConfigForLoadBalancerRequest $req) 负载均衡维度的个性化配置相关操作：创建、删除、修改、绑定、解绑
 * @method Models\SetLoadBalancerClsLogResponse SetLoadBalancerClsLog(Models\SetLoadBalancerClsLogRequest $req) 增加、删除、更新负载均衡的日志服务(CLS)主题。
 * @method Models\SetLoadBalancerSecurityGroupsResponse SetLoadBalancerSecurityGroups(Models\SetLoadBalancerSecurityGroupsRequest $req) SetLoadBalancerSecurityGroups 接口支持对一个公网负载均衡实例执行设置（绑定、解绑）安全组操作。查询一个负载均衡实例目前已绑定的安全组，可使用 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459) 接口。本接口是set语义，
绑定操作时，入参需要传入负载均衡实例要绑定的所有安全组（已绑定的+新增绑定的）。
解绑操作时，入参需要传入负载均衡实例执行解绑后所绑定的所有安全组；如果要解绑所有安全组，可不传此参数，或传入空数组。注意：内网 CLB 绑定 EIP 后，CLB 上的安全组对来自 EIP 的流量不生效，对来自内网 CLB 的流量生效。
 * @method Models\SetLoadBalancerStartStatusResponse SetLoadBalancerStartStatus(Models\SetLoadBalancerStartStatusRequest $req) 启停负载均衡实例或者监听器。
本接口为异步接口，接口返回成功后，需以得到的 RequestID 为入参，调用  [DescribeTaskStatus](https://cloud.tencent.com/document/product/214/30683)  接口查询本次任务是否成功。
该功能正在内测中，如需使用，请通过[工单申请](https://console.cloud.tencent.com/workorder/category?level1_id=6&level2_id=163&source=0&data_title=%E8%B4%9F%E8%BD%BD%E5%9D%87%E8%A1%A1%20LB&step=1)。
 * @method Models\SetSecurityGroupForLoadbalancersResponse SetSecurityGroupForLoadbalancers(Models\SetSecurityGroupForLoadbalancersRequest $req) 绑定或解绑一个安全组到多个公网负载均衡实例。
 */

class ClbClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "clb.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "clb";

    /**
     * @var string
     */
    protected $version = "2018-03-17";

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
        $respClass = "TencentCloud"."\\".ucfirst("clb")."\\"."V20180317\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
