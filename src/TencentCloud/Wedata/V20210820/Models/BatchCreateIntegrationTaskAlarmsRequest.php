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
 * BatchCreateIntegrationTaskAlarms请求参数结构体
 *
 * @method array getTaskIds() 获取任务id
 * @method void setTaskIds(array $TaskIds) 设置任务id
 * @method TaskAlarmInfo getTaskAlarmInfo() 获取告警配置信息
 * @method void setTaskAlarmInfo(TaskAlarmInfo $TaskAlarmInfo) 设置告警配置信息
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 */
class BatchCreateIntegrationTaskAlarmsRequest extends AbstractModel
{
    /**
     * @var array 任务id
     */
    public $TaskIds;

    /**
     * @var TaskAlarmInfo 告警配置信息
     */
    public $TaskAlarmInfo;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @param array $TaskIds 任务id
     * @param TaskAlarmInfo $TaskAlarmInfo 告警配置信息
     * @param string $ProjectId 项目id
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
        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("TaskAlarmInfo",$param) and $param["TaskAlarmInfo"] !== null) {
            $this->TaskAlarmInfo = new TaskAlarmInfo();
            $this->TaskAlarmInfo->deserialize($param["TaskAlarmInfo"]);
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
