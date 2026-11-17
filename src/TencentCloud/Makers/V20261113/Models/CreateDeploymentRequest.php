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
 * CreateDeployment请求参数结构体
 *
 * @method string getZoneId() 获取<p>Makers 站点 ID</p>
 * @method void setZoneId(string $ZoneId) 设置<p>Makers 站点 ID</p>
 * @method string getProjectId() 获取<p>项目 ID</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目 ID</p>
 * @method string getViaMeta() 获取<p>触发来源。Github、ReDeploy、Api、Webhook、Upload、Coding、Gitee、Gitlab</p>
 * @method void setViaMeta(string $ViaMeta) 设置<p>触发来源。Github、ReDeploy、Api、Webhook、Upload、Coding、Gitee、Gitlab</p>
 * @method string getEnv() 获取<p>环境 slug。Production、Preview 或自定义环境</p>
 * @method void setEnv(string $Env) 设置<p>环境 slug。Production、Preview 或自定义环境</p>
 * @method string getProvider() 获取<p>代码来源。上传制品传 Upload</p>
 * @method void setProvider(string $Provider) 设置<p>代码来源。上传制品传 Upload</p>
 * @method string getDistType() 获取<p>制品类型。Zip 或 Folder</p>
 * @method void setDistType(string $DistType) 设置<p>制品类型。Zip 或 Folder</p>
 * @method string getTempBucketPath() 获取<p>已上传制品在临时桶中的对象路径</p>
 * @method void setTempBucketPath(string $TempBucketPath) 设置<p>已上传制品在临时桶中的对象路径</p>
 * @method string getRepoBranch() 获取<p>构建分支</p>
 * @method void setRepoBranch(string $RepoBranch) 设置<p>构建分支</p>
 * @method string getRepoCommitHash() 获取<p>提交哈希</p>
 * @method void setRepoCommitHash(string $RepoCommitHash) 设置<p>提交哈希</p>
 * @method string getRepoCommitMsg() 获取<p>提交说明</p>
 * @method void setRepoCommitMsg(string $RepoCommitMsg) 设置<p>提交说明</p>
 * @method string getBuildFrom() 获取<p>构建来源</p>
 * @method void setBuildFrom(string $BuildFrom) 设置<p>构建来源</p>
 * @method string getTemplateId() 获取<p>模板 ID</p>
 * @method void setTemplateId(string $TemplateId) 设置<p>模板 ID</p>
 * @method string getCiSpec() 获取<p>构建规格。当前服务端仍从 edgeone.json 读取，此字段先保留</p>
 * @method void setCiSpec(string $CiSpec) 设置<p>构建规格。当前服务端仍从 edgeone.json 读取，此字段先保留</p>
 */
class CreateDeploymentRequest extends AbstractModel
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
     * @var string <p>触发来源。Github、ReDeploy、Api、Webhook、Upload、Coding、Gitee、Gitlab</p>
     */
    public $ViaMeta;

    /**
     * @var string <p>环境 slug。Production、Preview 或自定义环境</p>
     */
    public $Env;

    /**
     * @var string <p>代码来源。上传制品传 Upload</p>
     */
    public $Provider;

    /**
     * @var string <p>制品类型。Zip 或 Folder</p>
     */
    public $DistType;

    /**
     * @var string <p>已上传制品在临时桶中的对象路径</p>
     */
    public $TempBucketPath;

    /**
     * @var string <p>构建分支</p>
     */
    public $RepoBranch;

    /**
     * @var string <p>提交哈希</p>
     */
    public $RepoCommitHash;

    /**
     * @var string <p>提交说明</p>
     */
    public $RepoCommitMsg;

    /**
     * @var string <p>构建来源</p>
     */
    public $BuildFrom;

    /**
     * @var string <p>模板 ID</p>
     */
    public $TemplateId;

    /**
     * @var string <p>构建规格。当前服务端仍从 edgeone.json 读取，此字段先保留</p>
     */
    public $CiSpec;

    /**
     * @param string $ZoneId <p>Makers 站点 ID</p>
     * @param string $ProjectId <p>项目 ID</p>
     * @param string $ViaMeta <p>触发来源。Github、ReDeploy、Api、Webhook、Upload、Coding、Gitee、Gitlab</p>
     * @param string $Env <p>环境 slug。Production、Preview 或自定义环境</p>
     * @param string $Provider <p>代码来源。上传制品传 Upload</p>
     * @param string $DistType <p>制品类型。Zip 或 Folder</p>
     * @param string $TempBucketPath <p>已上传制品在临时桶中的对象路径</p>
     * @param string $RepoBranch <p>构建分支</p>
     * @param string $RepoCommitHash <p>提交哈希</p>
     * @param string $RepoCommitMsg <p>提交说明</p>
     * @param string $BuildFrom <p>构建来源</p>
     * @param string $TemplateId <p>模板 ID</p>
     * @param string $CiSpec <p>构建规格。当前服务端仍从 edgeone.json 读取，此字段先保留</p>
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

        if (array_key_exists("ViaMeta",$param) and $param["ViaMeta"] !== null) {
            $this->ViaMeta = $param["ViaMeta"];
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = $param["Env"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("DistType",$param) and $param["DistType"] !== null) {
            $this->DistType = $param["DistType"];
        }

        if (array_key_exists("TempBucketPath",$param) and $param["TempBucketPath"] !== null) {
            $this->TempBucketPath = $param["TempBucketPath"];
        }

        if (array_key_exists("RepoBranch",$param) and $param["RepoBranch"] !== null) {
            $this->RepoBranch = $param["RepoBranch"];
        }

        if (array_key_exists("RepoCommitHash",$param) and $param["RepoCommitHash"] !== null) {
            $this->RepoCommitHash = $param["RepoCommitHash"];
        }

        if (array_key_exists("RepoCommitMsg",$param) and $param["RepoCommitMsg"] !== null) {
            $this->RepoCommitMsg = $param["RepoCommitMsg"];
        }

        if (array_key_exists("BuildFrom",$param) and $param["BuildFrom"] !== null) {
            $this->BuildFrom = $param["BuildFrom"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("CiSpec",$param) and $param["CiSpec"] !== null) {
            $this->CiSpec = $param["CiSpec"];
        }
    }
}
