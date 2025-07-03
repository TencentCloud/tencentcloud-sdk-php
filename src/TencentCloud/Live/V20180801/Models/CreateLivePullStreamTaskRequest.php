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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLivePullStreamTask请求参数结构体
 *
 * @method string getSourceType() 获取拉流源的类型：
PullLivePushLive -直播，
PullVodPushLive -点播，
PullPicPushLive -图片。
 * @method void setSourceType(string $SourceType) 设置拉流源的类型：
PullLivePushLive -直播，
PullVodPushLive -点播，
PullPicPushLive -图片。
 * @method array getSourceUrls() 获取拉流源 url 列表。
SourceType 为直播（PullLivePushLive）只可以填1个，
SourceType 为点播（PullVodPushLive）可以填多个，上限30个。
当前支持的文件格式：flv，mp4，hls。
当前支持的拉流协议：http，https，rtmp，rtmps，rtsp，srt。
注意：
1. 建议优先使用 flv 文件，对于 mp4 未交织好的文件轮播推流易产生卡顿以及因为频繁拉取导致源产生大量源出口带宽成本，可通过点播转码进行重新交织后再轮播，或提前创建任务并开启本地模式。
2. 拒绝内网域名等攻击性拉流地址，如有使用，则做账号封禁处理。
3. 源文件请保持时间戳正常交织递增，避免因源文件异常影响推流及播放。
4. 视频编码格式仅支持: H264, H265。
5. 音频编码格式仅支持: AAC。
6. 点播源请使用小文件，尽量时长保持在1小时内，较大文件打开和续播耗时较久，耗时超过15秒会有无法正常转推风险。
7. 避免使用低频存储的文件，该类文件因低频存储，拉取时容易出现慢速，影响拉转推质量。
 * @method void setSourceUrls(array $SourceUrls) 设置拉流源 url 列表。
SourceType 为直播（PullLivePushLive）只可以填1个，
SourceType 为点播（PullVodPushLive）可以填多个，上限30个。
当前支持的文件格式：flv，mp4，hls。
当前支持的拉流协议：http，https，rtmp，rtmps，rtsp，srt。
注意：
1. 建议优先使用 flv 文件，对于 mp4 未交织好的文件轮播推流易产生卡顿以及因为频繁拉取导致源产生大量源出口带宽成本，可通过点播转码进行重新交织后再轮播，或提前创建任务并开启本地模式。
2. 拒绝内网域名等攻击性拉流地址，如有使用，则做账号封禁处理。
3. 源文件请保持时间戳正常交织递增，避免因源文件异常影响推流及播放。
4. 视频编码格式仅支持: H264, H265。
5. 音频编码格式仅支持: AAC。
6. 点播源请使用小文件，尽量时长保持在1小时内，较大文件打开和续播耗时较久，耗时超过15秒会有无法正常转推风险。
7. 避免使用低频存储的文件，该类文件因低频存储，拉取时容易出现慢速，影响拉转推质量。
 * @method string getDomainName() 获取推流域名。
将拉取过来的流推到该域名。
注意：如果目标地址为非云直播，且样式不同于云直播，请使用 ToUrl 传入完整推流地址，详细用法请参考 ToUrl 参数说明。
 * @method void setDomainName(string $DomainName) 设置推流域名。
将拉取过来的流推到该域名。
注意：如果目标地址为非云直播，且样式不同于云直播，请使用 ToUrl 传入完整推流地址，详细用法请参考 ToUrl 参数说明。
 * @method string getAppName() 获取推流路径。
将拉取过来的流推到该路径。
 * @method void setAppName(string $AppName) 设置推流路径。
将拉取过来的流推到该路径。
 * @method string getStreamName() 获取推流名称。
将拉取过来的流推到该流名称。
 * @method void setStreamName(string $StreamName) 设置推流名称。
将拉取过来的流推到该流名称。
 * @method string getStartTime() 获取开始时间。
