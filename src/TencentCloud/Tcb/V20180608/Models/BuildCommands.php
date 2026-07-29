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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 构建命令
 *
 * @method string getInstallCmd() 获取<p>平台生成默认 install step 时执行</p>
 * @method void setInstallCmd(string $InstallCmd) 设置<p>平台生成默认 install step 时执行</p>
 * @method string getBuildCmd() 获取<p>平台生成默认build step 时执行</p>
 * @method void setBuildCmd(string $BuildCmd) 设置<p>平台生成默认build step 时执行</p>
 * @method string getDeployCmd() 获取<p>平台生成默认deploy step 时执行</p>
 * @method void setDeployCmd(string $DeployCmd) 设置<p>平台生成默认deploy step 时执行</p>
 */
class BuildCommands extends AbstractModel
{
    /**
     * @var string <p>平台生成默认 install step 时执行</p>
     */
    public $InstallCmd;

    /**
     * @var string <p>平台生成默认build step 时执行</p>
     */
    public $BuildCmd;

    /**
     * @var string <p>平台生成默认deploy step 时执行</p>
     */
    public $DeployCmd;

    /**
     * @param string $InstallCmd <p>平台生成默认 install step 时执行</p>
     * @param string $BuildCmd <p>平台生成默认build step 时执行</p>
     * @param string $DeployCmd <p>平台生成默认deploy step 时执行</p>
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
        if (array_key_exists("InstallCmd",$param) and $param["InstallCmd"] !== null) {
            $this->InstallCmd = $param["InstallCmd"];
        }

        if (array_key_exists("BuildCmd",$param) and $param["BuildCmd"] !== null) {
            $this->BuildCmd = $param["BuildCmd"];
        }

        if (array_key_exists("DeployCmd",$param) and $param["DeployCmd"] !== null) {
            $this->DeployCmd = $param["DeployCmd"];
        }
    }
}
