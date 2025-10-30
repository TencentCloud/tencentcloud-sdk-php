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
 * @method integer getBinlogSaveDays() 获取binlog保留时间
 * @method void setBinlogSaveDays(integer $BinlogSaveDays) 设置binlog保留时间
 * @method string getBinlogCrossRegionsEnable() 获取binlog异地地域备份是否开启
 * @method void setBinlogCrossRegionsEnable(string $BinlogCrossRegionsEnable) 设置binlog异地地域备份是否开启
 * @method array getBinlogCrossRegions() 获取binlog异地地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBinlogCrossRegions(array $BinlogCrossRegions) 设置binlog异地地域
注意：此字段可能返回 null，表示取不到有效值。
 */
class BinlogConfigInfo extends AbstractModel
{
    /**
     * @var integer binlog保留时间
     */
    public $BinlogSaveDays;

    /**
     * @var string binlog异地地域备份是否开启
     */
    public $BinlogCrossRegionsEnable;

    /**
     * @var array binlog异地地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BinlogCrossRegions;

    /**
     * @param integer $BinlogSaveDays binlog保留时间
     * @param string $BinlogCrossRegionsEnable binlog异地地域备份是否开启
     * @param array $BinlogCrossRegions binlog异地地域
注意：此字段可能返回 null，表示取不到有效值。
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
    }
}
