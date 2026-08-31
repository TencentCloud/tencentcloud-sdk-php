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
 * 查询输入配置信息。
 *
 * @method string getInputId() 获取<p>输入Id。</p>
 * @method void setInputId(string $InputId) 设置<p>输入Id。</p>
 * @method string getInputName() 获取<p>输入名称。</p>
 * @method void setInputName(string $InputName) 设置<p>输入名称。</p>
 * @method string getDescription() 获取<p>输入描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>输入描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取<p>输入协议。</p>
 * @method void setProtocol(string $Protocol) 设置<p>输入协议。</p>
 * @method array getInputAddressList() 获取<p>输入地址列表。</p>
 * @method void setInputAddressList(array $InputAddressList) 设置<p>输入地址列表。</p>
 * @method array getAllowIpList() 获取<p>输入IP白名单列表。</p>
 * @method void setAllowIpList(array $AllowIpList) 设置<p>输入IP白名单列表。</p>
 * @method DescribeInputSRTSettings getSRTSettings() 获取<p>输入的SRT配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSRTSettings(DescribeInputSRTSettings $SRTSettings) 设置<p>输入的SRT配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribeInputRTPSettings getRTPSettings() 获取<p>输入的RTP配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRTPSettings(DescribeInputRTPSettings $RTPSettings) 设置<p>输入的RTP配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInputRegion() 获取<p>输入的地区。</p>
 * @method void setInputRegion(string $InputRegion) 设置<p>输入的地区。</p>
 * @method DescribeInputRTMPSettings getRTMPSettings() 获取<p>输入的RTMP配置信息。</p>
 * @method void setRTMPSettings(DescribeInputRTMPSettings $RTMPSettings) 设置<p>输入的RTMP配置信息。</p>
 * @method string getFailOver() 获取<p>输入的主备开关。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailOver(string $FailOver) 设置<p>输入的主备开关。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribeInputRTMPPullSettings getRTMPPullSettings() 获取<p>输入的RTMP_PULL配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRTMPPullSettings(DescribeInputRTMPPullSettings $RTMPPullSettings) 设置<p>输入的RTMP_PULL配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribeInputRTSPPullSettings getRTSPPullSettings() 获取<p>输入的RTSP_PULL配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRTSPPullSettings(DescribeInputRTSPPullSettings $RTSPPullSettings) 设置<p>输入的RTSP_PULL配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribeInputHLSPullSettings getHLSPullSettings() 获取<p>输入的HLS_PULL配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHLSPullSettings(DescribeInputHLSPullSettings $HLSPullSettings) 设置<p>输入的HLS_PULL配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResilientStreamConf getResilientStream() 获取<p>延播平滑吐流配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResilientStream(ResilientStreamConf $ResilientStream) 设置<p>延播平滑吐流配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSecurityGroupIds() 获取<p>绑定的输入安全组 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置<p>绑定的输入安全组 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getZones() 获取<p>可用区配置，开启容灾情况下最多有两个，顺序和pipeline 0、1对应，否则最多只有一个可用区。</p>
 * @method void setZones(array $Zones) 设置<p>可用区配置，开启容灾情况下最多有两个，顺序和pipeline 0、1对应，否则最多只有一个可用区。</p>
 * @method DescribeInputRISTSettings getRISTSettings() 获取<p>输入的RIST配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRISTSettings(DescribeInputRISTSettings $RISTSettings) 设置<p>输入的RIST配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getStreamUrls() 获取<p>输入模块配置相关的URL信息，包含提供的推流地址，或者配置的第三方源流地址</p>
 * @method void setStreamUrls(array $StreamUrls) 设置<p>输入模块配置相关的URL信息，包含提供的推流地址，或者配置的第三方源流地址</p>
 */
class DescribeInput extends AbstractModel
{
    /**
     * @var string <p>输入Id。</p>
     */
    public $InputId;

    /**
     * @var string <p>输入名称。</p>
     */
    public $InputName;

    /**
     * @var string <p>输入描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string <p>输入协议。</p>
     */
    public $Protocol;

    /**
     * @var array <p>输入地址列表。</p>
     */
    public $InputAddressList;

    /**
     * @var array <p>输入IP白名单列表。</p>
     */
    public $AllowIpList;

    /**
     * @var DescribeInputSRTSettings <p>输入的SRT配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SRTSettings;

    /**
     * @var DescribeInputRTPSettings <p>输入的RTP配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RTPSettings;

    /**
     * @var string <p>输入的地区。</p>
     */
    public $InputRegion;

    /**
     * @var DescribeInputRTMPSettings <p>输入的RTMP配置信息。</p>
     */
    public $RTMPSettings;

    /**
     * @var string <p>输入的主备开关。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailOver;

    /**
     * @var DescribeInputRTMPPullSettings <p>输入的RTMP_PULL配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RTMPPullSettings;

    /**
     * @var DescribeInputRTSPPullSettings <p>输入的RTSP_PULL配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RTSPPullSettings;

    /**
     * @var DescribeInputHLSPullSettings <p>输入的HLS_PULL配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HLSPullSettings;

    /**
     * @var ResilientStreamConf <p>延播平滑吐流配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResilientStream;

    /**
     * @var array <p>绑定的输入安全组 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecurityGroupIds;

    /**
     * @var array <p>可用区配置，开启容灾情况下最多有两个，顺序和pipeline 0、1对应，否则最多只有一个可用区。</p>
     */
    public $Zones;

