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
 * 创建输出的配置信息。
 *
 * @method string getOutputName() 获取输出的名称。
 * @method void setOutputName(string $OutputName) 设置输出的名称。
 * @method string getDescription() 获取输出描述。
 * @method void setDescription(string $Description) 设置输出描述。
 * @method string getProtocol() 获取输出协议，可选[SRT|RTP|RTMP|RTMP_PULL]。
 * @method void setProtocol(string $Protocol) 设置输出协议，可选[SRT|RTP|RTMP|RTMP_PULL]。
 * @method string getOutputRegion() 获取输出地区。
 * @method void setOutputRegion(string $OutputRegion) 设置输出地区。
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
     * @var string 输出协议，可选[SRT|RTP|RTMP|RTMP_PULL]。
     */
    public $Protocol;

    /**
     * @var string 输出地区。
     */
    public $OutputRegion;

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
     * @param string $OutputName 输出的名称。
     * @param string $Description 输出描述。
     * @param string $Protocol 输出协议，可选[SRT|RTP|RTMP|RTMP_PULL]。
     * @param string $OutputRegion 输出地区。
     * @param CreateOutputSRTSettings $SRTSettings 输出的SRT的配置。
     * @param CreateOutputRTMPSettings $RTMPSettings 输出的RTMP的配置。
     * @param CreateOutputInfoRTPSettings $RTPSettings 输出的RTP的配置。
     * @param array $AllowIpList IP白名单列表，格式为CIDR，如0.0.0.0/0。
当Protocol为RTMP_PULL有效，为空代表不限制客户端IP。
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
    }
}
