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
 * @method string getType() 获取<p>配额类型</p>
 * @method void setType(string $Type) 设置<p>配额类型</p>
 * @method string getName() 获取<p>配额名称</p>
 * @method void setName(string $Name) 设置<p>配额名称</p>
 * @method integer getFreeLeft() 获取<p>免费配额剩余量</p>
 * @method void setFreeLeft(integer $FreeLeft) 设置<p>免费配额剩余量</p>
 * @method integer getPurchaseLeft() 获取<p>付费配额剩余量</p>
 * @method void setPurchaseLeft(integer $PurchaseLeft) 设置<p>付费配额剩余量</p>
 * @method integer getUsed() 获取<p>已使用量</p>
 * @method void setUsed(integer $Used) 设置<p>已使用量</p>
 */
class DescribeAlarmSmsQuotaQuota extends AbstractModel
{
    /**
     * @var string <p>配额类型</p>
     */
    public $Type;

    /**
     * @var string <p>配额名称</p>
     */
    public $Name;

    /**
     * @var integer <p>免费配额剩余量</p>
     */
    public $FreeLeft;

    /**
     * @var integer <p>付费配额剩余量</p>
     */
    public $PurchaseLeft;

    /**
     * @var integer <p>已使用量</p>
     */
    public $Used;

    /**
     * @param string $Type <p>配额类型</p>
     * @param string $Name <p>配额名称</p>
     * @param integer $FreeLeft <p>免费配额剩余量</p>
     * @param integer $PurchaseLeft <p>付费配额剩余量</p>
     * @param integer $Used <p>已使用量</p>
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
