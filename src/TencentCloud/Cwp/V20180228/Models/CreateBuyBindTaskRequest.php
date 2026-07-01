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
 * CreateBuyBindTask请求参数结构体
 *
 * @method string getDealName() 获取<p>订单号</p>
 * @method void setDealName(string $DealName) 设置<p>订单号</p>
 * @method integer getLicenseType() 获取<p>授权类型</p><p>枚举值：</p><ul><li>1： 专业版-包年包月</li><li>2： 旗舰版-包年包月</li></ul>
 * @method void setLicenseType(integer $LicenseType) 设置<p>授权类型</p><p>枚举值：</p><ul><li>1： 专业版-包年包月</li><li>2： 旗舰版-包年包月</li></ul>
 * @method array getQuuidList() 获取<p>机器列表</p>
 * @method void setQuuidList(array $QuuidList) 设置<p>机器列表</p>
 * @method boolean getIsAll() 获取<p>是否全选机器</p>
 * @method void setIsAll(boolean $IsAll) 设置<p>是否全选机器</p>
 */
class CreateBuyBindTaskRequest extends AbstractModel
{
    /**
     * @var string <p>订单号</p>
     */
    public $DealName;

    /**
     * @var integer <p>授权类型</p><p>枚举值：</p><ul><li>1： 专业版-包年包月</li><li>2： 旗舰版-包年包月</li></ul>
     */
    public $LicenseType;

    /**
     * @var array <p>机器列表</p>
     */
    public $QuuidList;

    /**
     * @var boolean <p>是否全选机器</p>
     */
    public $IsAll;

    /**
     * @param string $DealName <p>订单号</p>
     * @param integer $LicenseType <p>授权类型</p><p>枚举值：</p><ul><li>1： 专业版-包年包月</li><li>2： 旗舰版-包年包月</li></ul>
     * @param array $QuuidList <p>机器列表</p>
     * @param boolean $IsAll <p>是否全选机器</p>
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
        if (array_key_exists("DealName",$param) and $param["DealName"] !== null) {
            $this->DealName = $param["DealName"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("QuuidList",$param) and $param["QuuidList"] !== null) {
            $this->QuuidList = $param["QuuidList"];
        }

        if (array_key_exists("IsAll",$param) and $param["IsAll"] !== null) {
            $this->IsAll = $param["IsAll"];
        }
    }
}
