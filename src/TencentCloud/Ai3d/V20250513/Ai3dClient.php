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

namespace TencentCloud\Ai3d\V20250513;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ai3d\V20250513\Models as Models;

/**
 * @method Models\Convert3DFormatResponse Convert3DFormat(Models\Convert3DFormatRequest $req) 输入3D模型文件后，可进行3D模型文件格式转换。
 * @method Models\DescribeHunyuanTo3DUVJobResponse DescribeHunyuanTo3DUVJob(Models\DescribeHunyuanTo3DUVJobRequest $req) 查询组件拆分任务。
 * @method Models\DescribeReduceFaceJobResponse DescribeReduceFaceJob(Models\DescribeReduceFaceJobRequest $req) 混元生3D接口，基于混元大模型，根据输入的文本描述/图片智能生成3D。
默认提供1个并发，代表最多能同时处理1个已提交的任务，上一个任务处理完毕后，才能开始处理下一个任务。
 * @method Models\DescribeTextureTo3DJobResponse DescribeTextureTo3DJob(Models\DescribeTextureTo3DJobRequest $req) 混元生3D接口，基于混元大模型，根据输入的文本描述/图片智能生成3D。
默认提供1个并发，代表最多能同时处理1个已提交的任务，上一个任务处理完毕后，才能开始处理下一个任务。
 * @method Models\QueryHunyuan3DPartJobResponse QueryHunyuan3DPartJob(Models\QueryHunyuan3DPartJobRequest $req) 查询组件生成任务。
 * @method Models\QueryHunyuanTo3DProJobResponse QueryHunyuanTo3DProJob(Models\QueryHunyuanTo3DProJobRequest $req) 混元生3D接口，基于混元大模型，根据输入的文本描述/图片智能生成3D。
默认提供3个并发，代表最多能同时处理3个已提交的任务，上一个任务处理完毕后，才能开始处理下一个任务。
 * @method Models\QueryHunyuanTo3DRapidJobResponse QueryHunyuanTo3DRapidJob(Models\QueryHunyuanTo3DRapidJobRequest $req) 混元生3D接口，基于混元大模型，根据输入的文本描述/图片智能生成3D。
默认提供1个并发，代表最多能同时处理1个已提交的任务，上一个任务处理完毕后，才能开始处理下一个任务。
 * @method Models\SubmitHunyuan3DPartJobResponse SubmitHunyuan3DPartJob(Models\SubmitHunyuan3DPartJobRequest $req) 输入3D模型文件后，根据模型结构自动进行组件识别生成。
 * @method Models\SubmitHunyuanTo3DProJobResponse SubmitHunyuanTo3DProJob(Models\SubmitHunyuanTo3DProJobRequest $req) 混元生3D接口，基于混元大模型，根据输入的文本描述/图片智能生成3D。
默认提供3个并发，代表最多能同时处理3个已提交的任务，上一个任务处理完毕后，才能开始处理下一个任务。
 * @method Models\SubmitHunyuanTo3DRapidJobResponse SubmitHunyuanTo3DRapidJob(Models\SubmitHunyuanTo3DRapidJobRequest $req) 混元生3D接口，基于混元大模型，根据输入的文本描述/图片智能生成3D。
默认提供1个并发，代表最多能同时处理1个已提交的任务，上一个任务处理完毕后，才能开始处理下一个任务。
 * @method Models\SubmitHunyuanTo3DUVJobResponse SubmitHunyuanTo3DUVJob(Models\SubmitHunyuanTo3DUVJobRequest $req) 输入模型后，可根据模型纹理进行UV展开，输出对应UV贴图。
 * @method Models\SubmitReduceFaceJobResponse SubmitReduceFaceJob(Models\SubmitReduceFaceJobRequest $req) 混元生3D接口，基于混元大模型，根据输入的文本描述/图片智能生成3D。
默认提供1个并发，代表最多能同时处理1个已提交的任务，上一个任务处理完毕后，才能开始处理下一个任务。
 * @method Models\SubmitTextureTo3DJobResponse SubmitTextureTo3DJob(Models\SubmitTextureTo3DJobRequest $req) 混元生3D接口，基于混元大模型，根据输入的文本描述/图片智能生成3D。
默认提供1个并发，代表最多能同时处理1个已提交的任务，上一个任务处理完毕后，才能开始处理下一个任务。
 */

class Ai3dClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ai3d.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ai3d";

    /**
     * @var string
     */
    protected $version = "2025-05-13";

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
        $respClass = "TencentCloud"."\\".ucfirst("ai3d")."\\"."V20250513\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
