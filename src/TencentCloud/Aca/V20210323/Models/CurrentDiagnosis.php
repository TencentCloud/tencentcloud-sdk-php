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
namespace TencentCloud\Aca\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 当前诊断
 *
 * @method string getDiagnoseDisease() 获取诊断疾病
 * @method void setDiagnoseDisease(string $DiagnoseDisease) 设置诊断疾病
 * @method string getDiseaseGuideInfo() 获取疾病指南信息
 * @method void setDiseaseGuideInfo(string $DiseaseGuideInfo) 设置疾病指南信息
 * @method string getStandardName() 获取标准名称
 * @method void setStandardName(string $StandardName) 设置标准名称
 */
class CurrentDiagnosis extends AbstractModel
{
    /**
     * @var string 诊断疾病
     */
    public $DiagnoseDisease;

    /**
     * @var string 疾病指南信息
     */
    public $DiseaseGuideInfo;

    /**
     * @var string 标准名称
     */
    public $StandardName;

    /**
     * @param string $DiagnoseDisease 诊断疾病
     * @param string $DiseaseGuideInfo 疾病指南信息
     * @param string $StandardName 标准名称
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
        if (array_key_exists("DiagnoseDisease",$param) and $param["DiagnoseDisease"] !== null) {
            $this->DiagnoseDisease = $param["DiagnoseDisease"];
        }

        if (array_key_exists("DiseaseGuideInfo",$param) and $param["DiseaseGuideInfo"] !== null) {
            $this->DiseaseGuideInfo = $param["DiseaseGuideInfo"];
        }

        if (array_key_exists("StandardName",$param) and $param["StandardName"] !== null) {
            $this->StandardName = $param["StandardName"];
        }
    }
}
