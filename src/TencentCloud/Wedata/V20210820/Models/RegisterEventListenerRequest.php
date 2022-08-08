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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RegisterEventListener请求参数结构体
 *
 * @method string getKey() 获取关键字，如果是任务，则传任务Id
 * @method void setKey(string $Key) 设置关键字，如果是任务，则传任务Id
 * @method string getEventName() 获取事件名称
 * @method void setEventName(string $EventName) 设置事件名称
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getType() 获取事件类型，默认 REST_API
 * @method void setType(string $Type) 设置事件类型，默认 REST_API
 * @method string getProperties() 获取配置信息，比如最长等待时间1天配置json：{"maxWaitEventTime":1,"maxWaitEventTimeUnit":"DAYS"}
 * @method void setProperties(string $Properties) 设置配置信息，比如最长等待时间1天配置json：{"maxWaitEventTime":1,"maxWaitEventTimeUnit":"DAYS"}
 */
class RegisterEventListenerRequest extends AbstractModel
{
    /**
     * @var string 关键字，如果是任务，则传任务Id
     */
    public $Key;

    /**
     * @var string 事件名称
     */
    public $EventName;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 事件类型，默认 REST_API
     */
    public $Type;

    /**
     * @var string 配置信息，比如最长等待时间1天配置json：{"maxWaitEventTime":1,"maxWaitEventTimeUnit":"DAYS"}
     */
    public $Properties;

    /**
     * @param string $Key 关键字，如果是任务，则传任务Id
     * @param string $EventName 事件名称
     * @param string $ProjectId 项目id
     * @param string $Type 事件类型，默认 REST_API
     * @param string $Properties 配置信息，比如最长等待时间1天配置json：{"maxWaitEventTime":1,"maxWaitEventTimeUnit":"DAYS"}
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = $param["Properties"];
        }
    }
}
