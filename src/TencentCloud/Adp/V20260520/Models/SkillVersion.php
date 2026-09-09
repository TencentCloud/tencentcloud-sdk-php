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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SkillVersion Skill 版本信息。
 *
 * @method SkillAnalysisInfo getAnalysisInfo() 获取<p>检测信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnalysisInfo(SkillAnalysisInfo $AnalysisInfo) 设置<p>检测信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取<p>当前生效版本号</p>
 * @method void setVersion(string $Version) 设置<p>当前生效版本号</p>
 * @method string getVersionId() 获取<p>当前生效版本ID</p>
 * @method void setVersionId(string $VersionId) 设置<p>当前生效版本ID</p>
 * @method integer getVersionStatus() 获取<p>Skill 版本发布流程状态：</p><pre><code>  - 0 INITIALIZED      初始化（版本初始态）  - 1 AUDITING         审核中（f_analysis_status ∈ {PENDING, RUNNING}）  - 2 PENDING_RELEASE  待发布（低/中风险，等用户确认上架）  - 3 RELEASED         已发布  - 4 UNRELEASED       未发布（HIGH / UNAVAILABLE / FAILED / 用户放弃，含历史&quot;不通过&quot;语义）与 SkillAnalysisStatus 解耦：前者是用户视角发布生命周期，后者是安全检测阶段。</code></pre>
 * @method void setVersionStatus(integer $VersionStatus) 设置<p>Skill 版本发布流程状态：</p><pre><code>  - 0 INITIALIZED      初始化（版本初始态）  - 1 AUDITING         审核中（f_analysis_status ∈ {PENDING, RUNNING}）  - 2 PENDING_RELEASE  待发布（低/中风险，等用户确认上架）  - 3 RELEASED         已发布  - 4 UNRELEASED       未发布（HIGH / UNAVAILABLE / FAILED / 用户放弃，含历史&quot;不通过&quot;语义）与 SkillAnalysisStatus 解耦：前者是用户视角发布生命周期，后者是安全检测阶段。</code></pre>
 * @method string getSkillMd5() 获取<p>Skill包的md5信息</p>
 * @method void setSkillMd5(string $SkillMd5) 设置<p>Skill包的md5信息</p>
 * @method string getSkillUrl() 获取<p>版本包地址</p>
 * @method void setSkillUrl(string $SkillUrl) 设置<p>版本包地址</p>
 * @method string getCreateTime() 获取<p>版本创建时间（Unix秒）</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>版本创建时间（Unix秒）</p>
 * @method string getSkillMarkdownUrl() 获取<p>skill md文档</p>
 * @method void setSkillMarkdownUrl(string $SkillMarkdownUrl) 设置<p>skill md文档</p>
 * @method string getUpdateDesc() 获取<p>版本变更说明</p>
 * @method void setUpdateDesc(string $UpdateDesc) 设置<p>版本变更说明</p>
 * @method string getUpdater() 获取<p>变更用户</p>
 * @method void setUpdater(string $Updater) 设置<p>变更用户</p>
 */
class SkillVersion extends AbstractModel
{
    /**
     * @var SkillAnalysisInfo <p>检测信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnalysisInfo;

    /**
     * @var string <p>当前生效版本号</p>
     */
    public $Version;

    /**
     * @var string <p>当前生效版本ID</p>
     */
    public $VersionId;

    /**
     * @var integer <p>Skill 版本发布流程状态：</p><pre><code>  - 0 INITIALIZED      初始化（版本初始态）  - 1 AUDITING         审核中（f_analysis_status ∈ {PENDING, RUNNING}）  - 2 PENDING_RELEASE  待发布（低/中风险，等用户确认上架）  - 3 RELEASED         已发布  - 4 UNRELEASED       未发布（HIGH / UNAVAILABLE / FAILED / 用户放弃，含历史&quot;不通过&quot;语义）与 SkillAnalysisStatus 解耦：前者是用户视角发布生命周期，后者是安全检测阶段。</code></pre>
     */
    public $VersionStatus;

    /**
     * @var string <p>Skill包的md5信息</p>
     */
    public $SkillMd5;

    /**
     * @var string <p>版本包地址</p>
     */
    public $SkillUrl;

    /**
     * @var string <p>版本创建时间（Unix秒）</p>
     */
    public $CreateTime;

    /**
     * @var string <p>skill md文档</p>
     */
    public $SkillMarkdownUrl;

    /**
     * @var string <p>版本变更说明</p>
     */
    public $UpdateDesc;

    /**
     * @var string <p>变更用户</p>
     */
    public $Updater;

    /**
     * @param SkillAnalysisInfo $AnalysisInfo <p>检测信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version <p>当前生效版本号</p>
     * @param string $VersionId <p>当前生效版本ID</p>
     * @param integer $VersionStatus <p>Skill 版本发布流程状态：</p><pre><code>  - 0 INITIALIZED      初始化（版本初始态）  - 1 AUDITING         审核中（f_analysis_status ∈ {PENDING, RUNNING}）  - 2 PENDING_RELEASE  待发布（低/中风险，等用户确认上架）  - 3 RELEASED         已发布  - 4 UNRELEASED       未发布（HIGH / UNAVAILABLE / FAILED / 用户放弃，含历史&quot;不通过&quot;语义）与 SkillAnalysisStatus 解耦：前者是用户视角发布生命周期，后者是安全检测阶段。</code></pre>
     * @param string $SkillMd5 <p>Skill包的md5信息</p>
     * @param string $SkillUrl <p>版本包地址</p>
     * @param string $CreateTime <p>版本创建时间（Unix秒）</p>
     * @param string $SkillMarkdownUrl <p>skill md文档</p>
     * @param string $UpdateDesc <p>版本变更说明</p>
     * @param string $Updater <p>变更用户</p>
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
        if (array_key_exists("AnalysisInfo",$param) and $param["AnalysisInfo"] !== null) {
            $this->AnalysisInfo = new SkillAnalysisInfo();
            $this->AnalysisInfo->deserialize($param["AnalysisInfo"]);
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("VersionStatus",$param) and $param["VersionStatus"] !== null) {
            $this->VersionStatus = $param["VersionStatus"];
        }

        if (array_key_exists("SkillMd5",$param) and $param["SkillMd5"] !== null) {
            $this->SkillMd5 = $param["SkillMd5"];
        }

        if (array_key_exists("SkillUrl",$param) and $param["SkillUrl"] !== null) {
            $this->SkillUrl = $param["SkillUrl"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SkillMarkdownUrl",$param) and $param["SkillMarkdownUrl"] !== null) {
            $this->SkillMarkdownUrl = $param["SkillMarkdownUrl"];
        }

        if (array_key_exists("UpdateDesc",$param) and $param["UpdateDesc"] !== null) {
            $this->UpdateDesc = $param["UpdateDesc"];
        }

        if (array_key_exists("Updater",$param) and $param["Updater"] !== null) {
            $this->Updater = $param["Updater"];
        }
    }
}
