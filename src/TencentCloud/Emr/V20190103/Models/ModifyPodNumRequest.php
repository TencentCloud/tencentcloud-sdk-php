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
 * ModifyPodNum请求参数结构体
 *
 * @method string getInstanceId() 获取集群Id
 * @method void setInstanceId(string $InstanceId) 设置集群Id
 * @method integer getServiceGroup() 获取服务编号
 * @method void setServiceGroup(integer $ServiceGroup) 设置服务编号
 * @method integer getServiceType() 获取角色编号
 * @method void setServiceType(integer $ServiceType) 设置角色编号
 * @method integer getPodNum() 获取期望Pod数量
 * @method void setPodNum(integer $PodNum) 设置期望Pod数量
 */
class ModifyPodNumRequest extends AbstractModel
{
    /**
     * @var string 集群Id
     */
    public $InstanceId;

    /**
     * @var integer 服务编号
     */
    public $ServiceGroup;

    /**
     * @var integer 角色编号
     */
    public $ServiceType;

    /**
     * @var integer 期望Pod数量
     */
    public $PodNum;

    /**
     * @param string $InstanceId 集群Id
     * @param integer $ServiceGroup 服务编号
     * @param integer $ServiceType 角色编号
     * @param integer $PodNum 期望Pod数量
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

        if (array_key_exists("ServiceGroup",$param) and $param["ServiceGroup"] !== null) {
            $this->ServiceGroup = $param["ServiceGroup"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("PodNum",$param) and $param["PodNum"] !== null) {
            $this->PodNum = $param["PodNum"];
        }
    }
}
