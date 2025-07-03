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
 * DescribeVirusAutoIsolateSetting返回参数结构体
 *
 * @method boolean getAutoIsolateSwitch() 获取自动隔离开关(true:开 false:关)
 * @method void setAutoIsolateSwitch(boolean $AutoIsolateSwitch) 设置自动隔离开关(true:开 false:关)
 * @method boolean getIsKillProgress() 获取是否中断隔离文件关联的进程(true:是 false:否)
 * @method void setIsKillProgress(boolean $IsKillProgress) 设置是否中断隔离文件关联的进程(true:是 false:否)
 * @method boolean getUserAutoIsolateKillSwitch() 获取用户用户自定义开关
 * @method void setUserAutoIsolateKillSwitch(boolean $UserAutoIsolateKillSwitch) 设置用户用户自定义开关
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVirusAutoIsolateSettingResponse extends AbstractModel
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
     * @var boolean 用户用户自定义开关
     */
    public $UserAutoIsolateKillSwitch;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $AutoIsolateSwitch 自动隔离开关(true:开 false:关)
     * @param boolean $IsKillProgress 是否中断隔离文件关联的进程(true:是 false:否)
     * @param boolean $UserAutoIsolateKillSwitch 用户用户自定义开关
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("UserAutoIsolateKillSwitch",$param) and $param["UserAutoIsolateKillSwitch"] !== null) {
            $this->UserAutoIsolateKillSwitch = $param["UserAutoIsolateKillSwitch"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
