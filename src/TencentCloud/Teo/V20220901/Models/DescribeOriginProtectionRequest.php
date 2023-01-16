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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOriginProtection请求参数结构体
 *
 * @method array getZoneIds() 获取查询的站点集合，不填默认查询所有站点。
 * @method void setZoneIds(array $ZoneIds) 设置查询的站点集合，不填默认查询所有站点。
 * @method array getFilters() 获取过滤条件，Filters.Values的上限为20。详细的过滤条件如下：
<li>need-update<br>   按照【<strong>站点是否需要更新源站防护IP白名单</strong>】进行过滤。<br>   类型：String<br>   必选：否<br>   可选项：<br>   true：需要更新<br>   false：无需更新<br></li>
<li>plan-support<br>   按照【<strong>站点套餐是否支持源站防护</strong>】进行过滤。<br>   类型：String<br>   必选：否<br>   可选项：<br>   true：支持<br>   false：不支持<br></li>
 * @method void setFilters(array $Filters) 设置过滤条件，Filters.Values的上限为20。详细的过滤条件如下：
<li>need-update<br>   按照【<strong>站点是否需要更新源站防护IP白名单</strong>】进行过滤。<br>   类型：String<br>   必选：否<br>   可选项：<br>   true：需要更新<br>   false：无需更新<br></li>
<li>plan-support<br>   按照【<strong>站点套餐是否支持源站防护</strong>】进行过滤。<br>   类型：String<br>   必选：否<br>   可选项：<br>   true：支持<br>   false：不支持<br></li>
 * @method integer getOffset() 获取分页查询偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置分页查询偏移量，默认为0。
 * @method integer getLimit() 获取分页查询限制数目。默认值：20，最大值：1000。
 * @method void setLimit(integer $Limit) 设置分页查询限制数目。默认值：20，最大值：1000。
 */
class DescribeOriginProtectionRequest extends AbstractModel
{
    /**
     * @var array 查询的站点集合，不填默认查询所有站点。
     */
    public $ZoneIds;

    /**
     * @var array 过滤条件，Filters.Values的上限为20。详细的过滤条件如下：
<li>need-update<br>   按照【<strong>站点是否需要更新源站防护IP白名单</strong>】进行过滤。<br>   类型：String<br>   必选：否<br>   可选项：<br>   true：需要更新<br>   false：无需更新<br></li>
<li>plan-support<br>   按照【<strong>站点套餐是否支持源站防护</strong>】进行过滤。<br>   类型：String<br>   必选：否<br>   可选项：<br>   true：支持<br>   false：不支持<br></li>
     */
    public $Filters;

    /**
     * @var integer 分页查询偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 分页查询限制数目。默认值：20，最大值：1000。
     */
    public $Limit;

    /**
     * @param array $ZoneIds 查询的站点集合，不填默认查询所有站点。
     * @param array $Filters 过滤条件，Filters.Values的上限为20。详细的过滤条件如下：
<li>need-update<br>   按照【<strong>站点是否需要更新源站防护IP白名单</strong>】进行过滤。<br>   类型：String<br>   必选：否<br>   可选项：<br>   true：需要更新<br>   false：无需更新<br></li>
<li>plan-support<br>   按照【<strong>站点套餐是否支持源站防护</strong>】进行过滤。<br>   类型：String<br>   必选：否<br>   可选项：<br>   true：支持<br>   false：不支持<br></li>
     * @param integer $Offset 分页查询偏移量，默认为0。
     * @param integer $Limit 分页查询限制数目。默认值：20，最大值：1000。
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
        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
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
