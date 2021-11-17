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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 商户分类
 *
 * @method string getCode() 获取分类编号
 * @method void setCode(string $Code) 设置分类编号
 * @method string getName() 获取分类名称
 * @method void setName(string $Name) 设置分类名称
 * @method string getParent() 获取父级编号（0为一级编号，大于0为父级分类编号）
 * @method void setParent(string $Parent) 设置父级编号（0为一级编号，大于0为父级分类编号）
 */
class MerchantClassificationId extends AbstractModel
{
    /**
     * @var string 分类编号
     */
    public $Code;

    /**
     * @var string 分类名称
     */
    public $Name;

    /**
     * @var string 父级编号（0为一级编号，大于0为父级分类编号）
     */
    public $Parent;

    /**
     * @param string $Code 分类编号
     * @param string $Name 分类名称
     * @param string $Parent 父级编号（0为一级编号，大于0为父级分类编号）
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Parent",$param) and $param["Parent"] !== null) {
            $this->Parent = $param["Parent"];
        }
    }
}
