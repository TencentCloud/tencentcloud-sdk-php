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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLogs返回参数结构体
 *
 * @method array getData() 获取设备日志信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(array $Data) 设置设备日志信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取Data数组所包含的信息条数
 * @method void setTotalCount(integer $TotalCount) 设置Data数组所包含的信息条数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLogsResponse extends AbstractModel
{
    /**
     * @var array 设备日志信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @var integer Data数组所包含的信息条数
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Data 设备日志信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount Data数组所包含的信息条数
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
        if (array_key_exists('Data',$param) and $param['Data'] !== null) {
            $this->Data = [];
            foreach ($param['Data'] as $key => $value){
                $obj = new LogData();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists('TotalCount',$param) and $param['TotalCount'] !== null) {
            $this->TotalCount = $param['TotalCount'];
        }

        if (array_key_exists('RequestId',$param) and $param['RequestId'] !== null) {
            $this->RequestId = $param['RequestId'];
        }
    }
}
