<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRollbackRangeTime请求参数结构体
 *
 * @method array getInstanceIds() 获取实例 ID 列表，单个实例 ID 的格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。
 * @method void setInstanceIds(array $InstanceIds) 设置实例 ID 列表，单个实例 ID 的格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。
 * @method string getIsRemoteZone() 获取克隆实例与源实例是否在异地可用区，是:"true"，否:"false"
 * @method void setIsRemoteZone(string $IsRemoteZone) 设置克隆实例与源实例是否在异地可用区，是:"true"，否:"false"
 * @method string getBackupRegion() 获取克隆实例与源实例不在同一地域时需填写克隆实例所在地域，例："ap-guangzhou"
 * @method void setBackupRegion(string $BackupRegion) 设置克隆实例与源实例不在同一地域时需填写克隆实例所在地域，例："ap-guangzhou"
 */
class DescribeRollbackRangeTimeRequest extends AbstractModel
{
    /**
     * @var array 实例 ID 列表，单个实例 ID 的格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。
     */
    public $InstanceIds;

    /**
     * @var string 克隆实例与源实例是否在异地可用区，是:"true"，否:"false"
     */
    public $IsRemoteZone;

    /**
     * @var string 克隆实例与源实例不在同一地域时需填写克隆实例所在地域，例："ap-guangzhou"
     */
    public $BackupRegion;

    /**
     * @param array $InstanceIds 实例 ID 列表，单个实例 ID 的格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。
     * @param string $IsRemoteZone 克隆实例与源实例是否在异地可用区，是:"true"，否:"false"
     * @param string $BackupRegion 克隆实例与源实例不在同一地域时需填写克隆实例所在地域，例："ap-guangzhou"
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("IsRemoteZone",$param) and $param["IsRemoteZone"] !== null) {
            $this->IsRemoteZone = $param["IsRemoteZone"];
        }

        if (array_key_exists("BackupRegion",$param) and $param["BackupRegion"] !== null) {
            $this->BackupRegion = $param["BackupRegion"];
        }
    }
}
