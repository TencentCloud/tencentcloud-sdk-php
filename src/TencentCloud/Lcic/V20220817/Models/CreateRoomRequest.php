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
 * CreateRoom请求参数结构体
 *
 * @method string getName() 获取<p>课堂名称。<br>字符数不超过256</p>
 * @method void setName(string $Name) 设置<p>课堂名称。<br>字符数不超过256</p>
 * @method integer getStartTime() 获取<p>预定的课堂开始时间，unix时间戳（秒）。</p>
 * @method void setStartTime(integer $StartTime) 设置<p>预定的课堂开始时间，unix时间戳（秒）。</p>
 * @method integer getEndTime() 获取<p>预定的课堂结束时间，unix时间戳（秒）。</p>
 * @method void setEndTime(integer $EndTime) 设置<p>预定的课堂结束时间，unix时间戳（秒）。</p>
 * @method integer getSdkAppId() 获取<p>低代码互动课堂的SdkAppId。</p>
 * @method void setSdkAppId(integer $SdkAppId) 设置<p>低代码互动课堂的SdkAppId。</p>
 * @method integer getResolution() 获取<p>头像区域，摄像头视频画面的分辨率。可以有如下取值：<br>1 标清<br>2 高清<br>3 全高清<br>注意：连麦人数（MaxMicNumber）&gt;6时，仅可使用标清</p>
 * @method void setResolution(integer $Resolution) 设置<p>头像区域，摄像头视频画面的分辨率。可以有如下取值：<br>1 标清<br>2 高清<br>3 全高清<br>注意：连麦人数（MaxMicNumber）&gt;6时，仅可使用标清</p>
 * @method integer getMaxMicNumber() 获取<p>设置课堂同时最大可与老师进行连麦互动的人数，该参数支持正式上课/开播前调用修改房间修改。小班课取值范围[0,16]，大班课取值范围[0,1]，当取值为0时表示当前课堂/直播，不支持连麦互动。该取值影响计费，请根据业务实际情况设置。计费规则见“购买指南”下“计费概述”。</p>
 * @method void setMaxMicNumber(integer $MaxMicNumber) 设置<p>设置课堂同时最大可与老师进行连麦互动的人数，该参数支持正式上课/开播前调用修改房间修改。小班课取值范围[0,16]，大班课取值范围[0,1]，当取值为0时表示当前课堂/直播，不支持连麦互动。该取值影响计费，请根据业务实际情况设置。计费规则见“购买指南”下“计费概述”。</p>
 * @method string getSubType() 获取<p>课堂子类型，可以有以下取值：videodoc 文档+视频video 纯视频</p>
 * @method void setSubType(string $SubType) 设置<p>课堂子类型，可以有以下取值：videodoc 文档+视频video 纯视频</p>
 * @method string getTeacherId() 获取<p>老师ID。通过[注册用户]接口获取的UserId。指定后该用户在房间内拥有老师权限。</p>
 * @method void setTeacherId(string $TeacherId) 设置<p>老师ID。通过[注册用户]接口获取的UserId。指定后该用户在房间内拥有老师权限。</p>
 * @method integer getAutoMic() 获取<p>进入课堂时是否自动连麦。可以有以下取值：<br>0 不自动连麦（需要手动申请上麦，默认值）<br>1 自动连麦</p>
 * @method void setAutoMic(integer $AutoMic) 设置<p>进入课堂时是否自动连麦。可以有以下取值：<br>0 不自动连麦（需要手动申请上麦，默认值）<br>1 自动连麦</p>
 * @method integer getTurnOffMic() 获取<p>释放音视频权限后是否自动取消连麦。可以有以下取值：<br>0 自动取消连麦（默认值）<br>1 保持连麦状态</p>
 * @method void setTurnOffMic(integer $TurnOffMic) 设置<p>释放音视频权限后是否自动取消连麦。可以有以下取值：<br>0 自动取消连麦（默认值）<br>1 保持连麦状态</p>
 * @method integer getAudioQuality() 获取<p>声音音质。可以有以下取值：<br>0：流畅模式（默认值），占用更小的带宽、拥有更好的降噪效果，适用于1对1、小班教学、多人音视频会议等场景。<br>1：高音质模式，适合需要高保真传输音乐的场景，但降噪效果会被削弱，适用于音乐教学场景。</p>
 * @method void setAudioQuality(integer $AudioQuality) 设置<p>声音音质。可以有以下取值：<br>0：流畅模式（默认值），占用更小的带宽、拥有更好的降噪效果，适用于1对1、小班教学、多人音视频会议等场景。<br>1：高音质模式，适合需要高保真传输音乐的场景，但降噪效果会被削弱，适用于音乐教学场景。</p>
 * @method integer getDisableRecord() 获取<p>录制方式。</p><p>枚举值：</p><ul><li>0： 开启自动录制（默认）</li><li>1： 禁止录制</li><li>2： 开启手动录制。（仅支持页面录制，需通过startRecord、stopRecord接口控制录制的开始和结束。）</li><li>3： 信令录制。</li></ul>
 * @method void setDisableRecord(integer $DisableRecord) 设置<p>录制方式。</p><p>枚举值：</p><ul><li>0： 开启自动录制（默认）</li><li>1： 禁止录制</li><li>2： 开启手动录制。（仅支持页面录制，需通过startRecord、stopRecord接口控制录制的开始和结束。）</li><li>3： 信令录制。</li></ul>
 * @method array getAssistants() 获取<p>助教Id列表。通过[注册用户]接口获取的UserId。指定后该用户在房间内拥有助教权限。</p>
 * @method void setAssistants(array $Assistants) 设置<p>助教Id列表。通过[注册用户]接口获取的UserId。指定后该用户在房间内拥有助教权限。</p>
 * @method integer getRTCAudienceNumber() 获取<p>rtc人数。</p>
 * @method void setRTCAudienceNumber(integer $RTCAudienceNumber) 设置<p>rtc人数。</p>
 * @method integer getAudienceType() 获取<p>观看类型。互动观看 （默认）</p>
 * @method void setAudienceType(integer $AudienceType) 设置<p>观看类型。互动观看 （默认）</p>
 * @method integer getRecordLayout() 获取<p>录制模板。未配置时默认取值0。录制模板枚举值参考：https://cloud.tencent.com/document/product/1639/89744</p>
 * @method void setRecordLayout(integer $RecordLayout) 设置<p>录制模板。未配置时默认取值0。录制模板枚举值参考：https://cloud.tencent.com/document/product/1639/89744</p>
 * @method string getGroupId() 获取<p>课堂绑定的群组ID,非空时限制组成员进入</p>
 * @method void setGroupId(string $GroupId) 设置<p>课堂绑定的群组ID,非空时限制组成员进入</p>
 * @method integer getEnableDirectControl() 获取<p>是否允许老师/助教直接控制学生的摄像头/麦克风。可以有以下取值：<br>0 不允许直接控制（需同意，默认值）<br>1 允许直接控制（无需同意）</p>
 * @method void setEnableDirectControl(integer $EnableDirectControl) 设置<p>是否允许老师/助教直接控制学生的摄像头/麦克风。可以有以下取值：<br>0 不允许直接控制（需同意，默认值）<br>1 允许直接控制（无需同意）</p>
 * @method integer getInteractionMode() 获取<p>开启专注模式。<br>0 收看全部角色音视频(默认)<br>1 只看老师和助教</p>
 * @method void setInteractionMode(integer $InteractionMode) 设置<p>开启专注模式。<br>0 收看全部角色音视频(默认)<br>1 只看老师和助教</p>
 * @method integer getVideoOrientation() 获取<p>横竖屏。0：横屏开播（默认值）; 1：竖屏开播，当前仅支持移动端的纯视频类型</p>
 * @method void setVideoOrientation(integer $VideoOrientation) 设置<p>横竖屏。0：横屏开播（默认值）; 1：竖屏开播，当前仅支持移动端的纯视频类型</p>
 * @method integer getIsGradingRequiredPostClass() 获取<p>开启课后评分。 0：不开启(默认)  1：开启</p>
 * @method void setIsGradingRequiredPostClass(integer $IsGradingRequiredPostClass) 设置<p>开启课后评分。 0：不开启(默认)  1：开启</p>
 * @method integer getRoomType() 获取<p>课堂类型。  注：大班课的布局(layout)只有三分屏</p><p>枚举值：</p><ul><li>0： 小班课（默认值）</li><li>1： 大班课</li><li>2： 1V1 (预留参数，暂未开放);</li><li>3： 圆桌会议</li><li>4： 分组直播 </li></ul><p>默认值：0</p>
 * @method void setRoomType(integer $RoomType) 设置<p>课堂类型。  注：大班课的布局(layout)只有三分屏</p><p>枚举值：</p><ul><li>0： 小班课（默认值）</li><li>1： 大班课</li><li>2： 1V1 (预留参数，暂未开放);</li><li>3： 圆桌会议</li><li>4： 分组直播 </li></ul><p>默认值：0</p>
 * @method array getGuests() 获取<p>嘉宾Id列表。当圆桌会议模式（RoomType==3）时生效</p>
 * @method void setGuests(array $Guests) 设置<p>嘉宾Id列表。当圆桌会议模式（RoomType==3）时生效</p>
 * @method integer getEndDelayTime() 获取<p>拖堂时间：单位分钟，0为不限制(默认值), -1为不能拖堂，大于0为拖堂的时间，最大值120分钟</p>
 * @method void setEndDelayTime(integer $EndDelayTime) 设置<p>拖堂时间：单位分钟，0为不限制(默认值), -1为不能拖堂，大于0为拖堂的时间，最大值120分钟</p>
 * @method integer getLiveType() 获取<p>直播类型：0 常规（默认）1 伪直播 2 RTMP推流直播</p>
 * @method void setLiveType(integer $LiveType) 设置<p>直播类型：0 常规（默认）1 伪直播 2 RTMP推流直播</p>
 * @method string getRecordLiveUrl() 获取<p>伪直播链接。 支持的协议以及格式： 协议：HTTP、HTTPS、RTMP、HLS 。格式：FLV、MP3、MP4、MPEG-TS、MOV、MKV、M4A。视频编码：H.264、VP8。音频编码：AAC、OPUS。</p><p>注意：伪直播视频规格建议最高使用1080p 30fps，4k视频会有兼容性问题导致直播失败。</p>
 * @method void setRecordLiveUrl(string $RecordLiveUrl) 设置<p>伪直播链接。 支持的协议以及格式： 协议：HTTP、HTTPS、RTMP、HLS 。格式：FLV、MP3、MP4、MPEG-TS、MOV、MKV、M4A。视频编码：H.264、VP8。音频编码：AAC、OPUS。</p><p>注意：伪直播视频规格建议最高使用1080p 30fps，4k视频会有兼容性问题导致直播失败。</p>
 * @method integer getEnableAutoStart() 获取<p>是否自动开始上课：0 不自动上课（默认） 1 自动上课 live_type=1或2的时候有效</p>
 * @method void setEnableAutoStart(integer $EnableAutoStart) 设置<p>是否自动开始上课：0 不自动上课（默认） 1 自动上课 live_type=1或2的时候有效</p>
 * @method string getRecordBackground() 获取<p>录制文件背景图片，支持png、jpg、jpeg、bmp格式，暂不支持透明通道</p>
 * @method void setRecordBackground(string $RecordBackground) 设置<p>录制文件背景图片，支持png、jpg、jpeg、bmp格式，暂不支持透明通道</p>
 * @method string getRecordScene() 获取<p>录制自定义场景。注意：仅recordlayout=9的时候此参数有效。需注意各类参数配置正确能够生效。不然会造成录制失败，失败后无法补救。数据内容为用户自定义场景参数，数据格式为json键值对方式，其中键值对的value为string类型。</p><p>自定义场景参数的含义。如下：<br>     scene：自定义js/css对应的场景值。如scene=recordScene，会加载 recordScene 场景对应的 js/css，这样就可以自定义录制页面的元素。<br>    lng：录制页面对应的语种。如lng=en，则录制界面为en。（枚举值：en,zh，zh-TW，jp，ar，kr，vi）<br>     customToken：录制页面中涉及客户自己的服务需要鉴权时进行配置。一般情况下，无需配置。</p>
 * @method void setRecordScene(string $RecordScene) 设置<p>录制自定义场景。注意：仅recordlayout=9的时候此参数有效。需注意各类参数配置正确能够生效。不然会造成录制失败，失败后无法补救。数据内容为用户自定义场景参数，数据格式为json键值对方式，其中键值对的value为string类型。</p><p>自定义场景参数的含义。如下：<br>     scene：自定义js/css对应的场景值。如scene=recordScene，会加载 recordScene 场景对应的 js/css，这样就可以自定义录制页面的元素。<br>    lng：录制页面对应的语种。如lng=en，则录制界面为en。（枚举值：en,zh，zh-TW，jp，ar，kr，vi）<br>     customToken：录制页面中涉及客户自己的服务需要鉴权时进行配置。一般情况下，无需配置。</p>
 * @method string getRecordLang() 获取<p>录制自定义语言，仅recordlayout=9的时候此参数有效</p>
 * @method void setRecordLang(string $RecordLang) 设置<p>录制自定义语言，仅recordlayout=9的时候此参数有效</p>
 * @method integer getRecordStream() 获取<p>录制类型 0 仅录制混流（默认） ;1 录制混流+单流，该模式下除混流录制基础上，分别录制老师、台上学生的音视频流，每路录制都会产生相应的录制费用 。示例：0</p>
 * @method void setRecordStream(integer $RecordStream) 设置<p>录制类型 0 仅录制混流（默认） ;1 录制混流+单流，该模式下除混流录制基础上，分别录制老师、台上学生的音视频流，每路录制都会产生相应的录制费用 。示例：0</p>
 * @method integer getWhiteBoardSnapshotMode() 获取<p>板书截图生成类型。0 不生成板书（默认）；1 全量模式；2 单页去重模式</p>
 * @method void setWhiteBoardSnapshotMode(integer $WhiteBoardSnapshotMode) 设置<p>板书截图生成类型。0 不生成板书（默认）；1 全量模式；2 单页去重模式</p>
 * @method integer getSubtitlesTranscription() 获取<p>字幕转写功能开关。可以有以下取值：<br>0 不开启字幕转写功能（默认值）<br>1 自动转写模式：上课自动开启，下课自动停止<br>2 手动转写模式：支持老师或者助教通过客户端API手动开启/关闭字幕转写<br>设置0和1时客户端均不展示手动开关，设置2时老师或者助教端展示字幕转写开关</p>
 * @method void setSubtitlesTranscription(integer $SubtitlesTranscription) 设置<p>字幕转写功能开关。可以有以下取值：<br>0 不开启字幕转写功能（默认值）<br>1 自动转写模式：上课自动开启，下课自动停止<br>2 手动转写模式：支持老师或者助教通过客户端API手动开启/关闭字幕转写<br>设置0和1时客户端均不展示手动开关，设置2时老师或者助教端展示字幕转写开关</p>
 * @method integer getRecordMerge() 获取<p>录制文件合并开关。0 关闭 1 开启 注：只有在一节课多次启用手动录制时，此功能才有效</p>
 * @method void setRecordMerge(integer $RecordMerge) 设置<p>录制文件合并开关。0 关闭 1 开启 注：只有在一节课多次启用手动录制时，此功能才有效</p>
 */
