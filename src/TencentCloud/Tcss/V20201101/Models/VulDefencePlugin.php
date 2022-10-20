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
 * 漏洞防护的插件信息
 *
 * @method integer getPID() 获取java进程pid
 * @method void setPID(integer $PID) 设置java进程pid
 * @method string getMainClass() 获取进程主类名
 * @method void setMainClass(string $MainClass) 设置进程主类名
 * @method string getStatus() 获取插件运行状态：注入中:INJECTING，注入成功：SUCCESS，注入失败：FAIL，插件超时：TIMEOUT，插件退出：QUIT
 * @method void setStatus(string $Status) 设置插件运行状态：注入中:INJECTING，注入成功：SUCCESS，注入失败：FAIL，插件超时：TIMEOUT，插件退出：QUIT
 * @method string getErrorLog() 获取错误日志
 * @method void setErrorLog(string $ErrorLog) 设置错误日志
 */
class VulDefencePlugin extends AbstractModel
{
    /**
     * @var integer java进程pid
     */
    public $PID;

    /**
     * @var string 进程主类名
     */
    public $MainClass;

    /**
     * @var string 插件运行状态：注入中:INJECTING，注入成功：SUCCESS，注入失败：FAIL，插件超时：TIMEOUT，插件退出：QUIT
     */
    public $Status;

    /**
     * @var string 错误日志
     */
    public $ErrorLog;

    /**
     * @param integer $PID java进程pid
     * @param string $MainClass 进程主类名
     * @param string $Status 插件运行状态：注入中:INJECTING，注入成功：SUCCESS，注入失败：FAIL，插件超时：TIMEOUT，插件退出：QUIT
     * @param string $ErrorLog 错误日志
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
        if (array_key_exists("PID",$param) and $param["PID"] !== null) {
            $this->PID = $param["PID"];
        }

        if (array_key_exists("MainClass",$param) and $param["MainClass"] !== null) {
            $this->MainClass = $param["MainClass"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrorLog",$param) and $param["ErrorLog"] !== null) {
            $this->ErrorLog = $param["ErrorLog"];
        }
    }
}
