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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用型负载均衡操作锁配置。
 *
 * @method string getLockReason() 获取锁定的原因。在**LoadBalancerStatus**为**Abnormal**时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLockReason(string $LockReason) 设置锁定的原因。在**LoadBalancerStatus**为**Abnormal**时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLockType() 获取锁定的类型。取值 ：

- **SecurityLocked**：安全锁定。

- **RelatedResourceLocked**：关联锁定。

- **FinancialLocked**：欠费锁定。

- **ResidualLocked**：残留锁定。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLockType(string $LockType) 设置锁定的类型。取值 ：

- **SecurityLocked**：安全锁定。

- **RelatedResourceLocked**：关联锁定。

- **FinancialLocked**：欠费锁定。

- **ResidualLocked**：残留锁定。
注意：此字段可能返回 null，表示取不到有效值。
 */
class LoadBalancerOperationLocksItem extends AbstractModel
{
    /**
     * @var string 锁定的原因。在**LoadBalancerStatus**为**Abnormal**时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LockReason;

    /**
     * @var string 锁定的类型。取值 ：

- **SecurityLocked**：安全锁定。

- **RelatedResourceLocked**：关联锁定。

- **FinancialLocked**：欠费锁定。

- **ResidualLocked**：残留锁定。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LockType;

    /**
     * @param string $LockReason 锁定的原因。在**LoadBalancerStatus**为**Abnormal**时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LockType 锁定的类型。取值 ：

- **SecurityLocked**：安全锁定。

- **RelatedResourceLocked**：关联锁定。

- **FinancialLocked**：欠费锁定。

- **ResidualLocked**：残留锁定。
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
        if (array_key_exists("LockReason",$param) and $param["LockReason"] !== null) {
            $this->LockReason = $param["LockReason"];
        }

        if (array_key_exists("LockType",$param) and $param["LockType"] !== null) {
            $this->LockType = $param["LockType"];
        }
    }
}