class CreateRoomRequest extends AbstractModel
{
    /**
     * @var string <p>课堂名称。<br>字符数不超过256</p>
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
     * @var integer <p>低代码互动课堂的SdkAppId。</p>
     */
    public $SdkAppId;

    /**
     * @var integer <p>头像区域，摄像头视频画面的分辨率。可以有如下取值：<br>1 标清<br>2 高清<br>3 全高清<br>注意：连麦人数（MaxMicNumber）&gt;6时，仅可使用标清</p>
     */
    public $Resolution;

    /**
     * @var integer <p>设置课堂同时最大可与老师进行连麦互动的人数，该参数支持正式上课/开播前调用修改房间修改。小班课取值范围[0,16]，大班课取值范围[0,1]，当取值为0时表示当前课堂/直播，不支持连麦互动。该取值影响计费，请根据业务实际情况设置。计费规则见“购买指南”下“计费概述”。</p>
     */
    public $MaxMicNumber;

    /**
     * @var string <p>课堂子类型，可以有以下取值：videodoc 文档+视频video 纯视频</p>
     */
    public $SubType;

    /**
     * @var string <p>老师ID。通过[注册用户]接口获取的UserId。指定后该用户在房间内拥有老师权限。</p>
     */
    public $TeacherId;

    /**
     * @var integer <p>进入课堂时是否自动连麦。可以有以下取值：<br>0 不自动连麦（需要手动申请上麦，默认值）<br>1 自动连麦</p>
     */
    public $AutoMic;

