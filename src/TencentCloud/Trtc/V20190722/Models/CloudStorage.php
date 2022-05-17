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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 第三方云存储的账号信息。
 *
 * @method integer getVendor() 获取第三方云储存的供应商:
0：腾讯云存储 COS，暂不支持其他家。
 * @method void setVendor(integer $Vendor) 设置第三方云储存的供应商:
0：腾讯云存储 COS，暂不支持其他家。
 * @method string getRegion() 获取第三方云存储的地域信息。
 * @method void setRegion(string $Region) 设置第三方云存储的地域信息。
 * @method string getBucket() 获取第三方存储桶信息。
 * @method void setBucket(string $Bucket) 设置第三方存储桶信息。
 * @method string getAccessKey() 获取第三方存储的access_key账号信息。
 * @method void setAccessKey(string $AccessKey) 设置第三方存储的access_key账号信息。
 * @method string getSecretKey() 获取第三方存储的secret_key账号信息。
 * @method void setSecretKey(string $SecretKey) 设置第三方存储的secret_key账号信息。
 * @method array getFileNamePrefix() 获取第三方云存储bucket 的指定位置，由字符串数组组成。合法的字符串范围a~z,A~Z,0~9,'_'和'-'，举个例子，录制文件xxx.m3u8在 ["prefix1", "prefix2"]作用下，会变成prefix1/prefix2/TaskId/xxx.m3u8。
 * @method void setFileNamePrefix(array $FileNamePrefix) 设置第三方云存储bucket 的指定位置，由字符串数组组成。合法的字符串范围a~z,A~Z,0~9,'_'和'-'，举个例子，录制文件xxx.m3u8在 ["prefix1", "prefix2"]作用下，会变成prefix1/prefix2/TaskId/xxx.m3u8。
 */
class CloudStorage extends AbstractModel
{
    /**
     * @var integer 第三方云储存的供应商:
0：腾讯云存储 COS，暂不支持其他家。
     */
    public $Vendor;

    /**
     * @var string 第三方云存储的地域信息。
     */
    public $Region;

    /**
     * @var string 第三方存储桶信息。
     */
    public $Bucket;

    /**
     * @var string 第三方存储的access_key账号信息。
     */
    public $AccessKey;

    /**
     * @var string 第三方存储的secret_key账号信息。
     */
    public $SecretKey;

    /**
     * @var array 第三方云存储bucket 的指定位置，由字符串数组组成。合法的字符串范围a~z,A~Z,0~9,'_'和'-'，举个例子，录制文件xxx.m3u8在 ["prefix1", "prefix2"]作用下，会变成prefix1/prefix2/TaskId/xxx.m3u8。
     */
    public $FileNamePrefix;

    /**
     * @param integer $Vendor 第三方云储存的供应商:
0：腾讯云存储 COS，暂不支持其他家。
     * @param string $Region 第三方云存储的地域信息。
     * @param string $Bucket 第三方存储桶信息。
     * @param string $AccessKey 第三方存储的access_key账号信息。
     * @param string $SecretKey 第三方存储的secret_key账号信息。
     * @param array $FileNamePrefix 第三方云存储bucket 的指定位置，由字符串数组组成。合法的字符串范围a~z,A~Z,0~9,'_'和'-'，举个例子，录制文件xxx.m3u8在 ["prefix1", "prefix2"]作用下，会变成prefix1/prefix2/TaskId/xxx.m3u8。
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
