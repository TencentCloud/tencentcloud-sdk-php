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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 函数类型或函数分类
 *
 * @method string getName() 获取无
 * @method void setName(string $Name) 设置无
 * @method string getZhName() 获取无
 * @method void setZhName(string $ZhName) 设置无
 * @method string getEnName() 获取无
 * @method void setEnName(string $EnName) 设置无
 */
class FunctionTypeOrKind extends AbstractModel
{
    /**
     * @var string 无
     */
    public $Name;

    /**
     * @var string 无
     */
    public $ZhName;

    /**
     * @var string 无
     */
    public $EnName;

    /**
     * @param string $Name 无
     * @param string $ZhName 无
     * @param string $EnName 无
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

        if (array_key_exists("ZhName",$param) and $param["ZhName"] !== null) {
            $this->ZhName = $param["ZhName"];
        }

        if (array_key_exists("EnName",$param) and $param["EnName"] !== null) {
            $this->EnName = $param["EnName"];
        }
    }
}
