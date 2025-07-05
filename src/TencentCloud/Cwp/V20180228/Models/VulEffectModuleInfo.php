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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 漏洞影响组件详情
 *
 * @method string getName() 获取组件名
 * @method void setName(string $Name) 设置组件名
 * @method array getUuids() 获取影响的主机uuid
 * @method void setUuids(array $Uuids) 设置影响的主机uuid
 * @method string getRule() 获取组件影响版本
 * @method void setRule(string $Rule) 设置组件影响版本
 * @method string getPath() 获取组件路径
 * @method void setPath(string $Path) 设置组件路径
 * @method string getVersion() 获取组件版本
 * @method void setVersion(string $Version) 设置组件版本
 * @method string getFixCmd() 获取修复命令
 * @method void setFixCmd(string $FixCmd) 设置修复命令
 * @method array getQuuids() 获取影响的主机quuid
 * @method void setQuuids(array $Quuids) 设置影响的主机quuid
 */
class VulEffectModuleInfo extends AbstractModel
{
    /**
     * @var string 组件名
     */
    public $Name;

    /**
     * @var array 影响的主机uuid
     */
    public $Uuids;

    /**
     * @var string 组件影响版本
     */
    public $Rule;

    /**
     * @var string 组件路径
     */
    public $Path;

    /**
     * @var string 组件版本
     */
    public $Version;

    /**
     * @var string 修复命令
     */
    public $FixCmd;

    /**
     * @var array 影响的主机quuid
     */
    public $Quuids;

    /**
     * @param string $Name 组件名
     * @param array $Uuids 影响的主机uuid
     * @param string $Rule 组件影响版本
     * @param string $Path 组件路径
     * @param string $Version 组件版本
     * @param string $FixCmd 修复命令
     * @param array $Quuids 影响的主机quuid
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

        if (array_key_exists("Uuids",$param) and $param["Uuids"] !== null) {
            $this->Uuids = $param["Uuids"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("FixCmd",$param) and $param["FixCmd"] !== null) {
            $this->FixCmd = $param["FixCmd"];
        }

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }
    }
}
