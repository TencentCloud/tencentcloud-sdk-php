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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSandboxSnapshot请求参数结构体
 *
 * @method string getInstanceId() 获取<p>待制作快照的沙箱实例 ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>待制作快照的沙箱实例 ID</p>
 * @method string getSnapshotName() 获取<p>快照名称</p>
 * @method void setSnapshotName(string $SnapshotName) 设置<p>快照名称</p>
 * @method boolean getMemory() 获取<p>制作快照时是否包含内存状态</p>
 * @method void setMemory(boolean $Memory) 设置<p>制作快照时是否包含内存状态</p>
 * @method array getTags() 获取<p>云资源标签</p>
 * @method void setTags(array $Tags) 设置<p>云资源标签</p>
 * @method string getClientToken() 获取<p>幂等 token</p>
 * @method void setClientToken(string $ClientToken) 设置<p>幂等 token</p>
 */
class CreateSandboxSnapshotRequest extends AbstractModel
{
    /**
     * @var string <p>待制作快照的沙箱实例 ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>快照名称</p>
     */
    public $SnapshotName;

    /**
     * @var boolean <p>制作快照时是否包含内存状态</p>
     */
    public $Memory;

    /**
     * @var array <p>云资源标签</p>
     */
    public $Tags;

    /**
     * @var string <p>幂等 token</p>
     */
    public $ClientToken;

    /**
     * @param string $InstanceId <p>待制作快照的沙箱实例 ID</p>
     * @param string $SnapshotName <p>快照名称</p>
     * @param boolean $Memory <p>制作快照时是否包含内存状态</p>
     * @param array $Tags <p>云资源标签</p>
     * @param string $ClientToken <p>幂等 token</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }
    }
}
