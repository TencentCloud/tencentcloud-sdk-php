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
 * CreateTaskFolder请求参数结构体
 *
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method string getFolderName() 获取文件夹名称
 * @method void setFolderName(string $FolderName) 设置文件夹名称
 * @method string getWorkflowId() 获取工作流ID
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
 * @method string getParentFolderId() 获取父文件夹ID
 * @method void setParentFolderId(string $ParentFolderId) 设置父文件夹ID
 * @method string getTaskNodeType() 获取目录分类，该值必传，枚举值如下：
ETL：数据集成
EMR：EMR
TBDS：TBDS
DLC：DLC
TDSQL：TDSQL
TCHOUSE：TCHOUSE
GENERAL：通用
TI_ONE：TI-ONE机器学习
ACROSS_WORKFLOWS：跨工作流
 * @method void setTaskNodeType(string $TaskNodeType) 设置目录分类，该值必传，枚举值如下：
ETL：数据集成
EMR：EMR
TBDS：TBDS
DLC：DLC
TDSQL：TDSQL
TCHOUSE：TCHOUSE
GENERAL：通用
TI_ONE：TI-ONE机器学习
ACROSS_WORKFLOWS：跨工作流
 */
class CreateTaskFolderRequest extends AbstractModel
{
    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var string 文件夹名称
     */
    public $FolderName;

    /**
     * @var string 工作流ID
     */
    public $WorkflowId;

    /**
     * @var string 父文件夹ID
     */
    public $ParentFolderId;

    /**
     * @var string 目录分类，该值必传，枚举值如下：
ETL：数据集成
EMR：EMR
TBDS：TBDS
DLC：DLC
TDSQL：TDSQL
TCHOUSE：TCHOUSE
GENERAL：通用
TI_ONE：TI-ONE机器学习
ACROSS_WORKFLOWS：跨工作流
     */
    public $TaskNodeType;

    /**
     * @param string $ProjectId 项目Id
     * @param string $FolderName 文件夹名称
     * @param string $WorkflowId 工作流ID
     * @param string $ParentFolderId 父文件夹ID
     * @param string $TaskNodeType 目录分类，该值必传，枚举值如下：
ETL：数据集成
EMR：EMR
TBDS：TBDS
DLC：DLC
TDSQL：TDSQL
TCHOUSE：TCHOUSE
GENERAL：通用
TI_ONE：TI-ONE机器学习
ACROSS_WORKFLOWS：跨工作流
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

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("ParentFolderId",$param) and $param["ParentFolderId"] !== null) {
            $this->ParentFolderId = $param["ParentFolderId"];
        }

        if (array_key_exists("TaskNodeType",$param) and $param["TaskNodeType"] !== null) {
            $this->TaskNodeType = $param["TaskNodeType"];
        }
    }
}
