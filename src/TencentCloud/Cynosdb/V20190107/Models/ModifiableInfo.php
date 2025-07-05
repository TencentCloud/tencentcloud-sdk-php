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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 参数是否可修改的详细信息
 *
 * @method integer getIsModifiable() 获取参数是否可被修改, 1:可以 0:不可以
 * @method void setIsModifiable(integer $IsModifiable) 设置参数是否可被修改, 1:可以 0:不可以
 */
class ModifiableInfo extends AbstractModel
{
    /**
     * @var integer 参数是否可被修改, 1:可以 0:不可以
     */
    public $IsModifiable;

    /**
     * @param integer $IsModifiable 参数是否可被修改, 1:可以 0:不可以
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
        if (array_key_exists("IsModifiable",$param) and $param["IsModifiable"] !== null) {
            $this->IsModifiable = $param["IsModifiable"];
        }
    }
}
