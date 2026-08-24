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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 项目信息
 *
 * @method string getProjectId() 获取<p>项目id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置<p>项目id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取<p>项目标识，英文名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置<p>项目标识，英文名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisplayName() 获取<p>项目显示名称，可以为中文名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisplayName(string $DisplayName) 设置<p>项目显示名称，可以为中文名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>备注</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>备注</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatorUin() 获取<p>项目创建人id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatorUin(string $CreatorUin) 设置<p>项目创建人id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectOwnerUin() 获取<p>项目责任人id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectOwnerUin(string $ProjectOwnerUin) 设置<p>项目责任人id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取<p>项目状态：0：禁用，1：启用，-3:禁用中，2：启用中</p>
 * @method void setStatus(integer $Status) 设置<p>项目状态：0：禁用，1：启用，-3:禁用中，2：启用中</p>
 * @method string getProjectModel() 获取<p>项目模式，SIMPLE：简单模式 STANDARD：标准模式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectModel(string $ProjectModel) 设置<p>项目模式，SIMPLE：简单模式 STANDARD：标准模式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWorkspaceExt() 获取<p>项目的额外配置参数，{Key: &quot;scheduleMode&quot;, Value: &quot;task|workflow&quot;}</p>
 * @method void setWorkspaceExt(array $WorkspaceExt) 设置<p>项目的额外配置参数，{Key: &quot;scheduleMode&quot;, Value: &quot;task|workflow&quot;}</p>
 */
class Project extends AbstractModel
{
    /**
     * @var string <p>项目id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string <p>项目标识，英文名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var string <p>项目显示名称，可以为中文名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisplayName;

    /**
     * @var string <p>备注</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>项目创建人id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatorUin;

    /**
     * @var string <p>项目责任人id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectOwnerUin;

    /**
     * @var integer <p>项目状态：0：禁用，1：启用，-3:禁用中，2：启用中</p>
     */
    public $Status;

    /**
     * @var string <p>项目模式，SIMPLE：简单模式 STANDARD：标准模式</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectModel;

    /**
     * @var array <p>项目的额外配置参数，{Key: &quot;scheduleMode&quot;, Value: &quot;task|workflow&quot;}</p>
     */
    public $WorkspaceExt;

    /**
     * @param string $ProjectId <p>项目id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName <p>项目标识，英文名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DisplayName <p>项目显示名称，可以为中文名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>备注</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatorUin <p>项目创建人id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectOwnerUin <p>项目责任人id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status <p>项目状态：0：禁用，1：启用，-3:禁用中，2：启用中</p>
     * @param string $ProjectModel <p>项目模式，SIMPLE：简单模式 STANDARD：标准模式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $WorkspaceExt <p>项目的额外配置参数，{Key: &quot;scheduleMode&quot;, Value: &quot;task|workflow&quot;}</p>
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

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }

        if (array_key_exists("ProjectOwnerUin",$param) and $param["ProjectOwnerUin"] !== null) {
            $this->ProjectOwnerUin = $param["ProjectOwnerUin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ProjectModel",$param) and $param["ProjectModel"] !== null) {
            $this->ProjectModel = $param["ProjectModel"];
        }

        if (array_key_exists("WorkspaceExt",$param) and $param["WorkspaceExt"] !== null) {
            $this->WorkspaceExt = [];
            foreach ($param["WorkspaceExt"] as $key => $value){
                $obj = new WorkspaceExt();
                $obj->deserialize($value);
                array_push($this->WorkspaceExt, $obj);
            }
        }
    }
}
