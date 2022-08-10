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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 计费项目明细。
 *
 * @method string getPriceName() 获取描述计费项目名称，目前取值
<li>"DiskSpace"代表云硬盘空间收费项。</li>
<li>"DiskBackupQuota"代表云硬盘备份点配额收费项。</li>
 * @method void setPriceName(string $PriceName) 设置描述计费项目名称，目前取值
<li>"DiskSpace"代表云硬盘空间收费项。</li>
<li>"DiskBackupQuota"代表云硬盘备份点配额收费项。</li>
 * @method float getOriginUnitPrice() 获取云硬盘计费项维度单价。
 * @method void setOriginUnitPrice(float $OriginUnitPrice) 设置云硬盘计费项维度单价。
 * @method float getOriginalPrice() 获取云硬盘计费项维度总价。
 * @method void setOriginalPrice(float $OriginalPrice) 设置云硬盘计费项维度总价。
 * @method float getDiscount() 获取云硬盘在计费项维度折扣。
 * @method void setDiscount(float $Discount) 设置云硬盘在计费项维度折扣。
 * @method float getDiscountPrice() 获取云硬盘在计费项维度折后总价。
 * @method void setDiscountPrice(float $DiscountPrice) 设置云硬盘在计费项维度折后总价。
 */
class DetailPrice extends AbstractModel
{
    /**
     * @var string 描述计费项目名称，目前取值
<li>"DiskSpace"代表云硬盘空间收费项。</li>
<li>"DiskBackupQuota"代表云硬盘备份点配额收费项。</li>
     */
    public $PriceName;

    /**
     * @var float 云硬盘计费项维度单价。
     */
    public $OriginUnitPrice;

    /**
     * @var float 云硬盘计费项维度总价。
     */
    public $OriginalPrice;

    /**
     * @var float 云硬盘在计费项维度折扣。
     */
    public $Discount;

    /**
     * @var float 云硬盘在计费项维度折后总价。
     */
    public $DiscountPrice;

    /**
     * @param string $PriceName 描述计费项目名称，目前取值
<li>"DiskSpace"代表云硬盘空间收费项。</li>
<li>"DiskBackupQuota"代表云硬盘备份点配额收费项。</li>
     * @param float $OriginUnitPrice 云硬盘计费项维度单价。
     * @param float $OriginalPrice 云硬盘计费项维度总价。
     * @param float $Discount 云硬盘在计费项维度折扣。
     * @param float $DiscountPrice 云硬盘在计费项维度折后总价。
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
