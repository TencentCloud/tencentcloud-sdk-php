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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 提交Job作业信息
 *
 * @method array getTasks() 获取任务配置信息。
 * @method void setTasks(array $Tasks) 设置任务配置信息。
 * @method string getJobName() 获取作业名称。
 * @method void setJobName(string $JobName) 设置作业名称。
 * @method string getJobDescription() 获取作业描述。
 * @method void setJobDescription(string $JobDescription) 设置作业描述。
 * @method integer getPriority() 获取作业优先级，数值越大，优先级越高，数值范围1～100。
 * @method void setPriority(integer $Priority) 设置作业优先级，数值越大，优先级越高，数值范围1～100。
 * @method array getTaskDependencies() 获取描述任务的依赖关系，DAG有向无环图。
 * @method void setTaskDependencies(array $TaskDependencies) 设置描述任务的依赖关系，DAG有向无环图。
 */
class Job extends AbstractModel
{
    /**
     * @var array 任务配置信息。
     */
    public $Tasks;

    /**
     * @var string 作业名称。
     */
    public $JobName;

    /**
     * @var string 作业描述。
     */
    public $JobDescription;

    /**
     * @var integer 作业优先级，数值越大，优先级越高，数值范围1～100。
     */
    public $Priority;

    /**
     * @var array 描述任务的依赖关系，DAG有向无环图。
     */
    public $TaskDependencies;

    /**
     * @param array $Tasks 任务配置信息。
     * @param string $JobName 作业名称。
     * @param string $JobDescription 作业描述。
     * @param integer $Priority 作业优先级，数值越大，优先级越高，数值范围1～100。
     * @param array $TaskDependencies 描述任务的依赖关系，DAG有向无环图。
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
        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new Task();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("JobDescription",$param) and $param["JobDescription"] !== null) {
            $this->JobDescription = $param["JobDescription"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("TaskDependencies",$param) and $param["TaskDependencies"] !== null) {
            $this->TaskDependencies = [];
            foreach ($param["TaskDependencies"] as $key => $value){
                $obj = new TaskDependence();
                $obj->deserialize($value);
                array_push($this->TaskDependencies, $obj);
            }
        }
    }
}
