<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 工单的常用信息返回
 *
 * @method string getWorkOrderId() 获取工单号
 * @method void setWorkOrderId(string $WorkOrderId) 设置工单号
 * @method string getServiceType() 获取服务类型，一个服务可能会产生多个工单
 * @method void setServiceType(string $ServiceType) 设置服务类型，一个服务可能会产生多个工单
 * @method string getOrderType() 获取工单类型
 * @method void setOrderType(string $OrderType) 设置工单类型
 * @method string getOrderStatus() 获取工单状态
 * @method void setOrderStatus(string $OrderStatus) 设置工单状态
 * @method string getCreator() 获取工单创建人
 * @method void setCreator(string $Creator) 设置工单创建人
 * @method string getCreateTime() 获取工单创建时间
 * @method void setCreateTime(string $CreateTime) 设置工单创建时间
 * @method string getFinishTime() 获取工单完成时间
 * @method void setFinishTime(string $FinishTime) 设置工单完成时间
 */
class WorkOrderData extends AbstractModel
{
    /**
     * @var string 工单号
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
     * @var string 工单状态
     */
    public $OrderStatus;

    /**
     * @var string 工单创建人
     */
    public $Creator;

    /**
     * @var string 工单创建时间
     */
    public $CreateTime;

    /**
     * @var string 工单完成时间
     */
    public $FinishTime;

    /**
     * @param string $WorkOrderId 工单号
     * @param string $ServiceType 服务类型，一个服务可能会产生多个工单
     * @param string $OrderType 工单类型
     * @param string $OrderStatus 工单状态
     * @param string $Creator 工单创建人
     * @param string $CreateTime 工单创建时间
     * @param string $FinishTime 工单完成时间
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

        if (array_key_exists("OrderStatus",$param) and $param["OrderStatus"] !== null) {
            $this->OrderStatus = $param["OrderStatus"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }
    }
}
