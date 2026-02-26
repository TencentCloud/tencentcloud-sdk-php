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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询开通Mysql结果
 *
 * @method string getStatus() 获取状态 notexist | init | doing | success | fail
 * @method void setStatus(string $Status) 设置状态 notexist | init | doing | success | fail
 * @method string getFailReason() 获取失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailReason(string $FailReason) 设置失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getFreezeStatus() 获取是否已被冻结（只在 Status=success时有效）
 * @method void setFreezeStatus(boolean $FreezeStatus) 设置是否已被冻结（只在 Status=success时有效）
 */
class DescribeCreateMySQLResult extends AbstractModel
{
    /**
     * @var string 状态 notexist | init | doing | success | fail
     */
    public $Status;

    /**
     * @var string 失败原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailReason;

    /**
     * @var boolean 是否已被冻结（只在 Status=success时有效）
     */
    public $FreezeStatus;

    /**
     * @param string $Status 状态 notexist | init | doing | success | fail
     * @param string $FailReason 失败原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $FreezeStatus 是否已被冻结（只在 Status=success时有效）
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }

        if (array_key_exists("FreezeStatus",$param) and $param["FreezeStatus"] !== null) {
            $this->FreezeStatus = $param["FreezeStatus"];
        }
    }
}
