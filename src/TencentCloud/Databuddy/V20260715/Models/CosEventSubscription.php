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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * COS 文件事件订阅配置（Location 与 COS 桶事件投递 CKafka 的联动）
 *
 * @method string getInstanceId() 获取CKafka 实例 ID，例如 ckafka-xxxxxxxx（订阅时必填）
 * @method void setInstanceId(string $InstanceId) 设置CKafka 实例 ID，例如 ckafka-xxxxxxxx（订阅时必填）
 * @method string getTopicName() 获取CKafka 主题名称（订阅时必填）
 * @method void setTopicName(string $TopicName) 设置CKafka 主题名称（订阅时必填）
 * @method string getRoleArn() 获取服务角色名称，例如 COSNotifyRole（订阅时必填；服务端按当前租户拼接完整 ARN）
 * @method void setRoleArn(string $RoleArn) 设置服务角色名称，例如 COSNotifyRole（订阅时必填；服务端按当前租户拼接完整 ARN）
 * @method string getRegion() 获取COS 存储桶所在地域，例如 ap-guangzhou（订阅时必填；过渡方案，后续可能改为服务端自动解析并移除）
 * @method void setRegion(string $Region) 设置COS 存储桶所在地域，例如 ap-guangzhou（订阅时必填；过渡方案，后续可能改为服务端自动解析并移除）
 */
class CosEventSubscription extends AbstractModel
{
    /**
     * @var string CKafka 实例 ID，例如 ckafka-xxxxxxxx（订阅时必填）
     */
    public $InstanceId;

    /**
     * @var string CKafka 主题名称（订阅时必填）
     */
    public $TopicName;

    /**
     * @var string 服务角色名称，例如 COSNotifyRole（订阅时必填；服务端按当前租户拼接完整 ARN）
     */
    public $RoleArn;

    /**
     * @var string COS 存储桶所在地域，例如 ap-guangzhou（订阅时必填；过渡方案，后续可能改为服务端自动解析并移除）
     */
    public $Region;

    /**
     * @param string $InstanceId CKafka 实例 ID，例如 ckafka-xxxxxxxx（订阅时必填）
     * @param string $TopicName CKafka 主题名称（订阅时必填）
     * @param string $RoleArn 服务角色名称，例如 COSNotifyRole（订阅时必填；服务端按当前租户拼接完整 ARN）
     * @param string $Region COS 存储桶所在地域，例如 ap-guangzhou（订阅时必填；过渡方案，后续可能改为服务端自动解析并移除）
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

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("RoleArn",$param) and $param["RoleArn"] !== null) {
            $this->RoleArn = $param["RoleArn"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
