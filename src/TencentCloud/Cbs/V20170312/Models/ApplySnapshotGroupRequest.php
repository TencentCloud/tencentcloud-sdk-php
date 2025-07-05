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
 * ApplySnapshotGroup请求参数结构体
 *
 * @method string getSnapshotGroupId() 获取回滚的快照组ID。
 * @method void setSnapshotGroupId(string $SnapshotGroupId) 设置回滚的快照组ID。
 * @method array getApplyDisks() 获取回滚的快照组关联的快照ID，及快照对应的原云硬盘ID列表。
 * @method void setApplyDisks(array $ApplyDisks) 设置回滚的快照组关联的快照ID，及快照对应的原云硬盘ID列表。
 * @method boolean getAutoStopInstance() 获取回滚前是否执行自动关机。
 * @method void setAutoStopInstance(boolean $AutoStopInstance) 设置回滚前是否执行自动关机。
 * @method boolean getAutoStartInstance() 获取回滚完成后是否自动开机。
 * @method void setAutoStartInstance(boolean $AutoStartInstance) 设置回滚完成后是否自动开机。
 */
class ApplySnapshotGroupRequest extends AbstractModel
{
    /**
     * @var string 回滚的快照组ID。
     */
    public $SnapshotGroupId;

    /**
     * @var array 回滚的快照组关联的快照ID，及快照对应的原云硬盘ID列表。
     */
    public $ApplyDisks;

    /**
     * @var boolean 回滚前是否执行自动关机。
     */
    public $AutoStopInstance;

    /**
     * @var boolean 回滚完成后是否自动开机。
     */
    public $AutoStartInstance;

    /**
     * @param string $SnapshotGroupId 回滚的快照组ID。
     * @param array $ApplyDisks 回滚的快照组关联的快照ID，及快照对应的原云硬盘ID列表。
     * @param boolean $AutoStopInstance 回滚前是否执行自动关机。
     * @param boolean $AutoStartInstance 回滚完成后是否自动开机。
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

        if (array_key_exists("ApplyDisks",$param) and $param["ApplyDisks"] !== null) {
            $this->ApplyDisks = [];
            foreach ($param["ApplyDisks"] as $key => $value){
                $obj = new ApplyDisk();
                $obj->deserialize($value);
                array_push($this->ApplyDisks, $obj);
            }
        }

        if (array_key_exists("AutoStopInstance",$param) and $param["AutoStopInstance"] !== null) {
            $this->AutoStopInstance = $param["AutoStopInstance"];
        }

        if (array_key_exists("AutoStartInstance",$param) and $param["AutoStartInstance"] !== null) {
            $this->AutoStartInstance = $param["AutoStartInstance"];
        }
    }
}
