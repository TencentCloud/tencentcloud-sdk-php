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
 * 云企付-查询账户余额
 *
 * @method string getTotalBalance() 获取总余额，单位分
 * @method void setTotalBalance(string $TotalBalance) 设置总余额，单位分
 * @method string getYesterdayBalance() 获取昨日余额，单位分
 * @method void setYesterdayBalance(string $YesterdayBalance) 设置昨日余额，单位分
 */
class QueryOpenBankBankAccountBalanceResult extends AbstractModel
{
    /**
     * @var string 总余额，单位分
     */
    public $TotalBalance;

    /**
     * @var string 昨日余额，单位分
     */
    public $YesterdayBalance;

    /**
     * @param string $TotalBalance 总余额，单位分
     * @param string $YesterdayBalance 昨日余额，单位分
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
        if (array_key_exists("TotalBalance",$param) and $param["TotalBalance"] !== null) {
            $this->TotalBalance = $param["TotalBalance"];
        }

        if (array_key_exists("YesterdayBalance",$param) and $param["YesterdayBalance"] !== null) {
            $this->YesterdayBalance = $param["YesterdayBalance"];
        }
    }
}
