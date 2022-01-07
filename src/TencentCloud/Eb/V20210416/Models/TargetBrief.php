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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 目标简要信息
 *
 * @method string getTargetId() 获取目标ID
 * @method void setTargetId(string $TargetId) 设置目标ID
 * @method string getType() 获取目标类型
 * @method void setType(string $Type) 设置目标类型
 */
class TargetBrief extends AbstractModel
{
    /**
     * @var string 目标ID
     */
    public $TargetId;

    /**
     * @var string 目标类型
     */
    public $Type;

    /**
     * @param string $TargetId 目标ID
     * @param string $Type 目标类型
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
        if (array_key_exists("TargetId",$param) and $param["TargetId"] !== null) {
            $this->TargetId = $param["TargetId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
