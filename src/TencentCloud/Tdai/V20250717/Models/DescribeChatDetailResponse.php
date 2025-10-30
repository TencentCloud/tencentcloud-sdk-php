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
namespace TencentCloud\Tdai\V20250717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeChatDetail返回参数结构体
 *
 * @method integer getAppId() 获取主账号ID
 * @method void setAppId(integer $AppId) 设置主账号ID
 * @method string getUin() 获取主账号Uin
 * @method void setUin(string $Uin) 设置主账号Uin
 * @method string getOwnerUin() 获取子账号Uin
 * @method void setOwnerUin(string $OwnerUin) 设置子账号Uin
 * @method string getInstanceId() 获取智能体实例ID
 * @method void setInstanceId(string $InstanceId) 设置智能体实例ID
 * @method string getChatId() 获取会话ID
 * @method void setChatId(string $ChatId) 设置会话ID
 * @method integer getLastStreamingTokenId() 获取最后一条流式TokenID
 * @method void setLastStreamingTokenId(integer $LastStreamingTokenId) 设置最后一条流式TokenID
 * @method integer getStreamingCount() 获取Streaming数量
 * @method void setStreamingCount(integer $StreamingCount) 设置Streaming数量
 * @method array getStreamings() 获取对话流列表
 * @method void setStreamings(array $Streamings) 设置对话流列表
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeChatDetailResponse extends AbstractModel
{
    /**
     * @var integer 主账号ID
     */
    public $AppId;

    /**
     * @var string 主账号Uin
     */
    public $Uin;

    /**
     * @var string 子账号Uin
     */
    public $OwnerUin;

    /**
     * @var string 智能体实例ID
     */
    public $InstanceId;

    /**
     * @var string 会话ID
     */
    public $ChatId;

    /**
     * @var integer 最后一条流式TokenID
     */
    public $LastStreamingTokenId;

    /**
     * @var integer Streaming数量
     */
    public $StreamingCount;

    /**
     * @var array 对话流列表
     */
    public $Streamings;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $AppId 主账号ID
     * @param string $Uin 主账号Uin
     * @param string $OwnerUin 子账号Uin
     * @param string $InstanceId 智能体实例ID
     * @param string $ChatId 会话ID
     * @param integer $LastStreamingTokenId 最后一条流式TokenID
     * @param integer $StreamingCount Streaming数量
     * @param array $Streamings 对话流列表
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ChatId",$param) and $param["ChatId"] !== null) {
            $this->ChatId = $param["ChatId"];
        }

        if (array_key_exists("LastStreamingTokenId",$param) and $param["LastStreamingTokenId"] !== null) {
            $this->LastStreamingTokenId = $param["LastStreamingTokenId"];
        }

        if (array_key_exists("StreamingCount",$param) and $param["StreamingCount"] !== null) {
            $this->StreamingCount = $param["StreamingCount"];
        }

        if (array_key_exists("Streamings",$param) and $param["Streamings"] !== null) {
            $this->Streamings = [];
            foreach ($param["Streamings"] as $key => $value){
                $obj = new ChatDetail();
                $obj->deserialize($value);
                array_push($this->Streamings, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
