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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EDR文件操作规则（ContentType=file_operation，高危命令聚合降噪新增）
 *
 * @method RuleContentProcessInfo getProcess() 获取<p>当前进程命令行信息（可选，未配置时该维度不参与匹配）</p>
 * @method void setProcess(RuleContentProcessInfo $Process) 设置<p>当前进程命令行信息（可选，未配置时该维度不参与匹配）</p>
 * @method RuleContentProcessInfo getParentProcess() 获取<p>父进程命令行信息（可选，未配置时该维度不参与匹配）</p>
 * @method void setParentProcess(RuleContentProcessInfo $ParentProcess) 设置<p>父进程命令行信息（可选，未配置时该维度不参与匹配）</p>
 * @method string getFilePath() 获取<p>目标文件路径（正则）</p>
 * @method void setFilePath(string $FilePath) 设置<p>目标文件路径（正则）</p>
 * @method array getFileActions() 获取<p>动作列表（多选为或关系）：read-读 write-写 rename-重命名 delete-删除 truncate-清空内容</p>
 * @method void setFileActions(array $FileActions) 设置<p>动作列表（多选为或关系）：read-读 write-写 rename-重命名 delete-删除 truncate-清空内容</p>
 */
class RuleContentFileOperation extends AbstractModel
{
    /**
     * @var RuleContentProcessInfo <p>当前进程命令行信息（可选，未配置时该维度不参与匹配）</p>
     */
    public $Process;

    /**
     * @var RuleContentProcessInfo <p>父进程命令行信息（可选，未配置时该维度不参与匹配）</p>
     */
    public $ParentProcess;

    /**
     * @var string <p>目标文件路径（正则）</p>
     */
    public $FilePath;

    /**
     * @var array <p>动作列表（多选为或关系）：read-读 write-写 rename-重命名 delete-删除 truncate-清空内容</p>
     */
    public $FileActions;

    /**
     * @param RuleContentProcessInfo $Process <p>当前进程命令行信息（可选，未配置时该维度不参与匹配）</p>
     * @param RuleContentProcessInfo $ParentProcess <p>父进程命令行信息（可选，未配置时该维度不参与匹配）</p>
     * @param string $FilePath <p>目标文件路径（正则）</p>
     * @param array $FileActions <p>动作列表（多选为或关系）：read-读 write-写 rename-重命名 delete-删除 truncate-清空内容</p>
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
            $this->Process = new RuleContentProcessInfo();
            $this->Process->deserialize($param["Process"]);
        }

        if (array_key_exists("ParentProcess",$param) and $param["ParentProcess"] !== null) {
            $this->ParentProcess = new RuleContentProcessInfo();
            $this->ParentProcess->deserialize($param["ParentProcess"]);
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("FileActions",$param) and $param["FileActions"] !== null) {
            $this->FileActions = $param["FileActions"];
        }
    }
}
