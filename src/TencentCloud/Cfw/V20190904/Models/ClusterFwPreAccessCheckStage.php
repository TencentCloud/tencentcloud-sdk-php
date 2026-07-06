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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单个阶段的实时检查状态
 *
 * @method string getStage() 获取检查项 key，与发起检查接口返回的 CheckItems[].Stage 一一对应
 * @method void setStage(string $Stage) 设置检查项 key，与发起检查接口返回的 CheckItems[].Stage 一一对应
 * @method integer getStatus() 获取该检查项状态，0：进行中，1：通过，2：失败
 * @method void setStatus(integer $Status) 设置该检查项状态，0：进行中，1：通过，2：失败
 * @method string getErrorCode() 获取失败时的错误码（仅 Status=2 时有值）
 * @method void setErrorCode(string $ErrorCode) 设置失败时的错误码（仅 Status=2 时有值）
 * @method string getErrorMessage() 获取失败时的具体错误信息（仅 Status=2 时有值）
 * @method void setErrorMessage(string $ErrorMessage) 设置失败时的具体错误信息（仅 Status=2 时有值）
 */
class ClusterFwPreAccessCheckStage extends AbstractModel
{
    /**
     * @var string 检查项 key，与发起检查接口返回的 CheckItems[].Stage 一一对应
     */
    public $Stage;

    /**
     * @var integer 该检查项状态，0：进行中，1：通过，2：失败
     */
    public $Status;

    /**
     * @var string 失败时的错误码（仅 Status=2 时有值）
     */
    public $ErrorCode;

    /**
     * @var string 失败时的具体错误信息（仅 Status=2 时有值）
     */
    public $ErrorMessage;

    /**
     * @param string $Stage 检查项 key，与发起检查接口返回的 CheckItems[].Stage 一一对应
     * @param integer $Status 该检查项状态，0：进行中，1：通过，2：失败
     * @param string $ErrorCode 失败时的错误码（仅 Status=2 时有值）
     * @param string $ErrorMessage 失败时的具体错误信息（仅 Status=2 时有值）
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
        if (array_key_exists("Stage",$param) and $param["Stage"] !== null) {
            $this->Stage = $param["Stage"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }
    }
}
