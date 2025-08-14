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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGroupAttribute请求参数结构体
 *
 * @method string getGroupId() 获取部署组ID，按照【部署组ID】进行过滤，可通过调用DescribeGroups查询已创建的项目列表或登录控制台进行查看；也可以调用CreateGroup创建新的项目。部署组ID例如：group-ab958z6y
 * @method void setGroupId(string $GroupId) 设置部署组ID，按照【部署组ID】进行过滤，可通过调用DescribeGroups查询已创建的项目列表或登录控制台进行查看；也可以调用CreateGroup创建新的项目。部署组ID例如：group-ab958z6y
 */
class DescribeGroupAttributeRequest extends AbstractModel
{
    /**
     * @var string 部署组ID，按照【部署组ID】进行过滤，可通过调用DescribeGroups查询已创建的项目列表或登录控制台进行查看；也可以调用CreateGroup创建新的项目。部署组ID例如：group-ab958z6y
     */
    public $GroupId;

    /**
     * @param string $GroupId 部署组ID，按照【部署组ID】进行过滤，可通过调用DescribeGroups查询已创建的项目列表或登录控制台进行查看；也可以调用CreateGroup创建新的项目。部署组ID例如：group-ab958z6y
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
