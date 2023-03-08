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
 * ChannelCreatePrepareFlow返回参数结构体
 *
 * @method string getPrepareFlowUrl() 获取预发起的合同链接
 * @method void setPrepareFlowUrl(string $PrepareFlowUrl) 设置预发起的合同链接
 * @method string getPreviewFlowUrl() 获取合同发起后预览链接
 * @method void setPreviewFlowUrl(string $PreviewFlowUrl) 设置合同发起后预览链接
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ChannelCreatePrepareFlowResponse extends AbstractModel
{
    /**
     * @var string 预发起的合同链接
     */
    public $PrepareFlowUrl;

    /**
     * @var string 合同发起后预览链接
     */
    public $PreviewFlowUrl;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $PrepareFlowUrl 预发起的合同链接
     * @param string $PreviewFlowUrl 合同发起后预览链接
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
        if (array_key_exists("PrepareFlowUrl",$param) and $param["PrepareFlowUrl"] !== null) {
            $this->PrepareFlowUrl = $param["PrepareFlowUrl"];
        }

        if (array_key_exists("PreviewFlowUrl",$param) and $param["PreviewFlowUrl"] !== null) {
            $this->PreviewFlowUrl = $param["PreviewFlowUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
