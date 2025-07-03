<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * CreateDynamicFlowApprover返回参数结构体
 *
 * @method string getFlowId() 获取合同流程ID，为32位字符串
 * @method void setFlowId(string $FlowId) 设置合同流程ID，为32位字符串
 * @method array getDynamicFlowApproverList() 获取补充动态合同签署人的结果数组
 * @method void setDynamicFlowApproverList(array $DynamicFlowApproverList) 设置补充动态合同签署人的结果数组
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateDynamicFlowApproverResponse extends AbstractModel
{
    /**
     * @var string 合同流程ID，为32位字符串
     */
    public $FlowId;

    /**
     * @var array 补充动态合同签署人的结果数组
     */
    public $DynamicFlowApproverList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $FlowId 合同流程ID，为32位字符串
     * @param array $DynamicFlowApproverList 补充动态合同签署人的结果数组
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("DynamicFlowApproverList",$param) and $param["DynamicFlowApproverList"] !== null) {
            $this->DynamicFlowApproverList = [];
            foreach ($param["DynamicFlowApproverList"] as $key => $value){
                $obj = new DynamicFlowApproverResult();
                $obj->deserialize($value);
                array_push($this->DynamicFlowApproverList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
