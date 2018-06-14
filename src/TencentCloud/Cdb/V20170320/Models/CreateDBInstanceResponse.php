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
 * @method array getInstanceIds() 获取实例ID列表
 * @method void setInstanceIds(array $InstanceIds) 设置实例ID列表
 * @method string getRequestId() 获取唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 */

/**
 *CreateDBInstance返回参数结构体
 */
class CreateDBInstanceResponse extends AbstractModel
{
    /**
     * @var array 短订单ID，用于调用云API相关接口，如[获取订单信息](https://cloud.tencent.com/document/api/403/4392)
     */
    public $DealIds;

    /**
     * @var array 实例ID列表
     */
    public $InstanceIds;

    /**
     * @var string 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    public $RequestId;
    /**
     * @param array $DealIds 短订单ID，用于调用云API相关接口，如[获取订单信息](https://cloud.tencent.com/document/api/403/4392)
     * @param array $InstanceIds 实例ID列表
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

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
