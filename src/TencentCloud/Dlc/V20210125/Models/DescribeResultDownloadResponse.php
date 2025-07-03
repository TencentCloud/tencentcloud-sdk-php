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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResultDownload返回参数结构体
 *
 * @method string getPath() 获取下载文件路径
 * @method void setPath(string $Path) 设置下载文件路径
 * @method string getStatus() 获取任务状态 init | queue | format | compress | success|  timeout | error
 * @method void setStatus(string $Status) 设置任务状态 init | queue | format | compress | success|  timeout | error
 * @method string getReason() 获取任务异常原因
 * @method void setReason(string $Reason) 设置任务异常原因
 * @method string getSecretId() 获取临时SecretId
 * @method void setSecretId(string $SecretId) 设置临时SecretId
 * @method string getSecretKey() 获取临时SecretKey
 * @method void setSecretKey(string $SecretKey) 设置临时SecretKey
 * @method string getToken() 获取临时Token
 * @method void setToken(string $Token) 设置临时Token
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeResultDownloadResponse extends AbstractModel
{
    /**
     * @var string 下载文件路径
     */
    public $Path;

    /**
     * @var string 任务状态 init | queue | format | compress | success|  timeout | error
     */
    public $Status;

    /**
     * @var string 任务异常原因
     */
    public $Reason;

    /**
     * @var string 临时SecretId
     */
    public $SecretId;

    /**
     * @var string 临时SecretKey
     */
    public $SecretKey;

    /**
     * @var string 临时Token
     */
    public $Token;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Path 下载文件路径
     * @param string $Status 任务状态 init | queue | format | compress | success|  timeout | error
     * @param string $Reason 任务异常原因
     * @param string $SecretId 临时SecretId
     * @param string $SecretKey 临时SecretKey
     * @param string $Token 临时Token
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