使用 UTC 格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时。
 * @method void setStartTime(string $StartTime) 设置开始时间。
使用 UTC 格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时。
 * @method string getEndTime() 获取结束时间，注意：1. 结束时间必须大于开始时间；2. 结束时间必须大于当前时间；3. 结束时间 和 开始时间 间隔必须小于30天。使用 UTC 格式时间，例如：2019-01-08T10:00:00Z。注意：北京时间值为 UTC 时间值 + 8 小时。
 * @method void setEndTime(string $EndTime) 设置结束时间，注意：1. 结束时间必须大于开始时间；2. 结束时间必须大于当前时间；3. 结束时间 和 开始时间 间隔必须小于30天。使用 UTC 格式时间，例如：2019-01-08T10:00:00Z。注意：北京时间值为 UTC 时间值 + 8 小时。
 * @method string getOperator() 获取任务操作人备注。
 * @method void setOperator(string $Operator) 设置任务操作人备注。
 * @method string getPushArgs() 获取推流参数。
推流时携带自定义参数。
示例：
bak=1&test=2 。
 * @method void setPushArgs(string $PushArgs) 设置推流参数。
推流时携带自定义参数。
示例：
bak=1&test=2 。
 * @method array getCallbackEvents() 获取选择需要回调的事件（不填则回调全部）：
TaskStart：任务启动回调，
TaskExit：任务停止回调，
VodSourceFileStart：从点播源文件开始拉流回调，
VodSourceFileFinish：从点播源文件拉流结束回调，
ResetTaskConfig：任务更新回调。

TaskAlarm: 用于告警事件通知，AlarmType 示例:
PullFileUnstable - 文件拉取不稳定，
PushStreamUnstable - 推流不稳定，
PullFileFailed - 文件拉取出错，
PushStreamFailed - 推流出现失败，
FileEndEarly - 文件提前结束。
 * @method void setCallbackEvents(array $CallbackEvents) 设置选择需要回调的事件（不填则回调全部）：
TaskStart：任务启动回调，
TaskExit：任务停止回调，
VodSourceFileStart：从点播源文件开始拉流回调，
VodSourceFileFinish：从点播源文件拉流结束回调，
ResetTaskConfig：任务更新回调。

TaskAlarm: 用于告警事件通知，AlarmType 示例:
PullFileUnstable - 文件拉取不稳定，
PushStreamUnstable - 推流不稳定，
PullFileFailed - 文件拉取出错，
PushStreamFailed - 推流出现失败，
FileEndEarly - 文件提前结束。
 * @method string getVodLoopTimes() 获取点播拉流转推循环次数。默认：-1。
-1：无限循环，直到任务结束。
0：不循环。
>0：具体循环次数。次数和时间以先结束的为准。
注意：该配置仅对拉流源为点播时生效。
 * @method void setVodLoopTimes(string $VodLoopTimes) 设置点播拉流转推循环次数。默认：-1。
-1：无限循环，直到任务结束。
0：不循环。
>0：具体循环次数。次数和时间以先结束的为准。
注意：该配置仅对拉流源为点播时生效。
 * @method string getVodRefreshType() 获取点播更新SourceUrls后的播放方式：
ImmediateNewSource：立即播放新的拉流源内容；
ContinueBreakPoint：播放完当前正在播放的点播 url 后再使用新的拉流源播放。（旧拉流源未播放的点播 url 不会再播放）

注意：该配置生效仅对变更前拉流源为点播时生效。
 * @method void setVodRefreshType(string $VodRefreshType) 设置点播更新SourceUrls后的播放方式：
ImmediateNewSource：立即播放新的拉流源内容；
ContinueBreakPoint：播放完当前正在播放的点播 url 后再使用新的拉流源播放。（旧拉流源未播放的点播 url 不会再播放）

注意：该配置生效仅对变更前拉流源为点播时生效。
 * @method string getCallbackUrl() 获取自定义回调地址。
