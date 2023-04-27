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
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRoomId() 获取房间ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoomId(integer $RoomId) 设置房间ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取房间状态。0 未开始 ；1进行中  ；2 已结束
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置房间状态。0 未开始 ；1进行中  ；2 已结束
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartTime() 获取开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(integer $StartTime) 设置开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEndTime() 获取结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(integer $EndTime) 设置结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRealStartTime() 获取实际开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealStartTime(integer $RealStartTime) 设置实际开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRealEndTime() 获取实际结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealEndTime(integer $RealEndTime) 设置实际结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResolution() 获取分辨率。1 标清
2 高清
3 全高清
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResolution(integer $Resolution) 设置分辨率。1 标清
2 高清
3 全高清
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxRTCMember() 获取最大允许连麦人数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxRTCMember(integer $MaxRTCMember) 设置最大允许连麦人数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReplayUrl() 获取房间录制地址。已废弃，使用新字段 RecordUrl
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplayUrl(string $ReplayUrl) 设置房间录制地址。已废弃，使用新字段 RecordUrl
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecordUrl() 获取录制地址（协议为https)。仅在房间结束后存在。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordUrl(string $RecordUrl) 设置录制地址（协议为https)。仅在房间结束后存在。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxMicNumber() 获取最高房间内人数（包括老师），0表示不限制，默认为0
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxMicNumber(integer $MaxMicNumber) 设置最高房间内人数（包括老师），0表示不限制，默认为0
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnableDirectControl() 获取打开学生麦克风/摄像头的授权开关 
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableDirectControl(integer $EnableDirectControl) 设置打开学生麦克风/摄像头的授权开关 
注意：此字段可能返回 null，表示取不到有效值。
 */
class RoomItem extends AbstractModel
{
    /**
     * @var string 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 房间ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoomId;

    /**
     * @var integer 房间状态。0 未开始 ；1进行中  ；2 已结束
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var integer 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var integer 实际开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealStartTime;

    /**
     * @var integer 实际结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealEndTime;

    /**
     * @var integer 分辨率。1 标清
2 高清
3 全高清
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resolution;

    /**
     * @var integer 最大允许连麦人数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxRTCMember;

    /**
     * @var string 房间录制地址。已废弃，使用新字段 RecordUrl
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReplayUrl;

    /**
     * @var string 录制地址（协议为https)。仅在房间结束后存在。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordUrl;

    /**
     * @var integer 最高房间内人数（包括老师），0表示不限制，默认为0
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxMicNumber;

    /**
     * @var integer 打开学生麦克风/摄像头的授权开关 
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableDirectControl;

    /**
     * @param string $Name 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RoomId 房间ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 房间状态。0 未开始 ；1进行中  ；2 已结束
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartTime 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EndTime 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RealStartTime 实际开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RealEndTime 实际结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Resolution 分辨率。1 标清
2 高清
3 全高清
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxRTCMember 最大允许连麦人数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReplayUrl 房间录制地址。已废弃，使用新字段 RecordUrl
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecordUrl 录制地址（协议为https)。仅在房间结束后存在。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxMicNumber 最高房间内人数（包括老师），0表示不限制，默认为0
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EnableDirectControl 打开学生麦克风/摄像头的授权开关 
注意：此字段可能返回 null，表示取不到有效值。
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
    }
}
