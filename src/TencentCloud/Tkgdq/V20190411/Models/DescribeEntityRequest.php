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
namespace TencentCloud\Tkgdq\V20190411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getEntityName() 获取实体名称
 * @method void setEntityName(string $EntityName) 设置实体名称
 */

/**
 *DescribeEntity请求参数结构体
 */
class DescribeEntityRequest extends AbstractModel
{
    /**
     * @var string 实体名称
     */
    public $EntityName;
    /**
     * @param string $EntityName 实体名称
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("EntityName",$param) and $param["EntityName"] !== null) {
            $this->EntityName = $param["EntityName"];
        }
    }
}
