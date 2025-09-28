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
 * DescribeIndexRecommendAggregationSlowLogs请求参数结构体
 *
 * @method string getProduct() 获取服务产品类型，支持值包括："mongodb" - 云数据库 。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值包括："mongodb" - 云数据库 。
 * @method string getInstanceId() 获取实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
 * @method string getDb() 获取数据库名称。
 * @method void setDb(string $Db) 设置数据库名称。
 * @method string getCollection() 获取表名。
 * @method void setCollection(string $Collection) 设置表名。
 * @method array getSigns() 获取签名。这个值是 [DescribeIndexRecommendInfo](https://cloud.tencent.com/document/product/1130/98911) 接口返回
 * @method void setSigns(array $Signs) 设置签名。这个值是 [DescribeIndexRecommendInfo](https://cloud.tencent.com/document/product/1130/98911) 接口返回
 */
class DescribeIndexRecommendAggregationSlowLogsRequest extends AbstractModel
{
    /**
     * @var string 服务产品类型，支持值包括："mongodb" - 云数据库 。
     */
    public $Product;

    /**
     * @var string 实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
     */
    public $InstanceId;

    /**
     * @var string 数据库名称。
     */
    public $Db;

    /**
     * @var string 表名。
     */
    public $Collection;

    /**
     * @var array 签名。这个值是 [DescribeIndexRecommendInfo](https://cloud.tencent.com/document/product/1130/98911) 接口返回
     */
    public $Signs;

    /**
     * @param string $Product 服务产品类型，支持值包括："mongodb" - 云数据库 。
     * @param string $InstanceId 实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
     * @param string $Db 数据库名称。
     * @param string $Collection 表名。
     * @param array $Signs 签名。这个值是 [DescribeIndexRecommendInfo](https://cloud.tencent.com/document/product/1130/98911) 接口返回
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

        if (array_key_exists("Db",$param) and $param["Db"] !== null) {
            $this->Db = $param["Db"];
        }

        if (array_key_exists("Collection",$param) and $param["Collection"] !== null) {
            $this->Collection = $param["Collection"];
        }

        if (array_key_exists("Signs",$param) and $param["Signs"] !== null) {
            $this->Signs = $param["Signs"];
        }
    }
}
