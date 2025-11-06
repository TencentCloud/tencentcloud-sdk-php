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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建 staff 的信息 item
 *
 * @method string getStaffUserId() 获取座席账号
 * @method void setStaffUserId(string $StaffUserId) 设置座席账号
 * @method string getStatus() 获取状态，free 示闲 notReady 示忙 rest 小休	
 * @method void setStatus(string $Status) 设置状态，free 示闲 notReady 示忙 rest 小休	
 * @method string getReason() 获取如果设置小休状态，这里是原因
 * @method void setReason(string $Reason) 设置如果设置小休状态，这里是原因
 */
class SetStaffStatusItem extends AbstractModel
{
    /**
     * @var string 座席账号
     */
    public $StaffUserId;

    /**
     * @var string 状态，free 示闲 notReady 示忙 rest 小休	
     */
    public $Status;

    /**
     * @var string 如果设置小休状态，这里是原因
     */
    public $Reason;

    /**
     * @param string $StaffUserId 座席账号
     * @param string $Status 状态，free 示闲 notReady 示忙 rest 小休	
     * @param string $Reason 如果设置小休状态，这里是原因
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
        if (array_key_exists("StaffUserId",$param) and $param["StaffUserId"] !== null) {
            $this->StaffUserId = $param["StaffUserId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
