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
 * 特征表定义
 *
 * @method string getName() 获取表名称
 * @method void setName(string $Name) 设置表名称
 * @method string getFullName() 获取全称
 * @method void setFullName(string $FullName) 设置全称
 * @method string getComment() 获取资产描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComment(string $Comment) 设置资产描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifiedTime() 获取修改时间，iso8601格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifiedTime(string $ModifiedTime) 设置修改时间，iso8601格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间，iso8601格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间，iso8601格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method Owner getOwner() 获取责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwner(Owner $Owner) 设置责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkspaceId() 获取工作空间ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkspaceId(string $WorkspaceId) 设置工作空间ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetGuid() 获取资产ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetGuid(string $AssetGuid) 设置资产ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class FeatureTable extends AbstractModel
{
    /**
     * @var string 表名称
     */
    public $Name;

    /**
     * @var string 全称
     */
    public $FullName;

    /**
     * @var string 资产描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Comment;

    /**
     * @var string 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var string 修改时间，iso8601格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifiedTime;

    /**
     * @var string 创建时间，iso8601格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var Owner 责任人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Owner;

    /**
     * @var string 工作空间ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkspaceId;

    /**
     * @var string 资产ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetGuid;

    /**
     * @param string $Name 表名称
     * @param string $FullName 全称
     * @param string $Comment 资产描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifiedTime 修改时间，iso8601格式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间，iso8601格式
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param Owner $Owner 责任人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkspaceId 工作空间ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetGuid 资产ID
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("FullName",$param) and $param["FullName"] !== null) {
            $this->FullName = $param["FullName"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = new Owner();
            $this->Owner->deserialize($param["Owner"]);
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("AssetGuid",$param) and $param["AssetGuid"] !== null) {
            $this->AssetGuid = $param["AssetGuid"];
        }
    }
}
