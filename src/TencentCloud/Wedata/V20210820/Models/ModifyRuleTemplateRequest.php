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
 * ModifyRuleTemplate请求参数结构体
 *
 * @method integer getTemplateId() 获取模版ID
 * @method void setTemplateId(integer $TemplateId) 设置模版ID
 * @method integer getType() 获取模版类型  1.系统模版   2.自定义模版
 * @method void setType(integer $Type) 设置模版类型  1.系统模版   2.自定义模版
 * @method string getName() 获取模版名称
 * @method void setName(string $Name) 设置模版名称
 * @method integer getQualityDim() 获取质量检测维度 1.准确性 2.唯一性 3.完整性 4.一致性 5.及时性 6.有效性
 * @method void setQualityDim(integer $QualityDim) 设置质量检测维度 1.准确性 2.唯一性 3.完整性 4.一致性 5.及时性 6.有效性
 * @method integer getSourceObjectType() 获取源端数据对象类型 1.常量  2.离线表级   2.离线字段级
 * @method void setSourceObjectType(integer $SourceObjectType) 设置源端数据对象类型 1.常量  2.离线表级   2.离线字段级
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method array getSourceEngineTypes() 获取源端对应的引擎类型
 * @method void setSourceEngineTypes(array $SourceEngineTypes) 设置源端对应的引擎类型
 * @method boolean getMultiSourceFlag() 获取是否关联其它库表
 * @method void setMultiSourceFlag(boolean $MultiSourceFlag) 设置是否关联其它库表
 * @method string getSqlExpression() 获取SQL 表达式
 * @method void setSqlExpression(string $SqlExpression) 设置SQL 表达式
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method boolean getWhereFlag() 获取是否添加where参数
 * @method void setWhereFlag(boolean $WhereFlag) 设置是否添加where参数
 */
class ModifyRuleTemplateRequest extends AbstractModel
{
    /**
     * @var integer 模版ID
     */
    public $TemplateId;

    /**
     * @var integer 模版类型  1.系统模版   2.自定义模版
     */
    public $Type;

    /**
     * @var string 模版名称
     */
    public $Name;

    /**
     * @var integer 质量检测维度 1.准确性 2.唯一性 3.完整性 4.一致性 5.及时性 6.有效性
     */
    public $QualityDim;

    /**
     * @var integer 源端数据对象类型 1.常量  2.离线表级   2.离线字段级
     */
    public $SourceObjectType;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var array 源端对应的引擎类型
     */
    public $SourceEngineTypes;

    /**
     * @var boolean 是否关联其它库表
     */
    public $MultiSourceFlag;

    /**
     * @var string SQL 表达式
     */
    public $SqlExpression;

    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var boolean 是否添加where参数
     */
    public $WhereFlag;

    /**
     * @param integer $TemplateId 模版ID
     * @param integer $Type 模版类型  1.系统模版   2.自定义模版
     * @param string $Name 模版名称
     * @param integer $QualityDim 质量检测维度 1.准确性 2.唯一性 3.完整性 4.一致性 5.及时性 6.有效性
     * @param integer $SourceObjectType 源端数据对象类型 1.常量  2.离线表级   2.离线字段级
     * @param string $Description 描述
     * @param array $SourceEngineTypes 源端对应的引擎类型
     * @param boolean $MultiSourceFlag 是否关联其它库表
     * @param string $SqlExpression SQL 表达式
     * @param string $ProjectId 项目Id
     * @param boolean $WhereFlag 是否添加where参数
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("QualityDim",$param) and $param["QualityDim"] !== null) {
            $this->QualityDim = $param["QualityDim"];
        }

        if (array_key_exists("SourceObjectType",$param) and $param["SourceObjectType"] !== null) {
            $this->SourceObjectType = $param["SourceObjectType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SourceEngineTypes",$param) and $param["SourceEngineTypes"] !== null) {
            $this->SourceEngineTypes = $param["SourceEngineTypes"];
        }

        if (array_key_exists("MultiSourceFlag",$param) and $param["MultiSourceFlag"] !== null) {
            $this->MultiSourceFlag = $param["MultiSourceFlag"];
        }

        if (array_key_exists("SqlExpression",$param) and $param["SqlExpression"] !== null) {
            $this->SqlExpression = $param["SqlExpression"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("WhereFlag",$param) and $param["WhereFlag"] !== null) {
            $this->WhereFlag = $param["WhereFlag"];
        }
    }
}
