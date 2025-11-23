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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySeedStatus请求参数结构体
 *
 * @method integer getId() 获取ID
 * @method void setId(integer $Id) 设置ID
 * @method boolean getIsValid() 获取是否可信
 * @method void setIsValid(boolean $IsValid) 设置是否可信
 */
class ModifySeedStatusRequest extends AbstractModel
{
    /**
     * @var integer ID
     */
    public $Id;

    /**
     * @var boolean 是否可信
     */
    public $IsValid;

    /**
     * @param integer $Id ID
     * @param boolean $IsValid 是否可信
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("IsValid",$param) and $param["IsValid"] !== null) {
            $this->IsValid = $param["IsValid"];
        }
    }
}