    /**
     * @var integer <p>释放音视频权限后是否自动取消连麦。可以有以下取值：<br>0 自动取消连麦（默认值）<br>1 保持连麦状态</p>
     */
    public $TurnOffMic;

    /**
     * @var integer <p>声音音质。可以有以下取值：<br>0：流畅模式（默认值），占用更小的带宽、拥有更好的降噪效果，适用于1对1、小班教学、多人音视频会议等场景。<br>1：高音质模式，适合需要高保真传输音乐的场景，但降噪效果会被削弱，适用于音乐教学场景。</p>
     */
    public $AudioQuality;

    /**
     * @var integer <p>录制方式。</p><p>枚举值：</p><ul><li>0： 开启自动录制（默认）</li><li>1： 禁止录制</li><li>2： 开启手动录制。（仅支持页面录制，需通过startRecord、stopRecord接口控制录制的开始和结束。）</li><li>3： 信令录制。</li></ul>
     */
    public $DisableRecord;

    /**
     * @var array <p>助教Id列表。通过[注册用户]接口获取的UserId。指定后该用户在房间内拥有助教权限。</p>
     */
    public $Assistants;

    /**
     * @var integer <p>rtc人数。</p>
     * @deprecated
     */
    public $RTCAudienceNumber;

    /**
     * @var integer <p>观看类型。互动观看 （默认）</p>
     */
    public $AudienceType;

