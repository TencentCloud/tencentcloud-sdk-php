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
 * CancelOrganizationFlows返回参数结构体
 *
 * @method string getTaskId() 获取<p>全量撤销企业合同任务编号，为32位字符串，可用于<a href="https://qian.tencent.com/developers/companyApis/operateFlows/CancelOrganizationFlows">查询批量撤销合同结果</a> 或关联<a href="https://qian.tencent.com/developers/company/callback_types_contracts_sign/#%E5%8D%81%E4%BA%8C-%E5%85%A8%E9%87%8F%E6%92%A4%E9%94%80%E7%BB%93%E6%9E%9C%E5%9B%9E%E8%B0%83">全量撤销企业合同任务结果回调</a></p>
 * @method void setTaskId(string $TaskId) 设置<p>全量撤销企业合同任务编号，为32位字符串，可用于<a href="https://qian.tencent.com/developers/companyApis/operateFlows/CancelOrganizationFlows">查询批量撤销合同结果</a> 或关联<a href="https://qian.tencent.com/developers/company/callback_types_contracts_sign/#%E5%8D%81%E4%BA%8C-%E5%85%A8%E9%87%8F%E6%92%A4%E9%94%80%E7%BB%93%E6%9E%9C%E5%9B%9E%E8%B0%83">全量撤销企业合同任务结果回调</a></p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CancelOrganizationFlowsResponse extends AbstractModel
{
    /**
     * @var string <p>全量撤销企业合同任务编号，为32位字符串，可用于<a href="https://qian.tencent.com/developers/companyApis/operateFlows/CancelOrganizationFlows">查询批量撤销合同结果</a> 或关联<a href="https://qian.tencent.com/developers/company/callback_types_contracts_sign/#%E5%8D%81%E4%BA%8C-%E5%85%A8%E9%87%8F%E6%92%A4%E9%94%80%E7%BB%93%E6%9E%9C%E5%9B%9E%E8%B0%83">全量撤销企业合同任务结果回调</a></p>
     */
    public $TaskId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskId <p>全量撤销企业合同任务编号，为32位字符串，可用于<a href="https://qian.tencent.com/developers/companyApis/operateFlows/CancelOrganizationFlows">查询批量撤销合同结果</a> 或关联<a href="https://qian.tencent.com/developers/company/callback_types_contracts_sign/#%E5%8D%81%E4%BA%8C-%E5%85%A8%E9%87%8F%E6%92%A4%E9%94%80%E7%BB%93%E6%9E%9C%E5%9B%9E%E8%B0%83">全量撤销企业合同任务结果回调</a></p>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
