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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOperationTask请求参数结构体
 *
 * @method string getName() 获取运维任务名称
 * @method void setName(string $Name) 设置运维任务名称
 * @method integer getType() 获取运维任务类型，1 - 手工执行任务， 2 - 周期性任务
 * @method void setType(integer $Type) 设置运维任务类型，1 - 手工执行任务， 2 - 周期性任务
 * @method integer getOffset() 获取分页偏移位置，默认值为0
 * @method void setOffset(integer $Offset) 设置分页偏移位置，默认值为0
 * @method integer getLimit() 获取每页条目数，默认20
 * @method void setLimit(integer $Limit) 设置每页条目数，默认20
 */
class DescribeOperationTaskRequest extends AbstractModel
{
    /**
     * @var string 运维任务名称
     */
    public $Name;

    /**
     * @var integer 运维任务类型，1 - 手工执行任务， 2 - 周期性任务
     */
    public $Type;

    /**
     * @var integer 分页偏移位置，默认值为0
     */
    public $Offset;

    /**
     * @var integer 每页条目数，默认20
     */
    public $Limit;

    /**
     * @param string $Name 运维任务名称
     * @param integer $Type 运维任务类型，1 - 手工执行任务， 2 - 周期性任务
     * @param integer $Offset 分页偏移位置，默认值为0
     * @param integer $Limit 每页条目数，默认20
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
