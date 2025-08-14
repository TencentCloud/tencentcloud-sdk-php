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
 * @method string getName() 获取课堂名称。
 * @method void setName(string $Name) 设置课堂名称。
 * @method integer getStartTime() 获取预定的课堂开始时间，unix时间戳（秒）。
 * @method void setStartTime(integer $StartTime) 设置预定的课堂开始时间，unix时间戳（秒）。
 * @method integer getEndTime() 获取预定的课堂结束时间，unix时间戳（秒）。
 * @method void setEndTime(integer $EndTime) 设置预定的课堂结束时间，unix时间戳（秒）。
 * @method integer getSdkAppId() 获取低代码互动课堂的SdkAppId。
 * @method void setSdkAppId(integer $SdkAppId) 设置低代码互动课堂的SdkAppId。
 * @method integer getResolution() 获取头像区域，摄像头视频画面的分辨率。可以有如下取值：
1 标清
2 高清
3 全高清
注意：连麦人数（MaxMicNumber）>6时，仅可使用标清
 * @method void setResolution(integer $Resolution) 设置头像区域，摄像头视频画面的分辨率。可以有如下取值：
1 标清
2 高清
3 全高清
注意：连麦人数（MaxMicNumber）>6时，仅可使用标清
 * @method integer getMaxMicNumber() 获取设置课堂同时最大可与老师进行连麦互动的人数，该参数支持正式上课/开播前调用修改房间修改。小班课取值范围[0,16]，大班课取值范围[0,1]，当取值为0时表示当前课堂/直播，不支持连麦互动。该取值影响计费，请根据业务实际情况设置。计费规则见“购买指南”下“计费概述”。
 * @method void setMaxMicNumber(integer $MaxMicNumber) 设置设置课堂同时最大可与老师进行连麦互动的人数，该参数支持正式上课/开播前调用修改房间修改。小班课取值范围[0,16]，大班课取值范围[0,1]，当取值为0时表示当前课堂/直播，不支持连麦互动。该取值影响计费，请根据业务实际情况设置。计费规则见“购买指南”下“计费概述”。
 * @method string getSubType() 获取课堂子类型，可以有以下取值：videodoc 文档+视频video 纯视频
 * @method void setSubType(string $SubType) 设置课堂子类型，可以有以下取值：videodoc 文档+视频video 纯视频
 * @method string getTeacherId() 获取老师ID。通过[注册用户]接口获取的UserId。指定后该用户在房间内拥有老师权限。
 * @method void setTeacherId(string $TeacherId) 设置老师ID。通过[注册用户]接口获取的UserId。指定后该用户在房间内拥有老师权限。
 * @method integer getAutoMic() 获取进入课堂时是否自动连麦。可以有以下取值：
0 不自动连麦（需要手动申请上麦，默认值）
1 自动连麦
 * @method void setAutoMic(integer $AutoMic) 设置进入课堂时是否自动连麦。可以有以下取值：
0 不自动连麦（需要手动申请上麦，默认值）
1 自动连麦
 * @method integer getTurnOffMic() 获取释放音视频权限后是否自动取消连麦。可以有以下取值：
0 自动取消连麦（默认值）
1 保持连麦状态
 * @method void setTurnOffMic(integer $TurnOffMic) 设置释放音视频权限后是否自动取消连麦。可以有以下取值：
0 自动取消连麦（默认值）
1 保持连麦状态
 * @method integer getAudioQuality() 获取声音音质。可以有以下取值：
0：流畅模式（默认值），占用更小的带宽、拥有更好的降噪效果，适用于1对1、小班教学、多人音视频会议等场景。
1：高音质模式，适合需要高保真传输音乐的场景，但降噪效果会被削弱，适用于音乐教学场景。
 * @method void setAudioQuality(integer $AudioQuality) 设置声音音质。可以有以下取值：
