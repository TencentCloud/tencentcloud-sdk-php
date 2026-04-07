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
 * 线性组装频道信息。
 *
 * @method string getName() 获取<p>线性组装频道名称。</p>
 * @method void setName(string $Name) 设置<p>线性组装频道名称。</p>
 * @method string getTier() 获取<p>定义channel的特性，Standard支持直播和点播源，Basic只支持点播源编排。</p>
 * @method void setTier(string $Tier) 设置<p>定义channel的特性，Standard支持直播和点播源，Basic只支持点播源编排。</p>
 * @method string getPlaybackMode() 获取<p>频道中的source切换的模式，分Linear线性和Loop循环，直播只支持Linear。</p>
 * @method void setPlaybackMode(string $PlaybackMode) 设置<p>频道中的source切换的模式，分Linear线性和Loop循环，直播只支持Linear。</p>
 * @method TimeShiftInfo getTimeShiftConf() 获取<p>时移配置，vod有效。</p>
 * @method void setTimeShiftConf(TimeShiftInfo $TimeShiftConf) 设置<p>时移配置，vod有效。</p>
 * @method SlateInfo getSlateConf() 获取<p>垫片配置。</p>
 * @method void setSlateConf(SlateInfo $SlateConf) 设置<p>垫片配置。</p>
 * @method array getOutputs() 获取<p>output信息。</p>
 * @method void setOutputs(array $Outputs) 设置<p>output信息。</p>
 * @method array getAttachedPrograms() 获取<p>该channel绑定的program列表。</p>
 * @method void setAttachedPrograms(array $AttachedPrograms) 设置<p>该channel绑定的program列表。</p>
 * @method array getProgramSchedules() 获取<p>program信息。</p>
 * @method void setProgramSchedules(array $ProgramSchedules) 设置<p>program信息。</p>
 * @method string getId() 获取<p>Id。</p>
 * @method void setId(string $Id) 设置<p>Id。</p>
 * @method string getRegion() 获取<p>Region。</p>
 * @method void setRegion(string $Region) 设置<p>Region。</p>
 * @method string getState() 获取<p>State。</p>
 * @method void setState(string $State) 设置<p>State。</p>
 * @method boolean getTimeShiftEnable() 获取<p>时移开启开关。</p>
 * @method void setTimeShiftEnable(boolean $TimeShiftEnable) 设置<p>时移开启开关。</p>
 * @method integer getCreateTime() 获取<p>channel创建时间，unix秒时间戳。</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>channel创建时间，unix秒时间戳。</p>
 */
class LinearAssemblyChannelInfo extends AbstractModel
{
    /**
     * @var string <p>线性组装频道名称。</p>
     */
    public $Name;

    /**
     * @var string <p>定义channel的特性，Standard支持直播和点播源，Basic只支持点播源编排。</p>
     */
    public $Tier;

    /**
     * @var string <p>频道中的source切换的模式，分Linear线性和Loop循环，直播只支持Linear。</p>
     */
    public $PlaybackMode;

    /**
     * @var TimeShiftInfo <p>时移配置，vod有效。</p>
     */
    public $TimeShiftConf;

    /**
     * @var SlateInfo <p>垫片配置。</p>
     */
    public $SlateConf;

    /**
     * @var array <p>output信息。</p>
     */
    public $Outputs;

    /**
     * @var array <p>该channel绑定的program列表。</p>
     */
    public $AttachedPrograms;

    /**
     * @var array <p>program信息。</p>
     */
    public $ProgramSchedules;

    /**
     * @var string <p>Id。</p>
     */
    public $Id;

    /**
     * @var string <p>Region。</p>
     */
    public $Region;

    /**
     * @var string <p>State。</p>
     */
    public $State;

    /**
     * @var boolean <p>时移开启开关。</p>
     */
    public $TimeShiftEnable;

    /**
     * @var integer <p>channel创建时间，unix秒时间戳。</p>
     */
    public $CreateTime;

    /**
     * @param string $Name <p>线性组装频道名称。</p>
     * @param string $Tier <p>定义channel的特性，Standard支持直播和点播源，Basic只支持点播源编排。</p>
     * @param string $PlaybackMode <p>频道中的source切换的模式，分Linear线性和Loop循环，直播只支持Linear。</p>
     * @param TimeShiftInfo $TimeShiftConf <p>时移配置，vod有效。</p>
     * @param SlateInfo $SlateConf <p>垫片配置。</p>
     * @param array $Outputs <p>output信息。</p>
     * @param array $AttachedPrograms <p>该channel绑定的program列表。</p>
     * @param array $ProgramSchedules <p>program信息。</p>
     * @param string $Id <p>Id。</p>
     * @param string $Region <p>Region。</p>
     * @param string $State <p>State。</p>
     * @param boolean $TimeShiftEnable <p>时移开启开关。</p>
     * @param integer $CreateTime <p>channel创建时间，unix秒时间戳。</p>
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
                $obj = new OutputInfo();
                $obj->deserialize($value);
                array_push($this->Outputs, $obj);
            }
        }

        if (array_key_exists("AttachedPrograms",$param) and $param["AttachedPrograms"] !== null) {
            $this->AttachedPrograms = $param["AttachedPrograms"];
        }

        if (array_key_exists("ProgramSchedules",$param) and $param["ProgramSchedules"] !== null) {
            $this->ProgramSchedules = [];
            foreach ($param["ProgramSchedules"] as $key => $value){
                $obj = new ProgramScheduleInfo();
                $obj->deserialize($value);
                array_push($this->ProgramSchedules, $obj);
            }
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("TimeShiftEnable",$param) and $param["TimeShiftEnable"] !== null) {
            $this->TimeShiftEnable = $param["TimeShiftEnable"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
