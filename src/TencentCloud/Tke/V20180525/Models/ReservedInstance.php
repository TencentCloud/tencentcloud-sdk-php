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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预留实例
 *
 * @method string getReservedInstanceId() 获取预留实例ID
 * @method void setReservedInstanceId(string $ReservedInstanceId) 设置预留实例ID
 * @method string getReservedInstanceName() 获取预留实例名称
 * @method void setReservedInstanceName(string $ReservedInstanceName) 设置预留实例名称
 * @method string getStatus() 获取预留券状态
 * @method void setStatus(string $Status) 设置预留券状态
 * @method integer getTimeSpan() 获取有效期，单位：月
 * @method void setTimeSpan(integer $TimeSpan) 设置有效期，单位：月
 * @method string getResourceType() 获取抵扣资源类型
 * @method void setResourceType(string $ResourceType) 设置抵扣资源类型
 * @method float getCpu() 获取资源核数
 * @method void setCpu(float $Cpu) 设置资源核数
 * @method float getMemory() 获取资源内存，单位：Gi
 * @method void setMemory(float $Memory) 设置资源内存，单位：Gi
 * @method string getScope() 获取预留券的范围，默认值region。
 * @method void setScope(string $Scope) 设置预留券的范围，默认值region。
 * @method string getCreatedAt() 获取创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
 * @method string getActiveAt() 获取生效时间
 * @method void setActiveAt(string $ActiveAt) 设置生效时间
 * @method string getExpireAt() 获取过期时间
 * @method void setExpireAt(string $ExpireAt) 设置过期时间
 * @method string getGpuCount() 获取GPU卡数
 * @method void setGpuCount(string $GpuCount) 设置GPU卡数
 * @method integer getAutoRenewFlag() 获取自动续费标记
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标记
 * @method string getClusterId() 获取集群 ID
 * @method void setClusterId(string $ClusterId) 设置集群 ID
 * @method string getNodeName() 获取节点名称
 * @method void setNodeName(string $NodeName) 设置节点名称
 * @method string getDeductStatus() 获取 上个周期预留券的抵扣状态，Deduct、NotDeduct
 * @method void setDeductStatus(string $DeductStatus) 设置 上个周期预留券的抵扣状态，Deduct、NotDeduct
 */
class ReservedInstance extends AbstractModel
{
    /**
     * @var string 预留实例ID
     */
    public $ReservedInstanceId;

    /**
     * @var string 预留实例名称
     */
    public $ReservedInstanceName;

    /**
     * @var string 预留券状态
     */
    public $Status;

    /**
     * @var integer 有效期，单位：月
     */
    public $TimeSpan;

    /**
     * @var string 抵扣资源类型
     */
    public $ResourceType;

    /**
     * @var float 资源核数
     */
    public $Cpu;

    /**
     * @var float 资源内存，单位：Gi
     */
    public $Memory;

    /**
     * @var string 预留券的范围，默认值region。
     */
    public $Scope;

    /**
     * @var string 创建时间
     */
    public $CreatedAt;

    /**
     * @var string 生效时间
     */
    public $ActiveAt;

    /**
     * @var string 过期时间
     */
    public $ExpireAt;

    /**
     * @var string GPU卡数
     */
    public $GpuCount;

    /**
     * @var integer 自动续费标记
     */
    public $AutoRenewFlag;

    /**
     * @var string 集群 ID
     */
    public $ClusterId;

    /**
     * @var string 节点名称
     */
    public $NodeName;

    /**
     * @var string  上个周期预留券的抵扣状态，Deduct、NotDeduct
     */
    public $DeductStatus;

    /**
     * @param string $ReservedInstanceId 预留实例ID
     * @param string $ReservedInstanceName 预留实例名称
     * @param string $Status 预留券状态
     * @param integer $TimeSpan 有效期，单位：月
     * @param string $ResourceType 抵扣资源类型
     * @param float $Cpu 资源核数
     * @param float $Memory 资源内存，单位：Gi
     * @param string $Scope 预留券的范围，默认值region。
     * @param string $CreatedAt 创建时间
     * @param string $ActiveAt 生效时间
     * @param string $ExpireAt 过期时间
     * @param string $GpuCount GPU卡数
     * @param integer $AutoRenewFlag 自动续费标记
     * @param string $ClusterId 集群 ID
     * @param string $NodeName 节点名称
     * @param string $DeductStatus  上个周期预留券的抵扣状态，Deduct、NotDeduct
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
        if (array_key_exists("ReservedInstanceId",$param) and $param["ReservedInstanceId"] !== null) {
            $this->ReservedInstanceId = $param["ReservedInstanceId"];
        }

        if (array_key_exists("ReservedInstanceName",$param) and $param["ReservedInstanceName"] !== null) {
            $this->ReservedInstanceName = $param["ReservedInstanceName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("ActiveAt",$param) and $param["ActiveAt"] !== null) {
            $this->ActiveAt = $param["ActiveAt"];
        }

        if (array_key_exists("ExpireAt",$param) and $param["ExpireAt"] !== null) {
            $this->ExpireAt = $param["ExpireAt"];
        }

        if (array_key_exists("GpuCount",$param) and $param["GpuCount"] !== null) {
            $this->GpuCount = $param["GpuCount"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("DeductStatus",$param) and $param["DeductStatus"] !== null) {
            $this->DeductStatus = $param["DeductStatus"];
        }
    }
}
