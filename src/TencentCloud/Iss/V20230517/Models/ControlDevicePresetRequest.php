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
 * ControlDevicePreset请求参数结构体
 *
 * @method string getChannelId() 获取通道 ID（从通道查询接口DescribeDeviceChannel中获取）
 * @method void setChannelId(string $ChannelId) 设置通道 ID（从通道查询接口DescribeDeviceChannel中获取）
 * @method string getCmd() 获取命令（goto:预置位调用；
set:预置位设置；
del:预置位删除）
 * @method void setCmd(string $Cmd) 设置命令（goto:预置位调用；
set:预置位设置；
del:预置位删除）
 * @method integer getIndex() 获取预置位索引（只支持1-10的索引位置，超出报错）
 * @method void setIndex(integer $Index) 设置预置位索引（只支持1-10的索引位置，超出报错）
 */
class ControlDevicePresetRequest extends AbstractModel
{
    /**
     * @var string 通道 ID（从通道查询接口DescribeDeviceChannel中获取）
     */
    public $ChannelId;

    /**
     * @var string 命令（goto:预置位调用；
set:预置位设置；
del:预置位删除）
     */
    public $Cmd;

    /**
     * @var integer 预置位索引（只支持1-10的索引位置，超出报错）
     */
    public $Index;

    /**
     * @param string $ChannelId 通道 ID（从通道查询接口DescribeDeviceChannel中获取）
     * @param string $Cmd 命令（goto:预置位调用；
set:预置位设置；
del:预置位删除）
     * @param integer $Index 预置位索引（只支持1-10的索引位置，超出报错）
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

        if (array_key_exists("Cmd",$param) and $param["Cmd"] !== null) {
            $this->Cmd = $param["Cmd"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }
    }
}
