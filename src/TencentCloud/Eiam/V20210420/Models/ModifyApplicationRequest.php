<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyApplication请求参数结构体
 *
 * @method string getApplicationId() 获取应用ID，是应用的全局唯一标识。
 * @method void setApplicationId(string $ApplicationId) 设置应用ID，是应用的全局唯一标识。
 * @method string getSecureLevel() 获取安全级别。
 * @method void setSecureLevel(string $SecureLevel) 设置安全级别。
 * @method string getDisplayName() 获取应用展示名称，长度限制：32个字符。 默认与应用名字相同。
 * @method void setDisplayName(string $DisplayName) 设置应用展示名称，长度限制：32个字符。 默认与应用名字相同。
 * @method boolean getAppStatus() 获取应用状态，true表示启用，false表示禁用。
 * @method void setAppStatus(boolean $AppStatus) 设置应用状态，true表示启用，false表示禁用。
 * @method string getIconUrl() 获取应用图标图片访问地址。
 * @method void setIconUrl(string $IconUrl) 设置应用图标图片访问地址。
 * @method string getDescription() 获取描述。长度不超过128。
 * @method void setDescription(string $Description) 设置描述。长度不超过128。
 */
class ModifyApplicationRequest extends AbstractModel
{
    /**
     * @var string 应用ID，是应用的全局唯一标识。
     */
    public $ApplicationId;

    /**
     * @var string 安全级别。
     */
    public $SecureLevel;

    /**
     * @var string 应用展示名称，长度限制：32个字符。 默认与应用名字相同。
     */
    public $DisplayName;

    /**
     * @var boolean 应用状态，true表示启用，false表示禁用。
     */
    public $AppStatus;

    /**
     * @var string 应用图标图片访问地址。
     */
    public $IconUrl;

    /**
     * @var string 描述。长度不超过128。
     */
    public $Description;

    /**
     * @param string $ApplicationId 应用ID，是应用的全局唯一标识。
     * @param string $SecureLevel 安全级别。
     * @param string $DisplayName 应用展示名称，长度限制：32个字符。 默认与应用名字相同。
     * @param boolean $AppStatus 应用状态，true表示启用，false表示禁用。
     * @param string $IconUrl 应用图标图片访问地址。
     * @param string $Description 描述。长度不超过128。
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("SecureLevel",$param) and $param["SecureLevel"] !== null) {
            $this->SecureLevel = $param["SecureLevel"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("AppStatus",$param) and $param["AppStatus"] !== null) {
            $this->AppStatus = $param["AppStatus"];
        }

        if (array_key_exists("IconUrl",$param) and $param["IconUrl"] !== null) {
            $this->IconUrl = $param["IconUrl"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
