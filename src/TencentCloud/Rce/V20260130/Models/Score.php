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
 * 风险分
 *
 * @method integer getRiskScore() 获取<p>风险分值，范围[1, 1000]，分值越大，风险越高</p>
 * @method void setRiskScore(integer $RiskScore) 设置<p>风险分值，范围[1, 1000]，分值越大，风险越高</p>
 * @method array getRiskLabels() 获取<p>风险标签</p>
 * @method void setRiskLabels(array $RiskLabels) 设置<p>风险标签</p>
 */
class Score extends AbstractModel
{
    /**
     * @var integer <p>风险分值，范围[1, 1000]，分值越大，风险越高</p>
     */
    public $RiskScore;

    /**
     * @var array <p>风险标签</p>
     */
    public $RiskLabels;

    /**
     * @param integer $RiskScore <p>风险分值，范围[1, 1000]，分值越大，风险越高</p>
     * @param array $RiskLabels <p>风险标签</p>
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
        if (array_key_exists("RiskScore",$param) and $param["RiskScore"] !== null) {
            $this->RiskScore = $param["RiskScore"];
        }

        if (array_key_exists("RiskLabels",$param) and $param["RiskLabels"] !== null) {
            $this->RiskLabels = [];
            foreach ($param["RiskLabels"] as $key => $value){
                $obj = new RiskLabel();
                $obj->deserialize($value);
                array_push($this->RiskLabels, $obj);
            }
        }
    }
}
