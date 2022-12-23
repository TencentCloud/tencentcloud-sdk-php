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
 * 从经验模板创建演练时需要配置的任务参数
 *
 * @method array getTaskGroupsConfig() 获取动作组配置，需要保证配置个数和经验中的动作组个数一致
 * @method void setTaskGroupsConfig(array $TaskGroupsConfig) 设置动作组配置，需要保证配置个数和经验中的动作组个数一致
 * @method string getTaskTitle() 获取更改后的演练名称，不填则默认取经验名称
 * @method void setTaskTitle(string $TaskTitle) 设置更改后的演练名称，不填则默认取经验名称
 * @method string getTaskDescription() 获取更改后的演练描述，不填则默认取经验描述
 * @method void setTaskDescription(string $TaskDescription) 设置更改后的演练描述，不填则默认取经验描述
 * @method integer getTaskMode() 获取演练执行模式：1----手工执行/ 2 ---自动执行，不填则默认取经验执行模式
 * @method void setTaskMode(integer $TaskMode) 设置演练执行模式：1----手工执行/ 2 ---自动执行，不填则默认取经验执行模式
 * @method integer getTaskPauseDuration() 获取演练自动暂停时间，单位分钟, 不填则默认取经验自动暂停时间
 * @method void setTaskPauseDuration(integer $TaskPauseDuration) 设置演练自动暂停时间，单位分钟, 不填则默认取经验自动暂停时间
 * @method array getTags() 获取演练标签信息，不填则默认取经验标签
 * @method void setTags(array $Tags) 设置演练标签信息，不填则默认取经验标签
 */
class TaskConfig extends AbstractModel
{
    /**
     * @var array 动作组配置，需要保证配置个数和经验中的动作组个数一致
     */
    public $TaskGroupsConfig;

    /**
     * @var string 更改后的演练名称，不填则默认取经验名称
     */
    public $TaskTitle;

    /**
     * @var string 更改后的演练描述，不填则默认取经验描述
     */
    public $TaskDescription;

    /**
     * @var integer 演练执行模式：1----手工执行/ 2 ---自动执行，不填则默认取经验执行模式
     */
    public $TaskMode;

    /**
     * @var integer 演练自动暂停时间，单位分钟, 不填则默认取经验自动暂停时间
     */
    public $TaskPauseDuration;

    /**
     * @var array 演练标签信息，不填则默认取经验标签
     */
    public $Tags;

    /**
     * @param array $TaskGroupsConfig 动作组配置，需要保证配置个数和经验中的动作组个数一致
     * @param string $TaskTitle 更改后的演练名称，不填则默认取经验名称
     * @param string $TaskDescription 更改后的演练描述，不填则默认取经验描述
     * @param integer $TaskMode 演练执行模式：1----手工执行/ 2 ---自动执行，不填则默认取经验执行模式
     * @param integer $TaskPauseDuration 演练自动暂停时间，单位分钟, 不填则默认取经验自动暂停时间
     * @param array $Tags 演练标签信息，不填则默认取经验标签
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
        if (array_key_exists("TaskGroupsConfig",$param) and $param["TaskGroupsConfig"] !== null) {
            $this->TaskGroupsConfig = [];
            foreach ($param["TaskGroupsConfig"] as $key => $value){
                $obj = new TaskGroupConfig();
                $obj->deserialize($value);
                array_push($this->TaskGroupsConfig, $obj);
            }
        }

        if (array_key_exists("TaskTitle",$param) and $param["TaskTitle"] !== null) {
            $this->TaskTitle = $param["TaskTitle"];
        }

        if (array_key_exists("TaskDescription",$param) and $param["TaskDescription"] !== null) {
            $this->TaskDescription = $param["TaskDescription"];
        }

        if (array_key_exists("TaskMode",$param) and $param["TaskMode"] !== null) {
            $this->TaskMode = $param["TaskMode"];
        }

        if (array_key_exists("TaskPauseDuration",$param) and $param["TaskPauseDuration"] !== null) {
            $this->TaskPauseDuration = $param["TaskPauseDuration"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagWithCreate();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
