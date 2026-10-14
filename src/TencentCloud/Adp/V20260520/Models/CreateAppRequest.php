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
 * CreateApp请求参数结构体
 *
 * @method string getSpaceId() 获取<p>空间ID</p>
 * @method void setSpaceId(string $SpaceId) 设置<p>空间ID</p>
 * @method integer getAppMode() 获取<p>应用模式。枚举值: 1:标准模式, 2:Agent模式, 3:单工作流模式, 4:ClawAgent模式</p>
 * @method void setAppMode(integer $AppMode) 设置<p>应用模式。枚举值: 1:标准模式, 2:Agent模式, 3:单工作流模式, 4:ClawAgent模式</p>
 * @method string getAvatar() 获取<p>应用头像</p>
 * @method void setAvatar(string $Avatar) 设置<p>应用头像</p>
 * @method string getDescription() 获取<p>应用描述</p>
 * @method void setDescription(string $Description) 设置<p>应用描述</p>
 * @method string getName() 获取<p>应用名称</p>
 * @method void setName(string $Name) 设置<p>应用名称</p>
 */
class CreateAppRequest extends AbstractModel
{
    /**
     * @var string <p>空间ID</p>
     */
    public $SpaceId;

    /**
     * @var integer <p>应用模式。枚举值: 1:标准模式, 2:Agent模式, 3:单工作流模式, 4:ClawAgent模式</p>
     */
    public $AppMode;

    /**
     * @var string <p>应用头像</p>
     */
    public $Avatar;

    /**
     * @var string <p>应用描述</p>
     */
    public $Description;

    /**
     * @var string <p>应用名称</p>
     */
    public $Name;

    /**
     * @param string $SpaceId <p>空间ID</p>
     * @param integer $AppMode <p>应用模式。枚举值: 1:标准模式, 2:Agent模式, 3:单工作流模式, 4:ClawAgent模式</p>
     * @param string $Avatar <p>应用头像</p>
     * @param string $Description <p>应用描述</p>
     * @param string $Name <p>应用名称</p>
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
        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("AppMode",$param) and $param["AppMode"] !== null) {
            $this->AppMode = $param["AppMode"];
        }

        if (array_key_exists("Avatar",$param) and $param["Avatar"] !== null) {
            $this->Avatar = $param["Avatar"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
