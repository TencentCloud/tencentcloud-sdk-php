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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDorisMetricFiles请求参数结构体
 *
 * @method string getApiType() 获取接口类型
 * @method void setApiType(string $ApiType) 设置接口类型
 * @method string getInstanceId() 获取集群id
 * @method void setInstanceId(string $InstanceId) 设置集群id
 * @method DescribeMetricsFileReq getDescribeMetricsFileReq() 获取展示监控指标入参
 * @method void setDescribeMetricsFileReq(DescribeMetricsFileReq $DescribeMetricsFileReq) 设置展示监控指标入参
 * @method ModifyMetricFileStruct getModifyMetricFileReq() 获取点关注功能入参
 * @method void setModifyMetricFileReq(ModifyMetricFileStruct $ModifyMetricFileReq) 设置点关注功能入参
 * @method ModifyMetricFileStructNew getModifyAttentionMetricFileReq() 获取监控指标关注功能入参
 * @method void setModifyAttentionMetricFileReq(ModifyMetricFileStructNew $ModifyAttentionMetricFileReq) 设置监控指标关注功能入参
 */
class DescribeDorisMetricFilesRequest extends AbstractModel
{
    /**
     * @var string 接口类型
     */
    public $ApiType;

    /**
     * @var string 集群id
     */
    public $InstanceId;

    /**
     * @var DescribeMetricsFileReq 展示监控指标入参
     */
    public $DescribeMetricsFileReq;

    /**
     * @var ModifyMetricFileStruct 点关注功能入参
     */
    public $ModifyMetricFileReq;

    /**
     * @var ModifyMetricFileStructNew 监控指标关注功能入参
     */
    public $ModifyAttentionMetricFileReq;

    /**
     * @param string $ApiType 接口类型
     * @param string $InstanceId 集群id
     * @param DescribeMetricsFileReq $DescribeMetricsFileReq 展示监控指标入参
     * @param ModifyMetricFileStruct $ModifyMetricFileReq 点关注功能入参
     * @param ModifyMetricFileStructNew $ModifyAttentionMetricFileReq 监控指标关注功能入参
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
        if (array_key_exists("ApiType",$param) and $param["ApiType"] !== null) {
            $this->ApiType = $param["ApiType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DescribeMetricsFileReq",$param) and $param["DescribeMetricsFileReq"] !== null) {
            $this->DescribeMetricsFileReq = new DescribeMetricsFileReq();
            $this->DescribeMetricsFileReq->deserialize($param["DescribeMetricsFileReq"]);
        }

        if (array_key_exists("ModifyMetricFileReq",$param) and $param["ModifyMetricFileReq"] !== null) {
            $this->ModifyMetricFileReq = new ModifyMetricFileStruct();
            $this->ModifyMetricFileReq->deserialize($param["ModifyMetricFileReq"]);
        }

        if (array_key_exists("ModifyAttentionMetricFileReq",$param) and $param["ModifyAttentionMetricFileReq"] !== null) {
            $this->ModifyAttentionMetricFileReq = new ModifyMetricFileStructNew();
            $this->ModifyAttentionMetricFileReq->deserialize($param["ModifyAttentionMetricFileReq"]);
        }
    }
}