0：流畅模式（默认值），占用更小的带宽、拥有更好的降噪效果，适用于1对1、小班教学、多人音视频会议等场景。
1：高音质模式，适合需要高保真传输音乐的场景，但降噪效果会被削弱，适用于音乐教学场景。
 * @method integer getDisableRecord() 获取录制方式，可以有以下取值：0 开启自动录制（默认值）1  禁止录制2 开启手动录制 注： - 如果该配置取值为0，录制将从上课后开始，课堂结束后停止。 - 如果该配置取值为2，需通过startRecord、stopRecord接口控制录制的开始和结束。 
 * @method void setDisableRecord(integer $DisableRecord) 设置录制方式，可以有以下取值：0 开启自动录制（默认值）1  禁止录制2 开启手动录制 注： - 如果该配置取值为0，录制将从上课后开始，课堂结束后停止。 - 如果该配置取值为2，需通过startRecord、stopRecord接口控制录制的开始和结束。 
 * @method array getAssistants() 获取助教Id列表。通过[注册用户]接口获取的UserId。指定后该用户在房间内拥有助教权限。
 * @method void setAssistants(array $Assistants) 设置助教Id列表。通过[注册用户]接口获取的UserId。指定后该用户在房间内拥有助教权限。
 * @method integer getRTCAudienceNumber() 获取rtc人数。
 * @method void setRTCAudienceNumber(integer $RTCAudienceNumber) 设置rtc人数。
 * @method integer getAudienceType() 获取观看类型。互动观看 （默认）
 * @method void setAudienceType(integer $AudienceType) 设置观看类型。互动观看 （默认）
 * @method integer getRecordLayout() 获取录制模板。未配置时默认取值0。录制模板枚举值参考：https://cloud.tencent.com/document/product/1639/89744
 * @method void setRecordLayout(integer $RecordLayout) 设置录制模板。未配置时默认取值0。录制模板枚举值参考：https://cloud.tencent.com/document/product/1639/89744
 * @method string getGroupId() 获取课堂绑定的群组ID,非空时限制组成员进入
 * @method void setGroupId(string $GroupId) 设置课堂绑定的群组ID,非空时限制组成员进入
 * @method integer getEnableDirectControl() 获取是否允许老师/助教直接控制学生的摄像头/麦克风。可以有以下取值：
0 不允许直接控制（需同意，默认值）
1 允许直接控制（无需同意）
 * @method void setEnableDirectControl(integer $EnableDirectControl) 设置是否允许老师/助教直接控制学生的摄像头/麦克风。可以有以下取值：
0 不允许直接控制（需同意，默认值）
1 允许直接控制（无需同意）
 * @method integer getInteractionMode() 获取开启专注模式。
0 收看全部角色音视频(默认)
1 只看老师和助教
 * @method void setInteractionMode(integer $InteractionMode) 设置开启专注模式。
