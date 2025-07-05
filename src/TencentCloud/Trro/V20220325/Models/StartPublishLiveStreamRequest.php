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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StartPublishLiveStream请求参数结构体
 *
 * @method integer getWithTranscoding() 获取是否转码，0表示无需转码，1表示需要转码。是否收取转码费是由WithTranscoding参数决定的，WithTranscoding为0，表示旁路转推，不会收取转码费用，WithTranscoding为1，表示混流转推，会收取转码费用。 示例值：1
 * @method void setWithTranscoding(integer $WithTranscoding) 设置是否转码，0表示无需转码，1表示需要转码。是否收取转码费是由WithTranscoding参数决定的，WithTranscoding为0，表示旁路转推，不会收取转码费用，WithTranscoding为1，表示混流转推，会收取转码费用。 示例值：1
 * @method integer getMaxIdleTime() 获取所有参与混流转推的主播持续离开TRTC房间或切换成观众超过MaxIdleTime的时长，自动停止转推，单位：秒。默认值为 30 秒，该值需大于等于 5秒，且小于等于 86400秒(24小时)。
 * @method void setMaxIdleTime(integer $MaxIdleTime) 设置所有参与混流转推的主播持续离开TRTC房间或切换成观众超过MaxIdleTime的时长，自动停止转推，单位：秒。默认值为 30 秒，该值需大于等于 5秒，且小于等于 86400秒(24小时)。
 * @method VideoParams getVideoParams() 获取转推视频参数
 * @method void setVideoParams(VideoParams $VideoParams) 设置转推视频参数
 * @method array getPublishParams() 获取转推的URL参数，一个任务最多支持10个推流URL
 * @method void setPublishParams(array $PublishParams) 设置转推的URL参数，一个任务最多支持10个推流URL
 */
class StartPublishLiveStreamRequest extends AbstractModel
{
    /**
     * @var integer 是否转码，0表示无需转码，1表示需要转码。是否收取转码费是由WithTranscoding参数决定的，WithTranscoding为0，表示旁路转推，不会收取转码费用，WithTranscoding为1，表示混流转推，会收取转码费用。 示例值：1
     */
    public $WithTranscoding;

    /**
     * @var integer 所有参与混流转推的主播持续离开TRTC房间或切换成观众超过MaxIdleTime的时长，自动停止转推，单位：秒。默认值为 30 秒，该值需大于等于 5秒，且小于等于 86400秒(24小时)。
     */
    public $MaxIdleTime;

    /**
     * @var VideoParams 转推视频参数
     */
    public $VideoParams;

    /**
     * @var array 转推的URL参数，一个任务最多支持10个推流URL
     */
    public $PublishParams;

    /**
     * @param integer $WithTranscoding 是否转码，0表示无需转码，1表示需要转码。是否收取转码费是由WithTranscoding参数决定的，WithTranscoding为0，表示旁路转推，不会收取转码费用，WithTranscoding为1，表示混流转推，会收取转码费用。 示例值：1
     * @param integer $MaxIdleTime 所有参与混流转推的主播持续离开TRTC房间或切换成观众超过MaxIdleTime的时长，自动停止转推，单位：秒。默认值为 30 秒，该值需大于等于 5秒，且小于等于 86400秒(24小时)。
     * @param VideoParams $VideoParams 转推视频参数
     * @param array $PublishParams 转推的URL参数，一个任务最多支持10个推流URL
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
        if (array_key_exists("WithTranscoding",$param) and $param["WithTranscoding"] !== null) {
            $this->WithTranscoding = $param["WithTranscoding"];
        }

        if (array_key_exists("MaxIdleTime",$param) and $param["MaxIdleTime"] !== null) {
            $this->MaxIdleTime = $param["MaxIdleTime"];
        }

        if (array_key_exists("VideoParams",$param) and $param["VideoParams"] !== null) {
            $this->VideoParams = new VideoParams();
            $this->VideoParams->deserialize($param["VideoParams"]);
        }

        if (array_key_exists("PublishParams",$param) and $param["PublishParams"] !== null) {
            $this->PublishParams = [];
            foreach ($param["PublishParams"] as $key => $value){
                $obj = new PublishParams();
                $obj->deserialize($value);
                array_push($this->PublishParams, $obj);
            }
        }
    }
}
