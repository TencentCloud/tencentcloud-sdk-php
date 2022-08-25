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
namespace TencentCloud\Yinsuda\V20220527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 机器人信息
 *
 * @method string getRobotId() 获取机器人Id。
 * @method void setRobotId(string $RobotId) 设置机器人Id。
 * @method string getStatus() 获取状态，取值有：
<li>Play：播放</li>
<li>Pause：暂停</li>
<li>Destroy：销毁</li>
 * @method void setStatus(string $Status) 设置状态，取值有：
<li>Play：播放</li>
<li>Pause：暂停</li>
<li>Destroy：销毁</li>
 * @method array getPlaylists() 获取播放列表。
 * @method void setPlaylists(array $Playlists) 设置播放列表。
 * @method integer getCurIndex() 获取当前歌单索引位置。
 * @method void setCurIndex(integer $CurIndex) 设置当前歌单索引位置。
 * @method integer getPosition() 获取播放进度，单位：毫秒。
 * @method void setPosition(integer $Position) 设置播放进度，单位：毫秒。
 * @method SetAudioParamCommandInput getSetAudioParamInput() 获取音频参数。
 * @method void setSetAudioParamInput(SetAudioParamCommandInput $SetAudioParamInput) 设置音频参数。
 * @method JoinRoomInput getJoinRoomInput() 获取进房信息。
 * @method void setJoinRoomInput(JoinRoomInput $JoinRoomInput) 设置进房信息。
 * @method string getRTCSystem() 获取RTC厂商类型，取值有：
<li>TRTC</li>
 * @method void setRTCSystem(string $RTCSystem) 设置RTC厂商类型，取值有：
<li>TRTC</li>
 * @method SetPlayModeCommandInput getSetPlayModeInput() 获取播放模式，PlayMode取值有：
<li>RepeatPlaylist：列表循环</li>
<li>Order：顺序播放</li>
<li>RepeatSingle：单曲循环</li>
<li>Shuffle：随机播放</li>
 * @method void setSetPlayModeInput(SetPlayModeCommandInput $SetPlayModeInput) 设置播放模式，PlayMode取值有：
<li>RepeatPlaylist：列表循环</li>
<li>Order：顺序播放</li>
<li>RepeatSingle：单曲循环</li>
<li>Shuffle：随机播放</li>
 */
class KTVRobotInfo extends AbstractModel
{
    /**
     * @var string 机器人Id。
     */
    public $RobotId;

    /**
     * @var string 状态，取值有：
<li>Play：播放</li>
<li>Pause：暂停</li>
<li>Destroy：销毁</li>
     */
    public $Status;

    /**
     * @var array 播放列表。
     */
    public $Playlists;

    /**
     * @var integer 当前歌单索引位置。
     */
    public $CurIndex;

    /**
     * @var integer 播放进度，单位：毫秒。
     */
    public $Position;

    /**
     * @var SetAudioParamCommandInput 音频参数。
     */
    public $SetAudioParamInput;

    /**
     * @var JoinRoomInput 进房信息。
     */
    public $JoinRoomInput;

    /**
     * @var string RTC厂商类型，取值有：
<li>TRTC</li>
     */
    public $RTCSystem;

    /**
     * @var SetPlayModeCommandInput 播放模式，PlayMode取值有：
<li>RepeatPlaylist：列表循环</li>
<li>Order：顺序播放</li>
<li>RepeatSingle：单曲循环</li>
<li>Shuffle：随机播放</li>
     */
    public $SetPlayModeInput;

    /**
     * @param string $RobotId 机器人Id。
     * @param string $Status 状态，取值有：
<li>Play：播放</li>
<li>Pause：暂停</li>
<li>Destroy：销毁</li>
     * @param array $Playlists 播放列表。
     * @param integer $CurIndex 当前歌单索引位置。
     * @param integer $Position 播放进度，单位：毫秒。
     * @param SetAudioParamCommandInput $SetAudioParamInput 音频参数。
     * @param JoinRoomInput $JoinRoomInput 进房信息。
     * @param string $RTCSystem RTC厂商类型，取值有：
<li>TRTC</li>
     * @param SetPlayModeCommandInput $SetPlayModeInput 播放模式，PlayMode取值有：
<li>RepeatPlaylist：列表循环</li>
<li>Order：顺序播放</li>
<li>RepeatSingle：单曲循环</li>
<li>Shuffle：随机播放</li>
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
        if (array_key_exists("RobotId",$param) and $param["RobotId"] !== null) {
            $this->RobotId = $param["RobotId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Playlists",$param) and $param["Playlists"] !== null) {
            $this->Playlists = $param["Playlists"];
        }

        if (array_key_exists("CurIndex",$param) and $param["CurIndex"] !== null) {
            $this->CurIndex = $param["CurIndex"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("SetAudioParamInput",$param) and $param["SetAudioParamInput"] !== null) {
            $this->SetAudioParamInput = new SetAudioParamCommandInput();
            $this->SetAudioParamInput->deserialize($param["SetAudioParamInput"]);
        }

        if (array_key_exists("JoinRoomInput",$param) and $param["JoinRoomInput"] !== null) {
            $this->JoinRoomInput = new JoinRoomInput();
            $this->JoinRoomInput->deserialize($param["JoinRoomInput"]);
        }

        if (array_key_exists("RTCSystem",$param) and $param["RTCSystem"] !== null) {
            $this->RTCSystem = $param["RTCSystem"];
        }

        if (array_key_exists("SetPlayModeInput",$param) and $param["SetPlayModeInput"] !== null) {
            $this->SetPlayModeInput = new SetPlayModeCommandInput();
            $this->SetPlayModeInput->deserialize($param["SetPlayModeInput"]);
        }
    }
}
