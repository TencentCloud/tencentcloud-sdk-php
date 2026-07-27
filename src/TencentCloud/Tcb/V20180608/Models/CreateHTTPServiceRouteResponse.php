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
 * CreateHTTPServiceRoute返回参数结构体
 *
 * @method OwnershipVerificationInfo getOwnershipVerification() 获取<p>归属权校验不通过返回信息，根据校验信息配置dns或者文件验证，可通过VerifyHTTPServiceRoute接口验证归属权是否通过</p>
 * @method void setOwnershipVerification(OwnershipVerificationInfo $OwnershipVerification) 设置<p>归属权校验不通过返回信息，根据校验信息配置dns或者文件验证，可通过VerifyHTTPServiceRoute接口验证归属权是否通过</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateHTTPServiceRouteResponse extends AbstractModel
{
    /**
     * @var OwnershipVerificationInfo <p>归属权校验不通过返回信息，根据校验信息配置dns或者文件验证，可通过VerifyHTTPServiceRoute接口验证归属权是否通过</p>
     */
    public $OwnershipVerification;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param OwnershipVerificationInfo $OwnershipVerification <p>归属权校验不通过返回信息，根据校验信息配置dns或者文件验证，可通过VerifyHTTPServiceRoute接口验证归属权是否通过</p>
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
        if (array_key_exists("OwnershipVerification",$param) and $param["OwnershipVerification"] !== null) {
            $this->OwnershipVerification = new OwnershipVerificationInfo();
            $this->OwnershipVerification->deserialize($param["OwnershipVerification"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
