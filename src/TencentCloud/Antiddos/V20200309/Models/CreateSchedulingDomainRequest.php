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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSchedulingDomain请求参数结构体
 *
 * @method string getProduct() 获取代表是否混合云本地化的产品。
hybrid: 宙斯盾本地化
不填写：其他
 * @method void setProduct(string $Product) 设置代表是否混合云本地化的产品。
hybrid: 宙斯盾本地化
不填写：其他
 */
class CreateSchedulingDomainRequest extends AbstractModel
{
    /**
     * @var string 代表是否混合云本地化的产品。
hybrid: 宙斯盾本地化
不填写：其他
     */
    public $Product;

    /**
     * @param string $Product 代表是否混合云本地化的产品。
hybrid: 宙斯盾本地化
不填写：其他
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
    }
}
