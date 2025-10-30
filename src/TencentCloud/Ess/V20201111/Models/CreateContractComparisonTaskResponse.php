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
 * CreateContractComparisonTask返回参数结构体
 *
 * @method string getUserData() 获取调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为 1024长度。
 * @method void setUserData(string $UserData) 设置调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为 1024长度。
 * @method string getTaskId() 获取合同对比任务ID，可以调用接口<a href="https://qian.tencent.com/developers/companyApis/%E5%90%88%E5%90%8C%E6%99%BA%E8%83%BD%E7%9B%B8%E5%85%B3%E6%8E%A5%E5%8F%A3/DescribeContractComparisonTask" target="_blank">查询合同对比任务结果</a>查看对比任务的结果。
 * @method void setTaskId(string $TaskId) 设置合同对比任务ID，可以调用接口<a href="https://qian.tencent.com/developers/companyApis/%E5%90%88%E5%90%8C%E6%99%BA%E8%83%BD%E7%9B%B8%E5%85%B3%E6%8E%A5%E5%8F%A3/DescribeContractComparisonTask" target="_blank">查询合同对比任务结果</a>查看对比任务的结果。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateContractComparisonTaskResponse extends AbstractModel
{
    /**
     * @var string 调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为 1024长度。
     */
    public $UserData;

    /**
     * @var string 合同对比任务ID，可以调用接口<a href="https://qian.tencent.com/developers/companyApis/%E5%90%88%E5%90%8C%E6%99%BA%E8%83%BD%E7%9B%B8%E5%85%B3%E6%8E%A5%E5%8F%A3/DescribeContractComparisonTask" target="_blank">查询合同对比任务结果</a>查看对比任务的结果。
     */
    public $TaskId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $UserData 调用方自定义的个性化字段(可自定义此名称)，并以base64方式编码，支持的最大数据大小为 1024长度。
     * @param string $TaskId 合同对比任务ID，可以调用接口<a href="https://qian.tencent.com/developers/companyApis/%E5%90%88%E5%90%8C%E6%99%BA%E8%83%BD%E7%9B%B8%E5%85%B3%E6%8E%A5%E5%8F%A3/DescribeContractComparisonTask" target="_blank">查询合同对比任务结果</a>查看对比任务的结果。
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
        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
