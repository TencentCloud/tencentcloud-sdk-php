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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeExternalTrtcMeasure返回参数结构体
 *
 * @method array getSdkAppIdTrtrTimeUsages() 获取每个SdkAppId的时长使用信息
 * @method void setSdkAppIdTrtrTimeUsages(array $SdkAppIdTrtrTimeUsages) 设置每个SdkAppId的时长使用信息
 * @method string getAnchorUsageMode() 获取主播的用量统计方式。取值"InRoomTime":房间时长,"SubscribeTime":"订阅时长","Bandwidth":带宽
 * @method void setAnchorUsageMode(string $AnchorUsageMode) 设置主播的用量统计方式。取值"InRoomTime":房间时长,"SubscribeTime":"订阅时长","Bandwidth":带宽
 * @method string getAudienceUsageMode() 获取观众的用量统计方式。取值"InRoomTime":在房间时长,"SubscribeTime":"订阅时长","Bandwidth":带宽,"MergeWithAnchor":"不区分麦上麦下"
 * @method void setAudienceUsageMode(string $AudienceUsageMode) 设置观众的用量统计方式。取值"InRoomTime":在房间时长,"SubscribeTime":"订阅时长","Bandwidth":带宽,"MergeWithAnchor":"不区分麦上麦下"
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeExternalTrtcMeasureResponse extends AbstractModel
{
    /**
     * @var array 每个SdkAppId的时长使用信息
     */
    public $SdkAppIdTrtrTimeUsages;

    /**
     * @var string 主播的用量统计方式。取值"InRoomTime":房间时长,"SubscribeTime":"订阅时长","Bandwidth":带宽
     */
    public $AnchorUsageMode;

    /**
     * @var string 观众的用量统计方式。取值"InRoomTime":在房间时长,"SubscribeTime":"订阅时长","Bandwidth":带宽,"MergeWithAnchor":"不区分麦上麦下"
     */
    public $AudienceUsageMode;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $SdkAppIdTrtrTimeUsages 每个SdkAppId的时长使用信息
     * @param string $AnchorUsageMode 主播的用量统计方式。取值"InRoomTime":房间时长,"SubscribeTime":"订阅时长","Bandwidth":带宽
     * @param string $AudienceUsageMode 观众的用量统计方式。取值"InRoomTime":在房间时长,"SubscribeTime":"订阅时长","Bandwidth":带宽,"MergeWithAnchor":"不区分麦上麦下"
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
        if (array_key_exists("SdkAppIdTrtrTimeUsages",$param) and $param["SdkAppIdTrtrTimeUsages"] !== null) {
            $this->SdkAppIdTrtrTimeUsages = [];
            foreach ($param["SdkAppIdTrtrTimeUsages"] as $key => $value){
                $obj = new SdkAppIdNewTrtcTimeUsage();
                $obj->deserialize($value);
                array_push($this->SdkAppIdTrtrTimeUsages, $obj);
            }
        }

        if (array_key_exists("AnchorUsageMode",$param) and $param["AnchorUsageMode"] !== null) {
            $this->AnchorUsageMode = $param["AnchorUsageMode"];
        }

        if (array_key_exists("AudienceUsageMode",$param) and $param["AudienceUsageMode"] !== null) {
            $this->AudienceUsageMode = $param["AudienceUsageMode"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
