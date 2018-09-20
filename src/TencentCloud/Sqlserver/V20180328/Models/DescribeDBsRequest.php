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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getInstanceIdSet() 获取实例ID
 * @method void setInstanceIdSet(array $InstanceIdSet) 设置实例ID
 * @method integer getLimit() 获取每页记录数，最大为100，默认20
 * @method void setLimit(integer $Limit) 设置每页记录数，最大为100，默认20
 * @method integer getOffset() 获取页编号，从第0页开始
 * @method void setOffset(integer $Offset) 设置页编号，从第0页开始
 */

/**
 *DescribeDBs请求参数结构体
 */
class DescribeDBsRequest extends AbstractModel
{
    /**
     * @var array 实例ID
     */
    public $InstanceIdSet;

    /**
     * @var integer 每页记录数，最大为100，默认20
     */
    public $Limit;

    /**
     * @var integer 页编号，从第0页开始
     */
    public $Offset;
    /**
     * @param array $InstanceIdSet 实例ID
     * @param integer $Limit 每页记录数，最大为100，默认20
     * @param integer $Offset 页编号，从第0页开始
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
        if (array_key_exists("InstanceIdSet",$param) and $param["InstanceIdSet"] !== null) {
            $this->InstanceIdSet = $param["InstanceIdSet"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
