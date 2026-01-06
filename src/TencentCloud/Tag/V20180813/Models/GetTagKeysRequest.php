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
 * GetTagKeys请求参数结构体
 *
 * @method string getPaginationToken() 获取<p>从上一页的响应中获取的下一页的Token值。如果是第一次请求，设置为空。</p>
 * @method void setPaginationToken(string $PaginationToken) 设置<p>从上一页的响应中获取的下一页的Token值。如果是第一次请求，设置为空。</p>
 * @method integer getMaxResults() 获取<p>每一页返回的数据最大条数，最大1000。缺省值：50。</p>
 * @method void setMaxResults(integer $MaxResults) 设置<p>每一页返回的数据最大条数，最大1000。缺省值：50。</p>
 * @method string getCategory() 获取<p>标签类型。取值： Custom：自定义标签。 System：系统标签。 All：全部标签。 默认值：All。</p>
 * @method void setCategory(string $Category) 设置<p>标签类型。取值： Custom：自定义标签。 System：系统标签。 All：全部标签。 默认值：All。</p>
 */
class GetTagKeysRequest extends AbstractModel
{
    /**
     * @var string <p>从上一页的响应中获取的下一页的Token值。如果是第一次请求，设置为空。</p>
     */
    public $PaginationToken;

    /**
     * @var integer <p>每一页返回的数据最大条数，最大1000。缺省值：50。</p>
     */
    public $MaxResults;

    /**
     * @var string <p>标签类型。取值： Custom：自定义标签。 System：系统标签。 All：全部标签。 默认值：All。</p>
     */
    public $Category;

    /**
     * @param string $PaginationToken <p>从上一页的响应中获取的下一页的Token值。如果是第一次请求，设置为空。</p>
     * @param integer $MaxResults <p>每一页返回的数据最大条数，最大1000。缺省值：50。</p>
     * @param string $Category <p>标签类型。取值： Custom：自定义标签。 System：系统标签。 All：全部标签。 默认值：All。</p>
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
        if (array_key_exists("PaginationToken",$param) and $param["PaginationToken"] !== null) {
            $this->PaginationToken = $param["PaginationToken"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }
    }
}
