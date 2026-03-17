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
 * 重保防护授权插件详情
 *
 * @method integer getPID() 获取java进程pid
 * @method void setPID(integer $PID) 设置java进程pid
 * @method string getMainClass() 获取java主类
 * @method void setMainClass(string $MainClass) 设置java主类
 * @method integer getStatus() 获取0: 注入中, 1: 注入成功, 2: 插件超时, 3: 插件退出, 4: 注入失败
 * @method void setStatus(integer $Status) 设置0: 注入中, 1: 注入成功, 2: 插件超时, 3: 插件退出, 4: 注入失败
 * @method string getErrorLog() 获取错误详情
 * @method void setErrorLog(string $ErrorLog) 设置错误详情
 * @method string getReason() 获取注入失败原因
 * @method void setReason(string $Reason) 设置注入失败原因
 * @method string getInjectTime() 获取注入时间
 * @method void setInjectTime(string $InjectTime) 设置注入时间
 */
class RaspLicensePlugin extends AbstractModel
{
    /**
     * @var integer java进程pid
     */
    public $PID;

    /**
     * @var string java主类
     */
    public $MainClass;

    /**
     * @var integer 0: 注入中, 1: 注入成功, 2: 插件超时, 3: 插件退出, 4: 注入失败
     */
    public $Status;

    /**
     * @var string 错误详情
     */
    public $ErrorLog;

    /**
     * @var string 注入失败原因
     */
    public $Reason;

    /**
     * @var string 注入时间
     */
    public $InjectTime;

    /**
     * @param integer $PID java进程pid
     * @param string $MainClass java主类
     * @param integer $Status 0: 注入中, 1: 注入成功, 2: 插件超时, 3: 插件退出, 4: 注入失败
     * @param string $ErrorLog 错误详情
     * @param string $Reason 注入失败原因
     * @param string $InjectTime 注入时间
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

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("InjectTime",$param) and $param["InjectTime"] !== null) {
            $this->InjectTime = $param["InjectTime"];
        }
    }
}
