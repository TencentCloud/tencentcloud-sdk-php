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
 * @method string getDb() 获取<p>数据库名</p>
 * @method void setDb(string $Db) 设置<p>数据库名</p>
 * @method string getSchema() 获取<p>schema</p>
 * @method void setSchema(string $Schema) 设置<p>schema</p>
 * @method string getTable() 获取<p>表名</p>
 * @method void setTable(string $Table) 设置<p>表名</p>
 * @method integer getChunk() 获取<p>分块号</p>
 * @method void setChunk(integer $Chunk) 设置<p>分块号</p>
 * @method string getSrcItem() 获取<p>源库数值</p>
 * @method void setSrcItem(string $SrcItem) 设置<p>源库数值</p>
 * @method string getDstItem() 获取<p>目标库数值</p>
 * @method void setDstItem(string $DstItem) 设置<p>目标库数值</p>
 * @method string getIndexName() 获取<p>索引名称</p>
 * @method void setIndexName(string $IndexName) 设置<p>索引名称</p>
 * @method string getLowerBoundary() 获取<p>索引下边界</p>
 * @method void setLowerBoundary(string $LowerBoundary) 设置<p>索引下边界</p>
 * @method string getUpperBoundary() 获取<p>索引上边界</p>
 * @method void setUpperBoundary(string $UpperBoundary) 设置<p>索引上边界</p>
 * @method float getCostTime() 获取<p>对比消耗时间,单位为 ms</p>
 * @method void setCostTime(float $CostTime) 设置<p>对比消耗时间,单位为 ms</p>
 * @method string getFinishedAt() 获取<p>完成时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method void setFinishedAt(string $FinishedAt) 设置<p>完成时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 */
class DifferenceItem extends AbstractModel
{
    /**
     * @var string <p>数据库名</p>
     */
    public $Db;

    /**
     * @var string <p>schema</p>
     */
    public $Schema;

    /**
     * @var string <p>表名</p>
     */
    public $Table;

    /**
     * @var integer <p>分块号</p>
     */
    public $Chunk;

    /**
     * @var string <p>源库数值</p>
     */
    public $SrcItem;

    /**
     * @var string <p>目标库数值</p>
     */
    public $DstItem;

    /**
     * @var string <p>索引名称</p>
     */
    public $IndexName;

    /**
     * @var string <p>索引下边界</p>
     */
    public $LowerBoundary;

    /**
     * @var string <p>索引上边界</p>
     */
    public $UpperBoundary;

    /**
     * @var float <p>对比消耗时间,单位为 ms</p>
     */
    public $CostTime;

    /**
     * @var string <p>完成时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     */
    public $FinishedAt;

    /**
     * @param string $Db <p>数据库名</p>
     * @param string $Schema <p>schema</p>
     * @param string $Table <p>表名</p>
     * @param integer $Chunk <p>分块号</p>
     * @param string $SrcItem <p>源库数值</p>
     * @param string $DstItem <p>目标库数值</p>
     * @param string $IndexName <p>索引名称</p>
     * @param string $LowerBoundary <p>索引下边界</p>
     * @param string $UpperBoundary <p>索引上边界</p>
     * @param float $CostTime <p>对比消耗时间,单位为 ms</p>
     * @param string $FinishedAt <p>完成时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
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

        if (array_key_exists("Schema",$param) and $param["Schema"] !== null) {
            $this->Schema = $param["Schema"];
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