拉流转推任务相关事件会回调到该地址。
回调事件使用方法请查看：
https://cloud.tencent.com/document/product/267/32744
https://cloud.tencent.com/document/product/267/56208
 * @method void setCallbackUrl(string $CallbackUrl) 设置自定义回调地址。
拉流转推任务相关事件会回调到该地址。
回调事件使用方法请查看：
https://cloud.tencent.com/document/product/267/32744
https://cloud.tencent.com/document/product/267/56208
 * @method string getExtraCmd() 获取其他参数。
示例: ignore_region  用于忽略传入地域, 内部按负载分配。
 * @method void setExtraCmd(string $ExtraCmd) 设置其他参数。
示例: ignore_region  用于忽略传入地域, 内部按负载分配。
 * @method string getSpecifyTaskId() 获取自定义任务 ID。
注：
1. 该自定义 ID 为可选参数，如果传入，请确保该账号下传入的 ID 唯一。
2. 该自定义 ID 用于防止重复发起请求时产生重复任务。后面也可以用 SpecifyTaskId 来修改或删除任务。
 * @method void setSpecifyTaskId(string $SpecifyTaskId) 设置自定义任务 ID。
注：
1. 该自定义 ID 为可选参数，如果传入，请确保该账号下传入的 ID 唯一。
2. 该自定义 ID 用于防止重复发起请求时产生重复任务。后面也可以用 SpecifyTaskId 来修改或删除任务。
 * @method string getComment() 获取任务描述，限制 512 字节。
 * @method void setComment(string $Comment) 设置任务描述，限制 512 字节。
 * @method string getToUrl() 获取完整目标 URL 地址。
用法注意：如果使用该参数来传完整目标地址，则 DomainName, AppName, StreamName 需要传入空字符串，任务将会使用该 ToUrl 参数指定的目标地址。

使用该方式传入目标地址支持的协议有：
rtmp、rtmps、rtsp、rtp、srt。

注意：签名时间需要超过任务结束时间，避免因签名过期造成任务失败。
 * @method void setToUrl(string $ToUrl) 设置完整目标 URL 地址。
用法注意：如果使用该参数来传完整目标地址，则 DomainName, AppName, StreamName 需要传入空字符串，任务将会使用该 ToUrl 参数指定的目标地址。

使用该方式传入目标地址支持的协议有：
rtmp、rtmps、rtsp、rtp、srt。

注意：签名时间需要超过任务结束时间，避免因签名过期造成任务失败。
 * @method integer getFileIndex() 获取指定播放文件索引。
注意： 1. 从1开始，不大于SourceUrls中文件个数。
2. 该偏移仅在首次轮播时有效。
3. 提前创建的任务指定的偏移最长有效期为24小时，24小时后未开始的任务偏移失效。
 * @method void setFileIndex(integer $FileIndex) 设置指定播放文件索引。
注意： 1. 从1开始，不大于SourceUrls中文件个数。
2. 该偏移仅在首次轮播时有效。
3. 提前创建的任务指定的偏移最长有效期为24小时，24小时后未开始的任务偏移失效。
 * @method integer getOffsetTime() 获取指定播放文件偏移。
注意：
1. 单位：秒，配合FileIndex使用。
 * @method void setOffsetTime(integer $OffsetTime) 设置指定播放文件偏移。
注意：
1. 单位：秒，配合FileIndex使用。
 * @method string getBackupSourceType() 获取备源的类型：
PullLivePushLive -直播，
PullVodPushLive -点播。
注意：
1. 仅当主源类型为直播源时，备源才会生效。
2. 主直播源拉流中断时，自动使用备源进行拉流。
3. 如果备源为点播文件时，则每次轮播完点播文件就检查主源是否恢复，如果主源恢复则自动切回到主源，否则继续拉备源。
 * @method void setBackupSourceType(string $BackupSourceType) 设置备源的类型：
