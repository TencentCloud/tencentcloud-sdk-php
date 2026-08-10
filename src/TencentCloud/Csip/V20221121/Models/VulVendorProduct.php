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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 漏洞影响厂商和产品
 *
 * @method string getVendor() 获取<p>供应商</p>
 * @method void setVendor(string $Vendor) 设置<p>供应商</p>
 * @method string getProduct() 获取<p>产品名称</p>
 * @method void setProduct(string $Product) 设置<p>产品名称</p>
 * @method array getVersionRange() 获取<p>影响版本</p>
 * @method void setVersionRange(array $VersionRange) 设置<p>影响版本</p>
 */
class VulVendorProduct extends AbstractModel
{
    /**
     * @var string <p>供应商</p>
     */
    public $Vendor;

    /**
     * @var string <p>产品名称</p>
     */
    public $Product;

    /**
     * @var array <p>影响版本</p>
     */
    public $VersionRange;

    /**
     * @param string $Vendor <p>供应商</p>
     * @param string $Product <p>产品名称</p>
     * @param array $VersionRange <p>影响版本</p>
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
        if (array_key_exists("Vendor",$param) and $param["Vendor"] !== null) {
            $this->Vendor = $param["Vendor"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("VersionRange",$param) and $param["VersionRange"] !== null) {
            $this->VersionRange = $param["VersionRange"];
        }
    }
}
