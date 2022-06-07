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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 计费项询价单元
 *
 * @method string getSpecName() 获取计费项名称
 * @method void setSpecName(string $SpecName) 设置计费项名称
 * @method integer getSpecCount() 获取计费项数量,建议不超过100万
 * @method void setSpecCount(integer $SpecCount) 设置计费项数量,建议不超过100万
 */
class SpecUnit extends AbstractModel
{
    /**
     * @var string 计费项名称
     */
    public $SpecName;

    /**
     * @var integer 计费项数量,建议不超过100万
     */
    public $SpecCount;

    /**
     * @param string $SpecName 计费项名称
     * @param integer $SpecCount 计费项数量,建议不超过100万
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
        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("SpecCount",$param) and $param["SpecCount"] !== null) {
            $this->SpecCount = $param["SpecCount"];
        }
    }
}
