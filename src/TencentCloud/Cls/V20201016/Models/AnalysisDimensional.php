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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多维分析的分析维度
 *
 * @method string getName() 获取分析名称
 * @method void setName(string $Name) 设置分析名称
 * @method string getType() 获取分析类型：query，field ，original
 * @method void setType(string $Type) 设置分析类型：query，field ，original
 * @method string getContent() 获取分析内容
 * @method void setContent(string $Content) 设置分析内容
 * @method array getConfigInfo() 获取配置
 * @method void setConfigInfo(array $ConfigInfo) 设置配置
 */
class AnalysisDimensional extends AbstractModel
{
    /**
     * @var string 分析名称
     */
    public $Name;

    /**
     * @var string 分析类型：query，field ，original
     */
    public $Type;

    /**
     * @var string 分析内容
     */
    public $Content;

    /**
     * @var array 配置
     */
    public $ConfigInfo;

    /**
     * @param string $Name 分析名称
     * @param string $Type 分析类型：query，field ，original
     * @param string $Content 分析内容
     * @param array $ConfigInfo 配置
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("ConfigInfo",$param) and $param["ConfigInfo"] !== null) {
            $this->ConfigInfo = [];
            foreach ($param["ConfigInfo"] as $key => $value){
                $obj = new AlarmAnalysisConfig();
                $obj->deserialize($value);
                array_push($this->ConfigInfo, $obj);
            }
        }
    }
}
