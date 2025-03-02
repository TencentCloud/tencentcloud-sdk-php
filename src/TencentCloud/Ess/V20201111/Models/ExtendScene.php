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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 印章扩展信息
 *
 * @method string getGenerateType() 获取印章来源类型
 * @method void setGenerateType(string $GenerateType) 设置印章来源类型
 * @method string getGenerateTypeDesc() 获取印章来源类型描述
 * @method void setGenerateTypeDesc(string $GenerateTypeDesc) 设置印章来源类型描述
 * @method string getGenerateTypeLogo() 获取印章来源logo
 * @method void setGenerateTypeLogo(string $GenerateTypeLogo) 设置印章来源logo
 */
class ExtendScene extends AbstractModel
{
    /**
     * @var string 印章来源类型
     */
    public $GenerateType;

    /**
     * @var string 印章来源类型描述
     */
    public $GenerateTypeDesc;

    /**
     * @var string 印章来源logo
     */
    public $GenerateTypeLogo;

    /**
     * @param string $GenerateType 印章来源类型
     * @param string $GenerateTypeDesc 印章来源类型描述
     * @param string $GenerateTypeLogo 印章来源logo
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
        if (array_key_exists("GenerateType",$param) and $param["GenerateType"] !== null) {
            $this->GenerateType = $param["GenerateType"];
        }

        if (array_key_exists("GenerateTypeDesc",$param) and $param["GenerateTypeDesc"] !== null) {
            $this->GenerateTypeDesc = $param["GenerateTypeDesc"];
        }

        if (array_key_exists("GenerateTypeLogo",$param) and $param["GenerateTypeLogo"] !== null) {
            $this->GenerateTypeLogo = $param["GenerateTypeLogo"];
        }
    }
}