    /**
     * @var integer <p>录制模板。未配置时默认取值0。录制模板枚举值参考：https://cloud.tencent.com/document/product/1639/89744</p>
     */
    public $RecordLayout;

    /**
     * @var string <p>课堂绑定的群组ID,非空时限制组成员进入</p>
     */
    public $GroupId;

    /**
     * @var integer <p>是否允许老师/助教直接控制学生的摄像头/麦克风。可以有以下取值：<br>0 不允许直接控制（需同意，默认值）<br>1 允许直接控制（无需同意）</p>
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
     * @var integer <p>开启课后评分。 0：不开启(默认)  1：开启</p>
     */
    public $IsGradingRequiredPostClass;

    /**
     * @var integer <p>课堂类型。  注：大班课的布局(layout)只有三分屏</p><p>枚举值：</p><ul><li>0： 小班课（默认值）</li><li>1： 大班课</li><li>2： 1V1 (预留参数，暂未开放);</li><li>3： 圆桌会议</li><li>4： 分组直播 </li></ul><p>默认值：0</p>
     */
    public $RoomType;

    /**
     * @var array <p>嘉宾Id列表。当圆桌会议模式（RoomType==3）时生效</p>
     */
    public $Guests;

    /**
     * @var integer <p>拖堂时间：单位分钟，0为不限制(默认值), -1为不能拖堂，大于0为拖堂的时间，最大值120分钟</p>
     */
    public $EndDelayTime;

