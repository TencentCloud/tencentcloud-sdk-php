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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyEdrAlertIsolation请求参数结构体
 *
 * @method array getTargets() 获取<p>告警定位列表（1-500）</p>
 * @method void setTargets(array $Targets) 设置<p>告警定位列表（1-500）</p>
 * @method string getStatus() 获取<p>操作类型：Isolate（隔离）/ RestoreIsolate（恢复隔离）/ KillProcess（进程查杀）枚举值：Isolate： 隔离RestoreIsolate： 恢复隔离KillProcess： 进程查杀</p>
 * @method void setStatus(string $Status) 设置<p>操作类型：Isolate（隔离）/ RestoreIsolate（恢复隔离）/ KillProcess（进程查杀）枚举值：Isolate： 隔离RestoreIsolate： 恢复隔离KillProcess： 进程查杀</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method boolean getKillProcess() 获取<p>是否终止关联进程，仅 Status=Isolate 有效，Status=KillProcess 时忽略</p>
 * @method void setKillProcess(boolean $KillProcess) 设置<p>是否终止关联进程，仅 Status=Isolate 有效，Status=KillProcess 时忽略</p>
 */
class ModifyEdrAlertIsolationRequest extends AbstractModel
{
    /**
     * @var array <p>告警定位列表（1-500）</p>
     */
    public $Targets;

    /**
     * @var string <p>操作类型：Isolate（隔离）/ RestoreIsolate（恢复隔离）/ KillProcess（进程查杀）枚举值：Isolate： 隔离RestoreIsolate： 恢复隔离KillProcess： 进程查杀</p>
     */
    public $Status;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var boolean <p>是否终止关联进程，仅 Status=Isolate 有效，Status=KillProcess 时忽略</p>
     */
    public $KillProcess;

    /**
     * @param array $Targets <p>告警定位列表（1-500）</p>
     * @param string $Status <p>操作类型：Isolate（隔离）/ RestoreIsolate（恢复隔离）/ KillProcess（进程查杀）枚举值：Isolate： 隔离RestoreIsolate： 恢复隔离KillProcess： 进程查杀</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param boolean $KillProcess <p>是否终止关联进程，仅 Status=Isolate 有效，Status=KillProcess 时忽略</p>
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
        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new EdrAlertTarget();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("KillProcess",$param) and $param["KillProcess"] !== null) {
            $this->KillProcess = $param["KillProcess"];
        }
    }
}
