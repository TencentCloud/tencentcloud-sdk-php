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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getInstanceIds() 获取查询列表,  如果不填写，返回该AppId下所有实例列表
 * @method void setInstanceIds(array $InstanceIds) 设置查询列表,  如果不填写，返回该AppId下所有实例列表
 * @method integer getOffset() 获取查询偏移量，默认0
 * @method void setOffset(integer $Offset) 设置查询偏移量，默认0
 * @method integer getLimit() 获取查询结果限制，默认值10
 * @method void setLimit(integer $Limit) 设置查询结果限制，默认值10
 */

/**
 *DescribeInstances请求参数结构体
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var array 查询列表,  如果不填写，返回该AppId下所有实例列表
     */
    public $InstanceIds;

    /**
     * @var integer 查询偏移量，默认0
     */
    public $Offset;

    /**
     * @var integer 查询结果限制，默认值10
     */
    public $Limit;
    /**
     * @param array $InstanceIds 查询列表,  如果不填写，返回该AppId下所有实例列表
     * @param integer $Offset 查询偏移量，默认0
     * @param integer $Limit 查询结果限制，默认值10
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
