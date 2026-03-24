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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * aigc cos信息，存储用户请求时填写的cos信息，存放结果
 *
 * @method string getRegion() 获取<p>cos所在地域</p>
 * @method void setRegion(string $Region) 设置<p>cos所在地域</p>
 * @method string getBucket() 获取<p>cos桶信息</p>
 * @method void setBucket(string $Bucket) 设置<p>cos桶信息</p>
 * @method string getDir() 获取<p>任务存放cos的目录</p>
 * @method void setDir(string $Dir) 设置<p>任务存放cos的目录</p>
 * @method string getTmpSecretId() 获取<p>临时Cos SecretId</p>
 * @method void setTmpSecretId(string $TmpSecretId) 设置<p>临时Cos SecretId</p>
 * @method string getTmpSecretKey() 获取<p>临时Cos SecretKey</p>
 * @method void setTmpSecretKey(string $TmpSecretKey) 设置<p>临时Cos SecretKey</p>
 * @method string getToken() 获取<p>临时token</p>
 * @method void setToken(string $Token) 设置<p>临时token</p>
 */
class VideoRedrawCosInfo extends AbstractModel
{
    /**
     * @var string <p>cos所在地域</p>
     */
    public $Region;

    /**
     * @var string <p>cos桶信息</p>
     */
    public $Bucket;

    /**
     * @var string <p>任务存放cos的目录</p>
     */
    public $Dir;

    /**
     * @var string <p>临时Cos SecretId</p>
     */
    public $TmpSecretId;

    /**
     * @var string <p>临时Cos SecretKey</p>
     */
    public $TmpSecretKey;

    /**
     * @var string <p>临时token</p>
     */
    public $Token;

    /**
     * @param string $Region <p>cos所在地域</p>
     * @param string $Bucket <p>cos桶信息</p>
     * @param string $Dir <p>任务存放cos的目录</p>
     * @param string $TmpSecretId <p>临时Cos SecretId</p>
     * @param string $TmpSecretKey <p>临时Cos SecretKey</p>
     * @param string $Token <p>临时token</p>
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Dir",$param) and $param["Dir"] !== null) {
            $this->Dir = $param["Dir"];
        }

        if (array_key_exists("TmpSecretId",$param) and $param["TmpSecretId"] !== null) {
            $this->TmpSecretId = $param["TmpSecretId"];
        }

        if (array_key_exists("TmpSecretKey",$param) and $param["TmpSecretKey"] !== null) {
            $this->TmpSecretKey = $param["TmpSecretKey"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }
    }
}
