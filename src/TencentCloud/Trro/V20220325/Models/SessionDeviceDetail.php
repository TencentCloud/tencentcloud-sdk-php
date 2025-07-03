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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 会话数据详单（按设备区分）
 *
 * @method string getDeviceType() 获取设备类型：field或remote
 * @method void setDeviceType(string $DeviceType) 设置设备类型：field或remote
 * @method integer getStartTime() 获取起始点位时间，单位：秒
 * @method void setStartTime(integer $StartTime) 设置起始点位时间，单位：秒
 * @method integer getEndTime() 获取结束点位时间，单位：秒
 * @method void setEndTime(integer $EndTime) 设置结束点位时间，单位：秒
 * @method string getSessionId() 获取会话ID
 * @method void setSessionId(string $SessionId) 设置会话ID
 * @method array getRate() 获取码率，单位：kbps
 * @method void setRate(array $Rate) 设置码率，单位：kbps
 * @method array getFps() 获取帧率
 * @method void setFps(array $Fps) 设置帧率
 * @method array getLost() 获取丢包率，单位：%
 * @method void setLost(array $Lost) 设置丢包率，单位：%
 * @method array getNetworkLatency() 获取网络时延，单位：ms
 * @method void setNetworkLatency(array $NetworkLatency) 设置网络时延，单位：ms
 * @method array getVideoLatency() 获取视频时延，单位：ms
 * @method void setVideoLatency(array $VideoLatency) 设置视频时延，单位：ms
 * @method array getCpuUsed() 获取CPU使用率，单位：%
 * @method void setCpuUsed(array $CpuUsed) 设置CPU使用率，单位：%
 * @method array getMemUsed() 获取内存使用率，单位：%
 * @method void setMemUsed(array $MemUsed) 设置内存使用率，单位：%
 * @method array getTimeOffset() 获取时间偏移量，单位：秒
 * @method void setTimeOffset(array $TimeOffset) 设置时间偏移量，单位：秒
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getDeviceId() 获取设备ID
 * @method void setDeviceId(string $DeviceId) 设置设备ID
 * @method string getVer() 获取sdk版本
 * @method void setVer(string $Ver) 设置sdk版本
 * @method string getSdkMode() 获取模式(p2p/server)
 * @method void setSdkMode(string $SdkMode) 设置模式(p2p/server)
 * @method array getDecodeCost() 获取解码耗时，单位：ms
 * @method void setDecodeCost(array $DecodeCost) 设置解码耗时，单位：ms
 * @method array getRenderConst() 获取【已废弃，使用RenderCost】
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRenderConst(array $RenderConst) 设置【已废弃，使用RenderCost】
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getK100() 获取卡顿k100
 * @method void setK100(array $K100) 设置卡顿k100
 * @method array getK150() 获取卡顿k150
 * @method void setK150(array $K150) 设置卡顿k150
 * @method array getNACK() 获取nack请求数
 * @method void setNACK(array $NACK) 设置nack请求数
 * @method array getBitRateEstimate() 获取服务端调控码率,单位：kbps
 * @method void setBitRateEstimate(array $BitRateEstimate) 设置服务端调控码率,单位：kbps
 * @method integer getWidth() 获取宽度
 * @method void setWidth(integer $Width) 设置宽度
 * @method integer getHeight() 获取高度
 * @method void setHeight(integer $Height) 设置高度
 * @method array getEncodeCost() 获取编码耗时，单位：ms
 * @method void setEncodeCost(array $EncodeCost) 设置编码耗时，单位：ms
 * @method array getCaptureCost() 获取采集耗时，单位：ms
 * @method void setCaptureCost(array $CaptureCost) 设置采集耗时，单位：ms
 * @method array getRenderCost() 获取渲染耗时，单位：ms
 * @method void setRenderCost(array $RenderCost) 设置渲染耗时，单位：ms
 * @method integer getConfigWidth() 获取配置宽度
 * @method void setConfigWidth(integer $ConfigWidth) 设置配置宽度
 * @method integer getConfigHeight() 获取配置高度
 * @method void setConfigHeight(integer $ConfigHeight) 设置配置高度
 * @method array getFrameDelta() 获取平均帧间隔
 * @method void setFrameDelta(array $FrameDelta) 设置平均帧间隔
 * @method array getMaxFrameDelta() 获取最大帧间隔
 * @method void setMaxFrameDelta(array $MaxFrameDelta) 设置最大帧间隔
 * @method array getTotalBitrateEstimate() 获取总码率评估,单位：kbps
 * @method void setTotalBitrateEstimate(array $TotalBitrateEstimate) 设置总码率评估,单位：kbps
 * @method array getLag100Duration() 获取帧间隔大于100ms的卡顿时长
 * @method void setLag100Duration(array $Lag100Duration) 设置帧间隔大于100ms的卡顿时长
 * @method array getLag150Duration() 获取帧间隔大于150ms的卡顿时长
 * @method void setLag150Duration(array $Lag150Duration) 设置帧间隔大于150ms的卡顿时长
 * @method integer getMultiMode() 获取是否开启多网：0 单网，1 多网
 * @method void setMultiMode(integer $MultiMode) 设置是否开启多网：0 单网，1 多网
 * @method array getMultiNet() 获取多网卡信息
 * @method void setMultiNet(array $MultiNet) 设置多网卡信息
 */
