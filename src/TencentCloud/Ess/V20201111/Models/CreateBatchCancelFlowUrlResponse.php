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
 * CreateBatchCancelFlowUrl返回参数结构体
 *
 * @method string getBatchCancelFlowUrl() 获取批量撤回签署流程链接
 * @method void setBatchCancelFlowUrl(string $BatchCancelFlowUrl) 设置批量撤回签署流程链接
 * @method array getFailMessages() 获取签署流程撤回失败信息
数组里边的错误原因与传进来的FlowIds一一对应,如果是空字符串则标识没有出错
 * @method void setFailMessages(array $FailMessages) 设置签署流程撤回失败信息
数组里边的错误原因与传进来的FlowIds一一对应,如果是空字符串则标识没有出错
 * @method string getUrlExpireOn() 获取签署连接过期时间字符串：年月日-时分秒

例如:2023-07-28 17:25:59
 * @method void setUrlExpireOn(string $UrlExpireOn) 设置签署连接过期时间字符串：年月日-时分秒

例如:2023-07-28 17:25:59
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateBatchCancelFlowUrlResponse extends AbstractModel
{
    /**
     * @var string 批量撤回签署流程链接
     */
    public $BatchCancelFlowUrl;

    /**
     * @var array 签署流程撤回失败信息
数组里边的错误原因与传进来的FlowIds一一对应,如果是空字符串则标识没有出错
     */
    public $FailMessages;

    /**
     * @var string 签署连接过期时间字符串：年月日-时分秒

例如:2023-07-28 17:25:59
     */
    public $UrlExpireOn;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $BatchCancelFlowUrl 批量撤回签署流程链接
     * @param array $FailMessages 签署流程撤回失败信息
数组里边的错误原因与传进来的FlowIds一一对应,如果是空字符串则标识没有出错
     * @param string $UrlExpireOn 签署连接过期时间字符串：年月日-时分秒

例如:2023-07-28 17:25:59
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
        if (array_key_exists("BatchCancelFlowUrl",$param) and $param["BatchCancelFlowUrl"] !== null) {
            $this->BatchCancelFlowUrl = $param["BatchCancelFlowUrl"];
        }

        if (array_key_exists("FailMessages",$param) and $param["FailMessages"] !== null) {
            $this->FailMessages = $param["FailMessages"];
        }

        if (array_key_exists("UrlExpireOn",$param) and $param["UrlExpireOn"] !== null) {
            $this->UrlExpireOn = $param["UrlExpireOn"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
