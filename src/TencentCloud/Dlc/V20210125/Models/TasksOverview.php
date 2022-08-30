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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务概览
 *
 * @method integer getTaskQueuedCount() 获取正在排队的任务个数
 * @method void setTaskQueuedCount(integer $TaskQueuedCount) 设置正在排队的任务个数
 * @method integer getTaskInitCount() 获取初始化的任务个数
 * @method void setTaskInitCount(integer $TaskInitCount) 设置初始化的任务个数
 * @method integer getTaskRunningCount() 获取正在执行的任务个数
 * @method void setTaskRunningCount(integer $TaskRunningCount) 设置正在执行的任务个数
 * @method integer getTotalTaskCount() 获取当前时间范围的总任务个数
 * @method void setTotalTaskCount(integer $TotalTaskCount) 设置当前时间范围的总任务个数
 */
class TasksOverview extends AbstractModel
{
    /**
     * @var integer 正在排队的任务个数
     */
    public $TaskQueuedCount;

    /**
     * @var integer 初始化的任务个数
     */
    public $TaskInitCount;

    /**
     * @var integer 正在执行的任务个数
     */
    public $TaskRunningCount;

    /**
     * @var integer 当前时间范围的总任务个数
     */
    public $TotalTaskCount;

    /**
     * @param integer $TaskQueuedCount 正在排队的任务个数
     * @param integer $TaskInitCount 初始化的任务个数
     * @param integer $TaskRunningCount 正在执行的任务个数
     * @param integer $TotalTaskCount 当前时间范围的总任务个数
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
        if (array_key_exists("TaskQueuedCount",$param) and $param["TaskQueuedCount"] !== null) {
            $this->TaskQueuedCount = $param["TaskQueuedCount"];
        }

        if (array_key_exists("TaskInitCount",$param) and $param["TaskInitCount"] !== null) {
            $this->TaskInitCount = $param["TaskInitCount"];
        }

        if (array_key_exists("TaskRunningCount",$param) and $param["TaskRunningCount"] !== null) {
            $this->TaskRunningCount = $param["TaskRunningCount"];
        }

        if (array_key_exists("TotalTaskCount",$param) and $param["TotalTaskCount"] !== null) {
            $this->TotalTaskCount = $param["TotalTaskCount"];
        }
    }
}
