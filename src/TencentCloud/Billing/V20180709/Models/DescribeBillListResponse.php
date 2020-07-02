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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBillList返回参数结构体
 *
 * @method array getTransactionList() 获取收支明细列表
 * @method void setTransactionList(array $TransactionList) 设置收支明细列表
 * @method integer getTotal() 获取总条数
 * @method void setTotal(integer $Total) 设置总条数
 * @method float getReturnAmount() 获取退费总额，单位（分）
 * @method void setReturnAmount(float $ReturnAmount) 设置退费总额，单位（分）
 * @method float getRechargeAmount() 获取充值总额，单位（分）
 * @method void setRechargeAmount(float $RechargeAmount) 设置充值总额，单位（分）
 * @method float getBlockAmount() 获取冻结总额，单位（分）
 * @method void setBlockAmount(float $BlockAmount) 设置冻结总额，单位（分）
 * @method float getUnblockAmount() 获取解冻总额，单位（分）
 * @method void setUnblockAmount(float $UnblockAmount) 设置解冻总额，单位（分）
 * @method float getDeductAmount() 获取扣费总额，单位（分）
 * @method void setDeductAmount(float $DeductAmount) 设置扣费总额，单位（分）
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBillListResponse extends AbstractModel
{
    /**
     * @var array 收支明细列表
     */
    public $TransactionList;

    /**
     * @var integer 总条数
     */
    public $Total;

    /**
     * @var float 退费总额，单位（分）
     */
    public $ReturnAmount;

    /**
     * @var float 充值总额，单位（分）
     */
    public $RechargeAmount;

    /**
     * @var float 冻结总额，单位（分）
     */
    public $BlockAmount;

    /**
     * @var float 解冻总额，单位（分）
     */
    public $UnblockAmount;

    /**
     * @var float 扣费总额，单位（分）
     */
    public $DeductAmount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $TransactionList 收支明细列表
     * @param integer $Total 总条数
     * @param float $ReturnAmount 退费总额，单位（分）
     * @param float $RechargeAmount 充值总额，单位（分）
     * @param float $BlockAmount 冻结总额，单位（分）
     * @param float $UnblockAmount 解冻总额，单位（分）
     * @param float $DeductAmount 扣费总额，单位（分）
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists('TransactionList',$param) and $param['TransactionList'] !== null) {
            $this->TransactionList = [];
            foreach ($param['TransactionList'] as $key => $value){
                $obj = new BillTransactionInfo();
                $obj->deserialize($value);
                array_push($this->TransactionList, $obj);
            }
        }

        if (array_key_exists('Total',$param) and $param['Total'] !== null) {
            $this->Total = $param['Total'];
        }

        if (array_key_exists('ReturnAmount',$param) and $param['ReturnAmount'] !== null) {
            $this->ReturnAmount = $param['ReturnAmount'];
        }

        if (array_key_exists('RechargeAmount',$param) and $param['RechargeAmount'] !== null) {
            $this->RechargeAmount = $param['RechargeAmount'];
        }

        if (array_key_exists('BlockAmount',$param) and $param['BlockAmount'] !== null) {
            $this->BlockAmount = $param['BlockAmount'];
        }

        if (array_key_exists('UnblockAmount',$param) and $param['UnblockAmount'] !== null) {
            $this->UnblockAmount = $param['UnblockAmount'];
        }

        if (array_key_exists('DeductAmount',$param) and $param['DeductAmount'] !== null) {
            $this->DeductAmount = $param['DeductAmount'];
        }

        if (array_key_exists('RequestId',$param) and $param['RequestId'] !== null) {
            $this->RequestId = $param['RequestId'];
        }
    }
}
