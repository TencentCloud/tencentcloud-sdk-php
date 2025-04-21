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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 当前开启的、匹配范围为全局、优先级最高的场景信息
 *
 * @method string getSceneId() 获取场景ID
 * @method void setSceneId(string $SceneId) 设置场景ID
 * @method string getSceneName() 获取场景名称
 * @method void setSceneName(string $SceneName) 设置场景名称
 * @method integer getPriority() 获取场景优先级
 * @method void setPriority(integer $Priority) 设置场景优先级
 * @method integer getUpdateTime() 获取场景更新时间
 * @method void setUpdateTime(integer $UpdateTime) 设置场景更新时间
 */
class GlobalSceneInfo extends AbstractModel
{
    /**
     * @var string 场景ID
     */
    public $SceneId;

    /**
     * @var string 场景名称
     */
    public $SceneName;

    /**
     * @var integer 场景优先级
     */
    public $Priority;

    /**
     * @var integer 场景更新时间
     */
    public $UpdateTime;

    /**
     * @param string $SceneId 场景ID
     * @param string $SceneName 场景名称
     * @param integer $Priority 场景优先级
     * @param integer $UpdateTime 场景更新时间
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
        if (array_key_exists("SceneId",$param) and $param["SceneId"] !== null) {
            $this->SceneId = $param["SceneId"];
        }

        if (array_key_exists("SceneName",$param) and $param["SceneName"] !== null) {
            $this->SceneName = $param["SceneName"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
