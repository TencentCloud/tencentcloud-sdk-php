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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BindProjectExecutorResource请求参数结构体
 *
 * @method string getExecutorGroupId() 获取执行资源组id
 * @method void setExecutorGroupId(string $ExecutorGroupId) 设置执行资源组id
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method array getExecutorResourcePackageIds() 获取需要绑定项目的资源包id集合，为空则绑定整个资源组
 * @method void setExecutorResourcePackageIds(array $ExecutorResourcePackageIds) 设置需要绑定项目的资源包id集合，为空则绑定整个资源组
 * @method array getProjectIdList() 获取可选: 需要绑定的多个项目id, 若申明将带上ProjectId一起绑定
 * @method void setProjectIdList(array $ProjectIdList) 设置可选: 需要绑定的多个项目id, 若申明将带上ProjectId一起绑定
 */
class BindProjectExecutorResourceRequest extends AbstractModel
{
    /**
     * @var string 执行资源组id
     */
    public $ExecutorGroupId;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var array 需要绑定项目的资源包id集合，为空则绑定整个资源组
     */
    public $ExecutorResourcePackageIds;

    /**
     * @var array 可选: 需要绑定的多个项目id, 若申明将带上ProjectId一起绑定
     */
    public $ProjectIdList;

    /**
     * @param string $ExecutorGroupId 执行资源组id
     * @param string $ProjectId 项目id
     * @param array $ExecutorResourcePackageIds 需要绑定项目的资源包id集合，为空则绑定整个资源组
     * @param array $ProjectIdList 可选: 需要绑定的多个项目id, 若申明将带上ProjectId一起绑定
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
        if (array_key_exists("ExecutorGroupId",$param) and $param["ExecutorGroupId"] !== null) {
            $this->ExecutorGroupId = $param["ExecutorGroupId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ExecutorResourcePackageIds",$param) and $param["ExecutorResourcePackageIds"] !== null) {
            $this->ExecutorResourcePackageIds = $param["ExecutorResourcePackageIds"];
        }

        if (array_key_exists("ProjectIdList",$param) and $param["ProjectIdList"] !== null) {
            $this->ProjectIdList = $param["ProjectIdList"];
        }
    }
}
