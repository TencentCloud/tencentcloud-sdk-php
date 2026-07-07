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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RefundModelRouterResourcePackage请求参数结构体
 *
 * @method array getModelRouterResourcePackageIds() 获取<p>待退还的模型路由资源包Id</p><p>非有效状态或者设置了自动续订且自动续订已生效的资源包不允许退款。</p>
 * @method void setModelRouterResourcePackageIds(array $ModelRouterResourcePackageIds) 设置<p>待退还的模型路由资源包Id</p><p>非有效状态或者设置了自动续订且自动续订已生效的资源包不允许退款。</p>
 */
class RefundModelRouterResourcePackageRequest extends AbstractModel
{
    /**
     * @var array <p>待退还的模型路由资源包Id</p><p>非有效状态或者设置了自动续订且自动续订已生效的资源包不允许退款。</p>
     */
    public $ModelRouterResourcePackageIds;

    /**
     * @param array $ModelRouterResourcePackageIds <p>待退还的模型路由资源包Id</p><p>非有效状态或者设置了自动续订且自动续订已生效的资源包不允许退款。</p>
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
        if (array_key_exists("ModelRouterResourcePackageIds",$param) and $param["ModelRouterResourcePackageIds"] !== null) {
            $this->ModelRouterResourcePackageIds = $param["ModelRouterResourcePackageIds"];
        }
    }
}
