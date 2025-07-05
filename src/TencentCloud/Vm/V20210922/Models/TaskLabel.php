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
namespace TencentCloud\Vm\V20210922\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务输出标签
 *
 * @method string getLabel() 获取该字段用于返回检测结果所对应的恶意标签。
返回值：Porn：色情，Abuse：谩骂，Ad：广告；以及其他令人反感、不安全或不适宜的内容类型。
 * @method void setLabel(string $Label) 设置该字段用于返回检测结果所对应的恶意标签。
返回值：Porn：色情，Abuse：谩骂，Ad：广告；以及其他令人反感、不安全或不适宜的内容类型。
 * @method string getSuggestion() 获取审核建议，可选值：
Pass 通过，
Review 建议人审，
Block 确认违规
 * @method void setSuggestion(string $Suggestion) 设置审核建议，可选值：
Pass 通过，
Review 建议人审，
Block 确认违规
 * @method integer getScore() 获取得分，分数是 0 ～ 100
 * @method void setScore(integer $Score) 设置得分，分数是 0 ～ 100
 * @method string getSubLabel() 获取命中的二级标签
 * @method void setSubLabel(string $SubLabel) 设置命中的二级标签
 */
class TaskLabel extends AbstractModel
{
    /**
     * @var string 该字段用于返回检测结果所对应的恶意标签。
返回值：Porn：色情，Abuse：谩骂，Ad：广告；以及其他令人反感、不安全或不适宜的内容类型。
     */
    public $Label;

    /**
     * @var string 审核建议，可选值：
Pass 通过，
Review 建议人审，
Block 确认违规
     */
    public $Suggestion;

    /**
     * @var integer 得分，分数是 0 ～ 100
     */
    public $Score;

    /**
     * @var string 命中的二级标签
     */
    public $SubLabel;

    /**
     * @param string $Label 该字段用于返回检测结果所对应的恶意标签。
返回值：Porn：色情，Abuse：谩骂，Ad：广告；以及其他令人反感、不安全或不适宜的内容类型。
     * @param string $Suggestion 审核建议，可选值：
Pass 通过，
Review 建议人审，
Block 确认违规
     * @param integer $Score 得分，分数是 0 ～ 100
     * @param string $SubLabel 命中的二级标签
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

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("SubLabel",$param) and $param["SubLabel"] !== null) {
            $this->SubLabel = $param["SubLabel"];
        }
    }
}
