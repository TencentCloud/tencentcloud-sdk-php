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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工单信息的简要，一般用于工单创建的返回
 *
 * @method string getWorkOrderId() 获取工单id
 * @method void setWorkOrderId(string $WorkOrderId) 设置工单id
 * @method string getServiceType() 获取服务类型，一个服务可能会产生多个工单
 * @method void setServiceType(string $ServiceType) 设置服务类型，一个服务可能会产生多个工单
 * @method string getOrderType() 获取工单类型
 * @method void setOrderType(string $OrderType) 设置工单类型
 */
class WorkOrderTinyInfo extends AbstractModel
{
    /**
     * @var string 工单id
     */
    public $WorkOrderId;

    /**
     * @var string 服务类型，一个服务可能会产生多个工单
     */
    public $ServiceType;

    /**
     * @var string 工单类型
     */
    public $OrderType;

    /**
     * @param string $WorkOrderId 工单id
     * @param string $ServiceType 服务类型，一个服务可能会产生多个工单
     * @param string $OrderType 工单类型
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
        if (array_key_exists("WorkOrderId",$param) and $param["WorkOrderId"] !== null) {
            $this->WorkOrderId = $param["WorkOrderId"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }
    }
}
