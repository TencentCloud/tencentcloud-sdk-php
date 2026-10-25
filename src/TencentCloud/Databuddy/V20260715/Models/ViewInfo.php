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
 * 视图信息
 *
 * @method string getName() 获取表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComment() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComment(string $Comment) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getColumns() 获取字段信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumns(array $Columns) 设置字段信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProperties() 获取属性值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProperties(array $Properties) 设置属性值
注意：此字段可能返回 null，表示取不到有效值。
 * @method Audit getAudit() 获取编辑者
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAudit(Audit $Audit) 设置编辑者
注意：此字段可能返回 null，表示取不到有效值。
 * @method MetaOwner getMetaOwner() 获取owner信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetaOwner(MetaOwner $MetaOwner) 设置owner信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetGuid() 获取资产全局唯一ID
 * @method void setAssetGuid(string $AssetGuid) 设置资产全局唯一ID
 * @method PermissionDetail getPermissionDetail() 获取当前用户对该实体的权限信息
 * @method void setPermissionDetail(PermissionDetail $PermissionDetail) 设置当前用户对该实体的权限信息
 * @method array getTags() 获取标签信息列表。注意：仅当请求中 FetchTags=true 时返回，默认不返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签信息列表。注意：仅当请求中 FetchTags=true 时返回，默认不返回
注意：此字段可能返回 null，表示取不到有效值。
 */
class ViewInfo extends AbstractModel
{
    /**
     * @var string 表名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Comment;

    /**
     * @var array 字段信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Columns;

    /**
     * @var array 属性值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Properties;

    /**
     * @var Audit 编辑者
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Audit;

    /**
     * @var MetaOwner owner信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetaOwner;

    /**
     * @var string 资产全局唯一ID
     */
    public $AssetGuid;

    /**
     * @var PermissionDetail 当前用户对该实体的权限信息
     */
    public $PermissionDetail;

    /**
     * @var array 标签信息列表。注意：仅当请求中 FetchTags=true 时返回，默认不返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @param string $Name 表名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Comment 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Columns 字段信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Properties 属性值
注意：此字段可能返回 null，表示取不到有效值。
     * @param Audit $Audit 编辑者
注意：此字段可能返回 null，表示取不到有效值。
     * @param MetaOwner $MetaOwner owner信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetGuid 资产全局唯一ID
     * @param PermissionDetail $PermissionDetail 当前用户对该实体的权限信息
     * @param array $Tags 标签信息列表。注意：仅当请求中 FetchTags=true 时返回，默认不返回
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

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = [];
            foreach ($param["Columns"] as $key => $value){
                $obj = new ColumnInfo();
                $obj->deserialize($value);
                array_push($this->Columns, $obj);
            }
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }

        if (array_key_exists("Audit",$param) and $param["Audit"] !== null) {
            $this->Audit = new Audit();
            $this->Audit->deserialize($param["Audit"]);
        }

        if (array_key_exists("MetaOwner",$param) and $param["MetaOwner"] !== null) {
            $this->MetaOwner = new MetaOwner();
            $this->MetaOwner->deserialize($param["MetaOwner"]);
        }

        if (array_key_exists("AssetGuid",$param) and $param["AssetGuid"] !== null) {
            $this->AssetGuid = $param["AssetGuid"];
        }

        if (array_key_exists("PermissionDetail",$param) and $param["PermissionDetail"] !== null) {
            $this->PermissionDetail = new PermissionDetail();
            $this->PermissionDetail->deserialize($param["PermissionDetail"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new CommonTagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
