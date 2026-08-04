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
 * 工单的常用信息返回
 *
 * @method string getWorkOrderId() 获取<p>工单号</p>
 * @method void setWorkOrderId(string $WorkOrderId) 设置<p>工单号</p>
 * @method string getServiceType() 获取<p>服务类型，一个服务可能会产生多个工单</p>
 * @method void setServiceType(string $ServiceType) 设置<p>服务类型，一个服务可能会产生多个工单</p>
 * @method string getOrderType() 获取<p>工单类型</p>
 * @method void setOrderType(string $OrderType) 设置<p>工单类型</p>
 * @method string getOrderStatus() 获取<p>工单状态</p>
 * @method void setOrderStatus(string $OrderStatus) 设置<p>工单状态</p>
 * @method string getCreator() 获取<p>工单创建人</p>
 * @method void setCreator(string $Creator) 设置<p>工单创建人</p>
 * @method string getCreateTime() 获取<p>工单创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>工单创建时间</p>
 * @method string getFinishTime() 获取<p>工单完成时间</p>
 * @method void setFinishTime(string $FinishTime) 设置<p>工单完成时间</p>
 * @method string getTicketId() 获取<p>工单关联的dcops单号</p>
 * @method void setTicketId(string $TicketId) 设置<p>工单关联的dcops单号</p>
 * @method SLAInfo getSLAInfo() 获取<p>SLA</p>
 * @method void setSLAInfo(SLAInfo $SLAInfo) 设置<p>SLA</p>
 */
class WorkOrderData extends AbstractModel
{
    /**
     * @var string <p>工单号</p>
     */
    public $WorkOrderId;

    /**
     * @var string <p>服务类型，一个服务可能会产生多个工单</p>
     */
    public $ServiceType;

    /**
     * @var string <p>工单类型</p>
     */
    public $OrderType;

    /**
     * @var string <p>工单状态</p>
     */
    public $OrderStatus;

    /**
     * @var string <p>工单创建人</p>
     */
    public $Creator;

    /**
     * @var string <p>工单创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>工单完成时间</p>
     */
    public $FinishTime;

    /**
     * @var string <p>工单关联的dcops单号</p>
     */
    public $TicketId;

    /**
     * @var SLAInfo <p>SLA</p>
     */
    public $SLAInfo;

    /**
     * @param string $WorkOrderId <p>工单号</p>
     * @param string $ServiceType <p>服务类型，一个服务可能会产生多个工单</p>
     * @param string $OrderType <p>工单类型</p>
     * @param string $OrderStatus <p>工单状态</p>
     * @param string $Creator <p>工单创建人</p>
     * @param string $CreateTime <p>工单创建时间</p>
     * @param string $FinishTime <p>工单完成时间</p>
     * @param string $TicketId <p>工单关联的dcops单号</p>
     * @param SLAInfo $SLAInfo <p>SLA</p>
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

        if (array_key_exists("TicketId",$param) and $param["TicketId"] !== null) {
            $this->TicketId = $param["TicketId"];
        }

        if (array_key_exists("SLAInfo",$param) and $param["SLAInfo"] !== null) {
            $this->SLAInfo = new SLAInfo();
            $this->SLAInfo->deserialize($param["SLAInfo"]);
        }
    }
}
