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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 带有园区评估记录的型号详情
 *
 * @method string getVersion() 获取版本号
 * @method void setVersion(string $Version) 设置版本号
 * @method integer getCheckResult() 获取0 代表在当前园区没评估过，1 代表完全满足IDC准入标准 2 代表存在托管风险 3 代表不满足IDC准入标准
 * @method void setCheckResult(integer $CheckResult) 设置0 代表在当前园区没评估过，1 代表完全满足IDC准入标准 2 代表存在托管风险 3 代表不满足IDC准入标准
 * @method array getOptionSet() 获取型号各个配置项的详情
 * @method void setOptionSet(array $OptionSet) 设置型号各个配置项的详情
 * @method string getModelVersion() 获取设备型号名称及版本
 * @method void setModelVersion(string $ModelVersion) 设置设备型号名称及版本
 */
class ModelVersionDetail extends AbstractModel
{
    /**
     * @var string 版本号
     */
    public $Version;

    /**
     * @var integer 0 代表在当前园区没评估过，1 代表完全满足IDC准入标准 2 代表存在托管风险 3 代表不满足IDC准入标准
     */
    public $CheckResult;

    /**
     * @var array 型号各个配置项的详情
     */
    public $OptionSet;

    /**
     * @var string 设备型号名称及版本
     */
    public $ModelVersion;

    /**
     * @param string $Version 版本号
     * @param integer $CheckResult 0 代表在当前园区没评估过，1 代表完全满足IDC准入标准 2 代表存在托管风险 3 代表不满足IDC准入标准
     * @param array $OptionSet 型号各个配置项的详情
     * @param string $ModelVersion 设备型号名称及版本
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("CheckResult",$param) and $param["CheckResult"] !== null) {
            $this->CheckResult = $param["CheckResult"];
        }

        if (array_key_exists("OptionSet",$param) and $param["OptionSet"] !== null) {
            $this->OptionSet = [];
            foreach ($param["OptionSet"] as $key => $value){
                $obj = new TemplateOption();
                $obj->deserialize($value);
                array_push($this->OptionSet, $obj);
            }
        }

        if (array_key_exists("ModelVersion",$param) and $param["ModelVersion"] !== null) {
            $this->ModelVersion = $param["ModelVersion"];
        }
    }
}
