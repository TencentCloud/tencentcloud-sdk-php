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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建资源通用结果
 *
 * @method boolean getSuccess() 获取是否成功
 * @method void setSuccess(boolean $Success) 设置是否成功
 * @method string getID() 获取对应的id 值
 * @method void setID(string $ID) 设置对应的id 值
 */
class CNAPIGwCreateCommonResult extends AbstractModel
{
    /**
     * @var boolean 是否成功
     */
    public $Success;

    /**
     * @var string 对应的id 值
     */
    public $ID;

    /**
     * @param boolean $Success 是否成功
     * @param string $ID 对应的id 值
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
        if (array_key_exists("Success",$param) and $param["Success"] !== null) {
            $this->Success = $param["Success"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }
    }
}
