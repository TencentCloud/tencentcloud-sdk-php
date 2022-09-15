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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 税前金额结果
 *
 * @method string getAmountBeforeTax() 获取税前金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAmountBeforeTax(string $AmountBeforeTax) 设置税前金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAmountBeforeTaxWithTwoDigitPrecision() 获取两位精度税前金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAmountBeforeTaxWithTwoDigitPrecision(string $AmountBeforeTaxWithTwoDigitPrecision) 设置两位精度税前金额
注意：此字段可能返回 null，表示取不到有效值。
 */
class AmountBeforeTaxResult extends AbstractModel
{
    /**
     * @var string 税前金额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AmountBeforeTax;

    /**
     * @var string 两位精度税前金额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AmountBeforeTaxWithTwoDigitPrecision;

    /**
     * @param string $AmountBeforeTax 税前金额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AmountBeforeTaxWithTwoDigitPrecision 两位精度税前金额
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
        if (array_key_exists("AmountBeforeTax",$param) and $param["AmountBeforeTax"] !== null) {
            $this->AmountBeforeTax = $param["AmountBeforeTax"];
        }

        if (array_key_exists("AmountBeforeTaxWithTwoDigitPrecision",$param) and $param["AmountBeforeTaxWithTwoDigitPrecision"] !== null) {
            $this->AmountBeforeTaxWithTwoDigitPrecision = $param["AmountBeforeTaxWithTwoDigitPrecision"];
        }
    }
}
