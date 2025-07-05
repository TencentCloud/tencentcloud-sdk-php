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
 * @method string getDealName() 获取订单号
 * @method void setDealName(string $DealName) 设置订单号
 * @method integer getLicenseType() 获取可选参数: 1专业版-包年包月 , 2 旗舰版-包年包月
 * @method void setLicenseType(integer $LicenseType) 设置可选参数: 1专业版-包年包月 , 2 旗舰版-包年包月
 * @method array getQuuidList() 获取机器列表
 * @method void setQuuidList(array $QuuidList) 设置机器列表
 * @method boolean getIsAll() 获取是否全选机器
 * @method void setIsAll(boolean $IsAll) 设置是否全选机器
 */
class CreateBuyBindTaskRequest extends AbstractModel
{
    /**
     * @var string 订单号
     */
    public $DealName;

    /**
     * @var integer 可选参数: 1专业版-包年包月 , 2 旗舰版-包年包月
     */
    public $LicenseType;

    /**
     * @var array 机器列表
     */
    public $QuuidList;

    /**
     * @var boolean 是否全选机器
     */
    public $IsAll;

    /**
     * @param string $DealName 订单号
     * @param integer $LicenseType 可选参数: 1专业版-包年包月 , 2 旗舰版-包年包月
     * @param array $QuuidList 机器列表
     * @param boolean $IsAll 是否全选机器
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