PullLivePushLive -直播，
PullVodPushLive -点播。
注意：
1. 仅当主源类型为直播源时，备源才会生效。
2. 主直播源拉流中断时，自动使用备源进行拉流。
3. 如果备源为点播文件时，则每次轮播完点播文件就检查主源是否恢复，如果主源恢复则自动切回到主源，否则继续拉备源。
 * @method string getBackupSourceUrl() 获取备源 URL。
只允许填一个备源 URL
 * @method void setBackupSourceUrl(string $BackupSourceUrl) 设置备源 URL。
只允许填一个备源 URL
 * @method array getWatermarkList() 获取水印信息列表。
注意：
1. 最多支持4个不同位置的水印。
2. 水印图片 URL 请使用合法外网可访问地址。
3. 支持的水印图片格式：png，jpg，gif 等。
 * @method void setWatermarkList(array $WatermarkList) 设置水印信息列表。
注意：
1. 最多支持4个不同位置的水印。
2. 水印图片 URL 请使用合法外网可访问地址。
3. 支持的水印图片格式：png，jpg，gif 等。
 * @method integer getVodLocalMode() 获取点播源是否启用本地推流模式，默认0，不启用。
0 - 不启用。
1 - 启用。
注意：启用本地模式后，会将源列表中的 MP4 文件进行本地下载，优先使用本地已下载文件进行推流，提高点播源推流稳定性。使用本地下载文件推流时，会产生增值费用。
 * @method void setVodLocalMode(integer $VodLocalMode) 设置点播源是否启用本地推流模式，默认0，不启用。
0 - 不启用。
1 - 启用。
注意：启用本地模式后，会将源列表中的 MP4 文件进行本地下载，优先使用本地已下载文件进行推流，提高点播源推流稳定性。使用本地下载文件推流时，会产生增值费用。
 * @method string getRecordTemplateId() 获取录制模板 ID。
 * @method void setRecordTemplateId(string $RecordTemplateId) 设置录制模板 ID。
 * @method string getBackupToUrl() 获取新的目标地址，用于任务同时推两路场景。
 * @method void setBackupToUrl(string $BackupToUrl) 设置新的目标地址，用于任务同时推两路场景。
 * @method string getTranscodeTemplateName() 获取直播转码模板，使用云直播的转码功能进行转码后再转推出去。转码模板需在云直播控制台创建。
 * @method void setTranscodeTemplateName(string $TranscodeTemplateName) 设置直播转码模板，使用云直播的转码功能进行转码后再转推出去。转码模板需在云直播控制台创建。
 */
class CreateLivePullStreamTaskRequest extends AbstractModel
{
    /**
     * @var string 拉流源的类型：
PullLivePushLive -直播，
PullVodPushLive -点播，
PullPicPushLive -图片。
     */
    public $SourceType;

    /**
     * @var array 拉流源 url 列表。
SourceType 为直播（PullLivePushLive）只可以填1个，
SourceType 为点播（PullVodPushLive）可以填多个，上限30个。
当前支持的文件格式：flv，mp4，hls。
当前支持的拉流协议：http，https，rtmp，rtmps，rtsp，srt。
注意：
1. 建议优先使用 flv 文件，对于 mp4 未交织好的文件轮播推流易产生卡顿以及因为频繁拉取导致源产生大量源出口带宽成本，可通过点播转码进行重新交织后再轮播，或提前创建任务并开启本地模式。
2. 拒绝内网域名等攻击性拉流地址，如有使用，则做账号封禁处理。
3. 源文件请保持时间戳正常交织递增，避免因源文件异常影响推流及播放。
4. 视频编码格式仅支持: H264, H265。
5. 音频编码格式仅支持: AAC。
6. 点播源请使用小文件，尽量时长保持在1小时内，较大文件打开和续播耗时较久，耗时超过15秒会有无法正常转推风险。
7. 避免使用低频存储的文件，该类文件因低频存储，拉取时容易出现慢速，影响拉转推质量。
     */
    public $SourceUrls;

