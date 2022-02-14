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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CC精准防护配置项
 *
 * @method string getFieldType() 获取配置项类型，当前仅支持value
 * @method void setFieldType(string $FieldType) 设置配置项类型，当前仅支持value
 * @method string getFieldName() 获取配置字段，可取值cgi， ua， cookie， referer， accept,  srcip
 * @method void setFieldName(string $FieldName) 设置配置字段，可取值cgi， ua， cookie， referer， accept,  srcip
 * @method string getValue() 获取配置取值
 * @method void setValue(string $Value) 设置配置取值
 * @method string getValueOperator() 获取配置项值比对方式，可取值equal ，not_equal， include
 * @method void setValueOperator(string $ValueOperator) 设置配置项值比对方式，可取值equal ，not_equal， include
 */
class CCPrecisionPlyRecord extends AbstractModel
{
    /**
     * @var string 配置项类型，当前仅支持value
     */
    public $FieldType;

    /**
     * @var string 配置字段，可取值cgi， ua， cookie， referer， accept,  srcip
     */
    public $FieldName;

    /**
     * @var string 配置取值
     */
    public $Value;

    /**
     * @var string 配置项值比对方式，可取值equal ，not_equal， include
     */
    public $ValueOperator;

    /**
     * @param string $FieldType 配置项类型，当前仅支持value
     * @param string $FieldName 配置字段，可取值cgi， ua， cookie， referer， accept,  srcip
     * @param string $Value 配置取值
     * @param string $ValueOperator 配置项值比对方式，可取值equal ，not_equal， include
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
        if (array_key_exists("FieldType",$param) and $param["FieldType"] !== null) {
            $this->FieldType = $param["FieldType"];
        }

        if (array_key_exists("FieldName",$param) and $param["FieldName"] !== null) {
            $this->FieldName = $param["FieldName"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("ValueOperator",$param) and $param["ValueOperator"] !== null) {
            $this->ValueOperator = $param["ValueOperator"];
        }
    }
}
