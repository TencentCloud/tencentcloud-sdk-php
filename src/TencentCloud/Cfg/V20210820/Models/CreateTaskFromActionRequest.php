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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTaskFromAction请求参数结构体
 *
 * @method integer getTaskActionId() 获取动作ID，可从动作列表接口DescribeActionLibraryList获取
 * @method void setTaskActionId(integer $TaskActionId) 设置动作ID，可从动作列表接口DescribeActionLibraryList获取
 * @method array getTaskInstances() 获取参与演练的实例ID
 * @method void setTaskInstances(array $TaskInstances) 设置参与演练的实例ID
 * @method string getTaskTitle() 获取演练名称，不填则默认取动作名称
 * @method void setTaskTitle(string $TaskTitle) 设置演练名称，不填则默认取动作名称
 * @method string getTaskDescription() 获取演练描述，不填则默认取动作描述
 * @method void setTaskDescription(string $TaskDescription) 设置演练描述，不填则默认取动作描述
 * @method string getTaskActionGeneralConfiguration() 获取动作通用参数，需要json序列化传入，可以从动作详情接口DescribeActionFieldConfigList获取，不填默认使用动作默认参数
 * @method void setTaskActionGeneralConfiguration(string $TaskActionGeneralConfiguration) 设置动作通用参数，需要json序列化传入，可以从动作详情接口DescribeActionFieldConfigList获取，不填默认使用动作默认参数
 * @method string getTaskActionCustomConfiguration() 获取动作自定义参数，需要json序列化传入，可以从动作详情接口DescribeActionFieldConfigList获取，不填默认使用动作默认参数，注意：必填参数，是没有默认值的 ，务必保证传入有效值
 * @method void setTaskActionCustomConfiguration(string $TaskActionCustomConfiguration) 设置动作自定义参数，需要json序列化传入，可以从动作详情接口DescribeActionFieldConfigList获取，不填默认使用动作默认参数，注意：必填参数，是没有默认值的 ，务必保证传入有效值
 * @method integer getTaskPauseDuration() 获取演练自动暂停时间，单位分钟, 不填则默认为60
 * @method void setTaskPauseDuration(integer $TaskPauseDuration) 设置演练自动暂停时间，单位分钟, 不填则默认为60
 * @method array getTaskTags() 获取标签列表
 * @method void setTaskTags(array $TaskTags) 设置标签列表
 */
class CreateTaskFromActionRequest extends AbstractModel
{
    /**
     * @var integer 动作ID，可从动作列表接口DescribeActionLibraryList获取
     */
    public $TaskActionId;

    /**
     * @var array 参与演练的实例ID
     */
    public $TaskInstances;

    /**
     * @var string 演练名称，不填则默认取动作名称
     */
    public $TaskTitle;

    /**
     * @var string 演练描述，不填则默认取动作描述
     */
    public $TaskDescription;

    /**
     * @var string 动作通用参数，需要json序列化传入，可以从动作详情接口DescribeActionFieldConfigList获取，不填默认使用动作默认参数
     */
    public $TaskActionGeneralConfiguration;

    /**
     * @var string 动作自定义参数，需要json序列化传入，可以从动作详情接口DescribeActionFieldConfigList获取，不填默认使用动作默认参数，注意：必填参数，是没有默认值的 ，务必保证传入有效值
     */
    public $TaskActionCustomConfiguration;

    /**
     * @var integer 演练自动暂停时间，单位分钟, 不填则默认为60
     */
    public $TaskPauseDuration;

    /**
     * @var array 标签列表
     */
    public $TaskTags;

    /**
     * @param integer $TaskActionId 动作ID，可从动作列表接口DescribeActionLibraryList获取
     * @param array $TaskInstances 参与演练的实例ID
     * @param string $TaskTitle 演练名称，不填则默认取动作名称
     * @param string $TaskDescription 演练描述，不填则默认取动作描述
     * @param string $TaskActionGeneralConfiguration 动作通用参数，需要json序列化传入，可以从动作详情接口DescribeActionFieldConfigList获取，不填默认使用动作默认参数
     * @param string $TaskActionCustomConfiguration 动作自定义参数，需要json序列化传入，可以从动作详情接口DescribeActionFieldConfigList获取，不填默认使用动作默认参数，注意：必填参数，是没有默认值的 ，务必保证传入有效值
     * @param integer $TaskPauseDuration 演练自动暂停时间，单位分钟, 不填则默认为60
     * @param array $TaskTags 标签列表
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
        if (array_key_exists("TaskActionId",$param) and $param["TaskActionId"] !== null) {
            $this->TaskActionId = $param["TaskActionId"];
        }

        if (array_key_exists("TaskInstances",$param) and $param["TaskInstances"] !== null) {
            $this->TaskInstances = $param["TaskInstances"];
        }

        if (array_key_exists("TaskTitle",$param) and $param["TaskTitle"] !== null) {
            $this->TaskTitle = $param["TaskTitle"];
        }

        if (array_key_exists("TaskDescription",$param) and $param["TaskDescription"] !== null) {
            $this->TaskDescription = $param["TaskDescription"];
        }

        if (array_key_exists("TaskActionGeneralConfiguration",$param) and $param["TaskActionGeneralConfiguration"] !== null) {
            $this->TaskActionGeneralConfiguration = $param["TaskActionGeneralConfiguration"];
        }

        if (array_key_exists("TaskActionCustomConfiguration",$param) and $param["TaskActionCustomConfiguration"] !== null) {
            $this->TaskActionCustomConfiguration = $param["TaskActionCustomConfiguration"];
        }

        if (array_key_exists("TaskPauseDuration",$param) and $param["TaskPauseDuration"] !== null) {
            $this->TaskPauseDuration = $param["TaskPauseDuration"];
        }

        if (array_key_exists("TaskTags",$param) and $param["TaskTags"] !== null) {
            $this->TaskTags = [];
            foreach ($param["TaskTags"] as $key => $value){
                $obj = new TagWithCreate();
                $obj->deserialize($value);
                array_push($this->TaskTags, $obj);
            }
        }
    }
}
