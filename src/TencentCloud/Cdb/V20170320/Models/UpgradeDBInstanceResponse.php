<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getDealIds() 获取短订单ID，用于调用云API相关接口，如[获取订单信息](https://cloud.tencent.com/document/api/403/4392)
 * @method void setDealIds(array $DealIds) 设置短订单ID，用于调用云API相关接口，如[获取订单信息](https://cloud.tencent.com/document/api/403/4392)
 * @method array getDealNames() 获取长订单ID，用于反馈订单问题给腾讯云官方客服
 * @method void setDealNames(array $DealNames) 设置长订单ID，用于反馈订单问题给腾讯云官方客服
 * @method string getAsyncRequestId() 获取异步任务的请求ID，可使用此ID查询异步任务的执行结果
 * @method void setAsyncRequestId(string $AsyncRequestId) 设置异步任务的请求ID，可使用此ID查询异步任务的执行结果
 * @method string getRequestId() 获取唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 */

/**
 *UpgradeDBInstance返回参数结构体
 */
class UpgradeDBInstanceResponse extends AbstractModel
{
    /**
     * @var array 短订单ID，用于调用云API相关接口，如[获取订单信息](https://cloud.tencent.com/document/api/403/4392)
     */
    public $DealIds;

    /**
     * @var array 长订单ID，用于反馈订单问题给腾讯云官方客服
     */
    public $DealNames;

    /**
     * @var string 异步任务的请求ID，可使用此ID查询异步任务的执行结果
     */
    public $AsyncRequestId;

    /**
     * @var string 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    public $RequestId;
    /**
     * @param array $DealIds 短订单ID，用于调用云API相关接口，如[获取订单信息](https://cloud.tencent.com/document/api/403/4392)
     * @param array $DealNames 长订单ID，用于反馈订单问题给腾讯云官方客服
     * @param string $AsyncRequestId 异步任务的请求ID，可使用此ID查询异步任务的执行结果
     * @param string $RequestId 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DealIds",$param) and $param["DealIds"] !== null) {
            $this->DealIds = $param["DealIds"];
        }

        if (array_key_exists("DealNames",$param) and $param["DealNames"] !== null) {
            $this->DealNames = $param["DealNames"];
        }

        if (array_key_exists("AsyncRequestId",$param) and $param["AsyncRequestId"] !== null) {
            $this->AsyncRequestId = $param["AsyncRequestId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
