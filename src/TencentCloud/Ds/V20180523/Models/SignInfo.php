<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Ds\V20180523\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getAccountResId() 获取账户ID
 * @method void setAccountResId(string $AccountResId) 设置账户ID
 * @method string getAuthorizationTime() 获取授权时间，格式为年月日时分秒，例20160801095509
 * @method void setAuthorizationTime(string $AuthorizationTime) 设置授权时间，格式为年月日时分秒，例20160801095509
 * @method string getLocation() 获取授权IP地址
 * @method void setLocation(string $Location) 设置授权IP地址
 * @method string getSealId() 获取签章ID
 * @method void setSealId(string $SealId) 设置签章ID
 * @method string getImageData() 获取签名图片，优先级比SealId高
 * @method void setImageData(string $ImageData) 设置签名图片，优先级比SealId高
 * @method integer getCertType() 获取默认值：1  表示RSA证书， 2 表示国密证书， 参数不传时默认为1
 * @method void setCertType(integer $CertType) 设置默认值：1  表示RSA证书， 2 表示国密证书， 参数不传时默认为1
 */

/**
 *签署人信息
 */
class SignInfo extends AbstractModel
{
    /**
     * @var string 账户ID
     */
    public $AccountResId;

    /**
     * @var string 授权时间，格式为年月日时分秒，例20160801095509
     */
    public $AuthorizationTime;

    /**
     * @var string 授权IP地址
     */
    public $Location;

    /**
     * @var string 签章ID
     */
    public $SealId;

    /**
     * @var string 签名图片，优先级比SealId高
     */
    public $ImageData;

    /**
     * @var integer 默认值：1  表示RSA证书， 2 表示国密证书， 参数不传时默认为1
     */
    public $CertType;
    /**
     * @param string $AccountResId 账户ID
     * @param string $AuthorizationTime 授权时间，格式为年月日时分秒，例20160801095509
     * @param string $Location 授权IP地址
     * @param string $SealId 签章ID
     * @param string $ImageData 签名图片，优先级比SealId高
     * @param integer $CertType 默认值：1  表示RSA证书， 2 表示国密证书， 参数不传时默认为1
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
        if (array_key_exists("AccountResId",$param) and $param["AccountResId"] !== null) {
            $this->AccountResId = $param["AccountResId"];
        }

        if (array_key_exists("AuthorizationTime",$param) and $param["AuthorizationTime"] !== null) {
            $this->AuthorizationTime = $param["AuthorizationTime"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("SealId",$param) and $param["SealId"] !== null) {
            $this->SealId = $param["SealId"];
        }

        if (array_key_exists("ImageData",$param) and $param["ImageData"] !== null) {
            $this->ImageData = $param["ImageData"];
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }
    }
}
