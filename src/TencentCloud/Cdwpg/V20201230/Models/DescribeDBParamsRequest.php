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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBParams请求参数结构体
 *
 * @method array getNodeTypes() 获取cn/dn
 * @method void setNodeTypes(array $NodeTypes) 设置cn/dn
 * @method integer getLimit() 获取range::(0,100]
 * @method void setLimit(integer $Limit) 设置range::(0,100]
 * @method integer getOffset() 获取range::[0,INF)
 * @method void setOffset(integer $Offset) 设置range::[0,INF)
 * @method string getInstanceId() 获取InstanceId名称
 * @method void setInstanceId(string $InstanceId) 设置InstanceId名称
 */
class DescribeDBParamsRequest extends AbstractModel
{
    /**
     * @var array cn/dn
     */
    public $NodeTypes;

    /**
     * @var integer range::(0,100]
     */
    public $Limit;

    /**
     * @var integer range::[0,INF)
     */
    public $Offset;

    /**
     * @var string InstanceId名称
     */
    public $InstanceId;

    /**
     * @param array $NodeTypes cn/dn
     * @param integer $Limit range::(0,100]
     * @param integer $Offset range::[0,INF)
     * @param string $InstanceId InstanceId名称
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
        if (array_key_exists("NodeTypes",$param) and $param["NodeTypes"] !== null) {
            $this->NodeTypes = $param["NodeTypes"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
