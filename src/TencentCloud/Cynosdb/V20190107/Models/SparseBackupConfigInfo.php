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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 稀疏备份策略配置信息
 *
 * @method string getOpType() 获取操作类型:add,modify,remove
 * @method void setOpType(string $OpType) 设置操作类型:add,modify,remove
 * @method string getConfigId() 获取配置 ID
 * @method void setConfigId(string $ConfigId) 设置配置 ID
 * @method string getSparsePeriodConfig() 获取周期策略类型：weekly/monthly/yearly
 * @method void setSparsePeriodConfig(string $SparsePeriodConfig) 设置周期策略类型：weekly/monthly/yearly
 * @method SparsePeriodTime getSparsePeriodTime() 获取周期时间配置
 * @method void setSparsePeriodTime(SparsePeriodTime $SparsePeriodTime) 设置周期时间配置
 * @method integer getSparseBackupSaveDays() 获取保留天数（7-7320天，最长20年）
 * @method void setSparseBackupSaveDays(integer $SparseBackupSaveDays) 设置保留天数（7-7320天，最长20年）
 */
class SparseBackupConfigInfo extends AbstractModel
{
    /**
     * @var string 操作类型:add,modify,remove
     */
    public $OpType;

    /**
     * @var string 配置 ID
     */
    public $ConfigId;

    /**
     * @var string 周期策略类型：weekly/monthly/yearly
     */
    public $SparsePeriodConfig;

    /**
     * @var SparsePeriodTime 周期时间配置
     */
    public $SparsePeriodTime;

    /**
     * @var integer 保留天数（7-7320天，最长20年）
     */
    public $SparseBackupSaveDays;

    /**
     * @param string $OpType 操作类型:add,modify,remove
     * @param string $ConfigId 配置 ID
     * @param string $SparsePeriodConfig 周期策略类型：weekly/monthly/yearly
     * @param SparsePeriodTime $SparsePeriodTime 周期时间配置
     * @param integer $SparseBackupSaveDays 保留天数（7-7320天，最长20年）
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
        if (array_key_exists("OpType",$param) and $param["OpType"] !== null) {
            $this->OpType = $param["OpType"];
        }

        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("SparsePeriodConfig",$param) and $param["SparsePeriodConfig"] !== null) {
            $this->SparsePeriodConfig = $param["SparsePeriodConfig"];
        }

        if (array_key_exists("SparsePeriodTime",$param) and $param["SparsePeriodTime"] !== null) {
            $this->SparsePeriodTime = new SparsePeriodTime();
            $this->SparsePeriodTime->deserialize($param["SparsePeriodTime"]);
        }

        if (array_key_exists("SparseBackupSaveDays",$param) and $param["SparseBackupSaveDays"] !== null) {
            $this->SparseBackupSaveDays = $param["SparseBackupSaveDays"];
        }
    }
}
