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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DetectState请求参数结构体
 *
 * @method string getClientIP() 获取IP
 * @method void setClientIP(string $ClientIP) 设置IP
 * @method string getClientUA() 获取浏览器UA
 * @method void setClientUA(string $ClientUA) 设置浏览器UA
 * @method string getFaceIdToken() 获取token
 * @method void setFaceIdToken(string $FaceIdToken) 设置token
 */
class DetectStateRequest extends AbstractModel
{
    /**
     * @var string IP
     */
    public $ClientIP;

    /**
     * @var string 浏览器UA
     */
    public $ClientUA;

    /**
     * @var string token
     */
    public $FaceIdToken;

    /**
     * @param string $ClientIP IP
     * @param string $ClientUA 浏览器UA
     * @param string $FaceIdToken token
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
        if (array_key_exists("ClientIP",$param) and $param["ClientIP"] !== null) {
            $this->ClientIP = $param["ClientIP"];
        }

        if (array_key_exists("ClientUA",$param) and $param["ClientUA"] !== null) {
            $this->ClientUA = $param["ClientUA"];
        }

        if (array_key_exists("FaceIdToken",$param) and $param["FaceIdToken"] !== null) {
            $this->FaceIdToken = $param["FaceIdToken"];
        }
    }
}
