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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterInstances请求参数结构体
 *
 * @method string getClusterId() 获取集群 ID。调用[DescribeSimpleClusters](https://cloud.tencent.com/document/api/649/36047)查询已创建的集群或通过[CreateCluster](https://cloud.tencent.com/document/api/649/36049)接口创建新的集群。
 * @method void setClusterId(string $ClusterId) 设置集群 ID。调用[DescribeSimpleClusters](https://cloud.tencent.com/document/api/649/36047)查询已创建的集群或通过[CreateCluster](https://cloud.tencent.com/document/api/649/36049)接口创建新的集群。
 * @method string getSearchWord() 获取搜索字段
 * @method void setSearchWord(string $SearchWord) 设置搜索字段
 * @method string getOrderBy() 获取排序字段
 * @method void setOrderBy(string $OrderBy) 设置排序字段
 * @method integer getOrderType() 获取排序类型；0：升序，1：降序。
 * @method void setOrderType(integer $OrderType) 设置排序类型；0：升序，1：降序。
 * @method integer getOffset() 获取偏移量，默认值：0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认值：0。
 * @method integer getLimit() 获取分页个数，默认值：20。
 * @method void setLimit(integer $Limit) 设置分页个数，默认值：20。
 */
class DescribeClusterInstancesRequest extends AbstractModel
{
    /**
     * @var string 集群 ID。调用[DescribeSimpleClusters](https://cloud.tencent.com/document/api/649/36047)查询已创建的集群或通过[CreateCluster](https://cloud.tencent.com/document/api/649/36049)接口创建新的集群。
     */
    public $ClusterId;

    /**
     * @var string 搜索字段
     */
    public $SearchWord;

    /**
     * @var string 排序字段
     */
    public $OrderBy;

    /**
     * @var integer 排序类型；0：升序，1：降序。
     */
    public $OrderType;

    /**
     * @var integer 偏移量，默认值：0。
     */
    public $Offset;

    /**
     * @var integer 分页个数，默认值：20。
     */
    public $Limit;

    /**
     * @param string $ClusterId 集群 ID。调用[DescribeSimpleClusters](https://cloud.tencent.com/document/api/649/36047)查询已创建的集群或通过[CreateCluster](https://cloud.tencent.com/document/api/649/36049)接口创建新的集群。
     * @param string $SearchWord 搜索字段
     * @param string $OrderBy 排序字段
     * @param integer $OrderType 排序类型；0：升序，1：降序。
     * @param integer $Offset 偏移量，默认值：0。
     * @param integer $Limit 分页个数，默认值：20。
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
    }
}
