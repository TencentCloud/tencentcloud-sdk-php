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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询网关监控信息返回结果
 *
 * @method integer getDeviceTotal() 获取设备接入总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceTotal(integer $DeviceTotal) 设置设备接入总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDeviceOnline() 获取设备在线数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceOnline(integer $DeviceOnline) 设置设备在线数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDeviceOffline() 获取设备离线数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceOffline(integer $DeviceOffline) 设置设备离线数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getChannelTotal() 获取视频通道总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelTotal(integer $ChannelTotal) 设置视频通道总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getChannelOnline() 获取视频通道在线数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelOnline(integer $ChannelOnline) 设置视频通道在线数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getChannelOffline() 获取视频通道离线数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelOffline(integer $ChannelOffline) 设置视频通道离线数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpFlow() 获取网关上行流量,单位kbps
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpFlow(integer $UpFlow) 设置网关上行流量,单位kbps
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getChannelPull() 获取流在传输中的通道数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelPull(integer $ChannelPull) 设置流在传输中的通道数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getChannelUnPull() 获取流未传输中的通道数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelUnPull(integer $ChannelUnPull) 设置流未传输中的通道数
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeGatewayMonitor extends AbstractModel
{
    /**
     * @var integer 设备接入总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceTotal;

    /**
     * @var integer 设备在线数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceOnline;

    /**
     * @var integer 设备离线数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceOffline;

    /**
     * @var integer 视频通道总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelTotal;

    /**
     * @var integer 视频通道在线数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelOnline;

    /**
     * @var integer 视频通道离线数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelOffline;

    /**
     * @var integer 网关上行流量,单位kbps
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpFlow;

    /**
     * @var integer 流在传输中的通道数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelPull;

    /**
     * @var integer 流未传输中的通道数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelUnPull;

    /**
     * @param integer $DeviceTotal 设备接入总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DeviceOnline 设备在线数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DeviceOffline 设备离线数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ChannelTotal 视频通道总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ChannelOnline 视频通道在线数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ChannelOffline 视频通道离线数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpFlow 网关上行流量,单位kbps
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ChannelPull 流在传输中的通道数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ChannelUnPull 流未传输中的通道数
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("DeviceTotal",$param) and $param["DeviceTotal"] !== null) {
            $this->DeviceTotal = $param["DeviceTotal"];
        }

        if (array_key_exists("DeviceOnline",$param) and $param["DeviceOnline"] !== null) {
            $this->DeviceOnline = $param["DeviceOnline"];
        }

        if (array_key_exists("DeviceOffline",$param) and $param["DeviceOffline"] !== null) {
            $this->DeviceOffline = $param["DeviceOffline"];
        }

        if (array_key_exists("ChannelTotal",$param) and $param["ChannelTotal"] !== null) {
            $this->ChannelTotal = $param["ChannelTotal"];
        }

        if (array_key_exists("ChannelOnline",$param) and $param["ChannelOnline"] !== null) {
            $this->ChannelOnline = $param["ChannelOnline"];
        }

        if (array_key_exists("ChannelOffline",$param) and $param["ChannelOffline"] !== null) {
            $this->ChannelOffline = $param["ChannelOffline"];
        }

        if (array_key_exists("UpFlow",$param) and $param["UpFlow"] !== null) {
            $this->UpFlow = $param["UpFlow"];
        }

        if (array_key_exists("ChannelPull",$param) and $param["ChannelPull"] !== null) {
            $this->ChannelPull = $param["ChannelPull"];
        }

        if (array_key_exists("ChannelUnPull",$param) and $param["ChannelUnPull"] !== null) {
            $this->ChannelUnPull = $param["ChannelUnPull"];
        }
    }
}
