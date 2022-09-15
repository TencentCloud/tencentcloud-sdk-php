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
namespace TencentCloud\Irp\V20220324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 不喜欢信息
 *
 * @method string getType() 获取不喜欢的物料类别，对应物料上传协议中的字段名，如authorId，keyword，topic等
 * @method void setType(string $Type) 设置不喜欢的物料类别，对应物料上传协议中的字段名，如authorId，keyword，topic等
 * @method string getValue() 获取type对应字段名的值，如具体的topic名，作者id等
 * @method void setValue(string $Value) 设置type对应字段名的值，如具体的topic名，作者id等
 */
class DislikeInfo extends AbstractModel
{
    /**
     * @var string 不喜欢的物料类别，对应物料上传协议中的字段名，如authorId，keyword，topic等
     */
    public $Type;

    /**
     * @var string type对应字段名的值，如具体的topic名，作者id等
     */
    public $Value;

    /**
     * @param string $Type 不喜欢的物料类别，对应物料上传协议中的字段名，如authorId，keyword，topic等
     * @param string $Value type对应字段名的值，如具体的topic名，作者id等
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
