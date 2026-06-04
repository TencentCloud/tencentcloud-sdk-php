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
 * Agent 技能详情
 *
 * @method string getSkillId() 获取<p>skillId</p>
 * @method void setSkillId(string $SkillId) 设置<p>skillId</p>
 * @method string getName() 获取<p>skill名称</p>
 * @method void setName(string $Name) 设置<p>skill名称</p>
 * @method string getDescription() 获取<p>技能描述</p>
 * @method void setDescription(string $Description) 设置<p>技能描述</p>
 * @method string getDisplayName() 获取<p>skill展示名称</p>
 * @method void setDisplayName(string $DisplayName) 设置<p>skill展示名称</p>
 * @method string getDisplayDescription() 获取<p>技能展示描述</p>
 * @method void setDisplayDescription(string $DisplayDescription) 设置<p>技能展示描述</p>
 * @method string getIconUrl() 获取<p>skill图标url</p>
 * @method void setIconUrl(string $IconUrl) 设置<p>skill图标url</p>
 * @method integer getSourceType() 获取<p>Skill来源</p>
 * @method void setSourceType(integer $SourceType) 设置<p>Skill来源</p>
 * @method string getCurrentVersion() 获取<p>Skill版本</p>
 * @method void setCurrentVersion(string $CurrentVersion) 设置<p>Skill版本</p>
 */
class AgentSkill extends AbstractModel
{
    /**
     * @var string <p>skillId</p>
     */
    public $SkillId;

    /**
     * @var string <p>skill名称</p>
     */
    public $Name;

    /**
     * @var string <p>技能描述</p>
     */
    public $Description;

    /**
     * @var string <p>skill展示名称</p>
     */
    public $DisplayName;

    /**
     * @var string <p>技能展示描述</p>
     */
    public $DisplayDescription;

    /**
     * @var string <p>skill图标url</p>
     */
    public $IconUrl;

    /**
     * @var integer <p>Skill来源</p>
     */
    public $SourceType;

    /**
     * @var string <p>Skill版本</p>
     */
    public $CurrentVersion;

    /**
     * @param string $SkillId <p>skillId</p>
     * @param string $Name <p>skill名称</p>
     * @param string $Description <p>技能描述</p>
     * @param string $DisplayName <p>skill展示名称</p>
     * @param string $DisplayDescription <p>技能展示描述</p>
     * @param string $IconUrl <p>skill图标url</p>
     * @param integer $SourceType <p>Skill来源</p>
     * @param string $CurrentVersion <p>Skill版本</p>
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
        if (array_key_exists("SkillId",$param) and $param["SkillId"] !== null) {
            $this->SkillId = $param["SkillId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("DisplayDescription",$param) and $param["DisplayDescription"] !== null) {
            $this->DisplayDescription = $param["DisplayDescription"];
        }

        if (array_key_exists("IconUrl",$param) and $param["IconUrl"] !== null) {
            $this->IconUrl = $param["IconUrl"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("CurrentVersion",$param) and $param["CurrentVersion"] !== null) {
            $this->CurrentVersion = $param["CurrentVersion"];
        }
    }
}
