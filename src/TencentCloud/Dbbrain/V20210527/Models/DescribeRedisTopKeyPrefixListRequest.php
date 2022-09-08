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
 * DescribeRedisTopKeyPrefixList请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method string getDate() 获取查询日期，如2021-05-27，最早可为前30天的日期。
 * @method void setDate(string $Date) 设置查询日期，如2021-05-27，最早可为前30天的日期。
 * @method string getProduct() 获取服务产品类型，支持值包括 "redis" - 云数据库 Redis。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值包括 "redis" - 云数据库 Redis。
 * @method integer getLimit() 获取查询数目，默认为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置查询数目，默认为20，最大值为100。
 */
class DescribeRedisTopKeyPrefixListRequest extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var string 查询日期，如2021-05-27，最早可为前30天的日期。
     */
    public $Date;

    /**
     * @var string 服务产品类型，支持值包括 "redis" - 云数据库 Redis。
     */
    public $Product;

    /**
     * @var integer 查询数目，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @param string $InstanceId 实例ID。
     * @param string $Date 查询日期，如2021-05-27，最早可为前30天的日期。
     * @param string $Product 服务产品类型，支持值包括 "redis" - 云数据库 Redis。
     * @param integer $Limit 查询数目，默认为20，最大值为100。
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

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