0 收看全部角色音视频(默认)
1 只看老师和助教
 * @method integer getVideoOrientation() 获取横竖屏。0：横屏开播（默认值）; 1：竖屏开播，当前仅支持移动端的纯视频类型
 * @method void setVideoOrientation(integer $VideoOrientation) 设置横竖屏。0：横屏开播（默认值）; 1：竖屏开播，当前仅支持移动端的纯视频类型
 * @method integer getIsGradingRequiredPostClass() 获取开启课后评分。 0：不开启(默认)  1：开启
 * @method void setIsGradingRequiredPostClass(integer $IsGradingRequiredPostClass) 设置开启课后评分。 0：不开启(默认)  1：开启
 * @method integer getRoomType() 获取课堂类型: 0 小班课（默认值）; 1 大班课; 2 1V1 (预留参数，暂未开放); 3 圆桌会议 注：大班课的布局(layout)只有三分屏
 * @method void setRoomType(integer $RoomType) 设置课堂类型: 0 小班课（默认值）; 1 大班课; 2 1V1 (预留参数，暂未开放); 3 圆桌会议 注：大班课的布局(layout)只有三分屏
 * @method array getGuests() 获取嘉宾Id列表。当圆桌会议模式（RoomType==3）时生效
 * @method void setGuests(array $Guests) 设置嘉宾Id列表。当圆桌会议模式（RoomType==3）时生效
 * @method integer getEndDelayTime() 获取拖堂时间：单位分钟，0为不限制(默认值), -1为不能拖堂，大于0为拖堂的时间，最大值120分钟
 * @method void setEndDelayTime(integer $EndDelayTime) 设置拖堂时间：单位分钟，0为不限制(默认值), -1为不能拖堂，大于0为拖堂的时间，最大值120分钟
 * @method integer getLiveType() 获取直播类型：0 常规（默认）1 伪直播 2 RTMP推流直播
 * @method void setLiveType(integer $LiveType) 设置直播类型：0 常规（默认）1 伪直播 2 RTMP推流直播
 * @method string getRecordLiveUrl() 获取伪直播链接。 支持的协议以及格式： 协议：HTTP、HTTPS、RTMP、HLS 。格式：FLV、MP3、MP4、MPEG-TS、MOV、MKV、M4A。视频编码：H.264、VP8。音频编码：AAC、OPUS。
 * @method void setRecordLiveUrl(string $RecordLiveUrl) 设置伪直播链接。 支持的协议以及格式： 协议：HTTP、HTTPS、RTMP、HLS 。格式：FLV、MP3、MP4、MPEG-TS、MOV、MKV、M4A。视频编码：H.264、VP8。音频编码：AAC、OPUS。
 * @method integer getEnableAutoStart() 获取是否自动开始上课：0 不自动上课（默认） 1 自动上课 live_type=1或2的时候有效
 * @method void setEnableAutoStart(integer $EnableAutoStart) 设置是否自动开始上课：0 不自动上课（默认） 1 自动上课 live_type=1或2的时候有效
 * @method string getRecordBackground() 获取录制文件背景图片，支持png、jpg、jpeg、bmp格式，暂不支持透明通道
 * @method void setRecordBackground(string $RecordBackground) 设置录制文件背景图片，支持png、jpg、jpeg、bmp格式，暂不支持透明通道
 * @method string getRecordScene() 获取录制自定义场景。注意：仅recordlayout=9的时候此参数有效。需注意各类参数配置正确能够生效。不然会造成录制失败，失败后无法补救。数据内容为用户自定义场景参数，数据格式为json键值对方式，其中键值对的value为string类型。

自定义场景参数的含义。如下：
     scene：自定义js/css对应的场景值。如scene=recordScene，会加载 recordScene 场景对应的 js/css，这样就可以自定义录制页面的元素。 
    lng：录制页面对应的语种。如lng=en，则录制界面为en。（枚举值：en,zh，zh-TW，jp，ar，kr，vi）
     customToken：录制页面中涉及客户自己的服务需要鉴权时进行配置。一般情况下，无需配置。
 * @method void setRecordScene(string $RecordScene) 设置录制自定义场景。注意：仅recordlayout=9的时候此参数有效。需注意各类参数配置正确能够生效。不然会造成录制失败，失败后无法补救。数据内容为用户自定义场景参数，数据格式为json键值对方式，其中键值对的value为string类型。

自定义场景参数的含义。如下：
     scene：自定义js/css对应的场景值。如scene=recordScene，会加载 recordScene 场景对应的 js/css，这样就可以自定义录制页面的元素。 
    lng：录制页面对应的语种。如lng=en，则录制界面为en。（枚举值：en,zh，zh-TW，jp，ar，kr，vi）
     customToken：录制页面中涉及客户自己的服务需要鉴权时进行配置。一般情况下，无需配置。
 * @method string getRecordLang() 获取录制自定义语言，仅recordlayout=9的时候此参数有效
 * @method void setRecordLang(string $RecordLang) 设置录制自定义语言，仅recordlayout=9的时候此参数有效
 * @method integer getRecordStream() 获取录制类型 0 仅录制混流（默认） ;1 录制混流+单流，该模式下除混流录制基础上，分别录制老师、台上学生的音视频流，每路录制都会产生相应的录制费用 。示例：0
 * @method void setRecordStream(integer $RecordStream) 设置录制类型 0 仅录制混流（默认） ;1 录制混流+单流，该模式下除混流录制基础上，分别录制老师、台上学生的音视频流，每路录制都会产生相应的录制费用 。示例：0
 * @method integer getWhiteBoardSnapshotMode() 获取板书截图生成类型。0 不生成板书（默认）；1 全量模式；2 单页去重模式
 * @method void setWhiteBoardSnapshotMode(integer $WhiteBoardSnapshotMode) 设置板书截图生成类型。0 不生成板书（默认）；1 全量模式；2 单页去重模式
 * @method integer getSubtitlesTranscription() 获取字幕转写功能开关：0关闭，1开启，默认关闭
 * @method void setSubtitlesTranscription(integer $SubtitlesTranscription) 设置字幕转写功能开关：0关闭，1开启，默认关闭
 */
