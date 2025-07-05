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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAndroidInstanceSSH返回参数结构体
 *
 * @method string getPrivateKey() 获取连接私钥，需要保存为文件形式，例如 private_key.pem
 * @method void setPrivateKey(string $PrivateKey) 设置连接私钥，需要保存为文件形式，例如 private_key.pem
 * @method string getUserName() 获取用户名称
 * @method void setUserName(string $UserName) 设置用户名称
 * @method string getHostName() 获取连接地址
 * @method void setHostName(string $HostName) 设置连接地址
 * @method integer getPort() 获取连接端口
 * @method void setPort(integer $Port) 设置连接端口
 * @method string getConnectCommand() 获取连接参考命令
 * @method void setConnectCommand(string $ConnectCommand) 设置连接参考命令
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateAndroidInstanceSSHResponse extends AbstractModel
{
    /**
     * @var string 连接私钥，需要保存为文件形式，例如 private_key.pem
     */
    public $PrivateKey;

    /**
     * @var string 用户名称
     */
    public $UserName;

    /**
     * @var string 连接地址
     */
    public $HostName;

    /**
     * @var integer 连接端口
     */
    public $Port;

    /**
     * @var string 连接参考命令
     */
    public $ConnectCommand;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $PrivateKey 连接私钥，需要保存为文件形式，例如 private_key.pem
     * @param string $UserName 用户名称
     * @param string $HostName 连接地址
     * @param integer $Port 连接端口
     * @param string $ConnectCommand 连接参考命令
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
        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("ConnectCommand",$param) and $param["ConnectCommand"] !== null) {
            $this->ConnectCommand = $param["ConnectCommand"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
