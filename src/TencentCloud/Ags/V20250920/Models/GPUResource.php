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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 已购买GPU资源详细信息
 *
 * @method string getResourceId() 获取<p>GPU 资源 ID，与沙箱 InstanceId、底层 VM ID 不同。</p>
 * @method void setResourceId(string $ResourceId) 设置<p>GPU 资源 ID，与沙箱 InstanceId、底层 VM ID 不同。</p>
 * @method string getResourceGroupId() 获取<p>所属 GPU 资源组 ID。</p>
 * @method void setResourceGroupId(string $ResourceGroupId) 设置<p>所属 GPU 资源组 ID。</p>
 * @method string getState() 获取<p>GPU资源状态，大小写敏感：Delivering（准备中）、Active（已生效）、Isolated（已隔离）、Destroying（释放中）。不返回 Destroyed 和补偿完成的 Failed。</p>
 * @method void setState(string $State) 设置<p>GPU资源状态，大小写敏感：Delivering（准备中）、Active（已生效）、Isolated（已隔离）、Destroying（释放中）。不返回 Destroyed 和补偿完成的 Failed。</p>
 * @method string getAllocationState() 获取<p>占用状态，大小写敏感：Idle（可领取）、Allocating（领取中）、InUse（使用中）、Returning（归还中）、Unavailable（暂不可用）。不能根据 InstanceId 是否存在判断是否空闲。</p>
 * @method void setAllocationState(string $AllocationState) 设置<p>占用状态，大小写敏感：Idle（可领取）、Allocating（领取中）、InUse（使用中）、Returning（归还中）、Unavailable（暂不可用）。不能根据 InstanceId 是否存在判断是否空闲。</p>
 * @method string getInstanceId() 获取<p>已绑定的最终 AGS 沙箱实例 ID；尚未绑定或未占用时可能不返回。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>已绑定的最终 AGS 沙箱实例 ID；尚未绑定或未占用时可能不返回。</p>
 * @method string getActiveAt() 获取<p>生效时间，未生效时可能不返回。</p>
 * @method void setActiveAt(string $ActiveAt) 设置<p>生效时间，未生效时可能不返回。</p>
 * @method string getExpireAt() 获取<p>到期时间，未生效时可能不返回。</p>
 * @method void setExpireAt(string $ExpireAt) 设置<p>到期时间，未生效时可能不返回。</p>
 * @method integer getRenewFlag() 获取<p>续费标记：0 不自动续费，1 自动续费，2 不再续费。</p>
 * @method void setRenewFlag(integer $RenewFlag) 设置<p>续费标记：0 不自动续费，1 自动续费，2 不再续费。</p>
 * @method string getStatusReason() 获取<p>安全的状态原因标识；空串表示无额外原因，PhysicalUnavailable 表示物理状态不可用，BindingPending 表示绑定身份尚待确认。未知值应作状态确认中处理。</p>
 * @method void setStatusReason(string $StatusReason) 设置<p>安全的状态原因标识；空串表示无额外原因，PhysicalUnavailable 表示物理状态不可用，BindingPending 表示绑定身份尚待确认。未知值应作状态确认中处理。</p>
 */
class GPUResource extends AbstractModel
{
    /**
     * @var string <p>GPU 资源 ID，与沙箱 InstanceId、底层 VM ID 不同。</p>
     */
    public $ResourceId;

    /**
     * @var string <p>所属 GPU 资源组 ID。</p>
     */
    public $ResourceGroupId;

    /**
     * @var string <p>GPU资源状态，大小写敏感：Delivering（准备中）、Active（已生效）、Isolated（已隔离）、Destroying（释放中）。不返回 Destroyed 和补偿完成的 Failed。</p>
     */
    public $State;

    /**
     * @var string <p>占用状态，大小写敏感：Idle（可领取）、Allocating（领取中）、InUse（使用中）、Returning（归还中）、Unavailable（暂不可用）。不能根据 InstanceId 是否存在判断是否空闲。</p>
     */
    public $AllocationState;

    /**
     * @var string <p>已绑定的最终 AGS 沙箱实例 ID；尚未绑定或未占用时可能不返回。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>生效时间，未生效时可能不返回。</p>
     */
    public $ActiveAt;

    /**
     * @var string <p>到期时间，未生效时可能不返回。</p>
     */
    public $ExpireAt;

    /**
     * @var integer <p>续费标记：0 不自动续费，1 自动续费，2 不再续费。</p>
     */
    public $RenewFlag;

    /**
     * @var string <p>安全的状态原因标识；空串表示无额外原因，PhysicalUnavailable 表示物理状态不可用，BindingPending 表示绑定身份尚待确认。未知值应作状态确认中处理。</p>
     */
    public $StatusReason;

    /**
     * @param string $ResourceId <p>GPU 资源 ID，与沙箱 InstanceId、底层 VM ID 不同。</p>
     * @param string $ResourceGroupId <p>所属 GPU 资源组 ID。</p>
     * @param string $State <p>GPU资源状态，大小写敏感：Delivering（准备中）、Active（已生效）、Isolated（已隔离）、Destroying（释放中）。不返回 Destroyed 和补偿完成的 Failed。</p>
     * @param string $AllocationState <p>占用状态，大小写敏感：Idle（可领取）、Allocating（领取中）、InUse（使用中）、Returning（归还中）、Unavailable（暂不可用）。不能根据 InstanceId 是否存在判断是否空闲。</p>
     * @param string $InstanceId <p>已绑定的最终 AGS 沙箱实例 ID；尚未绑定或未占用时可能不返回。</p>
     * @param string $ActiveAt <p>生效时间，未生效时可能不返回。</p>
     * @param string $ExpireAt <p>到期时间，未生效时可能不返回。</p>
     * @param integer $RenewFlag <p>续费标记：0 不自动续费，1 自动续费，2 不再续费。</p>
     * @param string $StatusReason <p>安全的状态原因标识；空串表示无额外原因，PhysicalUnavailable 表示物理状态不可用，BindingPending 表示绑定身份尚待确认。未知值应作状态确认中处理。</p>
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("AllocationState",$param) and $param["AllocationState"] !== null) {
            $this->AllocationState = $param["AllocationState"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ActiveAt",$param) and $param["ActiveAt"] !== null) {
            $this->ActiveAt = $param["ActiveAt"];
        }

        if (array_key_exists("ExpireAt",$param) and $param["ExpireAt"] !== null) {
            $this->ExpireAt = $param["ExpireAt"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("StatusReason",$param) and $param["StatusReason"] !== null) {
            $this->StatusReason = $param["StatusReason"];
        }
    }
}
