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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例价格详细信息
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method InstancePrice getInstancePrice() 获取询价信息。
 * @method void setInstancePrice(InstancePrice $InstancePrice) 设置询价信息。
 * @method array getDiscountDetail() 获取折扣梯度详情，每个梯度包含的信息有：时长，折扣数，总价，折扣价，折扣详情（用户折扣、官网折扣、最终折扣）。
 * @method void setDiscountDetail(array $DiscountDetail) 设置折扣梯度详情，每个梯度包含的信息有：时长，折扣数，总价，折扣价，折扣详情（用户折扣、官网折扣、最终折扣）。
 */
class InstancePriceDetail extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var InstancePrice 询价信息。
     */
    public $InstancePrice;

    /**
     * @var array 折扣梯度详情，每个梯度包含的信息有：时长，折扣数，总价，折扣价，折扣详情（用户折扣、官网折扣、最终折扣）。
     */
    public $DiscountDetail;

    /**
     * @param string $InstanceId 实例ID。
     * @param InstancePrice $InstancePrice 询价信息。
     * @param array $DiscountDetail 折扣梯度详情，每个梯度包含的信息有：时长，折扣数，总价，折扣价，折扣详情（用户折扣、官网折扣、最终折扣）。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstancePrice",$param) and $param["InstancePrice"] !== null) {
            $this->InstancePrice = new InstancePrice();
            $this->InstancePrice->deserialize($param["InstancePrice"]);
        }

        if (array_key_exists("DiscountDetail",$param) and $param["DiscountDetail"] !== null) {
            $this->DiscountDetail = [];
            foreach ($param["DiscountDetail"] as $key => $value){
                $obj = new DiscountDetail();
                $obj->deserialize($value);
                array_push($this->DiscountDetail, $obj);
            }
        }
    }
}
