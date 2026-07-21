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
 * DescribeConversationMessageList返回参数结构体
 *
 * @method string getFirstRecordId() 获取<p>第一个记录 ID</p>
 * @method void setFirstRecordId(string $FirstRecordId) 设置<p>第一个记录 ID</p>
 * @method boolean getHasMoreAfter() 获取<p>更新消息方向是否还有更多</p>
 * @method void setHasMoreAfter(boolean $HasMoreAfter) 设置<p>更新消息方向是否还有更多</p>
 * @method boolean getHasMoreBefore() 获取<p>更早消息方向是否还有更多</p>
 * @method void setHasMoreBefore(boolean $HasMoreBefore) 设置<p>更早消息方向是否还有更多</p>
 * @method string getLastRecordId() 获取<p>最后一个记录 ID</p>
 * @method void setLastRecordId(string $LastRecordId) 设置<p>最后一个记录 ID</p>
 * @method array getMessageList() 获取<p>消息列表</p>
 * @method void setMessageList(array $MessageList) 设置<p>消息列表</p>
 * @method array getMessages() 获取<p>消息列表</p>
 * @method void setMessages(array $Messages) 设置<p>消息列表</p>
 * @method ConversationResetInfo getResetInfo() 获取<p>最近一次重置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResetInfo(ConversationResetInfo $ResetInfo) 设置<p>最近一次重置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeConversationMessageListResponse extends AbstractModel
{
    /**
     * @var string <p>第一个记录 ID</p>
     */
    public $FirstRecordId;

    /**
     * @var boolean <p>更新消息方向是否还有更多</p>
     */
    public $HasMoreAfter;

    /**
     * @var boolean <p>更早消息方向是否还有更多</p>
     */
    public $HasMoreBefore;

    /**
     * @var string <p>最后一个记录 ID</p>
     */
    public $LastRecordId;

    /**
     * @var array <p>消息列表</p>
     */
    public $MessageList;

    /**
     * @var array <p>消息列表</p>
     * @deprecated
     */
    public $Messages;

    /**
     * @var ConversationResetInfo <p>最近一次重置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResetInfo;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $FirstRecordId <p>第一个记录 ID</p>
     * @param boolean $HasMoreAfter <p>更新消息方向是否还有更多</p>
     * @param boolean $HasMoreBefore <p>更早消息方向是否还有更多</p>
     * @param string $LastRecordId <p>最后一个记录 ID</p>
     * @param array $MessageList <p>消息列表</p>
     * @param array $Messages <p>消息列表</p>
     * @param ConversationResetInfo $ResetInfo <p>最近一次重置信息</p>
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
        if (array_key_exists("FirstRecordId",$param) and $param["FirstRecordId"] !== null) {
            $this->FirstRecordId = $param["FirstRecordId"];
        }

        if (array_key_exists("HasMoreAfter",$param) and $param["HasMoreAfter"] !== null) {
            $this->HasMoreAfter = $param["HasMoreAfter"];
        }

        if (array_key_exists("HasMoreBefore",$param) and $param["HasMoreBefore"] !== null) {
            $this->HasMoreBefore = $param["HasMoreBefore"];
        }

        if (array_key_exists("LastRecordId",$param) and $param["LastRecordId"] !== null) {
            $this->LastRecordId = $param["LastRecordId"];
        }

        if (array_key_exists("MessageList",$param) and $param["MessageList"] !== null) {
            $this->MessageList = [];
            foreach ($param["MessageList"] as $key => $value){
                $obj = new ConversationMessage();
                $obj->deserialize($value);
                array_push($this->MessageList, $obj);
            }
        }

        if (array_key_exists("Messages",$param) and $param["Messages"] !== null) {
            $this->Messages = [];
            foreach ($param["Messages"] as $key => $value){
                $obj = new ConversationMessage();
                $obj->deserialize($value);
                array_push($this->Messages, $obj);
            }
        }

        if (array_key_exists("ResetInfo",$param) and $param["ResetInfo"] !== null) {
            $this->ResetInfo = new ConversationResetInfo();
            $this->ResetInfo->deserialize($param["ResetInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
