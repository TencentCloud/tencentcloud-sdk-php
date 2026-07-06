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
namespace TencentCloud\Fwm\V20250611\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询策略时策略列表参数
 *
 * @method string getStrategyId() 获取策略Id
 * @method void setStrategyId(string $StrategyId) 设置策略Id
 * @method string getGroupId() 获取规则组Id
 * @method void setGroupId(string $GroupId) 设置规则组Id
 * @method string getGroupName() 获取规则组名称
 * @method void setGroupName(string $GroupName) 设置规则组名称
 * @method integer getRuleCount() 获取规则数
 * @method void setRuleCount(integer $RuleCount) 设置规则数
 * @method integer getRuleStatus() 获取策略状态
 * @method void setRuleStatus(integer $RuleStatus) 设置策略状态
 * @method array getReceiveAccount() 获取下发账号
 * @method void setReceiveAccount(array $ReceiveAccount) 设置下发账号
 * @method integer getSequence() 获取优先级
 * @method void setSequence(integer $Sequence) 设置优先级
 * @method string getErrMsg() 获取下发失败原因
 * @method void setErrMsg(string $ErrMsg) 设置下发失败原因
 * @method string getErrorType() 获取下发失败原因类型
 * @method void setErrorType(string $ErrorType) 设置下发失败原因类型
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getCreateBy() 获取创建人
 * @method void setCreateBy(string $CreateBy) 设置创建人
 * @method string getUpdateBy() 获取更新人
 * @method void setUpdateBy(string $UpdateBy) 设置更新人
 * @method string getExecArea() 获取执行区域
 * @method void setExecArea(string $ExecArea) 设置执行区域
 * @method string getCreateName() 获取创建人名称
 * @method void setCreateName(string $CreateName) 设置创建人名称
 * @method string getUpdateName() 获取更新人名称
 * @method void setUpdateName(string $UpdateName) 设置更新人名称
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 */
class StrategyResp extends AbstractModel
{
    /**
     * @var string 策略Id
     */
    public $StrategyId;

    /**
     * @var string 规则组Id
     */
    public $GroupId;

    /**
     * @var string 规则组名称
     */
    public $GroupName;

    /**
     * @var integer 规则数
     */
    public $RuleCount;

    /**
     * @var integer 策略状态
     */
    public $RuleStatus;

    /**
     * @var array 下发账号
     */
    public $ReceiveAccount;

    /**
     * @var integer 优先级
     */
    public $Sequence;

    /**
     * @var string 下发失败原因
     */
    public $ErrMsg;

    /**
     * @var string 下发失败原因类型
     */
    public $ErrorType;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 创建人
     */
    public $CreateBy;

    /**
     * @var string 更新人
     */
    public $UpdateBy;

    /**
     * @var string 执行区域
     */
    public $ExecArea;

    /**
     * @var string 创建人名称
     */
    public $CreateName;

    /**
     * @var string 更新人名称
     */
    public $UpdateName;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @param string $StrategyId 策略Id
     * @param string $GroupId 规则组Id
     * @param string $GroupName 规则组名称
     * @param integer $RuleCount 规则数
     * @param integer $RuleStatus 策略状态
     * @param array $ReceiveAccount 下发账号
     * @param integer $Sequence 优先级
     * @param string $ErrMsg 下发失败原因
     * @param string $ErrorType 下发失败原因类型
     * @param string $UpdateTime 更新时间
     * @param string $CreateBy 创建人
     * @param string $UpdateBy 更新人
     * @param string $ExecArea 执行区域
     * @param string $CreateName 创建人名称
     * @param string $UpdateName 更新人名称
     * @param string $CreateTime 创建时间
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
        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("RuleCount",$param) and $param["RuleCount"] !== null) {
            $this->RuleCount = $param["RuleCount"];
        }

        if (array_key_exists("RuleStatus",$param) and $param["RuleStatus"] !== null) {
            $this->RuleStatus = $param["RuleStatus"];
        }

        if (array_key_exists("ReceiveAccount",$param) and $param["ReceiveAccount"] !== null) {
            $this->ReceiveAccount = [];
            foreach ($param["ReceiveAccount"] as $key => $value){
                $obj = new ReceiveAccount();
                $obj->deserialize($value);
                array_push($this->ReceiveAccount, $obj);
            }
        }

        if (array_key_exists("Sequence",$param) and $param["Sequence"] !== null) {
            $this->Sequence = $param["Sequence"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("ErrorType",$param) and $param["ErrorType"] !== null) {
            $this->ErrorType = $param["ErrorType"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CreateBy",$param) and $param["CreateBy"] !== null) {
            $this->CreateBy = $param["CreateBy"];
        }

        if (array_key_exists("UpdateBy",$param) and $param["UpdateBy"] !== null) {
            $this->UpdateBy = $param["UpdateBy"];
        }

        if (array_key_exists("ExecArea",$param) and $param["ExecArea"] !== null) {
            $this->ExecArea = $param["ExecArea"];
        }

        if (array_key_exists("CreateName",$param) and $param["CreateName"] !== null) {
            $this->CreateName = $param["CreateName"];
        }

        if (array_key_exists("UpdateName",$param) and $param["UpdateName"] !== null) {
            $this->UpdateName = $param["UpdateName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
