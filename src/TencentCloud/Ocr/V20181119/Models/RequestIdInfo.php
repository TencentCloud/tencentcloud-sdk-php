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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 请求 id 信息
 *
 * @method string getApiRequestId() 获取请求 api 的 requestid
 * @method void setApiRequestId(string $ApiRequestId) 设置请求 api 的 requestid
 * @method string getApiErrorCode() 获取请求 api 的错误码
 * @method void setApiErrorCode(string $ApiErrorCode) 设置请求 api 的错误码
 * @method array getWarnCodes() 获取告警码
 * @method void setWarnCodes(array $WarnCodes) 设置告警码
 */
class RequestIdInfo extends AbstractModel
{
    /**
     * @var string 请求 api 的 requestid
     */
    public $ApiRequestId;

    /**
     * @var string 请求 api 的错误码
     */
    public $ApiErrorCode;

    /**
     * @var array 告警码
     */
    public $WarnCodes;

    /**
     * @param string $ApiRequestId 请求 api 的 requestid
     * @param string $ApiErrorCode 请求 api 的错误码
     * @param array $WarnCodes 告警码
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
        if (array_key_exists("ApiRequestId",$param) and $param["ApiRequestId"] !== null) {
            $this->ApiRequestId = $param["ApiRequestId"];
        }

        if (array_key_exists("ApiErrorCode",$param) and $param["ApiErrorCode"] !== null) {
            $this->ApiErrorCode = $param["ApiErrorCode"];
        }

        if (array_key_exists("WarnCodes",$param) and $param["WarnCodes"] !== null) {
            $this->WarnCodes = $param["WarnCodes"];
        }
    }
}
