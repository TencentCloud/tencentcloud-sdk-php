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
 * DescribeDsParentFolderTree请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getFolderId() 获取文件夹ID
 * @method void setFolderId(string $FolderId) 设置文件夹ID
 * @method string getWorkflowId() 获取工作流ID
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method string getDisplayType() 获取任务展示形式, 示例取值
-    classification:分类展示
-    catalog:目录展示
 * @method void setDisplayType(string $DisplayType) 设置任务展示形式, 示例取值
-    classification:分类展示
-    catalog:目录展示
 * @method boolean getNewFolderTreeMode() 获取是否新模式展示目录树
 * @method void setNewFolderTreeMode(boolean $NewFolderTreeMode) 设置是否新模式展示目录树
 */
class DescribeDsParentFolderTreeRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 文件夹ID
     */
    public $FolderId;

    /**
     * @var string 工作流ID
     */
    public $WorkflowId;

    /**
     * @var string 任务id
     */
    public $TaskId;

    /**
     * @var string 任务展示形式, 示例取值
-    classification:分类展示
-    catalog:目录展示
     */
    public $DisplayType;

    /**
     * @var boolean 是否新模式展示目录树
     */
    public $NewFolderTreeMode;

    /**
     * @param string $ProjectId 项目id
     * @param string $FolderId 文件夹ID
     * @param string $WorkflowId 工作流ID
     * @param string $TaskId 任务id
     * @param string $DisplayType 任务展示形式, 示例取值
-    classification:分类展示
-    catalog:目录展示
     * @param boolean $NewFolderTreeMode 是否新模式展示目录树
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

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("DisplayType",$param) and $param["DisplayType"] !== null) {
            $this->DisplayType = $param["DisplayType"];
        }

        if (array_key_exists("NewFolderTreeMode",$param) and $param["NewFolderTreeMode"] !== null) {
            $this->NewFolderTreeMode = $param["NewFolderTreeMode"];
        }
    }
}
