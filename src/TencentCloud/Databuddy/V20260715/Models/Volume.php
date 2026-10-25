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
 * 数据卷信息
 *
 * @method string getName() 获取<p>名称</p>
 * @method void setName(string $Name) 设置<p>名称</p>
 * @method string getCatalogName() 获取<p>catalog信息</p>
 * @method void setCatalogName(string $CatalogName) 设置<p>catalog信息</p>
 * @method string getSchemaName() 获取<p>schema 信息</p>
 * @method void setSchemaName(string $SchemaName) 设置<p>schema 信息</p>
 * @method string getComment() 获取<p>模型描述</p>
 * @method void setComment(string $Comment) 设置<p>模型描述</p>
 * @method string getStorageLocation() 获取<p>存储位置</p>
 * @method void setStorageLocation(string $StorageLocation) 设置<p>存储位置</p>
 * @method array getProperties() 获取<p>扩展数据</p>
 * @method void setProperties(array $Properties) 设置<p>扩展数据</p>
 * @method Audit getAudit() 获取<p>审计数据</p>
 * @method void setAudit(Audit $Audit) 设置<p>审计数据</p>
 * @method string getType() 获取数据卷类型，取值：MANAGED(内部管理)、EXTERNAL(外部存储)
 * @method void setType(string $Type) 设置数据卷类型，取值：MANAGED(内部管理)、EXTERNAL(外部存储)
 * @method MetaOwner getMetaOwner() 获取<p>责任人信息</p>
 * @method void setMetaOwner(MetaOwner $MetaOwner) 设置<p>责任人信息</p>
 * @method string getAssetGuid() 获取<p>资产全局唯一ID</p>
 * @method void setAssetGuid(string $AssetGuid) 设置<p>资产全局唯一ID</p>
 * @method PermissionDetail getPermissionDetail() 获取<p>当前用户对该实体的权限信息</p>
 * @method void setPermissionDetail(PermissionDetail $PermissionDetail) 设置<p>当前用户对该实体的权限信息</p>
 * @method array getTags() 获取<p>标签信息列表。注意：仅当请求中 FetchTags=true 时返回，默认不返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>标签信息列表。注意：仅当请求中 FetchTags=true 时返回，默认不返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class Volume extends AbstractModel
{
    /**
     * @var string <p>名称</p>
     */
    public $Name;

    /**
     * @var string <p>catalog信息</p>
     */
    public $CatalogName;

    /**
     * @var string <p>schema 信息</p>
     */
    public $SchemaName;

    /**
     * @var string <p>模型描述</p>
     */
    public $Comment;

    /**
     * @var string <p>存储位置</p>
     */
    public $StorageLocation;

    /**
     * @var array <p>扩展数据</p>
     */
    public $Properties;

    /**
     * @var Audit <p>审计数据</p>
     */
    public $Audit;

    /**
     * @var string 数据卷类型，取值：MANAGED(内部管理)、EXTERNAL(外部存储)
     */
    public $Type;

    /**
     * @var MetaOwner <p>责任人信息</p>
     */
    public $MetaOwner;

    /**
     * @var string <p>资产全局唯一ID</p>
     */
    public $AssetGuid;

    /**
     * @var PermissionDetail <p>当前用户对该实体的权限信息</p>
     */
    public $PermissionDetail;

    /**
     * @var array <p>标签信息列表。注意：仅当请求中 FetchTags=true 时返回，默认不返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @param string $Name <p>名称</p>
     * @param string $CatalogName <p>catalog信息</p>
     * @param string $SchemaName <p>schema 信息</p>
     * @param string $Comment <p>模型描述</p>
     * @param string $StorageLocation <p>存储位置</p>
     * @param array $Properties <p>扩展数据</p>
     * @param Audit $Audit <p>审计数据</p>
     * @param string $Type 数据卷类型，取值：MANAGED(内部管理)、EXTERNAL(外部存储)
     * @param MetaOwner $MetaOwner <p>责任人信息</p>
     * @param string $AssetGuid <p>资产全局唯一ID</p>
     * @param PermissionDetail $PermissionDetail <p>当前用户对该实体的权限信息</p>
     * @param array $Tags <p>标签信息列表。注意：仅当请求中 FetchTags=true 时返回，默认不返回</p>
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

        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("StorageLocation",$param) and $param["StorageLocation"] !== null) {
            $this->StorageLocation = $param["StorageLocation"];
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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
