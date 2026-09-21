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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作流列表项
 *
 * @method string getWorkflowName() 获取<p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置<p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowId() 获取<p>工作流ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置<p>工作流ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateUserUin() 获取<p>创建人UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUserUin(string $CreateUserUin) 设置<p>创建人UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUserName() 获取<p>工作流负责人用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUserName(string $OwnerUserName) 设置<p>工作流负责人用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUserUin() 获取<p>工作流负责人UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUserUin(string $OwnerUserUin) 设置<p>工作流负责人UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerDisplayName() 获取<p>工作流负责人展示名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerDisplayName(string $OwnerDisplayName) 设置<p>工作流负责人展示名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>更新时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabelList() 获取<p>标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelList(array $LabelList) 设置<p>标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTrigger() 获取<p>工作流调度配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrigger(array $Trigger) 设置<p>工作流调度配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunUserUin() 获取<p>工作流运行人UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunUserUin(string $RunUserUin) 设置<p>工作流运行人UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunUserName() 获取<p>工作流运行人用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunUserName(string $RunUserName) 设置<p>工作流运行人用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaskList() 获取<p>工作流任务节点列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskList(array $TaskList) 设置<p>工作流任务节点列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWorkflowRunList() 获取<p>工作流运行情况列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowRunList(array $WorkflowRunList) 设置<p>工作流运行情况列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResourceGroupInfoList() 获取<p>资源组信息列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupInfoList(array $ResourceGroupInfoList) 设置<p>资源组信息列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPermission() 获取<p>授权权限类型<br>PERMISSION_TYPE_UNSPECIFIED：未指定权限<br>MANAGE : 管理权限：包含所有操作权限<br>RUN : 运行权限：可执行实体<br>VIEW : 查看权限：可查看实体内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPermission(string $Permission) 设置<p>授权权限类型<br>PERMISSION_TYPE_UNSPECIFIED：未指定权限<br>MANAGE : 管理权限：包含所有操作权限<br>RUN : 运行权限：可执行实体<br>VIEW : 查看权限：可查看实体内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBundleId() 获取<p>工作流绑定的 Bundle 唯一标识，未绑定时为空</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBundleId(string $BundleId) 设置<p>工作流绑定的 Bundle 唯一标识，未绑定时为空</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBundleInfo() 获取<p>Bundle信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBundleInfo(string $BundleInfo) 设置<p>Bundle信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGitConfigId() 获取<p>Git配置ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGitConfigId(string $GitConfigId) 设置<p>Git配置ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGitBranch() 获取<p>Git分支信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGitBranch(string $GitBranch) 设置<p>Git分支信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkflowBrief extends AbstractModel
{
    /**
     * @var string <p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var string <p>工作流ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string <p>创建人UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUserUin;

    /**
     * @var string <p>工作流负责人用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUserName;

    /**
     * @var string <p>工作流负责人UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUserUin;

    /**
     * @var string <p>工作流负责人展示名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerDisplayName;

    /**
     * @var string <p>创建时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var array <p>标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelList;

    /**
     * @var array <p>工作流调度配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Trigger;

    /**
     * @var string <p>工作流运行人UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunUserUin;

    /**
     * @var string <p>工作流运行人用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunUserName;

    /**
     * @var array <p>工作流任务节点列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskList;

    /**
     * @var array <p>工作流运行情况列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowRunList;

    /**
     * @var array <p>资源组信息列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupInfoList;

    /**
     * @var string <p>授权权限类型<br>PERMISSION_TYPE_UNSPECIFIED：未指定权限<br>MANAGE : 管理权限：包含所有操作权限<br>RUN : 运行权限：可执行实体<br>VIEW : 查看权限：可查看实体内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Permission;

    /**
     * @var string <p>工作流绑定的 Bundle 唯一标识，未绑定时为空</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BundleId;

    /**
     * @var string <p>Bundle信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BundleInfo;

    /**
     * @var string <p>Git配置ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GitConfigId;

    /**
     * @var string <p>Git分支信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GitBranch;

    /**
     * @param string $WorkflowName <p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowId <p>工作流ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUserUin <p>创建人UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUserName <p>工作流负责人用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUserUin <p>工作流负责人UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerDisplayName <p>工作流负责人展示名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>更新时间，单位：毫秒时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LabelList <p>标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Trigger <p>工作流调度配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunUserUin <p>工作流运行人UIN</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunUserName <p>工作流运行人用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TaskList <p>工作流任务节点列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $WorkflowRunList <p>工作流运行情况列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResourceGroupInfoList <p>资源组信息列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Permission <p>授权权限类型<br>PERMISSION_TYPE_UNSPECIFIED：未指定权限<br>MANAGE : 管理权限：包含所有操作权限<br>RUN : 运行权限：可执行实体<br>VIEW : 查看权限：可查看实体内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BundleId <p>工作流绑定的 Bundle 唯一标识，未绑定时为空</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BundleInfo <p>Bundle信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GitConfigId <p>Git配置ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GitBranch <p>Git分支信息</p>
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
        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("OwnerUserName",$param) and $param["OwnerUserName"] !== null) {
            $this->OwnerUserName = $param["OwnerUserName"];
        }

        if (array_key_exists("OwnerUserUin",$param) and $param["OwnerUserUin"] !== null) {
            $this->OwnerUserUin = $param["OwnerUserUin"];
        }

        if (array_key_exists("OwnerDisplayName",$param) and $param["OwnerDisplayName"] !== null) {
            $this->OwnerDisplayName = $param["OwnerDisplayName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("LabelList",$param) and $param["LabelList"] !== null) {
            $this->LabelList = [];
            foreach ($param["LabelList"] as $key => $value){
                $obj = new LabelBrief();
                $obj->deserialize($value);
                array_push($this->LabelList, $obj);
            }
        }

        if (array_key_exists("Trigger",$param) and $param["Trigger"] !== null) {
            $this->Trigger = [];
            foreach ($param["Trigger"] as $key => $value){
                $obj = new WorkflowTriggerConfiguration();
                $obj->deserialize($value);
                array_push($this->Trigger, $obj);
            }
        }

        if (array_key_exists("RunUserUin",$param) and $param["RunUserUin"] !== null) {
            $this->RunUserUin = $param["RunUserUin"];
        }

        if (array_key_exists("RunUserName",$param) and $param["RunUserName"] !== null) {
            $this->RunUserName = $param["RunUserName"];
        }

        if (array_key_exists("TaskList",$param) and $param["TaskList"] !== null) {
            $this->TaskList = [];
            foreach ($param["TaskList"] as $key => $value){
                $obj = new WorkflowTaskNodeBrief();
                $obj->deserialize($value);
                array_push($this->TaskList, $obj);
            }
        }

        if (array_key_exists("WorkflowRunList",$param) and $param["WorkflowRunList"] !== null) {
            $this->WorkflowRunList = [];
            foreach ($param["WorkflowRunList"] as $key => $value){
                $obj = new WorkflowRunBrief();
                $obj->deserialize($value);
                array_push($this->WorkflowRunList, $obj);
            }
        }

        if (array_key_exists("ResourceGroupInfoList",$param) and $param["ResourceGroupInfoList"] !== null) {
            $this->ResourceGroupInfoList = [];
            foreach ($param["ResourceGroupInfoList"] as $key => $value){
                $obj = new ResourceGroupInfo();
                $obj->deserialize($value);
                array_push($this->ResourceGroupInfoList, $obj);
            }
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("BundleInfo",$param) and $param["BundleInfo"] !== null) {
            $this->BundleInfo = $param["BundleInfo"];
        }

        if (array_key_exists("GitConfigId",$param) and $param["GitConfigId"] !== null) {
            $this->GitConfigId = $param["GitConfigId"];
        }

        if (array_key_exists("GitBranch",$param) and $param["GitBranch"] !== null) {
            $this->GitBranch = $param["GitBranch"];
        }
    }
}
