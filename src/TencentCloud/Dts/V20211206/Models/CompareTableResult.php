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
 * 不一致的表的校验结果详情。增量和全量都是这个结构，某些字段对增量没有意义，可以忽略。
 *
 * @method string getDb() 获取<p>库名</p>
 * @method void setDb(string $Db) 设置<p>库名</p>
 * @method string getSchema() 获取<p>schema名</p>
 * @method void setSchema(string $Schema) 设置<p>schema名</p>
 * @method string getTable() 获取<p>表名</p>
 * @method void setTable(string $Table) 设置<p>表名</p>
 * @method string getConclusion() 获取<p>校验结果</p>
 * @method void setConclusion(string $Conclusion) 设置<p>校验结果</p>
 * @method string getStatus() 获取<p>校验状态。仅全量阶段有意义</p>
 * @method void setStatus(string $Status) 设置<p>校验状态。仅全量阶段有意义</p>
 * @method integer getProgress() 获取<p>校验进度。仅全量阶段有意义</p>
 * @method void setProgress(integer $Progress) 设置<p>校验进度。仅全量阶段有意义</p>
 * @method integer getRowCount() 获取<p>不一致行数</p>
 * @method void setRowCount(integer $RowCount) 设置<p>不一致行数</p>
 * @method string getStartedAt() 获取<p>该表开始校验的时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method void setStartedAt(string $StartedAt) 设置<p>该表开始校验的时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method string getFinishedAt() 获取<p>该表校验结束的时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method void setFinishedAt(string $FinishedAt) 设置<p>该表校验结束的时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method string getExpectedAt() 获取<p>预计该表校验结束的时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method void setExpectedAt(string $ExpectedAt) 设置<p>预计该表校验结束的时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method string getSrcItem() 获取<p>源端行数，如果是行数校验此值有意义</p>
 * @method void setSrcItem(string $SrcItem) 设置<p>源端行数，如果是行数校验此值有意义</p>
 * @method string getDstItem() 获取<p>目标端行数，如果是行数校验此值有意义</p>
 * @method void setDstItem(string $DstItem) 设置<p>目标端行数，如果是行数校验此值有意义</p>
 */
class CompareTableResult extends AbstractModel
{
    /**
     * @var string <p>库名</p>
     */
    public $Db;

    /**
     * @var string <p>schema名</p>
     */
    public $Schema;

    /**
     * @var string <p>表名</p>
     */
    public $Table;

    /**
     * @var string <p>校验结果</p>
     */
    public $Conclusion;

    /**
     * @var string <p>校验状态。仅全量阶段有意义</p>
     */
    public $Status;

    /**
     * @var integer <p>校验进度。仅全量阶段有意义</p>
     */
    public $Progress;

    /**
     * @var integer <p>不一致行数</p>
     */
    public $RowCount;

    /**
     * @var string <p>该表开始校验的时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     */
    public $StartedAt;

    /**
     * @var string <p>该表校验结束的时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     */
    public $FinishedAt;

    /**
     * @var string <p>预计该表校验结束的时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     */
    public $ExpectedAt;

    /**
     * @var string <p>源端行数，如果是行数校验此值有意义</p>
     */
    public $SrcItem;

    /**
     * @var string <p>目标端行数，如果是行数校验此值有意义</p>
     */
    public $DstItem;

    /**
     * @param string $Db <p>库名</p>
     * @param string $Schema <p>schema名</p>
     * @param string $Table <p>表名</p>
     * @param string $Conclusion <p>校验结果</p>
     * @param string $Status <p>校验状态。仅全量阶段有意义</p>
     * @param integer $Progress <p>校验进度。仅全量阶段有意义</p>
     * @param integer $RowCount <p>不一致行数</p>
     * @param string $StartedAt <p>该表开始校验的时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     * @param string $FinishedAt <p>该表校验结束的时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     * @param string $ExpectedAt <p>预计该表校验结束的时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     * @param string $SrcItem <p>源端行数，如果是行数校验此值有意义</p>
     * @param string $DstItem <p>目标端行数，如果是行数校验此值有意义</p>
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

        if (array_key_exists("Conclusion",$param) and $param["Conclusion"] !== null) {
            $this->Conclusion = $param["Conclusion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("RowCount",$param) and $param["RowCount"] !== null) {
            $this->RowCount = $param["RowCount"];
        }

        if (array_key_exists("StartedAt",$param) and $param["StartedAt"] !== null) {
            $this->StartedAt = $param["StartedAt"];
        }

        if (array_key_exists("FinishedAt",$param) and $param["FinishedAt"] !== null) {
            $this->FinishedAt = $param["FinishedAt"];
        }

        if (array_key_exists("ExpectedAt",$param) and $param["ExpectedAt"] !== null) {
            $this->ExpectedAt = $param["ExpectedAt"];
        }

        if (array_key_exists("SrcItem",$param) and $param["SrcItem"] !== null) {
            $this->SrcItem = $param["SrcItem"];
        }

        if (array_key_exists("DstItem",$param) and $param["DstItem"] !== null) {
            $this->DstItem = $param["DstItem"];
        }
    }
}
