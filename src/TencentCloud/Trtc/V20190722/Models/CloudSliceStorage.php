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
 * @method integer getVendor() 获取腾讯云对象存储COS以及第三方云存储账号信息
0：腾讯云对象存储 COS
1：AWS S3
2: 阿里云 OSS
示例值：0
 * @method void setVendor(integer $Vendor) 设置腾讯云对象存储COS以及第三方云存储账号信息
0：腾讯云对象存储 COS
1：AWS S3
2: 阿里云 OSS
示例值：0
 * @method string getRegion() 获取腾讯云对象存储的[地域信息]（https://cloud.tencent.com/document/product/436/6224#.E5.9C.B0.E5.9F.9F）。
示例值：cn-shanghai-1

AWS S3[地域信息]（https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-regions-availability-zones.html#concepts-regions）
示例值：ap-southeast-3	
 * @method void setRegion(string $Region) 设置腾讯云对象存储的[地域信息]（https://cloud.tencent.com/document/product/436/6224#.E5.9C.B0.E5.9F.9F）。
示例值：cn-shanghai-1

AWS S3[地域信息]（https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-regions-availability-zones.html#concepts-regions）
示例值：ap-southeast-3	
 * @method string getBucket() 获取云存储桶名称。
 * @method void setBucket(string $Bucket) 设置云存储桶名称。
 * @method string getAccessKey() 获取云存储的access_key账号信息。
若存储至腾讯云对象存储COS，请前往https://console.cloud.tencent.com/cam/capi 查看或创建，对应链接中密钥字段的SecretId值。
示例值：test-accesskey
 * @method void setAccessKey(string $AccessKey) 设置云存储的access_key账号信息。
若存储至腾讯云对象存储COS，请前往https://console.cloud.tencent.com/cam/capi 查看或创建，对应链接中密钥字段的SecretId值。
示例值：test-accesskey
 * @method string getSecretKey() 获取云存储的secret_key账号信息。
若存储至腾讯云对象存储COS，请前往https://console.cloud.tencent.com/cam/capi 查看或创建，对应链接中密钥字段的SecretKey值。
示例值：test-secretkey
 * @method void setSecretKey(string $SecretKey) 设置云存储的secret_key账号信息。
若存储至腾讯云对象存储COS，请前往https://console.cloud.tencent.com/cam/capi 查看或创建，对应链接中密钥字段的SecretKey值。
示例值：test-secretkey
 * @method array getFileNamePrefix() 获取云存储bucket 的指定位置，由字符串数组组成。合法的字符串范围az,AZ,0~9,'_'和'-'，举个例子，切片文件xxx.mp3在 ["prefix1", "prefix2"]作用下，音频切片文件会变成prefix1/prefix2/{taskId}/{userId}/audios/{sdkappid}_{roomId}_{userid}_{UTC时间}.ogg，视频截帧会变成prefix1/prefix2/{taskId}/{userId}/images/{sdkappid}_{roomId}_{userid}_{UTC时间}.png 
 * @method void setFileNamePrefix(array $FileNamePrefix) 设置云存储bucket 的指定位置，由字符串数组组成。合法的字符串范围az,AZ,0~9,'_'和'-'，举个例子，切片文件xxx.mp3在 ["prefix1", "prefix2"]作用下，音频切片文件会变成prefix1/prefix2/{taskId}/{userId}/audios/{sdkappid}_{roomId}_{userid}_{UTC时间}.ogg，视频截帧会变成prefix1/prefix2/{taskId}/{userId}/images/{sdkappid}_{roomId}_{userid}_{UTC时间}.png 
 */
class CloudSliceStorage extends AbstractModel
{
    /**
     * @var integer 腾讯云对象存储COS以及第三方云存储账号信息
0：腾讯云对象存储 COS
1：AWS S3
2: 阿里云 OSS
示例值：0
     */
    public $Vendor;

    /**
     * @var string 腾讯云对象存储的[地域信息]（https://cloud.tencent.com/document/product/436/6224#.E5.9C.B0.E5.9F.9F）。
示例值：cn-shanghai-1

AWS S3[地域信息]（https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-regions-availability-zones.html#concepts-regions）
示例值：ap-southeast-3	
     */
    public $Region;

    /**
     * @var string 云存储桶名称。
     */
    public $Bucket;

    /**
     * @var string 云存储的access_key账号信息。
若存储至腾讯云对象存储COS，请前往https://console.cloud.tencent.com/cam/capi 查看或创建，对应链接中密钥字段的SecretId值。
示例值：test-accesskey
     */
    public $AccessKey;

    /**
     * @var string 云存储的secret_key账号信息。
若存储至腾讯云对象存储COS，请前往https://console.cloud.tencent.com/cam/capi 查看或创建，对应链接中密钥字段的SecretKey值。
示例值：test-secretkey
     */
    public $SecretKey;

    /**
     * @var array 云存储bucket 的指定位置，由字符串数组组成。合法的字符串范围az,AZ,0~9,'_'和'-'，举个例子，切片文件xxx.mp3在 ["prefix1", "prefix2"]作用下，音频切片文件会变成prefix1/prefix2/{taskId}/{userId}/audios/{sdkappid}_{roomId}_{userid}_{UTC时间}.ogg，视频截帧会变成prefix1/prefix2/{taskId}/{userId}/images/{sdkappid}_{roomId}_{userid}_{UTC时间}.png 
     */
    public $FileNamePrefix;

    /**
     * @param integer $Vendor 腾讯云对象存储COS以及第三方云存储账号信息
0：腾讯云对象存储 COS
1：AWS S3
2: 阿里云 OSS
示例值：0
     * @param string $Region 腾讯云对象存储的[地域信息]（https://cloud.tencent.com/document/product/436/6224#.E5.9C.B0.E5.9F.9F）。
示例值：cn-shanghai-1

AWS S3[地域信息]（https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/using-regions-availability-zones.html#concepts-regions）
示例值：ap-southeast-3	
     * @param string $Bucket 云存储桶名称。
     * @param string $AccessKey 云存储的access_key账号信息。
若存储至腾讯云对象存储COS，请前往https://console.cloud.tencent.com/cam/capi 查看或创建，对应链接中密钥字段的SecretId值。
示例值：test-accesskey
     * @param string $SecretKey 云存储的secret_key账号信息。
若存储至腾讯云对象存储COS，请前往https://console.cloud.tencent.com/cam/capi 查看或创建，对应链接中密钥字段的SecretKey值。
示例值：test-secretkey
     * @param array $FileNamePrefix 云存储bucket 的指定位置，由字符串数组组成。合法的字符串范围az,AZ,0~9,'_'和'-'，举个例子，切片文件xxx.mp3在 ["prefix1", "prefix2"]作用下，音频切片文件会变成prefix1/prefix2/{taskId}/{userId}/audios/{sdkappid}_{roomId}_{userid}_{UTC时间}.ogg，视频截帧会变成prefix1/prefix2/{taskId}/{userId}/images/{sdkappid}_{roomId}_{userid}_{UTC时间}.png 
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
