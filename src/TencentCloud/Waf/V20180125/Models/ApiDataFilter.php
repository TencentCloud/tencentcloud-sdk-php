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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * api资产列表过滤器
 *
 * @method string getEntity() 获取数据标签，是否活跃，功能场景
 * @method void setEntity(string $Entity) 设置数据标签，是否活跃，功能场景
 * @method string getOperator() 获取等于
 * @method void setOperator(string $Operator) 设置等于
 * @method string getValue() 获取日期，手机号，邮箱等
 * @method void setValue(string $Value) 设置日期，手机号，邮箱等
 */
class ApiDataFilter extends AbstractModel
{
    /**
     * @var string 数据标签，是否活跃，功能场景
     */
    public $Entity;

    /**
     * @var string 等于
     */
    public $Operator;

    /**
     * @var string 日期，手机号，邮箱等
     */
    public $Value;

    /**
     * @param string $Entity 数据标签，是否活跃，功能场景
     * @param string $Operator 等于
     * @param string $Value 日期，手机号，邮箱等
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
        if (array_key_exists("Entity",$param) and $param["Entity"] !== null) {
            $this->Entity = $param["Entity"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
