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
 * 策略规则表达式
 *
 * @method CommandLine getProcess() 获取进程
 * @method void setProcess(CommandLine $Process) 设置进程
 * @method CommandLine getPProcess() 获取父进程
 * @method void setPProcess(CommandLine $PProcess) 设置父进程
 * @method CommandLine getAProcess() 获取祖先进程
 * @method void setAProcess(CommandLine $AProcess) 设置祖先进程
 */
class PolicyRules extends AbstractModel
{
    /**
     * @var CommandLine 进程
     */
    public $Process;

    /**
     * @var CommandLine 父进程
     */
    public $PProcess;

    /**
     * @var CommandLine 祖先进程
     */
    public $AProcess;

    /**
     * @param CommandLine $Process 进程
     * @param CommandLine $PProcess 父进程
     * @param CommandLine $AProcess 祖先进程
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
        if (array_key_exists("Process",$param) and $param["Process"] !== null) {
            $this->Process = new CommandLine();
            $this->Process->deserialize($param["Process"]);
        }

        if (array_key_exists("PProcess",$param) and $param["PProcess"] !== null) {
            $this->PProcess = new CommandLine();
            $this->PProcess->deserialize($param["PProcess"]);
        }

        if (array_key_exists("AProcess",$param) and $param["AProcess"] !== null) {
            $this->AProcess = new CommandLine();
            $this->AProcess->deserialize($param["AProcess"]);
        }
    }
}
