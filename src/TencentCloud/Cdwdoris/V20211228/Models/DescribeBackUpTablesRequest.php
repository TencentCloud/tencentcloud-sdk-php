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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackUpTables请求参数结构体
 *
 * @method string getInstanceId() 获取集群id
 * @method void setInstanceId(string $InstanceId) 设置集群id
 * @method integer getBackupType() 获取0为默认。1时是对远端的doris进行备份，不周期，一次性。2时为cos恢复，一次性
 * @method void setBackupType(integer $BackupType) 设置0为默认。1时是对远端的doris进行备份，不周期，一次性。2时为cos恢复，一次性
 * @method DorisSourceInfo getDorisSourceInfo() 获取远端doris集群的连接信息
 * @method void setDorisSourceInfo(DorisSourceInfo $DorisSourceInfo) 设置远端doris集群的连接信息
 * @method CosSourceInfo getCosSourceInfo() 获取cos信息
 * @method void setCosSourceInfo(CosSourceInfo $CosSourceInfo) 设置cos信息
 */
class DescribeBackUpTablesRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $InstanceId;

    /**
     * @var integer 0为默认。1时是对远端的doris进行备份，不周期，一次性。2时为cos恢复，一次性
     */
    public $BackupType;

    /**
     * @var DorisSourceInfo 远端doris集群的连接信息
     */
    public $DorisSourceInfo;

    /**
     * @var CosSourceInfo cos信息
     */
    public $CosSourceInfo;

    /**
     * @param string $InstanceId 集群id
     * @param integer $BackupType 0为默认。1时是对远端的doris进行备份，不周期，一次性。2时为cos恢复，一次性
     * @param DorisSourceInfo $DorisSourceInfo 远端doris集群的连接信息
     * @param CosSourceInfo $CosSourceInfo cos信息
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("DorisSourceInfo",$param) and $param["DorisSourceInfo"] !== null) {
            $this->DorisSourceInfo = new DorisSourceInfo();
            $this->DorisSourceInfo->deserialize($param["DorisSourceInfo"]);
        }

        if (array_key_exists("CosSourceInfo",$param) and $param["CosSourceInfo"] !== null) {
            $this->CosSourceInfo = new CosSourceInfo();
            $this->CosSourceInfo->deserialize($param["CosSourceInfo"]);
        }
    }
}
