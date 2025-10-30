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
 * DescribeDBAutonomyEvents请求参数结构体
 *
 * @method string getProduct() 获取服务产品类型，支持值包括： "redis" - 云数据库 Redis。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值包括： "redis" - 云数据库 Redis。
 * @method string getInstanceId() 获取实列ID。
 * @method void setInstanceId(string $InstanceId) 设置实列ID。
 * @method string getStartTime() 获取开始时间。
 * @method void setStartTime(string $StartTime) 设置开始时间。
 * @method string getEndTime() 获取结束时间。
 * @method void setEndTime(string $EndTime) 设置结束时间。
 * @method integer getOffset() 获取分页参数，默认值为0。
 * @method void setOffset(integer $Offset) 设置分页参数，默认值为0。
 * @method integer getLimit() 获取分页参数，默认值为20。
 * @method void setLimit(integer $Limit) 设置分页参数，默认值为20。
 */
class DescribeDBAutonomyEventsRequest extends AbstractModel
{
    /**
     * @var string 服务产品类型，支持值包括： "redis" - 云数据库 Redis。
     */
    public $Product;

    /**
     * @var string 实列ID。
     */
    public $InstanceId;

    /**
     * @var string 开始时间。
     */
    public $StartTime;

    /**
     * @var string 结束时间。
     */
    public $EndTime;

    /**
     * @var integer 分页参数，默认值为0。
     */
    public $Offset;

    /**
     * @var integer 分页参数，默认值为20。
     */
    public $Limit;

    /**
     * @param string $Product 服务产品类型，支持值包括： "redis" - 云数据库 Redis。
     * @param string $InstanceId 实列ID。
     * @param string $StartTime 开始时间。
     * @param string $EndTime 结束时间。
     * @param integer $Offset 分页参数，默认值为0。
     * @param integer $Limit 分页参数，默认值为20。
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
