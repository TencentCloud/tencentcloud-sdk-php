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
 * SkillProfile Skill 基础展示信息。
 *
 * @method string getCreateTime() 获取创建时间（Unix秒）
 * @method void setCreateTime(string $CreateTime) 设置创建时间（Unix秒）
 * @method string getCreator() 获取创建者
 * @method void setCreator(string $Creator) 设置创建者
 * @method string getDescription() 获取Skill 描述
 * @method void setDescription(string $Description) 设置Skill 描述
 * @method string getDisplayDescription() 获取Skill 展示描述
 * @method void setDisplayDescription(string $DisplayDescription) 设置Skill 展示描述
 * @method string getDisplayName() 获取Skill 展示名称
 * @method void setDisplayName(string $DisplayName) 设置Skill 展示名称
 * @method string getIconUrl() 获取Skill 图标
 * @method void setIconUrl(string $IconUrl) 设置Skill 图标
 * @method string getName() 获取Skill 名称
 * @method void setName(string $Name) 设置Skill 名称
 * @method string getUpdateTime() 获取更新时间（Unix秒）
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间（Unix秒）
 */
class SkillProfile extends AbstractModel
{
    /**
     * @var string 创建时间（Unix秒）
     */
    public $CreateTime;

    /**
     * @var string 创建者
     */
    public $Creator;

    /**
     * @var string Skill 描述
     */
    public $Description;

    /**
     * @var string Skill 展示描述
     */
    public $DisplayDescription;

    /**
     * @var string Skill 展示名称
     */
    public $DisplayName;

    /**
     * @var string Skill 图标
     */
    public $IconUrl;

    /**
     * @var string Skill 名称
     */
    public $Name;

    /**
     * @var string 更新时间（Unix秒）
     */
    public $UpdateTime;

    /**
     * @param string $CreateTime 创建时间（Unix秒）
     * @param string $Creator 创建者
     * @param string $Description Skill 描述
     * @param string $DisplayDescription Skill 展示描述
     * @param string $DisplayName Skill 展示名称
     * @param string $IconUrl Skill 图标
     * @param string $Name Skill 名称
     * @param string $UpdateTime 更新时间（Unix秒）
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DisplayDescription",$param) and $param["DisplayDescription"] !== null) {
            $this->DisplayDescription = $param["DisplayDescription"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("IconUrl",$param) and $param["IconUrl"] !== null) {
            $this->IconUrl = $param["IconUrl"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
