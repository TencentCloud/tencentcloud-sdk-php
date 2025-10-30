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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 触发器日志
 *
 * @method string getRepoName() 获取仓库名称
 * @method void setRepoName(string $RepoName) 设置仓库名称
 * @method string getTagName() 获取Tag名称
 * @method void setTagName(string $TagName) 设置Tag名称
 * @method string getTriggerName() 获取触发器名称
 * @method void setTriggerName(string $TriggerName) 设置触发器名称
 * @method string getInvokeSource() 获取触发方式
 * @method void setInvokeSource(string $InvokeSource) 设置触发方式
 * @method string getInvokeAction() 获取触发动作
 * @method void setInvokeAction(string $InvokeAction) 设置触发动作
 * @method string getInvokeTime() 获取触发时间
 * @method void setInvokeTime(string $InvokeTime) 设置触发时间
 * @method TriggerInvokeCondition getInvokeCondition() 获取触发条件
 * @method void setInvokeCondition(TriggerInvokeCondition $InvokeCondition) 设置触发条件
 * @method TriggerInvokePara getInvokePara() 获取触发参数
 * @method void setInvokePara(TriggerInvokePara $InvokePara) 设置触发参数
 * @method TriggerInvokeResult getInvokeResult() 获取触发结果
 * @method void setInvokeResult(TriggerInvokeResult $InvokeResult) 设置触发结果
 */
class TriggerLogResp extends AbstractModel
{
    /**
     * @var string 仓库名称
     */
    public $RepoName;

    /**
     * @var string Tag名称
     */
    public $TagName;

    /**
     * @var string 触发器名称
     */
    public $TriggerName;

    /**
     * @var string 触发方式
     */
    public $InvokeSource;

    /**
     * @var string 触发动作
     */
    public $InvokeAction;

    /**
     * @var string 触发时间
     */
    public $InvokeTime;

    /**
     * @var TriggerInvokeCondition 触发条件
     */
    public $InvokeCondition;

    /**
     * @var TriggerInvokePara 触发参数
     */
    public $InvokePara;

    /**
     * @var TriggerInvokeResult 触发结果
     */
    public $InvokeResult;

    /**
     * @param string $RepoName 仓库名称
     * @param string $TagName Tag名称
     * @param string $TriggerName 触发器名称
     * @param string $InvokeSource 触发方式
     * @param string $InvokeAction 触发动作
     * @param string $InvokeTime 触发时间
     * @param TriggerInvokeCondition $InvokeCondition 触发条件
     * @param TriggerInvokePara $InvokePara 触发参数
     * @param TriggerInvokeResult $InvokeResult 触发结果
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
        if (array_key_exists("RepoName",$param) and $param["RepoName"] !== null) {
            $this->RepoName = $param["RepoName"];
        }

        if (array_key_exists("TagName",$param) and $param["TagName"] !== null) {
            $this->TagName = $param["TagName"];
        }

        if (array_key_exists("TriggerName",$param) and $param["TriggerName"] !== null) {
            $this->TriggerName = $param["TriggerName"];
        }

        if (array_key_exists("InvokeSource",$param) and $param["InvokeSource"] !== null) {
            $this->InvokeSource = $param["InvokeSource"];
        }

        if (array_key_exists("InvokeAction",$param) and $param["InvokeAction"] !== null) {
            $this->InvokeAction = $param["InvokeAction"];
        }

        if (array_key_exists("InvokeTime",$param) and $param["InvokeTime"] !== null) {
            $this->InvokeTime = $param["InvokeTime"];
        }

        if (array_key_exists("InvokeCondition",$param) and $param["InvokeCondition"] !== null) {
            $this->InvokeCondition = new TriggerInvokeCondition();
            $this->InvokeCondition->deserialize($param["InvokeCondition"]);
        }

        if (array_key_exists("InvokePara",$param) and $param["InvokePara"] !== null) {
            $this->InvokePara = new TriggerInvokePara();
            $this->InvokePara->deserialize($param["InvokePara"]);
        }

        if (array_key_exists("InvokeResult",$param) and $param["InvokeResult"] !== null) {
            $this->InvokeResult = new TriggerInvokeResult();
            $this->InvokeResult->deserialize($param["InvokeResult"]);
        }
    }
}
