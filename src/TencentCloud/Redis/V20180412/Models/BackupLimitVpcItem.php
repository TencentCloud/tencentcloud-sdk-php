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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 已配置的备份文件下载地址对应的 VPC 信息。
 *
 * @method string getRegion() 获取备份文件的下载地址对应VPC 所属的地域。
 * @method void setRegion(string $Region) 设置备份文件的下载地址对应VPC 所属的地域。
 * @method array getVpcList() 获取备份文件下载地址的 VPC 列表。
 * @method void setVpcList(array $VpcList) 设置备份文件下载地址的 VPC 列表。
 */
class BackupLimitVpcItem extends AbstractModel
{
    /**
     * @var string 备份文件的下载地址对应VPC 所属的地域。
     */
    public $Region;

    /**
     * @var array 备份文件下载地址的 VPC 列表。
     */
    public $VpcList;

    /**
     * @param string $Region 备份文件的下载地址对应VPC 所属的地域。
     * @param array $VpcList 备份文件下载地址的 VPC 列表。
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VpcList",$param) and $param["VpcList"] !== null) {
            $this->VpcList = $param["VpcList"];
        }
    }
}
