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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getUrl() 获取用于跳转的URL。只能于微信中打开。
 * @method void setUrl(string $Url) 设置用于跳转的URL。只能于微信中打开。
 * @method string getBizToken() 获取业务流水号。在获取认证信息接口中作为BizToken传入
 * @method void setBizToken(string $BizToken) 设置业务流水号。在获取认证信息接口中作为BizToken传入
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */

/**
 *DetectAuth返回参数结构体
 */
class DetectAuthResponse extends AbstractModel
{
    /**
     * @var string 用于跳转的URL。只能于微信中打开。
     */
    public $Url;

    /**
     * @var string 业务流水号。在获取认证信息接口中作为BizToken传入
     */
    public $BizToken;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;
    /**
     * @param string $Url 用于跳转的URL。只能于微信中打开。
     * @param string $BizToken 业务流水号。在获取认证信息接口中作为BizToken传入
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("BizToken",$param) and $param["BizToken"] !== null) {
            $this->BizToken = $param["BizToken"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
