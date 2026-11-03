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
 * @method string getStrategyId() 获取<p>策略Id</p>
 * @method void setStrategyId(string $StrategyId) 设置<p>策略Id</p>
 * @method string getGroupId() 获取<p>规则组Id</p>
 * @method void setGroupId(string $GroupId) 设置<p>规则组Id</p>
 * @method string getProduct() 获取<p>产品类型</p>
 * @method void setProduct(string $Product) 设置<p>产品类型</p>
 * @method string getGroupName() 获取<p>规则组名称</p>
 * @method void setGroupName(string $GroupName) 设置<p>规则组名称</p>
 * @method integer getRuleCount() 获取<p>规则数</p>
 * @method void setRuleCount(integer $RuleCount) 设置<p>规则数</p>
 * @method integer getRuleStatus() 获取<p>策略状态</p>
 * @method void setRuleStatus(integer $RuleStatus) 设置<p>策略状态</p>
 * @method array getReceiveAccount() 获取<p>下发账号</p>
 * @method void setReceiveAccount(array $ReceiveAccount) 设置<p>下发账号</p>
 * @method integer getSequence() 获取<p>优先级</p>
 * @method void setSequence(integer $Sequence) 设置<p>优先级</p>
 * @method string getErrMsg() 获取<p>下发失败原因</p>
 * @method void setErrMsg(string $ErrMsg) 设置<p>下发失败原因</p>
 * @method string getErrorType() 获取<p>下发失败原因类型</p>
 * @method void setErrorType(string $ErrorType) 设置<p>下发失败原因类型</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method string getCreateBy() 获取<p>创建人</p>
 * @method void setCreateBy(string $CreateBy) 设置<p>创建人</p>
 * @method string getUpdateBy() 获取<p>更新人</p>
 * @method void setUpdateBy(string $UpdateBy) 设置<p>更新人</p>
 * @method string getExecArea() 获取<p>执行区域</p>
 * @method void setExecArea(string $ExecArea) 设置<p>执行区域</p>
 * @method string getCreateName() 获取<p>创建人名称</p>
 * @method void setCreateName(string $CreateName) 设置<p>创建人名称</p>
 * @method string getUpdateName() 获取<p>更新人名称</p>
 * @method void setUpdateName(string $UpdateName) 设置<p>更新人名称</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 */
class StrategyResp extends AbstractModel
{
    /**
     * @var string <p>策略Id</p>
     */
    public $StrategyId;

    /**
     * @var string <p>规则组Id</p>
     */
    public $GroupId;

    /**
     * @var string <p>产品类型</p>
     */
    public $Product;

    /**
     * @var string <p>规则组名称</p>
     */
    public $GroupName;

    /**
     * @var integer <p>规则数</p>
     */
    public $RuleCount;

    /**
     * @var integer <p>策略状态</p>
     */
    public $RuleStatus;

    /**
     * @var array <p>下发账号</p>
     */
    public $ReceiveAccount;

    /**
     * @var integer <p>优先级</p>
     */
    public $Sequence;

    /**
     * @var string <p>下发失败原因</p>
     */
    public $ErrMsg;

    /**
     * @var string <p>下发失败原因类型</p>
     */
    public $ErrorType;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>创建人</p>
     */
    public $CreateBy;

    /**
     * @var string <p>更新人</p>
     */
    public $UpdateBy;

    /**
     * @var string <p>执行区域</p>
     */
    public $ExecArea;

    /**
     * @var string <p>创建人名称</p>
     */
    public $CreateName;

    /**
     * @var string <p>更新人名称</p>
     */
    public $UpdateName;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @param string $StrategyId <p>策略Id</p>
     * @param string $GroupId <p>规则组Id</p>
     * @param string $Product <p>产品类型</p>
     * @param string $GroupName <p>规则组名称</p>
     * @param integer $RuleCount <p>规则数</p>
     * @param integer $RuleStatus <p>策略状态</p>
     * @param array $ReceiveAccount <p>下发账号</p>
     * @param integer $Sequence <p>优先级</p>
     * @param string $ErrMsg <p>下发失败原因</p>
     * @param string $ErrorType <p>下发失败原因类型</p>
     * @param string $UpdateTime <p>更新时间</p>
     * @param string $CreateBy <p>创建人</p>
     * @param string $UpdateBy <p>更新人</p>
     * @param string $ExecArea <p>执行区域</p>
     * @param string $CreateName <p>创建人名称</p>
     * @param string $UpdateName <p>更新人名称</p>
     * @param string $CreateTime <p>创建时间</p>
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

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
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
