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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 删除演练对结果
 *
 * @method string getDrillPairId() 获取演练对ID。
 * @method void setDrillPairId(string $DrillPairId) 设置演练对ID。
 * @method string getCode() 获取删除结果码。成功为 Success，失败为对应错误码（如 InternalError.ComponentError）。
 * @method void setCode(string $Code) 设置删除结果码。成功为 Success，失败为对应错误码（如 InternalError.ComponentError）。
 * @method string getMessage() 获取删除结果描述信息，成功时为空串。
 * @method void setMessage(string $Message) 设置删除结果描述信息，成功时为空串。
 */
class DeleteDrillPairResult extends AbstractModel
{
    /**
     * @var string 演练对ID。
     */
    public $DrillPairId;

    /**
     * @var string 删除结果码。成功为 Success，失败为对应错误码（如 InternalError.ComponentError）。
     */
    public $Code;

    /**
     * @var string 删除结果描述信息，成功时为空串。
     */
    public $Message;

    /**
     * @param string $DrillPairId 演练对ID。
     * @param string $Code 删除结果码。成功为 Success，失败为对应错误码（如 InternalError.ComponentError）。
     * @param string $Message 删除结果描述信息，成功时为空串。
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
        if (array_key_exists("DrillPairId",$param) and $param["DrillPairId"] !== null) {
            $this->DrillPairId = $param["DrillPairId"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
