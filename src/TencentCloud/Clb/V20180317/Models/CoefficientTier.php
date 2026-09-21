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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 积分分档配置
 *
 * @method CoefficientTierCondition getCondition() 获取<p>积分分级条件</p>
 * @method void setCondition(CoefficientTierCondition $Condition) 设置<p>积分分级条件</p>
 * @method Coefficient getCoefficient() 获取<p>积分系数</p>
 * @method void setCoefficient(Coefficient $Coefficient) 设置<p>积分系数</p>
 */
class CoefficientTier extends AbstractModel
{
    /**
     * @var CoefficientTierCondition <p>积分分级条件</p>
     */
    public $Condition;

    /**
     * @var Coefficient <p>积分系数</p>
     */
    public $Coefficient;

    /**
     * @param CoefficientTierCondition $Condition <p>积分分级条件</p>
     * @param Coefficient $Coefficient <p>积分系数</p>
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
        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = new CoefficientTierCondition();
            $this->Condition->deserialize($param["Condition"]);
        }

        if (array_key_exists("Coefficient",$param) and $param["Coefficient"] !== null) {
            $this->Coefficient = new Coefficient();
            $this->Coefficient->deserialize($param["Coefficient"]);
        }
    }
}
