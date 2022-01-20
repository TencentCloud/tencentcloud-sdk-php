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
 * 核保结论 机器结论和人工结论统一数据结构
 *
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 * @method string getConclusion() 获取结论
 * @method void setConclusion(string $Conclusion) 设置结论
 * @method string getExplanation() 获取解释
 * @method void setExplanation(string $Explanation) 设置解释
 */
class UnderwriteConclusion extends AbstractModel
{
    /**
     * @var string 类型
     */
    public $Type;

    /**
     * @var string 结论
     */
    public $Conclusion;

    /**
     * @var string 解释
     */
    public $Explanation;

    /**
     * @param string $Type 类型
     * @param string $Conclusion 结论
     * @param string $Explanation 解释
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Conclusion",$param) and $param["Conclusion"] !== null) {
            $this->Conclusion = $param["Conclusion"];
        }

        if (array_key_exists("Explanation",$param) and $param["Explanation"] !== null) {
            $this->Explanation = $param["Explanation"];
        }
    }
}
