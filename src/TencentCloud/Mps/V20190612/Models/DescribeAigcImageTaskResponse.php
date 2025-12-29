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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAigcImageTask返回参数结构体
 *
 * @method string getStatus() 获取任务当前状态。 WAIT：等待中， RUN：执行中， FAIL：任务失败， DONE：任务成功。
 * @method void setStatus(string $Status) 设置任务当前状态。 WAIT：等待中， RUN：执行中， FAIL：任务失败， DONE：任务成功。
 * @method array getImageUrls() 获取当任务状态为 DONE时，返回的图片Url列表，图片存储12小时，请尽快取走使用。
 * @method void setImageUrls(array $ImageUrls) 设置当任务状态为 DONE时，返回的图片Url列表，图片存储12小时，请尽快取走使用。
 * @method string getMessage() 获取当任务状态为 FAIL时，返回失败信息。
 * @method void setMessage(string $Message) 设置当任务状态为 FAIL时，返回失败信息。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAigcImageTaskResponse extends AbstractModel
{
    /**
     * @var string 任务当前状态。 WAIT：等待中， RUN：执行中， FAIL：任务失败， DONE：任务成功。
     */
    public $Status;

    /**
     * @var array 当任务状态为 DONE时，返回的图片Url列表，图片存储12小时，请尽快取走使用。
     */
    public $ImageUrls;

    /**
     * @var string 当任务状态为 FAIL时，返回失败信息。
     */
    public $Message;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Status 任务当前状态。 WAIT：等待中， RUN：执行中， FAIL：任务失败， DONE：任务成功。
     * @param array $ImageUrls 当任务状态为 DONE时，返回的图片Url列表，图片存储12小时，请尽快取走使用。
     * @param string $Message 当任务状态为 FAIL时，返回失败信息。
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ImageUrls",$param) and $param["ImageUrls"] !== null) {
            $this->ImageUrls = $param["ImageUrls"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
