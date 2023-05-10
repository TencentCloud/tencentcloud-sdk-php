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

namespace TencentCloud\Live\V20180801;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Live\V20180801\Models as Models;

/**
 * @method Models\AddDelayLiveStreamResponse AddDelayLiveStream(Models\AddDelayLiveStreamRequest $req) 针对大型活动直播，通过对直播流设置延时来控制现场与观众播放画面的时间间隔，避免突发状况造成影响。

注意：如果在推流前设置延播，需要提前5分钟设置，目前该接口只支持流粒度。
 * @method Models\AddLiveDomainResponse AddLiveDomain(Models\AddLiveDomainRequest $req) 添加域名，一次只能提交一个域名。域名必须已备案。
 * @method Models\AddLiveWatermarkResponse AddLiveWatermark(Models\AddLiveWatermarkRequest $req) 添加水印，成功返回水印 ID 后，需要调用[CreateLiveWatermarkRule](/document/product/267/32629)接口将水印 ID 绑定到流使用。
水印数量上限 100，超过后需要先删除，再添加。
 * @method Models\AuthenticateDomainOwnerResponse AuthenticateDomainOwner(Models\AuthenticateDomainOwnerRequest $req) 验证用户是否拥有特定直播域名。
 * @method Models\CancelCommonMixStreamResponse CancelCommonMixStream(Models\CancelCommonMixStreamRequest $req) 该接口用来取消混流。用法与 mix_streamv2.cancel_mix_stream 基本一致。
 * @method Models\CreateCommonMixStreamResponse CreateCommonMixStream(Models\CreateCommonMixStreamRequest $req) 该接口用来创建通用混流。用法与旧接口 mix_streamv2.start_mix_stream_advanced 基本一致。
注意：当前最多支持16路混流。
最佳实践：https://cloud.tencent.com/document/product/267/45566
 * @method Models\CreateLiveCallbackRuleResponse CreateLiveCallbackRule(Models\CreateLiveCallbackRuleRequest $req) 创建回调规则，需要先调用[CreateLiveCallbackTemplate](/document/product/267/32637)接口创建回调模板，将返回的模板id绑定到域名/路径进行使用。
<br>回调协议相关文档：[事件消息通知](/document/product/267/32744)。
 * @method Models\CreateLiveCallbackTemplateResponse CreateLiveCallbackTemplate(Models\CreateLiveCallbackTemplateRequest $req) 创建回调模板，数量上限：50，成功返回模板id后，需要调用[CreateLiveCallbackRule](/document/product/267/32638)接口将模板 ID 绑定到域名/路径使用。
<br>回调协议相关文档：[事件消息通知](/document/product/267/32744)。
注意：至少填写一个回调 URL。
 * @method Models\CreateLivePullStreamTaskResponse CreateLivePullStreamTask(Models\CreateLivePullStreamTaskRequest $req) 创建直播拉流任务。支持将外部已有的点播文件，或者直播源拉取过来转推到指定的目标地址。
注意：
1. 默认支持任务数上限20个，如有特殊需求，可通过提单到售后进行评估增加上限。
2. 源流视频编码目前只支持: H264, H265。其他编码格式建议先进行转码处理。
3. 源流音频编码目前只支持: AAC。其他编码格式建议先进行转码处理。
4. 可在控制台开启过期自动清理，避免过期任务占用任务数额度。
5. 拉流转推功能为计费增值服务，计费规则详情可参见[计费文档](https://cloud.tencent.com/document/product/267/53308)。
6. 拉流转推功能仅提供内容拉取与推送服务，请确保内容已获得授权并符合内容传播相关的法律法规。若内容有侵权或违规相关问题，云直播会停止相关的功能服务并保留追究法律责任的权利。
 * @method Models\CreateLiveRecordResponse CreateLiveRecord(Models\CreateLiveRecordRequest $req) - 使用前提
  1. 录制文件存放于点播平台，所以用户如需使用录制功能，需首先自行开通点播服务。
  2. 录制文件存放后相关费用（含存储以及下行播放流量）按照点播平台计费方式收取，具体请参考 [对应文档](https://cloud.tencent.com/document/product/266/2838)。

- 模式说明
  该接口支持两种录制模式：
  1. 定时录制模式【默认模式】。
    需要传入开始时间与结束时间，录制任务根据起止时间自动开始与结束。在所设置结束时间过期之前（且未调用StopLiveRecord提前终止任务），录制任务都是有效的，期间多次断流然后重推都会启动录制任务。
  2. 实时视频录制模式。
    忽略传入的开始时间，在录制任务创建后立即开始录制，录制时长支持最大为30分钟，如果传入的结束时间与当前时间差大于30分钟，则按30分钟计算，实时视频录制主要用于录制精彩视频场景，时长建议控制在5分钟以内。

- 注意事项
  1. 调用接口超时设置应大于3秒，小于3秒重试以及按不同起止时间调用都有可能产生重复录制任务，进而导致额外录制费用。
  2. 受限于音视频文件格式（FLV/MP4/HLS）对编码类型的支持，视频编码类型支持 H.264，音频编码类型支持 AAC。
  3. 为避免恶意或非主观的频繁 API 请求，对定时录制模式最大创建任务数做了限制：其中，当天可以创建的最大任务数不超过4000（不含已删除的任务）；当前时刻并发运行的任务数不超过400。有超出此限制的需要提工单申请。
  4. 此调用方式暂时不支持海外推流录制。
 * @method Models\CreateLiveRecordRuleResponse CreateLiveRecordRule(Models\CreateLiveRecordRuleRequest $req) 创建录制规则，需要先调用[CreateLiveRecordTemplate](/document/product/267/32614)接口创建录制模板，将返回的模板id绑定到流使用。
<br>录制相关文档：[直播录制](/document/product/267/32739)。
 * @method Models\CreateLiveRecordTemplateResponse CreateLiveRecordTemplate(Models\CreateLiveRecordTemplateRequest $req) 创建录制模板，数量上限：50，成功返回模板id后，需要调用[CreateLiveRecordRule](/document/product/267/32615)接口，将模板id绑定到流进行使用。
<br>录制相关文档：[直播录制](/document/product/267/32739)。
 * @method Models\CreateLiveSnapshotRuleResponse CreateLiveSnapshotRule(Models\CreateLiveSnapshotRuleRequest $req) 创建截图规则，需要先调用[CreateLiveSnapshotTemplate](/document/product/267/32624)接口创建截图模板，然后将返回的模板 ID 绑定到流进行使用。
<br>截图相关文档：[直播截图](/document/product/267/32737)。
注意：单个域名仅支持关联一个截图模板。
 * @method Models\CreateLiveSnapshotTemplateResponse CreateLiveSnapshotTemplate(Models\CreateLiveSnapshotTemplateRequest $req) 创建截图模板，数量上限：50，成功返回模板id后，需要调用[CreateLiveSnapshotRule](/document/product/267/32625)接口，将模板id绑定到流使用。
<br>截图相关文档：[直播截图](/document/product/267/32737)。
 * @method Models\CreateLiveTimeShiftRuleResponse CreateLiveTimeShiftRule(Models\CreateLiveTimeShiftRuleRequest $req) 创建直播时移规则，需要先调用[CreateLiveTimeShiftTemplate](/document/product/267/86169)接口创建直播时移模板，将返回的模板id绑定到流使用。
<br>直播时移相关文档：[直播时移](/document/product/267/86134)。
 * @method Models\CreateLiveTimeShiftTemplateResponse CreateLiveTimeShiftTemplate(Models\CreateLiveTimeShiftTemplateRequest $req) 创建直播时移模板。
 * @method Models\CreateLiveTranscodeRuleResponse CreateLiveTranscodeRule(Models\CreateLiveTranscodeRuleRequest $req) 创建转码规则，数量上限：50，需要先调用[CreateLiveTranscodeTemplate](/document/product/267/32646)接口创建转码模板，将返回的模板id绑定到流使用。
<br>转码相关文档：[直播转封装及转码](/document/product/267/32736)。
 * @method Models\CreateLiveTranscodeTemplateResponse CreateLiveTranscodeTemplate(Models\CreateLiveTranscodeTemplateRequest $req) 创建转码模板，数量上限：50，成功返回模板id后，需要调用[CreateLiveTranscodeRule](/document/product/267/32647)接口，将返回的模板id绑定到流使用。
<br>转码相关文档：[直播转封装及转码](/document/product/267/32736)。
 * @method Models\CreateLiveWatermarkRuleResponse CreateLiveWatermarkRule(Models\CreateLiveWatermarkRuleRequest $req) 创建水印规则，需要先调用[AddLiveWatermark](/document/product/267/30154)接口添加水印，将返回的水印id绑定到流使用。
 * @method Models\CreatePullStreamConfigResponse CreatePullStreamConfig(Models\CreatePullStreamConfigRequest $req) 创建临时拉流转推任务，目前限制添加10条任务。
该接口已下线,请使用新接口 CreateLivePullStreamTask。

注意：该接口用于创建临时拉流转推任务，
拉流源地址即 FromUrl 可以是腾讯或非腾讯数据源，
但转推目标地址即 ToUrl 目前限制为已注册的腾讯直播域名。
 * @method Models\CreateRecordTaskResponse CreateRecordTask(Models\CreateRecordTaskRequest $req) 创建一个在指定时间启动、结束的录制任务，并使用指定录制模板ID对应的配置进行录制。
- 使用前提
1. 录制文件存放于点播平台，所以用户如需使用录制功能，需首先自行开通点播服务。
2. 录制文件存放后相关费用（含存储以及下行播放流量）按照点播平台计费方式收取，具体请参考 [对应文档](https://cloud.tencent.com/document/product/266/2837)。
- 注意事项
1. 断流会结束当前录制并生成录制文件。在结束时间到达之前任务仍然有效，期间只要正常推流都会正常录制，与是否多次推、断流无关。
2. 使用上避免创建时间段相互重叠的录制任务。若同一条流当前存在多个时段重叠的任务，为避免重复录制系统将启动最多3个录制任务。
3. 创建的录制任务记录在平台侧只保留3个月。
4. 当前录制任务管理API（[CreateRecordTask](https://cloud.tencent.com/document/product/267/45983)/[StopRecordTask](https://cloud.tencent.com/document/product/267/45981)/[DeleteRecordTask](https://cloud.tencent.com/document/product/267/45982)）与旧API（CreateLiveRecord/StopLiveRecord/DeleteLiveRecord）不兼容，两套接口不能混用。
5. 避免 创建录制任务 与 推流 操作同时进行，可能导致因录制任务未生效而引起任务延迟启动问题，两者操作间隔建议大于3秒。
 * @method Models\CreateScreenshotTaskResponse CreateScreenshotTask(Models\CreateScreenshotTaskRequest $req) 创建一个在指定时间启动、结束的截图任务，并使用指定截图模板ID对应的配置进行截图。
- 注意事项
1. 断流会结束当前截图。在结束时间到达之前任务仍然有效，期间只要正常推流都会正常截图，与是否多次推、断流无关。
2. 使用上避免创建时间段相互重叠的截图任务。若同一条流当前存在多个时段重叠的任务，为避免重复系统将启动最多3个截图任务。
3. 创建的截图任务记录在平台侧只保留3个月。
4. 当前截图任务管理API（CreateScreenshotTask/StopScreenshotTask/DeleteScreenshotTask）与旧API（CreateLiveInstantSnapshot/StopLiveInstantSnapshot）不兼容，两套接口不能混用。
5. 避免 创建截图任务 与 推流 操作同时进行，可能导致因截图任务未生效而引起任务延迟启动问题，两者操作间隔建议大于3秒。
 * @method Models\DeleteLiveCallbackRuleResponse DeleteLiveCallbackRule(Models\DeleteLiveCallbackRuleRequest $req) 删除回调规则。
 * @method Models\DeleteLiveCallbackTemplateResponse DeleteLiveCallbackTemplate(Models\DeleteLiveCallbackTemplateRequest $req) 删除回调模板。
 * @method Models\DeleteLiveDomainResponse DeleteLiveDomain(Models\DeleteLiveDomainRequest $req) 删除已添加的直播域名
 * @method Models\DeleteLivePullStreamTaskResponse DeleteLivePullStreamTask(Models\DeleteLivePullStreamTaskRequest $req) 删除接口 CreateLivePullStreamTask 创建的拉流任务。
注意：
1. 入参中的 TaskId 为 CreateLivePullStreamTask 接口创建时返回的TaskId。
2. 也可通过 DescribeLivePullStreamTasks 进行查询创建的任务。
 * @method Models\DeleteLiveRecordResponse DeleteLiveRecord(Models\DeleteLiveRecordRequest $req) 注：DeleteLiveRecord 接口仅用于删除录制任务记录，不具备停止录制的功能，也不能删除正在进行中的录制。如果需要停止录制任务，请使用终止录制[StopLiveRecord](/document/product/267/30146) 接口。
 * @method Models\DeleteLiveRecordRuleResponse DeleteLiveRecordRule(Models\DeleteLiveRecordRuleRequest $req) 删除录制规则。
 * @method Models\DeleteLiveRecordTemplateResponse DeleteLiveRecordTemplate(Models\DeleteLiveRecordTemplateRequest $req) 删除录制模板。
 * @method Models\DeleteLiveSnapshotRuleResponse DeleteLiveSnapshotRule(Models\DeleteLiveSnapshotRuleRequest $req) 删除截图规则。
 * @method Models\DeleteLiveSnapshotTemplateResponse DeleteLiveSnapshotTemplate(Models\DeleteLiveSnapshotTemplateRequest $req) 删除截图模板
 * @method Models\DeleteLiveTimeShiftRuleResponse DeleteLiveTimeShiftRule(Models\DeleteLiveTimeShiftRuleRequest $req) 删除直播时移规则。
 * @method Models\DeleteLiveTimeShiftTemplateResponse DeleteLiveTimeShiftTemplate(Models\DeleteLiveTimeShiftTemplateRequest $req) 删除直播时移模板。
 * @method Models\DeleteLiveTranscodeRuleResponse DeleteLiveTranscodeRule(Models\DeleteLiveTranscodeRuleRequest $req) 删除转码规则。
DomainName+AppName+StreamName+TemplateId唯一标识单个转码规则，如需删除需要强匹配。其中TemplateId必填，其余参数为空时也需要传空字符串进行强匹配。
 * @method Models\DeleteLiveTranscodeTemplateResponse DeleteLiveTranscodeTemplate(Models\DeleteLiveTranscodeTemplateRequest $req) 删除转码模板。
 * @method Models\DeleteLiveWatermarkResponse DeleteLiveWatermark(Models\DeleteLiveWatermarkRequest $req) 删除水印。
 * @method Models\DeleteLiveWatermarkRuleResponse DeleteLiveWatermarkRule(Models\DeleteLiveWatermarkRuleRequest $req) 删除水印规则
 * @method Models\DeletePullStreamConfigResponse DeletePullStreamConfig(Models\DeletePullStreamConfigRequest $req) 删除直播拉流配置。该接口已下线,请使用新接口 DeleteLivePullStreamTask。
 * @method Models\DeleteRecordTaskResponse DeleteRecordTask(Models\DeleteRecordTaskRequest $req) 删除录制任务配置。删除操作不影响正在运行当中的任务，仅对删除之后新的推流有效。
 * @method Models\DeleteScreenshotTaskResponse DeleteScreenshotTask(Models\DeleteScreenshotTaskRequest $req) 删除截图任务配置。删除操作不影响正在运行当中的任务，仅对删除之后新的推流有效。
 * @method Models\DescribeAllStreamPlayInfoListResponse DescribeAllStreamPlayInfoList(Models\DescribeAllStreamPlayInfoListRequest $req) 输入某个时间点（1分钟维度），查询该时间点所有流的下行信息。
 * @method Models\DescribeAreaBillBandwidthAndFluxListResponse DescribeAreaBillBandwidthAndFluxList(Models\DescribeAreaBillBandwidthAndFluxListRequest $req) 海外分区直播播放带宽和流量数据查询。
 * @method Models\DescribeBillBandwidthAndFluxListResponse DescribeBillBandwidthAndFluxList(Models\DescribeBillBandwidthAndFluxListRequest $req) 直播播放带宽和流量数据查询。
 * @method Models\DescribeCallbackRecordsListResponse DescribeCallbackRecordsList(Models\DescribeCallbackRecordsListRequest $req) 用于查询回调事件。
 * @method Models\DescribeConcurrentRecordStreamNumResponse DescribeConcurrentRecordStreamNum(Models\DescribeConcurrentRecordStreamNumRequest $req) 查询并发录制路数，对慢直播和普通直播适用。
 * @method Models\DescribeDeliverBandwidthListResponse DescribeDeliverBandwidthList(Models\DescribeDeliverBandwidthListRequest $req) 查询直播转推计费带宽，查询时间范围最大支持3个月内的数据，时间跨度最长31天。
 * @method Models\DescribeGroupProIspPlayInfoListResponse DescribeGroupProIspPlayInfoList(Models\DescribeGroupProIspPlayInfoListRequest $req) 查询按省份和运营商分组的下行播放数据。
 * @method Models\DescribeHttpStatusInfoListResponse DescribeHttpStatusInfoList(Models\DescribeHttpStatusInfoListRequest $req) 查询某段时间内5分钟粒度的各播放http状态码的个数。
备注：数据延迟1小时，如10:00-10:59点的数据12点才能查到。
 * @method Models\DescribeLiveCallbackRulesResponse DescribeLiveCallbackRules(Models\DescribeLiveCallbackRulesRequest $req) 获取回调规则列表
 * @method Models\DescribeLiveCallbackTemplateResponse DescribeLiveCallbackTemplate(Models\DescribeLiveCallbackTemplateRequest $req) 获取单个回调模板。
 * @method Models\DescribeLiveCallbackTemplatesResponse DescribeLiveCallbackTemplates(Models\DescribeLiveCallbackTemplatesRequest $req) 获取回调模板列表
 * @method Models\DescribeLiveCertResponse DescribeLiveCert(Models\DescribeLiveCertRequest $req) 获取证书信息
 * @method Models\DescribeLiveCertsResponse DescribeLiveCerts(Models\DescribeLiveCertsRequest $req) 获取证书信息列表
 * @method Models\DescribeLiveDelayInfoListResponse DescribeLiveDelayInfoList(Models\DescribeLiveDelayInfoListRequest $req) 获取直播延播列表。
 * @method Models\DescribeLiveDomainResponse DescribeLiveDomain(Models\DescribeLiveDomainRequest $req) 查询直播域名信息。
 * @method Models\DescribeLiveDomainCertResponse DescribeLiveDomainCert(Models\DescribeLiveDomainCertRequest $req) 获取域名证书信息。
 * @method Models\DescribeLiveDomainCertBindingsResponse DescribeLiveDomainCertBindings(Models\DescribeLiveDomainCertBindingsRequest $req) 查询绑定证书的域名列表。
 * @method Models\DescribeLiveDomainPlayInfoListResponse DescribeLiveDomainPlayInfoList(Models\DescribeLiveDomainPlayInfoListRequest $req) 查询实时的域名维度下行播放数据，由于数据处理有耗时，接口默认查询4分钟前的准实时数据。
 * @method Models\DescribeLiveDomainRefererResponse DescribeLiveDomainReferer(Models\DescribeLiveDomainRefererRequest $req) 查询直播域名 Referer 黑白名单配置。
由于 Referer 信息包含在 http 协议中，在开启配置后，播放协议为 rtmp 或 WebRTC 不会校验 Referer 配置，仍可正常播放。如需配置 Referer 鉴权建议使用 http-flv 或 http-hls 协议播放。
 * @method Models\DescribeLiveDomainsResponse DescribeLiveDomains(Models\DescribeLiveDomainsRequest $req) 根据域名状态、类型等信息查询用户的域名信息。
 * @method Models\DescribeLiveForbidStreamListResponse DescribeLiveForbidStreamList(Models\DescribeLiveForbidStreamListRequest $req) 获取禁推流列表。

注意：该接口仅作为直播辅助查询接口，重要业务场景不可强依赖该接口。
 * @method Models\DescribeLivePackageInfoResponse DescribeLivePackageInfo(Models\DescribeLivePackageInfoRequest $req) 查询用户套餐包总量、使用量、剩余量、包状态、购买时间和过期时间等。
 * @method Models\DescribeLivePlayAuthKeyResponse DescribeLivePlayAuthKey(Models\DescribeLivePlayAuthKeyRequest $req) 查询播放鉴权key。
 * @method Models\DescribeLivePullStreamTasksResponse DescribeLivePullStreamTasks(Models\DescribeLivePullStreamTasksRequest $req) 查询使用 CreateLivePullStreamTask 接口创建的直播拉流任务。
排序方式：默认按更新时间 倒序排列。
 * @method Models\DescribeLivePushAuthKeyResponse DescribeLivePushAuthKey(Models\DescribeLivePushAuthKeyRequest $req) 查询直播推流鉴权key
 * @method Models\DescribeLiveRecordRulesResponse DescribeLiveRecordRules(Models\DescribeLiveRecordRulesRequest $req) 获取录制规则列表
 * @method Models\DescribeLiveRecordTemplateResponse DescribeLiveRecordTemplate(Models\DescribeLiveRecordTemplateRequest $req) 获取单个录制模板。
 * @method Models\DescribeLiveRecordTemplatesResponse DescribeLiveRecordTemplates(Models\DescribeLiveRecordTemplatesRequest $req) 获取录制模板列表。
 * @method Models\DescribeLiveSnapshotRulesResponse DescribeLiveSnapshotRules(Models\DescribeLiveSnapshotRulesRequest $req) 获取截图规则列表
 * @method Models\DescribeLiveSnapshotTemplateResponse DescribeLiveSnapshotTemplate(Models\DescribeLiveSnapshotTemplateRequest $req) 获取单个截图模板。
 * @method Models\DescribeLiveSnapshotTemplatesResponse DescribeLiveSnapshotTemplates(Models\DescribeLiveSnapshotTemplatesRequest $req) 获取截图模板列表。
 * @method Models\DescribeLiveStreamEventListResponse DescribeLiveStreamEventList(Models\DescribeLiveStreamEventListRequest $req) 用于查询推断流事件。<br>

注意：
1. 该接口提供离线推断流记录查询功能，不可作为重要业务场景强依赖接口。
2. 该接口可通过使用IsFilter进行过滤，返回推流历史记录。
 * @method Models\DescribeLiveStreamOnlineListResponse DescribeLiveStreamOnlineList(Models\DescribeLiveStreamOnlineListRequest $req) 返回正在直播中的流列表。适用于推流成功后查询在线流信息。

注意：
1. 该接口仅提供辅助查询在线流列表功能，业务重要场景不可强依赖该接口。
2. 该接口仅适用于流数少于2万路的情况，对于流数较大用户请联系售后。

 * @method Models\DescribeLiveStreamPublishedListResponse DescribeLiveStreamPublishedList(Models\DescribeLiveStreamPublishedListRequest $req) 返回已经推过流的流列表。<br>
注意：分页最多支持查询1万条记录，可通过调整查询时间范围来获取更多数据。
 * @method Models\DescribeLiveStreamPushInfoListResponse DescribeLiveStreamPushInfoList(Models\DescribeLiveStreamPushInfoListRequest $req) 查询所有实时流的推流信息，包括客户端IP，服务端IP，帧率，码率，域名，开始推流时间。
 * @method Models\DescribeLiveStreamStateResponse DescribeLiveStreamState(Models\DescribeLiveStreamStateRequest $req) 返回直播中、无推流或者禁播等状态。

使用建议：
该接口提供实时流状态查询功能，鉴于网络抖动等一些不可抗因素，使用该接口作为判断主播是否开播等重要业务场景时，请参考以下使用建议。
1. 优先使用业务自身的房间开关播逻辑，判断主播是否在线，譬如客户端开播信令和主播在线心跳等。
2. 对于没有房间管理的直播场景，可以结合以下方案综合判断。
2.1 根据[推断流事件通知](/document/product/267/20388) 判断主播在线状态。
2.2 通过定时（间隔>1min）查询[直播中的流接口](/document/api/267/20472)，判断主播是否在线。
2.3 通过 本接口 查询直播流状态，判断主播是否在线。
2.4 以上任一方式判断为在线，都认为主播开播中，并且接口查询超时或解析异常时，也默认为在线，减少对业务的影响。
 * @method Models\DescribeLiveTimeShiftBillInfoListResponse DescribeLiveTimeShiftBillInfoList(Models\DescribeLiveTimeShiftBillInfoListRequest $req) 提供给客户对账，按天统计，维度：推流域名、时移文件时长（累加）、配置天数（不累加）、时移总时长（累加）。
 * @method Models\DescribeLiveTimeShiftRulesResponse DescribeLiveTimeShiftRules(Models\DescribeLiveTimeShiftRulesRequest $req) 获取直播时移规则列表。
 * @method Models\DescribeLiveTimeShiftTemplatesResponse DescribeLiveTimeShiftTemplates(Models\DescribeLiveTimeShiftTemplatesRequest $req) 获取直播时移模板。
 * @method Models\DescribeLiveTranscodeDetailInfoResponse DescribeLiveTranscodeDetailInfo(Models\DescribeLiveTranscodeDetailInfoRequest $req) 支持查询某天或某段时间的转码详细信息。由于转码数据量较大，如果查询时间跨度太长可能会拉不到数据，可以尝试将查询时间范围缩小些再重试。
 * @method Models\DescribeLiveTranscodeRulesResponse DescribeLiveTranscodeRules(Models\DescribeLiveTranscodeRulesRequest $req) 获取转码规则列表
 * @method Models\DescribeLiveTranscodeTemplateResponse DescribeLiveTranscodeTemplate(Models\DescribeLiveTranscodeTemplateRequest $req) 获取单个转码模板。
 * @method Models\DescribeLiveTranscodeTemplatesResponse DescribeLiveTranscodeTemplates(Models\DescribeLiveTranscodeTemplatesRequest $req) 获取转码模板列表。
 * @method Models\DescribeLiveTranscodeTotalInfoResponse DescribeLiveTranscodeTotalInfo(Models\DescribeLiveTranscodeTotalInfoRequest $req) 查询转码总量数据，可查询近三个月内的数据。
注意：
如果是查询某一天内，则返回5分钟粒度数据；
如果是查询跨天或指定域名， 则返回1小时粒度数据。
 * @method Models\DescribeLiveWatermarkResponse DescribeLiveWatermark(Models\DescribeLiveWatermarkRequest $req) 获取单个水印信息。
 * @method Models\DescribeLiveWatermarkRulesResponse DescribeLiveWatermarkRules(Models\DescribeLiveWatermarkRulesRequest $req) 获取水印规则列表。
 * @method Models\DescribeLiveWatermarksResponse DescribeLiveWatermarks(Models\DescribeLiveWatermarksRequest $req) 查询水印列表。
 * @method Models\DescribeLiveXP2PDetailInfoListResponse DescribeLiveXP2PDetailInfoList(Models\DescribeLiveXP2PDetailInfoListRequest $req) P2P流数据查询接口，用来获取流量、卡播和起播信息。
 * @method Models\DescribeLogDownloadListResponse DescribeLogDownloadList(Models\DescribeLogDownloadListRequest $req) 批量获取日志URL。
 * @method Models\DescribePlayErrorCodeDetailInfoListResponse DescribePlayErrorCodeDetailInfoList(Models\DescribePlayErrorCodeDetailInfoListRequest $req) 查询下行播放错误码信息，某段时间内1分钟粒度的各http错误码出现的次数，包括4xx，5xx。


 * @method Models\DescribePlayErrorCodeSumInfoListResponse DescribePlayErrorCodeSumInfoList(Models\DescribePlayErrorCodeSumInfoListRequest $req) 查询下行播放错误码信息。
 * @method Models\DescribeProIspPlaySumInfoListResponse DescribeProIspPlaySumInfoList(Models\DescribeProIspPlaySumInfoListRequest $req) 查询某段时间内每个国家地区每个省份每个运营商的平均每秒流量，总流量，总请求数信息。
 * @method Models\DescribeProvinceIspPlayInfoListResponse DescribeProvinceIspPlayInfoList(Models\DescribeProvinceIspPlayInfoListRequest $req) 查询某省份某运营商下行播放数据，包括带宽，流量，请求数，并发连接数信息。
 * @method Models\DescribePullStreamConfigsResponse DescribePullStreamConfigs(Models\DescribePullStreamConfigsRequest $req) 查询直播拉流配置。该接口已下线,请使用新接口 DescribeLivePullStreamTasks。
 * @method Models\DescribePushBandwidthAndFluxListResponse DescribePushBandwidthAndFluxList(Models\DescribePushBandwidthAndFluxListRequest $req) 直播推流带宽和流量数据查询。
推流计费会先取全球推流用量和全球播放用量进行比较，满足计费条件后再按各地区用量出账。详情参见[计费文档](https://cloud.tencent.com/document/product/267/34175)。
 * @method Models\DescribeRecordTaskResponse DescribeRecordTask(Models\DescribeRecordTaskRequest $req) 查询指定时间段范围内启动和结束的录制任务列表。
- 使用前提
1. 仅用于查询由 CreateRecordTask 接口创建的录制任务。
2. 不能查询被 DeleteRecordTask 接口删除以及已过期（平台侧保留3个月）的录制任务。

 * @method Models\DescribeScreenShotSheetNumListResponse DescribeScreenShotSheetNumList(Models\DescribeScreenShotSheetNumListRequest $req) 接口用来查询直播增值业务--截图的张数
 * @method Models\DescribeScreenshotTaskResponse DescribeScreenshotTask(Models\DescribeScreenshotTaskRequest $req) 查询指定时间段范围内启动和结束的截图任务列表。
- 使用前提
1. 仅用于查询由 CreateScreenshotTask接口创建的截图任务。
2. 不能查询被 DeleteScreenshotTask接口删除以及已过期（平台侧保留3个月）的截图任务。
 * @method Models\DescribeStreamDayPlayInfoListResponse DescribeStreamDayPlayInfoList(Models\DescribeStreamDayPlayInfoListRequest $req) 查询天维度每条流的播放数据，包括总流量等。
 * @method Models\DescribeStreamPlayInfoListResponse DescribeStreamPlayInfoList(Models\DescribeStreamPlayInfoListRequest $req) 查询播放数据，支持按流名称查询详细播放数据，也可按播放域名查询详细总数据，数据延迟4分钟左右。
注意：按AppName查询请先联系工单申请，开通后配置生效预计需要5个工作日左右，具体时间以最终回复为准。
 * @method Models\DescribeStreamPushInfoListResponse DescribeStreamPushInfoList(Models\DescribeStreamPushInfoListRequest $req) 查询流id的上行推流质量数据，包括音视频的帧率，码率，流逝时间，编码格式等。
 * @method Models\DescribeTimeShiftRecordDetailResponse DescribeTimeShiftRecordDetail(Models\DescribeTimeShiftRecordDetailRequest $req) 前提调用 DescribeTimeShiftStreamList 获得请求必要参数。查询指定范围内的时移流录制详情，最大支持24小时范围查询。
 * @method Models\DescribeTimeShiftStreamListResponse DescribeTimeShiftStreamList(Models\DescribeTimeShiftStreamListRequest $req) 查询某个时间范围内所有时移流列表。最大支持查询24小时内的数据。
 * @method Models\DescribeTopClientIpSumInfoListResponse DescribeTopClientIpSumInfoList(Models\DescribeTopClientIpSumInfoListRequest $req) 查询某段时间top n客户端ip汇总信息（暂支持top 1000）
 * @method Models\DescribeTranscodeTaskNumResponse DescribeTranscodeTaskNum(Models\DescribeTranscodeTaskNumRequest $req) 查询转码任务数。
 * @method Models\DescribeUploadStreamNumsResponse DescribeUploadStreamNums(Models\DescribeUploadStreamNumsRequest $req) 直播上行路数查询
 * @method Models\DescribeVisitTopSumInfoListResponse DescribeVisitTopSumInfoList(Models\DescribeVisitTopSumInfoListRequest $req) 查询某时间段top n的域名或流id信息（暂支持top 1000）。
 * @method Models\DropLiveStreamResponse DropLiveStream(Models\DropLiveStreamRequest $req) 断开推流连接，但可以重新推流。
注：对已经不活跃的流，调用该断流接口时，接口返回成功。
 * @method Models\EnableLiveDomainResponse EnableLiveDomain(Models\EnableLiveDomainRequest $req) 启用状态为停用的直播域名。
 * @method Models\ForbidLiveDomainResponse ForbidLiveDomain(Models\ForbidLiveDomainRequest $req) 停止使用某个直播域名。
 * @method Models\ForbidLiveStreamResponse ForbidLiveStream(Models\ForbidLiveStreamRequest $req) 禁止某条流的推送，可以预设某个时刻将流恢复。
注意：
1. 默认只要流名称正确，禁推就会生效。
2. 如需要推流域名+推流路径+流名称 强匹配生效禁推，需提单联系售后开启配置。
3. 如果配置了域名分组，需填写准确推流域名，才可断掉当前推流。
 * @method Models\ModifyLiveCallbackTemplateResponse ModifyLiveCallbackTemplate(Models\ModifyLiveCallbackTemplateRequest $req) 修改回调模板。
 * @method Models\ModifyLiveDomainCertBindingsResponse ModifyLiveDomainCertBindings(Models\ModifyLiveDomainCertBindingsRequest $req) 批量绑定证书对应的播放域名，并更新启用状态。
新建自有证书将自动上传至腾讯云ssl。
 * @method Models\ModifyLiveDomainRefererResponse ModifyLiveDomainReferer(Models\ModifyLiveDomainRefererRequest $req) 设置直播域名 Referer 黑白名单。
由于 Referer 信息包含在 http 协议中，在开启配置后，播放协议为 rtmp 或 WebRTC 不会校验 Referer 配置，仍可正常播放。如需配置 Referer 鉴权建议使用 http-flv 或 http-hls 协议播放。
 * @method Models\ModifyLivePlayAuthKeyResponse ModifyLivePlayAuthKey(Models\ModifyLivePlayAuthKeyRequest $req) 修改播放鉴权key
 * @method Models\ModifyLivePlayDomainResponse ModifyLivePlayDomain(Models\ModifyLivePlayDomainRequest $req) 修改播放域名信息。
 * @method Models\ModifyLivePullStreamTaskResponse ModifyLivePullStreamTask(Models\ModifyLivePullStreamTaskRequest $req) 更新直播拉流任务。 
1. 不支持修改目标地址，如需推到新地址，请创建新任务。
2. 不支持修改拉流源类型，如需更换，请创建新任务。
 * @method Models\ModifyLivePushAuthKeyResponse ModifyLivePushAuthKey(Models\ModifyLivePushAuthKeyRequest $req) 修改直播推流鉴权key
 * @method Models\ModifyLiveRecordTemplateResponse ModifyLiveRecordTemplate(Models\ModifyLiveRecordTemplateRequest $req) 修改录制模板配置。
 * @method Models\ModifyLiveSnapshotTemplateResponse ModifyLiveSnapshotTemplate(Models\ModifyLiveSnapshotTemplateRequest $req) 修改截图模板配置。
 * @method Models\ModifyLiveTimeShiftTemplateResponse ModifyLiveTimeShiftTemplate(Models\ModifyLiveTimeShiftTemplateRequest $req) 修改直播时移模板。
 * @method Models\ModifyLiveTranscodeTemplateResponse ModifyLiveTranscodeTemplate(Models\ModifyLiveTranscodeTemplateRequest $req) 修改转码模板配置。
 * @method Models\ModifyPullStreamConfigResponse ModifyPullStreamConfig(Models\ModifyPullStreamConfigRequest $req) 更新拉流配置。该接口为已下线接口，请使用新接口 ModifyLivePullStreamTask。 
 * @method Models\ModifyPullStreamStatusResponse ModifyPullStreamStatus(Models\ModifyPullStreamStatusRequest $req) 修改直播拉流配置的状态。该接口已下线,请使用新接口 ModifyLivePullStreamTask。
 * @method Models\ResumeDelayLiveStreamResponse ResumeDelayLiveStream(Models\ResumeDelayLiveStreamRequest $req) 取消直播流设置的延时配置，恢复实时直播画面。
 * @method Models\ResumeLiveStreamResponse ResumeLiveStream(Models\ResumeLiveStreamRequest $req) 恢复某条流的推流。
 * @method Models\StopLiveRecordResponse StopLiveRecord(Models\StopLiveRecordRequest $req) 说明：录制后的文件存放于点播平台。用户如需使用录制功能，需首先自行开通点播账号并确保账号可用。录制文件存放后，相关费用（含存储以及下行播放流量）按照点播平台计费方式收取，请参考对应文档。
 * @method Models\StopRecordTaskResponse StopRecordTask(Models\StopRecordTaskRequest $req) 提前结束录制，中止运行中的录制任务并生成录制文件。任务被成功终止后，本次任务将不再启动。
 * @method Models\StopScreenshotTaskResponse StopScreenshotTask(Models\StopScreenshotTaskRequest $req) 提前结束截图，中止运行中的截图任务。任务被成功终止后，本次任务将不再启动。
 * @method Models\UnBindLiveDomainCertResponse UnBindLiveDomainCert(Models\UnBindLiveDomainCertRequest $req) 解绑域名证书
 * @method Models\UpdateLiveWatermarkResponse UpdateLiveWatermark(Models\UpdateLiveWatermarkRequest $req) 更新水印。
 */

class LiveClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "live.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "live";

    /**
     * @var string
     */
    protected $version = "2018-08-01";

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
        $respClass = "TencentCloud"."\\".ucfirst("live")."\\"."V20180801\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
