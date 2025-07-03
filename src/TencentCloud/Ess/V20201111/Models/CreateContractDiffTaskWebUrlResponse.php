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
 * CreateContractDiffTaskWebUrl返回参数结构体
 *
 * @method string getTaskId() 获取接口返回的合同对比任务ID，可以调用接口<a href="https://qian.tencent.com/developers/companyApis/embedPages/DescribeContractDiffTaskWebUrl" target="_blank">获取合同对比结果web页面</a>查看对比任务的结果。
当`SkipFileUpload`参数为`true`时才会返回值，否则为空。
 * @method void setTaskId(string $TaskId) 设置接口返回的合同对比任务ID，可以调用接口<a href="https://qian.tencent.com/developers/companyApis/embedPages/DescribeContractDiffTaskWebUrl" target="_blank">获取合同对比结果web页面</a>查看对比任务的结果。
当`SkipFileUpload`参数为`true`时才会返回值，否则为空。
 * @method string getWebUrl() 获取合同对比嵌入式web页面链接，有效期：5分钟
链接仅能使用一次
 * @method void setWebUrl(string $WebUrl) 设置合同对比嵌入式web页面链接，有效期：5分钟
链接仅能使用一次
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateContractDiffTaskWebUrlResponse extends AbstractModel
{
    /**
     * @var string 接口返回的合同对比任务ID，可以调用接口<a href="https://qian.tencent.com/developers/companyApis/embedPages/DescribeContractDiffTaskWebUrl" target="_blank">获取合同对比结果web页面</a>查看对比任务的结果。
当`SkipFileUpload`参数为`true`时才会返回值，否则为空。
     */
    public $TaskId;

    /**
     * @var string 合同对比嵌入式web页面链接，有效期：5分钟
链接仅能使用一次
     */
    public $WebUrl;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskId 接口返回的合同对比任务ID，可以调用接口<a href="https://qian.tencent.com/developers/companyApis/embedPages/DescribeContractDiffTaskWebUrl" target="_blank">获取合同对比结果web页面</a>查看对比任务的结果。
当`SkipFileUpload`参数为`true`时才会返回值，否则为空。
     * @param string $WebUrl 合同对比嵌入式web页面链接，有效期：5分钟
链接仅能使用一次
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
