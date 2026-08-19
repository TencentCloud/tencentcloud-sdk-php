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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 未通过检测项按策略分组的统计。
 *
 * @method string getPolicyType() 获取策略类型。取值：SYSTEM（系统策略）、SELF（自定义策略）。
 * @method void setPolicyType(string $PolicyType) 设置策略类型。取值：SYSTEM（系统策略）、SELF（自定义策略）。
 * @method integer getPolicyID() 获取策略 ID。SYSTEM 策略为 0。
 * @method void setPolicyID(integer $PolicyID) 设置策略 ID。SYSTEM 策略为 0。
 * @method integer getParentCategoryID() 获取父分类 ID。SELF 策略为 0。
 * @method void setParentCategoryID(integer $ParentCategoryID) 设置父分类 ID。SELF 策略为 0。
 * @method integer getNotPassCount() 获取该策略下未通过的检测项数。
 * @method void setNotPassCount(integer $NotPassCount) 设置该策略下未通过的检测项数。
 * @method string getName() 获取策略或分类名称。SYSTEM 取父分类名称，SELF 取策略名称。
 * @method void setName(string $Name) 设置策略或分类名称。SYSTEM 取父分类名称，SELF 取策略名称。
 */
class NotPassItemStatistic extends AbstractModel
{
    /**
     * @var string 策略类型。取值：SYSTEM（系统策略）、SELF（自定义策略）。
     */
    public $PolicyType;

    /**
     * @var integer 策略 ID。SYSTEM 策略为 0。
     */
    public $PolicyID;

    /**
     * @var integer 父分类 ID。SELF 策略为 0。
     */
    public $ParentCategoryID;

    /**
     * @var integer 该策略下未通过的检测项数。
     */
    public $NotPassCount;

    /**
     * @var string 策略或分类名称。SYSTEM 取父分类名称，SELF 取策略名称。
     */
    public $Name;

    /**
     * @param string $PolicyType 策略类型。取值：SYSTEM（系统策略）、SELF（自定义策略）。
     * @param integer $PolicyID 策略 ID。SYSTEM 策略为 0。
     * @param integer $ParentCategoryID 父分类 ID。SELF 策略为 0。
     * @param integer $NotPassCount 该策略下未通过的检测项数。
     * @param string $Name 策略或分类名称。SYSTEM 取父分类名称，SELF 取策略名称。
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
        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("PolicyID",$param) and $param["PolicyID"] !== null) {
            $this->PolicyID = $param["PolicyID"];
        }

        if (array_key_exists("ParentCategoryID",$param) and $param["ParentCategoryID"] !== null) {
            $this->ParentCategoryID = $param["ParentCategoryID"];
        }

        if (array_key_exists("NotPassCount",$param) and $param["NotPassCount"] !== null) {
            $this->NotPassCount = $param["NotPassCount"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
