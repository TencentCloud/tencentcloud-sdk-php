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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建输出的配置信息。
 *
 * @method string getOutputName() 获取输出的名称。
 * @method void setOutputName(string $OutputName) 设置输出的名称。
 * @method string getDescription() 获取输出描述。
 * @method void setDescription(string $Description) 设置输出描述。
 * @method string getProtocol() 获取输出的转推协议，支持SRT|RTP|RTMP|RTMP_PULL|RTSP_PULL|RIST。
 * @method void setProtocol(string $Protocol) 设置输出的转推协议，支持SRT|RTP|RTMP|RTMP_PULL|RTSP_PULL|RIST。
 * @method string getOutputRegion() 获取输出地区。
 * @method void setOutputRegion(string $OutputRegion) 设置输出地区。
 * @method string getOutputType() 获取输出类型：Internet/TencentCSS
 * @method void setOutputType(string $OutputType) 设置输出类型：Internet/TencentCSS
 * @method string getOutputKind() 获取输出模块类型，包括Pinpoint（单点输出，最多支持四路并发输出）；MultiMesh（多路输出，支持大于四路的并发输出，目前可以达到200路）。默认类型为 Pinpoint 输出。对于单个 Flow 一个区域最多只能有一个 MultiMesh 输出
 * @method void setOutputKind(string $OutputKind) 设置输出模块类型，包括Pinpoint（单点输出，最多支持四路并发输出）；MultiMesh（多路输出，支持大于四路的并发输出，目前可以达到200路）。默认类型为 Pinpoint 输出。对于单个 Flow 一个区域最多只能有一个 MultiMesh 输出
 * @method CreateOutputSRTSettings getSRTSettings() 获取输出的SRT的配置。
 * @method void setSRTSettings(CreateOutputSRTSettings $SRTSettings) 设置输出的SRT的配置。
 * @method CreateOutputRTMPSettings getRTMPSettings() 获取输出的RTMP的配置。
 * @method void setRTMPSettings(CreateOutputRTMPSettings $RTMPSettings) 设置输出的RTMP的配置。
 * @method CreateOutputInfoRTPSettings getRTPSettings() 获取输出的RTP的配置。
 * @method void setRTPSettings(CreateOutputInfoRTPSettings $RTPSettings) 设置输出的RTP的配置。
 * @method array getAllowIpList() 获取IP白名单列表，格式为CIDR，如0.0.0.0/0。
当Protocol为RTMP_PULL有效，为空代表不限制客户端IP。
 * @method void setAllowIpList(array $AllowIpList) 设置IP白名单列表，格式为CIDR，如0.0.0.0/0。
当Protocol为RTMP_PULL有效，为空代表不限制客户端IP。
 * @method integer getMaxConcurrent() 获取最大拉流并发数，最大4，默认4。
 * @method void setMaxConcurrent(integer $MaxConcurrent) 设置最大拉流并发数，最大4，默认4。
 * @method array getSecurityGroupIds() 获取绑定的输入安全组 ID。 
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置绑定的输入安全组 ID。 
 * @method array getZones() 获取可用区，output最多只支持输入一个可用区。	
 * @method void setZones(array $Zones) 设置可用区，output最多只支持输入一个可用区。	
 * @method CreateOutputRistSettings getRISTSettings() 获取输出的RIST的配置。
 * @method void setRISTSettings(CreateOutputRistSettings $RISTSettings) 设置输出的RIST的配置。
 * @method PidSelector getPidSelector() 获取对于含有多个音/视频轨的流，可以指定需要使用的轨道
 * @method void setPidSelector(PidSelector $PidSelector) 设置对于含有多个音/视频轨的流，可以指定需要使用的轨道
 */
class CreateOutputInfo extends AbstractModel
{
    /**
     * @var string 输出的名称。
     */
    public $OutputName;

    /**
     * @var string 输出描述。
     */
    public $Description;

    /**
     * @var string 输出的转推协议，支持SRT|RTP|RTMP|RTMP_PULL|RTSP_PULL|RIST。
     */
    public $Protocol;

    /**
     * @var string 输出地区。
     */
    public $OutputRegion;

    /**
     * @var string 输出类型：Internet/TencentCSS
     */
    public $OutputType;

    /**
     * @var string 输出模块类型，包括Pinpoint（单点输出，最多支持四路并发输出）；MultiMesh（多路输出，支持大于四路的并发输出，目前可以达到200路）。默认类型为 Pinpoint 输出。对于单个 Flow 一个区域最多只能有一个 MultiMesh 输出
     */
    public $OutputKind;

    /**
     * @var CreateOutputSRTSettings 输出的SRT的配置。
     */
    public $SRTSettings;

