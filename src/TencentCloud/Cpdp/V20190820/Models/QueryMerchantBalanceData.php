<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
 * 对接账户余额查询数据
 *
 * @method string getCurrency() 获取余额币种
 * @method void setCurrency(string $Currency) 设置余额币种
 * @method string getBalance() 获取账户余额
 * @method void setBalance(string $Balance) 设置账户余额
 * @method string getMerchantId() 获取商户ID
 * @method void setMerchantId(string $MerchantId) 设置商户ID
 */
class QueryMerchantBalanceData extends AbstractModel
{
    /**
     * @var string 余额币种
     */
    public $Currency;

    /**
     * @var string 账户余额
     */
    public $Balance;

    /**
     * @var string 商户ID
     */
    public $MerchantId;

    /**
     * @param string $Currency 余额币种
     * @param string $Balance 账户余额
     * @param string $MerchantId 商户ID
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
        if (array_key_exists('Currency',$param) and $param['Currency'] !== null) {
            $this->Currency = $param['Currency'];
        }

        if (array_key_exists('Balance',$param) and $param['Balance'] !== null) {
            $this->Balance = $param['Balance'];
        }

        if (array_key_exists('MerchantId',$param) and $param['MerchantId'] !== null) {
            $this->MerchantId = $param['MerchantId'];
        }
    }
}
