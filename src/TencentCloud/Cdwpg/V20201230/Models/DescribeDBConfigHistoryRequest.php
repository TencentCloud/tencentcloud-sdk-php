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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBConfigHistory请求参数结构体
 *
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method integer getLimit() 获取数据库分页
 * @method void setLimit(integer $Limit) 设置数据库分页
 * @method integer getOffset() 获取数据库分页
 * @method void setOffset(integer $Offset) 设置数据库分页
 */
class DescribeDBConfigHistoryRequest extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var integer 数据库分页
     */
    public $Limit;

    /**
     * @var integer 数据库分页
     */
    public $Offset;

    /**
     * @param string $InstanceId 实例Id
     * @param integer $Limit 数据库分页
     * @param integer $Offset 数据库分页
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
