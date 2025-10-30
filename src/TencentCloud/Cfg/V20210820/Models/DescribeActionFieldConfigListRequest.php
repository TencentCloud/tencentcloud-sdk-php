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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeActionFieldConfigList请求参数结构体
 *
 * @method array getActionIds() 获取动作ID列表
 * @method void setActionIds(array $ActionIds) 设置动作ID列表
 * @method integer getObjectTypeId() 获取对象类型ID
 * @method void setObjectTypeId(integer $ObjectTypeId) 设置对象类型ID
 */
class DescribeActionFieldConfigListRequest extends AbstractModel
{
    /**
     * @var array 动作ID列表
     */
    public $ActionIds;

    /**
     * @var integer 对象类型ID
     */
    public $ObjectTypeId;

    /**
     * @param array $ActionIds 动作ID列表
     * @param integer $ObjectTypeId 对象类型ID
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
        if (array_key_exists("ActionIds",$param) and $param["ActionIds"] !== null) {
            $this->ActionIds = $param["ActionIds"];
        }

        if (array_key_exists("ObjectTypeId",$param) and $param["ObjectTypeId"] !== null) {
            $this->ObjectTypeId = $param["ObjectTypeId"];
        }
    }
}
