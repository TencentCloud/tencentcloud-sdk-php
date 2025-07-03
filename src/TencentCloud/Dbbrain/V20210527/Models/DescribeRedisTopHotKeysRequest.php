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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRedisTopHotKeys请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID 。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID 。
 * @method string getStartTime() 获取开始时间，如“2024-09-22T00:00:00+00:00”。0天 < 当前服务器时间 - 开始时间 <= 10天。
 * @method void setStartTime(string $StartTime) 设置开始时间，如“2024-09-22T00:00:00+00:00”。0天 < 当前服务器时间 - 开始时间 <= 10天。
 * @method string getEndTime() 获取结束时间，如“2024-09-22T01:00:00+00:00”，0天 < 结束时间 - 开始时间 <= 10天。
 * @method void setEndTime(string $EndTime) 设置结束时间，如“2024-09-22T01:00:00+00:00”，0天 < 结束时间 - 开始时间 <= 10天。
 * @method string getProduct() 获取服务产品类型，仅仅支持值 "redis" - 云数据库 Redis。
 * @method void setProduct(string $Product) 设置服务产品类型，仅仅支持值 "redis" - 云数据库 Redis。
 * @method array getInstanceNodeIds() 获取Redis 节点数组。
 * @method void setInstanceNodeIds(array $InstanceNodeIds) 设置Redis 节点数组。
 * @method integer getLimit() 获取top 数目，默认为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置top 数目，默认为20，最大值为100。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 */
class DescribeRedisTopHotKeysRequest extends AbstractModel
{
    /**
     * @var string 实例 ID 。
     */
    public $InstanceId;

    /**
     * @var string 开始时间，如“2024-09-22T00:00:00+00:00”。0天 < 当前服务器时间 - 开始时间 <= 10天。
     */
    public $StartTime;

    /**
     * @var string 结束时间，如“2024-09-22T01:00:00+00:00”，0天 < 结束时间 - 开始时间 <= 10天。
     */
    public $EndTime;

    /**
     * @var string 服务产品类型，仅仅支持值 "redis" - 云数据库 Redis。
     */
    public $Product;

    /**
     * @var array Redis 节点数组。
     */
    public $InstanceNodeIds;

    /**
     * @var integer top 数目，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @param string $InstanceId 实例 ID 。
     * @param string $StartTime 开始时间，如“2024-09-22T00:00:00+00:00”。0天 < 当前服务器时间 - 开始时间 <= 10天。
     * @param string $EndTime 结束时间，如“2024-09-22T01:00:00+00:00”，0天 < 结束时间 - 开始时间 <= 10天。
     * @param string $Product 服务产品类型，仅仅支持值 "redis" - 云数据库 Redis。
     * @param array $InstanceNodeIds Redis 节点数组。
     * @param integer $Limit top 数目，默认为20，最大值为100。
     * @param integer $Offset 偏移量，默认为0。
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("InstanceNodeIds",$param) and $param["InstanceNodeIds"] !== null) {
            $this->InstanceNodeIds = $param["InstanceNodeIds"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
