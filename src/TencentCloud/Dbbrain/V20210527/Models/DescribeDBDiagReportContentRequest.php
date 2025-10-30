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
 * DescribeDBDiagReportContent请求参数结构体
 *
 * @method string getInstanceId() 获取实例名
 * @method void setInstanceId(string $InstanceId) 设置实例名
 * @method integer getAsyncRequestId() 获取异步任务ID
 * @method void setAsyncRequestId(integer $AsyncRequestId) 设置异步任务ID
 * @method string getProduct() 获取服务产品类型，支持值："mysql" - 云数据库 MySQL，"redis" - 云数据库 Redis，"mongodb" - 云数据库 MongoDB，默认为"mysql"。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值："mysql" - 云数据库 MySQL，"redis" - 云数据库 Redis，"mongodb" - 云数据库 MongoDB，默认为"mysql"。
 */
class DescribeDBDiagReportContentRequest extends AbstractModel
{
    /**
     * @var string 实例名
     */
    public $InstanceId;

    /**
     * @var integer 异步任务ID
     */
    public $AsyncRequestId;

    /**
     * @var string 服务产品类型，支持值："mysql" - 云数据库 MySQL，"redis" - 云数据库 Redis，"mongodb" - 云数据库 MongoDB，默认为"mysql"。
     */
    public $Product;

    /**
     * @param string $InstanceId 实例名
     * @param integer $AsyncRequestId 异步任务ID
     * @param string $Product 服务产品类型，支持值："mysql" - 云数据库 MySQL，"redis" - 云数据库 Redis，"mongodb" - 云数据库 MongoDB，默认为"mysql"。
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

        if (array_key_exists("AsyncRequestId",$param) and $param["AsyncRequestId"] !== null) {
            $this->AsyncRequestId = $param["AsyncRequestId"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
