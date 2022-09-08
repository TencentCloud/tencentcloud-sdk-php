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
 * UnbindAutoSnapshotPolicy请求参数结构体
 *
 * @method string getFileSystemIds() 获取需要解绑的文件系统ID列表，用"," 分割
 * @method void setFileSystemIds(string $FileSystemIds) 设置需要解绑的文件系统ID列表，用"," 分割
 * @method string getAutoSnapshotPolicyId() 获取解绑的快照ID
 * @method void setAutoSnapshotPolicyId(string $AutoSnapshotPolicyId) 设置解绑的快照ID
 */
class UnbindAutoSnapshotPolicyRequest extends AbstractModel
{
    /**
     * @var string 需要解绑的文件系统ID列表，用"," 分割
     */
    public $FileSystemIds;

    /**
     * @var string 解绑的快照ID
     */
    public $AutoSnapshotPolicyId;

    /**
     * @param string $FileSystemIds 需要解绑的文件系统ID列表，用"," 分割
     * @param string $AutoSnapshotPolicyId 解绑的快照ID
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
        if (array_key_exists("FileSystemIds",$param) and $param["FileSystemIds"] !== null) {
            $this->FileSystemIds = $param["FileSystemIds"];
        }

        if (array_key_exists("AutoSnapshotPolicyId",$param) and $param["AutoSnapshotPolicyId"] !== null) {
            $this->AutoSnapshotPolicyId = $param["AutoSnapshotPolicyId"];
        }
    }
}
