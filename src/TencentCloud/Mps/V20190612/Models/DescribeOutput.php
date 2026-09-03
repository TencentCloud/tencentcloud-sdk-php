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
 * 查询输出的配置信息。
 *
 * @method string getOutputId() 获取<p>输出Id。</p>
 * @method void setOutputId(string $OutputId) 设置<p>输出Id。</p>
 * @method string getOutputName() 获取<p>输出名称。</p>
 * @method void setOutputName(string $OutputName) 设置<p>输出名称。</p>
 * @method string getOutputType() 获取<p>输出类型。</p>
 * @method void setOutputType(string $OutputType) 设置<p>输出类型。</p>
 * @method string getOutputKind() 获取<p>输出模块类型，包括Pinpoint（单点输出，最多支持四路并发输出）；MultiMesh（多路输出，支持大于四路的并发输出，目前可以达到200路）。默认类型为 Pinpoint 输出。对于单个 Flow 一个区域最多只能有一个 MultiMesh 输出。</p>
 * @method void setOutputKind(string $OutputKind) 设置<p>输出模块类型，包括Pinpoint（单点输出，最多支持四路并发输出）；MultiMesh（多路输出，支持大于四路的并发输出，目前可以达到200路）。默认类型为 Pinpoint 输出。对于单个 Flow 一个区域最多只能有一个 MultiMesh 输出。</p>
 * @method string getDescription() 获取<p>输出描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>输出描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取<p>输出协议。</p>
 * @method void setProtocol(string $Protocol) 设置<p>输出协议。</p>
 * @method array getOutputAddressList() 获取<p>输出的出口地址信息列表。</p>
 * @method void setOutputAddressList(array $OutputAddressList) 设置<p>输出的出口地址信息列表。</p>
 * @method string getOutputRegion() 获取<p>输出的地区。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputRegion(string $OutputRegion) 设置<p>输出的地区。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribeOutputSRTSettings getSRTSettings() 获取<p>输出的SRT配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSRTSettings(DescribeOutputSRTSettings $SRTSettings) 设置<p>输出的SRT配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribeOutputRTPSettings getRTPSettings() 获取<p>输出的RTP配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRTPSettings(DescribeOutputRTPSettings $RTPSettings) 设置<p>输出的RTP配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribeOutputRTMPSettings getRTMPSettings() 获取<p>输出的RTMP配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRTMPSettings(DescribeOutputRTMPSettings $RTMPSettings) 设置<p>输出的RTMP配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribeOutputRTMPPullSettings getRTMPPullSettings() 获取<p>输出的RTMP拉流配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRTMPPullSettings(DescribeOutputRTMPPullSettings $RTMPPullSettings) 设置<p>输出的RTMP拉流配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAllowIpList() 获取<p>CIDR白名单列表。<br>当Protocol为RTMP_PULL有效，为空代表不限制客户端IP。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllowIpList(array $AllowIpList) 设置<p>CIDR白名单列表。<br>当Protocol为RTMP_PULL有效，为空代表不限制客户端IP。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribeOutputRTSPPullSettings getRTSPPullSettings() 获取<p>输出的RTSP拉流配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRTSPPullSettings(DescribeOutputRTSPPullSettings $RTSPPullSettings) 设置<p>输出的RTSP拉流配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribeOutputHLSPullSettings getHLSPullSettings() 获取<p>输出的HLS拉流配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHLSPullSettings(DescribeOutputHLSPullSettings $HLSPullSettings) 设置<p>输出的HLS拉流配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxConcurrent() 获取<p>最大拉流并发数，最大为4，默认4。</p>
 * @method void setMaxConcurrent(integer $MaxConcurrent) 设置<p>最大拉流并发数，最大为4，默认4。</p>
 * @method array getSecurityGroupIds() 获取<p>绑定的安全组 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置<p>绑定的安全组 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getZones() 获取<p>可用区，output目前最多只支持一个。</p>
 * @method void setZones(array $Zones) 设置<p>可用区，output目前最多只支持一个。</p>
 * @method DescribeOutputRISTSettings getRISTSettings() 获取<p>输出的RIST配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRISTSettings(DescribeOutputRISTSettings $RISTSettings) 设置<p>输出的RIST配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method PidSelector getPidSelector() 获取<p>对于含有多个音/视频轨的流，可以指定需要使用的轨道</p>
 * @method void setPidSelector(PidSelector $PidSelector) 设置<p>对于含有多个音/视频轨的流，可以指定需要使用的轨道</p>
 * @method array getStreamUrls() 获取<p>输出模块配置，相关的URL，包括提供的拉流地址，或者配置的输出到第三方的转推地址</p>
 * @method void setStreamUrls(array $StreamUrls) 设置<p>输出模块配置，相关的URL，包括提供的拉流地址，或者配置的输出到第三方的转推地址</p>
 * @method StreamSelector getStreamSelector() 获取<p>对于含有多个音/视频轨的流，可以指定需要使用的轨道</p>
 * @method void setStreamSelector(StreamSelector $StreamSelector) 设置<p>对于含有多个音/视频轨的流，可以指定需要使用的轨道</p>
 * @method string getState() 获取<p>启用或者禁用输出</p><p>枚举值：</p><ul><li>DISABLED： 禁用</li><li>ENABLED： 启用</li></ul>
 * @method void setState(string $State) 设置<p>启用或者禁用输出</p><p>枚举值：</p><ul><li>DISABLED： 禁用</li><li>ENABLED： 启用</li></ul>
 */
