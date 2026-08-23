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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI Agent 的 skill 详情
 *
 * @method string getName() 获取skill 名称
 * @method void setName(string $Name) 设置skill 名称
 * @method string getPath() 获取skill 路径
 * @method void setPath(string $Path) 设置skill 路径
 * @method string getVersion() 获取skill 版本
 * @method void setVersion(string $Version) 设置skill 版本
 * @method string getDescription() 获取skill 描述
 * @method void setDescription(string $Description) 设置skill 描述
 */
class AIAgentSkillInfo extends AbstractModel
{
    /**
     * @var string skill 名称
     */
    public $Name;

    /**
     * @var string skill 路径
     */
    public $Path;

    /**
     * @var string skill 版本
     */
    public $Version;

    /**
     * @var string skill 描述
     */
    public $Description;

    /**
     * @param string $Name skill 名称
     * @param string $Path skill 路径
     * @param string $Version skill 版本
     * @param string $Description skill 描述
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
