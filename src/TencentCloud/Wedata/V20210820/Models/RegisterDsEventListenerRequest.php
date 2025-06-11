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
 * RegisterDsEventListener请求参数结构体
 *
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method string getKey() 获取任务Id
 * @method void setKey(string $Key) 设置任务Id
 * @method string getType() 获取事件类型，默认 REST_API
 * @method void setType(string $Type) 设置事件类型，默认 REST_API
 * @method string getEventName() 获取事件名称
 * @method void setEventName(string $EventName) 设置事件名称
 * @method string getRequestFromSource() 获取请求来源，WEB 前端；CLIENT 客户端
 * @method void setRequestFromSource(string $RequestFromSource) 设置请求来源，WEB 前端；CLIENT 客户端
 * @method array getProperties() 获取配置信息，比如最长等待时间3天配置：[{"ParamKey":"maxWaitEventTime","ParamValue":"3"},{"ParamKey":"maxWaitEventTimeUnit","ParamValue":"DAYS"}]
 * @method void setProperties(array $Properties) 设置配置信息，比如最长等待时间3天配置：[{"ParamKey":"maxWaitEventTime","ParamValue":"3"},{"ParamKey":"maxWaitEventTimeUnit","ParamValue":"DAYS"}]
 * @method string getEventProjectId() 获取事件所属项目id
 * @method void setEventProjectId(string $EventProjectId) 设置事件所属项目id
 */
class RegisterDsEventListenerRequest extends AbstractModel
{
    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var string 任务Id
     */
    public $Key;

    /**
     * @var string 事件类型，默认 REST_API
     */
    public $Type;

    /**
     * @var string 事件名称
     */
    public $EventName;

    /**
     * @var string 请求来源，WEB 前端；CLIENT 客户端
     */
    public $RequestFromSource;

    /**
     * @var array 配置信息，比如最长等待时间3天配置：[{"ParamKey":"maxWaitEventTime","ParamValue":"3"},{"ParamKey":"maxWaitEventTimeUnit","ParamValue":"DAYS"}]
     */
    public $Properties;

    /**
     * @var string 事件所属项目id
     */
    public $EventProjectId;

    /**
     * @param string $ProjectId 项目Id
     * @param string $Key 任务Id
     * @param string $Type 事件类型，默认 REST_API
     * @param string $EventName 事件名称
     * @param string $RequestFromSource 请求来源，WEB 前端；CLIENT 客户端
     * @param array $Properties 配置信息，比如最长等待时间3天配置：[{"ParamKey":"maxWaitEventTime","ParamValue":"3"},{"ParamKey":"maxWaitEventTimeUnit","ParamValue":"DAYS"}]
     * @param string $EventProjectId 事件所属项目id
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("RequestFromSource",$param) and $param["RequestFromSource"] !== null) {
            $this->RequestFromSource = $param["RequestFromSource"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new ParamInfoDs();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }

        if (array_key_exists("EventProjectId",$param) and $param["EventProjectId"] !== null) {
            $this->EventProjectId = $param["EventProjectId"];
        }
    }
}
