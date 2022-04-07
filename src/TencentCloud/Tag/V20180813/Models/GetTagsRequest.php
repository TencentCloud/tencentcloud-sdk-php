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
namespace TencentCloud\Tag\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetTags请求参数结构体
 *
 * @method string getPaginationToken() 获取从上一页的响应中获取的下一页的Token值。
如果是第一次请求，设置为空。
 * @method void setPaginationToken(string $PaginationToken) 设置从上一页的响应中获取的下一页的Token值。
如果是第一次请求，设置为空。
 * @method integer getMaxResults() 获取每一页返回的数据最大条数，最大1000。
缺省值：50。
 * @method void setMaxResults(integer $MaxResults) 设置每一页返回的数据最大条数，最大1000。
缺省值：50。
 * @method array getTagKeys() 获取标签键。
返回所有标签键列表对应的标签。
最大长度：20
 * @method void setTagKeys(array $TagKeys) 设置标签键。
返回所有标签键列表对应的标签。
最大长度：20
 */
class GetTagsRequest extends AbstractModel
{
    /**
     * @var string 从上一页的响应中获取的下一页的Token值。
如果是第一次请求，设置为空。
     */
    public $PaginationToken;

    /**
     * @var integer 每一页返回的数据最大条数，最大1000。
缺省值：50。
     */
    public $MaxResults;

    /**
     * @var array 标签键。
返回所有标签键列表对应的标签。
最大长度：20
     */
    public $TagKeys;

    /**
     * @param string $PaginationToken 从上一页的响应中获取的下一页的Token值。
如果是第一次请求，设置为空。
     * @param integer $MaxResults 每一页返回的数据最大条数，最大1000。
缺省值：50。
     * @param array $TagKeys 标签键。
返回所有标签键列表对应的标签。
最大长度：20
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

        if (array_key_exists("TagKeys",$param) and $param["TagKeys"] !== null) {
            $this->TagKeys = $param["TagKeys"];
        }
    }
}
