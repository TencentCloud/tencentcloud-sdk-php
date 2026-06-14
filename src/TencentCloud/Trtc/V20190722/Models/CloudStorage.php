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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 腾讯云对象存储COS以及第三方云存储的账号信息
 *
 * @method integer getVendor() 获取<p>腾讯云对象存储COS以及第三方云存储账号信息<br>0：腾讯云对象存储 COS<br>1：AWS<br>【注意】目前第三方云存储仅支持AWS，更多第三方云存储陆续支持中</p>
 * @method void setVendor(integer $Vendor) 设置<p>腾讯云对象存储COS以及第三方云存储账号信息<br>0：腾讯云对象存储 COS<br>1：AWS<br>【注意】目前第三方云存储仅支持AWS，更多第三方云存储陆续支持中</p>
 * @method string getRegion() 获取<p>腾讯云对象存储的[地域信息]（https://cloud.tencent.com/document/product/436/6224#.E5.9C.B0.E5.9F.9F）。<br>示例值：cn-shanghai-1</p><p>AWS S3[地域信息]（https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-regions-availability-zones.html#concepts-regions）</p>
 * @method void setRegion(string $Region) 设置<p>腾讯云对象存储的[地域信息]（https://cloud.tencent.com/document/product/436/6224#.E5.9C.B0.E5.9F.9F）。<br>示例值：cn-shanghai-1</p><p>AWS S3[地域信息]（https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-regions-availability-zones.html#concepts-regions）</p>
 * @method string getBucket() 获取<p>云存储桶名称。</p>
 * @method void setBucket(string $Bucket) 设置<p>云存储桶名称。</p>
 * @method string getAccessKey() 获取<p>云存储的access_key账号信息。<br>若存储至腾讯云对象存储COS，请前往https://console.cloud.tencent.com/cam/capi 查看或创建，对应链接中密钥字段的SecretId值。</p>
 * @method void setAccessKey(string $AccessKey) 设置<p>云存储的access_key账号信息。<br>若存储至腾讯云对象存储COS，请前往https://console.cloud.tencent.com/cam/capi 查看或创建，对应链接中密钥字段的SecretId值。</p>
 * @method string getSecretKey() 获取<p>云存储的secret_key账号信息。<br>若存储至腾讯云对象存储COS，请前往https://console.cloud.tencent.com/cam/capi 查看或创建，对应链接中密钥字段的SecretKey值。</p>
 * @method void setSecretKey(string $SecretKey) 设置<p>云存储的secret_key账号信息。<br>若存储至腾讯云对象存储COS，请前往https://console.cloud.tencent.com/cam/capi 查看或创建，对应链接中密钥字段的SecretKey值。</p>
 * @method array getFileNamePrefix() 获取<p>云存储bucket 的指定位置，由字符串数组组成。合法的字符串范围az,AZ,0~9,&#39;_&#39;和&#39;-&#39;，举个例子，录制文件xxx.m3u8在 [&quot;prefix1&quot;, &quot;prefix2&quot;]作用下，会变成prefix1/prefix2/TaskId/xxx.m3u8。</p>
 * @method void setFileNamePrefix(array $FileNamePrefix) 设置<p>云存储bucket 的指定位置，由字符串数组组成。合法的字符串范围az,AZ,0~9,&#39;_&#39;和&#39;-&#39;，举个例子，录制文件xxx.m3u8在 [&quot;prefix1&quot;, &quot;prefix2&quot;]作用下，会变成prefix1/prefix2/TaskId/xxx.m3u8。</p>
 */
class CloudStorage extends AbstractModel
{
    /**
     * @var integer <p>腾讯云对象存储COS以及第三方云存储账号信息<br>0：腾讯云对象存储 COS<br>1：AWS<br>【注意】目前第三方云存储仅支持AWS，更多第三方云存储陆续支持中</p>
     */
    public $Vendor;

    /**
     * @var string <p>腾讯云对象存储的[地域信息]（https://cloud.tencent.com/document/product/436/6224#.E5.9C.B0.E5.9F.9F）。<br>示例值：cn-shanghai-1</p><p>AWS S3[地域信息]（https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-regions-availability-zones.html#concepts-regions）</p>
     */
    public $Region;

    /**
     * @var string <p>云存储桶名称。</p>
     */
    public $Bucket;

    /**
     * @var string <p>云存储的access_key账号信息。<br>若存储至腾讯云对象存储COS，请前往https://console.cloud.tencent.com/cam/capi 查看或创建，对应链接中密钥字段的SecretId值。</p>
     */
    public $AccessKey;

    /**
     * @var string <p>云存储的secret_key账号信息。<br>若存储至腾讯云对象存储COS，请前往https://console.cloud.tencent.com/cam/capi 查看或创建，对应链接中密钥字段的SecretKey值。</p>
     */
    public $SecretKey;

    /**
     * @var array <p>云存储bucket 的指定位置，由字符串数组组成。合法的字符串范围az,AZ,0~9,&#39;_&#39;和&#39;-&#39;，举个例子，录制文件xxx.m3u8在 [&quot;prefix1&quot;, &quot;prefix2&quot;]作用下，会变成prefix1/prefix2/TaskId/xxx.m3u8。</p>
     */
    public $FileNamePrefix;

    /**
     * @param integer $Vendor <p>腾讯云对象存储COS以及第三方云存储账号信息<br>0：腾讯云对象存储 COS<br>1：AWS<br>【注意】目前第三方云存储仅支持AWS，更多第三方云存储陆续支持中</p>
     * @param string $Region <p>腾讯云对象存储的[地域信息]（https://cloud.tencent.com/document/product/436/6224#.E5.9C.B0.E5.9F.9F）。<br>示例值：cn-shanghai-1</p><p>AWS S3[地域信息]（https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-regions-availability-zones.html#concepts-regions）</p>
     * @param string $Bucket <p>云存储桶名称。</p>
     * @param string $AccessKey <p>云存储的access_key账号信息。<br>若存储至腾讯云对象存储COS，请前往https://console.cloud.tencent.com/cam/capi 查看或创建，对应链接中密钥字段的SecretId值。</p>
     * @param string $SecretKey <p>云存储的secret_key账号信息。<br>若存储至腾讯云对象存储COS，请前往https://console.cloud.tencent.com/cam/capi 查看或创建，对应链接中密钥字段的SecretKey值。</p>
     * @param array $FileNamePrefix <p>云存储bucket 的指定位置，由字符串数组组成。合法的字符串范围az,AZ,0~9,&#39;_&#39;和&#39;-&#39;，举个例子，录制文件xxx.m3u8在 [&quot;prefix1&quot;, &quot;prefix2&quot;]作用下，会变成prefix1/prefix2/TaskId/xxx.m3u8。</p>
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
        if (array_key_exists("Vendor",$param) and $param["Vendor"] !== null) {
            $this->Vendor = $param["Vendor"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("FileNamePrefix",$param) and $param["FileNamePrefix"] !== null) {
            $this->FileNamePrefix = $param["FileNamePrefix"];
        }
    }
}
