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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplySnapshot请求参数结构体
 *
 * @method string getSnapshotId() 获取快照ID, 可通过[DescribeSnapshots](/document/product/362/15647)查询。
 * @method void setSnapshotId(string $SnapshotId) 设置快照ID, 可通过[DescribeSnapshots](/document/product/362/15647)查询。
 * @method string getDiskId() 获取快照原云硬盘ID，可通过[DescribeDisks](/document/product/362/16315)接口查询。
 * @method void setDiskId(string $DiskId) 设置快照原云硬盘ID，可通过[DescribeDisks](/document/product/362/16315)接口查询。
 * @method boolean getAutoStopInstance() 获取回滚前是否执行自动关机，仅支持回滚快照至已挂载的云硬盘时传入。
此参数为true时，AutoStartInstance才能为true。
 * @method void setAutoStopInstance(boolean $AutoStopInstance) 设置回滚前是否执行自动关机，仅支持回滚快照至已挂载的云硬盘时传入。
此参数为true时，AutoStartInstance才能为true。
 * @method boolean getAutoStartInstance() 获取回滚完成后是否自动开机，仅支持回滚快照至已挂载的云硬盘时传入。该参数传入时，需要同时传入AutoStopInstance参数。
 * @method void setAutoStartInstance(boolean $AutoStartInstance) 设置回滚完成后是否自动开机，仅支持回滚快照至已挂载的云硬盘时传入。该参数传入时，需要同时传入AutoStopInstance参数。
 */
class ApplySnapshotRequest extends AbstractModel
{
    /**
     * @var string 快照ID, 可通过[DescribeSnapshots](/document/product/362/15647)查询。
     */
    public $SnapshotId;

    /**
     * @var string 快照原云硬盘ID，可通过[DescribeDisks](/document/product/362/16315)接口查询。
     */
    public $DiskId;

    /**
     * @var boolean 回滚前是否执行自动关机，仅支持回滚快照至已挂载的云硬盘时传入。
此参数为true时，AutoStartInstance才能为true。
     */
    public $AutoStopInstance;

    /**
     * @var boolean 回滚完成后是否自动开机，仅支持回滚快照至已挂载的云硬盘时传入。该参数传入时，需要同时传入AutoStopInstance参数。
     */
    public $AutoStartInstance;

    /**
     * @param string $SnapshotId 快照ID, 可通过[DescribeSnapshots](/document/product/362/15647)查询。
     * @param string $DiskId 快照原云硬盘ID，可通过[DescribeDisks](/document/product/362/16315)接口查询。
     * @param boolean $AutoStopInstance 回滚前是否执行自动关机，仅支持回滚快照至已挂载的云硬盘时传入。
此参数为true时，AutoStartInstance才能为true。
     * @param boolean $AutoStartInstance 回滚完成后是否自动开机，仅支持回滚快照至已挂载的云硬盘时传入。该参数传入时，需要同时传入AutoStopInstance参数。
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

        if (array_key_exists("AutoStopInstance",$param) and $param["AutoStopInstance"] !== null) {
            $this->AutoStopInstance = $param["AutoStopInstance"];
        }

        if (array_key_exists("AutoStartInstance",$param) and $param["AutoStartInstance"] !== null) {
            $this->AutoStartInstance = $param["AutoStartInstance"];
        }
    }
}
