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
 * 项目。字段与 DescribeProjects 的实际返回一致
 *
 * @method string getProjectId() 获取<p>项目 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置<p>项目 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>项目名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>项目名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>项目状态。Normal、Ban、Unlink、Process、Pending、Offline</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>项目状态。Normal、Ban、Unlink、Process、Pending、Offline</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZoneId() 获取<p>站点 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneId(string $ZoneId) 设置<p>站点 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getArea() 获取<p>加速区域。mainland、overseas、global</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArea(string $Area) 设置<p>加速区域。mainland、overseas、global</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProvider() 获取<p>代码来源。Github、Gitee、Coding、Upload、Gitlab、Bitbucket、Cnb</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProvider(string $Provider) 设置<p>代码来源。Github、Gitee、Coding、Upload、Gitlab、Bitbucket、Cnb</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannel() 获取<p>创建来源。Template、Custom、CLI、Guest</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannel(string $Channel) 设置<p>创建来源。Template、Custom、CLI、Guest</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPresetDomain() 获取<p>预设域名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPresetDomain(string $PresetDomain) 设置<p>预设域名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPresetDomainStatus() 获取<p>预设域名状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPresetDomainStatus(string $PresetDomainStatus) 设置<p>预设域名状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRootDir() 获取<p>项目根目录</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRootDir(string $RootDir) 设置<p>项目根目录</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutputDir() 获取<p>构建产物目录</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputDir(string $OutputDir) 设置<p>构建产物目录</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBuildCmd() 获取<p>构建命令</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBuildCmd(string $BuildCmd) 设置<p>构建命令</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstallCmd() 获取<p>安装命令</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstallCmd(string $InstallCmd) 设置<p>安装命令</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFramework() 获取<p>框架</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFramework(string $Framework) 设置<p>框架</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodejsVersion() 获取<p>Node.js 版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodejsVersion(string $NodejsVersion) 设置<p>Node.js 版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRepoUrl() 获取<p>仓库地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepoUrl(string $RepoUrl) 设置<p>仓库地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRepoOwner() 获取<p>仓库所有者</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepoOwner(string $RepoOwner) 设置<p>仓库所有者</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRepoName() 获取<p>仓库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepoName(string $RepoName) 设置<p>仓库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRepoBranch() 获取<p>生产分支</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepoBranch(string $RepoBranch) 设置<p>生产分支</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRepoPreBranches() 获取<p>预览分支</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepoPreBranches(array $RepoPreBranches) 设置<p>预览分支</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method Regions getRegions() 获取<p>部署地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegions(Regions $Regions) 设置<p>部署地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEnvVars() 获取<p>环境变量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvVars(array $EnvVars) 设置<p>环境变量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCustomDomains() 获取<p>自定义域名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomDomains(array $CustomDomains) 设置<p>自定义域名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ProjectDeployment getDeployment() 获取<p>最近一次部署</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeployment(ProjectDeployment $Deployment) 设置<p>最近一次部署</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsAgent() 获取<p>是否 Agent 项目。1 是，0 否</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAgent(integer $IsAgent) 设置<p>是否 Agent 项目。1 是，0 否</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentFramework() 获取<p>Agent 框架。非 Agent 项目为空</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentFramework(string $AgentFramework) 设置<p>Agent 框架。非 Agent 项目为空</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsTld() 获取<p>是否命中用户级泛域名。1 是，0 否</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsTld(integer $IsTld) 设置<p>是否命中用户级泛域名。1 是，0 否</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedOn() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedOn(string $CreatedOn) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifiedOn() 获取<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifiedOn(string $ModifiedOn) 设置<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBuildMachine() 获取<p>构建规格客户契约</p><p>枚举值：</p><ul><li>standard： 4C6G，默认档，所有套餐可用</li><li>enhanced： 8C14G，专业版及以上可用；低配套餐声明时按 standard 处理并提示升级</li></ul><p>默认值：standard</p>
 * @method void setBuildMachine(string $BuildMachine) 设置<p>构建规格客户契约</p><p>枚举值：</p><ul><li>standard： 4C6G，默认档，所有套餐可用</li><li>enhanced： 8C14G，专业版及以上可用；低配套餐声明时按 standard 处理并提示升级</li></ul><p>默认值：standard</p>
 */
