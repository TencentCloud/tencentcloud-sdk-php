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
 * DispatchStrategy请求参数结构体
 *
 * @method integer getStatus() 获取1:下发，2:中止
 * @method void setStatus(integer $Status) 设置1:下发，2:中止
 * @method string getProduct() 获取产品
 * @method void setProduct(string $Product) 设置产品
 */
class DispatchStrategyRequest extends AbstractModel
{
    /**
     * @var integer 1:下发，2:中止
     */
    public $Status;

    /**
     * @var string 产品
     */
    public $Product;

    /**
     * @param integer $Status 1:下发，2:中止
     * @param string $Product 产品
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
