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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量结果投递
 *
 * @method string getBucket() 获取<p>存储桶名称</p>
 * @method void setBucket(string $Bucket) 设置<p>存储桶名称</p>
 * @method string getEndpoint() 获取<p>存储服务地址</p>
 * @method void setEndpoint(string $Endpoint) 设置<p>存储服务地址</p>
 * @method string getRegion() 获取<p>存储区域</p>
 * @method void setRegion(string $Region) 设置<p>存储区域</p>
 * @method SecretInfo getSecret() 获取<p>访问凭证，需对该桶有写权限</p>
 * @method void setSecret(SecretInfo $Secret) 设置<p>访问凭证，需对该桶有写权限</p>
 * @method string getPrefix() 获取<p>输出目录前缀，不传写入桶根目录</p>
 * @method void setPrefix(string $Prefix) 设置<p>输出目录前缀，不传写入桶根目录</p>
 * @method string getNameRule() 获取<p>输出文件名规则，支持变量 $FileName、$FileType、$TaskId、$YYYY、$mm、$dd、$HH、$MM、$SS，须至少含一个变量，默认 $FileName_$TaskId.json</p>
 * @method void setNameRule(string $NameRule) 设置<p>输出文件名规则，支持变量 $FileName、$FileType、$TaskId、$YYYY、$mm、$dd、$HH、$MM、$SS，须至少含一个变量，默认 $FileName_$TaskId.json</p>
 */
class OutputStorage extends AbstractModel
{
    /**
     * @var string <p>存储桶名称</p>
     */
    public $Bucket;

    /**
     * @var string <p>存储服务地址</p>
     */
    public $Endpoint;

    /**
     * @var string <p>存储区域</p>
     */
    public $Region;

    /**
     * @var SecretInfo <p>访问凭证，需对该桶有写权限</p>
     */
    public $Secret;

    /**
     * @var string <p>输出目录前缀，不传写入桶根目录</p>
     */
    public $Prefix;

    /**
     * @var string <p>输出文件名规则，支持变量 $FileName、$FileType、$TaskId、$YYYY、$mm、$dd、$HH、$MM、$SS，须至少含一个变量，默认 $FileName_$TaskId.json</p>
     */
    public $NameRule;

    /**
     * @param string $Bucket <p>存储桶名称</p>
     * @param string $Endpoint <p>存储服务地址</p>
     * @param string $Region <p>存储区域</p>
     * @param SecretInfo $Secret <p>访问凭证，需对该桶有写权限</p>
     * @param string $Prefix <p>输出目录前缀，不传写入桶根目录</p>
     * @param string $NameRule <p>输出文件名规则，支持变量 $FileName、$FileType、$TaskId、$YYYY、$mm、$dd、$HH、$MM、$SS，须至少含一个变量，默认 $FileName_$TaskId.json</p>
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
        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Secret",$param) and $param["Secret"] !== null) {
            $this->Secret = new SecretInfo();
            $this->Secret->deserialize($param["Secret"]);
        }

        if (array_key_exists("Prefix",$param) and $param["Prefix"] !== null) {
            $this->Prefix = $param["Prefix"];
        }

        if (array_key_exists("NameRule",$param) and $param["NameRule"] !== null) {
            $this->NameRule = $param["NameRule"];
        }
    }
}
