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
 * 表信息
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
 * @method array getPartitioning() 获取分区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartitioning(array $Partitioning) 设置分区
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIndexes() 获取索引
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexes(array $Indexes) 设置索引
注意：此字段可能返回 null，表示取不到有效值。
 * @method Audit getAudit() 获取编辑者
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAudit(Audit $Audit) 设置编辑者
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableFormat() 获取表版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableFormat(string $TableFormat) 设置表版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method MetaOwner getMetaOwner() 获取owner信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetaOwner(MetaOwner $MetaOwner) 设置owner信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetGuid() 获取资产全局唯一ID
 * @method void setAssetGuid(string $AssetGuid) 设置资产全局唯一ID
 * @method string getFilesCount() 获取总文件数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilesCount(string $FilesCount) 设置总文件数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFilesSize() 获取总数据量大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilesSize(string $FilesSize) 设置总数据量大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableType() 获取表类型

- Managed 内部
- External 外部
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableType(string $TableType) 设置表类型

- Managed 内部
- External 外部
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFeatureTableType() 获取特征表类型：Online-在线表 Offline-离线表 空字符串-非特征表
 * @method void setFeatureTableType(string $FeatureTableType) 设置特征表类型：Online-在线表 Offline-离线表 空字符串-非特征表
 * @method FeatureTableDetail getFeatureTableDetail() 获取特征表详细信息，仅当FeatureTableType不为空时有值
 * @method void setFeatureTableDetail(FeatureTableDetail $FeatureTableDetail) 设置特征表详细信息，仅当FeatureTableType不为空时有值
 * @method PermissionDetail getPermissionDetail() 获取当前用户对该实体的权限信息
 * @method void setPermissionDetail(PermissionDetail $PermissionDetail) 设置当前用户对该实体的权限信息
 * @method array getTags() 获取表级标签列表，仅当请求中FetchOption.FetchTags=true时返回，默认不返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置表级标签列表，仅当请求中FetchOption.FetchTags=true时返回，默认不返回
注意：此字段可能返回 null，表示取不到有效值。
 */
class TableInfo extends AbstractModel
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
     * @var array 分区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Partitioning;

    /**
     * @var array 索引
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Indexes;

    /**
     * @var Audit 编辑者
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Audit;

    /**
     * @var string 表版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableFormat;

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
     * @var string 总文件数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FilesCount;

    /**
     * @var string 总数据量大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FilesSize;

    /**
     * @var string 表类型

- Managed 内部
- External 外部
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableType;

    /**
     * @var string 特征表类型：Online-在线表 Offline-离线表 空字符串-非特征表
     */
    public $FeatureTableType;

    /**
     * @var FeatureTableDetail 特征表详细信息，仅当FeatureTableType不为空时有值
     */
    public $FeatureTableDetail;

    /**
     * @var PermissionDetail 当前用户对该实体的权限信息
     */
    public $PermissionDetail;

    /**
     * @var array 表级标签列表，仅当请求中FetchOption.FetchTags=true时返回，默认不返回
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
     * @param array $Partitioning 分区
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Indexes 索引
注意：此字段可能返回 null，表示取不到有效值。
     * @param Audit $Audit 编辑者
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableFormat 表版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param MetaOwner $MetaOwner owner信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetGuid 资产全局唯一ID
     * @param string $FilesCount 总文件数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FilesSize 总数据量大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableType 表类型

- Managed 内部
- External 外部
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FeatureTableType 特征表类型：Online-在线表 Offline-离线表 空字符串-非特征表
     * @param FeatureTableDetail $FeatureTableDetail 特征表详细信息，仅当FeatureTableType不为空时有值
     * @param PermissionDetail $PermissionDetail 当前用户对该实体的权限信息
     * @param array $Tags 表级标签列表，仅当请求中FetchOption.FetchTags=true时返回，默认不返回
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

        if (array_key_exists("Partitioning",$param) and $param["Partitioning"] !== null) {
            $this->Partitioning = [];
            foreach ($param["Partitioning"] as $key => $value){
                $obj = new Partitioning();
                $obj->deserialize($value);
                array_push($this->Partitioning, $obj);
            }
        }

        if (array_key_exists("Indexes",$param) and $param["Indexes"] !== null) {
            $this->Indexes = [];
            foreach ($param["Indexes"] as $key => $value){
                $obj = new Index();
                $obj->deserialize($value);
                array_push($this->Indexes, $obj);
            }
        }

        if (array_key_exists("Audit",$param) and $param["Audit"] !== null) {
            $this->Audit = new Audit();
            $this->Audit->deserialize($param["Audit"]);
        }

        if (array_key_exists("TableFormat",$param) and $param["TableFormat"] !== null) {
            $this->TableFormat = $param["TableFormat"];
        }

        if (array_key_exists("MetaOwner",$param) and $param["MetaOwner"] !== null) {
            $this->MetaOwner = new MetaOwner();
            $this->MetaOwner->deserialize($param["MetaOwner"]);
        }

        if (array_key_exists("AssetGuid",$param) and $param["AssetGuid"] !== null) {
            $this->AssetGuid = $param["AssetGuid"];
        }

        if (array_key_exists("FilesCount",$param) and $param["FilesCount"] !== null) {
            $this->FilesCount = $param["FilesCount"];
        }

        if (array_key_exists("FilesSize",$param) and $param["FilesSize"] !== null) {
            $this->FilesSize = $param["FilesSize"];
        }

        if (array_key_exists("TableType",$param) and $param["TableType"] !== null) {
            $this->TableType = $param["TableType"];
        }

        if (array_key_exists("FeatureTableType",$param) and $param["FeatureTableType"] !== null) {
            $this->FeatureTableType = $param["FeatureTableType"];
        }

        if (array_key_exists("FeatureTableDetail",$param) and $param["FeatureTableDetail"] !== null) {
            $this->FeatureTableDetail = new FeatureTableDetail();
            $this->FeatureTableDetail->deserialize($param["FeatureTableDetail"]);
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
