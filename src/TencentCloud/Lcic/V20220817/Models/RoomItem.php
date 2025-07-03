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
 * 房间列表
 *
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method integer getRoomId() 获取房间ID
 * @method void setRoomId(integer $RoomId) 设置房间ID
 * @method integer getStatus() 获取房间状态。0 未开始 ；1进行中  ；2 已结束；3已过期
 * @method void setStatus(integer $Status) 设置房间状态。0 未开始 ；1进行中  ；2 已结束；3已过期
 * @method integer getStartTime() 获取开始时间
 * @method void setStartTime(integer $StartTime) 设置开始时间
 * @method integer getEndTime() 获取结束时间
 * @method void setEndTime(integer $EndTime) 设置结束时间
 * @method integer getRealStartTime() 获取实际开始时间
 * @method void setRealStartTime(integer $RealStartTime) 设置实际开始时间
 * @method integer getRealEndTime() 获取实际结束时间
 * @method void setRealEndTime(integer $RealEndTime) 设置实际结束时间
 * @method integer getResolution() 获取头像区域，摄像头视频画面的分辨率。可以有如下取值：
1 标清
2 高清
3 全高清
 * @method void setResolution(integer $Resolution) 设置头像区域，摄像头视频画面的分辨率。可以有如下取值：
1 标清
2 高清
3 全高清
 * @method integer getMaxRTCMember() 获取最大允许连麦人数。已废弃，使用字段 MaxMicNumber
 * @method void setMaxRTCMember(integer $MaxRTCMember) 设置最大允许连麦人数。已废弃，使用字段 MaxMicNumber
 * @method string getReplayUrl() 获取房间录制地址。已废弃，使用新字段 RecordUrl
 * @method void setReplayUrl(string $ReplayUrl) 设置房间录制地址。已废弃，使用新字段 RecordUrl
 * @method string getRecordUrl() 获取录制地址（协议为https)。仅在房间结束后存在。
 * @method void setRecordUrl(string $RecordUrl) 设置录制地址（协议为https)。仅在房间结束后存在。
 * @method integer getMaxMicNumber() 获取课堂同时最大可与老师进行连麦互动的人数，该参数支持正式上课/开播前调用修改房间修改。小班课取值范围[0,16]，大班课取值范围[0,1]，当取值为0时表示当前课堂/直播，不支持连麦互动。
 * @method void setMaxMicNumber(integer $MaxMicNumber) 设置课堂同时最大可与老师进行连麦互动的人数，该参数支持正式上课/开播前调用修改房间修改。小班课取值范围[0,16]，大班课取值范围[0,1]，当取值为0时表示当前课堂/直播，不支持连麦互动。
 * @method integer getEnableDirectControl() 获取打开学生麦克风/摄像头的授权开关 
 * @method void setEnableDirectControl(integer $EnableDirectControl) 设置打开学生麦克风/摄像头的授权开关 
 * @method integer getInteractionMode() 获取开启专注模式。 0 收看全部角色音视频(默认) 1 只看老师和助教
 * @method void setInteractionMode(integer $InteractionMode) 设置开启专注模式。 0 收看全部角色音视频(默认) 1 只看老师和助教
 * @method integer getVideoOrientation() 获取横竖屏。0：横屏开播（默认值）; 1：竖屏开播，当前仅支持移动端的纯视频类型
 * @method void setVideoOrientation(integer $VideoOrientation) 设置横竖屏。0：横屏开播（默认值）; 1：竖屏开播，当前仅支持移动端的纯视频类型
 * @method integer getIsGradingRequiredPostClass() 获取开启课后评分。 0：不开启(默认)  1：开启
 * @method void setIsGradingRequiredPostClass(integer $IsGradingRequiredPostClass) 设置开启课后评分。 0：不开启(默认)  1：开启
 * @method integer getRoomType() 获取房间类型。0:小班课（默认值）；1:大班课；2:1V1（后续扩展）
注：大班课的布局(layout)只有三分屏
 * @method void setRoomType(integer $RoomType) 设置房间类型。0:小班课（默认值）；1:大班课；2:1V1（后续扩展）
