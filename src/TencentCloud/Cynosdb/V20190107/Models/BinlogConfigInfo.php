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
 * binlog配置信息
 *
 * @method integer getBinlogSaveDays() 获取<p>binlog保留时间</p>
 * @method void setBinlogSaveDays(integer $BinlogSaveDays) 设置<p>binlog保留时间</p>
 * @method string getBinlogCrossRegionsEnable() 获取<p>binlog异地地域备份是否开启</p>
 * @method void setBinlogCrossRegionsEnable(string $BinlogCrossRegionsEnable) 设置<p>binlog异地地域备份是否开启</p>
 * @method array getBinlogCrossRegions() 获取<p>binlog异地地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBinlogCrossRegions(array $BinlogCrossRegions) 设置<p>binlog异地地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBinlogCrossRegionSaveDays() 获取<p>跨地域备份保留时间</p><p>单位：天</p>
 * @method void setBinlogCrossRegionSaveDays(integer $BinlogCrossRegionSaveDays) 设置<p>跨地域备份保留时间</p><p>单位：天</p>
 * @method array getAutoCopyVaults() 获取<p>保险箱信息</p>
 * @method void setAutoCopyVaults(array $AutoCopyVaults) 设置<p>保险箱信息</p>
 */
class BinlogConfigInfo extends AbstractModel
{
    /**
     * @var integer <p>binlog保留时间</p>
     */
    public $BinlogSaveDays;

    /**
     * @var string <p>binlog异地地域备份是否开启</p>
     */
    public $BinlogCrossRegionsEnable;

    /**
     * @var array <p>binlog异地地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BinlogCrossRegions;

    /**
     * @var integer <p>跨地域备份保留时间</p><p>单位：天</p>
     */
    public $BinlogCrossRegionSaveDays;

    /**
     * @var array <p>保险箱信息</p>
     */
    public $AutoCopyVaults;

    /**
     * @param integer $BinlogSaveDays <p>binlog保留时间</p>
     * @param string $BinlogCrossRegionsEnable <p>binlog异地地域备份是否开启</p>
     * @param array $BinlogCrossRegions <p>binlog异地地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BinlogCrossRegionSaveDays <p>跨地域备份保留时间</p><p>单位：天</p>
     * @param array $AutoCopyVaults <p>保险箱信息</p>
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
        if (array_key_exists("BinlogSaveDays",$param) and $param["BinlogSaveDays"] !== null) {
            $this->BinlogSaveDays = $param["BinlogSaveDays"];
        }

        if (array_key_exists("BinlogCrossRegionsEnable",$param) and $param["BinlogCrossRegionsEnable"] !== null) {
            $this->BinlogCrossRegionsEnable = $param["BinlogCrossRegionsEnable"];
        }

        if (array_key_exists("BinlogCrossRegions",$param) and $param["BinlogCrossRegions"] !== null) {
            $this->BinlogCrossRegions = $param["BinlogCrossRegions"];
        }

        if (array_key_exists("BinlogCrossRegionSaveDays",$param) and $param["BinlogCrossRegionSaveDays"] !== null) {
            $this->BinlogCrossRegionSaveDays = $param["BinlogCrossRegionSaveDays"];
        }

        if (array_key_exists("AutoCopyVaults",$param) and $param["AutoCopyVaults"] !== null) {
            $this->AutoCopyVaults = [];
            foreach ($param["AutoCopyVaults"] as $key => $value){
                $obj = new CreateBackupVaultItem();
                $obj->deserialize($value);
                array_push($this->AutoCopyVaults, $obj);
            }
        }
    }
}
