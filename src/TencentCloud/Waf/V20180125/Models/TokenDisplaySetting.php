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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * JWT显示设置（只有当校验方式为JWS/JWE的时候才会有该配置信息）
 *
 * @method boolean getDisplayWithPayloadEnable() 获取是否使用payload字段作为显示token
 * @method void setDisplayWithPayloadEnable(boolean $DisplayWithPayloadEnable) 设置是否使用payload字段作为显示token
 * @method string getFieldName() 获取用于显示的payload字段名
 * @method void setFieldName(string $FieldName) 设置用于显示的payload字段名
 */
class TokenDisplaySetting extends AbstractModel
{
    /**
     * @var boolean 是否使用payload字段作为显示token
     */
    public $DisplayWithPayloadEnable;

    /**
     * @var string 用于显示的payload字段名
     */
    public $FieldName;

    /**
     * @param boolean $DisplayWithPayloadEnable 是否使用payload字段作为显示token
     * @param string $FieldName 用于显示的payload字段名
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
        if (array_key_exists("DisplayWithPayloadEnable",$param) and $param["DisplayWithPayloadEnable"] !== null) {
            $this->DisplayWithPayloadEnable = $param["DisplayWithPayloadEnable"];
        }

        if (array_key_exists("FieldName",$param) and $param["FieldName"] !== null) {
            $this->FieldName = $param["FieldName"];
        }
    }
}
