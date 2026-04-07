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
 * CreateStreamPackageLinearAssemblyChannel请求参数结构体
 *
 * @method string getName() 获取Channel名称。
 * @method void setName(string $Name) 设置Channel名称。
 * @method string getTier() 获取定义channel的特性，Standard支持直播和点播源，Basic只支持点播源编排，可选值：Standard、Basic。
 * @method void setTier(string $Tier) 设置定义channel的特性，Standard支持直播和点播源，Basic只支持点播源编排，可选值：Standard、Basic。
 * @method string getPlaybackMode() 获取频道中的source切换的模式，分Linear线性和Loop循环，Basic只支持Linear，Standard两种都支持。
 * @method void setPlaybackMode(string $PlaybackMode) 设置频道中的source切换的模式，分Linear线性和Loop循环，Basic只支持Linear，Standard两种都支持。
 * @method boolean getTimeShiftEnable() 获取时移开启开关，只有Tier为Standard时有效。
 * @method void setTimeShiftEnable(boolean $TimeShiftEnable) 设置时移开启开关，只有Tier为Standard时有效。
 * @method TimeShiftInfo getTimeShiftConf() 获取时移配置，时移开关开启时有效。
 * @method void setTimeShiftConf(TimeShiftInfo $TimeShiftConf) 设置时移配置，时移开关开启时有效。
 * @method SlateInfo getSlateConf() 获取垫片配置，只有PlaybackMode为Linear时有效。
 * @method void setSlateConf(SlateInfo $SlateConf) 设置垫片配置，只有PlaybackMode为Linear时有效。
 * @method array getOutputs() 获取输出配置。
 * @method void setOutputs(array $Outputs) 设置输出配置。
 */
class CreateStreamPackageLinearAssemblyChannelRequest extends AbstractModel
{
    /**
     * @var string Channel名称。
     */
    public $Name;

    /**
     * @var string 定义channel的特性，Standard支持直播和点播源，Basic只支持点播源编排，可选值：Standard、Basic。
     */
    public $Tier;

    /**
     * @var string 频道中的source切换的模式，分Linear线性和Loop循环，Basic只支持Linear，Standard两种都支持。
     */
    public $PlaybackMode;

    /**
     * @var boolean 时移开启开关，只有Tier为Standard时有效。
     */
    public $TimeShiftEnable;

    /**
     * @var TimeShiftInfo 时移配置，时移开关开启时有效。
     */
    public $TimeShiftConf;

    /**
     * @var SlateInfo 垫片配置，只有PlaybackMode为Linear时有效。
     */
    public $SlateConf;

    /**
     * @var array 输出配置。
     */
    public $Outputs;

    /**
     * @param string $Name Channel名称。
     * @param string $Tier 定义channel的特性，Standard支持直播和点播源，Basic只支持点播源编排，可选值：Standard、Basic。
     * @param string $PlaybackMode 频道中的source切换的模式，分Linear线性和Loop循环，Basic只支持Linear，Standard两种都支持。
     * @param boolean $TimeShiftEnable 时移开启开关，只有Tier为Standard时有效。
     * @param TimeShiftInfo $TimeShiftConf 时移配置，时移开关开启时有效。
     * @param SlateInfo $SlateConf 垫片配置，只有PlaybackMode为Linear时有效。
     * @param array $Outputs 输出配置。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Tier",$param) and $param["Tier"] !== null) {
            $this->Tier = $param["Tier"];
        }

        if (array_key_exists("PlaybackMode",$param) and $param["PlaybackMode"] !== null) {
            $this->PlaybackMode = $param["PlaybackMode"];
        }

        if (array_key_exists("TimeShiftEnable",$param) and $param["TimeShiftEnable"] !== null) {
            $this->TimeShiftEnable = $param["TimeShiftEnable"];
        }

        if (array_key_exists("TimeShiftConf",$param) and $param["TimeShiftConf"] !== null) {
            $this->TimeShiftConf = new TimeShiftInfo();
            $this->TimeShiftConf->deserialize($param["TimeShiftConf"]);
        }

        if (array_key_exists("SlateConf",$param) and $param["SlateConf"] !== null) {
            $this->SlateConf = new SlateInfo();
            $this->SlateConf->deserialize($param["SlateConf"]);
        }

        if (array_key_exists("Outputs",$param) and $param["Outputs"] !== null) {
            $this->Outputs = [];
            foreach ($param["Outputs"] as $key => $value){
                $obj = new OutputReq();
                $obj->deserialize($value);
                array_push($this->Outputs, $obj);
            }
        }
    }
}
