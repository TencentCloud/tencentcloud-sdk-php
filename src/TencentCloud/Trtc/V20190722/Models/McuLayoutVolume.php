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
 * 音量布局SEI参数，可以自定义AppData和PayloadType类型。
该参数内容可以为空，表示携带默认的音量布局SEI。
 *
 * @method string getAppData() 获取AppData的内容，会被写入自定义SEI中的app_data字段，长度需小于4096。
 * @method void setAppData(string $AppData) 设置AppData的内容，会被写入自定义SEI中的app_data字段，长度需小于4096。
 * @method integer getPayloadType() 获取SEI消息的payload_type，默认值100，取值范围100-254（244除外，244为我们内部自定义的时间戳SEI）
 * @method void setPayloadType(integer $PayloadType) 设置SEI消息的payload_type，默认值100，取值范围100-254（244除外，244为我们内部自定义的时间戳SEI）
 * @method integer getInterval() 获取SEI发送间隔，单位毫秒，默认值为1000。
 * @method void setInterval(integer $Interval) 设置SEI发送间隔，单位毫秒，默认值为1000。
 * @method integer getFollowIdr() 获取取值范围[0,1]，填1：发送关键帧时会确保带SEI；填0：发送关键帧时不确保带SEI。默认值为0。
 * @method void setFollowIdr(integer $FollowIdr) 设置取值范围[0,1]，填1：发送关键帧时会确保带SEI；填0：发送关键帧时不确保带SEI。默认值为0。
 */
class McuLayoutVolume extends AbstractModel
{
    /**
     * @var string AppData的内容，会被写入自定义SEI中的app_data字段，长度需小于4096。
     */
    public $AppData;

    /**
     * @var integer SEI消息的payload_type，默认值100，取值范围100-254（244除外，244为我们内部自定义的时间戳SEI）
     */
    public $PayloadType;

    /**
     * @var integer SEI发送间隔，单位毫秒，默认值为1000。
     */
    public $Interval;

    /**
     * @var integer 取值范围[0,1]，填1：发送关键帧时会确保带SEI；填0：发送关键帧时不确保带SEI。默认值为0。
     */
    public $FollowIdr;

    /**
     * @param string $AppData AppData的内容，会被写入自定义SEI中的app_data字段，长度需小于4096。
     * @param integer $PayloadType SEI消息的payload_type，默认值100，取值范围100-254（244除外，244为我们内部自定义的时间戳SEI）
     * @param integer $Interval SEI发送间隔，单位毫秒，默认值为1000。
     * @param integer $FollowIdr 取值范围[0,1]，填1：发送关键帧时会确保带SEI；填0：发送关键帧时不确保带SEI。默认值为0。
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
        if (array_key_exists("AppData",$param) and $param["AppData"] !== null) {
            $this->AppData = $param["AppData"];
        }

        if (array_key_exists("PayloadType",$param) and $param["PayloadType"] !== null) {
            $this->PayloadType = $param["PayloadType"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("FollowIdr",$param) and $param["FollowIdr"] !== null) {
            $this->FollowIdr = $param["FollowIdr"];
        }
    }
}
