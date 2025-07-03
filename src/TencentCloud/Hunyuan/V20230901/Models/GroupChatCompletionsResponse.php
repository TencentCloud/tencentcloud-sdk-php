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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GroupChatCompletions返回参数结构体
 *
 * @method integer getCreated() 获取Unix 时间戳，单位为秒。
 * @method void setCreated(integer $Created) 设置Unix 时间戳，单位为秒。
 * @method Usage getUsage() 获取Token 统计信息。
按照总 Token 数量计费。
 * @method void setUsage(Usage $Usage) 设置Token 统计信息。
按照总 Token 数量计费。
 * @method string getNote() 获取免责声明。
 * @method void setNote(string $Note) 设置免责声明。
 * @method string getId() 获取本次请求的 RequestId。
 * @method void setId(string $Id) 设置本次请求的 RequestId。
 * @method array getChoices() 获取回复内容。
 * @method void setChoices(array $Choices) 设置回复内容。
 * @method ErrorMsg getErrorMsg() 获取错误信息。
如果流式返回中服务处理异常，返回该错误信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMsg(ErrorMsg $ErrorMsg) 设置错误信息。
如果流式返回中服务处理异常，返回该错误信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method SearchInfo getSearchInfo() 获取搜索结果信息
 * @method void setSearchInfo(SearchInfo $SearchInfo) 设置搜索结果信息
 * @method array getReplaces() 获取多媒体信息。
说明：
1. 可以用多媒体信息替换回复内容里的占位符，得到完整的消息。
2. 可能会出现回复内容里存在占位符，但是因为审核等原因没有返回多媒体信息。
 * @method void setReplaces(array $Replaces) 设置多媒体信息。
说明：
1. 可以用多媒体信息替换回复内容里的占位符，得到完整的消息。
2. 可能会出现回复内容里存在占位符，但是因为审核等原因没有返回多媒体信息。
 * @method array getRecommendedQuestions() 获取推荐问答。
 * @method void setRecommendedQuestions(array $RecommendedQuestions) 设置推荐问答。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
 */
class GroupChatCompletionsResponse extends AbstractModel
{
    /**
     * @var integer Unix 时间戳，单位为秒。
     */
    public $Created;

    /**
     * @var Usage Token 统计信息。
按照总 Token 数量计费。
     */
    public $Usage;

    /**
     * @var string 免责声明。
     */
    public $Note;

    /**
     * @var string 本次请求的 RequestId。
     */
    public $Id;

    /**
     * @var array 回复内容。
     */
    public $Choices;

    /**
     * @var ErrorMsg 错误信息。
如果流式返回中服务处理异常，返回该错误信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMsg;

    /**
     * @var SearchInfo 搜索结果信息
     */
    public $SearchInfo;

    /**
     * @var array 多媒体信息。
说明：
1. 可以用多媒体信息替换回复内容里的占位符，得到完整的消息。
2. 可能会出现回复内容里存在占位符，但是因为审核等原因没有返回多媒体信息。
     */
    public $Replaces;

    /**
     * @var array 推荐问答。
     */
    public $RecommendedQuestions;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
     */
    public $RequestId;

    /**
     * @param integer $Created Unix 时间戳，单位为秒。
     * @param Usage $Usage Token 统计信息。
按照总 Token 数量计费。
     * @param string $Note 免责声明。
     * @param string $Id 本次请求的 RequestId。
     * @param array $Choices 回复内容。
     * @param ErrorMsg $ErrorMsg 错误信息。
如果流式返回中服务处理异常，返回该错误信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param SearchInfo $SearchInfo 搜索结果信息
     * @param array $Replaces 多媒体信息。
说明：
1. 可以用多媒体信息替换回复内容里的占位符，得到完整的消息。
2. 可能会出现回复内容里存在占位符，但是因为审核等原因没有返回多媒体信息。
     * @param array $RecommendedQuestions 推荐问答。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
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
        if (array_key_exists("Created",$param) and $param["Created"] !== null) {
            $this->Created = $param["Created"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = new Usage();
            $this->Usage->deserialize($param["Usage"]);
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Choices",$param) and $param["Choices"] !== null) {
            $this->Choices = [];
            foreach ($param["Choices"] as $key => $value){
                $obj = new Choice();
                $obj->deserialize($value);
                array_push($this->Choices, $obj);
            }
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = new ErrorMsg();
            $this->ErrorMsg->deserialize($param["ErrorMsg"]);
        }

        if (array_key_exists("SearchInfo",$param) and $param["SearchInfo"] !== null) {
            $this->SearchInfo = new SearchInfo();
            $this->SearchInfo->deserialize($param["SearchInfo"]);
        }

        if (array_key_exists("Replaces",$param) and $param["Replaces"] !== null) {
            $this->Replaces = [];
            foreach ($param["Replaces"] as $key => $value){
                $obj = new Replace();
                $obj->deserialize($value);
                array_push($this->Replaces, $obj);
            }
        }

        if (array_key_exists("RecommendedQuestions",$param) and $param["RecommendedQuestions"] !== null) {
            $this->RecommendedQuestions = $param["RecommendedQuestions"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
