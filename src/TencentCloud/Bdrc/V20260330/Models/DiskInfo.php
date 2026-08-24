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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述容灾云硬盘的详情，如云硬盘的镜像格式。
 *
 * @method string getDiskId() 获取云硬盘ID
 * @method void setDiskId(string $DiskId) 设置云硬盘ID
 * @method string getImageFormat() 获取云盘的镜像格式。QCOW2:  qcow2格式，这种格式的云盘不能用于容灾；RAW：raw格式，可以用于容灾。
 * @method void setImageFormat(string $ImageFormat) 设置云盘的镜像格式。QCOW2:  qcow2格式，这种格式的云盘不能用于容灾；RAW：raw格式，可以用于容灾。
 */
class DiskInfo extends AbstractModel
{
    /**
     * @var string 云硬盘ID
     */
    public $DiskId;

    /**
     * @var string 云盘的镜像格式。QCOW2:  qcow2格式，这种格式的云盘不能用于容灾；RAW：raw格式，可以用于容灾。
     */
    public $ImageFormat;

    /**
     * @param string $DiskId 云硬盘ID
     * @param string $ImageFormat 云盘的镜像格式。QCOW2:  qcow2格式，这种格式的云盘不能用于容灾；RAW：raw格式，可以用于容灾。
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
        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("ImageFormat",$param) and $param["ImageFormat"] !== null) {
            $this->ImageFormat = $param["ImageFormat"];
        }
    }
}
