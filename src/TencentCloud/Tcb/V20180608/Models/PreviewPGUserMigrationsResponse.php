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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PreviewPGUserMigrations返回参数结构体
 *
 * @method array getPending() 获取<p>将要执行的migration列表</p>
 * @method void setPending(array $Pending) 设置<p>将要执行的migration列表</p>
 * @method array getApplied() 获取<p>已经应用的migration列表</p>
 * @method void setApplied(array $Applied) 设置<p>已经应用的migration列表</p>
 * @method array getConflicts() 获取<p>版本相同但 checksum 不一致冲突的migration列表</p>
 * @method void setConflicts(array $Conflicts) 设置<p>版本相同但 checksum 不一致冲突的migration列表</p>
 * @method boolean getExecutable() 获取<p>是否可直接执行；当前仅表示没有 checksum 冲突</p>
 * @method void setExecutable(boolean $Executable) 设置<p>是否可直接执行；当前仅表示没有 checksum 冲突</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class PreviewPGUserMigrationsResponse extends AbstractModel
{
    /**
     * @var array <p>将要执行的migration列表</p>
     */
    public $Pending;

    /**
     * @var array <p>已经应用的migration列表</p>
     */
    public $Applied;

    /**
     * @var array <p>版本相同但 checksum 不一致冲突的migration列表</p>
     */
    public $Conflicts;

    /**
     * @var boolean <p>是否可直接执行；当前仅表示没有 checksum 冲突</p>
     */
    public $Executable;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Pending <p>将要执行的migration列表</p>
     * @param array $Applied <p>已经应用的migration列表</p>
     * @param array $Conflicts <p>版本相同但 checksum 不一致冲突的migration列表</p>
     * @param boolean $Executable <p>是否可直接执行；当前仅表示没有 checksum 冲突</p>
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
        if (array_key_exists("Pending",$param) and $param["Pending"] !== null) {
            $this->Pending = [];
            foreach ($param["Pending"] as $key => $value){
                $obj = new MigrationPlanItem();
                $obj->deserialize($value);
                array_push($this->Pending, $obj);
            }
        }

        if (array_key_exists("Applied",$param) and $param["Applied"] !== null) {
            $this->Applied = [];
            foreach ($param["Applied"] as $key => $value){
                $obj = new MigrationPlanItem();
                $obj->deserialize($value);
                array_push($this->Applied, $obj);
            }
        }

        if (array_key_exists("Conflicts",$param) and $param["Conflicts"] !== null) {
            $this->Conflicts = [];
            foreach ($param["Conflicts"] as $key => $value){
                $obj = new MigrationConflict();
                $obj->deserialize($value);
                array_push($this->Conflicts, $obj);
            }
        }

        if (array_key_exists("Executable",$param) and $param["Executable"] !== null) {
            $this->Executable = $param["Executable"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
