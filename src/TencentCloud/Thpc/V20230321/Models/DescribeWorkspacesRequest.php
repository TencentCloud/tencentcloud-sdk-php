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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWorkspaces请求参数结构体
 *
 * @method array getSpaceIds() 获取<p>集群ID列表。通过该参数可以指定需要查询信息的集群列表。<br>如果您不指定该参数，则返回Limit数量以内的集群信息。</p>
 * @method void setSpaceIds(array $SpaceIds) 设置<p>集群ID列表。通过该参数可以指定需要查询信息的集群列表。<br>如果您不指定该参数，则返回Limit数量以内的集群信息。</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0。关于<code>Offset</code>的更进一步介绍请参考 API <a href="https://cloud.tencent.com/document/api/213/15688">简介</a>中的相关小节。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0。关于<code>Offset</code>的更进一步介绍请参考 API <a href="https://cloud.tencent.com/document/api/213/15688">简介</a>中的相关小节。</p>
 * @method integer getLimit() 获取<p>返回数量，默认为20，最大值为100。关于<code>Limit</code>的更进一步介绍请参考 API <a href="https://cloud.tencent.com/document/api/213/15688">简介</a>中的相关小节。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认为20，最大值为100。关于<code>Limit</code>的更进一步介绍请参考 API <a href="https://cloud.tencent.com/document/api/213/15688">简介</a>中的相关小节。</p>
 * @method array getFilters() 获取<ul>   <li>     <strong>zone</strong>     <p style="padding-left: 30px;">按照【<strong>可用区</strong>】进行过滤</p>     <p style="padding-left: 30px;">类型：String</p>     <p style="padding-left: 30px;">必选：否</p></li>     <li>     <strong>space-id</strong>     <p style="padding-left: 30px;">按照【<strong>工作空间实例ID</strong>】进行过滤</p>     <p style="padding-left: 30px;">类型：String</p>     <p style="padding-left: 30px;">必选：否</p></li>     <li>     <strong>cvm-instance-id</strong>     <p style="padding-left: 30px;">按照【<strong>CVM实例ID</strong>】进行过滤</p>     <p style="padding-left: 30px;">类型：String</p>     <p style="padding-left: 30px;">必选：否</p></li>     <li>     <strong>space-state</strong>     <p style="padding-left: 30px;">按照【<strong>工作空间状态</strong>】进行过滤</p>     <p style="padding-left: 30px;">类型：String</p>     <p style="padding-left: 30px;">必选：否</p></li>     <li>     <strong>space-name</strong>     <p style="padding-left: 30px;">按照【<strong>工作空间别名</strong>】进行过滤</p>     <p style="padding-left: 30px;">类型：String</p>     <p style="padding-left: 30px;">必选：否</p></li>     <li>     <strong>space-charge-type</strong>     <p style="padding-left: 30px;">按照【<strong>工作空间实例付费模式</strong>】进行过滤</p>     <p style="padding-left: 30px;">类型：String</p>     <p style="padding-left: 30px;">必选：否</p></li>     <li>     <strong>tag-key</strong>     <p style="padding-left: 30px;">按照【<strong>标签键</strong>】进行过滤</p>     <p style="padding-left: 30px;">类型：String</p>     <p style="padding-left: 30px;">必选：否</p></li>     <li>     <strong>tag-value</strong>     <p style="padding-left: 30px;">按照【<strong>标签值</strong>】进行过滤</p>     <p style="padding-left: 30px;">类型：String</p>     <p style="padding-left: 30px;">必选：否</p></li> </ul> <p style="padding-left: 30px;">每次请求的<code>Filters</code>的上限为10，<code>Filter.Values</code>的上限为5。</p>
 * @method void setFilters(array $Filters) 设置<ul>   <li>     <strong>zone</strong>     <p style="padding-left: 30px;">按照【<strong>可用区</strong>】进行过滤</p>     <p style="padding-left: 30px;">类型：String</p>     <p style="padding-left: 30px;">必选：否</p></li>     <li>     <strong>space-id</strong>     <p style="padding-left: 30px;">按照【<strong>工作空间实例ID</strong>】进行过滤</p>     <p style="padding-left: 30px;">类型：String</p>     <p style="padding-left: 30px;">必选：否</p></li>     <li>     <strong>cvm-instance-id</strong>     <p style="padding-left: 30px;">按照【<strong>CVM实例ID</strong>】进行过滤</p>     <p style="padding-left: 30px;">类型：String</p>     <p style="padding-left: 30px;">必选：否</p></li>     <li>     <strong>space-state</strong>     <p style="padding-left: 30px;">按照【<strong>工作空间状态</strong>】进行过滤</p>     <p style="padding-left: 30px;">类型：String</p>     <p style="padding-left: 30px;">必选：否</p></li>     <li>     <strong>space-name</strong>     <p style="padding-left: 30px;">按照【<strong>工作空间别名</strong>】进行过滤</p>     <p style="padding-left: 30px;">类型：String</p>     <p style="padding-left: 30px;">必选：否</p></li>     <li>     <strong>space-charge-type</strong>     <p style="padding-left: 30px;">按照【<strong>工作空间实例付费模式</strong>】进行过滤</p>     <p style="padding-left: 30px;">类型：String</p>     <p style="padding-left: 30px;">必选：否</p></li>     <li>     <strong>tag-key</strong>     <p style="padding-left: 30px;">按照【<strong>标签键</strong>】进行过滤</p>     <p style="padding-left: 30px;">类型：String</p>     <p style="padding-left: 30px;">必选：否</p></li>     <li>     <strong>tag-value</strong>     <p style="padding-left: 30px;">按照【<strong>标签值</strong>】进行过滤</p>     <p style="padding-left: 30px;">类型：String</p>     <p style="padding-left: 30px;">必选：否</p></li> </ul> <p style="padding-left: 30px;">每次请求的<code>Filters</code>的上限为10，<code>Filter.Values</code>的上限为5。</p>
 */
