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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 本参数用于快照组回滚接口的入参，表示回滚的云盘、快照列表。
 *
 * @method string getSnapshotId() 获取快照组关联的快照ID。
 * @method void setSnapshotId(string $SnapshotId) 设置快照组关联的快照ID。
 * @method string getDiskId() 获取快照组关联快照对应的原云硬盘ID。
 * @method void setDiskId(string $DiskId) 设置快照组关联快照对应的原云硬盘ID。
 */
class ApplyDisk extends AbstractModel
{
    /**
     * @var string 快照组关联的快照ID。
     */
    public $SnapshotId;

    /**
     * @var string 快照组关联快照对应的原云硬盘ID。
     */
    public $DiskId;

    /**
     * @param string $SnapshotId 快照组关联的快照ID。
     * @param string $DiskId 快照组关联快照对应的原云硬盘ID。
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
        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }
    }
}
