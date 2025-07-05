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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateExternalCluster请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID
 * @method void setInstanceId(string $InstanceId) 设置实例 ID
 * @method string getClusterRegion() 获取集群所在地域
 * @method void setClusterRegion(string $ClusterRegion) 设置集群所在地域
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getClusterId() 获取集群 ID
 * @method void setClusterId(string $ClusterId) 设置集群 ID
 * @method array getExternalLabels() 获取外部标签
 * @method void setExternalLabels(array $ExternalLabels) 设置外部标签
 * @method boolean getOpenDefaultRecord() 获取是否打开预聚合规则
 * @method void setOpenDefaultRecord(boolean $OpenDefaultRecord) 设置是否打开预聚合规则
 * @method boolean getEnableExternal() 获取是否开启公网
 * @method void setEnableExternal(boolean $EnableExternal) 设置是否开启公网
 */
class CreateExternalClusterRequest extends AbstractModel
{
    /**
     * @var string 实例 ID
     */
    public $InstanceId;

    /**
     * @var string 集群所在地域
     */
    public $ClusterRegion;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 集群 ID
     */
    public $ClusterId;

    /**
     * @var array 外部标签
     */
    public $ExternalLabels;

    /**
     * @var boolean 是否打开预聚合规则
     */
    public $OpenDefaultRecord;

    /**
     * @var boolean 是否开启公网
     */
    public $EnableExternal;

    /**
     * @param string $InstanceId 实例 ID
     * @param string $ClusterRegion 集群所在地域
     * @param string $ClusterName 集群名称
     * @param string $ClusterId 集群 ID
     * @param array $ExternalLabels 外部标签
     * @param boolean $OpenDefaultRecord 是否打开预聚合规则
     * @param boolean $EnableExternal 是否开启公网
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

        if (array_key_exists("ClusterRegion",$param) and $param["ClusterRegion"] !== null) {
            $this->ClusterRegion = $param["ClusterRegion"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ExternalLabels",$param) and $param["ExternalLabels"] !== null) {
            $this->ExternalLabels = [];
            foreach ($param["ExternalLabels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->ExternalLabels, $obj);
            }
        }

        if (array_key_exists("OpenDefaultRecord",$param) and $param["OpenDefaultRecord"] !== null) {
            $this->OpenDefaultRecord = $param["OpenDefaultRecord"];
        }

        if (array_key_exists("EnableExternal",$param) and $param["EnableExternal"] !== null) {
            $this->EnableExternal = $param["EnableExternal"];
        }
    }
}
