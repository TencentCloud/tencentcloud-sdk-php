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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSgSnapshotFileContent请求参数结构体
 *
 * @method string getSnapshotPolicyId() 获取快照策略Id。
 * @method void setSnapshotPolicyId(string $SnapshotPolicyId) 设置快照策略Id。
 * @method string getSnapshotFileId() 获取快照文件Id。
 * @method void setSnapshotFileId(string $SnapshotFileId) 设置快照文件Id。
 * @method string getSecurityGroupId() 获取安全组Id。
 * @method void setSecurityGroupId(string $SecurityGroupId) 设置安全组Id。
 */
class DescribeSgSnapshotFileContentRequest extends AbstractModel
{
    /**
     * @var string 快照策略Id。
     */
    public $SnapshotPolicyId;

    /**
     * @var string 快照文件Id。
     */
    public $SnapshotFileId;

    /**
     * @var string 安全组Id。
     */
    public $SecurityGroupId;

    /**
     * @param string $SnapshotPolicyId 快照策略Id。
     * @param string $SnapshotFileId 快照文件Id。
     * @param string $SecurityGroupId 安全组Id。
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
        if (array_key_exists("SnapshotPolicyId",$param) and $param["SnapshotPolicyId"] !== null) {
            $this->SnapshotPolicyId = $param["SnapshotPolicyId"];
        }

        if (array_key_exists("SnapshotFileId",$param) and $param["SnapshotFileId"] !== null) {
            $this->SnapshotFileId = $param["SnapshotFileId"];
        }

        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }
    }
}
