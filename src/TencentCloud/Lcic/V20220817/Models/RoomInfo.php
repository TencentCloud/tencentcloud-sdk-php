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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量创建房间的房间信息
 *
 * @method string getName() 获取房间名称。
 * @method void setName(string $Name) 设置房间名称。
 * @method integer getStartTime() 获取预定的房间开始时间，unix时间戳。
 * @method void setStartTime(integer $StartTime) 设置预定的房间开始时间，unix时间戳。
 * @method integer getEndTime() 获取预定的房间结束时间，unix时间戳。
 * @method void setEndTime(integer $EndTime) 设置预定的房间结束时间，unix时间戳。
 * @method integer getResolution() 获取头像区域，摄像头视频画面的分辨率。可以有如下取值：
1 标清
2 高清
3 全高清
 * @method void setResolution(integer $Resolution) 设置头像区域，摄像头视频画面的分辨率。可以有如下取值：
1 标清
2 高清
3 全高清
 * @method integer getMaxMicNumber() 获取设置房间/课堂同时最大可与老师进行连麦互动的人数，该参数支持正式上课/开播前调用修改房间修改。小班课取值范围[0,16]，大班课取值范围[0,1]，当取值为0时表示当前课堂/直播，不支持连麦互动。
 * @method void setMaxMicNumber(integer $MaxMicNumber) 设置设置房间/课堂同时最大可与老师进行连麦互动的人数，该参数支持正式上课/开播前调用修改房间修改。小班课取值范围[0,16]，大班课取值范围[0,1]，当取值为0时表示当前课堂/直播，不支持连麦互动。
 * @method string getSubType() 获取房间子类型，可以有以下取值： videodoc 文档+视频 video 纯视频
 * @method void setSubType(string $SubType) 设置房间子类型，可以有以下取值： videodoc 文档+视频 video 纯视频
 * @method string getTeacherId() 获取老师ID。通过[注册用户]接口获取的UserId。
 * @method void setTeacherId(string $TeacherId) 设置老师ID。通过[注册用户]接口获取的UserId。
 * @method integer getAutoMic() 获取进入课堂时是否自动连麦。可以有以下取值： 0 不自动连麦（需要手动申请上麦，默认值） 1 自动连麦
 * @method void setAutoMic(integer $AutoMic) 设置进入课堂时是否自动连麦。可以有以下取值： 0 不自动连麦（需要手动申请上麦，默认值） 1 自动连麦
 * @method integer getTurnOffMic() 获取释放音视频权限后是否自动取消连麦。可以有以下取值： 0 自动取消连麦（默认值） 1 保持连麦状态
 * @method void setTurnOffMic(integer $TurnOffMic) 设置释放音视频权限后是否自动取消连麦。可以有以下取值： 0 自动取消连麦（默认值） 1 保持连麦状态
 * @method integer getAudioQuality() 获取高音质模式。可以有以下取值： 0 不开启高音质（默认值） 1 开启高音质
 * @method void setAudioQuality(integer $AudioQuality) 设置高音质模式。可以有以下取值： 0 不开启高音质（默认值） 1 开启高音质
 * @method integer getDisableRecord() 获取上课后是否禁止自动录制。可以有以下取值： 0 不禁止录制（自动开启录制，默认值） 1 禁止录制 注：如果该配置取值为0，录制将从上课后开始，课堂结束后停止。
 * @method void setDisableRecord(integer $DisableRecord) 设置上课后是否禁止自动录制。可以有以下取值： 0 不禁止录制（自动开启录制，默认值） 1 禁止录制 注：如果该配置取值为0，录制将从上课后开始，课堂结束后停止。
 * @method array getAssistants() 获取助教Id列表。通过[注册用户]接口获取的UserId。
 * @method void setAssistants(array $Assistants) 设置助教Id列表。通过[注册用户]接口获取的UserId。
 * @method integer getRTCAudienceNumber() 获取rtc人数。
 * @method void setRTCAudienceNumber(integer $RTCAudienceNumber) 设置rtc人数。
 * @method integer getAudienceType() 获取观看类型。
 * @method void setAudienceType(integer $AudienceType) 设置观看类型。
 * @method integer getRecordLayout() 获取录制布局。
 * @method void setRecordLayout(integer $RecordLayout) 设置录制布局。
 * @method string getGroupId() 获取房间绑定的群组ID
 * @method void setGroupId(string $GroupId) 设置房间绑定的群组ID
 * @method integer getEnableDirectControl() 获取打开学生麦克风/摄像头的授权开关
 * @method void setEnableDirectControl(integer $EnableDirectControl) 设置打开学生麦克风/摄像头的授权开关
 * @method integer getInteractionMode() 获取开启专注模式。 0 收看全部角色音视频(默认) 1 只看老师和助教
 * @method void setInteractionMode(integer $InteractionMode) 设置开启专注模式。 0 收看全部角色音视频(默认) 1 只看老师和助教
 * @method integer getVideoOrientation() 获取横竖屏。0：横屏开播（默认值）; 1：竖屏开播，当前仅支持移动端的纯视频类型
 * @method void setVideoOrientation(integer $VideoOrientation) 设置横竖屏。0：横屏开播（默认值）; 1：竖屏开播，当前仅支持移动端的纯视频类型
 * @method integer getIsGradingRequiredPostClass() 获取开启课后评分。 0：不开启(默认)  1：开启
 * @method void setIsGradingRequiredPostClass(integer $IsGradingRequiredPostClass) 设置开启课后评分。 0：不开启(默认)  1：开启
 * @method integer getRoomType() 获取房间类型: 0 小班课（默认值）; 1 大班课; 2 1V1 (后续扩展)
