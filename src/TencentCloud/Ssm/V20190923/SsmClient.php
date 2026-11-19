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

namespace TencentCloud\Ssm\V20190923;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ssm\V20190923\Models as Models;

/**
 * @method Models\CreateProductSecretResponse CreateProductSecret(Models\CreateProductSecretRequest $req) 创建云产品凭据
 * @method Models\CreateSSHKeyPairSecretResponse CreateSSHKeyPairSecret(Models\CreateSSHKeyPairSecretRequest $req) 创建用于托管SSH密钥对的凭据
 * @method Models\CreateSecretResponse CreateSecret(Models\CreateSecretRequest $req) 创建新的凭据信息，通过KMS进行加密保护。每个Region最多可创建存储1000个凭据信息。
 * @method Models\CreateServiceResponse CreateService(Models\CreateServiceRequest $req) 开通 ssm 服务接口
 * @method Models\DeleteSecretResponse DeleteSecret(Models\DeleteSecretRequest $req) 删除指定的凭据信息，可以通过RecoveryWindowInDays参数设置立即删除或者计划删除。对于计划删除的凭据，在删除日期到达之前状态为 PendingDelete，并可以通过RestoreSecret 进行恢复，超出指定删除日期之后会被彻底删除。您必须先通过 DisableSecret 停用凭据后才可以进行（计划）删除操作。
 * @method Models\DeleteSecretVersionResponse DeleteSecretVersion(Models\DeleteSecretVersionRequest $req) 删除指定的自定义凭据版本，删除操作立即生效。绑定 Stage_Current 标签的版本不能删除，请先通过 UpdateSecret 将该标签迁移到其他版本。
 * @method Models\DescribeAsyncRequestInfoResponse DescribeAsyncRequestInfo(Models\DescribeAsyncRequestInfoRequest $req) 查询异步任务的执行结果
 * @method Models\DescribeRotationDetailResponse DescribeRotationDetail(Models\DescribeRotationDetailRequest $req) 查询凭据轮转策略详情。
本接口只适用于云产品凭据。
 * @method Models\DescribeRotationHistoryResponse DescribeRotationHistory(Models\DescribeRotationHistoryRequest $req) 查询凭据轮转历史版本。
本接口仅适用于云产品凭据。
 * @method Models\DescribeSecretResponse DescribeSecret(Models\DescribeSecretRequest $req) 获取凭据的详细属性信息。
 * @method Models\DescribeSupportedProductsResponse DescribeSupportedProducts(Models\DescribeSupportedProductsRequest $req) 查询支持的云产品列表
 * @method Models\DisableSecretResponse DisableSecret(Models\DisableSecretRequest $req) 停用指定的凭据，停用后状态为 Disabled，无法通过接口获取该凭据的明文。
 * @method Models\EnableSecretResponse EnableSecret(Models\EnableSecretRequest $req) 该接口用于开启凭据，状态为Enabled。可以通过 GetSecretValue 接口获取凭据明文。处于PendingDelete状态的凭据不能直接开启，需要通过RestoreSecret 恢复后再开启使用。
 * @method Models\GetRegionsResponse GetRegions(Models\GetRegionsRequest $req) 获取控制台展示region列表
 * @method Models\GetSSHKeyPairValueResponse GetSSHKeyPairValue(Models\GetSSHKeyPairValueRequest $req) 获取SSH密钥对凭据明文信息。
 * @method Models\GetSecretValueResponse GetSecretValue(Models\GetSecretValueRequest $req) 对于用户自定义凭据，通过指定凭据名称和版本来获取凭据的明文信息；
对于云产品凭据如Mysql凭据，通过指定凭据名称和历史版本号来获取历史轮转凭据的明文信息，如果要获取当前正在使用的凭据版本的明文，需要将版本号指定为：SSM_Current。
 * @method Models\GetServiceStatusResponse GetServiceStatus(Models\GetServiceStatusRequest $req) 该接口用户获取用户SecretsManager服务开通状态。
 * @method Models\ListSecretVersionIdsResponse ListSecretVersionIds(Models\ListSecretVersionIdsRequest $req) 该接口用于获取指定凭据下的版本列表信息
 * @method Models\ListSecretsResponse ListSecrets(Models\ListSecretsRequest $req) 该接口用于获取所有凭据的详细列表，可以指定过滤字段、排序方式等。
 * @method Models\PutSecretValueResponse PutSecretValue(Models\PutSecretValueRequest $req) 该接口用于在指定凭据下新增版本，支持自定义凭据。未指定 VersionId 时，系统生成版本号并在响应中返回。可指定 Stage_Current，将标签绑定到新版本。
一个凭据下最多支持 10 个版本。SecretBinary 和 SecretString 必须且只能指定一个。
 * @method Models\RestoreSecretResponse RestoreSecret(Models\RestoreSecretRequest $req) 该接口用于恢复计划删除（PendingDelete状态）中的凭据，取消计划删除。取消计划删除的凭据将处于Disabled 状态，如需恢复使用，通过EnableSecret 接口开启凭据。
 * @method Models\RotateProductSecretResponse RotateProductSecret(Models\RotateProductSecretRequest $req) 轮转云产品凭据或云API密钥对凭据。
该接口仅适用于处于Enabled状态的云产品凭据或处于Enable状态的云API密钥对凭据，对于其他状态的云产品凭据或云API密钥对凭据或用户自定义凭据不适用。
 * @method Models\UpdateDescriptionResponse UpdateDescription(Models\UpdateDescriptionRequest $req) 该接口用于修改指定凭据的描述信息，仅能修改Enabled 和 Disabled 状态的凭据。
 * @method Models\UpdateRotationStatusResponse UpdateRotationStatus(Models\UpdateRotationStatusRequest $req) 设置云产品凭据轮转策略，可以设置：
是否开启轮转
轮转周期
轮转开始时间
 * @method Models\UpdateSecretResponse UpdateSecret(Models\UpdateSecretRequest $req) 本接口用于更新指定凭据版本的内容，或设置、迁移已有版本的 Stage_Current 标签。
更新凭据内容支持自定义凭据，新的内容加密后覆盖原内容。设置版本标签支持自定义、云产品及 Redis/MongoDB 凭据；云产品及 Redis/MongoDB 凭据仅支持设置或迁移标签。
 */

class SsmClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ssm.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ssm";

    /**
     * @var string
     */
    protected $version = "2019-09-23";

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
        $respClass = "TencentCloud"."\\".ucfirst("ssm")."\\"."V20190923\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