class CreateRoomRequest extends AbstractModel
{
    /**
     * @var string 课堂名称。
     */
    public $Name;

    /**
     * @var integer 预定的课堂开始时间，unix时间戳（秒）。
     */
    public $StartTime;

    /**
     * @var integer 预定的课堂结束时间，unix时间戳（秒）。
     */
    public $EndTime;

    /**
     * @var integer 低代码互动课堂的SdkAppId。
     */
    public $SdkAppId;

    /**
     * @var integer 头像区域，摄像头视频画面的分辨率。可以有如下取值：
1 标清
2 高清
3 全高清
注意：连麦人数（MaxMicNumber）>6时，仅可使用标清
     */
    public $Resolution;

    /**
     * @var integer 设置课堂同时最大可与老师进行连麦互动的人数，该参数支持正式上课/开播前调用修改房间修改。小班课取值范围[0,16]，大班课取值范围[0,1]，当取值为0时表示当前课堂/直播，不支持连麦互动。该取值影响计费，请根据业务实际情况设置。计费规则见“购买指南”下“计费概述”。
     */
    public $MaxMicNumber;

    /**
     * @var string 课堂子类型，可以有以下取值：videodoc 文档+视频video 纯视频
     */
    public $SubType;

    /**
     * @var string 老师ID。通过[注册用户]接口获取的UserId。指定后该用户在房间内拥有老师权限。
     */
    public $TeacherId;

    /**
     * @var integer 进入课堂时是否自动连麦。可以有以下取值：
0 不自动连麦（需要手动申请上麦，默认值）
1 自动连麦
     */
    public $AutoMic;

    /**
     * @var integer 释放音视频权限后是否自动取消连麦。可以有以下取值：
0 自动取消连麦（默认值）
1 保持连麦状态
     */
    public $TurnOffMic;

    /**
     * @var integer 声音音质。可以有以下取值：
0：流畅模式（默认值），占用更小的带宽、拥有更好的降噪效果，适用于1对1、小班教学、多人音视频会议等场景。
1：高音质模式，适合需要高保真传输音乐的场景，但降噪效果会被削弱，适用于音乐教学场景。
     */
    public $AudioQuality;

    /**
     * @var integer 录制方式，可以有以下取值：0 开启自动录制（默认值）1  禁止录制2 开启手动录制 注： - 如果该配置取值为0，录制将从上课后开始，课堂结束后停止。 - 如果该配置取值为2，需通过startRecord、stopRecord接口控制录制的开始和结束。 
     */
    public $DisableRecord;

    /**
     * @var array 助教Id列表。通过[注册用户]接口获取的UserId。指定后该用户在房间内拥有助教权限。
     */
    public $Assistants;

    /**
     * @var integer rtc人数。
     * @deprecated
     */
    public $RTCAudienceNumber;

    /**
     * @var integer 观看类型。互动观看 （默认）
     */
    public $AudienceType;

    /**
     * @var integer 录制模板。未配置时默认取值0。录制模板枚举值参考：https://cloud.tencent.com/document/product/1639/89744
     */
    public $RecordLayout;

    /**
     * @var string 课堂绑定的群组ID,非空时限制组成员进入
     */
    public $GroupId;

    /**
     * @var integer 是否允许老师/助教直接控制学生的摄像头/麦克风。可以有以下取值：
0 不允许直接控制（需同意，默认值）
1 允许直接控制（无需同意）
     */
    public $EnableDirectControl;

    /**
     * @var integer 开启专注模式。
0 收看全部角色音视频(默认)
1 只看老师和助教
     */
    public $InteractionMode;

    /**
     * @var integer 横竖屏。0：横屏开播（默认值）; 1：竖屏开播，当前仅支持移动端的纯视频类型
     */
    public $VideoOrientation;

    /**
     * @var integer 开启课后评分。 0：不开启(默认)  1：开启
     */
    public $IsGradingRequiredPostClass;

    /**
     * @var integer 课堂类型: 0 小班课（默认值）; 1 大班课; 2 1V1 (预留参数，暂未开放); 3 圆桌会议 注：大班课的布局(layout)只有三分屏
     */
    public $RoomType;

