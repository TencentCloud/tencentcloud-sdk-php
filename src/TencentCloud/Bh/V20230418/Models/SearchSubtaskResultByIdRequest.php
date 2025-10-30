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
 * SearchSubtaskResultById请求参数结构体
 *
 * @method string getName() 获取运维任务名称
 * @method void setName(string $Name) 设置运维任务名称
 * @method integer getOffset() 获取查询偏移
 * @method void setOffset(integer $Offset) 设置查询偏移
 * @method integer getLimit() 获取分页的页内记录数，默认为20，最大200
 * @method void setLimit(integer $Limit) 设置分页的页内记录数，默认为20，最大200
 * @method string getId() 获取运维父任务执行日志ID
 * @method void setId(string $Id) 设置运维父任务执行日志ID
 * @method array getStatus() 获取运维父任务执行状态
 * @method void setStatus(array $Status) 设置运维父任务执行状态
 */
class SearchSubtaskResultByIdRequest extends AbstractModel
{
    /**
     * @var string 运维任务名称
     */
    public $Name;

    /**
     * @var integer 查询偏移
     */
    public $Offset;

    /**
     * @var integer 分页的页内记录数，默认为20，最大200
     */
    public $Limit;

    /**
     * @var string 运维父任务执行日志ID
     */
    public $Id;

    /**
     * @var array 运维父任务执行状态
     */
    public $Status;

    /**
     * @param string $Name 运维任务名称
     * @param integer $Offset 查询偏移
     * @param integer $Limit 分页的页内记录数，默认为20，最大200
     * @param string $Id 运维父任务执行日志ID
     * @param array $Status 运维父任务执行状态
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
