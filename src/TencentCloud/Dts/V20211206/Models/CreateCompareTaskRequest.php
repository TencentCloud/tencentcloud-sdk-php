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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCompareTask请求参数结构体
 *
 * @method string getJobId() 获取任务 Id，可通过[DescribeMigrationJobs](https://cloud.tencent.com/document/product/571/82084)接口获取。

 * @method void setJobId(string $JobId) 设置任务 Id，可通过[DescribeMigrationJobs](https://cloud.tencent.com/document/product/571/82084)接口获取。

 * @method string getTaskName() 获取数据对比任务名称，若为空则默认给CompareTaskId相同值
 * @method void setTaskName(string $TaskName) 设置数据对比任务名称，若为空则默认给CompareTaskId相同值
 * @method string getObjectMode() 获取数据对比对象模式，sameAsMigrate(全部迁移对象， 默认为此项配置)，custom(自定义模式)
 * @method void setObjectMode(string $ObjectMode) 设置数据对比对象模式，sameAsMigrate(全部迁移对象， 默认为此项配置)，custom(自定义模式)
 * @method CompareObject getObjects() 获取数据对比对象，当ObjectMode为custom时，此项需要填写。
 * @method void setObjects(CompareObject $Objects) 设置数据对比对象，当ObjectMode为custom时，此项需要填写。
 * @method CompareOptions getOptions() 获取一致性校验选项
 * @method void setOptions(CompareOptions $Options) 设置一致性校验选项
 */
class CreateCompareTaskRequest extends AbstractModel
{
    /**
     * @var string 任务 Id，可通过[DescribeMigrationJobs](https://cloud.tencent.com/document/product/571/82084)接口获取。

     */
    public $JobId;

    /**
     * @var string 数据对比任务名称，若为空则默认给CompareTaskId相同值
     */
    public $TaskName;

    /**
     * @var string 数据对比对象模式，sameAsMigrate(全部迁移对象， 默认为此项配置)，custom(自定义模式)
     */
    public $ObjectMode;

    /**
     * @var CompareObject 数据对比对象，当ObjectMode为custom时，此项需要填写。
     */
    public $Objects;

    /**
     * @var CompareOptions 一致性校验选项
     */
    public $Options;

    /**
     * @param string $JobId 任务 Id，可通过[DescribeMigrationJobs](https://cloud.tencent.com/document/product/571/82084)接口获取。

     * @param string $TaskName 数据对比任务名称，若为空则默认给CompareTaskId相同值
     * @param string $ObjectMode 数据对比对象模式，sameAsMigrate(全部迁移对象， 默认为此项配置)，custom(自定义模式)
     * @param CompareObject $Objects 数据对比对象，当ObjectMode为custom时，此项需要填写。
     * @param CompareOptions $Options 一致性校验选项
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("ObjectMode",$param) and $param["ObjectMode"] !== null) {
            $this->ObjectMode = $param["ObjectMode"];
        }

        if (array_key_exists("Objects",$param) and $param["Objects"] !== null) {
            $this->Objects = new CompareObject();
            $this->Objects->deserialize($param["Objects"]);
        }

        if (array_key_exists("Options",$param) and $param["Options"] !== null) {
            $this->Options = new CompareOptions();
            $this->Options->deserialize($param["Options"]);
        }
    }
}
