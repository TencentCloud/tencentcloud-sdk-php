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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePublicProxyInstallCommand返回参数结构体
 *
 * @method string getNginxCommand() 获取Nginx安装命令
 * @method void setNginxCommand(string $NginxCommand) 设置Nginx安装命令
 * @method string getKeepAliveCommand() 获取Keepalived安装命令
 * @method void setKeepAliveCommand(string $KeepAliveCommand) 设置Keepalived安装命令
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePublicProxyInstallCommandResponse extends AbstractModel
{
    /**
     * @var string Nginx安装命令
     */
    public $NginxCommand;

    /**
     * @var string Keepalived安装命令
     */
    public $KeepAliveCommand;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $NginxCommand Nginx安装命令
     * @param string $KeepAliveCommand Keepalived安装命令
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
        if (array_key_exists("NginxCommand",$param) and $param["NginxCommand"] !== null) {
            $this->NginxCommand = $param["NginxCommand"];
        }

        if (array_key_exists("KeepAliveCommand",$param) and $param["KeepAliveCommand"] !== null) {
            $this->KeepAliveCommand = $param["KeepAliveCommand"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
