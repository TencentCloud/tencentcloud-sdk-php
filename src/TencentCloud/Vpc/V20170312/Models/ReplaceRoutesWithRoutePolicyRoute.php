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
 * 匹配路由接收策略对象
 *
 * @method string getRouteItemId() 获取路由唯一策略ID。
 * @method void setRouteItemId(string $RouteItemId) 设置路由唯一策略ID。
 * @method boolean getForceMatchPolicy() 获取匹配路由接收策略标记。
 * @method void setForceMatchPolicy(boolean $ForceMatchPolicy) 设置匹配路由接收策略标记。
 */
class ReplaceRoutesWithRoutePolicyRoute extends AbstractModel
{
    /**
     * @var string 路由唯一策略ID。
     */
    public $RouteItemId;

    /**
     * @var boolean 匹配路由接收策略标记。
     */
    public $ForceMatchPolicy;

    /**
     * @param string $RouteItemId 路由唯一策略ID。
     * @param boolean $ForceMatchPolicy 匹配路由接收策略标记。
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
        if (array_key_exists("RouteItemId",$param) and $param["RouteItemId"] !== null) {
            $this->RouteItemId = $param["RouteItemId"];
        }

        if (array_key_exists("ForceMatchPolicy",$param) and $param["ForceMatchPolicy"] !== null) {
            $this->ForceMatchPolicy = $param["ForceMatchPolicy"];
        }
    }
}
