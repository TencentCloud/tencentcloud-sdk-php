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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 一致性校验摘要信息
 *
 * @method string getConclusion() 获取对比结论: same,different
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConclusion(string $Conclusion) 设置对比结论: same,different
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取任务状态: success,failed
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置任务状态: success,failed
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalTables() 获取总的表数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalTables(integer $TotalTables) 设置总的表数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCheckedTables() 获取已校验的表数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckedTables(integer $CheckedTables) 设置已校验的表数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDifferentTables() 获取不一致的表数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDifferentTables(integer $DifferentTables) 设置不一致的表数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSkippedTables() 获取跳过校验的表数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSkippedTables(integer $SkippedTables) 设置跳过校验的表数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDifferentRows() 获取不一致的数据行数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDifferentRows(integer $DifferentRows) 设置不一致的数据行数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class CompareAbstractInfo extends AbstractModel
{
    /**
     * @var string 对比结论: same,different
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Conclusion;

    /**
     * @var string 任务状态: success,failed
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 总的表数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalTables;

    /**
     * @var integer 已校验的表数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckedTables;

    /**
     * @var integer 不一致的表数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DifferentTables;

    /**
     * @var integer 跳过校验的表数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SkippedTables;

    /**
     * @var integer 不一致的数据行数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DifferentRows;

    /**
     * @param string $Conclusion 对比结论: same,different
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 任务状态: success,failed
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalTables 总的表数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CheckedTables 已校验的表数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DifferentTables 不一致的表数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SkippedTables 跳过校验的表数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DifferentRows 不一致的数据行数量
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
        if (array_key_exists("Conclusion",$param) and $param["Conclusion"] !== null) {
            $this->Conclusion = $param["Conclusion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TotalTables",$param) and $param["TotalTables"] !== null) {
            $this->TotalTables = $param["TotalTables"];
        }

        if (array_key_exists("CheckedTables",$param) and $param["CheckedTables"] !== null) {
            $this->CheckedTables = $param["CheckedTables"];
        }

        if (array_key_exists("DifferentTables",$param) and $param["DifferentTables"] !== null) {
            $this->DifferentTables = $param["DifferentTables"];
        }

        if (array_key_exists("SkippedTables",$param) and $param["SkippedTables"] !== null) {
            $this->SkippedTables = $param["SkippedTables"];
        }

        if (array_key_exists("DifferentRows",$param) and $param["DifferentRows"] !== null) {
            $this->DifferentRows = $param["DifferentRows"];
        }
    }
}
