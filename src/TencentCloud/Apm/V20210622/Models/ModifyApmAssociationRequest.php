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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyApmAssociation请求参数结构体
 *
 * @method string getProductName() 获取关联的产品名，当前只支持Prometheus、CKafka
 * @method void setProductName(string $ProductName) 设置关联的产品名，当前只支持Prometheus、CKafka
 * @method integer getStatus() 获取关联关系的状态：// 关联关系状态：1（启用）、2（不启用）
 * @method void setStatus(integer $Status) 设置关联关系的状态：// 关联关系状态：1（启用）、2（不启用）
 * @method string getInstanceId() 获取业务系统ID
 * @method void setInstanceId(string $InstanceId) 设置业务系统ID
 * @method string getPeerId() 获取关联的产品实例ID
 * @method void setPeerId(string $PeerId) 设置关联的产品实例ID
 * @method string getTopic() 获取CKafka消息主题
 * @method void setTopic(string $Topic) 设置CKafka消息主题
 */
class ModifyApmAssociationRequest extends AbstractModel
{
    /**
     * @var string 关联的产品名，当前只支持Prometheus、CKafka
     */
    public $ProductName;

    /**
     * @var integer 关联关系的状态：// 关联关系状态：1（启用）、2（不启用）
     */
    public $Status;

    /**
     * @var string 业务系统ID
     */
    public $InstanceId;

    /**
     * @var string 关联的产品实例ID
     */
    public $PeerId;

    /**
     * @var string CKafka消息主题
     */
    public $Topic;

    /**
     * @param string $ProductName 关联的产品名，当前只支持Prometheus、CKafka
     * @param integer $Status 关联关系的状态：// 关联关系状态：1（启用）、2（不启用）
     * @param string $InstanceId 业务系统ID
     * @param string $PeerId 关联的产品实例ID
     * @param string $Topic CKafka消息主题
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
        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PeerId",$param) and $param["PeerId"] !== null) {
            $this->PeerId = $param["PeerId"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }
    }
}
