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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateReplicationGroup请求参数结构体
 *
 * @method string getInstanceId() 获取指定复制组中的主实例ID。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置指定复制组中的主实例ID。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。
 * @method string getGroupName() 获取配置复制组名称。仅支持长度为2-64个字符的中文、英文、数字、下划线_、分隔符-。
 * @method void setGroupName(string $GroupName) 设置配置复制组名称。仅支持长度为2-64个字符的中文、英文、数字、下划线_、分隔符-。
 * @method string getRemark() 获取备注信息。
 * @method void setRemark(string $Remark) 设置备注信息。
 */
class CreateReplicationGroupRequest extends AbstractModel
{
    /**
     * @var string 指定复制组中的主实例ID。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。
     */
    public $InstanceId;

    /**
     * @var string 配置复制组名称。仅支持长度为2-64个字符的中文、英文、数字、下划线_、分隔符-。
     */
    public $GroupName;

    /**
     * @var string 备注信息。
     */
    public $Remark;

    /**
     * @param string $InstanceId 指定复制组中的主实例ID。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。
     * @param string $GroupName 配置复制组名称。仅支持长度为2-64个字符的中文、英文、数字、下划线_、分隔符-。
     * @param string $Remark 备注信息。
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

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
