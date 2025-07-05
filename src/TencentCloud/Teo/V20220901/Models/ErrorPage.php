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
 * 自定义错误页面。
 *
 * @method integer getStatusCode() 获取状态码。支持范围为 400、403、404、405、414、416、451、500、501、502、503、504。
 * @method void setStatusCode(integer $StatusCode) 设置状态码。支持范围为 400、403、404、405、414、416、451、500、501、502、503、504。
 * @method string getRedirectURL() 获取重定向 URL，需要为完整跳转路径，如 https://www.test.com/error.html。
 * @method void setRedirectURL(string $RedirectURL) 设置重定向 URL，需要为完整跳转路径，如 https://www.test.com/error.html。
 */
class ErrorPage extends AbstractModel
{
    /**
     * @var integer 状态码。支持范围为 400、403、404、405、414、416、451、500、501、502、503、504。
     */
    public $StatusCode;

    /**
     * @var string 重定向 URL，需要为完整跳转路径，如 https://www.test.com/error.html。
     */
    public $RedirectURL;

    /**
     * @param integer $StatusCode 状态码。支持范围为 400、403、404、405、414、416、451、500、501、502、503、504。
     * @param string $RedirectURL 重定向 URL，需要为完整跳转路径，如 https://www.test.com/error.html。
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

        if (array_key_exists("RedirectURL",$param) and $param["RedirectURL"] !== null) {
            $this->RedirectURL = $param["RedirectURL"];
        }
    }
}
