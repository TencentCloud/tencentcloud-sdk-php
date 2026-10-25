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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 一次目标探测结果
 *
 * @method string getTargetIp() 获取<p>探测目标 IP</p>
 * @method void setTargetIp(string $TargetIp) 设置<p>探测目标 IP</p>
 * @method boolean getPingSuccess() 获取<p>本次探测是否成功</p>
 * @method void setPingSuccess(boolean $PingSuccess) 设置<p>本次探测是否成功</p>
 * @method float getSent() 获取<p>发送包数</p>
 * @method void setSent(float $Sent) 设置<p>发送包数</p>
 * @method float getReceived() 获取<p>接收包数</p>
 * @method void setReceived(float $Received) 设置<p>接收包数</p>
 * @method float getLoss() 获取<p>丢包率，0 到 100</p>
 * @method void setLoss(float $Loss) 设置<p>丢包率，0 到 100</p>
 * @method float getMin() 获取<p>最小时延，单位毫秒</p>
 * @method void setMin(float $Min) 设置<p>最小时延，单位毫秒</p>
 * @method float getMax() 获取<p>最大时延，单位毫秒</p>
 * @method void setMax(float $Max) 设置<p>最大时延，单位毫秒</p>
 * @method float getAvg() 获取<p>平均时延，单位毫秒</p>
 * @method void setAvg(float $Avg) 设置<p>平均时延，单位毫秒</p>
 * @method string getProtocol() 获取<p>探测协议</p>
 * @method void setProtocol(string $Protocol) 设置<p>探测协议</p>
 * @method string getDomain() 获取<p>探测目标域名或地址</p>
 * @method void setDomain(string $Domain) 设置<p>探测目标域名或地址</p>
 * @method string getSkipReason() 获取<p>未探测原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSkipReason(string $SkipReason) 设置<p>未探测原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取<p>目标 IP 所在地区。与客户端地区无关。无法解析时为未知。</p>
 * @method void setRegion(string $Region) 设置<p>目标 IP 所在地区。与客户端地区无关。无法解析时为未知。</p>
 * @method string getOperator() 获取<p>目标 IP 所属运营商。与客户端运营商无关。无法解析时为未知。</p>
 * @method void setOperator(string $Operator) 设置<p>目标 IP 所属运营商。与客户端运营商无关。无法解析时为未知。</p>
 */
class DialProbe extends AbstractModel
{
    /**
     * @var string <p>探测目标 IP</p>
     */
    public $TargetIp;

    /**
     * @var boolean <p>本次探测是否成功</p>
     */
    public $PingSuccess;

    /**
     * @var float <p>发送包数</p>
     */
    public $Sent;

    /**
     * @var float <p>接收包数</p>
     */
    public $Received;

    /**
     * @var float <p>丢包率，0 到 100</p>
     */
    public $Loss;

    /**
     * @var float <p>最小时延，单位毫秒</p>
     */
    public $Min;

    /**
     * @var float <p>最大时延，单位毫秒</p>
     */
    public $Max;

    /**
     * @var float <p>平均时延，单位毫秒</p>
     */
    public $Avg;

    /**
     * @var string <p>探测协议</p>
     */
    public $Protocol;

    /**
     * @var string <p>探测目标域名或地址</p>
     */
    public $Domain;

    /**
     * @var string <p>未探测原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SkipReason;

    /**
     * @var string <p>目标 IP 所在地区。与客户端地区无关。无法解析时为未知。</p>
     */
    public $Region;

    /**
     * @var string <p>目标 IP 所属运营商。与客户端运营商无关。无法解析时为未知。</p>
     */
    public $Operator;

    /**
     * @param string $TargetIp <p>探测目标 IP</p>
     * @param boolean $PingSuccess <p>本次探测是否成功</p>
     * @param float $Sent <p>发送包数</p>
     * @param float $Received <p>接收包数</p>
     * @param float $Loss <p>丢包率，0 到 100</p>
     * @param float $Min <p>最小时延，单位毫秒</p>
     * @param float $Max <p>最大时延，单位毫秒</p>
     * @param float $Avg <p>平均时延，单位毫秒</p>
     * @param string $Protocol <p>探测协议</p>
     * @param string $Domain <p>探测目标域名或地址</p>
     * @param string $SkipReason <p>未探测原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region <p>目标 IP 所在地区。与客户端地区无关。无法解析时为未知。</p>
     * @param string $Operator <p>目标 IP 所属运营商。与客户端运营商无关。无法解析时为未知。</p>
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
        if (array_key_exists("TargetIp",$param) and $param["TargetIp"] !== null) {
            $this->TargetIp = $param["TargetIp"];
        }

        if (array_key_exists("PingSuccess",$param) and $param["PingSuccess"] !== null) {
            $this->PingSuccess = $param["PingSuccess"];
        }

        if (array_key_exists("Sent",$param) and $param["Sent"] !== null) {
            $this->Sent = $param["Sent"];
        }

        if (array_key_exists("Received",$param) and $param["Received"] !== null) {
            $this->Received = $param["Received"];
        }

        if (array_key_exists("Loss",$param) and $param["Loss"] !== null) {
            $this->Loss = $param["Loss"];
        }

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }

        if (array_key_exists("Avg",$param) and $param["Avg"] !== null) {
            $this->Avg = $param["Avg"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("SkipReason",$param) and $param["SkipReason"] !== null) {
            $this->SkipReason = $param["SkipReason"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
