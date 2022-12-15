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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyParameterTemplate请求参数结构体
 *
 * @method string getTemplateId() 获取参数模板ID，用于唯一确认参数模板，不可修改
 * @method void setTemplateId(string $TemplateId) 设置参数模板ID，用于唯一确认参数模板，不可修改
 * @method string getTemplateName() 获取参数模板名称，长度为1～60个字符，仅支持数字,英文大小写字母、中文以及特殊字符_-./()（）[]+=：:@  注：若该字段为空    ，则保持原参数模板名称
 * @method void setTemplateName(string $TemplateName) 设置参数模板名称，长度为1～60个字符，仅支持数字,英文大小写字母、中文以及特殊字符_-./()（）[]+=：:@  注：若该字段为空    ，则保持原参数模板名称
 * @method string getTemplateDescription() 获取参数模板描述，长度为0～60个字符，仅支持数字,英文大小写字母、中文以及特殊字符_-./()（）[]+=：:@  注：若不传入该参数，则保持原参数模板描述
 * @method void setTemplateDescription(string $TemplateDescription) 设置参数模板描述，长度为0～60个字符，仅支持数字,英文大小写字母、中文以及特殊字符_-./()（）[]+=：:@  注：若不传入该参数，则保持原参数模板描述
 * @method array getModifyParamEntrySet() 获取需要修改或添加的参数集合，注：同一参数不能同时出现在修改添加集合和删除集合中
 * @method void setModifyParamEntrySet(array $ModifyParamEntrySet) 设置需要修改或添加的参数集合，注：同一参数不能同时出现在修改添加集合和删除集合中
 * @method array getDeleteParamSet() 获取需要从模板中删除的参数集合，注：同一参数不能同时出现在修改添加集合和删除集合中
 * @method void setDeleteParamSet(array $DeleteParamSet) 设置需要从模板中删除的参数集合，注：同一参数不能同时出现在修改添加集合和删除集合中
 */
class ModifyParameterTemplateRequest extends AbstractModel
{
    /**
     * @var string 参数模板ID，用于唯一确认参数模板，不可修改
     */
    public $TemplateId;

    /**
     * @var string 参数模板名称，长度为1～60个字符，仅支持数字,英文大小写字母、中文以及特殊字符_-./()（）[]+=：:@  注：若该字段为空    ，则保持原参数模板名称
     */
    public $TemplateName;

    /**
     * @var string 参数模板描述，长度为0～60个字符，仅支持数字,英文大小写字母、中文以及特殊字符_-./()（）[]+=：:@  注：若不传入该参数，则保持原参数模板描述
     */
    public $TemplateDescription;

    /**
     * @var array 需要修改或添加的参数集合，注：同一参数不能同时出现在修改添加集合和删除集合中
     */
    public $ModifyParamEntrySet;

    /**
     * @var array 需要从模板中删除的参数集合，注：同一参数不能同时出现在修改添加集合和删除集合中
     */
    public $DeleteParamSet;

    /**
     * @param string $TemplateId 参数模板ID，用于唯一确认参数模板，不可修改
     * @param string $TemplateName 参数模板名称，长度为1～60个字符，仅支持数字,英文大小写字母、中文以及特殊字符_-./()（）[]+=：:@  注：若该字段为空    ，则保持原参数模板名称
     * @param string $TemplateDescription 参数模板描述，长度为0～60个字符，仅支持数字,英文大小写字母、中文以及特殊字符_-./()（）[]+=：:@  注：若不传入该参数，则保持原参数模板描述
     * @param array $ModifyParamEntrySet 需要修改或添加的参数集合，注：同一参数不能同时出现在修改添加集合和删除集合中
     * @param array $DeleteParamSet 需要从模板中删除的参数集合，注：同一参数不能同时出现在修改添加集合和删除集合中
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

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("TemplateDescription",$param) and $param["TemplateDescription"] !== null) {
            $this->TemplateDescription = $param["TemplateDescription"];
        }

        if (array_key_exists("ModifyParamEntrySet",$param) and $param["ModifyParamEntrySet"] !== null) {
            $this->ModifyParamEntrySet = [];
            foreach ($param["ModifyParamEntrySet"] as $key => $value){
                $obj = new ParamEntry();
                $obj->deserialize($value);
                array_push($this->ModifyParamEntrySet, $obj);
            }
        }

        if (array_key_exists("DeleteParamSet",$param) and $param["DeleteParamSet"] !== null) {
            $this->DeleteParamSet = $param["DeleteParamSet"];
        }
    }
}
