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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表示负载均衡的价格
 *
 * @method PostPayPriceInfo getInstancePrice() 获取描述了实例价格，单位：元/小时。
 * @method void setInstancePrice(PostPayPriceInfo $InstancePrice) 设置描述了实例价格，单位：元/小时。
 * @method PostPayPriceInfo getLcuPrice() 获取描述了lcu价格，单位：元/个。
 * @method void setLcuPrice(PostPayPriceInfo $LcuPrice) 设置描述了lcu价格，单位：元/个。
 */
class Price extends AbstractModel
{
    /**
     * @var PostPayPriceInfo 描述了实例价格，单位：元/小时。
     */
    public $InstancePrice;

    /**
     * @var PostPayPriceInfo 描述了lcu价格，单位：元/个。
     */
    public $LcuPrice;

    /**
     * @param PostPayPriceInfo $InstancePrice 描述了实例价格，单位：元/小时。
     * @param PostPayPriceInfo $LcuPrice 描述了lcu价格，单位：元/个。
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
        if (array_key_exists("InstancePrice",$param) and $param["InstancePrice"] !== null) {
            $this->InstancePrice = new PostPayPriceInfo();
            $this->InstancePrice->deserialize($param["InstancePrice"]);
        }

        if (array_key_exists("LcuPrice",$param) and $param["LcuPrice"] !== null) {
            $this->LcuPrice = new PostPayPriceInfo();
            $this->LcuPrice->deserialize($param["LcuPrice"]);
        }
    }
}
