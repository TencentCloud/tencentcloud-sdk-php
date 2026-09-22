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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConnectorList请求参数结构体
 *
 * @method array getFilters() 获取过滤条件数组，多个 Filter 之间为 AND 关系。支持 Name：Name（名称模糊匹配）/ Status（ACTIVE / DISABLED）/ Source（ENTERPRISE_AGENT / ASSISTANT）
 * @method void setFilters(array $Filters) 设置过滤条件数组，多个 Filter 之间为 AND 关系。支持 Name：Name（名称模糊匹配）/ Status（ACTIVE / DISABLED）/ Source（ENTERPRISE_AGENT / ASSISTANT）
 * @method integer getPageNumber() 获取已废弃：服务端不再读取，请使用 Offset/Limit。字段保留仅为过渡兼容，后续下线
 * @method void setPageNumber(integer $PageNumber) 设置已废弃：服务端不再读取，请使用 Offset/Limit。字段保留仅为过渡兼容，后续下线
 * @method integer getPageSize() 获取已废弃：服务端不再读取，请使用 Offset/Limit。字段保留仅为过渡兼容，后续下线
 * @method void setPageSize(integer $PageSize) 设置已废弃：服务端不再读取，请使用 Offset/Limit。字段保留仅为过渡兼容，后续下线
 * @method integer getOffset() 获取偏移量，0 基准，缺省 0（标准 CAPI 分页参数）
 * @method void setOffset(integer $Offset) 设置偏移量，0 基准，缺省 0（标准 CAPI 分页参数）
 * @method integer getLimit() 获取每页数量，取值 1-100，缺省 20（标准 CAPI 分页参数）
 * @method void setLimit(integer $Limit) 设置每页数量，取值 1-100，缺省 20（标准 CAPI 分页参数）
 */
class DescribeConnectorListRequest extends AbstractModel
{
    /**
     * @var array 过滤条件数组，多个 Filter 之间为 AND 关系。支持 Name：Name（名称模糊匹配）/ Status（ACTIVE / DISABLED）/ Source（ENTERPRISE_AGENT / ASSISTANT）
     */
    public $Filters;

    /**
     * @var integer 已废弃：服务端不再读取，请使用 Offset/Limit。字段保留仅为过渡兼容，后续下线
     */
    public $PageNumber;

    /**
     * @var integer 已废弃：服务端不再读取，请使用 Offset/Limit。字段保留仅为过渡兼容，后续下线
     */
    public $PageSize;

    /**
     * @var integer 偏移量，0 基准，缺省 0（标准 CAPI 分页参数）
     */
    public $Offset;

    /**
     * @var integer 每页数量，取值 1-100，缺省 20（标准 CAPI 分页参数）
     */
    public $Limit;

    /**
     * @param array $Filters 过滤条件数组，多个 Filter 之间为 AND 关系。支持 Name：Name（名称模糊匹配）/ Status（ACTIVE / DISABLED）/ Source（ENTERPRISE_AGENT / ASSISTANT）
     * @param integer $PageNumber 已废弃：服务端不再读取，请使用 Offset/Limit。字段保留仅为过渡兼容，后续下线
     * @param integer $PageSize 已废弃：服务端不再读取，请使用 Offset/Limit。字段保留仅为过渡兼容，后续下线
     * @param integer $Offset 偏移量，0 基准，缺省 0（标准 CAPI 分页参数）
     * @param integer $Limit 每页数量，取值 1-100，缺省 20（标准 CAPI 分页参数）
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