class Project extends AbstractModel
{
    /**
     * @var string <p>项目 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string <p>项目名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>项目状态。Normal、Ban、Unlink、Process、Pending、Offline</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>站点 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneId;

    /**
     * @var string <p>加速区域。mainland、overseas、global</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Area;

    /**
     * @var string <p>代码来源。Github、Gitee、Coding、Upload、Gitlab、Bitbucket、Cnb</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Provider;

    /**
     * @var string <p>创建来源。Template、Custom、CLI、Guest</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Channel;

    /**
     * @var string <p>预设域名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PresetDomain;

    /**
     * @var string <p>预设域名状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PresetDomainStatus;

    /**
     * @var string <p>项目根目录</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RootDir;

    /**
     * @var string <p>构建产物目录</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputDir;

    /**
     * @var string <p>构建命令</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BuildCmd;

    /**
     * @var string <p>安装命令</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstallCmd;

    /**
     * @var string <p>框架</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Framework;

    /**
     * @var string <p>Node.js 版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodejsVersion;

    /**
     * @var string <p>仓库地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RepoUrl;

    /**
     * @var string <p>仓库所有者</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RepoOwner;

    /**
     * @var string <p>仓库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RepoName;

    /**
     * @var string <p>生产分支</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RepoBranch;

    /**
     * @var array <p>预览分支</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RepoPreBranches;

    /**
     * @var Regions <p>部署地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Regions;

    /**
     * @var array <p>环境变量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnvVars;

    /**
     * @var array <p>自定义域名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomDomains;

    /**
     * @var ProjectDeployment <p>最近一次部署</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Deployment;

    /**
     * @var integer <p>是否 Agent 项目。1 是，0 否</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAgent;

    /**
     * @var string <p>Agent 框架。非 Agent 项目为空</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentFramework;

    /**
     * @var integer <p>是否命中用户级泛域名。1 是，0 否</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsTld;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedOn;

    /**
     * @var string <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifiedOn;

    /**
     * @var string <p>构建规格客户契约</p><p>枚举值：</p><ul><li>standard： 4C6G，默认档，所有套餐可用</li><li>enhanced： 8C14G，专业版及以上可用；低配套餐声明时按 standard 处理并提示升级</li></ul><p>默认值：standard</p>
     */
    public $BuildMachine;

    /**
     * @param string $ProjectId <p>项目 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>项目名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>项目状态。Normal、Ban、Unlink、Process、Pending、Offline</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ZoneId <p>站点 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Area <p>加速区域。mainland、overseas、global</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Provider <p>代码来源。Github、Gitee、Coding、Upload、Gitlab、Bitbucket、Cnb</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Channel <p>创建来源。Template、Custom、CLI、Guest</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PresetDomain <p>预设域名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PresetDomainStatus <p>预设域名状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RootDir <p>项目根目录</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutputDir <p>构建产物目录</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BuildCmd <p>构建命令</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstallCmd <p>安装命令</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Framework <p>框架</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodejsVersion <p>Node.js 版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RepoUrl <p>仓库地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RepoOwner <p>仓库所有者</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RepoName <p>仓库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RepoBranch <p>生产分支</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RepoPreBranches <p>预览分支</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param Regions $Regions <p>部署地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EnvVars <p>环境变量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CustomDomains <p>自定义域名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ProjectDeployment $Deployment <p>最近一次部署</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsAgent <p>是否 Agent 项目。1 是，0 否</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentFramework <p>Agent 框架。非 Agent 项目为空</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsTld <p>是否命中用户级泛域名。1 是，0 否</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedOn <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifiedOn <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BuildMachine <p>构建规格客户契约</p><p>枚举值：</p><ul><li>standard： 4C6G，默认档，所有套餐可用</li><li>enhanced： 8C14G，专业版及以上可用；低配套餐声明时按 standard 处理并提示升级</li></ul><p>默认值：standard</p>
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("PresetDomain",$param) and $param["PresetDomain"] !== null) {
            $this->PresetDomain = $param["PresetDomain"];
        }

        if (array_key_exists("PresetDomainStatus",$param) and $param["PresetDomainStatus"] !== null) {
            $this->PresetDomainStatus = $param["PresetDomainStatus"];
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

        if (array_key_exists("NodejsVersion",$param) and $param["NodejsVersion"] !== null) {
            $this->NodejsVersion = $param["NodejsVersion"];
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

        if (array_key_exists("RepoPreBranches",$param) and $param["RepoPreBranches"] !== null) {
            $this->RepoPreBranches = $param["RepoPreBranches"];
        }

        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            $this->Regions = new Regions();
            $this->Regions->deserialize($param["Regions"]);
        }

        if (array_key_exists("EnvVars",$param) and $param["EnvVars"] !== null) {
            $this->EnvVars = [];
            foreach ($param["EnvVars"] as $key => $value){
                $obj = new ProjectEnvVar();
                $obj->deserialize($value);
                array_push($this->EnvVars, $obj);
            }
        }

        if (array_key_exists("CustomDomains",$param) and $param["CustomDomains"] !== null) {
            $this->CustomDomains = [];
            foreach ($param["CustomDomains"] as $key => $value){
                $obj = new CustomDomainItem();
                $obj->deserialize($value);
                array_push($this->CustomDomains, $obj);
            }
        }

        if (array_key_exists("Deployment",$param) and $param["Deployment"] !== null) {
            $this->Deployment = new ProjectDeployment();
            $this->Deployment->deserialize($param["Deployment"]);
        }

        if (array_key_exists("IsAgent",$param) and $param["IsAgent"] !== null) {
            $this->IsAgent = $param["IsAgent"];
        }

        if (array_key_exists("AgentFramework",$param) and $param["AgentFramework"] !== null) {
            $this->AgentFramework = $param["AgentFramework"];
        }

        if (array_key_exists("IsTld",$param) and $param["IsTld"] !== null) {
            $this->IsTld = $param["IsTld"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }

        if (array_key_exists("BuildMachine",$param) and $param["BuildMachine"] !== null) {
            $this->BuildMachine = $param["BuildMachine"];
        }
    }
}
