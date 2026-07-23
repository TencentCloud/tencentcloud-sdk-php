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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预接入检查项定义
 *
 * @method string getStage() 获取检查项 key，与查询接口 CheckResult.Stages[].Stage 一一对应
 * @method void setStage(string $Stage) 设置检查项 key，与查询接口 CheckResult.Stages[].Stage 一一对应
 * @method string getDescription() 获取该检查项的展示文案，已按请求的 Language 返回中文或英文
 * @method void setDescription(string $Description) 设置该检查项的展示文案，已按请求的 Language 返回中文或英文
 */
class ClusterFwPreAccessCheckItem extends AbstractModel
{
    /**
     * @var string 检查项 key，与查询接口 CheckResult.Stages[].Stage 一一对应
     */
    public $Stage;

    /**
     * @var string 该检查项的展示文案，已按请求的 Language 返回中文或英文
     */
    public $Description;

    /**
     * @param string $Stage 检查项 key，与查询接口 CheckResult.Stages[].Stage 一一对应
     * @param string $Description 该检查项的展示文案，已按请求的 Language 返回中文或英文
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
        if (array_key_exists("Stage",$param) and $param["Stage"] !== null) {
            $this->Stage = $param["Stage"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
