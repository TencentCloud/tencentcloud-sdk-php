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
 * 云开发项目版本
 *
 * @method string getName() 获取项目名
 * @method void setName(string $Name) 设置项目名
 * @method string getSam() 获取SAM json
 * @method void setSam(string $Sam) 设置SAM json
 * @method CodeSource getSource() 获取来源类型
 * @method void setSource(CodeSource $Source) 设置来源类型
 * @method integer getCreateTime() 获取创建时间, unix时间戳
 * @method void setCreateTime(integer $CreateTime) 设置创建时间, unix时间戳
 * @method integer getUpdateTime() 获取更新时间 ,unix时间戳
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间 ,unix时间戳
 * @method string getStatus() 获取项目状态, 枚举值: 
        "creatingEnv"-创建环境中
	"createEnvFail"-创建环境失败
	"building"-构建中
	"buildFail"-构建失败
	"deploying"-部署中
	 "deployFail"-部署失败
	 "success"-部署成功
 * @method void setStatus(string $Status) 设置项目状态, 枚举值: 
        "creatingEnv"-创建环境中
	"createEnvFail"-创建环境失败
	"building"-构建中
	"buildFail"-构建失败
	"deploying"-部署中
	 "deployFail"-部署失败
	 "success"-部署成功
 * @method array getParameters() 获取环境变量
 * @method void setParameters(array $Parameters) 设置环境变量
 * @method string getType() 获取项目类型, 枚举值:
"framework-oneclick" 控制台一键部署
"framework-local-oneclick" cli本地一键部署
"qci-extension-cicd" 内网coding ci cd
 * @method void setType(string $Type) 设置项目类型, 枚举值:
"framework-oneclick" 控制台一键部署
"framework-local-oneclick" cli本地一键部署
"qci-extension-cicd" 内网coding ci cd
 * @method string getCIId() 获取ci的id
 * @method void setCIId(string $CIId) 设置ci的id
 * @method string getCDId() 获取cd的id
 * @method void setCDId(string $CDId) 设置cd的id
 * @method string getEnvId() 获取环境id
 * @method void setEnvId(string $EnvId) 设置环境id
 * @method integer getVersionNum() 获取版本号
 * @method void setVersionNum(integer $VersionNum) 设置版本号
 * @method string getFailReason() 获取错误原因
 * @method void setFailReason(string $FailReason) 设置错误原因
 * @method string getRcJson() 获取rc.json内容
 * @method void setRcJson(string $RcJson) 设置rc.json内容
 * @method string getAddonConfig() 获取插件配置内容
 * @method void setAddonConfig(string $AddonConfig) 设置插件配置内容
 * @method array getTags() 获取标签
 * @method void setTags(array $Tags) 设置标签
 * @method string getNetworkConfig() 获取网络配置
 * @method void setNetworkConfig(string $NetworkConfig) 设置网络配置
 * @method string getExtensionId() 获取扩展id
 * @method void setExtensionId(string $ExtensionId) 设置扩展id
 * @method string getFailType() 获取错误类型
 * @method void setFailType(string $FailType) 设置错误类型
 * @method string getRepoUrl() 获取私有仓库地址
 * @method void setRepoUrl(string $RepoUrl) 设置私有仓库地址
 * @method boolean getAutoDeployOnCodeChange() 获取是否私有仓库代码变更触发自动部署
 * @method void setAutoDeployOnCodeChange(boolean $AutoDeployOnCodeChange) 设置是否私有仓库代码变更触发自动部署
 * @method integer getBuildPercent() 获取ci部署进度（%）
 * @method void setBuildPercent(integer $BuildPercent) 设置ci部署进度（%）
 * @method string getUin() 获取Uin
 * @method void setUin(string $Uin) 设置Uin
 * @method string getBuildFinishTime() 获取BuildFinishTime
 * @method void setBuildFinishTime(string $BuildFinishTime) 设置BuildFinishTime
 * @method string getDeployFinishTime() 获取DeployFinishTime
 * @method void setDeployFinishTime(string $DeployFinishTime) 设置DeployFinishTime
 * @method string getBuildId() 获取BuildId
 * @method void setBuildId(string $BuildId) 设置BuildId
 * @method string getSourceUrl() 获取SourceUrl
 * @method void setSourceUrl(string $SourceUrl) 设置SourceUrl
 * @method string getFailReasonShort() 获取FailReasonShort
 * @method void setFailReasonShort(string $FailReasonShort) 设置FailReasonShort
 * @method string getFirstInitRepo() 获取FirstInitRepo
 * @method void setFirstInitRepo(string $FirstInitRepo) 设置FirstInitRepo
 */
