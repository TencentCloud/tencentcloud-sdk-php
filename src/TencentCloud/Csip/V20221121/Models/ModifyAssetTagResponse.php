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
 * ModifyAssetTag返回参数结构体
 *
 * @method string getCode() 获取<p>状态码</p>
 * @method void setCode(string $Code) 设置<p>状态码</p>
 * @method string getMessage() 获取<p>信息</p>
 * @method void setMessage(string $Message) 设置<p>信息</p>
 * @method boolean getHasRunningApply() 获取<p>该打标规则是否在执行中</p>
 * @method void setHasRunningApply(boolean $HasRunningApply) 设置<p>该打标规则是否在执行中</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ModifyAssetTagResponse extends AbstractModel
{
    /**
     * @var string <p>状态码</p>
     */
    public $Code;

    /**
     * @var string <p>信息</p>
     */
    public $Message;

    /**
     * @var boolean <p>该打标规则是否在执行中</p>
     */
    public $HasRunningApply;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Code <p>状态码</p>
     * @param string $Message <p>信息</p>
     * @param boolean $HasRunningApply <p>该打标规则是否在执行中</p>
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("HasRunningApply",$param) and $param["HasRunningApply"] !== null) {
            $this->HasRunningApply = $param["HasRunningApply"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
