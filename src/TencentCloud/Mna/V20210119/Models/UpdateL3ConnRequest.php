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
 * UpdateL3Conn请求参数结构体
 *
 * @method string getL3ConnId() 获取互通规则ID
 * @method void setL3ConnId(string $L3ConnId) 设置互通规则ID
 * @method string getDescription() 获取互通规则备注
 * @method void setDescription(string $Description) 设置互通规则备注
 */
class UpdateL3ConnRequest extends AbstractModel
{
    /**
     * @var string 互通规则ID
     */
    public $L3ConnId;

    /**
     * @var string 互通规则备注
     */
    public $Description;

    /**
     * @param string $L3ConnId 互通规则ID
     * @param string $Description 互通规则备注
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
        if (array_key_exists("L3ConnId",$param) and $param["L3ConnId"] !== null) {
            $this->L3ConnId = $param["L3ConnId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
