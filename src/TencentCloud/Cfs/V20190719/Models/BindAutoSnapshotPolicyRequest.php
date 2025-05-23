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
 * BindAutoSnapshotPolicy请求参数结构体
 *
 * @method string getAutoSnapshotPolicyId() 获取快照策略ID，通过快照策略列表获取
 * @method void setAutoSnapshotPolicyId(string $AutoSnapshotPolicyId) 设置快照策略ID，通过快照策略列表获取
 * @method string getFileSystemIds() 获取文件系统id列表，用“,”分隔，文件系统id通过查询文件系统列表获得
 * @method void setFileSystemIds(string $FileSystemIds) 设置文件系统id列表，用“,”分隔，文件系统id通过查询文件系统列表获得
 */
class BindAutoSnapshotPolicyRequest extends AbstractModel
{
    /**
     * @var string 快照策略ID，通过快照策略列表获取
     */
    public $AutoSnapshotPolicyId;

    /**
     * @var string 文件系统id列表，用“,”分隔，文件系统id通过查询文件系统列表获得
     */
    public $FileSystemIds;

    /**
     * @param string $AutoSnapshotPolicyId 快照策略ID，通过快照策略列表获取
     * @param string $FileSystemIds 文件系统id列表，用“,”分隔，文件系统id通过查询文件系统列表获得
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
        if (array_key_exists("AutoSnapshotPolicyId",$param) and $param["AutoSnapshotPolicyId"] !== null) {
            $this->AutoSnapshotPolicyId = $param["AutoSnapshotPolicyId"];
        }

        if (array_key_exists("FileSystemIds",$param) and $param["FileSystemIds"] !== null) {
            $this->FileSystemIds = $param["FileSystemIds"];
        }
    }
}
