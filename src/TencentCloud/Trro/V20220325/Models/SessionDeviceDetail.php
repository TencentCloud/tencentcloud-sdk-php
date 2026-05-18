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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 会话数据详单（按设备区分）
 *
 * @method string getDeviceType() 获取<p>设备类型：field或remote</p>
 * @method void setDeviceType(string $DeviceType) 设置<p>设备类型：field或remote</p>
 * @method integer getStartTime() 获取<p>起始点位时间，单位：秒</p>
 * @method void setStartTime(integer $StartTime) 设置<p>起始点位时间，单位：秒</p>
 * @method integer getEndTime() 获取<p>结束点位时间，单位：秒</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束点位时间，单位：秒</p>
 * @method string getSessionId() 获取<p>会话ID</p>
 * @method void setSessionId(string $SessionId) 设置<p>会话ID</p>
 * @method array getRate() 获取<p>码率，单位：kbps</p>
 * @method void setRate(array $Rate) 设置<p>码率，单位：kbps</p>
 * @method array getFps() 获取<p>帧率</p>
 * @method void setFps(array $Fps) 设置<p>帧率</p>
 * @method array getLost() 获取<p>丢包率，单位：%</p>
 * @method void setLost(array $Lost) 设置<p>丢包率，单位：%</p>
 * @method array getNetworkLatency() 获取<p>网络时延，单位：ms</p>
 * @method void setNetworkLatency(array $NetworkLatency) 设置<p>网络时延，单位：ms</p>
 * @method array getVideoLatency() 获取<p>视频时延，单位：ms</p>
 * @method void setVideoLatency(array $VideoLatency) 设置<p>视频时延，单位：ms</p>
 * @method array getCpuUsed() 获取<p>CPU使用率，单位：%</p>
 * @method void setCpuUsed(array $CpuUsed) 设置<p>CPU使用率，单位：%</p>
 * @method array getMemUsed() 获取<p>内存使用率，单位：%</p>
 * @method void setMemUsed(array $MemUsed) 设置<p>内存使用率，单位：%</p>
 * @method array getTimeOffset() 获取<p>时间偏移量，单位：秒</p>
 * @method void setTimeOffset(array $TimeOffset) 设置<p>时间偏移量，单位：秒</p>
 * @method string getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID</p>
 * @method string getDeviceId() 获取<p>设备ID</p>
 * @method void setDeviceId(string $DeviceId) 设置<p>设备ID</p>
 * @method string getVer() 获取<p>sdk版本</p>
 * @method void setVer(string $Ver) 设置<p>sdk版本</p>
 * @method string getSdkMode() 获取<p>模式(p2p/server)</p>
 * @method void setSdkMode(string $SdkMode) 设置<p>模式(p2p/server)</p>
 * @method array getDecodeCost() 获取<p>解码耗时，单位：ms</p>
 * @method void setDecodeCost(array $DecodeCost) 设置<p>解码耗时，单位：ms</p>
 * @method array getRenderConst() 获取<p>【已废弃，使用RenderCost】</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRenderConst(array $RenderConst) 设置<p>【已废弃，使用RenderCost】</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getK100() 获取<p>卡顿k100</p>
 * @method void setK100(array $K100) 设置<p>卡顿k100</p>
 * @method array getK150() 获取<p>卡顿k150</p>
 * @method void setK150(array $K150) 设置<p>卡顿k150</p>
 * @method array getNACK() 获取<p>nack请求数</p>
 * @method void setNACK(array $NACK) 设置<p>nack请求数</p>
 * @method array getBitRateEstimate() 获取<p>服务端调控码率,单位：kbps</p>
 * @method void setBitRateEstimate(array $BitRateEstimate) 设置<p>服务端调控码率,单位：kbps</p>
 * @method integer getWidth() 获取<p>宽度</p>
 * @method void setWidth(integer $Width) 设置<p>宽度</p>
 * @method integer getHeight() 获取<p>高度</p>
 * @method void setHeight(integer $Height) 设置<p>高度</p>
 * @method array getEncodeCost() 获取<p>编码耗时，单位：ms</p>
 * @method void setEncodeCost(array $EncodeCost) 设置<p>编码耗时，单位：ms</p>
 * @method array getCaptureCost() 获取<p>采集耗时，单位：ms</p>
 * @method void setCaptureCost(array $CaptureCost) 设置<p>采集耗时，单位：ms</p>
 * @method array getRenderCost() 获取<p>渲染耗时，单位：ms</p>
 * @method void setRenderCost(array $RenderCost) 设置<p>渲染耗时，单位：ms</p>
 * @method integer getConfigWidth() 获取<p>配置宽度</p>
 * @method void setConfigWidth(integer $ConfigWidth) 设置<p>配置宽度</p>
 * @method integer getConfigHeight() 获取<p>配置高度</p>
 * @method void setConfigHeight(integer $ConfigHeight) 设置<p>配置高度</p>
 * @method array getFrameDelta() 获取<p>平均帧间隔</p>
 * @method void setFrameDelta(array $FrameDelta) 设置<p>平均帧间隔</p>
 * @method array getMaxFrameDelta() 获取<p>最大帧间隔</p>
 * @method void setMaxFrameDelta(array $MaxFrameDelta) 设置<p>最大帧间隔</p>
 * @method array getTotalBitrateEstimate() 获取<p>总码率评估,单位：kbps</p>
 * @method void setTotalBitrateEstimate(array $TotalBitrateEstimate) 设置<p>总码率评估,单位：kbps</p>
 * @method array getLag100Duration() 获取<p>帧间隔大于100ms的卡顿时长</p>
 * @method void setLag100Duration(array $Lag100Duration) 设置<p>帧间隔大于100ms的卡顿时长</p>
 * @method array getLag150Duration() 获取<p>帧间隔大于150ms的卡顿时长</p>
 * @method void setLag150Duration(array $Lag150Duration) 设置<p>帧间隔大于150ms的卡顿时长</p>
 * @method integer getMultiMode() 获取<p>是否开启多网：0 单网，1 多网</p>
 * @method void setMultiMode(integer $MultiMode) 设置<p>是否开启多网：0 单网，1 多网</p>
 * @method array getMultiNet() 获取<p>多网卡信息</p>
 * @method void setMultiNet(array $MultiNet) 设置<p>多网卡信息</p>
 * @method array getControlLatency() 获取<p>现场设备和远端设备消息通道往返延迟</p><p>单位：毫秒ms</p>
 * @method void setControlLatency(array $ControlLatency) 设置<p>现场设备和远端设备消息通道往返延迟</p><p>单位：毫秒ms</p>
 */
