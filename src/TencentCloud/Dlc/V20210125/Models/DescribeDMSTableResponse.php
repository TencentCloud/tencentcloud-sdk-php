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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDMSTable返回参数结构体
 *
 * @method Asset getAsset() 获取基础对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAsset(Asset $Asset) 设置基础对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getViewOriginalText() 获取视图文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setViewOriginalText(string $ViewOriginalText) 设置视图文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getViewExpandedText() 获取视图文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setViewExpandedText(string $ViewExpandedText) 设置视图文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetention() 获取hive维护版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetention(integer $Retention) 设置hive维护版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method DMSSds getSds() 获取存储对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSds(DMSSds $Sds) 设置存储对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPartitionKeys() 获取分区列
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartitionKeys(array $PartitionKeys) 设置分区列
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPartitions() 获取分区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartitions(array $Partitions) 设置分区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取表类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置表类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDbName() 获取数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbName(string $DbName) 设置数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchemaName() 获取Schame名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchemaName(string $SchemaName) 设置Schame名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStorageSize() 获取存储大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageSize(integer $StorageSize) 设置存储大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRecordCount() 获取记录数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordCount(integer $RecordCount) 设置记录数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLifeTime() 获取生命周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLifeTime(integer $LifeTime) 设置生命周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastAccessTime() 获取最后访问时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastAccessTime(string $LastAccessTime) 设置最后访问时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataUpdateTime() 获取数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataUpdateTime(string $DataUpdateTime) 设置数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStructUpdateTime() 获取结构更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStructUpdateTime(string $StructUpdateTime) 设置结构更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getColumns() 获取列
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumns(array $Columns) 设置列
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDMSTableResponse extends AbstractModel
{
    /**
     * @var Asset 基础对象
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Asset;

    /**
     * @var string 视图文本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ViewOriginalText;

    /**
     * @var string 视图文本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ViewExpandedText;

    /**
     * @var integer hive维护版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Retention;

    /**
     * @var DMSSds 存储对象
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sds;

    /**
     * @var array 分区列
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PartitionKeys;

    /**
     * @var array 分区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Partitions;

    /**
     * @var string 表类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbName;

    /**
     * @var string Schame名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchemaName;

    /**
     * @var integer 存储大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageSize;

    /**
     * @var integer 记录数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordCount;

    /**
     * @var integer 生命周期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LifeTime;

    /**
     * @var string 最后访问时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastAccessTime;

    /**
     * @var string 数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataUpdateTime;

    /**
     * @var string 结构更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StructUpdateTime;

    /**
     * @var array 列
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Columns;

    /**
     * @var string 表名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param Asset $Asset 基础对象
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ViewOriginalText 视图文本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ViewExpandedText 视图文本
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Retention hive维护版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param DMSSds $Sds 存储对象
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PartitionKeys 分区列
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Partitions 分区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 表类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DbName 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchemaName Schame名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StorageSize 存储大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RecordCount 记录数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LifeTime 生命周期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastAccessTime 最后访问时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataUpdateTime 数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StructUpdateTime 结构更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Columns 列
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 表名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Asset",$param) and $param["Asset"] !== null) {
            $this->Asset = new Asset();
            $this->Asset->deserialize($param["Asset"]);
        }

        if (array_key_exists("ViewOriginalText",$param) and $param["ViewOriginalText"] !== null) {
            $this->ViewOriginalText = $param["ViewOriginalText"];
        }

        if (array_key_exists("ViewExpandedText",$param) and $param["ViewExpandedText"] !== null) {
            $this->ViewExpandedText = $param["ViewExpandedText"];
        }

        if (array_key_exists("Retention",$param) and $param["Retention"] !== null) {
            $this->Retention = $param["Retention"];
        }

        if (array_key_exists("Sds",$param) and $param["Sds"] !== null) {
            $this->Sds = new DMSSds();
            $this->Sds->deserialize($param["Sds"]);
        }

        if (array_key_exists("PartitionKeys",$param) and $param["PartitionKeys"] !== null) {
            $this->PartitionKeys = [];
            foreach ($param["PartitionKeys"] as $key => $value){
                $obj = new DMSColumn();
                $obj->deserialize($value);
                array_push($this->PartitionKeys, $obj);
            }
        }

        if (array_key_exists("Partitions",$param) and $param["Partitions"] !== null) {
            $this->Partitions = [];
            foreach ($param["Partitions"] as $key => $value){
                $obj = new DMSPartition();
                $obj->deserialize($value);
                array_push($this->Partitions, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }

        if (array_key_exists("RecordCount",$param) and $param["RecordCount"] !== null) {
            $this->RecordCount = $param["RecordCount"];
        }

        if (array_key_exists("LifeTime",$param) and $param["LifeTime"] !== null) {
            $this->LifeTime = $param["LifeTime"];
        }

        if (array_key_exists("LastAccessTime",$param) and $param["LastAccessTime"] !== null) {
            $this->LastAccessTime = $param["LastAccessTime"];
        }

        if (array_key_exists("DataUpdateTime",$param) and $param["DataUpdateTime"] !== null) {
            $this->DataUpdateTime = $param["DataUpdateTime"];
        }

        if (array_key_exists("StructUpdateTime",$param) and $param["StructUpdateTime"] !== null) {
            $this->StructUpdateTime = $param["StructUpdateTime"];
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = [];
            foreach ($param["Columns"] as $key => $value){
                $obj = new DMSColumn();
                $obj->deserialize($value);
                array_push($this->Columns, $obj);
            }
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
