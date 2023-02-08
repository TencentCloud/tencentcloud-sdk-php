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
namespace TencentCloud\Keewidb\V20220308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceNodeInfo请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，如：kee-6ubh****。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，如：kee-6ubh****。
 * @method integer getLimit() 获取每页输出的节点信息大小。默认为 20。
 * @method void setLimit(integer $Limit) 设置每页输出的节点信息大小。默认为 20。
 * @method integer getOffset() 获取分页偏移量，取Limit整数倍。计算公式：offset=limit*(页码-1)。
 * @method void setOffset(integer $Offset) 设置分页偏移量，取Limit整数倍。计算公式：offset=limit*(页码-1)。
 */
class DescribeInstanceNodeInfoRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，如：kee-6ubh****。
     */
    public $InstanceId;

    /**
     * @var integer 每页输出的节点信息大小。默认为 20。
     */
    public $Limit;

    /**
     * @var integer 分页偏移量，取Limit整数倍。计算公式：offset=limit*(页码-1)。
     */
    public $Offset;

    /**
     * @param string $InstanceId 实例 ID，如：kee-6ubh****。
     * @param integer $Limit 每页输出的节点信息大小。默认为 20。
     * @param integer $Offset 分页偏移量，取Limit整数倍。计算公式：offset=limit*(页码-1)。
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
