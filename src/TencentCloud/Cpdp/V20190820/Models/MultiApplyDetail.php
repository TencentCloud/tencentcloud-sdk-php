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
 * 分账明细
 *
 * @method string getMerchantNo() 获取商户编号
 * @method void setMerchantNo(string $MerchantNo) 设置商户编号
 * @method string getAmount() 获取分账金额
 * @method void setAmount(string $Amount) 设置分账金额
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 */
class MultiApplyDetail extends AbstractModel
{
    /**
     * @var string 商户编号
     */
    public $MerchantNo;

    /**
     * @var string 分账金额
     */
    public $Amount;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @param string $MerchantNo 商户编号
     * @param string $Amount 分账金额
     * @param string $Remark 备注
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
        if (array_key_exists("MerchantNo",$param) and $param["MerchantNo"] !== null) {
            $this->MerchantNo = $param["MerchantNo"];
        }

        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = $param["Amount"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
