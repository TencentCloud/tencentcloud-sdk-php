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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEdgeUnitApplicationYaml请求参数结构体
 *
 * @method integer getEdgeUnitId() 获取单元ID
 * @method void setEdgeUnitId(integer $EdgeUnitId) 设置单元ID
 * @method string getYaml() 获取base64后的Yaml配置
 * @method void setYaml(string $Yaml) 设置base64后的Yaml配置
 * @method ApplicationBasicInfo getBasicInfo() 获取基本信息
 * @method void setBasicInfo(ApplicationBasicInfo $BasicInfo) 设置基本信息
 */
class CreateEdgeUnitApplicationYamlRequest extends AbstractModel
{
    /**
     * @var integer 单元ID
     */
    public $EdgeUnitId;

    /**
     * @var string base64后的Yaml配置
     */
    public $Yaml;

    /**
     * @var ApplicationBasicInfo 基本信息
     */
    public $BasicInfo;

    /**
     * @param integer $EdgeUnitId 单元ID
     * @param string $Yaml base64后的Yaml配置
     * @param ApplicationBasicInfo $BasicInfo 基本信息
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
        if (array_key_exists("EdgeUnitId",$param) and $param["EdgeUnitId"] !== null) {
            $this->EdgeUnitId = $param["EdgeUnitId"];
        }

        if (array_key_exists("Yaml",$param) and $param["Yaml"] !== null) {
            $this->Yaml = $param["Yaml"];
        }

        if (array_key_exists("BasicInfo",$param) and $param["BasicInfo"] !== null) {
            $this->BasicInfo = new ApplicationBasicInfo();
            $this->BasicInfo->deserialize($param["BasicInfo"]);
        }
    }
}
