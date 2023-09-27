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
 * CreateRoom请求参数结构体
 *
 * @method string getName() 获取房间名称。
 * @method void setName(string $Name) 设置房间名称。
 * @method integer getStartTime() 获取预定的房间开始时间，unix时间戳（秒）。
 * @method void setStartTime(integer $StartTime) 设置预定的房间开始时间，unix时间戳（秒）。
 * @method integer getEndTime() 获取预定的房间结束时间，unix时间戳（秒）。
 * @method void setEndTime(integer $EndTime) 设置预定的房间结束时间，unix时间戳（秒）。
 * @method integer getSdkAppId() 获取低代码互动课堂的SdkAppId。
 * @method void setSdkAppId(integer $SdkAppId) 设置低代码互动课堂的SdkAppId。
 * @method integer getResolution() 获取分辨率。可以有如下取值：
1 标清
2 高清
3 全高清
 * @method void setResolution(integer $Resolution) 设置分辨率。可以有如下取值：
1 标清
2 高清
3 全高清
 * @method integer getMaxMicNumber() 获取设置房间/课堂同时最大可与老师进行连麦互动的人数，该参数支持正式上课/开播前调用修改房间修改。取值范围[0,16]，当取值为0时表示当前课堂/直播，不支持连麦互动。
 * @method void setMaxMicNumber(integer $MaxMicNumber) 设置设置房间/课堂同时最大可与老师进行连麦互动的人数，该参数支持正式上课/开播前调用修改房间修改。取值范围[0,16]，当取值为0时表示当前课堂/直播，不支持连麦互动。
 * @method string getSubType() 获取房间子类型，可以有以下取值：
videodoc 文档+视频
video 纯视频
 * @method void setSubType(string $SubType) 设置房间子类型，可以有以下取值：
videodoc 文档+视频
video 纯视频
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
 * @method integer getDisableRecord() 获取上课后是否禁止自动录制。可以有以下取值：
0 不禁止录制（自动开启录制，默认值）
1 禁止录制
注：如果该配置取值为0，录制将从上课后开始，课堂结束后停止。
 * @method void setDisableRecord(integer $DisableRecord) 设置上课后是否禁止自动录制。可以有以下取值：
0 不禁止录制（自动开启录制，默认值）
1 禁止录制
注：如果该配置取值为0，录制将从上课后开始，课堂结束后停止。
 * @method array getAssistants() 获取助教Id列表。通过[注册用户]接口获取的UserId。指定后该用户在房间内拥有助教权限。
 * @method void setAssistants(array $Assistants) 设置助教Id列表。通过[注册用户]接口获取的UserId。指定后该用户在房间内拥有助教权限。
 * @method integer getRTCAudienceNumber() 获取rtc人数。
 * @method void setRTCAudienceNumber(integer $RTCAudienceNumber) 设置rtc人数。
 * @method integer getAudienceType() 获取观看类型。互动观看 （默认）
 * @method void setAudienceType(integer $AudienceType) 设置观看类型。互动观看 （默认）
 * @method integer getRecordLayout() 获取录制模板。录制模板枚举值参考：https://cloud.tencent.com/document/product/1639/89744
 * @method void setRecordLayout(integer $RecordLayout) 设置录制模板。录制模板枚举值参考：https://cloud.tencent.com/document/product/1639/89744
 * @method string getGroupId() 获取房间绑定的群组ID,非空时限制组成员进入
 * @method void setGroupId(string $GroupId) 设置房间绑定的群组ID,非空时限制组成员进入
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
 * @method integer getRoomType() 获取房间类型: 0 小班课（默认值）; 1 大班课; 2 1V1 (预留参数，暂未开放)
 * @method void setRoomType(integer $RoomType) 设置房间类型: 0 小班课（默认值）; 1 大班课; 2 1V1 (预留参数，暂未开放)
 * @method integer getEndDelayTime() 获取拖堂时间：单位分钟，0为不限制(默认值), -1为不能拖堂，大于0为拖堂的时间，最大值120分钟
 * @method void setEndDelayTime(integer $EndDelayTime) 设置拖堂时间：单位分钟，0为不限制(默认值), -1为不能拖堂，大于0为拖堂的时间，最大值120分钟
 */
class CreateRoomRequest extends AbstractModel
{
    /**
     * @var string 房间名称。
     */
    public $Name;

    /**
     * @var integer 预定的房间开始时间，unix时间戳（秒）。
     */
    public $StartTime;

    /**
     * @var integer 预定的房间结束时间，unix时间戳（秒）。
     */
    public $EndTime;

