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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DropDBInstanceParamTpl请求参数结构体
 *
 * @method string getTplId() 获取参数模板 ID。
 * @method void setTplId(string $TplId) 设置参数模板 ID。
 */
class DropDBInstanceParamTplRequest extends AbstractModel
{
    /**
     * @var string 参数模板 ID。
     */
    public $TplId;

    /**
     * @param string $TplId 参数模板 ID。
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
        if (array_key_exists("TplId",$param) and $param["TplId"] !== null) {
            $this->TplId = $param["TplId"];
        }
    }
}
