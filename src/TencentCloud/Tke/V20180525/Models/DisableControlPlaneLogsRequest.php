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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DisableControlPlaneLogs请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getClusterType() 获取集群类型。当前只支持tke
 * @method void setClusterType(string $ClusterType) 设置集群类型。当前只支持tke
 * @method array getComponentNames() 获取组件名称列表，目前支持的组件有：cluster-autoscaler、kapenter
 * @method void setComponentNames(array $ComponentNames) 设置组件名称列表，目前支持的组件有：cluster-autoscaler、kapenter
 * @method boolean getDeleteLogSetAndTopic() 获取是否删除日志集和topic。 如果日志集和topic被其他采集规则使用，则不会被删除
 * @method void setDeleteLogSetAndTopic(boolean $DeleteLogSetAndTopic) 设置是否删除日志集和topic。 如果日志集和topic被其他采集规则使用，则不会被删除
 */
class DisableControlPlaneLogsRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 集群类型。当前只支持tke
     */
    public $ClusterType;

    /**
     * @var array 组件名称列表，目前支持的组件有：cluster-autoscaler、kapenter
     */
    public $ComponentNames;

    /**
     * @var boolean 是否删除日志集和topic。 如果日志集和topic被其他采集规则使用，则不会被删除
     */
    public $DeleteLogSetAndTopic;

    /**
     * @param string $ClusterId 集群ID
     * @param string $ClusterType 集群类型。当前只支持tke
     * @param array $ComponentNames 组件名称列表，目前支持的组件有：cluster-autoscaler、kapenter
     * @param boolean $DeleteLogSetAndTopic 是否删除日志集和topic。 如果日志集和topic被其他采集规则使用，则不会被删除
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

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ComponentNames",$param) and $param["ComponentNames"] !== null) {
            $this->ComponentNames = $param["ComponentNames"];
        }

        if (array_key_exists("DeleteLogSetAndTopic",$param) and $param["DeleteLogSetAndTopic"] !== null) {
            $this->DeleteLogSetAndTopic = $param["DeleteLogSetAndTopic"];
        }
    }
}
