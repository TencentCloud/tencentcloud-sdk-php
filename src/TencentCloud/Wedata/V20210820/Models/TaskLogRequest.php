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
 * TaskLog请求参数结构体
 *
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method integer getStartTime() 获取起始时间戳，单位毫秒
 * @method void setStartTime(integer $StartTime) 设置起始时间戳，单位毫秒
 * @method integer getEndTime() 获取结束时间戳，单位毫秒
 * @method void setEndTime(integer $EndTime) 设置结束时间戳，单位毫秒
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method integer getLimit() 获取拉取日志数量，默认100
 * @method void setLimit(integer $Limit) 设置拉取日志数量，默认100
 * @method string getOrderType() 获取日志排序 desc 倒序 asc 顺序
 * @method void setOrderType(string $OrderType) 设置日志排序 desc 倒序 asc 顺序
 * @method integer getTaskType() 获取实时任务 201   离线任务 202  默认实时任务
 * @method void setTaskType(integer $TaskType) 设置实时任务 201   离线任务 202  默认实时任务
 */
class TaskLogRequest extends AbstractModel
{
    /**
     * @var string 任务id
     */
    public $TaskId;

    /**
     * @var integer 起始时间戳，单位毫秒
     */
    public $StartTime;

    /**
     * @var integer 结束时间戳，单位毫秒
     */
    public $EndTime;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var integer 拉取日志数量，默认100
     */
    public $Limit;

    /**
     * @var string 日志排序 desc 倒序 asc 顺序
     */
    public $OrderType;

    /**
     * @var integer 实时任务 201   离线任务 202  默认实时任务
     */
    public $TaskType;

    /**
     * @param string $TaskId 任务id
     * @param integer $StartTime 起始时间戳，单位毫秒
     * @param integer $EndTime 结束时间戳，单位毫秒
     * @param string $ProjectId 项目id
     * @param integer $Limit 拉取日志数量，默认100
     * @param string $OrderType 日志排序 desc 倒序 asc 顺序
     * @param integer $TaskType 实时任务 201   离线任务 202  默认实时任务
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }
    }
}
