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
 * Schema信息
 *
 * @method string getName() 获取<p>schema名称</p>
 * @method void setName(string $Name) 设置<p>schema名称</p>
 * @method string getComment() 获取<p>描述。注意：此字段可能返回null，表示取不到有效值</p>
 * @method void setComment(string $Comment) 设置<p>描述。注意：此字段可能返回null，表示取不到有效值</p>
 * @method array getProperties() 获取<p>属性。注意：此字段可能返回null，表示取不到有效值</p>
 * @method void setProperties(array $Properties) 设置<p>属性。注意：此字段可能返回null，表示取不到有效值</p>
 * @method Audit getAudit() 获取<p>审计信息。注意：此字段可能返回null，表示取不到有效值</p>
 * @method void setAudit(Audit $Audit) 设置<p>审计信息。注意：此字段可能返回null，表示取不到有效值</p>
 * @method MetaOwner getMetaOwner() 获取<p>owner信息</p>
 * @method void setMetaOwner(MetaOwner $MetaOwner) 设置<p>owner信息</p>
 * @method string getAssetGuid() 获取<p>资产全局唯一ID，通过WedataAssetUIDUtils.generateUID生成</p>
 * @method void setAssetGuid(string $AssetGuid) 设置<p>资产全局唯一ID，通过WedataAssetUIDUtils.generateUID生成</p>
 * @method PermissionDetail getPermissionDetail() 获取<p>当前用户对该schema的权限信息。注意：此字段可能返回null，请求中未开启FetchPermissions时不返回</p>
 * @method void setPermissionDetail(PermissionDetail $PermissionDetail) 设置<p>当前用户对该schema的权限信息。注意：此字段可能返回null，请求中未开启FetchPermissions时不返回</p>
 * @method array getTags() 获取<p>标签信息列表。注意：此字段可能返回null，请求中未开启FetchTags时不返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>标签信息列表。注意：此字段可能返回null，请求中未开启FetchTags时不返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class Schema extends AbstractModel
{
    /**
     * @var string <p>schema名称</p>
     */
    public $Name;

    /**
     * @var string <p>描述。注意：此字段可能返回null，表示取不到有效值</p>
     */
    public $Comment;

    /**
     * @var array <p>属性。注意：此字段可能返回null，表示取不到有效值</p>
     */
    public $Properties;

    /**
     * @var Audit <p>审计信息。注意：此字段可能返回null，表示取不到有效值</p>
     */
    public $Audit;

    /**
     * @var MetaOwner <p>owner信息</p>
     */
    public $MetaOwner;

    /**
     * @var string <p>资产全局唯一ID，通过WedataAssetUIDUtils.generateUID生成</p>
     */
    public $AssetGuid;

    /**
     * @var PermissionDetail <p>当前用户对该schema的权限信息。注意：此字段可能返回null，请求中未开启FetchPermissions时不返回</p>
     */
    public $PermissionDetail;

    /**
     * @var array <p>标签信息列表。注意：此字段可能返回null，请求中未开启FetchTags时不返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @param string $Name <p>schema名称</p>
     * @param string $Comment <p>描述。注意：此字段可能返回null，表示取不到有效值</p>
     * @param array $Properties <p>属性。注意：此字段可能返回null，表示取不到有效值</p>
     * @param Audit $Audit <p>审计信息。注意：此字段可能返回null，表示取不到有效值</p>
     * @param MetaOwner $MetaOwner <p>owner信息</p>
     * @param string $AssetGuid <p>资产全局唯一ID，通过WedataAssetUIDUtils.generateUID生成</p>
     * @param PermissionDetail $PermissionDetail <p>当前用户对该schema的权限信息。注意：此字段可能返回null，请求中未开启FetchPermissions时不返回</p>
     * @param array $Tags <p>标签信息列表。注意：此字段可能返回null，请求中未开启FetchTags时不返回</p>
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
