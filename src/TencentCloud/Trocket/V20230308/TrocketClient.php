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

namespace TencentCloud\Trocket\V20230308;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Trocket\V20230308\Models as Models;

/**
 * @method Models\CreateConsumerGroupResponse CreateConsumerGroup(Models\CreateConsumerGroupRequest $req) 创建消费组
 * @method Models\CreateInstanceResponse CreateInstance(Models\CreateInstanceRequest $req) 购买新实例
 * @method Models\CreateRoleResponse CreateRole(Models\CreateRoleRequest $req) 添加角色
 * @method Models\CreateTopicResponse CreateTopic(Models\CreateTopicRequest $req) 创建主题
 * @method Models\DeleteConsumerGroupResponse DeleteConsumerGroup(Models\DeleteConsumerGroupRequest $req) 删除消费组
 * @method Models\DeleteInstanceResponse DeleteInstance(Models\DeleteInstanceRequest $req) 删除实例
 * @method Models\DeleteRoleResponse DeleteRole(Models\DeleteRoleRequest $req) 删除角色
 * @method Models\DeleteTopicResponse DeleteTopic(Models\DeleteTopicRequest $req) 删除主题
 * @method Models\DescribeConsumerGroupResponse DescribeConsumerGroup(Models\DescribeConsumerGroupRequest $req) 查询消费组详情
 * @method Models\DescribeInstanceResponse DescribeInstance(Models\DescribeInstanceRequest $req) 查询实例信息
 * @method Models\DescribeInstanceListResponse DescribeInstanceList(Models\DescribeInstanceListRequest $req) 获取实例列表，Filters参数使用说明如下：
1. InstanceName, 名称模糊查询
2. InstanceId，实例ID查询
3. InstanceType, 实例类型查询，支持多选
3. InstanceStatus，实例状态查询，支持多选

当使用TagFilters查询时，Filters参数失效。
 * @method Models\DescribeRoleListResponse DescribeRoleList(Models\DescribeRoleListRequest $req) 查询角色列表，Filter参数使用说明如下：

1. RoleName，角色名称模糊搜索
 * @method Models\DescribeTopicResponse DescribeTopic(Models\DescribeTopicRequest $req) 查询主题详情，Offset和Limit参数是指订阅该主题的消费组查询分页参数，Filter参数使用说明如下：

ConsumerGroup，消费组名称过滤
 * @method Models\DescribeTopicListResponse DescribeTopicList(Models\DescribeTopicListRequest $req) 获取主题列表，Filter参数使用说明如下：

1. TopicName，主题名称模糊搜索
2. TopicType，主题类型查询，支持多选，可选值：Normal,Order,Transaction,DelayScheduled
 * @method Models\DescribeTopicStatsOpResponse DescribeTopicStatsOp(Models\DescribeTopicStatsOpRequest $req) 运营端查询topicStata
 * @method Models\ModifyConsumerGroupResponse ModifyConsumerGroup(Models\ModifyConsumerGroupRequest $req) 修改消费组属性
 * @method Models\ModifyInstanceResponse ModifyInstance(Models\ModifyInstanceRequest $req) 修改实例属性
 * @method Models\ModifyRoleResponse ModifyRole(Models\ModifyRoleRequest $req) 修改角色
 * @method Models\ModifyTopicResponse ModifyTopic(Models\ModifyTopicRequest $req) 修改主题属性
 */

class TrocketClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "trocket.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "trocket";

    /**
     * @var string
     */
    protected $version = "2023-03-08";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("trocket")."\\"."V20230308\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
