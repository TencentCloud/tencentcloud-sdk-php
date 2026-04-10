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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 运行限制
 *
 * @method array getNextflowVersion() 获取<p>运行时可选的Nextflow版本</p>
 * @method void setNextflowVersion(array $NextflowVersion) 设置<p>运行时可选的Nextflow版本</p>
 */
class RunConstraints extends AbstractModel
{
    /**
     * @var array <p>运行时可选的Nextflow版本</p>
     */
    public $NextflowVersion;

    /**
     * @param array $NextflowVersion <p>运行时可选的Nextflow版本</p>
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
        if (array_key_exists("NextflowVersion",$param) and $param["NextflowVersion"] !== null) {
            $this->NextflowVersion = $param["NextflowVersion"];
        }
    }
}
