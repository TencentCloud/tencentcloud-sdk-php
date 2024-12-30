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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 身份证配置信息
 *
 * @method boolean getCopyWarn() 获取默认为false
 * @method void setCopyWarn(boolean $CopyWarn) 设置默认为false
 * @method boolean getBorderCheckWarn() 获取默认为false
 * @method void setBorderCheckWarn(boolean $BorderCheckWarn) 设置默认为false
 * @method boolean getReshootWarn() 获取默认为false
 * @method void setReshootWarn(boolean $ReshootWarn) 设置默认为false
 * @method boolean getDetectPsWarn() 获取默认为false
 * @method void setDetectPsWarn(boolean $DetectPsWarn) 设置默认为false
 * @method boolean getTempIdWarn() 获取默认为false
 * @method void setTempIdWarn(boolean $TempIdWarn) 设置默认为false
 * @method boolean getInvalidDateWarn() 获取默认为false
 * @method void setInvalidDateWarn(boolean $InvalidDateWarn) 设置默认为false
 * @method boolean getReflectWarn() 获取默认为false
 * @method void setReflectWarn(boolean $ReflectWarn) 设置默认为false
 */
class IDCardConfig extends AbstractModel
{
    /**
     * @var boolean 默认为false
     */
    public $CopyWarn;

    /**
     * @var boolean 默认为false
     */
    public $BorderCheckWarn;

    /**
     * @var boolean 默认为false
     */
    public $ReshootWarn;

    /**
     * @var boolean 默认为false
     */
    public $DetectPsWarn;

    /**
     * @var boolean 默认为false
     */
    public $TempIdWarn;

    /**
     * @var boolean 默认为false
     */
    public $InvalidDateWarn;

    /**
     * @var boolean 默认为false
     */
    public $ReflectWarn;

    /**
     * @param boolean $CopyWarn 默认为false
     * @param boolean $BorderCheckWarn 默认为false
     * @param boolean $ReshootWarn 默认为false
     * @param boolean $DetectPsWarn 默认为false
     * @param boolean $TempIdWarn 默认为false
     * @param boolean $InvalidDateWarn 默认为false
     * @param boolean $ReflectWarn 默认为false
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
        if (array_key_exists("CopyWarn",$param) and $param["CopyWarn"] !== null) {
            $this->CopyWarn = $param["CopyWarn"];
        }

        if (array_key_exists("BorderCheckWarn",$param) and $param["BorderCheckWarn"] !== null) {
            $this->BorderCheckWarn = $param["BorderCheckWarn"];
        }

        if (array_key_exists("ReshootWarn",$param) and $param["ReshootWarn"] !== null) {
            $this->ReshootWarn = $param["ReshootWarn"];
        }

        if (array_key_exists("DetectPsWarn",$param) and $param["DetectPsWarn"] !== null) {
            $this->DetectPsWarn = $param["DetectPsWarn"];
        }

        if (array_key_exists("TempIdWarn",$param) and $param["TempIdWarn"] !== null) {
            $this->TempIdWarn = $param["TempIdWarn"];
        }

        if (array_key_exists("InvalidDateWarn",$param) and $param["InvalidDateWarn"] !== null) {
            $this->InvalidDateWarn = $param["InvalidDateWarn"];
        }

        if (array_key_exists("ReflectWarn",$param) and $param["ReflectWarn"] !== null) {
            $this->ReflectWarn = $param["ReflectWarn"];
        }
    }
}
