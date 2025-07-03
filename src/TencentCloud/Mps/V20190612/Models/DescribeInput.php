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
 * 查询输入配置信息。
 *
 * @method string getInputId() 获取输入Id。
 * @method void setInputId(string $InputId) 设置输入Id。
 * @method string getInputName() 获取输入名称。
 * @method void setInputName(string $InputName) 设置输入名称。
 * @method string getDescription() 获取输入描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置输入描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取输入协议。
 * @method void setProtocol(string $Protocol) 设置输入协议。
 * @method array getInputAddressList() 获取输入地址列表。
 * @method void setInputAddressList(array $InputAddressList) 设置输入地址列表。
 * @method array getAllowIpList() 获取输入IP白名单列表。
 * @method void setAllowIpList(array $AllowIpList) 设置输入IP白名单列表。
 * @method DescribeInputSRTSettings getSRTSettings() 获取输入的SRT配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSRTSettings(DescribeInputSRTSettings $SRTSettings) 设置输入的SRT配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribeInputRTPSettings getRTPSettings() 获取输入的RTP配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRTPSettings(DescribeInputRTPSettings $RTPSettings) 设置输入的RTP配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInputRegion() 获取输入的地区。
 * @method void setInputRegion(string $InputRegion) 设置输入的地区。
 * @method DescribeInputRTMPSettings getRTMPSettings() 获取输入的RTMP配置信息。
 * @method void setRTMPSettings(DescribeInputRTMPSettings $RTMPSettings) 设置输入的RTMP配置信息。
 * @method string getFailOver() 获取输入的主备开关。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailOver(string $FailOver) 设置输入的主备开关。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribeInputRTMPPullSettings getRTMPPullSettings() 获取输入的RTMP_PULL配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRTMPPullSettings(DescribeInputRTMPPullSettings $RTMPPullSettings) 设置输入的RTMP_PULL配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribeInputRTSPPullSettings getRTSPPullSettings() 获取输入的RTSP_PULL配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRTSPPullSettings(DescribeInputRTSPPullSettings $RTSPPullSettings) 设置输入的RTSP_PULL配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribeInputHLSPullSettings getHLSPullSettings() 获取输入的HLS_PULL配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHLSPullSettings(DescribeInputHLSPullSettings $HLSPullSettings) 设置输入的HLS_PULL配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResilientStreamConf getResilientStream() 获取延播平滑吐流配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResilientStream(ResilientStreamConf $ResilientStream) 设置延播平滑吐流配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSecurityGroupIds() 获取绑定的输入安全组 ID。	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置绑定的输入安全组 ID。	
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getZones() 获取可用区配置，开启容灾情况下最多有两个，顺序和pipeline 0、1对应，否则最多只有一个可用区。	
 * @method void setZones(array $Zones) 设置可用区配置，开启容灾情况下最多有两个，顺序和pipeline 0、1对应，否则最多只有一个可用区。	
 * @method DescribeInputRISTSettings getRISTSettings() 获取输入的RIST配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRISTSettings(DescribeInputRISTSettings $RISTSettings) 设置输入的RIST配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getStreamUrls() 获取输入模块配置相关的URL信息，包含提供的推流地址，或者配置的第三方源流地址
 * @method void setStreamUrls(array $StreamUrls) 设置输入模块配置相关的URL信息，包含提供的推流地址，或者配置的第三方源流地址
 */
class DescribeInput extends AbstractModel
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
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 输入协议。
     */
    public $Protocol;

    /**
     * @var array 输入地址列表。
     */
    public $InputAddressList;

    /**
     * @var array 输入IP白名单列表。
     */
    public $AllowIpList;

    /**
     * @var DescribeInputSRTSettings 输入的SRT配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SRTSettings;

    /**
     * @var DescribeInputRTPSettings 输入的RTP配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RTPSettings;

    /**
     * @var string 输入的地区。
     */
    public $InputRegion;

    /**
     * @var DescribeInputRTMPSettings 输入的RTMP配置信息。
     */
    public $RTMPSettings;

    /**
     * @var string 输入的主备开关。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailOver;

    /**
     * @var DescribeInputRTMPPullSettings 输入的RTMP_PULL配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RTMPPullSettings;

    /**
     * @var DescribeInputRTSPPullSettings 输入的RTSP_PULL配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RTSPPullSettings;

    /**
     * @var DescribeInputHLSPullSettings 输入的HLS_PULL配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HLSPullSettings;

    /**
     * @var ResilientStreamConf 延播平滑吐流配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResilientStream;

    /**
     * @var array 绑定的输入安全组 ID。	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecurityGroupIds;

    /**
     * @var array 可用区配置，开启容灾情况下最多有两个，顺序和pipeline 0、1对应，否则最多只有一个可用区。	
     */
    public $Zones;

    /**
     * @var DescribeInputRISTSettings 输入的RIST配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RISTSettings;

    /**
     * @var array 输入模块配置相关的URL信息，包含提供的推流地址，或者配置的第三方源流地址
     */
    public $StreamUrls;

    /**
     * @param string $InputId 输入Id。
     * @param string $InputName 输入名称。
     * @param string $Description 输入描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol 输入协议。
     * @param array $InputAddressList 输入地址列表。
     * @param array $AllowIpList 输入IP白名单列表。
     * @param DescribeInputSRTSettings $SRTSettings 输入的SRT配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribeInputRTPSettings $RTPSettings 输入的RTP配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InputRegion 输入的地区。
     * @param DescribeInputRTMPSettings $RTMPSettings 输入的RTMP配置信息。
     * @param string $FailOver 输入的主备开关。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribeInputRTMPPullSettings $RTMPPullSettings 输入的RTMP_PULL配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribeInputRTSPPullSettings $RTSPPullSettings 输入的RTSP_PULL配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribeInputHLSPullSettings $HLSPullSettings 输入的HLS_PULL配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResilientStreamConf $ResilientStream 延播平滑吐流配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SecurityGroupIds 绑定的输入安全组 ID。	
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Zones 可用区配置，开启容灾情况下最多有两个，顺序和pipeline 0、1对应，否则最多只有一个可用区。	
     * @param DescribeInputRISTSettings $RISTSettings 输入的RIST配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $StreamUrls 输入模块配置相关的URL信息，包含提供的推流地址，或者配置的第三方源流地址
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
