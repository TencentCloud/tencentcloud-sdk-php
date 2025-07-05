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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAlarmSmsQuota接口的配额信息
 *
 * @method string getType() 获取配额类型
 * @method void setType(string $Type) 设置配额类型
 * @method string getName() 获取配额名称
 * @method void setName(string $Name) 设置配额名称
 * @method integer getFreeLeft() 获取免费配额剩余量
 * @method void setFreeLeft(integer $FreeLeft) 设置免费配额剩余量
 * @method integer getPurchaseLeft() 获取付费配额剩余量
 * @method void setPurchaseLeft(integer $PurchaseLeft) 设置付费配额剩余量
 * @method integer getUsed() 获取已使用量
 * @method void setUsed(integer $Used) 设置已使用量
 */
class DescribeAlarmSmsQuotaQuota extends AbstractModel
{
    /**
     * @var string 配额类型
     */
    public $Type;

    /**
     * @var string 配额名称
     */
    public $Name;

    /**
     * @var integer 免费配额剩余量
     */
    public $FreeLeft;

    /**
     * @var integer 付费配额剩余量
     */
    public $PurchaseLeft;

    /**
     * @var integer 已使用量
     */
    public $Used;

    /**
     * @param string $Type 配额类型
     * @param string $Name 配额名称
     * @param integer $FreeLeft 免费配额剩余量
     * @param integer $PurchaseLeft 付费配额剩余量
     * @param integer $Used 已使用量
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("FreeLeft",$param) and $param["FreeLeft"] !== null) {
            $this->FreeLeft = $param["FreeLeft"];
        }

        if (array_key_exists("PurchaseLeft",$param) and $param["PurchaseLeft"] !== null) {
            $this->PurchaseLeft = $param["PurchaseLeft"];
        }

        if (array_key_exists("Used",$param) and $param["Used"] !== null) {
            $this->Used = $param["Used"];
        }
    }
}
