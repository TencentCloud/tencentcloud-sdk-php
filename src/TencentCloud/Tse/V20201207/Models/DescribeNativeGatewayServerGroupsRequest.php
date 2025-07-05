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
 * DescribeNativeGatewayServerGroups请求参数结构体
 *
 * @method string getGatewayId() 获取云原生API网关实例ID。
 * @method void setGatewayId(string $GatewayId) 设置云原生API网关实例ID。
 * @method integer getOffset() 获取偏移量，默认为 0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为 0。
 * @method integer getLimit() 获取返回数量，默认为 20。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为 20。
 * @method array getFilters() 获取过滤参数，支持按照分组名称、分组ID（Name、GroupId）筛选
 * @method void setFilters(array $Filters) 设置过滤参数，支持按照分组名称、分组ID（Name、GroupId）筛选
 */
class DescribeNativeGatewayServerGroupsRequest extends AbstractModel
{
    /**
     * @var string 云原生API网关实例ID。
     */
    public $GatewayId;

    /**
     * @var integer 偏移量，默认为 0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为 20。
     */
    public $Limit;

    /**
     * @var array 过滤参数，支持按照分组名称、分组ID（Name、GroupId）筛选
     */
    public $Filters;

    /**
     * @param string $GatewayId 云原生API网关实例ID。
     * @param integer $Offset 偏移量，默认为 0。
     * @param integer $Limit 返回数量，默认为 20。
     * @param array $Filters 过滤参数，支持按照分组名称、分组ID（Name、GroupId）筛选
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
