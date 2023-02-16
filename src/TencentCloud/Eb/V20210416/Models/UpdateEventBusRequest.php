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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateEventBus请求参数结构体
 *
 * @method string getEventBusId() 获取事件集ID
 * @method void setEventBusId(string $EventBusId) 设置事件集ID
 * @method string getDescription() 获取事件集描述，不限字符类型，200字符描述以内
 * @method void setDescription(string $Description) 设置事件集描述，不限字符类型，200字符描述以内
 * @method string getEventBusName() 获取事件集名称，只能包含字母、数字、下划线、连字符，以字母开头，以数字或字母结尾，2~60个字符
 * @method void setEventBusName(string $EventBusName) 设置事件集名称，只能包含字母、数字、下划线、连字符，以字母开头，以数字或字母结尾，2~60个字符
 * @method integer getSaveDays() 获取EB日志存储时长
 * @method void setSaveDays(integer $SaveDays) 设置EB日志存储时长
 * @method string getLogTopicId() 获取EB日志主题ID
 * @method void setLogTopicId(string $LogTopicId) 设置EB日志主题ID
 */
class UpdateEventBusRequest extends AbstractModel
{
    /**
     * @var string 事件集ID
     */
    public $EventBusId;

    /**
     * @var string 事件集描述，不限字符类型，200字符描述以内
     */
    public $Description;

    /**
     * @var string 事件集名称，只能包含字母、数字、下划线、连字符，以字母开头，以数字或字母结尾，2~60个字符
     */
    public $EventBusName;

    /**
     * @var integer EB日志存储时长
     */
    public $SaveDays;

    /**
     * @var string EB日志主题ID
     */
    public $LogTopicId;

    /**
     * @param string $EventBusId 事件集ID
     * @param string $Description 事件集描述，不限字符类型，200字符描述以内
     * @param string $EventBusName 事件集名称，只能包含字母、数字、下划线、连字符，以字母开头，以数字或字母结尾，2~60个字符
     * @param integer $SaveDays EB日志存储时长
     * @param string $LogTopicId EB日志主题ID
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
        if (array_key_exists("EventBusId",$param) and $param["EventBusId"] !== null) {
            $this->EventBusId = $param["EventBusId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("EventBusName",$param) and $param["EventBusName"] !== null) {
            $this->EventBusName = $param["EventBusName"];
        }

        if (array_key_exists("SaveDays",$param) and $param["SaveDays"] !== null) {
            $this->SaveDays = $param["SaveDays"];
        }

        if (array_key_exists("LogTopicId",$param) and $param["LogTopicId"] !== null) {
            $this->LogTopicId = $param["LogTopicId"];
        }
    }
}