    /**
     * @var array 嘉宾Id列表。当圆桌会议模式（RoomType==3）时生效
     */
    public $Guests;

    /**
     * @var integer 拖堂时间：单位分钟，0为不限制(默认值), -1为不能拖堂，大于0为拖堂的时间，最大值120分钟
     */
    public $EndDelayTime;

    /**
     * @var integer 直播类型：0 常规（默认）1 伪直播 2 RTMP推流直播
     */
    public $LiveType;

    /**
     * @var string 伪直播链接。 支持的协议以及格式： 协议：HTTP、HTTPS、RTMP、HLS 。格式：FLV、MP3、MP4、MPEG-TS、MOV、MKV、M4A。视频编码：H.264、VP8。音频编码：AAC、OPUS。
     */
    public $RecordLiveUrl;

    /**
     * @var integer 是否自动开始上课：0 不自动上课（默认） 1 自动上课 live_type=1或2的时候有效
     */
    public $EnableAutoStart;

    /**
     * @var string 录制文件背景图片，支持png、jpg、jpeg、bmp格式，暂不支持透明通道
     */
    public $RecordBackground;

    /**
     * @var string 录制自定义场景。注意：仅recordlayout=9的时候此参数有效。需注意各类参数配置正确能够生效。不然会造成录制失败，失败后无法补救。数据内容为用户自定义场景参数，数据格式为json键值对方式，其中键值对的value为string类型。

自定义场景参数的含义。如下：
     scene：自定义js/css对应的场景值。如scene=recordScene，会加载 recordScene 场景对应的 js/css，这样就可以自定义录制页面的元素。 
    lng：录制页面对应的语种。如lng=en，则录制界面为en。（枚举值：en,zh，zh-TW，jp，ar，kr，vi）
     customToken：录制页面中涉及客户自己的服务需要鉴权时进行配置。一般情况下，无需配置。
     */
    public $RecordScene;

    /**
     * @var string 录制自定义语言，仅recordlayout=9的时候此参数有效
     * @deprecated
     */
    public $RecordLang;

    /**
     * @var integer 录制类型 0 仅录制混流（默认） ;1 录制混流+单流，该模式下除混流录制基础上，分别录制老师、台上学生的音视频流，每路录制都会产生相应的录制费用 。示例：0
     */
    public $RecordStream;

    /**
     * @var integer 板书截图生成类型。0 不生成板书（默认）；1 全量模式；2 单页去重模式
     */
    public $WhiteBoardSnapshotMode;

    /**
     * @var integer 字幕转写功能开关：0关闭，1开启，默认关闭
     */
    public $SubtitlesTranscription;

