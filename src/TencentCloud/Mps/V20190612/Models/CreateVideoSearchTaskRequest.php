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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVideoSearchTask请求参数结构体
 *
 * @method SearchValueInput getSearchValueInput() 获取用于检索任务的输入
 * @method void setSearchValueInput(SearchValueInput $SearchValueInput) 设置用于检索任务的输入
 * @method integer getLimit() 获取返回视频的最大数量，取值范围[1,20]，将返回最相近的前Limit条视频,默认为5
 * @method void setLimit(integer $Limit) 设置返回视频的最大数量，取值范围[1,20]，将返回最相近的前Limit条视频,默认为5
 * @method TaskNotifyConfig getTaskNotifyConfig() 获取可选，用于检索任务完成后向回调方发送检索结果，目前仅支持URL方式
 * @method void setTaskNotifyConfig(TaskNotifyConfig $TaskNotifyConfig) 设置可选，用于检索任务完成后向回调方发送检索结果，目前仅支持URL方式
 */
class CreateVideoSearchTaskRequest extends AbstractModel
{
    /**
     * @var SearchValueInput 用于检索任务的输入
     */
    public $SearchValueInput;

    /**
     * @var integer 返回视频的最大数量，取值范围[1,20]，将返回最相近的前Limit条视频,默认为5
     */
    public $Limit;

    /**
     * @var TaskNotifyConfig 可选，用于检索任务完成后向回调方发送检索结果，目前仅支持URL方式
     */
    public $TaskNotifyConfig;

    /**
     * @param SearchValueInput $SearchValueInput 用于检索任务的输入
     * @param integer $Limit 返回视频的最大数量，取值范围[1,20]，将返回最相近的前Limit条视频,默认为5
     * @param TaskNotifyConfig $TaskNotifyConfig 可选，用于检索任务完成后向回调方发送检索结果，目前仅支持URL方式
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
        if (array_key_exists("SearchValueInput",$param) and $param["SearchValueInput"] !== null) {
            $this->SearchValueInput = new SearchValueInput();
            $this->SearchValueInput->deserialize($param["SearchValueInput"]);
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("TaskNotifyConfig",$param) and $param["TaskNotifyConfig"] !== null) {
            $this->TaskNotifyConfig = new TaskNotifyConfig();
            $this->TaskNotifyConfig->deserialize($param["TaskNotifyConfig"]);
        }
    }
}
