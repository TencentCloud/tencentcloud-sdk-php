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
 * 设置 staff 状态应答 item
 *
 * @method string getStaffUserId() 获取座席账号
 * @method void setStaffUserId(string $StaffUserId) 设置座席账号
 * @method string getErrorCode() 获取错误码，参考协议整体错误码
 * @method void setErrorCode(string $ErrorCode) 设置错误码，参考协议整体错误码
 * @method string getErrorMessage() 获取错误信息
 * @method void setErrorMessage(string $ErrorMessage) 设置错误信息
 * @method string getStatus() 获取当前状态
 * @method void setStatus(string $Status) 设置当前状态
 * @method string getReason() 获取当前状态如果是小休，这里是原因
 * @method void setReason(string $Reason) 设置当前状态如果是小休，这里是原因
 * @method string getPreviousStatus() 获取之前状态
 * @method void setPreviousStatus(string $PreviousStatus) 设置之前状态
 * @method string getPreviousReason() 获取之前状态如果是小休，这里是原因
 * @method void setPreviousReason(string $PreviousReason) 设置之前状态如果是小休，这里是原因
 */
class SetStaffStatusRspItem extends AbstractModel
{
    /**
     * @var string 座席账号
     */
    public $StaffUserId;

    /**
     * @var string 错误码，参考协议整体错误码
     */
    public $ErrorCode;

    /**
     * @var string 错误信息
     */
    public $ErrorMessage;

    /**
     * @var string 当前状态
     */
    public $Status;

    /**
     * @var string 当前状态如果是小休，这里是原因
     */
    public $Reason;

    /**
     * @var string 之前状态
     */
    public $PreviousStatus;

    /**
     * @var string 之前状态如果是小休，这里是原因
     */
    public $PreviousReason;

    /**
     * @param string $StaffUserId 座席账号
     * @param string $ErrorCode 错误码，参考协议整体错误码
     * @param string $ErrorMessage 错误信息
     * @param string $Status 当前状态
     * @param string $Reason 当前状态如果是小休，这里是原因
     * @param string $PreviousStatus 之前状态
     * @param string $PreviousReason 之前状态如果是小休，这里是原因
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

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("PreviousStatus",$param) and $param["PreviousStatus"] !== null) {
            $this->PreviousStatus = $param["PreviousStatus"];
        }

        if (array_key_exists("PreviousReason",$param) and $param["PreviousReason"] !== null) {
            $this->PreviousReason = $param["PreviousReason"];
        }
    }
}