注：大班课的布局(layout)只有三分屏
 * @method integer getEndDelayTime() 获取拖堂时间：单位分钟，0为不限制(默认值), -1为不能拖堂，大于0为拖堂的时间，最大值120分钟
 * @method void setEndDelayTime(integer $EndDelayTime) 设置拖堂时间：单位分钟，0为不限制(默认值), -1为不能拖堂，大于0为拖堂的时间，最大值120分钟
 * @method integer getLiveType() 获取直播类型：0 常规（默认）1 伪直播
 * @method void setLiveType(integer $LiveType) 设置直播类型：0 常规（默认）1 伪直播
 * @method string getRecordLiveUrl() 获取伪直播回放链接	
 * @method void setRecordLiveUrl(string $RecordLiveUrl) 设置伪直播回放链接	
 * @method integer getEnableAutoStart() 获取是否自动开始上课：0 不自动上课（默认） 1 自动上课 live_type=1的时候有效	
 * @method void setEnableAutoStart(integer $EnableAutoStart) 设置是否自动开始上课：0 不自动上课（默认） 1 自动上课 live_type=1的时候有效	
 * @method string getRecordBackground() 获取录制文件背景图片，支持png、jpg、jpeg、bmp格式，暂不支持透明通道
 * @method void setRecordBackground(string $RecordBackground) 设置录制文件背景图片，支持png、jpg、jpeg、bmp格式，暂不支持透明通道
 * @method string getRecordScene() 获取录制自定义场景，仅recordlayout=9的时候此参数有效,数据内容为用户自定义场景参数，数据格式为json键值对方式，其中键值对的value为string类型。
 * @method void setRecordScene(string $RecordScene) 设置录制自定义场景，仅recordlayout=9的时候此参数有效,数据内容为用户自定义场景参数，数据格式为json键值对方式，其中键值对的value为string类型。
 * @method string getRecordLang() 获取录制自定义语言，仅recordlayout=9的时候此参数有效
 * @method void setRecordLang(string $RecordLang) 设置录制自定义语言，仅recordlayout=9的时候此参数有效
 * @method integer getWhiteBoardSnapshotMode() 获取板书截图生成类型。0 不生成板书；1 全量模式；2 单页去重模式
 * @method void setWhiteBoardSnapshotMode(integer $WhiteBoardSnapshotMode) 设置板书截图生成类型。0 不生成板书；1 全量模式；2 单页去重模式
 * @method integer getSubtitlesTranscription() 获取字幕转写功能开关：0关闭，1开启，默认关闭
 * @method void setSubtitlesTranscription(integer $SubtitlesTranscription) 设置字幕转写功能开关：0关闭，1开启，默认关闭
 */
class RoomItem extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var integer 房间ID
     */
    public $RoomId;

    /**
     * @var integer 房间状态。0 未开始 ；1进行中  ；2 已结束；3已过期
     */
    public $Status;

    /**
     * @var integer 开始时间
     */
    public $StartTime;

    /**
     * @var integer 结束时间
     */
    public $EndTime;

    /**
     * @var integer 实际开始时间
     */
    public $RealStartTime;

    /**
     * @var integer 实际结束时间
     */
    public $RealEndTime;

    /**
     * @var integer 头像区域，摄像头视频画面的分辨率。可以有如下取值：
1 标清
2 高清
3 全高清
     */
    public $Resolution;

    /**
     * @var integer 最大允许连麦人数。已废弃，使用字段 MaxMicNumber
     */
    public $MaxRTCMember;

    /**
     * @var string 房间录制地址。已废弃，使用新字段 RecordUrl
     */
    public $ReplayUrl;

    /**
     * @var string 录制地址（协议为https)。仅在房间结束后存在。
     */
    public $RecordUrl;

    /**
     * @var integer 课堂同时最大可与老师进行连麦互动的人数，该参数支持正式上课/开播前调用修改房间修改。小班课取值范围[0,16]，大班课取值范围[0,1]，当取值为0时表示当前课堂/直播，不支持连麦互动。
     */
    public $MaxMicNumber;

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
     * @var integer 房间类型。0:小班课（默认值）；1:大班课；2:1V1（后续扩展）
