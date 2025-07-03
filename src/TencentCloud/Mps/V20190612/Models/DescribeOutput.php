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
 * 查询输出的配置信息。
 *
 * @method string getOutputId() 获取输出Id。
 * @method void setOutputId(string $OutputId) 设置输出Id。
 * @method string getOutputName() 获取输出名称。
 * @method void setOutputName(string $OutputName) 设置输出名称。
 * @method string getOutputType() 获取输出类型。
 * @method void setOutputType(string $OutputType) 设置输出类型。
 * @method string getOutputKind() 获取输出模块类型，包括Pinpoint（单点输出，最多支持四路并发输出）；MultiMesh（多路输出，支持大于四路的并发输出，目前可以达到200路）。默认类型为 Pinpoint 输出。对于单个 Flow 一个区域最多只能有一个 MultiMesh 输出。
 * @method void setOutputKind(string $OutputKind) 设置输出模块类型，包括Pinpoint（单点输出，最多支持四路并发输出）；MultiMesh（多路输出，支持大于四路的并发输出，目前可以达到200路）。默认类型为 Pinpoint 输出。对于单个 Flow 一个区域最多只能有一个 MultiMesh 输出。
 * @method string getDescription() 获取输出描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置输出描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取输出协议。
 * @method void setProtocol(string $Protocol) 设置输出协议。
 * @method array getOutputAddressList() 获取输出的出口地址信息列表。
 * @method void setOutputAddressList(array $OutputAddressList) 设置输出的出口地址信息列表。
 * @method string getOutputRegion() 获取输出的地区。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputRegion(string $OutputRegion) 设置输出的地区。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribeOutputSRTSettings getSRTSettings() 获取输出的SRT配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSRTSettings(DescribeOutputSRTSettings $SRTSettings) 设置输出的SRT配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribeOutputRTPSettings getRTPSettings() 获取输出的RTP配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRTPSettings(DescribeOutputRTPSettings $RTPSettings) 设置输出的RTP配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribeOutputRTMPSettings getRTMPSettings() 获取输出的RTMP配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRTMPSettings(DescribeOutputRTMPSettings $RTMPSettings) 设置输出的RTMP配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribeOutputRTMPPullSettings getRTMPPullSettings() 获取输出的RTMP拉流配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRTMPPullSettings(DescribeOutputRTMPPullSettings $RTMPPullSettings) 设置输出的RTMP拉流配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAllowIpList() 获取CIDR白名单列表。
当Protocol为RTMP_PULL有效，为空代表不限制客户端IP。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllowIpList(array $AllowIpList) 设置CIDR白名单列表。
当Protocol为RTMP_PULL有效，为空代表不限制客户端IP。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribeOutputRTSPPullSettings getRTSPPullSettings() 获取输出的RTSP拉流配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRTSPPullSettings(DescribeOutputRTSPPullSettings $RTSPPullSettings) 设置输出的RTSP拉流配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribeOutputHLSPullSettings getHLSPullSettings() 获取输出的HLS拉流配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHLSPullSettings(DescribeOutputHLSPullSettings $HLSPullSettings) 设置输出的HLS拉流配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxConcurrent() 获取最大拉流并发数，最大为4，默认4。
 * @method void setMaxConcurrent(integer $MaxConcurrent) 设置最大拉流并发数，最大为4，默认4。
 * @method array getSecurityGroupIds() 获取绑定的安全组 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置绑定的安全组 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getZones() 获取可用区，output目前最多只支持一个。	
 * @method void setZones(array $Zones) 设置可用区，output目前最多只支持一个。	
 * @method DescribeOutputRISTSettings getRISTSettings() 获取输出的RIST配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRISTSettings(DescribeOutputRISTSettings $RISTSettings) 设置输出的RIST配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method PidSelector getPidSelector() 获取对于含有多个音/视频轨的流，可以指定需要使用的轨道
 * @method void setPidSelector(PidSelector $PidSelector) 设置对于含有多个音/视频轨的流，可以指定需要使用的轨道
 * @method array getStreamUrls() 获取输出模块配置，相关的URL，包括提供的拉流地址，或者配置的输出到第三方的转推地址
 * @method void setStreamUrls(array $StreamUrls) 设置输出模块配置，相关的URL，包括提供的拉流地址，或者配置的输出到第三方的转推地址
 */
class DescribeOutput extends AbstractModel
{
    /**
     * @var string 输出Id。
     */
    public $OutputId;

    /**
     * @var string 输出名称。
     */
    public $OutputName;

    /**
     * @var string 输出类型。
     */
    public $OutputType;

    /**
     * @var string 输出模块类型，包括Pinpoint（单点输出，最多支持四路并发输出）；MultiMesh（多路输出，支持大于四路的并发输出，目前可以达到200路）。默认类型为 Pinpoint 输出。对于单个 Flow 一个区域最多只能有一个 MultiMesh 输出。
     */
    public $OutputKind;

    /**
     * @var string 输出描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 输出协议。
     */
    public $Protocol;

    /**
     * @var array 输出的出口地址信息列表。
     */
    public $OutputAddressList;

    /**
     * @var string 输出的地区。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputRegion;

    /**
     * @var DescribeOutputSRTSettings 输出的SRT配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SRTSettings;

    /**
     * @var DescribeOutputRTPSettings 输出的RTP配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RTPSettings;

    /**
     * @var DescribeOutputRTMPSettings 输出的RTMP配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RTMPSettings;

    /**
     * @var DescribeOutputRTMPPullSettings 输出的RTMP拉流配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RTMPPullSettings;

    /**
     * @var array CIDR白名单列表。
当Protocol为RTMP_PULL有效，为空代表不限制客户端IP。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllowIpList;

    /**
     * @var DescribeOutputRTSPPullSettings 输出的RTSP拉流配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RTSPPullSettings;

    /**
     * @var DescribeOutputHLSPullSettings 输出的HLS拉流配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HLSPullSettings;

    /**
     * @var integer 最大拉流并发数，最大为4，默认4。
     */
    public $MaxConcurrent;

