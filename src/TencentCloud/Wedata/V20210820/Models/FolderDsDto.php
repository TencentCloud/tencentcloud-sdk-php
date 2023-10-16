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
 * 文件夹属性
 *
 * @method string getId() 获取文件夹id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置文件夹id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取所属项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置所属项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentsFolderId() 获取父文件夹id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentsFolderId(string $ParentsFolderId) 设置父文件夹id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取工作流总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置工作流总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWorkflows() 获取工作流列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflows(array $Workflows) 设置工作流列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalFolders() 获取子文件夹总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalFolders(integer $TotalFolders) 设置子文件夹总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFolders() 获取子文件夹列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolders(array $Folders) 设置子文件夹列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFindType() 获取搜索类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFindType(string $FindType) 设置搜索类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class FolderDsDto extends AbstractModel
{
    /**
     * @var string 文件夹id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 所属项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 父文件夹id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentsFolderId;

    /**
     * @var integer 工作流总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var array 工作流列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Workflows;

    /**
     * @var integer 子文件夹总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalFolders;

    /**
     * @var array 子文件夹列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Folders;

    /**
     * @var string 搜索类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FindType;

    /**
     * @param string $Id 文件夹id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 文件夹名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 所属项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentsFolderId 父文件夹id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total 工作流总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Workflows 工作流列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalFolders 子文件夹总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Folders 子文件夹列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FindType 搜索类型
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
    }
}
