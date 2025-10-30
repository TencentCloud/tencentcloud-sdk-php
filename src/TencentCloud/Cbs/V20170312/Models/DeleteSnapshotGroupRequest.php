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
 * DeleteSnapshotGroup请求参数结构体
 *
 * @method string getSnapshotGroupId() 获取快照组ID。
 * @method void setSnapshotGroupId(string $SnapshotGroupId) 设置快照组ID。
 * @method array getSnapshotGroupIds() 获取快照组ID 列表。此参数与快照组 ID 至少传 1 个，同时传会与快照组 ID 合并。
 * @method void setSnapshotGroupIds(array $SnapshotGroupIds) 设置快照组ID 列表。此参数与快照组 ID 至少传 1 个，同时传会与快照组 ID 合并。
 * @method boolean getDeleteBindImages() 获取是否同时删除快照组关联的镜像；取值为false，表示不删除快照组绑定的镜像，此时，如果快照组有绑定的镜像，删除会失败；取值为true，表示同时删除快照组绑定的镜像；默认值为false。
 * @method void setDeleteBindImages(boolean $DeleteBindImages) 设置是否同时删除快照组关联的镜像；取值为false，表示不删除快照组绑定的镜像，此时，如果快照组有绑定的镜像，删除会失败；取值为true，表示同时删除快照组绑定的镜像；默认值为false。
 */
class DeleteSnapshotGroupRequest extends AbstractModel
{
    /**
     * @var string 快照组ID。
     */
    public $SnapshotGroupId;

    /**
     * @var array 快照组ID 列表。此参数与快照组 ID 至少传 1 个，同时传会与快照组 ID 合并。
     */
    public $SnapshotGroupIds;

    /**
     * @var boolean 是否同时删除快照组关联的镜像；取值为false，表示不删除快照组绑定的镜像，此时，如果快照组有绑定的镜像，删除会失败；取值为true，表示同时删除快照组绑定的镜像；默认值为false。
     */
    public $DeleteBindImages;

    /**
     * @param string $SnapshotGroupId 快照组ID。
     * @param array $SnapshotGroupIds 快照组ID 列表。此参数与快照组 ID 至少传 1 个，同时传会与快照组 ID 合并。
     * @param boolean $DeleteBindImages 是否同时删除快照组关联的镜像；取值为false，表示不删除快照组绑定的镜像，此时，如果快照组有绑定的镜像，删除会失败；取值为true，表示同时删除快照组绑定的镜像；默认值为false。
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
        if (array_key_exists("SnapshotGroupId",$param) and $param["SnapshotGroupId"] !== null) {
            $this->SnapshotGroupId = $param["SnapshotGroupId"];
        }

        if (array_key_exists("SnapshotGroupIds",$param) and $param["SnapshotGroupIds"] !== null) {
            $this->SnapshotGroupIds = $param["SnapshotGroupIds"];
        }

        if (array_key_exists("DeleteBindImages",$param) and $param["DeleteBindImages"] !== null) {
            $this->DeleteBindImages = $param["DeleteBindImages"];
        }
    }
}
