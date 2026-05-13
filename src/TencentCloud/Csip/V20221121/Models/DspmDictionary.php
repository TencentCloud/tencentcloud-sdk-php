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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * dspm字典信息
 *
 * @method integer getDictId() 获取字典id
 * @method void setDictId(integer $DictId) 设置字典id
 * @method string getDictName() 获取字典名称
 * @method void setDictName(string $DictName) 设置字典名称
 */
class DspmDictionary extends AbstractModel
{
    /**
     * @var integer 字典id
     */
    public $DictId;

    /**
     * @var string 字典名称
     */
    public $DictName;

    /**
     * @param integer $DictId 字典id
     * @param string $DictName 字典名称
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
        if (array_key_exists("DictId",$param) and $param["DictId"] !== null) {
            $this->DictId = $param["DictId"];
        }

        if (array_key_exists("DictName",$param) and $param["DictName"] !== null) {
            $this->DictName = $param["DictName"];
        }
    }
}
