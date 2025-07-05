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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWafProtection请求参数结构体
 *
 * @method string getGatewayId() 获取网关ID
 * @method void setGatewayId(string $GatewayId) 设置网关ID
 * @method string getType() 获取 防护资源的类型。
- Global  实例
- Service  服务
- Route  路由
- Object  对象
 * @method void setType(string $Type) 设置 防护资源的类型。
- Global  实例
- Service  服务
- Route  路由
- Object  对象
 * @method array getTypeList() 获取防护资源类型列表，支持查询多个类型（Global、Service、Route、Object）。为空时，默认查询Global类型。
 * @method void setTypeList(array $TypeList) 设置防护资源类型列表，支持查询多个类型（Global、Service、Route、Object）。为空时，默认查询Global类型。
 */
class DescribeWafProtectionRequest extends AbstractModel
{
    /**
     * @var string 网关ID
     */
    public $GatewayId;

    /**
     * @var string  防护资源的类型。
- Global  实例
- Service  服务
- Route  路由
- Object  对象
     * @deprecated
     */
    public $Type;

    /**
     * @var array 防护资源类型列表，支持查询多个类型（Global、Service、Route、Object）。为空时，默认查询Global类型。
     */
    public $TypeList;

    /**
     * @param string $GatewayId 网关ID
     * @param string $Type  防护资源的类型。
- Global  实例
- Service  服务
- Route  路由
- Object  对象
     * @param array $TypeList 防护资源类型列表，支持查询多个类型（Global、Service、Route、Object）。为空时，默认查询Global类型。
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TypeList",$param) and $param["TypeList"] !== null) {
            $this->TypeList = $param["TypeList"];
        }
    }
}
