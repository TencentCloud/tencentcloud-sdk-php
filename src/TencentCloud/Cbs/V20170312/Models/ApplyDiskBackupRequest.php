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
 * ApplyDiskBackup请求参数结构体
 *
 * @method string getDiskBackupId() 获取云硬盘备份点ID，可以通过[DescribeDiskBackups](/document/product/362/80278)接口查询。
 * @method void setDiskBackupId(string $DiskBackupId) 设置云硬盘备份点ID，可以通过[DescribeDiskBackups](/document/product/362/80278)接口查询。
 * @method string getDiskId() 获取云硬盘备份点原云硬盘ID，可以通过[DescribeDisks](/document/product/362/16315)接口查。
 * @method void setDiskId(string $DiskId) 设置云硬盘备份点原云硬盘ID，可以通过[DescribeDisks](/document/product/362/16315)接口查。
 * @method boolean getAutoStopInstance() 获取回滚云硬盘备份点前是否自动关机，默认为FALSE，表示不自动关机
 * @method void setAutoStopInstance(boolean $AutoStopInstance) 设置回滚云硬盘备份点前是否自动关机，默认为FALSE，表示不自动关机
 * @method boolean getAutoStartInstance() 获取回滚云硬盘备份点完成后是否自动开机，默认为FALSE，表示不自动开机; AutoStartInstance参数需要在AutoStopInstance为true时才能为true。
 * @method void setAutoStartInstance(boolean $AutoStartInstance) 设置回滚云硬盘备份点完成后是否自动开机，默认为FALSE，表示不自动开机; AutoStartInstance参数需要在AutoStopInstance为true时才能为true。
 */
class ApplyDiskBackupRequest extends AbstractModel
{
    /**
     * @var string 云硬盘备份点ID，可以通过[DescribeDiskBackups](/document/product/362/80278)接口查询。
     */
    public $DiskBackupId;

    /**
     * @var string 云硬盘备份点原云硬盘ID，可以通过[DescribeDisks](/document/product/362/16315)接口查。
     */
    public $DiskId;

    /**
     * @var boolean 回滚云硬盘备份点前是否自动关机，默认为FALSE，表示不自动关机
     */
    public $AutoStopInstance;

    /**
     * @var boolean 回滚云硬盘备份点完成后是否自动开机，默认为FALSE，表示不自动开机; AutoStartInstance参数需要在AutoStopInstance为true时才能为true。
     */
    public $AutoStartInstance;

    /**
     * @param string $DiskBackupId 云硬盘备份点ID，可以通过[DescribeDiskBackups](/document/product/362/80278)接口查询。
     * @param string $DiskId 云硬盘备份点原云硬盘ID，可以通过[DescribeDisks](/document/product/362/16315)接口查。
     * @param boolean $AutoStopInstance 回滚云硬盘备份点前是否自动关机，默认为FALSE，表示不自动关机
     * @param boolean $AutoStartInstance 回滚云硬盘备份点完成后是否自动开机，默认为FALSE，表示不自动开机; AutoStartInstance参数需要在AutoStopInstance为true时才能为true。
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
        if (array_key_exists("DiskBackupId",$param) and $param["DiskBackupId"] !== null) {
            $this->DiskBackupId = $param["DiskBackupId"];
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
