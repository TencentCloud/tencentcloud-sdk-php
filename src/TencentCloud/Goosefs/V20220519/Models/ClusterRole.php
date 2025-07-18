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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ClusterRole
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getRoleName() 获取角色名
 * @method void setRoleName(string $RoleName) 设置角色名
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method array getDirectoryList() 获取目录列表
 * @method void setDirectoryList(array $DirectoryList) 设置目录列表
 */
class ClusterRole extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 角色名
     */
    public $RoleName;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var array 目录列表
     */
    public $DirectoryList;

    /**
     * @param string $ClusterId 集群ID
     * @param string $RoleName 角色名
     * @param string $Description 描述
     * @param array $DirectoryList 目录列表
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DirectoryList",$param) and $param["DirectoryList"] !== null) {
            $this->DirectoryList = $param["DirectoryList"];
        }
    }
}
