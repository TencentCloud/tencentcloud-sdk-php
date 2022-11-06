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
 * 流的统计数据。
 *
 * @method string getSessionId() 获取会话Id。
 * @method void setSessionId(string $SessionId) 设置会话Id。
 * @method string getClientIp() 获取对端IP。
 * @method void setClientIp(string $ClientIp) 设置对端IP。
 * @method integer getNetwork() 获取总带宽。
 * @method void setNetwork(integer $Network) 设置总带宽。
 * @method array getVideo() 获取视频数据。
 * @method void setVideo(array $Video) 设置视频数据。
 * @method array getAudio() 获取音频数据。
 * @method void setAudio(array $Audio) 设置音频数据。
 */
class FlowStatistics extends AbstractModel
{
    /**
     * @var string 会话Id。
     */
    public $SessionId;

    /**
     * @var string 对端IP。
     */
    public $ClientIp;

    /**
     * @var integer 总带宽。
     */
    public $Network;

    /**
     * @var array 视频数据。
     */
    public $Video;

    /**
     * @var array 音频数据。
     */
    public $Audio;

    /**
     * @param string $SessionId 会话Id。
     * @param string $ClientIp 对端IP。
     * @param integer $Network 总带宽。
     * @param array $Video 视频数据。
     * @param array $Audio 音频数据。
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
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("Network",$param) and $param["Network"] !== null) {
            $this->Network = $param["Network"];
        }

        if (array_key_exists("Video",$param) and $param["Video"] !== null) {
            $this->Video = [];
            foreach ($param["Video"] as $key => $value){
                $obj = new FlowVideo();
                $obj->deserialize($value);
                array_push($this->Video, $obj);
            }
        }

        if (array_key_exists("Audio",$param) and $param["Audio"] !== null) {
            $this->Audio = [];
            foreach ($param["Audio"] as $key => $value){
                $obj = new FlowAudio();
                $obj->deserialize($value);
                array_push($this->Audio, $obj);
            }
        }
    }
}
