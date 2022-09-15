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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HandleStreamConnectProject返回参数结构体
 *
 * @method string getStreamInputRtmpPushUrl() 获取输入源推流地址，当 Operation 取值 AddInput 且 InputType 为 RtmpPush 类型时有效。
 * @method void setStreamInputRtmpPushUrl(string $StreamInputRtmpPushUrl) 设置输入源推流地址，当 Operation 取值 AddInput 且 InputType 为 RtmpPush 类型时有效。
 * @method VodPullInputPlayInfo getVodPullInputPlayInfo() 获取点播输入源播放进度信息，当 Operation 取值 DescribeInputPlayInfo 且 InputType 为 VodPull 类型时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVodPullInputPlayInfo(VodPullInputPlayInfo $VodPullInputPlayInfo) 设置点播输入源播放进度信息，当 Operation 取值 DescribeInputPlayInfo 且 InputType 为 VodPull 类型时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class HandleStreamConnectProjectResponse extends AbstractModel
{
    /**
     * @var string 输入源推流地址，当 Operation 取值 AddInput 且 InputType 为 RtmpPush 类型时有效。
     */
    public $StreamInputRtmpPushUrl;

    /**
     * @var VodPullInputPlayInfo 点播输入源播放进度信息，当 Operation 取值 DescribeInputPlayInfo 且 InputType 为 VodPull 类型时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VodPullInputPlayInfo;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $StreamInputRtmpPushUrl 输入源推流地址，当 Operation 取值 AddInput 且 InputType 为 RtmpPush 类型时有效。
     * @param VodPullInputPlayInfo $VodPullInputPlayInfo 点播输入源播放进度信息，当 Operation 取值 DescribeInputPlayInfo 且 InputType 为 VodPull 类型时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("StreamInputRtmpPushUrl",$param) and $param["StreamInputRtmpPushUrl"] !== null) {
            $this->StreamInputRtmpPushUrl = $param["StreamInputRtmpPushUrl"];
        }

        if (array_key_exists("VodPullInputPlayInfo",$param) and $param["VodPullInputPlayInfo"] !== null) {
            $this->VodPullInputPlayInfo = new VodPullInputPlayInfo();
            $this->VodPullInputPlayInfo->deserialize($param["VodPullInputPlayInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
