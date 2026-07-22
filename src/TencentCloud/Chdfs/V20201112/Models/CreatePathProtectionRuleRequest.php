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
namespace TencentCloud\Chdfs\V20201112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePathProtectionRule请求参数结构体
 *
 * @method string getFileSystemId() 获取文件系统ID
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统ID
 * @method string getName() 获取规则名称
 * @method void setName(string $Name) 设置规则名称
 * @method string getPath() 获取指定保护路径
 * @method void setPath(string $Path) 设置指定保护路径
 * @method integer getStatus() 获取规则状态（1：打开；2：关闭）
 * @method void setStatus(integer $Status) 设置规则状态（1：打开；2：关闭）
 */
class CreatePathProtectionRuleRequest extends AbstractModel
{
    /**
     * @var string 文件系统ID
     */
    public $FileSystemId;

    /**
     * @var string 规则名称
     */
    public $Name;

    /**
     * @var string 指定保护路径
     */
    public $Path;

    /**
     * @var integer 规则状态（1：打开；2：关闭）
     */
    public $Status;

    /**
     * @param string $FileSystemId 文件系统ID
     * @param string $Name 规则名称
     * @param string $Path 指定保护路径
     * @param integer $Status 规则状态（1：打开；2：关闭）
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
