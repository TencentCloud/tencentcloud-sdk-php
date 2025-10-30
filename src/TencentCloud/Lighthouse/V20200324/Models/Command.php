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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户执行TAT命令的数据结构。
 *
 * @method string getContent() 获取Base64编码后的命令内容，长度不可超过64KB。
 * @method void setContent(string $Content) 设置Base64编码后的命令内容，长度不可超过64KB。
 * @method integer getTimeout() 获取命令超时时间，默认60秒。取值范围[1, 86400]。
 * @method void setTimeout(integer $Timeout) 设置命令超时时间，默认60秒。取值范围[1, 86400]。
 * @method string getWorkingDirectory() 获取命令执行路径，对于 SHELL 命令默认为 /root，对于 POWERSHELL 命令默认为 C:\Program Files\qcloud\tat_agent\workdir。
 * @method void setWorkingDirectory(string $WorkingDirectory) 设置命令执行路径，对于 SHELL 命令默认为 /root，对于 POWERSHELL 命令默认为 C:\Program Files\qcloud\tat_agent\workdir。
 * @method string getUsername() 获取在 Lighthouse 实例中执行命令的用户名称。
默认情况下，在 Linux 实例中以 root 用户执行命令；在Windows 实例中以 System 用户执行命令。
 * @method void setUsername(string $Username) 设置在 Lighthouse 实例中执行命令的用户名称。
默认情况下，在 Linux 实例中以 root 用户执行命令；在Windows 实例中以 System 用户执行命令。
 */
class Command extends AbstractModel
{
    /**
     * @var string Base64编码后的命令内容，长度不可超过64KB。
     */
    public $Content;

    /**
     * @var integer 命令超时时间，默认60秒。取值范围[1, 86400]。
     */
    public $Timeout;

    /**
     * @var string 命令执行路径，对于 SHELL 命令默认为 /root，对于 POWERSHELL 命令默认为 C:\Program Files\qcloud\tat_agent\workdir。
     */
    public $WorkingDirectory;

    /**
     * @var string 在 Lighthouse 实例中执行命令的用户名称。
默认情况下，在 Linux 实例中以 root 用户执行命令；在Windows 实例中以 System 用户执行命令。
     */
    public $Username;

    /**
     * @param string $Content Base64编码后的命令内容，长度不可超过64KB。
     * @param integer $Timeout 命令超时时间，默认60秒。取值范围[1, 86400]。
     * @param string $WorkingDirectory 命令执行路径，对于 SHELL 命令默认为 /root，对于 POWERSHELL 命令默认为 C:\Program Files\qcloud\tat_agent\workdir。
     * @param string $Username 在 Lighthouse 实例中执行命令的用户名称。
默认情况下，在 Linux 实例中以 root 用户执行命令；在Windows 实例中以 System 用户执行命令。
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("WorkingDirectory",$param) and $param["WorkingDirectory"] !== null) {
            $this->WorkingDirectory = $param["WorkingDirectory"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }
    }
}
