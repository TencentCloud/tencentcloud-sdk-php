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
 * 静态托管的执行命令
 *
 * @method string getBuildCmd() 获取构建命令
 * @method void setBuildCmd(string $BuildCmd) 设置构建命令
 * @method string getInstallCmd() 获取安装命令
 * @method void setInstallCmd(string $InstallCmd) 设置安装命令
 * @method string getDeployCmd() 获取部署命令
 * @method void setDeployCmd(string $DeployCmd) 设置部署命令
 */
class StaticCmd extends AbstractModel
{
    /**
     * @var string 构建命令
     */
    public $BuildCmd;

    /**
     * @var string 安装命令
     */
    public $InstallCmd;

    /**
     * @var string 部署命令
     */
    public $DeployCmd;

    /**
     * @param string $BuildCmd 构建命令
     * @param string $InstallCmd 安装命令
     * @param string $DeployCmd 部署命令
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
        if (array_key_exists("BuildCmd",$param) and $param["BuildCmd"] !== null) {
            $this->BuildCmd = $param["BuildCmd"];
        }

        if (array_key_exists("InstallCmd",$param) and $param["InstallCmd"] !== null) {
            $this->InstallCmd = $param["InstallCmd"];
        }

        if (array_key_exists("DeployCmd",$param) and $param["DeployCmd"] !== null) {
            $this->DeployCmd = $param["DeployCmd"];
        }
    }
}
