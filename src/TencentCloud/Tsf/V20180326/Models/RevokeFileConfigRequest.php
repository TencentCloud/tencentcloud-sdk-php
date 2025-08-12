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
 * RevokeFileConfig请求参数结构体
 *
 * @method string getConfigReleaseId() 获取按照【配置项发布ID】进行撤回。可通过调用[DescribeFileConfigReleases](https://cloud.tencent.com/document/product/649/85855)查询已发布的文件配置列表或登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?subTab=file)-查看发布信息-发布情况进行查看；也可以调用[ReleaseFileConfig](https://cloud.tencent.com/document/product/649/58592)发布文件配置。
 * @method void setConfigReleaseId(string $ConfigReleaseId) 设置按照【配置项发布ID】进行撤回。可通过调用[DescribeFileConfigReleases](https://cloud.tencent.com/document/product/649/85855)查询已发布的文件配置列表或登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?subTab=file)-查看发布信息-发布情况进行查看；也可以调用[ReleaseFileConfig](https://cloud.tencent.com/document/product/649/58592)发布文件配置。
 */
class RevokeFileConfigRequest extends AbstractModel
{
    /**
     * @var string 按照【配置项发布ID】进行撤回。可通过调用[DescribeFileConfigReleases](https://cloud.tencent.com/document/product/649/85855)查询已发布的文件配置列表或登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?subTab=file)-查看发布信息-发布情况进行查看；也可以调用[ReleaseFileConfig](https://cloud.tencent.com/document/product/649/58592)发布文件配置。
     */
    public $ConfigReleaseId;

    /**
     * @param string $ConfigReleaseId 按照【配置项发布ID】进行撤回。可通过调用[DescribeFileConfigReleases](https://cloud.tencent.com/document/product/649/85855)查询已发布的文件配置列表或登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?subTab=file)-查看发布信息-发布情况进行查看；也可以调用[ReleaseFileConfig](https://cloud.tencent.com/document/product/649/58592)发布文件配置。
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
        if (array_key_exists("ConfigReleaseId",$param) and $param["ConfigReleaseId"] !== null) {
            $this->ConfigReleaseId = $param["ConfigReleaseId"];
        }
    }
}
