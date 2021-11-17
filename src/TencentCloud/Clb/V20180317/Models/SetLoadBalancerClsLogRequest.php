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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetLoadBalancerClsLog请求参数结构体
 *
 * @method string getLoadBalancerId() 获取负载均衡实例 ID。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例 ID。
 * @method string getLogSetId() 获取日志服务(CLS)的日志集 ID。
<li>增加和更新日志主题时可调用 [DescribeLogsets](https://cloud.tencent.com/document/product/614/56454) 接口获取日志集 ID。</li>
<li>删除日志主题时，此参数填写为null即可。</li>
 * @method void setLogSetId(string $LogSetId) 设置日志服务(CLS)的日志集 ID。
<li>增加和更新日志主题时可调用 [DescribeLogsets](https://cloud.tencent.com/document/product/614/56454) 接口获取日志集 ID。</li>
<li>删除日志主题时，此参数填写为null即可。</li>
 * @method string getLogTopicId() 获取日志服务(CLS)的日志主题 ID。
<li>增加和更新日志主题时可调用 [DescribeTopics](https://cloud.tencent.com/document/product/614/58624) 接口获取日志主题 ID。</li>
<li>删除日志主题时，此参数填写为null即可。</li>
 * @method void setLogTopicId(string $LogTopicId) 设置日志服务(CLS)的日志主题 ID。
<li>增加和更新日志主题时可调用 [DescribeTopics](https://cloud.tencent.com/document/product/614/58624) 接口获取日志主题 ID。</li>
<li>删除日志主题时，此参数填写为null即可。</li>
 * @method string getLogType() 获取日志类型：
<li>ACCESS：访问日志</li>
<li>HEALTH：健康检查日志</li>
默认为ACCESS。
 * @method void setLogType(string $LogType) 设置日志类型：
<li>ACCESS：访问日志</li>
<li>HEALTH：健康检查日志</li>
默认为ACCESS。
 */
class SetLoadBalancerClsLogRequest extends AbstractModel
{
    /**
     * @var string 负载均衡实例 ID。
     */
    public $LoadBalancerId;

    /**
     * @var string 日志服务(CLS)的日志集 ID。
<li>增加和更新日志主题时可调用 [DescribeLogsets](https://cloud.tencent.com/document/product/614/56454) 接口获取日志集 ID。</li>
<li>删除日志主题时，此参数填写为null即可。</li>
     */
    public $LogSetId;

    /**
     * @var string 日志服务(CLS)的日志主题 ID。
<li>增加和更新日志主题时可调用 [DescribeTopics](https://cloud.tencent.com/document/product/614/58624) 接口获取日志主题 ID。</li>
<li>删除日志主题时，此参数填写为null即可。</li>
     */
    public $LogTopicId;

    /**
     * @var string 日志类型：
<li>ACCESS：访问日志</li>
<li>HEALTH：健康检查日志</li>
默认为ACCESS。
     */
    public $LogType;

    /**
     * @param string $LoadBalancerId 负载均衡实例 ID。
     * @param string $LogSetId 日志服务(CLS)的日志集 ID。
<li>增加和更新日志主题时可调用 [DescribeLogsets](https://cloud.tencent.com/document/product/614/56454) 接口获取日志集 ID。</li>
<li>删除日志主题时，此参数填写为null即可。</li>
     * @param string $LogTopicId 日志服务(CLS)的日志主题 ID。
<li>增加和更新日志主题时可调用 [DescribeTopics](https://cloud.tencent.com/document/product/614/58624) 接口获取日志主题 ID。</li>
<li>删除日志主题时，此参数填写为null即可。</li>
     * @param string $LogType 日志类型：
<li>ACCESS：访问日志</li>
<li>HEALTH：健康检查日志</li>
默认为ACCESS。
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("LogSetId",$param) and $param["LogSetId"] !== null) {
            $this->LogSetId = $param["LogSetId"];
        }

        if (array_key_exists("LogTopicId",$param) and $param["LogTopicId"] !== null) {
            $this->LogTopicId = $param["LogTopicId"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }
    }
}
