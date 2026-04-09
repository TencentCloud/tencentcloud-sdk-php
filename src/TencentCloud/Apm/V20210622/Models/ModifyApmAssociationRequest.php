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
 * @method string getProductName() 获取<p>关联的产品名，当前只支持Prometheus、CKafka</p>
 * @method void setProductName(string $ProductName) 设置<p>关联的产品名，当前只支持Prometheus、CKafka</p>
 * @method integer getStatus() 获取<p>关联关系的状态：// 关联关系状态：1（启用）、2（不启用）</p>
 * @method void setStatus(integer $Status) 设置<p>关联关系的状态：// 关联关系状态：1（启用）、2（不启用）</p>
 * @method string getInstanceId() 获取<p>业务系统ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>业务系统ID</p>
 * @method string getPeerId() 获取<p>关联的产品实例ID</p>
 * @method void setPeerId(string $PeerId) 设置<p>关联的产品实例ID</p>
 * @method string getTopic() 获取<p>CKafka消息主题</p>
 * @method void setTopic(string $Topic) 设置<p>CKafka消息主题</p>
 * @method string getMetricTopic() 获取<p>Ckafka消息主题</p>
 * @method void setMetricTopic(string $MetricTopic) 设置<p>Ckafka消息主题</p>
 */
class ModifyApmAssociationRequest extends AbstractModel
{
    /**
     * @var string <p>关联的产品名，当前只支持Prometheus、CKafka</p>
     */
    public $ProductName;

    /**
     * @var integer <p>关联关系的状态：// 关联关系状态：1（启用）、2（不启用）</p>
     */
    public $Status;

    /**
     * @var string <p>业务系统ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>关联的产品实例ID</p>
     */
    public $PeerId;

    /**
     * @var string <p>CKafka消息主题</p>
     */
    public $Topic;

    /**
     * @var string <p>Ckafka消息主题</p>
     */
    public $MetricTopic;

    /**
     * @param string $ProductName <p>关联的产品名，当前只支持Prometheus、CKafka</p>
     * @param integer $Status <p>关联关系的状态：// 关联关系状态：1（启用）、2（不启用）</p>
     * @param string $InstanceId <p>业务系统ID</p>
     * @param string $PeerId <p>关联的产品实例ID</p>
     * @param string $Topic <p>CKafka消息主题</p>
     * @param string $MetricTopic <p>Ckafka消息主题</p>
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

        if (array_key_exists("MetricTopic",$param) and $param["MetricTopic"] !== null) {
            $this->MetricTopic = $param["MetricTopic"];
        }
    }
}
