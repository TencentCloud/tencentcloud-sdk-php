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
namespace TencentCloud\Tms\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 金融大模型审校 违规明细
 *
 * @method string getLabel() 获取违规点
 * @method void setLabel(string $Label) 设置违规点
 * @method string getSuggestion() 获取处置建议
 * @method void setSuggestion(string $Suggestion) 设置处置建议
 * @method array getReasons() 获取违规原因列表
 * @method void setReasons(array $Reasons) 设置违规原因列表
 */
class FinancialLLMViolationDetail extends AbstractModel
{
    /**
     * @var string 违规点
     */
    public $Label;

    /**
     * @var string 处置建议
     */
    public $Suggestion;

    /**
     * @var array 违规原因列表
     */
    public $Reasons;

    /**
     * @param string $Label 违规点
     * @param string $Suggestion 处置建议
     * @param array $Reasons 违规原因列表
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Reasons",$param) and $param["Reasons"] !== null) {
            $this->Reasons = [];
            foreach ($param["Reasons"] as $key => $value){
                $obj = new FinancialLLMViolationReason();
                $obj->deserialize($value);
                array_push($this->Reasons, $obj);
            }
        }
    }
}
