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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 动作组的配置项
 *
 * @method array getTaskGroupInstances() 获取动作组所关联的实例对象
 * @method void setTaskGroupInstances(array $TaskGroupInstances) 设置动作组所关联的实例对象
 * @method string getTaskGroupTitle() 获取动作组标题，不填默认取经验中的动作组名称
 * @method void setTaskGroupTitle(string $TaskGroupTitle) 设置动作组标题，不填默认取经验中的动作组名称
 * @method string getTaskGroupDescription() 获取动作组描述，不填默认取经验中的动作组描述
 * @method void setTaskGroupDescription(string $TaskGroupDescription) 设置动作组描述，不填默认取经验中的动作组描述
 * @method integer getTaskGroupMode() 获取动作执行模式。1 --- 顺序执行，2 --- 阶段执行, 不填默认取经验中的动作组执行模式
 * @method void setTaskGroupMode(integer $TaskGroupMode) 设置动作执行模式。1 --- 顺序执行，2 --- 阶段执行, 不填默认取经验中的动作组执行模式
 * @method array getTaskGroupActionsConfig() 获取动作组中的动作参数，不填默认使用经验中的动作参数，配置时可以只指定想要修改参数的动作
 * @method void setTaskGroupActionsConfig(array $TaskGroupActionsConfig) 设置动作组中的动作参数，不填默认使用经验中的动作参数，配置时可以只指定想要修改参数的动作
 */
class TaskGroupConfig extends AbstractModel
{
    /**
     * @var array 动作组所关联的实例对象
     */
    public $TaskGroupInstances;

    /**
     * @var string 动作组标题，不填默认取经验中的动作组名称
     */
    public $TaskGroupTitle;

    /**
     * @var string 动作组描述，不填默认取经验中的动作组描述
     */
    public $TaskGroupDescription;

    /**
     * @var integer 动作执行模式。1 --- 顺序执行，2 --- 阶段执行, 不填默认取经验中的动作组执行模式
     */
    public $TaskGroupMode;

    /**
     * @var array 动作组中的动作参数，不填默认使用经验中的动作参数，配置时可以只指定想要修改参数的动作
     */
    public $TaskGroupActionsConfig;

    /**
     * @param array $TaskGroupInstances 动作组所关联的实例对象
     * @param string $TaskGroupTitle 动作组标题，不填默认取经验中的动作组名称
     * @param string $TaskGroupDescription 动作组描述，不填默认取经验中的动作组描述
     * @param integer $TaskGroupMode 动作执行模式。1 --- 顺序执行，2 --- 阶段执行, 不填默认取经验中的动作组执行模式
     * @param array $TaskGroupActionsConfig 动作组中的动作参数，不填默认使用经验中的动作参数，配置时可以只指定想要修改参数的动作
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
        if (array_key_exists("TaskGroupInstances",$param) and $param["TaskGroupInstances"] !== null) {
            $this->TaskGroupInstances = $param["TaskGroupInstances"];
        }

        if (array_key_exists("TaskGroupTitle",$param) and $param["TaskGroupTitle"] !== null) {
            $this->TaskGroupTitle = $param["TaskGroupTitle"];
        }

        if (array_key_exists("TaskGroupDescription",$param) and $param["TaskGroupDescription"] !== null) {
            $this->TaskGroupDescription = $param["TaskGroupDescription"];
        }

        if (array_key_exists("TaskGroupMode",$param) and $param["TaskGroupMode"] !== null) {
            $this->TaskGroupMode = $param["TaskGroupMode"];
        }

        if (array_key_exists("TaskGroupActionsConfig",$param) and $param["TaskGroupActionsConfig"] !== null) {
            $this->TaskGroupActionsConfig = [];
            foreach ($param["TaskGroupActionsConfig"] as $key => $value){
                $obj = new TaskGroupActionConfig();
                $obj->deserialize($value);
                array_push($this->TaskGroupActionsConfig, $obj);
            }
        }
    }
}
