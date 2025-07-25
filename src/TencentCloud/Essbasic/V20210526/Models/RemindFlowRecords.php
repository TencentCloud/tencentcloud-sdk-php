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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 催办接口返回的详细信息。
 *
 * @method boolean getCanRemind() 获取合同流程是否可以催办： true - 可以，false - 不可以。 若无法催办，将返回RemindMessage以解释原因。	
 * @method void setCanRemind(boolean $CanRemind) 设置合同流程是否可以催办： true - 可以，false - 不可以。 若无法催办，将返回RemindMessage以解释原因。	
 * @method string getFlowId() 获取合同流程ID，为32位字符串。	
 * @method void setFlowId(string $FlowId) 设置合同流程ID，为32位字符串。	
 * @method string getRemindMessage() 获取在合同流程无法催办的情况下，系统将返回RemindMessage以阐述原因。	
 * @method void setRemindMessage(string $RemindMessage) 设置在合同流程无法催办的情况下，系统将返回RemindMessage以阐述原因。	
 */
class RemindFlowRecords extends AbstractModel
{
    /**
     * @var boolean 合同流程是否可以催办： true - 可以，false - 不可以。 若无法催办，将返回RemindMessage以解释原因。	
     */
    public $CanRemind;

    /**
     * @var string 合同流程ID，为32位字符串。	
     */
    public $FlowId;

    /**
     * @var string 在合同流程无法催办的情况下，系统将返回RemindMessage以阐述原因。	
     */
    public $RemindMessage;

    /**
     * @param boolean $CanRemind 合同流程是否可以催办： true - 可以，false - 不可以。 若无法催办，将返回RemindMessage以解释原因。	
     * @param string $FlowId 合同流程ID，为32位字符串。	
     * @param string $RemindMessage 在合同流程无法催办的情况下，系统将返回RemindMessage以阐述原因。	
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
        if (array_key_exists("CanRemind",$param) and $param["CanRemind"] !== null) {
            $this->CanRemind = $param["CanRemind"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("RemindMessage",$param) and $param["RemindMessage"] !== null) {
            $this->RemindMessage = $param["RemindMessage"];
        }
    }
}
