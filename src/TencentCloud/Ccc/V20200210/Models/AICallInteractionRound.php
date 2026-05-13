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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表示一轮完整的对话交互
 *
 * @method string getRoundId() 获取<p>本轮对话的唯一标识 Id</p>
 * @method void setRoundId(string $RoundId) 设置<p>本轮对话的唯一标识 Id</p>
 * @method integer getRoundIndex() 获取<p>轮次</p>
 * @method void setRoundIndex(integer $RoundIndex) 设置<p>轮次</p>
 * @method string getTags() 获取<p>用户回复分类的标签， json序列化后的表示</p>
 * @method void setTags(string $Tags) 设置<p>用户回复分类的标签， json序列化后的表示</p>
 * @method array getMessages() 获取<p>本轮涉及到的消息内容</p>
 * @method void setMessages(array $Messages) 设置<p>本轮涉及到的消息内容</p>
 * @method array getPaths() 获取<p>本轮对话在画布中经过的节点路径</p>
 * @method void setPaths(array $Paths) 设置<p>本轮对话在画布中经过的节点路径</p>
 */
class AICallInteractionRound extends AbstractModel
{
    /**
     * @var string <p>本轮对话的唯一标识 Id</p>
     */
    public $RoundId;

    /**
     * @var integer <p>轮次</p>
     */
    public $RoundIndex;

    /**
     * @var string <p>用户回复分类的标签， json序列化后的表示</p>
     */
    public $Tags;

    /**
     * @var array <p>本轮涉及到的消息内容</p>
     */
    public $Messages;

    /**
     * @var array <p>本轮对话在画布中经过的节点路径</p>
     */
    public $Paths;

    /**
     * @param string $RoundId <p>本轮对话的唯一标识 Id</p>
     * @param integer $RoundIndex <p>轮次</p>
     * @param string $Tags <p>用户回复分类的标签， json序列化后的表示</p>
     * @param array $Messages <p>本轮涉及到的消息内容</p>
     * @param array $Paths <p>本轮对话在画布中经过的节点路径</p>
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
        if (array_key_exists("RoundId",$param) and $param["RoundId"] !== null) {
            $this->RoundId = $param["RoundId"];
        }

        if (array_key_exists("RoundIndex",$param) and $param["RoundIndex"] !== null) {
            $this->RoundIndex = $param["RoundIndex"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Messages",$param) and $param["Messages"] !== null) {
            $this->Messages = [];
            foreach ($param["Messages"] as $key => $value){
                $obj = new AIRoundMessage();
                $obj->deserialize($value);
                array_push($this->Messages, $obj);
            }
        }

        if (array_key_exists("Paths",$param) and $param["Paths"] !== null) {
            $this->Paths = [];
            foreach ($param["Paths"] as $key => $value){
                $obj = new AIRoundPath();
                $obj->deserialize($value);
                array_push($this->Paths, $obj);
            }
        }
    }
}
