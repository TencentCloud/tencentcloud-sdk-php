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

namespace TencentCloud\Lowcode\V20210108;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Lowcode\V20210108\Models as Models;

/**
 * @method Models\CreateKnowledgeSetResponse CreateKnowledgeSet(Models\CreateKnowledgeSetRequest $req) 创建知识库
 * @method Models\DeleteKnowledgeDocumentSetResponse DeleteKnowledgeDocumentSet(Models\DeleteKnowledgeDocumentSetRequest $req) 删除知识库下文档
 * @method Models\DeleteKnowledgeSetResponse DeleteKnowledgeSet(Models\DeleteKnowledgeSetRequest $req) 删除知识库
 * @method Models\DescribeDataSourceListResponse DescribeDataSourceList(Models\DescribeDataSourceListRequest $req) 获取数据源详情列表
 * @method Models\DescribeKnowledgeDocumentSetDetailResponse DescribeKnowledgeDocumentSetDetail(Models\DescribeKnowledgeDocumentSetDetailRequest $req) 获取知识库下文档详情
 * @method Models\DescribeKnowledgeDocumentSetListResponse DescribeKnowledgeDocumentSetList(Models\DescribeKnowledgeDocumentSetListRequest $req) 查询知识库下文件集合
 * @method Models\DescribeKnowledgeSetListResponse DescribeKnowledgeSetList(Models\DescribeKnowledgeSetListRequest $req) 查询知识库
 * @method Models\SearchDocListResponse SearchDocList(Models\SearchDocListRequest $req) 知识库文档搜索接口
 * @method Models\UpdateKnowledgeSetResponse UpdateKnowledgeSet(Models\UpdateKnowledgeSetRequest $req) 更新知识库
 * @method Models\UploadKnowledgeDocumentSetResponse UploadKnowledgeDocumentSet(Models\UploadKnowledgeDocumentSetRequest $req) 更新知识库
 */

class LowcodeClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "lowcode.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "lowcode";

    /**
     * @var string
     */
    protected $version = "2021-01-08";

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
        $respClass = "TencentCloud"."\\".ucfirst("lowcode")."\\"."V20210108\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
