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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePlatformHTTPServiceRoute请求参数结构体
 *
 * @method string getPlatformId() 获取<p>平台id</p>
 * @method void setPlatformId(string $PlatformId) 设置<p>平台id</p>
 * @method array getFilters() 获取<p>过滤条件。Key的含义参考对应字段，Value精确匹配。可过滤: Domain、Path、DomainType、UpstreamResourceType。可过滤的Values单条不超过100</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件。Key的含义参考对应字段，Value精确匹配。可过滤: Domain、Path、DomainType、UpstreamResourceType。可过滤的Values单条不超过100</p>
 * @method integer getOffset() 获取<p>分页偏移量。默认 0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量。默认 0</p>
 * @method integer getLimit() 获取<p>分页限制。默认20，最大值1000</p>
 * @method void setLimit(integer $Limit) 设置<p>分页限制。默认20，最大值1000</p>
 */
class DescribePlatformHTTPServiceRouteRequest extends AbstractModel
{
    /**
     * @var string <p>平台id</p>
     */
    public $PlatformId;

    /**
     * @var array <p>过滤条件。Key的含义参考对应字段，Value精确匹配。可过滤: Domain、Path、DomainType、UpstreamResourceType。可过滤的Values单条不超过100</p>
     */
    public $Filters;

    /**
     * @var integer <p>分页偏移量。默认 0</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页限制。默认20，最大值1000</p>
     */
    public $Limit;

    /**
     * @param string $PlatformId <p>平台id</p>
     * @param array $Filters <p>过滤条件。Key的含义参考对应字段，Value精确匹配。可过滤: Domain、Path、DomainType、UpstreamResourceType。可过滤的Values单条不超过100</p>
     * @param integer $Offset <p>分页偏移量。默认 0</p>
     * @param integer $Limit <p>分页限制。默认20，最大值1000</p>
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
        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
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
