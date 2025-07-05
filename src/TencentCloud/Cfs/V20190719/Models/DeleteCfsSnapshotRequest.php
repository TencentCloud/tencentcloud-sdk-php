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
 * DeleteCfsSnapshot请求参数结构体
 *
 * @method string getSnapshotId() 获取快照ID，可以通过[DescribeCfsSnapshots](https://cloud.tencent.com/document/api/582/80206) 查询获取
 * @method void setSnapshotId(string $SnapshotId) 设置快照ID，可以通过[DescribeCfsSnapshots](https://cloud.tencent.com/document/api/582/80206) 查询获取
 * @method array getSnapshotIds() 获取需要删除的文件系统快照ID 列表，快照ID，跟ID列表至少填一项
快照ID，可以通过[DescribeCfsSnapshots](https://cloud.tencent.com/document/api/582/80206) 查询获取
 * @method void setSnapshotIds(array $SnapshotIds) 设置需要删除的文件系统快照ID 列表，快照ID，跟ID列表至少填一项
快照ID，可以通过[DescribeCfsSnapshots](https://cloud.tencent.com/document/api/582/80206) 查询获取
 */
class DeleteCfsSnapshotRequest extends AbstractModel
{
    /**
     * @var string 快照ID，可以通过[DescribeCfsSnapshots](https://cloud.tencent.com/document/api/582/80206) 查询获取
     */
    public $SnapshotId;

    /**
     * @var array 需要删除的文件系统快照ID 列表，快照ID，跟ID列表至少填一项
快照ID，可以通过[DescribeCfsSnapshots](https://cloud.tencent.com/document/api/582/80206) 查询获取
     */
    public $SnapshotIds;

    /**
     * @param string $SnapshotId 快照ID，可以通过[DescribeCfsSnapshots](https://cloud.tencent.com/document/api/582/80206) 查询获取
     * @param array $SnapshotIds 需要删除的文件系统快照ID 列表，快照ID，跟ID列表至少填一项
快照ID，可以通过[DescribeCfsSnapshots](https://cloud.tencent.com/document/api/582/80206) 查询获取
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
