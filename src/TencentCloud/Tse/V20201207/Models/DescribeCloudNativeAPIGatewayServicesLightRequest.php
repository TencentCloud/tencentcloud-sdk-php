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
 * DescribeCloudNativeAPIGatewayServicesLight请求参数结构体
 *
 * @method string getGatewayId() 获取网关ID
 * @method void setGatewayId(string $GatewayId) 设置网关ID
 * @method integer getLimit() 获取列表数量
 * @method void setLimit(integer $Limit) 设置列表数量
 * @method integer getOffset() 获取列表 offset
 * @method void setOffset(integer $Offset) 设置列表 offset
 * @method array getFilters() 获取过滤条件，多个过滤条件之间是与的关系，支持 id、name、upstreamType
 * @method void setFilters(array $Filters) 设置过滤条件，多个过滤条件之间是与的关系，支持 id、name、upstreamType
 */
class DescribeCloudNativeAPIGatewayServicesLightRequest extends AbstractModel
{
    /**
     * @var string 网关ID
     */
    public $GatewayId;

    /**
     * @var integer 列表数量
     */
    public $Limit;

    /**
     * @var integer 列表 offset
     */
    public $Offset;

    /**
     * @var array 过滤条件，多个过滤条件之间是与的关系，支持 id、name、upstreamType
     */
    public $Filters;

    /**
     * @param string $GatewayId 网关ID
     * @param integer $Limit 列表数量
     * @param integer $Offset 列表 offset
     * @param array $Filters 过滤条件，多个过滤条件之间是与的关系，支持 id、name、upstreamType
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new ListFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
