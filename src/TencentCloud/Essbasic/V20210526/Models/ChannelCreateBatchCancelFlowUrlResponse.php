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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChannelCreateBatchCancelFlowUrl返回参数结构体
 *
 * @method string getBatchCancelFlowUrl() 获取批量撤销url
 * @method void setBatchCancelFlowUrl(string $BatchCancelFlowUrl) 设置批量撤销url
 * @method array getFailMessages() 获取签署流程批量撤销失败原因
 * @method void setFailMessages(array $FailMessages) 设置签署流程批量撤销失败原因
 * @method string getUrlExpireOn() 获取签署撤销url过期时间-年月日-时分秒
 * @method void setUrlExpireOn(string $UrlExpireOn) 设置签署撤销url过期时间-年月日-时分秒
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ChannelCreateBatchCancelFlowUrlResponse extends AbstractModel
{
    /**
     * @var string 批量撤销url
     */
    public $BatchCancelFlowUrl;

    /**
     * @var array 签署流程批量撤销失败原因
     */
    public $FailMessages;

    /**
     * @var string 签署撤销url过期时间-年月日-时分秒
     */
    public $UrlExpireOn;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $BatchCancelFlowUrl 批量撤销url
     * @param array $FailMessages 签署流程批量撤销失败原因
     * @param string $UrlExpireOn 签署撤销url过期时间-年月日-时分秒
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
