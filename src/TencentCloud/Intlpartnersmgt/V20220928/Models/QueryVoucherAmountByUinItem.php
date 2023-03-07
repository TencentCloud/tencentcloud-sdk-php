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
 * 子客代金券额度
 *
 * @method integer getClientUin() 获取子客uin
 * @method void setClientUin(integer $ClientUin) 设置子客uin
 * @method float getTotalAmount() 获取代金券额度
 * @method void setTotalAmount(float $TotalAmount) 设置代金券额度
 * @method float getRemainAmount() 获取代金券余额
 * @method void setRemainAmount(float $RemainAmount) 设置代金券余额
 */
class QueryVoucherAmountByUinItem extends AbstractModel
{
    /**
     * @var integer 子客uin
     */
    public $ClientUin;

    /**
     * @var float 代金券额度
     */
    public $TotalAmount;

    /**
     * @var float 代金券余额
     */
    public $RemainAmount;

    /**
     * @param integer $ClientUin 子客uin
     * @param float $TotalAmount 代金券额度
     * @param float $RemainAmount 代金券余额
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
        if (array_key_exists("ClientUin",$param) and $param["ClientUin"] !== null) {
            $this->ClientUin = $param["ClientUin"];
        }

        if (array_key_exists("TotalAmount",$param) and $param["TotalAmount"] !== null) {
            $this->TotalAmount = $param["TotalAmount"];
        }

        if (array_key_exists("RemainAmount",$param) and $param["RemainAmount"] !== null) {
            $this->RemainAmount = $param["RemainAmount"];
        }
    }
}
