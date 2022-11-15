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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOrganization请求参数结构体
 *
 * @method string getLang() 获取国际站：en，国内站：zh
 * @method void setLang(string $Lang) 设置国际站：en，国内站：zh
 * @method string getProduct() 获取可信服务产品简称。查询是否该可信服务管理员时必须指定
 * @method void setProduct(string $Product) 设置可信服务产品简称。查询是否该可信服务管理员时必须指定
 */
class DescribeOrganizationRequest extends AbstractModel
{
    /**
     * @var string 国际站：en，国内站：zh
     */
    public $Lang;

    /**
     * @var string 可信服务产品简称。查询是否该可信服务管理员时必须指定
     */
    public $Product;

    /**
     * @param string $Lang 国际站：en，国内站：zh
     * @param string $Product 可信服务产品简称。查询是否该可信服务管理员时必须指定
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
        if (array_key_exists("Lang",$param) and $param["Lang"] !== null) {
            $this->Lang = $param["Lang"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
