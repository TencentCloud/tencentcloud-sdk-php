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
 * RestoreRecycleTask请求参数结构体
 *
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method string getWorkflowId() 获取工作流id
 * @method void setWorkflowId(string $WorkflowId) 设置工作流id
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getProductName() 获取产品名称
DATA_DEV、DATA_QUALITY
 * @method void setProductName(string $ProductName) 设置产品名称
DATA_DEV、DATA_QUALITY
 * @method string getFileRemotePath() 获取文件路径
 * @method void setFileRemotePath(string $FileRemotePath) 设置文件路径
 * @method boolean getVirtualFlag() 获取是否虚拟任务
 * @method void setVirtualFlag(boolean $VirtualFlag) 设置是否虚拟任务
 * @method string getVirtualTaskId() 获取虚拟任务id
 * @method void setVirtualTaskId(string $VirtualTaskId) 设置虚拟任务id
 */
class RestoreRecycleTaskRequest extends AbstractModel
{
    /**
     * @var string 任务id
     */
    public $TaskId;

    /**
     * @var string 工作流id
     */
    public $WorkflowId;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string 产品名称
DATA_DEV、DATA_QUALITY
     */
    public $ProductName;

    /**
     * @var string 文件路径
     */
    public $FileRemotePath;

    /**
     * @var boolean 是否虚拟任务
     */
    public $VirtualFlag;

    /**
     * @var string 虚拟任务id
     */
    public $VirtualTaskId;

    /**
     * @param string $TaskId 任务id
     * @param string $WorkflowId 工作流id
     * @param string $ProjectId 项目id
     * @param string $TaskName 任务名称
     * @param string $ProductName 产品名称
DATA_DEV、DATA_QUALITY
     * @param string $FileRemotePath 文件路径
     * @param boolean $VirtualFlag 是否虚拟任务
     * @param string $VirtualTaskId 虚拟任务id
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

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("FileRemotePath",$param) and $param["FileRemotePath"] !== null) {
            $this->FileRemotePath = $param["FileRemotePath"];
        }

        if (array_key_exists("VirtualFlag",$param) and $param["VirtualFlag"] !== null) {
            $this->VirtualFlag = $param["VirtualFlag"];
        }

        if (array_key_exists("VirtualTaskId",$param) and $param["VirtualTaskId"] !== null) {
            $this->VirtualTaskId = $param["VirtualTaskId"];
        }
    }
}
