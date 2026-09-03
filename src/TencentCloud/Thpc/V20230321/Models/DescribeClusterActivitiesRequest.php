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
 * DescribeClusterActivities请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群ID。通过该参数指定需要查询活动历史记录的集群。</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID。通过该参数指定需要查询活动历史记录的集群。</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0。关于<code>Offset</code>的更进一步介绍请参考 API <a href="https://cloud.tencent.com/document/api/213/15688">简介</a>中的相关小节。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0。关于<code>Offset</code>的更进一步介绍请参考 API <a href="https://cloud.tencent.com/document/api/213/15688">简介</a>中的相关小节。</p>
 * @method integer getLimit() 获取<p>返回数量，默认为20，最大值为100。关于<code>Limit</code>的更进一步介绍请参考 API <a href="https://cloud.tencent.com/document/api/213/15688">简介</a>中的相关小节。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认为20，最大值为100。关于<code>Limit</code>的更进一步介绍请参考 API <a href="https://cloud.tencent.com/document/api/213/15688">简介</a>中的相关小节。</p>
 * @method array getFilters() 获取<li><strong>queue-name</strong></li> <p style="padding-left: 30px;">按照【<strong>队列名称</strong>】进行过滤。队列名称形如：compute。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><p style="padding-left: 30px;">每次请求的<code>Filters</code>的上限为10，<code>Filter.Values</code>的上限为5。</p>
 * @method void setFilters(array $Filters) 设置<li><strong>queue-name</strong></li> <p style="padding-left: 30px;">按照【<strong>队列名称</strong>】进行过滤。队列名称形如：compute。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><p style="padding-left: 30px;">每次请求的<code>Filters</code>的上限为10，<code>Filter.Values</code>的上限为5。</p>
 */
class DescribeClusterActivitiesRequest extends AbstractModel
{
    /**
     * @var string <p>集群ID。通过该参数指定需要查询活动历史记录的集群。</p>
     */
    public $ClusterId;

    /**
     * @var integer <p>偏移量，默认为0。关于<code>Offset</code>的更进一步介绍请参考 API <a href="https://cloud.tencent.com/document/api/213/15688">简介</a>中的相关小节。</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量，默认为20，最大值为100。关于<code>Limit</code>的更进一步介绍请参考 API <a href="https://cloud.tencent.com/document/api/213/15688">简介</a>中的相关小节。</p>
     */
    public $Limit;

    /**
     * @var array <li><strong>queue-name</strong></li> <p style="padding-left: 30px;">按照【<strong>队列名称</strong>】进行过滤。队列名称形如：compute。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><p style="padding-left: 30px;">每次请求的<code>Filters</code>的上限为10，<code>Filter.Values</code>的上限为5。</p>
     */
    public $Filters;

    /**
     * @param string $ClusterId <p>集群ID。通过该参数指定需要查询活动历史记录的集群。</p>
     * @param integer $Offset <p>偏移量，默认为0。关于<code>Offset</code>的更进一步介绍请参考 API <a href="https://cloud.tencent.com/document/api/213/15688">简介</a>中的相关小节。</p>
     * @param integer $Limit <p>返回数量，默认为20，最大值为100。关于<code>Limit</code>的更进一步介绍请参考 API <a href="https://cloud.tencent.com/document/api/213/15688">简介</a>中的相关小节。</p>
     * @param array $Filters <li><strong>queue-name</strong></li> <p style="padding-left: 30px;">按照【<strong>队列名称</strong>】进行过滤。队列名称形如：compute。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p><p style="padding-left: 30px;">每次请求的<code>Filters</code>的上限为10，<code>Filter.Values</code>的上限为5。</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
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
