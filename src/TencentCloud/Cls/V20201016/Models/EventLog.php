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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Windows事件日志采集配置
 *
 * @method string getEventChannel() 获取事件通道，支持
- Application 应用日志
- Security 安全日志
- Setup 启动日志
- System 系统日志
- ALL 所有日志

 * @method void setEventChannel(string $EventChannel) 设置事件通道，支持
- Application 应用日志
- Security 安全日志
- Setup 启动日志
- System 系统日志
- ALL 所有日志

 * @method integer getTimeType() 获取时间字段（Timestamp）支持的类型
- 1（用户自定义时间）
- 2（当前时间）
 * @method void setTimeType(integer $TimeType) 设置时间字段（Timestamp）支持的类型
- 1（用户自定义时间）
- 2（当前时间）
 * @method integer getTimestamp() 获取时间，用户选择自定义时间类型时，需要指定时间，单位秒
格式：时间戳，1754897446
 * @method void setTimestamp(integer $Timestamp) 设置时间，用户选择自定义时间类型时，需要指定时间，单位秒
格式：时间戳，1754897446
 * @method array getEventIDs() 获取事件ID过滤列表
	
选填，为空表示不做过滤
支持正向过滤单个值（例：20）或范围（例：0-20），也支持反向过滤单个值(例：-20)
多个过滤项之间可由逗号隔开，例：1-200,-100表示采集1-200范围内除了100以外的事件日志
 * @method void setEventIDs(array $EventIDs) 设置事件ID过滤列表
	
选填，为空表示不做过滤
支持正向过滤单个值（例：20）或范围（例：0-20），也支持反向过滤单个值(例：-20)
多个过滤项之间可由逗号隔开，例：1-200,-100表示采集1-200范围内除了100以外的事件日志
 */
class EventLog extends AbstractModel
{
    /**
     * @var string 事件通道，支持
- Application 应用日志
- Security 安全日志
- Setup 启动日志
- System 系统日志
- ALL 所有日志

     */
    public $EventChannel;

    /**
     * @var integer 时间字段（Timestamp）支持的类型
- 1（用户自定义时间）
- 2（当前时间）
     */
    public $TimeType;

    /**
     * @var integer 时间，用户选择自定义时间类型时，需要指定时间，单位秒
格式：时间戳，1754897446
     */
    public $Timestamp;

    /**
     * @var array 事件ID过滤列表
	
选填，为空表示不做过滤
支持正向过滤单个值（例：20）或范围（例：0-20），也支持反向过滤单个值(例：-20)
多个过滤项之间可由逗号隔开，例：1-200,-100表示采集1-200范围内除了100以外的事件日志
     */
    public $EventIDs;

    /**
     * @param string $EventChannel 事件通道，支持
- Application 应用日志
- Security 安全日志
- Setup 启动日志
- System 系统日志
- ALL 所有日志

     * @param integer $TimeType 时间字段（Timestamp）支持的类型
- 1（用户自定义时间）
- 2（当前时间）
     * @param integer $Timestamp 时间，用户选择自定义时间类型时，需要指定时间，单位秒
格式：时间戳，1754897446
     * @param array $EventIDs 事件ID过滤列表
	
选填，为空表示不做过滤
支持正向过滤单个值（例：20）或范围（例：0-20），也支持反向过滤单个值(例：-20)
多个过滤项之间可由逗号隔开，例：1-200,-100表示采集1-200范围内除了100以外的事件日志
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
        if (array_key_exists("EventChannel",$param) and $param["EventChannel"] !== null) {
            $this->EventChannel = $param["EventChannel"];
        }

        if (array_key_exists("TimeType",$param) and $param["TimeType"] !== null) {
            $this->TimeType = $param["TimeType"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("EventIDs",$param) and $param["EventIDs"] !== null) {
            $this->EventIDs = $param["EventIDs"];
        }
    }
}
