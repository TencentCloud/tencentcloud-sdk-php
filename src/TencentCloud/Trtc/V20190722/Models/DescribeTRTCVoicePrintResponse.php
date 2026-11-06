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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTRTCVoicePrint返回参数结构体
 *
 * @method integer getTotalCount() 获取当前 (AppId, SdkAppId) 下的声纹总数（仅计活跃状态）
 * @method void setTotalCount(integer $TotalCount) 设置当前 (AppId, SdkAppId) 下的声纹总数（仅计活跃状态）
 * @method array getVoicePrintList() 获取声纹条目列表，元素为 TRTCVoicePrintItem 结构：{ VoicePrintId:string, SpeakerId:string, CreateTime:string(ISO8601), UpdateTime:string(ISO8601) }。
 * @method void setVoicePrintList(array $VoicePrintList) 设置声纹条目列表，元素为 TRTCVoicePrintItem 结构：{ VoicePrintId:string, SpeakerId:string, CreateTime:string(ISO8601), UpdateTime:string(ISO8601) }。
 * @method string getMessage() 获取结果描述，成功时为 query voiceprint list successfully
 * @method void setMessage(string $Message) 设置结果描述，成功时为 query voiceprint list successfully
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTRTCVoicePrintResponse extends AbstractModel
{
    /**
     * @var integer 当前 (AppId, SdkAppId) 下的声纹总数（仅计活跃状态）
     */
    public $TotalCount;

    /**
     * @var array 声纹条目列表，元素为 TRTCVoicePrintItem 结构：{ VoicePrintId:string, SpeakerId:string, CreateTime:string(ISO8601), UpdateTime:string(ISO8601) }。
     */
    public $VoicePrintList;

    /**
     * @var string 结果描述，成功时为 query voiceprint list successfully
     */
    public $Message;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 当前 (AppId, SdkAppId) 下的声纹总数（仅计活跃状态）
     * @param array $VoicePrintList 声纹条目列表，元素为 TRTCVoicePrintItem 结构：{ VoicePrintId:string, SpeakerId:string, CreateTime:string(ISO8601), UpdateTime:string(ISO8601) }。
     * @param string $Message 结果描述，成功时为 query voiceprint list successfully
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("VoicePrintList",$param) and $param["VoicePrintList"] !== null) {
            $this->VoicePrintList = [];
            foreach ($param["VoicePrintList"] as $key => $value){
                $obj = new TRTCVoicePrintItem();
                $obj->deserialize($value);
                array_push($this->VoicePrintList, $obj);
            }
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