注：大班课的布局(layout)只有三分屏
 * @method void setRoomType(integer $RoomType) 设置房间类型: 0 小班课（默认值）; 1 大班课; 2 1V1 (后续扩展)
注：大班课的布局(layout)只有三分屏
 * @method integer getEndDelayTime() 获取拖堂时间：单位分钟，0为不限制(默认值), -1为不能拖堂，大于0为拖堂的时间，最大值120分钟
 * @method void setEndDelayTime(integer $EndDelayTime) 设置拖堂时间：单位分钟，0为不限制(默认值), -1为不能拖堂，大于0为拖堂的时间，最大值120分钟
 * @method integer getLiveType() 获取直播类型：0 常规（默认）1 伪直播 2 RTMP推流直播
 * @method void setLiveType(integer $LiveType) 设置直播类型：0 常规（默认）1 伪直播 2 RTMP推流直播
 * @method string getRecordLiveUrl() 获取伪直播回放链接
 * @method void setRecordLiveUrl(string $RecordLiveUrl) 设置伪直播回放链接
 * @method integer getEnableAutoStart() 获取是否自动开始上课：0 不自动上课（默认） 1 自动上课 live_type=1或2的时候有效
 * @method void setEnableAutoStart(integer $EnableAutoStart) 设置是否自动开始上课：0 不自动上课（默认） 1 自动上课 live_type=1或2的时候有效
 * @method string getRecordBackground() 获取录制文件背景图片，支持png、jpg、jpeg、bmp格式，暂不支持透明通道
 * @method void setRecordBackground(string $RecordBackground) 设置录制文件背景图片，支持png、jpg、jpeg、bmp格式，暂不支持透明通道
 * @method string getRecordScene() 获取录制自定义场景，仅recordlayout=9的时候此参数有效,数据内容为用户自定义场景参数，数据格式为json键值对方式，其中键值对的value为string类型。
 * @method void setRecordScene(string $RecordScene) 设置录制自定义场景，仅recordlayout=9的时候此参数有效,数据内容为用户自定义场景参数，数据格式为json键值对方式，其中键值对的value为string类型。
 * @method string getRecordLang() 获取录制自定义语言，仅recordlayout=9的时候此参数有效
 * @method void setRecordLang(string $RecordLang) 设置录制自定义语言，仅recordlayout=9的时候此参数有效
 * @method integer getRecordStream() 获取录制类型 0 仅录制混流（默认） ;1 录制混流+单流，该模式下除混流录制基础上，分别录制老师、台上学生的音视频流，每路录制都会产生相应的录制费用 。示例：0
 * @method void setRecordStream(integer $RecordStream) 设置录制类型 0 仅录制混流（默认） ;1 录制混流+单流，该模式下除混流录制基础上，分别录制老师、台上学生的音视频流，每路录制都会产生相应的录制费用 。示例：0
 * @method integer getWhiteBoardSnapshotMode() 获取板书截图生成类型。0 不生成板书（默认）；1 全量模式；2 单页去重模式
 * @method void setWhiteBoardSnapshotMode(integer $WhiteBoardSnapshotMode) 设置板书截图生成类型。0 不生成板书（默认）；1 全量模式；2 单页去重模式
 * @method integer getSubtitlesTranscription() 获取字幕转写功能开关：0关闭，1开启，默认关闭
 * @method void setSubtitlesTranscription(integer $SubtitlesTranscription) 设置字幕转写功能开关：0关闭，1开启，默认关闭
 */
