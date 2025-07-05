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
 * ModifyMQTTTopic请求参数结构体
 *
 * @method string getInstanceId() 获取集群ID
 * @method void setInstanceId(string $InstanceId) 设置集群ID
 * @method string getTopic() 获取主题名称
 * @method void setTopic(string $Topic) 设置主题名称
 * @method string getRemark() 获取备注信息
 * @method void setRemark(string $Remark) 设置备注信息
 */
class ModifyMQTTTopicRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $InstanceId;

    /**
     * @var string 主题名称
     */
    public $Topic;

    /**
     * @var string 备注信息
     */
    public $Remark;

    /**
     * @param string $InstanceId 集群ID
     * @param string $Topic 主题名称
     * @param string $Remark 备注信息
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

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
