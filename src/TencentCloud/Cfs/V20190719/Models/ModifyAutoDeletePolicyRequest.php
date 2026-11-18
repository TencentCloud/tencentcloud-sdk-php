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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAutoDeletePolicy请求参数结构体
 *
 * @method string getFileSystemId() 获取<p>文件系统 ID</p>
 * @method void setFileSystemId(string $FileSystemId) 设置<p>文件系统 ID</p>
 * @method string getPolicyId() 获取<p>自动清理策略 ID</p>
 * @method void setPolicyId(string $PolicyId) 设置<p>自动清理策略 ID</p>
 * @method array getPaths() 获取<p>自动清理路径列表</p>
 * @method void setPaths(array $Paths) 设置<p>自动清理路径列表</p>
 * @method string getPolicyName() 获取<p>自动清理策略名称</p>
 * @method void setPolicyName(string $PolicyName) 设置<p>自动清理策略名称</p>
 * @method string getStatus() 获取<p>策略状态</p><p>枚举值：</p><ul><li>enabled： 启用</li><li>disabled： 禁用</li></ul>
 * @method void setStatus(string $Status) 设置<p>策略状态</p><p>枚举值：</p><ul><li>enabled： 启用</li><li>disabled： 禁用</li></ul>
 */
class ModifyAutoDeletePolicyRequest extends AbstractModel
{
    /**
     * @var string <p>文件系统 ID</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>自动清理策略 ID</p>
     */
    public $PolicyId;

    /**
     * @var array <p>自动清理路径列表</p>
     */
    public $Paths;

    /**
     * @var string <p>自动清理策略名称</p>
     */
    public $PolicyName;

    /**
     * @var string <p>策略状态</p><p>枚举值：</p><ul><li>enabled： 启用</li><li>disabled： 禁用</li></ul>
     */
    public $Status;

    /**
     * @param string $FileSystemId <p>文件系统 ID</p>
     * @param string $PolicyId <p>自动清理策略 ID</p>
     * @param array $Paths <p>自动清理路径列表</p>
     * @param string $PolicyName <p>自动清理策略名称</p>
     * @param string $Status <p>策略状态</p><p>枚举值：</p><ul><li>enabled： 启用</li><li>disabled： 禁用</li></ul>
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

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("Paths",$param) and $param["Paths"] !== null) {
            $this->Paths = $param["Paths"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
