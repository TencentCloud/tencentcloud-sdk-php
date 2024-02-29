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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddDevice请求参数结构体
 *
 * @method string getDeviceName() 获取新建设备的名称
 * @method void setDeviceName(string $DeviceName) 设置新建设备的名称
 * @method string getRemark() 获取新建设备的备注
 * @method void setRemark(string $Remark) 设置新建设备的备注
 * @method string getDataKey() 获取新建设备的base64密钥字符串，非必选，如果不填写则由系统自动生成
 * @method void setDataKey(string $DataKey) 设置新建设备的base64密钥字符串，非必选，如果不填写则由系统自动生成
 * @method boolean getEncrypted() 获取是否设置预置密钥
 * @method void setEncrypted(boolean $Encrypted) 设置是否设置预置密钥
 * @method integer getAccessScope() 获取接入环境。0：公有云网关；1：自有网关；2：公有云网关和自有网关。不填默认公有云网关。
具体含义：
公有云网关：即该设备只能接入公有云网关（就近接入）
自有网关：即该设备只能接入已经注册上线的自有网关（就近接入或固定ip接入）
公有云网关和自有网关：即该设备同时可以接入公有云网关和已经注册上线的自有网关（就近接入或固定ip接入）
 * @method void setAccessScope(integer $AccessScope) 设置接入环境。0：公有云网关；1：自有网关；2：公有云网关和自有网关。不填默认公有云网关。
具体含义：
公有云网关：即该设备只能接入公有云网关（就近接入）
自有网关：即该设备只能接入已经注册上线的自有网关（就近接入或固定ip接入）
公有云网关和自有网关：即该设备同时可以接入公有云网关和已经注册上线的自有网关（就近接入或固定ip接入）
 */
class AddDeviceRequest extends AbstractModel
{
    /**
     * @var string 新建设备的名称
     */
    public $DeviceName;

    /**
     * @var string 新建设备的备注
     */
    public $Remark;

    /**
     * @var string 新建设备的base64密钥字符串，非必选，如果不填写则由系统自动生成
     */
    public $DataKey;

    /**
     * @var boolean 是否设置预置密钥
     */
    public $Encrypted;

    /**
     * @var integer 接入环境。0：公有云网关；1：自有网关；2：公有云网关和自有网关。不填默认公有云网关。
具体含义：
公有云网关：即该设备只能接入公有云网关（就近接入）
自有网关：即该设备只能接入已经注册上线的自有网关（就近接入或固定ip接入）
公有云网关和自有网关：即该设备同时可以接入公有云网关和已经注册上线的自有网关（就近接入或固定ip接入）
     */
    public $AccessScope;

    /**
     * @param string $DeviceName 新建设备的名称
     * @param string $Remark 新建设备的备注
     * @param string $DataKey 新建设备的base64密钥字符串，非必选，如果不填写则由系统自动生成
     * @param boolean $Encrypted 是否设置预置密钥
     * @param integer $AccessScope 接入环境。0：公有云网关；1：自有网关；2：公有云网关和自有网关。不填默认公有云网关。
具体含义：
公有云网关：即该设备只能接入公有云网关（就近接入）
自有网关：即该设备只能接入已经注册上线的自有网关（就近接入或固定ip接入）
公有云网关和自有网关：即该设备同时可以接入公有云网关和已经注册上线的自有网关（就近接入或固定ip接入）
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
        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("DataKey",$param) and $param["DataKey"] !== null) {
            $this->DataKey = $param["DataKey"];
        }

        if (array_key_exists("Encrypted",$param) and $param["Encrypted"] !== null) {
            $this->Encrypted = $param["Encrypted"];
        }

        if (array_key_exists("AccessScope",$param) and $param["AccessScope"] !== null) {
            $this->AccessScope = $param["AccessScope"];
        }
    }
}