class CloudBaseProjectVersion extends AbstractModel
{
    /**
     * @var string 项目名
     */
    public $Name;

    /**
     * @var string SAM json
     */
    public $Sam;

    /**
     * @var CodeSource 来源类型
     */
    public $Source;

    /**
     * @var integer 创建时间, unix时间戳
     */
    public $CreateTime;

    /**
     * @var integer 更新时间 ,unix时间戳
     */
    public $UpdateTime;

    /**
     * @var string 项目状态, 枚举值: 
        "creatingEnv"-创建环境中
	"createEnvFail"-创建环境失败
	"building"-构建中
	"buildFail"-构建失败
	"deploying"-部署中
	 "deployFail"-部署失败
	 "success"-部署成功
     */
    public $Status;

    /**
     * @var array 环境变量
     */
    public $Parameters;

    /**
     * @var string 项目类型, 枚举值:
"framework-oneclick" 控制台一键部署
"framework-local-oneclick" cli本地一键部署
"qci-extension-cicd" 内网coding ci cd
     */
    public $Type;

    /**
     * @var string ci的id
     */
    public $CIId;

    /**
     * @var string cd的id
     */
    public $CDId;

    /**
     * @var string 环境id
     */
    public $EnvId;

    /**
     * @var integer 版本号
     */
    public $VersionNum;

    /**
     * @var string 错误原因
     */
    public $FailReason;

    /**
     * @var string rc.json内容
     */
    public $RcJson;

    /**
     * @var string 插件配置内容
     */
    public $AddonConfig;

    /**
     * @var array 标签
     */
    public $Tags;

    /**
     * @var string 网络配置
     */
    public $NetworkConfig;

    /**
     * @var string 扩展id
     */
    public $ExtensionId;

    /**
     * @var string 错误类型
     */
    public $FailType;

    /**
     * @var string 私有仓库地址
     */
    public $RepoUrl;

    /**
     * @var boolean 是否私有仓库代码变更触发自动部署
     */
    public $AutoDeployOnCodeChange;

    /**
     * @var integer ci部署进度（%）
     */
    public $BuildPercent;

    /**
     * @var string Uin
     */
    public $Uin;

    /**
     * @var string BuildFinishTime
     */
    public $BuildFinishTime;

    /**
     * @var string DeployFinishTime
     */
    public $DeployFinishTime;

    /**
     * @var string BuildId
     */
    public $BuildId;

    /**
     * @var string SourceUrl
     */
    public $SourceUrl;

    /**
     * @var string FailReasonShort
     */
    public $FailReasonShort;

    /**
     * @var string FirstInitRepo
     */
    public $FirstInitRepo;

