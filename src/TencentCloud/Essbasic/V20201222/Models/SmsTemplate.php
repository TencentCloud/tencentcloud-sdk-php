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
namespace TencentCloud\Essbasic\V20201222\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 此结构体 (SmsTemplate) 用于描述短信模板。
 *
 * @method string getTemplateId() 获取模板ID，必须填写已审核通过的模板ID。模板ID可登录短信控制台查看。
 * @method void setTemplateId(string $TemplateId) 设置模板ID，必须填写已审核通过的模板ID。模板ID可登录短信控制台查看。
 * @method string getSign() 获取短信签名内容，使用UTF-8编码，必须填写已审核通过的签名，签名信息可登录短信控制台查看。
 * @method void setSign(string $Sign) 设置短信签名内容，使用UTF-8编码，必须填写已审核通过的签名，签名信息可登录短信控制台查看。
 */
class SmsTemplate extends AbstractModel
{
    /**
     * @var string 模板ID，必须填写已审核通过的模板ID。模板ID可登录短信控制台查看。
     */
    public $TemplateId;

    /**
     * @var string 短信签名内容，使用UTF-8编码，必须填写已审核通过的签名，签名信息可登录短信控制台查看。
     */
    public $Sign;

    /**
     * @param string $TemplateId 模板ID，必须填写已审核通过的模板ID。模板ID可登录短信控制台查看。
     * @param string $Sign 短信签名内容，使用UTF-8编码，必须填写已审核通过的签名，签名信息可登录短信控制台查看。
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Sign",$param) and $param["Sign"] !== null) {
            $this->Sign = $param["Sign"];
        }
    }
}
