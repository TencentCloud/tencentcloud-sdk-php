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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeletePrometheusAlertGroups请求参数结构体
 *
 * @method string getInstanceId() 获取prometheus实例id
 * @method void setInstanceId(string $InstanceId) 设置prometheus实例id
 * @method array getGroupIds() 获取需要删除的告警分组ID，形如alert-xxxxx
 * @method void setGroupIds(array $GroupIds) 设置需要删除的告警分组ID，形如alert-xxxxx
 */
class DeletePrometheusAlertGroupsRequest extends AbstractModel
{
    /**
     * @var string prometheus实例id
     */
    public $InstanceId;

    /**
     * @var array 需要删除的告警分组ID，形如alert-xxxxx
     */
    public $GroupIds;

    /**
     * @param string $InstanceId prometheus实例id
     * @param array $GroupIds 需要删除的告警分组ID，形如alert-xxxxx
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

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }
    }
}
