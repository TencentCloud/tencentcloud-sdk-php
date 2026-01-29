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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 推理集群费用数据结构体
 *
 * @method ItemPrice getServicePrice() 获取推理集群价格信息	
 * @method void setServicePrice(ItemPrice $ServicePrice) 设置推理集群价格信息	
 */
class ServicePriceDetail extends AbstractModel
{
    /**
     * @var ItemPrice 推理集群价格信息	
     */
    public $ServicePrice;

    /**
     * @param ItemPrice $ServicePrice 推理集群价格信息	
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
        if (array_key_exists("ServicePrice",$param) and $param["ServicePrice"] !== null) {
            $this->ServicePrice = new ItemPrice();
            $this->ServicePrice->deserialize($param["ServicePrice"]);
        }
    }
}
