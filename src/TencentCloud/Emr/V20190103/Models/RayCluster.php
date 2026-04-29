<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * RayCluster
 *
 * @method string getRayClusterName() 获取<p>RayCluster 集群名</p>
 * @method void setRayClusterName(string $RayClusterName) 设置<p>RayCluster 集群名</p>
 * @method integer getRayClusterId() 获取<p>RayCluster 集群 id</p>
 * @method void setRayClusterId(integer $RayClusterId) 设置<p>RayCluster 集群 id</p>
 * @method integer getPodCount() 获取<p>pod 数量</p>
 * @method void setPodCount(integer $PodCount) 设置<p>pod 数量</p>
 * @method string getCreateTime() 获取<p>集群创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>集群创建时间</p>
 * @method integer getRedisCount() 获取<p>redis 实例数量</p>
 * @method void setRedisCount(integer $RedisCount) 设置<p>redis 实例数量</p>
 * @method integer getSubmitType() 获取<p>创建类型</p><p>枚举值：</p><ul><li>1： 表单创建</li><li>2： yaml创建</li></ul>
 * @method void setSubmitType(integer $SubmitType) 设置<p>创建类型</p><p>枚举值：</p><ul><li>1： 表单创建</li><li>2： yaml创建</li></ul>
 * @method string getDashboardUrl() 获取<p>head访问地址,也是dashboard地址</p>
 * @method void setDashboardUrl(string $DashboardUrl) 设置<p>head访问地址,也是dashboard地址</p>
 */
class RayCluster extends AbstractModel
{
    /**
     * @var string <p>RayCluster 集群名</p>
     */
    public $RayClusterName;

    /**
     * @var integer <p>RayCluster 集群 id</p>
     */
    public $RayClusterId;

    /**
     * @var integer <p>pod 数量</p>
     */
    public $PodCount;

    /**
     * @var string <p>集群创建时间</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>redis 实例数量</p>
     */
    public $RedisCount;

    /**
     * @var integer <p>创建类型</p><p>枚举值：</p><ul><li>1： 表单创建</li><li>2： yaml创建</li></ul>
     */
    public $SubmitType;

    /**
     * @var string <p>head访问地址,也是dashboard地址</p>
     */
    public $DashboardUrl;

    /**
     * @param string $RayClusterName <p>RayCluster 集群名</p>
     * @param integer $RayClusterId <p>RayCluster 集群 id</p>
     * @param integer $PodCount <p>pod 数量</p>
     * @param string $CreateTime <p>集群创建时间</p>
     * @param integer $RedisCount <p>redis 实例数量</p>
     * @param integer $SubmitType <p>创建类型</p><p>枚举值：</p><ul><li>1： 表单创建</li><li>2： yaml创建</li></ul>
     * @param string $DashboardUrl <p>head访问地址,也是dashboard地址</p>
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
        if (array_key_exists("RayClusterName",$param) and $param["RayClusterName"] !== null) {
            $this->RayClusterName = $param["RayClusterName"];
        }

        if (array_key_exists("RayClusterId",$param) and $param["RayClusterId"] !== null) {
            $this->RayClusterId = $param["RayClusterId"];
        }

        if (array_key_exists("PodCount",$param) and $param["PodCount"] !== null) {
            $this->PodCount = $param["PodCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RedisCount",$param) and $param["RedisCount"] !== null) {
            $this->RedisCount = $param["RedisCount"];
        }

        if (array_key_exists("SubmitType",$param) and $param["SubmitType"] !== null) {
            $this->SubmitType = $param["SubmitType"];
        }

        if (array_key_exists("DashboardUrl",$param) and $param["DashboardUrl"] !== null) {
            $this->DashboardUrl = $param["DashboardUrl"];
        }
    }
}
