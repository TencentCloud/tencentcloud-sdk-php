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
 * DescribeDownloadInfo请求参数结构体
 *
 * @method string getApplicationId() 获取应用ID，通过调用DescribeApplications接口[获取应用列表](https://cloud.tencent.com/document/api/649/36090)从而获取应用ID，或登录[控制台](https://console.cloud.tencent.com/tsf/app?rid=1)进行查看，调用CreateApplication接口[创建应用](https://cloud.tencent.com/document/product/649/36094)时的返回值
 * @method void setApplicationId(string $ApplicationId) 设置应用ID，通过调用DescribeApplications接口[获取应用列表](https://cloud.tencent.com/document/api/649/36090)从而获取应用ID，或登录[控制台](https://console.cloud.tencent.com/tsf/app?rid=1)进行查看，调用CreateApplication接口[创建应用](https://cloud.tencent.com/document/product/649/36094)时的返回值
 * @method string getPkgId() 获取软件包ID可通过调用DescribeUploadInfo接口时[获取上传程序包信息](https://cloud.tencent.com/document/api/649/36078)返回的COS上传信息获取，登录[控制台](https://console.cloud.tencent.com/tsf/product?rid=1)进行查看
 * @method void setPkgId(string $PkgId) 设置软件包ID可通过调用DescribeUploadInfo接口时[获取上传程序包信息](https://cloud.tencent.com/document/api/649/36078)返回的COS上传信息获取，登录[控制台](https://console.cloud.tencent.com/tsf/product?rid=1)进行查看
 * @method string getRepositoryId() 获取仓库ID，可通过调用[仓库信息查询类](https://cloud.tencent.com/document/api/649/45925)接口时出参中的RepositoryId，或登录[控制台](https://console.cloud.tencent.com/tsf/product?rid=1)进行查看
 * @method void setRepositoryId(string $RepositoryId) 设置仓库ID，可通过调用[仓库信息查询类](https://cloud.tencent.com/document/api/649/45925)接口时出参中的RepositoryId，或登录[控制台](https://console.cloud.tencent.com/tsf/product?rid=1)进行查看
 * @method string getRepositoryType() 获取程序包仓库类型（允许值："public-demo"TSF公共demo仓库, "private"自定义仓库, "default"TSF公共仓库）
 * @method void setRepositoryType(string $RepositoryType) 设置程序包仓库类型（允许值："public-demo"TSF公共demo仓库, "private"自定义仓库, "default"TSF公共仓库）
 */
class DescribeDownloadInfoRequest extends AbstractModel
{
    /**
     * @var string 应用ID，通过调用DescribeApplications接口[获取应用列表](https://cloud.tencent.com/document/api/649/36090)从而获取应用ID，或登录[控制台](https://console.cloud.tencent.com/tsf/app?rid=1)进行查看，调用CreateApplication接口[创建应用](https://cloud.tencent.com/document/product/649/36094)时的返回值
     */
    public $ApplicationId;

    /**
     * @var string 软件包ID可通过调用DescribeUploadInfo接口时[获取上传程序包信息](https://cloud.tencent.com/document/api/649/36078)返回的COS上传信息获取，登录[控制台](https://console.cloud.tencent.com/tsf/product?rid=1)进行查看
     */
    public $PkgId;

    /**
     * @var string 仓库ID，可通过调用[仓库信息查询类](https://cloud.tencent.com/document/api/649/45925)接口时出参中的RepositoryId，或登录[控制台](https://console.cloud.tencent.com/tsf/product?rid=1)进行查看
     */
    public $RepositoryId;

    /**
     * @var string 程序包仓库类型（允许值："public-demo"TSF公共demo仓库, "private"自定义仓库, "default"TSF公共仓库）
     */
    public $RepositoryType;

    /**
     * @param string $ApplicationId 应用ID，通过调用DescribeApplications接口[获取应用列表](https://cloud.tencent.com/document/api/649/36090)从而获取应用ID，或登录[控制台](https://console.cloud.tencent.com/tsf/app?rid=1)进行查看，调用CreateApplication接口[创建应用](https://cloud.tencent.com/document/product/649/36094)时的返回值
     * @param string $PkgId 软件包ID可通过调用DescribeUploadInfo接口时[获取上传程序包信息](https://cloud.tencent.com/document/api/649/36078)返回的COS上传信息获取，登录[控制台](https://console.cloud.tencent.com/tsf/product?rid=1)进行查看
     * @param string $RepositoryId 仓库ID，可通过调用[仓库信息查询类](https://cloud.tencent.com/document/api/649/45925)接口时出参中的RepositoryId，或登录[控制台](https://console.cloud.tencent.com/tsf/product?rid=1)进行查看
     * @param string $RepositoryType 程序包仓库类型（允许值："public-demo"TSF公共demo仓库, "private"自定义仓库, "default"TSF公共仓库）
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("PkgId",$param) and $param["PkgId"] !== null) {
            $this->PkgId = $param["PkgId"];
        }

        if (array_key_exists("RepositoryId",$param) and $param["RepositoryId"] !== null) {
            $this->RepositoryId = $param["RepositoryId"];
        }

        if (array_key_exists("RepositoryType",$param) and $param["RepositoryType"] !== null) {
            $this->RepositoryType = $param["RepositoryType"];
        }
    }
}
