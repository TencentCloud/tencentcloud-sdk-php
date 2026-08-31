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
 * 文件夹属性
 *
 * @method string getId() 获取<p>文件夹id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置<p>文件夹id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>文件夹名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>文件夹名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取<p>所属项目id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置<p>所属项目id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentsFolderId() 获取<p>父文件夹id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentsFolderId(string $ParentsFolderId) 设置<p>父文件夹id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取<p>工作流总数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置<p>工作流总数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWorkflows() 获取<p>工作流列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflows(array $Workflows) 设置<p>工作流列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalFolders() 获取<p>子文件夹总数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalFolders(integer $TotalFolders) 设置<p>子文件夹总数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFolders() 获取<p>子文件夹列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolders(array $Folders) 设置<p>子文件夹列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFindType() 获取<p>搜索类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFindType(string $FindType) 设置<p>搜索类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrivilege() 获取<p>用户对该资源的最高权限</p><p>枚举值：</p><ul><li>NO_PERMISSIONS： 无权限</li><li>CAN_VIEW： 只读权限</li><li>CAN_MANAGE： 管理权限</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivilege(string $Privilege) 设置<p>用户对该资源的最高权限</p><p>枚举值：</p><ul><li>NO_PERMISSIONS： 无权限</li><li>CAN_VIEW： 只读权限</li><li>CAN_MANAGE： 管理权限</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 */
class FolderDsDto extends AbstractModel
{
    /**
     * @var string <p>文件夹id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>文件夹名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>所属项目id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string <p>父文件夹id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentsFolderId;

    /**
     * @var integer <p>工作流总数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var array <p>工作流列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Workflows;

    /**
     * @var integer <p>子文件夹总数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalFolders;

    /**
     * @var array <p>子文件夹列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Folders;

    /**
     * @var string <p>搜索类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FindType;

    /**
     * @var string <p>用户对该资源的最高权限</p><p>枚举值：</p><ul><li>NO_PERMISSIONS： 无权限</li><li>CAN_VIEW： 只读权限</li><li>CAN_MANAGE： 管理权限</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Privilege;

    /**
     * @param string $Id <p>文件夹id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>文件夹名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId <p>所属项目id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentsFolderId <p>父文件夹id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total <p>工作流总数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Workflows <p>工作流列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalFolders <p>子文件夹总数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Folders <p>子文件夹列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FindType <p>搜索类型</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ParentsFolderId",$param) and $param["ParentsFolderId"] !== null) {
            $this->ParentsFolderId = $param["ParentsFolderId"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Workflows",$param) and $param["Workflows"] !== null) {
            $this->Workflows = [];
            foreach ($param["Workflows"] as $key => $value){
                $obj = new WorkflowCanvasOpsDto();
                $obj->deserialize($value);
                array_push($this->Workflows, $obj);
            }
        }

        if (array_key_exists("TotalFolders",$param) and $param["TotalFolders"] !== null) {
            $this->TotalFolders = $param["TotalFolders"];
        }

        if (array_key_exists("Folders",$param) and $param["Folders"] !== null) {
            $this->Folders = [];
            foreach ($param["Folders"] as $key => $value){
                $obj = new FolderDsDto();
                $obj->deserialize($value);
                array_push($this->Folders, $obj);
            }
        }

        if (array_key_exists("FindType",$param) and $param["FindType"] !== null) {
            $this->FindType = $param["FindType"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = $param["Privilege"];
        }
    }
}
