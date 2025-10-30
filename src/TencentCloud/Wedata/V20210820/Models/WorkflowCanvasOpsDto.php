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
 * 工作流画布详情
 *
 * @method string getWorkflowId() 获取工作流id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置工作流id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowDesc() 获取工作流详情描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowDesc(string $WorkflowDesc) 设置工作流详情描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowName() 获取工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderId() 获取所属文件夹id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderId(string $FolderId) 设置所属文件夹id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFolderIds() 获取所属文件夹ids
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderIds(array $FolderIds) 设置所属文件夹ids
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTasks() 获取任务列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTasks(array $Tasks) 设置任务列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLinks() 获取任务依赖边列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLinks(array $Links) 设置任务依赖边列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserGroupId() 获取工作流所属用户分组id,若有多个分号隔开: a;b;c
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserGroupId(string $UserGroupId) 设置工作流所属用户分组id,若有多个分号隔开: a;b;c
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserGroupName() 获取工作流所属用户分组名称,若有多个分号隔开: a;b;c
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserGroupName(string $UserGroupName) 设置工作流所属用户分组名称,若有多个分号隔开: a;b;c
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectIdent() 获取项目标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectIdent(string $ProjectIdent) 设置项目标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwner() 获取责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwner(string $Owner) 设置责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerId() 获取责任人UserId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerId(string $OwnerId) 设置责任人UserId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowType() 获取工作流类型，周期cycle，手动manual
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowType(string $WorkflowType) 设置工作流类型，周期cycle，手动manual
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkflowCanvasOpsDto extends AbstractModel
{
    /**
     * @var string 工作流id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string 工作流详情描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowDesc;

    /**
     * @var string 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var string 所属文件夹id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderId;

    /**
     * @var array 所属文件夹ids
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderIds;

    /**
     * @var array 任务列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tasks;

    /**
     * @var array 任务依赖边列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Links;

    /**
     * @var string 工作流所属用户分组id,若有多个分号隔开: a;b;c
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserGroupId;

    /**
     * @var string 工作流所属用户分组名称,若有多个分号隔开: a;b;c
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserGroupName;

    /**
     * @var string 项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 项目标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectIdent;

    /**
     * @var string 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var string 责任人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Owner;

    /**
     * @var string 责任人UserId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerId;

    /**
     * @var string 工作流类型，周期cycle，手动manual
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowType;

    /**
     * @param string $WorkflowId 工作流id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowDesc 工作流详情描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderId 所属文件夹id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FolderIds 所属文件夹ids
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tasks 任务列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Links 任务依赖边列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserGroupId 工作流所属用户分组id,若有多个分号隔开: a;b;c
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserGroupName 工作流所属用户分组名称,若有多个分号隔开: a;b;c
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectIdent 项目标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Owner 责任人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerId 责任人UserId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowType 工作流类型，周期cycle，手动manual
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowDesc",$param) and $param["WorkflowDesc"] !== null) {
            $this->WorkflowDesc = $param["WorkflowDesc"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("FolderIds",$param) and $param["FolderIds"] !== null) {
            $this->FolderIds = $param["FolderIds"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new TaskOpsDto();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("Links",$param) and $param["Links"] !== null) {
            $this->Links = [];
            foreach ($param["Links"] as $key => $value){
                $obj = new LinkOpsDto();
                $obj->deserialize($value);
                array_push($this->Links, $obj);
            }
        }

        if (array_key_exists("UserGroupId",$param) and $param["UserGroupId"] !== null) {
            $this->UserGroupId = $param["UserGroupId"];
        }

        if (array_key_exists("UserGroupName",$param) and $param["UserGroupName"] !== null) {
            $this->UserGroupName = $param["UserGroupName"];
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

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("OwnerId",$param) and $param["OwnerId"] !== null) {
            $this->OwnerId = $param["OwnerId"];
        }

        if (array_key_exists("WorkflowType",$param) and $param["WorkflowType"] !== null) {
            $this->WorkflowType = $param["WorkflowType"];
        }
    }
}
