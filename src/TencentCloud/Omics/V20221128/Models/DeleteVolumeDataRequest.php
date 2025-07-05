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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteVolumeData请求参数结构体
 *
 * @method string getVolumeId() 获取缓存卷ID。
 * @method void setVolumeId(string $VolumeId) 设置缓存卷ID。
 * @method string getPath() 获取需要删除的路径。
 * @method void setPath(string $Path) 设置需要删除的路径。
 */
class DeleteVolumeDataRequest extends AbstractModel
{
    /**
     * @var string 缓存卷ID。
     */
    public $VolumeId;

    /**
     * @var string 需要删除的路径。
     */
    public $Path;

    /**
     * @param string $VolumeId 缓存卷ID。
     * @param string $Path 需要删除的路径。
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
        if (array_key_exists("VolumeId",$param) and $param["VolumeId"] !== null) {
            $this->VolumeId = $param["VolumeId"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }
    }
}
