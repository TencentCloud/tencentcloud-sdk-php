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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateScene请求参数结构体
 *
 * @method string getSceneName() 获取场景名称
 * @method void setSceneName(string $SceneName) 设置场景名称
 * @method string getSceneTrigger() 获取场景触发规则
 * @method void setSceneTrigger(string $SceneTrigger) 设置场景触发规则
 * @method integer getRecordDuration() 获取录制时长 (秒)
 * @method void setRecordDuration(integer $RecordDuration) 设置录制时长 (秒)
 * @method integer getStoreDuration() 获取录像存储时长(天)
 * @method void setStoreDuration(integer $StoreDuration) 设置录像存储时长(天)
 * @method array getDevices() 获取设备列表(不推荐使用)
 * @method void setDevices(array $Devices) 设置设备列表(不推荐使用)
 * @method array getChannels() 获取通道列表
 * @method void setChannels(array $Channels) 设置通道列表
 */
class CreateSceneRequest extends AbstractModel
{
    /**
     * @var string 场景名称
     */
    public $SceneName;

    /**
     * @var string 场景触发规则
     */
    public $SceneTrigger;

    /**
     * @var integer 录制时长 (秒)
     */
    public $RecordDuration;

    /**
     * @var integer 录像存储时长(天)
     */
    public $StoreDuration;

    /**
     * @var array 设备列表(不推荐使用)
     */
    public $Devices;

    /**
     * @var array 通道列表
     */
    public $Channels;

    /**
     * @param string $SceneName 场景名称
     * @param string $SceneTrigger 场景触发规则
     * @param integer $RecordDuration 录制时长 (秒)
     * @param integer $StoreDuration 录像存储时长(天)
     * @param array $Devices 设备列表(不推荐使用)
     * @param array $Channels 通道列表
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
        if (array_key_exists("SceneName",$param) and $param["SceneName"] !== null) {
            $this->SceneName = $param["SceneName"];
        }

        if (array_key_exists("SceneTrigger",$param) and $param["SceneTrigger"] !== null) {
            $this->SceneTrigger = $param["SceneTrigger"];
        }

        if (array_key_exists("RecordDuration",$param) and $param["RecordDuration"] !== null) {
            $this->RecordDuration = $param["RecordDuration"];
        }

        if (array_key_exists("StoreDuration",$param) and $param["StoreDuration"] !== null) {
            $this->StoreDuration = $param["StoreDuration"];
        }

        if (array_key_exists("Devices",$param) and $param["Devices"] !== null) {
            $this->Devices = [];
            foreach ($param["Devices"] as $key => $value){
                $obj = new DeviceItem();
                $obj->deserialize($value);
                array_push($this->Devices, $obj);
            }
        }

        if (array_key_exists("Channels",$param) and $param["Channels"] !== null) {
            $this->Channels = [];
            foreach ($param["Channels"] as $key => $value){
                $obj = new ChannelItem();
                $obj->deserialize($value);
                array_push($this->Channels, $obj);
            }
        }
    }
}
