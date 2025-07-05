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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteL3Conn请求参数结构体
 *
 * @method array getL3ConnIdList() 获取互通规则ID列表
 * @method void setL3ConnIdList(array $L3ConnIdList) 设置互通规则ID列表
 */
class DeleteL3ConnRequest extends AbstractModel
{
    /**
     * @var array 互通规则ID列表
     */
    public $L3ConnIdList;

    /**
     * @param array $L3ConnIdList 互通规则ID列表
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
        if (array_key_exists("L3ConnIdList",$param) and $param["L3ConnIdList"] !== null) {
            $this->L3ConnIdList = $param["L3ConnIdList"];
        }
    }
}
