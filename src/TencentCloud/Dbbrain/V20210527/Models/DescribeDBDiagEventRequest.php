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
 * DescribeDBDiagEvent请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。

查询TDSQL MySQL分布式实例:Instanceld：填写集群ID&Shard实例ID，如：dcdbt-157xxxk&shard-qxxxx
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。

查询TDSQL MySQL分布式实例:Instanceld：填写集群ID&Shard实例ID，如：dcdbt-157xxxk&shard-qxxxx
 * @method integer getEventId() 获取事件 ID 。通过“获取实例诊断历史[DescribeDBDiagHistory](https://cloud.tencent.com/document/product/1130/39559) ”获取。
 * @method void setEventId(integer $EventId) 设置事件 ID 。通过“获取实例诊断历史[DescribeDBDiagHistory](https://cloud.tencent.com/document/product/1130/39559) ”获取。
 * @method string getProduct() 获取服务产品类型，支持值："mysql" - 云数据库 MySQL；"mariadb"-mariadb;"cynosdb"-TDSQL-C for MySQL ;"dcdb"-TDSQL MySQL ;"redis" - 云数据库 Redis，默认为"mysql"。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值："mysql" - 云数据库 MySQL；"mariadb"-mariadb;"cynosdb"-TDSQL-C for MySQL ;"dcdb"-TDSQL MySQL ;"redis" - 云数据库 Redis，默认为"mysql"。
 */
class DescribeDBDiagEventRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。

查询TDSQL MySQL分布式实例:Instanceld：填写集群ID&Shard实例ID，如：dcdbt-157xxxk&shard-qxxxx
     */
    public $InstanceId;

    /**
     * @var integer 事件 ID 。通过“获取实例诊断历史[DescribeDBDiagHistory](https://cloud.tencent.com/document/product/1130/39559) ”获取。
     */
    public $EventId;

    /**
     * @var string 服务产品类型，支持值："mysql" - 云数据库 MySQL；"mariadb"-mariadb;"cynosdb"-TDSQL-C for MySQL ;"dcdb"-TDSQL MySQL ;"redis" - 云数据库 Redis，默认为"mysql"。
     */
    public $Product;

    /**
     * @param string $InstanceId 实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。

查询TDSQL MySQL分布式实例:Instanceld：填写集群ID&Shard实例ID，如：dcdbt-157xxxk&shard-qxxxx
     * @param integer $EventId 事件 ID 。通过“获取实例诊断历史[DescribeDBDiagHistory](https://cloud.tencent.com/document/product/1130/39559) ”获取。
     * @param string $Product 服务产品类型，支持值："mysql" - 云数据库 MySQL；"mariadb"-mariadb;"cynosdb"-TDSQL-C for MySQL ;"dcdb"-TDSQL MySQL ;"redis" - 云数据库 Redis，默认为"mysql"。
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

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
