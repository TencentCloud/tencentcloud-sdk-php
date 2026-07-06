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
 * CreateSkill请求参数结构体
 *
 * @method integer getCreateType() 获取<p>Skill 创建方式，必填；仅允许</p><p>枚举值：</p><ul><li>1： FILE_UPLOAD（文件上传）</li><li>3： AIGC（AIGC生成）</li></ul>
 * @method void setCreateType(integer $CreateType) 设置<p>Skill 创建方式，必填；仅允许</p><p>枚举值：</p><ul><li>1： FILE_UPLOAD（文件上传）</li><li>3： AIGC（AIGC生成）</li></ul>
 * @method string getFileUrl() 获取<p>skill包文件地址（zip）；FILE_UPLOAD / AIGC 均必填</p>
 * @method void setFileUrl(string $FileUrl) 设置<p>skill包文件地址（zip）；FILE_UPLOAD / AIGC 均必填</p>
 * @method string getSpaceId() 获取<p>空间ID</p>
 * @method void setSpaceId(string $SpaceId) 设置<p>空间ID</p>
 * @method string getDisplayDescription() 获取<p>skill展示描述</p>
 * @method void setDisplayDescription(string $DisplayDescription) 设置<p>skill展示描述</p>
 * @method string getDisplayName() 获取<p>skill展示名称</p>
 * @method void setDisplayName(string $DisplayName) 设置<p>skill展示名称</p>
 * @method string getIconUrl() 获取<p>图标地址</p>
 * @method void setIconUrl(string $IconUrl) 设置<p>图标地址</p>
 * @method string getName() 获取<p>skill业务唯一标识名（同企业下唯一）；未传时从skill包解析</p>
 * @method void setName(string $Name) 设置<p>skill业务唯一标识名（同企业下唯一）；未传时从skill包解析</p>
 * @method string getSkillVersion() 获取<p>版本号</p>
 * @method void setSkillVersion(string $SkillVersion) 设置<p>版本号</p>
 * @method string getUpdateDescription() 获取<p>版本变更说明</p>
 * @method void setUpdateDescription(string $UpdateDescription) 设置<p>版本变更说明</p>
 */
class CreateSkillRequest extends AbstractModel
{
    /**
     * @var integer <p>Skill 创建方式，必填；仅允许</p><p>枚举值：</p><ul><li>1： FILE_UPLOAD（文件上传）</li><li>3： AIGC（AIGC生成）</li></ul>
     */
    public $CreateType;

    /**
     * @var string <p>skill包文件地址（zip）；FILE_UPLOAD / AIGC 均必填</p>
     */
    public $FileUrl;

    /**
     * @var string <p>空间ID</p>
     */
    public $SpaceId;

    /**
     * @var string <p>skill展示描述</p>
     */
    public $DisplayDescription;

    /**
     * @var string <p>skill展示名称</p>
     */
    public $DisplayName;

    /**
     * @var string <p>图标地址</p>
     */
    public $IconUrl;

    /**
     * @var string <p>skill业务唯一标识名（同企业下唯一）；未传时从skill包解析</p>
     */
    public $Name;

    /**
     * @var string <p>版本号</p>
     */
    public $SkillVersion;

    /**
     * @var string <p>版本变更说明</p>
     */
    public $UpdateDescription;

    /**
     * @param integer $CreateType <p>Skill 创建方式，必填；仅允许</p><p>枚举值：</p><ul><li>1： FILE_UPLOAD（文件上传）</li><li>3： AIGC（AIGC生成）</li></ul>
     * @param string $FileUrl <p>skill包文件地址（zip）；FILE_UPLOAD / AIGC 均必填</p>
     * @param string $SpaceId <p>空间ID</p>
     * @param string $DisplayDescription <p>skill展示描述</p>
     * @param string $DisplayName <p>skill展示名称</p>
     * @param string $IconUrl <p>图标地址</p>
     * @param string $Name <p>skill业务唯一标识名（同企业下唯一）；未传时从skill包解析</p>
     * @param string $SkillVersion <p>版本号</p>
     * @param string $UpdateDescription <p>版本变更说明</p>
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
        if (array_key_exists("CreateType",$param) and $param["CreateType"] !== null) {
            $this->CreateType = $param["CreateType"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
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

        if (array_key_exists("SkillVersion",$param) and $param["SkillVersion"] !== null) {
            $this->SkillVersion = $param["SkillVersion"];
        }

        if (array_key_exists("UpdateDescription",$param) and $param["UpdateDescription"] !== null) {
            $this->UpdateDescription = $param["UpdateDescription"];
        }
    }
}
