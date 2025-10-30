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
 * DescribeModelEvaluationWorkOrderDetail返回参数结构体
 *
 * @method array getStepSet() 获取工单进度
 * @method void setStepSet(array $StepSet) 设置工单进度
 * @method ModelEvaluationBaseInfo getBaseInfo() 获取工单详情
 * @method void setBaseInfo(ModelEvaluationBaseInfo $BaseInfo) 设置工单详情
 * @method array getNetDeviceModelSet() 获取评估中的网络设备型号详情
 * @method void setNetDeviceModelSet(array $NetDeviceModelSet) 设置评估中的网络设备型号详情
 * @method array getServerModelSet() 获取评估中的服务器型号详情
 * @method void setServerModelSet(array $ServerModelSet) 设置评估中的服务器型号详情
 * @method string getOrderStatus() 获取订单状态, process 处理中 ，reject 已拒绝 ，finish 已完成，exception 异常
 * @method void setOrderStatus(string $OrderStatus) 设置订单状态, process 处理中 ，reject 已拒绝 ，finish 已完成，exception 异常
 * @method string getRejectReason() 获取工单拒绝原因
 * @method void setRejectReason(string $RejectReason) 设置工单拒绝原因
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeModelEvaluationWorkOrderDetailResponse extends AbstractModel
{
    /**
     * @var array 工单进度
     */
    public $StepSet;

    /**
     * @var ModelEvaluationBaseInfo 工单详情
     */
    public $BaseInfo;

    /**
     * @var array 评估中的网络设备型号详情
     */
    public $NetDeviceModelSet;

    /**
     * @var array 评估中的服务器型号详情
     */
    public $ServerModelSet;

    /**
     * @var string 订单状态, process 处理中 ，reject 已拒绝 ，finish 已完成，exception 异常
     */
    public $OrderStatus;

    /**
     * @var string 工单拒绝原因
     */
    public $RejectReason;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $StepSet 工单进度
     * @param ModelEvaluationBaseInfo $BaseInfo 工单详情
     * @param array $NetDeviceModelSet 评估中的网络设备型号详情
     * @param array $ServerModelSet 评估中的服务器型号详情
     * @param string $OrderStatus 订单状态, process 处理中 ，reject 已拒绝 ，finish 已完成，exception 异常
     * @param string $RejectReason 工单拒绝原因
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
        if (array_key_exists("StepSet",$param) and $param["StepSet"] !== null) {
            $this->StepSet = [];
            foreach ($param["StepSet"] as $key => $value){
                $obj = new OrderStep();
                $obj->deserialize($value);
                array_push($this->StepSet, $obj);
            }
        }

        if (array_key_exists("BaseInfo",$param) and $param["BaseInfo"] !== null) {
            $this->BaseInfo = new ModelEvaluationBaseInfo();
            $this->BaseInfo->deserialize($param["BaseInfo"]);
        }

        if (array_key_exists("NetDeviceModelSet",$param) and $param["NetDeviceModelSet"] !== null) {
            $this->NetDeviceModelSet = [];
            foreach ($param["NetDeviceModelSet"] as $key => $value){
                $obj = new ModelVersionDetail();
                $obj->deserialize($value);
                array_push($this->NetDeviceModelSet, $obj);
            }
        }

        if (array_key_exists("ServerModelSet",$param) and $param["ServerModelSet"] !== null) {
            $this->ServerModelSet = [];
            foreach ($param["ServerModelSet"] as $key => $value){
                $obj = new ModelVersionDetail();
                $obj->deserialize($value);
                array_push($this->ServerModelSet, $obj);
            }
        }

        if (array_key_exists("OrderStatus",$param) and $param["OrderStatus"] !== null) {
            $this->OrderStatus = $param["OrderStatus"];
        }

        if (array_key_exists("RejectReason",$param) and $param["RejectReason"] !== null) {
            $this->RejectReason = $param["RejectReason"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
