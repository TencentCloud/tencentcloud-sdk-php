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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyOrderStatus请求参数结构体
 *
 * @method string getStatus() 获取要更新成的状态
 * @method void setStatus(string $Status) 设置要更新成的状态
 * @method string getDedicatedClusterOrderId() 获取大订单ID，可以在本地专用集群的基础信息页获取大订单ID
 * @method void setDedicatedClusterOrderId(string $DedicatedClusterOrderId) 设置大订单ID，可以在本地专用集群的基础信息页获取大订单ID
 * @method array getSubOrderIds() 获取小订单ID，进入大订单的详情页，可以看到小订单ID
 * @method void setSubOrderIds(array $SubOrderIds) 设置小订单ID，进入大订单的详情页，可以看到小订单ID
 */
class ModifyOrderStatusRequest extends AbstractModel
{
    /**
     * @var string 要更新成的状态
     */
    public $Status;

    /**
     * @var string 大订单ID，可以在本地专用集群的基础信息页获取大订单ID
     */
    public $DedicatedClusterOrderId;

    /**
     * @var array 小订单ID，进入大订单的详情页，可以看到小订单ID
     */
    public $SubOrderIds;

    /**
     * @param string $Status 要更新成的状态
     * @param string $DedicatedClusterOrderId 大订单ID，可以在本地专用集群的基础信息页获取大订单ID
     * @param array $SubOrderIds 小订单ID，进入大订单的详情页，可以看到小订单ID
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DedicatedClusterOrderId",$param) and $param["DedicatedClusterOrderId"] !== null) {
            $this->DedicatedClusterOrderId = $param["DedicatedClusterOrderId"];
        }

        if (array_key_exists("SubOrderIds",$param) and $param["SubOrderIds"] !== null) {
            $this->SubOrderIds = $param["SubOrderIds"];
        }
    }
}
