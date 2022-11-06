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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 传输流的媒体数据。
 *
 * @method integer getTimestamp() 获取时间戳，单位是秒。
 * @method void setTimestamp(integer $Timestamp) 设置时间戳，单位是秒。
 * @method integer getNetwork() 获取总带宽。
 * @method void setNetwork(integer $Network) 设置总带宽。
 * @method array getVideo() 获取传输流的视频数据。
 * @method void setVideo(array $Video) 设置传输流的视频数据。
 * @method array getAudio() 获取传输流的音频数据。
 * @method void setAudio(array $Audio) 设置传输流的音频数据。
 * @method string getSessionId() 获取标志同一次推流。
 * @method void setSessionId(string $SessionId) 设置标志同一次推流。
 * @method string getClientIp() 获取客户端IP。
 * @method void setClientIp(string $ClientIp) 设置客户端IP。
 */
class FlowMediaInfo extends AbstractModel
{
    /**
     * @var integer 时间戳，单位是秒。
     */
    public $Timestamp;

    /**
     * @var integer 总带宽。
     */
    public $Network;

    /**
     * @var array 传输流的视频数据。
     */
    public $Video;

    /**
     * @var array 传输流的音频数据。
     */
    public $Audio;

    /**
     * @var string 标志同一次推流。
     */
    public $SessionId;

    /**
     * @var string 客户端IP。
     */
    public $ClientIp;

    /**
     * @param integer $Timestamp 时间戳，单位是秒。
     * @param integer $Network 总带宽。
     * @param array $Video 传输流的视频数据。
     * @param array $Audio 传输流的音频数据。
     * @param string $SessionId 标志同一次推流。
     * @param string $ClientIp 客户端IP。
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Network",$param) and $param["Network"] !== null) {
            $this->Network = $param["Network"];
        }

        if (array_key_exists("Video",$param) and $param["Video"] !== null) {
            $this->Video = [];
            foreach ($param["Video"] as $key => $value){
                $obj = new FlowMediaVideo();
                $obj->deserialize($value);
                array_push($this->Video, $obj);
            }
        }

        if (array_key_exists("Audio",$param) and $param["Audio"] !== null) {
            $this->Audio = [];
            foreach ($param["Audio"] as $key => $value){
                $obj = new FlowMediaAudio();
                $obj->deserialize($value);
                array_push($this->Audio, $obj);
            }
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }
    }
}
