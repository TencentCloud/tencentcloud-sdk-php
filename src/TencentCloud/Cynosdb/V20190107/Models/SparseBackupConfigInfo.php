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
 * @method string getOpType() 获取<p>操作类型:add,modify,remove</p>
 * @method void setOpType(string $OpType) 设置<p>操作类型:add,modify,remove</p>
 * @method string getConfigId() 获取<p>配置 ID</p>
 * @method void setConfigId(string $ConfigId) 设置<p>配置 ID</p>
 * @method string getSparsePeriodConfig() 获取<p>周期策略类型：weekly/monthly/yearly</p>
 * @method void setSparsePeriodConfig(string $SparsePeriodConfig) 设置<p>周期策略类型：weekly/monthly/yearly</p>
 * @method SparsePeriodTime getSparsePeriodTime() 获取<p>周期时间配置</p>
 * @method void setSparsePeriodTime(SparsePeriodTime $SparsePeriodTime) 设置<p>周期时间配置</p>
 * @method integer getSparseBackupSaveDays() 获取<p>保留天数（7-7320天，最长20年）</p>
 * @method void setSparseBackupSaveDays(integer $SparseBackupSaveDays) 设置<p>保留天数（7-7320天，最长20年）</p>
 */
class SparseBackupConfigInfo extends AbstractModel
{
    /**
     * @var string <p>操作类型:add,modify,remove</p>
     */
    public $OpType;

    /**
     * @var string <p>配置 ID</p>
     */
    public $ConfigId;

    /**
     * @var string <p>周期策略类型：weekly/monthly/yearly</p>
     */
    public $SparsePeriodConfig;

    /**
     * @var SparsePeriodTime <p>周期时间配置</p>
     */
    public $SparsePeriodTime;

    /**
     * @var integer <p>保留天数（7-7320天，最长20年）</p>
     */
    public $SparseBackupSaveDays;

    /**
     * @param string $OpType <p>操作类型:add,modify,remove</p>
     * @param string $ConfigId <p>配置 ID</p>
     * @param string $SparsePeriodConfig <p>周期策略类型：weekly/monthly/yearly</p>
     * @param SparsePeriodTime $SparsePeriodTime <p>周期时间配置</p>
     * @param integer $SparseBackupSaveDays <p>保留天数（7-7320天，最长20年）</p>
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
