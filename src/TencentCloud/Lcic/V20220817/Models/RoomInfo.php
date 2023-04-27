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
 * @method integer getResolution() 获取分辨率。可以有如下取值： 1 标清 2 高清 3 全高清
 * @method void setResolution(integer $Resolution) 设置分辨率。可以有如下取值： 1 标清 2 高清 3 全高清
 * @method integer getMaxMicNumber() 获取最大连麦人数（不包括老师）。取值范围[0, 16]
 * @method void setMaxMicNumber(integer $MaxMicNumber) 设置最大连麦人数（不包括老师）。取值范围[0, 16]
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
     * @var integer 分辨率。可以有如下取值： 1 标清 2 高清 3 全高清
     */
    public $Resolution;

    /**
     * @var integer 最大连麦人数（不包括老师）。取值范围[0, 16]
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
     * @param string $Name 房间名称。
     * @param integer $StartTime 预定的房间开始时间，unix时间戳。
     * @param integer $EndTime 预定的房间结束时间，unix时间戳。
     * @param integer $Resolution 分辨率。可以有如下取值： 1 标清 2 高清 3 全高清
     * @param integer $MaxMicNumber 最大连麦人数（不包括老师）。取值范围[0, 16]
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
    }
}
