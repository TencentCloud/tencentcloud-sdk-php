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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VerifyDspmAssetLoginCode返回参数结构体
 *
 * @method string getAccount() 获取账号
 * @method void setAccount(string $Account) 设置账号
 * @method string getPassword() 获取密码信息
 * @method void setPassword(string $Password) 设置密码信息
 * @method string getValidateStart() 获取有效期开始时间
 * @method void setValidateStart(string $ValidateStart) 设置有效期开始时间
 * @method string getValidateEnd() 获取有效期结束时间
 * @method void setValidateEnd(string $ValidateEnd) 设置有效期结束时间
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class VerifyDspmAssetLoginCodeResponse extends AbstractModel
{
    /**
     * @var string 账号
     */
    public $Account;

    /**
     * @var string 密码信息
     */
    public $Password;

    /**
     * @var string 有效期开始时间
     */
    public $ValidateStart;

    /**
     * @var string 有效期结束时间
     */
    public $ValidateEnd;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Account 账号
     * @param string $Password 密码信息
     * @param string $ValidateStart 有效期开始时间
     * @param string $ValidateEnd 有效期结束时间
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("ValidateStart",$param) and $param["ValidateStart"] !== null) {
            $this->ValidateStart = $param["ValidateStart"];
        }

        if (array_key_exists("ValidateEnd",$param) and $param["ValidateEnd"] !== null) {
            $this->ValidateEnd = $param["ValidateEnd"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
