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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Topic&Group维度的权限配置
 *
 * @method string getResource() 获取权限对应的资源
可以是主题名称，从 [DescribeTopicList](https://cloud.tencent.com/document/api/1493/96030) 接口返回的 [TopicItem](https://cloud.tencent.com/document/api/1493/96031#TopicItem) 或控制台获得。
可以是消费组名称，从 [DescribeConsumerGroupList](https://cloud.tencent.com/document/api/1493/101535) 接口返回的 [ConsumeGroupItem](https://cloud.tencent.com/document/api/1493/96031#ConsumeGroupItem) 或控制台获得。
 * @method void setResource(string $Resource) 设置权限对应的资源
可以是主题名称，从 [DescribeTopicList](https://cloud.tencent.com/document/api/1493/96030) 接口返回的 [TopicItem](https://cloud.tencent.com/document/api/1493/96031#TopicItem) 或控制台获得。
可以是消费组名称，从 [DescribeConsumerGroupList](https://cloud.tencent.com/document/api/1493/101535) 接口返回的 [ConsumeGroupItem](https://cloud.tencent.com/document/api/1493/96031#ConsumeGroupItem) 或控制台获得。
 * @method boolean getPermWrite() 获取是否开启生产权限
 * @method void setPermWrite(boolean $PermWrite) 设置是否开启生产权限
 * @method boolean getPermRead() 获取是否开启消费权限
 * @method void setPermRead(boolean $PermRead) 设置是否开启消费权限
 * @method string getResourceType() 获取授权资源类型（Topic:主题; Group:消费组）
 * @method void setResourceType(string $ResourceType) 设置授权资源类型（Topic:主题; Group:消费组）
 * @method string getRemark() 获取资源备注
 * @method void setRemark(string $Remark) 设置资源备注
 */
class DetailedRolePerm extends AbstractModel
{
    /**
     * @var string 权限对应的资源
可以是主题名称，从 [DescribeTopicList](https://cloud.tencent.com/document/api/1493/96030) 接口返回的 [TopicItem](https://cloud.tencent.com/document/api/1493/96031#TopicItem) 或控制台获得。
可以是消费组名称，从 [DescribeConsumerGroupList](https://cloud.tencent.com/document/api/1493/101535) 接口返回的 [ConsumeGroupItem](https://cloud.tencent.com/document/api/1493/96031#ConsumeGroupItem) 或控制台获得。
     */
    public $Resource;

    /**
     * @var boolean 是否开启生产权限
     */
    public $PermWrite;

    /**
     * @var boolean 是否开启消费权限
     */
    public $PermRead;

    /**
     * @var string 授权资源类型（Topic:主题; Group:消费组）
     */
    public $ResourceType;

    /**
     * @var string 资源备注
     */
    public $Remark;

    /**
     * @param string $Resource 权限对应的资源
可以是主题名称，从 [DescribeTopicList](https://cloud.tencent.com/document/api/1493/96030) 接口返回的 [TopicItem](https://cloud.tencent.com/document/api/1493/96031#TopicItem) 或控制台获得。
可以是消费组名称，从 [DescribeConsumerGroupList](https://cloud.tencent.com/document/api/1493/101535) 接口返回的 [ConsumeGroupItem](https://cloud.tencent.com/document/api/1493/96031#ConsumeGroupItem) 或控制台获得。
     * @param boolean $PermWrite 是否开启生产权限
     * @param boolean $PermRead 是否开启消费权限
     * @param string $ResourceType 授权资源类型（Topic:主题; Group:消费组）
     * @param string $Remark 资源备注
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("PermWrite",$param) and $param["PermWrite"] !== null) {
            $this->PermWrite = $param["PermWrite"];
        }

        if (array_key_exists("PermRead",$param) and $param["PermRead"] !== null) {
            $this->PermRead = $param["PermRead"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