class SessionDeviceDetail extends AbstractModel
{
    /**
     * @var string 设备类型：field或remote
     */
    public $DeviceType;

    /**
     * @var integer 起始点位时间，单位：秒
     */
    public $StartTime;

    /**
     * @var integer 结束点位时间，单位：秒
     */
    public $EndTime;

    /**
     * @var string 会话ID
     */
    public $SessionId;

    /**
     * @var array 码率，单位：kbps
     */
    public $Rate;

    /**
     * @var array 帧率
     */
    public $Fps;

    /**
     * @var array 丢包率，单位：%
     */
    public $Lost;

    /**
     * @var array 网络时延，单位：ms
     */
    public $NetworkLatency;

    /**
     * @var array 视频时延，单位：ms
     */
    public $VideoLatency;

    /**
     * @var array CPU使用率，单位：%
     */
    public $CpuUsed;

    /**
     * @var array 内存使用率，单位：%
     */
    public $MemUsed;

    /**
     * @var array 时间偏移量，单位：秒
     */
    public $TimeOffset;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 设备ID
     */
    public $DeviceId;

    /**
     * @var string sdk版本
     */
    public $Ver;

    /**
     * @var string 模式(p2p/server)
     */
    public $SdkMode;

    /**
     * @var array 解码耗时，单位：ms
     */
    public $DecodeCost;

    /**
     * @var array 【已废弃，使用RenderCost】
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $RenderConst;

    /**
     * @var array 卡顿k100
     */
    public $K100;

    /**
     * @var array 卡顿k150
     */
    public $K150;

    /**
     * @var array nack请求数
     */
    public $NACK;

    /**
     * @var array 服务端调控码率,单位：kbps
     */
    public $BitRateEstimate;

    /**
     * @var integer 宽度
     */
    public $Width;

    /**
     * @var integer 高度
     */
    public $Height;

    /**
     * @var array 编码耗时，单位：ms
     */
    public $EncodeCost;

    /**
     * @var array 采集耗时，单位：ms
     */
    public $CaptureCost;

    /**
     * @var array 渲染耗时，单位：ms
     */
    public $RenderCost;

    /**
     * @var integer 配置宽度
     */
    public $ConfigWidth;

    /**
     * @var integer 配置高度
     */
    public $ConfigHeight;

    /**
     * @var array 平均帧间隔
     */
    public $FrameDelta;

    /**
     * @var array 最大帧间隔
     */
    public $MaxFrameDelta;

    /**
     * @var array 总码率评估,单位：kbps
     */
    public $TotalBitrateEstimate;

    /**
     * @var array 帧间隔大于100ms的卡顿时长
     */
    public $Lag100Duration;

    /**
     * @var array 帧间隔大于150ms的卡顿时长
     */
    public $Lag150Duration;

    /**
     * @var integer 是否开启多网：0 单网，1 多网
     */
    public $MultiMode;

    /**
     * @var array 多网卡信息
     */
    public $MultiNet;

