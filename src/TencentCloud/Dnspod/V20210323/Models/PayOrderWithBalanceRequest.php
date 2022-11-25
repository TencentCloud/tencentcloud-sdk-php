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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PayOrderWithBalance请求参数结构体
 *
 * @method array getBigDealIdList() 获取需要支付的大订单号数组
 * @method void setBigDealIdList(array $BigDealIdList) 设置需要支付的大订单号数组
 * @method array getVoucherIdList() 获取代金券ID数组。可以从控制台查到拥有的代金券
 * @method void setVoucherIdList(array $VoucherIdList) 设置代金券ID数组。可以从控制台查到拥有的代金券
 */
class PayOrderWithBalanceRequest extends AbstractModel
{
    /**
     * @var array 需要支付的大订单号数组
     */
    public $BigDealIdList;

    /**
     * @var array 代金券ID数组。可以从控制台查到拥有的代金券
     */
    public $VoucherIdList;

    /**
     * @param array $BigDealIdList 需要支付的大订单号数组
     * @param array $VoucherIdList 代金券ID数组。可以从控制台查到拥有的代金券
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
        if (array_key_exists("BigDealIdList",$param) and $param["BigDealIdList"] !== null) {
            $this->BigDealIdList = $param["BigDealIdList"];
        }

        if (array_key_exists("VoucherIdList",$param) and $param["VoucherIdList"] !== null) {
            $this->VoucherIdList = $param["VoucherIdList"];
        }
    }
}