class RoomInfo extends AbstractModel
{
    /**
     * @var string 房间名称。
     */
    public $Name;

    /**
     * @var integer 预定的房间开始时间，unix时间戳。
     */
    public $StartTime;

    /**
     * @var integer 预定的房间结束时间，unix时间戳。
     */
    public $EndTime;

    /**
     * @var integer 头像区域，摄像头视频画面的分辨率。可以有如下取值：
1 标清
2 高清
3 全高清
     */
    public $Resolution;

    /**
     * @var integer 设置房间/课堂同时最大可与老师进行连麦互动的人数，该参数支持正式上课/开播前调用修改房间修改。小班课取值范围[0,16]，大班课取值范围[0,1]，当取值为0时表示当前课堂/直播，不支持连麦互动。
     */
    public $MaxMicNumber;

    /**
     * @var string 房间子类型，可以有以下取值： videodoc 文档+视频 video 纯视频
     */
    public $SubType;

    /**
     * @var string 老师ID。通过[注册用户]接口获取的UserId。
     */
    public $TeacherId;

    /**
     * @var integer 进入课堂时是否自动连麦。可以有以下取值： 0 不自动连麦（需要手动申请上麦，默认值） 1 自动连麦
     */
    public $AutoMic;

    /**
     * @var integer 释放音视频权限后是否自动取消连麦。可以有以下取值： 0 自动取消连麦（默认值） 1 保持连麦状态
     */
    public $TurnOffMic;

    /**
     * @var integer 高音质模式。可以有以下取值： 0 不开启高音质（默认值） 1 开启高音质
     */
    public $AudioQuality;

    /**
     * @var integer 上课后是否禁止自动录制。可以有以下取值： 0 不禁止录制（自动开启录制，默认值） 1 禁止录制 注：如果该配置取值为0，录制将从上课后开始，课堂结束后停止。
     */
    public $DisableRecord;

    /**
     * @var array 助教Id列表。通过[注册用户]接口获取的UserId。
     */
    public $Assistants;

    /**
     * @var integer rtc人数。
     * @deprecated
     */
    public $RTCAudienceNumber;

    /**
     * @var integer 观看类型。
     */
    public $AudienceType;

    /**
     * @var integer 录制布局。
     */
    public $RecordLayout;

    /**
     * @var string 房间绑定的群组ID
     */
    public $GroupId;

    /**
     * @var integer 打开学生麦克风/摄像头的授权开关
     */
    public $EnableDirectControl;

    /**
     * @var integer 开启专注模式。 0 收看全部角色音视频(默认) 1 只看老师和助教
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
     * @var integer 房间类型: 0 小班课（默认值）; 1 大班课; 2 1V1 (后续扩展)
注：大班课的布局(layout)只有三分屏
     */
    public $RoomType;

