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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户配置的相关信息，包括邮件配置。
 *
 * @method string getProfileId() 获取配置的id。
 * @method void setProfileId(string $ProfileId) 设置配置的id。
 * @method string getProfileType() 获取配置类型。
 * @method void setProfileType(string $ProfileType) 设置配置类型。
 * @method string getProfileLevel() 获取配置级别，"User"或"Instance"。
 * @method void setProfileLevel(string $ProfileLevel) 设置配置级别，"User"或"Instance"。
 * @method string getProfileName() 获取配置名称。
 * @method void setProfileName(string $ProfileName) 设置配置名称。
 * @method ProfileInfo getProfileInfo() 获取配置详情。
 * @method void setProfileInfo(ProfileInfo $ProfileInfo) 设置配置详情。
 */
class UserProfile extends AbstractModel
{
    /**
     * @var string 配置的id。
     */
    public $ProfileId;

    /**
     * @var string 配置类型。
     */
    public $ProfileType;

    /**
     * @var string 配置级别，"User"或"Instance"。
     */
    public $ProfileLevel;

    /**
     * @var string 配置名称。
     */
    public $ProfileName;

    /**
     * @var ProfileInfo 配置详情。
     */
    public $ProfileInfo;

    /**
     * @param string $ProfileId 配置的id。
     * @param string $ProfileType 配置类型。
     * @param string $ProfileLevel 配置级别，"User"或"Instance"。
     * @param string $ProfileName 配置名称。
     * @param ProfileInfo $ProfileInfo 配置详情。
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
        if (array_key_exists("ProfileId",$param) and $param["ProfileId"] !== null) {
            $this->ProfileId = $param["ProfileId"];
        }

        if (array_key_exists("ProfileType",$param) and $param["ProfileType"] !== null) {
            $this->ProfileType = $param["ProfileType"];
        }

        if (array_key_exists("ProfileLevel",$param) and $param["ProfileLevel"] !== null) {
            $this->ProfileLevel = $param["ProfileLevel"];
        }

        if (array_key_exists("ProfileName",$param) and $param["ProfileName"] !== null) {
            $this->ProfileName = $param["ProfileName"];
        }

        if (array_key_exists("ProfileInfo",$param) and $param["ProfileInfo"] !== null) {
            $this->ProfileInfo = new ProfileInfo();
            $this->ProfileInfo->deserialize($param["ProfileInfo"]);
        }
    }
}
