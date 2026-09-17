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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标准词校验项
 *
 * @method CheckResult getCheckResult() 获取校验结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckResult(CheckResult $CheckResult) 设置校验结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTerm() 获取待校验的标准词
 * @method void setTerm(string $Term) 设置待校验的标准词
 * @method string getTermId() 获取已存在时返回对应标准词 ID
 * @method void setTermId(string $TermId) 设置已存在时返回对应标准词 ID
 */
class LabelTermCheckResult extends AbstractModel
{
    /**
     * @var CheckResult 校验结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckResult;

    /**
     * @var string 待校验的标准词
     */
    public $Term;

    /**
     * @var string 已存在时返回对应标准词 ID
     */
    public $TermId;

    /**
     * @param CheckResult $CheckResult 校验结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Term 待校验的标准词
     * @param string $TermId 已存在时返回对应标准词 ID
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
        if (array_key_exists("CheckResult",$param) and $param["CheckResult"] !== null) {
            $this->CheckResult = new CheckResult();
            $this->CheckResult->deserialize($param["CheckResult"]);
        }

        if (array_key_exists("Term",$param) and $param["Term"] !== null) {
            $this->Term = $param["Term"];
        }

        if (array_key_exists("TermId",$param) and $param["TermId"] !== null) {
            $this->TermId = $param["TermId"];
        }
    }
}
