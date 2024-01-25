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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AcquireLock返回参数结构体
 *
 * @method string getResourcePath() 获取资源唯一路径
 * @method void setResourcePath(string $ResourcePath) 设置资源唯一路径
 * @method integer getLockerId() 获取锁持有者id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLockerId(integer $LockerId) 设置锁持有者id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLockerName() 获取锁持有者displayName
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLockerName(string $LockerName) 设置锁持有者displayName
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getLockedByMe() 获取持有锁标志（true表示被自己锁定）
 * @method void setLockedByMe(boolean $LockedByMe) 设置持有锁标志（true表示被自己锁定）
 * @method boolean getEditFlag() 获取资源是否正在被编辑
 * @method void setEditFlag(boolean $EditFlag) 设置资源是否正在被编辑
 * @method integer getLockTime() 获取资源被锁定时间的时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLockTime(integer $LockTime) 设置资源被锁定时间的时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class AcquireLockResponse extends AbstractModel
{
    /**
     * @var string 资源唯一路径
     */
    public $ResourcePath;

    /**
     * @var integer 锁持有者id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LockerId;

    /**
     * @var string 锁持有者displayName
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LockerName;

    /**
     * @var boolean 持有锁标志（true表示被自己锁定）
     */
    public $LockedByMe;

    /**
     * @var boolean 资源是否正在被编辑
     */
    public $EditFlag;

    /**
     * @var integer 资源被锁定时间的时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LockTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ResourcePath 资源唯一路径
     * @param integer $LockerId 锁持有者id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LockerName 锁持有者displayName
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $LockedByMe 持有锁标志（true表示被自己锁定）
     * @param boolean $EditFlag 资源是否正在被编辑
     * @param integer $LockTime 资源被锁定时间的时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ResourcePath",$param) and $param["ResourcePath"] !== null) {
            $this->ResourcePath = $param["ResourcePath"];
        }

        if (array_key_exists("LockerId",$param) and $param["LockerId"] !== null) {
            $this->LockerId = $param["LockerId"];
        }

        if (array_key_exists("LockerName",$param) and $param["LockerName"] !== null) {
            $this->LockerName = $param["LockerName"];
        }

        if (array_key_exists("LockedByMe",$param) and $param["LockedByMe"] !== null) {
            $this->LockedByMe = $param["LockedByMe"];
        }

        if (array_key_exists("EditFlag",$param) and $param["EditFlag"] !== null) {
            $this->EditFlag = $param["EditFlag"];
        }

        if (array_key_exists("LockTime",$param) and $param["LockTime"] !== null) {
            $this->LockTime = $param["LockTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