class SessionDeviceDetail extends AbstractModel
{
    /**
     * @var string <p>设备类型：field或remote</p>
     */
    public $DeviceType;

    /**
     * @var integer <p>起始点位时间，单位：秒</p>
     */
    public $StartTime;

    /**
     * @var integer <p>结束点位时间，单位：秒</p>
     */
    public $EndTime;

    /**
     * @var string <p>会话ID</p>
     */
    public $SessionId;

    /**
     * @var array <p>码率，单位：kbps</p>
     */
    public $Rate;

    /**
     * @var array <p>帧率</p>
     */
    public $Fps;

    /**
     * @var array <p>丢包率，单位：%</p>
     */
    public $Lost;

    /**
     * @var array <p>网络时延，单位：ms</p>
     */
    public $NetworkLatency;

    /**
     * @var array <p>视频时延，单位：ms</p>
     */
    public $VideoLatency;

    /**
     * @var array <p>CPU使用率，单位：%</p>
     */
    public $CpuUsed;

    /**
     * @var array <p>内存使用率，单位：%</p>
     */
    public $MemUsed;

    /**
     * @var array <p>时间偏移量，单位：秒</p>
     */
    public $TimeOffset;

    /**
     * @var string <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>设备ID</p>
     */
    public $DeviceId;

    /**
     * @var string <p>sdk版本</p>
     */
    public $Ver;

    /**
     * @var string <p>模式(p2p/server)</p>
     */
    public $SdkMode;

    /**
     * @var array <p>解码耗时，单位：ms</p>
     */
    public $DecodeCost;

    /**
     * @var array <p>【已废弃，使用RenderCost】</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $RenderConst;

    /**
     * @var array <p>卡顿k100</p>
     */
    public $K100;

    /**
     * @var array <p>卡顿k150</p>
     */
    public $K150;

    /**
     * @var array <p>nack请求数</p>
     */
    public $NACK;

    /**
     * @var array <p>服务端调控码率,单位：kbps</p>
     */
    public $BitRateEstimate;

