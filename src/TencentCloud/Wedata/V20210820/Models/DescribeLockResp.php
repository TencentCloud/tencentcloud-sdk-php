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
 * 查询数据开发资源锁状态响应
 *
 * @method integer getLockerId() 获取锁持有人id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLockerId(integer $LockerId) 设置锁持有人id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLockerName() 获取锁持有人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLockerName(string $LockerName) 设置锁持有人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourcePath() 获取资源路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourcePath(string $ResourcePath) 设置资源路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getLockedByMe() 获取持有锁标志
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLockedByMe(boolean $LockedByMe) 设置持有锁标志
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLockTime() 获取锁定时间时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLockTime(integer $LockTime) 设置锁定时间时间戳
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeLockResp extends AbstractModel
{
    /**
     * @var integer 锁持有人id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LockerId;

    /**
     * @var string 锁持有人名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LockerName;

    /**
     * @var string 资源路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourcePath;

    /**
     * @var boolean 持有锁标志
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LockedByMe;

    /**
     * @var integer 锁定时间时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LockTime;

    /**
     * @param integer $LockerId 锁持有人id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LockerName 锁持有人名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourcePath 资源路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $LockedByMe 持有锁标志
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LockTime 锁定时间时间戳
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
        if (array_key_exists("LockerId",$param) and $param["LockerId"] !== null) {
            $this->LockerId = $param["LockerId"];
        }

        if (array_key_exists("LockerName",$param) and $param["LockerName"] !== null) {
            $this->LockerName = $param["LockerName"];
        }

        if (array_key_exists("ResourcePath",$param) and $param["ResourcePath"] !== null) {
            $this->ResourcePath = $param["ResourcePath"];
        }

        if (array_key_exists("LockedByMe",$param) and $param["LockedByMe"] !== null) {
            $this->LockedByMe = $param["LockedByMe"];
        }

        if (array_key_exists("LockTime",$param) and $param["LockTime"] !== null) {
            $this->LockTime = $param["LockTime"];
        }
    }
}
