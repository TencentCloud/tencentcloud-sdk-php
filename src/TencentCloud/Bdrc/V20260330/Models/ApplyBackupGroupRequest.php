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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyBackupGroup请求参数结构体
 *
 * @method string getBackupGroupId() 获取回滚的备份组ID。
 * @method void setBackupGroupId(string $BackupGroupId) 设置回滚的备份组ID。
 * @method array getApplyDisks() 获取回滚的备份ID、云硬盘ID列表。
 * @method void setApplyDisks(array $ApplyDisks) 设置回滚的备份ID、云硬盘ID列表。
 * @method boolean getAutoStopInstance() 获取回滚备份前是否执行自动关机，如果回滚的盘挂载在实例上且实例处于运行状态，可传入该参数。
 * @method void setAutoStopInstance(boolean $AutoStopInstance) 设置回滚备份前是否执行自动关机，如果回滚的盘挂载在实例上且实例处于运行状态，可传入该参数。
 * @method boolean getAutoStartInstance() 获取回滚备份完成后是否执行自动开机。
 * @method void setAutoStartInstance(boolean $AutoStartInstance) 设置回滚备份完成后是否执行自动开机。
 */
class ApplyBackupGroupRequest extends AbstractModel
{
    /**
     * @var string 回滚的备份组ID。
     */
    public $BackupGroupId;

    /**
     * @var array 回滚的备份ID、云硬盘ID列表。
     */
    public $ApplyDisks;

    /**
     * @var boolean 回滚备份前是否执行自动关机，如果回滚的盘挂载在实例上且实例处于运行状态，可传入该参数。
     */
    public $AutoStopInstance;

    /**
     * @var boolean 回滚备份完成后是否执行自动开机。
     */
    public $AutoStartInstance;

    /**
     * @param string $BackupGroupId 回滚的备份组ID。
     * @param array $ApplyDisks 回滚的备份ID、云硬盘ID列表。
     * @param boolean $AutoStopInstance 回滚备份前是否执行自动关机，如果回滚的盘挂载在实例上且实例处于运行状态，可传入该参数。
     * @param boolean $AutoStartInstance 回滚备份完成后是否执行自动开机。
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
        if (array_key_exists("BackupGroupId",$param) and $param["BackupGroupId"] !== null) {
            $this->BackupGroupId = $param["BackupGroupId"];
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
