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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VerifyCredential返回参数结构体
 *
 * @method boolean getResult() 获取是否验证成功
 * @method void setResult(boolean $Result) 设置是否验证成功
 * @method integer getVerifyCode() 获取验证返回码
 * @method void setVerifyCode(integer $VerifyCode) 设置验证返回码
 * @method string getVerifyMessage() 获取验证消息
 * @method void setVerifyMessage(string $VerifyMessage) 设置验证消息
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class VerifyCredentialResponse extends AbstractModel
{
    /**
     * @var boolean 是否验证成功
     */
    public $Result;

    /**
     * @var integer 验证返回码
     */
    public $VerifyCode;

    /**
     * @var string 验证消息
     */
    public $VerifyMessage;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $Result 是否验证成功
     * @param integer $VerifyCode 验证返回码
     * @param string $VerifyMessage 验证消息
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("VerifyCode",$param) and $param["VerifyCode"] !== null) {
            $this->VerifyCode = $param["VerifyCode"];
        }

        if (array_key_exists("VerifyMessage",$param) and $param["VerifyMessage"] !== null) {
            $this->VerifyMessage = $param["VerifyMessage"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
