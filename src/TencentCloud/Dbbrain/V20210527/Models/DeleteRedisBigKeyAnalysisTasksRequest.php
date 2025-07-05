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
 * DeleteRedisBigKeyAnalysisTasks请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method array getAsyncRequestIds() 获取待删除的异步任务ID列表。
 * @method void setAsyncRequestIds(array $AsyncRequestIds) 设置待删除的异步任务ID列表。
 * @method string getProduct() 获取服务产品类型，支持值包括 "redis" - 云数据库 Redis。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值包括 "redis" - 云数据库 Redis。
 */
class DeleteRedisBigKeyAnalysisTasksRequest extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var array 待删除的异步任务ID列表。
     */
    public $AsyncRequestIds;

    /**
     * @var string 服务产品类型，支持值包括 "redis" - 云数据库 Redis。
     */
    public $Product;

    /**
     * @param string $InstanceId 实例ID。
     * @param array $AsyncRequestIds 待删除的异步任务ID列表。
     * @param string $Product 服务产品类型，支持值包括 "redis" - 云数据库 Redis。
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

        if (array_key_exists("AsyncRequestIds",$param) and $param["AsyncRequestIds"] !== null) {
            $this->AsyncRequestIds = $param["AsyncRequestIds"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
