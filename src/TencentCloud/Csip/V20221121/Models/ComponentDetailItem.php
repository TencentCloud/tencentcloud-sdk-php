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
 * 关联组件&路径详情
 *
 * @method string getName() 获取组件名称
 * @method void setName(string $Name) 设置组件名称
 * @method string getVersion() 获取命中版本
 * @method void setVersion(string $Version) 设置命中版本
 * @method string getPath() 获取关联路径
 * @method void setPath(string $Path) 设置关联路径
 * @method string getFixCommand() 获取修复命令
 * @method void setFixCommand(string $FixCommand) 设置修复命令
 */
class ComponentDetailItem extends AbstractModel
{
    /**
     * @var string 组件名称
     */
    public $Name;

    /**
     * @var string 命中版本
     */
    public $Version;

    /**
     * @var string 关联路径
     */
    public $Path;

    /**
     * @var string 修复命令
     */
    public $FixCommand;

    /**
     * @param string $Name 组件名称
     * @param string $Version 命中版本
     * @param string $Path 关联路径
     * @param string $FixCommand 修复命令
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

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("FixCommand",$param) and $param["FixCommand"] !== null) {
            $this->FixCommand = $param["FixCommand"];
        }
    }
}
