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
 * @method string getDb() 获取库名
 * @method void setDb(string $Db) 设置库名
 * @method string getSchema() 获取schema名
 * @method void setSchema(string $Schema) 设置schema名
 * @method string getTable() 获取表名
 * @method void setTable(string $Table) 设置表名
 * @method string getConclusion() 获取校验结果
 * @method void setConclusion(string $Conclusion) 设置校验结果
 * @method string getStatus() 获取校验状态。仅全量阶段有意义
 * @method void setStatus(string $Status) 设置校验状态。仅全量阶段有意义
 * @method integer getProgress() 获取校验进度。仅全量阶段有意义
 * @method void setProgress(integer $Progress) 设置校验进度。仅全量阶段有意义
 * @method integer getRowCount() 获取不一致行数
 * @method void setRowCount(integer $RowCount) 设置不一致行数
 * @method string getStartedAt() 获取该表开始校验的时间
 * @method void setStartedAt(string $StartedAt) 设置该表开始校验的时间
 * @method string getFinishedAt() 获取该表校验结束的时间
 * @method void setFinishedAt(string $FinishedAt) 设置该表校验结束的时间
 * @method string getExpectedAt() 获取预计该表校验结束的时间
 * @method void setExpectedAt(string $ExpectedAt) 设置预计该表校验结束的时间
 * @method string getSrcItem() 获取源端行数，如果是行数校验此值有意义
 * @method void setSrcItem(string $SrcItem) 设置源端行数，如果是行数校验此值有意义
 * @method string getDstItem() 获取目标端行数，如果是行数校验此值有意义
 * @method void setDstItem(string $DstItem) 设置目标端行数，如果是行数校验此值有意义
 */
class CompareTableResult extends AbstractModel
{
    /**
     * @var string 库名
     */
    public $Db;

    /**
     * @var string schema名
     */
    public $Schema;

    /**
     * @var string 表名
     */
    public $Table;

    /**
     * @var string 校验结果
     */
    public $Conclusion;

    /**
     * @var string 校验状态。仅全量阶段有意义
     */
    public $Status;

    /**
     * @var integer 校验进度。仅全量阶段有意义
     */
    public $Progress;

    /**
     * @var integer 不一致行数
     */
    public $RowCount;

    /**
     * @var string 该表开始校验的时间
     */
    public $StartedAt;

    /**
     * @var string 该表校验结束的时间
     */
    public $FinishedAt;

    /**
     * @var string 预计该表校验结束的时间
     */
    public $ExpectedAt;

    /**
     * @var string 源端行数，如果是行数校验此值有意义
     */
    public $SrcItem;

    /**
     * @var string 目标端行数，如果是行数校验此值有意义
     */
    public $DstItem;

    /**
     * @param string $Db 库名
     * @param string $Schema schema名
     * @param string $Table 表名
     * @param string $Conclusion 校验结果
     * @param string $Status 校验状态。仅全量阶段有意义
     * @param integer $Progress 校验进度。仅全量阶段有意义
     * @param integer $RowCount 不一致行数
     * @param string $StartedAt 该表开始校验的时间
     * @param string $FinishedAt 该表校验结束的时间
     * @param string $ExpectedAt 预计该表校验结束的时间
     * @param string $SrcItem 源端行数，如果是行数校验此值有意义
     * @param string $DstItem 目标端行数，如果是行数校验此值有意义
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
