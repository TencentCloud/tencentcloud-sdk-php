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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBlockTop请求参数结构体
 *
 * @method string getOpeType() 获取操作类型 1 置顶 0取消
 * @method void setOpeType(string $OpeType) 设置操作类型 1 置顶 0取消
 * @method string getUniqueId() 获取记录id
 * @method void setUniqueId(string $UniqueId) 设置记录id
 */
class ModifyBlockTopRequest extends AbstractModel
{
    /**
     * @var string 操作类型 1 置顶 0取消
     */
    public $OpeType;

    /**
     * @var string 记录id
     */
    public $UniqueId;

    /**
     * @param string $OpeType 操作类型 1 置顶 0取消
     * @param string $UniqueId 记录id
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
        if (array_key_exists("OpeType",$param) and $param["OpeType"] !== null) {
            $this->OpeType = $param["OpeType"];
        }

        if (array_key_exists("UniqueId",$param) and $param["UniqueId"] !== null) {
            $this->UniqueId = $param["UniqueId"];
        }
    }
}
