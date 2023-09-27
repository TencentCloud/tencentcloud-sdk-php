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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * mongodb慢查模板概览明细
 *
 * @method integer getAvgExecTime() 获取平均执行时间（ms）。
 * @method void setAvgExecTime(integer $AvgExecTime) 设置平均执行时间（ms）。
 * @method integer getAvgDocsExamined() 获取平均扫描行数。
 * @method void setAvgDocsExamined(integer $AvgDocsExamined) 设置平均扫描行数。
 * @method integer getSlowLogCount() 获取产生慢查次数（/天）。
 * @method void setSlowLogCount(integer $SlowLogCount) 设置产生慢查次数（/天）。
 * @method integer getSortCount() 获取内存排序次数。
 * @method void setSortCount(integer $SortCount) 设置内存排序次数。
 * @method array getSlowLogs() 获取慢查模板概览。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSlowLogs(array $SlowLogs) 设置慢查模板概览。
注意：此字段可能返回 null，表示取不到有效值。
 */
class Aggregation extends AbstractModel
{
    /**
     * @var integer 平均执行时间（ms）。
     */
    public $AvgExecTime;

    /**
     * @var integer 平均扫描行数。
     */
    public $AvgDocsExamined;

    /**
     * @var integer 产生慢查次数（/天）。
     */
    public $SlowLogCount;

    /**
     * @var integer 内存排序次数。
     */
    public $SortCount;

    /**
     * @var array 慢查模板概览。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SlowLogs;

    /**
     * @param integer $AvgExecTime 平均执行时间（ms）。
     * @param integer $AvgDocsExamined 平均扫描行数。
     * @param integer $SlowLogCount 产生慢查次数（/天）。
     * @param integer $SortCount 内存排序次数。
     * @param array $SlowLogs 慢查模板概览。
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
        if (array_key_exists("AvgExecTime",$param) and $param["AvgExecTime"] !== null) {
            $this->AvgExecTime = $param["AvgExecTime"];
        }

        if (array_key_exists("AvgDocsExamined",$param) and $param["AvgDocsExamined"] !== null) {
            $this->AvgDocsExamined = $param["AvgDocsExamined"];
        }

        if (array_key_exists("SlowLogCount",$param) and $param["SlowLogCount"] !== null) {
            $this->SlowLogCount = $param["SlowLogCount"];
        }

        if (array_key_exists("SortCount",$param) and $param["SortCount"] !== null) {
            $this->SortCount = $param["SortCount"];
        }

        if (array_key_exists("SlowLogs",$param) and $param["SlowLogs"] !== null) {
            $this->SlowLogs = $param["SlowLogs"];
        }
    }
}
