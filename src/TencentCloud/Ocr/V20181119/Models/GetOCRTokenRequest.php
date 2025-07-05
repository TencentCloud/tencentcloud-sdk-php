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
 * GetOCRToken请求参数结构体
 *
 * @method string getType() 获取业务类型，如身份证识别为IDCardOCR
 * @method void setType(string $Type) 设置业务类型，如身份证识别为IDCardOCR
 * @method IDCardConfig getIDCardConfig() 获取身份证配置信息
 * @method void setIDCardConfig(IDCardConfig $IDCardConfig) 设置身份证配置信息
 */
class GetOCRTokenRequest extends AbstractModel
{
    /**
     * @var string 业务类型，如身份证识别为IDCardOCR
     */
    public $Type;

    /**
     * @var IDCardConfig 身份证配置信息
     */
    public $IDCardConfig;

    /**
     * @param string $Type 业务类型，如身份证识别为IDCardOCR
     * @param IDCardConfig $IDCardConfig 身份证配置信息
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("IDCardConfig",$param) and $param["IDCardConfig"] !== null) {
            $this->IDCardConfig = new IDCardConfig();
            $this->IDCardConfig->deserialize($param["IDCardConfig"]);
        }
    }
}
