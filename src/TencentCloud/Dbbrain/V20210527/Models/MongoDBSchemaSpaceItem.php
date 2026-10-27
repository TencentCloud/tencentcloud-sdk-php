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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MongoDB 产品库级空间对象项，描述单个数据库的空间使用统计信息。
 *
 * @method string getDb() 获取<p>数据库名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDb(string $Db) 设置<p>数据库名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimestamp() 获取<p>数据采集时间戳（毫秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestamp(integer $Timestamp) 设置<p>数据采集时间戳（毫秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSizeOnDisk() 获取<p>磁盘占用大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSizeOnDisk(integer $SizeOnDisk) 设置<p>磁盘占用大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSize() 获取<p>库级数据大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSize(integer $Size) 设置<p>库级数据大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAvgObjSize() 获取<p>库级平均文档大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvgObjSize(integer $AvgObjSize) 设置<p>库级平均文档大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCount() 获取<p>库级文档数量。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置<p>库级文档数量。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStorageSize() 获取<p>库级存储大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageSize(integer $StorageSize) 设置<p>库级存储大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalIndexSize() 获取<p>库级索引总大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalIndexSize(integer $TotalIndexSize) 设置<p>库级索引总大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDataFree() 获取<p>库级已分配未使用空间（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataFree(integer $DataFree) 设置<p>库级已分配未使用空间（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFragRatio() 获取<p>库级碎片率（百分比字符串）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFragRatio(string $FragRatio) 设置<p>库级碎片率（百分比字符串）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFileReuseBytes() 获取<p>库级可复用文件空间（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileReuseBytes(integer $FileReuseBytes) 设置<p>库级可复用文件空间（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseRatio() 获取<p>库空间占比（百分比字符串）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseRatio(string $DatabaseRatio) 设置<p>库空间占比（百分比字符串）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class MongoDBSchemaSpaceItem extends AbstractModel
{
    /**
     * @var string <p>数据库名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Db;

    /**
     * @var integer <p>数据采集时间戳（毫秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timestamp;

    /**
     * @var integer <p>磁盘占用大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SizeOnDisk;

    /**
     * @var integer <p>库级数据大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Size;

    /**
     * @var integer <p>库级平均文档大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvgObjSize;

    /**
     * @var integer <p>库级文档数量。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @var integer <p>库级存储大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageSize;

    /**
     * @var integer <p>库级索引总大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalIndexSize;

    /**
     * @var integer <p>库级已分配未使用空间（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataFree;

    /**
     * @var string <p>库级碎片率（百分比字符串）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FragRatio;

    /**
     * @var integer <p>库级可复用文件空间（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileReuseBytes;

    /**
     * @var string <p>库空间占比（百分比字符串）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseRatio;

    /**
     * @param string $Db <p>数据库名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Timestamp <p>数据采集时间戳（毫秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SizeOnDisk <p>磁盘占用大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Size <p>库级数据大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AvgObjSize <p>库级平均文档大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Count <p>库级文档数量。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StorageSize <p>库级存储大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalIndexSize <p>库级索引总大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DataFree <p>库级已分配未使用空间（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FragRatio <p>库级碎片率（百分比字符串）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FileReuseBytes <p>库级可复用文件空间（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseRatio <p>库空间占比（百分比字符串）。</p>
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
        if (array_key_exists("Db",$param) and $param["Db"] !== null) {
            $this->Db = $param["Db"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("SizeOnDisk",$param) and $param["SizeOnDisk"] !== null) {
            $this->SizeOnDisk = $param["SizeOnDisk"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("AvgObjSize",$param) and $param["AvgObjSize"] !== null) {
            $this->AvgObjSize = $param["AvgObjSize"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }

        if (array_key_exists("TotalIndexSize",$param) and $param["TotalIndexSize"] !== null) {
            $this->TotalIndexSize = $param["TotalIndexSize"];
        }

        if (array_key_exists("DataFree",$param) and $param["DataFree"] !== null) {
            $this->DataFree = $param["DataFree"];
        }

        if (array_key_exists("FragRatio",$param) and $param["FragRatio"] !== null) {
            $this->FragRatio = $param["FragRatio"];
        }

        if (array_key_exists("FileReuseBytes",$param) and $param["FileReuseBytes"] !== null) {
            $this->FileReuseBytes = $param["FileReuseBytes"];
        }

        if (array_key_exists("DatabaseRatio",$param) and $param["DatabaseRatio"] !== null) {
            $this->DatabaseRatio = $param["DatabaseRatio"];
        }
    }
}
