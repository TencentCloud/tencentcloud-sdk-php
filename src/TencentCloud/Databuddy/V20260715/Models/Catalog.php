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
 * 数据目录实体结构
 *
 * @method string getId() 获取<p>数据目录唯一id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置<p>数据目录唯一id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>数据目录名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>数据目录名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取<p>数据目录类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置<p>数据目录类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComment() 获取<p>数据目录描述信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComment(string $Comment) 设置<p>数据目录描述信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>状态信息：注册中0，待测试1，连接成功2，连接失败3，删除中4，已删除5</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>状态信息：注册中0，待测试1，连接成功2，连接失败3，删除中4，已删除5</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProperties() 获取<p>数据目录属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProperties(array $Properties) 设置<p>数据目录属性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperator() 获取<p>操作人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperator(string $Operator) 设置<p>操作人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MetaOwner getMetaOwner() 获取<p>责任人信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetaOwner(MetaOwner $MetaOwner) 设置<p>责任人信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method Audit getAudit() 获取<p>审计信息</p>
 * @method void setAudit(Audit $Audit) 设置<p>审计信息</p>
 * @method string getAssetGuid() 获取<p>资产全局唯一ID</p>
 * @method void setAssetGuid(string $AssetGuid) 设置<p>资产全局唯一ID</p>
 * @method integer getCurrentWorkspacePermissionLevel() 获取<p>当前workspace权限级别，取值对应PermissionLevel，0-无权限，1-只读，2-读写</p>
 * @method void setCurrentWorkspacePermissionLevel(integer $CurrentWorkspacePermissionLevel) 设置<p>当前workspace权限级别，取值对应PermissionLevel，0-无权限，1-只读，2-读写</p>
 * @method string getIdentifier() 获取<p>tccatalog属性中的tccatalog.identifier</p>
 * @method void setIdentifier(string $Identifier) 设置<p>tccatalog属性中的tccatalog.identifier</p>
 * @method PermissionDetail getPermissionDetail() 获取<p>当前用户对该实体的权限信息</p>
 * @method void setPermissionDetail(PermissionDetail $PermissionDetail) 设置<p>当前用户对该实体的权限信息</p>
 * @method boolean getIsExternal() 获取<p>是否为外部数据目录（基于数据源连接创建的Catalog，如MYSQL、EMR_HIVE、TCHOUSE_D、POSTGRESQL、DLC等）。true:外部目录, false:内置目录（TABLE/MODEL/VOLUME）</p>
 * @method void setIsExternal(boolean $IsExternal) 设置<p>是否为外部数据目录（基于数据源连接创建的Catalog，如MYSQL、EMR_HIVE、TCHOUSE_D、POSTGRESQL、DLC等）。true:外部目录, false:内置目录（TABLE/MODEL/VOLUME）</p>
 * @method array getTags() 获取<p>标签信息列表。注意：仅当请求中 FetchTags=true 时返回，默认不返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>标签信息列表。注意：仅当请求中 FetchTags=true 时返回，默认不返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCatalogSource() 获取<p>数据目录来源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCatalogSource(string $CatalogSource) 设置<p>数据目录来源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConnectionCatalogName() 获取<p>连接侧数据目录名或数据库名（仅分析版三段式数据源有值，二段式数据源为空字符串）。Doris/StarRocks/TChouse-D 等 MySQL 内核三段式数据源：external catalog 名称；PostgreSQL/Tencent PG/GaussDB/Hologres 等 PG 内核三段式数据源：databaseName；MySQL 等二段式数据源：空字符串。注意：此字段仅分析版（CatalogSource=CONNECTION）有效，专业版（METALAKE）不填充。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConnectionCatalogName(string $ConnectionCatalogName) 设置<p>连接侧数据目录名或数据库名（仅分析版三段式数据源有值，二段式数据源为空字符串）。Doris/StarRocks/TChouse-D 等 MySQL 内核三段式数据源：external catalog 名称；PostgreSQL/Tencent PG/GaussDB/Hologres 等 PG 内核三段式数据源：databaseName；MySQL 等二段式数据源：空字符串。注意：此字段仅分析版（CatalogSource=CONNECTION）有效，专业版（METALAKE）不填充。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class Catalog extends AbstractModel
{
    /**
     * @var string <p>数据目录唯一id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string <p>数据目录名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>数据目录类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string <p>数据目录描述信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Comment;

    /**
     * @var string <p>状态信息：注册中0，待测试1，连接成功2，连接失败3，删除中4，已删除5</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var array <p>数据目录属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Properties;

    /**
     * @var string <p>操作人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operator;

    /**
     * @var MetaOwner <p>责任人信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetaOwner;

    /**
     * @var Audit <p>审计信息</p>
     */
    public $Audit;

    /**
     * @var string <p>资产全局唯一ID</p>
     */
    public $AssetGuid;

    /**
     * @var integer <p>当前workspace权限级别，取值对应PermissionLevel，0-无权限，1-只读，2-读写</p>
     */
    public $CurrentWorkspacePermissionLevel;

    /**
     * @var string <p>tccatalog属性中的tccatalog.identifier</p>
     */
    public $Identifier;

    /**
     * @var PermissionDetail <p>当前用户对该实体的权限信息</p>
     */
    public $PermissionDetail;

    /**
     * @var boolean <p>是否为外部数据目录（基于数据源连接创建的Catalog，如MYSQL、EMR_HIVE、TCHOUSE_D、POSTGRESQL、DLC等）。true:外部目录, false:内置目录（TABLE/MODEL/VOLUME）</p>
     */
    public $IsExternal;

    /**
     * @var array <p>标签信息列表。注意：仅当请求中 FetchTags=true 时返回，默认不返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string <p>数据目录来源</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CatalogSource;

    /**
     * @var string <p>连接侧数据目录名或数据库名（仅分析版三段式数据源有值，二段式数据源为空字符串）。Doris/StarRocks/TChouse-D 等 MySQL 内核三段式数据源：external catalog 名称；PostgreSQL/Tencent PG/GaussDB/Hologres 等 PG 内核三段式数据源：databaseName；MySQL 等二段式数据源：空字符串。注意：此字段仅分析版（CatalogSource=CONNECTION）有效，专业版（METALAKE）不填充。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConnectionCatalogName;

    /**
     * @param string $Id <p>数据目录唯一id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>数据目录名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type <p>数据目录类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Comment <p>数据目录描述信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>状态信息：注册中0，待测试1，连接成功2，连接失败3，删除中4，已删除5</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Properties <p>数据目录属性</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Operator <p>操作人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MetaOwner $MetaOwner <p>责任人信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param Audit $Audit <p>审计信息</p>
     * @param string $AssetGuid <p>资产全局唯一ID</p>
     * @param integer $CurrentWorkspacePermissionLevel <p>当前workspace权限级别，取值对应PermissionLevel，0-无权限，1-只读，2-读写</p>
     * @param string $Identifier <p>tccatalog属性中的tccatalog.identifier</p>
     * @param PermissionDetail $PermissionDetail <p>当前用户对该实体的权限信息</p>
     * @param boolean $IsExternal <p>是否为外部数据目录（基于数据源连接创建的Catalog，如MYSQL、EMR_HIVE、TCHOUSE_D、POSTGRESQL、DLC等）。true:外部目录, false:内置目录（TABLE/MODEL/VOLUME）</p>
     * @param array $Tags <p>标签信息列表。注意：仅当请求中 FetchTags=true 时返回，默认不返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CatalogSource <p>数据目录来源</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConnectionCatalogName <p>连接侧数据目录名或数据库名（仅分析版三段式数据源有值，二段式数据源为空字符串）。Doris/StarRocks/TChouse-D 等 MySQL 内核三段式数据源：external catalog 名称；PostgreSQL/Tencent PG/GaussDB/Hologres 等 PG 内核三段式数据源：databaseName；MySQL 等二段式数据源：空字符串。注意：此字段仅分析版（CatalogSource=CONNECTION）有效，专业版（METALAKE）不填充。</p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("MetaOwner",$param) and $param["MetaOwner"] !== null) {
            $this->MetaOwner = new MetaOwner();
            $this->MetaOwner->deserialize($param["MetaOwner"]);
        }

        if (array_key_exists("Audit",$param) and $param["Audit"] !== null) {
            $this->Audit = new Audit();
            $this->Audit->deserialize($param["Audit"]);
        }

        if (array_key_exists("AssetGuid",$param) and $param["AssetGuid"] !== null) {
            $this->AssetGuid = $param["AssetGuid"];
        }

        if (array_key_exists("CurrentWorkspacePermissionLevel",$param) and $param["CurrentWorkspacePermissionLevel"] !== null) {
            $this->CurrentWorkspacePermissionLevel = $param["CurrentWorkspacePermissionLevel"];
        }

        if (array_key_exists("Identifier",$param) and $param["Identifier"] !== null) {
            $this->Identifier = $param["Identifier"];
        }

        if (array_key_exists("PermissionDetail",$param) and $param["PermissionDetail"] !== null) {
            $this->PermissionDetail = new PermissionDetail();
            $this->PermissionDetail->deserialize($param["PermissionDetail"]);
        }

        if (array_key_exists("IsExternal",$param) and $param["IsExternal"] !== null) {
            $this->IsExternal = $param["IsExternal"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new CommonTagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("CatalogSource",$param) and $param["CatalogSource"] !== null) {
            $this->CatalogSource = $param["CatalogSource"];
        }

        if (array_key_exists("ConnectionCatalogName",$param) and $param["ConnectionCatalogName"] !== null) {
            $this->ConnectionCatalogName = $param["ConnectionCatalogName"];
        }
    }
}
