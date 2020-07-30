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
namespace TencentCloud\Tms\V20200713\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TextModeration返回参数结构体
 *
 * @method string getBizType() 获取最终使用的BizType
 * @method void setBizType(string $BizType) 设置最终使用的BizType
 * @method integer getEvilFlag() 获取是否恶意 0：正常 1：可疑
 * @method void setEvilFlag(integer $EvilFlag) 设置是否恶意 0：正常 1：可疑
 * @method string getLabel() 获取恶意标签，Normal：正常，Polity：涉政，Porn：色情，Illegal：违法，Abuse：谩骂，Terror：暴恐，Ad：广告，Custom：自定义关键词
 * @method void setLabel(string $Label) 设置恶意标签，Normal：正常，Polity：涉政，Porn：色情，Illegal：违法，Abuse：谩骂，Terror：暴恐，Ad：广告，Custom：自定义关键词
 * @method string getSuggestion() 获取建议值,Block：打击,Review：待复审,Normal：正常
 * @method void setSuggestion(string $Suggestion) 设置建议值,Block：打击,Review：待复审,Normal：正常
 * @method array getKeywords() 获取命中的关键词
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeywords(array $Keywords) 设置命中的关键词
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScore() 获取命中的模型分值
 * @method void setScore(integer $Score) 设置命中的模型分值
 * @method array getDetailResults() 获取返回的详细结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetailResults(array $DetailResults) 设置返回的详细结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRiskDetails() 获取账号风险检测结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskDetails(array $RiskDetails) 设置账号风险检测结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtra() 获取预留字段，不同客户返回结果不同
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtra(string $Extra) 设置预留字段，不同客户返回结果不同
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class TextModerationResponse extends AbstractModel
{
    /**
     * @var string 最终使用的BizType
     */
    public $BizType;

    /**
     * @var integer 是否恶意 0：正常 1：可疑
     */
    public $EvilFlag;

    /**
     * @var string 恶意标签，Normal：正常，Polity：涉政，Porn：色情，Illegal：违法，Abuse：谩骂，Terror：暴恐，Ad：广告，Custom：自定义关键词
     */
    public $Label;

    /**
     * @var string 建议值,Block：打击,Review：待复审,Normal：正常
     */
    public $Suggestion;

    /**
     * @var array 命中的关键词
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Keywords;

    /**
     * @var integer 命中的模型分值
     */
    public $Score;

    /**
     * @var array 返回的详细结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetailResults;

    /**
     * @var array 账号风险检测结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskDetails;

    /**
     * @var string 预留字段，不同客户返回结果不同
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Extra;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $BizType 最终使用的BizType
     * @param integer $EvilFlag 是否恶意 0：正常 1：可疑
     * @param string $Label 恶意标签，Normal：正常，Polity：涉政，Porn：色情，Illegal：违法，Abuse：谩骂，Terror：暴恐，Ad：广告，Custom：自定义关键词
     * @param string $Suggestion 建议值,Block：打击,Review：待复审,Normal：正常
     * @param array $Keywords 命中的关键词
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Score 命中的模型分值
     * @param array $DetailResults 返回的详细结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RiskDetails 账号风险检测结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Extra 预留字段，不同客户返回结果不同
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("EvilFlag",$param) and $param["EvilFlag"] !== null) {
            $this->EvilFlag = $param["EvilFlag"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("DetailResults",$param) and $param["DetailResults"] !== null) {
            $this->DetailResults = [];
            foreach ($param["DetailResults"] as $key => $value){
                $obj = new DetailResults();
                $obj->deserialize($value);
                array_push($this->DetailResults, $obj);
            }
        }

        if (array_key_exists("RiskDetails",$param) and $param["RiskDetails"] !== null) {
            $this->RiskDetails = [];
            foreach ($param["RiskDetails"] as $key => $value){
                $obj = new RiskDetails();
                $obj->deserialize($value);
                array_push($this->RiskDetails, $obj);
            }
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
