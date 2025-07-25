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
namespace TencentCloud\Chdfs\V20190718\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMountPoint请求参数结构体
 *
 * @method string getMountPointId() 获取挂载点ID
 * @method void setMountPointId(string $MountPointId) 设置挂载点ID
 * @method string getMountPointName() 获取挂载点名称
 * @method void setMountPointName(string $MountPointName) 设置挂载点名称
 * @method integer getMountPointStatus() 获取挂载点状态
 * @method void setMountPointStatus(integer $MountPointStatus) 设置挂载点状态
 * @method string getAccessGroupId() 获取权限组ID
 * @method void setAccessGroupId(string $AccessGroupId) 设置权限组ID
 */
class ModifyMountPointRequest extends AbstractModel
{
    /**
     * @var string 挂载点ID
     */
    public $MountPointId;

    /**
     * @var string 挂载点名称
     */
    public $MountPointName;

    /**
     * @var integer 挂载点状态
     */
    public $MountPointStatus;

    /**
     * @var string 权限组ID
     */
    public $AccessGroupId;

    /**
     * @param string $MountPointId 挂载点ID
     * @param string $MountPointName 挂载点名称
     * @param integer $MountPointStatus 挂载点状态
     * @param string $AccessGroupId 权限组ID
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
        if (array_key_exists("MountPointId",$param) and $param["MountPointId"] !== null) {
            $this->MountPointId = $param["MountPointId"];
        }

        if (array_key_exists("MountPointName",$param) and $param["MountPointName"] !== null) {
            $this->MountPointName = $param["MountPointName"];
        }

        if (array_key_exists("MountPointStatus",$param) and $param["MountPointStatus"] !== null) {
            $this->MountPointStatus = $param["MountPointStatus"];
        }

        if (array_key_exists("AccessGroupId",$param) and $param["AccessGroupId"] !== null) {
            $this->AccessGroupId = $param["AccessGroupId"];
        }
    }
}
