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
 * 修改输入信息的参数。
 *
 * @method string getInputId() 获取输入Id。
 * @method void setInputId(string $InputId) 设置输入Id。
 * @method string getInputName() 获取输入名称。
 * @method void setInputName(string $InputName) 设置输入名称。
 * @method string getDescription() 获取输入描述。
 * @method void setDescription(string $Description) 设置输入描述。
 * @method array getAllowIpList() 获取允许的推流的IP，CIDR格式。
 * @method void setAllowIpList(array $AllowIpList) 设置允许的推流的IP，CIDR格式。
 * @method CreateInputSRTSettings getSRTSettings() 获取SRT的配置信息。
 * @method void setSRTSettings(CreateInputSRTSettings $SRTSettings) 设置SRT的配置信息。
 * @method CreateInputRTPSettings getRTPSettings() 获取RTP的配置信息。
 * @method void setRTPSettings(CreateInputRTPSettings $RTPSettings) 设置RTP的配置信息。
 * @method string getProtocol() 获取输入的协议，可选[SRT|RTP|RTMP]。
当输出包含RTP时，输入只能是RTP。
当输出包含RTMP时，输入可以是SRT/RTMP。
当输出包含SRT时，输入只能是SRT。
 * @method void setProtocol(string $Protocol) 设置输入的协议，可选[SRT|RTP|RTMP]。
当输出包含RTP时，输入只能是RTP。
当输出包含RTMP时，输入可以是SRT/RTMP。
当输出包含SRT时，输入只能是SRT。
 * @method string getFailOver() 获取输入的主备开关，可选[OPEN|CLOSE]。
 * @method void setFailOver(string $FailOver) 设置输入的主备开关，可选[OPEN|CLOSE]。
 * @method CreateInputRTMPPullSettings getRTMPPullSettings() 获取RTMP_PULL的配置信息。
 * @method void setRTMPPullSettings(CreateInputRTMPPullSettings $RTMPPullSettings) 设置RTMP_PULL的配置信息。
 * @method CreateInputRTSPPullSettings getRTSPPullSettings() 获取RTSP_PULL的配置信息。
 * @method void setRTSPPullSettings(CreateInputRTSPPullSettings $RTSPPullSettings) 设置RTSP_PULL的配置信息。
 * @method CreateInputHLSPullSettings getHLSPullSettings() 获取HLS_PULL的配置信息。
 * @method void setHLSPullSettings(CreateInputHLSPullSettings $HLSPullSettings) 设置HLS_PULL的配置信息。
 * @method ResilientStreamConf getResilientStream() 获取延播平滑吐流配置信息。
 * @method void setResilientStream(ResilientStreamConf $ResilientStream) 设置延播平滑吐流配置信息。
 */
class ModifyInput extends AbstractModel
{
    /**
     * @var string 输入Id。
     */
    public $InputId;

    /**
     * @var string 输入名称。
     */
    public $InputName;

    /**
     * @var string 输入描述。
     */
    public $Description;

    /**
     * @var array 允许的推流的IP，CIDR格式。
     */
    public $AllowIpList;

    /**
     * @var CreateInputSRTSettings SRT的配置信息。
     */
    public $SRTSettings;

    /**
     * @var CreateInputRTPSettings RTP的配置信息。
     */
    public $RTPSettings;

    /**
     * @var string 输入的协议，可选[SRT|RTP|RTMP]。
当输出包含RTP时，输入只能是RTP。
当输出包含RTMP时，输入可以是SRT/RTMP。
当输出包含SRT时，输入只能是SRT。
     */
    public $Protocol;

    /**
     * @var string 输入的主备开关，可选[OPEN|CLOSE]。
     */
    public $FailOver;

    /**
     * @var CreateInputRTMPPullSettings RTMP_PULL的配置信息。
     */
    public $RTMPPullSettings;

    /**
     * @var CreateInputRTSPPullSettings RTSP_PULL的配置信息。
     */
    public $RTSPPullSettings;

    /**
     * @var CreateInputHLSPullSettings HLS_PULL的配置信息。
     */
    public $HLSPullSettings;

    /**
     * @var ResilientStreamConf 延播平滑吐流配置信息。
     */
    public $ResilientStream;

    /**
     * @param string $InputId 输入Id。
     * @param string $InputName 输入名称。
     * @param string $Description 输入描述。
     * @param array $AllowIpList 允许的推流的IP，CIDR格式。
     * @param CreateInputSRTSettings $SRTSettings SRT的配置信息。
     * @param CreateInputRTPSettings $RTPSettings RTP的配置信息。
     * @param string $Protocol 输入的协议，可选[SRT|RTP|RTMP]。
当输出包含RTP时，输入只能是RTP。
当输出包含RTMP时，输入可以是SRT/RTMP。
当输出包含SRT时，输入只能是SRT。
     * @param string $FailOver 输入的主备开关，可选[OPEN|CLOSE]。
     * @param CreateInputRTMPPullSettings $RTMPPullSettings RTMP_PULL的配置信息。
     * @param CreateInputRTSPPullSettings $RTSPPullSettings RTSP_PULL的配置信息。
     * @param CreateInputHLSPullSettings $HLSPullSettings HLS_PULL的配置信息。
     * @param ResilientStreamConf $ResilientStream 延播平滑吐流配置信息。
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
        if (array_key_exists("InputId",$param) and $param["InputId"] !== null) {
            $this->InputId = $param["InputId"];
        }

        if (array_key_exists("InputName",$param) and $param["InputName"] !== null) {
            $this->InputName = $param["InputName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("AllowIpList",$param) and $param["AllowIpList"] !== null) {
            $this->AllowIpList = $param["AllowIpList"];
        }

        if (array_key_exists("SRTSettings",$param) and $param["SRTSettings"] !== null) {
            $this->SRTSettings = new CreateInputSRTSettings();
            $this->SRTSettings->deserialize($param["SRTSettings"]);
        }

        if (array_key_exists("RTPSettings",$param) and $param["RTPSettings"] !== null) {
            $this->RTPSettings = new CreateInputRTPSettings();
            $this->RTPSettings->deserialize($param["RTPSettings"]);
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("FailOver",$param) and $param["FailOver"] !== null) {
            $this->FailOver = $param["FailOver"];
        }

        if (array_key_exists("RTMPPullSettings",$param) and $param["RTMPPullSettings"] !== null) {
            $this->RTMPPullSettings = new CreateInputRTMPPullSettings();
            $this->RTMPPullSettings->deserialize($param["RTMPPullSettings"]);
        }

        if (array_key_exists("RTSPPullSettings",$param) and $param["RTSPPullSettings"] !== null) {
            $this->RTSPPullSettings = new CreateInputRTSPPullSettings();
            $this->RTSPPullSettings->deserialize($param["RTSPPullSettings"]);
        }

        if (array_key_exists("HLSPullSettings",$param) and $param["HLSPullSettings"] !== null) {
            $this->HLSPullSettings = new CreateInputHLSPullSettings();
            $this->HLSPullSettings->deserialize($param["HLSPullSettings"]);
        }

        if (array_key_exists("ResilientStream",$param) and $param["ResilientStream"] !== null) {
            $this->ResilientStream = new ResilientStreamConf();
            $this->ResilientStream->deserialize($param["ResilientStream"]);
        }
    }
}
