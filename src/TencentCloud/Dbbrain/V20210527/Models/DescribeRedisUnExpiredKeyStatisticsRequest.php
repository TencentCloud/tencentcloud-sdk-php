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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRedisUnExpiredKeyStatistics请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。可通过接口获取。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。可通过接口获取。
 * @method string getProduct() 获取服务产品类型，支持值包括 "redis" - 云数据库 Redis。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值包括 "redis" - 云数据库 Redis。
 * @method string getDate() 获取查询某个日期最新的任务，如2021-05-27，最早可为前30天的日期。该参数与AsyncRequestId参数不可同时为空。
 * @method void setDate(string $Date) 设置查询某个日期最新的任务，如2021-05-27，最早可为前30天的日期。该参数与AsyncRequestId参数不可同时为空。
 * @method integer getAsyncRequestId() 获取异步任务ID。当为空时，选择最近任务的ID。
 * @method void setAsyncRequestId(integer $AsyncRequestId) 设置异步任务ID。当为空时，选择最近任务的ID。
 * @method array getShardIds() 获取分片节点序号列表。当列表为空时，选择所有分片节点。
 * @method void setShardIds(array $ShardIds) 设置分片节点序号列表。当列表为空时，选择所有分片节点。
 */
class DescribeRedisUnExpiredKeyStatisticsRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。可通过接口获取。
     */
    public $InstanceId;

    /**
     * @var string 服务产品类型，支持值包括 "redis" - 云数据库 Redis。
     */
    public $Product;

    /**
     * @var string 查询某个日期最新的任务，如2021-05-27，最早可为前30天的日期。该参数与AsyncRequestId参数不可同时为空。
     */
    public $Date;

    /**
     * @var integer 异步任务ID。当为空时，选择最近任务的ID。
     */
    public $AsyncRequestId;

    /**
     * @var array 分片节点序号列表。当列表为空时，选择所有分片节点。
     */
    public $ShardIds;

    /**
     * @param string $InstanceId 实例 ID。可通过接口获取。
     * @param string $Product 服务产品类型，支持值包括 "redis" - 云数据库 Redis。
     * @param string $Date 查询某个日期最新的任务，如2021-05-27，最早可为前30天的日期。该参数与AsyncRequestId参数不可同时为空。
     * @param integer $AsyncRequestId 异步任务ID。当为空时，选择最近任务的ID。
     * @param array $ShardIds 分片节点序号列表。当列表为空时，选择所有分片节点。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("AsyncRequestId",$param) and $param["AsyncRequestId"] !== null) {
            $this->AsyncRequestId = $param["AsyncRequestId"];
        }

        if (array_key_exists("ShardIds",$param) and $param["ShardIds"] !== null) {
            $this->ShardIds = $param["ShardIds"];
        }
    }
}
