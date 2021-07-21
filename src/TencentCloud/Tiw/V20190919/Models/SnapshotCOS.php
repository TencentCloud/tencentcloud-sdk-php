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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 板书文件存储cos参数
 *
 * @method integer getUin() 获取cos所在腾讯云帐号uin
 * @method void setUin(integer $Uin) 设置cos所在腾讯云帐号uin
 * @method string getRegion() 获取cos所在地区
 * @method void setRegion(string $Region) 设置cos所在地区
 * @method string getBucket() 获取cos存储桶名称
 * @method void setBucket(string $Bucket) 设置cos存储桶名称
 * @method string getTargetDir() 获取板书文件存储根目录
 * @method void setTargetDir(string $TargetDir) 设置板书文件存储根目录
 * @method string getDomain() 获取CDN加速域名
 * @method void setDomain(string $Domain) 设置CDN加速域名
 */
class SnapshotCOS extends AbstractModel
{
    /**
     * @var integer cos所在腾讯云帐号uin
     */
    public $Uin;

    /**
     * @var string cos所在地区
     */
    public $Region;

    /**
     * @var string cos存储桶名称
     */
    public $Bucket;

    /**
     * @var string 板书文件存储根目录
     */
    public $TargetDir;

    /**
     * @var string CDN加速域名
     */
    public $Domain;

    /**
     * @param integer $Uin cos所在腾讯云帐号uin
     * @param string $Region cos所在地区
     * @param string $Bucket cos存储桶名称
     * @param string $TargetDir 板书文件存储根目录
     * @param string $Domain CDN加速域名
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("TargetDir",$param) and $param["TargetDir"] !== null) {
            $this->TargetDir = $param["TargetDir"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
