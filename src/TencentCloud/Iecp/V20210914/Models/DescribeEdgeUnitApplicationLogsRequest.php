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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEdgeUnitApplicationLogs请求参数结构体
 *
 * @method integer getEdgeUnitId() 获取单元ID
 * @method void setEdgeUnitId(integer $EdgeUnitId) 设置单元ID
 * @method integer getApplicationId() 获取应用ID
 * @method void setApplicationId(integer $ApplicationId) 设置应用ID
 * @method integer getLimit() 获取最大条数
 * @method void setLimit(integer $Limit) 设置最大条数
 * @method string getPodName() 获取Pod名
 * @method void setPodName(string $PodName) 设置Pod名
 * @method string getContainerName() 获取容器名
 * @method void setContainerName(string $ContainerName) 设置容器名
 */
class DescribeEdgeUnitApplicationLogsRequest extends AbstractModel
{
    /**
     * @var integer 单元ID
     */
    public $EdgeUnitId;

    /**
     * @var integer 应用ID
     */
    public $ApplicationId;

    /**
     * @var integer 最大条数
     */
    public $Limit;

    /**
     * @var string Pod名
     */
    public $PodName;

    /**
     * @var string 容器名
     */
    public $ContainerName;

    /**
     * @param integer $EdgeUnitId 单元ID
     * @param integer $ApplicationId 应用ID
     * @param integer $Limit 最大条数
     * @param string $PodName Pod名
     * @param string $ContainerName 容器名
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
        if (array_key_exists("EdgeUnitId",$param) and $param["EdgeUnitId"] !== null) {
            $this->EdgeUnitId = $param["EdgeUnitId"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }
    }
}