    /**
     * @var array 绑定的安全组 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecurityGroupIds;

    /**
     * @var array 可用区，output目前最多只支持一个。	
     */
    public $Zones;

    /**
     * @var DescribeOutputRISTSettings 输出的RIST配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RISTSettings;

    /**
     * @var PidSelector 对于含有多个音/视频轨的流，可以指定需要使用的轨道
     */
    public $PidSelector;

    /**
     * @var array 输出模块配置，相关的URL，包括提供的拉流地址，或者配置的输出到第三方的转推地址
     */
    public $StreamUrls;

    /**
     * @param string $OutputId 输出Id。
     * @param string $OutputName 输出名称。
     * @param string $OutputType 输出类型。
     * @param string $OutputKind 输出模块类型，包括Pinpoint（单点输出，最多支持四路并发输出）；MultiMesh（多路输出，支持大于四路的并发输出，目前可以达到200路）。默认类型为 Pinpoint 输出。对于单个 Flow 一个区域最多只能有一个 MultiMesh 输出。
     * @param string $Description 输出描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol 输出协议。
     * @param array $OutputAddressList 输出的出口地址信息列表。
     * @param string $OutputRegion 输出的地区。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribeOutputSRTSettings $SRTSettings 输出的SRT配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribeOutputRTPSettings $RTPSettings 输出的RTP配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribeOutputRTMPSettings $RTMPSettings 输出的RTMP配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribeOutputRTMPPullSettings $RTMPPullSettings 输出的RTMP拉流配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AllowIpList CIDR白名单列表。
当Protocol为RTMP_PULL有效，为空代表不限制客户端IP。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribeOutputRTSPPullSettings $RTSPPullSettings 输出的RTSP拉流配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribeOutputHLSPullSettings $HLSPullSettings 输出的HLS拉流配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxConcurrent 最大拉流并发数，最大为4，默认4。
     * @param array $SecurityGroupIds 绑定的安全组 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Zones 可用区，output目前最多只支持一个。	
     * @param DescribeOutputRISTSettings $RISTSettings 输出的RIST配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param PidSelector $PidSelector 对于含有多个音/视频轨的流，可以指定需要使用的轨道
     * @param array $StreamUrls 输出模块配置，相关的URL，包括提供的拉流地址，或者配置的输出到第三方的转推地址
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

        if (array_key_exists("OutputType",$param) and $param["OutputType"] !== null) {
            $this->OutputType = $param["OutputType"];
        }

        if (array_key_exists("OutputKind",$param) and $param["OutputKind"] !== null) {
            $this->OutputKind = $param["OutputKind"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("OutputAddressList",$param) and $param["OutputAddressList"] !== null) {
            $this->OutputAddressList = [];
            foreach ($param["OutputAddressList"] as $key => $value){
                $obj = new OutputAddress();
                $obj->deserialize($value);
                array_push($this->OutputAddressList, $obj);
            }
        }

        if (array_key_exists("OutputRegion",$param) and $param["OutputRegion"] !== null) {
            $this->OutputRegion = $param["OutputRegion"];
        }

        if (array_key_exists("SRTSettings",$param) and $param["SRTSettings"] !== null) {
            $this->SRTSettings = new DescribeOutputSRTSettings();
            $this->SRTSettings->deserialize($param["SRTSettings"]);
        }

        if (array_key_exists("RTPSettings",$param) and $param["RTPSettings"] !== null) {
            $this->RTPSettings = new DescribeOutputRTPSettings();
            $this->RTPSettings->deserialize($param["RTPSettings"]);
        }

        if (array_key_exists("RTMPSettings",$param) and $param["RTMPSettings"] !== null) {
            $this->RTMPSettings = new DescribeOutputRTMPSettings();
            $this->RTMPSettings->deserialize($param["RTMPSettings"]);
        }

        if (array_key_exists("RTMPPullSettings",$param) and $param["RTMPPullSettings"] !== null) {
            $this->RTMPPullSettings = new DescribeOutputRTMPPullSettings();
            $this->RTMPPullSettings->deserialize($param["RTMPPullSettings"]);
        }

        if (array_key_exists("AllowIpList",$param) and $param["AllowIpList"] !== null) {
            $this->AllowIpList = $param["AllowIpList"];
        }

        if (array_key_exists("RTSPPullSettings",$param) and $param["RTSPPullSettings"] !== null) {
            $this->RTSPPullSettings = new DescribeOutputRTSPPullSettings();
            $this->RTSPPullSettings->deserialize($param["RTSPPullSettings"]);
        }

        if (array_key_exists("HLSPullSettings",$param) and $param["HLSPullSettings"] !== null) {
            $this->HLSPullSettings = new DescribeOutputHLSPullSettings();
            $this->HLSPullSettings->deserialize($param["HLSPullSettings"]);
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
            $this->RISTSettings = new DescribeOutputRISTSettings();
            $this->RISTSettings->deserialize($param["RISTSettings"]);
        }

        if (array_key_exists("PidSelector",$param) and $param["PidSelector"] !== null) {
            $this->PidSelector = new PidSelector();
            $this->PidSelector->deserialize($param["PidSelector"]);
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
