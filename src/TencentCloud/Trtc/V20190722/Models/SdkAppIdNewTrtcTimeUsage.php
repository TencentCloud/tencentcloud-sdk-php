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
 * SdkAppId级别实时音视频的用量数据
 *
 * @method string getSdkAppId() 获取SdkAppId的值。
 * @method void setSdkAppId(string $SdkAppId) 设置SdkAppId的值。
 * @method array getTrtcTimeUsages() 获取统计的时间点数据。
 * @method void setTrtcTimeUsages(array $TrtcTimeUsages) 设置统计的时间点数据。
 * @method array getAudienceTrtcTimeUsages() 获取统计的麦下用量的时间点数据。
 * @method void setAudienceTrtcTimeUsages(array $AudienceTrtcTimeUsages) 设置统计的麦下用量的时间点数据。
 */
class SdkAppIdNewTrtcTimeUsage extends AbstractModel
{
    /**
     * @var string SdkAppId的值。
     */
    public $SdkAppId;

    /**
     * @var array 统计的时间点数据。
     */
    public $TrtcTimeUsages;

    /**
     * @var array 统计的麦下用量的时间点数据。
     */
    public $AudienceTrtcTimeUsages;

    /**
     * @param string $SdkAppId SdkAppId的值。
     * @param array $TrtcTimeUsages 统计的时间点数据。
     * @param array $AudienceTrtcTimeUsages 统计的麦下用量的时间点数据。
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("TrtcTimeUsages",$param) and $param["TrtcTimeUsages"] !== null) {
            $this->TrtcTimeUsages = [];
            foreach ($param["TrtcTimeUsages"] as $key => $value){
                $obj = new TrtcTimeNewUsage();
                $obj->deserialize($value);
                array_push($this->TrtcTimeUsages, $obj);
            }
        }

        if (array_key_exists("AudienceTrtcTimeUsages",$param) and $param["AudienceTrtcTimeUsages"] !== null) {
            $this->AudienceTrtcTimeUsages = [];
            foreach ($param["AudienceTrtcTimeUsages"] as $key => $value){
                $obj = new TrtcTimeNewUsage();
                $obj->deserialize($value);
                array_push($this->AudienceTrtcTimeUsages, $obj);
            }
        }
    }
}
