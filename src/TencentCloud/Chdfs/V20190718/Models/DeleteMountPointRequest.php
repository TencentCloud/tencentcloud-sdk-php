<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * DeleteMountPoint请求参数结构体
 *
 * @method string getMountPointId() 获取挂载点ID
 * @method void setMountPointId(string $MountPointId) 设置挂载点ID
 */
class DeleteMountPointRequest extends AbstractModel
{
    /**
     * @var string 挂载点ID
     */
    public $MountPointId;

    /**
     * @param string $MountPointId 挂载点ID
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
        if (array_key_exists('MountPointId',$param) and $param['MountPointId'] !== null) {
            $this->MountPointId = $param['MountPointId'];
        }
    }
}
