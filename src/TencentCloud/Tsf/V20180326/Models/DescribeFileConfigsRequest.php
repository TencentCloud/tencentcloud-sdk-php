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
 * DescribeFileConfigs请求参数结构体
 *
 * @method string getConfigId() 获取配置ID。该参数可以通过调用 [DescribeFileConfigs](https://cloud.tencent.com/document/product/649/58593) 的返回值中的 ConfigId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?rid=1&subTab=file)配置详情-配置版本页查看；也可以调用[CreateFileConfig](https://cloud.tencent.com/document/product/649/58594)创建新的配置。
 * @method void setConfigId(string $ConfigId) 设置配置ID。该参数可以通过调用 [DescribeFileConfigs](https://cloud.tencent.com/document/product/649/58593) 的返回值中的 ConfigId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?rid=1&subTab=file)配置详情-配置版本页查看；也可以调用[CreateFileConfig](https://cloud.tencent.com/document/product/649/58594)创建新的配置。
 * @method array getConfigIdList() 获取配置项ID列表。该参数可以通过调用 [DescribeFileConfigs](https://cloud.tencent.com/document/product/649/58593) 的返回值中的 ConfigId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?rid=1&subTab=file)配置详情-配置版本页查看；也可以调用[CreateFileConfig](https://cloud.tencent.com/document/product/649/58594)创建新的配置。
 * @method void setConfigIdList(array $ConfigIdList) 设置配置项ID列表。该参数可以通过调用 [DescribeFileConfigs](https://cloud.tencent.com/document/product/649/58593) 的返回值中的 ConfigId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?rid=1&subTab=file)配置详情-配置版本页查看；也可以调用[CreateFileConfig](https://cloud.tencent.com/document/product/649/58594)创建新的配置。
 * @method string getConfigName() 获取配置项名称。
 * @method void setConfigName(string $ConfigName) 设置配置项名称。
 * @method string getApplicationId() 获取应用ID。该参数可以通过调用 [DescribeApplications](https://cloud.tencent.com/document/product/649/36090) 的返回值中的 ApplicationId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/app)查看；也可以调用[CreateApplication](https://cloud.tencent.com/document/product/649/36094)创建新的应用。
 * @method void setApplicationId(string $ApplicationId) 设置应用ID。该参数可以通过调用 [DescribeApplications](https://cloud.tencent.com/document/product/649/36090) 的返回值中的 ApplicationId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/app)查看；也可以调用[CreateApplication](https://cloud.tencent.com/document/product/649/36094)创建新的应用。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。
 * @method string getConfigVersion() 获取配置项版本。
 * @method void setConfigVersion(string $ConfigVersion) 设置配置项版本。
 */
class DescribeFileConfigsRequest extends AbstractModel
{
    /**
     * @var string 配置ID。该参数可以通过调用 [DescribeFileConfigs](https://cloud.tencent.com/document/product/649/58593) 的返回值中的 ConfigId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?rid=1&subTab=file)配置详情-配置版本页查看；也可以调用[CreateFileConfig](https://cloud.tencent.com/document/product/649/58594)创建新的配置。
     */
    public $ConfigId;

    /**
     * @var array 配置项ID列表。该参数可以通过调用 [DescribeFileConfigs](https://cloud.tencent.com/document/product/649/58593) 的返回值中的 ConfigId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?rid=1&subTab=file)配置详情-配置版本页查看；也可以调用[CreateFileConfig](https://cloud.tencent.com/document/product/649/58594)创建新的配置。
     */
    public $ConfigIdList;

    /**
     * @var string 配置项名称。
     */
    public $ConfigName;

    /**
     * @var string 应用ID。该参数可以通过调用 [DescribeApplications](https://cloud.tencent.com/document/product/649/36090) 的返回值中的 ApplicationId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/app)查看；也可以调用[CreateApplication](https://cloud.tencent.com/document/product/649/36094)创建新的应用。
     */
    public $ApplicationId;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @var string 配置项版本。
     */
    public $ConfigVersion;

    /**
     * @param string $ConfigId 配置ID。该参数可以通过调用 [DescribeFileConfigs](https://cloud.tencent.com/document/product/649/58593) 的返回值中的 ConfigId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?rid=1&subTab=file)配置详情-配置版本页查看；也可以调用[CreateFileConfig](https://cloud.tencent.com/document/product/649/58594)创建新的配置。
     * @param array $ConfigIdList 配置项ID列表。该参数可以通过调用 [DescribeFileConfigs](https://cloud.tencent.com/document/product/649/58593) 的返回值中的 ConfigId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?rid=1&subTab=file)配置详情-配置版本页查看；也可以调用[CreateFileConfig](https://cloud.tencent.com/document/product/649/58594)创建新的配置。
     * @param string $ConfigName 配置项名称。
     * @param string $ApplicationId 应用ID。该参数可以通过调用 [DescribeApplications](https://cloud.tencent.com/document/product/649/36090) 的返回值中的 ApplicationId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/app)查看；也可以调用[CreateApplication](https://cloud.tencent.com/document/product/649/36094)创建新的应用。
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 返回数量，默认为20，最大值为100。
     * @param string $ConfigVersion 配置项版本。
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
        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("ConfigIdList",$param) and $param["ConfigIdList"] !== null) {
            $this->ConfigIdList = $param["ConfigIdList"];
        }

        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ConfigVersion",$param) and $param["ConfigVersion"] !== null) {
            $this->ConfigVersion = $param["ConfigVersion"];
        }
    }
}
