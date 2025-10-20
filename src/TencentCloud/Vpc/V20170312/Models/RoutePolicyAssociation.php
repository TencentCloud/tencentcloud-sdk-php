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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 路由接收策略绑定。用来绑定路由表和路由接收策略以及绑定的优先级。
 *
 * @method string getRouteTableId() 获取路由表唯一ID。
 * @method void setRouteTableId(string $RouteTableId) 设置路由表唯一ID。
 * @method string getRoutePolicyId() 获取路由接收策略唯一ID。
 * @method void setRoutePolicyId(string $RoutePolicyId) 设置路由接收策略唯一ID。
 * @method integer getPriority() 获取优先级。
 * @method void setPriority(integer $Priority) 设置优先级。
 */
class RoutePolicyAssociation extends AbstractModel
{
    /**
     * @var string 路由表唯一ID。
     */
    public $RouteTableId;

    /**
     * @var string 路由接收策略唯一ID。
     */
    public $RoutePolicyId;

    /**
     * @var integer 优先级。
     */
    public $Priority;

    /**
     * @param string $RouteTableId 路由表唯一ID。
     * @param string $RoutePolicyId 路由接收策略唯一ID。
     * @param integer $Priority 优先级。
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
        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }

        if (array_key_exists("RoutePolicyId",$param) and $param["RoutePolicyId"] !== null) {
            $this->RoutePolicyId = $param["RoutePolicyId"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }
    }
}
