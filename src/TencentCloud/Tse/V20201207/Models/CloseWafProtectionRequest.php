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
 * CloseWafProtection请求参数结构体
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
 * @method array getList() 获取当资源类型 Type 是 Service 或 Route 的时候，传入的服务或路由的列表
 * @method void setList(array $List) 设置当资源类型 Type 是 Service 或 Route 的时候，传入的服务或路由的列表
 */
class CloseWafProtectionRequest extends AbstractModel
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
     */
    public $Type;

    /**
     * @var array 当资源类型 Type 是 Service 或 Route 的时候，传入的服务或路由的列表
     */
    public $List;

    /**
     * @param string $GatewayId 网关ID
     * @param string $Type  防护资源的类型。
- Global  实例
- Service  服务
- Route  路由
- Object  对象
     * @param array $List 当资源类型 Type 是 Service 或 Route 的时候，传入的服务或路由的列表
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

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = $param["List"];
        }
    }
}
