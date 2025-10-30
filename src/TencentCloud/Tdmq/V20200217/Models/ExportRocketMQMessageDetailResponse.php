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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportRocketMQMessageDetail返回参数结构体
 *
 * @method string getMsgId() 获取消息id
 * @method void setMsgId(string $MsgId) 设置消息id
 * @method integer getBornTimestamp() 获取消息生成时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBornTimestamp(integer $BornTimestamp) 设置消息生成时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStoreTimestamp() 获取消息存储时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStoreTimestamp(integer $StoreTimestamp) 设置消息存储时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBornHost() 获取消息生产客户端地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBornHost(string $BornHost) 设置消息生产客户端地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMsgTag() 获取消息Tag
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsgTag(string $MsgTag) 设置消息Tag
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMsgKey() 获取消息Key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsgKey(string $MsgKey) 设置消息Key
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProperties() 获取消息属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProperties(string $Properties) 设置消息属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReConsumeTimes() 获取消息重试次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReConsumeTimes(integer $ReConsumeTimes) 设置消息重试次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMsgBody() 获取Base64编码格式字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsgBody(string $MsgBody) 设置Base64编码格式字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMsgBodyCRC() 获取消息内容的CRC32 Code
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsgBodyCRC(integer $MsgBodyCRC) 设置消息内容的CRC32 Code
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMsgBodySize() 获取消息体大小（单位K）
当大于2048时不返回消息
 * @method void setMsgBodySize(integer $MsgBodySize) 设置消息体大小（单位K）
当大于2048时不返回消息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ExportRocketMQMessageDetailResponse extends AbstractModel
{
    /**
     * @var string 消息id
     */
    public $MsgId;

    /**
     * @var integer 消息生成时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BornTimestamp;

    /**
     * @var integer 消息存储时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StoreTimestamp;

    /**
     * @var string 消息生产客户端地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BornHost;

    /**
     * @var string 消息Tag
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MsgTag;

    /**
     * @var string 消息Key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MsgKey;

    /**
     * @var string 消息属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Properties;

    /**
     * @var integer 消息重试次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReConsumeTimes;

    /**
     * @var string Base64编码格式字符串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MsgBody;

    /**
     * @var integer 消息内容的CRC32 Code
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MsgBodyCRC;

    /**
     * @var integer 消息体大小（单位K）
当大于2048时不返回消息
     */
    public $MsgBodySize;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $MsgId 消息id
     * @param integer $BornTimestamp 消息生成时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StoreTimestamp 消息存储时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BornHost 消息生产客户端地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MsgTag 消息Tag
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MsgKey 消息Key
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Properties 消息属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReConsumeTimes 消息重试次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MsgBody Base64编码格式字符串
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MsgBodyCRC 消息内容的CRC32 Code
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MsgBodySize 消息体大小（单位K）
当大于2048时不返回消息
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
        if (array_key_exists("MsgId",$param) and $param["MsgId"] !== null) {
            $this->MsgId = $param["MsgId"];
        }

        if (array_key_exists("BornTimestamp",$param) and $param["BornTimestamp"] !== null) {
            $this->BornTimestamp = $param["BornTimestamp"];
        }

        if (array_key_exists("StoreTimestamp",$param) and $param["StoreTimestamp"] !== null) {
            $this->StoreTimestamp = $param["StoreTimestamp"];
        }

        if (array_key_exists("BornHost",$param) and $param["BornHost"] !== null) {
            $this->BornHost = $param["BornHost"];
        }

        if (array_key_exists("MsgTag",$param) and $param["MsgTag"] !== null) {
            $this->MsgTag = $param["MsgTag"];
        }

        if (array_key_exists("MsgKey",$param) and $param["MsgKey"] !== null) {
            $this->MsgKey = $param["MsgKey"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = $param["Properties"];
        }

        if (array_key_exists("ReConsumeTimes",$param) and $param["ReConsumeTimes"] !== null) {
            $this->ReConsumeTimes = $param["ReConsumeTimes"];
        }

        if (array_key_exists("MsgBody",$param) and $param["MsgBody"] !== null) {
            $this->MsgBody = $param["MsgBody"];
        }

        if (array_key_exists("MsgBodyCRC",$param) and $param["MsgBodyCRC"] !== null) {
            $this->MsgBodyCRC = $param["MsgBodyCRC"];
        }

        if (array_key_exists("MsgBodySize",$param) and $param["MsgBodySize"] !== null) {
            $this->MsgBodySize = $param["MsgBodySize"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