class DescribeOutput extends AbstractModel
{
    /**
     * @var string <p>输出Id。</p>
     */
    public $OutputId;

    /**
     * @var string <p>输出名称。</p>
     */
    public $OutputName;

    /**
     * @var string <p>输出类型。</p>
     */
    public $OutputType;

    /**
     * @var string <p>输出模块类型，包括Pinpoint（单点输出，最多支持四路并发输出）；MultiMesh（多路输出，支持大于四路的并发输出，目前可以达到200路）。默认类型为 Pinpoint 输出。对于单个 Flow 一个区域最多只能有一个 MultiMesh 输出。</p>
     */
    public $OutputKind;

    /**
     * @var string <p>输出描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string <p>输出协议。</p>
     */
    public $Protocol;

    /**
     * @var array <p>输出的出口地址信息列表。</p>
     */
    public $OutputAddressList;

    /**
     * @var string <p>输出的地区。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputRegion;

    /**
     * @var DescribeOutputSRTSettings <p>输出的SRT配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SRTSettings;

    /**
     * @var DescribeOutputRTPSettings <p>输出的RTP配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RTPSettings;

    /**
     * @var DescribeOutputRTMPSettings <p>输出的RTMP配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RTMPSettings;

    /**
     * @var DescribeOutputRTMPPullSettings <p>输出的RTMP拉流配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RTMPPullSettings;

    /**
     * @var array <p>CIDR白名单列表。<br>当Protocol为RTMP_PULL有效，为空代表不限制客户端IP。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllowIpList;

    /**
     * @var DescribeOutputRTSPPullSettings <p>输出的RTSP拉流配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RTSPPullSettings;

    /**
     * @var DescribeOutputHLSPullSettings <p>输出的HLS拉流配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HLSPullSettings;

    /**
     * @var integer <p>最大拉流并发数，最大为4，默认4。</p>
     */
    public $MaxConcurrent;

    /**
     * @var array <p>绑定的安全组 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecurityGroupIds;

    /**
     * @var array <p>可用区，output目前最多只支持一个。</p>
     */
    public $Zones;

    /**
     * @var DescribeOutputRISTSettings <p>输出的RIST配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RISTSettings;

    /**
     * @var PidSelector <p>对于含有多个音/视频轨的流，可以指定需要使用的轨道</p>
     * @deprecated
     */
    public $PidSelector;

    /**
     * @var array <p>输出模块配置，相关的URL，包括提供的拉流地址，或者配置的输出到第三方的转推地址</p>
     */
    public $StreamUrls;

    /**
     * @var StreamSelector <p>对于含有多个音/视频轨的流，可以指定需要使用的轨道</p>
     */
    public $StreamSelector;

    /**
     * @var string <p>启用或者禁用输出</p><p>枚举值：</p><ul><li>DISABLED： 禁用</li><li>ENABLED： 启用</li></ul>
     */
    public $State;

    /**
     * @param string $OutputId <p>输出Id。</p>
     * @param string $OutputName <p>输出名称。</p>
     * @param string $OutputType <p>输出类型。</p>
     * @param string $OutputKind <p>输出模块类型，包括Pinpoint（单点输出，最多支持四路并发输出）；MultiMesh（多路输出，支持大于四路的并发输出，目前可以达到200路）。默认类型为 Pinpoint 输出。对于单个 Flow 一个区域最多只能有一个 MultiMesh 输出。</p>
     * @param string $Description <p>输出描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol <p>输出协议。</p>
     * @param array $OutputAddressList <p>输出的出口地址信息列表。</p>
     * @param string $OutputRegion <p>输出的地区。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribeOutputSRTSettings $SRTSettings <p>输出的SRT配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribeOutputRTPSettings $RTPSettings <p>输出的RTP配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribeOutputRTMPSettings $RTMPSettings <p>输出的RTMP配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribeOutputRTMPPullSettings $RTMPPullSettings <p>输出的RTMP拉流配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AllowIpList <p>CIDR白名单列表。<br>当Protocol为RTMP_PULL有效，为空代表不限制客户端IP。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribeOutputRTSPPullSettings $RTSPPullSettings <p>输出的RTSP拉流配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribeOutputHLSPullSettings $HLSPullSettings <p>输出的HLS拉流配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxConcurrent <p>最大拉流并发数，最大为4，默认4。</p>
     * @param array $SecurityGroupIds <p>绑定的安全组 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Zones <p>可用区，output目前最多只支持一个。</p>
     * @param DescribeOutputRISTSettings $RISTSettings <p>输出的RIST配置信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param PidSelector $PidSelector <p>对于含有多个音/视频轨的流，可以指定需要使用的轨道</p>
     * @param array $StreamUrls <p>输出模块配置，相关的URL，包括提供的拉流地址，或者配置的输出到第三方的转推地址</p>
     * @param StreamSelector $StreamSelector <p>对于含有多个音/视频轨的流，可以指定需要使用的轨道</p>
     * @param string $State <p>启用或者禁用输出</p><p>枚举值：</p><ul><li>DISABLED： 禁用</li><li>ENABLED： 启用</li></ul>
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

        if (array_key_exists("StreamSelector",$param) and $param["StreamSelector"] !== null) {
            $this->StreamSelector = new StreamSelector();
            $this->StreamSelector->deserialize($param["StreamSelector"]);
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }
    }
}
