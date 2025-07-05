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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 校验不一致的表详情
 *
 * @method string getDb() 获取数据库名
 * @method void setDb(string $Db) 设置数据库名
 * @method string getTable() 获取表名
 * @method void setTable(string $Table) 设置表名
 * @method integer getChunk() 获取分块号
 * @method void setChunk(integer $Chunk) 设置分块号
 * @method string getSrcItem() 获取源库数值
 * @method void setSrcItem(string $SrcItem) 设置源库数值
 * @method string getDstItem() 获取目标库数值
 * @method void setDstItem(string $DstItem) 设置目标库数值
 * @method string getIndexName() 获取索引名称
 * @method void setIndexName(string $IndexName) 设置索引名称
 * @method string getLowerBoundary() 获取索引下边界
 * @method void setLowerBoundary(string $LowerBoundary) 设置索引下边界
 * @method string getUpperBoundary() 获取索引上边界
 * @method void setUpperBoundary(string $UpperBoundary) 设置索引上边界
 * @method float getCostTime() 获取对比消耗时间,单位为 ms
 * @method void setCostTime(float $CostTime) 设置对比消耗时间,单位为 ms
 * @method string getFinishedAt() 获取完成时间
 * @method void setFinishedAt(string $FinishedAt) 设置完成时间
 */
class DifferenceItem extends AbstractModel
{
    /**
     * @var string 数据库名
     */
    public $Db;

    /**
     * @var string 表名
     */
    public $Table;

    /**
     * @var integer 分块号
     */
    public $Chunk;

    /**
     * @var string 源库数值
     */
    public $SrcItem;

    /**
     * @var string 目标库数值
     */
    public $DstItem;

    /**
     * @var string 索引名称
     */
    public $IndexName;

    /**
     * @var string 索引下边界
     */
    public $LowerBoundary;

    /**
     * @var string 索引上边界
     */
    public $UpperBoundary;

    /**
     * @var float 对比消耗时间,单位为 ms
     */
    public $CostTime;

    /**
     * @var string 完成时间
     */
    public $FinishedAt;

    /**
     * @param string $Db 数据库名
     * @param string $Table 表名
     * @param integer $Chunk 分块号
     * @param string $SrcItem 源库数值
     * @param string $DstItem 目标库数值
     * @param string $IndexName 索引名称
     * @param string $LowerBoundary 索引下边界
     * @param string $UpperBoundary 索引上边界
     * @param float $CostTime 对比消耗时间,单位为 ms
     * @param string $FinishedAt 完成时间
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

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("Chunk",$param) and $param["Chunk"] !== null) {
            $this->Chunk = $param["Chunk"];
        }

        if (array_key_exists("SrcItem",$param) and $param["SrcItem"] !== null) {
            $this->SrcItem = $param["SrcItem"];
        }

        if (array_key_exists("DstItem",$param) and $param["DstItem"] !== null) {
            $this->DstItem = $param["DstItem"];
        }

        if (array_key_exists("IndexName",$param) and $param["IndexName"] !== null) {
            $this->IndexName = $param["IndexName"];
        }

        if (array_key_exists("LowerBoundary",$param) and $param["LowerBoundary"] !== null) {
            $this->LowerBoundary = $param["LowerBoundary"];
        }

        if (array_key_exists("UpperBoundary",$param) and $param["UpperBoundary"] !== null) {
            $this->UpperBoundary = $param["UpperBoundary"];
        }

        if (array_key_exists("CostTime",$param) and $param["CostTime"] !== null) {
            $this->CostTime = $param["CostTime"];
        }

        if (array_key_exists("FinishedAt",$param) and $param["FinishedAt"] !== null) {
            $this->FinishedAt = $param["FinishedAt"];
        }
    }
}
