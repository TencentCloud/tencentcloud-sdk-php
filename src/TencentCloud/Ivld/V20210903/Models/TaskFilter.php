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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务筛选条件结构体
 *
 * @method array getMediaTypeSet() 获取媒资文件类型
 * @method void setMediaTypeSet(array $MediaTypeSet) 设置媒资文件类型
 * @method array getTaskStatusSet() 获取待筛选的任务状态列表
 * @method void setTaskStatusSet(array $TaskStatusSet) 设置待筛选的任务状态列表
 * @method array getTaskNameSet() 获取待筛选的任务名称数组
 * @method void setTaskNameSet(array $TaskNameSet) 设置待筛选的任务名称数组
 * @method array getTaskIdSet() 获取TaskId数组
 * @method void setTaskIdSet(array $TaskIdSet) 设置TaskId数组
 * @method array getMediaNameSet() 获取媒资文件名数组
 * @method void setMediaNameSet(array $MediaNameSet) 设置媒资文件名数组
 * @method array getMediaLangSet() 获取媒资语言类型
 * @method void setMediaLangSet(array $MediaLangSet) 设置媒资语言类型
 * @method array getMediaLabelSet() 获取媒资素材一级类型
 * @method void setMediaLabelSet(array $MediaLabelSet) 设置媒资素材一级类型
 * @method array getLabelSet() 获取媒资自定义标签数组
 * @method void setLabelSet(array $LabelSet) 设置媒资自定义标签数组
 */
class TaskFilter extends AbstractModel
{
    /**
     * @var array 媒资文件类型
     */
    public $MediaTypeSet;

    /**
     * @var array 待筛选的任务状态列表
     */
    public $TaskStatusSet;

    /**
     * @var array 待筛选的任务名称数组
     */
    public $TaskNameSet;

    /**
     * @var array TaskId数组
     */
    public $TaskIdSet;

    /**
     * @var array 媒资文件名数组
     */
    public $MediaNameSet;

    /**
     * @var array 媒资语言类型
     */
    public $MediaLangSet;

    /**
     * @var array 媒资素材一级类型
     */
    public $MediaLabelSet;

    /**
     * @var array 媒资自定义标签数组
     */
    public $LabelSet;

    /**
     * @param array $MediaTypeSet 媒资文件类型
     * @param array $TaskStatusSet 待筛选的任务状态列表
     * @param array $TaskNameSet 待筛选的任务名称数组
     * @param array $TaskIdSet TaskId数组
     * @param array $MediaNameSet 媒资文件名数组
     * @param array $MediaLangSet 媒资语言类型
     * @param array $MediaLabelSet 媒资素材一级类型
     * @param array $LabelSet 媒资自定义标签数组
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
        if (array_key_exists("MediaTypeSet",$param) and $param["MediaTypeSet"] !== null) {
            $this->MediaTypeSet = $param["MediaTypeSet"];
        }

        if (array_key_exists("TaskStatusSet",$param) and $param["TaskStatusSet"] !== null) {
            $this->TaskStatusSet = $param["TaskStatusSet"];
        }

        if (array_key_exists("TaskNameSet",$param) and $param["TaskNameSet"] !== null) {
            $this->TaskNameSet = $param["TaskNameSet"];
        }

        if (array_key_exists("TaskIdSet",$param) and $param["TaskIdSet"] !== null) {
            $this->TaskIdSet = $param["TaskIdSet"];
        }

        if (array_key_exists("MediaNameSet",$param) and $param["MediaNameSet"] !== null) {
            $this->MediaNameSet = $param["MediaNameSet"];
        }

        if (array_key_exists("MediaLangSet",$param) and $param["MediaLangSet"] !== null) {
            $this->MediaLangSet = $param["MediaLangSet"];
        }

        if (array_key_exists("MediaLabelSet",$param) and $param["MediaLabelSet"] !== null) {
            $this->MediaLabelSet = $param["MediaLabelSet"];
        }

        if (array_key_exists("LabelSet",$param) and $param["LabelSet"] !== null) {
            $this->LabelSet = $param["LabelSet"];
        }
    }
}