    /**
     * @param string $DeviceType 设备类型：field或remote
     * @param integer $StartTime 起始点位时间，单位：秒
     * @param integer $EndTime 结束点位时间，单位：秒
     * @param string $SessionId 会话ID
     * @param array $Rate 码率，单位：kbps
     * @param array $Fps 帧率
     * @param array $Lost 丢包率，单位：%
     * @param array $NetworkLatency 网络时延，单位：ms
     * @param array $VideoLatency 视频时延，单位：ms
     * @param array $CpuUsed CPU使用率，单位：%
     * @param array $MemUsed 内存使用率，单位：%
     * @param array $TimeOffset 时间偏移量，单位：秒
     * @param string $ProjectId 项目ID
     * @param string $DeviceId 设备ID
     * @param string $Ver sdk版本
     * @param string $SdkMode 模式(p2p/server)
     * @param array $DecodeCost 解码耗时，单位：ms
     * @param array $RenderConst 【已废弃，使用RenderCost】
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $K100 卡顿k100
     * @param array $K150 卡顿k150
     * @param array $NACK nack请求数
     * @param array $BitRateEstimate 服务端调控码率,单位：kbps
     * @param integer $Width 宽度
     * @param integer $Height 高度
     * @param array $EncodeCost 编码耗时，单位：ms
     * @param array $CaptureCost 采集耗时，单位：ms
     * @param array $RenderCost 渲染耗时，单位：ms
     * @param integer $ConfigWidth 配置宽度
     * @param integer $ConfigHeight 配置高度
     * @param array $FrameDelta 平均帧间隔
     * @param array $MaxFrameDelta 最大帧间隔
     * @param array $TotalBitrateEstimate 总码率评估,单位：kbps
     * @param array $Lag100Duration 帧间隔大于100ms的卡顿时长
     * @param array $Lag150Duration 帧间隔大于150ms的卡顿时长
     * @param integer $MultiMode 是否开启多网：0 单网，1 多网
     * @param array $MultiNet 多网卡信息
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
        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }

        if (array_key_exists("Lost",$param) and $param["Lost"] !== null) {
            $this->Lost = $param["Lost"];
        }

        if (array_key_exists("NetworkLatency",$param) and $param["NetworkLatency"] !== null) {
            $this->NetworkLatency = $param["NetworkLatency"];
        }

        if (array_key_exists("VideoLatency",$param) and $param["VideoLatency"] !== null) {
            $this->VideoLatency = $param["VideoLatency"];
        }

        if (array_key_exists("CpuUsed",$param) and $param["CpuUsed"] !== null) {
            $this->CpuUsed = $param["CpuUsed"];
        }

        if (array_key_exists("MemUsed",$param) and $param["MemUsed"] !== null) {
            $this->MemUsed = $param["MemUsed"];
        }

        if (array_key_exists("TimeOffset",$param) and $param["TimeOffset"] !== null) {
            $this->TimeOffset = $param["TimeOffset"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("Ver",$param) and $param["Ver"] !== null) {
            $this->Ver = $param["Ver"];
        }

        if (array_key_exists("SdkMode",$param) and $param["SdkMode"] !== null) {
            $this->SdkMode = $param["SdkMode"];
        }

        if (array_key_exists("DecodeCost",$param) and $param["DecodeCost"] !== null) {
            $this->DecodeCost = $param["DecodeCost"];
        }

        if (array_key_exists("RenderConst",$param) and $param["RenderConst"] !== null) {
            $this->RenderConst = $param["RenderConst"];
        }

        if (array_key_exists("K100",$param) and $param["K100"] !== null) {
            $this->K100 = $param["K100"];
        }

        if (array_key_exists("K150",$param) and $param["K150"] !== null) {
            $this->K150 = $param["K150"];
        }

        if (array_key_exists("NACK",$param) and $param["NACK"] !== null) {
            $this->NACK = $param["NACK"];
        }

        if (array_key_exists("BitRateEstimate",$param) and $param["BitRateEstimate"] !== null) {
            $this->BitRateEstimate = $param["BitRateEstimate"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("EncodeCost",$param) and $param["EncodeCost"] !== null) {
            $this->EncodeCost = $param["EncodeCost"];
        }

        if (array_key_exists("CaptureCost",$param) and $param["CaptureCost"] !== null) {
            $this->CaptureCost = $param["CaptureCost"];
        }

        if (array_key_exists("RenderCost",$param) and $param["RenderCost"] !== null) {
            $this->RenderCost = $param["RenderCost"];
        }

        if (array_key_exists("ConfigWidth",$param) and $param["ConfigWidth"] !== null) {
            $this->ConfigWidth = $param["ConfigWidth"];
        }

        if (array_key_exists("ConfigHeight",$param) and $param["ConfigHeight"] !== null) {
            $this->ConfigHeight = $param["ConfigHeight"];
        }

        if (array_key_exists("FrameDelta",$param) and $param["FrameDelta"] !== null) {
            $this->FrameDelta = $param["FrameDelta"];
        }

        if (array_key_exists("MaxFrameDelta",$param) and $param["MaxFrameDelta"] !== null) {
            $this->MaxFrameDelta = $param["MaxFrameDelta"];
        }

        if (array_key_exists("TotalBitrateEstimate",$param) and $param["TotalBitrateEstimate"] !== null) {
            $this->TotalBitrateEstimate = $param["TotalBitrateEstimate"];
        }

        if (array_key_exists("Lag100Duration",$param) and $param["Lag100Duration"] !== null) {
            $this->Lag100Duration = $param["Lag100Duration"];
        }

        if (array_key_exists("Lag150Duration",$param) and $param["Lag150Duration"] !== null) {
            $this->Lag150Duration = $param["Lag150Duration"];
        }

        if (array_key_exists("MultiMode",$param) and $param["MultiMode"] !== null) {
            $this->MultiMode = $param["MultiMode"];
        }

        if (array_key_exists("MultiNet",$param) and $param["MultiNet"] !== null) {
            $this->MultiNet = [];
            foreach ($param["MultiNet"] as $key => $value){
                $obj = new MultiNet();
                $obj->deserialize($value);
                array_push($this->MultiNet, $obj);
            }
        }
    }
}