class DescribeWorkspacesRequest extends AbstractModel
{
    /**
     * @var array <p>集群ID列表。通过该参数可以指定需要查询信息的集群列表。<br>如果您不指定该参数，则返回Limit数量以内的集群信息。</p>
     */
    public $SpaceIds;

    /**
     * @var integer <p>偏移量，默认为0。关于<code>Offset</code>的更进一步介绍请参考 API <a href="https://cloud.tencent.com/document/api/213/15688">简介</a>中的相关小节。</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量，默认为20，最大值为100。关于<code>Limit</code>的更进一步介绍请参考 API <a href="https://cloud.tencent.com/document/api/213/15688">简介</a>中的相关小节。</p>
     */
    public $Limit;

    /**
     * @var array <ul>   <li>     <strong>zone</strong>     <p style="padding-left: 30px;">按照【<strong>可用区</strong>】进行过滤</p>     <p style="padding-left: 30px;">类型：String</p>     <p style="padding-left: 30px;">必选：否</p></li>     <li>     <strong>space-id</strong>     <p style="padding-left: 30px;">按照【<strong>工作空间实例ID</strong>】进行过滤</p>     <p style="padding-left: 30px;">类型：String</p>     <p style="padding-left: 30px;">必选：否</p></li>     <li>     <strong>cvm-instance-id</strong>     <p style="padding-left: 30px;">按照【<strong>CVM实例ID</strong>】进行过滤</p>     <p style="padding-left: 30px;">类型：String</p>     <p style="padding-left: 30px;">必选：否</p></li>     <li>     <strong>space-state</strong>     <p style="padding-left: 30px;">按照【<strong>工作空间状态</strong>】进行过滤</p>     <p style="padding-left: 30px;">类型：String</p>     <p style="padding-left: 30px;">必选：否</p></li>     <li>     <strong>space-name</strong>     <p style="padding-left: 30px;">按照【<strong>工作空间别名</strong>】进行过滤</p>     <p style="padding-left: 30px;">类型：String</p>     <p style="padding-left: 30px;">必选：否</p></li>     <li>     <strong>space-charge-type</strong>     <p style="padding-left: 30px;">按照【<strong>工作空间实例付费模式</strong>】进行过滤</p>     <p style="padding-left: 30px;">类型：String</p>     <p style="padding-left: 30px;">必选：否</p></li>     <li>     <strong>tag-key</strong>     <p style="padding-left: 30px;">按照【<strong>标签键</strong>】进行过滤</p>     <p style="padding-left: 30px;">类型：String</p>     <p style="padding-left: 30px;">必选：否</p></li>     <li>     <strong>tag-value</strong>     <p style="padding-left: 30px;">按照【<strong>标签值</strong>】进行过滤</p>     <p style="padding-left: 30px;">类型：String</p>     <p style="padding-left: 30px;">必选：否</p></li> </ul> <p style="padding-left: 30px;">每次请求的<code>Filters</code>的上限为10，<code>Filter.Values</code>的上限为5。</p>
     */
    public $Filters;