    /**
     * @var integer 低代码互动课堂的SdkAppId。
     */
    public $SdkAppId;

    /**
     * @var integer 分辨率。可以有如下取值：
1 标清
2 高清
3 全高清
     */
    public $Resolution;

    /**
     * @var integer 设置房间/课堂同时最大可与老师进行连麦互动的人数，该参数支持正式上课/开播前调用修改房间修改。取值范围[0,16]，当取值为0时表示当前课堂/直播，不支持连麦互动。
     */
    public $MaxMicNumber;

    /**
     * @var string 房间子类型，可以有以下取值：
videodoc 文档+视频
video 纯视频
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
     * @var integer 上课后是否禁止自动录制。可以有以下取值：
0 不禁止录制（自动开启录制，默认值）
1 禁止录制
注：如果该配置取值为0，录制将从上课后开始，课堂结束后停止。
     */
    public $DisableRecord;

    /**
     * @var array 助教Id列表。通过[注册用户]接口获取的UserId。指定后该用户在房间内拥有助教权限。
     */
    public $Assistants;

    /**
     * @var integer rtc人数。
     */
    public $RTCAudienceNumber;

    /**
     * @var integer 观看类型。互动观看 （默认）
     */
    public $AudienceType;

    /**
     * @var integer 录制模板。录制模板枚举值参考：https://cloud.tencent.com/document/product/1639/89744
     */
    public $RecordLayout;

    /**
     * @var string 房间绑定的群组ID,非空时限制组成员进入
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
     * @var integer 房间类型: 0 小班课（默认值）; 1 大班课; 2 1V1 (预留参数，暂未开放)
     */
    public $RoomType;

    /**
     * @var integer 拖堂时间：单位分钟，0为不限制(默认值), -1为不能拖堂，大于0为拖堂的时间，最大值120分钟
     */
    public $EndDelayTime;

    /**
     * @param string $Name 房间名称。
     * @param integer $StartTime 预定的房间开始时间，unix时间戳（秒）。
     * @param integer $EndTime 预定的房间结束时间，unix时间戳（秒）。
     * @param integer $SdkAppId 低代码互动课堂的SdkAppId。
     * @param integer $Resolution 分辨率。可以有如下取值：
1 标清
2 高清
3 全高清
     * @param integer $MaxMicNumber 设置房间/课堂同时最大可与老师进行连麦互动的人数，该参数支持正式上课/开播前调用修改房间修改。取值范围[0,16]，当取值为0时表示当前课堂/直播，不支持连麦互动。
     * @param string $SubType 房间子类型，可以有以下取值：
videodoc 文档+视频
video 纯视频
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
     * @param integer $DisableRecord 上课后是否禁止自动录制。可以有以下取值：
0 不禁止录制（自动开启录制，默认值）
1 禁止录制
注：如果该配置取值为0，录制将从上课后开始，课堂结束后停止。
     * @param array $Assistants 助教Id列表。通过[注册用户]接口获取的UserId。指定后该用户在房间内拥有助教权限。
     * @param integer $RTCAudienceNumber rtc人数。
     * @param integer $AudienceType 观看类型。互动观看 （默认）
     * @param integer $RecordLayout 录制模板。录制模板枚举值参考：https://cloud.tencent.com/document/product/1639/89744
     * @param string $GroupId 房间绑定的群组ID,非空时限制组成员进入
     * @param integer $EnableDirectControl 是否允许老师/助教直接控制学生的摄像头/麦克风。可以有以下取值：
0 不允许直接控制（需同意，默认值）
1 允许直接控制（无需同意）
     * @param integer $InteractionMode 开启专注模式。
0 收看全部角色音视频(默认)
1 只看老师和助教
     * @param integer $VideoOrientation 横竖屏。0：横屏开播（默认值）; 1：竖屏开播，当前仅支持移动端的纯视频类型
     * @param integer $IsGradingRequiredPostClass 开启课后评分。 0：不开启(默认)  1：开启
     * @param integer $RoomType 房间类型: 0 小班课（默认值）; 1 大班课; 2 1V1 (预留参数，暂未开放)
     * @param integer $EndDelayTime 拖堂时间：单位分钟，0为不限制(默认值), -1为不能拖堂，大于0为拖堂的时间，最大值120分钟
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

        if (array_key_exists("EndDelayTime",$param) and $param["EndDelayTime"] !== null) {
            $this->EndDelayTime = $param["EndDelayTime"];
        }
    }
}
