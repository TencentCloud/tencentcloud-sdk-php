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
namespace TencentCloud\Ame\V20190916\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchKTVMusics请求参数结构体
 *
 * @method string getKeyWord() 获取搜索关键词
 * @method void setKeyWord(string $KeyWord) 设置搜索关键词
 * @method integer getOffset() 获取分页返回的起始偏移量，默认值：0。将返回第 Offset 到第 Offset+Limit-1 条。
取值范围：Offset + Limit 不超过5000。
 * @method void setOffset(integer $Offset) 设置分页返回的起始偏移量，默认值：0。将返回第 Offset 到第 Offset+Limit-1 条。
取值范围：Offset + Limit 不超过5000。
 * @method integer getLimit() 获取分页返回的起始偏移量，默认值：50。将返回第 Offset 到第 Offset+Limit-1 条。
 * @method void setLimit(integer $Limit) 设置分页返回的起始偏移量，默认值：50。将返回第 Offset 到第 Offset+Limit-1 条。
 * @method SortBy getSort() 获取排序方式。默认按照匹配度排序
<li> Sort.Field 可选 CreateTime</li>
<li> Sort.Order 可选 Desc </li>
<li> 当 KeyWord 不为空时，Sort.Field 字段无效， 搜索结果将以匹配度排序。</li>
 * @method void setSort(SortBy $Sort) 设置排序方式。默认按照匹配度排序
<li> Sort.Field 可选 CreateTime</li>
<li> Sort.Order 可选 Desc </li>
<li> 当 KeyWord 不为空时，Sort.Field 字段无效， 搜索结果将以匹配度排序。</li>
 * @method array getTagIds() 获取标签 ID 集合，匹配集合指定所有 ID 。
<li>数组长度限制：10。</li>
 * @method void setTagIds(array $TagIds) 设置标签 ID 集合，匹配集合指定所有 ID 。
<li>数组长度限制：10。</li>
 */
class SearchKTVMusicsRequest extends AbstractModel
{
    /**
     * @var string 搜索关键词
     */
    public $KeyWord;

    /**
     * @var integer 分页返回的起始偏移量，默认值：0。将返回第 Offset 到第 Offset+Limit-1 条。
取值范围：Offset + Limit 不超过5000。
     */
    public $Offset;

    /**
     * @var integer 分页返回的起始偏移量，默认值：50。将返回第 Offset 到第 Offset+Limit-1 条。
     */
    public $Limit;

    /**
     * @var SortBy 排序方式。默认按照匹配度排序
<li> Sort.Field 可选 CreateTime</li>
<li> Sort.Order 可选 Desc </li>
<li> 当 KeyWord 不为空时，Sort.Field 字段无效， 搜索结果将以匹配度排序。</li>
     */
    public $Sort;

    /**
     * @var array 标签 ID 集合，匹配集合指定所有 ID 。
<li>数组长度限制：10。</li>
     */
    public $TagIds;

    /**
     * @param string $KeyWord 搜索关键词
     * @param integer $Offset 分页返回的起始偏移量，默认值：0。将返回第 Offset 到第 Offset+Limit-1 条。
取值范围：Offset + Limit 不超过5000。
     * @param integer $Limit 分页返回的起始偏移量，默认值：50。将返回第 Offset 到第 Offset+Limit-1 条。
     * @param SortBy $Sort 排序方式。默认按照匹配度排序
<li> Sort.Field 可选 CreateTime</li>
<li> Sort.Order 可选 Desc </li>
<li> 当 KeyWord 不为空时，Sort.Field 字段无效， 搜索结果将以匹配度排序。</li>
     * @param array $TagIds 标签 ID 集合，匹配集合指定所有 ID 。
<li>数组长度限制：10。</li>
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
        if (array_key_exists("KeyWord",$param) and $param["KeyWord"] !== null) {
            $this->KeyWord = $param["KeyWord"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = new SortBy();
            $this->Sort->deserialize($param["Sort"]);
        }

        if (array_key_exists("TagIds",$param) and $param["TagIds"] !== null) {
            $this->TagIds = $param["TagIds"];
        }
    }
}
