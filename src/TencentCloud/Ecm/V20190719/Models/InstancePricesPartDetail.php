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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述实例的价格相关
 *
 * @method PriceDetail getCpuPrice() 获取cpu的价格信息
 * @method void setCpuPrice(PriceDetail $CpuPrice) 设置cpu的价格信息
 * @method PriceDetail getMemPrice() 获取内存价格信息
 * @method void setMemPrice(PriceDetail $MemPrice) 设置内存价格信息
 * @method PriceDetail getDisksPrice() 获取磁盘价格信息
 * @method void setDisksPrice(PriceDetail $DisksPrice) 设置磁盘价格信息
 */
class InstancePricesPartDetail extends AbstractModel
{
    /**
     * @var PriceDetail cpu的价格信息
     */
    public $CpuPrice;

    /**
     * @var PriceDetail 内存价格信息
     */
    public $MemPrice;

    /**
     * @var PriceDetail 磁盘价格信息
     */
    public $DisksPrice;

    /**
     * @param PriceDetail $CpuPrice cpu的价格信息
     * @param PriceDetail $MemPrice 内存价格信息
     * @param PriceDetail $DisksPrice 磁盘价格信息
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
        if (array_key_exists("CpuPrice",$param) and $param["CpuPrice"] !== null) {
            $this->CpuPrice = new PriceDetail();
            $this->CpuPrice->deserialize($param["CpuPrice"]);
        }

        if (array_key_exists("MemPrice",$param) and $param["MemPrice"] !== null) {
            $this->MemPrice = new PriceDetail();
            $this->MemPrice->deserialize($param["MemPrice"]);
        }

        if (array_key_exists("DisksPrice",$param) and $param["DisksPrice"] !== null) {
            $this->DisksPrice = new PriceDetail();
            $this->DisksPrice->deserialize($param["DisksPrice"]);
        }
    }
}
