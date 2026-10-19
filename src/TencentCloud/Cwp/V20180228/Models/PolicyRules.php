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
 * @method CommandLine getProcess() 获取<p>进程</p>
 * @method void setProcess(CommandLine $Process) 设置<p>进程</p>
 * @method CommandLine getPProcess() 获取<p>父进程</p>
 * @method void setPProcess(CommandLine $PProcess) 设置<p>父进程</p>
 * @method CommandLine getAProcess() 获取<p>祖先进程</p>
 * @method void setAProcess(CommandLine $AProcess) 设置<p>祖先进程</p>
 * @method string getFilePath() 获取<p>目标文件路径（匹配类型=文件操作时有效）</p>
 * @method void setFilePath(string $FilePath) 设置<p>目标文件路径（匹配类型=文件操作时有效）</p>
 * @method array getFileActions() 获取<p>动作列表（匹配类型=文件操作时有效，多选为或关系）：read-读 write-写 rename-重命名 delete-删除 truncate-清空内容</p>
 * @method void setFileActions(array $FileActions) 设置<p>动作列表（匹配类型=文件操作时有效，多选为或关系）：read-读 write-写 rename-重命名 delete-删除 truncate-清空内容</p>
 */
class PolicyRules extends AbstractModel
{
    /**
     * @var CommandLine <p>进程</p>
     */
    public $Process;

    /**
     * @var CommandLine <p>父进程</p>
     */
    public $PProcess;

    /**
     * @var CommandLine <p>祖先进程</p>
     */
    public $AProcess;

    /**
     * @var string <p>目标文件路径（匹配类型=文件操作时有效）</p>
     */
    public $FilePath;

    /**
     * @var array <p>动作列表（匹配类型=文件操作时有效，多选为或关系）：read-读 write-写 rename-重命名 delete-删除 truncate-清空内容</p>
     */
    public $FileActions;

    /**
     * @param CommandLine $Process <p>进程</p>
     * @param CommandLine $PProcess <p>父进程</p>
     * @param CommandLine $AProcess <p>祖先进程</p>
     * @param string $FilePath <p>目标文件路径（匹配类型=文件操作时有效）</p>
     * @param array $FileActions <p>动作列表（匹配类型=文件操作时有效，多选为或关系）：read-读 write-写 rename-重命名 delete-删除 truncate-清空内容</p>
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

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("FileActions",$param) and $param["FileActions"] !== null) {
            $this->FileActions = $param["FileActions"];
        }
    }
}
