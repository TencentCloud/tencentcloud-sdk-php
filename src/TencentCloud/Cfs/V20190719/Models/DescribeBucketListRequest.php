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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBucketList请求参数结构体
 *
 * @method string getSrcService() 获取数据源服务商。COS: 腾讯云COS，OSS: 阿里云OSS，OBS:华为云OBS
 * @method void setSrcService(string $SrcService) 设置数据源服务商。COS: 腾讯云COS，OSS: 阿里云OSS，OBS:华为云OBS
 * @method string getSrcSecretId() 获取数据源账号的SecretId

 * @method void setSrcSecretId(string $SrcSecretId) 设置数据源账号的SecretId

 * @method string getSrcSecretKey() 获取数据源账号的SecretKey
 * @method void setSrcSecretKey(string $SrcSecretKey) 设置数据源账号的SecretKey
 */
class DescribeBucketListRequest extends AbstractModel
{
    /**
     * @var string 数据源服务商。COS: 腾讯云COS，OSS: 阿里云OSS，OBS:华为云OBS
     */
    public $SrcService;

    /**
     * @var string 数据源账号的SecretId

     */
    public $SrcSecretId;

    /**
     * @var string 数据源账号的SecretKey
     */
    public $SrcSecretKey;

    /**
     * @param string $SrcService 数据源服务商。COS: 腾讯云COS，OSS: 阿里云OSS，OBS:华为云OBS
     * @param string $SrcSecretId 数据源账号的SecretId

     * @param string $SrcSecretKey 数据源账号的SecretKey
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
        if (array_key_exists("SrcService",$param) and $param["SrcService"] !== null) {
            $this->SrcService = $param["SrcService"];
        }

        if (array_key_exists("SrcSecretId",$param) and $param["SrcSecretId"] !== null) {
            $this->SrcSecretId = $param["SrcSecretId"];
        }

        if (array_key_exists("SrcSecretKey",$param) and $param["SrcSecretKey"] !== null) {
            $this->SrcSecretKey = $param["SrcSecretKey"];
        }
    }
}
