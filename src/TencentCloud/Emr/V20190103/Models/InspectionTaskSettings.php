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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设置巡检任务配置
 *
 * @method string getTaskType() 获取巡检任务的唯一标记
 * @method void setTaskType(string $TaskType) 设置巡检任务的唯一标记
 * @method string getGroup() 获取巡检任务组名称
 * @method void setGroup(string $Group) 设置巡检任务组名称
 * @method string getName() 获取巡检任务名称
 * @method void setName(string $Name) 设置巡检任务名称
 * @method array getTaskSettings() 获取巡检任务参数设置
 * @method void setTaskSettings(array $TaskSettings) 设置巡检任务参数设置
 * @method string getSelected() 获取是否选中，”true“ ”false“
 * @method void setSelected(string $Selected) 设置是否选中，”true“ ”false“
 * @method string getEnable() 获取是否开启监控
 * @method void setEnable(string $Enable) 设置是否开启监控
 * @method string getSettingsJson() 获取事件Json模板
 * @method void setSettingsJson(string $SettingsJson) 设置事件Json模板
 */
class InspectionTaskSettings extends AbstractModel
{
    /**
     * @var string 巡检任务的唯一标记
     */
    public $TaskType;

    /**
     * @var string 巡检任务组名称
     */
    public $Group;

    /**
     * @var string 巡检任务名称
     */
    public $Name;

    /**
     * @var array 巡检任务参数设置
     */
    public $TaskSettings;

    /**
     * @var string 是否选中，”true“ ”false“
     */
    public $Selected;

    /**
     * @var string 是否开启监控
     */
    public $Enable;

    /**
     * @var string 事件Json模板
     */
    public $SettingsJson;

    /**
     * @param string $TaskType 巡检任务的唯一标记
     * @param string $Group 巡检任务组名称
     * @param string $Name 巡检任务名称
     * @param array $TaskSettings 巡检任务参数设置
     * @param string $Selected 是否选中，”true“ ”false“
     * @param string $Enable 是否开启监控
     * @param string $SettingsJson 事件Json模板
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TaskSettings",$param) and $param["TaskSettings"] !== null) {
            $this->TaskSettings = [];
            foreach ($param["TaskSettings"] as $key => $value){
                $obj = new TaskSettings();
                $obj->deserialize($value);
                array_push($this->TaskSettings, $obj);
            }
        }

        if (array_key_exists("Selected",$param) and $param["Selected"] !== null) {
            $this->Selected = $param["Selected"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("SettingsJson",$param) and $param["SettingsJson"] !== null) {
            $this->SettingsJson = $param["SettingsJson"];
        }
    }
}
