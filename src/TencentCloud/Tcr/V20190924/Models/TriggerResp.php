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
 * 触发器返回值
 *
 * @method string getTriggerName() 获取触发器名称
 * @method void setTriggerName(string $TriggerName) 设置触发器名称
 * @method string getInvokeSource() 获取触发来源
 * @method void setInvokeSource(string $InvokeSource) 设置触发来源
 * @method string getInvokeAction() 获取触发动作
 * @method void setInvokeAction(string $InvokeAction) 设置触发动作
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method TriggerInvokeCondition getInvokeCondition() 获取触发条件
 * @method void setInvokeCondition(TriggerInvokeCondition $InvokeCondition) 设置触发条件
 * @method TriggerInvokePara getInvokePara() 获取触发器参数
 * @method void setInvokePara(TriggerInvokePara $InvokePara) 设置触发器参数
 */
class TriggerResp extends AbstractModel
{
    /**
     * @var string 触发器名称
     */
    public $TriggerName;

    /**
     * @var string 触发来源
     */
    public $InvokeSource;

    /**
     * @var string 触发动作
     */
    public $InvokeAction;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var TriggerInvokeCondition 触发条件
     */
    public $InvokeCondition;

    /**
     * @var TriggerInvokePara 触发器参数
     */
    public $InvokePara;

    /**
     * @param string $TriggerName 触发器名称
     * @param string $InvokeSource 触发来源
     * @param string $InvokeAction 触发动作
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param TriggerInvokeCondition $InvokeCondition 触发条件
     * @param TriggerInvokePara $InvokePara 触发器参数
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
        if (array_key_exists("TriggerName",$param) and $param["TriggerName"] !== null) {
            $this->TriggerName = $param["TriggerName"];
        }

        if (array_key_exists("InvokeSource",$param) and $param["InvokeSource"] !== null) {
            $this->InvokeSource = $param["InvokeSource"];
        }

        if (array_key_exists("InvokeAction",$param) and $param["InvokeAction"] !== null) {
            $this->InvokeAction = $param["InvokeAction"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("InvokeCondition",$param) and $param["InvokeCondition"] !== null) {
            $this->InvokeCondition = new TriggerInvokeCondition();
            $this->InvokeCondition->deserialize($param["InvokeCondition"]);
        }

        if (array_key_exists("InvokePara",$param) and $param["InvokePara"] !== null) {
            $this->InvokePara = new TriggerInvokePara();
            $this->InvokePara->deserialize($param["InvokePara"]);
        }
    }
}
