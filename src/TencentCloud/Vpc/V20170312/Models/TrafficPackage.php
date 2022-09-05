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
 * 流量包信息描述类型
 *
 * @method string getTrafficPackageId() 获取流量包唯一ID
 * @method void setTrafficPackageId(string $TrafficPackageId) 设置流量包唯一ID
 * @method string getTrafficPackageName() 获取流量包名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrafficPackageName(string $TrafficPackageName) 设置流量包名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTotalAmount() 获取流量包总量，单位GB
 * @method void setTotalAmount(float $TotalAmount) 设置流量包总量，单位GB
 * @method float getRemainingAmount() 获取流量包剩余量，单位GB
 * @method void setRemainingAmount(float $RemainingAmount) 设置流量包剩余量，单位GB
 * @method string getStatus() 获取流量包状态，可能的值有: AVAILABLE-可用状态， EXPIRED-已过期， EXHAUSTED-已用完， REFUNDED-已退还， DELETED-已删除
 * @method void setStatus(string $Status) 设置流量包状态，可能的值有: AVAILABLE-可用状态， EXPIRED-已过期， EXHAUSTED-已用完， REFUNDED-已退还， DELETED-已删除
 * @method string getCreatedTime() 获取流量包创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置流量包创建时间
 * @method string getDeadline() 获取流量包截止时间
 * @method void setDeadline(string $Deadline) 设置流量包截止时间
 * @method float getUsedAmount() 获取已使用的流量，单位GB
 * @method void setUsedAmount(float $UsedAmount) 设置已使用的流量，单位GB
 * @method array getTagSet() 获取流量包标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagSet(array $TagSet) 设置流量包标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeductType() 获取区分闲时流量包与全时流量包
 * @method void setDeductType(string $DeductType) 设置区分闲时流量包与全时流量包
 */
class TrafficPackage extends AbstractModel
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
     * @var float 流量包总量，单位GB
     */
    public $TotalAmount;

    /**
     * @var float 流量包剩余量，单位GB
     */
    public $RemainingAmount;

    /**
     * @var string 流量包状态，可能的值有: AVAILABLE-可用状态， EXPIRED-已过期， EXHAUSTED-已用完， REFUNDED-已退还， DELETED-已删除
     */
    public $Status;

    /**
     * @var string 流量包创建时间
     */
    public $CreatedTime;

    /**
     * @var string 流量包截止时间
     */
    public $Deadline;

    /**
     * @var float 已使用的流量，单位GB
     */
    public $UsedAmount;

    /**
     * @var array 流量包标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagSet;

    /**
     * @var string 区分闲时流量包与全时流量包
     */
    public $DeductType;

    /**
     * @param string $TrafficPackageId 流量包唯一ID
     * @param string $TrafficPackageName 流量包名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TotalAmount 流量包总量，单位GB
     * @param float $RemainingAmount 流量包剩余量，单位GB
     * @param string $Status 流量包状态，可能的值有: AVAILABLE-可用状态， EXPIRED-已过期， EXHAUSTED-已用完， REFUNDED-已退还， DELETED-已删除
     * @param string $CreatedTime 流量包创建时间
     * @param string $Deadline 流量包截止时间
     * @param float $UsedAmount 已使用的流量，单位GB
     * @param array $TagSet 流量包标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeductType 区分闲时流量包与全时流量包
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
            $this->TotalAmount = $param["TotalAmount"];
        }

        if (array_key_exists("RemainingAmount",$param) and $param["RemainingAmount"] !== null) {
            $this->RemainingAmount = $param["RemainingAmount"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("UsedAmount",$param) and $param["UsedAmount"] !== null) {
            $this->UsedAmount = $param["UsedAmount"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("DeductType",$param) and $param["DeductType"] !== null) {
            $this->DeductType = $param["DeductType"];
        }
    }
}