    /**
     * @var string 推流域名。
将拉取过来的流推到该域名。
注意：如果目标地址为非云直播，且样式不同于云直播，请使用 ToUrl 传入完整推流地址，详细用法请参考 ToUrl 参数说明。
     */
    public $DomainName;

    /**
     * @var string 推流路径。
将拉取过来的流推到该路径。
     */
    public $AppName;

    /**
     * @var string 推流名称。
将拉取过来的流推到该流名称。
     */
    public $StreamName;

    /**
     * @var string 开始时间。
使用 UTC 格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时。
     */
    public $StartTime;

    /**
     * @var string 结束时间，注意：1. 结束时间必须大于开始时间；2. 结束时间必须大于当前时间；3. 结束时间 和 开始时间 间隔必须小于30天。使用 UTC 格式时间，例如：2019-01-08T10:00:00Z。注意：北京时间值为 UTC 时间值 + 8 小时。
     */
    public $EndTime;

    /**
     * @var string 任务操作人备注。
     */
    public $Operator;

    /**
     * @var string 推流参数。
推流时携带自定义参数。
示例：
bak=1&test=2 。
     */
    public $PushArgs;

    /**
     * @var array 选择需要回调的事件（不填则回调全部）：
TaskStart：任务启动回调，
TaskExit：任务停止回调，
VodSourceFileStart：从点播源文件开始拉流回调，
VodSourceFileFinish：从点播源文件拉流结束回调，
ResetTaskConfig：任务更新回调。

TaskAlarm: 用于告警事件通知，AlarmType 示例:
PullFileUnstable - 文件拉取不稳定，
PushStreamUnstable - 推流不稳定，
PullFileFailed - 文件拉取出错，
PushStreamFailed - 推流出现失败，
FileEndEarly - 文件提前结束。
     */
    public $CallbackEvents;

    /**
     * @var string 点播拉流转推循环次数。默认：-1。
-1：无限循环，直到任务结束。
0：不循环。
>0：具体循环次数。次数和时间以先结束的为准。
注意：该配置仅对拉流源为点播时生效。
     */
    public $VodLoopTimes;

    /**
     * @var string 点播更新SourceUrls后的播放方式：
ImmediateNewSource：立即播放新的拉流源内容；
ContinueBreakPoint：播放完当前正在播放的点播 url 后再使用新的拉流源播放。（旧拉流源未播放的点播 url 不会再播放）

注意：该配置生效仅对变更前拉流源为点播时生效。
     */
    public $VodRefreshType;

    /**
     * @var string 自定义回调地址。
拉流转推任务相关事件会回调到该地址。
回调事件使用方法请查看：
https://cloud.tencent.com/document/product/267/32744
https://cloud.tencent.com/document/product/267/56208
     */
    public $CallbackUrl;

    /**
     * @var string 其他参数。
示例: ignore_region  用于忽略传入地域, 内部按负载分配。
     */
    public $ExtraCmd;

    /**
     * @var string 自定义任务 ID。
注：
1. 该自定义 ID 为可选参数，如果传入，请确保该账号下传入的 ID 唯一。
2. 该自定义 ID 用于防止重复发起请求时产生重复任务。后面也可以用 SpecifyTaskId 来修改或删除任务。
     */
    public $SpecifyTaskId;

    /**
     * @var string 任务描述，限制 512 字节。
     */
    public $Comment;

    /**
     * @var string 完整目标 URL 地址。
用法注意：如果使用该参数来传完整目标地址，则 DomainName, AppName, StreamName 需要传入空字符串，任务将会使用该 ToUrl 参数指定的目标地址。

使用该方式传入目标地址支持的协议有：
rtmp、rtmps、rtsp、rtp、srt。

注意：签名时间需要超过任务结束时间，避免因签名过期造成任务失败。
     */
    public $ToUrl;

