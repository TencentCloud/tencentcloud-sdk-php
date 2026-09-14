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
 * @method CheckResult getCheckResult() 获取<p>校验结果</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckResult(CheckResult $CheckResult) 设置<p>校验结果</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTerm() 获取<p>待校验的标准词</p>
 * @method void setTerm(string $Term) 设置<p>待校验的标准词</p>
 * @method string getTermId() 获取<p>已存在时返回对应标准词 ID</p>
 * @method void setTermId(string $TermId) 设置<p>已存在时返回对应标准词 ID</p>
 */
class LabelTermCheckResult extends AbstractModel
{
    /**
     * @var CheckResult <p>校验结果</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckResult;

    /**
     * @var string <p>待校验的标准词</p>
     */
    public $Term;

    /**
     * @var string <p>已存在时返回对应标准词 ID</p>
     */
    public $TermId;

    /**
     * @param CheckResult $CheckResult <p>校验结果</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Term <p>待校验的标准词</p>
     * @param string $TermId <p>已存在时返回对应标准词 ID</p>
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
