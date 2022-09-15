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
namespace TencentCloud\Eis\V20210601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 运行时详细信息
 *
 * @method integer getRuntimeId() 获取运行时id
 * @method void setRuntimeId(integer $RuntimeId) 设置运行时id
 * @method string getUin() 获取主账号uin
 * @method void setUin(string $Uin) 设置主账号uin
 * @method string getDisplayName() 获取运行时名称，用户输入，同一uin内唯一
 * @method void setDisplayName(string $DisplayName) 设置运行时名称，用户输入，同一uin内唯一
 * @method string getZone() 获取运行时所在地域，tianjin，beijiing，guangzhou等
 * @method void setZone(string $Zone) 设置运行时所在地域，tianjin，beijiing，guangzhou等
 * @method integer getType() 获取运行时类型：0: sandbox, 1:shared, 2:private
 * @method void setType(integer $Type) 设置运行时类型：0: sandbox, 1:shared, 2:private
 * @method integer getStatus() 获取运行时状态：1:running, 2:deleting, 3:creating, 4:scaling, 5:unavailable, 6:deleted, 7:errored
 * @method void setStatus(integer $Status) 设置运行时状态：1:running, 2:deleting, 3:creating, 4:scaling, 5:unavailable, 6:deleted, 7:errored
 * @method integer getCreatedAt() 获取运行时创建时间
 * @method void setCreatedAt(integer $CreatedAt) 设置运行时创建时间
 * @method integer getUpdatedAt() 获取运行时更新时间
 * @method void setUpdatedAt(integer $UpdatedAt) 设置运行时更新时间
 * @method integer getWorkerSize() 获取运行时资源配置，worker总配额，0:0vCore0G, 1:1vCore2G, 2:2vCore4G, 4:4vCore8G, 8:8vCore16G, 12:12vCore24G, 16:16vCore32G, 100:unlimited
 * @method void setWorkerSize(integer $WorkerSize) 设置运行时资源配置，worker总配额，0:0vCore0G, 1:1vCore2G, 2:2vCore4G, 4:4vCore8G, 8:8vCore16G, 12:12vCore24G, 16:16vCore32G, 100:unlimited
 * @method integer getWorkerReplica() 获取运行时资源配置，worker副本数
 * @method void setWorkerReplica(integer $WorkerReplica) 设置运行时资源配置，worker副本数
 * @method integer getRunningInstanceCount() 获取正在运行的应用实例数量
 * @method void setRunningInstanceCount(integer $RunningInstanceCount) 设置正在运行的应用实例数量
 * @method float getCpuUsed() 获取已使用cpu核数
 * @method void setCpuUsed(float $CpuUsed) 设置已使用cpu核数
 * @method float getCpuLimit() 获取cpu核数上限
 * @method void setCpuLimit(float $CpuLimit) 设置cpu核数上限
 * @method float getMemoryUsed() 获取已使用内存 MB
 * @method void setMemoryUsed(float $MemoryUsed) 设置已使用内存 MB
 * @method float getMemoryLimit() 获取内存上限 MB
 * @method void setMemoryLimit(float $MemoryLimit) 设置内存上限 MB
 * @method integer getExpiredAt() 获取运行时过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpiredAt(integer $ExpiredAt) 设置运行时过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getChargeType() 获取收费类型：0:缺省，1:通过订单页自助下单(支持续费/升配等操作)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChargeType(integer $ChargeType) 设置收费类型：0:缺省，1:通过订单页自助下单(支持续费/升配等操作)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResourceLimitType() 获取资源限制类型：0:无限制，1:有限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceLimitType(integer $ResourceLimitType) 设置资源限制类型：0:无限制，1:有限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAutoRenewal() 获取是否开启自动续费
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoRenewal(boolean $AutoRenewal) 设置是否开启自动续费
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuntimeMC extends AbstractModel
{
    /**
     * @var integer 运行时id
     */
    public $RuntimeId;

    /**
     * @var string 主账号uin
     */
    public $Uin;

    /**
     * @var string 运行时名称，用户输入，同一uin内唯一
     */
    public $DisplayName;

    /**
     * @var string 运行时所在地域，tianjin，beijiing，guangzhou等
     */
    public $Zone;

    /**
     * @var integer 运行时类型：0: sandbox, 1:shared, 2:private
     */
    public $Type;

    /**
     * @var integer 运行时状态：1:running, 2:deleting, 3:creating, 4:scaling, 5:unavailable, 6:deleted, 7:errored
     */
    public $Status;

    /**
     * @var integer 运行时创建时间
     */
    public $CreatedAt;

    /**
     * @var integer 运行时更新时间
     */
    public $UpdatedAt;

    /**
     * @var integer 运行时资源配置，worker总配额，0:0vCore0G, 1:1vCore2G, 2:2vCore4G, 4:4vCore8G, 8:8vCore16G, 12:12vCore24G, 16:16vCore32G, 100:unlimited
     */
    public $WorkerSize;

    /**
     * @var integer 运行时资源配置，worker副本数
     */
    public $WorkerReplica;

    /**
     * @var integer 正在运行的应用实例数量
     */
    public $RunningInstanceCount;

    /**
     * @var float 已使用cpu核数
     */
    public $CpuUsed;

    /**
     * @var float cpu核数上限
     */
    public $CpuLimit;

    /**
     * @var float 已使用内存 MB
     */
    public $MemoryUsed;

    /**
     * @var float 内存上限 MB
     */
    public $MemoryLimit;

    /**
     * @var integer 运行时过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpiredAt;

    /**
     * @var integer 收费类型：0:缺省，1:通过订单页自助下单(支持续费/升配等操作)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChargeType;

    /**
     * @var integer 资源限制类型：0:无限制，1:有限制
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceLimitType;

    /**
     * @var boolean 是否开启自动续费
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoRenewal;

    /**
     * @param integer $RuntimeId 运行时id
     * @param string $Uin 主账号uin
     * @param string $DisplayName 运行时名称，用户输入，同一uin内唯一
     * @param string $Zone 运行时所在地域，tianjin，beijiing，guangzhou等
     * @param integer $Type 运行时类型：0: sandbox, 1:shared, 2:private
     * @param integer $Status 运行时状态：1:running, 2:deleting, 3:creating, 4:scaling, 5:unavailable, 6:deleted, 7:errored
     * @param integer $CreatedAt 运行时创建时间
     * @param integer $UpdatedAt 运行时更新时间
     * @param integer $WorkerSize 运行时资源配置，worker总配额，0:0vCore0G, 1:1vCore2G, 2:2vCore4G, 4:4vCore8G, 8:8vCore16G, 12:12vCore24G, 16:16vCore32G, 100:unlimited
     * @param integer $WorkerReplica 运行时资源配置，worker副本数
     * @param integer $RunningInstanceCount 正在运行的应用实例数量
     * @param float $CpuUsed 已使用cpu核数
     * @param float $CpuLimit cpu核数上限
     * @param float $MemoryUsed 已使用内存 MB
     * @param float $MemoryLimit 内存上限 MB
     * @param integer $ExpiredAt 运行时过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ChargeType 收费类型：0:缺省，1:通过订单页自助下单(支持续费/升配等操作)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ResourceLimitType 资源限制类型：0:无限制，1:有限制
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AutoRenewal 是否开启自动续费
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("RuntimeId",$param) and $param["RuntimeId"] !== null) {
            $this->RuntimeId = $param["RuntimeId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("WorkerSize",$param) and $param["WorkerSize"] !== null) {
            $this->WorkerSize = $param["WorkerSize"];
        }

        if (array_key_exists("WorkerReplica",$param) and $param["WorkerReplica"] !== null) {
            $this->WorkerReplica = $param["WorkerReplica"];
        }

        if (array_key_exists("RunningInstanceCount",$param) and $param["RunningInstanceCount"] !== null) {
            $this->RunningInstanceCount = $param["RunningInstanceCount"];
        }

        if (array_key_exists("CpuUsed",$param) and $param["CpuUsed"] !== null) {
            $this->CpuUsed = $param["CpuUsed"];
        }

        if (array_key_exists("CpuLimit",$param) and $param["CpuLimit"] !== null) {
            $this->CpuLimit = $param["CpuLimit"];
        }

        if (array_key_exists("MemoryUsed",$param) and $param["MemoryUsed"] !== null) {
            $this->MemoryUsed = $param["MemoryUsed"];
        }

        if (array_key_exists("MemoryLimit",$param) and $param["MemoryLimit"] !== null) {
            $this->MemoryLimit = $param["MemoryLimit"];
        }

        if (array_key_exists("ExpiredAt",$param) and $param["ExpiredAt"] !== null) {
            $this->ExpiredAt = $param["ExpiredAt"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("ResourceLimitType",$param) and $param["ResourceLimitType"] !== null) {
            $this->ResourceLimitType = $param["ResourceLimitType"];
        }

        if (array_key_exists("AutoRenewal",$param) and $param["AutoRenewal"] !== null) {
            $this->AutoRenewal = $param["AutoRenewal"];
        }
    }
}
