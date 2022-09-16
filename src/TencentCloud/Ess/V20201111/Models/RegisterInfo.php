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
 * 发起流程快速注册相关信息
 *
 * @method string getLegalName() 获取法人姓名
 * @method void setLegalName(string $LegalName) 设置法人姓名
 * @method string getUscc() 获取社会统一信用代码
 * @method void setUscc(string $Uscc) 设置社会统一信用代码
 */
class RegisterInfo extends AbstractModel
{
    /**
     * @var string 法人姓名
     */
    public $LegalName;

    /**
     * @var string 社会统一信用代码
     */
    public $Uscc;

    /**
     * @param string $LegalName 法人姓名
     * @param string $Uscc 社会统一信用代码
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
        if (array_key_exists("LegalName",$param) and $param["LegalName"] !== null) {
            $this->LegalName = $param["LegalName"];
        }

        if (array_key_exists("Uscc",$param) and $param["Uscc"] !== null) {
            $this->Uscc = $param["Uscc"];
        }
    }
}
