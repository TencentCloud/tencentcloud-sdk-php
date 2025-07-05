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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCallbackUrl请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getCallbackUrl() 获取回调URL
 * @method void setCallbackUrl(string $CallbackUrl) 设置回调URL
 * @method string getSignKey() 获取回调签名密钥，用于校验回调信息的完整性
 * @method void setSignKey(string $SignKey) 设置回调签名密钥，用于校验回调信息的完整性
 */
class ModifyCallbackUrlRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 回调URL
     */
    public $CallbackUrl;

    /**
     * @var string 回调签名密钥，用于校验回调信息的完整性
     */
    public $SignKey;

    /**
     * @param string $ProjectId 项目id
     * @param string $CallbackUrl 回调URL
     * @param string $SignKey 回调签名密钥，用于校验回调信息的完整性
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("SignKey",$param) and $param["SignKey"] !== null) {
            $this->SignKey = $param["SignKey"];
        }
    }
}
