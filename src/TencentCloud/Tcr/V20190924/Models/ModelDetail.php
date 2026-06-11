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
 * 模型详情
 *
 * @method string getModelName() 获取
 * @method void setModelName(string $ModelName) 设置
 * @method string getNamespaceName() 获取
 * @method void setNamespaceName(string $NamespaceName) 设置
 * @method string getVersion() 获取
 * @method void setVersion(string $Version) 设置
 * @method string getDigest() 获取
 * @method void setDigest(string $Digest) 设置
 * @method integer getSize() 获取
 * @method void setSize(integer $Size) 设置
 * @method string getFramework() 获取
 * @method void setFramework(string $Framework) 设置
 * @method string getPrecision() 获取
 * @method void setPrecision(string $Precision) 设置
 * @method string getFileFormat() 获取
 * @method void setFileFormat(string $FileFormat) 设置
 * @method string getParamSize() 获取
 * @method void setParamSize(string $ParamSize) 设置
 * @method string getFamily() 获取
 * @method void setFamily(string $Family) 设置
 * @method boolean getIsRecommended() 获取
 * @method void setIsRecommended(boolean $IsRecommended) 设置
 * @method string getPushTime() 获取
 * @method void setPushTime(string $PushTime) 设置
 */
class ModelDetail extends AbstractModel
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
    public $Version;

    /**
     * @var string 
     */
    public $Digest;

    /**
     * @var integer 
     */
    public $Size;

    /**
     * @var string 
     */
    public $Framework;

    /**
     * @var string 
     */
    public $Precision;

    /**
     * @var string 
     */
    public $FileFormat;

    /**
     * @var string 
     */
    public $ParamSize;

    /**
     * @var string 
     */
    public $Family;

    /**
     * @var boolean 
     */
    public $IsRecommended;

    /**
     * @var string 
     */
    public $PushTime;

    /**
     * @param string $ModelName 
     * @param string $NamespaceName 
     * @param string $Version 
     * @param string $Digest 
     * @param integer $Size 
     * @param string $Framework 
     * @param string $Precision 
     * @param string $FileFormat 
     * @param string $ParamSize 
     * @param string $Family 
     * @param boolean $IsRecommended 
     * @param string $PushTime 
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

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Digest",$param) and $param["Digest"] !== null) {
            $this->Digest = $param["Digest"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Framework",$param) and $param["Framework"] !== null) {
            $this->Framework = $param["Framework"];
        }

        if (array_key_exists("Precision",$param) and $param["Precision"] !== null) {
            $this->Precision = $param["Precision"];
        }

        if (array_key_exists("FileFormat",$param) and $param["FileFormat"] !== null) {
            $this->FileFormat = $param["FileFormat"];
        }

        if (array_key_exists("ParamSize",$param) and $param["ParamSize"] !== null) {
            $this->ParamSize = $param["ParamSize"];
        }

        if (array_key_exists("Family",$param) and $param["Family"] !== null) {
            $this->Family = $param["Family"];
        }

        if (array_key_exists("IsRecommended",$param) and $param["IsRecommended"] !== null) {
            $this->IsRecommended = $param["IsRecommended"];
        }

        if (array_key_exists("PushTime",$param) and $param["PushTime"] !== null) {
            $this->PushTime = $param["PushTime"];
        }
    }
}
