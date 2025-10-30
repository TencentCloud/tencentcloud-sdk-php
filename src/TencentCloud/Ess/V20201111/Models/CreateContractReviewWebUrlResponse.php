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
 * CreateContractReviewWebUrl返回参数结构体
 *
 * @method string getTaskId() 获取接口返回的合同审查任务ID，可以调用接口<a href="https://qian.tencent.com/developers/companyApis/embedPages/DescribeContractReviewWebUrl" target="_blank">获取合同审查结果web页面</a>查看审查任务的结果。

注意： `当ResourceId参数不为空时才会返回此值。`
 * @method void setTaskId(string $TaskId) 设置接口返回的合同审查任务ID，可以调用接口<a href="https://qian.tencent.com/developers/companyApis/embedPages/DescribeContractReviewWebUrl" target="_blank">获取合同审查结果web页面</a>查看审查任务的结果。

注意： `当ResourceId参数不为空时才会返回此值。`
 * @method string getWebUrl() 获取合同审查嵌入式web页面链接。

注意：`链接有效期为5分钟，且链接仅能使用一次。如果上传的合同文件为word时不能进行iframe方式嵌入到贵方系统的网页中，需要单独页面打开此链接显示`
 * @method void setWebUrl(string $WebUrl) 设置合同审查嵌入式web页面链接。

注意：`链接有效期为5分钟，且链接仅能使用一次。如果上传的合同文件为word时不能进行iframe方式嵌入到贵方系统的网页中，需要单独页面打开此链接显示`
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateContractReviewWebUrlResponse extends AbstractModel
{
    /**
     * @var string 接口返回的合同审查任务ID，可以调用接口<a href="https://qian.tencent.com/developers/companyApis/embedPages/DescribeContractReviewWebUrl" target="_blank">获取合同审查结果web页面</a>查看审查任务的结果。

注意： `当ResourceId参数不为空时才会返回此值。`
     */
    public $TaskId;

    /**
     * @var string 合同审查嵌入式web页面链接。

注意：`链接有效期为5分钟，且链接仅能使用一次。如果上传的合同文件为word时不能进行iframe方式嵌入到贵方系统的网页中，需要单独页面打开此链接显示`
     */
    public $WebUrl;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskId 接口返回的合同审查任务ID，可以调用接口<a href="https://qian.tencent.com/developers/companyApis/embedPages/DescribeContractReviewWebUrl" target="_blank">获取合同审查结果web页面</a>查看审查任务的结果。

注意： `当ResourceId参数不为空时才会返回此值。`
     * @param string $WebUrl 合同审查嵌入式web页面链接。

注意：`链接有效期为5分钟，且链接仅能使用一次。如果上传的合同文件为word时不能进行iframe方式嵌入到贵方系统的网页中，需要单独页面打开此链接显示`
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

        if (array_key_exists("WebUrl",$param) and $param["WebUrl"] !== null) {
            $this->WebUrl = $param["WebUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
