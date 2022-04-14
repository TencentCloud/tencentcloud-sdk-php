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
namespace TencentCloud\Ame\V20190916\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateKTVRobot请求参数结构体
 *
 * @method string getRTCSystem() 获取RTC厂商类型，取值有：
<li>TRTC</li>
 * @method void setRTCSystem(string $RTCSystem) 设置RTC厂商类型，取值有：
<li>TRTC</li>
 * @method JoinRoomInput getJoinRoomInput() 获取进房参数。
 * @method void setJoinRoomInput(JoinRoomInput $JoinRoomInput) 设置进房参数。
 * @method ApplicationLicenseInput getApplicationLicenseInput() 获取license基础信息
 * @method void setApplicationLicenseInput(ApplicationLicenseInput $ApplicationLicenseInput) 设置license基础信息
 * @method array getSyncRobotCommands() 获取创建机器人时初始化参数。
 * @method void setSyncRobotCommands(array $SyncRobotCommands) 设置创建机器人时初始化参数。
 */
class CreateKTVRobotRequest extends AbstractModel
{
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
     * @var ApplicationLicenseInput license基础信息
     */
    public $ApplicationLicenseInput;

    /**
     * @var array 创建机器人时初始化参数。
     */
    public $SyncRobotCommands;

    /**
     * @param string $RTCSystem RTC厂商类型，取值有：
<li>TRTC</li>
     * @param JoinRoomInput $JoinRoomInput 进房参数。
     * @param ApplicationLicenseInput $ApplicationLicenseInput license基础信息
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
        if (array_key_exists("RTCSystem",$param) and $param["RTCSystem"] !== null) {
            $this->RTCSystem = $param["RTCSystem"];
        }

        if (array_key_exists("JoinRoomInput",$param) and $param["JoinRoomInput"] !== null) {
            $this->JoinRoomInput = new JoinRoomInput();
            $this->JoinRoomInput->deserialize($param["JoinRoomInput"]);
        }

        if (array_key_exists("ApplicationLicenseInput",$param) and $param["ApplicationLicenseInput"] !== null) {
            $this->ApplicationLicenseInput = new ApplicationLicenseInput();
            $this->ApplicationLicenseInput->deserialize($param["ApplicationLicenseInput"]);
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
