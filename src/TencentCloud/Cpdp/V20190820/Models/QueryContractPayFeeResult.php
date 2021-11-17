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
 * 支付方式费率及自定义表单项
 *
 * @method PayDataResult getPay() 获取pay支付方式json数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPay(PayDataResult $Pay) 设置pay支付方式json数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExtraInput() 获取合同扩展自定义字段
 * @method void setExtraInput(array $ExtraInput) 设置合同扩展自定义字段
 * @method array getPayFee() 获取pay_fee支付方式行业分类费率json数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayFee(array $PayFee) 设置pay_fee支付方式行业分类费率json数据
注意：此字段可能返回 null，表示取不到有效值。
 */
class QueryContractPayFeeResult extends AbstractModel
{
    /**
     * @var PayDataResult pay支付方式json数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Pay;

    /**
     * @var array 合同扩展自定义字段
     */
    public $ExtraInput;

    /**
     * @var array pay_fee支付方式行业分类费率json数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayFee;

    /**
     * @param PayDataResult $Pay pay支付方式json数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExtraInput 合同扩展自定义字段
     * @param array $PayFee pay_fee支付方式行业分类费率json数据
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
        if (array_key_exists("Pay",$param) and $param["Pay"] !== null) {
            $this->Pay = new PayDataResult();
            $this->Pay->deserialize($param["Pay"]);
        }

        if (array_key_exists("ExtraInput",$param) and $param["ExtraInput"] !== null) {
            $this->ExtraInput = $param["ExtraInput"];
        }

        if (array_key_exists("PayFee",$param) and $param["PayFee"] !== null) {
            $this->PayFee = [];
            foreach ($param["PayFee"] as $key => $value){
                $obj = new PayFeeDataResult();
                $obj->deserialize($value);
                array_push($this->PayFee, $obj);
            }
        }
    }
}