    /**
     * @var integer 指定播放文件索引。
注意： 1. 从1开始，不大于SourceUrls中文件个数。
2. 该偏移仅在首次轮播时有效。
3. 提前创建的任务指定的偏移最长有效期为24小时，24小时后未开始的任务偏移失效。
     */
    public $FileIndex;

    /**
     * @var integer 指定播放文件偏移。
注意：
1. 单位：秒，配合FileIndex使用。
     */
    public $OffsetTime;

    /**
     * @var string 备源的类型：
PullLivePushLive -直播，
PullVodPushLive -点播。
注意：
1. 仅当主源类型为直播源时，备源才会生效。
2. 主直播源拉流中断时，自动使用备源进行拉流。
3. 如果备源为点播文件时，则每次轮播完点播文件就检查主源是否恢复，如果主源恢复则自动切回到主源，否则继续拉备源。
     */
    public $BackupSourceType;

    /**
     * @var string 备源 URL。
只允许填一个备源 URL
     */
    public $BackupSourceUrl;

    /**
     * @var array 水印信息列表。
注意：
1. 最多支持4个不同位置的水印。
2. 水印图片 URL 请使用合法外网可访问地址。
3. 支持的水印图片格式：png，jpg，gif 等。
     */
    public $WatermarkList;

    /**
     * @var integer 点播源是否启用本地推流模式，默认0，不启用。
0 - 不启用。
1 - 启用。
注意：启用本地模式后，会将源列表中的 MP4 文件进行本地下载，优先使用本地已下载文件进行推流，提高点播源推流稳定性。使用本地下载文件推流时，会产生增值费用。
     */
    public $VodLocalMode;

    /**
     * @var string 录制模板 ID。
     */
    public $RecordTemplateId;

    /**
     * @var string 新的目标地址，用于任务同时推两路场景。
     */
    public $BackupToUrl;

    /**
     * @var string 直播转码模板，使用云直播的转码功能进行转码后再转推出去。转码模板需在云直播控制台创建。
     */
    public $TranscodeTemplateName;

