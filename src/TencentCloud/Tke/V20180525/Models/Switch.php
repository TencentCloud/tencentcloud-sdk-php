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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群日志开关集合
 *
 * @method SwitchInfo getAudit() 获取审计开关的详细信息
 * @method void setAudit(SwitchInfo $Audit) 设置审计开关的详细信息
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method SwitchInfo getEvent() 获取事件开关的详细信息
 * @method void setEvent(SwitchInfo $Event) 设置事件开关的详细信息
 * @method SwitchInfo getLog() 获取普通日志的详细信息
 * @method void setLog(SwitchInfo $Log) 设置普通日志的详细信息
 * @method SwitchInfo getMasterLog() 获取master 日志详细信息
 * @method void setMasterLog(SwitchInfo $MasterLog) 设置master 日志详细信息
 */
class Switch extends AbstractModel
{
    /**
     * @var SwitchInfo 审计开关的详细信息
     */
    public $Audit;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var SwitchInfo 事件开关的详细信息
     */
    public $Event;

    /**
     * @var SwitchInfo 普通日志的详细信息
     */
    public $Log;

    /**
     * @var SwitchInfo master 日志详细信息
     */
    public $MasterLog;

    /**
     * @param SwitchInfo $Audit 审计开关的详细信息
     * @param string $ClusterId 集群ID
     * @param SwitchInfo $Event 事件开关的详细信息
     * @param SwitchInfo $Log 普通日志的详细信息
     * @param SwitchInfo $MasterLog master 日志详细信息
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
        if (array_key_exists("Audit",$param) and $param["Audit"] !== null) {
            $this->Audit = new SwitchInfo();
            $this->Audit->deserialize($param["Audit"]);
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Event",$param) and $param["Event"] !== null) {
            $this->Event = new SwitchInfo();
            $this->Event->deserialize($param["Event"]);
        }

        if (array_key_exists("Log",$param) and $param["Log"] !== null) {
            $this->Log = new SwitchInfo();
            $this->Log->deserialize($param["Log"]);
        }

        if (array_key_exists("MasterLog",$param) and $param["MasterLog"] !== null) {
            $this->MasterLog = new SwitchInfo();
            $this->MasterLog->deserialize($param["MasterLog"]);
        }
    }
}
