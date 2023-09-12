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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 收件人列表详情
 *
 * @method string getEmail() 获取收件人地址
 * @method void setEmail(string $Email) 设置收件人地址
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getTemplateData() 获取模板参数
 * @method void setTemplateData(string $TemplateData) 设置模板参数
 */
class ReceiverDetail extends AbstractModel
{
    /**
     * @var string 收件人地址
     */
    public $Email;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 模板参数
     */
    public $TemplateData;

    /**
     * @param string $Email 收件人地址
     * @param string $CreateTime 创建时间
     * @param string $TemplateData 模板参数
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
        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("TemplateData",$param) and $param["TemplateData"] !== null) {
            $this->TemplateData = $param["TemplateData"];
        }
    }
}
