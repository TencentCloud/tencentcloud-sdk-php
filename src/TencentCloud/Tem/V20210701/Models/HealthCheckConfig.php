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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 健康检查配置
 *
 * @method string getType() 获取支持的健康检查类型，如 HttpGet，TcpSocket，Exec
 * @method void setType(string $Type) 设置支持的健康检查类型，如 HttpGet，TcpSocket，Exec
 * @method string getProtocol() 获取仅当健康检查类型为 HttpGet 时有效，表示协议类型，如 HTTP，HTTPS
 * @method void setProtocol(string $Protocol) 设置仅当健康检查类型为 HttpGet 时有效，表示协议类型，如 HTTP，HTTPS
 * @method string getPath() 获取仅当健康检查类型为 HttpGet 时有效，表示请求路径
 * @method void setPath(string $Path) 设置仅当健康检查类型为 HttpGet 时有效，表示请求路径
 * @method string getExec() 获取仅当健康检查类型为 Exec 时有效，表示执行的脚本内容
 * @method void setExec(string $Exec) 设置仅当健康检查类型为 Exec 时有效，表示执行的脚本内容
 * @method integer getPort() 获取仅当健康检查类型为 HttpGet\TcpSocket 时有效，表示请求路径
 * @method void setPort(integer $Port) 设置仅当健康检查类型为 HttpGet\TcpSocket 时有效，表示请求路径
 * @method integer getInitialDelaySeconds() 获取检查延迟开始时间，单位为秒，默认为 0
 * @method void setInitialDelaySeconds(integer $InitialDelaySeconds) 设置检查延迟开始时间，单位为秒，默认为 0
 * @method integer getTimeoutSeconds() 获取超时时间，单位为秒，默认为 1
 * @method void setTimeoutSeconds(integer $TimeoutSeconds) 设置超时时间，单位为秒，默认为 1
 * @method integer getPeriodSeconds() 获取间隔时间，单位为秒，默认为 10
 * @method void setPeriodSeconds(integer $PeriodSeconds) 设置间隔时间，单位为秒，默认为 10
 */
class HealthCheckConfig extends AbstractModel
{
    /**
     * @var string 支持的健康检查类型，如 HttpGet，TcpSocket，Exec
     */
    public $Type;

    /**
     * @var string 仅当健康检查类型为 HttpGet 时有效，表示协议类型，如 HTTP，HTTPS
     */
    public $Protocol;

    /**
     * @var string 仅当健康检查类型为 HttpGet 时有效，表示请求路径
     */
    public $Path;

    /**
     * @var string 仅当健康检查类型为 Exec 时有效，表示执行的脚本内容
     */
    public $Exec;

    /**
     * @var integer 仅当健康检查类型为 HttpGet\TcpSocket 时有效，表示请求路径
     */
    public $Port;

    /**
     * @var integer 检查延迟开始时间，单位为秒，默认为 0
     */
    public $InitialDelaySeconds;

    /**
     * @var integer 超时时间，单位为秒，默认为 1
     */
    public $TimeoutSeconds;

    /**
     * @var integer 间隔时间，单位为秒，默认为 10
     */
    public $PeriodSeconds;

    /**
     * @param string $Type 支持的健康检查类型，如 HttpGet，TcpSocket，Exec
     * @param string $Protocol 仅当健康检查类型为 HttpGet 时有效，表示协议类型，如 HTTP，HTTPS
     * @param string $Path 仅当健康检查类型为 HttpGet 时有效，表示请求路径
     * @param string $Exec 仅当健康检查类型为 Exec 时有效，表示执行的脚本内容
     * @param integer $Port 仅当健康检查类型为 HttpGet\TcpSocket 时有效，表示请求路径
     * @param integer $InitialDelaySeconds 检查延迟开始时间，单位为秒，默认为 0
     * @param integer $TimeoutSeconds 超时时间，单位为秒，默认为 1
     * @param integer $PeriodSeconds 间隔时间，单位为秒，默认为 10
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Exec",$param) and $param["Exec"] !== null) {
            $this->Exec = $param["Exec"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("InitialDelaySeconds",$param) and $param["InitialDelaySeconds"] !== null) {
            $this->InitialDelaySeconds = $param["InitialDelaySeconds"];
        }

        if (array_key_exists("TimeoutSeconds",$param) and $param["TimeoutSeconds"] !== null) {
            $this->TimeoutSeconds = $param["TimeoutSeconds"];
        }

        if (array_key_exists("PeriodSeconds",$param) and $param["PeriodSeconds"] !== null) {
            $this->PeriodSeconds = $param["PeriodSeconds"];
        }
    }
}
