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
 * ModifyReverseShellRulesAggregation请求参数结构体
 *
 * @method integer getId() 获取规则ID(新增时请留空)
 * @method void setId(integer $Id) 设置规则ID(新增时请留空)
 * @method array getUuids() 获取客户端ID数组
 * @method void setUuids(array $Uuids) 设置客户端ID数组
 * @method string getHostIp() 获取主机IP
 * @method void setHostIp(string $HostIp) 设置主机IP
 * @method string getDestIp() 获取目标IP
 * @method void setDestIp(string $DestIp) 设置目标IP
 * @method string getDestPort() 获取目标端口
 * @method void setDestPort(string $DestPort) 设置目标端口
 * @method string getProcessName() 获取进程名
 * @method void setProcessName(string $ProcessName) 设置进程名
 * @method integer getIsGlobal() 获取是否全局规则(默认否)
 * @method void setIsGlobal(integer $IsGlobal) 设置是否全局规则(默认否)
 * @method integer getEventId() 获取事件列表和详情点击加白时关联的事件id (新增规则时请留空)
 * @method void setEventId(integer $EventId) 设置事件列表和详情点击加白时关联的事件id (新增规则时请留空)
 * @method integer getWhiteType() 获取加白方式， 0:常规加白 1:正则加白
 * @method void setWhiteType(integer $WhiteType) 设置加白方式， 0:常规加白 1:正则加白
 * @method string getRuleRegexp() 获取正则表达式
 * @method void setRuleRegexp(string $RuleRegexp) 设置正则表达式
 * @method integer getHandleHistory() 获取处理历史事件， 0:不处理 1:处理
 * @method void setHandleHistory(integer $HandleHistory) 设置处理历史事件， 0:不处理 1:处理
 * @method string getGroupID() 获取批次id
 * @method void setGroupID(string $GroupID) 设置批次id
 */
class ModifyReverseShellRulesAggregationRequest extends AbstractModel
{
    /**
     * @var integer 规则ID(新增时请留空)
     */
    public $Id;

    /**
     * @var array 客户端ID数组
     */
    public $Uuids;

    /**
     * @var string 主机IP
     */
    public $HostIp;

    /**
     * @var string 目标IP
     */
    public $DestIp;

    /**
     * @var string 目标端口
     */
    public $DestPort;

    /**
     * @var string 进程名
     */
    public $ProcessName;

    /**
     * @var integer 是否全局规则(默认否)
     */
    public $IsGlobal;

    /**
     * @var integer 事件列表和详情点击加白时关联的事件id (新增规则时请留空)
     */
    public $EventId;

    /**
     * @var integer 加白方式， 0:常规加白 1:正则加白
     */
    public $WhiteType;

    /**
     * @var string 正则表达式
     */
    public $RuleRegexp;

    /**
     * @var integer 处理历史事件， 0:不处理 1:处理
     */
    public $HandleHistory;

    /**
     * @var string 批次id
     */
    public $GroupID;

    /**
     * @param integer $Id 规则ID(新增时请留空)
     * @param array $Uuids 客户端ID数组
     * @param string $HostIp 主机IP
     * @param string $DestIp 目标IP
     * @param string $DestPort 目标端口
     * @param string $ProcessName 进程名
     * @param integer $IsGlobal 是否全局规则(默认否)
     * @param integer $EventId 事件列表和详情点击加白时关联的事件id (新增规则时请留空)
     * @param integer $WhiteType 加白方式， 0:常规加白 1:正则加白
     * @param string $RuleRegexp 正则表达式
     * @param integer $HandleHistory 处理历史事件， 0:不处理 1:处理
     * @param string $GroupID 批次id
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uuids",$param) and $param["Uuids"] !== null) {
            $this->Uuids = $param["Uuids"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("DestIp",$param) and $param["DestIp"] !== null) {
            $this->DestIp = $param["DestIp"];
        }

        if (array_key_exists("DestPort",$param) and $param["DestPort"] !== null) {
            $this->DestPort = $param["DestPort"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("WhiteType",$param) and $param["WhiteType"] !== null) {
            $this->WhiteType = $param["WhiteType"];
        }

        if (array_key_exists("RuleRegexp",$param) and $param["RuleRegexp"] !== null) {
            $this->RuleRegexp = $param["RuleRegexp"];
        }

        if (array_key_exists("HandleHistory",$param) and $param["HandleHistory"] !== null) {
            $this->HandleHistory = $param["HandleHistory"];
        }

        if (array_key_exists("GroupID",$param) and $param["GroupID"] !== null) {
            $this->GroupID = $param["GroupID"];
        }
    }
}
