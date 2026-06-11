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
 * 工作流
 *
 * @method integer getTaskCount() 获取<p>任务数量count</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskCount(integer $TaskCount) 设置<p>任务数量count</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderName() 获取<p>文件名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderName(string $FolderName) 设置<p>文件名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkFlowId() 获取<p>工作流id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkFlowId(string $WorkFlowId) 设置<p>工作流id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwner() 获取<p>责任人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwner(string $Owner) 设置<p>责任人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerId() 获取<p>责任人userId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerId(string $OwnerId) 设置<p>责任人userId</p>
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
 * @method string getWorkFlowDesc() 获取<p>工作流描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkFlowDesc(string $WorkFlowDesc) 设置<p>工作流描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkFlowName() 获取<p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkFlowName(string $WorkFlowName) 设置<p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFolderId() 获取<p>工作流文件id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderId(string $FolderId) 设置<p>工作流文件id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>工作流状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>工作流状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>工作流创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>工作流创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取<p>最近更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置<p>最近更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyUser() 获取<p>最近更新人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyUser(string $ModifyUser) 设置<p>最近更新人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowType() 获取<p>工作流类型，周期cycle，手动manual</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowType(string $WorkflowType) 设置<p>工作流类型，周期cycle，手动manual</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBundleId() 获取<p>bundle客户端绑定唯一id</p>
 * @method void setBundleId(string $BundleId) 设置<p>bundle客户端绑定唯一id</p>
 * @method string getBundleInfo() 获取<p>bundle客户端扩展信息，json格式</p>
 * @method void setBundleInfo(string $BundleInfo) 设置<p>bundle客户端扩展信息，json格式</p>
 * @method array getNestedBySpTaskIds() 获取<p>引用该手动工作流的嵌套工作流任务ID列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNestedBySpTaskIds(array $NestedBySpTaskIds) 设置<p>引用该手动工作流的嵌套工作流任务ID列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkflowExtOpsDto extends AbstractModel
{
    /**
     * @var integer <p>任务数量count</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskCount;

    /**
     * @var string <p>文件名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderName;

    /**
     * @var string <p>工作流id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkFlowId;

    /**
     * @var string <p>责任人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Owner;

    /**
     * @var string <p>责任人userId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerId;

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
     * @var string <p>工作流描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkFlowDesc;

    /**
     * @var string <p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkFlowName;

    /**
     * @var string <p>工作流文件id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderId;

    /**
     * @var string <p>工作流状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>工作流创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>最近更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @var string <p>最近更新人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyUser;

    /**
     * @var string <p>工作流类型，周期cycle，手动manual</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowType;

    /**
     * @var string <p>bundle客户端绑定唯一id</p>
     */
    public $BundleId;

    /**
     * @var string <p>bundle客户端扩展信息，json格式</p>
     */
    public $BundleInfo;

    /**
     * @var array <p>引用该手动工作流的嵌套工作流任务ID列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NestedBySpTaskIds;

    /**
     * @param integer $TaskCount <p>任务数量count</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderName <p>文件名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkFlowId <p>工作流id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Owner <p>责任人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerId <p>责任人userId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId <p>项目id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectIdent <p>项目标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName <p>项目名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkFlowDesc <p>工作流描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkFlowName <p>工作流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FolderId <p>工作流文件id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>工作流状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>工作流创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime <p>最近更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyUser <p>最近更新人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowType <p>工作流类型，周期cycle，手动manual</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BundleId <p>bundle客户端绑定唯一id</p>
     * @param string $BundleInfo <p>bundle客户端扩展信息，json格式</p>
     * @param array $NestedBySpTaskIds <p>引用该手动工作流的嵌套工作流任务ID列表</p>
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
        if (array_key_exists("TaskCount",$param) and $param["TaskCount"] !== null) {
            $this->TaskCount = $param["TaskCount"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("WorkFlowId",$param) and $param["WorkFlowId"] !== null) {
            $this->WorkFlowId = $param["WorkFlowId"];
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

        if (array_key_exists("WorkFlowDesc",$param) and $param["WorkFlowDesc"] !== null) {
            $this->WorkFlowDesc = $param["WorkFlowDesc"];
        }

        if (array_key_exists("WorkFlowName",$param) and $param["WorkFlowName"] !== null) {
            $this->WorkFlowName = $param["WorkFlowName"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("ModifyUser",$param) and $param["ModifyUser"] !== null) {
            $this->ModifyUser = $param["ModifyUser"];
        }

        if (array_key_exists("WorkflowType",$param) and $param["WorkflowType"] !== null) {
            $this->WorkflowType = $param["WorkflowType"];
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("BundleInfo",$param) and $param["BundleInfo"] !== null) {
            $this->BundleInfo = $param["BundleInfo"];
        }

        if (array_key_exists("NestedBySpTaskIds",$param) and $param["NestedBySpTaskIds"] !== null) {
            $this->NestedBySpTaskIds = $param["NestedBySpTaskIds"];
        }
    }
}
