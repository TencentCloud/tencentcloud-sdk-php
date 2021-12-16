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
namespace TencentCloud\Cii\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 机器核保预测结果
 *
 * @method string getTitle() 获取核保引擎名称
 * @method void setTitle(string $Title) 设置核保引擎名称
 * @method string getConclusion() 获取核保结论：加费、承保、拒保、延期、除外、加费+除外
 * @method void setConclusion(string $Conclusion) 设置核保结论：加费、承保、拒保、延期、除外、加费+除外
 * @method array getExplanation() 获取AI决策树解释
 * @method void setExplanation(array $Explanation) 设置AI决策树解释
 * @method array getDisease() 获取疾病指标
 * @method void setDisease(array $Disease) 设置疾病指标
 * @method array getLaboratory() 获取检查异常
 * @method void setLaboratory(array $Laboratory) 设置检查异常
 */
class MachinePredict extends AbstractModel
{
    /**
     * @var string 核保引擎名称
     */
    public $Title;

    /**
     * @var string 核保结论：加费、承保、拒保、延期、除外、加费+除外
     */
    public $Conclusion;

    /**
     * @var array AI决策树解释
     */
    public $Explanation;

    /**
     * @var array 疾病指标
     */
    public $Disease;

    /**
     * @var array 检查异常
     */
    public $Laboratory;

    /**
     * @param string $Title 核保引擎名称
     * @param string $Conclusion 核保结论：加费、承保、拒保、延期、除外、加费+除外
     * @param array $Explanation AI决策树解释
     * @param array $Disease 疾病指标
     * @param array $Laboratory 检查异常
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Conclusion",$param) and $param["Conclusion"] !== null) {
            $this->Conclusion = $param["Conclusion"];
        }

        if (array_key_exists("Explanation",$param) and $param["Explanation"] !== null) {
            $this->Explanation = [];
            foreach ($param["Explanation"] as $key => $value){
                $obj = new UnderwriteItem();
                $obj->deserialize($value);
                array_push($this->Explanation, $obj);
            }
        }

        if (array_key_exists("Disease",$param) and $param["Disease"] !== null) {
            $this->Disease = [];
            foreach ($param["Disease"] as $key => $value){
                $obj = new UnderwriteItem();
                $obj->deserialize($value);
                array_push($this->Disease, $obj);
            }
        }

        if (array_key_exists("Laboratory",$param) and $param["Laboratory"] !== null) {
            $this->Laboratory = [];
            foreach ($param["Laboratory"] as $key => $value){
                $obj = new UnderwriteItem();
                $obj->deserialize($value);
                array_push($this->Laboratory, $obj);
            }
        }
    }
}
