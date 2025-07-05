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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RunWorkflow请求参数结构体
 *
 * @method string getName() 获取任务批次名称。
 * @method void setName(string $Name) 设置任务批次名称。
 * @method string getEnvironmentId() 获取投递环境ID。
 * @method void setEnvironmentId(string $EnvironmentId) 设置投递环境ID。
 * @method GitInfo getGitSource() 获取工作流Git仓库信息。
 * @method void setGitSource(GitInfo $GitSource) 设置工作流Git仓库信息。
 * @method string getType() 获取工作流类型。

支持类型：
- NEXTFLOW
 * @method void setType(string $Type) 设置工作流类型。

支持类型：
- NEXTFLOW
 * @method NFOption getNFOption() 获取Nextflow选项。
 * @method void setNFOption(NFOption $NFOption) 设置Nextflow选项。
 * @method string getProjectId() 获取项目ID。
（不填使用指定地域下的默认项目）
 * @method void setProjectId(string $ProjectId) 设置项目ID。
（不填使用指定地域下的默认项目）
 * @method string getDescription() 获取任务批次描述。
 * @method void setDescription(string $Description) 设置任务批次描述。
 * @method string getInputBase64() 获取任务输入JSON。需要进行base64编码。
（InputBase64和InputCosUri必选其一）
 * @method void setInputBase64(string $InputBase64) 设置任务输入JSON。需要进行base64编码。
（InputBase64和InputCosUri必选其一）
 * @method string getInputCosUri() 获取任务输入COS地址。
（InputBase64和InputCosUri必选其一）
 * @method void setInputCosUri(string $InputCosUri) 设置任务输入COS地址。
（InputBase64和InputCosUri必选其一）
 * @method integer getCacheClearDelay() 获取任务缓存清理时间（小时）。不填或0表示不清理。
 * @method void setCacheClearDelay(integer $CacheClearDelay) 设置任务缓存清理时间（小时）。不填或0表示不清理。
 * @method string getWorkDir() 获取工作目录，可填写指定缓存卷内的绝对路径，不填使用默认缓存卷内的默认路径，暂时仅支持Nextflow。
 * @method void setWorkDir(string $WorkDir) 设置工作目录，可填写指定缓存卷内的绝对路径，不填使用默认缓存卷内的默认路径，暂时仅支持Nextflow。
 * @method array getVolumeIds() 获取缓存卷ID，不填使用默认缓存卷，暂时仅支持Nextflow。
 * @method void setVolumeIds(array $VolumeIds) 设置缓存卷ID，不填使用默认缓存卷，暂时仅支持Nextflow。
 * @method string getEntrypoint() 获取工作流入口文件，不填使用默认入口文件。
 * @method void setEntrypoint(string $Entrypoint) 设置工作流入口文件，不填使用默认入口文件。
 */
class RunWorkflowRequest extends AbstractModel
{
    /**
     * @var string 任务批次名称。
     */
    public $Name;

    /**
     * @var string 投递环境ID。
     */
    public $EnvironmentId;

    /**
     * @var GitInfo 工作流Git仓库信息。
     */
    public $GitSource;

    /**
     * @var string 工作流类型。

支持类型：
- NEXTFLOW
     */
    public $Type;

    /**
     * @var NFOption Nextflow选项。
     */
    public $NFOption;

    /**
     * @var string 项目ID。
（不填使用指定地域下的默认项目）
     */
    public $ProjectId;

    /**
     * @var string 任务批次描述。
     */
    public $Description;

    /**
     * @var string 任务输入JSON。需要进行base64编码。
（InputBase64和InputCosUri必选其一）
     */
    public $InputBase64;

    /**
     * @var string 任务输入COS地址。
（InputBase64和InputCosUri必选其一）
     */
    public $InputCosUri;

    /**
     * @var integer 任务缓存清理时间（小时）。不填或0表示不清理。
     */
    public $CacheClearDelay;

    /**
     * @var string 工作目录，可填写指定缓存卷内的绝对路径，不填使用默认缓存卷内的默认路径，暂时仅支持Nextflow。
     */
    public $WorkDir;

    /**
     * @var array 缓存卷ID，不填使用默认缓存卷，暂时仅支持Nextflow。
     */
    public $VolumeIds;

    /**
     * @var string 工作流入口文件，不填使用默认入口文件。
     */
    public $Entrypoint;

    /**
     * @param string $Name 任务批次名称。
     * @param string $EnvironmentId 投递环境ID。
     * @param GitInfo $GitSource 工作流Git仓库信息。
     * @param string $Type 工作流类型。

支持类型：
- NEXTFLOW
     * @param NFOption $NFOption Nextflow选项。
     * @param string $ProjectId 项目ID。
（不填使用指定地域下的默认项目）
     * @param string $Description 任务批次描述。
     * @param string $InputBase64 任务输入JSON。需要进行base64编码。
（InputBase64和InputCosUri必选其一）
     * @param string $InputCosUri 任务输入COS地址。
（InputBase64和InputCosUri必选其一）
     * @param integer $CacheClearDelay 任务缓存清理时间（小时）。不填或0表示不清理。
     * @param string $WorkDir 工作目录，可填写指定缓存卷内的绝对路径，不填使用默认缓存卷内的默认路径，暂时仅支持Nextflow。
     * @param array $VolumeIds 缓存卷ID，不填使用默认缓存卷，暂时仅支持Nextflow。
     * @param string $Entrypoint 工作流入口文件，不填使用默认入口文件。
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

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("GitSource",$param) and $param["GitSource"] !== null) {
            $this->GitSource = new GitInfo();
            $this->GitSource->deserialize($param["GitSource"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("NFOption",$param) and $param["NFOption"] !== null) {
            $this->NFOption = new NFOption();
            $this->NFOption->deserialize($param["NFOption"]);
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("InputBase64",$param) and $param["InputBase64"] !== null) {
            $this->InputBase64 = $param["InputBase64"];
        }

        if (array_key_exists("InputCosUri",$param) and $param["InputCosUri"] !== null) {
            $this->InputCosUri = $param["InputCosUri"];
        }

        if (array_key_exists("CacheClearDelay",$param) and $param["CacheClearDelay"] !== null) {
            $this->CacheClearDelay = $param["CacheClearDelay"];
        }

        if (array_key_exists("WorkDir",$param) and $param["WorkDir"] !== null) {
            $this->WorkDir = $param["WorkDir"];
        }

        if (array_key_exists("VolumeIds",$param) and $param["VolumeIds"] !== null) {
            $this->VolumeIds = $param["VolumeIds"];
        }

        if (array_key_exists("Entrypoint",$param) and $param["Entrypoint"] !== null) {
            $this->Entrypoint = $param["Entrypoint"];
        }
    }
}
