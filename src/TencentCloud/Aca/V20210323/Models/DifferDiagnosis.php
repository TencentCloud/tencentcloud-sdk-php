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
 * 鉴别诊断
 *
 * @method string getDifferName() 获取鉴别名称
 * @method void setDifferName(string $DifferName) 设置鉴别名称
 * @method string getDifferTips() 获取鉴别提示
 * @method void setDifferTips(string $DifferTips) 设置鉴别提示
 * @method string getDiseaseGuideInfo() 获取疾病指南信息
 * @method void setDiseaseGuideInfo(string $DiseaseGuideInfo) 设置疾病指南信息
 */
class DifferDiagnosis extends AbstractModel
{
    /**
     * @var string 鉴别名称
     */
    public $DifferName;

    /**
     * @var string 鉴别提示
     */
    public $DifferTips;

    /**
     * @var string 疾病指南信息
     */
    public $DiseaseGuideInfo;

    /**
     * @param string $DifferName 鉴别名称
     * @param string $DifferTips 鉴别提示
     * @param string $DiseaseGuideInfo 疾病指南信息
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
        if (array_key_exists("DifferName",$param) and $param["DifferName"] !== null) {
            $this->DifferName = $param["DifferName"];
        }

        if (array_key_exists("DifferTips",$param) and $param["DifferTips"] !== null) {
            $this->DifferTips = $param["DifferTips"];
        }

        if (array_key_exists("DiseaseGuideInfo",$param) and $param["DiseaseGuideInfo"] !== null) {
            $this->DiseaseGuideInfo = $param["DiseaseGuideInfo"];
        }
    }
}
