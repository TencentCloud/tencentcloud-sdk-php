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
 * CreateVulFixTask请求参数结构体
 *
 * @method array getFixItems() 获取<p>修复项列表，每项指定一个漏洞/KB补丁及其需要修复的主机<br>入参限制：最多100项，总实例数不超过5000</p>
 * @method void setFixItems(array $FixItems) 设置<p>修复项列表，每项指定一个漏洞/KB补丁及其需要修复的主机<br>入参限制：最多100项，总实例数不超过5000</p>
 * @method integer getTimeout() 获取<p>最大修复时间<br>单位：秒<br>默认值：3600</p>
 * @method void setTimeout(integer $Timeout) 设置<p>最大修复时间<br>单位：秒<br>默认值：3600</p>
 * @method boolean getCreateSnapshot() 获取<p>是否在修复前创建磁盘快照<br>默认值：false</p>
 * @method void setCreateSnapshot(boolean $CreateSnapshot) 设置<p>是否在修复前创建磁盘快照<br>默认值：false</p>
 * @method string getSnapshotName() 获取<p>快照名称，CreateSnapshot为true时有效<br>入参限制：最长128个字符</p>
 * @method void setSnapshotName(string $SnapshotName) 设置<p>快照名称，CreateSnapshot为true时有效<br>入参限制：最长128个字符</p>
 * @method integer getSaveDays() 获取<p>快照保存天数，CreateSnapshot为true时有效</p>
 * @method void setSaveDays(integer $SaveDays) 设置<p>快照保存天数，CreateSnapshot为true时有效</p>
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 */
class CreateVulFixTaskRequest extends AbstractModel
{
    /**
     * @var array <p>修复项列表，每项指定一个漏洞/KB补丁及其需要修复的主机<br>入参限制：最多100项，总实例数不超过5000</p>
     */
    public $FixItems;

    /**
     * @var integer <p>最大修复时间<br>单位：秒<br>默认值：3600</p>
     */
    public $Timeout;

    /**
     * @var boolean <p>是否在修复前创建磁盘快照<br>默认值：false</p>
     */
    public $CreateSnapshot;

    /**
     * @var string <p>快照名称，CreateSnapshot为true时有效<br>入参限制：最长128个字符</p>
     */
    public $SnapshotName;

    /**
     * @var integer <p>快照保存天数，CreateSnapshot为true时有效</p>
     */
    public $SaveDays;

    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @param array $FixItems <p>修复项列表，每项指定一个漏洞/KB补丁及其需要修复的主机<br>入参限制：最多100项，总实例数不超过5000</p>
     * @param integer $Timeout <p>最大修复时间<br>单位：秒<br>默认值：3600</p>
     * @param boolean $CreateSnapshot <p>是否在修复前创建磁盘快照<br>默认值：false</p>
     * @param string $SnapshotName <p>快照名称，CreateSnapshot为true时有效<br>入参限制：最长128个字符</p>
     * @param integer $SaveDays <p>快照保存天数，CreateSnapshot为true时有效</p>
     * @param array $MemberId 集团账号的成员id
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
        if (array_key_exists("FixItems",$param) and $param["FixItems"] !== null) {
            $this->FixItems = [];
            foreach ($param["FixItems"] as $key => $value){
                $obj = new VulFixItem();
                $obj->deserialize($value);
                array_push($this->FixItems, $obj);
            }
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("CreateSnapshot",$param) and $param["CreateSnapshot"] !== null) {
            $this->CreateSnapshot = $param["CreateSnapshot"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("SaveDays",$param) and $param["SaveDays"] !== null) {
            $this->SaveDays = $param["SaveDays"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
