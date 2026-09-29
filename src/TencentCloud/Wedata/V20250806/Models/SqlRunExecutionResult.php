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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单个子查询（对应一条 SQL 语句）的查询结果
 *
 * @method string getJobExecutionId() 获取子查询任务运行ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobExecutionId(string $JobExecutionId) 设置子查询任务运行ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取子查询状态：SUCCESS、FAILED、TERMINATED、CANCELED 等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置子查询状态：SUCCESS、FAILED、TERMINATED、CANCELED 等
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getColumns() 获取结果集字段信息；非查询类语句（INSERT/CREATE 等）为空列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumns(array $Columns) 设置结果集字段信息；非查询类语句（INSERT/CREATE 等）为空列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRows() 获取结果数据行，每个元素的 Values 顺序与 Columns 一致
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRows(array $Rows) 设置结果数据行，每个元素的 Values 顺序与 Columns 一致
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取本子查询的预览结果行数。预览行数上限遵循「项目管理-数据分析配置-单次运行的预览行数上限」，由执行平台在结果产出阶段截断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置本子查询的预览结果行数。预览行数上限遵循「项目管理-数据分析配置-单次运行的预览行数上限」，由执行平台在结果产出阶段截断
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCostMs() 获取本子查询耗时，单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCostMs(integer $CostMs) 设置本子查询耗时，单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getTruncated() 获取本子查询结果是否不完整。返回数据总大小超过 10MB、或结果文件已被清理导致读取不完整时为 true
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTruncated(boolean $Truncated) 设置本子查询结果是否不完整。返回数据总大小超过 10MB、或结果文件已被清理导致读取不完整时为 true
注意：此字段可能返回 null，表示取不到有效值。
 */
class SqlRunExecutionResult extends AbstractModel
{
    /**
     * @var string 子查询任务运行ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobExecutionId;

    /**
     * @var string 子查询状态：SUCCESS、FAILED、TERMINATED、CANCELED 等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var array 结果集字段信息；非查询类语句（INSERT/CREATE 等）为空列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Columns;

    /**
     * @var array 结果数据行，每个元素的 Values 顺序与 Columns 一致
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rows;

    /**
     * @var integer 本子查询的预览结果行数。预览行数上限遵循「项目管理-数据分析配置-单次运行的预览行数上限」，由执行平台在结果产出阶段截断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var integer 本子查询耗时，单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CostMs;

    /**
     * @var boolean 本子查询结果是否不完整。返回数据总大小超过 10MB、或结果文件已被清理导致读取不完整时为 true
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Truncated;

    /**
     * @param string $JobExecutionId 子查询任务运行ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 子查询状态：SUCCESS、FAILED、TERMINATED、CANCELED 等
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Columns 结果集字段信息；非查询类语句（INSERT/CREATE 等）为空列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Rows 结果数据行，每个元素的 Values 顺序与 Columns 一致
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total 本子查询的预览结果行数。预览行数上限遵循「项目管理-数据分析配置-单次运行的预览行数上限」，由执行平台在结果产出阶段截断
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CostMs 本子查询耗时，单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Truncated 本子查询结果是否不完整。返回数据总大小超过 10MB、或结果文件已被清理导致读取不完整时为 true
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
        if (array_key_exists("JobExecutionId",$param) and $param["JobExecutionId"] !== null) {
            $this->JobExecutionId = $param["JobExecutionId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = [];
            foreach ($param["Columns"] as $key => $value){
                $obj = new ResultColumnInfo();
                $obj->deserialize($value);
                array_push($this->Columns, $obj);
            }
        }

        if (array_key_exists("Rows",$param) and $param["Rows"] !== null) {
            $this->Rows = [];
            foreach ($param["Rows"] as $key => $value){
                $obj = new SqlRunResultRow();
                $obj->deserialize($value);
                array_push($this->Rows, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("CostMs",$param) and $param["CostMs"] !== null) {
            $this->CostMs = $param["CostMs"];
        }

        if (array_key_exists("Truncated",$param) and $param["Truncated"] !== null) {
            $this->Truncated = $param["Truncated"];
        }
    }
}
