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
 * @method boolean getFirstLevelPull() 获取是否一级拉取 true 是 
false 否
 * @method void setFirstLevelPull(boolean $FirstLevelPull) 设置是否一级拉取 true 是 
false 否
 * @method string getFolderId() 获取文件夹ID
 * @method void setFolderId(string $FolderId) 设置文件夹ID
 * @method string getWorkflowId() 获取工作流ID
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
 * @method string getKeyword() 获取关键字搜索
 * @method void setKeyword(string $Keyword) 设置关键字搜索
 * @method boolean getIncludeWorkflow() 获取是否包含工作流 true 是 
false 否
 * @method void setIncludeWorkflow(boolean $IncludeWorkflow) 设置是否包含工作流 true 是 
false 否
 * @method boolean getIncludeTask() 获取是否包含任务 true 是 
false 否
 * @method void setIncludeTask(boolean $IncludeTask) 设置是否包含任务 true 是 
false 否
 * @method boolean getIncludeVirtualTask() 获取是否包含虚拟任务，当 IncludeTask 为 true 的时候，该参数才生效，默认为 true
 * @method void setIncludeVirtualTask(boolean $IncludeVirtualTask) 设置是否包含虚拟任务，当 IncludeTask 为 true 的时候，该参数才生效，默认为 true
 * @method string getTaskFolderId() 获取任务目录id
 * @method void setTaskFolderId(string $TaskFolderId) 设置任务目录id
 * @method string getDisplayType() 获取classification.分类展示  catalog.目录展示
 * @method void setDisplayType(string $DisplayType) 设置classification.分类展示  catalog.目录展示
 * @method boolean getIncludeTaskFolder() 获取是否包含任务目录 true 是 
false 否
 * @method void setIncludeTaskFolder(boolean $IncludeTaskFolder) 设置是否包含任务目录 true 是 
false 否
 * @method boolean getNewFolderTreeMode() 获取是否使用最新模式展示目录树
 * @method void setNewFolderTreeMode(boolean $NewFolderTreeMode) 设置是否使用最新模式展示目录树
 * @method string getTaskNodeId() 获取节点分类ID
 * @method void setTaskNodeId(string $TaskNodeId) 设置节点分类ID
 * @method string getWorkflowType() 获取工作流类型, 使用场景: 任务复制,选择工作流. 取值范围

- cycle    周期工作流
- manual    手动工作流
 * @method void setWorkflowType(string $WorkflowType) 设置工作流类型, 使用场景: 任务复制,选择工作流. 取值范围

- cycle    周期工作流
- manual    手动工作流
 * @method array getTaskTypeIdList() 获取任务类型id列表
 * @method void setTaskTypeIdList(array $TaskTypeIdList) 设置任务类型id列表
 * @method array getInChargeIdList() 获取责任人id列表
 * @method void setInChargeIdList(array $InChargeIdList) 设置责任人id列表
 * @method boolean getOnlyMe() 获取自身责任人
 * @method void setOnlyMe(boolean $OnlyMe) 设置自身责任人
 * @method boolean getIncludeCodeTemplate() 获取是否包含代码模版
 * @method void setIncludeCodeTemplate(boolean $IncludeCodeTemplate) 设置是否包含代码模版
 * @method string getFolderForm() 获取编排空间 或代码模版 orchestrationSpace 编排空间 template模版管理
 * @method void setFolderForm(string $FolderForm) 设置编排空间 或代码模版 orchestrationSpace 编排空间 template模版管理
 */
class DescribeDsFolderTreeRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var boolean 是否一级拉取 true 是 
false 否
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
     * @var boolean 是否包含工作流 true 是 