    /**
     * @var integer <p>直播类型：0 常规（默认）1 伪直播 2 RTMP推流直播</p>
     */
    public $LiveType;

    /**
     * @var string <p>伪直播链接。 支持的协议以及格式： 协议：HTTP、HTTPS、RTMP、HLS 。格式：FLV、MP3、MP4、MPEG-TS、MOV、MKV、M4A。视频编码：H.264、VP8。音频编码：AAC、OPUS。</p><p>注意：伪直播视频规格建议最高使用1080p 30fps，4k视频会有兼容性问题导致直播失败。</p>
     */
    public $RecordLiveUrl;

    /**
     * @var integer <p>是否自动开始上课：0 不自动上课（默认） 1 自动上课 live_type=1或2的时候有效</p>
     */
    public $EnableAutoStart;

    /**
     * @var string <p>录制文件背景图片，支持png、jpg、jpeg、bmp格式，暂不支持透明通道</p>
     */
    public $RecordBackground;

    /**
     * @var string <p>录制自定义场景。注意：仅recordlayout=9的时候此参数有效。需注意各类参数配置正确能够生效。不然会造成录制失败，失败后无法补救。数据内容为用户自定义场景参数，数据格式为json键值对方式，其中键值对的value为string类型。</p><p>自定义场景参数的含义。如下：<br>     scene：自定义js/css对应的场景值。如scene=recordScene，会加载 recordScene 场景对应的 js/css，这样就可以自定义录制页面的元素。<br>    lng：录制页面对应的语种。如lng=en，则录制界面为en。（枚举值：en,zh，zh-TW，jp，ar，kr，vi）<br>     customToken：录制页面中涉及客户自己的服务需要鉴权时进行配置。一般情况下，无需配置。</p>
     */
    public $RecordScene;