    /**
     * @var DescribeInputRISTSettings <p>输入的RIST配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RISTSettings;

    /**
     * @var array <p>输入模块配置相关的URL信息，包含提供的推流地址，或者配置的第三方源流地址</p>
     */
    public $StreamUrls;

    /**
     * @param string $InputId <p>输入Id。</p>
     * @param string $InputName <p>输入名称。</p>
     * @param string $Description <p>输入描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol <p>输入协议。</p>
     * @param array $InputAddressList <p>输入地址列表。</p>
     * @param array $AllowIpList <p>输入IP白名单列表。</p>
     * @param DescribeInputSRTSettings $SRTSettings <p>输入的SRT配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribeInputRTPSettings $RTPSettings <p>输入的RTP配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InputRegion <p>输入的地区。</p>
     * @param DescribeInputRTMPSettings $RTMPSettings <p>输入的RTMP配置信息。</p>
     * @param string $FailOver <p>输入的主备开关。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribeInputRTMPPullSettings $RTMPPullSettings <p>输入的RTMP_PULL配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribeInputRTSPPullSettings $RTSPPullSettings <p>输入的RTSP_PULL配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribeInputHLSPullSettings $HLSPullSettings <p>输入的HLS_PULL配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResilientStreamConf $ResilientStream <p>延播平滑吐流配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SecurityGroupIds <p>绑定的输入安全组 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Zones <p>可用区配置，开启容灾情况下最多有两个，顺序和pipeline 0、1对应，否则最多只有一个可用区。</p>
     * @param DescribeInputRISTSettings $RISTSettings <p>输入的RIST配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $StreamUrls <p>输入模块配置相关的URL信息，包含提供的推流地址，或者配置的第三方源流地址</p>
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

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("InputAddressList",$param) and $param["InputAddressList"] !== null) {
            $this->InputAddressList = [];
            foreach ($param["InputAddressList"] as $key => $value){
                $obj = new InputAddress();
                $obj->deserialize($value);
                array_push($this->InputAddressList, $obj);
            }
        }

        if (array_key_exists("AllowIpList",$param) and $param["AllowIpList"] !== null) {
            $this->AllowIpList = $param["AllowIpList"];
        }

        if (array_key_exists("SRTSettings",$param) and $param["SRTSettings"] !== null) {
            $this->SRTSettings = new DescribeInputSRTSettings();
            $this->SRTSettings->deserialize($param["SRTSettings"]);
        }

        if (array_key_exists("RTPSettings",$param) and $param["RTPSettings"] !== null) {
            $this->RTPSettings = new DescribeInputRTPSettings();
            $this->RTPSettings->deserialize($param["RTPSettings"]);
        }

        if (array_key_exists("InputRegion",$param) and $param["InputRegion"] !== null) {
            $this->InputRegion = $param["InputRegion"];
        }

        if (array_key_exists("RTMPSettings",$param) and $param["RTMPSettings"] !== null) {
            $this->RTMPSettings = new DescribeInputRTMPSettings();
            $this->RTMPSettings->deserialize($param["RTMPSettings"]);
        }

        if (array_key_exists("FailOver",$param) and $param["FailOver"] !== null) {
            $this->FailOver = $param["FailOver"];
        }

        if (array_key_exists("RTMPPullSettings",$param) and $param["RTMPPullSettings"] !== null) {
            $this->RTMPPullSettings = new DescribeInputRTMPPullSettings();
            $this->RTMPPullSettings->deserialize($param["RTMPPullSettings"]);
        }

        if (array_key_exists("RTSPPullSettings",$param) and $param["RTSPPullSettings"] !== null) {
            $this->RTSPPullSettings = new DescribeInputRTSPPullSettings();
            $this->RTSPPullSettings->deserialize($param["RTSPPullSettings"]);
        }

        if (array_key_exists("HLSPullSettings",$param) and $param["HLSPullSettings"] !== null) {
            $this->HLSPullSettings = new DescribeInputHLSPullSettings();
            $this->HLSPullSettings->deserialize($param["HLSPullSettings"]);
        }

        if (array_key_exists("ResilientStream",$param) and $param["ResilientStream"] !== null) {
            $this->ResilientStream = new ResilientStreamConf();
            $this->ResilientStream->deserialize($param["ResilientStream"]);
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("RISTSettings",$param) and $param["RISTSettings"] !== null) {
            $this->RISTSettings = new DescribeInputRISTSettings();
            $this->RISTSettings->deserialize($param["RISTSettings"]);
        }

        if (array_key_exists("StreamUrls",$param) and $param["StreamUrls"] !== null) {
            $this->StreamUrls = [];
            foreach ($param["StreamUrls"] as $key => $value){
                $obj = new StreamUrlDetail();
                $obj->deserialize($value);
                array_push($this->StreamUrls, $obj);
            }
        }
    }
}
