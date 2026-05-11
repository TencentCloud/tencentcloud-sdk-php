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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模糊查询数据集信息指定字段和值
 *
 * @method string getProgramId() 获取<p>数据集ID</p>
 * @method void setProgramId(string $ProgramId) 设置<p>数据集ID</p>
 * @method string getProgramName() 获取<p>数据集名称</p>
 * @method void setProgramName(string $ProgramName) 设置<p>数据集名称</p>
 */
class SearchFiltersProgram extends AbstractModel
{
    /**
     * @var string <p>数据集ID</p>
     */
    public $ProgramId;

    /**
     * @var string <p>数据集名称</p>
     */
    public $ProgramName;

    /**
     * @param string $ProgramId <p>数据集ID</p>
     * @param string $ProgramName <p>数据集名称</p>
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
        if (array_key_exists("ProgramId",$param) and $param["ProgramId"] !== null) {
            $this->ProgramId = $param["ProgramId"];
        }

        if (array_key_exists("ProgramName",$param) and $param["ProgramName"] !== null) {
            $this->ProgramName = $param["ProgramName"];
        }
    }
}