    /**
     * @var string <p>录制自定义语言，仅recordlayout=9的时候此参数有效</p>
     * @deprecated
     */
    public $RecordLang;

    /**
     * @var integer <p>录制类型 0 仅录制混流（默认） ;1 录制混流+单流，该模式下除混流录制基础上，分别录制老师、台上学生的音视频流，每路录制都会产生相应的录制费用 。示例：0</p>
     */
    public $RecordStream;

    /**
     * @var integer <p>板书截图生成类型。0 不生成板书（默认）；1 全量模式；2 单页去重模式</p>
     */
    public $WhiteBoardSnapshotMode;

    /**
     * @var integer <p>字幕转写功能开关。可以有以下取值：<br>0 不开启字幕转写功能（默认值）<br>1 自动转写模式：上课自动开启，下课自动停止<br>2 手动转写模式：支持老师或者助教通过客户端API手动开启/关闭字幕转写<br>设置0和1时客户端均不展示手动开关，设置2时老师或者助教端展示字幕转写开关</p>
     */
    public $SubtitlesTranscription;

    /**
     * @var integer <p>录制文件合并开关。0 关闭 1 开启 注：只有在一节课多次启用手动录制时，此功能才有效</p>
     */
    public $RecordMerge;

    /**
     * @param string $Name <p>课堂名称。<br>字符数不超过256</p>
     * @param integer $StartTime <p>预定的课堂开始时间，unix时间戳（秒）。</p>
     * @param integer $EndTime <p>预定的课堂结束时间，unix时间戳（秒）。</p>
     * @param integer $SdkAppId <p>低代码互动课堂的SdkAppId。</p>
     * @param integer $Resolution <p>头像区域，摄像头视频画面的分辨率。可以有如下取值：<br>1 标清<br>2 高清<br>3 全高清<br>注意：连麦人数（MaxMicNumber）&gt;6时，仅可使用标清</p>
     * @param integer $MaxMicNumber <p>设置课堂同时最大可与老师进行连麦互动的人数，该参数支持正式上课/开播前调用修改房间修改。小班课取值范围[0,16]，大班课取值范围[0,1]，当取值为0时表示当前课堂/直播，不支持连麦互动。该取值影响计费，请根据业务实际情况设置。计费规则见“购买指南”下“计费概述”。</p>
     * @param string $SubType <p>课堂子类型，可以有以下取值：videodoc 文档+视频video 纯视频</p>
     * @param string $TeacherId <p>老师ID。通过[注册用户]接口获取的UserId。指定后该用户在房间内拥有老师权限。</p>
     * @param integer $AutoMic <p>进入课堂时是否自动连麦。可以有以下取值：<br>0 不自动连麦（需要手动申请上麦，默认值）<br>1 自动连麦</p>
     * @param integer $TurnOffMic <p>释放音视频权限后是否自动取消连麦。可以有以下取值：<br>0 自动取消连麦（默认值）<br>1 保持连麦状态</p>
     * @param integer $AudioQuality <p>声音音质。可以有以下取值：<br>0：流畅模式（默认值），占用更小的带宽、拥有更好的降噪效果，适用于1对1、小班教学、多人音视频会议等场景。<br>1：高音质模式，适合需要高保真传输音乐的场景，但降噪效果会被削弱，适用于音乐教学场景。</p>
     * @param integer $DisableRecord <p>录制方式。</p><p>枚举值：</p><ul><li>0： 开启自动录制（默认）</li><li>1： 禁止录制</li><li>2： 开启手动录制。（仅支持页面录制，需通过startRecord、stopRecord接口控制录制的开始和结束。）</li><li>3： 信令录制。</li></ul>
     * @param array $Assistants <p>助教Id列表。通过[注册用户]接口获取的UserId。指定后该用户在房间内拥有助教权限。</p>
     * @param integer $RTCAudienceNumber <p>rtc人数。</p>
     * @param integer $AudienceType <p>观看类型。互动观看 （默认）</p>
     * @param integer $RecordLayout <p>录制模板。未配置时默认取值0。录制模板枚举值参考：https://cloud.tencent.com/document/product/1639/89744</p>
     * @param string $GroupId <p>课堂绑定的群组ID,非空时限制组成员进入</p>
     * @param integer $EnableDirectControl <p>是否允许老师/助教直接控制学生的摄像头/麦克风。可以有以下取值：<br>0 不允许直接控制（需同意，默认值）<br>1 允许直接控制（无需同意）</p>
     * @param integer $InteractionMode <p>开启专注模式。<br>0 收看全部角色音视频(默认)<br>1 只看老师和助教</p>
     * @param integer $VideoOrientation <p>横竖屏。0：横屏开播（默认值）; 1：竖屏开播，当前仅支持移动端的纯视频类型</p>
     * @param integer $IsGradingRequiredPostClass <p>开启课后评分。 0：不开启(默认)  1：开启</p>
     * @param integer $RoomType <p>课堂类型。  注：大班课的布局(layout)只有三分屏</p><p>枚举值：</p><ul><li>0： 小班课（默认值）</li><li>1： 大班课</li><li>2： 1V1 (预留参数，暂未开放);</li><li>3： 圆桌会议</li><li>4： 分组直播 </li></ul><p>默认值：0</p>
     * @param array $Guests <p>嘉宾Id列表。当圆桌会议模式（RoomType==3）时生效</p>
     * @param integer $EndDelayTime <p>拖堂时间：单位分钟，0为不限制(默认值), -1为不能拖堂，大于0为拖堂的时间，最大值120分钟</p>
     * @param integer $LiveType <p>直播类型：0 常规（默认）1 伪直播 2 RTMP推流直播</p>
     * @param string $RecordLiveUrl <p>伪直播链接。 支持的协议以及格式： 协议：HTTP、HTTPS、RTMP、HLS 。格式：FLV、MP3、MP4、MPEG-TS、MOV、MKV、M4A。视频编码：H.264、VP8。音频编码：AAC、OPUS。</p><p>注意：伪直播视频规格建议最高使用1080p 30fps，4k视频会有兼容性问题导致直播失败。</p>
     * @param integer $EnableAutoStart <p>是否自动开始上课：0 不自动上课（默认） 1 自动上课 live_type=1或2的时候有效</p>
     * @param string $RecordBackground <p>录制文件背景图片，支持png、jpg、jpeg、bmp格式，暂不支持透明通道</p>
     * @param string $RecordScene <p>录制自定义场景。注意：仅recordlayout=9的时候此参数有效。需注意各类参数配置正确能够生效。不然会造成录制失败，失败后无法补救。数据内容为用户自定义场景参数，数据格式为json键值对方式，其中键值对的value为string类型。</p><p>自定义场景参数的含义。如下：<br>     scene：自定义js/css对应的场景值。如scene=recordScene，会加载 recordScene 场景对应的 js/css，这样就可以自定义录制页面的元素。<br>    lng：录制页面对应的语种。如lng=en，则录制界面为en。（枚举值：en,zh，zh-TW，jp，ar，kr，vi）<br>     customToken：录制页面中涉及客户自己的服务需要鉴权时进行配置。一般情况下，无需配置。</p>
     * @param string $RecordLang <p>录制自定义语言，仅recordlayout=9的时候此参数有效</p>
     * @param integer $RecordStream <p>录制类型 0 仅录制混流（默认） ;1 录制混流+单流，该模式下除混流录制基础上，分别录制老师、台上学生的音视频流，每路录制都会产生相应的录制费用 。示例：0</p>
     * @param integer $WhiteBoardSnapshotMode <p>板书截图生成类型。0 不生成板书（默认）；1 全量模式；2 单页去重模式</p>
     * @param integer $SubtitlesTranscription <p>字幕转写功能开关。可以有以下取值：<br>0 不开启字幕转写功能（默认值）<br>1 自动转写模式：上课自动开启，下课自动停止<br>2 手动转写模式：支持老师或者助教通过客户端API手动开启/关闭字幕转写<br>设置0和1时客户端均不展示手动开关，设置2时老师或者助教端展示字幕转写开关</p>
     * @param integer $RecordMerge <p>录制文件合并开关。0 关闭 1 开启 注：只有在一节课多次启用手动录制时，此功能才有效</p>
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

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("MaxMicNumber",$param) and $param["MaxMicNumber"] !== null) {
            $this->MaxMicNumber = $param["MaxMicNumber"];
        }

        if (array_key_exists("SubType",$param) and $param["SubType"] !== null) {
            $this->SubType = $param["SubType"];
        }

        if (array_key_exists("TeacherId",$param) and $param["TeacherId"] !== null) {
            $this->TeacherId = $param["TeacherId"];
        }

        if (array_key_exists("AutoMic",$param) and $param["AutoMic"] !== null) {
            $this->AutoMic = $param["AutoMic"];
        }

        if (array_key_exists("TurnOffMic",$param) and $param["TurnOffMic"] !== null) {
            $this->TurnOffMic = $param["TurnOffMic"];
        }

        if (array_key_exists("AudioQuality",$param) and $param["AudioQuality"] !== null) {
            $this->AudioQuality = $param["AudioQuality"];
        }

        if (array_key_exists("DisableRecord",$param) and $param["DisableRecord"] !== null) {
            $this->DisableRecord = $param["DisableRecord"];
        }

        if (array_key_exists("Assistants",$param) and $param["Assistants"] !== null) {
            $this->Assistants = $param["Assistants"];
        }

        if (array_key_exists("RTCAudienceNumber",$param) and $param["RTCAudienceNumber"] !== null) {
            $this->RTCAudienceNumber = $param["RTCAudienceNumber"];
        }

        if (array_key_exists("AudienceType",$param) and $param["AudienceType"] !== null) {
            $this->AudienceType = $param["AudienceType"];
        }

        if (array_key_exists("RecordLayout",$param) and $param["RecordLayout"] !== null) {
            $this->RecordLayout = $param["RecordLayout"];
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

        if (array_key_exists("Guests",$param) and $param["Guests"] !== null) {
            $this->Guests = $param["Guests"];
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

        if (array_key_exists("RecordScene",$param) and $param["RecordScene"] !== null) {
            $this->RecordScene = $param["RecordScene"];
        }

        if (array_key_exists("RecordLang",$param) and $param["RecordLang"] !== null) {
            $this->RecordLang = $param["RecordLang"];
        }

        if (array_key_exists("RecordStream",$param) and $param["RecordStream"] !== null) {
            $this->RecordStream = $param["RecordStream"];
        }

        if (array_key_exists("WhiteBoardSnapshotMode",$param) and $param["WhiteBoardSnapshotMode"] !== null) {
            $this->WhiteBoardSnapshotMode = $param["WhiteBoardSnapshotMode"];
        }

        if (array_key_exists("SubtitlesTranscription",$param) and $param["SubtitlesTranscription"] !== null) {
            $this->SubtitlesTranscription = $param["SubtitlesTranscription"];
        }

        if (array_key_exists("RecordMerge",$param) and $param["RecordMerge"] !== null) {
            $this->RecordMerge = $param["RecordMerge"];
        }
    }
}
