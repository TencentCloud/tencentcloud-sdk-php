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
 * DescribeCommonServiceWorkOrderDetail返回参数结构体
 *
 * @method array getStepSet() 获取进度
 * @method void setStepSet(array $StepSet) 设置进度
 * @method CommonServiceBaseInfo getBaseInfo() 获取基本信息
 * @method void setBaseInfo(CommonServiceBaseInfo $BaseInfo) 设置基本信息
 * @method array getDeviceSet() 获取设备信息
 * @method void setDeviceSet(array $DeviceSet) 设置设备信息
 * @method string getOrderStatus() 获取工单状态
 * @method void setOrderStatus(string $OrderStatus) 设置工单状态
 * @method string getRejectReason() 获取拒绝原因
 * @method void setRejectReason(string $RejectReason) 设置拒绝原因
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCommonServiceWorkOrderDetailResponse extends AbstractModel
{
    /**
     * @var array 进度
     */
    public $StepSet;

    /**
     * @var CommonServiceBaseInfo 基本信息
     */
    public $BaseInfo;

    /**
     * @var array 设备信息
     */
    public $DeviceSet;

    /**
     * @var string 工单状态
     */
    public $OrderStatus;

    /**
     * @var string 拒绝原因
     */
    public $RejectReason;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $StepSet 进度
     * @param CommonServiceBaseInfo $BaseInfo 基本信息
     * @param array $DeviceSet 设备信息
     * @param string $OrderStatus 工单状态
     * @param string $RejectReason 拒绝原因
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
            $this->BaseInfo = new CommonServiceBaseInfo();
            $this->BaseInfo->deserialize($param["BaseInfo"]);
        }

        if (array_key_exists("DeviceSet",$param) and $param["DeviceSet"] !== null) {
            $this->DeviceSet = [];
            foreach ($param["DeviceSet"] as $key => $value){
                $obj = new DevicePosition();
                $obj->deserialize($value);
                array_push($this->DeviceSet, $obj);
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
