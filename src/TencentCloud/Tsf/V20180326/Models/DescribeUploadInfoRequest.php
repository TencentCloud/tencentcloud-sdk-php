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
 * DescribeUploadInfo请求参数结构体
 *
 * @method string getApplicationId() 获取应用ID，通过调用DescribeApplications接口[获取应用列表](https://cloud.tencent.com/document/api/649/36090)从而获取应用ID，或登录[控制台](https://console.cloud.tencent.com/tsf/app?rid=1)进行查看，调用CreateApplication接口[创建应用](https://cloud.tencent.com/document/product/649/36094)时的返回值
 * @method void setApplicationId(string $ApplicationId) 设置应用ID，通过调用DescribeApplications接口[获取应用列表](https://cloud.tencent.com/document/api/649/36090)从而获取应用ID，或登录[控制台](https://console.cloud.tencent.com/tsf/app?rid=1)进行查看，调用CreateApplication接口[创建应用](https://cloud.tencent.com/document/product/649/36094)时的返回值
 * @method string getPkgName() 获取程序包名
 * @method void setPkgName(string $PkgName) 设置程序包名
 * @method string getPkgVersion() 获取程序包版本
 * @method void setPkgVersion(string $PkgVersion) 设置程序包版本
 * @method string getPkgType() 获取程序包类型
 * @method void setPkgType(string $PkgType) 设置程序包类型
 * @method string getPkgDesc() 获取程序包介绍
 * @method void setPkgDesc(string $PkgDesc) 设置程序包介绍
 * @method string getRepositoryType() 获取仓库类型（默认仓库：default，私有仓库：private，公共仓库：public-demo）
 * @method void setRepositoryType(string $RepositoryType) 设置仓库类型（默认仓库：default，私有仓库：private，公共仓库：public-demo）
 * @method string getRepositoryId() 获取仓库ID，可通过调用[仓库信息查询类](https://cloud.tencent.com/document/api/649/45925)接口时出参中的RepositoryId，或登录[控制台](https://console.cloud.tencent.com/tsf/product?rid=1)进行查看
 * @method void setRepositoryId(string $RepositoryId) 设置仓库ID，可通过调用[仓库信息查询类](https://cloud.tencent.com/document/api/649/45925)接口时出参中的RepositoryId，或登录[控制台](https://console.cloud.tencent.com/tsf/product?rid=1)进行查看
 */
class DescribeUploadInfoRequest extends AbstractModel
{
    /**
     * @var string 应用ID，通过调用DescribeApplications接口[获取应用列表](https://cloud.tencent.com/document/api/649/36090)从而获取应用ID，或登录[控制台](https://console.cloud.tencent.com/tsf/app?rid=1)进行查看，调用CreateApplication接口[创建应用](https://cloud.tencent.com/document/product/649/36094)时的返回值
     */
    public $ApplicationId;

    /**
     * @var string 程序包名
     */
    public $PkgName;

    /**
     * @var string 程序包版本
     */
    public $PkgVersion;

    /**
     * @var string 程序包类型
     */
    public $PkgType;

    /**
     * @var string 程序包介绍
     */
    public $PkgDesc;

    /**
     * @var string 仓库类型（默认仓库：default，私有仓库：private，公共仓库：public-demo）
     */
    public $RepositoryType;

    /**
     * @var string 仓库ID，可通过调用[仓库信息查询类](https://cloud.tencent.com/document/api/649/45925)接口时出参中的RepositoryId，或登录[控制台](https://console.cloud.tencent.com/tsf/product?rid=1)进行查看
     */
    public $RepositoryId;

    /**
     * @param string $ApplicationId 应用ID，通过调用DescribeApplications接口[获取应用列表](https://cloud.tencent.com/document/api/649/36090)从而获取应用ID，或登录[控制台](https://console.cloud.tencent.com/tsf/app?rid=1)进行查看，调用CreateApplication接口[创建应用](https://cloud.tencent.com/document/product/649/36094)时的返回值
     * @param string $PkgName 程序包名
     * @param string $PkgVersion 程序包版本
     * @param string $PkgType 程序包类型
     * @param string $PkgDesc 程序包介绍
     * @param string $RepositoryType 仓库类型（默认仓库：default，私有仓库：private，公共仓库：public-demo）
     * @param string $RepositoryId 仓库ID，可通过调用[仓库信息查询类](https://cloud.tencent.com/document/api/649/45925)接口时出参中的RepositoryId，或登录[控制台](https://console.cloud.tencent.com/tsf/product?rid=1)进行查看
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

        if (array_key_exists("PkgName",$param) and $param["PkgName"] !== null) {
            $this->PkgName = $param["PkgName"];
        }

        if (array_key_exists("PkgVersion",$param) and $param["PkgVersion"] !== null) {
            $this->PkgVersion = $param["PkgVersion"];
        }

        if (array_key_exists("PkgType",$param) and $param["PkgType"] !== null) {
            $this->PkgType = $param["PkgType"];
        }

        if (array_key_exists("PkgDesc",$param) and $param["PkgDesc"] !== null) {
            $this->PkgDesc = $param["PkgDesc"];
        }

        if (array_key_exists("RepositoryType",$param) and $param["RepositoryType"] !== null) {
            $this->RepositoryType = $param["RepositoryType"];
        }

        if (array_key_exists("RepositoryId",$param) and $param["RepositoryId"] !== null) {
            $this->RepositoryId = $param["RepositoryId"];
        }
    }
}
