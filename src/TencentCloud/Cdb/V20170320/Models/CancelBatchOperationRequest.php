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
 * @method array getAsyncRequestIds() 获取异步任务请求ID数组
 * @method void setAsyncRequestIds(array $asyncRequestIds) 设置异步任务请求ID数组
 */

/**
 *CancelBatchOperation请求参数结构体
 */
class CancelBatchOperationRequest extends AbstractModel
{
    /**
     * @var array 异步任务请求ID数组
     */
    public $asyncRequestIds;
    /**
     * @param array $asyncRequestIds 异步任务请求ID数组
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
        if (array_key_exists("AsyncRequestIds",$param) and $param["AsyncRequestIds"] !== null) {
            $this->asyncRequestIds = $param["AsyncRequestIds"];
        }
    }
}