    /**
     * @var integer <p>宽度</p>
     */
    public $Width;

    /**
     * @var integer <p>高度</p>
     */
    public $Height;

    /**
     * @var array <p>编码耗时，单位：ms</p>
     */
    public $EncodeCost;

    /**
     * @var array <p>采集耗时，单位：ms</p>
     */
    public $CaptureCost;

    /**
     * @var array <p>渲染耗时，单位：ms</p>
     */
    public $RenderCost;

    /**
     * @var integer <p>配置宽度</p>
     */
    public $ConfigWidth;

    /**
     * @var integer <p>配置高度</p>
     */
    public $ConfigHeight;

    /**
     * @var array <p>平均帧间隔</p>
     */
    public $FrameDelta;

    /**
     * @var array <p>最大帧间隔</p>
     */
    public $MaxFrameDelta;

    /**
     * @var array <p>总码率评估,单位：kbps</p>
     */
    public $TotalBitrateEstimate;

    /**
     * @var array <p>帧间隔大于100ms的卡顿时长</p>
     */
    public $Lag100Duration;

    /**
     * @var array <p>帧间隔大于150ms的卡顿时长</p>
     */
    public $Lag150Duration;

    /**
     * @var integer <p>是否开启多网：0 单网，1 多网</p>
     */
    public $MultiMode;

    /**
     * @var array <p>多网卡信息</p>
     */
    public $MultiNet;

    /**
     * @var array <p>现场设备和远端设备消息通道往返延迟</p><p>单位：毫秒ms</p>
     */
    public $ControlLatency;

    /**
     * @param string $DeviceType <p>设备类型：field或remote</p>
     * @param integer $StartTime <p>起始点位时间，单位：秒</p>
     * @param integer $EndTime <p>结束点位时间，单位：秒</p>
     * @param string $SessionId <p>会话ID</p>
     * @param array $Rate <p>码率，单位：kbps</p>
     * @param array $Fps <p>帧率</p>
     * @param array $Lost <p>丢包率，单位：%</p>
     * @param array $NetworkLatency <p>网络时延，单位：ms</p>
     * @param array $VideoLatency <p>视频时延，单位：ms</p>
     * @param array $CpuUsed <p>CPU使用率，单位：%</p>
     * @param array $MemUsed <p>内存使用率，单位：%</p>
     * @param array $TimeOffset <p>时间偏移量，单位：秒</p>
     * @param string $ProjectId <p>项目ID</p>
     * @param string $DeviceId <p>设备ID</p>
     * @param string $Ver <p>sdk版本</p>
     * @param string $SdkMode <p>模式(p2p/server)</p>
     * @param array $DecodeCost <p>解码耗时，单位：ms</p>
     * @param array $RenderConst <p>【已废弃，使用RenderCost】</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $K100 <p>卡顿k100</p>
     * @param array $K150 <p>卡顿k150</p>
     * @param array $NACK <p>nack请求数</p>
     * @param array $BitRateEstimate <p>服务端调控码率,单位：kbps</p>
     * @param integer $Width <p>宽度</p>
     * @param integer $Height <p>高度</p>
     * @param array $EncodeCost <p>编码耗时，单位：ms</p>
     * @param array $CaptureCost <p>采集耗时，单位：ms</p>
     * @param array $RenderCost <p>渲染耗时，单位：ms</p>
     * @param integer $ConfigWidth <p>配置宽度</p>
     * @param integer $ConfigHeight <p>配置高度</p>
     * @param array $FrameDelta <p>平均帧间隔</p>
     * @param array $MaxFrameDelta <p>最大帧间隔</p>
     * @param array $TotalBitrateEstimate <p>总码率评估,单位：kbps</p>
     * @param array $Lag100Duration <p>帧间隔大于100ms的卡顿时长</p>
     * @param array $Lag150Duration <p>帧间隔大于150ms的卡顿时长</p>
     * @param integer $MultiMode <p>是否开启多网：0 单网，1 多网</p>
     * @param array $MultiNet <p>多网卡信息</p>
     * @param array $ControlLatency <p>现场设备和远端设备消息通道往返延迟</p><p>单位：毫秒ms</p>
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

        if (array_key_exists("ControlLatency",$param) and $param["ControlLatency"] !== null) {
            $this->ControlLatency = $param["ControlLatency"];
        }
    }
}
