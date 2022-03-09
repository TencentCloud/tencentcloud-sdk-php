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
 * 不适用商品信息
 *
 * @method string getGoodsName() 获取不适用商品名称
 * @method void setGoodsName(string $GoodsName) 设置不适用商品名称
 * @method string getPayMode() 获取postPay后付费/prePay预付费/riPay预留实例/空字符串或者"*"表示全部模式。
 * @method void setPayMode(string $PayMode) 设置postPay后付费/prePay预付费/riPay预留实例/空字符串或者"*"表示全部模式。
 */
class ExcludedProducts extends AbstractModel
{
    /**
     * @var string 不适用商品名称
     */
    public $GoodsName;

    /**
     * @var string postPay后付费/prePay预付费/riPay预留实例/空字符串或者"*"表示全部模式。
     */
    public $PayMode;

    /**
     * @param string $GoodsName 不适用商品名称
     * @param string $PayMode postPay后付费/prePay预付费/riPay预留实例/空字符串或者"*"表示全部模式。
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
        if (array_key_exists("GoodsName",$param) and $param["GoodsName"] !== null) {
            $this->GoodsName = $param["GoodsName"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }
    }
}
