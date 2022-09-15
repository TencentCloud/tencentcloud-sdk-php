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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyIotDevice请求参数结构体
 *
 * @method integer getDeviceId() 获取设备id
 * @method void setDeviceId(integer $DeviceId) 设置设备id
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method boolean getDisabled() 获取设备是否开启
 * @method void setDisabled(boolean $Disabled) 设置设备是否开启
 * @method integer getLogSetting() 获取日志设置
 * @method void setLogSetting(integer $LogSetting) 设置日志设置
 * @method integer getLogLevel() 获取日志级别
 * @method void setLogLevel(integer $LogLevel) 设置日志级别
 */
class ModifyIotDeviceRequest extends AbstractModel
{
    /**
     * @var integer 设备id
     */
    public $DeviceId;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var boolean 设备是否开启
     */
    public $Disabled;

    /**
     * @var integer 日志设置
     */
    public $LogSetting;

    /**
     * @var integer 日志级别
     */
    public $LogLevel;

    /**
     * @param integer $DeviceId 设备id
     * @param string $Description 描述
     * @param boolean $Disabled 设备是否开启
     * @param integer $LogSetting 日志设置
     * @param integer $LogLevel 日志级别
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Disabled",$param) and $param["Disabled"] !== null) {
            $this->Disabled = $param["Disabled"];
        }

        if (array_key_exists("LogSetting",$param) and $param["LogSetting"] !== null) {
            $this->LogSetting = $param["LogSetting"];
        }

        if (array_key_exists("LogLevel",$param) and $param["LogLevel"] !== null) {
            $this->LogLevel = $param["LogLevel"];
        }
    }
}
