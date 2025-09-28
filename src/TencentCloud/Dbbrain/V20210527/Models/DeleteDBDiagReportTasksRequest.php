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
 * DeleteDBDiagReportTasks请求参数结构体
 *
 * @method array getAsyncRequestIds() 获取需要删除的任务id列表。可通过[查询健康报告生成任务列表](https://cloud.tencent.com/document/product/1130/57805)获取
 * @method void setAsyncRequestIds(array $AsyncRequestIds) 设置需要删除的任务id列表。可通过[查询健康报告生成任务列表](https://cloud.tencent.com/document/product/1130/57805)获取
 * @method string getInstanceId() 获取实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
 * @method string getProduct() 获取服务产品类型，支持值："mysql" - 云数据库 MySQL；"cynosdb" - 云数据库 TDSQL-C for MySQL，"dbbrain-mysql" - 自建 MySQL，"redis" - 云数据库 Redis，默认为"mysql"。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值："mysql" - 云数据库 MySQL；"cynosdb" - 云数据库 TDSQL-C for MySQL，"dbbrain-mysql" - 自建 MySQL，"redis" - 云数据库 Redis，默认为"mysql"。
 */
class DeleteDBDiagReportTasksRequest extends AbstractModel
{
    /**
     * @var array 需要删除的任务id列表。可通过[查询健康报告生成任务列表](https://cloud.tencent.com/document/product/1130/57805)获取
     */
    public $AsyncRequestIds;

    /**
     * @var string 实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
     */
    public $InstanceId;

    /**
     * @var string 服务产品类型，支持值："mysql" - 云数据库 MySQL；"cynosdb" - 云数据库 TDSQL-C for MySQL，"dbbrain-mysql" - 自建 MySQL，"redis" - 云数据库 Redis，默认为"mysql"。
     */
    public $Product;

    /**
     * @param array $AsyncRequestIds 需要删除的任务id列表。可通过[查询健康报告生成任务列表](https://cloud.tencent.com/document/product/1130/57805)获取
     * @param string $InstanceId 实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
     * @param string $Product 服务产品类型，支持值："mysql" - 云数据库 MySQL；"cynosdb" - 云数据库 TDSQL-C for MySQL，"dbbrain-mysql" - 自建 MySQL，"redis" - 云数据库 Redis，默认为"mysql"。
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
        if (array_key_exists("AsyncRequestIds",$param) and $param["AsyncRequestIds"] !== null) {
            $this->AsyncRequestIds = $param["AsyncRequestIds"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
