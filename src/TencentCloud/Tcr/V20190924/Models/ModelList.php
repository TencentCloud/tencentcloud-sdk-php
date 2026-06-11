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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型详细参数
 *
 * @method string getModelName() 获取
 * @method void setModelName(string $ModelName) 设置
 * @method string getNamespaceName() 获取
 * @method void setNamespaceName(string $NamespaceName) 设置
 * @method string getLatestVersion() 获取
 * @method void setLatestVersion(string $LatestVersion) 设置
 * @method string getKind() 获取
 * @method void setKind(string $Kind) 设置
 * @method string getImageSize() 获取
 * @method void setImageSize(string $ImageSize) 设置
 * @method string getUpdateTime() 获取
 * @method void setUpdateTime(string $UpdateTime) 设置
 * @method string getDigest() 获取
 * @method void setDigest(string $Digest) 设置
 */
class ModelList extends AbstractModel
{
    /**
     * @var string 
     */
    public $ModelName;

    /**
     * @var string 
     */
    public $NamespaceName;

    /**
     * @var string 
     */
    public $LatestVersion;

    /**
     * @var string 
     */
    public $Kind;

    /**
     * @var string 
     */
    public $ImageSize;

    /**
     * @var string 
     */
    public $UpdateTime;

    /**
     * @var string 
     */
    public $Digest;

    /**
     * @param string $ModelName 
     * @param string $NamespaceName 
     * @param string $LatestVersion 
     * @param string $Kind 
     * @param string $ImageSize 
     * @param string $UpdateTime 
     * @param string $Digest 
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
        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("LatestVersion",$param) and $param["LatestVersion"] !== null) {
            $this->LatestVersion = $param["LatestVersion"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("ImageSize",$param) and $param["ImageSize"] !== null) {
            $this->ImageSize = $param["ImageSize"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Digest",$param) and $param["Digest"] !== null) {
            $this->Digest = $param["Digest"];
        }
    }
}
