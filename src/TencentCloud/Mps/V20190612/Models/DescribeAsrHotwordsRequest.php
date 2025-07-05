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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAsrHotwords请求参数结构体
 *
 * @method string getHotwordsId() 获取需要查询的热词库 id
**注意：HotwordsId 与 Name 必须选择填写一个，如果同时填写，HotwordsId 优先级高于 Name**
 * @method void setHotwordsId(string $HotwordsId) 设置需要查询的热词库 id
**注意：HotwordsId 与 Name 必须选择填写一个，如果同时填写，HotwordsId 优先级高于 Name**
 * @method string getName() 获取热词库名称，
**注意：HotwordsId 与 Name 必须选择填写一个，如果同时填写，HotwordsId 优先级高于 Name**
 * @method void setName(string $Name) 设置热词库名称，
**注意：HotwordsId 与 Name 必须选择填写一个，如果同时填写，HotwordsId 优先级高于 Name**
 * @method integer getOffset() 获取分页偏移量，默认值：0。

 * @method void setOffset(integer $Offset) 设置分页偏移量，默认值：0。

 * @method integer getLimit() 获取返回记录条数，默认值：10，最大值：100。
 * @method void setLimit(integer $Limit) 设置返回记录条数，默认值：10，最大值：100。
 * @method string getOrderBy() 获取热词排序字段，目前可选值为

- Default：默认文件中的顺序
- Weight：权重排序
- Lexical：热词文本排序
 * @method void setOrderBy(string $OrderBy) 设置热词排序字段，目前可选值为

- Default：默认文件中的顺序
- Weight：权重排序
- Lexical：热词文本排序
 * @method integer getOrderType() 获取热词排序顺序 0：升序（默认） 1：降序
 * @method void setOrderType(integer $OrderType) 设置热词排序顺序 0：升序（默认） 1：降序
 */
class DescribeAsrHotwordsRequest extends AbstractModel
{
    /**
     * @var string 需要查询的热词库 id
**注意：HotwordsId 与 Name 必须选择填写一个，如果同时填写，HotwordsId 优先级高于 Name**
     */
    public $HotwordsId;

    /**
     * @var string 热词库名称，
**注意：HotwordsId 与 Name 必须选择填写一个，如果同时填写，HotwordsId 优先级高于 Name**
     */
    public $Name;

    /**
     * @var integer 分页偏移量，默认值：0。

     */
    public $Offset;

    /**
     * @var integer 返回记录条数，默认值：10，最大值：100。
     */
    public $Limit;

    /**
     * @var string 热词排序字段，目前可选值为

- Default：默认文件中的顺序
- Weight：权重排序
- Lexical：热词文本排序
     */
    public $OrderBy;

    /**
     * @var integer 热词排序顺序 0：升序（默认） 1：降序
     */
    public $OrderType;

    /**
     * @param string $HotwordsId 需要查询的热词库 id
**注意：HotwordsId 与 Name 必须选择填写一个，如果同时填写，HotwordsId 优先级高于 Name**
     * @param string $Name 热词库名称，
**注意：HotwordsId 与 Name 必须选择填写一个，如果同时填写，HotwordsId 优先级高于 Name**
     * @param integer $Offset 分页偏移量，默认值：0。

     * @param integer $Limit 返回记录条数，默认值：10，最大值：100。
     * @param string $OrderBy 热词排序字段，目前可选值为

- Default：默认文件中的顺序
- Weight：权重排序
- Lexical：热词文本排序
     * @param integer $OrderType 热词排序顺序 0：升序（默认） 1：降序
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
        if (array_key_exists("HotwordsId",$param) and $param["HotwordsId"] !== null) {
            $this->HotwordsId = $param["HotwordsId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }
    }
}
