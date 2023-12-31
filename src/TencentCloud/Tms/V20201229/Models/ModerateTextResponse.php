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
namespace TencentCloud\Tms\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModerateText返回参数结构体
 *
 * @method string getDataId() 获取该字段用于返回检测对象对应请求参数中的DataId，与输入的DataId字段中的内容对应
 * @method void setDataId(string $DataId) 设置该字段用于返回检测对象对应请求参数中的DataId，与输入的DataId字段中的内容对应
 * @method string getBizType() 获取该字段用于返回请求参数中的BizType参数
 * @method void setBizType(string $BizType) 设置该字段用于返回请求参数中的BizType参数
 * @method string getSuggestion() 获取该字段用于返回后续操作建议。当您获取到判定结果后，返回值表示系统推荐的后续操作；建议您按照业务所需，对不同违规类型与建议值进行处理。
返回值：Block：建议屏蔽，Review ：建议人工复审，Pass：建议通过
 * @method void setSuggestion(string $Suggestion) 设置该字段用于返回后续操作建议。当您获取到判定结果后，返回值表示系统推荐的后续操作；建议您按照业务所需，对不同违规类型与建议值进行处理。
返回值：Block：建议屏蔽，Review ：建议人工复审，Pass：建议通过
 * @method LabelGrade getLabel() 获取命中标签，可参阅对应数据结构（LabelGrade）的详细描述
 * @method void setLabel(LabelGrade $Label) 设置命中标签，可参阅对应数据结构（LabelGrade）的详细描述
 * @method array getTcLabelCodes() 获取命中标签对应腾讯侧定义的标签
 * @method void setTcLabelCodes(array $TcLabelCodes) 设置命中标签对应腾讯侧定义的标签
 * @method array getKeywords() 获取该字段用于返回当前标签（Label）下被检测文本命中的关键词信息，用于标注文本违规的具体原因（如：加我微信）。该参数可能会有多个返回值，代表命中的多个关键词；如返回值为空且Score不为空，则代表识别结果所对应的恶意标签（Label）是来自于语义模型判断的返回值
 * @method void setKeywords(array $Keywords) 设置该字段用于返回当前标签（Label）下被检测文本命中的关键词信息，用于标注文本违规的具体原因（如：加我微信）。该参数可能会有多个返回值，代表命中的多个关键词；如返回值为空且Score不为空，则代表识别结果所对应的恶意标签（Label）是来自于语义模型判断的返回值
 * @method array getModerationDetails() 获取该字段用于返回文本审核的详细结果，返回值信息可参阅对应数据结构（ModerationDetail）的详细描述
 * @method void setModerationDetails(array $ModerationDetails) 设置该字段用于返回文本审核的详细结果，返回值信息可参阅对应数据结构（ModerationDetail）的详细描述
 * @method integer getScore() 获取该字段用于返回审核结果置信度，使用百分制。分数越高表示结果可信度越高。
 * @method void setScore(integer $Score) 设置该字段用于返回审核结果置信度，使用百分制。分数越高表示结果可信度越高。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ModerateTextResponse extends AbstractModel
{
    /**
     * @var string 该字段用于返回检测对象对应请求参数中的DataId，与输入的DataId字段中的内容对应
     */
    public $DataId;

    /**
     * @var string 该字段用于返回请求参数中的BizType参数
     */
    public $BizType;

    /**
     * @var string 该字段用于返回后续操作建议。当您获取到判定结果后，返回值表示系统推荐的后续操作；建议您按照业务所需，对不同违规类型与建议值进行处理。
返回值：Block：建议屏蔽，Review ：建议人工复审，Pass：建议通过
     */
    public $Suggestion;

    /**
     * @var LabelGrade 命中标签，可参阅对应数据结构（LabelGrade）的详细描述
     */
    public $Label;

    /**
     * @var array 命中标签对应腾讯侧定义的标签
     */
    public $TcLabelCodes;

    /**
     * @var array 该字段用于返回当前标签（Label）下被检测文本命中的关键词信息，用于标注文本违规的具体原因（如：加我微信）。该参数可能会有多个返回值，代表命中的多个关键词；如返回值为空且Score不为空，则代表识别结果所对应的恶意标签（Label）是来自于语义模型判断的返回值
     */
    public $Keywords;

    /**
     * @var array 该字段用于返回文本审核的详细结果，返回值信息可参阅对应数据结构（ModerationDetail）的详细描述
     */
    public $ModerationDetails;

    /**
     * @var integer 该字段用于返回审核结果置信度，使用百分制。分数越高表示结果可信度越高。
     */
    public $Score;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $DataId 该字段用于返回检测对象对应请求参数中的DataId，与输入的DataId字段中的内容对应
     * @param string $BizType 该字段用于返回请求参数中的BizType参数
     * @param string $Suggestion 该字段用于返回后续操作建议。当您获取到判定结果后，返回值表示系统推荐的后续操作；建议您按照业务所需，对不同违规类型与建议值进行处理。
返回值：Block：建议屏蔽，Review ：建议人工复审，Pass：建议通过
     * @param LabelGrade $Label 命中标签，可参阅对应数据结构（LabelGrade）的详细描述
     * @param array $TcLabelCodes 命中标签对应腾讯侧定义的标签
     * @param array $Keywords 该字段用于返回当前标签（Label）下被检测文本命中的关键词信息，用于标注文本违规的具体原因（如：加我微信）。该参数可能会有多个返回值，代表命中的多个关键词；如返回值为空且Score不为空，则代表识别结果所对应的恶意标签（Label）是来自于语义模型判断的返回值
     * @param array $ModerationDetails 该字段用于返回文本审核的详细结果，返回值信息可参阅对应数据结构（ModerationDetail）的详细描述
     * @param integer $Score 该字段用于返回审核结果置信度，使用百分制。分数越高表示结果可信度越高。
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
        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = new LabelGrade();
            $this->Label->deserialize($param["Label"]);
        }

        if (array_key_exists("TcLabelCodes",$param) and $param["TcLabelCodes"] !== null) {
            $this->TcLabelCodes = $param["TcLabelCodes"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("ModerationDetails",$param) and $param["ModerationDetails"] !== null) {
            $this->ModerationDetails = [];
            foreach ($param["ModerationDetails"] as $key => $value){
                $obj = new ModerationDetail();
                $obj->deserialize($value);
                array_push($this->ModerationDetails, $obj);
            }
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
