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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AlterDMSPartition请求参数结构体
 *
 * @method string getCurrentDbName() 获取当前名称，变更前db名称
 * @method void setCurrentDbName(string $CurrentDbName) 设置当前名称，变更前db名称
 * @method string getCurrentTableName() 获取当前名称，变更前table名称
 * @method void setCurrentTableName(string $CurrentTableName) 设置当前名称，变更前table名称
 * @method string getCurrentValues() 获取当前名称，变更前Part名称
 * @method void setCurrentValues(string $CurrentValues) 设置当前名称，变更前Part名称
 * @method DMSPartition getPartition() 获取分区
 * @method void setPartition(DMSPartition $Partition) 设置分区
 */
class AlterDMSPartitionRequest extends AbstractModel
{
    /**
     * @var string 当前名称，变更前db名称
     */
    public $CurrentDbName;

    /**
     * @var string 当前名称，变更前table名称
     */
    public $CurrentTableName;

    /**
     * @var string 当前名称，变更前Part名称
     */
    public $CurrentValues;

    /**
     * @var DMSPartition 分区
     */
    public $Partition;

    /**
     * @param string $CurrentDbName 当前名称，变更前db名称
     * @param string $CurrentTableName 当前名称，变更前table名称
     * @param string $CurrentValues 当前名称，变更前Part名称
     * @param DMSPartition $Partition 分区
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
        if (array_key_exists("CurrentDbName",$param) and $param["CurrentDbName"] !== null) {
            $this->CurrentDbName = $param["CurrentDbName"];
        }

        if (array_key_exists("CurrentTableName",$param) and $param["CurrentTableName"] !== null) {
            $this->CurrentTableName = $param["CurrentTableName"];
        }

        if (array_key_exists("CurrentValues",$param) and $param["CurrentValues"] !== null) {
            $this->CurrentValues = $param["CurrentValues"];
        }

        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = new DMSPartition();
            $this->Partition->deserialize($param["Partition"]);
        }
    }
}
