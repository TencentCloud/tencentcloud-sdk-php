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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckAlarmRegularNameExist请求参数结构体
 *
 * @method string getProjectId() 获取项目名称
 * @method void setProjectId(string $ProjectId) 设置项目名称
 * @method string getAlarmRegularName() 获取规则名称
 * @method void setAlarmRegularName(string $AlarmRegularName) 设置规则名称
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getId() 获取主键ID
 * @method void setId(string $Id) 设置主键ID
 * @method integer getTaskType() 获取任务类型:201.实时,202.离线
 * @method void setTaskType(integer $TaskType) 设置任务类型:201.实时,202.离线
 * @method integer getMonitorType() 获取监控对象类型(1:所有任务,2:指定任务,3:指定责任人,4:指定资源组)
 * @method void setMonitorType(integer $MonitorType) 设置监控对象类型(1:所有任务,2:指定任务,3:指定责任人,4:指定资源组)
 */
class CheckAlarmRegularNameExistRequest extends AbstractModel
{
    /**
     * @var string 项目名称
     */
    public $ProjectId;

    /**
     * @var string 规则名称
     */
    public $AlarmRegularName;

    /**
     * @var string 任务ID
     * @deprecated
     */
    public $TaskId;

    /**
     * @var string 主键ID
     */
    public $Id;

    /**
     * @var integer 任务类型:201.实时,202.离线
     */
    public $TaskType;

    /**
     * @var integer 监控对象类型(1:所有任务,2:指定任务,3:指定责任人,4:指定资源组)
     */
    public $MonitorType;

    /**
     * @param string $ProjectId 项目名称
     * @param string $AlarmRegularName 规则名称
     * @param string $TaskId 任务ID
     * @param string $Id 主键ID
     * @param integer $TaskType 任务类型:201.实时,202.离线
     * @param integer $MonitorType 监控对象类型(1:所有任务,2:指定任务,3:指定责任人,4:指定资源组)
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

        if (array_key_exists("AlarmRegularName",$param) and $param["AlarmRegularName"] !== null) {
            $this->AlarmRegularName = $param["AlarmRegularName"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }
    }
}
