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
namespace TencentCloud\Makers\V20261113\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyProject请求参数结构体
 *
 * @method string getZoneId() 获取<p>Makers 站点 ID</p>
 * @method void setZoneId(string $ZoneId) 设置<p>Makers 站点 ID</p>
 * @method string getProjectId() 获取<p>项目 ID</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目 ID</p>
 * @method string getName() 获取<p>项目名称</p>
 * @method void setName(string $Name) 设置<p>项目名称</p>
 * @method string getRootDir() 获取<p>项目根目录</p>
 * @method void setRootDir(string $RootDir) 设置<p>项目根目录</p>
 * @method string getOutputDir() 获取<p>构建产物目录</p>
 * @method void setOutputDir(string $OutputDir) 设置<p>构建产物目录</p>
 * @method string getBuildCmd() 获取<p>构建命令</p>
 * @method void setBuildCmd(string $BuildCmd) 设置<p>构建命令</p>
 * @method string getInstallCmd() 获取<p>安装命令</p>
 * @method void setInstallCmd(string $InstallCmd) 设置<p>安装命令</p>
 * @method string getFramework() 获取<p>框架</p>
 * @method void setFramework(string $Framework) 设置<p>框架</p>
 * @method string getCoverUrl() 获取<p>封面地址</p>
 * @method void setCoverUrl(string $CoverUrl) 设置<p>封面地址</p>
 * @method string getNodeJsVersion() 获取<p>Node.js 版本</p>
 * @method void setNodeJsVersion(string $NodeJsVersion) 设置<p>Node.js 版本</p>
 */
class ModifyProjectRequest extends AbstractModel
{
    /**
     * @var string <p>Makers 站点 ID</p>
     */
    public $ZoneId;

    /**
     * @var string <p>项目 ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>项目名称</p>
     */
    public $Name;

    /**
     * @var string <p>项目根目录</p>
     */
    public $RootDir;

    /**
     * @var string <p>构建产物目录</p>
     */
    public $OutputDir;

    /**
     * @var string <p>构建命令</p>
     */
    public $BuildCmd;

    /**
     * @var string <p>安装命令</p>
     */
    public $InstallCmd;

    /**
     * @var string <p>框架</p>
     */
    public $Framework;

    /**
     * @var string <p>封面地址</p>
     */
    public $CoverUrl;

    /**
     * @var string <p>Node.js 版本</p>
     */
    public $NodeJsVersion;

    /**
     * @param string $ZoneId <p>Makers 站点 ID</p>
     * @param string $ProjectId <p>项目 ID</p>
     * @param string $Name <p>项目名称</p>
     * @param string $RootDir <p>项目根目录</p>
     * @param string $OutputDir <p>构建产物目录</p>
     * @param string $BuildCmd <p>构建命令</p>
     * @param string $InstallCmd <p>安装命令</p>
     * @param string $Framework <p>框架</p>
     * @param string $CoverUrl <p>封面地址</p>
     * @param string $NodeJsVersion <p>Node.js 版本</p>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RootDir",$param) and $param["RootDir"] !== null) {
            $this->RootDir = $param["RootDir"];
        }

        if (array_key_exists("OutputDir",$param) and $param["OutputDir"] !== null) {
            $this->OutputDir = $param["OutputDir"];
        }

        if (array_key_exists("BuildCmd",$param) and $param["BuildCmd"] !== null) {
            $this->BuildCmd = $param["BuildCmd"];
        }

        if (array_key_exists("InstallCmd",$param) and $param["InstallCmd"] !== null) {
            $this->InstallCmd = $param["InstallCmd"];
        }

        if (array_key_exists("Framework",$param) and $param["Framework"] !== null) {
            $this->Framework = $param["Framework"];
        }

        if (array_key_exists("CoverUrl",$param) and $param["CoverUrl"] !== null) {
            $this->CoverUrl = $param["CoverUrl"];
        }

        if (array_key_exists("NodeJsVersion",$param) and $param["NodeJsVersion"] !== null) {
            $this->NodeJsVersion = $param["NodeJsVersion"];
        }
    }
}
