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
 * 访问密钥告警数量
 *
 * @method integer getID() 获取访问密钥的ID
 * @method void setID(integer $ID) 设置访问密钥的ID
 * @method string getAccessKey() 获取访问密钥
 * @method void setAccessKey(string $AccessKey) 设置访问密钥
 * @method integer getAlarmCount() 获取告警数量
 * @method void setAlarmCount(integer $AlarmCount) 设置告警数量
 * @method integer getAccessKeyStatus() 获取访问密钥状态 0 禁用 1 已启用 2 已删除
 * @method void setAccessKeyStatus(integer $AccessKeyStatus) 设置访问密钥状态 0 禁用 1 已启用 2 已删除
 * @method string getAccessKeyCreateTime() 获取AK创建时间
 * @method void setAccessKeyCreateTime(string $AccessKeyCreateTime) 设置AK创建时间
 * @method string getLastAccessTime() 获取AK最后使用时间，从未使用过则返回“-”
 * @method void setLastAccessTime(string $LastAccessTime) 设置AK最后使用时间，从未使用过则返回“-”
 */
class AccessKeyAlarmCount extends AbstractModel
{
    /**
     * @var integer 访问密钥的ID
     */
    public $ID;

    /**
     * @var string 访问密钥
     */
    public $AccessKey;

    /**
     * @var integer 告警数量
     */
    public $AlarmCount;

    /**
     * @var integer 访问密钥状态 0 禁用 1 已启用 2 已删除
     */
    public $AccessKeyStatus;

    /**
     * @var string AK创建时间
     */
    public $AccessKeyCreateTime;

    /**
     * @var string AK最后使用时间，从未使用过则返回“-”
     */
    public $LastAccessTime;

    /**
     * @param integer $ID 访问密钥的ID
     * @param string $AccessKey 访问密钥
     * @param integer $AlarmCount 告警数量
     * @param integer $AccessKeyStatus 访问密钥状态 0 禁用 1 已启用 2 已删除
     * @param string $AccessKeyCreateTime AK创建时间
     * @param string $LastAccessTime AK最后使用时间，从未使用过则返回“-”
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("AlarmCount",$param) and $param["AlarmCount"] !== null) {
            $this->AlarmCount = $param["AlarmCount"];
        }

        if (array_key_exists("AccessKeyStatus",$param) and $param["AccessKeyStatus"] !== null) {
            $this->AccessKeyStatus = $param["AccessKeyStatus"];
        }

        if (array_key_exists("AccessKeyCreateTime",$param) and $param["AccessKeyCreateTime"] !== null) {
            $this->AccessKeyCreateTime = $param["AccessKeyCreateTime"];
        }

        if (array_key_exists("LastAccessTime",$param) and $param["LastAccessTime"] !== null) {
            $this->LastAccessTime = $param["LastAccessTime"];
        }
    }
}
