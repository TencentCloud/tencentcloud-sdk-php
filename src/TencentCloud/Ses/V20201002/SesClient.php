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

namespace TencentCloud\Ses\V20201002;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ses\V20201002\Models as Models;

/**
 * @method Models\BatchSendEmailResponse BatchSendEmail(Models\BatchSendEmailRequest $req) 您可以通过此API批量发送TEXT或者HTML邮件，适用于营销类、通知类邮件。默认仅支持使用模板发送邮件。批量发送之前，需先创建收件人列表，和收件人地址，并通过收件人列表id来进行发送。批量发送任务支持定时发送和周期重复发送，定时发送需传TimedParam，周期重复发送需传CycleParam
 * @method Models\CreateEmailAddressResponse CreateEmailAddress(Models\CreateEmailAddressRequest $req) 在验证了发信域名之后，您需要一个发信地址来发送邮件。例如发信域名是mail.qcloud.com，那么发信地址可以为 service@mail.qcloud.com。如果您想要收件人在收件箱列表中显示您的别名，例如"腾讯云邮件通知"。那么发信地址为： 别名 空格 尖括号 邮箱地址。请注意中间需要有空格
 * @method Models\CreateEmailIdentityResponse CreateEmailIdentity(Models\CreateEmailIdentityRequest $req) 在使用身份发送电子邮件之前，您需要有一个电子邮件域名，该域名可以是您的网站或者移动应用的域名。您首先必须进行验证，证明自己是该域名的所有者，并且授权给腾讯云SES发送许可，才可以从该域名发送电子邮件。
 * @method Models\CreateEmailTemplateResponse CreateEmailTemplate(Models\CreateEmailTemplateRequest $req) 创建模板，该模板可以是TXT或者HTML，请注意如果HTML不要包含外部文件的CSS。模板中的变量使用 {{变量名}} 表示。
注意：模板需要审核通过才可以使用。
 * @method Models\CreateReceiverResponse CreateReceiver(Models\CreateReceiverRequest $req) 创建收件人列表，收件人列表是发送批量邮件的目标邮件地址列表。创建列表后，需要上传收件人邮箱地址。之后创建发送任务，关联列表，便可以实现批量发送邮件的功能
 * @method Models\CreateReceiverDetailResponse CreateReceiverDetail(Models\CreateReceiverDetailRequest $req) 在创建完收件人列表后，向这个收件人列表中批量增加收件人邮箱地址，一次最大支持2万，异步完成处理。数据量比较大的时候，上传可能需要一点时间，可以通过查询收件人列表了解上传状态和上传数量。本接口与接口CreateReceiverDetailWithData的功能特性基本一致，只是不支持上传发信时的模板参数。用户首先调用创建收件人列表接口-CreateReceiver后，然后调用本接口传入收件人地址，最后使用批量发送邮件接口-BatchSendEmail，即可完成批量发信。本接口也支持追加收件人地址，也不支持去重，需要用户自己保证收件人地址不重复。本接口一次请求的收件人地址数量限制为2W条，但收件人列表中收件人地址的总量不能超过一定的数量，目前是限制5万条。
 * @method Models\CreateReceiverDetailWithDataResponse CreateReceiverDetailWithData(Models\CreateReceiverDetailWithDataRequest $req) 添加收件人地址附带模板参数，使用本接口在添加收件人地址的同时传入模板参数，使每一个收件人地址在发信的时候使用的模板变量取值不同。用户首先调用创建收件人列表接口-CreateReceiver后，然后调用本接口传入收件人地址和发信时的模板参数，最后使用批量发送邮件接口-BatchSendEmail，即可完成批量发信。需要注意的是在使用本接口后BatchSendEmail接口中的Template参数不需再传。用户也可以在控制台上邮件发送-收件人列表菜单中，通过导入文件的方式，导入收件人地址和模板变量和参数值。本接口一次请求的收件人地址数量限制为2W条，本接口同时也可以用来向已经上传完成的收件人列表追加收件人地址，但收件人列表中收件人地址的总量不能超过一定的数量，目前是限制5万条。本接口不支持去除重复的收件人地址，用户需要自己保证上传和追加地址不重复，不与之前上传的地址重复。
 * @method Models\DeleteBlackListResponse DeleteBlackList(Models\DeleteBlackListRequest $req) 邮箱被拉黑之后，用户如果确认收件邮箱有效或者已经处于激活状态，可以从腾讯云地址库中删除该黑名单之后继续投递。
 * @method Models\DeleteEmailAddressResponse DeleteEmailAddress(Models\DeleteEmailAddressRequest $req) 删除发信人地址
 * @method Models\DeleteEmailIdentityResponse DeleteEmailIdentity(Models\DeleteEmailIdentityRequest $req) 删除发信域名，删除后，将不可再使用该域名进行发信
 * @method Models\DeleteEmailTemplateResponse DeleteEmailTemplate(Models\DeleteEmailTemplateRequest $req) 删除发信模板
 * @method Models\DeleteReceiverResponse DeleteReceiver(Models\DeleteReceiverRequest $req) 根据收件id删除收件人列表,同时删除列表中的所有收件邮箱
 * @method Models\GetEmailIdentityResponse GetEmailIdentity(Models\GetEmailIdentityRequest $req) 获取某个发信域名的配置详情
 * @method Models\GetEmailTemplateResponse GetEmailTemplate(Models\GetEmailTemplateRequest $req) 根据模板ID获取模板详情
 * @method Models\GetSendEmailStatusResponse GetSendEmailStatus(Models\GetSendEmailStatusRequest $req) 获取邮件发送状态。仅支持查询30天之内的数据
默认接口请求频率限制：1次/秒
 * @method Models\GetStatisticsReportResponse GetStatisticsReport(Models\GetStatisticsReportRequest $req) 获取近期发送的统计情况，包含发送量、送达率、打开率、退信率等一系列数据。
 * @method Models\ListBlackEmailAddressResponse ListBlackEmailAddress(Models\ListBlackEmailAddressRequest $req) 腾讯云发送的邮件一旦被收件方判断为硬退(Hard Bounce)，腾讯云会拉黑该地址，并不允许所有用户向该地址发送邮件。成为邮箱黑名单。如果业务方确认是误判，可以从黑名单中删除。
 * @method Models\ListEmailAddressResponse ListEmailAddress(Models\ListEmailAddressRequest $req) 获取发信地址列表
 * @method Models\ListEmailIdentitiesResponse ListEmailIdentities(Models\ListEmailIdentitiesRequest $req) 获取当前发信域名列表，包含已验证通过与未验证的域名
 * @method Models\ListEmailTemplatesResponse ListEmailTemplates(Models\ListEmailTemplatesRequest $req) 获取当前邮件模板列表
 * @method Models\ListReceiversResponse ListReceivers(Models\ListReceiversRequest $req) 根据条件查询收件人列表，支持分页，模糊查询，状态查询
 * @method Models\ListSendTasksResponse ListSendTasks(Models\ListSendTasksRequest $req) 分页查询批量发送邮件任务，包含即时发送任务，定时发送任务，周期重复发送任务，查询发送情况，包括请求数量，已发数量，缓存数量，任务状态等信息
 * @method Models\SendEmailResponse SendEmail(Models\SendEmailRequest $req) 您可以通过此API发送HTML或者TEXT邮件，适用于触发类邮件（验证码、交易类）。默认仅支持使用模板发送邮件。
 * @method Models\UpdateEmailIdentityResponse UpdateEmailIdentity(Models\UpdateEmailIdentityRequest $req) 您已经成功配置好了您的DNS，接下来请求腾讯云验证您的DNS配置是否正确
 * @method Models\UpdateEmailSmtpPassWordResponse UpdateEmailSmtpPassWord(Models\UpdateEmailSmtpPassWordRequest $req) 设置邮箱的smtp密码。若要通过smtp发送邮件，必须为邮箱设置smtp密码。初始时，邮箱没有设置smtp密码，不能使用smtp的方式发送邮件。设置smtp密码后，可以修改密码。
 * @method Models\UpdateEmailTemplateResponse UpdateEmailTemplate(Models\UpdateEmailTemplateRequest $req) 更新邮件模板，更新后需再次审核
 */

class SesClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ses.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ses";

    /**
     * @var string
     */
    protected $version = "2020-10-02";

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
        $respClass = "TencentCloud"."\\".ucfirst("ses")."\\"."V20201002\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
