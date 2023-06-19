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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWorkSpaces请求参数结构体
 *
 * @method integer getOffset() 获取偏移量，默认 0
 * @method void setOffset(integer $Offset) 设置偏移量，默认 0
 * @method integer getOrderType() 获取1 按照创建时间降序排序(默认) 2.按照创建时间升序排序，3. 按照状态降序排序 4. 按照状态升序排序 默认为0
 * @method void setOrderType(integer $OrderType) 设置1 按照创建时间降序排序(默认) 2.按照创建时间升序排序，3. 按照状态降序排序 4. 按照状态升序排序 默认为0
 * @method integer getLimit() 获取请求的集群数量，默认 20
 * @method void setLimit(integer $Limit) 设置请求的集群数量，默认 20
 * @method array getFilters() 获取过滤规则
 * @method void setFilters(array $Filters) 设置过滤规则
 */
class DescribeWorkSpacesRequest extends AbstractModel
{
    /**
     * @var integer 偏移量，默认 0
     */
    public $Offset;

    /**
     * @var integer 1 按照创建时间降序排序(默认) 2.按照创建时间升序排序，3. 按照状态降序排序 4. 按照状态升序排序 默认为0
     */
    public $OrderType;

    /**
     * @var integer 请求的集群数量，默认 20
     */
    public $Limit;

    /**
     * @var array 过滤规则
     */
    public $Filters;

    /**
     * @param integer $Offset 偏移量，默认 0
     * @param integer $OrderType 1 按照创建时间降序排序(默认) 2.按照创建时间升序排序，3. 按照状态降序排序 4. 按照状态升序排序 默认为0
     * @param integer $Limit 请求的集群数量，默认 20
     * @param array $Filters 过滤规则
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
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
