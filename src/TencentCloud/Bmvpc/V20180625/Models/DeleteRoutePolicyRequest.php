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
namespace TencentCloud\Bmvpc\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteRoutePolicy请求参数结构体
 *
 * @method string getRouteTableId() 获取路由表ID
 * @method void setRouteTableId(string $RouteTableId) 设置路由表ID
 * @method string getRoutePolicyId() 获取路由表策略ID
 * @method void setRoutePolicyId(string $RoutePolicyId) 设置路由表策略ID
 */
class DeleteRoutePolicyRequest extends AbstractModel
{
    /**
     * @var string 路由表ID
     */
    public $RouteTableId;

    /**
     * @var string 路由表策略ID
     */
    public $RoutePolicyId;

    /**
     * @param string $RouteTableId 路由表ID
     * @param string $RoutePolicyId 路由表策略ID
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
        if (array_key_exists('RouteTableId',$param) and $param['RouteTableId'] !== null) {
            $this->RouteTableId = $param['RouteTableId'];
        }

        if (array_key_exists('RoutePolicyId',$param) and $param['RoutePolicyId'] !== null) {
            $this->RoutePolicyId = $param['RoutePolicyId'];
        }
    }
}
