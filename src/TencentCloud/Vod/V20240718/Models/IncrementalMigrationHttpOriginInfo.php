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
namespace TencentCloud\Vod\V20240718\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 增量迁移源站信息。
 *
 * @method IncrementalMigrationHttpEndpointInfo getEndpointInfo() 获取增量迁移源站地址信息。
 * @method void setEndpointInfo(IncrementalMigrationHttpEndpointInfo $EndpointInfo) 设置增量迁移源站地址信息。
 * @method IncrementalMigrationOriginFileInfo getFileInfo() 获取增量迁移源站文件信息。
 * @method void setFileInfo(IncrementalMigrationOriginFileInfo $FileInfo) 设置增量迁移源站文件信息。
 */
class IncrementalMigrationHttpOriginInfo extends AbstractModel
{
    /**
     * @var IncrementalMigrationHttpEndpointInfo 增量迁移源站地址信息。
     */
    public $EndpointInfo;

    /**
     * @var IncrementalMigrationOriginFileInfo 增量迁移源站文件信息。
     */
    public $FileInfo;

    /**
     * @param IncrementalMigrationHttpEndpointInfo $EndpointInfo 增量迁移源站地址信息。
     * @param IncrementalMigrationOriginFileInfo $FileInfo 增量迁移源站文件信息。
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
        if (array_key_exists("EndpointInfo",$param) and $param["EndpointInfo"] !== null) {
            $this->EndpointInfo = new IncrementalMigrationHttpEndpointInfo();
            $this->EndpointInfo->deserialize($param["EndpointInfo"]);
        }

        if (array_key_exists("FileInfo",$param) and $param["FileInfo"] !== null) {
            $this->FileInfo = new IncrementalMigrationOriginFileInfo();
            $this->FileInfo->deserialize($param["FileInfo"]);
        }
    }
}
