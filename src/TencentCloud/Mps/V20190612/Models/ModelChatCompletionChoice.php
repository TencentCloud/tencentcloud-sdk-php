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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单条候选回复。
 *
 * @method integer getIndex() 获取<p>候选回复在候选数组中的索引</p>
 * @method void setIndex(integer $Index) 设置<p>候选回复在候选数组中的索引</p>
 * @method string getFinishReason() 获取<p>结束原因</p>
 * @method void setFinishReason(string $FinishReason) 设置<p>结束原因</p>
 * @method ModelChatResponseMessage getMessage() 获取<p>模型回复消息体</p>
 * @method void setMessage(ModelChatResponseMessage $Message) 设置<p>模型回复消息体</p>
 */
class ModelChatCompletionChoice extends AbstractModel
{
    /**
     * @var integer <p>候选回复在候选数组中的索引</p>
     */
    public $Index;

    /**
     * @var string <p>结束原因</p>
     */
    public $FinishReason;

    /**
     * @var ModelChatResponseMessage <p>模型回复消息体</p>
     */
    public $Message;

    /**
     * @param integer $Index <p>候选回复在候选数组中的索引</p>
     * @param string $FinishReason <p>结束原因</p>
     * @param ModelChatResponseMessage $Message <p>模型回复消息体</p>
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("FinishReason",$param) and $param["FinishReason"] !== null) {
            $this->FinishReason = $param["FinishReason"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = new ModelChatResponseMessage();
            $this->Message->deserialize($param["Message"]);
        }
    }
}
