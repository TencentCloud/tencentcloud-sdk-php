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
 * ModifyMessageRecordFeedback请求参数结构体
 *
 * @method string getRecordId() 获取<p>需要反馈的消息记录ID</p>
 * @method void setRecordId(string $RecordId) 设置<p>需要反馈的消息记录ID</p>
 * @method string getAppKey() 获取<p>消息记录所属应用的授权AppKey</p>
 * @method void setAppKey(string $AppKey) 设置<p>消息记录所属应用的授权AppKey</p>
 * @method integer getScore() 获取<p>反馈分值</p><p>枚举值：</p><ul><li>0： 取消点赞或点踩</li><li>1： 点赞</li><li>2： 点踩</li></ul>
 * @method void setScore(integer $Score) 设置<p>反馈分值</p><p>枚举值：</p><ul><li>0： 取消点赞或点踩</li><li>1： 点赞</li><li>2： 点踩</li></ul>
 * @method array getReasonList() 获取<p>反馈的原因列表</p>
 * @method void setReasonList(array $ReasonList) 设置<p>反馈的原因列表</p>
 * @method string getFeedbackContent() 获取<p>反馈的补充内容</p>
 * @method void setFeedbackContent(string $FeedbackContent) 设置<p>反馈的补充内容</p>
 * @method string getAppId() 获取<p>消息记录所属的应用ID</p>
 * @method void setAppId(string $AppId) 设置<p>消息记录所属的应用ID</p>
 */
class ModifyMessageRecordFeedbackRequest extends AbstractModel
{
    /**
     * @var string <p>需要反馈的消息记录ID</p>
     */
    public $RecordId;

    /**
     * @var string <p>消息记录所属应用的授权AppKey</p>
     */
    public $AppKey;

    /**
     * @var integer <p>反馈分值</p><p>枚举值：</p><ul><li>0： 取消点赞或点踩</li><li>1： 点赞</li><li>2： 点踩</li></ul>
     */
    public $Score;

    /**
     * @var array <p>反馈的原因列表</p>
     */
    public $ReasonList;

    /**
     * @var string <p>反馈的补充内容</p>
     */
    public $FeedbackContent;

    /**
     * @var string <p>消息记录所属的应用ID</p>
     */
    public $AppId;

    /**
     * @param string $RecordId <p>需要反馈的消息记录ID</p>
     * @param string $AppKey <p>消息记录所属应用的授权AppKey</p>
     * @param integer $Score <p>反馈分值</p><p>枚举值：</p><ul><li>0： 取消点赞或点踩</li><li>1： 点赞</li><li>2： 点踩</li></ul>
     * @param array $ReasonList <p>反馈的原因列表</p>
     * @param string $FeedbackContent <p>反馈的补充内容</p>
     * @param string $AppId <p>消息记录所属的应用ID</p>
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
        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("AppKey",$param) and $param["AppKey"] !== null) {
            $this->AppKey = $param["AppKey"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("ReasonList",$param) and $param["ReasonList"] !== null) {
            $this->ReasonList = $param["ReasonList"];
        }

        if (array_key_exists("FeedbackContent",$param) and $param["FeedbackContent"] !== null) {
            $this->FeedbackContent = $param["FeedbackContent"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }
    }
}