    /**
     * @var integer 拖堂时间：单位分钟，0为不限制(默认值), -1为不能拖堂，大于0为拖堂的时间，最大值120分钟
     */
    public $EndDelayTime;

    /**
     * @var integer 直播类型：0 常规（默认）1 伪直播 2 RTMP推流直播
     */
    public $LiveType;

    /**
     * @var string 伪直播回放链接
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
     * @var string 录制自定义场景，仅recordlayout=9的时候此参数有效,数据内容为用户自定义场景参数，数据格式为json键值对方式，其中键值对的value为string类型。
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
     * @param string $Name 房间名称。
     * @param integer $StartTime 预定的房间开始时间，unix时间戳。
     * @param integer $EndTime 预定的房间结束时间，unix时间戳。
     * @param integer $Resolution 头像区域，摄像头视频画面的分辨率。可以有如下取值：
1 标清
2 高清
3 全高清
     * @param integer $MaxMicNumber 设置房间/课堂同时最大可与老师进行连麦互动的人数，该参数支持正式上课/开播前调用修改房间修改。小班课取值范围[0,16]，大班课取值范围[0,1]，当取值为0时表示当前课堂/直播，不支持连麦互动。
     * @param string $SubType 房间子类型，可以有以下取值： videodoc 文档+视频 video 纯视频
     * @param string $TeacherId 老师ID。通过[注册用户]接口获取的UserId。
     * @param integer $AutoMic 进入课堂时是否自动连麦。可以有以下取值： 0 不自动连麦（需要手动申请上麦，默认值） 1 自动连麦
     * @param integer $TurnOffMic 释放音视频权限后是否自动取消连麦。可以有以下取值： 0 自动取消连麦（默认值） 1 保持连麦状态
     * @param integer $AudioQuality 高音质模式。可以有以下取值： 0 不开启高音质（默认值） 1 开启高音质
     * @param integer $DisableRecord 上课后是否禁止自动录制。可以有以下取值： 0 不禁止录制（自动开启录制，默认值） 1 禁止录制 注：如果该配置取值为0，录制将从上课后开始，课堂结束后停止。
     * @param array $Assistants 助教Id列表。通过[注册用户]接口获取的UserId。
     * @param integer $RTCAudienceNumber rtc人数。
     * @param integer $AudienceType 观看类型。
     * @param integer $RecordLayout 录制布局。
     * @param string $GroupId 房间绑定的群组ID
     * @param integer $EnableDirectControl 打开学生麦克风/摄像头的授权开关
     * @param integer $InteractionMode 开启专注模式。 0 收看全部角色音视频(默认) 1 只看老师和助教
     * @param integer $VideoOrientation 横竖屏。0：横屏开播（默认值）; 1：竖屏开播，当前仅支持移动端的纯视频类型
     * @param integer $IsGradingRequiredPostClass 开启课后评分。 0：不开启(默认)  1：开启
     * @param integer $RoomType 房间类型: 0 小班课（默认值）; 1 大班课; 2 1V1 (后续扩展)
注：大班课的布局(layout)只有三分屏
     * @param integer $EndDelayTime 拖堂时间：单位分钟，0为不限制(默认值), -1为不能拖堂，大于0为拖堂的时间，最大值120分钟
     * @param integer $LiveType 直播类型：0 常规（默认）1 伪直播 2 RTMP推流直播
     * @param string $RecordLiveUrl 伪直播回放链接
     * @param integer $EnableAutoStart 是否自动开始上课：0 不自动上课（默认） 1 自动上课 live_type=1或2的时候有效
     * @param string $RecordBackground 录制文件背景图片，支持png、jpg、jpeg、bmp格式，暂不支持透明通道
     * @param string $RecordScene 录制自定义场景，仅recordlayout=9的时候此参数有效,数据内容为用户自定义场景参数，数据格式为json键值对方式，其中键值对的value为string类型。
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