    /**
     * @param array $SpaceIds <p>集群ID列表。通过该参数可以指定需要查询信息的集群列表。<br>如果您不指定该参数，则返回Limit数量以内的集群信息。</p>
     * @param integer $Offset <p>偏移量，默认为0。关于<code>Offset</code>的更进一步介绍请参考 API <a href="https://cloud.tencent.com/document/api/213/15688">简介</a>中的相关小节。</p>
     * @param integer $Limit <p>返回数量，默认为20，最大值为100。关于<code>Limit</code>的更进一步介绍请参考 API <a href="https://cloud.tencent.com/document/api/213/15688">简介</a>中的相关小节。</p>
     * @param array $Filters <ul>   <li>     <strong>zone</strong>     <p style="padding-left: 30px;">按照【<strong>可用区</strong>】进行过滤</p>     <p style="padding-left: 30px;">类型：String</p>     <p style="padding-left: 30px;">必选：否</p></li>     <li>     <strong>space-id</strong>     <p style="padding-left: 30px;">按照【<strong>工作空间实例ID</strong>】进行过滤</p>     <p style="padding-left: 30px;">类型：String</p>     <p style="padding-left: 30px;">必选：否</p></li>     <li>     <strong>cvm-instance-id</strong>     <p style="padding-left: 30px;">按照【<strong>CVM实例ID</strong>】进行过滤</p>     <p style="padding-left: 30px;">类型：String</p>     <p style="padding-left: 30px;">必选：否</p></li>     <li>     <strong>space-state</strong>     <p style="padding-left: 30px;">按照【<strong>工作空间状态</strong>】进行过滤</p>     <p style="padding-left: 30px;">类型：String</p>     <p style="padding-left: 30px;">必选：否</p></li>     <li>     <strong>space-name</strong>     <p style="padding-left: 30px;">按照【<strong>工作空间别名</strong>】进行过滤</p>     <p style="padding-left: 30px;">类型：String</p>     <p style="padding-left: 30px;">必选：否</p></li>     <li>     <strong>space-charge-type</strong>     <p style="padding-left: 30px;">按照【<strong>工作空间实例付费模式</strong>】进行过滤</p>     <p style="padding-left: 30px;">类型：String</p>     <p style="padding-left: 30px;">必选：否</p></li>     <li>     <strong>tag-key</strong>     <p style="padding-left: 30px;">按照【<strong>标签键</strong>】进行过滤</p>     <p style="padding-left: 30px;">类型：String</p>     <p style="padding-left: 30px;">必选：否</p></li>     <li>     <strong>tag-value</strong>     <p style="padding-left: 30px;">按照【<strong>标签值</strong>】进行过滤</p>     <p style="padding-left: 30px;">类型：String</p>     <p style="padding-left: 30px;">必选：否</p></li> </ul> <p style="padding-left: 30px;">每次请求的<code>Filters</code>的上限为10，<code>Filter.Values</code>的上限为5。</p>
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
        if (array_key_exists("SpaceIds",$param) and $param["SpaceIds"] !== null) {
            $this->SpaceIds = $param["SpaceIds"];
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
