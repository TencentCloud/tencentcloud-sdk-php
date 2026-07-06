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
 * CreateAnalyzePolicyTask请求参数结构体
 *
 * @method array getProducts() 获取产品类型
 * @method void setProducts(array $Products) 设置产品类型
 * @method array getMemberIdSet() 获取成员Id 列表
 * @method void setMemberIdSet(array $MemberIdSet) 设置成员Id 列表
 */
class CreateAnalyzePolicyTaskRequest extends AbstractModel
{
    /**
     * @var array 产品类型
     */
    public $Products;

    /**
     * @var array 成员Id 列表
     */
    public $MemberIdSet;

    /**
     * @param array $Products 产品类型
     * @param array $MemberIdSet 成员Id 列表
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
        if (array_key_exists("Products",$param) and $param["Products"] !== null) {
            $this->Products = $param["Products"];
        }

        if (array_key_exists("MemberIdSet",$param) and $param["MemberIdSet"] !== null) {
            $this->MemberIdSet = $param["MemberIdSet"];
        }
    }
}
