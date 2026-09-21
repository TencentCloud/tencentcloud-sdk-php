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
 * MongoDB 集合级空间使用明细，包含集合的存储、索引、碎片等各维度指标。
 *
 * @method string getCollStats() 获取<p>集合命名空间，格式为 db.collection。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCollStats(string $CollStats) 设置<p>集合命名空间，格式为 db.collection。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCollectionSize() 获取<p>集合逻辑大小（字节，未压缩）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCollectionSize(integer $CollectionSize) 设置<p>集合逻辑大小（字节，未压缩）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDataFree() 获取<p>集合已分配但未使用的空间（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataFree(integer $DataFree) 设置<p>集合已分配但未使用的空间（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpaceRatio() 获取<p>空间利用率（百分比字符串）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpaceRatio(string $SpaceRatio) 设置<p>空间利用率（百分比字符串）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFragRatio() 获取<p>碎片率（百分比字符串）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFragRatio(string $FragRatio) 设置<p>碎片率（百分比字符串）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSize() 获取<p>集合数据大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSize(integer $Size) 设置<p>集合数据大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalIndexSize() 获取<p>所有索引占用大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalIndexSize(integer $TotalIndexSize) 设置<p>所有索引占用大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAvgObjSize() 获取<p>平均文档大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvgObjSize(integer $AvgObjSize) 设置<p>平均文档大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStorageSize() 获取<p>集合实际占用存储大小（字节，压缩后）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageSize(integer $StorageSize) 设置<p>集合实际占用存储大小（字节，压缩后）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCount() 获取<p>文档数量。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置<p>文档数量。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCompressionRatio() 获取<p>压缩率（百分比字符串）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompressionRatio(string $CompressionRatio) 设置<p>压缩率（百分比字符串）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFileReuseBytes() 获取<p>可复用文件空间（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileReuseBytes(integer $FileReuseBytes) 设置<p>可复用文件空间（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class MongoCollectionDetail extends AbstractModel
{
    /**
     * @var string <p>集合命名空间，格式为 db.collection。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CollStats;

    /**
     * @var integer <p>集合逻辑大小（字节，未压缩）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CollectionSize;

    /**
     * @var integer <p>集合已分配但未使用的空间（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataFree;

    /**
     * @var string <p>空间利用率（百分比字符串）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpaceRatio;

    /**
     * @var string <p>碎片率（百分比字符串）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FragRatio;

    /**
     * @var integer <p>集合数据大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Size;

    /**
     * @var integer <p>所有索引占用大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalIndexSize;

    /**
     * @var integer <p>平均文档大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvgObjSize;

    /**
     * @var integer <p>集合实际占用存储大小（字节，压缩后）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageSize;

    /**
     * @var integer <p>文档数量。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @var string <p>压缩率（百分比字符串）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompressionRatio;

    /**
     * @var integer <p>可复用文件空间（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileReuseBytes;

    /**
     * @param string $CollStats <p>集合命名空间，格式为 db.collection。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CollectionSize <p>集合逻辑大小（字节，未压缩）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DataFree <p>集合已分配但未使用的空间（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SpaceRatio <p>空间利用率（百分比字符串）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FragRatio <p>碎片率（百分比字符串）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Size <p>集合数据大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalIndexSize <p>所有索引占用大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AvgObjSize <p>平均文档大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StorageSize <p>集合实际占用存储大小（字节，压缩后）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Count <p>文档数量。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CompressionRatio <p>压缩率（百分比字符串）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FileReuseBytes <p>可复用文件空间（字节）。</p>
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
        if (array_key_exists("CollStats",$param) and $param["CollStats"] !== null) {
            $this->CollStats = $param["CollStats"];
        }

        if (array_key_exists("CollectionSize",$param) and $param["CollectionSize"] !== null) {
            $this->CollectionSize = $param["CollectionSize"];
        }

        if (array_key_exists("DataFree",$param) and $param["DataFree"] !== null) {
            $this->DataFree = $param["DataFree"];
        }

        if (array_key_exists("SpaceRatio",$param) and $param["SpaceRatio"] !== null) {
            $this->SpaceRatio = $param["SpaceRatio"];
        }

        if (array_key_exists("FragRatio",$param) and $param["FragRatio"] !== null) {
            $this->FragRatio = $param["FragRatio"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("TotalIndexSize",$param) and $param["TotalIndexSize"] !== null) {
            $this->TotalIndexSize = $param["TotalIndexSize"];
        }

        if (array_key_exists("AvgObjSize",$param) and $param["AvgObjSize"] !== null) {
            $this->AvgObjSize = $param["AvgObjSize"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("CompressionRatio",$param) and $param["CompressionRatio"] !== null) {
            $this->CompressionRatio = $param["CompressionRatio"];
        }

        if (array_key_exists("FileReuseBytes",$param) and $param["FileReuseBytes"] !== null) {
            $this->FileReuseBytes = $param["FileReuseBytes"];
        }
    }
}
