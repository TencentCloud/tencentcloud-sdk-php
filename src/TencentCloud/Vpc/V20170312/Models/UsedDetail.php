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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 共享流量包用量明细
 *
 * @method string getTrafficPackageId() 获取流量包唯一ID
 * @method void setTrafficPackageId(string $TrafficPackageId) 设置流量包唯一ID
 * @method string getTrafficPackageName() 获取流量包名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrafficPackageName(string $TrafficPackageName) 设置流量包名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method TrafficFlow getTotalAmount() 获取流量包总量
 * @method void setTotalAmount(TrafficFlow $TotalAmount) 设置流量包总量
 * @method TrafficFlow getDeduction() 获取本次抵扣
 * @method void setDeduction(TrafficFlow $Deduction) 设置本次抵扣
 * @method TrafficFlow getRemainingAmount() 获取本次抵扣后剩余量
 * @method void setRemainingAmount(TrafficFlow $RemainingAmount) 设置本次抵扣后剩余量
 * @method string getTime() 获取抵扣时间
 * @method void setTime(string $Time) 设置抵扣时间
 * @method string getResourceType() 获取资源类型。可能的值: CVM, LB, NAT, HAVIP, EIP
 * @method void setResourceType(string $ResourceType) 设置资源类型。可能的值: CVM, LB, NAT, HAVIP, EIP
 * @method string getResourceId() 获取资源ID
 * @method void setResourceId(string $ResourceId) 设置资源ID
 * @method string getResourceName() 获取资源名称
 * @method void setResourceName(string $ResourceName) 设置资源名称
 * @method string getDeadline() 获取流量包到期时间
 * @method void setDeadline(string $Deadline) 设置流量包到期时间
 */
class UsedDetail extends AbstractModel
{
    /**
     * @var string 流量包唯一ID
     */
    public $TrafficPackageId;

    /**
     * @var string 流量包名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrafficPackageName;

    /**
     * @var TrafficFlow 流量包总量
     */
    public $TotalAmount;

    /**
     * @var TrafficFlow 本次抵扣
     */
    public $Deduction;

    /**
     * @var TrafficFlow 本次抵扣后剩余量
     */
    public $RemainingAmount;

    /**
     * @var string 抵扣时间
     */
    public $Time;

    /**
     * @var string 资源类型。可能的值: CVM, LB, NAT, HAVIP, EIP
     */
    public $ResourceType;

    /**
     * @var string 资源ID
     */
    public $ResourceId;

    /**
     * @var string 资源名称
     */
    public $ResourceName;

    /**
     * @var string 流量包到期时间
     */
    public $Deadline;

    /**
     * @param string $TrafficPackageId 流量包唯一ID
     * @param string $TrafficPackageName 流量包名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param TrafficFlow $TotalAmount 流量包总量
     * @param TrafficFlow $Deduction 本次抵扣
     * @param TrafficFlow $RemainingAmount 本次抵扣后剩余量
     * @param string $Time 抵扣时间
     * @param string $ResourceType 资源类型。可能的值: CVM, LB, NAT, HAVIP, EIP
     * @param string $ResourceId 资源ID
     * @param string $ResourceName 资源名称
     * @param string $Deadline 流量包到期时间
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
        if (array_key_exists("TrafficPackageId",$param) and $param["TrafficPackageId"] !== null) {
            $this->TrafficPackageId = $param["TrafficPackageId"];
        }

        if (array_key_exists("TrafficPackageName",$param) and $param["TrafficPackageName"] !== null) {
            $this->TrafficPackageName = $param["TrafficPackageName"];
        }

        if (array_key_exists("TotalAmount",$param) and $param["TotalAmount"] !== null) {
            $this->TotalAmount = new TrafficFlow();
            $this->TotalAmount->deserialize($param["TotalAmount"]);
        }

        if (array_key_exists("Deduction",$param) and $param["Deduction"] !== null) {
            $this->Deduction = new TrafficFlow();
            $this->Deduction->deserialize($param["Deduction"]);
        }

        if (array_key_exists("RemainingAmount",$param) and $param["RemainingAmount"] !== null) {
            $this->RemainingAmount = new TrafficFlow();
            $this->RemainingAmount->deserialize($param["RemainingAmount"]);
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }
    }
}
