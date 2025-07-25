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
namespace TencentCloud\Eis\V20210601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListRuntimesMC请求参数结构体
 *
 * @method integer getRuntimeClass() 获取环境运行类型：0:运行时类型、1:api类型
 * @method void setRuntimeClass(integer $RuntimeClass) 设置环境运行类型：0:运行时类型、1:api类型
 * @method integer getPlanType() 获取计划类型：0-pro 1-lite
 * @method void setPlanType(integer $PlanType) 设置计划类型：0-pro 1-lite
 */
class ListRuntimesMCRequest extends AbstractModel
{
    /**
     * @var integer 环境运行类型：0:运行时类型、1:api类型
     */
    public $RuntimeClass;

    /**
     * @var integer 计划类型：0-pro 1-lite
     */
    public $PlanType;

    /**
     * @param integer $RuntimeClass 环境运行类型：0:运行时类型、1:api类型
     * @param integer $PlanType 计划类型：0-pro 1-lite
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
        if (array_key_exists("RuntimeClass",$param) and $param["RuntimeClass"] !== null) {
            $this->RuntimeClass = $param["RuntimeClass"];
        }

        if (array_key_exists("PlanType",$param) and $param["PlanType"] !== null) {
            $this->PlanType = $param["PlanType"];
        }
    }
}
