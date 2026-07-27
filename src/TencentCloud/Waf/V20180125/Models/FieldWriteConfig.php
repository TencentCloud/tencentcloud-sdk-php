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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设置哪些字段是否存储或转发
 *
 * @method integer getEnableHeaders() 获取<p>1:开启 0:不开启</p>
 * @method void setEnableHeaders(integer $EnableHeaders) 设置<p>1:开启 0:不开启</p>
 * @method integer getEnableBody() 获取<p>1:开启 0:不开启</p>
 * @method void setEnableBody(integer $EnableBody) 设置<p>1:开启 0:不开启</p>
 * @method integer getEnableBot() 获取<p>1:开启 0:不开启</p>
 * @method void setEnableBot(integer $EnableBot) 设置<p>1:开启 0:不开启</p>
 * @method integer getEnableResponse() 获取<p>响应方向body<br>1:开启 0:不开启</p>
 * @method void setEnableResponse(integer $EnableResponse) 设置<p>响应方向body<br>1:开启 0:不开启</p>
 */
class FieldWriteConfig extends AbstractModel
{
    /**
     * @var integer <p>1:开启 0:不开启</p>
     */
    public $EnableHeaders;

    /**
     * @var integer <p>1:开启 0:不开启</p>
     */
    public $EnableBody;

    /**
     * @var integer <p>1:开启 0:不开启</p>
     */
    public $EnableBot;

    /**
     * @var integer <p>响应方向body<br>1:开启 0:不开启</p>
     */
    public $EnableResponse;

    /**
     * @param integer $EnableHeaders <p>1:开启 0:不开启</p>
     * @param integer $EnableBody <p>1:开启 0:不开启</p>
     * @param integer $EnableBot <p>1:开启 0:不开启</p>
     * @param integer $EnableResponse <p>响应方向body<br>1:开启 0:不开启</p>
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
        if (array_key_exists("EnableHeaders",$param) and $param["EnableHeaders"] !== null) {
            $this->EnableHeaders = $param["EnableHeaders"];
        }

        if (array_key_exists("EnableBody",$param) and $param["EnableBody"] !== null) {
            $this->EnableBody = $param["EnableBody"];
        }

        if (array_key_exists("EnableBot",$param) and $param["EnableBot"] !== null) {
            $this->EnableBot = $param["EnableBot"];
        }

        if (array_key_exists("EnableResponse",$param) and $param["EnableResponse"] !== null) {
            $this->EnableResponse = $param["EnableResponse"];
        }
    }
}
