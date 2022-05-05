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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 专家服务订单信息
 *
 * @method integer getOrderId() 获取订单id
 * @method void setOrderId(integer $OrderId) 设置订单id
 * @method integer getInquireType() 获取订单类型 1应急 2 旗舰重保 3 安全管家
 * @method void setInquireType(integer $InquireType) 设置订单类型 1应急 2 旗舰重保 3 安全管家
 * @method integer getInquireNum() 获取服务数量
 * @method void setInquireNum(integer $InquireNum) 设置服务数量
 * @method string getBeginTime() 获取服务开始时间
 * @method void setBeginTime(string $BeginTime) 设置服务开始时间
 * @method string getEndTime() 获取服务结束时间
 * @method void setEndTime(string $EndTime) 设置服务结束时间
 * @method integer getServiceTime() 获取服务时长几个月
 * @method void setServiceTime(integer $ServiceTime) 设置服务时长几个月
 * @method integer getStatus() 获取订单状态 0 未启动 1 服务中 2已过期 3完成，4退费销毁
 * @method void setStatus(integer $Status) 设置订单状态 0 未启动 1 服务中 2已过期 3完成，4退费销毁
 */
class ExpertServiceOrderInfo extends AbstractModel
{
    /**
     * @var integer 订单id
     */
    public $OrderId;

    /**
     * @var integer 订单类型 1应急 2 旗舰重保 3 安全管家
     */
    public $InquireType;

    /**
     * @var integer 服务数量
     */
    public $InquireNum;

    /**
     * @var string 服务开始时间
     */
    public $BeginTime;

    /**
     * @var string 服务结束时间
     */
    public $EndTime;

    /**
     * @var integer 服务时长几个月
     */
    public $ServiceTime;

    /**
     * @var integer 订单状态 0 未启动 1 服务中 2已过期 3完成，4退费销毁
     */
    public $Status;

    /**
     * @param integer $OrderId 订单id
     * @param integer $InquireType 订单类型 1应急 2 旗舰重保 3 安全管家
     * @param integer $InquireNum 服务数量
     * @param string $BeginTime 服务开始时间
     * @param string $EndTime 服务结束时间
     * @param integer $ServiceTime 服务时长几个月
     * @param integer $Status 订单状态 0 未启动 1 服务中 2已过期 3完成，4退费销毁
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

        if (array_key_exists("InquireType",$param) and $param["InquireType"] !== null) {
            $this->InquireType = $param["InquireType"];
        }

        if (array_key_exists("InquireNum",$param) and $param["InquireNum"] !== null) {
            $this->InquireNum = $param["InquireNum"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ServiceTime",$param) and $param["ServiceTime"] !== null) {
            $this->ServiceTime = $param["ServiceTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
