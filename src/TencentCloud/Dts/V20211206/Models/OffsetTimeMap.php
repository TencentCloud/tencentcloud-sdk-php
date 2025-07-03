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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据订阅kafka分区中checkpoint信息
 *
 * @method integer getPartitionNo() 获取kafka分区编号
 * @method void setPartitionNo(integer $PartitionNo) 设置kafka分区编号
 * @method integer getOffset() 获取kafka offset
 * @method void setOffset(integer $Offset) 设置kafka offset
 */
class OffsetTimeMap extends AbstractModel
{
    /**
     * @var integer kafka分区编号
     */
    public $PartitionNo;

    /**
     * @var integer kafka offset
     */
    public $Offset;

    /**
     * @param integer $PartitionNo kafka分区编号
     * @param integer $Offset kafka offset
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
        if (array_key_exists("PartitionNo",$param) and $param["PartitionNo"] !== null) {
            $this->PartitionNo = $param["PartitionNo"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
