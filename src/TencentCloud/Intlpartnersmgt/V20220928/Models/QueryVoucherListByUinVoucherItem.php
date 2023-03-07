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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 子客代金券数据
 *
 * @method string getVoucherId() 获取券号
 * @method void setVoucherId(string $VoucherId) 设置券号
 * @method string getVoucherStatus() 获取状态
 * @method void setVoucherStatus(string $VoucherStatus) 设置状态
 * @method float getTotalAmount() 获取面额
 * @method void setTotalAmount(float $TotalAmount) 设置面额
 * @method float getRemainAmount() 获取余额
 * @method void setRemainAmount(float $RemainAmount) 设置余额
 */
class QueryVoucherListByUinVoucherItem extends AbstractModel
{
    /**
     * @var string 券号
     */
    public $VoucherId;

    /**
     * @var string 状态
     */
    public $VoucherStatus;

    /**
     * @var float 面额
     */
    public $TotalAmount;

    /**
     * @var float 余额
     */
    public $RemainAmount;

    /**
     * @param string $VoucherId 券号
     * @param string $VoucherStatus 状态
     * @param float $TotalAmount 面额
     * @param float $RemainAmount 余额
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
        if (array_key_exists("VoucherId",$param) and $param["VoucherId"] !== null) {
            $this->VoucherId = $param["VoucherId"];
        }

        if (array_key_exists("VoucherStatus",$param) and $param["VoucherStatus"] !== null) {
            $this->VoucherStatus = $param["VoucherStatus"];
        }

        if (array_key_exists("TotalAmount",$param) and $param["TotalAmount"] !== null) {
            $this->TotalAmount = $param["TotalAmount"];
        }

        if (array_key_exists("RemainAmount",$param) and $param["RemainAmount"] !== null) {
            $this->RemainAmount = $param["RemainAmount"];
        }
    }
}
