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
namespace TencentCloud\Fwm\V20250611\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStrategyAccounts请求参数结构体
 *
 * @method string getProduct() 获取下发产品 secgroup // 企业安全组
 * @method void setProduct(string $Product) 设置下发产品 secgroup // 企业安全组
 * @method array getFilters() 获取筛选器
 * @method void setFilters(array $Filters) 设置筛选器
 */
class DescribeStrategyAccountsRequest extends AbstractModel
{
    /**
     * @var string 下发产品 secgroup // 企业安全组
     */
    public $Product;

    /**
     * @var array 筛选器
     */
    public $Filters;

    /**
     * @param string $Product 下发产品 secgroup // 企业安全组
     * @param array $Filters 筛选器
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new CommonFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
