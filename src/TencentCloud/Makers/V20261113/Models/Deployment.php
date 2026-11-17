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
 * 部署记录
 *
 * @method string getDeploymentId() 获取<p>部署 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeploymentId(string $DeploymentId) 设置<p>部署 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取<p>项目 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置<p>项目 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>Success、Failed、Process、Invalid、Pending、Timeout、Cancelled</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>Success、Failed、Process、Invalid、Pending、Timeout、Cancelled</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOriginalStatus() 获取<p>部署被移除前的原始状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginalStatus(string $OriginalStatus) 设置<p>部署被移除前的原始状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCode() 获取<p>构建退出码，0 表示成功</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(integer $Code) 设置<p>构建退出码，0 表示成功</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBuildCost() 获取<p>构建耗时，单位毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBuildCost(string $BuildCost) 设置<p>构建耗时，单位毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getViaMeta() 获取<p>触发来源。Github、ReDeploy、Api、Coding、Gitee、Upload、Gitlab</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setViaMeta(string $ViaMeta) 设置<p>触发来源。Github、ReDeploy、Api、Coding、Gitee、Upload、Gitlab</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnv() 获取<p>环境 slug</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnv(string $Env) 设置<p>环境 slug</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRepoBranch() 获取<p>分支</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepoBranch(string $RepoBranch) 设置<p>分支</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRepoCommitHash() 获取<p>提交哈希</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepoCommitHash(string $RepoCommitHash) 设置<p>提交哈希</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRepoCommitMsg() 获取<p>提交说明</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepoCommitMsg(string $RepoCommitMsg) 设置<p>提交说明</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPreviewUrl() 获取<p>本次部署的访问地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPreviewUrl(string $PreviewUrl) 设置<p>本次部署的访问地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectUrl() 获取<p>项目默认域名地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectUrl(string $ProjectUrl) 设置<p>项目默认域名地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getUsedInProd() 获取<p>是否为当前生产版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsedInProd(boolean $UsedInProd) 设置<p>是否为当前生产版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCoverUrl() 获取<p>封面地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoverUrl(string $CoverUrl) 设置<p>封面地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetaData() 获取<p>路由配置，JSON 字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetaData(string $MetaData) 设置<p>路由配置，JSON 字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDplRepoUrl() 获取<p>本次部署使用的仓库地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDplRepoUrl(string $DplRepoUrl) 设置<p>本次部署使用的仓库地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedOn() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedOn(string $CreatedOn) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifiedOn() 获取<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifiedOn(string $ModifiedOn) 设置<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class Deployment extends AbstractModel
{
    /**
     * @var string <p>部署 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeploymentId;

    /**
     * @var string <p>项目 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string <p>Success、Failed、Process、Invalid、Pending、Timeout、Cancelled</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>部署被移除前的原始状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginalStatus;

    /**
     * @var integer <p>构建退出码，0 表示成功</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

    /**
     * @var string <p>构建耗时，单位毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BuildCost;

    /**
     * @var string <p>触发来源。Github、ReDeploy、Api、Coding、Gitee、Upload、Gitlab</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ViaMeta;

    /**
     * @var string <p>环境 slug</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Env;

    /**
     * @var string <p>分支</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RepoBranch;

    /**
     * @var string <p>提交哈希</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RepoCommitHash;

    /**
     * @var string <p>提交说明</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RepoCommitMsg;

    /**
     * @var string <p>本次部署的访问地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PreviewUrl;

    /**
     * @var string <p>项目默认域名地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectUrl;

    /**
     * @var boolean <p>是否为当前生产版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsedInProd;

    /**
     * @var string <p>封面地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CoverUrl;

    /**
     * @var string <p>路由配置，JSON 字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetaData;

    /**
     * @var string <p>本次部署使用的仓库地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DplRepoUrl;

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
     * @param string $DeploymentId <p>部署 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId <p>项目 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>Success、Failed、Process、Invalid、Pending、Timeout、Cancelled</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OriginalStatus <p>部署被移除前的原始状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Code <p>构建退出码，0 表示成功</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BuildCost <p>构建耗时，单位毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ViaMeta <p>触发来源。Github、ReDeploy、Api、Coding、Gitee、Upload、Gitlab</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Env <p>环境 slug</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RepoBranch <p>分支</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RepoCommitHash <p>提交哈希</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RepoCommitMsg <p>提交说明</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PreviewUrl <p>本次部署的访问地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectUrl <p>项目默认域名地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $UsedInProd <p>是否为当前生产版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CoverUrl <p>封面地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MetaData <p>路由配置，JSON 字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DplRepoUrl <p>本次部署使用的仓库地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedOn <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifiedOn <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("DeploymentId",$param) and $param["DeploymentId"] !== null) {
            $this->DeploymentId = $param["DeploymentId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OriginalStatus",$param) and $param["OriginalStatus"] !== null) {
            $this->OriginalStatus = $param["OriginalStatus"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("BuildCost",$param) and $param["BuildCost"] !== null) {
            $this->BuildCost = $param["BuildCost"];
        }

        if (array_key_exists("ViaMeta",$param) and $param["ViaMeta"] !== null) {
            $this->ViaMeta = $param["ViaMeta"];
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = $param["Env"];
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

        if (array_key_exists("PreviewUrl",$param) and $param["PreviewUrl"] !== null) {
            $this->PreviewUrl = $param["PreviewUrl"];
        }

        if (array_key_exists("ProjectUrl",$param) and $param["ProjectUrl"] !== null) {
            $this->ProjectUrl = $param["ProjectUrl"];
        }

        if (array_key_exists("UsedInProd",$param) and $param["UsedInProd"] !== null) {
            $this->UsedInProd = $param["UsedInProd"];
        }

        if (array_key_exists("CoverUrl",$param) and $param["CoverUrl"] !== null) {
            $this->CoverUrl = $param["CoverUrl"];
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = $param["MetaData"];
        }

        if (array_key_exists("DplRepoUrl",$param) and $param["DplRepoUrl"] !== null) {
            $this->DplRepoUrl = $param["DplRepoUrl"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }
    }
}
