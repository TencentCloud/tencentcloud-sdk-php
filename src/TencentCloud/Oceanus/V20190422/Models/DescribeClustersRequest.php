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
 * DescribeClusters请求参数结构体
 *
 * @method array getClusterIds() 获取按照一个或者多个集群 ID 查询，每次请求的集群上限为 100
 * @method void setClusterIds(array $ClusterIds) 设置按照一个或者多个集群 ID 查询，每次请求的集群上限为 100
 * @method integer getOffset() 获取偏移量，默认 0
 * @method void setOffset(integer $Offset) 设置偏移量，默认 0
 * @method integer getLimit() 获取请求的集群数量，默认 20，最大值 100
 * @method void setLimit(integer $Limit) 设置请求的集群数量，默认 20，最大值 100
 * @method integer getOrderType() 获取集群信息结果排序规则，1 按时间降序，2 按照时间升序，3  按照状态排序
 * @method void setOrderType(integer $OrderType) 设置集群信息结果排序规则，1 按时间降序，2 按照时间升序，3  按照状态排序
 * @method array getFilters() 获取过滤规则
 * @method void setFilters(array $Filters) 设置过滤规则
 * @method string getWorkSpaceId() 获取工作空间 SerialId
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置工作空间 SerialId
 */
class DescribeClustersRequest extends AbstractModel
{
    /**
     * @var array 按照一个或者多个集群 ID 查询，每次请求的集群上限为 100
     */
    public $ClusterIds;

    /**
     * @var integer 偏移量，默认 0
     */
    public $Offset;

    /**
     * @var integer 请求的集群数量，默认 20，最大值 100
     */
    public $Limit;

    /**
     * @var integer 集群信息结果排序规则，1 按时间降序，2 按照时间升序，3  按照状态排序
     */
    public $OrderType;

    /**
     * @var array 过滤规则
     */
    public $Filters;

    /**
     * @var string 工作空间 SerialId
     */
    public $WorkSpaceId;

    /**
     * @param array $ClusterIds 按照一个或者多个集群 ID 查询，每次请求的集群上限为 100
     * @param integer $Offset 偏移量，默认 0
     * @param integer $Limit 请求的集群数量，默认 20，最大值 100
     * @param integer $OrderType 集群信息结果排序规则，1 按时间降序，2 按照时间升序，3  按照状态排序
     * @param array $Filters 过滤规则
     * @param string $WorkSpaceId 工作空间 SerialId
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
        if (array_key_exists("ClusterIds",$param) and $param["ClusterIds"] !== null) {
            $this->ClusterIds = $param["ClusterIds"];
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("WorkSpaceId",$param) and $param["WorkSpaceId"] !== null) {
            $this->WorkSpaceId = $param["WorkSpaceId"];
        }
    }
}
