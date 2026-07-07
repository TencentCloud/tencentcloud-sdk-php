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
 * 模型路由资源包退款价格
 *
 * @method string getModelRouterPackageId() 获取<p>模型路由资源包Id</p>
 * @method void setModelRouterPackageId(string $ModelRouterPackageId) 设置<p>模型路由资源包Id</p>
 * @method float getPrice() 获取<p>可退还金额</p>
 * @method void setPrice(float $Price) 设置<p>可退还金额</p>
 */
class ModelRouterResourcePackageRefundPrice extends AbstractModel
{
    /**
     * @var string <p>模型路由资源包Id</p>
     */
    public $ModelRouterPackageId;

    /**
     * @var float <p>可退还金额</p>
     */
    public $Price;

    /**
     * @param string $ModelRouterPackageId <p>模型路由资源包Id</p>
     * @param float $Price <p>可退还金额</p>
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
        if (array_key_exists("ModelRouterPackageId",$param) and $param["ModelRouterPackageId"] !== null) {
            $this->ModelRouterPackageId = $param["ModelRouterPackageId"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }
    }
}
