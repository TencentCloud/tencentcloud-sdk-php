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
 * 带有请求方式的apiname结构体
 *
 * @method string getApiName() 获取api名称
 * @method void setApiName(string $ApiName) 设置api名称
 * @method string getMethod() 获取api请求方式
 * @method void setMethod(string $Method) 设置api请求方式
 * @method integer getCount() 获取api近30天请求数量
 * @method void setCount(integer $Count) 设置api近30天请求数量
 * @method array getLabel() 获取api标签
 * @method void setLabel(array $Label) 设置api标签
 */
class ApiNameMethod extends AbstractModel
{
    /**
     * @var string api名称
     */
    public $ApiName;

    /**
     * @var string api请求方式
     */
    public $Method;

    /**
     * @var integer api近30天请求数量
     */
    public $Count;

    /**
     * @var array api标签
     */
    public $Label;

    /**
     * @param string $ApiName api名称
     * @param string $Method api请求方式
     * @param integer $Count api近30天请求数量
     * @param array $Label api标签
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
        if (array_key_exists("ApiName",$param) and $param["ApiName"] !== null) {
            $this->ApiName = $param["ApiName"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }
    }
}
