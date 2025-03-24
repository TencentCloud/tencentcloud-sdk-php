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
 * DescribePersonnelVisitWorkOrderDetail返回参数结构体
 *
 * @method array getStepSet() 获取工单进度	
 * @method void setStepSet(array $StepSet) 设置工单进度	
 * @method PersonnelVisitBaseInfo getBaseInfo() 获取工单详情
 * @method void setBaseInfo(PersonnelVisitBaseInfo $BaseInfo) 设置工单详情
 * @method array getPersonnelSet() 获取到访人员详情
 * @method void setPersonnelSet(array $PersonnelSet) 设置到访人员详情
 * @method string getOrderStatus() 获取工单状态 订单状态, processing 处理中 ，reject 已拒绝 ，finish 已完成，exception 异常
 * @method void setOrderStatus(string $OrderStatus) 设置工单状态 订单状态, processing 处理中 ，reject 已拒绝 ，finish 已完成，exception 异常
 * @method string getRejectReason() 获取拒绝原因
 * @method void setRejectReason(string $RejectReason) 设置拒绝原因
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePersonnelVisitWorkOrderDetailResponse extends AbstractModel
{
    /**
     * @var array 工单进度	
     */
    public $StepSet;

    /**
     * @var PersonnelVisitBaseInfo 工单详情
     */
    public $BaseInfo;

    /**
     * @var array 到访人员详情
     */
    public $PersonnelSet;

    /**
     * @var string 工单状态 订单状态, processing 处理中 ，reject 已拒绝 ，finish 已完成，exception 异常
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
     * @param array $StepSet 工单进度	
     * @param PersonnelVisitBaseInfo $BaseInfo 工单详情
     * @param array $PersonnelSet 到访人员详情
     * @param string $OrderStatus 工单状态 订单状态, processing 处理中 ，reject 已拒绝 ，finish 已完成，exception 异常
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
            $this->BaseInfo = new PersonnelVisitBaseInfo();
            $this->BaseInfo->deserialize($param["BaseInfo"]);
        }

        if (array_key_exists("PersonnelSet",$param) and $param["PersonnelSet"] !== null) {
            $this->PersonnelSet = [];
            foreach ($param["PersonnelSet"] as $key => $value){
                $obj = new Personnel();
                $obj->deserialize($value);
                array_push($this->PersonnelSet, $obj);
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
