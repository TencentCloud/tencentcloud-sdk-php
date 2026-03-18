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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRoom返回参数结构体
 *
 * @method string getName() 获取<p>课堂名称。</p>
 * @method void setName(string $Name) 设置<p>课堂名称。</p>
 * @method integer getStartTime() 获取<p>预定的课堂开始时间，unix时间戳（秒）。</p>
 * @method void setStartTime(integer $StartTime) 设置<p>预定的课堂开始时间，unix时间戳（秒）。</p>
 * @method integer getEndTime() 获取<p>预定的课堂结束时间，unix时间戳（秒）。</p>
 * @method void setEndTime(integer $EndTime) 设置<p>预定的课堂结束时间，unix时间戳（秒）。</p>
 * @method string getTeacherId() 获取<p>老师的UserId。</p>
 * @method void setTeacherId(string $TeacherId) 设置<p>老师的UserId。</p>
 * @method integer getSdkAppId() 获取<p>低代码互动课堂的SdkAppId。</p>
 * @method void setSdkAppId(integer $SdkAppId) 设置<p>低代码互动课堂的SdkAppId。</p>
 * @method integer getAudienceType() 获取<p>观看类型。互动观看 （默认）</p>
 * @method void setAudienceType(integer $AudienceType) 设置<p>观看类型。互动观看 （默认）</p>
 * @method integer getResolution() 获取<p>头像区域，摄像头视频画面的分辨率。可以有如下取值：<br>1 标清<br>2 高清<br>3 全高清</p>
 * @method void setResolution(integer $Resolution) 设置<p>头像区域，摄像头视频画面的分辨率。可以有如下取值：<br>1 标清<br>2 高清<br>3 全高清</p>
 * @method integer getMaxMicNumber() 获取<p>设置课堂同时最大可与老师进行连麦互动的人数，该参数支持正式上课/开播前调用修改房间修改。小班课取值范围[0,16]，大班课取值范围[0,1]，当取值为0时表示当前课堂/直播，不支持连麦互动。</p>
 * @method void setMaxMicNumber(integer $MaxMicNumber) 设置<p>设置课堂同时最大可与老师进行连麦互动的人数，该参数支持正式上课/开播前调用修改房间修改。小班课取值范围[0,16]，大班课取值范围[0,1]，当取值为0时表示当前课堂/直播，不支持连麦互动。</p>
 * @method integer getAutoMic() 获取<p>进入课堂时是否自动连麦。可以有以下取值：<br>0 不自动连麦（需要手动申请上麦，默认值）<br>1 自动连麦</p>
 * @method void setAutoMic(integer $AutoMic) 设置<p>进入课堂时是否自动连麦。可以有以下取值：<br>0 不自动连麦（需要手动申请上麦，默认值）<br>1 自动连麦</p>
 * @method integer getAudioQuality() 获取<p>高音质模式。可以有以下取值：<br>0 不开启高音质（默认值）<br>1 开启高音质</p>
 * @method void setAudioQuality(integer $AudioQuality) 设置<p>高音质模式。可以有以下取值：<br>0 不开启高音质（默认值）<br>1 开启高音质</p>
 * @method string getSubType() 获取<p>课堂子类型，可以有以下取值：videodoc 文档+视频video 纯视频</p>
 * @method void setSubType(string $SubType) 设置<p>课堂子类型，可以有以下取值：videodoc 文档+视频video 纯视频</p>
 * @method integer getDisableRecord() 获取<p>录制方式。</p><p>枚举值：</p><ul><li>0： 开启自动录制</li><li>1： 禁止录制</li><li>2： 开启手动录制。（仅支持页面录制，需通过startRecord、stopRecord接口控制录制的开始和结束。）</li><li>3： 信令录制。</li></ul>
 * @method void setDisableRecord(integer $DisableRecord) 设置<p>录制方式。</p><p>枚举值：</p><ul><li>0： 开启自动录制</li><li>1： 禁止录制</li><li>2： 开启手动录制。（仅支持页面录制，需通过startRecord、stopRecord接口控制录制的开始和结束。）</li><li>3： 信令录制。</li></ul>
 * @method array getAssistants() 获取<p>助教UserId列表。</p>
 * @method void setAssistants(array $Assistants) 设置<p>助教UserId列表。</p>
 * @method string getRecordUrl() 获取<p>录制地址（协议为https)。仅在房间结束后存在。</p>
 * @method void setRecordUrl(string $RecordUrl) 设置<p>录制地址（协议为https)。仅在房间结束后存在。</p>
 * @method integer getStatus() 获取<p>课堂状态。0为未开始，1为已开始，2为已结束，3为已过期。</p>
 * @method void setStatus(integer $Status) 设置<p>课堂状态。0为未开始，1为已开始，2为已结束，3为已过期。</p>
 * @method string getGroupId() 获取<p>课堂绑定的群组ID</p>
 * @method void setGroupId(string $GroupId) 设置<p>课堂绑定的群组ID</p>
 * @method integer getEnableDirectControl() 获取<p>打开学生麦克风/摄像头的授权开关</p>
 * @method void setEnableDirectControl(integer $EnableDirectControl) 设置<p>打开学生麦克风/摄像头的授权开关</p>
 * @method integer getInteractionMode() 获取<p>开启专注模式。<br>0 收看全部角色音视频(默认)<br>1 只看老师和助教</p>
 * @method void setInteractionMode(integer $InteractionMode) 设置<p>开启专注模式。<br>0 收看全部角色音视频(默认)<br>1 只看老师和助教</p>
 * @method integer getVideoOrientation() 获取<p>横竖屏。0：横屏开播（默认值）; 1：竖屏开播，当前仅支持移动端的纯视频类型</p>
 * @method void setVideoOrientation(integer $VideoOrientation) 设置<p>横竖屏。0：横屏开播（默认值）; 1：竖屏开播，当前仅支持移动端的纯视频类型</p>
 * @method integer getIsGradingRequiredPostClass() 获取<p>该课堂是否开启了课后评分功能。0：未开启  1：开启</p>
 * @method void setIsGradingRequiredPostClass(integer $IsGradingRequiredPostClass) 设置<p>该课堂是否开启了课后评分功能。0：未开启  1：开启</p>
 * @method integer getRoomType() 获取<p>课堂类型: 0 小班课（默认值）; 1 大班课; 2 1V1 (预留参数，暂未开放); 3 圆桌会议 注：大班课的布局(layout)只有三分屏</p>
 * @method void setRoomType(integer $RoomType) 设置<p>课堂类型: 0 小班课（默认值）; 1 大班课; 2 1V1 (预留参数，暂未开放); 3 圆桌会议 注：大班课的布局(layout)只有三分屏</p>
 * @method integer getVideoDuration() 获取<p>录制时长</p>
 * @method void setVideoDuration(integer $VideoDuration) 设置<p>录制时长</p>
 * @method integer getEndDelayTime() 获取<p>拖堂时间：单位分钟，0为不限制(默认值), -1为不能拖堂，大于0为拖堂的时间，最大值120分钟</p>
 * @method void setEndDelayTime(integer $EndDelayTime) 设置<p>拖堂时间：单位分钟，0为不限制(默认值), -1为不能拖堂，大于0为拖堂的时间，最大值120分钟</p>
 * @method integer getLiveType() 获取<p>直播类型：0 常规（默认）1 伪直播 2 RTMP推流直播</p>
 * @method void setLiveType(integer $LiveType) 设置<p>直播类型：0 常规（默认）1 伪直播 2 RTMP推流直播</p>
 * @method string getRecordLiveUrl() 获取<p>伪直播链接</p>
 * @method void setRecordLiveUrl(string $RecordLiveUrl) 设置<p>伪直播链接</p>
 * @method integer getEnableAutoStart() 获取<p>是否自动开始上课：0 不自动上课（默认） 1 自动上课 live_type=1的时候有效</p>
 * @method void setEnableAutoStart(integer $EnableAutoStart) 设置<p>是否自动开始上课：0 不自动上课（默认） 1 自动上课 live_type=1的时候有效</p>
 * @method string getRecordBackground() 获取<p>录制文件背景图片，支持png、jpg、jpeg、bmp格式，暂不支持透明通道</p>
 * @method void setRecordBackground(string $RecordBackground) 设置<p>录制文件背景图片，支持png、jpg、jpeg、bmp格式，暂不支持透明通道</p>
 * @method string getRTMPStreamingURL() 获取<p>RTMP推流链接</p>
 * @method void setRTMPStreamingURL(string $RTMPStreamingURL) 设置<p>RTMP推流链接</p>
 * @method string getRecordScene() 获取<p>录制自定义场景。注意：仅recordlayout=9的时候此参数有效。需注意各类参数配置正确能够生效。不然会造成录制失败，失败后无法补救。数据内容为用户自定义场景参数，数据格式为json键值对方式，其中键值对的value为string类型。自定义场景参数的含义。如下：     scene：自定义js/css对应的场景值。如scene=recordScene，会加载 recordScene 场景对应的 js/css，这样就可以自定义录制页面的元素。     lng：录制页面对应的语种。如lng=en，则录制界面为en。（枚举值：en,zh，zh-TW，jp，ar，kr，vi）     customToken：录制页面中涉及客户自己的服务需要鉴权时进行配置。一般情况下，无需配置。</p>
 * @method void setRecordScene(string $RecordScene) 设置<p>录制自定义场景。注意：仅recordlayout=9的时候此参数有效。需注意各类参数配置正确能够生效。不然会造成录制失败，失败后无法补救。数据内容为用户自定义场景参数，数据格式为json键值对方式，其中键值对的value为string类型。自定义场景参数的含义。如下：     scene：自定义js/css对应的场景值。如scene=recordScene，会加载 recordScene 场景对应的 js/css，这样就可以自定义录制页面的元素。     lng：录制页面对应的语种。如lng=en，则录制界面为en。（枚举值：en,zh，zh-TW，jp，ar，kr，vi）     customToken：录制页面中涉及客户自己的服务需要鉴权时进行配置。一般情况下，无需配置。</p>
 * @method string getRecordLang() 获取<p>录制自定义语言，仅recordlayout=9的时候此参数有效</p>
 * @method void setRecordLang(string $RecordLang) 设置<p>录制自定义语言，仅recordlayout=9的时候此参数有效</p>
 * @method integer getRecordStream() 获取<p>录制类型 0 仅录制混流（默认） ;1 录制混流+单流，该模式下除混流录制基础上，分别录制老师、台上学生的音视频流，每路录制都会产生相应的录制费用 。示例：0</p>
 * @method void setRecordStream(integer $RecordStream) 设置<p>录制类型 0 仅录制混流（默认） ;1 录制混流+单流，该模式下除混流录制基础上，分别录制老师、台上学生的音视频流，每路录制都会产生相应的录制费用 。示例：0</p>
 * @method integer getRecordLayout() 获取<p>录制模板。房间子类型为视频+白板（SubType=videodoc）时默认为3，房间子类型为纯视频（SubType=video）时默认为0。录制模板枚举值参考：https://cloud.tencent.com/document/product/1639/89744</p>
 * @method void setRecordLayout(integer $RecordLayout) 设置<p>录制模板。房间子类型为视频+白板（SubType=videodoc）时默认为3，房间子类型为纯视频（SubType=video）时默认为0。录制模板枚举值参考：https://cloud.tencent.com/document/product/1639/89744</p>
 * @method integer getWhiteBoardSnapshotMode() 获取<p>板书截图生成类型。0 不生成板书；1 全量模式；2 单页去重模式</p>
 * @method void setWhiteBoardSnapshotMode(integer $WhiteBoardSnapshotMode) 设置<p>板书截图生成类型。0 不生成板书；1 全量模式；2 单页去重模式</p>
 * @method integer getSubtitlesTranscription() 获取<p>字幕转写功能开关。可以有以下取值：<br>0 不开启字幕转写功能（默认值）<br>1 自动转写模式：上课自动开启，下课自动停止<br>2 手动转写模式：支持老师或者助教通过客户端API手动开启/关闭字幕转写<br>设置0和1时客户端均不展示手动开关，设置2时老师或者助教端展示字幕转写开关</p>
 * @method void setSubtitlesTranscription(integer $SubtitlesTranscription) 设置<p>字幕转写功能开关。可以有以下取值：<br>0 不开启字幕转写功能（默认值）<br>1 自动转写模式：上课自动开启，下课自动停止<br>2 手动转写模式：支持老师或者助教通过客户端API手动开启/关闭字幕转写<br>设置0和1时客户端均不展示手动开关，设置2时老师或者助教端展示字幕转写开关</p>
 * @method array getGuests() 获取<p>嘉宾Id列表。当圆桌会议模式（RoomType==3）时生效</p>
 * @method void setGuests(array $Guests) 设置<p>嘉宾Id列表。当圆桌会议模式（RoomType==3）时生效</p>
 * @method integer getRecordMerge() 获取<p>录制文件合并开关。0 关闭 1 开启 注：只有在一节课多次启用手动录制时，此功能才有效</p>
 * @method void setRecordMerge(integer $RecordMerge) 设置<p>录制文件合并开关。0 关闭 1 开启 注：只有在一节课多次启用手动录制时，此功能才有效</p>
 * @method integer getEnableLiveRelay() 获取<p>转推开关</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 开启</li></ul>
 * @method void setEnableLiveRelay(integer $EnableLiveRelay) 设置<p>转推开关</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 开启</li></ul>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRoomResponse extends AbstractModel
{
    /**
     * @var string <p>课堂名称。</p>
     */
    public $Name;

    /**
     * @var integer <p>预定的课堂开始时间，unix时间戳（秒）。</p>
     */
    public $StartTime;

    /**
     * @var integer <p>预定的课堂结束时间，unix时间戳（秒）。</p>
     */
    public $EndTime;

    /**
     * @var string <p>老师的UserId。</p>
     */
    public $TeacherId;

    /**
     * @var integer <p>低代码互动课堂的SdkAppId。</p>
     */
    public $SdkAppId;

    /**
     * @var integer <p>观看类型。互动观看 （默认）</p>
     */
    public $AudienceType;

    /**
     * @var integer <p>头像区域，摄像头视频画面的分辨率。可以有如下取值：<br>1 标清<br>2 高清<br>3 全高清</p>
     */
    public $Resolution;

    /**
     * @var integer <p>设置课堂同时最大可与老师进行连麦互动的人数，该参数支持正式上课/开播前调用修改房间修改。小班课取值范围[0,16]，大班课取值范围[0,1]，当取值为0时表示当前课堂/直播，不支持连麦互动。</p>
     */
    public $MaxMicNumber;

    /**
     * @var integer <p>进入课堂时是否自动连麦。可以有以下取值：<br>0 不自动连麦（需要手动申请上麦，默认值）<br>1 自动连麦</p>
     */
    public $AutoMic;

    /**
     * @var integer <p>高音质模式。可以有以下取值：<br>0 不开启高音质（默认值）<br>1 开启高音质</p>
     */
    public $AudioQuality;

    /**
     * @var string <p>课堂子类型，可以有以下取值：videodoc 文档+视频video 纯视频</p>
     */
    public $SubType;

    /**
     * @var integer <p>录制方式。</p><p>枚举值：</p><ul><li>0： 开启自动录制</li><li>1： 禁止录制</li><li>2： 开启手动录制。（仅支持页面录制，需通过startRecord、stopRecord接口控制录制的开始和结束。）</li><li>3： 信令录制。</li></ul>
     */
    public $DisableRecord;

    /**
     * @var array <p>助教UserId列表。</p>
     */
    public $Assistants;

    /**
     * @var string <p>录制地址（协议为https)。仅在房间结束后存在。</p>
     */
    public $RecordUrl;

    /**
     * @var integer <p>课堂状态。0为未开始，1为已开始，2为已结束，3为已过期。</p>
     */
    public $Status;

    /**
     * @var string <p>课堂绑定的群组ID</p>
     */
    public $GroupId;

    /**
     * @var integer <p>打开学生麦克风/摄像头的授权开关</p>
     */
    public $EnableDirectControl;

    /**
     * @var integer <p>开启专注模式。<br>0 收看全部角色音视频(默认)<br>1 只看老师和助教</p>
     */
    public $InteractionMode;

    /**
     * @var integer <p>横竖屏。0：横屏开播（默认值）; 1：竖屏开播，当前仅支持移动端的纯视频类型</p>
     */
    public $VideoOrientation;

    /**
     * @var integer <p>该课堂是否开启了课后评分功能。0：未开启  1：开启</p>
     */
    public $IsGradingRequiredPostClass;

    /**
     * @var integer <p>课堂类型: 0 小班课（默认值）; 1 大班课; 2 1V1 (预留参数，暂未开放); 3 圆桌会议 注：大班课的布局(layout)只有三分屏</p>
     */
    public $RoomType;

    /**
     * @var integer <p>录制时长</p>
     */
    public $VideoDuration;

    /**
     * @var integer <p>拖堂时间：单位分钟，0为不限制(默认值), -1为不能拖堂，大于0为拖堂的时间，最大值120分钟</p>
     */
    public $EndDelayTime;

    /**
     * @var integer <p>直播类型：0 常规（默认）1 伪直播 2 RTMP推流直播</p>
     */
    public $LiveType;

    /**
     * @var string <p>伪直播链接</p>
     */
    public $RecordLiveUrl;

    /**
     * @var integer <p>是否自动开始上课：0 不自动上课（默认） 1 自动上课 live_type=1的时候有效</p>
     */
    public $EnableAutoStart;

    /**
     * @var string <p>录制文件背景图片，支持png、jpg、jpeg、bmp格式，暂不支持透明通道</p>
     */
    public $RecordBackground;

    /**
     * @var string <p>RTMP推流链接</p>
     */
    public $RTMPStreamingURL;

    /**
     * @var string <p>录制自定义场景。注意：仅recordlayout=9的时候此参数有效。需注意各类参数配置正确能够生效。不然会造成录制失败，失败后无法补救。数据内容为用户自定义场景参数，数据格式为json键值对方式，其中键值对的value为string类型。自定义场景参数的含义。如下：     scene：自定义js/css对应的场景值。如scene=recordScene，会加载 recordScene 场景对应的 js/css，这样就可以自定义录制页面的元素。     lng：录制页面对应的语种。如lng=en，则录制界面为en。（枚举值：en,zh，zh-TW，jp，ar，kr，vi）     customToken：录制页面中涉及客户自己的服务需要鉴权时进行配置。一般情况下，无需配置。</p>
     */
    public $RecordScene;

    /**
     * @var string <p>录制自定义语言，仅recordlayout=9的时候此参数有效</p>
     */
    public $RecordLang;

    /**
     * @var integer <p>录制类型 0 仅录制混流（默认） ;1 录制混流+单流，该模式下除混流录制基础上，分别录制老师、台上学生的音视频流，每路录制都会产生相应的录制费用 。示例：0</p>
     */
    public $RecordStream;

    /**
     * @var integer <p>录制模板。房间子类型为视频+白板（SubType=videodoc）时默认为3，房间子类型为纯视频（SubType=video）时默认为0。录制模板枚举值参考：https://cloud.tencent.com/document/product/1639/89744</p>
     */
    public $RecordLayout;

    /**
     * @var integer <p>板书截图生成类型。0 不生成板书；1 全量模式；2 单页去重模式</p>
     */
    public $WhiteBoardSnapshotMode;

    /**
     * @var integer <p>字幕转写功能开关。可以有以下取值：<br>0 不开启字幕转写功能（默认值）<br>1 自动转写模式：上课自动开启，下课自动停止<br>2 手动转写模式：支持老师或者助教通过客户端API手动开启/关闭字幕转写<br>设置0和1时客户端均不展示手动开关，设置2时老师或者助教端展示字幕转写开关</p>
     */
    public $SubtitlesTranscription;

    /**
     * @var array <p>嘉宾Id列表。当圆桌会议模式（RoomType==3）时生效</p>
     */
    public $Guests;

    /**
     * @var integer <p>录制文件合并开关。0 关闭 1 开启 注：只有在一节课多次启用手动录制时，此功能才有效</p>
     */
    public $RecordMerge;

    /**
     * @var integer <p>转推开关</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 开启</li></ul>
     */
    public $EnableLiveRelay;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Name <p>课堂名称。</p>
     * @param integer $StartTime <p>预定的课堂开始时间，unix时间戳（秒）。</p>
     * @param integer $EndTime <p>预定的课堂结束时间，unix时间戳（秒）。</p>
     * @param string $TeacherId <p>老师的UserId。</p>
     * @param integer $SdkAppId <p>低代码互动课堂的SdkAppId。</p>
     * @param integer $AudienceType <p>观看类型。互动观看 （默认）</p>
     * @param integer $Resolution <p>头像区域，摄像头视频画面的分辨率。可以有如下取值：<br>1 标清<br>2 高清<br>3 全高清</p>
     * @param integer $MaxMicNumber <p>设置课堂同时最大可与老师进行连麦互动的人数，该参数支持正式上课/开播前调用修改房间修改。小班课取值范围[0,16]，大班课取值范围[0,1]，当取值为0时表示当前课堂/直播，不支持连麦互动。</p>
     * @param integer $AutoMic <p>进入课堂时是否自动连麦。可以有以下取值：<br>0 不自动连麦（需要手动申请上麦，默认值）<br>1 自动连麦</p>
     * @param integer $AudioQuality <p>高音质模式。可以有以下取值：<br>0 不开启高音质（默认值）<br>1 开启高音质</p>
     * @param string $SubType <p>课堂子类型，可以有以下取值：videodoc 文档+视频video 纯视频</p>
     * @param integer $DisableRecord <p>录制方式。</p><p>枚举值：</p><ul><li>0： 开启自动录制</li><li>1： 禁止录制</li><li>2： 开启手动录制。（仅支持页面录制，需通过startRecord、stopRecord接口控制录制的开始和结束。）</li><li>3： 信令录制。</li></ul>
     * @param array $Assistants <p>助教UserId列表。</p>
     * @param string $RecordUrl <p>录制地址（协议为https)。仅在房间结束后存在。</p>
     * @param integer $Status <p>课堂状态。0为未开始，1为已开始，2为已结束，3为已过期。</p>
     * @param string $GroupId <p>课堂绑定的群组ID</p>
     * @param integer $EnableDirectControl <p>打开学生麦克风/摄像头的授权开关</p>
     * @param integer $InteractionMode <p>开启专注模式。<br>0 收看全部角色音视频(默认)<br>1 只看老师和助教</p>
     * @param integer $VideoOrientation <p>横竖屏。0：横屏开播（默认值）; 1：竖屏开播，当前仅支持移动端的纯视频类型</p>
     * @param integer $IsGradingRequiredPostClass <p>该课堂是否开启了课后评分功能。0：未开启  1：开启</p>
     * @param integer $RoomType <p>课堂类型: 0 小班课（默认值）; 1 大班课; 2 1V1 (预留参数，暂未开放); 3 圆桌会议 注：大班课的布局(layout)只有三分屏</p>
     * @param integer $VideoDuration <p>录制时长</p>
     * @param integer $EndDelayTime <p>拖堂时间：单位分钟，0为不限制(默认值), -1为不能拖堂，大于0为拖堂的时间，最大值120分钟</p>
     * @param integer $LiveType <p>直播类型：0 常规（默认）1 伪直播 2 RTMP推流直播</p>
     * @param string $RecordLiveUrl <p>伪直播链接</p>
     * @param integer $EnableAutoStart <p>是否自动开始上课：0 不自动上课（默认） 1 自动上课 live_type=1的时候有效</p>
     * @param string $RecordBackground <p>录制文件背景图片，支持png、jpg、jpeg、bmp格式，暂不支持透明通道</p>
     * @param string $RTMPStreamingURL <p>RTMP推流链接</p>
     * @param string $RecordScene <p>录制自定义场景。注意：仅recordlayout=9的时候此参数有效。需注意各类参数配置正确能够生效。不然会造成录制失败，失败后无法补救。数据内容为用户自定义场景参数，数据格式为json键值对方式，其中键值对的value为string类型。自定义场景参数的含义。如下：     scene：自定义js/css对应的场景值。如scene=recordScene，会加载 recordScene 场景对应的 js/css，这样就可以自定义录制页面的元素。     lng：录制页面对应的语种。如lng=en，则录制界面为en。（枚举值：en,zh，zh-TW，jp，ar，kr，vi）     customToken：录制页面中涉及客户自己的服务需要鉴权时进行配置。一般情况下，无需配置。</p>
     * @param string $RecordLang <p>录制自定义语言，仅recordlayout=9的时候此参数有效</p>
     * @param integer $RecordStream <p>录制类型 0 仅录制混流（默认） ;1 录制混流+单流，该模式下除混流录制基础上，分别录制老师、台上学生的音视频流，每路录制都会产生相应的录制费用 。示例：0</p>
     * @param integer $RecordLayout <p>录制模板。房间子类型为视频+白板（SubType=videodoc）时默认为3，房间子类型为纯视频（SubType=video）时默认为0。录制模板枚举值参考：https://cloud.tencent.com/document/product/1639/89744</p>
     * @param integer $WhiteBoardSnapshotMode <p>板书截图生成类型。0 不生成板书；1 全量模式；2 单页去重模式</p>
     * @param integer $SubtitlesTranscription <p>字幕转写功能开关。可以有以下取值：<br>0 不开启字幕转写功能（默认值）<br>1 自动转写模式：上课自动开启，下课自动停止<br>2 手动转写模式：支持老师或者助教通过客户端API手动开启/关闭字幕转写<br>设置0和1时客户端均不展示手动开关，设置2时老师或者助教端展示字幕转写开关</p>
     * @param array $Guests <p>嘉宾Id列表。当圆桌会议模式（RoomType==3）时生效</p>
     * @param integer $RecordMerge <p>录制文件合并开关。0 关闭 1 开启 注：只有在一节课多次启用手动录制时，此功能才有效</p>
     * @param integer $EnableLiveRelay <p>转推开关</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 开启</li></ul>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TeacherId",$param) and $param["TeacherId"] !== null) {
            $this->TeacherId = $param["TeacherId"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("AudienceType",$param) and $param["AudienceType"] !== null) {
            $this->AudienceType = $param["AudienceType"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("MaxMicNumber",$param) and $param["MaxMicNumber"] !== null) {
            $this->MaxMicNumber = $param["MaxMicNumber"];
        }

        if (array_key_exists("AutoMic",$param) and $param["AutoMic"] !== null) {
            $this->AutoMic = $param["AutoMic"];
        }

        if (array_key_exists("AudioQuality",$param) and $param["AudioQuality"] !== null) {
            $this->AudioQuality = $param["AudioQuality"];
        }

        if (array_key_exists("SubType",$param) and $param["SubType"] !== null) {
            $this->SubType = $param["SubType"];
        }

        if (array_key_exists("DisableRecord",$param) and $param["DisableRecord"] !== null) {
            $this->DisableRecord = $param["DisableRecord"];
        }

        if (array_key_exists("Assistants",$param) and $param["Assistants"] !== null) {
            $this->Assistants = $param["Assistants"];
        }

        if (array_key_exists("RecordUrl",$param) and $param["RecordUrl"] !== null) {
            $this->RecordUrl = $param["RecordUrl"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("EnableDirectControl",$param) and $param["EnableDirectControl"] !== null) {
            $this->EnableDirectControl = $param["EnableDirectControl"];
        }

        if (array_key_exists("InteractionMode",$param) and $param["InteractionMode"] !== null) {
            $this->InteractionMode = $param["InteractionMode"];
        }

        if (array_key_exists("VideoOrientation",$param) and $param["VideoOrientation"] !== null) {
            $this->VideoOrientation = $param["VideoOrientation"];
        }

        if (array_key_exists("IsGradingRequiredPostClass",$param) and $param["IsGradingRequiredPostClass"] !== null) {
            $this->IsGradingRequiredPostClass = $param["IsGradingRequiredPostClass"];
        }

        if (array_key_exists("RoomType",$param) and $param["RoomType"] !== null) {
            $this->RoomType = $param["RoomType"];
        }

        if (array_key_exists("VideoDuration",$param) and $param["VideoDuration"] !== null) {
            $this->VideoDuration = $param["VideoDuration"];
        }

        if (array_key_exists("EndDelayTime",$param) and $param["EndDelayTime"] !== null) {
            $this->EndDelayTime = $param["EndDelayTime"];
        }

        if (array_key_exists("LiveType",$param) and $param["LiveType"] !== null) {
            $this->LiveType = $param["LiveType"];
        }

        if (array_key_exists("RecordLiveUrl",$param) and $param["RecordLiveUrl"] !== null) {
            $this->RecordLiveUrl = $param["RecordLiveUrl"];
        }

        if (array_key_exists("EnableAutoStart",$param) and $param["EnableAutoStart"] !== null) {
            $this->EnableAutoStart = $param["EnableAutoStart"];
        }

        if (array_key_exists("RecordBackground",$param) and $param["RecordBackground"] !== null) {
            $this->RecordBackground = $param["RecordBackground"];
        }

        if (array_key_exists("RTMPStreamingURL",$param) and $param["RTMPStreamingURL"] !== null) {
            $this->RTMPStreamingURL = $param["RTMPStreamingURL"];
        }

        if (array_key_exists("RecordScene",$param) and $param["RecordScene"] !== null) {
            $this->RecordScene = $param["RecordScene"];
        }

        if (array_key_exists("RecordLang",$param) and $param["RecordLang"] !== null) {
            $this->RecordLang = $param["RecordLang"];
        }

        if (array_key_exists("RecordStream",$param) and $param["RecordStream"] !== null) {
            $this->RecordStream = $param["RecordStream"];
        }

        if (array_key_exists("RecordLayout",$param) and $param["RecordLayout"] !== null) {
            $this->RecordLayout = $param["RecordLayout"];
        }

        if (array_key_exists("WhiteBoardSnapshotMode",$param) and $param["WhiteBoardSnapshotMode"] !== null) {
            $this->WhiteBoardSnapshotMode = $param["WhiteBoardSnapshotMode"];
        }

        if (array_key_exists("SubtitlesTranscription",$param) and $param["SubtitlesTranscription"] !== null) {
            $this->SubtitlesTranscription = $param["SubtitlesTranscription"];
        }

        if (array_key_exists("Guests",$param) and $param["Guests"] !== null) {
            $this->Guests = $param["Guests"];
        }

        if (array_key_exists("RecordMerge",$param) and $param["RecordMerge"] !== null) {
            $this->RecordMerge = $param["RecordMerge"];
        }

        if (array_key_exists("EnableLiveRelay",$param) and $param["EnableLiveRelay"] !== null) {
            $this->EnableLiveRelay = $param["EnableLiveRelay"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
