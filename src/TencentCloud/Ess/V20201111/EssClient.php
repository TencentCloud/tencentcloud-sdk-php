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

namespace TencentCloud\Ess\V20201111;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ess\V20201111\Models as Models;

/**
 * @method Models\ArchiveDynamicFlowResponse ArchiveDynamicFlow(Models\ArchiveDynamicFlowRequest $req) 该接口用于结束动态签署方2.0的合同流程。


**功能开通**
- 动态签署方2.0功能的使用需要先<font color="red">联系产品经理开通模块化计费功能</font>，然后到控制台中打开此功能。详细的使用说明请参考<a href="https://qian.tencent.com/developers/company/dynamic_signer_v2" target="_blank">动态签署方2.0</a>文档。

**使用条件**
- 此接口只能在<font color="red">合同处于非终态且<b>所有的签署方都已经完成签署</b></font>。一旦合同进入终态（例如：过期、拒签、撤销或者调用过此接口成功过），将无法通过此接口结束合同流程。

**整体流程**
![image](https://qcloudimg.tencent-cloud.cn/raw/75d323c66e44b05bbc8e949c18664455.png)
 * @method Models\BindEmployeeUserIdWithClientOpenIdResponse BindEmployeeUserIdWithClientOpenId(Models\BindEmployeeUserIdWithClientOpenIdRequest $req) 此接口（BindEmployeeUserIdWithClientOpenId）用于将电子签系统员工UserId与客户系统员工OpenId进行绑定。

此OpenId只在 [更新企业员工信息 ](https://qian.tencent.com/developers/companyApis/staffs/UpdateIntegrationEmployees)、[移除企业员工](https://qian.tencent.com/developers/companyApis/staffs/DeleteIntegrationEmployees) 等场景下可以使用
 * @method Models\CancelFlowResponse CancelFlow(Models\CancelFlowRequest $req) 用于撤销合同流程<br/>
适用场景：如果某个合同流程当前至少还有一方没有签署，则可通过该接口取消该合同流程。常用于合同发错、内容填错，需要及时撤销的场景。<br/>
- **可撤回合同状态**：未全部签署完成
- **不撤回合同状态**：已全部签署完成、已拒签、已过期、已撤回、拒绝填写、已解除等合同状态。

注:
1. 如果合同流程中的参与方均已签署完毕，则无法通过该接口撤销合同，签署完毕的合同需要双方走解除流程将合同作废，可以参考<a href="https://qian.tencent.com/developers/companyApis/operateFlows/CreateReleaseFlow" target="_blank">发起解除合同流程</a>接口。

2. 有对应合同撤销权限的人:  <font color='red'>合同的发起人（并已经授予撤销权限）或者发起人所在企业的超管、法人</font>
![image](https://qcloudimg.tencent-cloud.cn/raw/1f9f07fea6a70766cd286e0d58682ee2.png)

3. <font color='red'>只有撤销没有参与方签署过或只有自动签署签署过的合同，才会返还合同额度。</font>

4.  撤销后可以看合同PDF内容的人员： 发起方的超管， 发起方自己，发起方撤销合同的操作人员，已经签署合同、已经填写合同、邀请填写已经补充信息的参与人员， 其他参与人员看不到合同的内容。
 * @method Models\CancelMultiFlowSignQRCodeResponse CancelMultiFlowSignQRCode(Models\CancelMultiFlowSignQRCodeRequest $req) 此接口（CancelMultiFlowSignQRCode）用于废除一码多签签署码。
该接口所需的二维码ID，源自[创建一码多签签署码](https://qian.tencent.com/developers/companyApis/startFlows/CreateMultiFlowSignQRCode)生成的。
如果该签署码尚处于有效期内，可通过本接口将其设置为失效状态。
 * @method Models\CancelUserAutoSignEnableUrlResponse CancelUserAutoSignEnableUrl(Models\CancelUserAutoSignEnableUrlRequest $req) 用来撤销<a href="https://qian.tencent.com/developers/companyApis/users/CreateUserAutoSignEnableUrl" target="_blank">获取个人用户自动签的开通状态</a>生成的开通链接，撤销生成的链接失效。

注:
<ul><li>若个人用户已经用生成的完成自动签署的开通，撤销链接无效不会对开通结果产生影响(此情况接口会报错)。</li>
<li>处方单等特殊场景专用，此接口为白名单功能，使用前请联系对接的客户经理沟通。</li></ul>
 * @method Models\CreateBatchCancelFlowUrlResponse CreateBatchCancelFlowUrl(Models\CreateBatchCancelFlowUrlRequest $req) 指定需要批量撤回的签署流程Id，以获取批量撤销链接。
客户需指定要撤回的签署流程Id，最多可指定100个，超过100则不处理。
接口调用成功后，将返回批量撤回合同的链接。通过点击链接，可跳转至电子签小程序完成批量撤回操作。

- **可撤回合同状态**：未全部签署完成
- **不撤回合同状态**：已全部签署完成、已拒签、已过期、已撤回、拒绝填写、已解除等合同状态。

批量撤销结果可以通过接口返回的TaskId关联[批量撤销任务结果回调](https://qian.tencent.com/developers/company/callback_types_contracts_sign#%E4%B9%9D-%E6%89%B9%E9%87%8F%E6%92%A4%E9%94%80%E7%BB%93%E6%9E%9C%E5%9B%9E%E8%B0%83)或通过接口[查询批量撤销签署流程任务结果](https://qian.tencent.com/developers/companyApis/operateFlows/CreateBatchCancelFlowUrl)


注：
1. 如果合同流程中的参与方均已签署完毕，则无法通过该接口撤销合同，签署完毕的合同需要双方走解除流程将合同作废，可以参考<a href="https://qian.tencent.com/developers/companyApis/operateFlows/CreateReleaseFlow" target="_blank">发起解除合同流程</a>接口。

2. 有对应合同撤销权限的人:  <font color='red'>合同的发起人（并已经授予撤销权限）或者发起人所在企业的超管、法人</font>
![image](https://qcloudimg.tencent-cloud.cn/raw/1f9f07fea6a70766cd286e0d58682ee2.png)

3. <font color='red'>只有撤销没有参与方签署过或只有自动签署签署过的合同，才会返还合同额度。</font>

4. 撤销后可以看合同PDF内容的人员： 发起方的超管， 发起方自己，发起方撤销合同的操作人员，已经签署合同、已经填写合同、邀请填写已经补充信息的参与人员， 其他参与人员看不到合同的内容。
 * @method Models\CreateBatchContractReviewTaskResponse CreateBatchContractReviewTask(Models\CreateBatchContractReviewTaskRequest $req) 此接口（CreateBatchContractReviewTask）用来通过上传后的PDF资源编号来批量创建合同智能审查任务。

适用场景：根据合同内容识别出合同的风险信息。审查结果由AI生成，仅供参考。请结合相关法律法规和公司制度要求综合判断。

注: 
1. PDF格式限制大小为10M以下
2. 仅支持5个PDF文件批量发起
 * @method Models\CreateBatchInformationExtractionTaskResponse CreateBatchInformationExtractionTask(Models\CreateBatchInformationExtractionTaskRequest $req) 此接口（CreateBatchInformationExtractionTask）用来通过上传后的PDF资源编号来批量创建合同智能审查任务。<br/>

适用场景：根据合同关键词（字段名称）来提取PDF合同文件的字段结果信息。

注: 
1. PDF格式限制大小为10M以下
2. 仅支持5个PDF文件批量发起
 * @method Models\CreateBatchInitOrganizationUrlResponse CreateBatchInitOrganizationUrl(Models\CreateBatchInitOrganizationUrlRequest $req) 支持企业进行批量初始化操作：

此接口存在以下限制：
1. 若批量操作中包含<font  color="red">加入集团企业</font>操作,则调用此接口的员工须有<font  color="red">集团企业管理权限</font>。
2. 批量操作的企业需要已经完成电子签的认证流程。
3. 通过此接口生成的链接在小程序端进行操作时，操作人需要是<font  color="red">所有企业的超管或法人</font>。
4. 批量操作的企业，需要是<a href="https://qian.tencent.com/developers/companyApis/organizations/CreateOrganizationAuthUrl" target="_blank">通过平台方引导认证</a>的企业。
5. <font  color="red">操作链接过期时间默认为生成链接后7天。</font>
 * @method Models\CreateBatchOrganizationAuthorizationUrlResponse CreateBatchOrganizationAuthorizationUrl(Models\CreateBatchOrganizationAuthorizationUrlRequest $req) 此接口用于获取企业批量认证链接-单链接包含多条认证流。

前提条件：已调用 [CreateBatchOrganizationRegistrationTasks创建企业批量认证链接任务接口](https://qian.tencent.com/developers/companyApis/organizations/CreateBatchOrganizationRegistrationTasks) 和[查询企业批量认证链接DescribeBatchOrganizationRegistrationUrls](https://qian.tencent.com/developers/companyApis/organizations/DescribeBatchOrganizationRegistrationUrls) 确保认证任务已经完成。

异步任务的处理完成时间视当前已提交的任务量、任务的复杂程度等因素决定，正常情况下 3~5 秒即可完成，但也可能需要更长的时间。
此链接包含多条认证流程，使用该链接可以批量的对企业进行认证。
 * @method Models\CreateBatchOrganizationRegistrationTasksResponse CreateBatchOrganizationRegistrationTasks(Models\CreateBatchOrganizationRegistrationTasksRequest $req) 本接口（CreateBatchOrganizationRegistrationTasks）用于批量创建企业认证链接
该接口为异步提交任务接口,需要跟查询企业批量认证链接(DescribeBatchOrganizationRegistrationUrls) 配合使用.

批量创建链接有以下限制：

1. 单次最多创建10个企业。
2. 一天同一家企业最多创建8000家企业。
3. 同一批创建的企业不能重复 其中包括 企业名称，企业统一信用代码
4. 跳转到小程序的实现，参考微信官方文档（分为全屏、半屏两种方式），如何配置也可以请参考: 跳转电子签小程序配置

注：

1. 此接口需要 <font  color="red"><b>购买单独的实名套餐包</b></font>方可调用，如有需求请联系对接人员评估
  
2. 如果生成的链接是APP链接，跳转到小程序的实现，参考微信官方文档（分为<a href="https://developers.weixin.qq.com/miniprogram/dev/api/navigate/wx.navigateToMiniProgram.html">全屏</a>、<a href="https://developers.weixin.qq.com/miniprogram/dev/framework/open-ability/openEmbeddedMiniProgram.html">半屏</a>两种方式），如何配置也可以请参考: <a href="https://qian.tencent.com/developers/company/openwxminiprogram">跳转电子签小程序配置</a>
  

**腾讯电子签小程序的AppID 和 原始Id如下:**

| 小程序 | AppID | 原始ID |
| --- | --- | --- |
| 腾讯电子签（正式版） | wxa023b292fd19d41d | gh_da88f6188665 |
| 腾讯电子签Demo | wx371151823f6f3edf | gh_39a5d3de69fa |
 * @method Models\CreateBatchQuickSignUrlResponse CreateBatchQuickSignUrl(Models\CreateBatchQuickSignUrlRequest $req) 该接口用于发起合同后，生成个人/企业用户的批量待办链接。
**注意：**
1. 该接口可生成签署人的批量、合同组签署/查看链接 。
2. 该签署链接**有效期为30分钟**，过期后将失效，如需签署可重新创建批量签署链接 。
3. 该接口返回的签署链接适用于APP集成的场景，支持APP打开或浏览器直接打开，**不支持微信小程序嵌入**。
跳转到小程序的实现，参考微信官方文档(分为<a href="https://developers.weixin.qq.com/miniprogram/dev/api/navigate/wx.navigateToMiniProgram.html">全屏</a>、<a href="https://developers.weixin.qq.com/miniprogram/dev/framework/open-ability/openEmbeddedMiniProgram.html">半屏</a>两种方式)，如何配置也可以请参考: <a href="https://qian.tencent.com/developers/company/openwxminiprogram">跳转电子签小程序配置</a>。
4. 因h5涉及人脸身份认证能力基于慧眼人脸核身，对Android和iOS系统均有一定要求， 因此<font color='red'>App嵌入H5签署合同需要按照慧眼提供的<a href="https://cloud.tencent.com/document/product/1007/61076">慧眼人脸核身兼容性文档</a>做兼容性适配</font>。
5. H5签署现在仅支持中国大陆身份证和中国港澳台居民居住证。
 * @method Models\CreateBatchSignUrlResponse CreateBatchSignUrl(Models\CreateBatchSignUrlRequest $req) 通过此接口，可以创建小程序批量签署链接，个人/企业员工可通过此链接跳转至小程序进行批量签署。请确保生成链接时的身份信息与签署合同参与方的信息保持一致。

注意事项：
- 使用此接口生成链接，需要贵企业先开通 <font color="red">个人签署方仅校验手机号 </font>功能。您可以在 <b>【腾讯电子签网页端】->【企业设置】->【拓展服务】</b>中找到该功能。
- 生成批量签署链接时，<font color="red">合同目标参与方的状态必须为<b>待签署</b>状态</font>。签署人点击链接后需要输入短信验证码才能查看合同内容。
- 企业员工批量签署链接：需要传入签署方所在企业名称，用户名字和手机号（或者身份证件信息）参数来生成签署链接。<font color="red">该签署方企业必须已完成腾讯电子签企业认证</font>
- 个人批量签署链接：需要传入签署方用户名字和手机号（或者身份证件信息）参数来生成签署链接。个人批量签署进行的合同的签名区， 全部变成<font color="red">手写签名</font>（不管合同里边设置的签名限制）来进行。
- 不支持签署方含有签批控件，或设置了签署方在签署时自行添加签署控件功能的合同进行批量签署。
- 进行小程序批量签署必须指定待签署的流程id，<font color="red">接口中FlowIds参数必传。</font>
 * @method Models\CreateContractDiffTaskWebUrlResponse CreateContractDiffTaskWebUrl(Models\CreateContractDiffTaskWebUrlRequest $req) 接口（CreateContractDiffTaskWebUrl）用于创建合同对比的可嵌入web页面链接（此web页面可以通过iframe方式嵌入到贵方系统的网页中）。
注：本接口生成的web页面暂不支持<a href="https://qian.tencent.com/developers/companyApis/embedPages/CreateWebThemeConfig" target="_blank">设置本企业嵌入式页面主题配置</a>

未跳过上传确认的嵌入页面长相如下：
![image](https://qcloudimg.tencent-cloud.cn/raw/32f3526ad7152757202a7e4e760356db.jpg)
跳过上传确认的嵌入页面长相如下：
![image](https://qcloudimg.tencent-cloud.cn/raw/c68047feddbc106e261870687b6ab89d.jpg)
 * @method Models\CreateConvertTaskApiResponse CreateConvertTaskApi(Models\CreateConvertTaskApiRequest $req) 此接口（CreateConvertTaskApi）用来将word、excel、html、图片、txt类型文件转换为PDF文件。<br />
前提条件：源文件已经通过 <a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles" target="_blank">文件上传接口</a>完成上传，并得到了源文件的资源Id。<br />
适用场景1：已经上传了一个word文件，希望将该word文件转换成pdf文件后发起合同
适用场景2：已经上传了一个jpg图片文件，希望将该图片文件转换成pdf文件后发起合同<br />
转换文件是一个耗时操作，若想查看转换任务是否完成，可以通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/GetTaskResultApi" target="_blank">查询转换任务状态</a>接口获取任务状态。<br />
注: 
1. `支持的文件类型有doc、docx、xls、xlsx、html、jpg、jpeg、png、bmp、txt`
2. `可通过发起合同时设置预览来检查转换文件是否达到预期效果`
 * @method Models\CreateDocumentResponse CreateDocument(Models\CreateDocumentRequest $req) 创建签署流程电子文档<br />

###  调用流程
该接口需要给对应的流程指定一个模板id，并且填充该模板中需要补充的信息。需要配置<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateFlow" target="_blank">创建签署流程</a>和<a href="https://qian.tencent.com/developers/companyApis/startFlows/StartFlow" target="_blank">发起签署流程</a>接口使用。具体逻辑可以参考下图:

![image](https://qcloudimg.tencent-cloud.cn/raw/1f38ebd7c5afed8763ad961741d81438.png)


### 填充模板中定义的填写控件
模板中配置的<font color="red">发起人填充控件</font>可以通过本接口的**FormFields数组**字段填充。

**<font color="red">填充填写控件需要进行Pdf合成工作，文档合成完成后会收到[合同文档合成完成回调](https://qian.tencent.com/developers/company/callback_types_contracts_sign#%E4%B9%9D-%E5%90%88%E5%90%8C%E6%96%87%E6%A1%A3%E5%90%88%E6%88%90%E5%AE%8C%E6%88%90%E5%9B%9E%E8%B0%83),建议在收到此回调后再调用 [StartFlow](https://qian.tencent.com/developers/companyApis/startFlows/StartFlow) 接口。</font>**

![image](https://qcloudimg.tencent-cloud.cn/raw/37457e0e450fc221effddfcb8b1bad55.png)

填充的传参示例如下

```
    request.FormFields = [{
            "ComponentName": "项目的名字",
            "ComponentValue": "休闲山庄"
        }, {
            "ComponentName": "项目的地址",
            "ComponentValue": "凤凰山北侧",
        }, {
            "ComponentName": "范围",
            "ComponentValue": "凤凰山至107国道",
        }, {
            "ComponentName": "面积",
            "ComponentValue": "100亩",
        }, {
            "ComponentName": "基本情况",
            "ComponentValue": "完好",
        }, , {
            "ComponentName": "用途",
            "ComponentValue": "经营农家乐",
        }
    ]
```
合成后合同样子示例

![image](https://qcloudimg.tencent-cloud.cn/raw/140a2fb771ac66a185d0a000d37485f6.png)
 * @method Models\CreateDynamicFlowApproverResponse CreateDynamicFlowApprover(Models\CreateDynamicFlowApproverRequest $req) 此接口（CreateDynamicFlowApprover）接口主要用于补充动态签署方2.0合同的签署方信息，包括但不限于名字、手机号和签署区域等信息。


**功能开通**
动态签署方2.0功能的使用需要先<font color="red">联系产品经理开通模块化计费功能</font>，然后到控制台中打开此功能。详细的使用说明请参考<a href="https://qian.tencent.com/developers/company/dynamic_signer_v2" target="_blank">动态签署方2.0</a>文档。

**使用条件**
- 在发起合同时，必须将OpenDynamicSignFlow参数设置为true，以确保合同以动态签署方2.0的方式处理，否则默认处理为普通合同。
- 此接口只能在合同处于非终态时调用。一旦合同进入终态（例如：过期、拒签或撤销），将无法通过此接口添加新的签署方。
- 此接口补充的动态签署人暂不支持他方企业自动签署。


动态签署方2.0合同<font color="red">不会自动结束（整个合同变为签署完成）</font>，需要通过调用<a href="https://qian.tencent.com/developers/companyApis/operateFlows/ArchiveDynamicFlow/" target="_blank">结束动态签署合同</a>来手动结束签署流程。整体的流程如下图

![image](https://qcloudimg.tencent-cloud.cn/raw/75d323c66e44b05bbc8e949c18664455.png)
 * @method Models\CreateEmbedWebUrlResponse CreateEmbedWebUrl(Models\CreateEmbedWebUrlRequest $req) 本接口（CreateEmbedWebUrl）用于创建可嵌入web页面的URL（此web页面可以通过iframe方式嵌入到贵方系统的网页中），支持以下类型的Web链接创建：
1. 创建印章
2. 创建模板
3. 修改模板
4. 创建起草合同
5. 预览模板
6. 预览合同流程
 

预览模板的嵌入页面长相如下：
![image](https://qcloudimg.tencent-cloud.cn/raw/57bdda4a884e3f5b2de12d5a282a3651.png)

预览合同流程的嵌入页面长相如下：
![image](https://qcloudimg.tencent-cloud.cn/raw/dc7af994e2f6da56bdad5975e927de34.png)
 * @method Models\CreateEmployeeChangeUrlResponse CreateEmployeeChangeUrl(Models\CreateEmployeeChangeUrlRequest $req) 生成员工信息变更链接，当前仅支持变更手机号

注: 
1. 目前仅支持修改员工手机号，待修改员工必须已经实名且在职
2. 仅支持返回小程序链接
 * @method Models\CreateEmployeeQualificationSealQrCodeResponse CreateEmployeeQualificationSealQrCode(Models\CreateEmployeeQualificationSealQrCodeRequest $req) 该接口用于获取个人授权执业章给企业的微信二维码，需要个人用户通过微信扫码。

扫描后将跳转到腾讯电子签小程序，进入到授权执业章的流程。

个人用户授权成功后，企业印章管理员需对印章进行审核，审核通过后，即可使用个人授权的执业章进行盖章操作。


**注意**
1. 该二维码**有效期为7天**，过期后将失效，可重新创建。

整体流程入下图

![image](https://qcloudimg.tencent-cloud.cn/raw/21b6b56dbc796c9d6f402d6ce6febb07.png)
 * @method Models\CreateExtendedServiceAuthInfosResponse CreateExtendedServiceAuthInfos(Models\CreateExtendedServiceAuthInfosRequest $req) 创建企业扩展服务授权，当前仅支持授权 “企业自动签” 和 “批量签署” 给企业员工。
该接口作用和电子签控制台 企业设置-扩展服务-企业自动签署和批量签署授权 两个模块功能相同，可通过该接口授权给企业员工。

注：“企业自动签授权”支持集团代子企业操作，请联系运营开通此功能。
 * @method Models\CreateFileCounterSignResponse CreateFileCounterSign(Models\CreateFileCounterSignRequest $req) 此接口用于发起数字文件CA加签操作。可以使用同步或者异步模式进行。

**注意： 1. 文件类型暂时仅支持PDF类型文件。2. 此接口为『数字文件CA加签服务』白名单功能，使用前请联系对接的客户经理沟通。**
 * @method Models\CreateFlowResponse CreateFlow(Models\CreateFlowRequest $req) 通过模板创建签署流程<br/>
适用场景：在标准制式的合同场景中，可通过提前预制好模板文件，每次调用模板文件的id，补充合同内容信息及签署信息生成电子合同。
<table>
	<thead>
		<tr>
			<th>签署人类别</th>
			<th>需要提前准备的信息</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>自己企业的员工签署（未认证加入或已认证加入）</td>
			<td>签署企业的名字、员工的真实名字、员工的触达手机号、员工的证件号（证件号非必传）</td>
		</tr>
		<tr>
			<td>自己企业的员工签署（已认证加入）</td>
			<td>签署企业的名字、员工在电子签平台的ID（UserId）</td>
		</tr>
		<tr>
			<td>其他企业的员工签署</td>
			<td>签署企业的名字、员工的真实名字、员工的触达手机号、员工的证件号（证件号非必传）</td>
		</tr>
		<tr>
			<td>个人（自然人）签署</td>
			<td>个人的真实名字、个人的触达手机号、个人的身份证（证件号非必传）</td>
		</tr>
	</tbody>
</table>


注：配合<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateDocument" target="_blank">创建电子文档</a>和<a href="https://qian.tencent.com/developers/companyApis/startFlows/StartFlow" target="_blank">发起签署流程</a>接口使用。整体的逻辑如下图

![image](https://qcloudimg.tencent-cloud.cn/raw/1f38ebd7c5afed8763ad961741d81438.png)

注：**静默（自动）签署不支持合同签署方存在填写**功能
<br>

<font color="red">相关视频指引</font> <br>
1. <a href="https://dyn.ess.tencent.cn/guide/apivideo/createflow_seversign.mp4" target="_blank">创建静默（自动）签署模板和开通自动签署</a><br>
2. <a href="https://dyn.ess.tencent.cn/guide/apivideo/flow_document_start.mp4" target="_blank">用模板创建发起合同</a><br>
 * @method Models\CreateFlowApproversResponse CreateFlowApprovers(Models\CreateFlowApproversRequest $req) **适用场景 ：**

当通过模板或文件发起合同时， 签署人不制定， 等合同发起后再指定 可以用下面2种方案

<b><font color="red">1. 或签合同</font>: 若未指定企业签署人信息（只指定企业的名字），合同变成或签合同（个人签署方不支持或签合同）</b>。需调用此接口补充或添加签署人。或签签署人在控制台上的展示样式如下（会带有<b>或签</b>标识）：

![image](https://qcloudimg.tencent-cloud.cn/raw/b2715f0236faee807cfc0521f93cf01b.png)

<b><font color="red">2. 动态签署人合同</font>: 若未指定具体签署人的信息，则合同变成动态签署人合同</b>。需调用此接口补充或添加签署人。可以参考文档    <a href="https://qian.tencent.com/developers/company/dynamic_signer/" target="_blank">动态签署人合同</a>   。动态签署人在控制台上的展示样式如下：

![image](https://qcloudimg.tencent-cloud.cn/raw/2729477978e020c3bbb4d2e767bb78eb.png)

实际签署人需要通过[获取跳转至腾讯电子签小程序的签署链接](https://qian.tencent.com/developers/companyApis/startFlows/CreateSchemeUrl/)生成的链接进入小程序，领取合同并签署。同一签署环节可补充多个员工作为或签署人，最终实际签署人取决于谁先领取合同完成签署。

**接口使用说明**：

1.本接口现已支持批量补充签署人

2.当<a href="https://qian.tencent.com/developers/companyApis/dataTypes/#fillapproverinfo/" target="_blank">补充签署人结构体</a>中指定需要补充的FlowId时，可以对指定合同补充签署人；可以指定多个相同发起方的不同合同在完成批量补充

3.当<a href="https://qian.tencent.com/developers/companyApis/operateFlows/CreateFlowApprovers/" target="_blank">补充签署人接口入参</a>中指定需要补充的FlowId时，是对指定的合同补充多个指定的签署人

4.如果同时指定了<a href="https://qian.tencent.com/developers/companyApis/dataTypes/#fillapproverinfo/" target="_blank">补充签署人结构体</a>中的FlowId和<a href="https://qian.tencent.com/developers/companyApis/operateFlows/CreateFlowApprovers/" target="_blank">补充签署人接口入参</a>中的FlowId，仅使用<a href="https://qian.tencent.com/developers/companyApis/dataTypes/#fillapproverinfo/" target="_blank">补充签署人结构体</a>中的FlowId作为补充的合同

5.如果部分指定了<a href="https://qian.tencent.com/developers/companyApis/dataTypes/#fillapproverinfo/" target="_blank">补充签署人结构体</a>中的FlowId，又指定了<a href="https://qian.tencent.com/developers/companyApis/operateFlows/CreateFlowApprovers/" target="_blank">补充签署人接口入参</a>中的FlowId；那么<a href="https://qian.tencent.com/developers/companyApis/dataTypes/#fillapproverinfo/" target="_blank">补充签署人结构体</a>存在指定的FlowId，则使用<a href="https://qian.tencent.com/developers/companyApis/dataTypes/#fillapproverinfo/" target="_blank">补充签署人结构体</a>中的FlowId，不存在则使用<a href="https://qian.tencent.com/developers/companyApis/operateFlows/CreateFlowApprovers/" target="_blank">补充签署人接口入参</a>中的FlowId作为补充的合同


6.如果同时未指定了<a href="https://qian.tencent.com/developers/companyApis/dataTypes/#fillapproverinfo/" target="_blank">补充签署人结构体</a>中的FlowId和<a href="https://qian.tencent.com/developers/companyApis/operateFlows/CreateFlowApprovers/" target="_blank">补充签署人接口入参</a>中的FlowId，则传参错误。

7.新加入的签署方<font color="red">平台不会发送短信</font>通知。请您生成相应的链接，并将该链接发送给签署方以便完成签署过程。

**限制条件**：

1.本企业（发起方企业）企业微信签署人仅支持通过企业微信UserId或姓名+手机号进行补充。

2.本企业（发起方企业）非企业微信签署人仅支持通过姓名+手机号进行补充。

3.他方企业仅支持通过姓名+手机号进行补充。

4.个人签署人支持通过姓名+手机号进行补充（若<b>个人用户已完成实名</b>，动态签署人合同也可以可通过姓名+证件号码进行补充）


**整体流程如下图：**

![image](https://qcloudimg.tencent-cloud.cn/raw/29a0fba0ceebf9227849459947384862.png)
 * @method Models\CreateFlowBlockchainEvidenceUrlResponse CreateFlowBlockchainEvidenceUrl(Models\CreateFlowBlockchainEvidenceUrlRequest $req) 获取区块链存证证书查看链接/二维码接口

适用场景：企业员工可以通过此接口生成合同区块链存证证书的查看链接/二维码，以供他人扫码打开腾讯电子签小程序查看。

[点击查看区块链存证证书样式](https://qcloudimg.tencent-cloud.cn/raw/47d5e9c2ffa90ad4e27b3cd14095aa08.jpg)

注：
<ul><li>1. 二维码下载链接过期时间为5分钟，请尽快下载保存。二维码/短链的过期时间为<font color="red">7天</font>，超过有效期则不可用。</li>
<li>2. 合同状态需为<font color="red">签署完成</font> 、<font color="red">已解除</font>才能生成证书查看二维码/短链。</li>
<li>3. 调用接口时，需确保接口调用身份拥有此合同的访问数据权限或为合同参与方。</li>
<li>4. 通过扫码或者点击链接，用户无需登录或者鉴权即可查看对应合同的区块链存证证书，请妥善保管好二维码或链接。</li></ul>
 * @method Models\CreateFlowByFilesResponse CreateFlowByFiles(Models\CreateFlowByFilesRequest $req) 此接口（CreateFlowByFiles）用来通过上传后的pdf资源编号来创建待签署的合同流程。<br/>
适用场景：适用非制式的合同文件签署。一般开发者自己有完整的签署文件，可以通过该接口传入完整的PDF文件及流程信息生成待签署的合同流程。<br/>

<table>
	<thead>
		<tr>
			<th>签署人类别</th>
			<th>需要提前准备的信息</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>自己企业的员工签署（未认证加入或已认证加入）</td>
			<td>签署企业的名字、员工的真实名字、员工的触达手机号、员工的证件号（证件号非必传）</td>
		</tr>
		<tr>
			<td>自己企业的员工签署（已认证加入）</td>
			<td>签署企业的名字、员工在电子签平台的ID（UserId）</td>
		</tr>
		<tr>
			<td>其他企业的员工签署</td>
			<td>签署企业的名字、员工的真实名字、员工的触达手机号、员工的证件号（证件号非必传）</td>
		</tr>
		<tr>
			<td>个人（自然人）签署</td>
			<td>个人的真实名字、个人的触达手机号、个人的身份证（证件号非必传）</td>
		</tr>
	</tbody>
</table>



该接口需要依赖[上传文件](https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles)接口生成pdf资源编号（FileIds）进行使用。（如果非pdf文件需要调用[创建文件转换任务](https://qian.tencent.com/developers/companyApis/templatesAndFiles/CreateConvertTaskApi)接口转换成pdf资源）<br/>


![image](https://qcloudimg.tencent-cloud.cn/raw/f097a74b289e3e1acd740936bdfe9843.png)

注：
-  合同**发起后就会扣减合同的额度**, 只有撤销没有参与方签署过或只有自动签署签署过的合同，才会返还合同额度。（**过期，拒签，签署完成，解除完成等状态不会返还额度**）
- **静默（自动）签署不支持合同签署方存在填写**功能


<font color="red">相关视频指引</font> <br>
1. <a href="https://dyn.ess.tencent.cn/guide/apivideo/ess_uploadfiles.mp4" target="_blank">上传用于合同发起的PDF文件代码编写示例</a><br>
2.  <a href="https://dyn.ess.tencent.cn/guide/apivideo/ess-CreateFlowByFiles.mp4" target="_blank">用PDF文件创建签署流程编写示例</a><br>
 * @method Models\CreateFlowEvidenceReportResponse CreateFlowEvidenceReport(Models\CreateFlowEvidenceReportRequest $req) 提交申请出证报告任务并返回报告ID。

出证报告的示例样式可以参考 [出征报告.PDF](https://qcloudimg.tencent-cloud.cn/raw/a55214fcddaebbd1582cc9c57cc6cf1b.pdf)

注意：
<ul><li>使用此功能`需搭配出证套餐` ，使用前请联系对接的客户经理沟通。</li>
<li>操作人必须是`发起方或者签署方企业的(非走授权书认证)法人或者超管`。</li>
<li>合同流程必须所有参与方`已经签署完成`。</li>
<li>出证过程需一定时间，建议在`提交出证任务后的24小时之后`，通过<a href="https://qian.tencent.com/developers/companyApis/certificate/DescribeFlowEvidenceReport" target="_blank">获取出证报告任务执行结果</a>接口进行查询执行结果和出证报告的下载URL。</li></ul>

<svg id="SvgjsSvg1006" width="262" height="229" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"><defs id="SvgjsDefs1007"><pattern patternUnits="userSpaceOnUse" id="pattern_mark_0" width="300" height="300"><text x="150" y="100" fill="rgba(229,229,229,0.8)" font-size="18" transform="rotate(-45, 150, 150)" style="dominant-baseline: middle; text-anchor: middle;"></text></pattern><pattern patternUnits="userSpaceOnUse" id="pattern_mark_1" width="300" height="300"><text x="150" y="200" fill="rgba(229,229,229,0.8)" font-size="18" transform="rotate(-45, 150, 150)" style="dominant-baseline: middle; text-anchor: middle;"></text></pattern><marker id="SvgjsMarker1021" markerWidth="12" markerHeight="8" refX="9" refY="4" viewBox="0 0 12 8" orient="auto" markerUnits="userSpaceOnUse" stroke-dasharray="0,0"><path id="SvgjsPath1022" d="M0,0 L12,4 L0,8 L0,0" fill="#323232" stroke="#323232" stroke-width="1"></path></marker></defs><rect id="svgbackgroundid" width="262" height="229" fill="transparent"></rect><rect id="SvgjsRect1009" width="262" height="229" fill="url(#pattern_mark_0)"></rect><rect id="SvgjsRect1010" width="262" height="229" fill="url(#pattern_mark_1)"></rect><g id="SvgjsG1011" transform="translate(31.75,25)"><path id="SvgjsPath1012" d="M 0 0L 198 0L 198 59L 0 59Z" stroke="rgba(86,146,48,1)" stroke-width="1" fill-opacity="1" fill="#e7ebed"></path><g id="SvgjsG1013"><text id="SvgjsText1014" font-family="微软雅黑" text-anchor="middle" font-size="13px" width="178px" fill="#323232" font-weight="400" align="middle" lineHeight="125%" anchor="middle" family="微软雅黑" size="13px" weight="400" font-style="" opacity="1" y="10.375" transform="rotate(0)"><tspan id="SvgjsTspan1015" dy="16" x="99"><tspan id="SvgjsTspan1016" style="text-decoration:;fill: rgb(28, 30, 33);">CreateFlowEvidenceReport</tspan></tspan><tspan id="SvgjsTspan1017" dy="16" x="99"><tspan id="SvgjsTspan1018" style="text-decoration:;fill: rgb(51, 51, 51);">提交申请出证报告任务</tspan></tspan></text></g></g><g id="SvgjsG1019"><path id="SvgjsPath1020" d="M130.75 84.5L130.75 114.5L130.75 114.5L130.75 143.2" stroke="#323232" stroke-width="1" fill="none" marker-end="url(#SvgjsMarker1021)"></path></g><g id="SvgjsG1023" transform="translate(25,145)"><path id="SvgjsPath1024" d="M 0 0L 211.5 0L 211.5 59L 0 59Z" stroke="rgba(86,146,48,1)" stroke-width="1" fill-opacity="1" fill="#e7ebed"></path><g id="SvgjsG1025"><text id="SvgjsText1026" font-family="微软雅黑" text-anchor="middle" font-size="13px" width="192px" fill="#323232" font-weight="400" align="middle" lineHeight="125%" anchor="middle" family="微软雅黑" size="13px" weight="400" font-style="" opacity="1" y="10.375" transform="rotate(0)"><tspan id="SvgjsTspan1027" dy="16" x="106"><tspan id="SvgjsTspan1028" style="text-decoration:;fill: rgb(28, 30, 33);">DescribeFlowEvidenceReport</tspan></tspan><tspan id="SvgjsTspan1029" dy="16" x="106"><tspan id="SvgjsTspan1030" style="text-decoration:;fill: rgb(51, 51, 51);">获取出证报告任务执行结果</tspan></tspan></text></g></g></svg>
 * @method Models\CreateFlowForwardsResponse CreateFlowForwards(Models\CreateFlowForwardsRequest $req) 该接口用于将合同中本企业当前经办人转为本企业其他员工进行操作。

注意：
1. 转交的目标经办人需要已经加入企业，且完成实名。
2. 仅企业拥有`超管`、`法人`或者`合同管理员`角色的员工才有调用本接口的权限。如果使用主带子方式调用，请确保您已经加入子企业，且账号在子企业中担任任一上述角色。
3. 仅支持当前经办人为待签署或待填写状态时进行转交操作。
4. 若原合同有填写控件，且当前经办人已经完成填写，则不支持进行转交。
5. 若当前经办人已签署完成，或者处于签署流程中，则不支持进行转交。
 * @method Models\CreateFlowGroupByFilesResponse CreateFlowGroupByFiles(Models\CreateFlowGroupByFilesRequest $req) 此接口（CreateFlowGroupByFiles）可用于通过多个文件创建合同组签署流程。使用该接口需要先依赖[多文件上传](https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles)接口返回的FileIds。

- 该接口允许通过PDF资源ID一次性创建多个合同，这些合同被组织在一个合同组中。
- 每个签署方将收到一个签署链接，通过这个链接可以访问并签署合同组中的所有合同。
- 合同组中的合同必须作为一个整体进行签署，不能将合同组拆分成单独的合同进行逐一签署。

<img src="https://qcloudimg.tencent-cloud.cn/raw/a63074a0293c9ff5bf6c0bb74c0d3b20.png"   width="400" />

### 2. 适用场景

该接口适用于需要一次性完成多份合同签署的情况，多份合同一般具有关联性，用户以目录的形式查看合同。


### 3. 合同额度的扣减与返还
- **扣减时机**：合同一旦发起，相关的合同额度就会被扣减，合同组下面的每个合同都要扣减一个合同额度。
- **返还条件**：只有在合同被撤销且没有任何签署方签署过，或者只有自动签署的情况下，合同额度才会被返还。
- **不返还的情况**：如果合同已过期、被拒签、签署完成或已解除，合同额度将不会被返还。

### 4.合同组暂不支持抄送功能
 * @method Models\CreateFlowGroupByTemplatesResponse CreateFlowGroupByTemplates(Models\CreateFlowGroupByTemplatesRequest $req) 此接口（CreateFlowGroupByTemplates）可用于通过多个模板创建合同组签署流程。

- 该接口允许通过选择多个模板一次性创建多个合同，这些合同被组织在一个合同组中。
- 每个签署方将收到一个签署链接，通过这个链接可以访问并签署合同组中的所有合同。
- 合同组中的合同必须作为一个整体进行签署，不能将合同组拆分成单独的合同进行逐一签署。

<img src="https://qcloudimg.tencent-cloud.cn/raw/a63074a0293c9ff5bf6c0bb74c0d3b20.png"   width="400" />

### 2. 适用场景

该接口适用于需要一次性完成多份合同签署的情况，多份合同一般具有关联性，用户以目录的形式查看合同。


### 3. 合同额度的扣减与返还
- **扣减时机**：合同一旦发起，相关的合同额度就会被扣减，合同组下面的每个合同都要扣减一个合同额度。
- **返还条件**：只有在合同被撤销且没有任何签署方签署过，或者只有自动签署的情况下，合同额度才会被返还。
- **不返还的情况**：如果合同已过期、被拒签、签署完成或已解除，合同额度将不会被返还。

### 4.合同组暂不支持抄送功能
 * @method Models\CreateFlowGroupSignReviewResponse CreateFlowGroupSignReview(Models\CreateFlowGroupSignReviewRequest $req) 提交合同组签署流程审批结果的适用场景包括：

1. 在使用[通过多文件创建合同组签署流程](https://qian.tencent.com/developers/companyApis/startFlows/CreateFlowGroupByFiles)或[通过多模板创建合同组签署流程](https://qian.tencent.com/developers/companyApis/startFlows/CreateFlowGroupByTemplates)创建合同组签署流程时，若指定了以下参数 为true，则可以调用此接口提交企业内部签署审批结果。即使是自动签署也需要进行审核通过才会进行签署。
  - [FlowGroupInfo.NeedSignReview](https://qian.tencent.com/developers/companyApis/dataTypes/#flowgroupinfo)
  - [ApproverInfo.ApproverNeedSignReview](https://qian.tencent.com/developers/companyApis/dataTypes/#approverinfo)


2. 同一合同组，同一签署人可以多次提交签署审批结果，签署时的最后一个“审批结果”有效。
 * @method Models\CreateFlowRemindsResponse CreateFlowReminds(Models\CreateFlowRemindsRequest $req) 指定需要批量催办的签署流程ID，批量催办合同，最多100个。需要符合以下条件的合同才可被催办：

1. 发起合同时，**签署人的NotifyType需设置为sms**
2. 合同中当前状态为 **待签署** 的签署人是催办的对象
3. **每个合同只能催办一次**

**催办的效果**: 对方会收到如下的短信通知

![image](https://qcloudimg.tencent-cloud.cn/raw/3caf94b7f540fa5736270d38528d3a7b.png)

注：`合同催办是白名单功能，请联系客户经理申请开白后使用`
 * @method Models\CreateFlowSignReviewResponse CreateFlowSignReview(Models\CreateFlowSignReviewRequest $req) 提交企业流程审批结果 
**当前存在两种审核操作：**
<ul>
<li>签署审核
<ul>
<li>在通过接口<ul>
<li>CreateFlowByFiles</li>
<li>CreateFlow</li>
<li>CreateFlowGroupByTemplates</li>
<li>CreateFlowGroupByFiles</li>
<li>CreatePrepareFlow</li>
</ul> 
发起签署流程时，通过指定NeedSignReview为true，则可以调用此接口，并指定operate=SignReview，以提交企业内部签署审批结果（<font color="red">审核对象：本企业合同参与方的签署动作</font>）</li>
<li>在通过接口
<ul>
<li>CreateFlowByFiles</li>
<li>CreateFlow</li>
<li>CreateFlowGroupByTemplates</li>
<li>CreateFlowGroupByFiles</li>
</ul>
发起签署流程时，通过指定签署人ApproverNeedSignReview为true，则可以调用此接口，并指定operate=SignReview，并指定RecipientId，以提交企业内部签署审批结果（<font color="red">审核对象：本企业、合同企业、自然人合同参与方的签署动作</font>）</li>
</ul>
</li>

对应签署人在签署页面会看到下面的提示：
![image](https://qcloudimg.tencent-cloud.cn/raw/3bf065bf5afa6de862e80da316be1c53.png)

<li>发起审核
 <ul>
<li>通过接口CreatePrepareFlow指定发起后需要审核，那么可以调用此接口，并指定operate=CreateReview，以提交企业内部审批结果。可以多次提交审批结果，但一旦审批通过，后续提交的结果将无效（<font color="red">审核对象：本企业合同发起方的发起动作</font>）
</li>
</ul>

对应发起人在发起合同的最后环节会有<b>提交审批</b>的按钮：

![image](https://qcloudimg.tencent-cloud.cn/raw/cb4857b7b57302fdcbcf37dad31214a8.png)

</li>
</ul>
 * @method Models\CreateFlowSignUrlResponse CreateFlowSignUrl(Models\CreateFlowSignUrlRequest $req) 该接口用于发起合同后，生成用户的签署链接 <br/>

**注意**
1. 该签署**链接有效期为30分钟**，过期后将失效，如需签署可重新创建签署链接 。
2. 该接口返回的签署链接适用于APP集成的场景，支持APP打开或浏览器直接打开，**不支持微信小程序嵌入**。配置方式请参考：<a href="https://qian.tencent.com/developers/company/openqianh5/">跳转电子签H5</a>。
如需跳转到小程序的实现，参考微信官方文档（分为<a href="https://developers.weixin.qq.com/miniprogram/dev/api/navigate/wx.navigateToMiniProgram.html">全屏</a>、<a href="https://developers.weixin.qq.com/miniprogram/dev/framework/open-ability/openEmbeddedMiniProgram.html">半屏</a>两种方式），如何配置也可以请参考: <a href="https://qian.tencent.com/developers/company/openwxminiprogram">跳转电子签小程序配置</a>。
3. 因h5涉及人脸身份认证能力基于慧眼人脸核身，对Android和iOS系统均有一定要求， 因此<font color='red'>App嵌入H5签署合同需要按照慧眼提供的<a href="https://cloud.tencent.com/document/product/1007/61076">慧眼人脸核身兼容性文档</a>做兼容性适配</font>。
4. H5签署现在仅支持中国大陆身份证和中国港澳台居民居住证。
 * @method Models\CreateIntegrationDepartmentResponse CreateIntegrationDepartment(Models\CreateIntegrationDepartmentRequest $req) 此接口（CreateIntegrationDepartment）用于创建企业的部门信息，支持绑定客户系统部门ID。
 * @method Models\CreateIntegrationEmployeesResponse CreateIntegrationEmployees(Models\CreateIntegrationEmployeesRequest $req) 此接口（CreateIntegrationEmployees）用于创建企业员工。创建的员工初始化为未实名，如下图所示。

![image](https://qcloudimg.tencent-cloud.cn/raw/2bdcc0d91ac3146b5e8c28811a78ffe9.png)

支持以下场景
<table>
<tbody>
<tr>
<td>生成端</td>
<td >入参</td>
<td>提醒方式</td>
</tr>
<tr>
<td>普通saas员工</td>
<td>将Employees中的DisplayName设置员工的名字，Mobile设置成员工的手机号</td>
<td>发送短信通知员工（短信中带有认证加入企业的链接）  </td>
</tr>
<tr>
<td>企微员工</td>
<td>将Employees 中的WeworkOpenId字段设置为企微员工明文的openid，需<font color="red">确保该企微员工在应用的可见范围内</font></td>
<td>企微内部实名消息</td>
</tr>
<tr>
<td>H5端 saas员工</td>
<td>传递 InvitationNotifyType = H5，将Employees中的DisplayName设置员工的名字，Mobile设置成员工的手机号，<font color="red">此场景不支持企微</font></td>
<td>生成认证加入企业的H5链接，贵方可以通过自己的渠道触达到此员工</td>
</tr>
</tbody>
</table>
注意：

-  <b> 新增员工的手机号、OpenId不能与已加入员工重复</b>， 不管已加入员工的手机号、OpenId是否已经实名
- <b>若通过手机号发现员工已经创建且信息一致（名字，openId等），则不会重复创建，但会发送短信或者生成链接提醒员工实名。</b>
- jumpUrl 仅支持H5的邀请方式，回跳的url，使用前请联系对接的客户经理沟通，进行域名的配置。



短信的样式

![image](https://qcloudimg.tencent-cloud.cn/raw/b6ad1b79e0adaaa41d282456c72a1ee6.png)
 * @method Models\CreateIntegrationRoleResponse CreateIntegrationRole(Models\CreateIntegrationRoleRequest $req) 此接口（CreateIntegrationRole）用来创建企业自定义的SaaS角色或集团角色。

适用场景1：创建当前企业的自定义SaaS角色或集团角色，并且创建时不进行权限的设置（PermissionGroups 参数不传），角色中的权限内容可通过控制台编辑角色或通过接口 ModifyIntegrationRole 完成更新。

适用场景2：创建当前企业的自定义SaaS角色或集团角色，并且创建时进行权限的设置（PermissionGroups 参数要传），权限树内容 PermissionGroups 可参考接口 DescribeIntegrationRoles 的输出。此处注意权限树内容可能会更新，需尽量拉取最新的权限树内容，并且权限树内容 PermissionGroups 必须是一颗完整的权限树。

适用场景3：创建集团角色时可同时设置角色管理的子企业列表，可通过设置 SubOrganizationIds 参数达到此效果。

适用场景4：主企业代理子企业操作的场景，需要设置Agent参数，并且ProxyOrganizationId设置为子企业的id即可。

注意事项：SaaS角色和集团角色对应的权限树是不一样的。
 * @method Models\CreateIntegrationSubOrganizationActiveRecordResponse CreateIntegrationSubOrganizationActiveRecord(Models\CreateIntegrationSubOrganizationActiveRecordRequest $req) 使用此接口，可创建子企业激活记录。<font color="red">集团企业管理员</font>可以针对尚未激活的成员企业进行激活操作。


这个操作与页面端激活成员企业操作类似
![image](https://qcloudimg.tencent-cloud.cn/raw/c4e76fbac92e4ce451a03601c964793b.png)

注意：
1. 此接口只能用于激活，**不能用于续期**。
2. 在激活子企业时，**请确保子企业的许可证数量充足**。
 * @method Models\CreateIntegrationUserRolesResponse CreateIntegrationUserRoles(Models\CreateIntegrationUserRolesRequest $req) 此接口用于赋予员工指定的角色权限，如需解绑请使用 DeleteIntegrationRoleUsers 接口。
 * @method Models\CreateLegalSealQrCodeResponse CreateLegalSealQrCode(Models\CreateLegalSealQrCodeRequest $req) 该接口用于获取创建法人章的二维码，需要通过微信扫描。扫描后将跳转到腾讯电子签署，进入到创建法人章的流程。

**注意**
1. 该二维码**有效期为7天**，过期后将失效，可重新创建 。
2. 每个公司**只能有1个法人章**，无法重复创建或者创建多个

法人章的样式可以参考下图索引（也可以自己上传法人印章图片）：

![image](https://qcloudimg.tencent-cloud.cn/raw/36a0a090750c45bb5cac5047ac461b2c.png)
 * @method Models\CreateMiniAppPrepareFlowResponse CreateMiniAppPrepareFlow(Models\CreateMiniAppPrepareFlowRequest $req) 创建小程序发起流程链接，在小程序页面上完成签署人等信息的编辑与确认后，可快速发起流程。
 <br/>
适用场景：如果需要签署人在自己的APP、小程序、H5应用中发起合同，可在收集合同信息，签署人等信息后（非必选），通过此接口获取跳转腾讯电子签小程序的合同发起跳转链接，跳转到腾讯电子签小程序继续合同的发起。

跳转到小程序的实现，参考微信官方文档（分为<a href="https://developers.weixin.qq.com/miniprogram/dev/api/navigate/wx.navigateToMiniProgram.html">全屏</a>、<a href="https://developers.weixin.qq.com/miniprogram/dev/framework/open-ability/openEmbeddedMiniProgram.html">半屏</a>两种方式），如何配置也可以请参考: <a href="https://qian.tencent.com/developers/company/openwxminiprogram">跳转电子签小程序配置</a>

注：
<ul>
<li>1. 签署链接的有效期为<font color="red">90天</font>，超过有效期链接不可用</li>
<li>2. <font color="red">生成的链路后面不能再增加参数</font>（会出现覆盖链接中已有参数导致错误）</li>
 <li>3. 调用接口后，<font color="red">流程不会立即发起，需使用链接跳转到小程序上继续发起流程操作</font>。</li>
<li>4. <font color="red">使用链接成功发起一份合同后，链接立即失效</font></li>
</ul>

其中小程序的原始Id如下，或者查看小程序信息自助获取。

| 小程序 | AppID | 原始ID |
| ------------ | ------------ | ------------ |
| 腾讯电子签（正式版） | wxa023b292fd19d41d | gh_da88f6188665 |
| 腾讯电子签Demo | wx371151823f6f3edf | gh_39a5d3de69fa |
 * @method Models\CreateModifyAdminAuthorizationUrlResponse CreateModifyAdminAuthorizationUrl(Models\CreateModifyAdminAuthorizationUrlRequest $req) 本接口（CreateModifyAdminAuthorizationUrl）用于重新上传超管授权书。

注意:
1. 重新上传超管授权书，必须是审核失败的情况下才能重新上传,可以通过回调[!授权书认证审核结果回调](https://qian.tencent.com/developers/company/callback_types_staffs#%E5%8D%81%E5%85%AD-%E6%8E%88%E6%9D%83%E4%B9%A6%E8%AE%A4%E8%AF%81%E5%AE%A1%E6%A0%B8%E7%BB%93%E6%9E%9C%E5%9B%9E%E8%B0%83)得到
 * @method Models\CreateMultiFlowSignQRCodeResponse CreateMultiFlowSignQRCode(Models\CreateMultiFlowSignQRCodeRequest $req) 此接口（CreateMultiFlowSignQRCode）用于创建一码多签签署码。

**适用场景**:
签署人可通过扫描二维码补充签署信息进行实名签署。常用于提前不知道签署人的身份信息场景，例如：劳务工招工、大批量员工入职等场景。

**注意**:
1.满足以下条件的模板支持创建签署码： 
 - 签署对象：企业与个人（无序签署）、企业与个人（顺序签署&企业非首位）、 仅个人签署。
 - 其发起方没有填写控件,签署方（B端或C端）可以有填写控件。 
 - 如签署对象中含企业方，企业方签署区只能由发起方企业签署。

2. 通过一码多签签署码发起的合同，合同涉及到的回调消息可参考文档[合同发起及签署相关回调
]( https://qian.tencent.com/developers/company/callback_types_contracts_sign)
3. 用户通过一码多签签署码发起合同时，因企业额度不足导致失败 会触发签署二维码相关回调,具体参考文档[签署二维码相关回调](https://qian.tencent.com/developers/company/callback_types_commons#%E7%AD%BE%E7%BD%B2%E4%BA%8C%E7%BB%B4%E7%A0%81%E7%9B%B8%E5%85%B3%E5%9B%9E%E8%B0%83)

签署码的样式如下图:

![image](https://qcloudimg.tencent-cloud.cn/raw/27317cf5aacb094fb1dc6f94179a5148.png )
 * @method Models\CreateOrganizationAuthFileResponse CreateOrganizationAuthFile(Models\CreateOrganizationAuthFileRequest $req) 生成合成后的各类企业授权书，包括：
- 企业认证超管授权书
- 超管变更授权书
- 企业注销授权书

注: 需自行保证传入真实的企业/法人/超管信息，否则后续的审核将会拒绝。
 * @method Models\CreateOrganizationAuthUrlResponse CreateOrganizationAuthUrl(Models\CreateOrganizationAuthUrlRequest $req) 本接口（CreateOrganizationAuthUrl）的主要功能是生成合作企业的认证链接。

在生成链接的过程中，可以提供一部分已知信息，以便为对方进行认证流程提供便利。

![image](https://qcloudimg.tencent-cloud.cn/raw/7ec91b79a0a4860e77c9ff9f4a5f13ad/channel_SyncProxyOrganization2.png)


- **企业统一社会信用代码**: 对应上图中的**1**
- **企业名称**: 对应上图中的**2**
- **企业法定代表人的名字**:对应上图中的**3**
- **企业详细住所**:对应上图中的**4**




<b>注</b>：此接口需要 <font  color="red"><b>购买单独的实名套餐包</b></font>方可调用，如有需求请联系对接人员评估
 * @method Models\CreateOrganizationBatchSignUrlResponse CreateOrganizationBatchSignUrl(Models\CreateOrganizationBatchSignUrlRequest $req) 使用此接口，您可以创建企业批量签署链接，员工只需点击链接即可跳转至控制台进行批量签署。<br/>

注：
<ul>
<li>员工必须需作为批量签署合同的签署方，或者是或签合同的候选人之一。</li>
<li><b>本方企业签署链接</b>：如有UserId，应以UserId为主要标识；如果没有UserId，则必须填写Name和Mobile信息。</li>
<li><b>他方企业签署链接</b>：传RecipientIds，且必须是合同发起方调用此接口。打开链接后需要他方签署人登录电子签系统。（<b>如果签署人没有加入对方企业则会引导加入；如果对方企业还没有注册认证，会引导企业注册和认证</b>）</li>
<li>只支持待签署、待填写状态的合同生成签署链接。</li>
</ul>

签署的嵌入页面长相如下：
![image](https://qcloudimg.tencent-cloud.cn/raw/a4754bc835a3f837ddec1e28b02ed9c0.png)
 * @method Models\CreateOrganizationGroupInvitationLinkResponse CreateOrganizationGroupInvitationLink(Models\CreateOrganizationGroupInvitationLinkRequest $req) 生成集团加入链接，分享至子企业超管或者法人，子企业管理员可通过链接加入集团。
注意:调用当前接口的企业 必须为集团企业。如何成为集团企业可以参考下面的文档[集团操作文档](https://qian.tencent.com/document/86707)
 * @method Models\CreateOrganizationInfoChangeUrlResponse CreateOrganizationInfoChangeUrl(Models\CreateOrganizationInfoChangeUrlRequest $req) 此接口（CreateOrganizationInfoChangeUrl）用于创建企业信息变更链接，支持创建企业超管变更链接或企业基础信息变更链接，通过入参ChangeType指定。

 需要企业的<font color="red">现有的超级管理员、法人来点击</font>链接执行变动操作。

### 2. 企业基础信息
#### A. 可变动的信息
- **企业名称**
- **法定代表人姓名**（新法人将收到邀请链接）
- **企业地址和所在地**
- **企业超级管理员变更** （此变更将企业超级管理员的职责转移给企业的其他员工）

#### B. 不可变动的信息
- **统一社会信用代码**
- **企业主体类型**

### 3.变更影响

如果企业的名字变更将导致下面的影响：

- **合同**：已存在的合同将保持不变。新发起的合同需使用新的企业名称作为签署方，否则无法签署。
- **印章**：所有现有的机构公章和合同专用章将被删除，并将根据新的企业名称重新生成。法人章、财务专用章和人事专用章将不做处理。
- **证书**：企业证书将重新由CA机构使用新的企业名称生成。
 * @method Models\CreatePartnerAutoSignAuthUrlResponse CreatePartnerAutoSignAuthUrl(Models\CreatePartnerAutoSignAuthUrlRequest $req) 创建一个用于他方自动签授权的链接（可选择他方授权或我方授权）。通过这个链接，合作方企业可以直接进入小程序，进行自动签授权操作。

如果授权企业尚未开通企业自动签功能，该链接还将引导他们首先开通本企业的自动签服务

注: 
1. <font color='red'>所在企业的超管、法人才有权限调用此接口</font>(Operator.UserId 需要传递超管或者法人的UserId)
2. 已经在授权中或者授权成功的企业，无法重复授权
3. 授权企业和被授权企业必须都是已认证企业
4. <font color='red'>需要授权企业或被授权企业的超管或者法人打开链接</font>走开通逻辑。


**该接口效果同控制台： 企业设置-> 扩展服务 -> 企业自动签署 -> 合作企业方授权**
![image](https://qcloudimg.tencent-cloud.cn/raw/489aa0bf74941469b5e740f428f17c3a.png)
 * @method Models\CreatePersonAuthCertificateImageResponse CreatePersonAuthCertificateImage(Models\CreatePersonAuthCertificateImageRequest $req) 获取个人用户认证证书图片下载URL

个人用户认证证书图片样式如下图

![image](https://dyn.ess.tencent.cn/guide/capi/CreatePersonAuthCertificateImage.png)

注:  
<ul>
<li>只能获取个人用户证明图片, 企业员工的暂不支持</li>
<li>专为电子处方单（医疗自动签）特定场景使用。在使用前，请务必与您的客户经理联系以确认已经开通电子处方单功能 </li>
</ul>
 * @method Models\CreatePrepareFlowResponse CreatePrepareFlow(Models\CreatePrepareFlowRequest $req) 创建发起流程Web页面，通过该接口可以获取发起流程的可嵌入web页面的URL（此web页面可以通过iframe方式嵌入到贵方系统的网页中）。在页面上完成签署控件等信息的编辑与确认后，可快速发起流程。

 <br/>注意：调用接口后，<font color="red">流程不会立即发起，需在嵌入页面上点击【发起合同】按钮来发起流程</font>。

嵌入页面长相如下:
![image](https://qcloudimg.tencent-cloud.cn/raw/b2ae013fb4d747891dd3815bbe897208.png)
 * @method Models\CreatePrepareFlowGroupResponse CreatePrepareFlowGroup(Models\CreatePrepareFlowGroupRequest $req) 接口（CreatePrepareFlowGroup）用于创建嵌入式合同组签署流程。

- 该接口当前仅支持文件发起
- 该接口能力和CreateFlowGroupByFiles，~~CreateFlowGroupByTemplates~~保持一致。
- 返回的FlowGroupId 为临时id，只有在页面内成功发起后FlowGroupId才会有效。
 * @method Models\CreatePreparedPersonalEsignResponse CreatePreparedPersonalEsign(Models\CreatePreparedPersonalEsignRequest $req) 本接口（CreatePreparedPersonalEsign）用于创建导入个人印章（处方单场景专用，使用此接口请与客户经理确认）。
 * @method Models\CreateReleaseFlowResponse CreateReleaseFlow(Models\CreateReleaseFlowRequest $req) 发起解除协议的主要应用场景为：基于一份已经签署的合同（签署流程），进行解除操作。
解除协议的模板是官方提供 ，经过提供法务审核，暂不支持自定义。具体用法可以参考文档[合同解除](https://qian.tencent.com/developers/company/flow_release)。

注意：
<ul>
<li><strong>完成原合同签署后方可发起解除协议：</strong>只有在原合同所有签署人完成签署后，才可以启动解除协议的流程。</li>
<li><strong>原合同状态更新：</strong>解除协议一旦签署完毕，原合同状态将更新为“已解除”。</li>
<li><strong>解除协议的个人参与要求：</strong>原合同中的个人参与者必须直接参与解除协议，禁止替换为其他第三方个人。</li>
<li><strong>企业参与人的代理权：</strong>若原合同的企业参与人无法亲自参与解除协议，可指派具有等同权限的企业员工代行。</li>
<li><strong>解除协议的费用问题：</strong>发起解除协议将产生费用，其扣费标准与其他企业合同相同。</li>
<li><strong>解除协议的发起资格：</strong>仅限原合同中的企业类型参与者发起解除协议，个人参与者无此权限。</li>
<li><strong>非原合同企业参与者的权限：</strong>非原合同的企业参与者发起解除协议时，必须具备相应的解除权限。</li>
<li><strong>自动签署：</strong>支持本企业的自动签署，不支持其他企业的自动签署（不能不动声色的把别人参与的合同作废了）</li>
</ul>

![image](https://qcloudimg.tencent-cloud.cn/raw/3427941ecb091bf0c55009bad192dd1c.png)
 * @method Models\CreateSchemeUrlResponse CreateSchemeUrl(Models\CreateSchemeUrlRequest $req) 获取跳转至腾讯电子签小程序的签署链接

适用场景：如果需要签署人在自己的APP、小程序、H5应用中签署，可以通过此接口获取跳转腾讯电子签小程序的签署跳转链接。

跳转到小程序的实现，参考微信官方文档（分为<a href="https://developers.weixin.qq.com/miniprogram/dev/api/navigate/wx.navigateToMiniProgram.html">全屏</a>、<a href="https://developers.weixin.qq.com/miniprogram/dev/framework/open-ability/openEmbeddedMiniProgram.html">半屏</a>两种方式），如何配置也可以请参考: <a href="https://qian.tencent.com/developers/company/openwxminiprogram">跳转电子签小程序配置</a>

注：
<ul><li>1. 如果签署人是在PC端扫码签署，可以通过生成跳转链接自主转换成二维码，让签署人在PC端扫码签署</li>
<li>2. 签署链接的有效期为<font color="red">90天</font>，超过有效期链接不可用</li>
<li>3. 如果需跳转详情页（即PathType值为1）进行填写或签署合同，需指定签署方信息:姓名、手机号码、企业名称等，才能生成正确的跳转链接</li>
<li>4. <font color="red">生成的链路后面不能再增加参数</font>（会出现覆盖链接中已有参数导致错误）</li></ul>

其中小程序的原始Id如下，或者查看小程序信息自助获取。

| 小程序 | AppID | 原始ID |
| ------------ | ------------ | ------------ |
| 腾讯电子签（正式版） | wxa023b292fd19d41d | gh_da88f6188665 |
| 腾讯电子签Demo | wx371151823f6f3edf | gh_39a5d3de69fa |
 * @method Models\CreateSealResponse CreateSeal(Models\CreateSealRequest $req) 本接口（CreateSeal）用于创建企业电子印章，支持创建企业公章，合同章，财务专用章和人事专用章创建。

1. 可以**通过图片**创建印章，图片最大5MB
2. 可以**系统创建**创建印章, 系统创建的印章样子下图(样式可以调整)

![image](https://dyn.ess.tencent.cn/guide/capi/CreateSealByImage.png)
 * @method Models\CreateSealPolicyResponse CreateSealPolicy(Models\CreateSealPolicyRequest $req) 本接口（CreateSealPolicy）用于对企业员工进行印章授权
 * @method Models\CreateUserAutoSignEnableUrlResponse CreateUserAutoSignEnableUrl(Models\CreateUserAutoSignEnableUrlRequest $req) 获取个人用户自动签的开通链接。

注意: `处方单等特殊场景专用，此接口为白名单功能，使用前请联系对接的客户经理沟通。`
 * @method Models\CreateUserAutoSignSealUrlResponse CreateUserAutoSignSealUrl(Models\CreateUserAutoSignSealUrlRequest $req) 获取设置自动签印章小程序链接。

注意：
<ul><li>需要<code>企业开通自动签</code>后使用。</li>
<li>仅支持<code>已经开通了自动签的个人</code>更换自动签印章。</li>
<li>链接有效期默认7天，<code>最多30天</code>。</li>
<li>该接口的链接适用于<code>小程序</code>端。</li>
<li>该接口不会扣除您的合同套餐，暂不参与计费。</li></ul>
 * @method Models\CreateUserMobileChangeUrlResponse CreateUserMobileChangeUrl(Models\CreateUserMobileChangeUrlRequest $req) 该接口会生成一个手机号变更的链接，用户可以通过该链接进入电子签系统进行手机号的变更。
该接口支持员工和个人端手机号的变更。
 * @method Models\CreateUserNameChangeUrlResponse CreateUserNameChangeUrl(Models\CreateUserNameChangeUrlRequest $req) 生成个人用户实名更名链接，个人用户点击此链接进入更名流程（若用户未完成实名认证，则直接进入实名页面实名后再进行更名）。此链接为通用链接，任何点击生成链接的用户将会被引导至小程序个人更名页面完成更名。

注： 调用此接口需要购买<font color="red"><b>单独的实名套餐包</b></font>。使用前请联系对接的客户经理沟通。
 * @method Models\CreateUserVerifyUrlResponse CreateUserVerifyUrl(Models\CreateUserVerifyUrlRequest $req) 生成个人用户实名认证链接，个人用户点击此链接进入实名流程（若用户已完成实名认证，则直接进入成功页面）。用户点击此接口生成的链接完成实名认证后，其数据将通过[企业引导个人实名认证后回调](https://qian.tencent.com/developers/company/callback_types_staffs/#%E5%8D%81%E4%BA%8C-%E4%BC%81%E4%B8%9A%E5%BC%95%E5%AF%BC%E4%B8%AA%E4%BA%BA%E5%AE%9E%E5%90%8D%E8%AE%A4%E8%AF%81%E5%90%8E%E5%9B%9E%E8%B0%83)返回

注： 调用此接口需要购买<font color="red"><b>单独的实名套餐包</b></font>。使用前请联系对接的客户经理沟通。
 * @method Models\CreateWebThemeConfigResponse CreateWebThemeConfig(Models\CreateWebThemeConfigRequest $req) 用来设置本企业嵌入式页面个性化主题配置（例如是否展示电子签logo、定义主题色等），设置后获取的web签署界面都会使用此配置进行展示。

如果多次调用，会以最后一次的配置为准
 * @method Models\DeleteExtendedServiceAuthInfosResponse DeleteExtendedServiceAuthInfos(Models\DeleteExtendedServiceAuthInfosRequest $req) 删除企业扩展服务授权，当前仅支持 “企业自动签” 和“批量签署”  的取消授权。
该接口作用和电子签控制台 企业设置-扩展服务-企业自动签署和批量签署授权 两个模块功能相同，可通过该接口取消企业员工授权。

注：支持集团代子企业操作，请联系运营开通此功能。
 * @method Models\DeleteIntegrationDepartmentResponse DeleteIntegrationDepartment(Models\DeleteIntegrationDepartmentRequest $req) 此接口（DeleteIntegrationDepartment）用于删除企业的部门信息。
 * @method Models\DeleteIntegrationEmployeesResponse DeleteIntegrationEmployees(Models\DeleteIntegrationEmployeesRequest $req) 该接口（DeleteIntegrationEmployees）用于离职本企业员工，同时可选择是否进行离职交接。


- 如果该员工没有未处理的合同，可不设置交接人的ReceiveUserId或ReceiveOpenId进行离职操作。
- 如果该员工有未处理的合同，需要设置ReceiveUserId或ReceiveOpenId表示交接的负责人，交接后员工会进行离职操作。

未处理的合同包括以下：

- 待签署的合同（包括顺序签署还没有轮到的合同，此类合同某些情况可能不会出现在用户的列表中）。
- 待填写的合同。
- 待解除的合同等。

注：
1. <font color="red">超管或法人身份的员工不能被离职</font>， 需要在控制台或小程序更换法人和超管后进行离职删除。
2. <font color="red">员工存在待处理合同时必须交接</font>后才能离职无人交接时不能被离职删除。
3. 未实名的员工可以直接离职，不用交接合同
 * @method Models\DeleteIntegrationRoleUsersResponse DeleteIntegrationRoleUsers(Models\DeleteIntegrationRoleUsersRequest $req) 解绑员工与对应角色的关系，如需绑定请使用 CreateIntegrationUserRoles 接口。
 * @method Models\DeleteOrganizationAuthorizationsResponse DeleteOrganizationAuthorizations(Models\DeleteOrganizationAuthorizationsRequest $req) 批量清理未认证的企业认证流程。

此接口用来清除企业方认证信息填写错误，批量清理认证中的认证流信息。
为接口[创建企业批量认证链接](https://qian.tencent.com/developers/companyApis/organizations/CreateBatchOrganizationRegistrationTasks) 和[查询企业批量认证链接](https://qian.tencent.com/developers/companyApis/organizations/DescribeBatchOrganizationRegistrationUrls) 接口的扩展接口。即在批量认证过程中，当发起认证企业发现超管信息错误的时候，可以将当前超管下的所有认证流企业清除。

注意：
**这个接口的操作人必须跟生成批量认证链接接口的操作人一致，才可以调用，否则会返回当前操作人没有认证中的企业认证流**
 * @method Models\DeleteSealPoliciesResponse DeleteSealPolicies(Models\DeleteSealPoliciesRequest $req) 本接口（DeleteSealPolicies）用于撤销企业员工持有的印章权限
 * @method Models\DescribeBatchOrganizationRegistrationTasksResponse DescribeBatchOrganizationRegistrationTasks(Models\DescribeBatchOrganizationRegistrationTasksRequest $req) 本接口（DescribeBatchOrganizationRegistrationTasks）用于查询企业批量认证任务状态。
 * @method Models\DescribeBatchOrganizationRegistrationUrlsResponse DescribeBatchOrganizationRegistrationUrls(Models\DescribeBatchOrganizationRegistrationUrlsRequest $req) 此接口用于获取企业批量认证异步任务的状态及结果。

前提条件：已调用 CreateBatchOrganizationRegistrationTasks创建企业批量认证链接任务接口，并得到了任务Id。

异步任务的处理完成时间视当前已提交的任务量、任务的复杂程度等因素决定，正常情况下 3~5 秒即可完成，但也可能需要更长的时间
 * @method Models\DescribeBillUsageResponse DescribeBillUsage(Models\DescribeBillUsageRequest $req) 通过此接口（DescribeBillUsage）查询该企业的套餐套餐使用情况。
 * @method Models\DescribeBillUsageDetailResponse DescribeBillUsageDetail(Models\DescribeBillUsageDetailRequest $req) 通过此接口（DescribeBillUsageDetail）查询该企业的套餐消耗详情。
 * @method Models\DescribeCancelFlowsTaskResponse DescribeCancelFlowsTask(Models\DescribeCancelFlowsTaskRequest $req) 通过[获取批量撤销签署流程腾讯电子签小程序链接](https://qian.tencent.com/developers/companyApis/operateFlows/CreateBatchCancelFlowUrl)发起批量撤销任务后，可通过此接口查询批量撤销任务的结果。
 * @method Models\DescribeContractDiffTaskWebUrlResponse DescribeContractDiffTaskWebUrl(Models\DescribeContractDiffTaskWebUrlRequest $req) 接口（DescribeContractDiffTaskWebUrl）用于获取合同对比结果可嵌入的web页面链接（此web页面可以通过iframe方式嵌入到贵方系统的网页中）。
注：本接口生成的web页面暂不支持<a href="https://qian.tencent.com/developers/companyApis/embedPages/CreateWebThemeConfig" target="_blank">设置本企业嵌入式页面主题配置</a>

嵌入页面长相如下：
![image](https://qcloudimg.tencent-cloud.cn/raw/c68047feddbc106e261870687b6ab89d.jpg)
 * @method Models\DescribeContractReviewTaskResponse DescribeContractReviewTask(Models\DescribeContractReviewTaskRequest $req) 本接口（DescribeContractReviewTask）用于获取合同审查任务详情，包括任务的状态和识别出的风险信息。
 * @method Models\DescribeExtendedServiceAuthDetailResponse DescribeExtendedServiceAuthDetail(Models\DescribeExtendedServiceAuthDetailRequest $req) 查询企业扩展服务的授权详情（列表），当前支持查询以下内容：
1. 企业自动签（本企业授权、集团企业授权、合作企业授权）
2. 批量签署能力


注: <font color='red'>所在企业的超管、法人才有权限调用此接口</font>(Agent.ProxyOperator.OpenId 需要传递超管或者法人的OpenId)
 * @method Models\DescribeExtendedServiceAuthInfosResponse DescribeExtendedServiceAuthInfos(Models\DescribeExtendedServiceAuthInfosRequest $req) 查询企业扩展服务的开通和授权情况，当前支持查询以下内容：

1. **企业自动签署**
2. **批量签署授权**
3. **企业与港澳台居民签署合同**
4. **拓宽签署方年龄限制**
5. **个人签署方仅校验手机号**
6. **隐藏合同经办人姓名**
7. **正楷临摹签名失败后更换其他签名类型**
8. **短信通知签署方**
9. **个人签署方手写签名时需逐个手写**
10. **签署密码开通引导**
11. **个人签署方手动签名**
12. **限制企业员工小程序端登录**
13. **限制企业员工网页端登录**


对应能力开通页面在Web控制台-更多-企业设置-拓展服务，如下图所示:

![image](https://qcloudimg.tencent-cloud.cn/raw/7d79746ecca1c5fe878a2ec36ed69c23.jpg)

注: <font color='red'>所在企业的超管、法人才有权限调用此接口</font>(Operator.UserId需要传递超管或者法人的UserId)
 * @method Models\DescribeFileCounterSignResultResponse DescribeFileCounterSignResult(Models\DescribeFileCounterSignResultRequest $req) 文件CA加签任务结果查询接口，用于查询 CreateFileCounterSign接口 发起的异步加签任务。

注意：`此接口为『数字文件CA加签服务』白名单功能，使用前请联系对接的客户经理沟通。`
 * @method Models\DescribeFileUrlsResponse DescribeFileUrls(Models\DescribeFileUrlsRequest $req) 本接口（DescribeFileUrls）用于查询文件的下载URL。
适用场景：通过传参合同流程编号，下载对应的合同PDF文件流到本地。


### 2. 确保合同的PDF已经合成后，再调用本接口。

用户创建合同或者提交签署动作后，后台需要1~3秒的时间就进行合同PDF合成或者签名，为了确保您下载的是签署完成的完整合同文件，我们建议采取下面两种方式的一种来<font color="red"><b>确保PDF已经合成完成，然后在调用本接口</b></font>。

**第一种**：请确保您的系统配置了[接收合同完成通知的回调](https://qian.tencent.com/developers/company/callback_types_contracts_sign)功能。一旦所有参与方签署完毕，我们的系统将自动向您提供的回调地址发送完成通知。

**第二种**：通过调用我们的[获取合同信息](https://qian.tencent.com/developers/companyApis/queryFlows/DescribeFlowBriefs)接口来主动检查合同的签署状态。请仅在确认合同状态为“签署完成”后，进行文件的下载操作。

### 3.  链接具有有效期限
<font color="red"><b>生成的链接是有时间限制的，过期后将无法访问</b></font>。您可以在接口返回的信息中查看具体的过期时间。为避免错误，请确保在链接过期之前进行下载操作。
 * @method Models\DescribeFlowBriefsResponse DescribeFlowBriefs(Models\DescribeFlowBriefsRequest $req) 查询流程基础信息，主要用于<font color="red">查询合同的状态</font>信息。可以配合回调通知使用。

注: `每个企业限制日调用量限制：100W，当日超过此限制后再调用接口返回错误`
 * @method Models\DescribeFlowComponentsResponse DescribeFlowComponents(Models\DescribeFlowComponentsRequest $req) 您可以通过合同流程ID查询相关的<font color="red"><b>填写控件</b></font>信息及其内容。这包括控件的归属方、控件的填写状态（是否已填写）以及具体的填写内容。

无论是发起方还是签署方填写的控件，均包含在查询结果中。

![image](https://qcloudimg.tencent-cloud.cn/raw/08f6ea50d3ae88b51c280c2b17c2a126.png)


### 2.  那些控件会出现在结果里边？ 
**A.不返回的控件类型：**
- 动态表格
- 附件控件
- 水印控件

**B.返回的控件类型：**
- 单行文本
- 多行文本
- 勾选框控件
- 数字控件
- 日期控件
- 图片控件（图片下载地址）
- 邮箱控件
- 地址控件
- 学历控件
- 性别控件
- 省市区控件
 * @method Models\DescribeFlowEvidenceReportResponse DescribeFlowEvidenceReport(Models\DescribeFlowEvidenceReportRequest $req) 获取出证报告任务执行结果，返回报告 URL。



注意：
<ul><li>使用此功能`需搭配出证套餐` ，使用前请联系对接的客户经理沟通。</li>
<li>需调用创建并返回出证报告接口<a href="https://qian.tencent.com/developers/companyApis/certificate/CreateFlowEvidenceReport" target="_blank">提交申请出证报告任务</a>获取报告编号后调用当前接口获取报告链接。</li></ul>

<svg id="SvgjsSvg1006" width="262" height="229" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"><defs id="SvgjsDefs1007"><pattern patternUnits="userSpaceOnUse" id="pattern_mark_0" width="300" height="300"><text x="150" y="100" fill="rgba(229,229,229,0.8)" font-size="18" transform="rotate(-45, 150, 150)" style="dominant-baseline: middle; text-anchor: middle;"></text></pattern><pattern patternUnits="userSpaceOnUse" id="pattern_mark_1" width="300" height="300"><text x="150" y="200" fill="rgba(229,229,229,0.8)" font-size="18" transform="rotate(-45, 150, 150)" style="dominant-baseline: middle; text-anchor: middle;"></text></pattern><marker id="SvgjsMarker1021" markerWidth="12" markerHeight="8" refX="9" refY="4" viewBox="0 0 12 8" orient="auto" markerUnits="userSpaceOnUse" stroke-dasharray="0,0"><path id="SvgjsPath1022" d="M0,0 L12,4 L0,8 L0,0" fill="#323232" stroke="#323232" stroke-width="1"></path></marker></defs><rect id="svgbackgroundid" width="262" height="229" fill="transparent"></rect><rect id="SvgjsRect1009" width="262" height="229" fill="url(#pattern_mark_0)"></rect><rect id="SvgjsRect1010" width="262" height="229" fill="url(#pattern_mark_1)"></rect><g id="SvgjsG1011" transform="translate(31.75,25)"><path id="SvgjsPath1012" d="M 0 0L 198 0L 198 59L 0 59Z" stroke="rgba(86,146,48,1)" stroke-width="1" fill-opacity="1" fill="#e7ebed"></path><g id="SvgjsG1013"><text id="SvgjsText1014" font-family="微软雅黑" text-anchor="middle" font-size="13px" width="178px" fill="#323232" font-weight="400" align="middle" lineHeight="125%" anchor="middle" family="微软雅黑" size="13px" weight="400" font-style="" opacity="1" y="10.375" transform="rotate(0)"><tspan id="SvgjsTspan1015" dy="16" x="99"><tspan id="SvgjsTspan1016" style="text-decoration:;fill: rgb(28, 30, 33);">CreateFlowEvidenceReport</tspan></tspan><tspan id="SvgjsTspan1017" dy="16" x="99"><tspan id="SvgjsTspan1018" style="text-decoration:;fill: rgb(51, 51, 51);">提交申请出证报告任务</tspan></tspan></text></g></g><g id="SvgjsG1019"><path id="SvgjsPath1020" d="M130.75 84.5L130.75 114.5L130.75 114.5L130.75 143.2" stroke="#323232" stroke-width="1" fill="none" marker-end="url(#SvgjsMarker1021)"></path></g><g id="SvgjsG1023" transform="translate(25,145)"><path id="SvgjsPath1024" d="M 0 0L 211.5 0L 211.5 59L 0 59Z" stroke="rgba(86,146,48,1)" stroke-width="1" fill-opacity="1" fill="#e7ebed"></path><g id="SvgjsG1025"><text id="SvgjsText1026" font-family="微软雅黑" text-anchor="middle" font-size="13px" width="192px" fill="#323232" font-weight="400" align="middle" lineHeight="125%" anchor="middle" family="微软雅黑" size="13px" weight="400" font-style="" opacity="1" y="10.375" transform="rotate(0)"><tspan id="SvgjsTspan1027" dy="16" x="106"><tspan id="SvgjsTspan1028" style="text-decoration:;fill: rgb(28, 30, 33);">DescribeFlowEvidenceReport</tspan></tspan><tspan id="SvgjsTspan1029" dy="16" x="106"><tspan id="SvgjsTspan1030" style="text-decoration:;fill: rgb(51, 51, 51);">获取出证报告任务执行结果</tspan></tspan></text></g></g></svg>
 * @method Models\DescribeFlowInfoResponse DescribeFlowInfo(Models\DescribeFlowInfoRequest $req) 此接口用于查询合同流程的详情信息，支持查询多个（数量不能超过100）。

适用场景：可用于主动查询某个合同详情信息。
 * @method Models\DescribeFlowTemplatesResponse DescribeFlowTemplates(Models\DescribeFlowTemplatesRequest $req) 此接口（DescribeFlowTemplates）用于查询本企业模板列表信息。


**适用场景**
该接口常用来配合<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateDocument" target="_blank">模板发起合同-创建电子文档</a>接口，作为创建电子文档的前置接口使用。
通过此接口查询到模板信息后，再通过调用创建电子文档接口，指定模板ID，指定模板中需要的填写控件内容等，完成电子文档的创建。

**一个模板通常会包含以下结构信息** 

- 模板模板ID, 模板名字等基本信息
- 发起方参与信息Promoter、签署参与方 Recipients，后者会在模板发起合同时用于指定参与方
- 发起方和签署方的填写控件 Components
- 签署方的签署控件 SignComponents

![image](https://qcloudimg.tencent-cloud.cn/raw/ab81fa948a0a6fea14f48cac91d0e36a/channel_DescribeTemplates.png)

模板中各元素的层级关系, 所有的填写控件和签署控件都归属某一个角色(通过控件的ComponentRecipientId来关联)
![image](https://qcloudimg.tencent-cloud.cn/raw/45c638bd93f9c8024763add9ab47c27f.png)
 * @method Models\DescribeInformationExtractionTaskResponse DescribeInformationExtractionTask(Models\DescribeInformationExtractionTaskRequest $req) 本接口（DescribeInformationExtractionTask）用于获取合同智能提取任务详情，包括任务的状态和提取的字段结果信息。
 * @method Models\DescribeIntegrationDepartmentsResponse DescribeIntegrationDepartments(Models\DescribeIntegrationDepartmentsRequest $req) 此接口（DescribeIntegrationDepartments）用于查询企业的部门信息列表，支持查询单个部门节点或单个部门节点及一级子节点部门列表。
 * @method Models\DescribeIntegrationEmployeesResponse DescribeIntegrationEmployees(Models\DescribeIntegrationEmployeesRequest $req) 此接口（DescribeIntegrationEmployees）用于分页查询企业员工信息列表，支持设置过滤条件以筛选员工查询结果。
 * @method Models\DescribeIntegrationRolesResponse DescribeIntegrationRoles(Models\DescribeIntegrationRolesRequest $req) 此接口（DescribeIntegrationRoles）用于分页查询企业角色列表，列表按照角色创建时间升序排列。
 * @method Models\DescribeOrganizationAuthStatusResponse DescribeOrganizationAuthStatus(Models\DescribeOrganizationAuthStatusRequest $req) 查询企业认证状态- 仅通过[CreateOrganizationAuthUrl](https://qian.tencent.com/developers/companyApis/organizations/CreateOrganizationAuthUrl) 和[CreateBatchOrganizationRegistrationTasks](https://qian.tencent.com/developers/companyApis/organizations/CreateBatchOrganizationRegistrationTasks)这两个接口进行引导认证的企业，调用方企业可以依据这个接口，查询认证状态。
 * @method Models\DescribeOrganizationGroupOrganizationsResponse DescribeOrganizationGroupOrganizations(Models\DescribeOrganizationGroupOrganizationsRequest $req) 此API接口用来查询加入集团的成员企业信息
适用场景：子企业在加入集团后，主企业可能通过此接口获取到所有的子企业列表，方便进行展示和统计
 * @method Models\DescribeOrganizationSealsResponse DescribeOrganizationSeals(Models\DescribeOrganizationSealsRequest $req) 查询企业印章列表。

注：
1. 此操作要求操作者具备<b>印章查询权限</b>（若调用者尚无此权限，请联系超级管理员前往Web控制台【组织管理】->【角色管理】添加相应权限）。
 * @method Models\DescribeOrganizationVerifyStatusResponse DescribeOrganizationVerifyStatus(Models\DescribeOrganizationVerifyStatusRequest $req) 仅且仅能查询企业本身在电子签的认证状态
 * @method Models\DescribePersonCertificateResponse DescribePersonCertificate(Models\DescribePersonCertificateRequest $req) 此接口（DescribePersonCertificate）用于查询个人数字证书信息。<br />注：`1.目前仅用于查询开通了医疗自动签署功能的个人数字证书。`<br />`2.调用此接口需要开通白名单，使用前请联系相关人员开通白名单。`
 * @method Models\DescribeSignFaceVideoResponse DescribeSignFaceVideo(Models\DescribeSignFaceVideoRequest $req) 该接口用于在使用视频认证方式签署合同后，获取用户的签署人脸认证视频。

1. 该接口**仅适用于在H5端签署**的合同，**在通过视频认证后**获取人脸视频。
2. 该接口**不支持小程序端**的签署人脸视频获取。
3. 请在**签署完成后的三天内**获取人脸视频，**过期后将无法获取**。

**注意：该接口需要开通白名单，请联系客户经理开通后使用。**
 * @method Models\DescribeThirdPartyAuthCodeResponse DescribeThirdPartyAuthCode(Models\DescribeThirdPartyAuthCodeRequest $req) 通过AuthCode查询个人用户是否实名


注意: 
<ul>
<li>此接口为合作引流场景使用，使用<b>有白名单限制</b>，使用前请联系对接的客户经理沟通。</li>
<li><b>AuthCode 只能使用一次</b>，查询一次再次查询会返回错误</li>
</ul>
 * @method Models\DescribeUserAutoSignStatusResponse DescribeUserAutoSignStatus(Models\DescribeUserAutoSignStatusRequest $req) 通过此接口获取个人用户自动签的开通状态。

注意: `处方单等特殊场景专用，此接口为白名单功能，使用前请联系对接的客户经理沟通。`
 * @method Models\DescribeUserFlowTypeResponse DescribeUserFlowType(Models\DescribeUserFlowTypeRequest $req) 查询用户模版类型，分为两种模式：
<ul>
<li>QueryBindTemplate:false，查询用户合同模版类型，返回用户合同模版类型ID，用户合同模版类型名称，用户合同模版类型描述信息</li>
<li>QueryBindTemplate:false，查询用户合同模版类型，返回用户合同模版类型ID，用户合同模版类型名称，用户合同模版类型描述信息，被绑定的模版数量</li>
</ul>
 * @method Models\DescribeUserVerifyStatusResponse DescribeUserVerifyStatus(Models\DescribeUserVerifyStatusRequest $req) 检测个人用户是否已经实名。

在调用生成C端用户实名链接（[CreateUserVerifyUrl](https://qian.tencent.com/developers/companyApis/users/CreateUserVerifyUrl)）接口之前，客户企业应首先调用本接口判断C端用户是否已经完成实名认证。如果用户已经实名，那么无需再次调用（[CreateUserVerifyUrl](https://qian.tencent.com/developers/companyApis/users/CreateUserVerifyUrl)）生成链接并走实名认证流程。

注意： 

- 此接口<font color="red">仅用于确认通过本公司生成[C端用户实名链接（CreateUserVerifyUrl）](https://qian.tencent.com/developers/companyApis/users/CreateUserVerifyUrl)接口注册认证的用户，不包括其他途径（如主动注册认证、在签署合同中注册认证等）在电子签平台上进行的实名认证</font>。

- 调用此接口需要购买单独的实名套餐包。<font color="red">使用前请联系对接的客户经理沟通</font>。
 * @method Models\DisableUserAutoSignResponse DisableUserAutoSign(Models\DisableUserAutoSignRequest $req) 通过此接口可以关闭个人用户自动签功能。
无需对应的用户刷脸等方式同意即可关闭。

注意: 

<ul><li>处方单等特殊场景专用，此接口为白名单功能，使用前请联系对接的客户经理沟通。</li>
<li>如果此用户在开通时候绑定过个人自动签账号许可,  关闭此用户的自动签不会归还个人自动签账号许可的额度。</li></ul>
 * @method Models\GetTaskResultApiResponse GetTaskResultApi(Models\GetTaskResultApiRequest $req) 此接口（GetTaskResultApi）用来查询转换任务的状态。如需发起转换任务，请使用<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/CreateConvertTaskApi" target="_blank">创建文件转换任务接口</a>进行资源文件的转换操作<br />
前提条件：已调用 <a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/CreateConvertTaskApi" target="_blank">创建文件转换任务接口</a>进行文件转换，并得到了返回的转换任务Id。<br />

适用场景：已创建一个文件转换任务，想查询该文件转换任务的状态，或获取转换后的文件资源Id。<br />
注：
1. `大文件转换所需的时间可能会比较长`
2.  `本接口返回的文件资源ID就是PDF资源ID，可以直接用于【用PDF文件创建签署流程】接口发起合同。`
 * @method Models\ModifyApplicationCallbackInfoResponse ModifyApplicationCallbackInfo(Models\ModifyApplicationCallbackInfoRequest $req) 新增/删除企业应用集成中的回调配置。
新增回调配置只会增加不存在的CallbackUrl；删除操作将针对找到的相同CallbackUrl的配置进行删除。
请确保回调地址能够接收并处理 HTTP POST 请求，并返回状态码 200 以表示处理正常。
更多回调相关的说明参考文档[回调通知能力](https://qian.tencent.com/developers/company/callback_types_v2)
 * @method Models\ModifyExtendedServiceResponse ModifyExtendedService(Models\ModifyExtendedServiceRequest $req) 管理企业扩展服务

- **直接开通的情形：** 若在操作过程中接口没有返回跳转链接，这表明无需进行任何跳转操作。此时，相应的企业拓展服务将会直接被开通或关闭。

- **需要法人或者超管签署开通协议的情形：** 当需要开通以下企业拓展服务时， 系统将返回一个操作链接。贵方需要主动联系并通知企业的超级管理员（超管）或法人。由他们点击该链接，完成服务的开通操作。
  - **OPEN_SERVER_SIGN（企业自动签）**

注意： `在调用此接口以管理企业扩展服务时，操作者（入参中的Operator）必须是企业的超级管理员（超管）或法人`


对应的扩展服务能力可以在控制台的【扩展服务】中找到
![image](https://qcloudimg.tencent-cloud.cn/raw/7eb35d2473d6c29784f3b35617bca9a9.png)
 * @method Models\ModifyFlowDeadlineResponse ModifyFlowDeadline(Models\ModifyFlowDeadlineRequest $req) 在已启动的签署流程中，可对签署截止日期进行延期操作，主要分为以下两个层面：
1. <b> 合同（流程）层面</b>：仅需提供签署流程ID。此操作将对整个签署流程以及未单独设置签署截止时间的签署人进行延期。
2. <b> 签署人层面</b>  ：需提供流程ID和签署人ID。此操作针对特定签署人进行延期，特别是对于有序合同（流程），签署截止时间不得超过后续签署人的流程截止时间。

此接口存在以下限制：
1. 执行操作的员工须为<font  color="red">发起方企业的超级管理员、法定代表人或签署流程发起人</font>。
2. 延长整个签署流程时，<font  color="red">应至少有一方尚未签署</font>（即签署流程不能处于已全部签署完成、已拒签、已过期、已撤回、拒绝填写、已解除等状态）。
3. 延长整个签署流程时，新的签署截止日期应晚于已设定的签署截止日期和当前日期。
4. 延长签署方截止时间时，<font  color="red">签署方不能处于流程完结或已终止状态</font>（即签署人不能处于已签署、已拒签、已过期、已撤回、拒绝填写、已解除等状态）。
5. 延长签署方截止时间时，新的签署截止日期应晚于当前日期和已设定的截止日期。若为有序合同，还需早于或等于下一签署人的截止日期，且早于签署流程整体的截止日期。
6. <font  color="red">不支持操作合同组合同</font>。

合同（流程）层面 截止时间控制台展示的位置：
![image](https://qcloudimg.tencent-cloud.cn/raw/265b130136bf6e8f01f5880438467dfb.png)
 * @method Models\ModifyIntegrationDepartmentResponse ModifyIntegrationDepartment(Models\ModifyIntegrationDepartmentRequest $req) 此接口（ModifyIntegrationDepartment）用于更新企业的部门信息，支持更新部门名称、客户系统部门ID和部门序号等信息。
 * @method Models\ModifyIntegrationRoleResponse ModifyIntegrationRole(Models\ModifyIntegrationRoleRequest $req) 此接口（ModifyIntegrationRole）用来更新企业自定义的SaaS角色或集团角色。

适用场景1：更新当前企业的自定义SaaS角色或集团角色，并且更新时不进行角色中权限的更新（PermissionGroups 参数不传）。

适用场景2：更新当前企业的自定义SaaS角色或集团角色，并且更新时进行角色中权限的设置（PermissionGroups 参数要传），权限树内容 PermissionGroups 可参考接口 DescribeIntegrationRoles 的输出。此处注意权限树内容可能会更新，需尽量拉取最新的权限树内容，并且权限树内容 PermissionGroups 必须是一颗完整的权限树。

适用场景3：更新集团角色管理的子企业列表，可通过设置 SubOrganizationIds 参数达到此效果。

适用场景4：主企业代理子企业操作的场景，需要设置Agent参数，并且ProxyOrganizationId设置为子企业的id即可。

注意事项：SaaS角色和集团角色对应的权限树是不一样的。
 * @method Models\ModifyPartnerAutoSignAuthUrlResponse ModifyPartnerAutoSignAuthUrl(Models\ModifyPartnerAutoSignAuthUrlRequest $req) 创建一个用于更新他方自动签授权的链接（可选择他方授权或我方授权）。通过这个链接，合作方企业可以直接进入小程序，进行自动签授权的更新（更新印章）操作。

如果授权企业尚未开通企业自动签功能，该链接还将引导他们首先开通本企业的自动签服务

注: 
1. <font color='red'>所在企业的超管、法人才有权限调用此接口</font>(Operator.UserId 需要传递超管或者法人的UserId)
2. 只能更新授权的印章，被授权的企业无法更新
3. 授权企业和被授权企业必须都是已认证企业
4. <font color='red'>需要授权企业或被授权企业的超管或者法人打开链接</font>走开通逻辑。
 * @method Models\OperateSealsResponse OperateSeals(Models\OperateSealsRequest $req) 修改印章状态（停用、启用）
 * @method Models\OperateTemplateResponse OperateTemplate(Models\OperateTemplateRequest $req) 此接口（OperateTemplate）用于对企业自有模板进行管理操作，所有操作都会有对应的回调触发，具体参考回调文档 <a href="https://qian.tencent.com/developers/company/callback_types_templates" target="_blank">模板操作相关回调</a>


# 支持的操作
## 1. 删除模板 (OperateType=DELETE)
此操作会将模板从企业自有模板中彻底删除，若要保留模板而不删除，可将模板停用。

## 2. 启用模板 (OperateType=ENABLE)
此操作是将已停用的模板启用，操作幂等，若模板已启用，接口不报错。

## 3. 停用模板 (OperateType=DISABLE)
此操作是将已启用的模板停用，操作幂等，若模板已停用，接口不报错，停用后，无法通过此模板发起合同，已发起的合同不受影响。

## 4. 复制模板 (OperateType=COPY)
此操作将复制一个完全一样的模板，仅支持修改模板名称，若要修改其他模板内容，需到腾讯电子签控制台操作。
 * @method Models\RenewAutoSignLicenseResponse RenewAutoSignLicense(Models\RenewAutoSignLicenseRequest $req) 给医疗个人自动签许可续期。续期成功后，可对医疗自动签许可追加一年有效期，只可续期一次。

注意: `处方单等特殊场景专用，此接口为白名单功能，使用前请联系对接的客户经理沟通。`
 * @method Models\StartFlowResponse StartFlow(Models\StartFlowRequest $req) 此接口用于启动流程。它是模板发起合同的最后一步。
在[创建签署流程](https://qian.tencent.com/developers/companyApis/startFlows/CreateFlow)和[创建电子文档](https://qian.tencent.com/developers/companyApis/startFlows/CreateDocument)之后，用于开始整个合同流程,  推进流程进入到签署环节。

![image](https://qcloudimg.tencent-cloud.cn/raw/1f38ebd7c5afed8763ad961741d81438.png)

注：
1.<font color="red">合同发起后就会扣减合同的额度</font>, 只有撤销没有参与方签署过或只有自动签署签署过的合同，才会返还合同额度。（过期，拒签，签署完成，解除完成等状态不会返还额度）

2.<font color="red">静默（自动）签署不支持非本企业合同签署方存在填写</font>功能

3.<font color="red">在发起签署流程之前，建议等待 [PDF合成完成的回调](https://qian.tencent.com/developers/company/callback_types_contracts_sign#%E4%B9%9D-%E5%90%88%E5%90%8C%E6%96%87%E6%A1%A3%E5%90%88%E6%88%90%E5%AE%8C%E6%88%90%E5%9B%9E%E8%B0%83)</font>，尤其是当模板中存在动态表格等复杂填写控件时，因为合成过程可能会耗费秒级别的时间。
 * @method Models\UnbindEmployeeUserIdWithClientOpenIdResponse UnbindEmployeeUserIdWithClientOpenId(Models\UnbindEmployeeUserIdWithClientOpenIdRequest $req) 此接口（UnbindEmployeeUserIdWithClientOpenId）用于解除电子签系统员工UserId与客户系统员工OpenId之间的绑定关系。

注：`在调用此接口时，需确保OpenId已通过调用`<a href="https://qian.tencent.com/developers/companyApis/staffs/BindEmployeeUserIdWithClientOpenId" target="_blank">BindEmployeeUserIdWithClientOpenId</a>`接口与电子签系统的UserId绑定过。若OpenId未经过绑定，则无法使用此接口进行解绑操作。`
 * @method Models\UpdateIntegrationEmployeesResponse UpdateIntegrationEmployees(Models\UpdateIntegrationEmployeesRequest $req) 此接口（UpdateIntegrationEmployees）<font color="red"><b>用于修改未实名企业员工信息(姓名，手机号，邮件、部门)</b></font>。
如果企业员工已经实名， 姓名，手机号，邮件等需要企业员工到小程序或者控制台自己修改， 部门则需要超管到控制台分配

修改手机号的时候,支持以下场景进行提醒通知
<table>
<tbody>
<tr>
<td>生成端</td>
<td >入参</td>
<td>提醒方式</td>
</tr>
<tr>
<td>普通saas员工</td>
<td>将Employees中的DisplayName设置员工的名字，Mobile设置成员工的手机号</td>
<td>发送短信通知员工（短信中带有认证加入企业的链接）</td>
</tr>
<tr>
<td>企微员工</td>
<td>将Employees 中的WeworkOpenId字段设置为企微员工明文的openid，需<font color="red">确保该企微员工在应用的可见范围内</font></td>
<td>企微内部实名消息</td>
</tr>
<tr>
<td>H5端 saas员工</td>
<td>传递 InvitationNotifyType = H5，将Employees中的DisplayName设置员工的名字，Mobile设置成员工的手机号，<font color="red">此场景不支持企微</font></td>
<td>生成认证加入企业的H5链接，贵方可以通过自己的渠道触达到此员工</td>
</tr>
</tbody>
</table>
注意：

- <b>若通过手机号发现员工已经创建，则不会重复创建，但会发送短信或者生成链接提醒员工实名。</b>
- jumpUrl 仅支持H5的邀请方式，回跳的url，使用前请联系对接的客户经理沟通，进行域名的配置。
 * @method Models\UploadFilesResponse UploadFiles(Models\UploadFilesRequest $req) 此接口（UploadFiles）文件上传。<br/>

适用场景：用于合同，印章的文件上传。文件上传以后，
如果是PDF格式文件可配合<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateFlowByFiles" target="_blank">用PDF文件创建签署流程</a>接口进行合同流程的发起
如果是其他类型可以配合<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/CreateConvertTaskApi" target="_blank">创建文件转换任务</a>接口转换成PDF文件

注: 
1. 图片类型(png/jpg/jpeg)限制大小为5M以下, PDF/word/excel等其他格式限制大小为60M以下
2. 调用此接口时需要设置单独的Domain请求域名，<font color="red">联调开发环境为: file.test.ess.tencent.cn，正式环境需要设置为:file.ess.tencent.cn</font>，代码示例
```
HttpProfile httpProfile = new HttpProfile();
httpProfile.setEndpoint("file.test.ess.tencent.cn");
```

<font color="red">相关视频指引</font> <br>
1. <a href="https://dyn.ess.tencent.cn/guide/apivideo/ess_uploadfiles.mp4" target="_blank">上传用于合同发起的PDF文件代码编写示例</a><br>
 * @method Models\VerifyDigitFileResponse VerifyDigitFile(Models\VerifyDigitFileRequest $req) 对加签后的文件进行数字签名验证，判断数字签名是否有效。
 * @method Models\VerifyPdfResponse VerifyPdf(Models\VerifyPdfRequest $req) 对合同流程文件进行数字签名验证，判断数字签名是否有效，合同文件内容是否被篡改。


**补充**： 可以到控制台[合同验签](https://qian.tencent.com/verifySign)体验验签功能，界面如下
![image](https://qcloudimg.tencent-cloud.cn/raw/81c333ccb07f0c5fbaf840d9cee61333.png)
 */

class EssClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ess.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ess";

    /**
     * @var string
     */
    protected $version = "2020-11-11";

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
        $respClass = "TencentCloud"."\\".ucfirst("ess")."\\"."V20201111\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
