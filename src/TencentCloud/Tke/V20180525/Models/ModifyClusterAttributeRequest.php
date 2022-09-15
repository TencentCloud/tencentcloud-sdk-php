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
 * ModifyClusterAttribute请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method integer getProjectId() 获取集群所属项目
 * @method void setProjectId(integer $ProjectId) 设置集群所属项目
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getClusterDesc() 获取集群描述
 * @method void setClusterDesc(string $ClusterDesc) 设置集群描述
 * @method string getClusterLevel() 获取集群等级
 * @method void setClusterLevel(string $ClusterLevel) 设置集群等级
 * @method AutoUpgradeClusterLevel getAutoUpgradeClusterLevel() 获取自动变配集群等级
 * @method void setAutoUpgradeClusterLevel(AutoUpgradeClusterLevel $AutoUpgradeClusterLevel) 设置自动变配集群等级
 * @method boolean getQGPUShareEnable() 获取是否开启QGPU共享
 * @method void setQGPUShareEnable(boolean $QGPUShareEnable) 设置是否开启QGPU共享
 */
class ModifyClusterAttributeRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var integer 集群所属项目
     */
    public $ProjectId;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 集群描述
     */
    public $ClusterDesc;

    /**
     * @var string 集群等级
     */
    public $ClusterLevel;

    /**
     * @var AutoUpgradeClusterLevel 自动变配集群等级
     */
    public $AutoUpgradeClusterLevel;

    /**
     * @var boolean 是否开启QGPU共享
     */
    public $QGPUShareEnable;

    /**
     * @param string $ClusterId 集群ID
     * @param integer $ProjectId 集群所属项目
     * @param string $ClusterName 集群名称
     * @param string $ClusterDesc 集群描述
     * @param string $ClusterLevel 集群等级
     * @param AutoUpgradeClusterLevel $AutoUpgradeClusterLevel 自动变配集群等级
     * @param boolean $QGPUShareEnable 是否开启QGPU共享
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterDesc",$param) and $param["ClusterDesc"] !== null) {
            $this->ClusterDesc = $param["ClusterDesc"];
        }

        if (array_key_exists("ClusterLevel",$param) and $param["ClusterLevel"] !== null) {
            $this->ClusterLevel = $param["ClusterLevel"];
        }

        if (array_key_exists("AutoUpgradeClusterLevel",$param) and $param["AutoUpgradeClusterLevel"] !== null) {
            $this->AutoUpgradeClusterLevel = new AutoUpgradeClusterLevel();
            $this->AutoUpgradeClusterLevel->deserialize($param["AutoUpgradeClusterLevel"]);
        }

        if (array_key_exists("QGPUShareEnable",$param) and $param["QGPUShareEnable"] !== null) {
            $this->QGPUShareEnable = $param["QGPUShareEnable"];
        }
    }
}