注：大班课的布局(layout)只有三分屏
     */
    public $RoomType;

    /**
     * @var integer 拖堂时间：单位分钟，0为不限制(默认值), -1为不能拖堂，大于0为拖堂的时间，最大值120分钟
     */
    public $EndDelayTime;

    /**
     * @var integer 直播类型：0 常规（默认）1 伪直播
     */
    public $LiveType;

    /**
     * @var string 伪直播回放链接	
     */
    public $RecordLiveUrl;

    /**
     * @var integer 是否自动开始上课：0 不自动上课（默认） 1 自动上课 live_type=1的时候有效	
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
     */
    public $RecordLang;

    /**
     * @var integer 板书截图生成类型。0 不生成板书；1 全量模式；2 单页去重模式
     */
    public $WhiteBoardSnapshotMode;

    /**
     * @var integer 字幕转写功能开关：0关闭，1开启，默认关闭
     */
    public $SubtitlesTranscription;

    /**
     * @param string $Name 名称
     * @param integer $RoomId 房间ID
     * @param integer $Status 房间状态。0 未开始 ；1进行中  ；2 已结束；3已过期
     * @param integer $StartTime 开始时间
     * @param integer $EndTime 结束时间
     * @param integer $RealStartTime 实际开始时间
     * @param integer $RealEndTime 实际结束时间
     * @param integer $Resolution 头像区域，摄像头视频画面的分辨率。可以有如下取值：
1 标清
2 高清
3 全高清
     * @param integer $MaxRTCMember 最大允许连麦人数。已废弃，使用字段 MaxMicNumber
     * @param string $ReplayUrl 房间录制地址。已废弃，使用新字段 RecordUrl
     * @param string $RecordUrl 录制地址（协议为https)。仅在房间结束后存在。
     * @param integer $MaxMicNumber 课堂同时最大可与老师进行连麦互动的人数，该参数支持正式上课/开播前调用修改房间修改。小班课取值范围[0,16]，大班课取值范围[0,1]，当取值为0时表示当前课堂/直播，不支持连麦互动。
     * @param integer $EnableDirectControl 打开学生麦克风/摄像头的授权开关 
     * @param integer $InteractionMode 开启专注模式。 0 收看全部角色音视频(默认) 1 只看老师和助教
     * @param integer $VideoOrientation 横竖屏。0：横屏开播（默认值）; 1：竖屏开播，当前仅支持移动端的纯视频类型
     * @param integer $IsGradingRequiredPostClass 开启课后评分。 0：不开启(默认)  1：开启
     * @param integer $RoomType 房间类型。0:小班课（默认值）；1:大班课；2:1V1（后续扩展）
注：大班课的布局(layout)只有三分屏
     * @param integer $EndDelayTime 拖堂时间：单位分钟，0为不限制(默认值), -1为不能拖堂，大于0为拖堂的时间，最大值120分钟
     * @param integer $LiveType 直播类型：0 常规（默认）1 伪直播
     * @param string $RecordLiveUrl 伪直播回放链接	
     * @param integer $EnableAutoStart 是否自动开始上课：0 不自动上课（默认） 1 自动上课 live_type=1的时候有效	
     * @param string $RecordBackground 录制文件背景图片，支持png、jpg、jpeg、bmp格式，暂不支持透明通道
     * @param string $RecordScene 录制自定义场景，仅recordlayout=9的时候此参数有效,数据内容为用户自定义场景参数，数据格式为json键值对方式，其中键值对的value为string类型。
     * @param string $RecordLang 录制自定义语言，仅recordlayout=9的时候此参数有效
     * @param integer $WhiteBoardSnapshotMode 板书截图生成类型。0 不生成板书；1 全量模式；2 单页去重模式
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

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("RealStartTime",$param) and $param["RealStartTime"] !== null) {
            $this->RealStartTime = $param["RealStartTime"];
        }

        if (array_key_exists("RealEndTime",$param) and $param["RealEndTime"] !== null) {
            $this->RealEndTime = $param["RealEndTime"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("MaxRTCMember",$param) and $param["MaxRTCMember"] !== null) {
            $this->MaxRTCMember = $param["MaxRTCMember"];
        }

        if (array_key_exists("ReplayUrl",$param) and $param["ReplayUrl"] !== null) {
            $this->ReplayUrl = $param["ReplayUrl"];
        }

        if (array_key_exists("RecordUrl",$param) and $param["RecordUrl"] !== null) {
            $this->RecordUrl = $param["RecordUrl"];
        }

        if (array_key_exists("MaxMicNumber",$param) and $param["MaxMicNumber"] !== null) {
            $this->MaxMicNumber = $param["MaxMicNumber"];
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

        if (array_key_exists("WhiteBoardSnapshotMode",$param) and $param["WhiteBoardSnapshotMode"] !== null) {
            $this->WhiteBoardSnapshotMode = $param["WhiteBoardSnapshotMode"];
        }

        if (array_key_exists("SubtitlesTranscription",$param) and $param["SubtitlesTranscription"] !== null) {
            $this->SubtitlesTranscription = $param["SubtitlesTranscription"];
        }
    }
}
