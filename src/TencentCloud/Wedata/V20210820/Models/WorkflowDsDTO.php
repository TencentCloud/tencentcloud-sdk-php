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
 * 工作流信息
 *
 * @method string getWorkflowId() 获取<p>工作流ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowId(string $WorkflowId) 设置<p>工作流ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwner() 获取<p>责任人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwner(string $Owner) 设置<p>责任人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerId() 获取<p>责任人ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerId(string $OwnerId) 设置<p>责任人ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取<p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectIdent() 获取<p>项目标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectIdent(string $ProjectIdent) 设置<p>项目标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取<p>项目名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置<p>项目名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowDesc() 获取<p>工作流描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowDesc(string $WorkflowDesc) 设置<p>工作流描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowName() 获取<p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置<p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderId() 获取<p>文件夹ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderId(string $FolderId) 设置<p>文件夹ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSparkParams() 获取<p>SparkSQL参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSparkParams(string $SparkParams) 设置<p>SparkSQL参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTasks() 获取<p>任务列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTasks(array $Tasks) 设置<p>任务列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLinks() 获取<p>任务链接列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLinks(array $Links) 设置<p>任务链接列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getParams() 获取<p>参数列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParams(array $Params) 设置<p>参数列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowType() 获取<p>工作流类型, 取值示例</p><ul><li>cycle 周期工作流</li><li>manual 手动工作流</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowType(string $WorkflowType) 设置<p>工作流类型, 取值示例</p><ul><li>cycle 周期工作流</li><li>manual 手动工作流</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateUser() 获取<p>最近更新人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateUser(string $UpdateUser) 设置<p>最近更新人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateUserId() 获取<p>最近更新人id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateUserId(string $UpdateUserId) 设置<p>最近更新人id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBundleId() 获取<p>BundleId CI/CD工程生成的bundle唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBundleId(string $BundleId) 设置<p>BundleId CI/CD工程生成的bundle唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBundleInfo() 获取<p>BundleId信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBundleInfo(string $BundleInfo) 设置<p>BundleId信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecuteUserUin() 获取<p>运行账号ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecuteUserUin(string $ExecuteUserUin) 设置<p>运行账号ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecuteUserName() 获取<p>运行账号名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecuteUserName(string $ExecuteUserName) 设置<p>运行账号名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkflowDsDTO extends AbstractModel
{
    /**
     * @var string <p>工作流ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowId;

    /**
     * @var string <p>责任人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Owner;

    /**
     * @var string <p>责任人ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerId;

    /**
     * @var string <p>项目ID</p>
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
     * @var string <p>工作流描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowDesc;

    /**
     * @var string <p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var string <p>文件夹ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderId;

    /**
     * @var string <p>SparkSQL参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SparkParams;

    /**
     * @var array <p>任务列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tasks;

    /**
     * @var array <p>任务链接列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Links;

    /**
     * @var array <p>参数列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Params;

    /**
     * @var string <p>工作流类型, 取值示例</p><ul><li>cycle 周期工作流</li><li>manual 手动工作流</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowType;

    /**
     * @var string <p>最近更新人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateUser;

    /**
     * @var string <p>最近更新人id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateUserId;

    /**
     * @var string <p>BundleId CI/CD工程生成的bundle唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BundleId;

    /**
     * @var string <p>BundleId信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BundleInfo;

    /**
     * @var string <p>运行账号ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecuteUserUin;

    /**
     * @var string <p>运行账号名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecuteUserName;

    /**
     * @param string $WorkflowId <p>工作流ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Owner <p>责任人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerId <p>责任人ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId <p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectIdent <p>项目标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName <p>项目名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowDesc <p>工作流描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName <p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderId <p>文件夹ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SparkParams <p>SparkSQL参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tasks <p>任务列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Links <p>任务链接列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Params <p>参数列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowType <p>工作流类型, 取值示例</p><ul><li>cycle 周期工作流</li><li>manual 手动工作流</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateUser <p>最近更新人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateUserId <p>最近更新人id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BundleId <p>BundleId CI/CD工程生成的bundle唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BundleInfo <p>BundleId信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecuteUserUin <p>运行账号ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecuteUserName <p>运行账号名称</p>
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

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("OwnerId",$param) and $param["OwnerId"] !== null) {
            $this->OwnerId = $param["OwnerId"];
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

        if (array_key_exists("WorkflowDesc",$param) and $param["WorkflowDesc"] !== null) {
            $this->WorkflowDesc = $param["WorkflowDesc"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("SparkParams",$param) and $param["SparkParams"] !== null) {
            $this->SparkParams = $param["SparkParams"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new TaskDsDTO();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("Links",$param) and $param["Links"] !== null) {
            $this->Links = [];
            foreach ($param["Links"] as $key => $value){
                $obj = new TaskLinkDsDTO();
                $obj->deserialize($value);
                array_push($this->Links, $obj);
            }
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = [];
            foreach ($param["Params"] as $key => $value){
                $obj = new ParameterTaskDsDto();
                $obj->deserialize($value);
                array_push($this->Params, $obj);
            }
        }

        if (array_key_exists("WorkflowType",$param) and $param["WorkflowType"] !== null) {
            $this->WorkflowType = $param["WorkflowType"];
        }

        if (array_key_exists("UpdateUser",$param) and $param["UpdateUser"] !== null) {
            $this->UpdateUser = $param["UpdateUser"];
        }

        if (array_key_exists("UpdateUserId",$param) and $param["UpdateUserId"] !== null) {
            $this->UpdateUserId = $param["UpdateUserId"];
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("BundleInfo",$param) and $param["BundleInfo"] !== null) {
            $this->BundleInfo = $param["BundleInfo"];
        }

        if (array_key_exists("ExecuteUserUin",$param) and $param["ExecuteUserUin"] !== null) {
            $this->ExecuteUserUin = $param["ExecuteUserUin"];
        }

        if (array_key_exists("ExecuteUserName",$param) and $param["ExecuteUserName"] !== null) {
            $this->ExecuteUserName = $param["ExecuteUserName"];
        }
    }
}
