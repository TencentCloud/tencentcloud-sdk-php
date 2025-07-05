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
namespace TencentCloud\Aca\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 诊断列表
 *
 * @method string getDiagnosisName() 获取诊断名称
 * @method void setDiagnosisName(string $DiagnosisName) 设置诊断名称
 * @method string getIcdCode() 获取ICD代码
 * @method void setIcdCode(string $IcdCode) 设置ICD代码
 */
class EmrDiagnosises extends AbstractModel
{
    /**
     * @var string 诊断名称
     */
    public $DiagnosisName;

    /**
     * @var string ICD代码
     */
    public $IcdCode;

    /**
     * @param string $DiagnosisName 诊断名称
     * @param string $IcdCode ICD代码
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
        if (array_key_exists("DiagnosisName",$param) and $param["DiagnosisName"] !== null) {
            $this->DiagnosisName = $param["DiagnosisName"];
        }

        if (array_key_exists("IcdCode",$param) and $param["IcdCode"] !== null) {
            $this->IcdCode = $param["IcdCode"];
        }
    }
}
