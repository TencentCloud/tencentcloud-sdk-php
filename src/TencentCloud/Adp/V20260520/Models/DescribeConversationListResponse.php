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
 * DescribeConversationList返回参数结构体
 *
 * @method array getConversationList() 获取<p>会话列表</p>
 * @method void setConversationList(array $ConversationList) 设置<p>会话列表</p>
 * @method array getConversations() 获取<p>会话列表</p>
 * @method void setConversations(array $Conversations) 设置<p>会话列表</p>
 * @method string getTotalCount() 获取<p>总数</p>
 * @method void setTotalCount(string $TotalCount) 设置<p>总数</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeConversationListResponse extends AbstractModel
{
    /**
     * @var array <p>会话列表</p>
     */
    public $ConversationList;

    /**
     * @var array <p>会话列表</p>
     */
    public $Conversations;

    /**
     * @var string <p>总数</p>
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $ConversationList <p>会话列表</p>
     * @param array $Conversations <p>会话列表</p>
     * @param string $TotalCount <p>总数</p>
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
        if (array_key_exists("ConversationList",$param) and $param["ConversationList"] !== null) {
            $this->ConversationList = [];
            foreach ($param["ConversationList"] as $key => $value){
                $obj = new Conversation();
                $obj->deserialize($value);
                array_push($this->ConversationList, $obj);
            }
        }

        if (array_key_exists("Conversations",$param) and $param["Conversations"] !== null) {
            $this->Conversations = [];
            foreach ($param["Conversations"] as $key => $value){
                $obj = new Conversation();
                $obj->deserialize($value);
                array_push($this->Conversations, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
