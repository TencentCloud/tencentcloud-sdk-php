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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMachineSnapshot请求参数结构体
 *
 * @method array getQuuids() 获取cvm id 集合
 * @method void setQuuids(array $Quuids) 设置cvm id 集合
 * @method integer getType() 获取查询快照类型0 最近一个 1所有
 * @method void setType(integer $Type) 设置查询快照类型0 最近一个 1所有
 * @method integer getLimit() 获取分页个数
 * @method void setLimit(integer $Limit) 设置分页个数
 * @method integer getOffset() 获取分页步长
 * @method void setOffset(integer $Offset) 设置分页步长
 */
class DescribeMachineSnapshotRequest extends AbstractModel
{
    /**
     * @var array cvm id 集合
     */
    public $Quuids;

    /**
     * @var integer 查询快照类型0 最近一个 1所有
     */
    public $Type;

    /**
     * @var integer 分页个数
     */
    public $Limit;

    /**
     * @var integer 分页步长
     */
    public $Offset;

    /**
     * @param array $Quuids cvm id 集合
     * @param integer $Type 查询快照类型0 最近一个 1所有
     * @param integer $Limit 分页个数
     * @param integer $Offset 分页步长
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
        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
