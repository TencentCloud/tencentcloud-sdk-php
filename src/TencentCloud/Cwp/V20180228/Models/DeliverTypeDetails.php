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
 * 日志投递类型细节
 *
 * @method integer getSecurityType() 获取安全模块类型 1: 入侵检测 2: 漏洞管理 3: 基线管理 4: 高级防御 5:客户端相关 6: 资产指纹 7 主机列表 8 客户端上报
 * @method void setSecurityType(integer $SecurityType) 设置安全模块类型 1: 入侵检测 2: 漏洞管理 3: 基线管理 4: 高级防御 5:客户端相关 6: 资产指纹 7 主机列表 8 客户端上报
 * @method array getLogType() 获取安全模块下的日志类型
 * @method void setLogType(array $LogType) 设置安全模块下的日志类型
 * @method string getTopicId() 获取主题ID
 * @method void setTopicId(string $TopicId) 设置主题ID
 * @method string getTopicName() 获取主题名
 * @method void setTopicName(string $TopicName) 设置主题名
 * @method integer getSwitch() 获取投递开关 0关闭 1开启
 * @method void setSwitch(integer $Switch) 设置投递开关 0关闭 1开启
 * @method integer getStatus() 获取投递状态，0未开启 1正常 2异常
 * @method void setStatus(integer $Status) 设置投递状态，0未开启 1正常 2异常
 * @method string getErrInfo() 获取错误信息
 * @method void setErrInfo(string $ErrInfo) 设置错误信息
 * @method integer getStatusTime() 获取最近一次状态上报时间戳
 * @method void setStatusTime(integer $StatusTime) 设置最近一次状态上报时间戳
 * @method string getLogName() 获取日志集名
 * @method void setLogName(string $LogName) 设置日志集名
 * @method string getLogSetId() 获取日志集ID
 * @method void setLogSetId(string $LogSetId) 设置日志集ID
 * @method string getRegion() 获取日志集所在地域
 * @method void setRegion(string $Region) 设置日志集所在地域
 */
class DeliverTypeDetails extends AbstractModel
{
    /**
     * @var integer 安全模块类型 1: 入侵检测 2: 漏洞管理 3: 基线管理 4: 高级防御 5:客户端相关 6: 资产指纹 7 主机列表 8 客户端上报
     */
    public $SecurityType;

    /**
     * @var array 安全模块下的日志类型
     */
    public $LogType;

    /**
     * @var string 主题ID
     */
    public $TopicId;

    /**
     * @var string 主题名
     */
    public $TopicName;

    /**
     * @var integer 投递开关 0关闭 1开启
     */
    public $Switch;

    /**
     * @var integer 投递状态，0未开启 1正常 2异常
     */
    public $Status;

    /**
     * @var string 错误信息
     */
    public $ErrInfo;

    /**
     * @var integer 最近一次状态上报时间戳
     */
    public $StatusTime;

    /**
     * @var string 日志集名
     */
    public $LogName;

    /**
     * @var string 日志集ID
     */
    public $LogSetId;

    /**
     * @var string 日志集所在地域
     */
    public $Region;

    /**
     * @param integer $SecurityType 安全模块类型 1: 入侵检测 2: 漏洞管理 3: 基线管理 4: 高级防御 5:客户端相关 6: 资产指纹 7 主机列表 8 客户端上报
     * @param array $LogType 安全模块下的日志类型
     * @param string $TopicId 主题ID
     * @param string $TopicName 主题名
     * @param integer $Switch 投递开关 0关闭 1开启
     * @param integer $Status 投递状态，0未开启 1正常 2异常
     * @param string $ErrInfo 错误信息
     * @param integer $StatusTime 最近一次状态上报时间戳
     * @param string $LogName 日志集名
     * @param string $LogSetId 日志集ID
     * @param string $Region 日志集所在地域
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
        if (array_key_exists("SecurityType",$param) and $param["SecurityType"] !== null) {
            $this->SecurityType = $param["SecurityType"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrInfo",$param) and $param["ErrInfo"] !== null) {
            $this->ErrInfo = $param["ErrInfo"];
        }

        if (array_key_exists("StatusTime",$param) and $param["StatusTime"] !== null) {
            $this->StatusTime = $param["StatusTime"];
        }

        if (array_key_exists("LogName",$param) and $param["LogName"] !== null) {
            $this->LogName = $param["LogName"];
        }

        if (array_key_exists("LogSetId",$param) and $param["LogSetId"] !== null) {
            $this->LogSetId = $param["LogSetId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
