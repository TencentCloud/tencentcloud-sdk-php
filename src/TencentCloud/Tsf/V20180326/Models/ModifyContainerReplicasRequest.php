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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyContainerReplicas请求参数结构体
 *
 * @method string getGroupId() 获取部署组ID，部署组唯一标识，可以通过[DescribeContainerGroups](https://cloud.tencent.com/document/api/649/36068)查询已创建的容器部署组列表；也可以调用[CreateContainGroup](https://cloud.tencent.com/document/api/649/36075)创建新的容器部署组
 * @method void setGroupId(string $GroupId) 设置部署组ID，部署组唯一标识，可以通过[DescribeContainerGroups](https://cloud.tencent.com/document/api/649/36068)查询已创建的容器部署组列表；也可以调用[CreateContainGroup](https://cloud.tencent.com/document/api/649/36075)创建新的容器部署组
 * @method integer getInstanceNum() 获取实例数量
 * @method void setInstanceNum(integer $InstanceNum) 设置实例数量
 */
class ModifyContainerReplicasRequest extends AbstractModel
{
    /**
     * @var string 部署组ID，部署组唯一标识，可以通过[DescribeContainerGroups](https://cloud.tencent.com/document/api/649/36068)查询已创建的容器部署组列表；也可以调用[CreateContainGroup](https://cloud.tencent.com/document/api/649/36075)创建新的容器部署组
     */
    public $GroupId;

    /**
     * @var integer 实例数量
     */
    public $InstanceNum;

    /**
     * @param string $GroupId 部署组ID，部署组唯一标识，可以通过[DescribeContainerGroups](https://cloud.tencent.com/document/api/649/36068)查询已创建的容器部署组列表；也可以调用[CreateContainGroup](https://cloud.tencent.com/document/api/649/36075)创建新的容器部署组
     * @param integer $InstanceNum 实例数量
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("InstanceNum",$param) and $param["InstanceNum"] !== null) {
            $this->InstanceNum = $param["InstanceNum"];
        }
    }
}
