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
 * CreateBatchOrganizationRegistrationTasks返回参数结构体
 *
 * @method string getTaskId() 获取生成注册链接的任务ID，后序根据这个任务ID， 调用<a href="https://qian.tencent.com/developers/partnerApis/accounts/DescribeBatchOrganizationRegistrationUrls" target="_blank">查询子企业批量认证链接</a>获取生成的链接，发给对应的客户使用。

注：`如果有错误，则不会返回任务ID`
 * @method void setTaskId(string $TaskId) 设置生成注册链接的任务ID，后序根据这个任务ID， 调用<a href="https://qian.tencent.com/developers/partnerApis/accounts/DescribeBatchOrganizationRegistrationUrls" target="_blank">查询子企业批量认证链接</a>获取生成的链接，发给对应的客户使用。

注：`如果有错误，则不会返回任务ID`
 * @method array getErrorMessages() 获取批量生成企业认证链接的详细错误信息，顺序与输入参数子企业列表顺序一致。
<ul>
<li>如果所有企业认证链接都成功生成，将不返回错误信息</li>
<li>如果存在任何错误，将返回具体的错误描述。（没有错误的企业返回空字符串）</li>
</ul>
 * @method void setErrorMessages(array $ErrorMessages) 设置批量生成企业认证链接的详细错误信息，顺序与输入参数子企业列表顺序一致。
<ul>
<li>如果所有企业认证链接都成功生成，将不返回错误信息</li>
<li>如果存在任何错误，将返回具体的错误描述。（没有错误的企业返回空字符串）</li>
</ul>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateBatchOrganizationRegistrationTasksResponse extends AbstractModel
{
    /**
     * @var string 生成注册链接的任务ID，后序根据这个任务ID， 调用<a href="https://qian.tencent.com/developers/partnerApis/accounts/DescribeBatchOrganizationRegistrationUrls" target="_blank">查询子企业批量认证链接</a>获取生成的链接，发给对应的客户使用。

注：`如果有错误，则不会返回任务ID`
     */
    public $TaskId;

    /**
     * @var array 批量生成企业认证链接的详细错误信息，顺序与输入参数子企业列表顺序一致。
<ul>
<li>如果所有企业认证链接都成功生成，将不返回错误信息</li>
<li>如果存在任何错误，将返回具体的错误描述。（没有错误的企业返回空字符串）</li>
</ul>
     */
    public $ErrorMessages;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskId 生成注册链接的任务ID，后序根据这个任务ID， 调用<a href="https://qian.tencent.com/developers/partnerApis/accounts/DescribeBatchOrganizationRegistrationUrls" target="_blank">查询子企业批量认证链接</a>获取生成的链接，发给对应的客户使用。

注：`如果有错误，则不会返回任务ID`
     * @param array $ErrorMessages 批量生成企业认证链接的详细错误信息，顺序与输入参数子企业列表顺序一致。
<ul>
<li>如果所有企业认证链接都成功生成，将不返回错误信息</li>
<li>如果存在任何错误，将返回具体的错误描述。（没有错误的企业返回空字符串）</li>
</ul>
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

        if (array_key_exists("ErrorMessages",$param) and $param["ErrorMessages"] !== null) {
            $this->ErrorMessages = $param["ErrorMessages"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
