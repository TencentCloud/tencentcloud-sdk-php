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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNoPrimaryKeyTables返回参数结构体
 *
 * @method integer getNoPrimaryKeyTableCount() 获取无主键表总数。
 * @method void setNoPrimaryKeyTableCount(integer $NoPrimaryKeyTableCount) 设置无主键表总数。
 * @method integer getNoPrimaryKeyTableCountDiff() 获取与昨日扫描无主键表的差值，正数为增加，负数为减少，0为无变化。
 * @method void setNoPrimaryKeyTableCountDiff(integer $NoPrimaryKeyTableCountDiff) 设置与昨日扫描无主键表的差值，正数为增加，负数为减少，0为无变化。
 * @method integer getNoPrimaryKeyTableRecordCount() 获取记录的无主键表总数（不超过无主键表总数），可用于分页查询。
 * @method void setNoPrimaryKeyTableRecordCount(integer $NoPrimaryKeyTableRecordCount) 设置记录的无主键表总数（不超过无主键表总数），可用于分页查询。
 * @method array getNoPrimaryKeyTables() 获取无主键表列表。
 * @method void setNoPrimaryKeyTables(array $NoPrimaryKeyTables) 设置无主键表列表。
 * @method integer getTimestamp() 获取采集时间戳（秒）。
 * @method void setTimestamp(integer $Timestamp) 设置采集时间戳（秒）。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeNoPrimaryKeyTablesResponse extends AbstractModel
{
    /**
     * @var integer 无主键表总数。
     */
    public $NoPrimaryKeyTableCount;

    /**
     * @var integer 与昨日扫描无主键表的差值，正数为增加，负数为减少，0为无变化。
     */
    public $NoPrimaryKeyTableCountDiff;

    /**
     * @var integer 记录的无主键表总数（不超过无主键表总数），可用于分页查询。
     */
    public $NoPrimaryKeyTableRecordCount;

    /**
     * @var array 无主键表列表。
     */
    public $NoPrimaryKeyTables;

    /**
     * @var integer 采集时间戳（秒）。
     */
    public $Timestamp;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $NoPrimaryKeyTableCount 无主键表总数。
     * @param integer $NoPrimaryKeyTableCountDiff 与昨日扫描无主键表的差值，正数为增加，负数为减少，0为无变化。
     * @param integer $NoPrimaryKeyTableRecordCount 记录的无主键表总数（不超过无主键表总数），可用于分页查询。
     * @param array $NoPrimaryKeyTables 无主键表列表。
     * @param integer $Timestamp 采集时间戳（秒）。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("NoPrimaryKeyTableCount",$param) and $param["NoPrimaryKeyTableCount"] !== null) {
            $this->NoPrimaryKeyTableCount = $param["NoPrimaryKeyTableCount"];
        }

        if (array_key_exists("NoPrimaryKeyTableCountDiff",$param) and $param["NoPrimaryKeyTableCountDiff"] !== null) {
            $this->NoPrimaryKeyTableCountDiff = $param["NoPrimaryKeyTableCountDiff"];
        }

        if (array_key_exists("NoPrimaryKeyTableRecordCount",$param) and $param["NoPrimaryKeyTableRecordCount"] !== null) {
            $this->NoPrimaryKeyTableRecordCount = $param["NoPrimaryKeyTableRecordCount"];
        }

        if (array_key_exists("NoPrimaryKeyTables",$param) and $param["NoPrimaryKeyTables"] !== null) {
            $this->NoPrimaryKeyTables = [];
            foreach ($param["NoPrimaryKeyTables"] as $key => $value){
                $obj = new Table();
                $obj->deserialize($value);
                array_push($this->NoPrimaryKeyTables, $obj);
            }
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
