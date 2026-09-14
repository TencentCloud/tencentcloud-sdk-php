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
 * DescribeQA返回参数结构体
 *
 * @method array getHighlightList() 获取<p>分片高亮信息</p>
 * @method void setHighlightList(array $HighlightList) 设置<p>分片高亮信息</p>
 * @method string getPageContent() 获取<p>分片内容</p>
 * @method void setPageContent(string $PageContent) 设置<p>分片内容</p>
 * @method string getQuestionDescription() 获取<p>问题描述</p>
 * @method void setQuestionDescription(string $QuestionDescription) 设置<p>问题描述</p>
 * @method array getSimilarQuestionList() 获取<p>相似问列表</p>
 * @method void setSimilarQuestionList(array $SimilarQuestionList) 设置<p>相似问列表</p>
 * @method QASummary getSummary() 获取<p>基础信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSummary(QASummary $Summary) 设置<p>基础信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeQAResponse extends AbstractModel
{
    /**
     * @var array <p>分片高亮信息</p>
     */
    public $HighlightList;

    /**
     * @var string <p>分片内容</p>
     */
    public $PageContent;

    /**
     * @var string <p>问题描述</p>
     */
    public $QuestionDescription;

    /**
     * @var array <p>相似问列表</p>
     */
    public $SimilarQuestionList;

    /**
     * @var QASummary <p>基础信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Summary;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $HighlightList <p>分片高亮信息</p>
     * @param string $PageContent <p>分片内容</p>
     * @param string $QuestionDescription <p>问题描述</p>
     * @param array $SimilarQuestionList <p>相似问列表</p>
     * @param QASummary $Summary <p>基础信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("HighlightList",$param) and $param["HighlightList"] !== null) {
            $this->HighlightList = [];
            foreach ($param["HighlightList"] as $key => $value){
                $obj = new QASegmentHighlight();
                $obj->deserialize($value);
                array_push($this->HighlightList, $obj);
            }
        }

        if (array_key_exists("PageContent",$param) and $param["PageContent"] !== null) {
            $this->PageContent = $param["PageContent"];
        }

        if (array_key_exists("QuestionDescription",$param) and $param["QuestionDescription"] !== null) {
            $this->QuestionDescription = $param["QuestionDescription"];
        }

        if (array_key_exists("SimilarQuestionList",$param) and $param["SimilarQuestionList"] !== null) {
            $this->SimilarQuestionList = [];
            foreach ($param["SimilarQuestionList"] as $key => $value){
                $obj = new SimilarQuestion();
                $obj->deserialize($value);
                array_push($this->SimilarQuestionList, $obj);
            }
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = new QASummary();
            $this->Summary->deserialize($param["Summary"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
