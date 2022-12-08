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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterReleases请求参数结构体
 *
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method integer getLimit() 获取每页数量限制
 * @method void setLimit(integer $Limit) 设置每页数量限制
 * @method integer getOffset() 获取页偏移量
 * @method void setOffset(integer $Offset) 设置页偏移量
 * @method string getNamespace() 获取helm Release 安装的namespace
 * @method void setNamespace(string $Namespace) 设置helm Release 安装的namespace
 * @method string getReleaseName() 获取helm Release 的名字
 * @method void setReleaseName(string $ReleaseName) 设置helm Release 的名字
 * @method string getChartName() 获取helm Chart 的名字
 * @method void setChartName(string $ChartName) 设置helm Chart 的名字
 */
class DescribeClusterReleasesRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var integer 每页数量限制
     */
    public $Limit;

    /**
     * @var integer 页偏移量
     */
    public $Offset;

    /**
     * @var string helm Release 安装的namespace
     */
    public $Namespace;

    /**
     * @var string helm Release 的名字
     */
    public $ReleaseName;

    /**
     * @var string helm Chart 的名字
     */
    public $ChartName;

    /**
     * @param string $ClusterId 集群id
     * @param integer $Limit 每页数量限制
     * @param integer $Offset 页偏移量
     * @param string $Namespace helm Release 安装的namespace
     * @param string $ReleaseName helm Release 的名字
     * @param string $ChartName helm Chart 的名字
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ReleaseName",$param) and $param["ReleaseName"] !== null) {
            $this->ReleaseName = $param["ReleaseName"];
        }

        if (array_key_exists("ChartName",$param) and $param["ChartName"] !== null) {
            $this->ChartName = $param["ChartName"];
        }
    }
}
