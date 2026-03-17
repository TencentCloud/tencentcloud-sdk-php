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
 * 反弹Shell规则-聚合版本
 *
 * @method integer getId() 获取规则ID
 * @method void setId(integer $Id) 设置规则ID
 * @method array getUuidHostips() 获取客户端ID
 * @method void setUuidHostips(array $UuidHostips) 设置客户端ID
 * @method string getProcessName() 获取进程名称
 * @method void setProcessName(string $ProcessName) 设置进程名称
 * @method string getDestIp() 获取目标IP
 * @method void setDestIp(string $DestIp) 设置目标IP
 * @method string getDestPort() 获取目标端口
 * @method void setDestPort(string $DestPort) 设置目标端口
 * @method string getOperator() 获取操作人
 * @method void setOperator(string $Operator) 设置操作人
 * @method integer getIsGlobal() 获取是否全局规则
 * @method void setIsGlobal(integer $IsGlobal) 设置是否全局规则
 * @method integer getStatus() 获取状态 (0: 有效 1: 无效)
 * @method void setStatus(integer $Status) 设置状态 (0: 有效 1: 无效)
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 * @method integer getWhiteType() 获取加白方式， 0:常规加白 1:正则加白
 * @method void setWhiteType(integer $WhiteType) 设置加白方式， 0:常规加白 1:正则加白
 * @method string getRuleRegexp() 获取正则表达式
 * @method void setRuleRegexp(string $RuleRegexp) 设置正则表达式
 * @method integer getHandleHistory() 获取处理历史事件， 0:不处理 1:处理
 * @method void setHandleHistory(integer $HandleHistory) 设置处理历史事件， 0:不处理 1:处理
 * @method string getGroupID() 获取批次id
 * @method void setGroupID(string $GroupID) 设置批次id
 * @method string getMachinesNums() 获取应用资产，描述服务器数量，全局时候为：全部服务器
 * @method void setMachinesNums(string $MachinesNums) 设置应用资产，描述服务器数量，全局时候为：全部服务器
 */
class ReverseShellRuleAggregation extends AbstractModel
{
    /**
     * @var integer 规则ID
     */
    public $Id;

    /**
     * @var array 客户端ID
     */
    public $UuidHostips;

    /**
     * @var string 进程名称
     */
    public $ProcessName;

    /**
     * @var string 目标IP
     */
    public $DestIp;

    /**
     * @var string 目标端口
     */
    public $DestPort;

    /**
     * @var string 操作人
     */
    public $Operator;

    /**
     * @var integer 是否全局规则
     */
    public $IsGlobal;

    /**
     * @var integer 状态 (0: 有效 1: 无效)
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

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
     * @var string 应用资产，描述服务器数量，全局时候为：全部服务器
     */
    public $MachinesNums;

    /**
     * @param integer $Id 规则ID
     * @param array $UuidHostips 客户端ID
     * @param string $ProcessName 进程名称
     * @param string $DestIp 目标IP
     * @param string $DestPort 目标端口
     * @param string $Operator 操作人
     * @param integer $IsGlobal 是否全局规则
     * @param integer $Status 状态 (0: 有效 1: 无效)
     * @param string $CreateTime 创建时间
     * @param string $ModifyTime 修改时间
     * @param integer $WhiteType 加白方式， 0:常规加白 1:正则加白
     * @param string $RuleRegexp 正则表达式
     * @param integer $HandleHistory 处理历史事件， 0:不处理 1:处理
     * @param string $GroupID 批次id
     * @param string $MachinesNums 应用资产，描述服务器数量，全局时候为：全部服务器
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

        if (array_key_exists("UuidHostips",$param) and $param["UuidHostips"] !== null) {
            $this->UuidHostips = [];
            foreach ($param["UuidHostips"] as $key => $value){
                $obj = new UuidHostip();
                $obj->deserialize($value);
                array_push($this->UuidHostips, $obj);
            }
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("DestIp",$param) and $param["DestIp"] !== null) {
            $this->DestIp = $param["DestIp"];
        }

        if (array_key_exists("DestPort",$param) and $param["DestPort"] !== null) {
            $this->DestPort = $param["DestPort"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
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

        if (array_key_exists("MachinesNums",$param) and $param["MachinesNums"] !== null) {
            $this->MachinesNums = $param["MachinesNums"];
        }
    }
}
