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
 * @method string getWorkflowId() 获取<p>工作流id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置<p>工作流id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowDesc() 获取<p>工作流详情描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowDesc(string $WorkflowDesc) 设置<p>工作流详情描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowName() 获取<p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置<p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderId() 获取<p>所属文件夹id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderId(string $FolderId) 设置<p>所属文件夹id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFolderIds() 获取<p>所属文件夹ids</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderIds(array $FolderIds) 设置<p>所属文件夹ids</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTasks() 获取<p>任务列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTasks(array $Tasks) 设置<p>任务列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLinks() 获取<p>任务依赖边列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLinks(array $Links) 设置<p>任务依赖边列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserGroupId() 获取<p>工作流所属用户分组id,若有多个分号隔开: a;b;c</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserGroupId(string $UserGroupId) 设置<p>工作流所属用户分组id,若有多个分号隔开: a;b;c</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserGroupName() 获取<p>工作流所属用户分组名称,若有多个分号隔开: a;b;c</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserGroupName(string $UserGroupName) 设置<p>工作流所属用户分组名称,若有多个分号隔开: a;b;c</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取<p>项目id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置<p>项目id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectIdent() 获取<p>项目标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectIdent(string $ProjectIdent) 设置<p>项目标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取<p>项目名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置<p>项目名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwner() 获取<p>责任人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwner(string $Owner) 设置<p>责任人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerId() 获取<p>责任人UserId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerId(string $OwnerId) 设置<p>责任人UserId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowType() 获取<p>工作流类型，周期cycle，手动manual</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowType(string $WorkflowType) 设置<p>工作流类型，周期cycle，手动manual</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrivilege() 获取<p>用户对该资源的最高权限</p><p>枚举值：</p><ul><li>NO_PERMISSIONS： 无权限</li><li>CAN_VIEW： 只读权限</li><li>CAN_MANAGE： 管理权限</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivilege(string $Privilege) 设置<p>用户对该资源的最高权限</p><p>枚举值：</p><ul><li>NO_PERMISSIONS： 无权限</li><li>CAN_VIEW： 只读权限</li><li>CAN_MANAGE： 管理权限</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkflowCanvasOpsDto extends AbstractModel
{
    /**
     * @var string <p>工作流id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string <p>工作流详情描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowDesc;

    /**
     * @var string <p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var string <p>所属文件夹id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderId;

    /**
     * @var array <p>所属文件夹ids</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderIds;

    /**
     * @var array <p>任务列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tasks;

    /**
     * @var array <p>任务依赖边列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Links;

    /**
     * @var string <p>工作流所属用户分组id,若有多个分号隔开: a;b;c</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserGroupId;

    /**
     * @var string <p>工作流所属用户分组名称,若有多个分号隔开: a;b;c</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserGroupName;

    /**
     * @var string <p>项目id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string <p>项目标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectIdent;

    /**
     * @var string <p>项目名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var string <p>责任人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Owner;

    /**
     * @var string <p>责任人UserId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerId;

    /**
     * @var string <p>工作流类型，周期cycle，手动manual</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowType;

    /**
     * @var string <p>用户对该资源的最高权限</p><p>枚举值：</p><ul><li>NO_PERMISSIONS： 无权限</li><li>CAN_VIEW： 只读权限</li><li>CAN_MANAGE： 管理权限</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Privilege;

    /**
     * @param string $WorkflowId <p>工作流id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowDesc <p>工作流详情描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName <p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderId <p>所属文件夹id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FolderIds <p>所属文件夹ids</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tasks <p>任务列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Links <p>任务依赖边列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserGroupId <p>工作流所属用户分组id,若有多个分号隔开: a;b;c</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserGroupName <p>工作流所属用户分组名称,若有多个分号隔开: a;b;c</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId <p>项目id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectIdent <p>项目标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName <p>项目名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Owner <p>责任人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerId <p>责任人UserId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowType <p>工作流类型，周期cycle，手动manual</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Privilege <p>用户对该资源的最高权限</p><p>枚举值：</p><ul><li>NO_PERMISSIONS： 无权限</li><li>CAN_VIEW： 只读权限</li><li>CAN_MANAGE： 管理权限</li></ul>
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

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = $param["Privilege"];
        }
    }
}
