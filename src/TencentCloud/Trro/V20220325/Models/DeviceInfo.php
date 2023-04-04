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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备信息
 *
 * @method string getDeviceId() 获取设备ID
 * @method void setDeviceId(string $DeviceId) 设置设备ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getDeviceStatus() 获取设备状态，offline为离线，ready为在线准备，connected为会话中
 * @method void setDeviceStatus(string $DeviceStatus) 设置设备状态，offline为离线，ready为在线准备，connected为会话中
 * @method string getDeviceType() 获取设备类型，field为现场设备（受控方），remote为远端设备（操控方）
 * @method void setDeviceType(string $DeviceType) 设置设备类型，field为现场设备（受控方），remote为远端设备（操控方）
 * @method string getModifyTime() 获取设备信息最近修改时间
 * @method void setModifyTime(string $ModifyTime) 设置设备信息最近修改时间
 * @method string getLastReportTime() 获取设备状态最近更新时间
 * @method void setLastReportTime(string $LastReportTime) 设置设备状态最近更新时间
 * @method string getProjectId() 获取设备所属项目Id
 * @method void setProjectId(string $ProjectId) 设置设备所属项目Id
 */
class DeviceInfo extends AbstractModel
{
    /**
     * @var string 设备ID
     */
    public $DeviceId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 设备状态，offline为离线，ready为在线准备，connected为会话中
     */
    public $DeviceStatus;

    /**
     * @var string 设备类型，field为现场设备（受控方），remote为远端设备（操控方）
     */
    public $DeviceType;

    /**
     * @var string 设备信息最近修改时间
     */
    public $ModifyTime;

    /**
     * @var string 设备状态最近更新时间
     */
    public $LastReportTime;

    /**
     * @var string 设备所属项目Id
     */
    public $ProjectId;

    /**
     * @param string $DeviceId 设备ID
     * @param string $DeviceName 设备名称
     * @param string $DeviceStatus 设备状态，offline为离线，ready为在线准备，connected为会话中
     * @param string $DeviceType 设备类型，field为现场设备（受控方），remote为远端设备（操控方）
     * @param string $ModifyTime 设备信息最近修改时间
     * @param string $LastReportTime 设备状态最近更新时间
     * @param string $ProjectId 设备所属项目Id
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
        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("DeviceStatus",$param) and $param["DeviceStatus"] !== null) {
            $this->DeviceStatus = $param["DeviceStatus"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("LastReportTime",$param) and $param["LastReportTime"] !== null) {
            $this->LastReportTime = $param["LastReportTime"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
