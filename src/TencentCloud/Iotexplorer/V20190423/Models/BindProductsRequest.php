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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BindProducts请求参数结构体
 *
 * @method string getGatewayProductId() 获取网关产品ID。
 * @method void setGatewayProductId(string $GatewayProductId) 设置网关产品ID。
 * @method array getProductIds() 获取待绑定的子产品ID数组。
 * @method void setProductIds(array $ProductIds) 设置待绑定的子产品ID数组。
 */
class BindProductsRequest extends AbstractModel
{
    /**
     * @var string 网关产品ID。
     */
    public $GatewayProductId;

    /**
     * @var array 待绑定的子产品ID数组。
     */
    public $ProductIds;

    /**
     * @param string $GatewayProductId 网关产品ID。
     * @param array $ProductIds 待绑定的子产品ID数组。
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
        if (array_key_exists("GatewayProductId",$param) and $param["GatewayProductId"] !== null) {
            $this->GatewayProductId = $param["GatewayProductId"];
        }

        if (array_key_exists("ProductIds",$param) and $param["ProductIds"] !== null) {
            $this->ProductIds = $param["ProductIds"];
        }
    }
}
