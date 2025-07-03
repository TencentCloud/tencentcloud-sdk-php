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
 * TriggerDsEvent请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method array getEventCaseList() 获取事件实例信息
 * @method void setEventCaseList(array $EventCaseList) 设置事件实例信息
 * @method array getEventBatchCaseList() 获取事件实例信息(连续时间)
 * @method void setEventBatchCaseList(array $EventBatchCaseList) 设置事件实例信息(连续时间)
 * @method string getScheduleTimeZone() 获取触发时区
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) 设置触发时区
 */
class TriggerDsEventRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var array 事件实例信息
     */
    public $EventCaseList;

    /**
     * @var array 事件实例信息(连续时间)
     */
    public $EventBatchCaseList;

    /**
     * @var string 触发时区
     */
    public $ScheduleTimeZone;

    /**
     * @param string $ProjectId 项目id
     * @param array $EventCaseList 事件实例信息
     * @param array $EventBatchCaseList 事件实例信息(连续时间)
     * @param string $ScheduleTimeZone 触发时区
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

        if (array_key_exists("EventCaseList",$param) and $param["EventCaseList"] !== null) {
            $this->EventCaseList = [];
            foreach ($param["EventCaseList"] as $key => $value){
                $obj = new EventCaseDTO();
                $obj->deserialize($value);
                array_push($this->EventCaseList, $obj);
            }
        }

        if (array_key_exists("EventBatchCaseList",$param) and $param["EventBatchCaseList"] !== null) {
            $this->EventBatchCaseList = [];
            foreach ($param["EventBatchCaseList"] as $key => $value){
                $obj = new EventBatchCaseDTO();
                $obj->deserialize($value);
                array_push($this->EventBatchCaseList, $obj);
            }
        }

        if (array_key_exists("ScheduleTimeZone",$param) and $param["ScheduleTimeZone"] !== null) {
            $this->ScheduleTimeZone = $param["ScheduleTimeZone"];
        }
    }
}