    /**
     * @param string $SourceType 拉流源的类型：
PullLivePushLive -直播，
PullVodPushLive -点播，
PullPicPushLive -图片。
     * @param array $SourceUrls 拉流源 url 列表。
SourceType 为直播（PullLivePushLive）只可以填1个，
SourceType 为点播（PullVodPushLive）可以填多个，上限30个。
当前支持的文件格式：flv，mp4，hls。
当前支持的拉流协议：http，https，rtmp，rtmps，rtsp，srt。
注意：
1. 建议优先使用 flv 文件，对于 mp4 未交织好的文件轮播推流易产生卡顿以及因为频繁拉取导致源产生大量源出口带宽成本，可通过点播转码进行重新交织后再轮播，或提前创建任务并开启本地模式。
2. 拒绝内网域名等攻击性拉流地址，如有使用，则做账号封禁处理。
3. 源文件请保持时间戳正常交织递增，避免因源文件异常影响推流及播放。
4. 视频编码格式仅支持: H264, H265。
5. 音频编码格式仅支持: AAC。
6. 点播源请使用小文件，尽量时长保持在1小时内，较大文件打开和续播耗时较久，耗时超过15秒会有无法正常转推风险。
7. 避免使用低频存储的文件，该类文件因低频存储，拉取时容易出现慢速，影响拉转推质量。
     * @param string $DomainName 推流域名。
将拉取过来的流推到该域名。
注意：如果目标地址为非云直播，且样式不同于云直播，请使用 ToUrl 传入完整推流地址，详细用法请参考 ToUrl 参数说明。
     * @param string $AppName 推流路径。
将拉取过来的流推到该路径。
     * @param string $StreamName 推流名称。
将拉取过来的流推到该流名称。
     * @param string $StartTime 开始时间。
使用 UTC 格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时。
     * @param string $EndTime 结束时间，注意：1. 结束时间必须大于开始时间；2. 结束时间必须大于当前时间；3. 结束时间 和 开始时间 间隔必须小于30天。使用 UTC 格式时间，例如：2019-01-08T10:00:00Z。注意：北京时间值为 UTC 时间值 + 8 小时。
     * @param string $Operator 任务操作人备注。
     * @param string $PushArgs 推流参数。
推流时携带自定义参数。
示例：
bak=1&test=2 。
     * @param array $CallbackEvents 选择需要回调的事件（不填则回调全部）：
TaskStart：任务启动回调，
TaskExit：任务停止回调，
VodSourceFileStart：从点播源文件开始拉流回调，
VodSourceFileFinish：从点播源文件拉流结束回调，
ResetTaskConfig：任务更新回调。

TaskAlarm: 用于告警事件通知，AlarmType 示例:
PullFileUnstable - 文件拉取不稳定，
PushStreamUnstable - 推流不稳定，
PullFileFailed - 文件拉取出错，
PushStreamFailed - 推流出现失败，
FileEndEarly - 文件提前结束。
     * @param string $VodLoopTimes 点播拉流转推循环次数。默认：-1。
-1：无限循环，直到任务结束。
0：不循环。
>0：具体循环次数。次数和时间以先结束的为准。
注意：该配置仅对拉流源为点播时生效。
     * @param string $VodRefreshType 点播更新SourceUrls后的播放方式：
ImmediateNewSource：立即播放新的拉流源内容；
ContinueBreakPoint：播放完当前正在播放的点播 url 后再使用新的拉流源播放。（旧拉流源未播放的点播 url 不会再播放）

注意：该配置生效仅对变更前拉流源为点播时生效。
     * @param string $CallbackUrl 自定义回调地址。
拉流转推任务相关事件会回调到该地址。
回调事件使用方法请查看：
https://cloud.tencent.com/document/product/267/32744
https://cloud.tencent.com/document/product/267/56208
     * @param string $ExtraCmd 其他参数。
示例: ignore_region  用于忽略传入地域, 内部按负载分配。
     * @param string $SpecifyTaskId 自定义任务 ID。
注：
1. 该自定义 ID 为可选参数，如果传入，请确保该账号下传入的 ID 唯一。
2. 该自定义 ID 用于防止重复发起请求时产生重复任务。后面也可以用 SpecifyTaskId 来修改或删除任务。
     * @param string $Comment 任务描述，限制 512 字节。
     * @param string $ToUrl 完整目标 URL 地址。
用法注意：如果使用该参数来传完整目标地址，则 DomainName, AppName, StreamName 需要传入空字符串，任务将会使用该 ToUrl 参数指定的目标地址。

使用该方式传入目标地址支持的协议有：
rtmp、rtmps、rtsp、rtp、srt。

注意：签名时间需要超过任务结束时间，避免因签名过期造成任务失败。
     * @param integer $FileIndex 指定播放文件索引。
注意： 1. 从1开始，不大于SourceUrls中文件个数。
2. 该偏移仅在首次轮播时有效。
3. 提前创建的任务指定的偏移最长有效期为24小时，24小时后未开始的任务偏移失效。
     * @param integer $OffsetTime 指定播放文件偏移。
注意：
1. 单位：秒，配合FileIndex使用。
     * @param string $BackupSourceType 备源的类型：
PullLivePushLive -直播，
PullVodPushLive -点播。
注意：
1. 仅当主源类型为直播源时，备源才会生效。
2. 主直播源拉流中断时，自动使用备源进行拉流。
3. 如果备源为点播文件时，则每次轮播完点播文件就检查主源是否恢复，如果主源恢复则自动切回到主源，否则继续拉备源。
     * @param string $BackupSourceUrl 备源 URL。
只允许填一个备源 URL
     * @param array $WatermarkList 水印信息列表。
注意：
1. 最多支持4个不同位置的水印。
2. 水印图片 URL 请使用合法外网可访问地址。
3. 支持的水印图片格式：png，jpg，gif 等。
     * @param integer $VodLocalMode 点播源是否启用本地推流模式，默认0，不启用。
0 - 不启用。
1 - 启用。
注意：启用本地模式后，会将源列表中的 MP4 文件进行本地下载，优先使用本地已下载文件进行推流，提高点播源推流稳定性。使用本地下载文件推流时，会产生增值费用。
     * @param string $RecordTemplateId 录制模板 ID。
     * @param string $BackupToUrl 新的目标地址，用于任务同时推两路场景。
     * @param string $TranscodeTemplateName 直播转码模板，使用云直播的转码功能进行转码后再转推出去。转码模板需在云直播控制台创建。
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
        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SourceUrls",$param) and $param["SourceUrls"] !== null) {
            $this->SourceUrls = $param["SourceUrls"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("PushArgs",$param) and $param["PushArgs"] !== null) {
            $this->PushArgs = $param["PushArgs"];
        }

        if (array_key_exists("CallbackEvents",$param) and $param["CallbackEvents"] !== null) {
            $this->CallbackEvents = $param["CallbackEvents"];
        }

        if (array_key_exists("VodLoopTimes",$param) and $param["VodLoopTimes"] !== null) {
            $this->VodLoopTimes = $param["VodLoopTimes"];
        }

        if (array_key_exists("VodRefreshType",$param) and $param["VodRefreshType"] !== null) {
            $this->VodRefreshType = $param["VodRefreshType"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("ExtraCmd",$param) and $param["ExtraCmd"] !== null) {
            $this->ExtraCmd = $param["ExtraCmd"];
        }

        if (array_key_exists("SpecifyTaskId",$param) and $param["SpecifyTaskId"] !== null) {
            $this->SpecifyTaskId = $param["SpecifyTaskId"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("ToUrl",$param) and $param["ToUrl"] !== null) {
            $this->ToUrl = $param["ToUrl"];
        }

        if (array_key_exists("FileIndex",$param) and $param["FileIndex"] !== null) {
            $this->FileIndex = $param["FileIndex"];
        }

        if (array_key_exists("OffsetTime",$param) and $param["OffsetTime"] !== null) {
            $this->OffsetTime = $param["OffsetTime"];
        }

        if (array_key_exists("BackupSourceType",$param) and $param["BackupSourceType"] !== null) {
            $this->BackupSourceType = $param["BackupSourceType"];
        }

        if (array_key_exists("BackupSourceUrl",$param) and $param["BackupSourceUrl"] !== null) {
            $this->BackupSourceUrl = $param["BackupSourceUrl"];
        }

        if (array_key_exists("WatermarkList",$param) and $param["WatermarkList"] !== null) {
            $this->WatermarkList = [];
            foreach ($param["WatermarkList"] as $key => $value){
                $obj = new PullPushWatermarkInfo();
                $obj->deserialize($value);
                array_push($this->WatermarkList, $obj);
            }
        }

        if (array_key_exists("VodLocalMode",$param) and $param["VodLocalMode"] !== null) {
            $this->VodLocalMode = $param["VodLocalMode"];
        }

        if (array_key_exists("RecordTemplateId",$param) and $param["RecordTemplateId"] !== null) {
            $this->RecordTemplateId = $param["RecordTemplateId"];
        }

        if (array_key_exists("BackupToUrl",$param) and $param["BackupToUrl"] !== null) {
            $this->BackupToUrl = $param["BackupToUrl"];
        }

        if (array_key_exists("TranscodeTemplateName",$param) and $param["TranscodeTemplateName"] !== null) {
            $this->TranscodeTemplateName = $param["TranscodeTemplateName"];
        }
    }
}
