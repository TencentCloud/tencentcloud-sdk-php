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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLicenseUnBinds请求参数结构体
 *
 * @method string getResourceId() 获取资源ID
 * @method void setResourceId(string $ResourceId) 设置资源ID
 * @method integer getLicenseType() 获取授权类型
 * @method void setLicenseType(integer $LicenseType) 设置授权类型
 * @method boolean getIsAll() 获取是否全部机器(当全部机器数大于当前订单可用授权数时,多余机器会被跳过)
 * @method void setIsAll(boolean $IsAll) 设置是否全部机器(当全部机器数大于当前订单可用授权数时,多余机器会被跳过)
 * @method array getQuuidList() 获取需要绑定的机器quuid列表, 当IsAll = false 时必填,反之忽略该参数.
最大长度=100
 * @method void setQuuidList(array $QuuidList) 设置需要绑定的机器quuid列表, 当IsAll = false 时必填,反之忽略该参数.
最大长度=100
 */
class ModifyLicenseUnBindsRequest extends AbstractModel
{
    /**
     * @var string 资源ID
     */
    public $ResourceId;

    /**
     * @var integer 授权类型
     */
    public $LicenseType;

    /**
     * @var boolean 是否全部机器(当全部机器数大于当前订单可用授权数时,多余机器会被跳过)
     */
    public $IsAll;

    /**
     * @var array 需要绑定的机器quuid列表, 当IsAll = false 时必填,反之忽略该参数.
最大长度=100
     */
    public $QuuidList;

    /**
     * @param string $ResourceId 资源ID
     * @param integer $LicenseType 授权类型
     * @param boolean $IsAll 是否全部机器(当全部机器数大于当前订单可用授权数时,多余机器会被跳过)
     * @param array $QuuidList 需要绑定的机器quuid列表, 当IsAll = false 时必填,反之忽略该参数.
最大长度=100
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("IsAll",$param) and $param["IsAll"] !== null) {
            $this->IsAll = $param["IsAll"];
        }

        if (array_key_exists("QuuidList",$param) and $param["QuuidList"] !== null) {
            $this->QuuidList = $param["QuuidList"];
        }
    }
}
