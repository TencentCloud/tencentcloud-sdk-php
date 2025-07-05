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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Java内存马插件信息
 *
 * @method integer getPid() 获取注入进程pid
 * @method void setPid(integer $Pid) 设置注入进程pid
 * @method string getMainClass() 获取注入进程主类
 * @method void setMainClass(string $MainClass) 设置注入进程主类
 * @method integer getStatus() 获取注入状态：0: 注入中, 1: 注入成功, 2: 插件超时, 3: 插件退出, 4: 注入失败 5: 软删除
 * @method void setStatus(integer $Status) 设置注入状态：0: 注入中, 1: 注入成功, 2: 插件超时, 3: 插件退出, 4: 注入失败 5: 软删除
 * @method string getErrorLog() 获取错误日志
 * @method void setErrorLog(string $ErrorLog) 设置错误日志
 */
class JavaMemShellPluginInfo extends AbstractModel
{
    /**
     * @var integer 注入进程pid
     */
    public $Pid;

    /**
     * @var string 注入进程主类
     */
    public $MainClass;

    /**
     * @var integer 注入状态：0: 注入中, 1: 注入成功, 2: 插件超时, 3: 插件退出, 4: 注入失败 5: 软删除
     */
    public $Status;

    /**
     * @var string 错误日志
     */
    public $ErrorLog;

    /**
     * @param integer $Pid 注入进程pid
     * @param string $MainClass 注入进程主类
     * @param integer $Status 注入状态：0: 注入中, 1: 注入成功, 2: 插件超时, 3: 插件退出, 4: 注入失败 5: 软删除
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
        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
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
