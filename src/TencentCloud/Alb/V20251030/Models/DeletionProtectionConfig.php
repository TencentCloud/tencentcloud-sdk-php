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
 * 删除保护状态信息。
 *
 * @method boolean getDeletionProtectionEnabled() 获取是否开启删除保护。开启后，可防止实例被意外删除。
- true：开启删除保护
- false：关闭删除保护
 * @method void setDeletionProtectionEnabled(boolean $DeletionProtectionEnabled) 设置是否开启删除保护。开启后，可防止实例被意外删除。
- true：开启删除保护
- false：关闭删除保护
 * @method string getReason() 获取开启修改保护的原因说明。
长度为 1~255 个字符，必须是中文和无害字符串中的字符， 可包含中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）、下划线（_）。
 * @method void setReason(string $Reason) 设置开启修改保护的原因说明。
长度为 1~255 个字符，必须是中文和无害字符串中的字符， 可包含中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）、下划线（_）。
 */
class DeletionProtectionConfig extends AbstractModel
{
    /**
     * @var boolean 是否开启删除保护。开启后，可防止实例被意外删除。
- true：开启删除保护
- false：关闭删除保护
     */
    public $DeletionProtectionEnabled;

    /**
     * @var string 开启修改保护的原因说明。
长度为 1~255 个字符，必须是中文和无害字符串中的字符， 可包含中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）、下划线（_）。
     */
    public $Reason;

    /**
     * @param boolean $DeletionProtectionEnabled 是否开启删除保护。开启后，可防止实例被意外删除。
- true：开启删除保护
- false：关闭删除保护
     * @param string $Reason 开启修改保护的原因说明。
长度为 1~255 个字符，必须是中文和无害字符串中的字符， 可包含中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）、下划线（_）。
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
        if (array_key_exists("DeletionProtectionEnabled",$param) and $param["DeletionProtectionEnabled"] !== null) {
            $this->DeletionProtectionEnabled = $param["DeletionProtectionEnabled"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
