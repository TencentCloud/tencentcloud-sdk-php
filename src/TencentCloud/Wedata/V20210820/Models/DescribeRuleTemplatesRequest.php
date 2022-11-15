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
 * DescribeRuleTemplates请求参数结构体
 *
 * @method integer getType() 获取模版类型 1.系统模版 2.自定义模版
 * @method void setType(integer $Type) 设置模版类型 1.系统模版 2.自定义模版
 * @method integer getSourceObjectType() 获取1.常量 2.离线表级 2.离线字段级
 * @method void setSourceObjectType(integer $SourceObjectType) 设置1.常量 2.离线表级 2.离线字段级
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method array getSourceEngineTypes() 获取源端对应的引擎类型
 * @method void setSourceEngineTypes(array $SourceEngineTypes) 设置源端对应的引擎类型
 */
class DescribeRuleTemplatesRequest extends AbstractModel
{
    /**
     * @var integer 模版类型 1.系统模版 2.自定义模版
     */
    public $Type;

    /**
     * @var integer 1.常量 2.离线表级 2.离线字段级
     */
    public $SourceObjectType;

    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var array 源端对应的引擎类型
     */
    public $SourceEngineTypes;

    /**
     * @param integer $Type 模版类型 1.系统模版 2.自定义模版
     * @param integer $SourceObjectType 1.常量 2.离线表级 2.离线字段级
     * @param string $ProjectId 项目Id
     * @param array $SourceEngineTypes 源端对应的引擎类型
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SourceObjectType",$param) and $param["SourceObjectType"] !== null) {
            $this->SourceObjectType = $param["SourceObjectType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("SourceEngineTypes",$param) and $param["SourceEngineTypes"] !== null) {
            $this->SourceEngineTypes = $param["SourceEngineTypes"];
        }
    }
}
