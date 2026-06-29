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
 * @method SkillAnalysisInfo getAnalysisInfo() 获取检测信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnalysisInfo(SkillAnalysisInfo $AnalysisInfo) 设置检测信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取当前生效版本号
 * @method void setVersion(string $Version) 设置当前生效版本号
 * @method string getVersionId() 获取当前生效版本ID
 * @method void setVersionId(string $VersionId) 设置当前生效版本ID
 * @method integer getVersionStatus() 获取    Skill 版本发布流程状态：
      - 0 INITIALIZED      初始化（版本初始态）
      - 1 AUDITING         审核中（f_analysis_status ∈ {PENDING, RUNNING}）
      - 2 PENDING_RELEASE  待发布（低/中风险，等用户确认上架）
      - 3 RELEASED         已发布
      - 4 UNRELEASED       未发布（HIGH / UNAVAILABLE / FAILED / 用户放弃，含历史"不通过"语义）
    与 SkillAnalysisStatus 解耦：前者是用户视角发布生命周期，后者是安全检测阶段。
 * @method void setVersionStatus(integer $VersionStatus) 设置    Skill 版本发布流程状态：
      - 0 INITIALIZED      初始化（版本初始态）
      - 1 AUDITING         审核中（f_analysis_status ∈ {PENDING, RUNNING}）
      - 2 PENDING_RELEASE  待发布（低/中风险，等用户确认上架）
      - 3 RELEASED         已发布
      - 4 UNRELEASED       未发布（HIGH / UNAVAILABLE / FAILED / 用户放弃，含历史"不通过"语义）
    与 SkillAnalysisStatus 解耦：前者是用户视角发布生命周期，后者是安全检测阶段。
 * @method string getSkillMd5() 获取Skill包的md5信息
 * @method void setSkillMd5(string $SkillMd5) 设置Skill包的md5信息
 * @method string getSkillUrl() 获取版本包地址
 * @method void setSkillUrl(string $SkillUrl) 设置版本包地址
 * @method string getCreateTime() 获取版本创建时间（Unix秒）
 * @method void setCreateTime(string $CreateTime) 设置版本创建时间（Unix秒）
 * @method string getSkillMarkdownUrl() 获取skill md文档
 * @method void setSkillMarkdownUrl(string $SkillMarkdownUrl) 设置skill md文档
 * @method string getUpdateDesc() 获取版本变更说明
 * @method void setUpdateDesc(string $UpdateDesc) 设置版本变更说明
 */
class SkillVersion extends AbstractModel
{
    /**
     * @var SkillAnalysisInfo 检测信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnalysisInfo;

    /**
     * @var string 当前生效版本号
     */
    public $Version;

    /**
     * @var string 当前生效版本ID
     */
    public $VersionId;

    /**
     * @var integer     Skill 版本发布流程状态：
      - 0 INITIALIZED      初始化（版本初始态）
      - 1 AUDITING         审核中（f_analysis_status ∈ {PENDING, RUNNING}）
      - 2 PENDING_RELEASE  待发布（低/中风险，等用户确认上架）
      - 3 RELEASED         已发布
      - 4 UNRELEASED       未发布（HIGH / UNAVAILABLE / FAILED / 用户放弃，含历史"不通过"语义）
    与 SkillAnalysisStatus 解耦：前者是用户视角发布生命周期，后者是安全检测阶段。
     */
    public $VersionStatus;

    /**
     * @var string Skill包的md5信息
     */
    public $SkillMd5;

    /**
     * @var string 版本包地址
     */
    public $SkillUrl;

    /**
     * @var string 版本创建时间（Unix秒）
     */
    public $CreateTime;

    /**
     * @var string skill md文档
     */
    public $SkillMarkdownUrl;

    /**
     * @var string 版本变更说明
     */
    public $UpdateDesc;

    /**
     * @param SkillAnalysisInfo $AnalysisInfo 检测信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version 当前生效版本号
     * @param string $VersionId 当前生效版本ID
     * @param integer $VersionStatus     Skill 版本发布流程状态：
      - 0 INITIALIZED      初始化（版本初始态）
      - 1 AUDITING         审核中（f_analysis_status ∈ {PENDING, RUNNING}）
      - 2 PENDING_RELEASE  待发布（低/中风险，等用户确认上架）
      - 3 RELEASED         已发布
      - 4 UNRELEASED       未发布（HIGH / UNAVAILABLE / FAILED / 用户放弃，含历史"不通过"语义）
    与 SkillAnalysisStatus 解耦：前者是用户视角发布生命周期，后者是安全检测阶段。
     * @param string $SkillMd5 Skill包的md5信息
     * @param string $SkillUrl 版本包地址
     * @param string $CreateTime 版本创建时间（Unix秒）
     * @param string $SkillMarkdownUrl skill md文档
     * @param string $UpdateDesc 版本变更说明
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
    }
}
