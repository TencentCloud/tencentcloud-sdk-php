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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 电子文档的控件填充信息
 *
 * @method string getComponentValue() 获取控件填充value
 * @method void setComponentValue(string $ComponentValue) 设置控件填充value
 * @method string getComponentId() 获取控件id
 * @method void setComponentId(string $ComponentId) 设置控件id
 * @method string getComponentName() 获取控件名字，最大长度不超过30字符
 * @method void setComponentName(string $ComponentName) 设置控件名字，最大长度不超过30字符
 */
class FormField extends AbstractModel
{
    /**
     * @var string 控件填充value
     */
    public $ComponentValue;

    /**
     * @var string 控件id
     */
    public $ComponentId;

    /**
     * @var string 控件名字，最大长度不超过30字符
     */
    public $ComponentName;

    /**
     * @param string $ComponentValue 控件填充value
     * @param string $ComponentId 控件id
     * @param string $ComponentName 控件名字，最大长度不超过30字符
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
        if (array_key_exists("ComponentValue",$param) and $param["ComponentValue"] !== null) {
            $this->ComponentValue = $param["ComponentValue"];
        }

        if (array_key_exists("ComponentId",$param) and $param["ComponentId"] !== null) {
            $this->ComponentId = $param["ComponentId"];
        }

        if (array_key_exists("ComponentName",$param) and $param["ComponentName"] !== null) {
            $this->ComponentName = $param["ComponentName"];
        }
    }
}
