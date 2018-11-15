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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getCosEndPoint() 获取cos的end point。
 * @method void setCosEndPoint(string $CosEndPoint) 设置cos的end point。
 * @method string getSecretId() 获取cos api密钥id。
 * @method void setSecretId(string $SecretId) 设置cos api密钥id。
 * @method string getSecretKey() 获取cos api密钥。
 * @method void setSecretKey(string $SecretKey) 设置cos api密钥。
 * @method string getDrmType() 获取drm类型，widevine或fairplay
 * @method void setDrmType(string $DrmType) 设置drm类型，widevine或fairplay
 * @method DrmSourceObject getSourceObject() 获取cos上的原始视频。
 * @method void setSourceObject(DrmSourceObject $SourceObject) 设置cos上的原始视频。
 * @method array getOutputObjects() 获取加密的视频传输到cos位置。
 * @method void setOutputObjects(array $OutputObjects) 设置加密的视频传输到cos位置。
 */

/**
 *Drm加密请求信息
 */
class DrmEncryptInfo extends AbstractModel
{
    /**
     * @var string cos的end point。
     */
    public $CosEndPoint;

    /**
     * @var string cos api密钥id。
     */
    public $SecretId;

    /**
     * @var string cos api密钥。
     */
    public $SecretKey;

    /**
     * @var string drm类型，widevine或fairplay
     */
    public $DrmType;

    /**
     * @var DrmSourceObject cos上的原始视频。
     */
    public $SourceObject;

    /**
     * @var array 加密的视频传输到cos位置。
     */
    public $OutputObjects;
    /**
     * @param string $CosEndPoint cos的end point。
     * @param string $SecretId cos api密钥id。
     * @param string $SecretKey cos api密钥。
     * @param string $DrmType drm类型，widevine或fairplay
     * @param DrmSourceObject $SourceObject cos上的原始视频。
     * @param array $OutputObjects 加密的视频传输到cos位置。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("CosEndPoint",$param) and $param["CosEndPoint"] !== null) {
            $this->CosEndPoint = $param["CosEndPoint"];
        }

        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("DrmType",$param) and $param["DrmType"] !== null) {
            $this->DrmType = $param["DrmType"];
        }

        if (array_key_exists("SourceObject",$param) and $param["SourceObject"] !== null) {
            $this->SourceObject = new DrmSourceObject();
            $this->SourceObject->deserialize($param["SourceObject"]);
        }

        if (array_key_exists("OutputObjects",$param) and $param["OutputObjects"] !== null) {
            $this->OutputObjects = [];
            foreach ($param["OutputObjects"] as $key => $value){
                $obj = new DrmOutputObject();
                $obj->deserialize($value);
                array_push($this->OutputObjects, $obj);
            }
        }
    }
}
