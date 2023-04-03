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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVpnGatewayRoutes请求参数结构体
 *
 * @method string getVpnGatewayId() 获取VPN网关实例ID。
 * @method void setVpnGatewayId(string $VpnGatewayId) 设置VPN网关实例ID。
 * @method array getFilters() 获取过滤条件,  条件包括(DestinationCidr, InstanceId,InstanceType)。
 * @method void setFilters(array $Filters) 设置过滤条件,  条件包括(DestinationCidr, InstanceId,InstanceType)。
 * @method integer getOffset() 获取偏移量, 默认0。
 * @method void setOffset(integer $Offset) 设置偏移量, 默认0。
 * @method integer getLimit() 获取单页个数, 默认20, 最大值100。
 * @method void setLimit(integer $Limit) 设置单页个数, 默认20, 最大值100。
 */
class DescribeVpnGatewayRoutesRequest extends AbstractModel
{
    /**
     * @var string VPN网关实例ID。
     */
    public $VpnGatewayId;

    /**
     * @var array 过滤条件,  条件包括(DestinationCidr, InstanceId,InstanceType)。
     */
    public $Filters;

    /**
     * @var integer 偏移量, 默认0。
     */
    public $Offset;

    /**
     * @var integer 单页个数, 默认20, 最大值100。
     */
    public $Limit;

    /**
     * @param string $VpnGatewayId VPN网关实例ID。
     * @param array $Filters 过滤条件,  条件包括(DestinationCidr, InstanceId,InstanceType)。
     * @param integer $Offset 偏移量, 默认0。
     * @param integer $Limit 单页个数, 默认20, 最大值100。
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
        if (array_key_exists("VpnGatewayId",$param) and $param["VpnGatewayId"] !== null) {
            $this->VpnGatewayId = $param["VpnGatewayId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