    /**
     * @var CreateOutputRTMPSettings 输出的RTMP的配置。
     */
    public $RTMPSettings;

    /**
     * @var CreateOutputInfoRTPSettings 输出的RTP的配置。
     */
    public $RTPSettings;

    /**
     * @var array IP白名单列表，格式为CIDR，如0.0.0.0/0。
当Protocol为RTMP_PULL有效，为空代表不限制客户端IP。
     */
    public $AllowIpList;

    /**
     * @var integer 最大拉流并发数，最大4，默认4。
     */
    public $MaxConcurrent;

    /**
     * @var array 绑定的输入安全组 ID。 
     */
    public $SecurityGroupIds;

    /**
     * @var array 可用区，output最多只支持输入一个可用区。	
     */
    public $Zones;

    /**
     * @var CreateOutputRistSettings 输出的RIST的配置。
     */
    public $RISTSettings;

    /**
     * @var PidSelector 对于含有多个音/视频轨的流，可以指定需要使用的轨道
     */
    public $PidSelector;

    /**
     * @param string $OutputName 输出的名称。
     * @param string $Description 输出描述。
     * @param string $Protocol 输出的转推协议，支持SRT|RTP|RTMP|RTMP_PULL|RTSP_PULL|RIST。
     * @param string $OutputRegion 输出地区。
     * @param string $OutputType 输出类型：Internet/TencentCSS
     * @param string $OutputKind 输出模块类型，包括Pinpoint（单点输出，最多支持四路并发输出）；MultiMesh（多路输出，支持大于四路的并发输出，目前可以达到200路）。默认类型为 Pinpoint 输出。对于单个 Flow 一个区域最多只能有一个 MultiMesh 输出
     * @param CreateOutputSRTSettings $SRTSettings 输出的SRT的配置。
     * @param CreateOutputRTMPSettings $RTMPSettings 输出的RTMP的配置。
     * @param CreateOutputInfoRTPSettings $RTPSettings 输出的RTP的配置。
     * @param array $AllowIpList IP白名单列表，格式为CIDR，如0.0.0.0/0。
当Protocol为RTMP_PULL有效，为空代表不限制客户端IP。
     * @param integer $MaxConcurrent 最大拉流并发数，最大4，默认4。
     * @param array $SecurityGroupIds 绑定的输入安全组 ID。 
     * @param array $Zones 可用区，output最多只支持输入一个可用区。	
     * @param CreateOutputRistSettings $RISTSettings 输出的RIST的配置。
     * @param PidSelector $PidSelector 对于含有多个音/视频轨的流，可以指定需要使用的轨道
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
        if (array_key_exists("OutputName",$param) and $param["OutputName"] !== null) {
            $this->OutputName = $param["OutputName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("OutputRegion",$param) and $param["OutputRegion"] !== null) {
            $this->OutputRegion = $param["OutputRegion"];
        }

        if (array_key_exists("OutputType",$param) and $param["OutputType"] !== null) {
            $this->OutputType = $param["OutputType"];
        }

        if (array_key_exists("OutputKind",$param) and $param["OutputKind"] !== null) {
            $this->OutputKind = $param["OutputKind"];
        }

        if (array_key_exists("SRTSettings",$param) and $param["SRTSettings"] !== null) {
            $this->SRTSettings = new CreateOutputSRTSettings();
            $this->SRTSettings->deserialize($param["SRTSettings"]);
        }

        if (array_key_exists("RTMPSettings",$param) and $param["RTMPSettings"] !== null) {
            $this->RTMPSettings = new CreateOutputRTMPSettings();
            $this->RTMPSettings->deserialize($param["RTMPSettings"]);
        }

        if (array_key_exists("RTPSettings",$param) and $param["RTPSettings"] !== null) {
            $this->RTPSettings = new CreateOutputInfoRTPSettings();
            $this->RTPSettings->deserialize($param["RTPSettings"]);
        }

        if (array_key_exists("AllowIpList",$param) and $param["AllowIpList"] !== null) {
            $this->AllowIpList = $param["AllowIpList"];
        }

        if (array_key_exists("MaxConcurrent",$param) and $param["MaxConcurrent"] !== null) {
            $this->MaxConcurrent = $param["MaxConcurrent"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("RISTSettings",$param) and $param["RISTSettings"] !== null) {
            $this->RISTSettings = new CreateOutputRistSettings();
            $this->RISTSettings->deserialize($param["RISTSettings"]);
        }

        if (array_key_exists("PidSelector",$param) and $param["PidSelector"] !== null) {
            $this->PidSelector = new PidSelector();
            $this->PidSelector->deserialize($param["PidSelector"]);
        }
    }
}
