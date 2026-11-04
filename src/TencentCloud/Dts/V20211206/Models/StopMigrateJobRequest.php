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
 * StopMigrateJob请求参数结构体
 *
 * @method string getJobId() 获取<p>数据迁移任务ID，可通过<a href="https://cloud.tencent.com/document/product/571/82084">DescribeMigrationJobs</a>接口获取。</p>
 * @method void setJobId(string $JobId) 设置<p>数据迁移任务ID，可通过<a href="https://cloud.tencent.com/document/product/571/82084">DescribeMigrationJobs</a>接口获取。</p>
 * @method string getMigrateAdvancedObject() 获取<p>任务结束时是否强制迁移高级对象，仅PG适用</p><p>枚举值：</p><ul><li>yes： 是</li><li>no： 否</li></ul>
 * @method void setMigrateAdvancedObject(string $MigrateAdvancedObject) 设置<p>任务结束时是否强制迁移高级对象，仅PG适用</p><p>枚举值：</p><ul><li>yes： 是</li><li>no： 否</li></ul>
 */
class StopMigrateJobRequest extends AbstractModel
{
    /**
     * @var string <p>数据迁移任务ID，可通过<a href="https://cloud.tencent.com/document/product/571/82084">DescribeMigrationJobs</a>接口获取。</p>
     */
    public $JobId;

    /**
     * @var string <p>任务结束时是否强制迁移高级对象，仅PG适用</p><p>枚举值：</p><ul><li>yes： 是</li><li>no： 否</li></ul>
     */
    public $MigrateAdvancedObject;

    /**
     * @param string $JobId <p>数据迁移任务ID，可通过<a href="https://cloud.tencent.com/document/product/571/82084">DescribeMigrationJobs</a>接口获取。</p>
     * @param string $MigrateAdvancedObject <p>任务结束时是否强制迁移高级对象，仅PG适用</p><p>枚举值：</p><ul><li>yes： 是</li><li>no： 否</li></ul>
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

        if (array_key_exists("MigrateAdvancedObject",$param) and $param["MigrateAdvancedObject"] !== null) {
            $this->MigrateAdvancedObject = $param["MigrateAdvancedObject"];
        }
    }
}
