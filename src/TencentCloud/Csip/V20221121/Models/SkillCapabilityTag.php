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
 * Skill 能力标签
 *
 * @method string getID() 获取能力标签标识，适合程序判定、过滤或聚合使用
 * @method void setID(string $ID) 设置能力标签标识，适合程序判定、过滤或聚合使用
 * @method string getName() 获取能力标签展示名称
 * @method void setName(string $Name) 设置能力标签展示名称
 */
class SkillCapabilityTag extends AbstractModel
{
    /**
     * @var string 能力标签标识，适合程序判定、过滤或聚合使用
     */
    public $ID;

    /**
     * @var string 能力标签展示名称
     */
    public $Name;

    /**
     * @param string $ID 能力标签标识，适合程序判定、过滤或聚合使用
     * @param string $Name 能力标签展示名称
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
