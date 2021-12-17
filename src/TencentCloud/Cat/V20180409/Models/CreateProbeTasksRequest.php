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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateProbeTasks请求参数结构体
 *
 * @method array getBatchTasks() 获取批量任务名-地址
 * @method void setBatchTasks(array $BatchTasks) 设置批量任务名-地址
 * @method integer getTaskType() 获取任务类型
 * @method void setTaskType(integer $TaskType) 设置任务类型
 * @method array getNodes() 获取探测节点
 * @method void setNodes(array $Nodes) 设置探测节点
 * @method integer getInterval() 获取探测间隔
 * @method void setInterval(integer $Interval) 设置探测间隔
 * @method string getParameters() 获取探测参数
 * @method void setParameters(string $Parameters) 设置探测参数
 * @method integer getTaskCategory() 获取任务分类
<li>1 = PC</li>
<li> 2 = Mobile </li>
 * @method void setTaskCategory(integer $TaskCategory) 设置任务分类
<li>1 = PC</li>
<li> 2 = Mobile </li>
 * @method string getCron() 获取定时任务cron表达式
 * @method void setCron(string $Cron) 设置定时任务cron表达式
 */
class CreateProbeTasksRequest extends AbstractModel
{
    /**
     * @var array 批量任务名-地址
     */
    public $BatchTasks;

    /**
     * @var integer 任务类型
     */
    public $TaskType;

    /**
     * @var array 探测节点
     */
    public $Nodes;

    /**
     * @var integer 探测间隔
     */
    public $Interval;

    /**
     * @var string 探测参数
     */
    public $Parameters;

    /**
     * @var integer 任务分类
<li>1 = PC</li>
<li> 2 = Mobile </li>
     */
    public $TaskCategory;

    /**
     * @var string 定时任务cron表达式
     */
    public $Cron;

    /**
     * @param array $BatchTasks 批量任务名-地址
     * @param integer $TaskType 任务类型
     * @param array $Nodes 探测节点
     * @param integer $Interval 探测间隔
     * @param string $Parameters 探测参数
     * @param integer $TaskCategory 任务分类
<li>1 = PC</li>
<li> 2 = Mobile </li>
     * @param string $Cron 定时任务cron表达式
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
        if (array_key_exists("BatchTasks",$param) and $param["BatchTasks"] !== null) {
            $this->BatchTasks = [];
            foreach ($param["BatchTasks"] as $key => $value){
                $obj = new ProbeTaskBasicConfiguration();
                $obj->deserialize($value);
                array_push($this->BatchTasks, $obj);
            }
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Nodes",$param) and $param["Nodes"] !== null) {
            $this->Nodes = $param["Nodes"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = $param["Parameters"];
        }

        if (array_key_exists("TaskCategory",$param) and $param["TaskCategory"] !== null) {
            $this->TaskCategory = $param["TaskCategory"];
        }

        if (array_key_exists("Cron",$param) and $param["Cron"] !== null) {
            $this->Cron = $param["Cron"];
        }
    }
}
