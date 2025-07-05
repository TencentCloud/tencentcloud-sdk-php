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
 * HTTP 应答配置参数。
 *
 * @method integer getStatusCode() 获取响应状态码。支持 2XX、4XX、5XX，不包括 499、514、101、301、302、303、509、520-599。
 * @method void setStatusCode(integer $StatusCode) 设置响应状态码。支持 2XX、4XX、5XX，不包括 499、514、101、301、302、303、509、520-599。
 * @method string getResponsePage() 获取响应页面 ID。
 * @method void setResponsePage(string $ResponsePage) 设置响应页面 ID。
 */
class HTTPResponseParameters extends AbstractModel
{
    /**
     * @var integer 响应状态码。支持 2XX、4XX、5XX，不包括 499、514、101、301、302、303、509、520-599。
     */
    public $StatusCode;

    /**
     * @var string 响应页面 ID。
     */
    public $ResponsePage;

    /**
     * @param integer $StatusCode 响应状态码。支持 2XX、4XX、5XX，不包括 499、514、101、301、302、303、509、520-599。
     * @param string $ResponsePage 响应页面 ID。
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
        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("ResponsePage",$param) and $param["ResponsePage"] !== null) {
            $this->ResponsePage = $param["ResponsePage"];
        }
    }
}
