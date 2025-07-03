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
 * DescribeDeviceWorkOrderDetail返回参数结构体
 *
 * @method string getOrderId() 获取工单ID
 * @method void setOrderId(string $OrderId) 设置工单ID
 * @method string getServiceType() 获取服务类型
 * @method void setServiceType(string $ServiceType) 设置服务类型
 * @method string getOrderType() 获取工单类型
 * @method void setOrderType(string $OrderType) 设置工单类型
 * @method string getOrderStatus() 获取工单状态
 * @method void setOrderStatus(string $OrderStatus) 设置工单状态
 * @method array getStepSet() 获取工单流程状态
 * @method void setStepSet(array $StepSet) 设置工单流程状态
 * @method array getDeviceSet() 获取工单设备信息
 * @method void setDeviceSet(array $DeviceSet) 设置工单设备信息
 * @method DeviceOrderBaseInfo getBaseInfo() 获取工单的入参信息
 * @method void setBaseInfo(DeviceOrderBaseInfo $BaseInfo) 设置工单的入参信息
 * @method string getRejectReason() 获取工单的拒绝原因，工单状态为reject的时候返回
 * @method void setRejectReason(string $RejectReason) 设置工单的拒绝原因，工单状态为reject的时候返回
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDeviceWorkOrderDetailResponse extends AbstractModel
{
    /**
     * @var string 工单ID
     */
    public $OrderId;

    /**
     * @var string 服务类型
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
     * @var array 工单流程状态
     */
    public $StepSet;

    /**
     * @var array 工单设备信息
     */
    public $DeviceSet;

    /**
     * @var DeviceOrderBaseInfo 工单的入参信息
     */
    public $BaseInfo;

    /**
     * @var string 工单的拒绝原因，工单状态为reject的时候返回
     */
    public $RejectReason;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $OrderId 工单ID
     * @param string $ServiceType 服务类型
     * @param string $OrderType 工单类型
     * @param string $OrderStatus 工单状态
     * @param array $StepSet 工单流程状态
     * @param array $DeviceSet 工单设备信息
     * @param DeviceOrderBaseInfo $BaseInfo 工单的入参信息
     * @param string $RejectReason 工单的拒绝原因，工单状态为reject的时候返回
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
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

        if (array_key_exists("StepSet",$param) and $param["StepSet"] !== null) {
            $this->StepSet = [];
            foreach ($param["StepSet"] as $key => $value){
                $obj = new OrderStep();
                $obj->deserialize($value);
                array_push($this->StepSet, $obj);
            }
        }

        if (array_key_exists("DeviceSet",$param) and $param["DeviceSet"] !== null) {
            $this->DeviceSet = [];
            foreach ($param["DeviceSet"] as $key => $value){
                $obj = new DeviceHistory();
                $obj->deserialize($value);
                array_push($this->DeviceSet, $obj);
            }
        }

        if (array_key_exists("BaseInfo",$param) and $param["BaseInfo"] !== null) {
            $this->BaseInfo = new DeviceOrderBaseInfo();
            $this->BaseInfo->deserialize($param["BaseInfo"]);
        }

        if (array_key_exists("RejectReason",$param) and $param["RejectReason"] !== null) {
            $this->RejectReason = $param["RejectReason"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
