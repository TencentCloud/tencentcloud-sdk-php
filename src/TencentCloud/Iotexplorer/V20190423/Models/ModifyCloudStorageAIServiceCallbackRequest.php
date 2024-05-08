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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCloudStorageAIServiceCallback请求参数结构体
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getType() 获取推送类型。可选值：
- `http`：HTTP 回调
 * @method void setType(string $Type) 设置推送类型。可选值：
- `http`：HTTP 回调
 * @method string getCallbackUrl() 获取HTTP 回调 URL
 * @method void setCallbackUrl(string $CallbackUrl) 设置HTTP 回调 URL
 * @method string getCallbackToken() 获取HTTP 回调鉴权 Token
 * @method void setCallbackToken(string $CallbackToken) 设置HTTP 回调鉴权 Token
 */
class ModifyCloudStorageAIServiceCallbackRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 推送类型。可选值：
- `http`：HTTP 回调
     */
    public $Type;

    /**
     * @var string HTTP 回调 URL
     */
    public $CallbackUrl;

    /**
     * @var string HTTP 回调鉴权 Token
     */
    public $CallbackToken;

    /**
     * @param string $ProductId 产品ID
     * @param string $Type 推送类型。可选值：
- `http`：HTTP 回调
     * @param string $CallbackUrl HTTP 回调 URL
     * @param string $CallbackToken HTTP 回调鉴权 Token
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("CallbackToken",$param) and $param["CallbackToken"] !== null) {
            $this->CallbackToken = $param["CallbackToken"];
        }
    }
}
