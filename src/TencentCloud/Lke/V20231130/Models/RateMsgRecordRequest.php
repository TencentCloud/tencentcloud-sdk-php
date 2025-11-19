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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RateMsgRecord请求参数结构体
 *
 * @method string getBotAppKey() 获取应用appKey
 * @method void setBotAppKey(string $BotAppKey) 设置应用appKey
 * @method string getRecordId() 获取消息ID 【大模型回复答案的RecordID】
 * @method void setRecordId(string $RecordId) 设置消息ID 【大模型回复答案的RecordID】
 * @method integer getScore() 获取0: 取消前置状态 ; 1: 点赞;   2: 点踩;   
注：
(1) 评测端不支持点赞、点踩
(2) 消息回复类型为欢迎语、并发超限、实时文档，不支持点赞、点踩
(3) 点赞或者点踩之后，如果想要取消状态，传值为0即可
 * @method void setScore(integer $Score) 设置0: 取消前置状态 ; 1: 点赞;   2: 点踩;   
注：
(1) 评测端不支持点赞、点踩
(2) 消息回复类型为欢迎语、并发超限、实时文档，不支持点赞、点踩
(3) 点赞或者点踩之后，如果想要取消状态，传值为0即可
 * @method array getReasons() 获取支持通过API自定义，字符上限值为20字符；通过API 自定义标签，可以支持平台端用户在不满意问题错误类型中筛选、查看
 * @method void setReasons(array $Reasons) 设置支持通过API自定义，字符上限值为20字符；通过API 自定义标签，可以支持平台端用户在不满意问题错误类型中筛选、查看
 * @method string getFeedbackContent() 获取用户自定义反馈内容
 * @method void setFeedbackContent(string $FeedbackContent) 设置用户自定义反馈内容
 */
class RateMsgRecordRequest extends AbstractModel
{
    /**
     * @var string 应用appKey
     */
    public $BotAppKey;

    /**
     * @var string 消息ID 【大模型回复答案的RecordID】
     */
    public $RecordId;

    /**
     * @var integer 0: 取消前置状态 ; 1: 点赞;   2: 点踩;   
注：
(1) 评测端不支持点赞、点踩
(2) 消息回复类型为欢迎语、并发超限、实时文档，不支持点赞、点踩
(3) 点赞或者点踩之后，如果想要取消状态，传值为0即可
     */
    public $Score;

    /**
     * @var array 支持通过API自定义，字符上限值为20字符；通过API 自定义标签，可以支持平台端用户在不满意问题错误类型中筛选、查看
     */
    public $Reasons;

    /**
     * @var string 用户自定义反馈内容
     */
    public $FeedbackContent;

    /**
     * @param string $BotAppKey 应用appKey
     * @param string $RecordId 消息ID 【大模型回复答案的RecordID】
     * @param integer $Score 0: 取消前置状态 ; 1: 点赞;   2: 点踩;   
注：
(1) 评测端不支持点赞、点踩
(2) 消息回复类型为欢迎语、并发超限、实时文档，不支持点赞、点踩
(3) 点赞或者点踩之后，如果想要取消状态，传值为0即可
     * @param array $Reasons 支持通过API自定义，字符上限值为20字符；通过API 自定义标签，可以支持平台端用户在不满意问题错误类型中筛选、查看
     * @param string $FeedbackContent 用户自定义反馈内容
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
        if (array_key_exists("BotAppKey",$param) and $param["BotAppKey"] !== null) {
            $this->BotAppKey = $param["BotAppKey"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Reasons",$param) and $param["Reasons"] !== null) {
            $this->Reasons = $param["Reasons"];
        }

        if (array_key_exists("FeedbackContent",$param) and $param["FeedbackContent"] !== null) {
            $this->FeedbackContent = $param["FeedbackContent"];
        }
    }
}
