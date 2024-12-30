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
 * 修改Output配置。
 *
 * @method string getOutputId() 获取需要修改的Output的Id。
 * @method void setOutputId(string $OutputId) 设置需要修改的Output的Id。
 * @method string getOutputName() 获取输出的名称。
 * @method void setOutputName(string $OutputName) 设置输出的名称。
 * @method string getDescription() 获取输出的描述。
 * @method void setDescription(string $Description) 设置输出的描述。
 * @method string getProtocol() 获取输出的转推协议，支持SRT|RTP|RTMP|RTMP_PULL|RTSP|RIST。
 * @method void setProtocol(string $Protocol) 设置输出的转推协议，支持SRT|RTP|RTMP|RTMP_PULL|RTSP|RIST。
 * @method CreateOutputSRTSettings getSRTSettings() 获取转推SRT的配置。
 * @method void setSRTSettings(CreateOutputSRTSettings $SRTSettings) 设置转推SRT的配置。
 * @method CreateOutputInfoRTPSettings getRTPSettings() 获取转推RTP的配置。
 * @method void setRTPSettings(CreateOutputInfoRTPSettings $RTPSettings) 设置转推RTP的配置。
 * @method CreateOutputRTMPSettings getRTMPSettings() 获取转推RTMP的配置。
 * @method void setRTMPSettings(CreateOutputRTMPSettings $RTMPSettings) 设置转推RTMP的配置。
 * @method array getAllowIpList() 获取IP白名单列表，格式为CIDR，如0.0.0.0/0。
当Protocol为RTMP_PULL有效，为空代表不限制客户端IP。
 * @method void setAllowIpList(array $AllowIpList) 设置IP白名单列表，格式为CIDR，如0.0.0.0/0。
当Protocol为RTMP_PULL有效，为空代表不限制客户端IP。
 * @method integer getMaxConcurrent() 获取最大拉流并发数，最大4，默认4。
 * @method void setMaxConcurrent(integer $MaxConcurrent) 设置最大拉流并发数，最大4，默认4。
 * @method array getSecurityGroupIds() 获取绑定的安全组 ID。 仅支持关联一组安全组。	
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置绑定的安全组 ID。 仅支持关联一组安全组。	
 * @method array getZones() 获取可用区
 * @method void setZones(array $Zones) 设置可用区
 * @method CreateOutputRistSettings getRISTSettings() 获取转推RIST的配置。
 * @method void setRISTSettings(CreateOutputRistSettings $RISTSettings) 设置转推RIST的配置。
 * @method string getOutputType() 获取输出类型：Internet/TencentCSS/StreamLive
 * @method void setOutputType(string $OutputType) 设置输出类型：Internet/TencentCSS/StreamLive
 */
class ModifyOutputInfo extends AbstractModel
{
    /**
     * @var string 需要修改的Output的Id。
     */
    public $OutputId;

    /**
     * @var string 输出的名称。
     */
    public $OutputName;

    /**
     * @var string 输出的描述。
     */
    public $Description;

    /**
     * @var string 输出的转推协议，支持SRT|RTP|RTMP|RTMP_PULL|RTSP|RIST。
     */
    public $Protocol;

    /**
     * @var CreateOutputSRTSettings 转推SRT的配置。
     */
    public $SRTSettings;

    /**
     * @var CreateOutputInfoRTPSettings 转推RTP的配置。
     */
    public $RTPSettings;

    /**
     * @var CreateOutputRTMPSettings 转推RTMP的配置。
     */
    public $RTMPSettings;

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
     * @var array 绑定的安全组 ID。 仅支持关联一组安全组。	
     */
    public $SecurityGroupIds;

    /**
     * @var array 可用区
     */
    public $Zones;

    /**
     * @var CreateOutputRistSettings 转推RIST的配置。
     */
    public $RISTSettings;

    /**
     * @var string 输出类型：Internet/TencentCSS/StreamLive
     */
    public $OutputType;

    /**
     * @param string $OutputId 需要修改的Output的Id。
     * @param string $OutputName 输出的名称。
     * @param string $Description 输出的描述。
     * @param string $Protocol 输出的转推协议，支持SRT|RTP|RTMP|RTMP_PULL|RTSP|RIST。
     * @param CreateOutputSRTSettings $SRTSettings 转推SRT的配置。
     * @param CreateOutputInfoRTPSettings $RTPSettings 转推RTP的配置。
     * @param CreateOutputRTMPSettings $RTMPSettings 转推RTMP的配置。
     * @param array $AllowIpList IP白名单列表，格式为CIDR，如0.0.0.0/0。
当Protocol为RTMP_PULL有效，为空代表不限制客户端IP。
     * @param integer $MaxConcurrent 最大拉流并发数，最大4，默认4。
     * @param array $SecurityGroupIds 绑定的安全组 ID。 仅支持关联一组安全组。	
     * @param array $Zones 可用区
     * @param CreateOutputRistSettings $RISTSettings 转推RIST的配置。
     * @param string $OutputType 输出类型：Internet/TencentCSS/StreamLive
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
        if (array_key_exists("OutputId",$param) and $param["OutputId"] !== null) {
            $this->OutputId = $param["OutputId"];
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

        if (array_key_exists("SRTSettings",$param) and $param["SRTSettings"] !== null) {
            $this->SRTSettings = new CreateOutputSRTSettings();
            $this->SRTSettings->deserialize($param["SRTSettings"]);
        }

        if (array_key_exists("RTPSettings",$param) and $param["RTPSettings"] !== null) {
            $this->RTPSettings = new CreateOutputInfoRTPSettings();
            $this->RTPSettings->deserialize($param["RTPSettings"]);
        }

        if (array_key_exists("RTMPSettings",$param) and $param["RTMPSettings"] !== null) {
            $this->RTMPSettings = new CreateOutputRTMPSettings();
            $this->RTMPSettings->deserialize($param["RTMPSettings"]);
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

        if (array_key_exists("OutputType",$param) and $param["OutputType"] !== null) {
            $this->OutputType = $param["OutputType"];
        }
    }
}
