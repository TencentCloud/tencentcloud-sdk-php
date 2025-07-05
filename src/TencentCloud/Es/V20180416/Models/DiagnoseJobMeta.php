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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能运维支持的诊断项和元信息
 *
 * @method string getJobName() 获取智能运维诊断项英文名
 * @method void setJobName(string $JobName) 设置智能运维诊断项英文名
 * @method string getJobZhName() 获取智能运维诊断项中文名
 * @method void setJobZhName(string $JobZhName) 设置智能运维诊断项中文名
 * @method string getJobDescription() 获取智能运维诊断项描述
 * @method void setJobDescription(string $JobDescription) 设置智能运维诊断项描述
 */
class DiagnoseJobMeta extends AbstractModel
{
    /**
     * @var string 智能运维诊断项英文名
     */
    public $JobName;

    /**
     * @var string 智能运维诊断项中文名
     */
    public $JobZhName;

    /**
     * @var string 智能运维诊断项描述
     */
    public $JobDescription;

    /**
     * @param string $JobName 智能运维诊断项英文名
     * @param string $JobZhName 智能运维诊断项中文名
     * @param string $JobDescription 智能运维诊断项描述
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
        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("JobZhName",$param) and $param["JobZhName"] !== null) {
            $this->JobZhName = $param["JobZhName"];
        }

        if (array_key_exists("JobDescription",$param) and $param["JobDescription"] !== null) {
            $this->JobDescription = $param["JobDescription"];
        }
    }
}
