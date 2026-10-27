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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCommandTask请求参数结构体
 *
 * @method string getCommand() 获取脚本任务，需要 Base64 编码
 * @method void setCommand(string $Command) 设置脚本任务，需要 Base64 编码
 * @method string getType() 获取脚本任务类型：windows 桌面可选有：    PowerShellScript — powershell脚本    BatScript — Bat 脚本
 * @method void setType(string $Type) 设置脚本任务类型：windows 桌面可选有：    PowerShellScript — powershell脚本    BatScript — Bat 脚本
 * @method array getInstanceIds() 获取执行脚本任务的实例列表
 * @method void setInstanceIds(array $InstanceIds) 设置执行脚本任务的实例列表
 * @method boolean getRunAsBoundUser() 获取是否以绑定用户身份执行，默认 System身份运行false： System身份运行，默认行为true：以绑定用户身份执行
 * @method void setRunAsBoundUser(boolean $RunAsBoundUser) 设置是否以绑定用户身份执行，默认 System身份运行false： System身份运行，默认行为true：以绑定用户身份执行
 * @method boolean getRunForeground() 获取是否前台运行false：后台运行，默认行为true：前台运行
 * @method void setRunForeground(boolean $RunForeground) 设置是否前台运行false：后台运行，默认行为true：前台运行
 */
class CreateCommandTaskRequest extends AbstractModel
{
    /**
     * @var string 脚本任务，需要 Base64 编码
     */
    public $Command;

    /**
     * @var string 脚本任务类型：windows 桌面可选有：    PowerShellScript — powershell脚本    BatScript — Bat 脚本
     */
    public $Type;

    /**
     * @var array 执行脚本任务的实例列表
     */
    public $InstanceIds;

    /**
     * @var boolean 是否以绑定用户身份执行，默认 System身份运行false： System身份运行，默认行为true：以绑定用户身份执行
     */
    public $RunAsBoundUser;

    /**
     * @var boolean 是否前台运行false：后台运行，默认行为true：前台运行
     */
    public $RunForeground;

    /**
     * @param string $Command 脚本任务，需要 Base64 编码
     * @param string $Type 脚本任务类型：windows 桌面可选有：    PowerShellScript — powershell脚本    BatScript — Bat 脚本
     * @param array $InstanceIds 执行脚本任务的实例列表
     * @param boolean $RunAsBoundUser 是否以绑定用户身份执行，默认 System身份运行false： System身份运行，默认行为true：以绑定用户身份执行
     * @param boolean $RunForeground 是否前台运行false：后台运行，默认行为true：前台运行
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
        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("RunAsBoundUser",$param) and $param["RunAsBoundUser"] !== null) {
            $this->RunAsBoundUser = $param["RunAsBoundUser"];
        }

        if (array_key_exists("RunForeground",$param) and $param["RunForeground"] !== null) {
            $this->RunForeground = $param["RunForeground"];
        }
    }
}
