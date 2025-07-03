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

namespace TencentCloud\Cdn\V20180606;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cdn\V20180606\Models as Models;

/**
 * @method Models\AddCLSTopicDomainsResponse AddCLSTopicDomains(Models\AddCLSTopicDomainsRequest $req) AddCLSTopicDomains 用于新增域名到某日志主题下
 * @method Models\AddCdnDomainResponse AddCdnDomain(Models\AddCdnDomainRequest $req) AddCdnDomain 用于新增内容分发网络加速域名。1分钟内最多可新增100个域名。
 * @method Models\CreateClsLogTopicResponse CreateClsLogTopic(Models\CreateClsLogTopicRequest $req) CreateClsLogTopic 用于创建日志主题。注意：一个日志集下至多可创建10个日志主题。
 * @method Models\CreateDiagnoseUrlResponse CreateDiagnoseUrl(Models\CreateDiagnoseUrlRequest $req) ### <font color=red>**该接口已废弃** </font><br>
CreateDiagnoseUrl 用于添加域名诊断任务URL。
 * @method Models\CreateEdgePackTaskResponse CreateEdgePackTask(Models\CreateEdgePackTaskRequest $req) 动态打包任务提交接口
 * @method Models\CreateScdnDomainResponse CreateScdnDomain(Models\CreateScdnDomainRequest $req) SCDN平台已经正式下线，接口开始预下线处理

CreateScdnDomain 用于创建 SCDN 加速域名
 * @method Models\CreateScdnFailedLogTaskResponse CreateScdnFailedLogTask(Models\CreateScdnFailedLogTaskRequest $req) SCDN平台已经正式下线，接口开始预下线处理

CreateScdnFailedLogTask 用于重试创建失败的事件日志任务
 * @method Models\CreateScdnLogTaskResponse CreateScdnLogTask(Models\CreateScdnLogTaskRequest $req) SCDN平台已经正式下线，接口开始预下线处理

CreateScdnLogTask 用于创建事件日志任务
 * @method Models\CreateVerifyRecordResponse CreateVerifyRecord(Models\CreateVerifyRecordRequest $req) CreateVerifyRecord 用于生成一条子域名解析，提示客户添加到域名解析上，用于泛域名及域名取回校验归属权。
生成的解析记录可通过 [VerifyDomainRecord](https://cloud.tencent.com/document/product/228/48117) 完成归属权校验。
注意：生成的解析记录有效期为24小时，超过24小时后，需重新生成。
具体流程可参考：[使用API接口进行域名归属校验](https://cloud.tencent.com/document/product/228/61702#.E6.96.B9.E6.B3.95.E4.B8.89.EF.BC.9Aapi-.E6.8E.A5.E5.8F.A3.E6.93.8D.E4.BD.9C)
 * @method Models\DeleteCdnDomainResponse DeleteCdnDomain(Models\DeleteCdnDomainRequest $req) DeleteCdnDomain 用于删除指定加速域名
 * @method Models\DeleteClsLogTopicResponse DeleteClsLogTopic(Models\DeleteClsLogTopicRequest $req) DeleteClsLogTopic 用于删除日志主题。注意：删除后，所有该日志主题下绑定域名的日志将不再继续投递至该主题，已经投递的日志将会被全部清空。生效时间约为 5~15 分钟。
 * @method Models\DeleteScdnDomainResponse DeleteScdnDomain(Models\DeleteScdnDomainRequest $req) SCDN平台已经正式下线，接口开始预下线处理

删除SCDN域名
 * @method Models\DescribeBillingDataResponse DescribeBillingData(Models\DescribeBillingDataRequest $req) DescribeBillingData 用于查询实际计费数据明细。
 * @method Models\DescribeCcDataResponse DescribeCcData(Models\DescribeCcDataRequest $req) SCDN平台下线，接口开始预下线处理

CC统计数据查询
 * @method Models\DescribeCdnDataResponse DescribeCdnData(Models\DescribeCdnDataRequest $req) DescribeCdnData 用于查询 CDN 实时访问监控数据，支持以下指标查询：

+ 流量（单位为 byte）
+ 带宽（单位为 bps）
+ 请求数（单位为 次）
+ 命中请求数（单位为 次）
+ 请求命中率（单位为 %）
+ 命中流量（单位为 byte）
+ 流量命中率（单位为 %）
+ 状态码 2xx 汇总及各 2 开头状态码明细（单位为 个）
+ 状态码 3xx 汇总及各 3 开头状态码明细（单位为 个）
+ 状态码 4xx 汇总及各 4 开头状态码明细（单位为 个）
+ 状态码 5xx 汇总及各 5 开头状态码明细（单位为 个）
 * @method Models\DescribeCdnDomainLogsResponse DescribeCdnDomainLogs(Models\DescribeCdnDomainLogsRequest $req) DescribeCdnDomainLogs 用于查询访问日志下载地址，仅支持 30 天以内的境内、境外访问日志下载链接查询。
 * @method Models\DescribeCdnIpResponse DescribeCdnIp(Models\DescribeCdnIpRequest $req) DescribeCdnIp 用于查询 CDN IP 归属。
（注意：此接口请求频率限制以 CDN 侧限制为准：200次/10分钟）
 * @method Models\DescribeCdnOriginIpResponse DescribeCdnOriginIp(Models\DescribeCdnOriginIpRequest $req) ### <font color=red>**该接口已废弃** </font><br>
本接口（DescribeCdnOriginIp）用于查询 CDN 回源节点的IP信息。（注：替换接口为DescribeIpStatus）
 * @method Models\DescribeCertDomainsResponse DescribeCertDomains(Models\DescribeCertDomainsRequest $req) DescribeCertDomains 用于校验SSL证书并提取证书中包含的域名。
 * @method Models\DescribeDDoSDataResponse DescribeDDoSData(Models\DescribeDDoSDataRequest $req) SCDN平台下线，接口开始预下线处理

DDoS统计数据查询
 * @method Models\DescribeDiagnoseReportResponse DescribeDiagnoseReport(Models\DescribeDiagnoseReportRequest $req) ### <font color=red>**该接口已废弃** </font><br>
DescribeDiagnoseReport 用于获取指定报告id的内容。
 * @method Models\DescribeDistrictIspDataResponse DescribeDistrictIspData(Models\DescribeDistrictIspDataRequest $req) 查询指定域名的区域、运营商明细数据
注意事项：接口尚未全面开放，未在内测名单中的账号不支持调用
 * @method Models\DescribeDomainsResponse DescribeDomains(Models\DescribeDomainsRequest $req) DescribeDomains 用于查询内容分发网络加速域名（含境内、境外）基本配置信息，包括项目ID、服务状态，业务类型、创建时间、更新时间等信息。
 * @method Models\DescribeDomainsConfigResponse DescribeDomainsConfig(Models\DescribeDomainsConfigRequest $req) DescribeDomainsConfig 用于查询内容分发网络加速域名（含境内、境外）的所有配置信息。
 * @method Models\DescribeEdgePackTaskStatusResponse DescribeEdgePackTaskStatus(Models\DescribeEdgePackTaskStatusRequest $req) DescribeEdgePackTaskStatus 用于查询动态打包任务状态列表
 * @method Models\DescribeEventLogDataResponse DescribeEventLogData(Models\DescribeEventLogDataRequest $req) SCDN平台下线，接口开始预下线处理

DescribeEventLogData 用于查询事件日志统计曲线
 * @method Models\DescribeHttpsPackagesResponse DescribeHttpsPackages(Models\DescribeHttpsPackagesRequest $req) DescribeHttpsPackages 用于查询 CDN HTTPS请求包详情。
 * @method Models\DescribeImageConfigResponse DescribeImageConfig(Models\DescribeImageConfigRequest $req) DescribeImageConfig 用于获取域名图片优化的当前配置，支持Webp、TPG、 Guetzli 和 Avif。
 * @method Models\DescribeIpStatusResponse DescribeIpStatus(Models\DescribeIpStatusRequest $req) DescribeIpStatus 用于查询域名所在加速平台的边缘节点、回源节点明细。注意事项：暂不支持查询边缘节点信息并且数据会存在一定延迟。

>?  若您的业务已迁移至 CDN 控制台，请参考<a href="https://cloud.tencent.com/document/api/228/41954"> CDN 接口文档</a>，使用  CDN 相关API 进行操作。
 * @method Models\DescribeIpVisitResponse DescribeIpVisit(Models\DescribeIpVisitRequest $req) DescribeIpVisit 用于查询 5 分钟活跃用户数，及日活跃用户数明细

+ 5 分钟活跃用户数：根据日志中客户端 IP，5 分钟粒度去重统计
+ 日活跃用户数：根据日志中客户端 IP，按天粒度去重统计
 * @method Models\DescribeMapInfoResponse DescribeMapInfo(Models\DescribeMapInfoRequest $req) DescribeMapInfo 用于查询省份对应的 ID，运营商对应的 ID 信息。
 * @method Models\DescribeOriginDataResponse DescribeOriginData(Models\DescribeOriginDataRequest $req) DescribeOriginData 用于查询 CDN 实时回源监控数据，支持以下指标查询：

+ 回源流量（单位为 byte）
+ 回源带宽（单位为 bps）
+ 回源请求数（单位为 次）
+ 回源失败请求数（单位为 次）
+ 回源失败率（单位为 %，小数点后保留两位）
+ 回源状态码 2xx 汇总及各 2 开头回源状态码明细（单位为 个）
+ 回源状态码 3xx 汇总及各 3 开头回源状态码明细（单位为 个）
+ 回源状态码 4xx 汇总及各 4 开头回源状态码明细（单位为 个）
+ 回源状态码 5xx 汇总及各 5 开头回源状态码明细（单位为 个）
 * @method Models\DescribePayTypeResponse DescribePayType(Models\DescribePayTypeRequest $req) DescribePayType 用于查询用户的计费类型，计费周期等信息。
 * @method Models\DescribePurgeQuotaResponse DescribePurgeQuota(Models\DescribePurgeQuotaRequest $req) DescribePurgeQuota 用于查询账户刷新配额和每日可用量。
 * @method Models\DescribePurgeTasksResponse DescribePurgeTasks(Models\DescribePurgeTasksRequest $req) DescribePurgeTasks 用于查询提交的 URL 刷新、目录刷新记录及执行进度，通过 PurgePathCache 与 PurgeUrlsCache 接口提交的任务均可通过此接口进行查询。
 * @method Models\DescribePushQuotaResponse DescribePushQuota(Models\DescribePushQuotaRequest $req) DescribePushQuota  用于查询预热配额和每日可用量。
 * @method Models\DescribePushTasksResponse DescribePushTasks(Models\DescribePushTasksRequest $req) DescribePushTasks  用于查询预热任务提交历史记录及执行进度。
 * @method Models\DescribeReportDataResponse DescribeReportData(Models\DescribeReportDataRequest $req) DescribeReportData 用于查询域名/项目维度的日/周/月报表数据。
 * @method Models\DescribeScdnBotDataResponse DescribeScdnBotData(Models\DescribeScdnBotDataRequest $req) SCDN平台已经正式下线，接口开始预下线处理

获取BOT统计数据列表
 * @method Models\DescribeScdnBotRecordsResponse DescribeScdnBotRecords(Models\DescribeScdnBotRecordsRequest $req) SCDN平台已经正式下线，接口开始预下线处理

查询BOT会话记录列表
 * @method Models\DescribeScdnConfigResponse DescribeScdnConfig(Models\DescribeScdnConfigRequest $req) SCDN平台已经正式下线，接口开始预下线处理

DescribeScdnConfig 用于查询指定 SCDN 加速域名的安全相关配置
 * @method Models\DescribeScdnIpStrategyResponse DescribeScdnIpStrategy(Models\DescribeScdnIpStrategyRequest $req) SCDN平台已经正式下线，接口开始预下线处理

查询在SCDN IP安全策略
 * @method Models\DescribeScdnTopDataResponse DescribeScdnTopData(Models\DescribeScdnTopDataRequest $req) SCDN平台已经正式下线，接口开始预下线处理

获取SCDN的Top数据
 * @method Models\DescribeTopDataResponse DescribeTopData(Models\DescribeTopDataRequest $req) DescribeTopData 通过入参 Metric 和 Filter 组合不同，可以查询以下排序数据：

+ 依据总流量、总请求数对访问 IP 排序，从大至小返回 TOP 100 IP
+ 依据总流量、总请求数对访问 Refer 排序，从大至小返回 TOP 100 Refer
+ 依据总流量、总请求数对访问 设备 排序，从大至小返回 设备类型
+ 依据总流量、总请求数对访问 操作系统 排序，从大至小返回 操作系统
+ 依据总流量、总请求数对访问 浏览器 排序，从大至小返回 浏览器

注意：
+ 仅支持 90 天内数据查询，且从2021年09月20日开始有数据
 * @method Models\DescribeTrafficPackagesResponse DescribeTrafficPackages(Models\DescribeTrafficPackagesRequest $req) DescribeTrafficPackages 用于查询 CDN 流量包详情。
 * @method Models\DescribeUrlViolationsResponse DescribeUrlViolations(Models\DescribeUrlViolationsRequest $req) DescribeUrlViolations 用于查询被 CDN 系统扫描到的域名违规 URL 列表及当前状态。
对应内容分发网络控制台【内容合规】页面。
 * @method Models\DescribeWafDataResponse DescribeWafData(Models\DescribeWafDataRequest $req) SCDN平台下线，接口开始预下线处理

Waf统计数据查询
 * @method Models\DisableCachesResponse DisableCaches(Models\DisableCachesRequest $req) ### <font color=red>**该接口已废弃** </font><br>
DisableCaches 用于禁用 CDN 上指定 URL 的访问，禁用完成后，中国境内访问会直接返回 403。
 * @method Models\DisableClsLogTopicResponse DisableClsLogTopic(Models\DisableClsLogTopicRequest $req) DisableClsLogTopic 用于停止日志主题投递。注意：停止后，所有绑定该日志主题域名的日志将不再继续投递至该主题，已经投递的日志将会继续保留。生效时间约为 5~15 分钟。

 * @method Models\DuplicateDomainConfigResponse DuplicateDomainConfig(Models\DuplicateDomainConfigRequest $req) 拷贝参考域名的配置至新域名。暂不支持自有证书以及定制化配置
 * @method Models\EnableCachesResponse EnableCaches(Models\EnableCachesRequest $req) ### <font color=red>**该接口已废弃** </font><br>
EnableCaches 用于解禁手工封禁的 URL，解禁成功后，全网生效时间约 5~10 分钟。
 * @method Models\EnableClsLogTopicResponse EnableClsLogTopic(Models\EnableClsLogTopicRequest $req) EnableClsLogTopic 用于启动日志主题投递。注意：启动后，所有绑定该日志主题域名的日志将继续投递至该主题。生效时间约为 5~15 分钟。
 * @method Models\GetDisableRecordsResponse GetDisableRecords(Models\GetDisableRecordsRequest $req) ### <font color=red>**该接口已废弃** </font><br>
GetDisableRecords 用于查询资源禁用历史，及 URL 当前状态。
 * @method Models\ListClsLogTopicsResponse ListClsLogTopics(Models\ListClsLogTopicsRequest $req) ListClsLogTopics 用于显示日志主题列表。注意：一个日志集下至多含10个日志主题。
 * @method Models\ListClsTopicDomainsResponse ListClsTopicDomains(Models\ListClsTopicDomainsRequest $req) ListClsTopicDomains 用于获取某日志主题下绑定的域名列表。
 * @method Models\ListDiagnoseReportResponse ListDiagnoseReport(Models\ListDiagnoseReportRequest $req) ### <font color=red>**该接口已废弃** </font><br>
ListDiagnoseReport 用于获取用户诊断URL访问后各个子任务的简要详情。
 * @method Models\ListScdnDomainsResponse ListScdnDomains(Models\ListScdnDomainsRequest $req) SCDN平台已经正式下线，接口开始预下线处理

ListScdnDomains 用于查询 SCDN 安全加速域名列表，及域名基本配置信息
 * @method Models\ListScdnLogTasksResponse ListScdnLogTasks(Models\ListScdnLogTasksRequest $req) SCDN平台已经正式下线，接口开始预下线处理

ListScdnLogTasks 用于查询SCDN日志下载任务列表,以及展示下载任务基本信息
 * @method Models\ListScdnTopBotDataResponse ListScdnTopBotData(Models\ListScdnTopBotDataRequest $req) SCDN平台已经正式下线，接口开始预下线处理

获取Bot攻击的Top数据列表
 * @method Models\ListTopBotDataResponse ListTopBotData(Models\ListTopBotDataRequest $req) SCDN平台下线，接口开始预下线处理

获取Bot攻击的Top信息
 * @method Models\ListTopCcDataResponse ListTopCcData(Models\ListTopCcDataRequest $req) SCDN平台下线，接口开始预下线处理

获取CC攻击Top数据
 * @method Models\ListTopClsLogDataResponse ListTopClsLogData(Models\ListTopClsLogDataRequest $req) 通过CLS日志计算Top信息。支持近7天的日志数据。
 * @method Models\ListTopDDoSDataResponse ListTopDDoSData(Models\ListTopDDoSDataRequest $req) SCDN平台下线，接口开始预下线处理

获取DDoS攻击Top数据
 * @method Models\ListTopDataResponse ListTopData(Models\ListTopDataRequest $req) ListTopData 通过入参 Metric 和 Filter 组合不同，可以查询以下排序数据：

+ 依据总流量、总请求数对访问 URL 排序，从大至小返回 TOP 1000 URL
+ 依据总流量、总请求数对客户端省份排序，从大至小返回省份列表
+ 依据总流量、总请求数对客户端运营商排序，从大至小返回运营商列表
+ 依据总流量、峰值带宽、总请求数、平均命中率、2XX/3XX/4XX/5XX 状态码对域名排序，从大至小返回域名列表
+ 依据总回源流量、回源峰值带宽、总回源请求数、平均回源失败率、2XX/3XX/4XX/5XX 回源状态码对域名排序，从大至小返回域名列表

注意：仅支持 90 天内数据查询
 * @method Models\ListTopWafDataResponse ListTopWafData(Models\ListTopWafDataRequest $req) SCDN平台下线，接口开始预下线处理

获取Waf攻击Top数据
 * @method Models\ManageClsTopicDomainsResponse ManageClsTopicDomains(Models\ManageClsTopicDomainsRequest $req) ManageClsTopicDomains 用于管理某日志主题下绑定的域名列表。
 * @method Models\ModifyDomainConfigResponse ModifyDomainConfig(Models\ModifyDomainConfigRequest $req) ModifyDomainConfig 用于修改内容分发网络加速域名配置信息
注意：
Route 字段，使用点分隔，最后一段称为叶子节点，非叶子节点配置保持不变；
Value 字段，使用 json 进行序列化，其中固定 update 作为 key，配置路径值参考 https://cloud.tencent.com/document/product/228/41116 接口各配置项复杂类型，为配置路径对应复杂类型下的节点。
操作审计相关：接口的入参可能包含密钥等敏感信息，所以此接口的入参不会上报到操作审计。
 * @method Models\ModifyPurgeFetchTaskStatusResponse ModifyPurgeFetchTaskStatus(Models\ModifyPurgeFetchTaskStatusRequest $req) ModifyPurgeFetchTaskStatus 用于上报定时刷新预热任务执行状态
 * @method Models\PurgePathCacheResponse PurgePathCache(Models\PurgePathCacheRequest $req) PurgePathCache 用于批量提交目录刷新，根据域名的加速区域进行对应区域的刷新。
默认情况下境内、境外加速区域每日目录刷新额度为各 100 条，每次最多可提交 500 条。
 * @method Models\PurgeUrlsCacheResponse PurgeUrlsCache(Models\PurgeUrlsCacheRequest $req) PurgeUrlsCache 用于批量提交 URL 进行刷新，根据 URL 中域名的当前加速区域进行对应区域的刷新。
默认情况下境内、境外加速区域每日 URL 刷新额度各为 10000 条，每次最多可提交 1000 条。
 * @method Models\PushUrlsCacheResponse PushUrlsCache(Models\PushUrlsCacheRequest $req) PushUrlsCache 用于将指定 URL 资源列表加载至 CDN 节点，支持指定加速区域预热。
默认情况下境内、境外每日预热 URL 限额为各 1000 条，每次最多可提交 500 条 URL，每次提交的数量会消耗配额总数。如：1次提交500条URL全球预热，此时境内、境外预热 URL 各剩余 500条。注意：中国境外区域预热，资源默认加载至中国境外边缘节点。
 * @method Models\SearchClsLogResponse SearchClsLog(Models\SearchClsLogRequest $req) SearchClsLog 用于 CLS 日志检索。支持检索今天，24小时（可选近7中的某一天），近7天的日志数据。
 * @method Models\StartCdnDomainResponse StartCdnDomain(Models\StartCdnDomainRequest $req) StartCdnDomain 用于启用已停用域名的加速服务
 * @method Models\StartScdnDomainResponse StartScdnDomain(Models\StartScdnDomainRequest $req) SCDN平台已经正式下线，接口开始预下线处理

StartScdnDomain 用于开启域名的安全防护配置
 * @method Models\StopCdnDomainResponse StopCdnDomain(Models\StopCdnDomainRequest $req) StopCdnDomain 用于停止域名的加速服务。
注意：停止加速服务后，访问至加速节点的请求将会直接返回 404。为避免对您的业务造成影响，请在停止加速服务前将解析切走。
 * @method Models\StopScdnDomainResponse StopScdnDomain(Models\StopScdnDomainRequest $req) SCDN平台已经正式下线，接口开始预下线处理

StopScdnDomain 用于关闭域名的安全防护配置
 * @method Models\UpdateDomainConfigResponse UpdateDomainConfig(Models\UpdateDomainConfigRequest $req) UpdateDomainConfig 用于修改内容分发网络加速域名配置信息。
注意：如果需要更新复杂类型的配置项，必须传递整个对象的所有属性，未传递的属性将使用默认值，建议通过查询接口获取配置属性后，直接修改后传递给本接口。
操作审计相关：接口的入参可能包含密钥等敏感信息，所以此接口的入参不会上报到操作审计。
 * @method Models\UpdateImageConfigResponse UpdateImageConfig(Models\UpdateImageConfigRequest $req) UpdateImageConfig 用于更新控制台图片优化的相关配置，支持Webp、TPG、 Guetzli 和 Avif。 
 * @method Models\UpdatePayTypeResponse UpdatePayType(Models\UpdatePayTypeRequest $req) 本接口(UpdatePayType)用于修改账号计费类型，暂不支持月结用户或子账号修改。
 * @method Models\UpdateScdnDomainResponse UpdateScdnDomain(Models\UpdateScdnDomainRequest $req) SCDN平台已经正式下线，接口开始预下线处理

UpdateScdnDomain 用于修改 SCDN 加速域名安全相关配置
 * @method Models\VerifyDomainRecordResponse VerifyDomainRecord(Models\VerifyDomainRecordRequest $req) VerifyDomainRecord 用于验证域名解析值。
验证域名解析记录值前，您需要通过 [CreateVerifyRecord](https://cloud.tencent.com/document/product/228/48118) 生成校验解析值，验证通过后，24小时有效。
具体流程可参考：[使用API接口进行域名归属校验](https://cloud.tencent.com/document/product/228/61702#.E6.96.B9.E6.B3.95.E4.B8.89.EF.BC.9Aapi-.E6.8E.A5.E5.8F.A3.E6.93.8D.E4.BD.9C)
 */

class CdnClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cdn.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cdn";

    /**
     * @var string
     */
    protected $version = "2018-06-06";

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
        $respClass = "TencentCloud"."\\".ucfirst("cdn")."\\"."V20180606\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
