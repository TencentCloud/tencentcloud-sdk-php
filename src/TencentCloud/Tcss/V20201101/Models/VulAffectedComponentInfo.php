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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 受漏洞影响的组件信息
 *
 * @method string getName() 获取组件名称
 * @method void setName(string $Name) 设置组件名称
 * @method array getVersion() 获取组件版本
 * @method void setVersion(array $Version) 设置组件版本
 * @method array getFixedVersion() 获取组件修复版本
 * @method void setFixedVersion(array $FixedVersion) 设置组件修复版本
 */
class VulAffectedComponentInfo extends AbstractModel
{
    /**
     * @var string 组件名称
     */
    public $Name;

    /**
     * @var array 组件版本
     */
    public $Version;

    /**
     * @var array 组件修复版本
     */
    public $FixedVersion;

    /**
     * @param string $Name 组件名称
     * @param array $Version 组件版本
     * @param array $FixedVersion 组件修复版本
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

        if (array_key_exists("FixedVersion",$param) and $param["FixedVersion"] !== null) {
            $this->FixedVersion = $param["FixedVersion"];
        }
    }
}
