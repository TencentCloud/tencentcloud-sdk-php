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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourcePoolPacks请求参数结构体
 *
 * @method integer getMaxResults() 获取返回数量，默认值为10，最小值为10，最大值为100。
 * @method void setMaxResults(integer $MaxResults) 设置返回数量，默认值为10，最小值为10，最大值为100。
 * @method string getNextToken() 获取分页标记，用于获取下一页数据。
 * @method void setNextToken(string $NextToken) 设置分页标记，用于获取下一页数据。
 * @method array getFilters() 获取<li><strong>dedicated-resource-pack-id</strong></li>
<p style="padding-left: 30px;">按照【<strong>实例资源池ID</strong>】进行过滤。形如：rpp-rn99mzt2。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p>
<li><strong>zone</strong></li>
<p style="padding-left: 30px;">按照【<strong>可用区</strong>】进行过滤。形如：ap-guangzhou-6。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><p style="padding-left: 30px;">可选项：<a href="https://cloud.tencent.com/document/product/213/6091">可用区列表</a></p>
<li><strong>instance-family</strong></li>
<p style="padding-left: 30px;">按照【<strong>实例类型</strong>】进行过滤。形如：SA9。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p>
<li><strong>instance-type</strong></li>
<p style="padding-left: 30px;">按照【<strong>实例规格</strong>】进行过滤。形如：SA9.96XLARGE1152。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p>
<li><strong>status</strong></li>
<p style="padding-left: 30px;">按照【<strong>实例资源池状态</strong>】进行过滤。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><p style="padding-left: 30px;">可选项：CREATING (创建中) | ACTIVE (运行中) | RETIRED (已过期)</p>
每次请求的`Filters`的上限为10。
 * @method void setFilters(array $Filters) 设置<li><strong>dedicated-resource-pack-id</strong></li>
<p style="padding-left: 30px;">按照【<strong>实例资源池ID</strong>】进行过滤。形如：rpp-rn99mzt2。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p>
<li><strong>zone</strong></li>
<p style="padding-left: 30px;">按照【<strong>可用区</strong>】进行过滤。形如：ap-guangzhou-6。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><p style="padding-left: 30px;">可选项：<a href="https://cloud.tencent.com/document/product/213/6091">可用区列表</a></p>
<li><strong>instance-family</strong></li>
<p style="padding-left: 30px;">按照【<strong>实例类型</strong>】进行过滤。形如：SA9。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p>
<li><strong>instance-type</strong></li>
<p style="padding-left: 30px;">按照【<strong>实例规格</strong>】进行过滤。形如：SA9.96XLARGE1152。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p>
<li><strong>status</strong></li>
<p style="padding-left: 30px;">按照【<strong>实例资源池状态</strong>】进行过滤。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><p style="padding-left: 30px;">可选项：CREATING (创建中) | ACTIVE (运行中) | RETIRED (已过期)</p>
每次请求的`Filters`的上限为10。
 */
class DescribeResourcePoolPacksRequest extends AbstractModel
{
    /**
     * @var integer 返回数量，默认值为10，最小值为10，最大值为100。
     */
    public $MaxResults;

    /**
     * @var string 分页标记，用于获取下一页数据。
     */
    public $NextToken;

    /**
     * @var array <li><strong>dedicated-resource-pack-id</strong></li>
<p style="padding-left: 30px;">按照【<strong>实例资源池ID</strong>】进行过滤。形如：rpp-rn99mzt2。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p>
<li><strong>zone</strong></li>
<p style="padding-left: 30px;">按照【<strong>可用区</strong>】进行过滤。形如：ap-guangzhou-6。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><p style="padding-left: 30px;">可选项：<a href="https://cloud.tencent.com/document/product/213/6091">可用区列表</a></p>
<li><strong>instance-family</strong></li>
<p style="padding-left: 30px;">按照【<strong>实例类型</strong>】进行过滤。形如：SA9。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p>
<li><strong>instance-type</strong></li>
<p style="padding-left: 30px;">按照【<strong>实例规格</strong>】进行过滤。形如：SA9.96XLARGE1152。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p>
<li><strong>status</strong></li>
<p style="padding-left: 30px;">按照【<strong>实例资源池状态</strong>】进行过滤。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><p style="padding-left: 30px;">可选项：CREATING (创建中) | ACTIVE (运行中) | RETIRED (已过期)</p>
每次请求的`Filters`的上限为10。
     */
    public $Filters;

    /**
     * @param integer $MaxResults 返回数量，默认值为10，最小值为10，最大值为100。
     * @param string $NextToken 分页标记，用于获取下一页数据。
     * @param array $Filters <li><strong>dedicated-resource-pack-id</strong></li>
<p style="padding-left: 30px;">按照【<strong>实例资源池ID</strong>】进行过滤。形如：rpp-rn99mzt2。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p>
<li><strong>zone</strong></li>
<p style="padding-left: 30px;">按照【<strong>可用区</strong>】进行过滤。形如：ap-guangzhou-6。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><p style="padding-left: 30px;">可选项：<a href="https://cloud.tencent.com/document/product/213/6091">可用区列表</a></p>
<li><strong>instance-family</strong></li>
<p style="padding-left: 30px;">按照【<strong>实例类型</strong>】进行过滤。形如：SA9。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p>
<li><strong>instance-type</strong></li>
<p style="padding-left: 30px;">按照【<strong>实例规格</strong>】进行过滤。形如：SA9.96XLARGE1152。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p>
<li><strong>status</strong></li>
<p style="padding-left: 30px;">按照【<strong>实例资源池状态</strong>】进行过滤。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><p style="padding-left: 30px;">可选项：CREATING (创建中) | ACTIVE (运行中) | RETIRED (已过期)</p>
每次请求的`Filters`的上限为10。
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
        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
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
