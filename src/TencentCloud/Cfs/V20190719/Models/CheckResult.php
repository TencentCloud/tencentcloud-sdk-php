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
 * 有规则冲突时返回的已有冲突规则信息列表
 *
 * @method string getLifecyclePolicyID() 获取生命周期管理策略ID
 * @method void setLifecyclePolicyID(string $LifecyclePolicyID) 设置生命周期管理策略ID
 * @method string getFileSystemId() 获取文件系统ID
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统ID
 * @method string getPath() 获取目录绝对路径
 * @method void setPath(string $Path) 设置目录绝对路径
 * @method array getLifecycleRules() 获取生命周期管理策略关联的管理规则列表
 * @method void setLifecycleRules(array $LifecycleRules) 设置生命周期管理策略关联的管理规则列表
 * @method string getTargetPath() 获取目标路径
 * @method void setTargetPath(string $TargetPath) 设置目标路径
 */
class CheckResult extends AbstractModel
{
    /**
     * @var string 生命周期管理策略ID
     */
    public $LifecyclePolicyID;

    /**
     * @var string 文件系统ID
     */
    public $FileSystemId;

    /**
     * @var string 目录绝对路径
     */
    public $Path;

    /**
     * @var array 生命周期管理策略关联的管理规则列表
     */
    public $LifecycleRules;

    /**
     * @var string 目标路径
     */
    public $TargetPath;

    /**
     * @param string $LifecyclePolicyID 生命周期管理策略ID
     * @param string $FileSystemId 文件系统ID
     * @param string $Path 目录绝对路径
     * @param array $LifecycleRules 生命周期管理策略关联的管理规则列表
     * @param string $TargetPath 目标路径
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
        if (array_key_exists("LifecyclePolicyID",$param) and $param["LifecyclePolicyID"] !== null) {
            $this->LifecyclePolicyID = $param["LifecyclePolicyID"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("LifecycleRules",$param) and $param["LifecycleRules"] !== null) {
            $this->LifecycleRules = [];
            foreach ($param["LifecycleRules"] as $key => $value){
                $obj = new LifecycleRule();
                $obj->deserialize($value);
                array_push($this->LifecycleRules, $obj);
            }
        }

        if (array_key_exists("TargetPath",$param) and $param["TargetPath"] !== null) {
            $this->TargetPath = $param["TargetPath"];
        }
    }
}
