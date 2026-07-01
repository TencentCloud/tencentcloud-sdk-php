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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLicenseBinds请求参数结构体
 *
 * @method string getResourceId() 获取<p>资源ID</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源ID</p>
 * @method integer getLicenseType() 获取<p>授权类型</p><p>枚举值：</p><ul><li>1： 专业版-包年包月</li><li>2： 旗舰版-包年包月</li></ul>
 * @method void setLicenseType(integer $LicenseType) 设置<p>授权类型</p><p>枚举值：</p><ul><li>1： 专业版-包年包月</li><li>2： 旗舰版-包年包月</li></ul>
 * @method boolean getIsAll() 获取<p>是否全部机器(当全部机器数大于当前订单可用授权数时,多余机器会被跳过)</p>
 * @method void setIsAll(boolean $IsAll) 设置<p>是否全部机器(当全部机器数大于当前订单可用授权数时,多余机器会被跳过)</p>
 * @method array getQuuidList() 获取<p>需要绑定的机器quuid列表, 当IsAll = false 时必填,反之忽略该参数. 最大长度=2000</p>
 * @method void setQuuidList(array $QuuidList) 设置<p>需要绑定的机器quuid列表, 当IsAll = false 时必填,反之忽略该参数. 最大长度=2000</p>
 */
class ModifyLicenseBindsRequest extends AbstractModel
{
    /**
     * @var string <p>资源ID</p>
     */
    public $ResourceId;

    /**
     * @var integer <p>授权类型</p><p>枚举值：</p><ul><li>1： 专业版-包年包月</li><li>2： 旗舰版-包年包月</li></ul>
     */
    public $LicenseType;

    /**
     * @var boolean <p>是否全部机器(当全部机器数大于当前订单可用授权数时,多余机器会被跳过)</p>
     */
    public $IsAll;

    /**
     * @var array <p>需要绑定的机器quuid列表, 当IsAll = false 时必填,反之忽略该参数. 最大长度=2000</p>
     */
    public $QuuidList;

    /**
     * @param string $ResourceId <p>资源ID</p>
     * @param integer $LicenseType <p>授权类型</p><p>枚举值：</p><ul><li>1： 专业版-包年包月</li><li>2： 旗舰版-包年包月</li></ul>
     * @param boolean $IsAll <p>是否全部机器(当全部机器数大于当前订单可用授权数时,多余机器会被跳过)</p>
     * @param array $QuuidList <p>需要绑定的机器quuid列表, 当IsAll = false 时必填,反之忽略该参数. 最大长度=2000</p>
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
