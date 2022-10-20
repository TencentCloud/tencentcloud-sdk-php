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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyVirusAutoIsolateSetting请求参数结构体
 *
 * @method boolean getAutoIsolateSwitch() 获取自动隔离开关(true:开 false:关)
 * @method void setAutoIsolateSwitch(boolean $AutoIsolateSwitch) 设置自动隔离开关(true:开 false:关)
 * @method boolean getIsKillProgress() 获取是否中断隔离文件关联的进程(true:是 false:否)
 * @method void setIsKillProgress(boolean $IsKillProgress) 设置是否中断隔离文件关联的进程(true:是 false:否)
 */
class ModifyVirusAutoIsolateSettingRequest extends AbstractModel
{
    /**
     * @var boolean 自动隔离开关(true:开 false:关)
     */
    public $AutoIsolateSwitch;

    /**
     * @var boolean 是否中断隔离文件关联的进程(true:是 false:否)
     */
    public $IsKillProgress;

    /**
     * @param boolean $AutoIsolateSwitch 自动隔离开关(true:开 false:关)
     * @param boolean $IsKillProgress 是否中断隔离文件关联的进程(true:是 false:否)
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
        if (array_key_exists("AutoIsolateSwitch",$param) and $param["AutoIsolateSwitch"] !== null) {
            $this->AutoIsolateSwitch = $param["AutoIsolateSwitch"];
        }

        if (array_key_exists("IsKillProgress",$param) and $param["IsKillProgress"] !== null) {
            $this->IsKillProgress = $param["IsKillProgress"];
        }
    }
}
