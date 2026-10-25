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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTDEMSSESummary返回参数结构体
 *
 * @method integer getConversationCount() 获取<p>对话次数。一条大模型对话对应一条 sse_call。</p>
 * @method void setConversationCount(integer $ConversationCount) 设置<p>对话次数。一条大模型对话对应一条 sse_call。</p>
 * @method integer getTotalTokenCount() 获取<p>token 总数。对话次数为 0 时为 0。</p>
 * @method void setTotalTokenCount(integer $TotalTokenCount) 设置<p>token 总数。对话次数为 0 时为 0。</p>
 * @method float getTokenThroughput() 获取<p>token 吞吐率，单位 token/秒。对话次数为 0 时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTokenThroughput(float $TokenThroughput) 设置<p>token 吞吐率，单位 token/秒。对话次数为 0 时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getFirstMessageDelay() 获取<p>首次消息时延，单位毫秒。对话次数为 0 时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstMessageDelay(float $FirstMessageDelay) 设置<p>首次消息时延，单位毫秒。对话次数为 0 时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getErrorRate() 获取<p>错误率，已乘 100。对话次数为 0 时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorRate(float $ErrorRate) 设置<p>错误率，已乘 100。对话次数为 0 时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getStallRate() 获取<p>卡死率，已乘 100。对话次数为 0 时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStallRate(float $StallRate) 设置<p>卡死率，已乘 100。对话次数为 0 时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getFluency() 获取<p>流畅度，已乘 100。对话次数为 0 时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFluency(float $Fluency) 设置<p>流畅度，已乘 100。对话次数为 0 时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTDEMSSESummaryResponse extends AbstractModel
{
    /**
     * @var integer <p>对话次数。一条大模型对话对应一条 sse_call。</p>
     */
    public $ConversationCount;

    /**
     * @var integer <p>token 总数。对话次数为 0 时为 0。</p>
     */
    public $TotalTokenCount;

    /**
     * @var float <p>token 吞吐率，单位 token/秒。对话次数为 0 时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TokenThroughput;

    /**
     * @var float <p>首次消息时延，单位毫秒。对话次数为 0 时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstMessageDelay;

    /**
     * @var float <p>错误率，已乘 100。对话次数为 0 时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorRate;

    /**
     * @var float <p>卡死率，已乘 100。对话次数为 0 时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StallRate;

    /**
     * @var float <p>流畅度，已乘 100。对话次数为 0 时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Fluency;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ConversationCount <p>对话次数。一条大模型对话对应一条 sse_call。</p>
     * @param integer $TotalTokenCount <p>token 总数。对话次数为 0 时为 0。</p>
     * @param float $TokenThroughput <p>token 吞吐率，单位 token/秒。对话次数为 0 时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $FirstMessageDelay <p>首次消息时延，单位毫秒。对话次数为 0 时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $ErrorRate <p>错误率，已乘 100。对话次数为 0 时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $StallRate <p>卡死率，已乘 100。对话次数为 0 时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Fluency <p>流畅度，已乘 100。对话次数为 0 时为 null。</p>
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
        if (array_key_exists("ConversationCount",$param) and $param["ConversationCount"] !== null) {
            $this->ConversationCount = $param["ConversationCount"];
        }

        if (array_key_exists("TotalTokenCount",$param) and $param["TotalTokenCount"] !== null) {
            $this->TotalTokenCount = $param["TotalTokenCount"];
        }

        if (array_key_exists("TokenThroughput",$param) and $param["TokenThroughput"] !== null) {
            $this->TokenThroughput = $param["TokenThroughput"];
        }

        if (array_key_exists("FirstMessageDelay",$param) and $param["FirstMessageDelay"] !== null) {
            $this->FirstMessageDelay = $param["FirstMessageDelay"];
        }

        if (array_key_exists("ErrorRate",$param) and $param["ErrorRate"] !== null) {
            $this->ErrorRate = $param["ErrorRate"];
        }

        if (array_key_exists("StallRate",$param) and $param["StallRate"] !== null) {
            $this->StallRate = $param["StallRate"];
        }

        if (array_key_exists("Fluency",$param) and $param["Fluency"] !== null) {
            $this->Fluency = $param["Fluency"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
