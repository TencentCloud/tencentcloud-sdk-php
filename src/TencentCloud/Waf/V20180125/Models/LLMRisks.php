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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LLMRisks
 *
 * @method array getRisks() 获取分数
 * @method void setRisks(array $Risks) 设置分数
 */
class LLMRisks extends AbstractModel
{
    /**
     * @var array 分数
     */
    public $Risks;

    /**
     * @param array $Risks 分数
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
        if (array_key_exists("Risks",$param) and $param["Risks"] !== null) {
            $this->Risks = [];
            foreach ($param["Risks"] as $key => $value){
                $obj = new ClawRiskItem();
                $obj->deserialize($value);
                array_push($this->Risks, $obj);
            }
        }
    }
}
