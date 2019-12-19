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

namespace TencentCloud\Cme\V20191029;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cme\V20191029\Models as Models;

/**
* @method Models\CreateProjectResponse CreateProject(Models\CreateProjectRequest $req) 创建云剪的编辑项目，支持创建视频剪辑及直播剪辑两大类项目。

* @method Models\DeleteLoginStatusResponse DeleteLoginStatus(Models\DeleteLoginStatusRequest $req) 删除用户登录态，使用户登出云剪平台。
* @method Models\DeleteProjectResponse DeleteProject(Models\DeleteProjectRequest $req) 删除云剪编辑项目。
* @method Models\DescribeLoginStatusResponse DescribeLoginStatus(Models\DescribeLoginStatusRequest $req) 查询指定用户的登录态。
* @method Models\DescribeProjectsResponse DescribeProjects(Models\DescribeProjectsRequest $req) 支持根据多种条件过滤出项目列表。
* @method Models\DescribeTaskDetailResponse DescribeTaskDetail(Models\DescribeTaskDetailRequest $req) 获取任务详情信息，包含下面几个部分：
<li>任务基础信息：包括任务状态、错误信息、创建时间等；</li>
<li>导出项目输出信息：包括输出的素材 Id 等。</li>
* @method Models\DescribeTasksResponse DescribeTasks(Models\DescribeTasksRequest $req) 支持各种条件筛选，返回对应的任务基础信息列表。
* @method Models\ExportVideoEditProjectResponse ExportVideoEditProject(Models\ExportVideoEditProjectRequest $req) 导出视频编辑项目，支持指定输出的模板。
* @method Models\ImportMediaToProjectResponse ImportMediaToProject(Models\ImportMediaToProjectRequest $req) 将云点播中的媒资添加到素材库中，提供给后续的视频编辑。
* @method Models\ModifyProjectResponse ModifyProject(Models\ModifyProjectRequest $req) 修改云剪编辑项目的信息。
 */

class CmeClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "cme.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2019-10-29";

    /**
     * CvmClient constructor.
     * @param Credential $credential 认证类实例
     * @param string $region 地域
     * @param ClientProfile $profile client配置
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("cme")."\\"."V20191029\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
