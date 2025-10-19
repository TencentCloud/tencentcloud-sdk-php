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

namespace TencentCloud\Teo\V20220901;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Teo\V20220901\Models as Models;

/**
 * @method Models\BindSecurityTemplateToEntityResponse BindSecurityTemplateToEntity(Models\BindSecurityTemplateToEntityRequest $req) 操作安全策略模板，支持将域名绑定或换绑到指定的策略模板，或者从指定的策略模板解绑。
 * @method Models\BindSharedCNAMEResponse BindSharedCNAME(Models\BindSharedCNAMERequest $req) 用于加速域名绑定或解绑共享 CNAME，该功能白名单内测中。
 * @method Models\BindZoneToPlanResponse BindZoneToPlan(Models\BindZoneToPlanRequest $req) 将未绑定套餐的站点绑定到已有套餐
 * @method Models\CheckCnameStatusResponse CheckCnameStatus(Models\CheckCnameStatusRequest $req) 校验域名 CNAME 状态
 * @method Models\ConfirmMultiPathGatewayOriginACLResponse ConfirmMultiPathGatewayOriginACL(Models\ConfirmMultiPathGatewayOriginACLRequest $req) 本接口用于多通道安全加速网关回源 IP 网段发生变更时，确认已将最新回源 IP 网段更新至源站防火墙。
 * @method Models\ConfirmOriginACLUpdateResponse ConfirmOriginACLUpdate(Models\ConfirmOriginACLUpdateRequest $req) 本接口用于回源 IP 网段发生变更时，确认已将最新回源 IP 网段更新至源站防火墙。确认已更新至最新的回源 IP 网段后，相关变更通知将会停止推送。
 * @method Models\CreateAccelerationDomainResponse CreateAccelerationDomain(Models\CreateAccelerationDomainRequest $req) 在创建完站点之后，您可以通过本接口创建加速域名。 

CNAME 模式接入时，若您未完成站点归属权校验，本接口将为您返回域名归属权验证信息，您可以单独对域名进行归属权验证，详情参考 [站点/域名归属权验证](https://cloud.tencent.com/document/product/1552/70789)。
 * @method Models\CreateAliasDomainResponse CreateAliasDomain(Models\CreateAliasDomainRequest $req) 创建别称域名。
该功能仅企业版套餐支持，并且该功能当前仍在内测中，如需使用，请[联系我们](https://cloud.tencent.com/online-service?from=connect-us)。
 * @method Models\CreateApplicationProxyResponse CreateApplicationProxy(Models\CreateApplicationProxyRequest $req) 本接口为旧版，如需调用请尽快迁移至新版 [创建四层代理实例](https://cloud.tencent.com/document/product/1552/103417) 。
 * @method Models\CreateApplicationProxyRuleResponse CreateApplicationProxyRule(Models\CreateApplicationProxyRuleRequest $req) 本接口为旧版，如需调用请尽快迁移至新版，详情请参考 [创建四层代理转发规则
](https://cloud.tencent.com/document/product/1552/103416) 。
 * @method Models\CreateCLSIndexResponse CreateCLSIndex(Models\CreateCLSIndexRequest $req) 针对指定实时日志投递任务（task-id），在对应的腾讯云 CLS 日志主题中创建投递日志字段对应的键值索引。如果您在腾讯云 CLS 已经创建索引，本接口将采用合并的方式追加索引。
 * @method Models\CreateConfigGroupVersionResponse CreateConfigGroupVersion(Models\CreateConfigGroupVersionRequest $req) 在版本管理模式下，用于创建指定配置组的新版本。版本管理功能内测中，当前仅白名单开放。
 * @method Models\CreateContentIdentifierResponse CreateContentIdentifier(Models\CreateContentIdentifierRequest $req) 创建内容标识符，可以设置描述、标签等信息，同时需要绑定企业版套餐用于统计计费数据；一个内容标识符只能绑定一个计费套餐，一个计费套餐可以绑定多个内容标识符。该功能仅限白名单开放。
 * @method Models\CreateCustomizeErrorPageResponse CreateCustomizeErrorPage(Models\CreateCustomizeErrorPageRequest $req) 创建自定义错误页面。
 * @method Models\CreateDnsRecordResponse CreateDnsRecord(Models\CreateDnsRecordRequest $req) 在创建完站点后，并且站点为 NS 模式接入时，您可以通过本接口创建 DNS 记录。
 * @method Models\CreateFunctionResponse CreateFunction(Models\CreateFunctionRequest $req) 创建并部署边缘函数至 EdgeOne 的边缘节点。
 * @method Models\CreateFunctionRuleResponse CreateFunctionRule(Models\CreateFunctionRuleRequest $req) 创建边缘函数的触发规则。支持通过自定义过滤条件来决定是否需要执行函数，当需要执行函数时，提供了多种选择目标函数的方式，包括：直接指定，基于客户端归属地区选择和基于权重选择。
 * @method Models\CreateJustInTimeTranscodeTemplateResponse CreateJustInTimeTranscodeTemplate(Models\CreateJustInTimeTranscodeTemplateRequest $req) 即时转码已经提供了预置转码模板，满足大部分的需求。如果有个性化的转码需求，可以通过本接口创建自定义的转码模板，最多可创建100个自定义转码模板。
为了确保即时转码效果的一致性，避免因 EO 缓存或 M3U8 分片处理过程中的模板变更导致视频输出异常，模板在创建后不可进行修改。
即时转码详细能力了解：[EdgeOne视频即时处理功能介绍](https://cloud.tencent.com/document/product/1552/111927)。
 * @method Models\CreateL4ProxyResponse CreateL4Proxy(Models\CreateL4ProxyRequest $req) 用于创建四层代理实例。
 * @method Models\CreateL4ProxyRulesResponse CreateL4ProxyRules(Models\CreateL4ProxyRulesRequest $req) 用于创建四层代理实例规则，支持单条或者批量创建。
 * @method Models\CreateL7AccRulesResponse CreateL7AccRules(Models\CreateL7AccRulesRequest $req) 本接口用于在[规则引擎](https://cloud.tencent.com/document/product/1552/70901)中创建规则，支持批量创建。
 * @method Models\CreateLoadBalancerResponse CreateLoadBalancer(Models\CreateLoadBalancerRequest $req) 创建负载均衡实例。详情请参考 [快速创建负载均衡实例](https://cloud.tencent.com/document/product/1552/104223)。负载均衡功能内测中，如您需要使用请 [联系我们](https://cloud.tencent.com/online-service)。
 * @method Models\CreateMultiPathGatewayResponse CreateMultiPathGateway(Models\CreateMultiPathGatewayRequest $req) 通过本接口创建多通道安全加速网关，包括云上网关（腾讯云创建和管理的网关）和自有网关（用户部署的私有网关），需要通过接口 DescribeMultiPathGateway，查询状态为 online 即创建成功。
 * @method Models\CreateMultiPathGatewayLineResponse CreateMultiPathGatewayLine(Models\CreateMultiPathGatewayLineRequest $req) 通过本接口创建接入多通道安全加速网关的线路。包括 EdgeOne 四层代理线路、自定义线路。
 * @method Models\CreateMultiPathGatewaySecretKeyResponse CreateMultiPathGatewaySecretKey(Models\CreateMultiPathGatewaySecretKeyRequest $req) 通过本接口创建接入多通道安全加速网关的密钥，客户基于接入密钥签名接入多通道安全加速网关。每个站点下只有一个密钥，可用于接入该站点下的所有网关，可通过接口 DescribeMultiPathGatewaySecretKey 查询。
 * @method Models\CreateOriginGroupResponse CreateOriginGroup(Models\CreateOriginGroupRequest $req) 创建源站组，以源站组的方式管理业务源站。此处配置的源站组可于**添加加速域名**和**四层代理**等功能中引用。
 * @method Models\CreatePlanResponse CreatePlan(Models\CreatePlanRequest $req) 若您需要使用 Edgeone 产品，您需要通过此接口创建计费套餐。
> 创建套餐后，您需要通过 [CreateZone](https://cloud.tencent.com/document/product/1552/80719) 完成创建站点，绑定套餐的流程，Edgeone 才能正常提供服务。
 * @method Models\CreatePlanForZoneResponse CreatePlanForZone(Models\CreatePlanForZoneRequest $req) 为未购买套餐的站点购买套餐
 * @method Models\CreatePrefetchTaskResponse CreatePrefetchTask(Models\CreatePrefetchTaskRequest $req) 创建预热任务
 * @method Models\CreatePurgeTaskResponse CreatePurgeTask(Models\CreatePurgeTaskRequest $req) 当源站资源更新，但节点缓存 TTL 未过期时，用户仍会访问到旧的资源，此时可以通过该接口实现节点资源更新。触发更新的方法有以下两种：<li>直接删除：不做任何校验，直接删除节点缓存，用户请求时触发回源拉取；</li><li>标记过期：将节点资源置为过期，用户请求时触发回源校验，即发送带有 If-None-Match 和 If-Modified-Since 头部的 HTTP 条件请求。若源站响应 200，则节点会回源拉取新的资源并更新缓存；若源站响应 304，则节点不会更新缓存；</li>

清除缓存任务详情请查看[清除缓存](https://cloud.tencent.com/document/product/1552/70759)。
 * @method Models\CreateRealtimeLogDeliveryTaskResponse CreateRealtimeLogDeliveryTask(Models\CreateRealtimeLogDeliveryTaskRequest $req) 本接口用于创建实时日志投递任务。本接口有如下限制：
- 当数据投递类型（LogType）为站点加速日志（七层访问日志）、四层代理日志、边缘函数运行日志时，同一个实体（七层域名、四层代理实例、边缘函数实例）在同种数据投递类型（LogType）和数据投递区域（Area）的组合下，只能被添加到如下实时日志投递任务类型（TaskType）组合中：
    - 一个推送至腾讯云  CLS 的任务，加上另一个推送至自定义 HTTP(S) 地址的任务；
    - 一个推送至腾讯云  CLS 的任务，加上另一个推送至 AWS S3 兼容对象存储的任务；
- 当数据投递类型（LogType）为速率限制和 CC 攻击防护日志、托管规则日志、自定义规则日志、Bot 管理日志时，同一个实体在同种数据投递类型（LogType）和数据投递区域（Area）的组合下，只能被添加到一个实时日志投递任务中。

建议先通过 [DescribeRealtimeLogDeliveryTasks](https://cloud.tencent.com/document/product/1552/104110)  接口根据实体查询实时日志投递任务列表，检查实体是否已经被添加到另一实时日志投递任务中。
 * @method Models\CreateRuleResponse CreateRule(Models\CreateRuleRequest $req) 本接口为旧版本创建规则引擎接口，EdgeOne 于 2025 年 1 月 21 日已对规则引擎相关接口全面升级，新版本创建七层加速规则接口详情请参考 [CreateL7AccRules](https://cloud.tencent.com/document/product/1552/115822)。
<p style="color: red;">注意：自 2025 年 1 月 21 日起，旧版接口停止更新迭代，后续新增功能将仅在新版接口中提供，旧版接口支持的原有能力将不受影响。为避免在使用旧版接口时出现数据字段冲突，建议您尽早迁移到新版规则引擎接口。</p>
 * @method Models\CreateSecurityAPIResourceResponse CreateSecurityAPIResource(Models\CreateSecurityAPIResourceRequest $req) 用于创建 API 资源。
 * @method Models\CreateSecurityAPIServiceResponse CreateSecurityAPIService(Models\CreateSecurityAPIServiceRequest $req) 用于创建 API 服务。
 * @method Models\CreateSecurityClientAttesterResponse CreateSecurityClientAttester(Models\CreateSecurityClientAttesterRequest $req) 创建客户端认证选项。
 * @method Models\CreateSecurityIPGroupResponse CreateSecurityIPGroup(Models\CreateSecurityIPGroupRequest $req) 创建安全 IP 组
 * @method Models\CreateSecurityJSInjectionRuleResponse CreateSecurityJSInjectionRule(Models\CreateSecurityJSInjectionRuleRequest $req) 创建 JavaScript 注入规则。
 * @method Models\CreateSharedCNAMEResponse CreateSharedCNAME(Models\CreateSharedCNAMERequest $req) 用于创建共享 CNAME，该功能白名单内测中。
 * @method Models\CreateWebSecurityTemplateResponse CreateWebSecurityTemplate(Models\CreateWebSecurityTemplateRequest $req) 创建安全策略配置模板
 * @method Models\CreateZoneResponse CreateZone(Models\CreateZoneRequest $req) EdgeOne 为您提供 CNAME、NS 和无域名接入三种接入方式，您需要先通过此接口完成站点创建。CNAME 和 NS 接入站点的场景可参考 [从零开始快速接入 EdgeOne](https://cloud.tencent.com/document/product/1552/87601); 无域名接入的场景可参考 [快速启用四层代理服务](https://cloud.tencent.com/document/product/1552/96051)。

> 建议您在账号下已存在套餐时调用本接口创建站点，请在入参时传入 PlanId ，直接将站点绑定至该套餐；不传入 PlanId 时，创建出来的站点会处于未激活状态，无法正常服务，您需要通过 [BindZoneToPlan](https://cloud.tencent.com/document/product/1552/83042) 完成套餐绑定之后，站点才可正常提供服务 。若您当前没有可绑定的套餐时，请前往控制台购买套餐完成站点创建。
 * @method Models\DeleteAccelerationDomainsResponse DeleteAccelerationDomains(Models\DeleteAccelerationDomainsRequest $req) 批量删除加速域名
 * @method Models\DeleteAliasDomainResponse DeleteAliasDomain(Models\DeleteAliasDomainRequest $req) 删除别称域名。
该功能仅企业版套餐支持，并且该功能当前仍在内测中，如需使用，请[联系我们](https://cloud.tencent.com/online-service?from=connect-us)。
 * @method Models\DeleteApplicationProxyResponse DeleteApplicationProxy(Models\DeleteApplicationProxyRequest $req) 本接口为旧版，如需调用请尽快迁移至新版，详情请参考 [删除四层代理实例
](https://cloud.tencent.com/document/product/1552/103415) 。
 * @method Models\DeleteApplicationProxyRuleResponse DeleteApplicationProxyRule(Models\DeleteApplicationProxyRuleRequest $req) 本接口为旧版，如需调用请尽快迁移至新版，详情请参考 [删除四层代理转发规则](https://cloud.tencent.com/document/product/1552/103414) 。
 * @method Models\DeleteContentIdentifierResponse DeleteContentIdentifier(Models\DeleteContentIdentifierRequest $req) 删除指定的内容标识符。该功能仅白名单开放。
 * @method Models\DeleteCustomErrorPageResponse DeleteCustomErrorPage(Models\DeleteCustomErrorPageRequest $req) 删除自定义错误页面。
 * @method Models\DeleteDnsRecordsResponse DeleteDnsRecords(Models\DeleteDnsRecordsRequest $req) 您可以用本接口批量删除 DNS 记录。
 * @method Models\DeleteFunctionResponse DeleteFunction(Models\DeleteFunctionRequest $req) 删除边缘函数，删除后函数无法恢复，关联的触发规则会一并删除。
 * @method Models\DeleteFunctionRulesResponse DeleteFunctionRules(Models\DeleteFunctionRulesRequest $req) 删除边缘函数触发规则。
 * @method Models\DeleteJustInTimeTranscodeTemplatesResponse DeleteJustInTimeTranscodeTemplates(Models\DeleteJustInTimeTranscodeTemplatesRequest $req) 根据站点 id 下唯一的模板标识，删除相应的即时转码模板。
 * @method Models\DeleteL4ProxyResponse DeleteL4Proxy(Models\DeleteL4ProxyRequest $req) 用于删除四层代理实例。
 * @method Models\DeleteL4ProxyRulesResponse DeleteL4ProxyRules(Models\DeleteL4ProxyRulesRequest $req) 用于删除四层代理转发规则，支持单条或者批量操作。
 * @method Models\DeleteL7AccRulesResponse DeleteL7AccRules(Models\DeleteL7AccRulesRequest $req) 本接口用于删除[规则引擎](https://cloud.tencent.com/document/product/1552/70901)的规则，支持批量删除。
 * @method Models\DeleteLoadBalancerResponse DeleteLoadBalancer(Models\DeleteLoadBalancerRequest $req) 删除负载均衡实例，若负载均衡示例被其他服务（例如：四层代理等）引用的时候，示例无法被删除，需要先解除引用关系。负载均衡功能内测中，如您需要使用请 [联系我们](https://cloud.tencent.com/online-service)。
 * @method Models\DeleteMultiPathGatewayResponse DeleteMultiPathGateway(Models\DeleteMultiPathGatewayRequest $req) 通过本接口删除多通道安全加速网关，包括自有网关和云上网关。
 * @method Models\DeleteMultiPathGatewayLineResponse DeleteMultiPathGatewayLine(Models\DeleteMultiPathGatewayLineRequest $req) 通过本接口删除接入多通道安全加速网关的线路，仅自定义线路支持删除。
 * @method Models\DeleteOriginGroupResponse DeleteOriginGroup(Models\DeleteOriginGroupRequest $req) 删除源站组，若源站组仍然被服务（例如：四层代理，域名服务，负载均衡，规则引起）引用，将不允许删除。
 * @method Models\DeleteRealtimeLogDeliveryTaskResponse DeleteRealtimeLogDeliveryTask(Models\DeleteRealtimeLogDeliveryTaskRequest $req) 通过本接口删除实时日志投递任务。
 * @method Models\DeleteRulesResponse DeleteRules(Models\DeleteRulesRequest $req) 本接口为旧版本删除规则引擎接口，EdgeOne 于 2025 年 1 月 21 日已对规则引擎相关接口全面升级，新版本删除七层加速规则接口详情请参考 [DeleteL7AccRules](https://cloud.tencent.com/document/product/1552/115821)。
<p style="color: red;">注意：自 2025 年 1 月 21 日起，旧版接口停止更新迭代，后续新增功能将仅在新版接口中提供，旧版接口支持的原有能力将不受影响。为避免在使用旧版接口时出现数据字段冲突，建议您尽早迁移到新版规则引擎接口。</p>
 * @method Models\DeleteSecurityAPIResourceResponse DeleteSecurityAPIResource(Models\DeleteSecurityAPIResourceRequest $req) 用于删除 API 资源。
 * @method Models\DeleteSecurityAPIServiceResponse DeleteSecurityAPIService(Models\DeleteSecurityAPIServiceRequest $req) 用于删除 API 服务。
 * @method Models\DeleteSecurityClientAttesterResponse DeleteSecurityClientAttester(Models\DeleteSecurityClientAttesterRequest $req) 删除客户端认证选项。
 * @method Models\DeleteSecurityIPGroupResponse DeleteSecurityIPGroup(Models\DeleteSecurityIPGroupRequest $req) 删除指定 IP 组，如果有规则引用了 IP 组情况，则不允许删除。
 * @method Models\DeleteSecurityJSInjectionRuleResponse DeleteSecurityJSInjectionRule(Models\DeleteSecurityJSInjectionRuleRequest $req) 删除 JavaScript 注入规则。
 * @method Models\DeleteSharedCNAMEResponse DeleteSharedCNAME(Models\DeleteSharedCNAMERequest $req) 用于删除共享 CNAME，该功能白名单内测中。
 * @method Models\DeleteWebSecurityTemplateResponse DeleteWebSecurityTemplate(Models\DeleteWebSecurityTemplateRequest $req) 删除安全策略配置模板
 * @method Models\DeleteZoneResponse DeleteZone(Models\DeleteZoneRequest $req) 删除站点。
 * @method Models\DeployConfigGroupVersionResponse DeployConfigGroupVersion(Models\DeployConfigGroupVersionRequest $req) 在版本管理模式下，用于版本发布，可通过 EnvId 将版本发布至测试环境或生产环境。版本管理功能内测中，当前仅白名单开放。
 * @method Models\DescribeAccelerationDomainsResponse DescribeAccelerationDomains(Models\DescribeAccelerationDomainsRequest $req) 您可以通过本接口查看站点下的域名信息，包括加速域名、源站以及域名状态等信息。您可以查看站点下全部域名的信息，也可以指定过滤条件查询对应的域名信息。
 * @method Models\DescribeAliasDomainsResponse DescribeAliasDomains(Models\DescribeAliasDomainsRequest $req) 查询别称域名信息列表。
该功能仅企业版套餐支持，并且该功能当前仍在内测中，如需使用，请[联系我们](https://cloud.tencent.com/online-service?from=connect-us)。
 * @method Models\DescribeApplicationProxiesResponse DescribeApplicationProxies(Models\DescribeApplicationProxiesRequest $req) 本接口为旧版，如需调用请尽快迁移至新版，新版接口中将四层代理实例列表的查询和四层转发规则的查询拆分成两个接口，详情请参考 [查询四层代理实例列表](https://cloud.tencent.com/document/product/1552/103413) 和 [查询四层代理转发规则列表](https://cloud.tencent.com/document/product/1552/103412)。
 * @method Models\DescribeAvailablePlansResponse DescribeAvailablePlans(Models\DescribeAvailablePlansRequest $req) 查询当前账户可用套餐信息列表
 * @method Models\DescribeBillingDataResponse DescribeBillingData(Models\DescribeBillingDataRequest $req) 通过本接口查询计费数据。
 * @method Models\DescribeConfigGroupVersionDetailResponse DescribeConfigGroupVersionDetail(Models\DescribeConfigGroupVersionDetailRequest $req) 在版本管理模式下，用于获取版本的详细信息，包括版本 ID、描述、状态、创建时间、所属配置组信息以及版本配置文件的内容。版本管理功能内测中，当前仅白名单开放。
 * @method Models\DescribeConfigGroupVersionsResponse DescribeConfigGroupVersions(Models\DescribeConfigGroupVersionsRequest $req) 在版本管理模式下，用于查询指定配置组的版本列表。版本管理功能内测中，当前仅白名单开放。
 * @method Models\DescribeContentIdentifiersResponse DescribeContentIdentifiers(Models\DescribeContentIdentifiersRequest $req) 批量查询内容标识符，可以根据 ID、描述、状态或者标签过滤。按照状态查询被删除的内容标识符仅保留三个月。该功能仅白名单开放。
 * @method Models\DescribeContentQuotaResponse DescribeContentQuota(Models\DescribeContentQuotaRequest $req) 查询内容管理接口配额
 * @method Models\DescribeCustomErrorPagesResponse DescribeCustomErrorPages(Models\DescribeCustomErrorPagesRequest $req) 查询自定义错误页列表。
 * @method Models\DescribeDDoSAttackDataResponse DescribeDDoSAttackData(Models\DescribeDDoSAttackDataRequest $req) 本接口（DescribeDDoSAttackData）用于查询DDoS攻击时序数据。
 * @method Models\DescribeDDoSAttackEventResponse DescribeDDoSAttackEvent(Models\DescribeDDoSAttackEventRequest $req) 本接口（DescribeDDoSAttackEvent）用于查询DDoS攻击事件列表。
 * @method Models\DescribeDDoSAttackTopDataResponse DescribeDDoSAttackTopData(Models\DescribeDDoSAttackTopDataRequest $req) 本接口（DescribeDDoSAttackTopData）用于查询DDoS攻击Top数据。
 * @method Models\DescribeDDoSProtectionResponse DescribeDDoSProtection(Models\DescribeDDoSProtectionRequest $req) 获取站点的独立 DDoS 防护信息。
 * @method Models\DescribeDefaultCertificatesResponse DescribeDefaultCertificates(Models\DescribeDefaultCertificatesRequest $req) 查询默认证书列表
 * @method Models\DescribeDeployHistoryResponse DescribeDeployHistory(Models\DescribeDeployHistoryRequest $req) 在版本管理模式下，用于查询生产/测试环境的版本发布历史。版本管理功能内测中，当前仅白名单开放。
 * @method Models\DescribeDnsRecordsResponse DescribeDnsRecords(Models\DescribeDnsRecordsRequest $req) 您可以用过本接口查看站点下的 DNS 记录信息，包括 DNS 记录名、记录类型以及记录内容等信息，支持指定过滤条件查询对应的 DNS 记录信息。
 * @method Models\DescribeEnvironmentsResponse DescribeEnvironments(Models\DescribeEnvironmentsRequest $req) 在版本管理模式下，用于查询环境信息，可获取环境 ID、类型、当前生效版本等。版本管理功能内测中，当前仅白名单开放。
 * @method Models\DescribeFunctionRulesResponse DescribeFunctionRules(Models\DescribeFunctionRulesRequest $req) 查询边缘函数触发规则列表，支持按照规则 ID、函数 ID、规则描述等条件进行过滤。
 * @method Models\DescribeFunctionRuntimeEnvironmentResponse DescribeFunctionRuntimeEnvironment(Models\DescribeFunctionRuntimeEnvironmentRequest $req) 查询边缘函数运行环境，包括环境变量。
 * @method Models\DescribeFunctionsResponse DescribeFunctions(Models\DescribeFunctionsRequest $req) 查询边缘函数列表，支持函数 ID、函数名称、描述等条件的过滤。
 * @method Models\DescribeHostsSettingResponse DescribeHostsSetting(Models\DescribeHostsSettingRequest $req) 本接口为旧版，EdgeOne 已对规则引擎相关接口全面升级，可通过 [DescribeL7AccSetting](https://cloud.tencent.com/document/product/1552/115819) 和 [DescribeL7AccRules](https://cloud.tencent.com/document/product/1552/115820) 来获取域名的详细配置。
 * @method Models\DescribeIPRegionResponse DescribeIPRegion(Models\DescribeIPRegionRequest $req) 该接口可用于查询 IP 是否为 EdgeOne IP。
 * @method Models\DescribeIdentificationsResponse DescribeIdentifications(Models\DescribeIdentificationsRequest $req) 查询站点的验证信息。
 * @method Models\DescribeJustInTimeTranscodeTemplatesResponse DescribeJustInTimeTranscodeTemplates(Models\DescribeJustInTimeTranscodeTemplatesRequest $req) 根据即时转码模板名字、模板类型或唯一标识，获取即时转码模板详情列表。返回结果包含符合条件的所有用户自定义模板及预置模板。
 * @method Models\DescribeL4ProxyResponse DescribeL4Proxy(Models\DescribeL4ProxyRequest $req) 用于查询四层代理实例列表。
 * @method Models\DescribeL4ProxyRulesResponse DescribeL4ProxyRules(Models\DescribeL4ProxyRulesRequest $req) 查询四层代理实例下的转发规则列表。
 * @method Models\DescribeL7AccRulesResponse DescribeL7AccRules(Models\DescribeL7AccRulesRequest $req) 本接口用于查询[规则引擎](https://cloud.tencent.com/document/product/1552/70901)的规则列表。
 * @method Models\DescribeL7AccSettingResponse DescribeL7AccSetting(Models\DescribeL7AccSettingRequest $req) 本接口用于查询[站点加速](https://cloud.tencent.com/document/product/1552/96193)全局配置。
 * @method Models\DescribeLoadBalancerListResponse DescribeLoadBalancerList(Models\DescribeLoadBalancerListRequest $req) 查询负载均衡实例列表。负载均衡功能内测中，如您需要使用请 [联系我们](https://cloud.tencent.com/online-service)。
 * @method Models\DescribeMultiPathGatewayResponse DescribeMultiPathGateway(Models\DescribeMultiPathGatewayRequest $req) 通过本接口查询多通道安全加速网关详情。如名称、网关 ID、IP、端口、类型等。
 * @method Models\DescribeMultiPathGatewayLineResponse DescribeMultiPathGatewayLine(Models\DescribeMultiPathGatewayLineRequest $req) 通过本接口查询接入多通道安全加速网关的线路。包括直连、EdgeOne 四层代理线路、自定义线路。
 * @method Models\DescribeMultiPathGatewayOriginACLResponse DescribeMultiPathGatewayOriginACL(Models\DescribeMultiPathGatewayOriginACLRequest $req) 本接口用于查询多通道安全加速网关实例与回源 IP 网段的绑定关系，以及回源 IP 网段详情。若 MultiPathGatewayNextOriginACL 字段有返回值，则需要将最新的回源 IP 网段同步到源站防火墙配置中。
 * @method Models\DescribeMultiPathGatewayRegionsResponse DescribeMultiPathGatewayRegions(Models\DescribeMultiPathGatewayRegionsRequest $req) 通过本接口查询用户创建的多通道安全加速网关（云上网关）的可用地域列表。
 * @method Models\DescribeMultiPathGatewaySecretKeyResponse DescribeMultiPathGatewaySecretKey(Models\DescribeMultiPathGatewaySecretKeyRequest $req) 通过本接口查询接入多通道安全加速网关的密钥，客户基于接入密钥签名接入多通道安全加速网关。
 * @method Models\DescribeMultiPathGatewaysResponse DescribeMultiPathGateways(Models\DescribeMultiPathGatewaysRequest $req) 通过本接口查询用户创建的多通道安全加速网关列表。支持翻页。
 * @method Models\DescribeOriginACLResponse DescribeOriginACL(Models\DescribeOriginACLRequest $req) 本接口用于查询站点下的七层加速域名/四层代理实例与回源 IP 网段的绑定关系，以及回源 IP 网段详情。如果您想通过自动化脚本定期获取回源 IP 网段的最新版本，可以较低频率（建议每三天一次）轮询本接口，若 NextOriginACL 字段有返回值，则将最新的回源 IP 网段同步到源站防火墙配置中。
 * @method Models\DescribeOriginGroupResponse DescribeOriginGroup(Models\DescribeOriginGroupRequest $req) 获取源站组列表
 * @method Models\DescribeOriginGroupHealthStatusResponse DescribeOriginGroupHealthStatus(Models\DescribeOriginGroupHealthStatusRequest $req) 查询负载均衡实例下源站组健康状态。负载均衡功能内测中，如您需要使用请 [联系我们](https://cloud.tencent.com/online-service)。
 * @method Models\DescribeOriginProtectionResponse DescribeOriginProtection(Models\DescribeOriginProtectionRequest $req) 本接口为旧版本查询源站防护接口，EdgeOne 于 2025 年 6 月 27 日已对源站防护相关接口全面升级，新版本查询源站防护接口详情请参考 [DescribeOriginACL](https://cloud.tencent.com/document/product/1552/120408)。

<p style="color: red;">注意：自 2025 年 6 月 27 日起，旧版接口停止更新迭代，后续新增功能将仅在新版接口中提供。为避免在使用旧版接口时出现数据字段冲突，建议您尽早迁移到新版源站防护接口。</p>
 * @method Models\DescribeOverviewL7DataResponse DescribeOverviewL7Data(Models\DescribeOverviewL7DataRequest $req) 本接口（DescribeOverviewL7Data）用于查询七层监控类时序流量数据。此接口待废弃，请使用 <a href="https://cloud.tencent.com/document/product/1552/80648">DescribeTimingL7AnalysisData</a> 接口。
 * @method Models\DescribePlansResponse DescribePlans(Models\DescribePlansRequest $req) 查询套餐信息列表，支持分页。
 * @method Models\DescribePrefetchTasksResponse DescribePrefetchTasks(Models\DescribePrefetchTasksRequest $req) DescribePrefetchTasks 用于查询预热任务提交历史记录及执行进度，通过 CreatePrefetchTasks 接口提交的任务可通过此接口进行查询。
 * @method Models\DescribePurgeTasksResponse DescribePurgeTasks(Models\DescribePurgeTasksRequest $req) DescribePurgeTasks 用于查询提交的 URL 刷新、目录刷新记录及执行进度，通过 CreatePurgeTasks 接口提交的任务均可通过此接口进行查询。
 * @method Models\DescribeRealtimeLogDeliveryTasksResponse DescribeRealtimeLogDeliveryTasks(Models\DescribeRealtimeLogDeliveryTasksRequest $req) 通过本接口查询实时日志投递任务列表。
 * @method Models\DescribeRulesResponse DescribeRules(Models\DescribeRulesRequest $req) 本接口为旧版本查询规则引擎规则接口，EdgeOne 于 2025 年 1 月 21 日已对规则引擎相关接口全面升级，新版本查询七层加速规则接口详情请参考  [DescribeL7AccRules](https://cloud.tencent.com/document/product/1552/115820)。
<p style="color: red;">注意：自 2025 年 1 月 21 日起，旧版接口停止更新迭代，后续新增功能将仅在新版接口中提供，旧版接口支持的原有能力将不受影响。为避免在使用旧版接口时出现数据字段冲突，建议您尽早迁移到新版规则引擎接口。</p>
 * @method Models\DescribeRulesSettingResponse DescribeRulesSetting(Models\DescribeRulesSettingRequest $req) 本接口为旧版，EdgeOne 已对规则引擎相关接口全面升级，详情请参考 [RuleEngineAction](https://cloud.tencent.com/document/product/1552/80721#RuleEngineAction)。
 * @method Models\DescribeSecurityAPIResourceResponse DescribeSecurityAPIResource(Models\DescribeSecurityAPIResourceRequest $req) 查询站点下的 API 资源。
 * @method Models\DescribeSecurityAPIServiceResponse DescribeSecurityAPIService(Models\DescribeSecurityAPIServiceRequest $req) 查询站点下的 API 服务。
 * @method Models\DescribeSecurityClientAttesterResponse DescribeSecurityClientAttester(Models\DescribeSecurityClientAttesterRequest $req) 查询客户端认证选项配置。
 * @method Models\DescribeSecurityIPGroupResponse DescribeSecurityIPGroup(Models\DescribeSecurityIPGroupRequest $req) 查询安全 IP 组的配置信息，包括安全 IP 组的 ID、名称和内容。本接口的查询结果中，每个 IP 组最多只返回 2000 个 IP / 网段。如果存在超过 2000 个 IP / 网段的超大 IP 组，请调用 DescribeSecurityIPGroupContent 进行分页查询。
 * @method Models\DescribeSecurityIPGroupContentResponse DescribeSecurityIPGroupContent(Models\DescribeSecurityIPGroupContentRequest $req) 该接口用于分页查询指定 IP 组中的 IP 地址列表。当 IP 组中的 IP 地址数量超过 2000 个时，可以使用此接口进行分页查询，以获取完整的 IP 地址列表。
 * @method Models\DescribeSecurityIPGroupInfoResponse DescribeSecurityIPGroupInfo(Models\DescribeSecurityIPGroupInfoRequest $req) 接口已废弃，将于 2024 年 6 月 30 日停止服务。请使用 [查询安全 IP 组
](https://cloud.tencent.com/document/product/1552/105866) 接口。

查询 IP 组的配置信息，包括 IP 组名称、 IP 组内容、 IP 组归属站点。
 * @method Models\DescribeSecurityJSInjectionRuleResponse DescribeSecurityJSInjectionRule(Models\DescribeSecurityJSInjectionRuleRequest $req) 查询 JavaScript 注入规则。
 * @method Models\DescribeSecurityPolicyResponse DescribeSecurityPolicy(Models\DescribeSecurityPolicyRequest $req) 查询安全防护配置详情。
 * @method Models\DescribeSecurityTemplateBindingsResponse DescribeSecurityTemplateBindings(Models\DescribeSecurityTemplateBindingsRequest $req) 查询指定策略模板的绑定关系列表。
 * @method Models\DescribeTimingL4DataResponse DescribeTimingL4Data(Models\DescribeTimingL4DataRequest $req) 本接口（DescribeTimingL4Data）用于查询四层时序流量数据列表。
 * @method Models\DescribeTimingL7AnalysisDataResponse DescribeTimingL7AnalysisData(Models\DescribeTimingL7AnalysisDataRequest $req) 本接口用于查询七层域名业务的时序数据。
注意：
1. 本接口查询数据有 10 分钟左右延迟，建议拉取当前时间 10 分钟以前的数据。
2. 本接口默认返回防护后的流量请求数据，用户可在 `Filters.mitigatedByWebSecurity` 中自定义查询已防护缓释的数据。
 * @method Models\DescribeTimingL7CacheDataResponse DescribeTimingL7CacheData(Models\DescribeTimingL7CacheDataRequest $req) 本接口用于查询七层缓存分析时序类流量数据。此接口待废弃，请使用 <a href="https://cloud.tencent.com/document/product/1552/80648">DescribeTimingL7AnalysisData</a> 接口。
 * @method Models\DescribeTimingL7OriginPullDataResponse DescribeTimingL7OriginPullData(Models\DescribeTimingL7OriginPullDataRequest $req) 本接口用以查询七层域名业务的回源时序数据。
 * @method Models\DescribeTopL7AnalysisDataResponse DescribeTopL7AnalysisData(Models\DescribeTopL7AnalysisDataRequest $req) 本接口用于查询七层域名业务按照指定维度的 topN 数据。
注意：
1. 本接口查询数据有 10 分钟左右延迟，建议拉取当前时间 10 分钟以前的数据。
2. 本接口默认返回防护后的流量请求数据，用户可在 `Filters.mitigatedByWebSecurity` 中自定义查询已防护缓释的数据。
 * @method Models\DescribeTopL7CacheDataResponse DescribeTopL7CacheData(Models\DescribeTopL7CacheDataRequest $req) 本接口用于查询七层缓存分析 topN 数据。此接口待废弃，请使用 <a href="https://cloud.tencent.com/document/product/1552/80646"> DescribeTopL7AnalysisData</a> 接口。
 * @method Models\DescribeWebSecurityTemplateResponse DescribeWebSecurityTemplate(Models\DescribeWebSecurityTemplateRequest $req) 查询安全策略配置模板详情
 * @method Models\DescribeWebSecurityTemplatesResponse DescribeWebSecurityTemplates(Models\DescribeWebSecurityTemplatesRequest $req) 查询安全策略配置模板列表
 * @method Models\DescribeZoneConfigImportResultResponse DescribeZoneConfigImportResult(Models\DescribeZoneConfigImportResultRequest $req) 查询站点配置项导入结果接口，本接口用于站点配置导入接口（ImportZoneConfig）的结果查询。该功能仅支持标准版或企业版套餐的站点使用。
 * @method Models\DescribeZoneSettingResponse DescribeZoneSetting(Models\DescribeZoneSettingRequest $req) 本接口为旧版，EdgeOne 已对规则引擎相关接口全面升级，详情请参考 [DescribeL7AccSetting](https://cloud.tencent.com/document/product/1552/115819)。
 * @method Models\DescribeZonesResponse DescribeZones(Models\DescribeZonesRequest $req) 该接口用于查询您有权限的站点信息。可根据不同查询条件筛选站点。
 * @method Models\DestroyPlanResponse DestroyPlan(Models\DestroyPlanRequest $req) 当您需要停止 Edgeone 套餐的计费，可以通过该接口销毁计费套餐。
> 销毁计费套餐需要满足以下条件：
    1.套餐已过期（企业版套餐除外）；
    2.套餐下所有站点均已关闭或删除。

> 站点状态可以通过 [查询站点列表](https://cloud.tencent.com/document/product/1552/80713) 接口进行查询
停用站点可以通过 [切换站点状态](https://cloud.tencent.com/document/product/1552/80707) 接口将站点切换至关闭状态
删除站点可以通过 [删除站点](https://cloud.tencent.com/document/product/1552/80717) 接口将站点删除
 * @method Models\DisableOriginACLResponse DisableOriginACL(Models\DisableOriginACLRequest $req) 本接口用于关闭站点的源站防护功能。停用后，相关资源不再仅使用「源站防护」提供的回源 IP 网段请求您的源站，同时停止发送回源 IP 网段更新通知。
 * @method Models\DownloadL4LogsResponse DownloadL4Logs(Models\DownloadL4LogsRequest $req) 本接口（DownloadL4Logs）用于下载四层离线日志。
 * @method Models\DownloadL7LogsResponse DownloadL7Logs(Models\DownloadL7LogsRequest $req) 本接口（DownloadL7Logs）下载七层离线日志。
 * @method Models\EnableOriginACLResponse EnableOriginACL(Models\EnableOriginACLRequest $req) 本接口用于站点首次开启源站防护，启用后 EdgeOne 将会使用特定的回源 IP 网段为七层加速域名/四层代理实例回源。单次支持提交的七层加速域名的数量最大为 200，四层代理实例的数量最大为 100，支持七层加速域名/四层代理实例混合提交，总实例个数最大为 200。如需要启用超过 200 个资源，可先通过指定资源的方式以最大数量启用，剩余资源通过 ModifyOriginACL 接口启用。后续新增七层加速域名/四层代理实例均请通过 ModifyOriginACL 接口配置。

注意：
- 调用本接口视为同意 [源站防护启用特别约定](https://cloud.tencent.com/document/product/1552/120141)；
- 回源 IP 网段会不定期变更，EdgeOne 将在回源 IP 网段变更前 14 天、前 7 天、前 3 天和前 1 天分别通过站内信、短信、邮件等一种或多种方式发起通知，为了能正常收到回源 IP 网段的变更通知，请务必确保您在 [腾讯云消息中心控制台](https://console.cloud.tencent.com/message)内，已勾选边缘安全加速平台 EO 的产品服务相关消息通知，并配置正确的消息接收人。配置方式请参考 [消息订阅管理](https://cloud.tencent.com/document/product/567/43476)。
 * @method Models\ExportZoneConfigResponse ExportZoneConfig(Models\ExportZoneConfigRequest $req) 导出站点配置接口，本接口支持用户根据需要的配置项进行配置导出，导出的配置用于导入站点配置接口（ImportZoneConfig）进行配置导入。该功能仅支持标准版和企业版套餐站点使用。
 * @method Models\HandleFunctionRuntimeEnvironmentResponse HandleFunctionRuntimeEnvironment(Models\HandleFunctionRuntimeEnvironmentRequest $req) 操作边缘函数运行环境，支持环境变量的相关设置。
设置环境变量后，可在函数代码中使用，具体参考 [边缘函数引入环境变量](https://cloud.tencent.com/document/product/1552/109151#0151fd9a-8b0e-407b-ae37-54553a60ded6)。
 * @method Models\IdentifyZoneResponse IdentifyZone(Models\IdentifyZoneRequest $req) 用于验证站点所有权。
 * @method Models\ImportZoneConfigResponse ImportZoneConfig(Models\ImportZoneConfigRequest $req) 导入站点配置接口，本接口支持站点配置文件的快速导入，发起导入后接口会返回对应的任务 ID（TaskId），用户需通过查询站点配置导入结果接口（DescribeZoneConfigImportResult）获取本次导入任务执行的结果。该功能仅支持标准版和企业版套餐站点使用。
 * @method Models\IncreasePlanQuotaResponse IncreasePlanQuota(Models\IncreasePlanQuotaRequest $req) 当您的套餐绑定的站点数，或配置的 Web 防护 - 自定义规则 - 精准匹配策略的规则数，或 Web 防护 - 速率限制 - 精准速率限制模块的规则数达到套餐允许的配额上限，可以通过该接口增购对应配额。
> 该接口该仅支持企业版套餐。
 * @method Models\ModifyAccelerationDomainResponse ModifyAccelerationDomain(Models\ModifyAccelerationDomainRequest $req) 修改加速域名信息
 * @method Models\ModifyAccelerationDomainStatusesResponse ModifyAccelerationDomainStatuses(Models\ModifyAccelerationDomainStatusesRequest $req) 批量修改加速域名状态
 * @method Models\ModifyAliasDomainResponse ModifyAliasDomain(Models\ModifyAliasDomainRequest $req) 修改别称域名。
该功能仅企业版套餐支持，并且该功能当前仍在内测中，如需使用，请[联系我们](https://cloud.tencent.com/online-service?from=connect-us)。
 * @method Models\ModifyAliasDomainStatusResponse ModifyAliasDomainStatus(Models\ModifyAliasDomainStatusRequest $req) 修改别称域名状态。
该功能仅企业版套餐支持，并且该功能当前仍在内测中，如需使用，请[联系我们](https://cloud.tencent.com/online-service?from=connect-us)。
 * @method Models\ModifyApplicationProxyResponse ModifyApplicationProxy(Models\ModifyApplicationProxyRequest $req) 本接口为旧版，如需调用请尽快迁移至新版，详情请参考 [修改四层代理实例
](https://cloud.tencent.com/document/product/1552/103411) 。
 * @method Models\ModifyApplicationProxyRuleResponse ModifyApplicationProxyRule(Models\ModifyApplicationProxyRuleRequest $req) 本接口为旧版，如需调用请尽快迁移至新版，详情请参考 [修改四层代理转发规则
](https://cloud.tencent.com/document/product/1552/103410) 。
 * @method Models\ModifyApplicationProxyRuleStatusResponse ModifyApplicationProxyRuleStatus(Models\ModifyApplicationProxyRuleStatusRequest $req) 本接口为旧版，如需调用请尽快迁移至新版，详情请参考 [修改四层代理转发规则状态
](https://cloud.tencent.com/document/product/1552/103409) 。
 * @method Models\ModifyApplicationProxyStatusResponse ModifyApplicationProxyStatus(Models\ModifyApplicationProxyStatusRequest $req) 本接口为旧版，如需调用请尽快迁移至新版，详情请参考 [修改四层代理实例状态](https://cloud.tencent.com/document/product/1552/103408) 。
 * @method Models\ModifyContentIdentifierResponse ModifyContentIdentifier(Models\ModifyContentIdentifierRequest $req) 修改内容标识符，仅支持修改描述。该功能仅白名单开放。
 * @method Models\ModifyCustomErrorPageResponse ModifyCustomErrorPage(Models\ModifyCustomErrorPageRequest $req) 修改自定义错误页面。
 * @method Models\ModifyDDoSProtectionResponse ModifyDDoSProtection(Models\ModifyDDoSProtectionRequest $req) 修改站点的独立 DDoS 防护。
 * @method Models\ModifyDnsRecordsResponse ModifyDnsRecords(Models\ModifyDnsRecordsRequest $req) 您可以通过本接口批量修改 DNS 记录。
 * @method Models\ModifyDnsRecordsStatusResponse ModifyDnsRecordsStatus(Models\ModifyDnsRecordsStatusRequest $req) 您可以通过本接口批量修改 DNS 记录的状态，批量对记录进行开启和停用。
 * @method Models\ModifyFunctionResponse ModifyFunction(Models\ModifyFunctionRequest $req) 修改边缘函数，支持修改函数的内容及描述信息，修改且重新部署后，函数立刻生效。
 * @method Models\ModifyFunctionRuleResponse ModifyFunctionRule(Models\ModifyFunctionRuleRequest $req) 修改边缘函数触发规则，支持修改规则条件、执行函数以及描述信息。您可以先通过 DescribeFunctionRules 接口来获取需要修改的规则的 RuleId，然后传入修改后的规则内容，原规则内容会被覆盖式更新。
 * @method Models\ModifyFunctionRulePriorityResponse ModifyFunctionRulePriority(Models\ModifyFunctionRulePriorityRequest $req) 修改边缘函数触发规则的优先级。
 * @method Models\ModifyHostsCertificateResponse ModifyHostsCertificate(Models\ModifyHostsCertificateRequest $req) 完成域名创建之后，您可以为域名配置自有证书，也可以使用 EdgeOne 为您提供的 [免费证书](https://cloud.tencent.com/document/product/1552/90437)。
如果您需要配置自有证书，请先将证书上传至 [SSL证书控制台](https://console.cloud.tencent.com/certoverview)，然后在本接口中传入对应的证书 ID。详情参考 [部署自有证书至 EdgeOne 域名
](https://cloud.tencent.com/document/product/1552/88874)。
 * @method Models\ModifyL4ProxyResponse ModifyL4Proxy(Models\ModifyL4ProxyRequest $req) 用于修改四层代理实例的配置。
 * @method Models\ModifyL4ProxyRulesResponse ModifyL4ProxyRules(Models\ModifyL4ProxyRulesRequest $req) 用于修改四层代理转发规则，支持单条或者批量修改。
 * @method Models\ModifyL4ProxyRulesStatusResponse ModifyL4ProxyRulesStatus(Models\ModifyL4ProxyRulesStatusRequest $req) 用于启用/停用四层代理转发规则状态，支持单条或者批量操作。
 * @method Models\ModifyL4ProxyStatusResponse ModifyL4ProxyStatus(Models\ModifyL4ProxyStatusRequest $req) 用于启用/停用四层代理实例。
 * @method Models\ModifyL7AccRuleResponse ModifyL7AccRule(Models\ModifyL7AccRuleRequest $req) 本接口用于修改[规则引擎](https://cloud.tencent.com/document/product/1552/70901)中的规则，单次仅支持修改单条规则。
 * @method Models\ModifyL7AccRulePriorityResponse ModifyL7AccRulePriority(Models\ModifyL7AccRulePriorityRequest $req) 本接口用于修改[规则引擎](https://cloud.tencent.com/document/product/1552/70901)中规则列表的优先级，本接口需要传入站点 ID 下完整的规则 ID 列表，规则 ID 列表可以通过[查询七层加速规则](https://cloud.tencent.com/document/product/1552/115820)接口获取，最终优先级顺序将调整成规则 ID 列表的顺序，从前往后执行。
 * @method Models\ModifyL7AccSettingResponse ModifyL7AccSetting(Models\ModifyL7AccSettingRequest $req) 本接口用于修改[站点加速](https://cloud.tencent.com/document/product/1552/96193)全局配置。
 * @method Models\ModifyLoadBalancerResponse ModifyLoadBalancer(Models\ModifyLoadBalancerRequest $req) 修改负载均衡实例配置。负载均衡功能内测中，如您需要使用请 [联系我们](https://cloud.tencent.com/online-service)。
 * @method Models\ModifyMultiPathGatewayResponse ModifyMultiPathGateway(Models\ModifyMultiPathGatewayRequest $req) 通过本接口修改多通道安全加速网关信息，如名称、网关 ID、IP、端口等。
 * @method Models\ModifyMultiPathGatewayLineResponse ModifyMultiPathGatewayLine(Models\ModifyMultiPathGatewayLineRequest $req) 通过本接口修改接入多通道安全加速网关的线路，包括 EdgeOne 四层代理线路、自定义线路。
 * @method Models\ModifyMultiPathGatewaySecretKeyResponse ModifyMultiPathGatewaySecretKey(Models\ModifyMultiPathGatewaySecretKeyRequest $req) 通过本接口修改接入多通道安全加速网关的密钥，客户基于接入密钥签名接入多通道安全加速网关，修改后原密钥失效。
 * @method Models\ModifyMultiPathGatewayStatusResponse ModifyMultiPathGatewayStatus(Models\ModifyMultiPathGatewayStatusRequest $req) 更新多通道安全网关状态。
 * @method Models\ModifyOriginACLResponse ModifyOriginACL(Models\ModifyOriginACLRequest $req) 本接口用于对七层加速域名/四层代理实例启用/关闭特定回源 IP 网段回源。单次支持提交的七层加速域名的数量最大为 200，四层代理实例的数量最大为 100，支持七层加速域名/四层代理实例混合提交，总实例个数最大为 200。如需变更超过 200 个实例，请通过本接口分批提交。
 * @method Models\ModifyOriginGroupResponse ModifyOriginGroup(Models\ModifyOriginGroupRequest $req) 修改源站组配置，新提交的源站记录将会覆盖原有源站组中的源站记录。
 * @method Models\ModifyPlanResponse ModifyPlan(Models\ModifyPlanRequest $req) 修改套餐配置。目前仅支持修改预付费套餐的自动续费开关。
 * @method Models\ModifyRealtimeLogDeliveryTaskResponse ModifyRealtimeLogDeliveryTask(Models\ModifyRealtimeLogDeliveryTaskRequest $req) 通过本接口修改实时日志投递任务配置。本接口有如下限制：<li>不支持修改实时日志投递任务目的地类型（TaskType）；</li><li>不支持修改数据投递类型（LogType）</li><li>不支持修改数据投递区域（Area）</li><li>当原实时日志投递任务的目的地为腾讯云 CLS 时，不支持修改目的地详细配置，如日志集、日志主题。</li>
 * @method Models\ModifyRuleResponse ModifyRule(Models\ModifyRuleRequest $req) 本接口为旧版本修改规则引擎接口，EdgeOne 于 2025 年 1 月 21 日已对规则引擎相关接口全面升级，新版本修改七层加速规则接口详情请参考 [ModifyL7AccRule](https://cloud.tencent.com/document/product/1552/115818)。
<p style="color: red;">注意：自 2025 年 1 月 21 日起，旧版接口停止更新迭代，后续新增功能将仅在新版接口中提供，旧版接口支持的原有能力将不受影响。为避免在使用旧版接口时出现数据字段冲突，建议您尽早迁移到新版规则引擎接口。</p>
 * @method Models\ModifySecurityAPIResourceResponse ModifySecurityAPIResource(Models\ModifySecurityAPIResourceRequest $req) 该接口用于修改 API 资源。
 * @method Models\ModifySecurityAPIServiceResponse ModifySecurityAPIService(Models\ModifySecurityAPIServiceRequest $req) 该接口用于修改 API 服务。
 * @method Models\ModifySecurityClientAttesterResponse ModifySecurityClientAttester(Models\ModifySecurityClientAttesterRequest $req) 修改客户端认证选项。
 * @method Models\ModifySecurityIPGroupResponse ModifySecurityIPGroup(Models\ModifySecurityIPGroupRequest $req) 修改安全 IP 组。
 * @method Models\ModifySecurityJSInjectionRuleResponse ModifySecurityJSInjectionRule(Models\ModifySecurityJSInjectionRuleRequest $req) 修改 JavaScript 注入规则。
 * @method Models\ModifySecurityPolicyResponse ModifySecurityPolicy(Models\ModifySecurityPolicyRequest $req) 修改Web&Bot安全配置。
 * @method Models\ModifyWebSecurityTemplateResponse ModifyWebSecurityTemplate(Models\ModifyWebSecurityTemplateRequest $req) 修改安全策略配置模板
 * @method Models\ModifyZoneResponse ModifyZone(Models\ModifyZoneRequest $req) 修改站点信息。
 * @method Models\ModifyZoneSettingResponse ModifyZoneSetting(Models\ModifyZoneSettingRequest $req) 本接口为旧版，EdgeOne 已对规则引擎相关接口全面升级，详情请参考 [ModifyL7AccSetting](https://cloud.tencent.com/document/product/1552/115817)。
 * @method Models\ModifyZoneStatusResponse ModifyZoneStatus(Models\ModifyZoneStatusRequest $req) 用于开启，关闭站点。
 * @method Models\RefreshMultiPathGatewaySecretKeyResponse RefreshMultiPathGatewaySecretKey(Models\RefreshMultiPathGatewaySecretKeyRequest $req) 通过本接口刷新多通道安全加速网关的密钥。客户基于接入密钥签名接入多通道安全加速网关。每个站点下只有一个密钥，可用于接入该站点下的所有网关，刷新密钥后，原始密钥会失效。
 * @method Models\RenewPlanResponse RenewPlan(Models\RenewPlanRequest $req) 当您的套餐需要延长有效期，可以通过该接口进行续费。套餐续费仅支持个人版，基础版，标准版套餐。
> 费用详情可参考 [套餐费用](https://cloud.tencent.com/document/product/1552/94158)
 * @method Models\UpgradePlanResponse UpgradePlan(Models\UpgradePlanRequest $req) 当您需要使用高等级套餐才拥有的功能，可以通过本接口升级套餐，仅支持个人版，基础版套餐进行升级。
> 不同类型 Edgeone 计费套餐区别参考 [Edgeone计费套餐选型对比](https://cloud.tencent.com/document/product/1552/94165)
计费套餐升级规则以及资费详情参考 [Edgeone计费套餐升配说明](https://cloud.tencent.com/document/product/1552/95291)
如果需要将套餐升级至企业版，请 [联系我们](https://cloud.tencent.com/online-service)
 * @method Models\VerifyOwnershipResponse VerifyOwnership(Models\VerifyOwnershipRequest $req) 在 CNAME 接入模式下，您需要对站点或者域名的归属权进行验证，可以通过本接口触发验证。若站点通过归属权验证后，后续添加域名无需再验证。详情参考 [站点/域名归属权验证](https://cloud.tencent.com/document/product/1552/70789)。

在 NS 接入模式下，您也可以通过本接口来查询 NS 服务器是否切换成功，详情参考 [修改 DNS 服务器](https://cloud.tencent.com/document/product/1552/90452)。
 */

class TeoClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "teo.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "teo";

    /**
     * @var string
     */
    protected $version = "2022-09-01";

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
        $respClass = "TencentCloud"."\\".ucfirst("teo")."\\"."V20220901\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
