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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * COS元数据信息
 *
 * @method string getBucket() 获取COS桶名
 * @method void setBucket(string $Bucket) 设置COS桶名
 * @method string getCreateTime() 获取COS桶创建时间
 * @method void setCreateTime(string $CreateTime) 设置COS桶创建时间
 * @method integer getValid() 获取1 -- 有效，0 -- 无效，资源可能已被删除。
 * @method void setValid(integer $Valid) 设置1 -- 有效，0 -- 无效，资源可能已被删除。
 * @method string getResourceId() 获取DSPA为COS资源生成的资源ID
 * @method void setResourceId(string $ResourceId) 设置DSPA为COS资源生成的资源ID
 * @method string getResourceRegion() 获取COS资源所处的地域
 * @method void setResourceRegion(string $ResourceRegion) 设置COS资源所处的地域
 * @method string getBindStatus() 获取COS桶绑定状态
 * @method void setBindStatus(string $BindStatus) 设置COS桶绑定状态
 * @method float getStorage() 获取COS桶存储量
 * @method void setStorage(float $Storage) 设置COS桶存储量
 */
class DSPACosMetaDataInfo extends AbstractModel
{
    /**
     * @var string COS桶名
     */
    public $Bucket;

    /**
     * @var string COS桶创建时间
     */
    public $CreateTime;

    /**
     * @var integer 1 -- 有效，0 -- 无效，资源可能已被删除。
     */
    public $Valid;

    /**
     * @var string DSPA为COS资源生成的资源ID
     */
    public $ResourceId;

    /**
     * @var string COS资源所处的地域
     */
    public $ResourceRegion;

    /**
     * @var string COS桶绑定状态
     */
    public $BindStatus;

    /**
     * @var float COS桶存储量
     */
    public $Storage;

    /**
     * @param string $Bucket COS桶名
     * @param string $CreateTime COS桶创建时间
     * @param integer $Valid 1 -- 有效，0 -- 无效，资源可能已被删除。
     * @param string $ResourceId DSPA为COS资源生成的资源ID
     * @param string $ResourceRegion COS资源所处的地域
     * @param string $BindStatus COS桶绑定状态
     * @param float $Storage COS桶存储量
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Valid",$param) and $param["Valid"] !== null) {
            $this->Valid = $param["Valid"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("BindStatus",$param) and $param["BindStatus"] !== null) {
            $this->BindStatus = $param["BindStatus"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }
    }
}
