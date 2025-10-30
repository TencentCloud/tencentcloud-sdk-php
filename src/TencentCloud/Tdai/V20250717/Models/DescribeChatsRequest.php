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
namespace TencentCloud\Tdai\V20250717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeChats请求参数结构体
 *
 * @method string getInstanceId() 获取智能体ID
 * @method void setInstanceId(string $InstanceId) 设置智能体ID
 * @method integer getOffset() 获取查询开始位置
 * @method void setOffset(integer $Offset) 设置查询开始位置
 * @method integer getLimit() 获取列表查询数量
 * @method void setLimit(integer $Limit) 设置列表查询数量
 */
class DescribeChatsRequest extends AbstractModel
{
    /**
     * @var string 智能体ID
     */
    public $InstanceId;

    /**
     * @var integer 查询开始位置
     */
    public $Offset;

    /**
     * @var integer 列表查询数量
     */
    public $Limit;

    /**
     * @param string $InstanceId 智能体ID
     * @param integer $Offset 查询开始位置
     * @param integer $Limit 列表查询数量
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
