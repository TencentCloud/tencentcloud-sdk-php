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
 * CreateKTVRobot请求参数结构体
 *
 * @method string getAppName() 获取应用名称。
 * @method void setAppName(string $AppName) 设置应用名称。
 * @method string getUserId() 获取用户标识。
 * @method void setUserId(string $UserId) 设置用户标识。
 * @method string getRTCSystem() 获取RTC厂商类型，取值有：
<li>TRTC</li>
 * @method void setRTCSystem(string $RTCSystem) 设置RTC厂商类型，取值有：
<li>TRTC</li>
 * @method JoinRoomInput getJoinRoomInput() 获取进房参数。
 * @method void setJoinRoomInput(JoinRoomInput $JoinRoomInput) 设置进房参数。
 * @method array getSyncRobotCommands() 获取创建机器人时初始化参数。
 * @method void setSyncRobotCommands(array $SyncRobotCommands) 设置创建机器人时初始化参数。
 */
class CreateKTVRobotRequest extends AbstractModel
{
    /**
     * @var string 应用名称。
     */
    public $AppName;

    /**
     * @var string 用户标识。
     */
    public $UserId;

    /**
     * @var string RTC厂商类型，取值有：
<li>TRTC</li>
     */
    public $RTCSystem;

    /**
     * @var JoinRoomInput 进房参数。
     */
    public $JoinRoomInput;

    /**
     * @var array 创建机器人时初始化参数。
     */
    public $SyncRobotCommands;

    /**
     * @param string $AppName 应用名称。
     * @param string $UserId 用户标识。
     * @param string $RTCSystem RTC厂商类型，取值有：
<li>TRTC</li>
     * @param JoinRoomInput $JoinRoomInput 进房参数。
     * @param array $SyncRobotCommands 创建机器人时初始化参数。
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
        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("RTCSystem",$param) and $param["RTCSystem"] !== null) {
            $this->RTCSystem = $param["RTCSystem"];
        }

        if (array_key_exists("JoinRoomInput",$param) and $param["JoinRoomInput"] !== null) {
            $this->JoinRoomInput = new JoinRoomInput();
            $this->JoinRoomInput->deserialize($param["JoinRoomInput"]);
        }

        if (array_key_exists("SyncRobotCommands",$param) and $param["SyncRobotCommands"] !== null) {
            $this->SyncRobotCommands = [];
            foreach ($param["SyncRobotCommands"] as $key => $value){
                $obj = new SyncRobotCommand();
                $obj->deserialize($value);
                array_push($this->SyncRobotCommands, $obj);
            }
        }
    }
}
