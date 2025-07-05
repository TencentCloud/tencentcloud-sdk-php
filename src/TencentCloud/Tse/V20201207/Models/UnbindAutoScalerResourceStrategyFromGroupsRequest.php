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
 * UnbindAutoScalerResourceStrategyFromGroups请求参数结构体
 *
 * @method string getGatewayId() 获取网关实例ID
 * @method void setGatewayId(string $GatewayId) 设置网关实例ID
 * @method string getStrategyId() 获取策略ID
 * @method void setStrategyId(string $StrategyId) 设置策略ID
 * @method array getGroupIds() 获取网关分组ID列表
 * @method void setGroupIds(array $GroupIds) 设置网关分组ID列表
 */
class UnbindAutoScalerResourceStrategyFromGroupsRequest extends AbstractModel
{
    /**
     * @var string 网关实例ID
     */
    public $GatewayId;

    /**
     * @var string 策略ID
     */
    public $StrategyId;

    /**
     * @var array 网关分组ID列表
     */
    public $GroupIds;

    /**
     * @param string $GatewayId 网关实例ID
     * @param string $StrategyId 策略ID
     * @param array $GroupIds 网关分组ID列表
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

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }
    }
}
