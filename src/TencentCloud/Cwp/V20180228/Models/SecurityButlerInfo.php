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
 * 安全管家列表信息
 *
 * @method integer getId() 获取数据id
 * @method void setId(integer $Id) 设置数据id
 * @method integer getOrderId() 获取订单id
 * @method void setOrderId(integer $OrderId) 设置订单id
 * @method string getQuuid() 获取cvm id
 * @method void setQuuid(string $Quuid) 设置cvm id
 * @method integer getStatus() 获取服务状态 0-服务中,1-已到期 2已销毁
 * @method void setStatus(integer $Status) 设置服务状态 0-服务中,1-已到期 2已销毁
 * @method string getStartTime() 获取服务开始时间
 * @method void setStartTime(string $StartTime) 设置服务开始时间
 * @method string getEndTime() 获取服务结束时间
 * @method void setEndTime(string $EndTime) 设置服务结束时间
 * @method string getHostName() 获取主机名称
 * @method void setHostName(string $HostName) 设置主机名称
 * @method string getHostIp() 获取主机Ip
 * @method void setHostIp(string $HostIp) 设置主机Ip
 * @method string getUuid() 获取主机 uuid
 * @method void setUuid(string $Uuid) 设置主机 uuid
 * @method integer getRiskCount() 获取主机风险数
 * @method void setRiskCount(integer $RiskCount) 设置主机风险数
 */
class SecurityButlerInfo extends AbstractModel
{
    /**
     * @var integer 数据id
     */
    public $Id;

    /**
     * @var integer 订单id
     */
    public $OrderId;

    /**
     * @var string cvm id
     */
    public $Quuid;

    /**
     * @var integer 服务状态 0-服务中,1-已到期 2已销毁
     */
    public $Status;

    /**
     * @var string 服务开始时间
     */
    public $StartTime;

    /**
     * @var string 服务结束时间
     */
    public $EndTime;

    /**
     * @var string 主机名称
     */
    public $HostName;

    /**
     * @var string 主机Ip
     */
    public $HostIp;

    /**
     * @var string 主机 uuid
     */
    public $Uuid;

    /**
     * @var integer 主机风险数
     */
    public $RiskCount;

    /**
     * @param integer $Id 数据id
     * @param integer $OrderId 订单id
     * @param string $Quuid cvm id
     * @param integer $Status 服务状态 0-服务中,1-已到期 2已销毁
     * @param string $StartTime 服务开始时间
     * @param string $EndTime 服务结束时间
     * @param string $HostName 主机名称
     * @param string $HostIp 主机Ip
     * @param string $Uuid 主机 uuid
     * @param integer $RiskCount 主机风险数
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }
    }
}
