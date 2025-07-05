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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 参数
 *
 * @method string getParameterName() 获取名字
 * @method void setParameterName(string $ParameterName) 设置名字
 * @method string getParameterValue() 获取值
 * @method void setParameterValue(string $ParameterValue) 设置值
 * @method string getParameterOldValue() 获取修改前的值
 * @method void setParameterOldValue(string $ParameterOldValue) 设置修改前的值
 */
class ConfigParams extends AbstractModel
{
    /**
     * @var string 名字
     */
    public $ParameterName;

    /**
     * @var string 值
     */
    public $ParameterValue;

    /**
     * @var string 修改前的值
     */
    public $ParameterOldValue;

    /**
     * @param string $ParameterName 名字
     * @param string $ParameterValue 值
     * @param string $ParameterOldValue 修改前的值
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
        if (array_key_exists("ParameterName",$param) and $param["ParameterName"] !== null) {
            $this->ParameterName = $param["ParameterName"];
        }

        if (array_key_exists("ParameterValue",$param) and $param["ParameterValue"] !== null) {
            $this->ParameterValue = $param["ParameterValue"];
        }

        if (array_key_exists("ParameterOldValue",$param) and $param["ParameterOldValue"] !== null) {
            $this->ParameterOldValue = $param["ParameterOldValue"];
        }
    }
}
