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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAsrHotwordsList请求参数结构体
 *
 * @method string getHotwordsId() 获取检索参数，根据热词库 id 查询
 * @method void setHotwordsId(string $HotwordsId) 设置检索参数，根据热词库 id 查询
 * @method string getName() 获取检索参数，根据热词库名称查询
 * @method void setName(string $Name) 设置检索参数，根据热词库名称查询
 * @method integer getOffset() 获取分页偏移量，默认值：0。
 * @method void setOffset(integer $Offset) 设置分页偏移量，默认值：0。
 * @method integer getLimit() 获取返回记录条数，默认返回所有热词库
 * @method void setLimit(integer $Limit) 设置返回记录条数，默认返回所有热词库
 * @method integer getOrderType() 获取热词排序顺序

0：升序（默认）
1：降序
 * @method void setOrderType(integer $OrderType) 设置热词排序顺序

0：升序（默认）
1：降序
 * @method string getOrderBy() 获取根据某个字段排序，默认使用创建时间，使用非法字段视为默认情况

- CreateTime：创建时间排序
- UpdateTime：更新时间排序
- Name：热词库名称排序
- WordCount：热词数量排序
- HotwordsId：热词库 id 排序
 * @method void setOrderBy(string $OrderBy) 设置根据某个字段排序，默认使用创建时间，使用非法字段视为默认情况

- CreateTime：创建时间排序
- UpdateTime：更新时间排序
- Name：热词库名称排序
- WordCount：热词数量排序
- HotwordsId：热词库 id 排序
 * @method array getTypes() 获取0 临时热词 1 文件热词
 * @method void setTypes(array $Types) 设置0 临时热词 1 文件热词
 */
class DescribeAsrHotwordsListRequest extends AbstractModel
{
    /**
     * @var string 检索参数，根据热词库 id 查询
     */
    public $HotwordsId;

    /**
     * @var string 检索参数，根据热词库名称查询
     */
    public $Name;

    /**
     * @var integer 分页偏移量，默认值：0。
     */
    public $Offset;

    /**
     * @var integer 返回记录条数，默认返回所有热词库
     */
    public $Limit;

    /**
     * @var integer 热词排序顺序

0：升序（默认）
1：降序
     */
    public $OrderType;

    /**
     * @var string 根据某个字段排序，默认使用创建时间，使用非法字段视为默认情况

- CreateTime：创建时间排序
- UpdateTime：更新时间排序
- Name：热词库名称排序
- WordCount：热词数量排序
- HotwordsId：热词库 id 排序
     */
    public $OrderBy;

    /**
     * @var array 0 临时热词 1 文件热词
     */
    public $Types;

    /**
     * @param string $HotwordsId 检索参数，根据热词库 id 查询
     * @param string $Name 检索参数，根据热词库名称查询
     * @param integer $Offset 分页偏移量，默认值：0。
     * @param integer $Limit 返回记录条数，默认返回所有热词库
     * @param integer $OrderType 热词排序顺序

0：升序（默认）
1：降序
     * @param string $OrderBy 根据某个字段排序，默认使用创建时间，使用非法字段视为默认情况

- CreateTime：创建时间排序
- UpdateTime：更新时间排序
- Name：热词库名称排序
- WordCount：热词数量排序
- HotwordsId：热词库 id 排序
     * @param array $Types 0 临时热词 1 文件热词
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

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Types",$param) and $param["Types"] !== null) {
            $this->Types = $param["Types"];
        }
    }
}
