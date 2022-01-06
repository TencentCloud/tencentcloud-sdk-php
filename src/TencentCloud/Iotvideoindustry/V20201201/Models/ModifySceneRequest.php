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
 * ModifyScene请求参数结构体
 *
 * @method integer getIntId() 获取场景ID
 * @method void setIntId(integer $IntId) 设置场景ID
 * @method string getSceneName() 获取场景名称
 * @method void setSceneName(string $SceneName) 设置场景名称
 * @method string getSceneTrigger() 获取触发条件
 * @method void setSceneTrigger(string $SceneTrigger) 设置触发条件
 * @method integer getRecordDuration() 获取录制时长(秒)
 * @method void setRecordDuration(integer $RecordDuration) 设置录制时长(秒)
 */
class ModifySceneRequest extends AbstractModel
{
    /**
     * @var integer 场景ID
     */
    public $IntId;

    /**
     * @var string 场景名称
     */
    public $SceneName;

    /**
     * @var string 触发条件
     */
    public $SceneTrigger;

    /**
     * @var integer 录制时长(秒)
     */
    public $RecordDuration;

    /**
     * @param integer $IntId 场景ID
     * @param string $SceneName 场景名称
     * @param string $SceneTrigger 触发条件
     * @param integer $RecordDuration 录制时长(秒)
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
        if (array_key_exists("IntId",$param) and $param["IntId"] !== null) {
            $this->IntId = $param["IntId"];
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
    }
}
