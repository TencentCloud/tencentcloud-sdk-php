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
 * EDR命令行规则单规则
 *
 * @method string getExe() 获取<p>进程文件路径</p>
 * @method void setExe(string $Exe) 设置<p>进程文件路径</p>
 * @method string getCmdLine() 获取<p>进程命令行</p>
 * @method void setCmdLine(string $CmdLine) 设置<p>进程命令行</p>
 */
class RuleContentProcessInfo extends AbstractModel
{
    /**
     * @var string <p>进程文件路径</p>
     */
    public $Exe;

    /**
     * @var string <p>进程命令行</p>
     */
    public $CmdLine;

    /**
     * @param string $Exe <p>进程文件路径</p>
     * @param string $CmdLine <p>进程命令行</p>
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
        if (array_key_exists("Exe",$param) and $param["Exe"] !== null) {
            $this->Exe = $param["Exe"];
        }

        if (array_key_exists("CmdLine",$param) and $param["CmdLine"] !== null) {
            $this->CmdLine = $param["CmdLine"];
        }
    }
}
