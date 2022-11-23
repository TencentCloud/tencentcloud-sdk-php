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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 参数模板信息
 *
 * @method integer getId() 获取参数模板ID
 * @method void setId(integer $Id) 设置参数模板ID
 * @method string getTemplateName() 获取参数模板名称
 * @method void setTemplateName(string $TemplateName) 设置参数模板名称
 * @method string getTemplateDescription() 获取参数模板描述
 * @method void setTemplateDescription(string $TemplateDescription) 设置参数模板描述
 * @method string getEngineVersion() 获取引擎版本
 * @method void setEngineVersion(string $EngineVersion) 设置引擎版本
 * @method string getDbMode() 获取数据库类型，可选值：NORMAL，SERVERLESS
 * @method void setDbMode(string $DbMode) 设置数据库类型，可选值：NORMAL，SERVERLESS
 * @method array getParamInfoSet() 获取参数模板详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamInfoSet(array $ParamInfoSet) 设置参数模板详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class ParamTemplateListInfo extends AbstractModel
{
    /**
     * @var integer 参数模板ID
     */
    public $Id;

    /**
     * @var string 参数模板名称
     */
    public $TemplateName;

    /**
     * @var string 参数模板描述
     */
    public $TemplateDescription;

    /**
     * @var string 引擎版本
     */
    public $EngineVersion;

    /**
     * @var string 数据库类型，可选值：NORMAL，SERVERLESS
     */
    public $DbMode;

    /**
     * @var array 参数模板详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamInfoSet;

    /**
     * @param integer $Id 参数模板ID
     * @param string $TemplateName 参数模板名称
     * @param string $TemplateDescription 参数模板描述
     * @param string $EngineVersion 引擎版本
     * @param string $DbMode 数据库类型，可选值：NORMAL，SERVERLESS
     * @param array $ParamInfoSet 参数模板详情
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("TemplateDescription",$param) and $param["TemplateDescription"] !== null) {
            $this->TemplateDescription = $param["TemplateDescription"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("DbMode",$param) and $param["DbMode"] !== null) {
            $this->DbMode = $param["DbMode"];
        }

        if (array_key_exists("ParamInfoSet",$param) and $param["ParamInfoSet"] !== null) {
            $this->ParamInfoSet = [];
            foreach ($param["ParamInfoSet"] as $key => $value){
                $obj = new TemplateParamInfo();
                $obj->deserialize($value);
                array_push($this->ParamInfoSet, $obj);
            }
        }
    }
}
