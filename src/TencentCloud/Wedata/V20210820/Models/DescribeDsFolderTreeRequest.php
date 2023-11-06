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
 * DescribeDsFolderTree请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method boolean getFirstLevelPull() 获取是否一级拉取
 * @method void setFirstLevelPull(boolean $FirstLevelPull) 设置是否一级拉取
 * @method string getFolderId() 获取文件夹ID
 * @method void setFolderId(string $FolderId) 设置文件夹ID
 * @method string getWorkflowId() 获取工作流ID
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
 * @method string getKeyword() 获取关键字搜索
 * @method void setKeyword(string $Keyword) 设置关键字搜索
 * @method boolean getIncludeWorkflow() 获取是否包含工作流
 * @method void setIncludeWorkflow(boolean $IncludeWorkflow) 设置是否包含工作流
 * @method boolean getIncludeTask() 获取是否包含任务
 * @method void setIncludeTask(boolean $IncludeTask) 设置是否包含任务
 * @method boolean getIncludeVirtualTask() 获取是否包含虚拟任务，当 IncludeTask 为 true 的时候，该参数才生效，默认为 true
 * @method void setIncludeVirtualTask(boolean $IncludeVirtualTask) 设置是否包含虚拟任务，当 IncludeTask 为 true 的时候，该参数才生效，默认为 true
 */
class DescribeDsFolderTreeRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var boolean 是否一级拉取
     */
    public $FirstLevelPull;

    /**
     * @var string 文件夹ID
     */
    public $FolderId;

    /**
     * @var string 工作流ID
     */
    public $WorkflowId;

    /**
     * @var string 关键字搜索
     */
    public $Keyword;

    /**
     * @var boolean 是否包含工作流
     */
    public $IncludeWorkflow;

    /**
     * @var boolean 是否包含任务
     */
    public $IncludeTask;

    /**
     * @var boolean 是否包含虚拟任务，当 IncludeTask 为 true 的时候，该参数才生效，默认为 true
     */
    public $IncludeVirtualTask;

    /**
     * @param string $ProjectId 项目id
     * @param boolean $FirstLevelPull 是否一级拉取
     * @param string $FolderId 文件夹ID
     * @param string $WorkflowId 工作流ID
     * @param string $Keyword 关键字搜索
     * @param boolean $IncludeWorkflow 是否包含工作流
     * @param boolean $IncludeTask 是否包含任务
     * @param boolean $IncludeVirtualTask 是否包含虚拟任务，当 IncludeTask 为 true 的时候，该参数才生效，默认为 true
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

        if (array_key_exists("FirstLevelPull",$param) and $param["FirstLevelPull"] !== null) {
            $this->FirstLevelPull = $param["FirstLevelPull"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("IncludeWorkflow",$param) and $param["IncludeWorkflow"] !== null) {
            $this->IncludeWorkflow = $param["IncludeWorkflow"];
        }

        if (array_key_exists("IncludeTask",$param) and $param["IncludeTask"] !== null) {
            $this->IncludeTask = $param["IncludeTask"];
        }

        if (array_key_exists("IncludeVirtualTask",$param) and $param["IncludeVirtualTask"] !== null) {
            $this->IncludeVirtualTask = $param["IncludeVirtualTask"];
        }
    }
}
