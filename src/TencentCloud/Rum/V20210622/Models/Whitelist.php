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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 白名单
 *
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 * @method string getInstanceID() 获取<p>实例ID</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>实例ID</p>
 * @method string getTtl() 获取<p>截止时间</p>
 * @method void setTtl(string $Ttl) 设置<p>截止时间</p>
 * @method string getID() 获取<p>白名单自增ID</p>
 * @method void setID(string $ID) 设置<p>白名单自增ID</p>
 * @method string getWhitelistUin() 获取<p>业务唯一标识</p>
 * @method void setWhitelistUin(string $WhitelistUin) 设置<p>业务唯一标识</p>
 * @method string getCreateUser() 获取<p>创建者ID</p>
 * @method void setCreateUser(string $CreateUser) 设置<p>创建者ID</p>
 * @method string getAid() 获取<p>aid标识</p>
 * @method void setAid(string $Aid) 设置<p>aid标识</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getCreateDatetime() 获取<p>白名单创建时刻。由原始time.Time同源生成带偏移RFC3339，旧CreateTime原值及十二小时显示格式保持；缺失原始时刻时省略本成员。</p>
 * @method void setCreateDatetime(string $CreateDatetime) 设置<p>白名单创建时刻。由原始time.Time同源生成带偏移RFC3339，旧CreateTime原值及十二小时显示格式保持；缺失原始时刻时省略本成员。</p>
 */
class Whitelist extends AbstractModel
{
    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceID;

    /**
     * @var string <p>截止时间</p>
     */
    public $Ttl;

    /**
     * @var string <p>白名单自增ID</p>
     */
    public $ID;

    /**
     * @var string <p>业务唯一标识</p>
     */
    public $WhitelistUin;

    /**
     * @var string <p>创建者ID</p>
     */
    public $CreateUser;

    /**
     * @var string <p>aid标识</p>
     */
    public $Aid;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>白名单创建时刻。由原始time.Time同源生成带偏移RFC3339，旧CreateTime原值及十二小时显示格式保持；缺失原始时刻时省略本成员。</p>
     */
    public $CreateDatetime;

    /**
     * @param string $Remark <p>备注</p>
     * @param string $InstanceID <p>实例ID</p>
     * @param string $Ttl <p>截止时间</p>
     * @param string $ID <p>白名单自增ID</p>
     * @param string $WhitelistUin <p>业务唯一标识</p>
     * @param string $CreateUser <p>创建者ID</p>
     * @param string $Aid <p>aid标识</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $CreateDatetime <p>白名单创建时刻。由原始time.Time同源生成带偏移RFC3339，旧CreateTime原值及十二小时显示格式保持；缺失原始时刻时省略本成员。</p>
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
        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("Ttl",$param) and $param["Ttl"] !== null) {
            $this->Ttl = $param["Ttl"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("WhitelistUin",$param) and $param["WhitelistUin"] !== null) {
            $this->WhitelistUin = $param["WhitelistUin"];
        }

        if (array_key_exists("CreateUser",$param) and $param["CreateUser"] !== null) {
            $this->CreateUser = $param["CreateUser"];
        }

        if (array_key_exists("Aid",$param) and $param["Aid"] !== null) {
            $this->Aid = $param["Aid"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CreateDatetime",$param) and $param["CreateDatetime"] !== null) {
            $this->CreateDatetime = $param["CreateDatetime"];
        }
    }
}
