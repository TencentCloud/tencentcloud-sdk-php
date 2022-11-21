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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteCfsSnapshot请求参数结构体
 *
 * @method string getSnapshotId() 获取文件系统快照id
 * @method void setSnapshotId(string $SnapshotId) 设置文件系统快照id
 * @method array getSnapshotIds() 获取需要删除的文件文件系统快照ID 列表，快照ID，跟ID列表至少填一项
 * @method void setSnapshotIds(array $SnapshotIds) 设置需要删除的文件文件系统快照ID 列表，快照ID，跟ID列表至少填一项
 */
class DeleteCfsSnapshotRequest extends AbstractModel
{
    /**
     * @var string 文件系统快照id
     */
    public $SnapshotId;

    /**
     * @var array 需要删除的文件文件系统快照ID 列表，快照ID，跟ID列表至少填一项
     */
    public $SnapshotIds;

    /**
     * @param string $SnapshotId 文件系统快照id
     * @param array $SnapshotIds 需要删除的文件文件系统快照ID 列表，快照ID，跟ID列表至少填一项
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

        if (array_key_exists("SnapshotIds",$param) and $param["SnapshotIds"] !== null) {
            $this->SnapshotIds = $param["SnapshotIds"];
        }
    }
}
