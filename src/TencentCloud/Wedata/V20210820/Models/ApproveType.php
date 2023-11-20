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
 * 审批分类
 *
 * @method string getType() 获取申请分类key
 * @method void setType(string $Type) 设置申请分类key
 * @method string getTypeName() 获取类型名称
 * @method void setTypeName(string $TypeName) 设置类型名称
 * @method string getClassification() 获取申请类型key
 * @method void setClassification(string $Classification) 设置申请类型key
 */
class ApproveType extends AbstractModel
{
    /**
     * @var string 申请分类key
     */
    public $Type;

    /**
     * @var string 类型名称
     */
    public $TypeName;

    /**
     * @var string 申请类型key
     */
    public $Classification;

    /**
     * @param string $Type 申请分类key
     * @param string $TypeName 类型名称
     * @param string $Classification 申请类型key
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

        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("Classification",$param) and $param["Classification"] !== null) {
            $this->Classification = $param["Classification"];
        }
    }
}
