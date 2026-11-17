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
 * CreateProject请求参数结构体
 *
 * @method string getZoneId() 获取<p>Makers 站点 ID</p>
 * @method void setZoneId(string $ZoneId) 设置<p>Makers 站点 ID</p>
 * @method string getName() 获取<p>项目名称</p>
 * @method void setName(string $Name) 设置<p>项目名称</p>
 * @method string getChannel() 获取<p>创建来源。Template、Custom、CLI、Guest</p>
 * @method void setChannel(string $Channel) 设置<p>创建来源。Template、Custom、CLI、Guest</p>
 * @method string getProvider() 获取<p>代码来源。Upload、Github、Gitee、Gitlab、Coding</p>
 * @method void setProvider(string $Provider) 设置<p>代码来源。Upload、Github、Gitee、Gitlab、Coding</p>
 * @method string getSource() 获取<p>接入方标识</p>
 * @method void setSource(string $Source) 设置<p>接入方标识</p>
 * @method string getArea() 获取<p>加速区域。mainland、overseas、global</p>
 * @method void setArea(string $Area) 设置<p>加速区域。mainland、overseas、global</p>
 * @method string getNodeJsVersion() 获取<p>Node.js 版本。14.21.3、16.20.2、18.20.4、20.18.0、22.11.0、22.17.1、22.21.1、24.5.0、24.11.0、24.18.0</p>
 * @method void setNodeJsVersion(string $NodeJsVersion) 设置<p>Node.js 版本。14.21.3、16.20.2、18.20.4、20.18.0、22.11.0、22.17.1、22.21.1、24.5.0、24.11.0、24.18.0</p>
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
 * @method string getTemplateId() 获取<p>模板 ID</p>
 * @method void setTemplateId(string $TemplateId) 设置<p>模板 ID</p>
 * @method string getRepoUrl() 获取<p>仓库地址</p>
 * @method void setRepoUrl(string $RepoUrl) 设置<p>仓库地址</p>
 * @method string getRepoOwner() 获取<p>仓库所有者</p>
 * @method void setRepoOwner(string $RepoOwner) 设置<p>仓库所有者</p>
 * @method string getRepoName() 获取<p>仓库名称</p>
 * @method void setRepoName(string $RepoName) 设置<p>仓库名称</p>
 * @method string getRepoBranch() 获取<p>生产分支</p>
 * @method void setRepoBranch(string $RepoBranch) 设置<p>生产分支</p>
 * @method array getEnvVars() 获取<p>初始环境变量</p>
 * @method void setEnvVars(array $EnvVars) 设置<p>初始环境变量</p>
 * @method string getNamespace() 获取<p>Coding 命名空间。Provider 为 Coding 时使用</p>
 * @method void setNamespace(string $Namespace) 设置<p>Coding 命名空间。Provider 为 Coding 时使用</p>
 * @method integer getCodingProjectId() 获取<p>Coding 项目 ID。Provider 为 Coding 时使用</p>
 * @method void setCodingProjectId(integer $CodingProjectId) 设置<p>Coding 项目 ID。Provider 为 Coding 时使用</p>
 */
class CreateProjectRequest extends AbstractModel
{
    /**
     * @var string <p>Makers 站点 ID</p>
     */
    public $ZoneId;

    /**
     * @var string <p>项目名称</p>
     */
    public $Name;

    /**
     * @var string <p>创建来源。Template、Custom、CLI、Guest</p>
     */
    public $Channel;

    /**
     * @var string <p>代码来源。Upload、Github、Gitee、Gitlab、Coding</p>
     */
    public $Provider;

    /**
     * @var string <p>接入方标识</p>
     */
    public $Source;

    /**
     * @var string <p>加速区域。mainland、overseas、global</p>
     */
    public $Area;

    /**
     * @var string <p>Node.js 版本。14.21.3、16.20.2、18.20.4、20.18.0、22.11.0、22.17.1、22.21.1、24.5.0、24.11.0、24.18.0</p>
     */
    public $NodeJsVersion;

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
     * @var string <p>模板 ID</p>
     */
    public $TemplateId;

    /**
     * @var string <p>仓库地址</p>
     */
    public $RepoUrl;

    /**
     * @var string <p>仓库所有者</p>
     */
    public $RepoOwner;

    /**
     * @var string <p>仓库名称</p>
     */
    public $RepoName;

    /**
     * @var string <p>生产分支</p>
     */
    public $RepoBranch;

    /**
     * @var array <p>初始环境变量</p>
     */
    public $EnvVars;

    /**
     * @var string <p>Coding 命名空间。Provider 为 Coding 时使用</p>
     */
    public $Namespace;

    /**
     * @var integer <p>Coding 项目 ID。Provider 为 Coding 时使用</p>
     */
    public $CodingProjectId;

    /**
     * @param string $ZoneId <p>Makers 站点 ID</p>
     * @param string $Name <p>项目名称</p>
     * @param string $Channel <p>创建来源。Template、Custom、CLI、Guest</p>
     * @param string $Provider <p>代码来源。Upload、Github、Gitee、Gitlab、Coding</p>
     * @param string $Source <p>接入方标识</p>
     * @param string $Area <p>加速区域。mainland、overseas、global</p>
     * @param string $NodeJsVersion <p>Node.js 版本。14.21.3、16.20.2、18.20.4、20.18.0、22.11.0、22.17.1、22.21.1、24.5.0、24.11.0、24.18.0</p>
     * @param string $RootDir <p>项目根目录</p>
     * @param string $OutputDir <p>构建产物目录</p>
     * @param string $BuildCmd <p>构建命令</p>
     * @param string $InstallCmd <p>安装命令</p>
     * @param string $Framework <p>框架</p>
     * @param string $TemplateId <p>模板 ID</p>
     * @param string $RepoUrl <p>仓库地址</p>
     * @param string $RepoOwner <p>仓库所有者</p>
     * @param string $RepoName <p>仓库名称</p>
     * @param string $RepoBranch <p>生产分支</p>
     * @param array $EnvVars <p>初始环境变量</p>
     * @param string $Namespace <p>Coding 命名空间。Provider 为 Coding 时使用</p>
     * @param integer $CodingProjectId <p>Coding 项目 ID。Provider 为 Coding 时使用</p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("NodeJsVersion",$param) and $param["NodeJsVersion"] !== null) {
            $this->NodeJsVersion = $param["NodeJsVersion"];
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

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("RepoUrl",$param) and $param["RepoUrl"] !== null) {
            $this->RepoUrl = $param["RepoUrl"];
        }

        if (array_key_exists("RepoOwner",$param) and $param["RepoOwner"] !== null) {
            $this->RepoOwner = $param["RepoOwner"];
        }

        if (array_key_exists("RepoName",$param) and $param["RepoName"] !== null) {
            $this->RepoName = $param["RepoName"];
        }

        if (array_key_exists("RepoBranch",$param) and $param["RepoBranch"] !== null) {
            $this->RepoBranch = $param["RepoBranch"];
        }

        if (array_key_exists("EnvVars",$param) and $param["EnvVars"] !== null) {
            $this->EnvVars = [];
            foreach ($param["EnvVars"] as $key => $value){
                $obj = new EnvVar();
                $obj->deserialize($value);
                array_push($this->EnvVars, $obj);
            }
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("CodingProjectId",$param) and $param["CodingProjectId"] !== null) {
            $this->CodingProjectId = $param["CodingProjectId"];
        }
    }
}