false 否
     */
    public $IncludeWorkflow;

    /**
     * @var boolean 是否包含任务 true 是 
false 否
     */
    public $IncludeTask;

    /**
     * @var boolean 是否包含虚拟任务，当 IncludeTask 为 true 的时候，该参数才生效，默认为 true
     */
    public $IncludeVirtualTask;

    /**
     * @var string 任务目录id
     */
    public $TaskFolderId;

    /**
     * @var string classification.分类展示  catalog.目录展示
     */
    public $DisplayType;

    /**
     * @var boolean 是否包含任务目录 true 是 
false 否
     */
    public $IncludeTaskFolder;

    /**
     * @var boolean 是否使用最新模式展示目录树
     */
    public $NewFolderTreeMode;

    /**
     * @var string 节点分类ID
     */
    public $TaskNodeId;

    /**
     * @var string 工作流类型, 使用场景: 任务复制,选择工作流. 取值范围

- cycle    周期工作流
- manual    手动工作流
     */
    public $WorkflowType;

    /**
     * @var array 任务类型id列表
     */
    public $TaskTypeIdList;

    /**
     * @var array 责任人id列表
     */
    public $InChargeIdList;

    /**
     * @var boolean 自身责任人
     */
    public $OnlyMe;

    /**
     * @var boolean 是否包含代码模版
     */
    public $IncludeCodeTemplate;

    /**
     * @var string 编排空间 或代码模版 orchestrationSpace 编排空间 template模版管理
     */
    public $FolderForm;

    /**
     * @param string $ProjectId 项目id
     * @param boolean $FirstLevelPull 是否一级拉取 true 是 
false 否
     * @param string $FolderId 文件夹ID
     * @param string $WorkflowId 工作流ID
     * @param string $Keyword 关键字搜索
     * @param boolean $IncludeWorkflow 是否包含工作流 true 是 
false 否
     * @param boolean $IncludeTask 是否包含任务 true 是 
false 否
     * @param boolean $IncludeVirtualTask 是否包含虚拟任务，当 IncludeTask 为 true 的时候，该参数才生效，默认为 true
     * @param string $TaskFolderId 任务目录id
     * @param string $DisplayType classification.分类展示  catalog.目录展示
     * @param boolean $IncludeTaskFolder 是否包含任务目录 true 是 
false 否
     * @param boolean $NewFolderTreeMode 是否使用最新模式展示目录树
     * @param string $TaskNodeId 节点分类ID
     * @param string $WorkflowType 工作流类型, 使用场景: 任务复制,选择工作流. 取值范围

- cycle    周期工作流
- manual    手动工作流
     * @param array $TaskTypeIdList 任务类型id列表
     * @param array $InChargeIdList 责任人id列表
     * @param boolean $OnlyMe 自身责任人
     * @param boolean $IncludeCodeTemplate 是否包含代码模版
     * @param string $FolderForm 编排空间 或代码模版 orchestrationSpace 编排空间 template模版管理
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

        if (array_key_exists("TaskFolderId",$param) and $param["TaskFolderId"] !== null) {
            $this->TaskFolderId = $param["TaskFolderId"];
        }

        if (array_key_exists("DisplayType",$param) and $param["DisplayType"] !== null) {
            $this->DisplayType = $param["DisplayType"];
        }

        if (array_key_exists("IncludeTaskFolder",$param) and $param["IncludeTaskFolder"] !== null) {
            $this->IncludeTaskFolder = $param["IncludeTaskFolder"];
        }

        if (array_key_exists("NewFolderTreeMode",$param) and $param["NewFolderTreeMode"] !== null) {
            $this->NewFolderTreeMode = $param["NewFolderTreeMode"];
        }

        if (array_key_exists("TaskNodeId",$param) and $param["TaskNodeId"] !== null) {
            $this->TaskNodeId = $param["TaskNodeId"];
        }

        if (array_key_exists("WorkflowType",$param) and $param["WorkflowType"] !== null) {
            $this->WorkflowType = $param["WorkflowType"];
        }

        if (array_key_exists("TaskTypeIdList",$param) and $param["TaskTypeIdList"] !== null) {
            $this->TaskTypeIdList = $param["TaskTypeIdList"];
        }

        if (array_key_exists("InChargeIdList",$param) and $param["InChargeIdList"] !== null) {
            $this->InChargeIdList = $param["InChargeIdList"];
        }

        if (array_key_exists("OnlyMe",$param) and $param["OnlyMe"] !== null) {
            $this->OnlyMe = $param["OnlyMe"];
        }

        if (array_key_exists("IncludeCodeTemplate",$param) and $param["IncludeCodeTemplate"] !== null) {
            $this->IncludeCodeTemplate = $param["IncludeCodeTemplate"];
        }

        if (array_key_exists("FolderForm",$param) and $param["FolderForm"] !== null) {
            $this->FolderForm = $param["FolderForm"];
        }
    }
}
