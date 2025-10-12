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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateProject请求参数结构体
 *
 * @method string getProjectId() 获取目标修改的项目ID
 * @method void setProjectId(string $ProjectId) 设置目标修改的项目ID
 * @method string getDisplayName() 获取项目显示名称，可以为中文名,需要租户范围内唯一
 * @method void setDisplayName(string $DisplayName) 设置项目显示名称，可以为中文名,需要租户范围内唯一
 * @method string getDescription() 获取备注
 * @method void setDescription(string $Description) 设置备注
 * @method string getProjectOwnerUin() 获取项目负责人id
 * @method void setProjectOwnerUin(string $ProjectOwnerUin) 设置项目负责人id
 */
class UpdateProjectRequest extends AbstractModel
{
    /**
     * @var string 目标修改的项目ID
     */
    public $ProjectId;

    /**
     * @var string 项目显示名称，可以为中文名,需要租户范围内唯一
     */
    public $DisplayName;

    /**
     * @var string 备注
     */
    public $Description;

    /**
     * @var string 项目负责人id
     */
    public $ProjectOwnerUin;

    /**
     * @param string $ProjectId 目标修改的项目ID
     * @param string $DisplayName 项目显示名称，可以为中文名,需要租户范围内唯一
     * @param string $Description 备注
     * @param string $ProjectOwnerUin 项目负责人id
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ProjectOwnerUin",$param) and $param["ProjectOwnerUin"] !== null) {
            $this->ProjectOwnerUin = $param["ProjectOwnerUin"];
        }
    }
}
