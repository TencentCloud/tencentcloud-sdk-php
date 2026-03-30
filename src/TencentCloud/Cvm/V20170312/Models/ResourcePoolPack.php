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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例资源池
 *
 * @method string getDedicatedResourcePackId() 获取实例资源池ID。形如：rpp-rn99mzt2。
 * @method void setDedicatedResourcePackId(string $DedicatedResourcePackId) 设置实例资源池ID。形如：rpp-rn99mzt2。
 * @method string getDedicatedResourcePackName() 获取实例资源池的名称。
 * @method void setDedicatedResourcePackName(string $DedicatedResourcePackName) 设置实例资源池的名称。
 * @method string getZone() 获取实例资源池预扣包所在可用区。形如：ap-guangzhou-6。
返回项：<a href="https://cloud.tencent.com/document/product/213/6091">可用区列表</a>
 * @method void setZone(string $Zone) 设置实例资源池预扣包所在可用区。形如：ap-guangzhou-6。
返回项：<a href="https://cloud.tencent.com/document/product/213/6091">可用区列表</a>
 * @method string getInstanceType() 获取实例资源池预扣包的规格，仅支持半整机/整机规格。形如：SA9.96XLARGE1152（SA9半整机）。
 * @method void setInstanceType(string $InstanceType) 设置实例资源池预扣包的规格，仅支持半整机/整机规格。形如：SA9.96XLARGE1152（SA9半整机）。
 * @method string getInstanceFamily() 获取实例资源池预扣包的实例类型。形如：SA9。
 * @method void setInstanceFamily(string $InstanceFamily) 设置实例资源池预扣包的实例类型。形如：SA9。
 * @method string getResourcePoolPackType() 获取实例资源池类型。
返回项：EXCLUSIVE (独享) | SHARED (共享)。
 * @method void setResourcePoolPackType(string $ResourcePoolPackType) 设置实例资源池类型。
返回项：EXCLUSIVE (独享) | SHARED (共享)。
 * @method string getStatus() 获取实例资源池状态。
返回项：CREATING (创建中) | ACTIVE (运行中) | FAILED (创建失败) | RETIRED (已过期)。
 * @method void setStatus(string $Status) 设置实例资源池状态。
返回项：CREATING (创建中) | ACTIVE (运行中) | FAILED (创建失败) | RETIRED (已过期)。
 * @method ResourceCount getTotalCapacity() 获取实例资源池总容量。
 * @method void setTotalCapacity(ResourceCount $TotalCapacity) 设置实例资源池总容量。
 * @method ResourceCount getAvailableCapacity() 获取实例资源池剩余容量。
 * @method void setAvailableCapacity(ResourceCount $AvailableCapacity) 设置实例资源池剩余容量。
 * @method string getHostIp() 获取底层物理机IP（已加密）。
 * @method void setHostIp(string $HostIp) 设置底层物理机IP（已加密）。
 * @method string getRackId() 获取机架ID（已加密）。
 * @method void setRackId(string $RackId) 设置机架ID（已加密）。
 * @method string getSwitchId() 获取交换机ID（已加密）。
 * @method void setSwitchId(string $SwitchId) 设置交换机ID（已加密）。
 * @method boolean getAutoPlacement() 获取自动放置开关状态。开启则在不指定实例资源池创建实例时，系统会在开启了该能力的实例资源池里寻找合适的池子创建实例。关闭则在不指定实例资源池创建实例时，系统不会在该池子里创建实例，只有在指定实例资源池创建实例时，指定了该池子的ID，才允许在池子内创建实例。
 * @method void setAutoPlacement(boolean $AutoPlacement) 设置自动放置开关状态。开启则在不指定实例资源池创建实例时，系统会在开启了该能力的实例资源池里寻找合适的池子创建实例。关闭则在不指定实例资源池创建实例时，系统不会在该池子里创建实例，只有在指定实例资源池创建实例时，指定了该池子的ID，才允许在池子内创建实例。
 * @method string getRenewFlag() 获取自动续费标识。
返回项：NOTIFY_AND_AUTO_RENEW (通知且自动续费) | NOTIFY_AND_MANUAL_RENEW (通知不自动续费) | DISABLE_NOTIFY_AND_MANUAL_RENEW (不通知不自动续费)。
 * @method void setRenewFlag(string $RenewFlag) 设置自动续费标识。
返回项：NOTIFY_AND_AUTO_RENEW (通知且自动续费) | NOTIFY_AND_MANUAL_RENEW (通知不自动续费) | DISABLE_NOTIFY_AND_MANUAL_RENEW (不通知不自动续费)。
 * @method string getStartTime() 获取实例资源池预扣包创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
 * @method void setStartTime(string $StartTime) 设置实例资源池预扣包创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
 * @method string getEndTime() 获取实例资源池到期时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
 * @method void setEndTime(string $EndTime) 设置实例资源池到期时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
 */
class ResourcePoolPack extends AbstractModel
{
    /**
     * @var string 实例资源池ID。形如：rpp-rn99mzt2。
     */
    public $DedicatedResourcePackId;

    /**
     * @var string 实例资源池的名称。
     */
    public $DedicatedResourcePackName;

    /**
     * @var string 实例资源池预扣包所在可用区。形如：ap-guangzhou-6。
返回项：<a href="https://cloud.tencent.com/document/product/213/6091">可用区列表</a>
     */
    public $Zone;

    /**
     * @var string 实例资源池预扣包的规格，仅支持半整机/整机规格。形如：SA9.96XLARGE1152（SA9半整机）。
     */
    public $InstanceType;

