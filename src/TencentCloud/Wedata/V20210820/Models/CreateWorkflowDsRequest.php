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
 * CreateWorkflowDs请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getWorkflowName() 获取工作流名称
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
 * @method string getFolderId() 获取文件夹ID
 * @method void setFolderId(string $FolderId) 设置文件夹ID
 * @method string getWorkflowDesc() 获取工作流描述
 * @method void setWorkflowDesc(string $WorkflowDesc) 设置工作流描述
 * @method string getWorkflowType() 获取工作流类型,取值示例

- cycle 周期工作流
- manual 手动工作流

 * @method void setWorkflowType(string $WorkflowType) 设置工作流类型,取值示例

- cycle 周期工作流
- manual 手动工作流
 */
class CreateWorkflowDsRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 工作流名称
     */
    public $WorkflowName;

    /**
     * @var string 文件夹ID
     */
    public $FolderId;

    /**
     * @var string 工作流描述
     */
    public $WorkflowDesc;

    /**
     * @var string 工作流类型,取值示例

- cycle 周期工作流
- manual 手动工作流

     */
    public $WorkflowType;

    /**
     * @param string $ProjectId 项目ID
     * @param string $WorkflowName 工作流名称
     * @param string $FolderId 文件夹ID
     * @param string $WorkflowDesc 工作流描述
     * @param string $WorkflowType 工作流类型,取值示例

- cycle 周期工作流
- manual 手动工作流
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

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("WorkflowDesc",$param) and $param["WorkflowDesc"] !== null) {
            $this->WorkflowDesc = $param["WorkflowDesc"];
        }

        if (array_key_exists("WorkflowType",$param) and $param["WorkflowType"] !== null) {
            $this->WorkflowType = $param["WorkflowType"];
        }
    }
}