    /**
     * @param string $Name 项目名
     * @param string $Sam SAM json
     * @param CodeSource $Source 来源类型
     * @param integer $CreateTime 创建时间, unix时间戳
     * @param integer $UpdateTime 更新时间 ,unix时间戳
     * @param string $Status 项目状态, 枚举值: 
        "creatingEnv"-创建环境中
	"createEnvFail"-创建环境失败
	"building"-构建中
	"buildFail"-构建失败
	"deploying"-部署中
	 "deployFail"-部署失败
	 "success"-部署成功
     * @param array $Parameters 环境变量
     * @param string $Type 项目类型, 枚举值:
"framework-oneclick" 控制台一键部署
"framework-local-oneclick" cli本地一键部署
"qci-extension-cicd" 内网coding ci cd
     * @param string $CIId ci的id
     * @param string $CDId cd的id
     * @param string $EnvId 环境id
     * @param integer $VersionNum 版本号
     * @param string $FailReason 错误原因
     * @param string $RcJson rc.json内容
     * @param string $AddonConfig 插件配置内容
     * @param array $Tags 标签
     * @param string $NetworkConfig 网络配置
     * @param string $ExtensionId 扩展id
     * @param string $FailType 错误类型
     * @param string $RepoUrl 私有仓库地址
     * @param boolean $AutoDeployOnCodeChange 是否私有仓库代码变更触发自动部署
     * @param integer $BuildPercent ci部署进度（%）
     * @param string $Uin Uin
     * @param string $BuildFinishTime BuildFinishTime
     * @param string $DeployFinishTime DeployFinishTime
     * @param string $BuildId BuildId
     * @param string $SourceUrl SourceUrl
     * @param string $FailReasonShort FailReasonShort
     * @param string $FirstInitRepo FirstInitRepo
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Sam",$param) and $param["Sam"] !== null) {
            $this->Sam = $param["Sam"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = new CodeSource();
            $this->Source->deserialize($param["Source"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = [];
            foreach ($param["Parameters"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Parameters, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CIId",$param) and $param["CIId"] !== null) {
            $this->CIId = $param["CIId"];
        }

        if (array_key_exists("CDId",$param) and $param["CDId"] !== null) {
            $this->CDId = $param["CDId"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("VersionNum",$param) and $param["VersionNum"] !== null) {
            $this->VersionNum = $param["VersionNum"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }

        if (array_key_exists("RcJson",$param) and $param["RcJson"] !== null) {
            $this->RcJson = $param["RcJson"];
        }

        if (array_key_exists("AddonConfig",$param) and $param["AddonConfig"] !== null) {
            $this->AddonConfig = $param["AddonConfig"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("NetworkConfig",$param) and $param["NetworkConfig"] !== null) {
            $this->NetworkConfig = $param["NetworkConfig"];
        }

        if (array_key_exists("ExtensionId",$param) and $param["ExtensionId"] !== null) {
            $this->ExtensionId = $param["ExtensionId"];
        }

        if (array_key_exists("FailType",$param) and $param["FailType"] !== null) {
            $this->FailType = $param["FailType"];
        }

        if (array_key_exists("RepoUrl",$param) and $param["RepoUrl"] !== null) {
            $this->RepoUrl = $param["RepoUrl"];
        }

        if (array_key_exists("AutoDeployOnCodeChange",$param) and $param["AutoDeployOnCodeChange"] !== null) {
            $this->AutoDeployOnCodeChange = $param["AutoDeployOnCodeChange"];
        }

        if (array_key_exists("BuildPercent",$param) and $param["BuildPercent"] !== null) {
            $this->BuildPercent = $param["BuildPercent"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("BuildFinishTime",$param) and $param["BuildFinishTime"] !== null) {
            $this->BuildFinishTime = $param["BuildFinishTime"];
        }

        if (array_key_exists("DeployFinishTime",$param) and $param["DeployFinishTime"] !== null) {
            $this->DeployFinishTime = $param["DeployFinishTime"];
        }

        if (array_key_exists("BuildId",$param) and $param["BuildId"] !== null) {
            $this->BuildId = $param["BuildId"];
        }

        if (array_key_exists("SourceUrl",$param) and $param["SourceUrl"] !== null) {
            $this->SourceUrl = $param["SourceUrl"];
        }

        if (array_key_exists("FailReasonShort",$param) and $param["FailReasonShort"] !== null) {
            $this->FailReasonShort = $param["FailReasonShort"];
        }

        if (array_key_exists("FirstInitRepo",$param) and $param["FirstInitRepo"] !== null) {
            $this->FirstInitRepo = $param["FirstInitRepo"];
        }
    }
}
