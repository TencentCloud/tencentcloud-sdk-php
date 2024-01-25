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
 * CreateTaskDs请求参数结构体
 *
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method string getWorkflowId() 获取工作流id
 * @method void setWorkflowId(string $WorkflowId) 设置工作流id
 * @method string getTaskName() 获取任务名
 * @method void setTaskName(string $TaskName) 设置任务名
 * @method integer getTaskType() 获取26离线同步，30Python，31PySpark，32DLC，33Impala，34Hive SQL，35Shell，36Spark SQL，39Spark，40CDW PG，92MapReduce
 * @method void setTaskType(integer $TaskType) 设置26离线同步，30Python，31PySpark，32DLC，33Impala，34Hive SQL，35Shell，36Spark SQL，39Spark，40CDW PG，92MapReduce
 * @method array getTaskExt() 获取扩展属性
 * @method void setTaskExt(array $TaskExt) 设置扩展属性
 * @method string getProductName() 获取产品名称
 * @method void setProductName(string $ProductName) 设置产品名称
 * @method string getInstanceInitStrategy() 获取任务实例初始化策略
 * @method void setInstanceInitStrategy(string $InstanceInitStrategy) 设置任务实例初始化策略
 * @method float getLeftCoordinate() 获取画布坐标横轴
 * @method void setLeftCoordinate(float $LeftCoordinate) 设置画布坐标横轴
 * @method float getTopCoordinate() 获取画布坐标纵轴
 * @method void setTopCoordinate(float $TopCoordinate) 设置画布坐标纵轴
 * @method string getTaskFolderId() 获取工作流目录ID
 * @method void setTaskFolderId(string $TaskFolderId) 设置工作流目录ID
 */
class CreateTaskDsRequest extends AbstractModel
{
    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var string 工作流id
     */
    public $WorkflowId;

    /**
     * @var string 任务名
     */
    public $TaskName;

    /**
     * @var integer 26离线同步，30Python，31PySpark，32DLC，33Impala，34Hive SQL，35Shell，36Spark SQL，39Spark，40CDW PG，92MapReduce
     */
    public $TaskType;

    /**
     * @var array 扩展属性
     */
    public $TaskExt;

    /**
     * @var string 产品名称
     */
    public $ProductName;

    /**
     * @var string 任务实例初始化策略
     */
    public $InstanceInitStrategy;

    /**
     * @var float 画布坐标横轴
     */
    public $LeftCoordinate;

    /**
     * @var float 画布坐标纵轴
     */
    public $TopCoordinate;

    /**
     * @var string 工作流目录ID
     */
    public $TaskFolderId;

    /**
     * @param string $ProjectId 项目Id
     * @param string $WorkflowId 工作流id
     * @param string $TaskName 任务名
     * @param integer $TaskType 26离线同步，30Python，31PySpark，32DLC，33Impala，34Hive SQL，35Shell，36Spark SQL，39Spark，40CDW PG，92MapReduce
     * @param array $TaskExt 扩展属性
     * @param string $ProductName 产品名称
     * @param string $InstanceInitStrategy 任务实例初始化策略
     * @param float $LeftCoordinate 画布坐标横轴
     * @param float $TopCoordinate 画布坐标纵轴
     * @param string $TaskFolderId 工作流目录ID
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

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TaskExt",$param) and $param["TaskExt"] !== null) {
            $this->TaskExt = [];
            foreach ($param["TaskExt"] as $key => $value){
                $obj = new TaskExtInfo();
                $obj->deserialize($value);
                array_push($this->TaskExt, $obj);
            }
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("InstanceInitStrategy",$param) and $param["InstanceInitStrategy"] !== null) {
            $this->InstanceInitStrategy = $param["InstanceInitStrategy"];
        }

        if (array_key_exists("LeftCoordinate",$param) and $param["LeftCoordinate"] !== null) {
            $this->LeftCoordinate = $param["LeftCoordinate"];
        }

        if (array_key_exists("TopCoordinate",$param) and $param["TopCoordinate"] !== null) {
            $this->TopCoordinate = $param["TopCoordinate"];
        }

        if (array_key_exists("TaskFolderId",$param) and $param["TaskFolderId"] !== null) {
            $this->TaskFolderId = $param["TaskFolderId"];
        }
    }
}
