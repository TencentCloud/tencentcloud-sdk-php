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
namespace TencentCloud\Cii\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 结构化结果
 *
 * @method integer getCode() 获取0表示正常返回
 * @method void setCode(integer $Code) 设置0表示正常返回
 * @method string getTaskType() 获取报告类型
 * @method void setTaskType(string $TaskType) 设置报告类型
 * @method string getStructureResult() 获取结构化结果
 * @method void setStructureResult(string $StructureResult) 设置结构化结果
 */
class StructureResultObject extends AbstractModel
{
    /**
     * @var integer 0表示正常返回
     */
    public $Code;

    /**
     * @var string 报告类型
     */
    public $TaskType;

    /**
     * @var string 结构化结果
     */
    public $StructureResult;

    /**
     * @param integer $Code 0表示正常返回
     * @param string $TaskType 报告类型
     * @param string $StructureResult 结构化结果
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("StructureResult",$param) and $param["StructureResult"] !== null) {
            $this->StructureResult = $param["StructureResult"];
        }
    }
}
