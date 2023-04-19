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
 * 成员记录信息。
 *
 * @method string getUserId() 获取用户ID。
 * @method void setUserId(string $UserId) 设置用户ID。
 * @method string getUserName() 获取用户名称。
 * @method void setUserName(string $UserName) 设置用户名称。
 * @method integer getPresentTime() 获取在线时长，单位秒。
 * @method void setPresentTime(integer $PresentTime) 设置在线时长，单位秒。
 * @method integer getCamera() 获取是否开启摄像头。
 * @method void setCamera(integer $Camera) 设置是否开启摄像头。
 * @method integer getMic() 获取是否开启麦克风。
 * @method void setMic(integer $Mic) 设置是否开启麦克风。
 * @method integer getSilence() 获取是否禁言。
 * @method void setSilence(integer $Silence) 设置是否禁言。
 * @method integer getAnswerQuestions() 获取回答问题数量。
 * @method void setAnswerQuestions(integer $AnswerQuestions) 设置回答问题数量。
 * @method integer getHandUps() 获取举手数量。
 * @method void setHandUps(integer $HandUps) 设置举手数量。
 * @method integer getFirstJoinTimestamp() 获取首次进入房间的unix时间戳。
 * @method void setFirstJoinTimestamp(integer $FirstJoinTimestamp) 设置首次进入房间的unix时间戳。
 * @method integer getLastQuitTimestamp() 获取最后一次退出房间的unix时间戳。
 * @method void setLastQuitTimestamp(integer $LastQuitTimestamp) 设置最后一次退出房间的unix时间戳。
 * @method integer getRewords() 获取奖励次数。
 * @method void setRewords(integer $Rewords) 设置奖励次数。
 * @method string getIPAddress() 获取用户IP。
 * @method void setIPAddress(string $IPAddress) 设置用户IP。
 * @method string getLocation() 获取用户位置信息。
 * @method void setLocation(string $Location) 设置用户位置信息。
 * @method integer getDevice() 获取用户设备平台信息。0:unknown  1:windows  2:mac  3:android  4:ios  5:web   6:h5   7:miniprogram （小程序）
 * @method void setDevice(integer $Device) 设置用户设备平台信息。0:unknown  1:windows  2:mac  3:android  4:ios  5:web   6:h5   7:miniprogram （小程序）
 * @method integer getPerMemberMicCount() 获取每个成员上麦次数。
 * @method void setPerMemberMicCount(integer $PerMemberMicCount) 设置每个成员上麦次数。
 * @method integer getPerMemberMessageCount() 获取每个成员发送消息数量。

 * @method void setPerMemberMessageCount(integer $PerMemberMessageCount) 设置每个成员发送消息数量。

 * @method integer getRole() 获取用户角色。0代表学生；1代表老师； 2助教；3巡课。
 * @method void setRole(integer $Role) 设置用户角色。0代表学生；1代表老师； 2助教；3巡课。
 * @method string getGroupId() 获取上课班号
 * @method void setGroupId(string $GroupId) 设置上课班号
 * @method array getSubGroupId() 获取子上课班号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubGroupId(array $SubGroupId) 设置子上课班号
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStage() 获取用户的上台状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStage(integer $Stage) 设置用户的上台状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class MemberRecord extends AbstractModel
{
    /**
     * @var string 用户ID。
     */
    public $UserId;

    /**
     * @var string 用户名称。
     */
    public $UserName;

    /**
     * @var integer 在线时长，单位秒。
     */
    public $PresentTime;

    /**
     * @var integer 是否开启摄像头。
     */
    public $Camera;

    /**
     * @var integer 是否开启麦克风。
     */
    public $Mic;

    /**
     * @var integer 是否禁言。
     */
    public $Silence;

    /**
     * @var integer 回答问题数量。
     */
    public $AnswerQuestions;

    /**
     * @var integer 举手数量。
     */
    public $HandUps;

    /**
     * @var integer 首次进入房间的unix时间戳。
     */
    public $FirstJoinTimestamp;

    /**
     * @var integer 最后一次退出房间的unix时间戳。
     */
    public $LastQuitTimestamp;

    /**
     * @var integer 奖励次数。
     */
    public $Rewords;

    /**
     * @var string 用户IP。
     */
    public $IPAddress;

    /**
     * @var string 用户位置信息。
     */
    public $Location;

    /**
     * @var integer 用户设备平台信息。0:unknown  1:windows  2:mac  3:android  4:ios  5:web   6:h5   7:miniprogram （小程序）
     */
    public $Device;

    /**
     * @var integer 每个成员上麦次数。
     */
    public $PerMemberMicCount;

    /**
     * @var integer 每个成员发送消息数量。

     */
    public $PerMemberMessageCount;

    /**
     * @var integer 用户角色。0代表学生；1代表老师； 2助教；3巡课。
     */
    public $Role;

    /**
     * @var string 上课班号
     */
    public $GroupId;

    /**
     * @var array 子上课班号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubGroupId;

    /**
     * @var integer 用户的上台状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Stage;

    /**
     * @param string $UserId 用户ID。
     * @param string $UserName 用户名称。
     * @param integer $PresentTime 在线时长，单位秒。
     * @param integer $Camera 是否开启摄像头。
     * @param integer $Mic 是否开启麦克风。
     * @param integer $Silence 是否禁言。
     * @param integer $AnswerQuestions 回答问题数量。
     * @param integer $HandUps 举手数量。
     * @param integer $FirstJoinTimestamp 首次进入房间的unix时间戳。
     * @param integer $LastQuitTimestamp 最后一次退出房间的unix时间戳。
     * @param integer $Rewords 奖励次数。
     * @param string $IPAddress 用户IP。
     * @param string $Location 用户位置信息。
     * @param integer $Device 用户设备平台信息。0:unknown  1:windows  2:mac  3:android  4:ios  5:web   6:h5   7:miniprogram （小程序）
     * @param integer $PerMemberMicCount 每个成员上麦次数。
     * @param integer $PerMemberMessageCount 每个成员发送消息数量。

     * @param integer $Role 用户角色。0代表学生；1代表老师； 2助教；3巡课。
     * @param string $GroupId 上课班号
     * @param array $SubGroupId 子上课班号
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Stage 用户的上台状态
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("PresentTime",$param) and $param["PresentTime"] !== null) {
            $this->PresentTime = $param["PresentTime"];
        }

        if (array_key_exists("Camera",$param) and $param["Camera"] !== null) {
            $this->Camera = $param["Camera"];
        }

        if (array_key_exists("Mic",$param) and $param["Mic"] !== null) {
            $this->Mic = $param["Mic"];
        }

        if (array_key_exists("Silence",$param) and $param["Silence"] !== null) {
            $this->Silence = $param["Silence"];
        }

        if (array_key_exists("AnswerQuestions",$param) and $param["AnswerQuestions"] !== null) {
            $this->AnswerQuestions = $param["AnswerQuestions"];
        }

        if (array_key_exists("HandUps",$param) and $param["HandUps"] !== null) {
            $this->HandUps = $param["HandUps"];
        }

        if (array_key_exists("FirstJoinTimestamp",$param) and $param["FirstJoinTimestamp"] !== null) {
            $this->FirstJoinTimestamp = $param["FirstJoinTimestamp"];
        }

        if (array_key_exists("LastQuitTimestamp",$param) and $param["LastQuitTimestamp"] !== null) {
            $this->LastQuitTimestamp = $param["LastQuitTimestamp"];
        }

        if (array_key_exists("Rewords",$param) and $param["Rewords"] !== null) {
            $this->Rewords = $param["Rewords"];
        }

        if (array_key_exists("IPAddress",$param) and $param["IPAddress"] !== null) {
            $this->IPAddress = $param["IPAddress"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("Device",$param) and $param["Device"] !== null) {
            $this->Device = $param["Device"];
        }

        if (array_key_exists("PerMemberMicCount",$param) and $param["PerMemberMicCount"] !== null) {
            $this->PerMemberMicCount = $param["PerMemberMicCount"];
        }

        if (array_key_exists("PerMemberMessageCount",$param) and $param["PerMemberMessageCount"] !== null) {
            $this->PerMemberMessageCount = $param["PerMemberMessageCount"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("SubGroupId",$param) and $param["SubGroupId"] !== null) {
            $this->SubGroupId = $param["SubGroupId"];
        }

        if (array_key_exists("Stage",$param) and $param["Stage"] !== null) {
            $this->Stage = $param["Stage"];
        }
    }
}
