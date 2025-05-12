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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCodeTemplateVersion请求参数结构体
 *
 * @method string getCodeTemplateId() 获取模版Id
 * @method void setCodeTemplateId(string $CodeTemplateId) 设置模版Id
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method array getTasks() 获取模版关联的任务以及调度参数设置
 * @method void setTasks(array $Tasks) 设置模版关联的任务以及调度参数设置
 * @method array getOriginalParams() 获取代码模本脚本内置参数
 * @method void setOriginalParams(array $OriginalParams) 设置代码模本脚本内置参数
 * @method string getVersionRemark() 获取提交描述
 * @method void setVersionRemark(string $VersionRemark) 设置提交描述
 * @method boolean getNeedSubmitScheduleForTemplate() 获取true表示：针对新建、已下线状态的任务仅生成开发态保存版本，您可在任务中自行提交到生产。针对调度中、已暂停、已失效的任务生成开发态保存版本并提交到生产（即本次代码模板的改动在调度中生效）； 
false表示：针对所有状态的任务均仅生成开发态保存版本。
 * @method void setNeedSubmitScheduleForTemplate(boolean $NeedSubmitScheduleForTemplate) 设置true表示：针对新建、已下线状态的任务仅生成开发态保存版本，您可在任务中自行提交到生产。针对调度中、已暂停、已失效的任务生成开发态保存版本并提交到生产（即本次代码模板的改动在调度中生效）； 
false表示：针对所有状态的任务均仅生成开发态保存版本。
 */
class CreateCodeTemplateVersionRequest extends AbstractModel
{
    /**
     * @var string 模版Id
     */
    public $CodeTemplateId;

    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var array 模版关联的任务以及调度参数设置
     */
    public $Tasks;

    /**
     * @var array 代码模本脚本内置参数
     */
    public $OriginalParams;

    /**
     * @var string 提交描述
     */
    public $VersionRemark;

    /**
     * @var boolean true表示：针对新建、已下线状态的任务仅生成开发态保存版本，您可在任务中自行提交到生产。针对调度中、已暂停、已失效的任务生成开发态保存版本并提交到生产（即本次代码模板的改动在调度中生效）； 
false表示：针对所有状态的任务均仅生成开发态保存版本。
     */
    public $NeedSubmitScheduleForTemplate;

    /**
     * @param string $CodeTemplateId 模版Id
     * @param string $ProjectId 项目Id
     * @param array $Tasks 模版关联的任务以及调度参数设置
     * @param array $OriginalParams 代码模本脚本内置参数
     * @param string $VersionRemark 提交描述
     * @param boolean $NeedSubmitScheduleForTemplate true表示：针对新建、已下线状态的任务仅生成开发态保存版本，您可在任务中自行提交到生产。针对调度中、已暂停、已失效的任务生成开发态保存版本并提交到生产（即本次代码模板的改动在调度中生效）； 
false表示：针对所有状态的任务均仅生成开发态保存版本。
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
        if (array_key_exists("CodeTemplateId",$param) and $param["CodeTemplateId"] !== null) {
            $this->CodeTemplateId = $param["CodeTemplateId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new TaskFormParams();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("OriginalParams",$param) and $param["OriginalParams"] !== null) {
            $this->OriginalParams = $param["OriginalParams"];
        }

        if (array_key_exists("VersionRemark",$param) and $param["VersionRemark"] !== null) {
            $this->VersionRemark = $param["VersionRemark"];
        }

        if (array_key_exists("NeedSubmitScheduleForTemplate",$param) and $param["NeedSubmitScheduleForTemplate"] !== null) {
            $this->NeedSubmitScheduleForTemplate = $param["NeedSubmitScheduleForTemplate"];
        }
    }
}
