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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusters请求参数结构体
 *
 * @method string getSearchWord() 获取搜索词
 * @method void setSearchWord(string $SearchWord) 设置搜索词
 * @method string getOrderBy() 获取排序字段
 * @method void setOrderBy(string $OrderBy) 设置排序字段
 * @method integer getOrderType() 获取排序方式
 * @method void setOrderType(integer $OrderType) 设置排序方式
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取分页个数
 * @method void setLimit(integer $Limit) 设置分页个数
 * @method string getClusterType() 获取集群类型
 * @method void setClusterType(string $ClusterType) 设置集群类型
 * @method array getClusterIdList() 获取idList
 * @method void setClusterIdList(array $ClusterIdList) 设置idList
 */
class DescribeClustersRequest extends AbstractModel
{
    /**
     * @var string 搜索词
     */
    public $SearchWord;

    /**
     * @var string 排序字段
     */
    public $OrderBy;

    /**
     * @var integer 排序方式
     */
    public $OrderType;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 分页个数
     */
    public $Limit;

    /**
     * @var string 集群类型
     */
    public $ClusterType;

    /**
     * @var array idList
     */
    public $ClusterIdList;

    /**
     * @param string $SearchWord 搜索词
     * @param string $OrderBy 排序字段
     * @param integer $OrderType 排序方式
     * @param integer $Offset 偏移量
     * @param integer $Limit 分页个数
     * @param string $ClusterType 集群类型
     * @param array $ClusterIdList idList
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
        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterIdList",$param) and $param["ClusterIdList"] !== null) {
            $this->ClusterIdList = $param["ClusterIdList"];
        }
    }
}
