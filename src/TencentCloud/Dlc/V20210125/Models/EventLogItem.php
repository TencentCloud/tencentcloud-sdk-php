<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 事件日志项
 *
 * @method integer getEventTime() 获取事件时间（Unix 时间戳，秒级）
 * @method void setEventTime(integer $EventTime) 设置事件时间（Unix 时间戳，秒级）
 * @method string getComponent() 获取组件名称
 * @method void setComponent(string $Component) 设置组件名称
 * @method string getLevel() 获取日志级别（INFO/WARN/ERROR）
 * @method void setLevel(string $Level) 设置日志级别（INFO/WARN/ERROR）
 * @method string getMessage() 获取事件内容
 * @method void setMessage(string $Message) 设置事件内容
 */
class EventLogItem extends AbstractModel
{
    /**
     * @var integer 事件时间（Unix 时间戳，秒级）
     */
    public $EventTime;

    /**
     * @var string 组件名称
     */
    public $Component;

    /**
     * @var string 日志级别（INFO/WARN/ERROR）
     */
    public $Level;

    /**
     * @var string 事件内容
     */
    public $Message;

    /**
     * @param integer $EventTime 事件时间（Unix 时间戳，秒级）
     * @param string $Component 组件名称
     * @param string $Level 日志级别（INFO/WARN/ERROR）
     * @param string $Message 事件内容
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
        if (array_key_exists("EventTime",$param) and $param["EventTime"] !== null) {
            $this->EventTime = $param["EventTime"];
        }

        if (array_key_exists("Component",$param) and $param["Component"] !== null) {
            $this->Component = $param["Component"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
