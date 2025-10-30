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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 线材收货信息
 *
 * @method string getTypeName() 获取'光纤', '网线', '电源线'
 * @method void setTypeName(string $TypeName) 设置'光纤', '网线', '电源线'
 * @method integer getQuantity() 获取数量
 * @method void setQuantity(integer $Quantity) 设置数量
 * @method string getUnit() 获取'箱', '卷', '套'
 * @method void setUnit(string $Unit) 设置'箱', '卷', '套'
 * @method string getReceiptNumber() 获取收货凭证号
 * @method void setReceiptNumber(string $ReceiptNumber) 设置收货凭证号
 * @method string getHardwareMemo() 获取硬件备注
 * @method void setHardwareMemo(string $HardwareMemo) 设置硬件备注
 */
class WireReceivingInfo extends AbstractModel
{
    /**
     * @var string '光纤', '网线', '电源线'
     */
    public $TypeName;

    /**
     * @var integer 数量
     */
    public $Quantity;

    /**
     * @var string '箱', '卷', '套'
     */
    public $Unit;

    /**
     * @var string 收货凭证号
     */
    public $ReceiptNumber;

    /**
     * @var string 硬件备注
     */
    public $HardwareMemo;

    /**
     * @param string $TypeName '光纤', '网线', '电源线'
     * @param integer $Quantity 数量
     * @param string $Unit '箱', '卷', '套'
     * @param string $ReceiptNumber 收货凭证号
     * @param string $HardwareMemo 硬件备注
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
        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("Quantity",$param) and $param["Quantity"] !== null) {
            $this->Quantity = $param["Quantity"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("ReceiptNumber",$param) and $param["ReceiptNumber"] !== null) {
            $this->ReceiptNumber = $param["ReceiptNumber"];
        }

        if (array_key_exists("HardwareMemo",$param) and $param["HardwareMemo"] !== null) {
            $this->HardwareMemo = $param["HardwareMemo"];
        }
    }
}
