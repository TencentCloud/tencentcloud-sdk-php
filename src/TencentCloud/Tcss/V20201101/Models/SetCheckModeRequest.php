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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetCheckMode请求参数结构体
 *
 * @method array getClusterIds() 获取要设置的集群ID列表
 * @method void setClusterIds(array $ClusterIds) 设置要设置的集群ID列表
 * @method string getClusterCheckMode() 获取集群检查模式(正常模式"Cluster_Normal"、主动模式"Cluster_Actived"、不设置"Cluster_Unset")
 * @method void setClusterCheckMode(string $ClusterCheckMode) 设置集群检查模式(正常模式"Cluster_Normal"、主动模式"Cluster_Actived"、不设置"Cluster_Unset")
 * @method integer getClusterAutoCheck() 获取0不设置 1打开 2关闭
 * @method void setClusterAutoCheck(integer $ClusterAutoCheck) 设置0不设置 1打开 2关闭
 */
class SetCheckModeRequest extends AbstractModel
{
    /**
     * @var array 要设置的集群ID列表
     */
    public $ClusterIds;

    /**
     * @var string 集群检查模式(正常模式"Cluster_Normal"、主动模式"Cluster_Actived"、不设置"Cluster_Unset")
     */
    public $ClusterCheckMode;

    /**
     * @var integer 0不设置 1打开 2关闭
     */
    public $ClusterAutoCheck;

    /**
     * @param array $ClusterIds 要设置的集群ID列表
     * @param string $ClusterCheckMode 集群检查模式(正常模式"Cluster_Normal"、主动模式"Cluster_Actived"、不设置"Cluster_Unset")
     * @param integer $ClusterAutoCheck 0不设置 1打开 2关闭
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
        if (array_key_exists("ClusterIds",$param) and $param["ClusterIds"] !== null) {
            $this->ClusterIds = $param["ClusterIds"];
        }

        if (array_key_exists("ClusterCheckMode",$param) and $param["ClusterCheckMode"] !== null) {
            $this->ClusterCheckMode = $param["ClusterCheckMode"];
        }

        if (array_key_exists("ClusterAutoCheck",$param) and $param["ClusterAutoCheck"] !== null) {
            $this->ClusterAutoCheck = $param["ClusterAutoCheck"];
        }
    }
}
