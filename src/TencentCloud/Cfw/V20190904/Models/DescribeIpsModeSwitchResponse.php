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
 * DescribeIpsModeSwitch返回参数结构体
 *
 * @method ModeInfo getData() 获取// Mode 取值校验：0-观察模式, 1-拦截模式, 2-严格模式
 * @method void setData(ModeInfo $Data) 设置// Mode 取值校验：0-观察模式, 1-拦截模式, 2-严格模式
 * @method integer getReturnCode() 获取0 成功 非0失败
 * @method void setReturnCode(integer $ReturnCode) 设置0 成功 非0失败
 * @method string getReturnMsg() 获取success 成功 其他失败
 * @method void setReturnMsg(string $ReturnMsg) 设置success 成功 其他失败
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeIpsModeSwitchResponse extends AbstractModel
{
    /**
     * @var ModeInfo // Mode 取值校验：0-观察模式, 1-拦截模式, 2-严格模式
     */
    public $Data;

    /**
     * @var integer 0 成功 非0失败
     */
    public $ReturnCode;

    /**
     * @var string success 成功 其他失败
     */
    public $ReturnMsg;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param ModeInfo $Data // Mode 取值校验：0-观察模式, 1-拦截模式, 2-严格模式
     * @param integer $ReturnCode 0 成功 非0失败
     * @param string $ReturnMsg success 成功 其他失败
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new ModeInfo();
            $this->Data->deserialize($param["Data"]);
        }

        if (array_key_exists("ReturnCode",$param) and $param["ReturnCode"] !== null) {
            $this->ReturnCode = $param["ReturnCode"];
        }

        if (array_key_exists("ReturnMsg",$param) and $param["ReturnMsg"] !== null) {
            $this->ReturnMsg = $param["ReturnMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
