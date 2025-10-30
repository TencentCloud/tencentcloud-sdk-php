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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 产品资源
 *
 * @method string getProductResourceId() 获取产品资源ID。
 * @method void setProductResourceId(string $ProductResourceId) 设置产品资源ID。
 * @method string getResourceGrantLast() 获取资源六段式最后一节
 * @method void setResourceGrantLast(string $ResourceGrantLast) 设置资源六段式最后一节
 */
class ProductResource extends AbstractModel
{
    /**
     * @var string 产品资源ID。
     */
    public $ProductResourceId;

    /**
     * @var string 资源六段式最后一节
     * @deprecated
     */
    public $ResourceGrantLast;

    /**
     * @param string $ProductResourceId 产品资源ID。
     * @param string $ResourceGrantLast 资源六段式最后一节
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
        if (array_key_exists("ProductResourceId",$param) and $param["ProductResourceId"] !== null) {
            $this->ProductResourceId = $param["ProductResourceId"];
        }

        if (array_key_exists("ResourceGrantLast",$param) and $param["ResourceGrantLast"] !== null) {
            $this->ResourceGrantLast = $param["ResourceGrantLast"];
        }
    }
}
