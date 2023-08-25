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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DecribeSuggestRiskLevelMatrix请求参数结构体
 *
 * @method string getDspaId() 获取dspaId

 * @method void setDspaId(string $DspaId) 设置dspaId

 * @method array getSensitiveLevelList() 获取分类分级等级列表
 * @method void setSensitiveLevelList(array $SensitiveLevelList) 设置分类分级等级列表
 * @method array getVulnerabilityLevelList() 获取脆弱项等级列表
 * @method void setVulnerabilityLevelList(array $VulnerabilityLevelList) 设置脆弱项等级列表
 */
class DecribeSuggestRiskLevelMatrixRequest extends AbstractModel
{
    /**
     * @var string dspaId

     */
    public $DspaId;

    /**
     * @var array 分类分级等级列表
     */
    public $SensitiveLevelList;

    /**
     * @var array 脆弱项等级列表
     */
    public $VulnerabilityLevelList;

    /**
     * @param string $DspaId dspaId

     * @param array $SensitiveLevelList 分类分级等级列表
     * @param array $VulnerabilityLevelList 脆弱项等级列表
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("SensitiveLevelList",$param) and $param["SensitiveLevelList"] !== null) {
            $this->SensitiveLevelList = [];
            foreach ($param["SensitiveLevelList"] as $key => $value){
                $obj = new RiskMatrixLevel();
                $obj->deserialize($value);
                array_push($this->SensitiveLevelList, $obj);
            }
        }

        if (array_key_exists("VulnerabilityLevelList",$param) and $param["VulnerabilityLevelList"] !== null) {
            $this->VulnerabilityLevelList = [];
            foreach ($param["VulnerabilityLevelList"] as $key => $value){
                $obj = new RiskMatrixLevel();
                $obj->deserialize($value);
                array_push($this->VulnerabilityLevelList, $obj);
            }
        }
    }
}
