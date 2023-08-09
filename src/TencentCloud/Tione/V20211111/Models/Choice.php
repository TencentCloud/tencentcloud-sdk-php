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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 对话结果
 *
 * @method Message getMessage() 获取对话结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(Message $Message) 设置对话结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFinishReason() 获取结束理由: stop, length, content_filter, null
 * @method void setFinishReason(string $FinishReason) 设置结束理由: stop, length, content_filter, null
 * @method integer getIndex() 获取序号
 * @method void setIndex(integer $Index) 设置序号
 */
class Choice extends AbstractModel
{
    /**
     * @var Message 对话结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var string 结束理由: stop, length, content_filter, null
     */
    public $FinishReason;

    /**
     * @var integer 序号
     */
    public $Index;

    /**
     * @param Message $Message 对话结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FinishReason 结束理由: stop, length, content_filter, null
     * @param integer $Index 序号
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
        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = new Message();
            $this->Message->deserialize($param["Message"]);
        }

        if (array_key_exists("FinishReason",$param) and $param["FinishReason"] !== null) {
            $this->FinishReason = $param["FinishReason"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }
    }
}
