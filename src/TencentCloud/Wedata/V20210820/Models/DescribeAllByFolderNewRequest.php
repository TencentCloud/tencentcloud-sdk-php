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
 * DescribeAllByFolderNew请求参数结构体
 *
 * @method FolderOpsDto getFolder() 获取文件夹属性
 * @method void setFolder(FolderOpsDto $Folder) 设置文件夹属性
 * @method array getWorkflows() 获取工作流列表
 * @method void setWorkflows(array $Workflows) 设置工作流列表
 * @method string getTargetFolderId() 获取目标文件id
 * @method void setTargetFolderId(string $TargetFolderId) 设置目标文件id
 * @method string getKeyWords() 获取关键字
 * @method void setKeyWords(string $KeyWords) 设置关键字
 * @method string getParentsFolderId() 获取父文件id
 * @method void setParentsFolderId(string $ParentsFolderId) 设置父文件id
 * @method string getIsAddWorkflow() 获取拉取文件夹列表
 * @method void setIsAddWorkflow(string $IsAddWorkflow) 设置拉取文件夹列表
 * @method array getTaskStates() 获取任务状态
 * @method void setTaskStates(array $TaskStates) 设置任务状态
 * @method string getFindType() 获取搜索类型
 * @method void setFindType(string $FindType) 设置搜索类型
 * @method string getOptType() 获取访问类型
 * @method void setOptType(string $OptType) 设置访问类型
 * @method string getOperatorName() 获取操作者名称
 * @method void setOperatorName(string $OperatorName) 设置操作者名称
 * @method string getOperatorId() 获取操作者id
 * @method void setOperatorId(string $OperatorId) 设置操作者id
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getProjectIdent() 获取项目标志
 * @method void setProjectIdent(string $ProjectIdent) 设置项目标志
 * @method string getProjectName() 获取项目名称
 * @method void setProjectName(string $ProjectName) 设置项目名称
 * @method integer getPageIndex() 获取索引页码
 * @method void setPageIndex(integer $PageIndex) 设置索引页码
 * @method integer getPageSize() 获取页面大小
 * @method void setPageSize(integer $PageSize) 设置页面大小
 * @method integer getCount() 获取数据总数
 * @method void setCount(integer $Count) 设置数据总数
 * @method ProjectBaseInfoOpsRequest getRequestBaseInfo() 获取基础请求信息
 * @method void setRequestBaseInfo(ProjectBaseInfoOpsRequest $RequestBaseInfo) 设置基础请求信息
 * @method boolean getIsCount() 获取是否计算总数
 * @method void setIsCount(boolean $IsCount) 设置是否计算总数
 */
class DescribeAllByFolderNewRequest extends AbstractModel
{
    /**
     * @var FolderOpsDto 文件夹属性
     */
    public $Folder;

    /**
     * @var array 工作流列表
     */
    public $Workflows;

    /**
     * @var string 目标文件id
     */
    public $TargetFolderId;

    /**
     * @var string 关键字
     */
    public $KeyWords;

    /**
     * @var string 父文件id
     */
    public $ParentsFolderId;

    /**
     * @var string 拉取文件夹列表
     */
    public $IsAddWorkflow;

    /**
     * @var array 任务状态
     */
    public $TaskStates;

    /**
     * @var string 搜索类型
     */
    public $FindType;

    /**
     * @var string 访问类型
     */
    public $OptType;

    /**
     * @var string 操作者名称
     */
    public $OperatorName;

    /**
     * @var string 操作者id
     */
    public $OperatorId;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 项目标志
     */
    public $ProjectIdent;

    /**
     * @var string 项目名称
     */
    public $ProjectName;

    /**
     * @var integer 索引页码
     */
    public $PageIndex;

    /**
     * @var integer 页面大小
     */
    public $PageSize;

    /**
     * @var integer 数据总数
     */
    public $Count;

    /**
     * @var ProjectBaseInfoOpsRequest 基础请求信息
     */
    public $RequestBaseInfo;

    /**
     * @var boolean 是否计算总数
     */
    public $IsCount;

    /**
     * @param FolderOpsDto $Folder 文件夹属性
     * @param array $Workflows 工作流列表
     * @param string $TargetFolderId 目标文件id
     * @param string $KeyWords 关键字
     * @param string $ParentsFolderId 父文件id
     * @param string $IsAddWorkflow 拉取文件夹列表
     * @param array $TaskStates 任务状态
     * @param string $FindType 搜索类型
     * @param string $OptType 访问类型
     * @param string $OperatorName 操作者名称
     * @param string $OperatorId 操作者id
     * @param string $ProjectId 项目id
     * @param string $ProjectIdent 项目标志
     * @param string $ProjectName 项目名称
     * @param integer $PageIndex 索引页码
     * @param integer $PageSize 页面大小
     * @param integer $Count 数据总数
     * @param ProjectBaseInfoOpsRequest $RequestBaseInfo 基础请求信息
     * @param boolean $IsCount 是否计算总数
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
        if (array_key_exists("Folder",$param) and $param["Folder"] !== null) {
            $this->Folder = new FolderOpsDto();
            $this->Folder->deserialize($param["Folder"]);
        }

        if (array_key_exists("Workflows",$param) and $param["Workflows"] !== null) {
            $this->Workflows = [];
            foreach ($param["Workflows"] as $key => $value){
                $obj = new WorkflowCanvasOpsDto();
                $obj->deserialize($value);
                array_push($this->Workflows, $obj);
            }
        }

        if (array_key_exists("TargetFolderId",$param) and $param["TargetFolderId"] !== null) {
            $this->TargetFolderId = $param["TargetFolderId"];
        }

        if (array_key_exists("KeyWords",$param) and $param["KeyWords"] !== null) {
            $this->KeyWords = $param["KeyWords"];
        }

        if (array_key_exists("ParentsFolderId",$param) and $param["ParentsFolderId"] !== null) {
            $this->ParentsFolderId = $param["ParentsFolderId"];
        }

        if (array_key_exists("IsAddWorkflow",$param) and $param["IsAddWorkflow"] !== null) {
            $this->IsAddWorkflow = $param["IsAddWorkflow"];
        }

        if (array_key_exists("TaskStates",$param) and $param["TaskStates"] !== null) {
            $this->TaskStates = $param["TaskStates"];
        }

        if (array_key_exists("FindType",$param) and $param["FindType"] !== null) {
            $this->FindType = $param["FindType"];
        }

        if (array_key_exists("OptType",$param) and $param["OptType"] !== null) {
            $this->OptType = $param["OptType"];
        }

        if (array_key_exists("OperatorName",$param) and $param["OperatorName"] !== null) {
            $this->OperatorName = $param["OperatorName"];
        }

        if (array_key_exists("OperatorId",$param) and $param["OperatorId"] !== null) {
            $this->OperatorId = $param["OperatorId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectIdent",$param) and $param["ProjectIdent"] !== null) {
            $this->ProjectIdent = $param["ProjectIdent"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            $this->PageIndex = $param["PageIndex"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("RequestBaseInfo",$param) and $param["RequestBaseInfo"] !== null) {
            $this->RequestBaseInfo = new ProjectBaseInfoOpsRequest();
            $this->RequestBaseInfo->deserialize($param["RequestBaseInfo"]);
        }

        if (array_key_exists("IsCount",$param) and $param["IsCount"] !== null) {
            $this->IsCount = $param["IsCount"];
        }
    }
}
