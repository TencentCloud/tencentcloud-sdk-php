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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 价格标签信息
 *
 * @method string getName() 获取计价名称
 * @method void setName(string $Name) 设置计价名称
 * @method string getCategory() 获取计价类别
 * @method void setCategory(string $Category) 设置计价类别
 * @method string getCode() 获取计费项标签
 * @method void setCode(string $Code) 设置计费项标签
 * @method integer getStep() 获取步长
 * @method void setStep(integer $Step) 设置步长
 */
class PriceTag extends AbstractModel
{
    /**
     * @var string 计价名称
     */
    public $Name;

    /**
     * @var string 计价类别
     */
    public $Category;

    /**
     * @var string 计费项标签
     */
    public $Code;

    /**
     * @var integer 步长
     */
    public $Step;

    /**
     * @param string $Name 计价名称
     * @param string $Category 计价类别
     * @param string $Code 计费项标签
     * @param integer $Step 步长
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Step",$param) and $param["Step"] !== null) {
            $this->Step = $param["Step"];
        }
    }
}
