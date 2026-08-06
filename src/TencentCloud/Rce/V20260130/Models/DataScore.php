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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 风险分信息
 *
 * @method integer getRiskLevel() 获取<p>风险等级</p>
 * @method void setRiskLevel(integer $RiskLevel) 设置<p>风险等级</p>
 * @method array getRiskLabels() 获取<p>风险标签</p>
 * @method void setRiskLabels(array $RiskLabels) 设置<p>风险标签</p>
 * @method integer getRiskScore() 获取<p>综合风险分数。</p><p>取值范围：[1, 1000]</p><p>数值越大，风险越大。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskScore(integer $RiskScore) 设置<p>综合风险分数。</p><p>取值范围：[1, 1000]</p><p>数值越大，风险越大。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DataScore extends AbstractModel
{
    /**
     * @var integer <p>风险等级</p>
     */
    public $RiskLevel;

    /**
     * @var array <p>风险标签</p>
     */
    public $RiskLabels;

    /**
     * @var integer <p>综合风险分数。</p><p>取值范围：[1, 1000]</p><p>数值越大，风险越大。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskScore;

    /**
     * @param integer $RiskLevel <p>风险等级</p>
     * @param array $RiskLabels <p>风险标签</p>
     * @param integer $RiskScore <p>综合风险分数。</p><p>取值范围：[1, 1000]</p><p>数值越大，风险越大。</p>
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
        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("RiskLabels",$param) and $param["RiskLabels"] !== null) {
            $this->RiskLabels = [];
            foreach ($param["RiskLabels"] as $key => $value){
                $obj = new RiskLabel();
                $obj->deserialize($value);
                array_push($this->RiskLabels, $obj);
            }
        }

        if (array_key_exists("RiskScore",$param) and $param["RiskScore"] !== null) {
            $this->RiskScore = $param["RiskScore"];
        }
    }
}
