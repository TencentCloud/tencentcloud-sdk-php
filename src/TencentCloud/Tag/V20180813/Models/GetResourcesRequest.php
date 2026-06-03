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
namespace TencentCloud\Tag\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetResources请求参数结构体
 *
 * @method array getResourceList() 获取<p>资源六段式列表。腾讯云使用资源六段式描述一个资源。<br>例如：ResourceList.1 = qcs::${ServiceType}:${Region}:${Account}:${ResourcePreifx}/${ResourceId}。<br>如果传入了此参数会返回所有匹配的资源列表，指定的MaxResults会失效。<br>N取值范围：0~9</p>
 * @method void setResourceList(array $ResourceList) 设置<p>资源六段式列表。腾讯云使用资源六段式描述一个资源。<br>例如：ResourceList.1 = qcs::${ServiceType}:${Region}:${Account}:${ResourcePreifx}/${ResourceId}。<br>如果传入了此参数会返回所有匹配的资源列表，指定的MaxResults会失效。<br>N取值范围：0~9</p>
 * @method array getTagFilters() 获取<p>标签过滤数组，最多支持6组标签。会查询同时绑定了这多组标签的资源。<br>每组标签中的TagValue最多支持10个。</p>
 * @method void setTagFilters(array $TagFilters) 设置<p>标签过滤数组，最多支持6组标签。会查询同时绑定了这多组标签的资源。<br>每组标签中的TagValue最多支持10个。</p>
 * @method string getPaginationToken() 获取<p>从上一页的响应中获取的下一页的Token值。<br>如果是第一次请求，设置为空。</p>
 * @method void setPaginationToken(string $PaginationToken) 设置<p>从上一页的响应中获取的下一页的Token值。<br>如果是第一次请求，设置为空。</p>
 * @method integer getMaxResults() 获取<p>每一页返回的数据最大条数，最大200。<br>缺省值：50。</p>
 * @method void setMaxResults(integer $MaxResults) 设置<p>每一页返回的数据最大条数，最大200。<br>缺省值：50。</p>
 */
class GetResourcesRequest extends AbstractModel
{
    /**
     * @var array <p>资源六段式列表。腾讯云使用资源六段式描述一个资源。<br>例如：ResourceList.1 = qcs::${ServiceType}:${Region}:${Account}:${ResourcePreifx}/${ResourceId}。<br>如果传入了此参数会返回所有匹配的资源列表，指定的MaxResults会失效。<br>N取值范围：0~9</p>
     */
    public $ResourceList;

    /**
     * @var array <p>标签过滤数组，最多支持6组标签。会查询同时绑定了这多组标签的资源。<br>每组标签中的TagValue最多支持10个。</p>
     */
    public $TagFilters;

    /**
     * @var string <p>从上一页的响应中获取的下一页的Token值。<br>如果是第一次请求，设置为空。</p>
     */
    public $PaginationToken;

    /**
     * @var integer <p>每一页返回的数据最大条数，最大200。<br>缺省值：50。</p>
     */
    public $MaxResults;

    /**
     * @param array $ResourceList <p>资源六段式列表。腾讯云使用资源六段式描述一个资源。<br>例如：ResourceList.1 = qcs::${ServiceType}:${Region}:${Account}:${ResourcePreifx}/${ResourceId}。<br>如果传入了此参数会返回所有匹配的资源列表，指定的MaxResults会失效。<br>N取值范围：0~9</p>
     * @param array $TagFilters <p>标签过滤数组，最多支持6组标签。会查询同时绑定了这多组标签的资源。<br>每组标签中的TagValue最多支持10个。</p>
     * @param string $PaginationToken <p>从上一页的响应中获取的下一页的Token值。<br>如果是第一次请求，设置为空。</p>
     * @param integer $MaxResults <p>每一页返回的数据最大条数，最大200。<br>缺省值：50。</p>
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
        if (array_key_exists("ResourceList",$param) and $param["ResourceList"] !== null) {
            $this->ResourceList = $param["ResourceList"];
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }

        if (array_key_exists("PaginationToken",$param) and $param["PaginationToken"] !== null) {
            $this->PaginationToken = $param["PaginationToken"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }
    }
}
