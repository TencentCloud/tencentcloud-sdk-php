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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 核心文件监控规则
 *
 * @method string getProcessPath() 获取进程路径
 * @method void setProcessPath(string $ProcessPath) 设置进程路径
 * @method string getTarget() 获取被访问文件路径
 * @method void setTarget(string $Target) 设置被访问文件路径
 * @method string getAction() 获取执行动作 跳过：skip，告警：alert
 * @method void setAction(string $Action) 设置执行动作 跳过：skip，告警：alert
 * @method string getFileAction() 获取监控行为
<li>read 读取文件</li>
<li>write 修改文件</li>
<li>read-write 读取修改文件</li>
 * @method void setFileAction(string $FileAction) 设置监控行为
<li>read 读取文件</li>
<li>write 修改文件</li>
<li>read-write 读取修改文件</li>
 * @method string getArgs() 获取命令行参数 没有填*
 * @method void setArgs(string $Args) 设置命令行参数 没有填*
 */
class FileTamperRule extends AbstractModel
{
    /**
     * @var string 进程路径
     */
    public $ProcessPath;

    /**
     * @var string 被访问文件路径
     */
    public $Target;

    /**
     * @var string 执行动作 跳过：skip，告警：alert
     */
    public $Action;

    /**
     * @var string 监控行为
<li>read 读取文件</li>
<li>write 修改文件</li>
<li>read-write 读取修改文件</li>
     */
    public $FileAction;

    /**
     * @var string 命令行参数 没有填*
     */
    public $Args;

    /**
     * @param string $ProcessPath 进程路径
     * @param string $Target 被访问文件路径
     * @param string $Action 执行动作 跳过：skip，告警：alert
     * @param string $FileAction 监控行为
<li>read 读取文件</li>
<li>write 修改文件</li>
<li>read-write 读取修改文件</li>
     * @param string $Args 命令行参数 没有填*
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
        if (array_key_exists("ProcessPath",$param) and $param["ProcessPath"] !== null) {
            $this->ProcessPath = $param["ProcessPath"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("FileAction",$param) and $param["FileAction"] !== null) {
            $this->FileAction = $param["FileAction"];
        }

        if (array_key_exists("Args",$param) and $param["Args"] !== null) {
            $this->Args = $param["Args"];
        }
    }
}
