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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Skill 列表项（按列表页展示裁剪：名称/版本/描述/状态/操作五列 + 编排所需的 Source 与 DownloadUrl）
 *
 * @method string getSource() 获取技能来源：BUILTIN（内置）/ CUSTOM（自建）/ AUTHORIZED（企业授权）
 * @method void setSource(string $Source) 设置技能来源：BUILTIN（内置）/ CUSTOM（自建）/ AUTHORIZED（企业授权）
 * @method string getName() 获取<p>slug（仅 custom 返回）</p>
 * @method void setName(string $Name) 设置<p>slug（仅 custom 返回）</p>
 * @method string getDisplayName() 获取<p>展示名</p>
 * @method void setDisplayName(string $DisplayName) 设置<p>展示名</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getIcon() 获取<p>图标 URL</p>
 * @method void setIcon(string $Icon) 设置<p>图标 URL</p>
 * @method boolean getEnabled() 获取<p>是否启用</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>是否启用</p>
 * @method string getDownloadUrl() 获取<p>下载 URL</p>
 * @method void setDownloadUrl(string $DownloadUrl) 设置<p>下载 URL</p>
 * @method string getSkillId() 获取<p>技能标识</p>
 * @method void setSkillId(string $SkillId) 设置<p>技能标识</p>
 * @method string getSkillVersion() 获取<p>当前生效版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSkillVersion(string $SkillVersion) 设置<p>当前生效版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间，RFC3339 UTC 格式（如 2026-08-11T09:23:10Z）
 * @method void setCreateTime(string $CreateTime) 设置创建时间，RFC3339 UTC 格式（如 2026-08-11T09:23:10Z）
 * @method string getUpdateTime() 获取更新时间，RFC3339 UTC 格式（如 2026-09-15T06:51:26Z）
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间，RFC3339 UTC 格式（如 2026-09-15T06:51:26Z）
 */
class SkillItem extends AbstractModel
{
    /**
     * @var string 技能来源：BUILTIN（内置）/ CUSTOM（自建）/ AUTHORIZED（企业授权）
     */
    public $Source;

    /**
     * @var string <p>slug（仅 custom 返回）</p>
     */
    public $Name;

    /**
     * @var string <p>展示名</p>
     */
    public $DisplayName;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var string <p>图标 URL</p>
     */
    public $Icon;

    /**
     * @var boolean <p>是否启用</p>
     */
    public $Enabled;

    /**
     * @var string <p>下载 URL</p>
     */
    public $DownloadUrl;

    /**
     * @var string <p>技能标识</p>
     */
    public $SkillId;

    /**
     * @var string <p>当前生效版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SkillVersion;

    /**
     * @var string 创建时间，RFC3339 UTC 格式（如 2026-08-11T09:23:10Z）
     */
    public $CreateTime;

    /**
     * @var string 更新时间，RFC3339 UTC 格式（如 2026-09-15T06:51:26Z）
     */
    public $UpdateTime;

    /**
     * @param string $Source 技能来源：BUILTIN（内置）/ CUSTOM（自建）/ AUTHORIZED（企业授权）
     * @param string $Name <p>slug（仅 custom 返回）</p>
     * @param string $DisplayName <p>展示名</p>
     * @param string $Description <p>描述</p>
     * @param string $Icon <p>图标 URL</p>
     * @param boolean $Enabled <p>是否启用</p>
     * @param string $DownloadUrl <p>下载 URL</p>
     * @param string $SkillId <p>技能标识</p>
     * @param string $SkillVersion <p>当前生效版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间，RFC3339 UTC 格式（如 2026-08-11T09:23:10Z）
     * @param string $UpdateTime 更新时间，RFC3339 UTC 格式（如 2026-09-15T06:51:26Z）
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Icon",$param) and $param["Icon"] !== null) {
            $this->Icon = $param["Icon"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("SkillId",$param) and $param["SkillId"] !== null) {
            $this->SkillId = $param["SkillId"];
        }

        if (array_key_exists("SkillVersion",$param) and $param["SkillVersion"] !== null) {
            $this->SkillVersion = $param["SkillVersion"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
