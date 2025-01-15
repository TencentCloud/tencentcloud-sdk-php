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
 * GetThreadMessageList返回参数结构体
 *
 * @method array getData() 获取消息列表
 * @method void setData(array $Data) 设置消息列表
 * @method string getFirstID() 获取第一条消息 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstID(string $FirstID) 设置第一条消息 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLastID() 获取已废弃
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastID(integer $LastID) 设置已废弃
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHasMore() 获取是否还有更多消息
 * @method void setHasMore(boolean $HasMore) 设置是否还有更多消息
 * @method string getObject() 获取对象类型
 * @method void setObject(string $Object) 设置对象类型
 * @method string getFirstMsgID() 获取第一条消息 ID
 * @method void setFirstMsgID(string $FirstMsgID) 设置第一条消息 ID
 * @method string getLastMsgID() 获取最后一条消息 ID
 * @method void setLastMsgID(string $LastMsgID) 设置最后一条消息 ID
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
 */
class GetThreadMessageListResponse extends AbstractModel
{
    /**
     * @var array 消息列表
     */
    public $Data;

    /**
     * @var string 第一条消息 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $FirstID;

    /**
     * @var integer 已废弃
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $LastID;

    /**
     * @var boolean 是否还有更多消息
     */
    public $HasMore;

    /**
     * @var string 对象类型
     */
    public $Object;

    /**
     * @var string 第一条消息 ID
     */
    public $FirstMsgID;

    /**
     * @var string 最后一条消息 ID
     */
    public $LastMsgID;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
     */
    public $RequestId;

    /**
     * @param array $Data 消息列表
     * @param string $FirstID 第一条消息 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LastID 已废弃
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HasMore 是否还有更多消息
     * @param string $Object 对象类型
     * @param string $FirstMsgID 第一条消息 ID
     * @param string $LastMsgID 最后一条消息 ID
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new ThreadMessage();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("FirstID",$param) and $param["FirstID"] !== null) {
            $this->FirstID = $param["FirstID"];
        }

        if (array_key_exists("LastID",$param) and $param["LastID"] !== null) {
            $this->LastID = $param["LastID"];
        }

        if (array_key_exists("HasMore",$param) and $param["HasMore"] !== null) {
            $this->HasMore = $param["HasMore"];
        }

        if (array_key_exists("Object",$param) and $param["Object"] !== null) {
            $this->Object = $param["Object"];
        }

        if (array_key_exists("FirstMsgID",$param) and $param["FirstMsgID"] !== null) {
            $this->FirstMsgID = $param["FirstMsgID"];
        }

        if (array_key_exists("LastMsgID",$param) and $param["LastMsgID"] !== null) {
            $this->LastMsgID = $param["LastMsgID"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
