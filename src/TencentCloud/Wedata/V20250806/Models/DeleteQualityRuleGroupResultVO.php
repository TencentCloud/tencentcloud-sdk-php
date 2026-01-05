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
 * 批量规则操作的返回信息
 *
 * @method integer getSumCount() 获取总条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSumCount(integer $SumCount) 设置总条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSuccessCount() 获取成功条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessCount(integer $SuccessCount) 设置成功条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFailedCount() 获取失败条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailedCount(integer $FailedCount) 设置失败条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResults() 获取操作详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResults(array $Results) 设置操作详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeleteQualityRuleGroupResultVO extends AbstractModel
{
    /**
     * @var integer 总条数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SumCount;

    /**
     * @var integer 成功条数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessCount;

    /**
     * @var integer 失败条数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailedCount;

    /**
     * @var array 操作详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Results;

    /**
     * @param integer $SumCount 总条数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SuccessCount 成功条数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FailedCount 失败条数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Results 操作详情
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
        if (array_key_exists("SumCount",$param) and $param["SumCount"] !== null) {
            $this->SumCount = $param["SumCount"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("FailedCount",$param) and $param["FailedCount"] !== null) {
            $this->FailedCount = $param["FailedCount"];
        }

        if (array_key_exists("Results",$param) and $param["Results"] !== null) {
            $this->Results = [];
            foreach ($param["Results"] as $key => $value){
                $obj = new CommonQualityOperateResult();
                $obj->deserialize($value);
                array_push($this->Results, $obj);
            }
        }
    }
}
