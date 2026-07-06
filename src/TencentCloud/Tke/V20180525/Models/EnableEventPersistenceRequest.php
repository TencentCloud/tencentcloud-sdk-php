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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EnableEventPersistence请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method string getLogsetId() 获取<p>cls服务的logsetID，通过cls接口或者控制台获取</p>
 * @method void setLogsetId(string $LogsetId) 设置<p>cls服务的logsetID，通过cls接口或者控制台获取</p>
 * @method string getTopicId() 获取<p>cls服务的topicID，通过cls接口或者控制台获取</p>
 * @method void setTopicId(string $TopicId) 设置<p>cls服务的topicID，通过cls接口或者控制台获取</p>
 * @method string getTopicRegion() 获取<p>topic所在地域，默认为集群所在地域</p>
 * @method void setTopicRegion(string $TopicRegion) 设置<p>topic所在地域，默认为集群所在地域</p>
 * @method string getClusterType() 获取<p>集群类型 tke/eks</p><p>默认值：tke</p>
 * @method void setClusterType(string $ClusterType) 设置<p>集群类型 tke/eks</p><p>默认值：tke</p>
 */
class EnableEventPersistenceRequest extends AbstractModel
{
    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>cls服务的logsetID，通过cls接口或者控制台获取</p>
     */
    public $LogsetId;

    /**
     * @var string <p>cls服务的topicID，通过cls接口或者控制台获取</p>
     */
    public $TopicId;

    /**
     * @var string <p>topic所在地域，默认为集群所在地域</p>
     */
    public $TopicRegion;

    /**
     * @var string <p>集群类型 tke/eks</p><p>默认值：tke</p>
     */
    public $ClusterType;

    /**
     * @param string $ClusterId <p>集群ID</p>
     * @param string $LogsetId <p>cls服务的logsetID，通过cls接口或者控制台获取</p>
     * @param string $TopicId <p>cls服务的topicID，通过cls接口或者控制台获取</p>
     * @param string $TopicRegion <p>topic所在地域，默认为集群所在地域</p>
     * @param string $ClusterType <p>集群类型 tke/eks</p><p>默认值：tke</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicRegion",$param) and $param["TopicRegion"] !== null) {
            $this->TopicRegion = $param["TopicRegion"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }
    }
}
