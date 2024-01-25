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
 * CreateScriptsImportTasksDs请求参数结构体
 *
 * @method TaskDsDTOLite getTask() 获取任务属性
 * @method void setTask(TaskDsDTOLite $Task) 设置任务属性
 * @method array getEntityDTOList() 获取自定义业务实体信息列表
 * @method void setEntityDTOList(array $EntityDTOList) 设置自定义业务实体信息列表
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method integer getTaskNameExistMode() 获取0:跳过；1:重命名
 * @method void setTaskNameExistMode(integer $TaskNameExistMode) 设置0:跳过；1:重命名
 * @method string getTaskFolderId() 获取任务目录ID
 * @method void setTaskFolderId(string $TaskFolderId) 设置任务目录ID
 */
class CreateScriptsImportTasksDsRequest extends AbstractModel
{
    /**
     * @var TaskDsDTOLite 任务属性
     */
    public $Task;

    /**
     * @var array 自定义业务实体信息列表
     */
    public $EntityDTOList;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var integer 0:跳过；1:重命名
     */
    public $TaskNameExistMode;

    /**
     * @var string 任务目录ID
     */
    public $TaskFolderId;

    /**
     * @param TaskDsDTOLite $Task 任务属性
     * @param array $EntityDTOList 自定义业务实体信息列表
     * @param string $ProjectId 项目ID
     * @param integer $TaskNameExistMode 0:跳过；1:重命名
     * @param string $TaskFolderId 任务目录ID
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
        if (array_key_exists("Task",$param) and $param["Task"] !== null) {
            $this->Task = new TaskDsDTOLite();
            $this->Task->deserialize($param["Task"]);
        }

        if (array_key_exists("EntityDTOList",$param) and $param["EntityDTOList"] !== null) {
            $this->EntityDTOList = [];
            foreach ($param["EntityDTOList"] as $key => $value){
                $obj = new CustomizeBusinessEntityDTO();
                $obj->deserialize($value);
                array_push($this->EntityDTOList, $obj);
            }
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskNameExistMode",$param) and $param["TaskNameExistMode"] !== null) {
            $this->TaskNameExistMode = $param["TaskNameExistMode"];
        }

        if (array_key_exists("TaskFolderId",$param) and $param["TaskFolderId"] !== null) {
            $this->TaskFolderId = $param["TaskFolderId"];
        }
    }
}