    /**
     * @param string $Name 课堂名称。
     * @param integer $StartTime 预定的课堂开始时间，unix时间戳（秒）。
     * @param integer $EndTime 预定的课堂结束时间，unix时间戳（秒）。
     * @param integer $SdkAppId 低代码互动课堂的SdkAppId。
     * @param integer $Resolution 头像区域，摄像头视频画面的分辨率。可以有如下取值：
1 标清
2 高清
3 全高清
注意：连麦人数（MaxMicNumber）>6时，仅可使用标清
     * @param integer $MaxMicNumber 设置课堂同时最大可与老师进行连麦互动的人数，该参数支持正式上课/开播前调用修改房间修改。小班课取值范围[0,16]，大班课取值范围[0,1]，当取值为0时表示当前课堂/直播，不支持连麦互动。该取值影响计费，请根据业务实际情况设置。计费规则见“购买指南”下“计费概述”。
     * @param string $SubType 课堂子类型，可以有以下取值：videodoc 文档+视频video 纯视频
     * @param string $TeacherId 老师ID。通过[注册用户]接口获取的UserId。指定后该用户在房间内拥有老师权限。
     * @param integer $AutoMic 进入课堂时是否自动连麦。可以有以下取值：
0 不自动连麦（需要手动申请上麦，默认值）
1 自动连麦
     * @param integer $TurnOffMic 释放音视频权限后是否自动取消连麦。可以有以下取值：
0 自动取消连麦（默认值）
1 保持连麦状态
     * @param integer $AudioQuality 声音音质。可以有以下取值：
0：流畅模式（默认值），占用更小的带宽、拥有更好的降噪效果，适用于1对1、小班教学、多人音视频会议等场景。
1：高音质模式，适合需要高保真传输音乐的场景，但降噪效果会被削弱，适用于音乐教学场景。
     * @param integer $DisableRecord 录制方式，可以有以下取值：0 开启自动录制（默认值）1  禁止录制2 开启手动录制 注： - 如果该配置取值为0，录制将从上课后开始，课堂结束后停止。 - 如果该配置取值为2，需通过startRecord、stopRecord接口控制录制的开始和结束。 
     * @param array $Assistants 助教Id列表。通过[注册用户]接口获取的UserId。指定后该用户在房间内拥有助教权限。
     * @param integer $RTCAudienceNumber rtc人数。
     * @param integer $AudienceType 观看类型。互动观看 （默认）
     * @param integer $RecordLayout 录制模板。未配置时默认取值0。录制模板枚举值参考：https://cloud.tencent.com/document/product/1639/89744
     * @param string $GroupId 课堂绑定的群组ID,非空时限制组成员进入
     * @param integer $EnableDirectControl 是否允许老师/助教直接控制学生的摄像头/麦克风。可以有以下取值：
0 不允许直接控制（需同意，默认值）
1 允许直接控制（无需同意）
     * @param integer $InteractionMode 开启专注模式。
0 收看全部角色音视频(默认)
1 只看老师和助教
     * @param integer $VideoOrientation 横竖屏。0：横屏开播（默认值）; 1：竖屏开播，当前仅支持移动端的纯视频类型
     * @param integer $IsGradingRequiredPostClass 开启课后评分。 0：不开启(默认)  1：开启
     * @param integer $RoomType 课堂类型: 0 小班课（默认值）; 1 大班课; 2 1V1 (预留参数，暂未开放); 3 圆桌会议 注：大班课的布局(layout)只有三分屏
     * @param array $Guests 嘉宾Id列表。当圆桌会议模式（RoomType==3）时生效
     * @param integer $EndDelayTime 拖堂时间：单位分钟，0为不限制(默认值), -1为不能拖堂，大于0为拖堂的时间，最大值120分钟
     * @param integer $LiveType 直播类型：0 常规（默认）1 伪直播 2 RTMP推流直播
     * @param string $RecordLiveUrl 伪直播链接。 支持的协议以及格式： 协议：HTTP、HTTPS、RTMP、HLS 。格式：FLV、MP3、MP4、MPEG-TS、MOV、MKV、M4A。视频编码：H.264、VP8。音频编码：AAC、OPUS。
     * @param integer $EnableAutoStart 是否自动开始上课：0 不自动上课（默认） 1 自动上课 live_type=1或2的时候有效
     * @param string $RecordBackground 录制文件背景图片，支持png、jpg、jpeg、bmp格式，暂不支持透明通道
     * @param string $RecordScene 录制自定义场景。注意：仅recordlayout=9的时候此参数有效。需注意各类参数配置正确能够生效。不然会造成录制失败，失败后无法补救。数据内容为用户自定义场景参数，数据格式为json键值对方式，其中键值对的value为string类型。

自定义场景参数的含义。如下：
     scene：自定义js/css对应的场景值。如scene=recordScene，会加载 recordScene 场景对应的 js/css，这样就可以自定义录制页面的元素。 
    lng：录制页面对应的语种。如lng=en，则录制界面为en。（枚举值：en,zh，zh-TW，jp，ar，kr，vi）
     customToken：录制页面中涉及客户自己的服务需要鉴权时进行配置。一般情况下，无需配置。
     * @param string $RecordLang 录制自定义语言，仅recordlayout=9的时候此参数有效
     * @param integer $RecordStream 录制类型 0 仅录制混流（默认） ;1 录制混流+单流，该模式下除混流录制基础上，分别录制老师、台上学生的音视频流，每路录制都会产生相应的录制费用 。示例：0
     * @param integer $WhiteBoardSnapshotMode 板书截图生成类型。0 不生成板书（默认）；1 全量模式；2 单页去重模式
     * @param integer $SubtitlesTranscription 字幕转写功能开关：0关闭，1开启，默认关闭
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
    }
}
