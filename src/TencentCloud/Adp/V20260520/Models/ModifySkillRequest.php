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
 * ModifySkill请求参数结构体
 *
 * @method string getSkillId() 获取<p>SkillId</p>
 * @method void setSkillId(string $SkillId) 设置<p>SkillId</p>
 * @method string getSpaceId() 获取<p>空间ID</p>
 * @method void setSpaceId(string $SpaceId) 设置<p>空间ID</p>
 * @method string getDisplayDescription() 获取<p>skill描述</p>
 * @method void setDisplayDescription(string $DisplayDescription) 设置<p>skill描述</p>
 * @method string getDisplayName() 获取<p>skill名称</p>
 * @method void setDisplayName(string $DisplayName) 设置<p>skill名称</p>
 * @method string getFileUrl() 获取<p>skill包文件地址（zip）；传入则触发新版本生成，需与SkillVersion、UpdateDescription配套传入</p>
 * @method void setFileUrl(string $FileUrl) 设置<p>skill包文件地址（zip）；传入则触发新版本生成，需与SkillVersion、UpdateDescription配套传入</p>
 * @method string getIconUrl() 获取<p>图标地址</p>
 * @method void setIconUrl(string $IconUrl) 设置<p>图标地址</p>
 * @method string getSkillVersion() 获取<p>skill版本号（与FileUrl配套传入）</p>
 * @method void setSkillVersion(string $SkillVersion) 设置<p>skill版本号（与FileUrl配套传入）</p>
 * @method string getUpdateDescription() 获取<p>版本变更说明（与FileUrl配套传入）</p>
 * @method void setUpdateDescription(string $UpdateDescription) 设置<p>版本变更说明（与FileUrl配套传入）</p>
 */
class ModifySkillRequest extends AbstractModel
{
    /**
     * @var string <p>SkillId</p>
     */
    public $SkillId;

    /**
     * @var string <p>空间ID</p>
     */
    public $SpaceId;

    /**
     * @var string <p>skill描述</p>
     */
    public $DisplayDescription;

    /**
     * @var string <p>skill名称</p>
     */
    public $DisplayName;

    /**
     * @var string <p>skill包文件地址（zip）；传入则触发新版本生成，需与SkillVersion、UpdateDescription配套传入</p>
     */
    public $FileUrl;

    /**
     * @var string <p>图标地址</p>
     */
    public $IconUrl;

    /**
     * @var string <p>skill版本号（与FileUrl配套传入）</p>
     */
    public $SkillVersion;

    /**
     * @var string <p>版本变更说明（与FileUrl配套传入）</p>
     */
    public $UpdateDescription;

    /**
     * @param string $SkillId <p>SkillId</p>
     * @param string $SpaceId <p>空间ID</p>
     * @param string $DisplayDescription <p>skill描述</p>
     * @param string $DisplayName <p>skill名称</p>
     * @param string $FileUrl <p>skill包文件地址（zip）；传入则触发新版本生成，需与SkillVersion、UpdateDescription配套传入</p>
     * @param string $IconUrl <p>图标地址</p>
     * @param string $SkillVersion <p>skill版本号（与FileUrl配套传入）</p>
     * @param string $UpdateDescription <p>版本变更说明（与FileUrl配套传入）</p>
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

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("DisplayDescription",$param) and $param["DisplayDescription"] !== null) {
            $this->DisplayDescription = $param["DisplayDescription"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("IconUrl",$param) and $param["IconUrl"] !== null) {
            $this->IconUrl = $param["IconUrl"];
        }

        if (array_key_exists("SkillVersion",$param) and $param["SkillVersion"] !== null) {
            $this->SkillVersion = $param["SkillVersion"];
        }

        if (array_key_exists("UpdateDescription",$param) and $param["UpdateDescription"] !== null) {
            $this->UpdateDescription = $param["UpdateDescription"];
        }
    }
}
