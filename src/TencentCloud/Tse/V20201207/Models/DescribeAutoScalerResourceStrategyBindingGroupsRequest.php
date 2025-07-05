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
 * DescribeAutoScalerResourceStrategyBindingGroups请求参数结构体
 *
 * @method string getGatewayId() 获取网关实例ID
 * @method void setGatewayId(string $GatewayId) 设置网关实例ID
 * @method string getStrategyId() 获取策略ID
 * @method void setStrategyId(string $StrategyId) 设置策略ID
 * @method integer getOffset() 获取查询偏移量
 * @method void setOffset(integer $Offset) 设置查询偏移量
 * @method integer getLimit() 获取查询数量限制
 * @method void setLimit(integer $Limit) 设置查询数量限制
 */
class DescribeAutoScalerResourceStrategyBindingGroupsRequest extends AbstractModel
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
     * @var integer 查询偏移量
     */
    public $Offset;

    /**
     * @var integer 查询数量限制
     */
    public $Limit;

    /**
     * @param string $GatewayId 网关实例ID
     * @param string $StrategyId 策略ID
     * @param integer $Offset 查询偏移量
     * @param integer $Limit 查询数量限制
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
