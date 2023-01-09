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
 * CreateTaskFromTemplate请求参数结构体
 *
 * @method integer getTemplateId() 获取从经验库中查询到的经验模板ID
 * @method void setTemplateId(integer $TemplateId) 设置从经验库中查询到的经验模板ID
 * @method TaskConfig getTaskConfig() 获取演练的配置参数
 * @method void setTaskConfig(TaskConfig $TaskConfig) 设置演练的配置参数
 */
class CreateTaskFromTemplateRequest extends AbstractModel
{
    /**
     * @var integer 从经验库中查询到的经验模板ID
     */
    public $TemplateId;

    /**
     * @var TaskConfig 演练的配置参数
     */
    public $TaskConfig;

    /**
     * @param integer $TemplateId 从经验库中查询到的经验模板ID
     * @param TaskConfig $TaskConfig 演练的配置参数
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TaskConfig",$param) and $param["TaskConfig"] !== null) {
            $this->TaskConfig = new TaskConfig();
            $this->TaskConfig->deserialize($param["TaskConfig"]);
        }
    }
}
