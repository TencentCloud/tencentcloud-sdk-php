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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceParamTpl请求参数结构体
 *
 * @method string getTplId() 获取待修改的参数模板 ID，示例：tpl-jglr91vew。
 * @method void setTplId(string $TplId) 设置待修改的参数模板 ID，示例：tpl-jglr91vew。
 * @method string getTplName() 获取待修改参数模板名称，为空时，保持原有名称。
 * @method void setTplName(string $TplName) 设置待修改参数模板名称，为空时，保持原有名称。
 * @method string getTplDesc() 获取待修改参数模板描述，为空时，保持原有描述。
 * @method void setTplDesc(string $TplDesc) 设置待修改参数模板描述，为空时，保持原有描述。
 * @method array getParams() 获取待修改参数名及参数值，为空时，各参数保持原有值，支持单条或批量修改。
 * @method void setParams(array $Params) 设置待修改参数名及参数值，为空时，各参数保持原有值，支持单条或批量修改。
 */
class ModifyDBInstanceParamTplRequest extends AbstractModel
{
    /**
     * @var string 待修改的参数模板 ID，示例：tpl-jglr91vew。
     */
    public $TplId;

    /**
     * @var string 待修改参数模板名称，为空时，保持原有名称。
     */
    public $TplName;

    /**
     * @var string 待修改参数模板描述，为空时，保持原有描述。
     */
    public $TplDesc;

    /**
     * @var array 待修改参数名及参数值，为空时，各参数保持原有值，支持单条或批量修改。
     */
    public $Params;

    /**
     * @param string $TplId 待修改的参数模板 ID，示例：tpl-jglr91vew。
     * @param string $TplName 待修改参数模板名称，为空时，保持原有名称。
     * @param string $TplDesc 待修改参数模板描述，为空时，保持原有描述。
     * @param array $Params 待修改参数名及参数值，为空时，各参数保持原有值，支持单条或批量修改。
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
        if (array_key_exists("TplId",$param) and $param["TplId"] !== null) {
            $this->TplId = $param["TplId"];
        }

        if (array_key_exists("TplName",$param) and $param["TplName"] !== null) {
            $this->TplName = $param["TplName"];
        }

        if (array_key_exists("TplDesc",$param) and $param["TplDesc"] !== null) {
            $this->TplDesc = $param["TplDesc"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = [];
            foreach ($param["Params"] as $key => $value){
                $obj = new ParamType();
                $obj->deserialize($value);
                array_push($this->Params, $obj);
            }
        }
    }
}
