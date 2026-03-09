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
 * 计费项目明细。
 *
 * @method string getPriceName() 获取<p>描述计费项目名称，目前取值</p><li>"DiskSpace"代表云硬盘空间收费项。</li><li>"DiskBackupQuota"代表数据盘备份点配额收费项。</li><li>"Instance"代表实例收费项。</li><li>"SystemDiskBackupQuota"代表系统盘备份点配额收费项。</li>
 * @method void setPriceName(string $PriceName) 设置<p>描述计费项目名称，目前取值</p><li>"DiskSpace"代表云硬盘空间收费项。</li><li>"DiskBackupQuota"代表数据盘备份点配额收费项。</li><li>"Instance"代表实例收费项。</li><li>"SystemDiskBackupQuota"代表系统盘备份点配额收费项。</li>
 * @method float getOriginUnitPrice() 获取<p>计费项维度单价。</p><p>单位：元</p>
 * @method void setOriginUnitPrice(float $OriginUnitPrice) 设置<p>计费项维度单价。</p><p>单位：元</p>
 * @method float getOriginalPrice() 获取<p>计费项维度总价。</p><p>单位：元</p>
 * @method void setOriginalPrice(float $OriginalPrice) 设置<p>计费项维度总价。</p><p>单位：元</p>
 * @method float getDiscount() 获取<p>计费项维度折扣。</p>
 * @method void setDiscount(float $Discount) 设置<p>计费项维度折扣。</p>
 * @method float getDiscountPrice() 获取<p>计费项维度折后总价。</p><p>单位：元</p>
 * @method void setDiscountPrice(float $DiscountPrice) 设置<p>计费项维度折后总价。</p><p>单位：元</p>
 */
class DetailPrice extends AbstractModel
{
    /**
     * @var string <p>描述计费项目名称，目前取值</p><li>"DiskSpace"代表云硬盘空间收费项。</li><li>"DiskBackupQuota"代表数据盘备份点配额收费项。</li><li>"Instance"代表实例收费项。</li><li>"SystemDiskBackupQuota"代表系统盘备份点配额收费项。</li>
     */
    public $PriceName;

    /**
     * @var float <p>计费项维度单价。</p><p>单位：元</p>
     */
    public $OriginUnitPrice;

    /**
     * @var float <p>计费项维度总价。</p><p>单位：元</p>
     */
    public $OriginalPrice;

    /**
     * @var float <p>计费项维度折扣。</p>
     */
    public $Discount;

    /**
     * @var float <p>计费项维度折后总价。</p><p>单位：元</p>
     */
    public $DiscountPrice;

    /**
     * @param string $PriceName <p>描述计费项目名称，目前取值</p><li>"DiskSpace"代表云硬盘空间收费项。</li><li>"DiskBackupQuota"代表数据盘备份点配额收费项。</li><li>"Instance"代表实例收费项。</li><li>"SystemDiskBackupQuota"代表系统盘备份点配额收费项。</li>
     * @param float $OriginUnitPrice <p>计费项维度单价。</p><p>单位：元</p>
     * @param float $OriginalPrice <p>计费项维度总价。</p><p>单位：元</p>
     * @param float $Discount <p>计费项维度折扣。</p>
     * @param float $DiscountPrice <p>计费项维度折后总价。</p><p>单位：元</p>
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
        if (array_key_exists("PriceName",$param) and $param["PriceName"] !== null) {
            $this->PriceName = $param["PriceName"];
        }

        if (array_key_exists("OriginUnitPrice",$param) and $param["OriginUnitPrice"] !== null) {
            $this->OriginUnitPrice = $param["OriginUnitPrice"];
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
    }
}
