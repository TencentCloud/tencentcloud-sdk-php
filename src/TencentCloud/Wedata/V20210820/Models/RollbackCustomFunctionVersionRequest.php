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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RollbackCustomFunctionVersion请求参数结构体
 *
 * @method string getFunctionId() 获取函数唯一标识
 * @method void setFunctionId(string $FunctionId) 设置函数唯一标识
 * @method string getTag() 获取函数要回滚到的版本
 * @method void setTag(string $Tag) 设置函数要回滚到的版本
 * @method string getClusterIdentifier() 获取集群实例 ID
 * @method void setClusterIdentifier(string $ClusterIdentifier) 设置集群实例 ID
 */
class RollbackCustomFunctionVersionRequest extends AbstractModel
{
    /**
     * @var string 函数唯一标识
     */
    public $FunctionId;

    /**
     * @var string 函数要回滚到的版本
     */
    public $Tag;

    /**
     * @var string 集群实例 ID
     */
    public $ClusterIdentifier;

    /**
     * @param string $FunctionId 函数唯一标识
     * @param string $Tag 函数要回滚到的版本
     * @param string $ClusterIdentifier 集群实例 ID
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
        if (array_key_exists("FunctionId",$param) and $param["FunctionId"] !== null) {
            $this->FunctionId = $param["FunctionId"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("ClusterIdentifier",$param) and $param["ClusterIdentifier"] !== null) {
            $this->ClusterIdentifier = $param["ClusterIdentifier"];
        }
    }
}
