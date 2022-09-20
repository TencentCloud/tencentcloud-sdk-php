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
 * DescribeHostCertificates请求参数结构体
 *
 * @method array getFilters() 获取过滤条件，Filters.Values的上限为20。详细的过滤条件如下：
<li>zone-id<br>   按照【<strong>站点ID</strong>】进行过滤。站点ID形如：zone-xxx。<br>   类型：String<br>   必选：是<li>host<br>   按照【<strong>域名名称</strong>】进行过滤。<br>   类型：String<br>   必选：否<li>cert-id<br>   按照【<strong>证书ID</strong>】进行过滤。<br>   类型：String<br>   必选：否<li>cert-alias<br>   按照【<strong>证书名称</strong>】进行过滤。<br>   类型：String<br>   必选：否<li>cert-type<br>   按照【<strong>证书类型</strong>】进行过滤。<br>   类型：String<br>   必选：否
 * @method void setFilters(array $Filters) 设置过滤条件，Filters.Values的上限为20。详细的过滤条件如下：
<li>zone-id<br>   按照【<strong>站点ID</strong>】进行过滤。站点ID形如：zone-xxx。<br>   类型：String<br>   必选：是<li>host<br>   按照【<strong>域名名称</strong>】进行过滤。<br>   类型：String<br>   必选：否<li>cert-id<br>   按照【<strong>证书ID</strong>】进行过滤。<br>   类型：String<br>   必选：否<li>cert-alias<br>   按照【<strong>证书名称</strong>】进行过滤。<br>   类型：String<br>   必选：否<li>cert-type<br>   按照【<strong>证书类型</strong>】进行过滤。<br>   类型：String<br>   必选：否
 * @method integer getOffset() 获取分页查询偏移量，默认为 0。
 * @method void setOffset(integer $Offset) 设置分页查询偏移量，默认为 0。
 * @method integer getLimit() 获取分页查询限制数目，默认为 100，最大可设置为 1000。
 * @method void setLimit(integer $Limit) 设置分页查询限制数目，默认为 100，最大可设置为 1000。
 * @method Sort getSort() 获取排序方式。详细排序条件如下：
<li>create-time：域名创建时间；</li>
<li>cert-expire-time：证书过期时间；</li>
<li>cert-deploy-time：证书部署时间。</li>
 * @method void setSort(Sort $Sort) 设置排序方式。详细排序条件如下：
<li>create-time：域名创建时间；</li>
<li>cert-expire-time：证书过期时间；</li>
<li>cert-deploy-time：证书部署时间。</li>
 */
class DescribeHostCertificatesRequest extends AbstractModel
{
    /**
     * @var array 过滤条件，Filters.Values的上限为20。详细的过滤条件如下：
<li>zone-id<br>   按照【<strong>站点ID</strong>】进行过滤。站点ID形如：zone-xxx。<br>   类型：String<br>   必选：是<li>host<br>   按照【<strong>域名名称</strong>】进行过滤。<br>   类型：String<br>   必选：否<li>cert-id<br>   按照【<strong>证书ID</strong>】进行过滤。<br>   类型：String<br>   必选：否<li>cert-alias<br>   按照【<strong>证书名称</strong>】进行过滤。<br>   类型：String<br>   必选：否<li>cert-type<br>   按照【<strong>证书类型</strong>】进行过滤。<br>   类型：String<br>   必选：否
     */
    public $Filters;

    /**
     * @var integer 分页查询偏移量，默认为 0。
     */
    public $Offset;

    /**
     * @var integer 分页查询限制数目，默认为 100，最大可设置为 1000。
     */
    public $Limit;

    /**
     * @var Sort 排序方式。详细排序条件如下：
<li>create-time：域名创建时间；</li>
<li>cert-expire-time：证书过期时间；</li>
<li>cert-deploy-time：证书部署时间。</li>
     */
    public $Sort;

    /**
     * @param array $Filters 过滤条件，Filters.Values的上限为20。详细的过滤条件如下：
<li>zone-id<br>   按照【<strong>站点ID</strong>】进行过滤。站点ID形如：zone-xxx。<br>   类型：String<br>   必选：是<li>host<br>   按照【<strong>域名名称</strong>】进行过滤。<br>   类型：String<br>   必选：否<li>cert-id<br>   按照【<strong>证书ID</strong>】进行过滤。<br>   类型：String<br>   必选：否<li>cert-alias<br>   按照【<strong>证书名称</strong>】进行过滤。<br>   类型：String<br>   必选：否<li>cert-type<br>   按照【<strong>证书类型</strong>】进行过滤。<br>   类型：String<br>   必选：否
     * @param integer $Offset 分页查询偏移量，默认为 0。
     * @param integer $Limit 分页查询限制数目，默认为 100，最大可设置为 1000。
     * @param Sort $Sort 排序方式。详细排序条件如下：
<li>create-time：域名创建时间；</li>
<li>cert-expire-time：证书过期时间；</li>
<li>cert-deploy-time：证书部署时间。</li>
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
                $obj = new AdvancedFilter();
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

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = new Sort();
            $this->Sort->deserialize($param["Sort"]);
        }
    }
}
