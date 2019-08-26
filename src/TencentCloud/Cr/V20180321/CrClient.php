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

namespace TencentCloud\Cr\V20180321;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cr\V20180321\Models as Models;

/**
* @method Models\ApplyBlackListResponse ApplyBlackList(Models\ApplyBlackListRequest $req) 提交黑名单后，黑名单中有效期内的号码将停止拨打，适用于提醒、催收、回访场景。
* @method Models\ApplyCreditAuditResponse ApplyCreditAudit(Models\ApplyCreditAuditRequest $req) 提交信审外呼申请，返回当次请求日期。
* @method Models\DescribeCreditResultResponse DescribeCreditResult(Models\DescribeCreditResultRequest $req) 根据信审任务ID和请求日期，获取相关信审结果。
* @method Models\DescribeRecordsResponse DescribeRecords(Models\DescribeRecordsRequest $req) 用于获取指定案件的录音地址，次日早上8:00后可查询前日录音。
* @method Models\DescribeTaskStatusResponse DescribeTaskStatus(Models\DescribeTaskStatusRequest $req) 根据上传文件接口的输出参数DataResId，获取相关上传结果。
* @method Models\DownloadDialogueTextResponse DownloadDialogueText(Models\DownloadDialogueTextRequest $req) 用于获取指定案件的对话文本内容，次日早上8:00后可查询前日对话文本内容。
* @method Models\DownloadRecordListResponse DownloadRecordList(Models\DownloadRecordListRequest $req) <p>用于获取录音下载链接清单，次日早上8:00后可查询前日录音清单。</p>
<p>注意：录音清单中的录音下载链接仅次日20:00之前有效，请及时下载。</p>
* @method Models\DownloadReportResponse DownloadReport(Models\DownloadReportRequest $req) 用于下载当日催收和回访结果报表。当日23:00后，可获取当日催收结果，次日00:30后，可获取昨日回访结果。
* @method Models\UploadDataFileResponse UploadDataFile(Models\UploadDataFileRequest $req) <p>该接口包含上传下列文件：</p>
<ol style="margin-bottom:10px;">
  <li>入催文件：用于每天入催文件的上传</li>
  <li>还款文件：实时上传当前已还款客户，用于还款客户的实时停催</li>
  <li>回访文件：用于每天贷中回访文件的上传</li>
  <li>回访停拨文件：实时上传回访停拨名单文件，文件中的名单实时停拨</li>
</ol>
接口返回数据任务ID，支持xlsx、xls、csv、zip格式，文档大小不超过50MB。
* @method Models\UploadFileResponse UploadFile(Models\UploadFileRequest $req) 客户通过调用该接口上传需催收文档，格式需为excel格式。接口返回任务ID。
 */

class CrClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "cr.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2018-03-21";

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
        $respClass = "TencentCloud"."\\".ucfirst("cr")."\\"."V20180321\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }

    public function UploadDataFile($req)
    {
        $options = array(
            "IsMultipart" => true,
            "BinaryParams" => array("File"),
        );
        return $this->doRequestWithOptions("UploadDataFile", $req, $options);
    }
}
