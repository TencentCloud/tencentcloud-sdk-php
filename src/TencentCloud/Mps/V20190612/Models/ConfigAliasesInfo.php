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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 参数配置。
 *
 * @method string getParamName() 获取参数名。
 * @method void setParamName(string $ParamName) 设置参数名。
 * @method array getAliasValueList() 获取alias-value配置。
 * @method void setAliasValueList(array $AliasValueList) 设置alias-value配置。
 */
class ConfigAliasesInfo extends AbstractModel
{
    /**
     * @var string 参数名。
     */
    public $ParamName;

    /**
     * @var array alias-value配置。
     */
    public $AliasValueList;

    /**
     * @param string $ParamName 参数名。
     * @param array $AliasValueList alias-value配置。
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
        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("AliasValueList",$param) and $param["AliasValueList"] !== null) {
            $this->AliasValueList = [];
            foreach ($param["AliasValueList"] as $key => $value){
                $obj = new AliasValueConf();
                $obj->deserialize($value);
                array_push($this->AliasValueList, $obj);
            }
        }
    }
}
