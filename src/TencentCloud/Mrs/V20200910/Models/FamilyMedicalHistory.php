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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 家族疾病史
 *
 * @method string getRelativeHistory() 获取家族成员史
 * @method void setRelativeHistory(string $RelativeHistory) 设置家族成员史
 * @method string getRelativeCancerHistory() 获取家族肿瘤史
 * @method void setRelativeCancerHistory(string $RelativeCancerHistory) 设置家族肿瘤史
 * @method string getGeneticHistory() 获取家族遗传史
 * @method void setGeneticHistory(string $GeneticHistory) 设置家族遗传史
 */
class FamilyMedicalHistory extends AbstractModel
{
    /**
     * @var string 家族成员史
     */
    public $RelativeHistory;

    /**
     * @var string 家族肿瘤史
     */
    public $RelativeCancerHistory;

    /**
     * @var string 家族遗传史
     */
    public $GeneticHistory;

    /**
     * @param string $RelativeHistory 家族成员史
     * @param string $RelativeCancerHistory 家族肿瘤史
     * @param string $GeneticHistory 家族遗传史
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
        if (array_key_exists("RelativeHistory",$param) and $param["RelativeHistory"] !== null) {
            $this->RelativeHistory = $param["RelativeHistory"];
        }

        if (array_key_exists("RelativeCancerHistory",$param) and $param["RelativeCancerHistory"] !== null) {
            $this->RelativeCancerHistory = $param["RelativeCancerHistory"];
        }

        if (array_key_exists("GeneticHistory",$param) and $param["GeneticHistory"] !== null) {
            $this->GeneticHistory = $param["GeneticHistory"];
        }
    }
}