    /**
     * @var string 实例资源池预扣包的实例类型。形如：SA9。
     */
    public $InstanceFamily;

    /**
     * @var string 实例资源池类型。
返回项：EXCLUSIVE (独享) | SHARED (共享)。
     */
    public $ResourcePoolPackType;

    /**
     * @var string 实例资源池状态。
返回项：CREATING (创建中) | ACTIVE (运行中) | FAILED (创建失败) | RETIRED (已过期)。
     */
    public $Status;

    /**
     * @var ResourceCount 实例资源池总容量。
     */
    public $TotalCapacity;

    /**
     * @var ResourceCount 实例资源池剩余容量。
     */
    public $AvailableCapacity;

    /**
     * @var string 底层物理机IP（已加密）。
     */
    public $HostIp;

    /**
     * @var string 机架ID（已加密）。
     */
    public $RackId;

    /**
     * @var string 交换机ID（已加密）。
     */
    public $SwitchId;

    /**
     * @var boolean 自动放置开关状态。开启则在不指定实例资源池创建实例时，系统会在开启了该能力的实例资源池里寻找合适的池子创建实例。关闭则在不指定实例资源池创建实例时，系统不会在该池子里创建实例，只有在指定实例资源池创建实例时，指定了该池子的ID，才允许在池子内创建实例。
     */
    public $AutoPlacement;

    /**
     * @var string 自动续费标识。
返回项：NOTIFY_AND_AUTO_RENEW (通知且自动续费) | NOTIFY_AND_MANUAL_RENEW (通知不自动续费) | DISABLE_NOTIFY_AND_MANUAL_RENEW (不通知不自动续费)。
     */
    public $RenewFlag;

    /**
     * @var string 实例资源池预扣包创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
     */
    public $StartTime;

    /**
     * @var string 实例资源池到期时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
     */
    public $EndTime;

    /**
     * @param string $DedicatedResourcePackId 实例资源池ID。形如：rpp-rn99mzt2。
     * @param string $DedicatedResourcePackName 实例资源池的名称。
     * @param string $Zone 实例资源池预扣包所在可用区。形如：ap-guangzhou-6。
返回项：<a href="https://cloud.tencent.com/document/product/213/6091">可用区列表</a>
     * @param string $InstanceType 实例资源池预扣包的规格，仅支持半整机/整机规格。形如：SA9.96XLARGE1152（SA9半整机）。
     * @param string $InstanceFamily 实例资源池预扣包的实例类型。形如：SA9。
     * @param string $ResourcePoolPackType 实例资源池类型。
返回项：EXCLUSIVE (独享) | SHARED (共享)。
     * @param string $Status 实例资源池状态。
返回项：CREATING (创建中) | ACTIVE (运行中) | FAILED (创建失败) | RETIRED (已过期)。
     * @param ResourceCount $TotalCapacity 实例资源池总容量。
     * @param ResourceCount $AvailableCapacity 实例资源池剩余容量。
     * @param string $HostIp 底层物理机IP（已加密）。
     * @param string $RackId 机架ID（已加密）。
     * @param string $SwitchId 交换机ID（已加密）。
     * @param boolean $AutoPlacement 自动放置开关状态。开启则在不指定实例资源池创建实例时，系统会在开启了该能力的实例资源池里寻找合适的池子创建实例。关闭则在不指定实例资源池创建实例时，系统不会在该池子里创建实例，只有在指定实例资源池创建实例时，指定了该池子的ID，才允许在池子内创建实例。
     * @param string $RenewFlag 自动续费标识。
返回项：NOTIFY_AND_AUTO_RENEW (通知且自动续费) | NOTIFY_AND_MANUAL_RENEW (通知不自动续费) | DISABLE_NOTIFY_AND_MANUAL_RENEW (不通知不自动续费)。
     * @param string $StartTime 实例资源池预扣包创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
     * @param string $EndTime 实例资源池到期时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
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
        if (array_key_exists("DedicatedResourcePackId",$param) and $param["DedicatedResourcePackId"] !== null) {
            $this->DedicatedResourcePackId = $param["DedicatedResourcePackId"];
        }

        if (array_key_exists("DedicatedResourcePackName",$param) and $param["DedicatedResourcePackName"] !== null) {
            $this->DedicatedResourcePackName = $param["DedicatedResourcePackName"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            $this->InstanceFamily = $param["InstanceFamily"];
        }

        if (array_key_exists("ResourcePoolPackType",$param) and $param["ResourcePoolPackType"] !== null) {
            $this->ResourcePoolPackType = $param["ResourcePoolPackType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TotalCapacity",$param) and $param["TotalCapacity"] !== null) {
            $this->TotalCapacity = new ResourceCount();
            $this->TotalCapacity->deserialize($param["TotalCapacity"]);
        }

        if (array_key_exists("AvailableCapacity",$param) and $param["AvailableCapacity"] !== null) {
            $this->AvailableCapacity = new ResourceCount();
            $this->AvailableCapacity->deserialize($param["AvailableCapacity"]);
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("RackId",$param) and $param["RackId"] !== null) {
            $this->RackId = $param["RackId"];
        }

        if (array_key_exists("SwitchId",$param) and $param["SwitchId"] !== null) {
            $this->SwitchId = $param["SwitchId"];
        }

        if (array_key_exists("AutoPlacement",$param) and $param["AutoPlacement"] !== null) {
            $this->AutoPlacement = $param["AutoPlacement"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
