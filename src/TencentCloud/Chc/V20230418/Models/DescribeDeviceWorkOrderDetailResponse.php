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
 * DescribeDeviceWorkOrderDetail返回参数结构体
 *
 * @method string getOrderId() 获取<p>工单ID</p>
 * @method void setOrderId(string $OrderId) 设置<p>工单ID</p>
 * @method string getServiceType() 获取<p>服务类型</p>
 * @method void setServiceType(string $ServiceType) 设置<p>服务类型</p>
 * @method string getOrderType() 获取<p>工单类型</p>
 * @method void setOrderType(string $OrderType) 设置<p>工单类型</p>
 * @method string getOrderStatus() 获取<p>工单状态</p>
 * @method void setOrderStatus(string $OrderStatus) 设置<p>工单状态</p>
 * @method array getStepSet() 获取<p>工单流程状态</p>
 * @method void setStepSet(array $StepSet) 设置<p>工单流程状态</p>
 * @method array getDeviceSet() 获取<p>工单设备信息</p>
 * @method void setDeviceSet(array $DeviceSet) 设置<p>工单设备信息</p>
 * @method DeviceOrderBaseInfo getBaseInfo() 获取<p>工单的入参信息</p>
 * @method void setBaseInfo(DeviceOrderBaseInfo $BaseInfo) 设置<p>工单的入参信息</p>
 * @method string getRejectReason() 获取<p>工单的拒绝原因，工单状态为reject的时候返回</p>
 * @method void setRejectReason(string $RejectReason) 设置<p>工单的拒绝原因，工单状态为reject的时候返回</p>
 * @method SLAInfo getSLAInfo() 获取<p>工单 SLA 信息</p>
 * @method void setSLAInfo(SLAInfo $SLAInfo) 设置<p>工单 SLA 信息</p>
 * @method array getPreOrderSet() 获取<p>前序未完成的工单号</p>
 * @method void setPreOrderSet(array $PreOrderSet) 设置<p>前序未完成的工单号</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDeviceWorkOrderDetailResponse extends AbstractModel
{
    /**
     * @var string <p>工单ID</p>
     */
    public $OrderId;

    /**
     * @var string <p>服务类型</p>
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
     * @var array <p>工单流程状态</p>
     */
    public $StepSet;

    /**
     * @var array <p>工单设备信息</p>
     */
    public $DeviceSet;

    /**
     * @var DeviceOrderBaseInfo <p>工单的入参信息</p>
     */
    public $BaseInfo;

    /**
     * @var string <p>工单的拒绝原因，工单状态为reject的时候返回</p>
     */
    public $RejectReason;

    /**
     * @var SLAInfo <p>工单 SLA 信息</p>
     */
    public $SLAInfo;

    /**
     * @var array <p>前序未完成的工单号</p>
     */
    public $PreOrderSet;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $OrderId <p>工单ID</p>
     * @param string $ServiceType <p>服务类型</p>
     * @param string $OrderType <p>工单类型</p>
     * @param string $OrderStatus <p>工单状态</p>
     * @param array $StepSet <p>工单流程状态</p>
     * @param array $DeviceSet <p>工单设备信息</p>
     * @param DeviceOrderBaseInfo $BaseInfo <p>工单的入参信息</p>
     * @param string $RejectReason <p>工单的拒绝原因，工单状态为reject的时候返回</p>
     * @param SLAInfo $SLAInfo <p>工单 SLA 信息</p>
     * @param array $PreOrderSet <p>前序未完成的工单号</p>
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

        if (array_key_exists("SLAInfo",$param) and $param["SLAInfo"] !== null) {
            $this->SLAInfo = new SLAInfo();
            $this->SLAInfo->deserialize($param["SLAInfo"]);
        }

        if (array_key_exists("PreOrderSet",$param) and $param["PreOrderSet"] !== null) {
            $this->PreOrderSet = $param["PreOrderSet"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
