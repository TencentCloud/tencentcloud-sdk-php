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
 * @method string getCreateTime() 获取<p>创建时间（Unix秒）</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间（Unix秒）</p>
 * @method string getCreator() 获取<p>创建者</p>
 * @method void setCreator(string $Creator) 设置<p>创建者</p>
 * @method string getDescription() 获取<p>Skill 描述</p>
 * @method void setDescription(string $Description) 设置<p>Skill 描述</p>
 * @method string getDisplayDescription() 获取<p>Skill 展示描述</p>
 * @method void setDisplayDescription(string $DisplayDescription) 设置<p>Skill 展示描述</p>
 * @method string getDisplayName() 获取<p>Skill 展示名称</p>
 * @method void setDisplayName(string $DisplayName) 设置<p>Skill 展示名称</p>
 * @method string getIconUrl() 获取<p>Skill 图标</p>
 * @method void setIconUrl(string $IconUrl) 设置<p>Skill 图标</p>
 * @method string getName() 获取<p>Skill 名称</p>
 * @method void setName(string $Name) 设置<p>Skill 名称</p>
 * @method string getUpdateTime() 获取<p>更新时间（Unix秒）</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间（Unix秒）</p>
 * @method string getSpaceId() 获取<p>空间</p>
 * @method void setSpaceId(string $SpaceId) 设置<p>空间</p>
 */
class SkillProfile extends AbstractModel
{
    /**
     * @var string <p>创建时间（Unix秒）</p>
     */
    public $CreateTime;

    /**
     * @var string <p>创建者</p>
     */
    public $Creator;

    /**
     * @var string <p>Skill 描述</p>
     */
    public $Description;

    /**
     * @var string <p>Skill 展示描述</p>
     */
    public $DisplayDescription;

    /**
     * @var string <p>Skill 展示名称</p>
     */
    public $DisplayName;

    /**
     * @var string <p>Skill 图标</p>
     */
    public $IconUrl;

    /**
     * @var string <p>Skill 名称</p>
     */
    public $Name;

    /**
     * @var string <p>更新时间（Unix秒）</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>空间</p>
     */
    public $SpaceId;

    /**
     * @param string $CreateTime <p>创建时间（Unix秒）</p>
     * @param string $Creator <p>创建者</p>
     * @param string $Description <p>Skill 描述</p>
     * @param string $DisplayDescription <p>Skill 展示描述</p>
     * @param string $DisplayName <p>Skill 展示名称</p>
     * @param string $IconUrl <p>Skill 图标</p>
     * @param string $Name <p>Skill 名称</p>
     * @param string $UpdateTime <p>更新时间（Unix秒）</p>
     * @param string $SpaceId <p>空间</p>
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

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }
    }
}
