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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 撤销失败的流程信息
 *
 * @method string getFlowId() 获取<p>合同流程ID，为32位字符串。</p>
 * @method void setFlowId(string $FlowId) 设置<p>合同流程ID，为32位字符串。</p>
 * @method string getReason() 获取<p>撤销失败原因</p>
 * @method void setReason(string $Reason) 设置<p>撤销失败原因</p>
 * @method string getFlowName() 获取<p>合同流程名称</p>
 * @method void setFlowName(string $FlowName) 设置<p>合同流程名称</p>
 */
class CancelFailureFlow extends AbstractModel
{
    /**
     * @var string <p>合同流程ID，为32位字符串。</p>
     */
    public $FlowId;

    /**
     * @var string <p>撤销失败原因</p>
     */
    public $Reason;

    /**
     * @var string <p>合同流程名称</p>
     */
    public $FlowName;

    /**
     * @param string $FlowId <p>合同流程ID，为32位字符串。</p>
     * @param string $Reason <p>撤销失败原因</p>
     * @param string $FlowName <p>合同流程名称</p>
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }
    }
}
