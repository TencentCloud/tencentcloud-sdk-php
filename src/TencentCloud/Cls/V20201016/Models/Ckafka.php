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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CKafka的描述-需要投递到的kafka信息
 *
 * @method string getInstanceId() 获取Ckafka 的 InstanceId。
- 通过 [获取实例列表信息](https://cloud.tencent.com/document/product/597/40835) 获取实例id。
- 通过 [创建实例](https://cloud.tencent.com/document/product/597/53207) 获取实例id。
 * @method void setInstanceId(string $InstanceId) 设置Ckafka 的 InstanceId。
- 通过 [获取实例列表信息](https://cloud.tencent.com/document/product/597/40835) 获取实例id。
- 通过 [创建实例](https://cloud.tencent.com/document/product/597/53207) 获取实例id。
 * @method string getTopicName() 获取Ckafka 的 TopicName。
- 通过 [创建 Topic](https://cloud.tencent.com/document/product/597/73566) 获得TopicName。
- 通过 [获取主题列表](https://cloud.tencent.com/document/product/597/40847) 获得TopicName。
 * @method void setTopicName(string $TopicName) 设置Ckafka 的 TopicName。
- 通过 [创建 Topic](https://cloud.tencent.com/document/product/597/73566) 获得TopicName。
- 通过 [获取主题列表](https://cloud.tencent.com/document/product/597/40847) 获得TopicName。
 * @method string getVip() 获取Ckafka 的 Vip。
- 通过 [获取实例属性 ](https://cloud.tencent.com/document/product/597/40836) 获取vip信息。
- 如果是通过 角色ARN 方式创建投递任务，则Vip字段可为空。
 * @method void setVip(string $Vip) 设置Ckafka 的 Vip。
- 通过 [获取实例属性 ](https://cloud.tencent.com/document/product/597/40836) 获取vip信息。
- 如果是通过 角色ARN 方式创建投递任务，则Vip字段可为空。
 * @method string getVport() 获取Ckafka 的 Vport。
- 通过 [获取实例属性 ](https://cloud.tencent.com/document/product/597/40836) 获取vip port信息。
- 如果是通过 角色ARN 方式创建投递任务，则Vport字段可为空。
 * @method void setVport(string $Vport) 设置Ckafka 的 Vport。
- 通过 [获取实例属性 ](https://cloud.tencent.com/document/product/597/40836) 获取vip port信息。
- 如果是通过 角色ARN 方式创建投递任务，则Vport字段可为空。
 * @method string getInstanceName() 获取Ckafka 的 InstanceName。
- 通过 [获取实例列表信息](https://cloud.tencent.com/document/product/597/40835) 获取InstanceName。
- 通过 [创建实例](https://cloud.tencent.com/document/product/597/53207) 获取InstanceName。
- 如果是通过 角色ARN 方式创建投递任务，则InstanceName字段可为空。
 * @method void setInstanceName(string $InstanceName) 设置Ckafka 的 InstanceName。
- 通过 [获取实例列表信息](https://cloud.tencent.com/document/product/597/40835) 获取InstanceName。
- 通过 [创建实例](https://cloud.tencent.com/document/product/597/53207) 获取InstanceName。
- 如果是通过 角色ARN 方式创建投递任务，则InstanceName字段可为空。
 * @method string getTopicId() 获取Ckafka 的 TopicId。
- 通过 [创建 Topic](https://cloud.tencent.com/document/product/597/73566) 获得TopicId。
- 通过 [获取主题列表](https://cloud.tencent.com/document/product/597/40847) 获得TopicId。
- 如果是通过 角色ARN 方式创建投递任务，则TopicId字段可为空。
 * @method void setTopicId(string $TopicId) 设置Ckafka 的 TopicId。
- 通过 [创建 Topic](https://cloud.tencent.com/document/product/597/73566) 获得TopicId。
- 通过 [获取主题列表](https://cloud.tencent.com/document/product/597/40847) 获得TopicId。
- 如果是通过 角色ARN 方式创建投递任务，则TopicId字段可为空。
 */
class Ckafka extends AbstractModel
{
    /**
     * @var string Ckafka 的 InstanceId。
- 通过 [获取实例列表信息](https://cloud.tencent.com/document/product/597/40835) 获取实例id。
- 通过 [创建实例](https://cloud.tencent.com/document/product/597/53207) 获取实例id。
     */
    public $InstanceId;

    /**
     * @var string Ckafka 的 TopicName。
- 通过 [创建 Topic](https://cloud.tencent.com/document/product/597/73566) 获得TopicName。
- 通过 [获取主题列表](https://cloud.tencent.com/document/product/597/40847) 获得TopicName。
     */
    public $TopicName;

    /**
     * @var string Ckafka 的 Vip。
- 通过 [获取实例属性 ](https://cloud.tencent.com/document/product/597/40836) 获取vip信息。
- 如果是通过 角色ARN 方式创建投递任务，则Vip字段可为空。
     */
    public $Vip;

    /**
     * @var string Ckafka 的 Vport。
- 通过 [获取实例属性 ](https://cloud.tencent.com/document/product/597/40836) 获取vip port信息。
- 如果是通过 角色ARN 方式创建投递任务，则Vport字段可为空。
     */
    public $Vport;

    /**
     * @var string Ckafka 的 InstanceName。
- 通过 [获取实例列表信息](https://cloud.tencent.com/document/product/597/40835) 获取InstanceName。
- 通过 [创建实例](https://cloud.tencent.com/document/product/597/53207) 获取InstanceName。
- 如果是通过 角色ARN 方式创建投递任务，则InstanceName字段可为空。
     */
    public $InstanceName;

    /**
     * @var string Ckafka 的 TopicId。
- 通过 [创建 Topic](https://cloud.tencent.com/document/product/597/73566) 获得TopicId。
- 通过 [获取主题列表](https://cloud.tencent.com/document/product/597/40847) 获得TopicId。
- 如果是通过 角色ARN 方式创建投递任务，则TopicId字段可为空。
     */
    public $TopicId;

    /**
     * @param string $InstanceId Ckafka 的 InstanceId。
- 通过 [获取实例列表信息](https://cloud.tencent.com/document/product/597/40835) 获取实例id。
- 通过 [创建实例](https://cloud.tencent.com/document/product/597/53207) 获取实例id。
     * @param string $TopicName Ckafka 的 TopicName。
- 通过 [创建 Topic](https://cloud.tencent.com/document/product/597/73566) 获得TopicName。
- 通过 [获取主题列表](https://cloud.tencent.com/document/product/597/40847) 获得TopicName。
     * @param string $Vip Ckafka 的 Vip。
- 通过 [获取实例属性 ](https://cloud.tencent.com/document/product/597/40836) 获取vip信息。
- 如果是通过 角色ARN 方式创建投递任务，则Vip字段可为空。
     * @param string $Vport Ckafka 的 Vport。
- 通过 [获取实例属性 ](https://cloud.tencent.com/document/product/597/40836) 获取vip port信息。
- 如果是通过 角色ARN 方式创建投递任务，则Vport字段可为空。
     * @param string $InstanceName Ckafka 的 InstanceName。
- 通过 [获取实例列表信息](https://cloud.tencent.com/document/product/597/40835) 获取InstanceName。
- 通过 [创建实例](https://cloud.tencent.com/document/product/597/53207) 获取InstanceName。
- 如果是通过 角色ARN 方式创建投递任务，则InstanceName字段可为空。
     * @param string $TopicId Ckafka 的 TopicId。
- 通过 [创建 Topic](https://cloud.tencent.com/document/product/597/73566) 获得TopicId。
- 通过 [获取主题列表](https://cloud.tencent.com/document/product/597/40847) 获得TopicId。
- 如果是通过 角色ARN 方式创建投递任务，则TopicId字段可为空。
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

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }
    }
}
