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
 * CreateVulFix请求参数结构体
 *
 * @method array getCreateVulFixTaskQuuids() 获取漏洞对应要修复的主机列表
 * @method void setCreateVulFixTaskQuuids(array $CreateVulFixTaskQuuids) 设置漏洞对应要修复的主机列表
 * @method integer getSaveDays() 获取快照保存天数，  0 天表示不创建快照。24小时没有快照的主机必须要创建快照才能修复
 * @method void setSaveDays(integer $SaveDays) 设置快照保存天数，  0 天表示不创建快照。24小时没有快照的主机必须要创建快照才能修复
 * @method string getSnapshotName() 获取快照名称
 * @method void setSnapshotName(string $SnapshotName) 设置快照名称
 */
class CreateVulFixRequest extends AbstractModel
{
    /**
     * @var array 漏洞对应要修复的主机列表
     */
    public $CreateVulFixTaskQuuids;

    /**
     * @var integer 快照保存天数，  0 天表示不创建快照。24小时没有快照的主机必须要创建快照才能修复
     */
    public $SaveDays;

    /**
     * @var string 快照名称
     */
    public $SnapshotName;

    /**
     * @param array $CreateVulFixTaskQuuids 漏洞对应要修复的主机列表
     * @param integer $SaveDays 快照保存天数，  0 天表示不创建快照。24小时没有快照的主机必须要创建快照才能修复
     * @param string $SnapshotName 快照名称
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
        if (array_key_exists("CreateVulFixTaskQuuids",$param) and $param["CreateVulFixTaskQuuids"] !== null) {
            $this->CreateVulFixTaskQuuids = [];
            foreach ($param["CreateVulFixTaskQuuids"] as $key => $value){
                $obj = new CreateVulFixTaskQuuids();
                $obj->deserialize($value);
                array_push($this->CreateVulFixTaskQuuids, $obj);
            }
        }

        if (array_key_exists("SaveDays",$param) and $param["SaveDays"] !== null) {
            $this->SaveDays = $param["SaveDays"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }
    }
}
