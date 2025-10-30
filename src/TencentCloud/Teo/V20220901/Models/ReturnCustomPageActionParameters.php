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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Web安全自定义页面的附加参数
 *
 * @method string getResponseCode() 获取响应状态码。
 * @method void setResponseCode(string $ResponseCode) 设置响应状态码。
 * @method string getErrorPageId() 获取响应的自定义页面ID。
 * @method void setErrorPageId(string $ErrorPageId) 设置响应的自定义页面ID。
 */
class ReturnCustomPageActionParameters extends AbstractModel
{
    /**
     * @var string 响应状态码。
     */
    public $ResponseCode;

    /**
     * @var string 响应的自定义页面ID。
     */
    public $ErrorPageId;

    /**
     * @param string $ResponseCode 响应状态码。
     * @param string $ErrorPageId 响应的自定义页面ID。
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
        if (array_key_exists("ResponseCode",$param) and $param["ResponseCode"] !== null) {
            $this->ResponseCode = $param["ResponseCode"];
        }

        if (array_key_exists("ErrorPageId",$param) and $param["ErrorPageId"] !== null) {
            $this->ErrorPageId = $param["ErrorPageId"];
        }
    }
}
