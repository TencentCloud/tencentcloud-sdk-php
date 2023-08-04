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
 * ControlDevicePTZ请求参数结构体
 *
 * @method string getChannelId() 获取通道 ID（从通道查询接口DescribeDeviceChannel中获取）
 * @method void setChannelId(string $ChannelId) 设置通道 ID（从通道查询接口DescribeDeviceChannel中获取）
 * @method string getType() 获取命令类型（上:up,下:down,左:left,右:right
上左:leftup,上右:rightup,下左:leftdown,下右:rightdown
放大:zoomin,缩小:zoomout
聚焦远:focusfar,聚焦近:focusnear
光圈放大:irisin,光圈缩小:irisout）
 * @method void setType(string $Type) 设置命令类型（上:up,下:down,左:left,右:right
上左:leftup,上右:rightup,下左:leftdown,下右:rightdown
放大:zoomin,缩小:zoomout
聚焦远:focusfar,聚焦近:focusnear
光圈放大:irisin,光圈缩小:irisout）
 * @method integer getSpeed() 获取命令描述（速度值范围1-8）
 * @method void setSpeed(integer $Speed) 设置命令描述（速度值范围1-8）
 */
class ControlDevicePTZRequest extends AbstractModel
{
    /**
     * @var string 通道 ID（从通道查询接口DescribeDeviceChannel中获取）
     */
    public $ChannelId;

    /**
     * @var string 命令类型（上:up,下:down,左:left,右:right
上左:leftup,上右:rightup,下左:leftdown,下右:rightdown
放大:zoomin,缩小:zoomout
聚焦远:focusfar,聚焦近:focusnear
光圈放大:irisin,光圈缩小:irisout）
     */
    public $Type;

    /**
     * @var integer 命令描述（速度值范围1-8）
     */
    public $Speed;

    /**
     * @param string $ChannelId 通道 ID（从通道查询接口DescribeDeviceChannel中获取）
     * @param string $Type 命令类型（上:up,下:down,左:left,右:right
上左:leftup,上右:rightup,下左:leftdown,下右:rightdown
放大:zoomin,缩小:zoomout
聚焦远:focusfar,聚焦近:focusnear
光圈放大:irisin,光圈缩小:irisout）
     * @param integer $Speed 命令描述（速度值范围1-8）
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
        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Speed",$param) and $param["Speed"] !== null) {
            $this->Speed = $param["Speed"];
        }
    }
}
