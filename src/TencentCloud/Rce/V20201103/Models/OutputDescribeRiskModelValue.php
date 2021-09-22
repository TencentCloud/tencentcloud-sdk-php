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
namespace TencentCloud\Rce\V20201103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 风控建模服务出参对应值
 *
 * @method float getApplyScore() 获取模型分数值
 * @method void setApplyScore(float $ApplyScore) 设置模型分数值
 */
class OutputDescribeRiskModelValue extends AbstractModel
{
    /**
     * @var float 模型分数值
     */
    public $ApplyScore;

    /**
     * @param float $ApplyScore 模型分数值
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
        if (array_key_exists("ApplyScore",$param) and $param["ApplyScore"] !== null) {
            $this->ApplyScore = $param["ApplyScore"];
        }
    }
}
