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
 * 数据盘价格
 *
 * @method string getDiskId() 获取<p>云硬盘ID。</p>
 * @method void setDiskId(string $DiskId) 设置<p>云硬盘ID。</p>
 * @method float getOriginalDiskPrice() 获取<p>云硬盘单价。</p><p>单位：元</p>
 * @method void setOriginalDiskPrice(float $OriginalDiskPrice) 设置<p>云硬盘单价。</p><p>单位：元</p>
 * @method float getOriginalPrice() 获取<p>云硬盘总价。</p><p>单位：元</p>
 * @method void setOriginalPrice(float $OriginalPrice) 设置<p>云硬盘总价。</p><p>单位：元</p>
 * @method float getDiscount() 获取<p>折扣。</p>
 * @method void setDiscount(float $Discount) 设置<p>折扣。</p>
 * @method float getDiscountPrice() 获取<p>折后总价。</p><p>单位：元</p>
 * @method void setDiscountPrice(float $DiscountPrice) 设置<p>折后总价。</p><p>单位：元</p>
 * @method string getInstanceId() 获取<p>数据盘挂载的实例ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>数据盘挂载的实例ID。</p>
 */
class DataDiskPrice extends AbstractModel
{
    /**
     * @var string <p>云硬盘ID。</p>
     */
    public $DiskId;

    /**
     * @var float <p>云硬盘单价。</p><p>单位：元</p>
     */
    public $OriginalDiskPrice;

    /**
     * @var float <p>云硬盘总价。</p><p>单位：元</p>
     */
    public $OriginalPrice;

    /**
     * @var float <p>折扣。</p>
     */
    public $Discount;

    /**
     * @var float <p>折后总价。</p><p>单位：元</p>
     */
    public $DiscountPrice;

    /**
     * @var string <p>数据盘挂载的实例ID。</p>
     */
    public $InstanceId;

    /**
     * @param string $DiskId <p>云硬盘ID。</p>
     * @param float $OriginalDiskPrice <p>云硬盘单价。</p><p>单位：元</p>
     * @param float $OriginalPrice <p>云硬盘总价。</p><p>单位：元</p>
     * @param float $Discount <p>折扣。</p>
     * @param float $DiscountPrice <p>折后总价。</p><p>单位：元</p>
     * @param string $InstanceId <p>数据盘挂载的实例ID。</p>
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
        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("OriginalDiskPrice",$param) and $param["OriginalDiskPrice"] !== null) {
            $this->OriginalDiskPrice = $param["OriginalDiskPrice"];
        }

        if (array_key_exists("OriginalPrice",$param) and $param["OriginalPrice"] !== null) {
            $this->OriginalPrice = $param["OriginalPrice"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("DiscountPrice",$param) and $param["DiscountPrice"] !== null) {
            $this->DiscountPrice = $param["DiscountPrice"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
