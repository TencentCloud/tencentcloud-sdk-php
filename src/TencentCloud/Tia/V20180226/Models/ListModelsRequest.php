<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Tia\V20180226\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getCluster() 获取部署模型的集群
 * @method void setCluster(string $Cluster) 设置部署模型的集群
 * @method integer getLimit() 获取分页参数，返回数量
 * @method void setLimit(integer $Limit) 设置分页参数，返回数量
 * @method integer getOffset() 获取分页参数，起始位置
 * @method void setOffset(integer $Offset) 设置分页参数，起始位置
 */

/**
 *ListModels请求参数结构体
 */
class ListModelsRequest extends AbstractModel
{
    /**
     * @var string 部署模型的集群
     */
    public $Cluster;

    /**
     * @var integer 分页参数，返回数量
     */
    public $Limit;

    /**
     * @var integer 分页参数，起始位置
     */
    public $Offset;
    /**
     * @param string $Cluster 部署模型的集群
     * @param integer $Limit 分页参数，返回数量
     * @param integer $Offset 分页参数，起始位置
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
        if (array_key_exists("Cluster",$param) and $param["Cluster"] !== null) {
            $this->Cluster = $param["Cluster"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
