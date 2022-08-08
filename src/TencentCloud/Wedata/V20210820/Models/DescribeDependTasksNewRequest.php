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
 * DescribeDependTasksNew请求参数结构体
 *
 * @method string getTaskId() 获取任务Id
 * @method void setTaskId(string $TaskId) 设置任务Id
 * @method integer getDeep() 获取上游/下游层级1-6级
 * @method void setDeep(integer $Deep) 设置上游/下游层级1-6级
 * @method integer getUp() 获取1: 表示查询上游节点；0:表示查询下游节点；2：表示查询上游和下游节点
 * @method void setUp(integer $Up) 设置1: 表示查询上游节点；0:表示查询下游节点；2：表示查询上游和下游节点
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getWorkflowId() 获取任务工作流id
 * @method void setWorkflowId(string $WorkflowId) 设置任务工作流id
 */
class DescribeDependTasksNewRequest extends AbstractModel
{
    /**
     * @var string 任务Id
     */
    public $TaskId;

    /**
     * @var integer 上游/下游层级1-6级
     */
    public $Deep;

    /**
     * @var integer 1: 表示查询上游节点；0:表示查询下游节点；2：表示查询上游和下游节点
     */
    public $Up;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 任务工作流id
     */
    public $WorkflowId;

    /**
     * @param string $TaskId 任务Id
     * @param integer $Deep 上游/下游层级1-6级
     * @param integer $Up 1: 表示查询上游节点；0:表示查询下游节点；2：表示查询上游和下游节点
     * @param string $ProjectId 项目id
     * @param string $WorkflowId 任务工作流id
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

        if (array_key_exists("Deep",$param) and $param["Deep"] !== null) {
            $this->Deep = $param["Deep"];
        }

        if (array_key_exists("Up",$param) and $param["Up"] !== null) {
            $this->Up = $param["Up"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }
    }
}
