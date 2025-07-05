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
namespace TencentCloud\Lkeap\V20240522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 检索参数设置
 *
 * @method string getType() 获取检索的类型，不填该参数则检索全部。
- `DOC`：文档
- `QA`：QA

仅RetrieveKnowledge接口支持该参数
 * @method void setType(string $Type) 设置检索的类型，不填该参数则检索全部。
- `DOC`：文档
- `QA`：QA

仅RetrieveKnowledge接口支持该参数
 * @method integer getTopK() 获取返回个数
 * @method void setTopK(integer $TopK) 设置返回个数
 * @method float getScoreThreshold() 获取分数过滤
 * @method void setScoreThreshold(float $ScoreThreshold) 设置分数过滤
 */
class RetrievalSetting extends AbstractModel
{
    /**
     * @var string 检索的类型，不填该参数则检索全部。
- `DOC`：文档
- `QA`：QA

仅RetrieveKnowledge接口支持该参数
     */
    public $Type;

    /**
     * @var integer 返回个数
     */
    public $TopK;

    /**
     * @var float 分数过滤
     */
    public $ScoreThreshold;

    /**
     * @param string $Type 检索的类型，不填该参数则检索全部。
- `DOC`：文档
- `QA`：QA

仅RetrieveKnowledge接口支持该参数
     * @param integer $TopK 返回个数
     * @param float $ScoreThreshold 分数过滤
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

        if (array_key_exists("TopK",$param) and $param["TopK"] !== null) {
            $this->TopK = $param["TopK"];
        }

        if (array_key_exists("ScoreThreshold",$param) and $param["ScoreThreshold"] !== null) {
            $this->ScoreThreshold = $param["ScoreThreshold"];
        }
    }
}
