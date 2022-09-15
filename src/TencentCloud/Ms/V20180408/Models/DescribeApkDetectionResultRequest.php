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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApkDetectionResult请求参数结构体
 *
 * @method string getApkUrl() 获取软件包的下载链接
 * @method void setApkUrl(string $ApkUrl) 设置软件包的下载链接
 * @method string getApkMd5() 获取软件包的md5值，具有唯一性。腾讯APK云检测服务会根据md5值来判断该包是否为库中已收集的样本，已存在，则返回检测结果，反之，需要一定时间检测该样本。
 * @method void setApkMd5(string $ApkMd5) 设置软件包的md5值，具有唯一性。腾讯APK云检测服务会根据md5值来判断该包是否为库中已收集的样本，已存在，则返回检测结果，反之，需要一定时间检测该样本。
 */
class DescribeApkDetectionResultRequest extends AbstractModel
{
    /**
     * @var string 软件包的下载链接
     */
    public $ApkUrl;

    /**
     * @var string 软件包的md5值，具有唯一性。腾讯APK云检测服务会根据md5值来判断该包是否为库中已收集的样本，已存在，则返回检测结果，反之，需要一定时间检测该样本。
     */
    public $ApkMd5;

    /**
     * @param string $ApkUrl 软件包的下载链接
     * @param string $ApkMd5 软件包的md5值，具有唯一性。腾讯APK云检测服务会根据md5值来判断该包是否为库中已收集的样本，已存在，则返回检测结果，反之，需要一定时间检测该样本。
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
        if (array_key_exists("ApkUrl",$param) and $param["ApkUrl"] !== null) {
            $this->ApkUrl = $param["ApkUrl"];
        }

        if (array_key_exists("ApkMd5",$param) and $param["ApkMd5"] !== null) {
            $this->ApkMd5 = $param["ApkMd5"];
        }
    }
}
