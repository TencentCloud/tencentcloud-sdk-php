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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateApplicationInfo请求参数结构体
 *
 * @method string getMpApplicationId() 获取应用ID
 * @method void setMpApplicationId(string $MpApplicationId) 设置应用ID
 * @method string getMpApplicationName() 获取新建应用的应用名
 * @method void setMpApplicationName(string $MpApplicationName) 设置新建应用的应用名
 * @method string getRemark() 获取新建设备的备注
 * @method void setRemark(string $Remark) 设置新建设备的备注
 * @method integer getAccessScope() 获取接入环境。0：公有云网关；1：自有网关；2：公有云网关和自有网关。不填默认公有云网关。 具体含义： 公有云网关：即该设备只能接入公有云网关（就近接入） 自有网关：即该设备只能接入已经注册上线的自有网关（就近接入或固定ip接入） 公有云网关和自有网关：即该设备同时可以接入公有云网关和已经注册上线的自有网关（就近接入或固定ip接入）
 * @method void setAccessScope(integer $AccessScope) 设置接入环境。0：公有云网关；1：自有网关；2：公有云网关和自有网关。不填默认公有云网关。 具体含义： 公有云网关：即该设备只能接入公有云网关（就近接入） 自有网关：即该设备只能接入已经注册上线的自有网关（就近接入或固定ip接入） 公有云网关和自有网关：即该设备同时可以接入公有云网关和已经注册上线的自有网关（就近接入或固定ip接入）
 */
class UpdateApplicationInfoRequest extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $MpApplicationId;

    /**
     * @var string 新建应用的应用名
     */
    public $MpApplicationName;

    /**
     * @var string 新建设备的备注
     */
    public $Remark;

    /**
     * @var integer 接入环境。0：公有云网关；1：自有网关；2：公有云网关和自有网关。不填默认公有云网关。 具体含义： 公有云网关：即该设备只能接入公有云网关（就近接入） 自有网关：即该设备只能接入已经注册上线的自有网关（就近接入或固定ip接入） 公有云网关和自有网关：即该设备同时可以接入公有云网关和已经注册上线的自有网关（就近接入或固定ip接入）
     */
    public $AccessScope;

    /**
     * @param string $MpApplicationId 应用ID
     * @param string $MpApplicationName 新建应用的应用名
     * @param string $Remark 新建设备的备注
     * @param integer $AccessScope 接入环境。0：公有云网关；1：自有网关；2：公有云网关和自有网关。不填默认公有云网关。 具体含义： 公有云网关：即该设备只能接入公有云网关（就近接入） 自有网关：即该设备只能接入已经注册上线的自有网关（就近接入或固定ip接入） 公有云网关和自有网关：即该设备同时可以接入公有云网关和已经注册上线的自有网关（就近接入或固定ip接入）
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
        if (array_key_exists("MpApplicationId",$param) and $param["MpApplicationId"] !== null) {
            $this->MpApplicationId = $param["MpApplicationId"];
        }

        if (array_key_exists("MpApplicationName",$param) and $param["MpApplicationName"] !== null) {
            $this->MpApplicationName = $param["MpApplicationName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("AccessScope",$param) and $param["AccessScope"] !== null) {
            $this->AccessScope = $param["AccessScope"];
        }
    }
}
