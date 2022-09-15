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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNacosReplicas请求参数结构体
 *
 * @method string getInstanceId() 获取引擎实例ID
 * @method void setInstanceId(string $InstanceId) 设置引擎实例ID
 * @method integer getLimit() 获取副本列表Limit
 * @method void setLimit(integer $Limit) 设置副本列表Limit
 * @method integer getOffset() 获取副本列表Offset
 * @method void setOffset(integer $Offset) 设置副本列表Offset
 */
class DescribeNacosReplicasRequest extends AbstractModel
{
    /**
     * @var string 引擎实例ID
     */
    public $InstanceId;

    /**
     * @var integer 副本列表Limit
     */
    public $Limit;

    /**
     * @var integer 副本列表Offset
     */
    public $Offset;

    /**
     * @param string $InstanceId 引擎实例ID
     * @param integer $Limit 副本列表Limit
     * @param integer $Offset 副本列表Offset
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
